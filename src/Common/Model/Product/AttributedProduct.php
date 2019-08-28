<?php
namespace App\Common\Model;

trait AttributedProduct {
    static $extra_attributes_table   = 'product_attributes';
    static $extra_attributes_ref_key = null;

    //const ATTR_GROUP_DEFAULT = 'DEFAULT';

    protected $extra_attributes_loaded = false;

    protected $extra_attributes = [
        'is_mvno'       => 1,
        'province_code' => 0,
        'city_code'     => 0,
    ];

    static $extra_attribute_names = [
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
    }

    protected function load_extra_attrs() {
        if($this->extra_attributes_loaded) {
            return;
        }

        $table   = static::$extra_attributes_table;
        $ref_key = static::$extra_attributes_ref_key;

        $sql = "SELECT * FROM {$table} WHERE {$ref_key}=?";
        $stmt = static::query($sql, $this->read_attribute(static::$primary_key));
        $rows = $stmt->fetchAll();
        foreach ($rows as $row) {
            $this->extra_attributes[$row['name']] = $row['value'];
        }

        $this->extra_attributes_loaded = true;
    }

    public function all_extra_attrs() {
        return $this->extra_attributes;
    }

    protected function get_extra_attr($name, $default_value = null, $group = 'default') {
        return $this->extra_attributes[$group][$name] ?? $default_value;
    }

    protected function set_extra_attr($name, $value, $group = 'default') {
        $this->extra_attributes[$group][$name] = $value;

        $this->extra_attribute__is_mvno = 1;
        $this->extra_attribute__province_code = '450000';
        $this->extra_attribute__city_code     = '0771';
    }

}
