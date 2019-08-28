<?php
namespace App\OpenApi\Controller;

use App\Common\Model\OpenPlatform\ApiRequestLog;
use App\Common\Model\OpenPlatform\App;
use App\Common\Model\User\OpenPlatformAccount;
use App\Common\Service\UserManager;
use App\OpenApi\ApiContext;
use App\OpenApi\ApiSystemError;
use App\OpenApi\Exception\ApiException;
use App\OpenApi\Form\GenericApiForm;
use App\OpenApi\Service\AppManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class GatewayController extends OpenApiBaseController {
    const TIMESTAMP_PERIOD = 60 * 5;

    protected function appManager(): AppManager {
        return $this->container->get(__METHOD__);
    }
    protected function userManager(): UserManager {
        return $this->container->get(__METHOD__);
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

        return $services;
    }

    /**
     * @Route("/gateway.do", name="open_api_gateway_entry")
     */
    public function gatewayEntryAction(Request $request) {
        $now = date('Y-m-d H:i:s');

        /** @var ApiContext $context */
        $context = $request->attributes->get('context');

        $loggingContext = ['app_id' => $context->app->id, 'user_id' => $context->account->user_id, 'params' => $context->parameters];

        $begin = microtime(true);
        try {
            $apiResult = $this->handleApiRequest($context);

            $code  = ApiSystemError::SUCCEED;
            $response = [
                'code'       => $code,
                'error_code' => $code,
                'msg'        => $context->message ?: ApiSystemError::ERROR_CODES[$code],
                'time'       => $now,
                'balance'    => $context->account->balance,
                'result'     => $apiResult,
            ];

        } catch (ApiException $e) {
            $errorCode = $e->getCode();
            $message   = $e->getMessage();

            $this->logger->error('ApiHandler 处理 API 请求失败', array_merge($loggingContext, ['errorCode' => $errorCode, 'msg' => $message, 'handler' => get_class($context->apiHandler), 'error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));

            $response = ['code' => $errorCode, 'error_code' => $errorCode, 'msg' => $message, 'time' => $now,];

            if($this->isDebug()) {
                $response['trace'] = [
                    'error' => $e->getMessage(),
                    'stack' => $e->getTraceAsString(),
                ];
            }
        } catch (\Exception $e) {
            $this->logger->error('系统处理 API 请求失败', array_merge($loggingContext, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));

            $response = $this->error(ApiSystemError::API_METHOD_ERROR);

            if($this->isDebug()) {
                $response['trace'] = [
                    'error' => $e->getMessage(),
                    'stack' => $e->getTraceAsString(),
                ];
            }
        }

        if($this->isDebug()) {
            $elapsed = (microtime(true) - $begin) * 1000;
            $response['debug'] = [
                'payment_amount' => $context->paymentContext['amount'] ?? 0,
                'handler_time'   => number_format($elapsed, 2) . ' ms',
                'total_time'     => number_format((microtime(true) - $request->server->get('REQUEST_TIME_FLOAT')) * 1000, 2) . ' ms',
            ];
        }

        return $response;
    }

    /**
     * @param Request        $request
     * @param GenericApiForm $form
     * @return array
     * @throws \Exception
     */
    private function handleApiRequest(ApiContext $context) {
        try {
            $context->paymentHandler->init($context);

            $context->apiHandler->init($context);

            $context->paymentHandler->preCheck($context);

            OpenPlatformAccount::begin_transaction();

            $apiResult = $context->apiHandler->handle($context);

            $context->paymentHandler->handle($context);

            $context->apiHandler->finish($context);

            // $this->createApiRequestLog($app, $request, true);

            OpenPlatformAccount::commit();

            return $apiResult;
        } catch (\Exception $e) {
            OpenPlatformAccount::rollback();

            throw $e;
        }
    }

    public function error($errorCode, $format = 'json', $errors = []) {
        $errorMsg = ApiSystemError::ERROR_CODES[$errorCode] ?? ApiSystemError::ERROR_CODES[ApiSystemError::GENERIC_ERROR];

        $response = ['msg' => $errorMsg, 'code' => $errorCode, 'error_code' => $errorCode, 'time' => date('Y-m-d H:i:s')];
        if($this->isDebug()) {
            $response['errors'] = $errors;
        }

        return $response;
    }
}
