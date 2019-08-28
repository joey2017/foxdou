<?php

namespace App\Admin\Service;

use App\Reseller\Service\ProductService;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ProductServiceTest extends KernelTestCase {
    /** @var ProductService */
    private $productService;

    public function setUp() {
        self::bootKernel();
        $this->productService = self::$container->get('App\Reseller\Service\ProductService');
    }


}
