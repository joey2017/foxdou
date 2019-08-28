<?php
namespace App\Common\Model;

trait AttributedModel {
    // static $extra_attributes_table   = null;
    // static $extra_attributes_ref_key = null;

    protected $extra_attr_loaded = false;
    // protected $extra_attrs = [
    //     'is_mvno'       => 1,
    //     'province_code' => 0,
    //     'city_code'     => 0,
    // ];
    //
    // static $extra_attr_names = [
    //     'is_mvno'       => '是否虚拟运营商',
    //     'province_code' => '省份编码',
    //     'city_code'     => '城市编码',
    // ];



    protected function load_extra_attrs() {
        if($this->extra_attr_loaded) {
            return;
        }

        $table   = static::$extra_attr_table;
        $ref_key = static::$extra_attr_ref_key;

        $sql = "SELECT * FROM `{$table}` WHERE `{$ref_key}`=?";
        $stmt = static::query($sql, $this->read_attribute(static::$primary_key));
        $rows = $stmt->fetchAll();
        foreach ($rows as $row) {
            $name = $row['name'];
            if(!array_key_exists($name, $this->extra_attrs)) {
                continue;
            }

            $this->extra_attrs[$name] = $row['value'];
        }

        $this->extra_attr_loaded = true;
    }

    public function all_extra_attrs() {
        return $this->extra_attrs;
    }

    public function get_extra_attr($name, $default_value = null) {
        if(!array_key_exists($name, $this->extra_attrs)) {
            throw new \InvalidArgumentException("类 " . __CLASS__ . " 不存在名字为 {$name} 的额外属性");
        }

        if(!$this->extra_attr_loaded) {
            $this->load_extra_attrs();
        }

        return $this->extra_attrs[$name] ?? $default_value;
    }

    public function set_extra_attr($name, $value) {
        if(!array_key_exists($name, $this->extra_attrs)) {
            throw new \InvalidArgumentException("类 " . __CLASS__ . "不存在名字为 {$name} 的额外属性");
        }

        if(!$this->extra_attr_loaded) {
            $this->load_extra_attrs();
        }

        $this->extra_attrs[$name] = $value;
    }

    private static function is_extra_attr($name) {
        return substr($name, 0, 12) === 'extra_attr__';
    }
    private static function get_extra_attr_real_name($name) {
        return self::get_extra_attr_real_name($name);
    }

    public function &__get($name) {
        if($this->is_extra_attr($name)) {
            return $this->get_extra_attr(self::get_extra_attr_real_name($name));
        } else {
            return parent::__get($name);
        }
    }

    public function __isset($name) {
        if($this->is_extra_attr($name)) {
            return array_key_exists(self::get_extra_attr_real_name($name), $this->extra_attrs);
        } else {
            return array_key_exists($name, $this->attributes) || array_key_exists($name, static::$alias_attribute);
        }
    }

    public function __set($name, $value) {
        if($this->is_extra_attr($name)) {
            $this->set_extra_attr(self::get_extra_attr_real_name($name), $value);
        } else {
            return parent::__set($name, $value);
        }
    }

    protected static function process_arguments($conditions, $options) {
        $processed_contitions = [];
        foreach ($conditions as $name => $value) {
            if(self::is_extra_attr($name)) {
                $attr_table   = static::$extra_attr_table;
                $ref_key = static::$extra_attr_ref_key;
                $model_table = static::$table_name;
                $model_pk = static::$primary_key;

                $options['joins'] = ($options['joins'] ?? '') . " LEFT JOIN `{$attr_table}` ON `{$attr_table}`.`{$ref_key}`=`$model_table`.`$model_pk` ";
                $attr_name = self::get_extra_attr_real_name($name);
                $processed_contitions["{$attr_table}.{$attr_name}"] = $value;
            } else {
                $processed_contitions[$name] = $value;
            }
        }

        // SELECT * FROM product_attributes a
        // 		where (a.product_id=p.id
        // 			 AND ((a.name='province_code' and a.value='1') AND (a.name='city_code' and a.value='2'))
        $sub_conditions = [''];
        $sub_options = [];
        $processed_contitions['a'] = ['EXISTS' => []];
        $processed_contitions['b'] = ['EXISTS' => []];

        return [$processed_contitions, $options];

    }

    public static function all($conditions = [], $options = []) {
        $processed_contitions = [];
        foreach ($conditions as $key => $value) {
            if(self::is_extra_attr($key)) {
                $attr_table   = static::$extra_attr_table;
                $ref_key = static::$extra_attr_ref_key;
                $model_table = static::$table_name;
                $model_pk = static::$primary_key;

                $options['joins'] = ($options['joins'] ?? '') . " INNER JOIN `{$attr_table}` ON `{$attr_table}`.`{$ref_key}`=`$model_table`.`$model_pk` ";
                $attr_name = substr($key, 12);
                $processed_contitions["{$attr_table}.name"] = $attr_name;
                $processed_contitions["{$attr_table}.value"] = $value;
            } else {
                $processed_contitions[$key] = $value;
            }
        }

        return parent::all($processed_contitions, $options);
    }
}
