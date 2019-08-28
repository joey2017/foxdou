<?php
namespace App\Open\Controller;

use App\Common\Model\Order\OrderRecharge;
use App\Common\Model\Product\Product;
use App\Common\Model\OpenPlatform\App;
use App\Constants;
use App\Open\Model\Service;
use App\Platform;
use App\ProductConstants;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfu\SimpleFormBundle\Form;
use function Symfu\SimpleFormBundle\to_enum;

/**
 * @Route(defaults={"group": "service"})
 */
class ServiceController extends OpenBaseController {

    /**
     * @Route("/service", name="open_service_index")
     */
    public function indexAction(Request $request) {
        return __METHOD__;
    }

    /**
     * @Route("/service/mobile", name="open_service_mobile")
     */
    public function mobileAction(Request $request, Form $form) {
        return $this->serviceCommon($request, $form, Constants::PRODUCT_CATE_MOBILE_PHONE);
    }

    /**
     * @Route("/service/flow", name="open_service_flow")
     */
    public function flowAction(Request $request, Form $form) {
        return $this->serviceCommon($request, $form, Constants::PRODUCT_CATE_DATA_PACKAGE);
    }

    /**
     * @Route("/service/tencent", name="open_service_tencent")
     */
    public function tencentAction(Request $request, Form $form) {
        return $this->serviceCommon($request, $form, Constants::PRODUCT_CATE_TENCENT);
    }

    /**
     * @Route("/service/telephone", name="open_service_telephone")
     */
    public function telephoneAction(Request $request, Form $form) {
        return $this->serviceCommon($request, $form, Constants::PRODUCT_CATE_LINE_PHONE);
    }

    protected function serviceCommon(Request $request, Form $form, $cate_id) {
        $type_tab = $request->query->get('type_tab', 'order');

        switch ($type_tab) {
        case 'order':
            return $this->getOrdersByProductCateId($request, $form, $cate_id, $type_tab);
            break;
        case 'cost':
            $array = [
                Constants::PRODUCT_CATE_MOBILE_PHONE => 'MOBILE',
                Constants::PRODUCT_CATE_DATA_PACKAGE => 'FLOW',
                Constants::PRODUCT_CATE_TENCENT      => 'TENCENT',
                Constants::PRODUCT_CATE_LINE_PHONE   => 'PHONE',
            ];
            return $this->getProductsCost($request, $form, $array[$cate_id], $type_tab);
            break;
        case 'apps':
            // 暂时使用这种方式转换 应用分类：14=>腾讯业务充值,10=>话费充值,17=>固话宽带充值,18=>手机流量充值
            $transfer = [
                '1'  => 10,//手机话费类
                '4'  => 18,//手机流量
                '10' => 17,//固话宽带
                '3'  => 14,//腾讯业务
            ];
            return $this->getAppsByUserId($request, $form, $transfer[$cate_id], $type_tab);
            break;
        default:
            exit('类型错误');
        }
    }

