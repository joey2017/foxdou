<?php
namespace App\Admin\Controller\SystemAdministration;

use App\Admin\Controller\AdminBaseController;
use App\Admin\Form\SystemSetting\PassportSettingForm;
use App\Admin\Form\SystemSetting\ResellerPlatformSettingForm;
use App\Admin\Form\SystemSetting\SupplierPlatformSettingForm;
use App\Admin\Form\SystemSetting\SystemForm;
use App\Common\Service\SystemSetting;
use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", defaults={"group": "system-administration"})
 */
class SystemSettingController extends AdminBaseController {
    /**
     * @Route("/system-administration/system-settings/{section}", name="admin_system_administration_system_settings_edit")
     */
    public function editAction(Request $request, SystemSetting $settings, $section, SystemForm $systemForm, PassportSettingForm $passportSettingForm, ResellerPlatformSettingForm $resellerPlatformSettingForm, SupplierPlatformSettingForm $supplierPlatformSettingForm) {
        $section = strtr($section, ['-' => '_']);
        $forms = [
            'system' => $systemForm,
            'passport' => $passportSettingForm,
            'reseller_platform' => $resellerPlatformSettingForm,
            'supplier_platform' => $supplierPlatformSettingForm,
        ];

        $form = $forms[$section] ?? null;
        if(!$form) {
            $this->logger->error('无效的系统设置 section 值', ['section' => $section, 'user' => (string)$this->getUser(), 'ip' => $request->getClientIp()]);
            throw new BadRequestHttpException('非法请求');
        }

        $sectionSettings = $settings->$section->all();

        if(isset($sectionSettings['withdraw_fee_rate_percent'])){
            $sectionSettings['withdraw_fee_rate_percent'] = number_format($sectionSettings['withdraw_fee_rate_percent'] * 100, 5);
        }

        $form->bind($sectionSettings);

        $settings->supplier_platform->withdraw_fee_rate_type;
        return $this->render("Admin/SystemAdministration/SystemSetting/edit.twig", ['form' => $form, 'section' => $section]);
    }

    /**
     * @Route("/system-administration/system-settings/{section}/save", name="admin_system_administration_system_settings_save", methods={"POST"})
     */
    public function saveAction(Request $request, SystemSetting $settings, $section, SystemForm $systemForm, PassportSettingForm $passportSettingForm, ResellerPlatformSettingForm $resellerPlatformSettingForm, SupplierPlatformSettingForm $supplierPlatformSettingForm) {
        $section = strtr($section, ['-' => '_']);
        $forms = [
            'system' => $systemForm,
            'passport' => $passportSettingForm,
            'reseller_platform' => $resellerPlatformSettingForm,
            'supplier_platform' => $supplierPlatformSettingForm,
        ];

        $form = $forms[$section] ?? null;
        if(!$form) {
            $this->logger->error('无效的系统设置 section 值', ['section' => $section, 'user' => (string)$this->getUser(), 'ip' => $request->getClientIp()]);
            throw new BadRequestHttpException('非法请求');
        }

        if(!$form->validate($request->request)) {
            return ['status' => false, 'errors' => $form->getErrors()];
        }

        $sectionSettings = $form->all();

        if(isset($sectionSettings['withdraw_fee_rate_percent'])){
            $sectionSettings['withdraw_fee_rate_percent'] = number_format($sectionSettings['withdraw_fee_rate_percent'] / 100, 5);
        }

        $settings->loadFromArray([$section => $sectionSettings]);
        $succeed = $settings->save();

        return ['status' => $succeed, 'msg' => $succeed ? '保存成功' : '保存失败，请重试'];
    }

    private function getForm(Request $request, $sectionKey) {
        switch ($sectionKey) {
        case "system":
            $form = new SystemForm($this->container);
            break;
        case "passport":
            $form = new PassportSettingForm($this->container);
            break;
        case "reseller_platform":
            $form = new ResellerPlatformSettingForm($this->container);
            break;
        case "supplier_platform":
            $form = new SupplierPlatformSettingForm($this->container);
            break;
        default:
            $this->logger->error('无效的系统设置 section 值', ['section' => $sectionKey, 'user' => (string)$this->getUser(), 'ip' => $request->getClientIp()]);
            throw new BadRequestHttpException('非法请求');
        }

        return $form;
    }
}
