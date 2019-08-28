<?php

namespace App\Admin\Controller;

use App\Common\Model\User\SubAccountLevel;
use App\Platform;
use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserSubAccountLevelController extends AdminBaseController {
    private $formFields = [
        'id'      => ['natural'],
        'name'    => ['min_length[1], max_length[50]'],
        'note'    => ['max_length[255]'],
        'platform_id'  => ["natural"],
        'default' => ["enum[0|1]"],
    ];

    /**
     * @Route("/users/levels", name="admin_users_levels_index")
     */
    public function indexAction(Request $request, Form $form) {
        if ($request->query->count() <= 1) {
            $form->init($this->formFields, 'edit_level');
            $form->validate($request->query);
            return $this->render("Admin/UserSubAccountLevel/index.twig", ['form' => $form]);
        }

        $platformId = $request->query->getInt('tab', 0);
        $page       = $request->query->getInt('page', 1);
        $pageSize   = $request->query->getInt('limit', self::$pageSize);

        $conditions['platform_id'] = $platformId;

        list($rows, $total) = SubAccountLevel::paginate($conditions, [], $page, $pageSize);
        foreach ($rows as &$row) {
            $row['default']     = $row['default'] ? '是' : '';
            $row['platform_name'] = Platform::PLATFORMS[$row['pintai']] ?? "未知平台（{$row['pintai']}）";
        }

        return ["code" => $total ? 0 : 1, "msg" => $total ? "" : "暂无数据!", "total" => $total, "data" => $rows];
    }

    /**
     * @Route("/users/levels/save", name="admin_users_levels_save", methods={"POST"})
     */
    public function saveAction(Request $request, Form $form) {
        $form->init($this->formFields, 'edit_level');

        if (!$form->validate($request->request)) {
            $errors = $form->getErrors();
            return ['status' => false, 'msg' => '更新失败，参数错误'];
        }

        $attrs = $form->all();
        unset($attrs['id']);

        if($id = $form->getInt('id', 0)) {
            //  提交的数据有 ID，说明是更新现有数据
            $level = SubAccountLevel::first($id);
            if(!$level) {
                return ['status' => false, 'msg' => '保存失败，ID 错误'];
            }
        } else {
            $level = new SubAccountLevel();
            $level->platform_id = $form->getInt('platform_id');
        }

        // 如果提交上来的数据有默认级别，则先清除，再设置默认级别
        if($platformId = $form->getInt('default', 0)) {
            SubAccountLevel::update_all(['default' => 0], ['platform_id' => $platformId]);
        }

        $level->set_attributes($attrs);
        $level->save();

        return ['status' => true, 'msg' => '保存成功'];
    }

//    /**
//     * @Route("/users/levels/delete", name="admin_users_levels_delete", methods={"POST"})
//     */
//    public function deleteAction(Request $request) {
//        $id = $request->request->getInt('id', 0);
//        if(!$id) {
//            return ['status' => false, 'msg' => '更新失败，ID 错误'];
//        }
//
//        SubAccountLevel::delete_by_id($id);
//
//        return ['status' => true, 'msg' => '删除成功'];
//    }
}
