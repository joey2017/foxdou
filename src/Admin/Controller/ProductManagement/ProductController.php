<?php

namespace App\Admin\Controller\ProductManagement;

use App\Admin\Controller\AdminBaseController;
use App\Admin\Form\ProductSearchForm;
use App\Admin\Model\AdminOperationLog;
use App\Admin\Model\AdminUser;
use App\Admin\Model\CronJob;
use App\Admin\Service\ProductManager;
use App\Common\Exception\InvalidFormException;
use App\Common\ExternalService\RechargeService\RechargeServiceProviderMap;
use App\MobileNetworkOperator;
use App\Common\Model\Product\Product;
use App\Common\Model\Product\ProductSetting;
use App\Common\Model\Product\ProductSource;
use App\Common\Model\Product\ProductSourceSetting;
use App\Common\Model\Product\ProductTencentCategory;
use App\Common\Model\Product\SourceGroup;
use App\Common\Model\Region;
use App\Common\Model\ResellerPriceGroup;
use App\Common\Model\User\ResellerAccount;
use App\Common\Model\User\User;
use App\Platform;
use App\ProductConstants;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfu\SimpleFormBundle\Form;
use function App\is_email;
use function App\is_mobile;
use function Symfu\SimpleFormBundle\to_enum;

/**
 * @Route("/product-management/products/{product_type}", defaults={"group": "product-management"})
 */
class ProductController extends AdminBaseController {

    protected function productManager(): ProductManager {
        return $this->container->get(__METHOD__);
    }

    /**    商品列表
     * @Route("", name="admin_product_management_products_index")
     */
    public function indexAction(Request $request, ProductSearchForm $form) {
        $categories = ProductTencentCategory::getCategories();
        if (!$request->isXmlHttpRequest()) {
            $topOperators   = MobileNetworkOperator::getOperators(MobileNetworkOperator::TYPE_TOP_OPERATOR);
            $allOperators   = MobileNetworkOperator::getOperators(MobileNetworkOperator::TYPE_ALL);
            $priceGroups = ResellerPriceGroup::all(['platform_id' => Platform::RESELLER]);

            $form->bind($request->query);
            $data = ['form' => $form, 'categories' => $categories, 'top_operators' => $topOperators, 'operators' => $allOperators, 'price_groups' => $priceGroups];
            return $this->render("Admin/ProductManagement/Product/index.twig", $data);
        }

        if (!$form->validate($request->query)) {
            return ['status' => false, 'msg' => '表单数据错误', 'errors' => $form->getErrors()];
        }

        global $T;

        $conditions = [
            'p.product_type'     => $request->get('product_type'),

            'p.face_value_type'  => $form->face_value_type,
            'p.operator_id'      => $form->operator_id,
            'p.speed'            => $form->speed,

            'p.duration'         => $form->duration,
            'p.effective_time'   => $form->effective_time,
            'p.cross_month'      => $form->cross_month,
            'p.max_recharge_num' => $form->max_recharge_num,

            'p.category_id'      => $form->category_id,

            // 搜索商品名称或者ID
            'p.id'               => is_numeric($form->search_product) ? $form->search_product : '',
            'p.name'             => ($form->search_product && !is_numeric($form->search_product)) ? ['LIKE' => "%{$form->search_product}%"] : '',

            'p.created_at'       => strtotime($form->from) ? ['BETWEEN' => [$form->from, $form->to]] : '',
            'p.face_value'       => ['BETWEEN' => [$form->get('face_value_min', 0), $form->get('face_value_max', 9999999)]],

            'ps.sell_status'     => $form->sell_status,
            'ps.auto_refund'     => $form->auto_refund,
            'ps.price_limit'     => $form->price_limit,
            'ps.strategy'        => $form->strategy,
            'ps.area_priority'   => $form->area_priority,
            'ps.price'           => ['BETWEEN' => [$form->get('default_price_min', 0), $form->get('default_price_max', 9999999)]],
        ];

        if ($form->sale_region === ProductConstants::SALE_REGION_COUNTRY) {
            $conditions['p.province_code'] = 1;
        } elseif ($form->sale_region === ProductConstants::SALE_REGION_PROVINCE) {
            $conditions['p.province_code'] = ['!=' => 1];
            $conditions['p.city_code']     = 0;
        } elseif ($form->sale_region === ProductConstants::SALE_REGION_COUNTRY) {
            $conditions['p.city_code'] = ['!=' => 0];
        }

        if($form->subject_type === ProductConstants::SETTING_SUBJECT_TYPE_GROUP) {
            if(!$form->group_id) {
                return ['status' => false, 'msg' => '请先选择定价分组'];
            }

            $conditions['ps.subject_type'] = $form->subject_type;
            $conditions['ps.subject_id']   = $form->group_id;

            $subjectNameSrc = "pg.group_name";
            $joins = "LEFT JOIN {$T(ProductSetting::table_name())} ps on (ps.product_id=p.id)
                        LEFT JOIN {$T(ResellerPriceGroup::table_name())} pg on pg.id=ps.subject_id";
        } elseif($form->subject_type === ProductConstants::SETTING_SUBJECT_TYPE_USER) {
            $criteria = trim($form->criteria);

            $conditions['ps.subject_type'] = $form->subject_type;

            if(is_mobile($criteria)) {
                $conditions['u.mobile'] = $criteria;
            } elseif(is_email($criteria)) {
                $conditions['u.email'] = $criteria;
            } elseif(preg_match('/\d+/', $criteria)) {
                $conditions['u.user_name'] = $criteria;
            } elseif($criteria) {
                $conditions['u.nick_name'] = ['LIKE' => "%{$criteria}%"];
            }

            $subjectNameSrc = "CONCAT(u.user_name, ' (', u.nick_name, ')')";
            $joins = "LEFT JOIN {$T(ProductSetting::table_name())} ps on (ps.product_id=p.id)
                        LEFT JOIN {$T(User::table_name())} u on u.id=ps.subject_id";
        } else {
            $conditions['ps.subject_type'] = ProductConstants::SETTING_SUBJECT_TYPE_DEFAULT;
            $conditions['ps.subject_id']   = 0;

            $subjectNameSrc = "'全部用户'";
            $joins          = "LEFT JOIN {$T(ProductSetting::table_name())} ps on (ps.product_id=p.id)
                                LEFT JOIN {$T(ResellerPriceGroup::table_name())} pg on pg.id=ps.subject_id";
        }

        $options = [
            'select' => "
                    p.id, p.name, FORMAT(p.official_price, 2) as official_price, p.face_value, p.speed, p.num, p.face_value_type,

                    (SELECT count(*) FROM {$T(ProductSource::table_name())} ps WHERE ps.product_id = p.id AND ps.sell_status='SELL') as enabled_source_num, 
                    (SELECT count(*) FROM {$T(ProductSource::table_name())} ps WHERE ps.product_id = p.id) as total_source_num, 

                    {$subjectNameSrc} AS subject_name,
                    ps.enabled        AS subject_enabled,
                    ps.sell_status    AS subject_sell_status,
                    ps.auto_refund    AS subject_auto_refund,
                    ps.price_limit    AS subject_price_limit,
                    ps.strategy       AS subject_strategy,
                    ps.area_priority  AS subject_area_priority,
                    ps.price          AS subject_price,
                    ps.rebate         AS subject_rebate,
                    ps.provider_id    AS subject_provider_id,
 
                    ps.id             AS subject_setting_id,
                    ps.subject_type   AS subject_type,
                    ps.subject_id     AS subject_id,
                    
                    ps.id             AS setting_id
                    ",
            'from'   => "{$T(Product::table_name())} p",
            'joins'  => $joins,
            'order'  => 'p.id',
        ];

        $productIds = [];
        list($rows, $total) = Product::paginate($conditions, $options, $form->page, $form->limit);
        foreach ($rows as &$row) {
            $row['criteria'] = "{$row['id']}:{$row['subject_type']}:{$row['subject_id']}"; // 组成一个方便后面搜索用的查询条件
            $row['subject_strategy_text']      = ProductConstants::STRATEGIES[$row['subject_strategy']] ?? "未知策略（{$row['subject_strategy']}）";
            $row['subject_area_priority_text'] = ProductConstants::AREA_PRIORITIES[$row['subject_area_priority']] ?? "未知优先地区（{$row['subject_area_priority']}）";
            $row['source_num']         = "{$row['enabled_source_num']} / {$row['total_source_num']}";

            $row['subject_provider_name'] = RechargeServiceProviderMap::PROVIDER_NAMES[$row['subject_provider_id']] ?? "未知供应商（{$row['subject_provider_id']}）";

            $productIds[] = $row['id'];
        }

        return ['status' => true, 'data' => $rows, 'total' => $total];
    }

