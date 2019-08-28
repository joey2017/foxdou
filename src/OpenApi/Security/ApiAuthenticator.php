<?php
namespace App\OpenApi\Security;

use App\Common\Model\OpenPlatform\App;
use App\Common\Model\User\User;
use App\OpenApi\Api\NotifyHandlerInterface;
use App\OpenApi\ApiContext;
use App\OpenApi\Api\ApiHandlerMap;
use App\OpenApi\ApiSystemError;
use App\OpenApi\Form\GenericApiForm;
use App\OpenApi\Payment\PaymentHandlerMap;
use App\OpenApi\Service\AppManager;
use Psr\Log\LoggerInterface;
use Redis;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;
use Symfony\Contracts\Service\ServiceSubscriberInterface;
use Symfony\Contracts\Service\ServiceSubscriberTrait;

class ApiAuthenticator extends AbstractGuardAuthenticator implements ServiceSubscriberInterface {
    use ServiceSubscriberTrait;

    const TIMESTAMP_PERIOD = 60 * 5;

    protected $redis;
    public function __construct(Redis $redisDefaultClient) {
        $this->redis = $redisDefaultClient;
    }

    /**
     * @return array
     * @throws \ReflectionException
     */
    public static function getSubscribedServices(): array
    {
        static $services;

        if (null !== $services) {
            return $services;
        }

        $services = \is_callable(array('parent', __FUNCTION__)) ? parent::getSubscribedServices() : array();

        foreach ((new \ReflectionClass(static::class))->getMethods() as $method) {
            if ($method->isStatic() || $method->isAbstract() || $method->isGenerator() || $method->isInternal() || $method->getNumberOfRequiredParameters()) {
                continue;
            }

            // if (static::class === $method->getDeclaringClass()->name && ($returnType = $method->getReturnType()) && !$returnType->isBuiltin()) {
            if (($returnType = $method->getReturnType()) && !$returnType->isBuiltin()) {
                $services[$method->getDeclaringClass()->name.'::'.$method->name] = '?'.$returnType->getName();
            }
        }

        foreach (ApiHandlerMap::HANDLERS as $handlerClass) {
            $services[$handlerClass] = '?' . $handlerClass;
        }

        foreach (PaymentHandlerMap::HANDLERS as $paymentHandlerClass) {
            $services[$paymentHandlerClass] = '?' . $paymentHandlerClass;
        }

        return $services;
    }

    protected function appManager(): AppManager {
        return $this->container->get(__METHOD__);
    }
    // protected function form(): GenericApiForm {
    //     return $this->container->get(__METHOD__);
    // }
    protected function redis(): Redis {
        return $this->redis;
    }
    protected function parameters(): ParameterBagInterface {
        return $this->container->get(__METHOD__);
    }
    protected function logger(): LoggerInterface {
        return $this->container->get(__METHOD__);
    }
    protected function isDebug() {
        return $this->parameters()->get('kernel.debug');
    }

    /**
     * Called on every request to decide if this authenticator should be
     * used for the request. Returning false will cause this authenticator
     * to be skipped.
     */
    public function supports(Request $request) {
        return (bool)$request->get('app_id');
    }

    /**
     * Called on every request. Return whatever credentials you want to
     * be passed to getUser() as $credentials.
     */
    public function getCredentials(Request $request) {
        $params = $request->isMethod(Request::METHOD_GET) ? $request->query : $request->request;
        return [$params, $request];
    }

    private function error($errorCode, $format = 'json', $errors = []) {
        $errorMsg = ApiSystemError::ERROR_CODES[$errorCode] ?? ApiSystemError::ERROR_CODES[ApiSystemError::GENERIC_ERROR];

        $response = ['msg' => $errorMsg, 'code' => $errorCode, 'error_code' => $errorCode, 'time' => date('Y-m-d H:i:s')];
        if($this->isDebug()) {
            $response['errors'] = $errors;
        }

        throw new ApiAuthenticationException('API请求失败', $response);
    }

    private function verifyRateLimit(App $app){
        $exceed = false;
        if($app->status === 3){
            $key = "api_rate_limiter:debug:{$app->id}";
            $usedNum = $this->redis()->get($key);
            if($usedNum !== null && $usedNum >= 50){
                $exceed = true;
            }

            $this->redis()->incr($key);
            $this->redis()->expire($key, 86400);
        }

        if($exceed) {
            $this->error(ApiSystemError::RATE_LIMIT_EXCEED);
        }

        // $app_id = $app->id;
        // $pay_temp=json_decode($app->pay_template,true);
        // $limitTime = 0;
        // $limitCount = 0;
        // $cache_key=$app_id.'AppRequestApiLimit';
        // $data=$this->redis()->get($cache_key);
        // if(self::$interface['limit_ci']!=0 && self::$interface['limit_miao']!=0){
        //     $limitTime=self::$interface['limit_miao'];
        //     $limitCount=self::$interface['limit_ci'];
        // }else if(self::$app['pay_type']==2 || self::$app['pay_type']==4){
        //     $limitTime=$pay_temp['pinlv_miao'];
        //     $limitCount=$pay_temp['pinlv_ci'];
        // }else if(self::$app['pay_type']==5){
        //     if(RequestApiLogOpen::find()->where(['app_id'=>$app_id,'interface_id'=>self::$interface['id'],'status'=>1])->andWhere(['between', 'addtime', strtotime(date("Y-m-d")), time()])->count() >= $pay_temp['ci']){
        //         return false;
        //     }
        //     $limitTime=$pay_temp['pinlv_miao'];
        //     $limitCount=$pay_temp['pinlv_ci'];
        // }
        // if($limitTime==0 || $limitCount==0 ){
        //     return true;
        // }
        // if(!$data){
        //     Yii::$app->cache->set($cache_key,1,intval($limitTime));
        // }
        // if($data>=$limitCount){
        //     return false;
        // }
        // Yii::$app->cache->set($cache_key,$data+1,intval($limitTime));
        // return true;
    }

