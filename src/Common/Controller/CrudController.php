<?php

namespace App\Common\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CrudController extends BaseController {
    public function indexAction() {
        return $this->render("/Common/blank.twig");
    }

    /**
     * @Route("/update", name="common_user_profile_update")
     */
    public function updateAction(Request $request) {
        $form =
        $form = new PrintSettingForm($this->container);
        if (!$form->validate($request->request)) {
            $errors = $form->getErrors();
            $data   = ['left_nav' => $this->getLeftMenu(), 'form' => $form, 'print_type' => $printType];

            return $this->render("Reseller/Dashboard/printSettings.twig", $data);
        }

        $attrs    = ['user_id' => $this->getUser()->id, 'print_type' => $printType];
        $settings = PrintSetting::first($attrs);
        if (!$settings) {
            $settings = new PrintSetting($attrs);
        }

        $view = [];
        foreach (PrintSetting::DEFAULT_VISIBLE_SETTINGS as $key => $value) {
            $view[$key] = $form->get($key, 0);
            $form->remove($key);
        }

        $settings->view    = json_encode($view);
        $settings->content = json_encode($form->all());
        $settings->save();

        $this->flashSuccess("保存成功");

        return $this->redirectToRoute("reseller_dashboard_print_settings", ['print_type' => $printType]);
    }
}
