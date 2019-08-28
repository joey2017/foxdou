<?php

namespace App\Common\Logging;

class ConsoleFormatter extends \Symfony\Bridge\Monolog\Formatter\ConsoleFormatter {
    /**
     * {@inheritdoc}
     */
    public function format(array $record)
    {
        if(isset($record['context'])) {
            foreach ($record['context'] as $key => $value) {
                if(strpos($record['message'], "{{$key}}") !== false) {
                    $valueStr = is_scalar($value) ? $value : json_encode($value);
                    $record['message'] = strtr($record['message'], ["{{$key}}" => "<comment>{$valueStr}</>"]);

                    unset($record['context'][$key]);
                }
            }

            $record['context'] = $this->trimArray($record['context'], 30);
        }
        if(isset($record['extra'])) {
            $record['extra'] = $this->trimArray($record['extra'], 20);
        }

        return parent::format($record);
    }

    private function trimArray($array, $maxLength) {
        $trimmed = [];
        foreach ($array as $key => $value) {
            $encodedValue = is_scalar($value) ? $value : json_encode($value);
            $itemLength = strlen($key) + strlen($encodedValue);
            if($maxLength - $itemLength < 0) {
                $trimmed[$key] = substr($encodedValue, 0, $maxLength) . '...(trimmed)';
                break;
            } else {
                $trimmed[$key] = $value;
                $maxLength -= $itemLength;
            }
        }

        return $trimmed;
    }
}