    /**         添加商品 step 1
     * @Route("/add/step-1", name="admin_product_management_products_add_step_1")
     */
    public function addStep1Action(Request $request, Form $form) {
        $categories    = ProductTencentCategory::getCategories();
        $operators     = MobileNetworkOperator::getOperators(MobileNetworkOperator::TYPE_ALL);
        $top_operators = MobileNetworkOperator::getOperators(MobileNetworkOperator::TYPE_TOP_OPERATOR);
        list($provinces, $cities) = $this->getRegions();

        if ($request->isMethod(Request::METHOD_GET)) {
            return $this->render("Admin/ProductManagement/Product/add_step_1.twig",
                ['categories' => $categories, 'operators' => $operators, 'top_operators' => $top_operators, 'provinces' => $provinces, 'cities' => $cities]);
        }

        $productType = $request->get('product_type');
        $methodName      = "process_step_1_form_{$productType}";
        if (!method_exists($this, $methodName)) {
            throw new BadRequestHttpException("Invalid super category id: {$productType}");
        }

        try {
            $products = $this->$methodName($request, $form);
            if(!$products) {
                return ['status' => false, 'msg' => '组合商品数量为零，请填写后重新提交'];
            }
        } catch (InvalidFormException $e) {
            return ['status' => false, 'msg' => $e->getMessage(), 'errors' => $e->getErrors()];
        } catch (\Exception $e) {
            return ['status' => false, 'msg' => '表单错误'];
        }

        $this->session()->set("admin:products:{$productType}:step1", $products);

        return ['status' => true, 'next' => $this->generateUrl('admin_product_management_products_add_step_2', ['product_type' => $request->get('product_type')])];
    }

