<?php
namespace App\Reseller\Controller;

use App\Common\Model\Order\OrderRecharge;
use App\Common\Model\Product\Product;
use App\Common\Model\Product\ProductSource;
use App\Common\Service\IspManager;
use App\Common\Service\Order\MobileOrderService;
use App\Common\Service\SystemSettingManager;
use App\Common\Service\UserManager;
use App\Common\Service\UuidGenerator;
use App\Common\Utils\Validator;
use App\Platform;
use App\ProductConstants;
use App\Reseller\Form\OrderRechargeForm;
use App\Reseller\Service\ProductService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfu\SimpleFormBundle\Form;
use function App\array_merge_deep;

class OrderController extends ResellerBaseController {

    /**
     * @Route("/orders", name="reseller_orders_index")
     */
    public function indexAction(Request $request, Form $form) {
        return $this->redirectToRoute('reseller_orders_list', ['product_cate_id' => 1]);
    }

    /**
     * @Route("/orders/list", name="reseller_orders_list")
     */
    public function listAction(Request $request, Form $form) {
        $form->init([
            'operator_id'             => ['integer'],
            'product_cate_id'    => ['integer'],
            'order_id'           => ['digit'],
            'phone_number'       => ['digit'],
            'status'             => [''],
            'product_name'       => ['max_length[50]'],
            'product_face_value' => ['numeric, min[1], max[9999]'],
            'recharge_amount'    => ['numeric, min[1], max[9999]'],
            'speed'              => ['enum[1|2]'],  // 快充、慢充
            'from'               => ['date'],
            'to'                 => ['date'],
            'page'               => [''],
            'limit'              => [''],
        ]);

        if (!$request->isXmlHttpRequest()) {
            return $this->render("Reseller/Order/list.twig", ['left_nav' => $this->getLeftMenu(), 'form' => $form]);
        }

        if (!$form->validate($request->query)) {
            $errors = $form->getErrors();
            return ["status" => false, "msg" => '参数错误，请检查后重新查询: ', 'errors' => $errors];
        }

        $conditions = [
            'user_id'     => $this->getUserId(),
            'platform_id' => Platform::RESELLER,
        ];

        if ((strtotime($form->get('to')) - strtotime($form->get('from'))) > 7 * 86400) {
            return ["status" => false, "msg" => '参数错误，时间范围不能超过 7 天'];
        }

        $conditions['operator_id']             = $form->operator_id;
        $conditions['product_cate_id']    = $form->product_cate_id;
        $conditions['order_id']           = $form->order_id;
        $conditions['phone_number']       = $form->phone_number;
        $conditions['status']             = strpos($form->status,',') === false ? $form->status : explode(',',$form->status);
        $conditions['product_name']       = $form->product_name;
        $conditions['product_face_value'] = $form->product_face_value;
        $conditions['speed']              = $form->speed;
        $conditions['recharge_amount']    = $form->recharge_amount;

        $conditions['add_time'] = ['BETWEEN' => [$form->get('from'), $form->get('to')]];
        $options    = [
            'select' => '`id`, `operator_id`, `phone_number`, `status`, `product_name`, `product_face_value`, `recharge_amount`, `buy_num`, `add_time`, ' .
                '`sell_price`,`real_sell_price`,`status`,`pay_time`,`end_time`,`note`,(real_sell_price-sell_price)*buy_num as profit',
            'order'  => 'id DESC',
        ];

        if ($request->query->get('count') == 'yes') {
            $options['select'] = 'count(id) as count,sum(recharge_amount) as recharge_amount,sum(real_sell_price-sell_price) as profit';

            $data['success']  = OrderRecharge::all(array_merge($conditions, ['status' => [OrderRecharge::STATUS_SUCCEED_MAN, OrderRecharge::STATUS_SUCCEED_SYS]]), $options);
            $data['loser']    = OrderRecharge::all(array_merge($conditions, ['status' => [OrderRecharge::STATUS_FAILED_SYS, OrderRecharge::STATUS_FAILED_MAN]]), $options);
            $data['recharge'] = OrderRecharge::all(array_merge($conditions, ['status' => OrderRecharge::STATUS_PROCESSING]), $options);
            $data['nopay']    = OrderRecharge::all(array_merge($conditions, ['status' => OrderRecharge::STATUS_PENDING_PAYMENT]), $options);

            return ['status' => true, 'data' => $data];
        }

        list($rows, $total) = OrderRecharge::paginate($conditions, $options, $form->page, $form->limit);
        array_walk($rows, function (&$row) {
            if (isset(OrderRecharge::SHOW_USER_STATUSES[$row['status']])) {
                $row['status'] = OrderRecharge::SHOW_USER_STATUSES[$row['status']];
            } else if (isset(OrderRecharge::STATUSES[$row['status']])) {
                $row['status'] = OrderRecharge::STATUSES[$row['status']];
            } else {
                $row['status'] = '未知';
            }

        });

        return ["status" => true, "total" => $total, 'data' => $rows];
    }

