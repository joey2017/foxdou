#!/usr/bin/env php
<?php
$loader = require __DIR__.'/../vendor/autoload.php';

$number = $argv[1];

$url     = "https://sp0.baidu.com/8aQDcjqpAAV3otqbppnN2DJv/api.php?query={$number}&co=&resource_id=6004&t=1525759523765&ie=utf8&oe=utf8&format=json&tn=baidu";
$headers = [
    'Accept'                    => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
    'Accept-Encoding'           => 'gzip, deflate, br',
    'Accept-Language'           => 'zh-CN,zh;q=0.9',
    'Cache-Control'             => 'max-age=0',
    'Connection'                => 'keep-alive',
    'Host'                      => 'sp0.baidu.com',
    'Upgrade-Insecure-Requests' => '1',
    'User-Agent'                => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36',
    'Cookie'                    => '3E336440385DD80EE5723D68C531188B:FG=1; BIDUPSID=3E336440385DD80EE5723D68C531188B; PSTM=1519708347; __cfduid=d3990dbcac08f706d3180565cd359f2001521254211; BDORZ=B490B5EBF6F3CD402E515D22BCDA1598; H_PS_PSSID=1422_18195_21086_20927; PSINO=7',
];


$context = ['number' => $number];
$response = \Unirest\Request::get($url, $headers);
if ($response->code != 200) {
    return null;
}

$body = $response->body;
print_r($body);