    /**
     * @param Request $request
     * @param Form    $form
     * @return array
     * @throws InvalidFormException
     */
    public function process_step_1_form_mobile(Request $request, Form $form) {
        $operators = MobileNetworkOperator::getOperators(MobileNetworkOperator::TYPE_ALL);
        list($provinces, $cities) = $this->getRegions();

        $form->init([
            'operator_ids' => ['required', '', 'split[,]'],
            'speed'       => ['required, ' . to_enum(ProductConstants::RECHARGE_SPEED_TYPES)],
            'area_codes'  => ['required', '', 'split[,]'],

            'fixed_face_values'             => ['', '', 'split[,]'],
            'other_face_values'             => ['', '', 'split[,]'],
            'arbitrarily_face_value_ranges' => [''],
        ]);

        if (!$form->validate($request->request)) {
            throw new InvalidFormException('表单错误，请填写后重新提交', $form->getErrors());
        }

        $products = [];

        $operatorIds                   = $form->operator_ids;
        $areaCodes                     = $form->area_codes;
        $fixed_face_values             = $form->fixed_face_values;
        $other_face_values             = $form->other_face_values;
        $arbitrarily_face_value_ranges = $form->arbitrarily_face_value_ranges;

        $topOperators = [1 => "移动", 2 => "联通", 3 => "电信",];

        $idx = 0;
        foreach ($operatorIds as $operatorId) {
            foreach ($areaCodes as $areaCode) {
                list($provinceCode, $cityCode) = preg_split('/:/', $areaCode);
                $isMvno = !isset($topOperators[$operatorId]);

                $provinceName = $provinceCode === '1' ? '全国' : $provinces[$provinceCode];
                $cityName     = $cityCode !== '0' ? $cities[$provinceCode][$cityCode] : '';
                $operatorName = $operators[$operatorId];

                $commonAttrs = [
                    'product_type'  => $request->get('product_type'),
                    'platform_id'   => Platform::RESELLER,
                    'operator_id'   => $operatorId,
                    'operator_name' => $operatorName,
                    'is_mvno'       => $isMvno,
                    'speed'         => $form->speed,
                    'province_code' => $provinceCode,
                    'city_code'     => $cityCode,
                ];

                $speedText = $form->speed === ProductConstants::RECHARGE_SPEED_FAST ? '快充' : '慢充';

                foreach ($fixed_face_values as $fixed_face_value) {
                    $tmpId                = 'tmp_id_' . $idx++;
                    $productAttrs         = array_merge($commonAttrs, ['id'         => $tmpId, 'face_value_type' => ProductConstants::FACE_VALUE_TYPE_FIXED,
                                                                       'face_value' => $fixed_face_value, 'official_price' => $fixed_face_value, 'num' => 1]);
                    $productAttrs['name'] = $provinceName . $cityName . $operatorName . intval($fixed_face_value) . '元' . $speedText;
                    $products[$tmpId]     = $productAttrs;
                }

                if($arbitrarily_face_value_ranges) {
                    $tmpId                = 'tmp_id_' . $idx++;
                    $productAttrs         = array_merge($commonAttrs, ['id'         => $tmpId, 'face_value_type' => ProductConstants::FACE_VALUE_TYPE_ARBITRARILY,
                                                                       'face_value' => 1, 'official_price' => 1, 'num' => $arbitrarily_face_value_ranges]);
                    $productAttrs['name'] = $provinceName . $cityName . $operatorName . '任意充' . $speedText;
                    $products[$tmpId]     = $productAttrs;
                }

                foreach ($other_face_values as $other_face_value) {
                    $tmpId                = 'tmp_id_' . $idx++;
                    $productAttrs         = array_merge($commonAttrs, ['id'         => $tmpId, 'face_value_type' => ProductConstants::FACE_VALUE_TYPE_OTHER,
                                                                       'face_value' => $other_face_value, 'official_price' => $other_face_value, 'num' => 1]);
                    $productAttrs['name'] = $provinceName . $cityName . $operatorName . intval($other_face_value) . '元' . $speedText;
                    $products[$tmpId]     = $productAttrs;
                }
            }
        }

        return $products;
    }

    private function formatFlowFaceValue($faceValue) {
        if ($faceValue < 1000) {
            return number_format($faceValue, 0) . "M";
        } else {
            return number_format($faceValue / 1000, 0) . "G";
        }
    }

    /**
     * @param Request $request
     * @param Form    $form
     * @return array
     * @throws InvalidFormException
     */
    public function process_step_1_form_flow(Request $request, Form $form) {
        $operators = MobileNetworkOperator::getOperators(MobileNetworkOperator::TYPE_TOP_OPERATOR);
        list($provinces, $cities) = $this->getRegions();

        $form->init([
            'operator_id'       => ['required, ' . to_enum($operators)],
            'durations'         => ['required, ' . to_enum(ProductConstants::DURATIONS), '', 'split[,]'],
            'effective_times'   => ['required, ' . to_enum(ProductConstants::EFFECTIVE_TIMES), '', 'split[,]'],
            'cross_months'      => ['required, ' . to_enum(ProductConstants::CROSS_MONTH_TYPES), '', 'split[,]'],
            'fixed_face_values' => ['required, ' . to_enum(ProductConstants::FLOW_FACE_VALUES), '', 'split[,]'],
            'official_prices'   => ['required', '', 'split[,]'],
            'area_codes'        => ['required', '', 'split[,]'],
            'max_recharge_num'  => ['integer, min[0]'],
        ]);

        if (!$form->validate($request->request)) {
            throw new InvalidFormException('表单错误，请填写后重新提交', $form->getErrors());
        }

        $products = [];

        // `price_set_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1为固定价格 2因定利润',
        // `is_mvno` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否虚拟运营商，1是，0否',
        // `mvno` int(11) DEFAULT '0' COMMENT '虚拟运营商id',
        $commonAttrs = [
            'product_type'     => $request->get('product_type'),
            'platform_id'      => Platform::RESELLER,
            'operator_id'      => $form->operator_id,
            'face_value_type'  => ProductConstants::FACE_VALUE_TYPE_FIXED,
            'num'              => 1,
            'max_recharge_num' => $form->max_recharge_num,
        ];

        $idx = 0;
        foreach ($form->area_codes as $areaCode) {
            list($provinceCode, $cityCode) = preg_split('/:/', $areaCode);
            if ($provinceCode !== '1' && $cityCode !== '0' && (!isset($provinces[$provinceCode]) || !isset($cities[$provinceCode][$cityCode]))) {
                throw new InvalidFormException('地区选择错误：系统内无此地区');
            }

            $provinceName = $provinceCode === '1' ? '全国' : $provinces[$provinceCode];
            $cityName     = $cityCode !== '0' ? $cities[$provinceCode][$cityCode] : '';
            $operatorName = $operators[$form->operator_id];

            foreach ($form->durations as $duration) {
                foreach ($form->effective_times as $effective_time) {
                    foreach ($form->cross_months as $cross_month) {
                        foreach ($form->fixed_face_values as $valueIdx => $faceValue) {
                            $officialPrice = $form->official_prices[$valueIdx];
                            if (!is_numeric($officialPrice)) {
                                throw new InvalidFormException("面值为 {$faceValue} 的商品没有填写官方售价");
                            }

                            $tmpId              = 'tmp_id_' . $idx++;
                            $durationText       = ProductConstants::DURATIONS[$duration];
                            $effectiveTimeText  = ProductConstants::EFFECTIVE_TIMES[$effective_time];
                            $crossMonthText     = ProductConstants::CROSS_MONTH_TYPES[$cross_month];
                            $faceValueText      = ProductConstants::FLOW_FACE_VALUES[$faceValue];
                            $maxRechargeNumText = $form->max_recharge_num ? "当月限充{$form->max_recharge_num}次" : '不限';
                            $name               = "{$provinceName}{$cityName}{$operatorName}流量{$faceValueText}直冲（{$durationText}/{$effectiveTimeText}/{$crossMonthText}/{$maxRechargeNumText}）";

                            $attrs = [
                                'id'             => $tmpId,
                                'name'           => $name,
                                'operator_name'  => $operatorName,
                                'province_code'  => $provinceCode,
                                'city_code'      => $cityCode,
                                'duration'       => $duration,
                                'effective_time' => $effective_time,
                                'cross_month'    => $cross_month,
                                'face_value'     => $faceValue,
                                'official_price' => $officialPrice,
                            ];

                            $attrs = array_merge($commonAttrs, $attrs);

                            $products[$tmpId] = $attrs;
                        }
                    }
                }
            }
        }

        return $products;
    }

