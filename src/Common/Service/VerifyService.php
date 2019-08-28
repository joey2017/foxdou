<?php
namespace App\Common\Service;

use Aliyun\Api\Sms\Request\V20170525\SendSmsRequest;
use Aliyun\Core\DefaultAcsClient;
use Aliyun\Core\Profile\DefaultProfile;
use App\Common\Model\User\User;
use App\Common\Model\User\UserActivationCode;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Twig_Environment;

class VerifyService extends BaseService {
    /**
     * @var SessionInterface
     */
    private $session;
    /**
     * @var UrlGeneratorInterface
     */
    private $urlGenerator;
    /**
     * @var EngineInterface
     */
    private $twigEngine;
    /**
     * @var \Swift_Mailer
     */
    private $mailer;

    public function __construct(SessionInterface $session, LoggerInterface $logger, UrlGeneratorInterface $urlGenerator, Twig_Environment $twigEngine, \Swift_Mailer $mailer) {
        parent::__construct($logger);
        $this->session = $session;
        $this->urlGenerator = $urlGenerator;
        $this->twigEngine = $twigEngine;
        $this->mailer = $mailer;
    }


    public function sendVerifySms($recipient, $code) {

    }

    /**
     * @param User $user
     * @param      $activateCode
     * @param      $targetUrl
     * @throws \Exception
     */
    public function sendActivationEmail(User $user, $activateCode, $targetUrl) {
        $activateUrl = $this->urlGenerator->generate('passport_register_activate', ['id' => $activateCode, 'target_url' => $targetUrl], UrlGeneratorInterface::ABSOLUTE_URL);

        $context = ['user_id' => $user->id, 'activate_code' => $activateCode];

        try {
            $data          = ['activate_url' => $activateUrl,];
            $htmlContents  = $this->twigEngine->render('/Passport/EmailTemplates/registration_confirm_email.html.twig', $data);
            $plainContents = $this->twigEngine->render('/Passport/EmailTemplates/registration_confirm_email.text.twig', $data);

            $message = (new \Swift_Message())
                ->setTo($user->email)
                ->setFrom('safe@foxdou.com')
                ->setSubject('请激活您的狐豆账号 — 狐豆科技')
                ->setBody($htmlContents, 'text/html')
                ->addPart($plainContents, 'text/plain');

            // $transport = $mailer->getTransport();
            // if($transport instanceof \Swift_Transport_EsmtpTransport){
            //     $transport->setStreamOptions([ 'ssl' => ['allow_self_signed' => true, 'verify_peer' => false, 'verify_peer_name' => false]]);
            // }

            $this->mailer->send($message);
        } catch (\Exception $e) {
            $this->logger->error('发送激活邮件失败', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
            throw $e;
        }
    }
}
