<?php

namespace App\Reseller\Controller;

use App\Common\Model\Product\Product;
use App\Constants;
use App\ProductConstants;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfu\SimpleFormBundle\Form;
use function Symfu\SimpleFormBundle\to_enum;

class ProductController extends ResellerBaseController {
    /**
     * @Route("/products", name="reseller_product_index")
     */
    public function indexAction(Request $request, Form $form) {
        $form->init([
            'id'         => ['digit'], // 商品 ID
            // 'cate_id'    => [to_enum(Constants::PRODUCT_CATEGORIES)], // 商品大类
            'operator_id'=> [to_enum(Constants::CARRIERS)], //  运营商
            'name'       => [], // 商品名称
            'status'     => [to_enum(ProductConstants::STATUSES)], // 商品状态
            'face_value' => ['natural'], // 充值
            'sell_price' => ['natural'], // 商品价格
            'speed'      => ['enum[1|2]'], // 快充|慢充
        ]);

        if (!$request->isXmlHttpRequest()) {
            return $this->render("Reseller/Product/index.twig", ['left_nav' => $this->getLeftMenu(), 'form' => $form, 'statuses' => ProductConstants::STATUSES]);
        }

        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => "参数错误，请检查后重新查询", 'errors' => $form->getErrors()];
        }

        $conditions         = $form->all();
        $conditions['name'] = $form->name ? ['LIKE' => "{$form->name}"] : '';

        $options = [
            'select' => 'id as product_id, name,face_value,num, 0 as sell_price, 1 as status,speed, 0 as real_sell_price',
            'order'  => 'id DESC',
        ];

        list($products, $total) = Product::paginate($conditions, $options, $form->page, $form->limit);

        return ["status" => true, "data" => $products, "total" => $total];
    }


    /**
     * 左侧导航
     * @return array
     */
    private function getLeftMenu() {
        return [
            ['name' => '系统商品列表', 'route' => 'reseller_product_index', 'icon' => '&#xe683;',],
            // ['name'=>'店铺商品列表', 'route'=>'', 'icon'=>'&#xe612;',],
            // ['name'=>'固话宽带充值', 'route'=>'', 'icon'=>'&#xe600;',],
            // ['name'=>'腾讯业务充值', 'route'=>'', 'icon'=>'&#xe60b;',],
            // ['name'=>'游戏点卡充值', 'route'=>'', 'icon'=>'&#xe61e;',],
            // ['name'=>'充值卡密购买', 'route'=>'', 'icon'=>'&#xe617;',],
            // ['name'=>'水电燃气缴费', 'route'=>'', 'icon'=>'&#xe683;',],
            // ['name'=>'汽车加油充值', 'route'=>'', 'icon'=>'&#xe615;',],
            // ['name'=>'交通违章缴纳', 'route'=>'', 'icon'=>'&#xe60d;',],
            // ['name'=>'飞机票务预定', 'route'=>'', 'icon'=>'&#xe610;',],
            // ['name'=>'汽车票务预定', 'route'=>'', 'icon'=>'&#xe715;',],
            // ['name'=>'火车票务预定', 'route'=>'', 'icon'=>'&#xe628;',],
            // ['name'=>'电影票务预定', 'route'=>'', 'icon'=>'&#xe611;',],
            // ['name'=>'医院挂号预约', 'route'=>'', 'icon'=>'&#xe64a;',],
        ];
    }
}