    /**
     * @Route("/orders/export", name="reseller_orders_export")
     */
    public function exportAction(Request $request, Form $form) {
        list($conditions, $options, $forms) = $this->buildOrderQueryOptions($request->query, $form);
        if (!$options) {
            $error = $forms;
            return new Response("导出失败，{$error}。请检查错误后重新导出。");
        }

        $options['hydrate'] = false;
        list($rows, $total) = OrderRecharge::paginate($conditions, $options);

        //$rows     = FieldTransformer::transform($rows, OrderRecharge::FIELD_NAMES);
        $pageData = ["code" => $rows ? 0 : 1, "msg" => $rows ? "" : "暂无数据", "total" => $total, "data" => $rows];

        return $this->json($pageData);
    }

    private function buildOrderQueryOptions($query, Form $form) {
        $userId = $this->getUser()->id;
        $conds  = ['user_id = ? AND platform_id = ?'];  // 一定需要加上的过滤条件
        $params = [$userId, Platform::RESELLER];

        //$form = new OrderRechargeForm($this->container);
        $form->init([
            'operator_id'             => ['integer'],
            'product_cate_id'    => ['integer'],
            'order_id'           => ['digit'],
            'phone_number'       => ['mobile'],
            'recharge_amount'    => ['decimal'],
            'product_face_value' => ['integer'],
            'status'             => ['digit'],
            'product_name'       => ['max_length[100]'],
            'speed'              => ['digit'],
            'from'               => ['date'],
            'to'                 => ['date'],
        ]);
        if (!$form->validate($query)) {
            $errors = $form->getErrors();
            //            $this->flashError("参数错误，请检查后重新查询");

            return [false, "参数错误，请检查后重新查询"];
        } elseif ((strtotime($form->get('to')) - strtotime($form->get('from'))) > 1 * 31 * 86400) {
            $this->flashError("时间范围不允许超过 1 个月");

            return [false, "时间范围不允许超过 1 个月"];
        } else {
            // 可选过滤条件
            if ($order_id = $form->get('order_id')) {
                $conds[]  = "(id = ?)";
                $params[] = $order_id;
            }
            if ($icp = $form->get('operator_id')) {
                $conds[]  = "(operator_id = ?)";
                $params[] = $icp;
            }
            if ($on = $form->get('phone_number')) {
                $conds[]  = "(phone_number = ?)";
                $params[] = $on;
            }
            if ($order_status = $form->get('status')) {
                $conds[]  = "(status = ?)";
                $params[] = $order_status;
            }
            if ($product_name = $form->get('product_name')) {
                $conds[]  = "(product_name LIKE ?)";
                $params[] = "%{$product_name}%";
            }
            if ($product_cate = $form->get('product_cate_id')) {
                $conds[]  = "(product_cate_id = ?)";
                $params[] = $product_cate;
            }
            if ($product_mianzi = $form->get('product_face_value')) {
                $conds[]  = "(product_face_value = ?)";
                $params[] = $product_mianzi;
            }
            if ($recharge_amount = $form->get('recharge_amount')) {
                $conds[]  = "(recharge_amount = ?)";
                $params[] = $recharge_amount;
            }
            if ($speed = $form->get('speed')) {
                $conds[]  = "(speed >= ?)";
                $params[] = $speed;
            }
            $timeType = $form->get('time_type');
            if ($dateFrom = $form->get('from')) {
                $conds[]  = "({$timeType} >= ?)";
                $params[] = strtotime("{$dateFrom} 00:00:00");
            }
            if ($dateTo = $form->get('to')) {
                $conds[]  = "({$timeType} < ?)";
                $params[] = strtotime("{$dateTo} 23:59:59"); // 到该天
            }
        }

        $page = $form->getInt('page', 1);

        $condsStr   = join(' AND ', $conds);
        $conditions = [$condsStr, $params];
        $options    = [
            'select' => '`id`, `operator_id`, `phone_number`, `status`, `product_name`, `product_face_value`, `recharge_amount`, `speed`, `add_time`',
            'limit'  => self::$pageSize,
            'offset' => ($page - 1) * self::$pageSize,
            'order'  => 'id DESC',
        ];

        return [$conditions, $options, $form];
    }

