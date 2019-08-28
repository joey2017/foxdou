<?php
namespace App\Admin\Controller\ProductManagement;

use App\Admin\Form\PhoneNumberAttributionEditForm;
use App\MobileNetworkOperator;
use App\Common\Model\PhoneNumberAttribution;
use App\Common\Model\Region;
use App\Reseller\Controller\ResellerBaseController;
use Psr\SimpleCache\InvalidArgumentException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfu\SimpleFormBundle\Form;

/**
 * @Route(defaults={"group": "product-management"})
 */
class PhoneNumberAttributionController extends ResellerBaseController {

    /**
     * @Route("/phone-number-attributions", name="admin_phone_number_attributions_index")
     */
    public function indexAction(Request $request, PhoneNumberAttributionEditForm $editForm, Form $searchForm) {
        $searchForm->init([
            'search_operator_id'   => ['digit'],
            'search_province_code' => ['digit'],
            'search_city_code'     => ['digit'],
            'search_status'        => ['enum[0|1]'],
            'search_text'          => [''],
        ]);


        if (!$request->isXmlHttpRequest()) {
            $allOperators = MobileNetworkOperator::getOperators(MobileNetworkOperator::TYPE_ALL);
            return $this->render('/Admin/ProductManagement/PhoneNumberAttribution/index.twig', ['edit_form' => $editForm, 'search_form' => $searchForm, 'all_operators' => $allOperators]);
        }

        if (!$searchForm->validate($request->query)) {
            return ["status" => false, "msg" => "参数错误"];
        }

        $conditions['p.operator_id']   = $searchForm->search_operator_id;
        $conditions['p.province_code'] = $searchForm->search_province_code;
        $conditions['p.city_code']     = $searchForm->search_city_code;
        $conditions['p.status']       = $searchForm->search_status;
        // $conditions['text'] = ['LIKE' => "%{$searchForm->name}%"];

        global $T;
        $options = [
            'select' => "p.id, p.operator_id, p.operator_prefix, p.number_prefix, p.province_code, p.city_code, p.status, p.created_at, p.updated_at,
                         rp.area_name as province_name, rc.area_name as city_name, 
                         m.name as operator_name, m.is_mvno, m.top_operator_id, mm.name as top_operator_name",
            'from'   => PhoneNumberAttribution::table_name() . ' p',
            'joins'  => "LEFT JOIN {$T(Region::table_name())} rp ON rp.id=p.province_code 
                          LEFT JOIN {$T(Region::table_name())} rc ON rc.id=p.city_code 
                            LEFT JOIN {$T(MobileNetworkOperator::table_name())} m ON m.id=p.operator_id
                              LEFT JOIN {$T(MobileNetworkOperator::table_name())} mm ON mm.id=m.top_operator_id",
            'order'  => 'p.id',
        ];

        list($rows, $total) = PhoneNumberAttribution::paginate($conditions, $options, $searchForm->page, $searchForm->limit);
        foreach ($rows as &$row) {
            $row['status_text'] = (string)$row['status'] === '1' ? '启用' : '禁用';
            $row['is_mvno_text'] = (string)$row['is_mvno'] === '1' ? '是' : '否';
        }

        return $this->json(["status" => true, "data" => $rows, "total" => $total]);
    }

    /**
     * @Route("/phone-number-attributions/save", name="admin_phone_number_attributions_save")
     */
    public function saveAction(Request $request, PhoneNumberAttributionEditForm $form) {
        if (!$form->validate($request->request)) {
            return ["status" => false, "msg" => "参数错误", 'errors' => $form->getErrors()];
        }


        try {
            $attribution          = $form->id ? PhoneNumberAttribution::find($form->id) : new PhoneNumberAttribution();
            $attributes           = $form->all();
            $attribution->set_attributes($attributes);

            $attribution->save();

            return ["status" => true, 'msg' => '保存成功'];
        } catch (\Exception | InvalidArgumentException $e) {
            $context = [];
            $this->logger->error('保存号码归宿地失败', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
            return ["status" => false, 'msg' => '保存号码归宿地失败'];
        }

    }

    /**
     * @Route("/phone-number-attributions/delete", name="admin_phone_number_attributions_delete", methods={"POST"})
     */
    public function deleteAction(Request $request, Form $form) {
        $form->init([
            'id' => ['required, integer'],
        ], 'admin_phone_number_attributions_delete');

        if (!$form->validate($request->request)) {
            return ["status" => false, "msg" => "参数错误", 'errors' => $form->getErrors()];
        }

        PhoneNumberAttribution::delete_by_id($form->id);

        return ["status" => true, 'msg' => '删除成功'];
    }
}
