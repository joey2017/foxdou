<?php

namespace App\Reseller\Controller;

use App\Common\Service\IspManager;
use App\Reseller\Service\ProductService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RechargeController extends ResellerBaseController {
    /**
     * @Route("/recharge/mobile-single", name="reseller_recharge_mobile_single")
     */
    public function singleAction() {
        $data = ['left_nav' => $this->getLeftMenu()];
        return $this->render("Reseller/Recharge/mobileSingle.twig", $data);
    }

    /**
     * @Route("/recharge/mobile-batch", name="reseller_recharge_mobile_batch")
     */
    public function batchAction() {
        $data = ['left_nav' => $this->getLeftMenu()];

        return $this->render("Reseller/Recharge/mobileBatch.twig", $data);
    }

    /**
     * @Route("/recharge/number-info", name="reseller_recharge_mobile_number_info")
     */
    public function numberInfoAction(Request $request, IspManager $ispManager) {
        $number = $request->query->get("number");
        if (!($numberInfo = $ispManager->getNumberLocationInfo($number))) {
            return ["status" => false, 'msg' => '查询归属地错误'];
        }elseif (!$ispManager->checkAvailability($number)) {
            return ["status" => false, 'msg' => '该号码所属的运营商维护了'];
        }

        return ["status" => true, 'msg' => '该号码可以充值，请选择要充值的金额', 'location' => $numberInfo['location']];
    }


    /**
     * @Route("/recharge/available-recharge-products", name="reseller_recharge_available_recharge_products")
     */
    public function availableProductsAction(Request $request, IspManager $ispManager, ProductService $productService) {
        $number = $request->query->get("number");
        $value  = $request->query->get("value");
        if (!($numberInfo = $ispManager->getNumberLocationInfo($number))) {
            return ["status" => false, 'msg' => '查询归属地错误'];
        }elseif (!$ispManager->checkAvailability($number)) {
            return ["status" => false, 'msg' => '该号码所属的运营商维护了'];
        }

        $speed = 1;
        $productInfos = $productService->findAvailableRechargeProducts($this->getUser()->getResellerAccount(), $numberInfo, $value, $speed);

        $products = [];
        foreach ($productInfos as $productInfo) {
            $type               = $productInfo['product_sub_type'] === 'USER' ? 'U' : 'G';
            $sourceId           = $productInfo['source']['source_id'] ?? '0';

            $info['product_info'] = "{$type}{$productInfo['product_sub_id']}S{$sourceId}";
            $info['name']         = $productInfo['name'];
            $info['sell_price']   = (string)$productInfo['sell_price'];
            // $info['status']     = $productInfo['status'];
            // $info['face_value_type'] = $productInfo['face_value_type'];

            $products[]     = $info;
        }
        
        return ["status" => true, 'products' => $products, 'recharge_value' => $value];
    }

    /**
     * 左侧导航
     * @return array
     */
    private function getLeftMenu() {
        //key是order_cate
        return [
            '100003' => ['name' => '手机话费充值', 'url' => '/reseller/recharge/mobile-single', 'icon' => '&#xe608;', 'img' => '//apistore.foxdou.com/uploads/service/d4d0438deec74b25c08d413732350b63?0.0014853213043255487'],
            '100004' => ['name' => '手机流量充值', 'url' => '/reseller/recharge/flow', 'icon' => '&#xe612;', 'img' => '//apistore.foxdou.com/uploads/service/af4796192fdbf578dc3895ef6816a283.png?0.022305543320271903'],
            '100007' => ['name' => '固话宽带充值', 'url' => '/reseller/recharge/telephone', 'icon' => '&#xe600;', 'img' => '//apistore.foxdou.com/uploads/service/f62ee3a5d31c700c25914677913c9458.png?0.21023703728866638'],
            '100005' => ['name' => '腾讯业务充值', 'url' => '/reseller/recharge/tencent', 'icon' => '&#xe60b;', 'img' => '//apistore.foxdou.com/uploads/service/753d95c4da563e5f6db581fa9fb94a37.png?0.6723992915045243'],
            '100006' => ['name' => '游戏点卡充值', 'url' => '/reseller/recharge/game', 'icon' => '&#xe61e;', 'img' => '//apistore.foxdou.com/uploads/service/412ae292df552ef00758734d5ce1fb49.jpg?0.9258981295715749'],
            //            ['id'=>'','name'=>'充值卡密购买','url'=>'','icon'=>'&#xe617;',],
            //            ['id'=>'','name'=>'水电燃气缴费','url'=>'','icon'=>'&#xe683;',],
            //            ['id'=>'','name'=>'汽车加油充值','url'=>'','icon'=>'&#xe615;',],
            //            ['id'=>'','name'=>'交通违章缴纳','url'=>'','icon'=>'&#xe60d;',],
            //            ['id'=>'','name'=>'飞机票务预定','url'=>'','icon'=>'&#xe610;',],
            //            ['id'=>'','name'=>'汽车票务预定','url'=>'','icon'=>'&#xe715;',],
            //            ['id'=>'','name'=>'火车票务预定','url'=>'','icon'=>'&#xe628;',],
            //            ['id'=>'','name'=>'电影票务预定','url'=>'','icon'=>'&#xe611;',],
            //            ['id'=>'','name'=>'医院挂号预约','url'=>'','icon'=>'&#xe64a;',],
        ];
    }
}
