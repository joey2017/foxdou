<?php
namespace App\OpenApi\Api\Handler\Recharge\Mobile;

use App\Common\Utils\MobileNumberChecker;
use App\OpenApi\Api\AbstractHandler;
use App\OpenApi\ApiContext;
use App\OpenApi\Form\Recharge\Mobile\QueryProductForm;
use App\OpenApi\Service\RechargeProductService;
use App\ProductConstants;
use Symfony\Contracts\Service\ServiceSubscriberTrait;

class MobileQueryProductHandler extends AbstractHandler {
    use ServiceSubscriberTrait;

    const ERROR_CODES = [];
    const SPEED_MAP   = ['1' => ProductConstants::RECHARGE_SPEED_FAST, '2' => ProductConstants::RECHARGE_SPEED_SLOW];

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
        // $keyValues = $form->all();
        $numberInfo = MobileNumberChecker::getMobileLocationInfo($form->mobile);
        $speed = self::SPEED_MAP[$form->speed] ?? null; // form 验证机制保证了 $form->speed 肯定是 1、2或者空字符串

        $products = $this->rechargeProductService()->findProducts($context->account, $numberInfo, ProductConstants::PRODUCT_TYPE_MOBILE, (int)$form->amount, $speed, 0, 100);

        $data = [];
        foreach ($products as $p) {
            $item['product_id']         = $p['id'];
            $item['product_name']       = $p['name'];
            $item['par_value']          = $p['face_value'];
            $item['sell_price']         = $p['price'];
            $item['speed']              = $p['speed'];
            $item['can_recharge_scope'] = $p['num'];
            $item['arbitrarily']        = (int)($p['face_value_type'] == ProductConstants::FACE_VALUE_TYPE_ARBITRARILY);

            if($this->isDebug()) {
                $item['setting_id']     = $p['setting_id'];
                $item['unit_price']     = $p['unit_price'];
            }

            $data[] = $item;
        }

        $result = [
            'count' => count($data),
            'data_list' => $data,
        ];

        $context->message = '查询成功';
        return $result;
    }

}
