<?php
namespace App\Common\Command;

use App\Common\Model\Product\Product;
use App\Common\Model\Product\ProductSetting;
use App\Common\Model\Region;
use App\Common\Model\ResellerPriceGroup;
use App\Platform;
use App\ProductConstants;
use SimpleRecord\Connection\Connection;
use SimpleRecord\Connection\ConnectionManager;
use SimpleRecord\Exception\DatabaseException;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class GenerateMobileProductsCommand extends ContainerAwareCommand {

    protected static $defaultName = 'generate:mobile:products';

    /** @var SymfonyStyle */
    private $io;

    /**
     * {@inheritdoc}
     */
    protected function configure() {
        $this
            ->setDescription('生成手机话费充值商品')
            ->addOption('clear',  'C', InputOption::VALUE_NONE, "清空现有商品")
            ->addOption('dry-run',     'd', InputOption::VALUE_NONE, '只模拟操作，不实际保存')
            ->setHelp(<<<HELP
命令 <info>%command.name%</info> 会批量生成充值商品

语法：
      bin/console %command.name% [options]
HELP
            );
    }

    protected function initialize(InputInterface $input, OutputInterface $output) {
        // See https://symfony.com/doc/current/console/style.html
        $this->io = new SymfonyStyle($input, $output);
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     * @return int|null|void
     * @throws DatabaseException
     */
    protected function execute(InputInterface $input, OutputInterface $output) {
        $clear  = $input->getOption('clear');
        $dryRun = $input->getOption('dry-run');

        if($clear && !$dryRun) {
            $begin = microtime(true);
            $this->io->write("Clearing existing records...");

            Product::delete_all([]);
            ProductSetting::delete_all([]);
            $elapsed = (int)(microtime(true) - $begin);
            $this->io->write("Done, used {$elapsed} s");
        }

        $operators = [1 => '移动', 2 => '联通', 3 => '电信'];
        $allFaceValues = [
            ProductConstants::FACE_VALUE_TYPE_FIXED => [10, 20, 30, 50, 100, 200, 300, 500],
            ProductConstants::FACE_VALUE_TYPE_ARBITRARILY => ['1-500'],
        ];
        [$provinces, $cities] = $this->getRegions();

        $begin = microtime(true);
        $this->io->write("Begin generate products...");

        try {
            $total = 0;
            Product::begin_transaction();

            $platformId  = Platform::OPEN_PLATFORM;
            $productType = ProductConstants::PRODUCT_TYPE_MOBILE;
            $categoryId  = null;
            foreach ($operators as $operatorId => $operatorName) {
                $this->io->write($operatorName . ": \n");
                foreach ($provinces as $provinceCode => $provinceName) {
                    $this->io->write('  ' . $provinceName . ": \n");
                    if(!isset($cities[$provinceCode])) {
                        continue;
                    }
                    foreach ($cities[$provinceCode] as $cityCode => $cityName) {
                        $this->io->write('      ' . $cityName . ": \n");
                        foreach (ProductConstants::RECHARGE_SPEED_TYPES as $speedId => $speedText) {
                            $this->io->write("        {$speedText} 固定面值: ");
                            foreach ($allFaceValues[ProductConstants::FACE_VALUE_TYPE_FIXED] as $faceValue) {
                                $this->io->write($faceValue . ", ");
                                $product = $this->createProduct($platformId, $productType, $categoryId, $operatorId, $operatorName, $speedId, $provinceName, $cityName, $speedText, ProductConstants::FACE_VALUE_TYPE_FIXED, $faceValue, 1, $provinceCode, $cityCode);
                                $this->createProductSettings($platformId, $product);
                                $total++;
                            }

                            $this->io->write("\n        {$speedText} 任意充: ");
                            foreach ($allFaceValues[ProductConstants::FACE_VALUE_TYPE_ARBITRARILY] as $num) {
                                $this->io->write($num . ", ");
                                $product = $this->createProduct($platformId, $productType, $categoryId, $operatorId, $operatorName, $speedId, $provinceName, $cityName, $speedText, ProductConstants::FACE_VALUE_TYPE_ARBITRARILY, 1, $num, $provinceCode, $cityCode);
                                $this->createProductSettings($platformId, $product);
                                $total++;
                            }
                            $this->io->write("\n");
                        }
                    }
                }
            }

            Product::commit();

            $elapsed = (int)(microtime(true) - $begin);
            $this->io->write("Done, used {$elapsed} s\n");
            $this->io->write("\nTotal {$total} products\n");

        } catch (\Exception $e) {
            Product::rollback();
            $this->io->writeln($e->getMessage());
            $this->io->writeln($e->getTraceAsString());
        }

    }

    protected function getRegions() {
        $rows      = Region::all(['level' => ['<=' => Region::LEVEL_CITY]]);
        $provinces = ['1' => '全国'];
        $cities    = ['1' => ['0' => '']];

        foreach ($rows as $row) {
            $id       = $row['id'];
            $areaName = $row['short_name'];
            if ((string)$row['level'] === Region::LEVEL_PROVINCE) {
                $provinces[$id] = $areaName;
            } else {
                if (!isset($cities[$row['parent_id']])) {
                    $cities[$row['parent_id']] = ['0' => ''];
                }

                $cities[$row['parent_id']][$id] = $areaName;
            }
        }

        return [$provinces, $cities];
    }

    /**
     * @param $operatorId
     * @param $operatorName
     * @param $speedId
     * @param $provinceName
     * @param $cityName
     * @param $faceValueName
     * @param $speedText
     * @param $faceValueType
     * @param $faceValue
     * @param $provinceCode
     * @param $cityCode
     */
    protected function createProduct($platformId, $productType, $categoryId, $operatorId, $operatorName, $speedId, $provinceName, $cityName, $speedText, $faceValueType, $faceValue, $num, $provinceCode, $cityCode) {
        $faceValueName = $faceValueType == ProductConstants::FACE_VALUE_TYPE_ARBITRARILY ? '任意冲' : intval($faceValue) . '元';

        $attrs = [
            'platform_id'     => $platformId,
            'product_type'    => $productType,
            'category_id'     => $categoryId,
            'operator_id'     => $operatorId,
            'operator_name'   => $operatorName,
            'speed'           => $speedId,
            'name'            => $provinceName . $cityName . $operatorName . $faceValueName . $speedText,
            'face_value_type' => $faceValueType,
            'face_value'      => $faceValue,
            'official_price'  => $faceValue,
            'num'             => $num,
            'price'           => $faceValue,
            'price_limit'     => 1,
            'status'          => 1,
            'strategy'        => 1,
            'area_priority'   => 1,
            'province_code'   => $provinceCode,
            'city_code'       => $cityCode,
            'rebate'          => 0,
            'auto_refund'     => 0,
        ];

        $product = Product::upsert($attrs, true);

        return $product;
    }

    private function createProductSettings($platformId, $product) {
        static $groups = null;
        if($groups === null) {
            $groups = ResellerPriceGroup::allGroups();
        }

        $now = time();
        $settingAttrs = [
            'platform_id'   => $platformId,
            'product_id'    => $product->id,

            'price'         => (float)$product->official_price,
            'enabled'       => 1,
            'sell_status'   => ProductConstants::SELL_STATUS_SELL,
            'auto_refund'   => ProductConstants::REFUND_TYPE_AUTO_REFUND,
            'price_limit'   => ProductConstants::PRICE_LIMIT_TYPE_LIMITED,
            'strategy'      => ProductConstants::STRATEGY_SORTING,
            'area_priority' => ProductConstants::AREA_PRIORITY_CITY,
            'provider_id'   => 'foxdou',

            'edit_time'     => $now,
            'add_time'      => $now,
        ];

        // 所有用户的默认设置
        ProductSetting::upsert(array_merge($settingAttrs, ['subject_type' => ProductConstants::SETTING_SUBJECT_TYPE_DEFAULT, 'subject_id' => 0,]));

        // 每个组的单独设置
        foreach ($groups as $groupId => $groupName) {
            ProductSetting::upsert(array_merge($settingAttrs, ['subject_type' => ProductConstants::SETTING_SUBJECT_TYPE_GROUP, 'subject_id' => $groupId,]));
        }

    }

}
