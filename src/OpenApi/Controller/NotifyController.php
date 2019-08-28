<?php
namespace App\OpenApi\Controller;

use App\Common\ExternalService\RechargeService\RechargeServiceContext;
use App\Common\ExternalService\RechargeService\RechargeServiceProviderTrait;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Service\ServiceSubscriberInterface;

class NotifyController extends OpenApiBaseController implements ServiceSubscriberInterface {
    use RechargeServiceProviderTrait;

    /**
     * @Route("/notify/{provider_id}", name="open_api_notify")
     */
    public function notifyAction(Request $request, $provider_id) {
        try {
            $provider = $this->getProvider($provider_id);
            $rechargeContext = new RechargeServiceContext();
            $rechargeContext->request = $request;

            return $provider->handleNotify($rechargeContext);
        } catch (\Exception $e) {
            $rechargeContext = ['provider_id' => $provider_id];
            $this->logger->error('第三方回调处理失败', array_merge($rechargeContext, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));

            $message = $this->isDebug() ? '回调处理失败: ' . $e->getMessage() : '回调处理失败';
            return ['status' => false, 'msg' => $message];
        }
    }
}