    /**
     * @Route("/recharge/orders/place-single-order", name="reseller_recharge_orders_place_single_order", methods={"POST"})
     */
    public function placeOrderAction(Request $request, ProductService $productService, MobileOrderService $orderService, UrlGeneratorInterface $urlGenerator, IspManager $ispManager, SystemSettingManager $settingManager) {
        $form = new OrderRechargeForm($this->container);
        if (!$form->validate($request->request)) {
            $errors = $form->getErrors();
            return ['status' => false, 'msg' => '状态异常！请刷新页面后重新提交订单'];
        }

        if (!($numberInfo = $ispManager->getNumberLocationInfo($form->mobile))) {
            return ["status" => false, 'msg' => '查询归属地错误'];
        } elseif (!$ispManager->checkAvailability($form->mobile)) {
            return ["status" => false, 'msg' => '该号码所属的运营商维护了'];
        }

        $productSubType = substr($form->product_info, 0, 1) === 'U' ? ProductConstants::SETTING_SUBJECT_TYPE_USER : ProductConstants::SETTING_SUBJECT_TYPE_GROUP;
        list($productSubId, $sourceId) = explode('S', substr($form->product_info, 1));
        $resellerAccount = $this->getUser()->getResellerAccount();
        if (!$productSubId || !($productInfo = $productService->getProductInfo($resellerAccount, $productSubType, $productSubId)) || $productInfo['status'] != Product::STATUS_ACTIVE) {
            return ['status' => false, 'msg' => '选定的商品不存在或者已经下架，请重新选择后再提交'];
        }

        if (!$this->checkIcpRequirements($productInfo, $numberInfo)) {
            return ['status' => false, 'msg' => '号码归属地与所选商品不一致，请重新选择后再提交'];
        }

        if (!Validator::checkProductPrice($productInfo, $form->recharge_amount)) {
            return ['status' => false, 'msg' => '选择的商品不支持充值该金额或者面值和提交的充值金额不一致'];
        }

        /** @var ProductSource $source */
        $source = null;
        if ($sourceId && (!($source = ProductSource::find($sourceId)) || !$source->isActive())) {
            return ['status' => false, 'msg' => '选定的商品渠道不存在或者已经停售，请重新选择后再提交'];
        }

        // $allowEmptySource = $settingManager->getBool('empty_qudao_add_order', false);
        // if(!$source && !$allowEmptySource) {
        //     return ['status' => false, 'msg' => '该商品渠道维护中'];
        // }elseif(!$source && $allowEmptySource) {
        //     // 没有指定渠道的话，自动分配一个渠道
        //     $source = $productService->assignSource($productInfo, $resellerAccount, $form->recharge_amount, $numberInfo['city_code']);
        // }

        try {
            list($order, $msg) = $orderService->createMobileRechargeOrder($resellerAccount, $productInfo, $source, $numberInfo, $form->recharge_amount, $form->real_sell_price, $form->note, $request->getClientIp());
            $result = ['status' => (bool)$order, 'msg' => $msg];
            if ($order) {
                $result['url'] = $urlGenerator->generate('reseller_recharge_orders_checkout', ['order_id' => $order->id]);
            }
        } catch (\Exception $e) {
            $result = ['status' => false, 'msg' => '付款失败，请重试'];
        }

        return $result;
    }