    public function process_step_1_form_telephone(Request $request, Form $form) {
        $operators = MobileNetworkOperator::getOperators(MobileNetworkOperator::TYPE_ALL);
        list($provinces, $cities) = $this->getRegions();

        $form->init([
            'operator_id' => ['required, integer'],
            'speed'       => ['required, enum[1|2]'],
            'area_codes'  => ['required'],

            'fixed_face_values'             => [''],
            'arbitrarily_face_value_ranges' => [''],
            'other_face_values'             => [''],
        ]);

        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '表单错误', 'errors' => $form->getErrors()];
        }

        $products = [];

        $areaCodes                     = preg_split('/,/', $form->area_codes);
        $fixed_face_values             = preg_split('/,/', $form->fixed_face_values);
        $other_face_values             = preg_split('/,/', $form->other_face_values);
        $arbitrarily_face_value_ranges = $form->arbitrarily_face_value_ranges;

        $topOperators = [1 => "移动", 2 => "联通", 3 => "电信",];

        $idx = 0;
        foreach ($areaCodes as $areaCode) {
            list($provinceCode, $cityCode) = preg_split('/:/', $areaCode);
            $isMvno = isset($topOperators[$form->operator_id]);

            $provinceName = $provinceCode === '1' ? '全国' : $provinces[$provinceCode];
            $cityName     = $cityCode !== '0' ? $cities[$provinceCode][$cityCode] : '';
            $operatorName = $operators[$form->operator_id];

            $commonAttrs = [
                'product_type'  => $request->get('product_type'),
                'platform_id'   => Platform::RESELLER,
                'operator_id'   => $form->operator_id,
                'operator_name' => $operatorName,
                'is_mvno'       => $isMvno,
                'mvno'          => $isMvno ? $form->operator_id : null,
                'speed'         => $form->speed,
                'province_code' => $provinceCode,
                'city_code'     => $cityCode,
            ];

            $speedText = $form->speed === ProductConstants::RECHARGE_SPEED_FAST ? '快充' : '慢充';

            foreach ($fixed_face_values as $fixed_face_value) {
                $tmpId                = 'tmp_id_' . $idx++;
                $productAttrs         = array_merge($commonAttrs, ['id'         => $tmpId, 'face_value_type' => ProductConstants::FACE_VALUE_TYPE_FIXED,
                                                                   'face_value' => $fixed_face_value, 'num' => 1]);
                $productAttrs['name'] = $provinceName . $cityName . $operatorName . '固话' . intval($fixed_face_value) . '元' . $speedText;
                $products[$tmpId]     = $productAttrs;
            }

            $tmpId                = 'tmp_id_' . $idx++;
            $productAttrs         = array_merge($commonAttrs, ['id'         => $tmpId, 'face_value_type' => ProductConstants::FACE_VALUE_TYPE_ARBITRARILY,
                                                               'face_value' => 1, 'num' => $arbitrarily_face_value_ranges]);
            $productAttrs['name'] = $provinceName . $cityName . $operatorName . '固话' . '任意充' . $speedText;
            $products[$tmpId]     = $productAttrs;

            foreach ($other_face_values as $other_face_value) {
                $tmpId                = 'tmp_id_' . $idx++;
                $productAttrs         = array_merge($commonAttrs, ['id'         => $tmpId, 'face_value_type' => ProductConstants::FACE_VALUE_TYPE_OTHER,
                                                                   'face_value' => $other_face_value, 'num' => 1]);
                $productAttrs['name'] = $provinceName . $cityName . $operatorName . '固话' . intval($other_face_value) . '元' . $speedText;
                $products[$tmpId]     = $productAttrs;
            }
        }

        return ['status' => true, 'products' => $products];
    }

    public function process_step_1_form_tencent(Request $request, Form $form) {
        // $categories = ProductTencentCategory::getCategories();

        $form->init([
            'category_id' => ['required, integer'],

            'fixed_face_values'             => [''],
            'arbitrarily_face_value_ranges' => [''],
            'other_face_values'             => [''],
        ]);

        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '表单错误', 'errors' => $form->getErrors()];
        }

        if (!($category = ProductTencentCategory::find($form->category_id))) {
            return ['status' => false, 'msg' => '系统无此类目'];
        }

        $products = [];

        $fixed_face_values             = preg_split('/,/', $form->fixed_face_values);
        $other_face_values             = preg_split('/,/', $form->other_face_values);
        $arbitrarily_face_value_ranges = $form->arbitrarily_face_value_ranges;

        $idx = 0;

        $commonAttrs = [
            'product_type' => $request->get('product_type'),
            'platform_id'  => Platform::RESELLER,
            'category_id'  => $form->category_id,
        ];

        foreach ($fixed_face_values as $fixed_face_value) {
            $tmpId                = 'tmp_id_' . $idx++;
            $productAttrs         = array_merge($commonAttrs, ['id'         => $tmpId, 'face_value_type' => ProductConstants::FACE_VALUE_TYPE_FIXED,
                                                               'face_value' => $fixed_face_value, 'num' => 1]);
            $productAttrs['name'] = $category->name . intval($fixed_face_value) . '元直冲';
            $products[$tmpId]     = $productAttrs;
        }

        $tmpId                = 'tmp_id_' . $idx++;
        $productAttrs         = array_merge($commonAttrs, ['id'         => $tmpId, 'face_value_type' => ProductConstants::FACE_VALUE_TYPE_ARBITRARILY,
                                                           'face_value' => 1, 'num' => $arbitrarily_face_value_ranges]);
        $productAttrs['name'] = $category->name . '任意充直冲';
        $products[$tmpId]     = $productAttrs;

        foreach ($other_face_values as $other_face_value) {
            $tmpId                = 'tmp_id_' . $idx++;
            $productAttrs         = array_merge($commonAttrs, ['id'         => $tmpId, 'face_value_type' => ProductConstants::FACE_VALUE_TYPE_OTHER,
                                                               'face_value' => $other_face_value, 'num' => 1]);
            $productAttrs['name'] = $category->name . intval($other_face_value) . '元直冲';
            $products[$tmpId]     = $productAttrs;
        }

        return ['status' => true, 'products' => $products];
    }

    /**         添加商品 step 2
     * @Route("/add/step-2", name="admin_product_management_products_add_step_2")
     */
    public function addStep2Action(Request $request, Form $form) {
        $productType = $request->get('product_type');
        $products    = $this->session()->get("admin:products:{$productType}:step1");

        if ($request->isMethod(Request::METHOD_GET)) {
            if (!$products) {
                $this->flashError('数据错误，暂存的商品列表为空！请返回第一步重新提交');
                return $this->redirectToRoute('admin_product_management_products_add_step_1');
            }

            $operators     = MobileNetworkOperator::getOperators(MobileNetworkOperator::TYPE_ALL);
            $top_operators = MobileNetworkOperator::getOperators(MobileNetworkOperator::TYPE_TOP_OPERATOR);
            // list($provinces, $cities) = $this->getRegions();

            return $this->render("Admin/ProductManagement/Product/add_step_2.twig",
                ['product_type' => $productType, 'products' => $products, 'operators' => $operators, 'top_operators' => $top_operators]);
        }

        $ids = array_filter($request->request->get('ids'), function ($v) { return $v !== ''; });

        if (!$ids) {
            return ['status' => false, 'msg' => '表单错误', 'errors' => $form->getErrors()];
        }

        foreach ($ids as $id) {
            if (!($productAttrs = $products[$id] ?? [])) {
                return ['status' => false, 'msg' => '表单错误：提交数据不完整'];
            }
            if (!($name = $request->request->get("name_{$id}"))) {
                return ['status' => false, 'msg' => '表单错误：提交数据不完整'];
            }
            if (!($num = $request->request->get("num_{$id}"))) {
                return ['status' => false, 'msg' => '表单错误：提交数据不完整'];
            }

            $productAttrs['name'] = $name;
            $productAttrs['num']  = $num;

            $products[$id] = $productAttrs;
        }

        $this->session()->set("admin:products:{$productType}:batch_edit", $products);

        return ['status' => true, 'next' => $this->generateUrl('admin_product_management_products_add_step_3', ['product_type' => $productType])];
    }

    /**         添加商品 step 3
     * @Route("/add/step-3", name="admin_product_management_products_add_step_3")
     */
    public function addStep3Action(Request $request) {
        $superCategoryId = $request->get('product_type');
        $products        = $this->session()->get("admin:products:{$superCategoryId}:batch_edit");

        if (!$products) {
            $this->flashError('数据错误，暂存的商品列表为空！请返回第一步重新提交');
            return $this->redirectToRoute('admin_product_management_products_add_step_1');
        }

        $priceGroups = ResellerPriceGroup::all(['platform_id' => Platform::RESELLER], ['select' => 'id, group_name, 1 as checked', 'order' => 'id']);

        return $this->render("Admin/ProductManagement/Product/add_step_3.twig",
            ['products' => $products, 'price_groups' => $priceGroups, 'product_type' => $superCategoryId]);
    }

    /**
     * 批量保存商品（包括新增和更新）
     * @Route("/{mode}/batch-save", name="admin_product_management_products_batch_save")
     */
    public function batchSaveAction(Request $request, $mode) {
        try {
            [$scheduledAt, $productInfos, $defaultSettings, $groupSettings, $specificUserSettings] = $this->verifyAndGetProductData($request);

            $user    = $this->getAdminUser();
            $context = ['user_id' => $user->id, 'product_ids' => array_keys($productInfos)];

            if (!$scheduledAt) {
                if ($mode === 'edit') {
                    $this->productManager()->batchUpdateProducts($user, $productInfos, $defaultSettings, $groupSettings, $specificUserSettings);
                } else {
                    $this->productManager()->batchCreateProducts($user, $productInfos, $defaultSettings, $groupSettings, $specificUserSettings);
                }

                $message = '保存成功';
            } else {
                $payload = ['products' => $productInfos, 'default_settings' => $defaultSettings, 'group_settings' => $groupSettings, 'specific_user_settings' => $specificUserSettings];

                $job                  = new CronJob();
                $job->creator_user_id = $user->id;
                $job->name            = 'product:update_price';
                $job->subject_type    = $request->get('product_type');
                $job->title           = '定时更新商品价格';
                $job->platform_id     = Platform::RESELLER;
                $job->enabled         = true;
                $job->run_once        = true;
                $job->status          = CronJob::STATUS_PENDING;
                $job->scheduled_at    = $scheduledAt;
                $job->payload         = json_encode($payload);
                $job->save();

                $message = '保存成功，已自动创建定时更新价格任务';
            }

            return ['status' => true, 'msg' => $message, 'next' => $this->generateUrl('admin_product_management_products_index', ['product_type' => $request->get('product_type')])];
        } catch (InvalidFormException $e) {
            return ['status' => false, 'msg' => $e->getMessage()];
        } catch (\Exception $e) {
            $this->logger->error('批量保存商品失败', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));

            return ['status' => false, 'msg' => '保存出错，请重试'];
        }
    }

    /**
     * @Route("/delete", name="admin_product_management_products_delete_by_ids")
     */
    public function delete_by_idsAction(Request $request, Form $form) {
        $form->init([
            'ids' => ['required', '', 'split[,]']
        ], 'admin_products');

        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '表单验证失败', 'errors' => $form->getErrors()];
        }

        try {
            Product::begin_transaction();

            $rowsAffected  = Product::delete_all(['id' => $form->ids]);
            $rowsAffected2 = ProductSetting::delete_all(['product_id' => $form->ids]);
            $rowsAffected3 = ProductSource::delete_all(['product_id' => $form->ids]);
            $rowsAffected4 = ProductSourceSetting::delete_all(['product_id' => $form->ids]);

            Product::commit();
        } catch (\Exception $e) {
            Product::rollback();
            $context = [];
            $this->logger->error('删除商品失败', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
        }

        $user = $this->getAdminUser();
        $this->adminLogMgr()->createLog($user, AdminOperationLog::OPERATION_DELETE, AdminOperationLog::SUBJECT_PRODUCT,
            "用户 {$user} 删除了 {$rowsAffected} 个商品和相关的数据", $request->getClientIp(), ['user_id' => $user->id, 'ids' => $form->ids]);

        return ['status' => true, 'msg' => '删除成功'];
    }

    /**
     * @Route("/batch-update-attributes", name="admin_product_management_products_batch_update_attributes", methods={"POST"})
     */
    public function batch_update_attributesAction(Request $request, Form $form) {
        $form->init([
            'product_ids'   => ['required', '', 'split[,]'],
            'num'           => [''],

        ], 'admin_products');

        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '表单验证失败', 'errors' => $form->getErrors()];
        }

        $updateAttributes = array_filter($form->all(), function($v){ return $v !== '';});
        unset($updateAttributes['product_ids']);

        $rowsAffected = Product::update_all($updateAttributes, ['id' => $form->product_ids]);

        $user    = $this->getAdminUser();
        $context = ['user_id' => $user->id, 'product_ids' => $form->product_ids, 'attributes' => $updateAttributes];
        $message = "用户 {$user} 修改了 {$rowsAffected} 个商品的属性：" . json_encode($updateAttributes);

        $this->adminLogMgr()->createLog($user, AdminOperationLog::OPERATION_EDIT, AdminOperationLog::SUBJECT_PRODUCT, $message, $request->getClientIp(), $context);

        return ['status' => true, 'msg' => '操作成功'];
    }

    /**
     * @Route("/batch-update-settings", name="admin_product_management_products_batch_update_settings", methods={"POST"})
     */
    public function batch_update_settingsAction(Request $request, Form $form) {
        $form->init([
            'setting_ids'   => ['required', '', 'split[,]'],

            'enabled'       => [to_enum(ProductConstants::SETTING_ENABLE_STATUSES)],
            'sell_status'   => [to_enum(ProductConstants::SELL_STATUSES)],
            'auto_refund'   => [to_enum(ProductConstants::REFUND_TYPES)],
            'price_limit'   => [to_enum(ProductConstants::PRICE_LIMIT_TYPES)],
            'strategy'      => [to_enum(ProductConstants::STRATEGIES)],
            'area_priority' => [to_enum(ProductConstants::AREA_PRIORITIES)],
            'provider_id'   => [to_enum(RechargeServiceProviderMap::PROVIDERS)],
            'rebate'        => ['numeric, min[0], max[100]'],
            'price'         => ['numeric, min[0]'],

        ], 'admin_products');

        $allowedAttributes      = [
            'sell_status'   => '上架状态',
            'auto_refund'   => '失败自动退款状态',
            'price_limit'   => '限价状态',
            'strategy'      => '分流策略',
            'area_priority' => '地区优先级别',
            'provider_id'   => '供应商',
            'rebate'        => '返现比例',
            'price'         => '一般售价',
        ];

        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '表单验证失败', 'errors' => $form->getErrors()];
        }

        $updateSettings = array_filter($form->all(), function($v){ return $v !== '';});
        unset($updateSettings['setting_ids']);

        $rowsAffected = ProductSetting::update_all($updateSettings, ['id' => $form->setting_ids]);

        $user    = $this->getAdminUser();
        $context = ['user_id' => $user->id, 'setting_ids' => $form->setting_ids, 'settings' => $updateSettings];
        $message = "用户 {$user} 修改了 {$rowsAffected} 个商品的设置属性：" . json_encode($updateSettings);

        $this->adminLogMgr()->createLog($user, AdminOperationLog::OPERATION_EDIT, AdminOperationLog::SUBJECT_PRODUCT, $message, $request->getClientIp(), $context);

        return ['status' => true, 'msg' => '操作成功'];
    }

    /**     批量改价格
     * @Route("/batch-edit-price", name="admin_product_management_products_batch_edit_price")
     */
    public function batch_edit_priceAction(Request $request) {
        $productIds = array_filter(preg_split('/,/', $request->query->get('ids')), function ($v) { return $v !== ''; });
        $options    = ['select' => 'id, name, face_value, official_price'];
        if (!$productIds || !($products = Product::all(['id' => $productIds], $options))) {
            $this->flashError('请先选中商品再点击修改价格');
            return $this->redirectToRoute('admin_product_management_products_index');
        }
        if (count($productIds) !== count($products)) {
            $this->flashError('Id数据不合法');  // 意味着提交上来的数据是人为伪造的数据
            return $this->redirectToRoute('admin_product_management_products_index');
        }

        $priceGroups     = ResellerPriceGroup::all(['platform_id' => Platform::RESELLER], ['select' => 'id, group_name, 0 as checked']);
        $rows            = ProductSetting::all(['product_id' => $productIds]);
        $productSettings = [];
        foreach ($rows as $row) {
            $product_id   = $row['product_id'];
            $subject_type = $row['subject_type'];
            $subject_id   = $row['subject_id'];
            $productSettings[$product_id][$subject_type][$subject_id] = $row;
        }

        $keyedProducts = [];
        foreach ($products as &$product) {
            $product_id = $product['id'];

            foreach ($priceGroups as &$priceGroup) {
                $groupId = $priceGroup['id'];
                if ($productSettings[$product_id][ProductConstants::SETTING_SUBJECT_TYPE_GROUP][$groupId] ?? false) {
                    $priceGroup['checked'] = 1;
                }
            }

            $keyedProducts[$product_id] = $product;
        }

        $this->session()->set('admin:products:mobile:batch_edit', $keyedProducts);

        return $this->render("Admin/ProductManagement/Product/batch_edit_price.twig", ['products' => $products, 'price_groups' => $priceGroups, 'product_settings' => $productSettings]);
    }

    /**
     * 编辑单个商品
     * @Route("/edit", name="admin_product_management_products_edit")
     */
    public function editAction(Request $request, Form $form) {
        $productType = $request->get('product_type');
        $commonFields = ['name' => ['required, min_length[5], max_length[50]']];
        switch (strtoupper($productType)) {
        case ProductConstants::PRODUCT_TYPE_FLOW:
            $fields = ['max_recharge_num'  => ['required, integer'], 'official_price' => ['required, decimal'] ];
            break;
        case ProductConstants::PRODUCT_TYPE_MOBILE:
            $fields = ['num'  => ['required']];
            break;
        case ProductConstants::PRODUCT_TYPE_TENCENT:
            $fields = ['official_price' => ['required, decimal', 'num' => ['required']]];
            break;
        case ProductConstants::PRODUCT_TYPE_TELEPHONE:
            $fields = ['num'  => ['required']];
            break;
        default:
            $this->flashError('参数错误');
            return $this->redirectToRoute('admin_product_management_products_index', ['product_type' => $request->get('product_type')]);
        }
        $form->init(array_merge($commonFields, $fields), 'admin_products');

        if (!($productId = $request->query->getInt('id')) || !($product = Product::find($productId))) {
            $this->flashError('参数错误');
            return $this->redirectToRoute('admin_product_management_products_index', ['product_type' => $request->get('product_type')]);
        }

        if ($request->isMethod(Request::METHOD_GET)) {
            $attrs = $product->attributes();
            $form->bind($attrs);
            $operators = MobileNetworkOperator::getOperators(MobileNetworkOperator::TYPE_ALL);
            $categories = ProductTencentCategory::getCategories();
            return $this->render("Admin/ProductManagement/Product/edit.twig",
                ['product' => $product, 'form' => $form, 'provinces' => Region::PROVINCES, 'cities' => Region::CITIES,
                 'operators' => $operators, 'categories' => $categories]);
        }

        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '表单验证失败', 'errors' => $form->getErrors()];
        }

        $user            = $this->getAdminUser();
        $context         = ['user_id' => $user->id, 'product_id' => $productId];

        try {
            $oldAttrs  = $product->attributes();
            $formAttrs = $form->all();
            $product->set_attributes($formAttrs);
            $product->save();

            $context['attrs'] = $product->diff($oldAttrs);

            $this->adminLogMgr()->createLog($user, AdminOperationLog::OPERATION_EDIT, AdminOperationLog::SUBJECT_PRODUCT,
                "用户 {$user} 编辑了商品 {$product}", $request->getClientIp(), $context);

            return ['status' => true, 'msg' => '保存成功',
                    'next' => $this->generateUrl('admin_product_management_products_index', ['product_type' => $request->get('product_type')])];
        } catch (\Exception $e) {
            $this->logger->error('Error', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));

            return ['status' => false, 'msg' => '保存失败，请重试'];
        }
    }

    /**
     * @Route("/update-product-source-settings", name="admin_product_management_products_update_product_source_settings", methods={"POST"})
     */
    public function update_product_source_settingsAction(Request $request, Form $form) {
        $form->init([
            'product_ids'     => ['required', '', 'split[,]'],
            'source_group_id' => ['required'],
            'sort'            => ['required, integer'],
            'weight'          => ['required, integer'],
            'enabled'         => ['required, enum[1|0]'],
        ]);

        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '表单验证失败', 'errors' => $form->getErrors()];
        }

        global $T;

        // UPDATE yzb_product_products_source_settings ss  INNER JOIN yzb_sell_template sg  SET `sort`=?, `weight`=?, `enabled`=? WHERE (`product_id` IN(?,?,?,?) AND `source_id`=?)

        $updates    = ['ss.sort' => $form->sort, 'ss.weight' => $form->weight, 'ss.enabled' => $form->enabled];
        $conditions = ['ss.product_id' => $form->product_ids, 'sg.id' => $form->source_group_id];
        $options    = [
            'from'  => "{$T(ProductSourceSetting::table_name())} ss",
            'joins' => "INNER JOIN {$T(SourceGroup::table_name())} sg ",
        ];

        $rowsAffected = ProductSourceSetting::update_all($updates, $conditions, $options);

        return ['status' => true, 'msg' => '按供货模板修改货源策略属性成功'];
    }

    /**
     * @Route("/update-provider", name="admin_product_management_products_update_provider", methods={"POST"})
     */
    public function update_providerAction(Request $request, Form $form) {
        $form->init([
            'setting_ids' => ['required', '', 'split[,]'],
            'provider_id' => ['required'],
        ]);

        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '表单验证失败', 'errors' => $form->getErrors()];
        }

        global $T;

        $rowsAffected = ProductSetting::update_all(['provider_id' => $form->provider_id], ['id' => $form->setting_ids]);

        return ['status' => true, 'msg' => '修改供应商成功'];
    }

    protected function getRegions() {
        $rows      = Region::all(['level' => ['<=' => Region::LEVEL_CITY]]);
        $provinces = [];
        $cities    = [];
        foreach ($rows as $row) {
            $id       = $row['id'];
            $areaName = $row['short_name'];
            if ((string)$row['level'] === Region::LEVEL_PROVINCE) {
                $provinces[$id] = $areaName;
            } else {
                if (!isset($cities[$row['parent_id']])) {
                    $cities[$row['parent_id']] = [];
                }

                $cities[$row['parent_id']][$id] = $areaName;
            }
        }

        return [$provinces, $cities];
    }

    /**
     * @param $settings
     * @throws InvalidFormException
     */
    private function verifySettingData($settings) {
        static $validValues = [
            'sell_status'   => [ProductConstants::SELL_STATUSES, '上架状态不能为空'],
            'auto_refund'   => [ProductConstants::REFUND_TYPES, '失败自动退款状态不能为空'],
            'price_limit'   => [ProductConstants::PRICE_LIMIT_TYPES, '限价设置不能为空'],
            'strategy'      => [ProductConstants::STRATEGIES, '货源策略不能为空'],
            'area_priority' => [ProductConstants::AREA_PRIORITIES, '地区优先级不能为空'],
        ];

        foreach ($settings as $key => $value) {
            if ($key === 'price' && !is_numeric($value)) {
                throw new InvalidFormException("表单错误：提交数据不完整: 价格必须是数字");
            } elseif (isset($validValues[$key]) && !isset($validValues[$key][0])) {
                throw new InvalidFormException("表单错误：提交数据不完整: {$validValues[$key][1]}");
            }
        }
    }

    /**
     * @param Request $request
     * @return array
     * @throws InvalidFormException
     */
    private function verifyAndGetProductData(Request $request) {
        if (!$postedData = json_decode($request->getContent(), true)) {
            throw new InvalidFormException('表单错误：提交数据为空');
        }

        $productType       = $request->get('product_type');
        $batchEditProducts = $this->session()->get("admin:products:{$productType}:batch_edit");

        $scheduledAt          = $postedData['scheduled_at'] ?? '';
        $submittedProducts    = $postedData['products'];

        $defaultSettings      = $postedData['default_settings'] ?? [];
        $allGroupSettings     = $postedData['group_settings'];
        $specificUserSettings = $postedData['specific_user_settings'] ?? [];
        $setSpecificUsers     = $postedData['set_specific_users'] ?? false;
        $specificUserNames    = $postedData['specific_user_names'] ?? '';

        if ($scheduledAt && !strtotime($scheduledAt)) {
            throw new InvalidFormException('计划日期格式错误');
        }

        // 检查数据合法性
        if ($batchEditProducts && count($batchEditProducts) !== count($submittedProducts)) {
            throw new InvalidFormException('表单错误：提交的商品数量和上一步骤提交的商品数量不一致');
        }

        // 检查数据完整性
        $mergedProductInfos = [];
        foreach ($submittedProducts as $productId => $product) {
            if ($batchEditProducts && !isset($batchEditProducts[$productId])) {
                throw new InvalidFormException('表单错误：提交的商品数量和上一步骤提交的商品不一致');
            }
            $mergedProductInfos[$productId] = array_merge($batchEditProducts[$productId], $product);
        }

        foreach ($defaultSettings as $productId => $settings) {
            $this->verifySettingData($settings);
        }

        foreach ($allGroupSettings as $productIdKey => &$groupSettings) {
            foreach ($groupSettings as $groupId => &$settings) {
                $settings['enabled'] = (int)($settings['enabled'] ?? 0);
                $this->verifySettingData($settings);
            }
        }

        $specificUserIds = [];
        if ($setSpecificUsers && $specificUserNames) {
            $specificUserNames = array_filter(preg_split('/\s+/', $specificUserNames));
            if ($specificUserNames) {
                try {
                    $specificUserIds = User::getIdsByUserName($specificUserNames);
                } catch (\Exception $e) {
                    throw new InvalidFormException($e->getMessage());
                }
            }
        }
        if($setSpecificUsers) {
            foreach ($specificUserSettings as $productId => &$settings) {
                $settings['enabled'] = 1;   // 既然专门指定了特殊用户，那默认状态肯定是开启的
                $this->verifySettingData($settings);
            }
        }
        $verifiedSpecificUserSettings = ['specific_user_ids' => $specificUserIds, 'settings' => $specificUserSettings];

        return [$scheduledAt, $mergedProductInfos, $defaultSettings, $allGroupSettings, $verifiedSpecificUserSettings];
    }
}
