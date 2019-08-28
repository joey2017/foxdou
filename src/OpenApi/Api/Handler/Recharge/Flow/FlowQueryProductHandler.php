<?php
namespace App\OpenApi\Api\Handler\Recharge\Flow;

use App\Common\Utils\MobileNumberChecker;
use App\OpenApi\Api\AbstractHandler;
use App\OpenApi\ApiContext;
use App\OpenApi\Form\Recharge\Flow\QueryProductForm;
use App\OpenApi\Service\RechargeProductService;
use App\ProductConstants;
use Symfony\Contracts\Service\ServiceSubscriberTrait;

class FlowQueryProductHandler extends AbstractHandler {
    use ServiceSubscriberTrait;

    const ERROR_CODES = [];

    protected function handlerForm(): QueryProductForm {
        return $this->container->get(__METHOD__);
    }
    protected function rechargeProductService(): RechargeProductService {
        return $this->container->get(__METHOD__);
    }

    // mobile
    // amount
    // speed 充值速度[1：快充(默认)，2：慢充]
    public function handle(ApiContext $context) {
        $form = $context->form;
        $numberInfo = MobileNumberChecker::getMobileLocationInfo($form->mobile);
        $products = $this->rechargeProductService()->findProducts($context->account, $numberInfo, ProductConstants::PRODUCT_TYPE_FLOW, (int)$form->amount, (int)$form->speed, 0, 100);

        $data = [];
        foreach ($products as $p) {
            $item['product_id']         = $p['id'];
            $item['product_name']       = $p['name'];
            $item['par_value']          = $p['face_value'];
            $item['sell_price']         = $p['price'];
            $item['speed']              = $p['speed'];
            $item['can_recharge_scope'] = $p['num'];
            $item['arbitrarily']        = (int)($p['face_value_type'] == ProductConstants::FACE_VALUE_TYPE_ARBITRARILY);

            $data[] = $item;
        }

        $context->message = '查询成功';

        $result = [
            'count' => count($data),
            'data_list' => $data,
        ];

        return $result;
    }

}