    /**
     * @Route("/recharge/orders/checkout", name="reseller_recharge_orders_checkout", methods={"GET", "POST"})
     */
    public function checkoutOrderAction(Request $request, MobileOrderService $orderService, UserManager $userManager, IspManager $ispManager) {
        /** @var OrderRecharge $order */
        $orderId = $request->get('order_id');
        if (!$orderId || !($order = OrderRecharge::first(['id' => $orderId, 'user_id' => $this->getUserId()]))) {
            $this->flashError('查无此订单！请勿乱提交信息');
            return $this->render("/Reseller/Recharge/checkoutOrder.twig", ['order' => null, 'error' => '查无此订单！请勿乱提交信息', 'left_nav' => $this->getLeftMenu()]);
        }

        if ($request->getMethod() === Request::METHOD_GET) {
            return $this->render("/Reseller/Recharge/checkoutOrder.twig", ['order' => $order, 'left_nav' => $this->getLeftMenu()]);
        }

        // 开始做数据检校
        $payPassword = $request->request->get('password');
        list($succeed, $msg) = $userManager->verifyPayPassword($this->getUser(), $payPassword);
        if (!$succeed) {
            return ['status' => false, 'msg' => $msg];
        }

        if (!($numberInfo = $ispManager->getNumberLocationInfo($order->phone_number))) {
            return ["status" => false, 'msg' => '查询归属地错误'];
        } elseif (!$ispManager->checkAvailability($order->phone_number)) {
            return ["status" => false, 'msg' => '该号码所属的运营商维护了'];
        }

        $resellerAccount = $this->getUser()->getResellerAccount();
        list($order, $msg) = $orderService->checkoutMobileRechargeOrder($resellerAccount, $order, $numberInfo, $request->getClientIp());

        return ['status' => (bool)$order, 'msg' => $msg];
    }