    protected function getOrdersByProductCateId(Request $request, Form $form, $cate_id, $type_tab) {
        $form->init([
            'operator_id'        => ['integer'],
            'cate_id'            => ['integer'],
            'buy_num'            => ['integer'],
            'order_id'           => ['digit'],
            'phone_number'       => ['digit'],
            'status'             => [''],
            'product_name'       => ['max_length[50]'],
            'product_face_value' => ['numeric, min[1], max[9999]'],
            'recharge_amount'    => ['numeric, min[1], max[9999]'],
            'speed'              => ['enum[1|2]'],  // 快充、慢充
            'type_time'          => ['enum[add_time|pay_time|end_time]'],
            'start_time'         => ['date'],
            'end_time'           => ['date'],
        ]);

        if ($request->query->count() < 2) {
            $data = [
                'form'     => $form,
                'cate_id'  => $cate_id,
                'type_tab' => $type_tab
            ];
            return $this->render("/Open/Service/list.twig", $data);
        }

        if (!$form->validate($request->query)) {
            $errors = $form->getErrors();
            return ["status" => false, "msg" => '参数错误，请检查后重新查询: ', 'errors' => $errors];
        }

        $conditions = [
            'user_id'     => $this->getUserId(),
            'platform_id' => Platform::OPEN_PLATFORM,
        ];

        $start_time = strtotime($form->start_time ?? date('Y-m-d'));
        $end_time = strtotime($form->end_time ?? date('Y-m-d')) + 86399;

        if ($end_time - $start_time > 30 * 86400) {
            return ["status" => false, "msg" => '参数错误，时间范围不能超过 30 天'];
        }

        $conditions['operator_id']        = $form->operator_id;
        $conditions['product_cate_id']    = $form->cate_id;
        $conditions['buy_num']            = $form->buy_num;
        $conditions['order_id']           = $form->order_id;
        $conditions['phone_number']       = $form->phone_number;
        $conditions['status']             = strpos($form->status, ',') === false ? $form->status : explode(',', $form->status);
        $conditions['product_name']       = $form->product_name;
        $conditions['product_face_value'] = $form->product_face_value;
        $conditions['recharge_amount']    = $form->recharge_amount;
        $conditions['speed']              = $form->speed;

        $conditions[$form->type_time] = ['BETWEEN' => [date('Y-m-d',$start_time), date('Y-m-d H:i:s',$end_time)]];

        $options = [
            'select' => '`id`, `operator_id`, `phone_number`, `status`, `product_name`, `product_face_value`, `recharge_amount`, `buy_num`, `add_time`, ' .
                '`sell_price`, `real_sell_price`, `pay_time`, `end_time`, `note`, recharge_method, outer_sn',
            'order'  => 'id DESC',
        ];

        // 订单统计
        if ($request->query->get('count') == 'yes') {
            $options['select'] = 'count(id) as count,IFNULL(sum(recharge_amount),0) as sum_money';
            $data['success']   = OrderRecharge::all(array_merge($conditions, ['status' => [OrderRecharge::STATUS_SUCCEED_MAN, OrderRecharge::STATUS_SUCCEED_SYS]]), $options)[0];
            $data['loser']     = OrderRecharge::all(array_merge($conditions, ['status' => [OrderRecharge::STATUS_FAILED_SYS, OrderRecharge::STATUS_FAILED_MAN]]), $options)[0];
            $data['recharge']  = OrderRecharge::all(array_merge($conditions, ['status' => OrderRecharge::STATUS_PROCESSING]), $options)[0];
            $data['nopay']     = OrderRecharge::all(array_merge($conditions, ['status' => OrderRecharge::STATUS_PENDING_PAYMENT]), $options)[0];

            return ['status' => true, 'data' => $data];
        }

        // 订单导出
        if ($request->query->get('export') == 'yes') {
            $options['order']   = 'id ASC'; // 导出记录时按时间先后顺序导出
            $options['hydrate'] = 'true'; // 要返回 model 对象，而不是数组
            $ordersList         = OrderRecharge::all($conditions, $options);

            $rows = [];
            foreach ($ordersList as $order) {
                if (!$rows) {
                    $headers = $this->formatTransactionHeaders(array_keys($order->to_array()));
                    $rows[]  = $this->toCsv($headers);
                }

                if ($line = $this->toCsv($order->export())) {
                    $rows[] = $line;
                }
            }

            $datetime = date("Y-m-d-His");
            $filename = "export-transactions-{$datetime}.csv";
            $contents = join("\r\n", $rows);
            $response = new Response($contents, 200, ['Content-Type' => "text/plain", "Content-Disposition" => "attachment;filename={$filename}"]);

            return $response;
        }

        list($rows, $total) = OrderRecharge::paginate($conditions, $options, $form->page, $form->limit);
        array_walk($rows, function (&$row) {
            if (isset(OrderRecharge::SHOW_USER_STATUSES[$row['status']])) {
                $row['status'] = OrderRecharge::SHOW_USER_STATUSES[$row['status']];
            } else {
                if (isset(OrderRecharge::STATUSES[$row['status']])) {
                    $row['status'] = OrderRecharge::STATUSES[$row['status']];
                } else {
                    $row['status'] = '未知';
                }
            }
            $row['recharge_method'] = !empty($row['recharge_method']) ? Constants::RECHARGE_METHODS[$row['recharge_method']] : '';
        });

        return ["status" => true, "total" => $total, 'data' => $rows];
    }

