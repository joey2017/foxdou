<?php
namespace App\Test\Controller;

use App\Common\Controller\BaseController;
use App\Common\Form\UserForm;
use App\Common\Service\Cache\ChainCache;
use App\Common\Service\SystemSetting;
use App\Test\Form\TestForm;
use Psr\SimpleCache\CacheInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfu\SimpleFormBundle\Form;

class TestController extends BaseController
{
    /**
     * @Route("/hello", methods={"GET"}, name="test_hello")
     */
    public function helloAction(Request $request, ParameterBagInterface $parameters): Response {
        $profiles =$parameters->get('upload_profiles');

        // User::all(['a'=>1], ['hydrate'=>true]);
        $e = new \Exception();
        $this->logger->error("hello1!!", ['message' => $e->getMessage(), 'stack' => $e->getTraceAsString()]);
        $this->logger->error("hello2!!", ['value1', 'value2']);
        return new Response("hello world!!!");
    }

    /**
     * @Route("/test/csrf", name="test_csrf")
     */
    public function csrfAction(Request $request, CsrfTokenManagerInterface $csrfTokenManager) {
        $id = $request->get('id', 'authenticate');
        return $csrfTokenManager->getToken($id)->getValue();
    }

    /**
     * @Route("/", methods={"GET"}, name="test_index")
     */
    public function indexAction(Request $request, Form $form): Response
    {
//        $being = microtime(true);
//        $users = User::find(2);
        $elapsed = microtime(true)- $_SERVER['REQUEST_TIME_FLOAT'];

        $fieldDefs = [
            'username' => ['required, min_length[5], max_length[20], regex[/^[a-z0-9_-]+$/]'],
            'nickname' => ['required, min_length[5], max_length[20]'],
        ];

        $form->init($fieldDefs);
        // $form->validate($request->query);
        $errors = $form->getErrors();

        return $this->json($errors);
    }

    /**
     * @Route("/phpinfo", methods={"GET"}, name="test_phpinfo")
     */
    public function phpinfoAction(Request $request, UserForm $form): Response
    {
        ob_start();
        phpinfo();
        $info = ob_get_clean();
        return new Response($info);
    }
    /**
     * @Route("/test/cache")
     */
    public function cacheAction(CacheInterface $cache)
    {
        $item3 = $cache->get('test');
        $cache->set('single', 1);
        $cache->setMultiple(['m1' => 'v1', 'm2' => 2]);
        return 'done';
    }

    /**
     * @Route("/zz")
     */
    public function zzAction(Request $request, UserForm $form) {
        return ['class' => get_class($form)];
    }

    /**
     * @Route("/form2")
     */
    public function form2Action(Request $request, TestForm $form) {
        $result1  = $form->validate([]);
        $errors1 = $form->getErrors();

        $result2  = $form->validate([
            'nick_name'     => 'a',
            'email'     => 'admin@admin.com',
            'password1' => 'pa55word',
            'password2' => 'pa55word',
            'age'       => 18,
        ], true);

        $errors2 = $form->getErrors();
        return ['result1' => $result1, 'errors1' => $errors1, 'result2' => $result2, 'errors2' => $errors2];
    }

    /**
     * @Route("/form")
     */
    public function formAction(Request $request, Form $form, TestForm $testForm) {
        $form->init([
            'verify_code' => ['required, verify_code'],
            'recaptcha'   => ['required, recaptcha'],
            'email'       => ['required, email'],
            'password1'   => ['required, min_length[6], max_length[100]'],
            'password2'   => ['required, min_length[6], max_length[100], equals_to[password1]'],
            'age'         => ['integer, min[20]'],
        ], '_token');

        $data['test1']['result']  = $form->validate([]);
        $data['test1']['errors'] = $form->getErrors();
        $data['test1']['data'] = $form->all();

        $data['test2']['result']  = $form->validate([
            'email'     => 'admin@admin.com',
            'password1' => 'pa55word',
            'password2' => 'pa55word',
            'age'       => 18,
            'verify_code'       => '111111',
            'recaptcha'       => '111111',
            '_token'       => 'oVLbJK08m4_gtaekx75WlhJgIE1_APwXHu9846ADtd4',
        ], true);
        $data['test2']['errors'] = $form->getErrors();
        $data['test2']['data'] = $form->all();

        $data['test3']['result']  = $testForm->validate([
            'nick_name'     => 'ADMiN',
            'mobile' => '13412345678',
            'mail' => 'admin@admin.com',
            'note'       => 'this is a note',
            'avatar_url'       => 'this is a note',
        ]);
        $data['test3']['errors'] = $testForm->getErrors();
        $data['test3']['data'] = $testForm->all();

        return $data;
    }

    /**
     * @Route("/settings")
     */
    public function settings(SystemSetting $settings, CacheInterface $simpleCache, ChainCache $chainCache) {
        $chainCache->delete('system.settings');
        // $settings->passport_settings->max_password_errors_per_day = 999;
        // $settings->save(true);
    }
}