    /**
     * @Route("/recharge/orders/prepare-order", name="reseller_recharge_orders_prepare_order", methods={"POST"})
     */
    public function checkNumbersAndPrepareOrderAction(Request $request, ProductService $productService, IspManager $ispManager, SessionInterface $session) {
        $defaultAmount = $request->request->getInt('amount');
        $numbersStr    = $request->request->get('numbers');

        list($validNumbers, $invalidNumbers) = $this->parseNumberInfo($numbersStr, $defaultAmount);
        if (!$validNumbers) {
            return ["status" => false, 'msg' => '请输入有效的手机号码'];
        }

        $numberInfos = $ispManager->getNumberLocationInfo(array_keys($validNumbers));
        list($availableNumbers, $unavailableNumbers) = $this->checkNumberIspAvailability($ispManager, $numberInfos, $validNumbers);

        $idx         = 1;
        $products    = [];
        $productData = [];
        $totalPrice  = 0;
        $subAccount  = $this->getUser()->getResellerAccount();
        foreach ($availableNumbers as $number => $numberInfo) {
            list($amount, $subjectType, $subjectId, $sourceId) = $validNumbers[$number];

            if ($subjectType && $subjectId) {
                $productInfos = $productService->getProductInfo($subAccount, $subjectType, $subjectId);
            } else {
                $productInfos = $productService->findAvailableRechargeProducts($subAccount, $numberInfo, $amount, 1, 1);
            }

            if ($productInfos) {
                $productInfo = reset($productInfos); // 只要第一个

                $type     = $productInfo['product_sub_type'] === 'USER' ? 'U' : 'L';
                $sourceId = $productInfo['source']['source_id'] ?? '0';

                $info['idx']             = $idx;
                $info['number']          = $number;
                $info['amount']          = $amount;
                $info['number_location'] = $numberInfo['location'];
                $info['number_status']   = '可用';
                $info['recharge_status'] = '可以充值';
                $info['name']            = "{$productInfo['name']}（成本：{$productInfo['sell_price']}）";
                $info['sell_price']      = (string)$productInfo['sell_price'];
                $info['product_info']    = "{$type}{$productInfo['product_sub_id']}S{$sourceId}";

                $products[]           = $info;
                $productData[$number] = ['sub_type' => $type, 'sub_id' => $productInfo['product_sub_id'], 'source_id' => $sourceId,
                                         'amount'   => $amount, 'name' => $info['name'], 'sell_price' => $productInfo['sell_price'], 'number_info' => $numberInfos[$number]];

                $totalPrice += $productInfo['sell_price'];
                $idx++;
            } else {
                $unavailableNumbers[$number] = [$amount, $subjectType, $subjectId, $sourceId];
                continue;
            }
        }

        $idx                = 1;
        $unavailableNumbers = array_merge_deep($invalidNumbers, $unavailableNumbers);
        $invalidNumberInfos = [];
        foreach ($unavailableNumbers as $number => $infos) {
            $numberInfo = $numberInfos[$number] ?? null;
            @list($amount, $subjectType, $subjectId, $sourceId) = $infos;

            $info['idx']             = $idx;
            $info['number']          = $number;
            $info['amount']          = $amount;
            $info['number_location'] = $numberInfo['location'] ?? '未知';
            $info['number_status']   = isset($numberInfo['location']) ? '可用' : '不可用';
            $info['recharge_status'] = '不可充值';
            $info['name']            = '抱歉，系统找不到合适的商品';
            $info['sell_price']      = "-";
            $info['product_info']    = "-";

            $invalidNumberInfos[] = $info;
            $idx++;
        }

        $uuid              = UuidGenerator::newUuid();
        $preparedOrderData = ['uuid' => $uuid, 'order_infos' => $productData, 'total_price' => $totalPrice, 'balance' => $subAccount->balance, 'time' => time()];
        $session->set('order_data', $preparedOrderData);

        return ["status" => true, 'products' => $products, 'invalid_numbers' => $invalidNumberInfos, 'uuid' => $uuid];
    }

    private function parseNumberInfo2($numbersStr, $defaultAmount): array {
        $originNumbers  = explode("\n", $numbersStr);
        $validNumbers   = [];
        $invalidNumbers = [];
        foreach ($originNumbers as $numberStr) {
            $numberStr = trim($numberStr);
            if (!$numberStr) {
                continue;
            }

            @list($number, $amount) = explode(',', $numberStr);
            $number = trim($number);
            $amount = trim($amount);
            if (!$number) {
                continue;
            }
            if (!preg_match('/^\d+$/', $number) || ($amount && !is_numeric($amount))) {
                $invalidNumbers[$number] = $amount ?: $defaultAmount;
                continue;
            }

            $validNumbers[$number] = $amount ?: $defaultAmount;
        }

        return [$validNumbers, $invalidNumbers];
    }

    private function parseNumberInfo($numbersStr, $defaultAmount): array {
        $originNumbers  = explode("\n", $numbersStr);
        $validNumbers   = [];
        $invalidNumbers = [];
        foreach ($originNumbers as $numberStr) {
            $numberStr = trim($numberStr);
            if (!$numberStr) {
                continue;
            }

            @list($number, $amount, $productSourceInfo) = explode(',', $numberStr);
            $number            = trim($number);
            $amount            = trim($amount) ?: $defaultAmount;
            $productSourceInfo = trim((string)$productSourceInfo);

            if (!$number) {
                continue;
            }

            $subjectType = null;
            $subjectId   = null;
            $sourceId    = null;

            if ($productSourceInfo) {
                $subjectType = substr($productSourceInfo, 0, 1) === 'U' ? ProductConstants::SETTING_SUBJECT_TYPE_USER : ProductConstants::SETTING_SUBJECT_TYPE_GROUP;
                list($subjectId, $sourceId) = explode('S', substr($productSourceInfo, 1));
            }

            if (!preg_match('/^\d{11}$/', $number) || ($amount && !is_numeric($amount))) {
                $invalidNumbers[$number] = [$amount, $subjectType, $subjectId, $sourceId];
                continue;
            }

            $validNumbers[$number] = [$amount, $subjectType, $subjectId, $sourceId];
        }

        return [$validNumbers, $invalidNumbers];
    }

