<?php
namespace App\OpenApi\Api;

use App\Common\Service\BaseService;
use App\OpenApi\ApiContext;
use App\OpenApi\Exception\ApiException;
use App\OpenApi\Form\GenericApiForm;
use Symfony\Contracts\Service\ServiceSubscriberTrait;

abstract class AbstractHandler extends BaseService {
    use ServiceSubscriberTrait;

    public function getApiForm(): GenericApiForm {
        if (method_exists($this, 'handlerForm')) {
            return $this->handlerForm();
        } elseif (method_exists($this, 'handlerFormFields')) {
            /** @var GenericApiForm $form */
            $form = $this->container->get(__METHOD__);

            $handlerSpecificFormFields = $this->handlerFormFields();
            if($handlerSpecificFormFields) {
                foreach ($handlerSpecificFormFields as $fieldName => $fieldInfo) {
                    $validators    = isset($fieldInfo[0]) ? $fieldInfo[0] : [];
                    $defaultValue  = isset($fieldInfo[1]) ? $fieldInfo[1] : '';
                    $transformers  = isset($fieldInfo[2]) ? $fieldInfo[2] : [];

                    $form->addFieldRaw($fieldName, $validators, $defaultValue, $transformers);
                }
            }

            return $form;
        } else {
            return $this->container->get(__METHOD__);
        }
    }

    public function init(ApiContext $context) {
    }

    public abstract function handle(ApiContext $context);

    public function finish(ApiContext $context) {
    }
}
