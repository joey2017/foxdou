<?php
namespace App\Common\Utils;

class FieldTransformer
{
    public static function transform(array &$rows, array $fieldValueMap, $forcedStringFields = []): array
    {
        foreach ($rows as &$row) {
            foreach ($row as $key => &$value) {
                if(isset($fieldValueMap[$key])) {
                    $value = $fieldValueMap[$key][$value] ?? "未知({$value})";
                }
                if(preg_match("/[\x7f-\xff]/", $value)) {
                    $value = mb_convert_encoding($value, 'GB18030');
                }
                if(in_array($key, $forcedStringFields)) {
                    $value = "=\"{$value}\"";
                }
            }
        }

        return $rows;
    }
}