    private function checkNumberIspAvailability(IspManager $ispManager, $numberInfos, $validNumbers): array {
        $unavailableNumbers = [];
        $numberStatuses     = $ispManager->checkAvailability(array_keys($numberInfos));
        foreach ($numberStatuses as $number => $active) {
            if (!$active) {
                $unavailableNumbers[$number] = $validNumbers[$number];
                unset($numberInfos[$number]);
            }
        }
        return [$numberInfos, $unavailableNumbers];
    }

    /**
     * @Route("/recharge/orders/checkout-batch-order", name="reseller_recharge_orders_checkout_batch_order", methods={"POST"})
     */
    public function checkoutBatchOrder(Request $request, ProductService $productService, MobileOrderService $orderService, UrlGeneratorInterface $urlGenerator, SessionInterface $session) {
        $uuid      = $request->request->get('uuid');
        $orderData = $session->get('order_data');
        if (!$uuid || !$orderData || !isset($orderData['uuid']) || $orderData['uuid'] !== $uuid || (time() - $orderData['time']) > 1800) {
            $session->remove('order_data');
            return ['status' => false, 'msg' => '订单状态异常，请重新下单'];
        }

        $subAccount = $this->getUser()->getResellerAccount();
        $totalPrice = $orderData['total_price'];
        if ($subAccount->balance < $totalPrice) {
            return ["status" => false, 'msg' => "余额不足，请先充值。本次批量充值需要的余额为 {$totalPrice}，现有余额为 {$subAccount->balance}。"];
        }

        $result = $orderService->processMobileRechargeOrders($subAccount, $orderData['order_infos'], $request->getClientIp());
        list($succeed, $msg, $failedNumbers) = $result;
        $result = ['status' => $succeed, 'msg' => $msg, 'failed_numbers' => $failedNumbers];

        return $result;
    }

    private function checkIcpRequirements($productInfo, $numberInfo) {
        if ($productInfo['operator_name'] != $numberInfo['operator_name']) {
            return false;
        }
        if ($productInfo['mvno'] != $numberInfo['mvno']) {
            return false;
        }
        if ($productInfo['province_code'] == 1) {
            return true;
        } else {
            if ($productInfo['province_code'] && !$productInfo['city_code']) {
                if ($productInfo['province_code'] != $numberInfo['province_code']) {
                    return false;
                }
            } elseif ($productInfo['province_code'] && $productInfo['city_code']) {
                if ($productInfo['province_code'] != $numberInfo['province_code'] || $productInfo['city_code'] != $numberInfo['city_code']) {
                    return false;
                }
            }
        }
        return true;
    }

    /**
     * 左侧导航
     * @return array
     */
    private function getLeftMenu() {
        return [
            ['name' => '手机话费订单', 'url' => 'list?product_cate_id=1', 'icon' => '&#xe608;', 'img' => '//apistore.foxdou.com/uploads/service/d4d0438deec74b25c08d413732350b63?0.0014853213043255487'],
            ['name' => '手机流量订单', 'url' => 'list?product_cate_id=4', 'icon' => '&#xe612;', 'img' => '//apistore.foxdou.com/uploads/service/af4796192fdbf578dc3895ef6816a283.png?0.022305543320271903'],
            ['name' => '固话宽带订单', 'url' => 'list?product_cate_id=10', 'icon' => '&#xe600;', 'img' => '//apistore.foxdou.com/uploads/service/f62ee3a5d31c700c25914677913c9458.png?0.21023703728866638'],
            ['name' => '腾讯业务订单', 'url' => 'list?product_cate_id=3', 'icon' => '&#xe60b;', 'img' => '//apistore.foxdou.com/uploads/service/753d95c4da563e5f6db581fa9fb94a37.png?0.6723992915045243']
        ];
    }

}
