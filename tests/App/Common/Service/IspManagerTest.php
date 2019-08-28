<?php
/**
 * Created by PhpStorm.
 * User: liang
 * Date: 05/11/2018
 * Time: 9:17 PM
 */

namespace App\Common\Service;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class IspManagerTest extends KernelTestCase {
    /** @var IspManager */
    private $service;

    public function setUp() {
        self::bootKernel();
        $this->service = self::$container->get('App\Common\Service\IspManager');
    }


    public function testCheckAvailability() {
        $number = '17897729999';
        $isAvailable  = $this->service->checkAvailability($number);

        return $isAvailable;
    }

    public function testGetIspInfo($number) {
        if (!($info = MobileNumberChecker::getLocationInfo($number))) {
            return false;
        }

        return $info;
    }

}