    /**
     * 检查 self::TIMESTAMP_PERIOD 时间内的请求记录，之后由于 timestamp 已经过期，请求自然失败
     * @return bool
     */
    private function checkRequestDuplication(ParameterBag $params, $appId, $requestId) {
        if($this->isDebugBypass($params)) {
            return;
        }

        $key = "api_req:{$appId}:{$requestId}";
        if ($this->redis()->exists($key)) {
            $this->error(ApiSystemError::DUPLICATED_REQUEST);
        } else {
            $this->redis()->set($key, 1);
            $this->redis()->expire($key, self::TIMESTAMP_PERIOD);
        }
    }

    /**
     * @param Request $request
     * @return GenericApiForm
     */
    private function verifyParameters(GenericApiForm $form, ParameterBag $params) {
        if (!$form->validate($params)) {
            $this->error(ApiSystemError::INVALID_PARAMS, 'json', $form->getErrors());
        }

        if($this->isDebugBypass($params)) {
            return $form;
        }

        $now = time();
        $timestamp = is_numeric($form->timestamp) ? $form->timestamp : strtotime($form->timestamp);
        if(!$timestamp || abs($timestamp - $now) > self::TIMESTAMP_PERIOD) {
            $this->error(ApiSystemError::TIMESTAMP_EXPIRED);
        }

        return $form;
    }

    /**
     * @param Request        $request
     * @param GenericApiForm $form
     * @return App
     */
    private function loadAndVerifyApp(Request $request, $appId) {
        /** @var App $app */
        list($app, $errorCode) = $this->appManager()->getApp($appId);
        if(!$app) {
            $this->error($errorCode);
        }

        return $app;
    }

    private function verifySignature(ParameterBag $params, $appSecret) {
        if($this->isDebugBypass($params)) {
            return true;
        }

        if(!SignatureHelper::verifySignature($params->all(), $appSecret)) {
            $this->error(ApiSystemError::INVALID_SIGNATURE);
        }
        return true;
    }

    private function verifyAccess(App $app, Request $request) {
        if(!$app->ip_white_list) {
            return true;
        }

        if(strpos($app->ip_white_list, $request->getClientIp()) === false){
            $this->error(ApiSystemError::ACCESS_DENIED);
        }

        return true;
    }

    private function verifyUserOpenPlatformAccount(User $user) {
        if(!($openAccount = $user->getOpenPlatformAccount()) || !$openAccount->isValid()) {
            $this->error(ApiSystemError::INVALID_APP);
        }

        return $openAccount;
    }

    public function getUser($credentials, UserProviderInterface $userProvider) {
        /** @var ParameterBag $params */
        /** @var Request $request */
        list($params, $request) = $credentials;

        $method = $params->get('method', '');
        $apiHandlerId = isset(ApiHandlerMap::HANDLERS[$method]) ? ApiHandlerMap::HANDLERS[$method] : null;
        if(!$apiHandlerId) {
            $this->error(ApiSystemError::API_METHOD_ERROR);
        }

        /** @var NotifyHandlerInterface $apiHandler */
        $apiHandler = $this->container->get($apiHandlerId);
        $form = $apiHandler->getApiForm();

        $this->verifyParameters($form, $params);

        $this->checkRequestDuplication($params, $form->app_id, $form->request_id);

        $app   = $this->loadAndVerifyApp($request, $form->app_id);

        $this->verifySignature($params, $app->app_secret);
        $this->verifyAccess($app, $request);
        $this->verifyRateLimit($app);

        $paymentHandlerId = PaymentHandlerMap::HANDLERS[$app->pay_type];
        if(!$paymentHandlerId || !$this->container->has($paymentHandlerId)) {
            $context = ['app_id' => $app->id, 'pay_type' => $app->pay_type];
            $this->logger()->error('App的pay_type没有对应的付款处理器', $context);
            return $this->error(ApiSystemError::GENERIC_ERROR);
        }

        /** @var User $user */
        $user = $userProvider->loadUserByUsername($app->user_id);

        $openPlatformAccount = $this->verifyUserOpenPlatformAccount($user);

        $context                 = new ApiContext();
        $context->user           = $user;
        $context->account        = $openPlatformAccount;
        $context->app            = $app;
        $context->request        = $request;
        $context->parameters     = $params;
        $context->apiHandler     = $this->container->get($apiHandlerId);
        $context->paymentHandler = $this->container->get($paymentHandlerId);
        $context->form           = $form;

        $request->attributes->set('context', $context);

        return $user;
    }

    public function checkCredentials($credentials, UserInterface $user) {
        return true;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey) {
        return null;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception) {
        if($exception instanceof ApiAuthenticationException) {
            $data = $exception->getMessageData();
        } else {
            $data = ['code' => ApiSystemError::GENERIC_ERROR, 'msg' => ApiSystemError::ERROR_CODES[ApiSystemError::GENERIC_ERROR]];
        }

        return new JsonResponse($data);
    }

    /**
     * Called when authentication is needed, but it's not sent
     */
    public function start(Request $request, AuthenticationException $authException = null) {
        $data = ['code' => ApiSystemError::INVALID_PARAMS, 'msg' => ApiSystemError::ERROR_CODES[ApiSystemError::INVALID_PARAMS]];

        return new JsonResponse($data);
    }

    public function supportsRememberMe() {
        return false;
    }

    /**
     * @param ParameterBag $params
     * @return bool
     */
    private function isDebugBypass(ParameterBag $params): bool {
        return $this->isDebug() && $params->has('debug');
    }
}