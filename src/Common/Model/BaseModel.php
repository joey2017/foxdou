<?php

namespace App\Common\Model;

use SimpleRecord\Model;
use function SimpleRecord\is_hash;

//use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model {
    static $attr_protected = ['id'];

    static $max_page_size     = 100;
    static $default_page_size = 20;

    //  格式 2018101012345625849895319502861
    public static function newId($prefix = '') {
        $sn = date('YmdHis') . self::newShortUuid();
        return $prefix ? "{$prefix}{$sn}" : $sn;
    }

    //  格式 25849895319502861
    public static function newShortUuid($prefix = '') {
        $stmt = self::query("SELECT UUID_SHORT() as uuid");
        $uuid = $stmt->fetchColumn(0);

        return $prefix ? "{$prefix}{$uuid}" : $uuid;
    }

    public static function className() {
        $fullName  = get_called_class();
        $lastPos   = strrpos($fullName, '\\') + 1;
        $className = substr($fullName, $lastPos);

        return $className;
    }

    public static function delete_by_id($id) {
        return self::delete_all(['id' => $id]);
    }

    public function diff(array $oldAttrs, $excludedFields = ['created_at', 'updated_at']) {
        //        static $excludedFields = ['created_at', 'updated_at'];
        $newValues = array_diff_assoc($this->to_array(), $oldAttrs);
        $diff      = [];
        foreach ($newValues as $key => $value) {
            if (in_array($key, $excludedFields)) {
                continue;
            }

            $oldValue   = $oldAttrs[$key];
            $diff[$key] = ['old' => $oldValue, 'new' => $value];
        }

        return $diff;
    }

    public static function sumFields($fields, $conditions = [], $options = []) {
        return self::sum($fields, $conditions, $options);
    }

    public static function sum($fields, $conditions = [], $options = []) {
        $isMultiple = is_array($fields);
        if(!$isMultiple) {
            $fields = [$fields];
        }

        $mappedFields = array_map(function ($f) {
            return "IFNULL(SUM({$f}), 0) as `{$f}`";
        }, $fields);

        $options['select'] = JOIN(', ', $mappedFields);
        $options['hydrate'] = false;
        $result = static::first($conditions, $options);

        if(!$isMultiple) {
            $result = reset($result);
        }

        return $result;
    }

    protected static function buildQuery($fields, $conditions, $options) {
        $conds  = [];
        $params = [];
        foreach ($conditions as $key => $value) {
            $conds[]  = "`{$key}` = ?";
            $params[] = $value;
        }

        $condsStr = join(' AND ', $conds);

        $table     = self::table_name();
        $fieldsStr = is_array($fields) ? join(', ', $fields) : $fields;
        $where     = $condsStr ? "WHERE {$condsStr}" : '';
        $sql       = "SELECT {$fieldsStr} FROM {$table} {$where}";

        return [$sql, $params];
    }

    /**
     * @param string $field_name
     * @param bool   $throwExceptionOnFailure
     * @throws \SimpleRecord\Exception\ModelException
     * @throws \SimpleRecord\Exception\SimpleRecordException
     */
    public function mark_deleted($field_name = 'is_deleted', $throwExceptionOnFailure = false) {
        $this->assign_attribute($field_name, 1);
        if(isset($this->attributes['deleted_at'])) {
            $this->assign_attribute('deleted_at', time());
        }
        if(isset($this->attributes['edit_time'])) {
            $this->assign_attribute('edit_time', time());
        }

        $this->save(true, $throwExceptionOnFailure);
    }

    //    public static function builder() {
    //        $builder = new QueryBuilder();
    //        $builder->from(self::table_name());
    //        return $builder;
    //    }

    public static function fetch_column_as_array($field, $conditions = [], $options = []) {
        $options['select'] = "`{$field}`";
        $options['hydrate'] = false;

        $column_data = [];
        $rows = static::all($conditions, $options);
        foreach ($rows as $row) {
            $column_data[] = $row[$field];
        }

        return $column_data;
    }
}
