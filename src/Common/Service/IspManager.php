<?php
namespace App\Common\Service;

use App\Common\Model\Isp;
use App\Common\Utils\MobileNumberChecker;

class IspManager {
    public function __construct() {
    }

    // TODO: 做缓存优化
    public function checkAvailability($numbers) {
        if(!$numbers) {
            return false;
        }

        if(is_string($numbers)) {
            $locationPart = substr($numbers, 0, 7);
            $isAvailable  = Isp::exists(['number_prefix' =>$locationPart, 'status' =>1]);
            return $isAvailable;
        }

        // 为多个号码查询做优化，同一个归属地的只查一次，尽量减少不必要的请求
        $locationMap = [];
        foreach ($numbers as $number) {
            $locationPart = substr($number, 0, 7);
            $locationMap[$locationPart][] = $number;
        }

        $all  = Isp::all(['number_prefix' =>array_keys($locationMap), 'status' =>1]);
        $numberInfos = [];
        foreach ($all as $item) {
            $locationPart = $item['number_prefix'];
            foreach ($locationMap[$locationPart] as $number) {
                $numberInfos[$number] = true;
            }
            unset($locationMap[$locationPart]);
        }

        foreach ($locationMap as $locationPart => $sameLocationNumbers) {
            foreach ($locationMap[$locationPart] as $number) {
                $numberInfos[$number] = false;
            }
        }

        return $numberInfos;
    }

    public function getNumberLocationInfo($numbers) {
        if(!$numbers) {
            return false;
        }

        if(is_string($numbers)) {
            $info = MobileNumberChecker::getLocationInfo($numbers);
            return $info ?: false;
        }

        // 为多个号码查询做优化，同一个归属地的只查一次，尽量减少不必要的请求
        $locationMap = [];
        foreach ($numbers as $number) {
            $locationPart = substr($number, 0, 7);
            $locationMap[$locationPart][] = $number;
        }

        $numberInfos = [];
        foreach ($locationMap as $locationPart => $sameLocationNumbers) {
            $firstNumber = reset($sameLocationNumbers);
            $info = MobileNumberChecker::getLocationInfo($firstNumber);
            foreach ($sameLocationNumbers as $numberInThisLocation) {
                if($info) {
                    $info['number'] = $numberInThisLocation;
                }
                $numberInfos[$numberInThisLocation] = $info;
            }
        }

        return $numberInfos;
    }
}