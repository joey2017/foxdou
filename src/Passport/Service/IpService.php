<?php

namespace App\Passport\Service;

use App\Common\Service\BaseService;

class IpService extends BaseService {

    public function query_ip_address($ip) {
        $url    = "https://sp0.baidu.com/8aQDcjqpAAV3otqbppnN2DJv/api.php?query={$ip}&co=&resource_id=6006&t=1512831471712&ie=utf8&oe=utf8&format=json&tn=baidu";
        $header = [
            'Accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
            'Accept-Encoding:gzip, deflate, sdch',
            'Accept-Language:zh-CN,zh;q=0.8',
            'Cache-Control:max-age=0',
            'Connection:keep-alive',
            'Cookie:BAIDUID=0278CC607B8358823A94FFF0DEBD24F3:FG=1; BDUSS=FZBUWMtbWZQYlJSeWxKYlR5YllXdHN5QWR3VTIzNXBFNDlISk9pbVJzcjFPRUZhQVFBQUFBJCQAAAAAAAAAAAEAAADU9QM5wM~K98~C0KG607Hf1LwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPWrGVr1qxlaN; BIDUPSID=0278CC607B8358823A94FFF0DEBD24F3; PSTM=1511632184; PSINO=7; H_PS_PSSID=1431_21086_25177_20930; BDORZ=B490B5EBF6F3CD402E515D22BCDA1598',
            'Host:sp0.baidu.com',
            'Upgrade-Insecure-Requests:1',
            'User-Agent:Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36',
        ];

        $result = RequestToolService::http_get($url, $header);
        //$result = json_decode($result, true);
        // if (!isset($result['status']) || $result['status'] != 0 || !$result['data']) {
        //     return ['status' => false];
        // }
        //return ['status' => true, 'address' => $result['data'][0]['location']];
    }
}