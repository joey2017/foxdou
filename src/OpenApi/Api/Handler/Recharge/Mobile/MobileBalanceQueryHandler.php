<?php
namespace App\OpenApi\Api\Handler\Recharge\Mobile;

use App\OpenApi\ApiContext;
use App\OpenApi\Api\AbstractHandler;
use App\OpenApi\Form\Recharge\Mobile\BalanceQueryForm;
use Symfony\Contracts\Service\ServiceSubscriberTrait;

class MobileBalanceQueryHandler extends AbstractHandler {
    use ServiceSubscriberTrait;

    protected function handlerForm(): BalanceQueryForm {
        return $this->container->get(__METHOD__);
    }

    public function handle(ApiContext $context) {
        $mobile = $context->form->mobile;
        $result = [
            [
                "mobile"         => $mobile,
                "product_id"         => "10458",
                "product_name"       => "广西联通话费10元快充",
                "par_value"          => "10.000",
                "sell_price"         => "9.95000",
                "speed"              => "1",
                "can_recharge_scope" => "1",
                "arbitrarily"        => "0"
            ],
            [
                "mobile"         => $mobile,
                "product_id"         => "10557",
                "product_name"       => "全国联通话费10元快充",
                "par_value"          => "10.000",
                "sell_price"         => "9.95500",
                "speed"              => "1",
                "can_recharge_scope" => "1",
                "arbitrarily"        => "0"
            ]
        ];

        return [$result, '操作成功'];
    }
}
