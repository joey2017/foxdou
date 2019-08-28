<?php
namespace App\Test\Controller;

use App\Common\Controller\BaseController;
use App\Common\Model\User\User;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfu\SimpleFormBundle\Form;

class SimpleFormDemoController extends BaseController {

    const GENDER = [
        'M' => '男',
        'F' => '女',
    ];
    const LANGUAGES = [
        '0' => 'PHP',
        '1' => 'Java',
        '2' => 'C#',
        '3' => 'C/C++',
        '4' => 'TypeScript',
        '5' => 'JavaScript',
    ];

    /**
     * @Route("/simple-form/{page}", methods={"GET", "POST"}, name="simple_form_demo_show", defaults={"page": "index"})
     */
    public function showAction(Request $request, TranslatorInterface $translator, $page, Form $form, ParameterBagInterface $parameters) {
        $profiles =$parameters->get('upload_profiles');
        if($page === 'inline_with_dynamic_table') {
            return $this->inline_with_dynamic_tableAction($request, $form);
        }

        $form = $this->setupForm($form);
        return $this->render("/Test/SimpleFormDemo/{$page}.twig", ['form' => $form]);
    }

    private function inline_with_dynamic_tableAction(Request $request, Form $form) {
        $form->init([
            'username' => ['min_length[2],regex[/[\x80-\xff\w\-]+/]'],
            'mobile'   => ['mobile'],
            'gender'   => ['enum[M|F]'],
            'search'   => [''],
        ]);

        if(!$request->isXmlHttpRequest()) {
            return $this->render('/Test/SimpleFormDemo/inline_with_dynamic_table.twig', ['form' => $form]);
        }

        // 验证表单
        if(!$form->validate($request->query)) {
            $errors = $form->getErrors();
            return ['status' => false, 'errors' => $errors];
        }

        // 获取所有参数
        $conditions = $form->all();
        // 因为 users 表里并没有定义全文检索字段，所以这里实际上是不能用的，注释掉了
        // if($conditions['search']) {
        //     $conditions['search'] = ['MATCH' => 'username, name', 'AGAINST' => $conditions['search']];
        // }

        $options = [
            'select' => 'id, type, user_name, mobile, email, status, FROM_UNIXTIME(add_time) as add_time', //  如果不指定 select，则默认是 select *
        ];
        // 使用 SimpleRecord 查询
        list($rows, $total) = User::paginate($conditions, $options, $form->page, $form->limit);

        return ['status' => true, 'data' => $rows, 'total' => $total];
    }

    /**
     * @Route("/simple-form-submit/{page}", methods={"POST"}, name="simple_form_demo_submit")
     */
    public function submitAction(Request $request, Form $form, $page) {
        $form = $this->setupForm($form);

        // 验证表单
        if(!$form->validate($request->request)) {
            $errors = $form->getErrors();
            foreach ($errors as $fieldName => $error) {
                $this->flashError("字段 {$fieldName} 错误：" . $error);
            }
            return $this->render("/Test/SimpleFormDemo/{$page}.twig", ['form' => $form, 'errors' => $errors]);
        }

        $values = $form->all();

        // 使用提交上来的数据：
        $user = new User();
        $user->user_name = $form->username;
        $user->email = $form->email;
        $user->mobile = $form->mobile;
        $user->password = $form->password;
        // $user->save();

        // 获取所有参数
        foreach ($form as $fieldName => $value) {
            $this->flashInfo("字段 {$fieldName} 内容为：{$value}");
        }
        $form->clearSavedData();

        return $this->redirectToRoute('simple_form_demo_show', ['page' => $page]);
    }

    private function setupForm(Form $form) : Form {
        $form->init([
            'username'              => ['required, min_length[2],regex[/[\x80-\xff\w\-]+/]'],
            'email'                 => ['required, email'],
            'mobile'                => ['required, mobile'],
            'avatar'                => [''],
            'gender'                => ['required, enum[M|F]'],
            'password'              => ['required'],
            'password_confirm'      => ['required, matches[password]'],
            'favourite_languages'   => [''],
            'most_skilled_language' => [''],
            'do_not_disturb'        => ['enum[Y|N]'],
            'search'                => [''],
            'intro'                 => ['max_length[1000]'],
        ], 'simple-form-demo');

        return $form;
    }

    /**
     * @Route("/upload", name="test_upload")
     */
    public function demoUploadAction() {
        return ['location' => '/assets/common/img/default-avatar.jpg', 'success' => true];
    }
}
