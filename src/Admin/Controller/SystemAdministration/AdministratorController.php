<?php

namespace App\Admin\Controller\SystemAdministration;

use App\Admin\Controller\AdminBaseController;
use App\Admin\Form\AdminEditForm;
use App\Admin\Model\AdminOperationLog;
use App\Admin\Model\AdminUser;
use App\Admin\Service\AdminOperatonLogManager;
use App\Admin\Service\AdminUserManager;
use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use function Symfu\SimpleFormBundle\to_enum;

/**
 * @Route("/", defaults={"group": "system-administration"})
 */
class AdministratorController extends AdminBaseController {
    /**
     * @Route("/system-administration/administrators", name="admin_system_administration_administrators")
     */
    public function administratorsAction(Request $request, AdminEditForm $editForm, Form $searchForm) {
        $searchForm->init([
            'roles'      => [to_enum(AdminUser::ADMIN_ROLES)],
            'user_name'  => [''],
        ]);

        if(!$request->isXmlHttpRequest()) {
            $data = ['form' => $editForm, 'search_form' => $searchForm];
            return $this->render("Admin/SystemAdministration/Administrator/index.twig", $data);
        }


        if (!$searchForm->validate($request->query)) {
            return ['status' => false, 'msg' => '数据错误，请检查后重新提交'];
        }

        $conditions = $searchForm->all();
        $conditions['is_deleted'] = 0;

        if($searchForm->user_name) {
            $conditions['user_name'] = ['LIKE' => "%{$searchForm->user_name}%"];
        }

        $options = ['select' => 'id, status, user_name, name, title, roles, mobile, FROM_UNIXTIME(last_login_time) as last_login_time, last_login_ip'];
        list($admins, $total) = AdminUser::paginate($conditions, $options, $searchForm->page, $searchForm->limit);
        array_walk($admins, function (&$v){
            $v['role_name'] = AdminUser::ADMIN_ROLES[$v['roles']] ?? '未知角色';
            $v['status'] = AdminUser::STATUSES[$v['status']] ?? '未知状态';
        });

        return ['status' => true, 'msg' => '获取成功', 'total' => $total, 'data' => $admins];

    }

    /**
     * @Route("/system-administration/administrators/save", name="admin_system_administration_administrator_save")
     */
    public function saveUserAction(Request $request, AdminUserManager $adminUserManager, AdminOperatonLogManager $adminOperatonLogManager, AdminEditForm $form) {
        if(!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '参数错误', 'errors' => $form->getErrors()];
        }

        $currentUser = $this->getAdminUser();
        if ($currentUser->id === (int)$form->id && $form->status !== AdminUser::STATUS_ACTIVE) {
            return ['status' => false, 'msg' => '无法禁用当前登录账号！'];
        }

        if($form->id) {
            $user = AdminUser::find($form->id);
            if(!$user) {
                return ['status' => false, 'msg' => '用户不存在'];
            }
            $operation = AdminOperationLog::OPERATION_EDIT;
        } else {
            $user = $adminUserManager->createAdmin($form->user_name, $form->password, $form->roles);
            $operation = AdminOperationLog::OPERATION_CREATE;
        }

        $context = ['user_name' => $user->user_name, 'roles' => $user->roles];

        if($currentUser->roles !== AdminUser::ROLE_ADMIN_SUPER_ADMIN && in_array(AdminUser::ROLE_ADMIN_SUPER_ADMIN, $user->getRoles())) {
            $adminOperatonLogManager->createLog($currentUser, $operation, AdminOperationLog::SUBJECT_ADMIN_USER, "用户 {$currentUser} 试图给用户 {$user} 增加超级管理员权限", $request->getClientIp(), $context);
            return ['status' => false, 'msg' => '只有超级管理员用户才能编辑超级管理员，此次操作已经记录进系统'];
        }

        $user->name      = $form->name;
        $user->title     = $form->title;
        $user->roles     = $form->roles;
        $user->mobile    = $form->mobile;
        $user->status    = $form->status;
        $user->edit_time = time();

        if($form->password) {
            $user->password = $form->password;
        }

        try {
            $context['dirty_attrs'] = $user->dirty_attributes();
            unset($context['dirty_attrs']['password']);

            $user->save(true, true);
            $adminOperatonLogManager->createLog($currentUser, $operation, AdminOperationLog::SUBJECT_ADMIN_USER, "用户 {$currentUser} 编辑后台用户 {$user} ", $request->getClientIp(), $context);

            return ['status' => true, 'msg' => '保存成功'];
        } catch (\Exception $e) {
            $context = array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]);
            $this->logger->error('保存管理员失败', $context);
            return ['status' => false, 'msg' => '保存失败，请稍后重试'];
        }
    }

    /**
     * @Route("/system-administration/administrators/delete", name="admin_system_administration_administrators_delete")
     */
    // 管理员删除
    public function deleteAction(Request $request, AdminOperatonLogManager $adminOperatonLogManager, Form $form) {
        $form->init([
            'id' => ['required, integer'],
        ], 'admin_system_administration_administrators_delete');

        if (!$form->validate($request->request)) {
            return ['status' => false, 'msg' => '参数错误', 'errors' => $form->getErrors()];
        }

        $id = (int)$form->id;
        $currentUser = $this->getAdminUser();
        if ($currentUser->id === $id) {
            return ['status' => false, 'msg' => '无法删除当前登录账号！'];
        }

        $user = AdminUser::find($id);
        if(!$user) {
            return ['status' => false, 'msg' => '用户不存在'];
        }

        $context = ['user_name' => $user->user_name, 'roles' => $user->roles];

        if(in_array(AdminUser::ROLE_ADMIN_SUPER_ADMIN, $user->getRoles())) {
            $adminOperatonLogManager->createLog($currentUser, AdminOperationLog::OPERATION_DELETE, AdminOperationLog::SUBJECT_ADMIN_USER, "用户 {$currentUser} 试图删除超级管理员 {$user}", $request->getClientIp(), $context);
            return ['status' => false, 'msg' => '只有超级管理员用户才能编辑超级管理员，此次操作已经记录进系统'];
        }

        try {
            AdminUser::transaction(function () use($user, $currentUser, $context, $adminOperatonLogManager, $request){
                $user->status = AdminUser::STATUS_DELETED;
                $user->mark_deleted();
                $adminOperatonLogManager->createLog($currentUser, AdminOperationLog::OPERATION_DELETE, AdminOperationLog::SUBJECT_ADMIN_USER, "用户 {$currentUser} 成功删除了后台用户 {$user}", $request->getClientIp(), $context);
                return true;
            });

            return ['status' => true, 'msg' => "删除成功"];
        } catch (\Exception $e) {
            $context = array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]);
            $this->logger->error('删除后台用户失败', $context);
            return ['status' => false, 'msg' => '删除失败'];
        }
    }


    /**
     * @Route("/system-administration/head-upload", name="admin_system_administration_head-upload")
     */
    public function headUploadAction(Request $request) {
        $head_img = $request->files->get('imageFile') ?? '';

        $path = 'uploads/admin/';
        $file = new UploadedFile(
            $head_img->pathName,
            $head_img->originalName
        );

        $newFileName = substr(0, 16, md5($head_img->fileName . 'head_img'));
        if ($file->move($path, $newFileName)) {
            return ['status' => 1, 'url' => $path . $newFileName];
        };

        return ['status' => false, 'msg' => ''];
    }
}