    protected function getProductsCost(Request $request, Form $form, $cate, $type_tab) {
        $form->init([
            'operator_id' => ['integer'],
            'status'      => [to_enum(ProductConstants::STATUSES)],
            'name'        => ['max_length[50]'],
            'face_value'  => ['numeric, min[1], max[9999]'],
            'page'        => [''],
            'limit'       => [''],
        ]);

        if ($request->query->count() < 2) {
            $data = [
                'form'     => $form,
                'type_tab' => $type_tab
            ];
            return $this->render("/Open/Service/product_cost.twig", $data);
        }

        if (!$form->validate($request->query)) {
            $errors = $form->getErrors();
            return ['status' => false, 'msg' => '参数错误，请检查后重新查询', 'error' => $errors];
        }

        $conditions = [
            //'s.sell_user_id' => $this->getUserId(),
            'platform_id' => Platform::OPEN_PLATFORM,
        ];

        $conditions['operator_id']  = $form->operator_id;
        $conditions['status']       = $form->status;
        $conditions['name']         = $form->name;
        $conditions['face_value']   = $form->face_value;
        $conditions['product_type'] = $cate;

        $options = [
            'select' => '`id`, `operator_id`, `name`, `face_value`, `num`, ' .
                '`status`,`price`,100 as discount',
        ];

        list($data, $total) = Product::paginate($conditions, $options, $form->page, $form->limit);

        return ['status' => true, 'data' => $data, 'total' => $total];
    }

    protected function getAppsByUserId(Request $request, Form $form, $cate_id, $type_tab) {
        $form->init([
            'id'           => ['integer'],
            'name'         => [to_enum(ProductConstants::STATUSES)],
            'service_name' => ['max_length[50]'],
            'pay_type'     => ['numeric, min[1], max[9999]'],
            'status'       => ['numeric, min[1], max[9999]'],
            'page'         => [''],
            'limit'        => ['']
        ]);

        if ($request->query->count() < 2) {
            $data = [
                'form'     => $form,
                'type_tab' => $type_tab
            ];
            return $this->render("/Open/Service/apps.twig", $data);
        }

        if (!$form->validate($request->query)) {
            $errors = $form->getErrors();
            return ['status' => false, 'msg' => '参数错误，请检查后重新查询', 'error' => $errors];
        }

        // 服务分类（cate_id:14=>腾讯业务充值,10=>话费充值,17=>固话宽带充值,18=>手机流量充值）
        $where = ['o.user_id' => $this->getUserId(), 's.cate_id' => $cate_id];

        $where['o.name']     = $form->name;
        $where['s.name']     = $form->service_name;
        $where['o.pay_type'] = $form->pay_type;
        $where['o.status']   = $form->status;

        $options = [
            'select' => 'o.id,o.app_secret,o.name,o.status,o.pay_type,s.name as service_name',
            'from'   => App::table_name() . ' AS o',
            'joins'  => 'LEFT JOIN ' . Service::table_name() . ' as s ON s.id=o.service_id',
            'order'  => 'o.id DESC'
        ];

        list($data, $total) = App::paginate($where, $options, $form->page, $form->limit);
        return ['status' => true, 'data' => $data, 'total' => $total];
    }

    private function formatTransactionHeaders($headers, $charset = 'GB18030') {
        $headerMap = [
            'trade_id' => '流水号',
            'order_id' => '业务单号',
            'name'     => '交易名称',
            'add_time' => '开始时间',
            'log_type' => '交易类型',
            'amount'   => '金额',
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

    private function toCsv($fields) {
        $f = fopen('php://memory', 'r+');
        if (fputcsv($f, $fields) === false) {
            return false;
        }
        rewind($f);
        $csv_line = stream_get_contents($f);

        return rtrim($csv_line);
    }
}
