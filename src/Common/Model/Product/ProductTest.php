<?php
namespace App\Common\Model\Product;

use App\Common\Model\AttributedModel;
use App\Common\Model\BaseModel;

class ProductTest extends BaseModel {
    // use AttributedModel;

    const ATTR_GROUP_DEFAULT = 'DEFAULT';
    const ATTR_GROUP_SELL    = 'DEFAULT';
    const ATTR_GROUP_OTHER   = 'DEFAULT';

    static $table_name = 'yzb_product';

    static $attribute_table = 'product_attributes';
    static $attributes = [
        'is_mvno'       => 1,
        'province_code' => 0,
        'city_code'     => 0,
    ];
    static $attribute_names = [
        'is_mvno'       => '是否虚拟运营商',
        'province_code' => '省份编码',
        'city_code'     => '城市编码',
    ];

    public function test() {
        $sql = "
            SELECT * FROM product p
              INNER JOIN product_attributes a ON a.product_id=p.id
            WHERE a.name='is_mvno' AND a.value=1; 
        ";
        self::all(['attr:is_mvno' => 1]);

        self::builder()->select('')
        ->joins('')
        ->where([])->wait();
    }


}
