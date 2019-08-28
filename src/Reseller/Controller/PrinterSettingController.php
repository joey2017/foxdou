<?php
namespace App\Reseller\Controller;

use App\Reseller\Form\PrintSettingForm;
use App\Reseller\Model\PrinterSetting;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", defaults={"group": "dashboard"})
 */
class PrinterSettingController extends ResellerBaseController {
    use NavTrait;

    /**
     * @Route("/printer-settings", name="reseller_printer_settings_index")
     */
    public function indexAction(Request $request, PrintSettingForm $form) {
        $printType = $request->query->get('print_type', PrinterSetting::PRINTER_THERMAL_58MM);
        if (!in_array(strtoupper($printType), PrinterSetting::PRINT_TYPES)) {
            $this->flashError("错误的打印机类型");
            $this->redirectToRoute("reseller_printer_settings_index");
        }

        $formValues = PrinterSetting::DEFAULT_VISIBLE_SETTINGS;
        if ($settings = PrinterSetting::first(['user_id' => $this->getUser()->id, 'print_type' => $printType])) {
            $view       = json_decode($settings->view, true) ?: [];
            $content    = json_decode($settings->content, true) ?: [];
            $formValues = array_merge($formValues, $view, $content);
        }

        $form->bind($formValues);

        $data = ['left_nav' => $this->getLeftMenu(), 'form' => $form, 'print_type' => $printType];

        return $this->render("Reseller/PrinterSetting/index.twig", $data);
    }

    /**
     * @Route("/dashboard/print-settings/save", name="reseller_printer_settings_save")
     */
    public function savePrintSettingsAction(Request $request, PrintSettingForm $form) {
        $printType = $request->query->get('print_type', PrinterSetting::PRINTER_THERMAL_58MM);
        if (!in_array(strtoupper($printType), PrinterSetting::PRINT_TYPES)) {
            $this->flashError("错误的打印机类型");
            $this->redirectToRoute("reseller_printer_settings_index");
        }

        if (!$form->validate($request->request)) {
            $errors = $form->getErrors();
            $data   = ['left_nav' => $this->getLeftMenu(), 'form' => $form, 'print_type' => $printType];

            return $this->render("Reseller/PrinterSetting/index.twig", $data);
        }

        $attrs    = ['user_id' => $this->getUser()->id, 'print_type' => $printType];
        $settings = PrinterSetting::first($attrs);
        if (!$settings) {
            $settings = new PrinterSetting($attrs);
        }

        $view = [];
        foreach (PrinterSetting::DEFAULT_VISIBLE_SETTINGS as $key => $value) {
            $view[$key] = $form->get($key, 0);
            $form->remove($key);
        }

        $settings->view    = json_encode($view);
        $settings->content = json_encode($form->all());
        $settings->save();

        $this->flashSuccess("保存成功");

        return $this->redirectToRoute("reseller_printer_settings_index", ['print_type' => $printType]);
    }
}
