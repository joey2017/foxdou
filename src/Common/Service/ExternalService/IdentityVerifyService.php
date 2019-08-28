<?php
namespace App\Common\Service\ExternalService;

use App\Common\Model\Identity;
use App\Common\Service\BaseService;
use App\Common\Utils\IdCardChecker;
use Unirest\Request;

class IdentityVerifyService extends BaseService {
    const EXTERNAL_IDENTITY_VERIFY_SERVICES = [
        'unicom'     => ['enabled' => false, 'method' => 'verifyIdentity_unicom'],
        'haoservice' => ['enabled' => true,  'method' => 'verifyIdentity_haoservice'], // 阿里云上的
    ];

    /**
     * @param $idNum
     * @param $name
     * @return array 一个数组，失败返回 [false, '失败原因']，成功返回 [true, '验证成功']
     */
    public function verifyIdentity($idNum, $name) {
        if (!$idNum || !$name) {
            return [false, '身份证号和名字不能为空'];
        }

        if (!IdCardChecker::isValid($idNum)) {
            return [false, '身份证号格式不正确'];
        }

        $identity = Identity::first(['card' => $idNum, 'name' => $name]);
        if ($identity && $identity->status === 1) {
            return [true, '验证通过'];
        }

        list($valid, $msg) = self::verifyIdentityByExternalService($idNum, $name);
        if($valid) {
            $this->saveOrUpdateIdentity($idNum, $name, $identity);
        }

        return [$valid, '验证通过'];
    }

    protected function verifyIdentityByExternalService($idNum, $name) {
        $enabledServices = array_filter(self::EXTERNAL_IDENTITY_VERIFY_SERVICES, function ($v) { return $v['enabled'];});
        $key = array_rand($enabledServices);
        $service = self::EXTERNAL_IDENTITY_VERIFY_SERVICES[$key];
        $method = $service['method'];
        if(!method_exists($this, $method)) {
            throw new \RuntimeException('身份证验证服务配置错误，方法不存在： key=' . $key);
        }

        try {
            return $this->$method($idNum, $name);
        } catch (\Exception $e) {
            $this->logger->error('调用外部身份证验证服务失败', ['key' => $key, 'error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]);
            return [false, '接口异常'];
        }
    }

    /**
     * 将身份信息发送到联通接口进行验证
     * 已经用不了了 （2018.12.3）
     */
    private function verifyIdentity_unicom($idNum, $name) {
        $err_info = ['00'     => '正确', '0200' => '证件格式不合法', '0201' => '证件格式不合法', '0202' => '证件格式不合法'
                     , '0203' => '很抱歉，您的证件号码为黑名单，暂不能办理', '9999' => '很抱歉，您的证件号码为黑名单，暂不能办理'
                     , '0204' => '很抱歉，您的证件号码办理的号码数过多，暂不能办理', '0205' => '很抱歉，您的证件号码下有号码为欠费，暂不能办理'
                     , '01'   => '非常抱歉，您的入网证件未在公安系统登记'
                     , '02'   => '姓名与证件号码不一致'
                     , '03'   => '非常抱歉，公安系统暂时关闭', '04' => '非常抱歉，公安系统暂时关闭'
                     , '99'   => '尊敬的客户目前办理的用户较多，暂时无法为您提供服务,请稍后再试'
        ];
        $url      = "http://www.10010.com/mall-web/OrderInputAjaxNew/checkCustInfo";
        $data     = "CertAdress=&bizType=normal&cityCode=591&goodsId=591403121719&idCardVal={$idNum}&opeSysType=2&provinceCode=59&psptTypeCode=02&receiverNameVal={$name}&tmplId=60000019";
        $err_code = Request::post($url, $data)->body;
        if (!isset($err_info[$err_code])) {
            $this->logger->error('联通身份查询接口异常');
            return [false, '验证失败']; //查询接口异常指 接口无法正常使用
        }

        if ($err_info[$err_code] == '正确') {
            return [true, null];
        } else {
            return [false, '身份证或名字不正确'];
        }
    }


    /**
     * 将身份信息发送到联通接口进行验证
     */
    public function verifyIdentity_haoservice($idNum, $name) {
        $url        = "http://aliyunverifyidcard.haoservice.com/idcard/VerifyIdcardv2";
        $appCode    = "a82d24ddd3b0434c81185f2f8cf4430e";
        $headers    = ['Authorization' => "APPCODE {$appCode}"];
        $parameters = ['cardNo' => $idNum, 'realName' => $name];

        $response = Request::get($url, $headers, $parameters);
        $body = $response->body;
        if ($response->code !== 200 || !$body || !($body instanceof \stdClass)) {
            $this->logger->error('haoservice 身份查询接口异常', ['response' => $response]);
            return [false, '查询接口异常']; //查询接口异常指 接口无法正常使用
        }
        $result = $body->result;
        if ($body->error_code === 0 && $result->isok === true) {
            $details = get_object_vars($result->IdCardInfor);
            $details = array_merge($details, ['id_num' => $idNum, 'name' => $name]);
            return [true, $details];
        } elseif ($body->error_code === 206501) {
            return [false, '认证中心库中无此身份证记录'];
        } else {
            return [false, '身份证验证未通过'];
        }
    }

    private function saveOrUpdateIdentity($idNum, $name, $existingModel = null) {
        try {
            $card           = $existingModel ?: new Identity();
            $card->name     = $name;
            $card->card     = $idNum;
            $card->status   = 1;
            $card->add_time = time();
            $card->save(true, true);
        } catch (\Exception $e) {
            $this->logger->error('保存身份证信息失败', ['idNum' => $idNum, 'name' => $name, 'status' => 1, 'error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]);
        }
    }
}
