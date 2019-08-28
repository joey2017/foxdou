<?php

namespace App\Admin\Service;

use App\Reseller\Service\ProductService;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class OrderServiceTest extends KernelTestCase {
    /** @var ProductService */
    private $myService;

    public function setUp() {
        self::bootKernel();
        $this->myService = self::$kernel->getContainer()->get('app.user_management.user_property_service');
    }

}
