<?php
namespace App\Passport\Controller;

use App\Common\Model\User\ContactInfo;
use App\Passport\Form\IndividualIdentitySubmitForm;
use Symfu\SimpleFormBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends PassportBaseController {

    /**
     * @Route("/user/profile", name="passport_user_profile")
     */
    public function profileAction() {
        //        $form = new UserForm($this->container);
        //        $form->bind([])->validate();
        //        $data   = ['form' => $form, 'contact_info' => $this->getUser()->getContactInfo()];
        return $this->render("/Passport/User/profile.twig");
    }

    /**
     * @Route("/user/profile/update", name="passport_user_profile_update")
     */
    public function updateAction(Request $request, IndividualIdentitySubmitForm $form) {
        if (!$form->validate($request->request)) {
            $errors = $form->getErrors();
            $data   = ['form' => $form];

            return ['status' => false, 'msg' => '数据错误，请检查后重新提交'];
        }

        $user = $this->getUser();
        $view = [];
        foreach ($form as $key => $value) {
            if ($value) {
                $user->$key = $form->get($key, '');
            }
        }

        $user->save();

        return ['status' => true, 'msg' => '保存成功'];
    }

    /**
     * @Route("/user/contact-info", name="passport_user_contact_info")
     */
    public function contact_infoAction() {
        $data = ['contact_info' => $this->getUser()->getContactInfo()];

        return $this->render("/Passport/Register/contact_info.twig", $data);
    }

    /**
     * @Route("/user/contact-info/update", name="passport_user_contact_info_update")
     */
    public function contact_info_updateAction(Request $request, Form $form) {
        $form->init([
            'contact_name'    => ['min_length[2],regex[/[\x80-\xff\w\-]+/]'],
            'contact_phone'   => ['digit'],
            'contact_mail'    => ['email'],
            'contact_qq'      => ['digit'],
            'contact_address' => ['max_length[255]'],

        ]);

        if (!$form->validate($request->request)) {
            $errors = $form->getErrors();

            return ['status' => false, 'msg' => '数据错误，请检查后重新提交'];
        }

        $user        = $this->getUser();
        $contactInfo = $user->getContactInfo();
        if (!$contactInfo) {
            $contactInfo = new ContactInfo();
        }

        $contactInfo->user_id = $user->id;
        $contactInfo->set_attributes($form->all());
        $contactInfo->save();

        return ['status' => true, 'msg' => '保存成功'];
    }

    /**
     * @Route("/user/welcome", name="passport_user_identity")
     */
    public function welcomeAction(Request $request) {
        return $this->render('/Passport/Register/welcome.twig');
    }
}
