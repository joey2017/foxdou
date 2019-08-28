<?php
namespace App\Common\Utils;

class CsvExporter
{

    private function toCsv($fields) {
        $f = fopen('php://memory', 'r+');
        if (fputcsv($f, $fields) === false) {
            return false;
        }
        rewind($f);
        $csv_line = stream_get_contents($f);

        return rtrim($csv_line);
    }

    private function formatTradeLogHeaders($headers, $charset = 'GB18030') {
        $headerMap = [
            'trade_id'       => '流水号',
            'order_id'       => '业务单号',
            'name'           => '交易名称',
            'trade_log_type' => '交易类型',
            'trade_status'   => '交易类型',
            'payment_class_id'   => '支付方式',
            'amount'          => '金额',
            'current_balance' => '账户余额',
            'add_time'       => '交易时间',
        ];

        $curEncoding = mb_internal_encoding();
        foreach ($headers as &$header) {
            $header = $headerMap[$header] ?? $header;

            if ($curEncoding !== $charset) {
                $header = mb_convert_encoding($header, $charset);
            }
        }

        return $headers;
    }

    public static function export($data, $headers, $forcedStringFields = []): string
    {

    }
}
