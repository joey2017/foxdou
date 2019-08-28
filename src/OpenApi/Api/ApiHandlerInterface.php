<?php
namespace App\OpenApi\Api;

use App\Common\Model\OpenPlatform\App;
use App\Common\Model\User\OpenPlatformAccount;
use App\Common\Service\BaseService;
use App\OpenApi\ApiContext;
use App\OpenApi\Form\GenericApiForm;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;
use Symfu\SimpleFormBundle\Form;

interface ApiHandlerInterface {
    public function getApiForm(): ?GenericApiForm;
    public function init(ApiContext $context);
    public function handle(ApiContext $context);
    public function finish(ApiContext $context);
}
