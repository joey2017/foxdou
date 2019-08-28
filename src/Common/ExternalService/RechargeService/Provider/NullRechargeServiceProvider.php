<?php
namespace App\Common\ExternalService\RechargeService\Provider;

use App\Common\ExternalService\Exception\ExternalServiceException;
use App\Common\ExternalService\RechargeService\AbstractRechargeServiceProvider;
use App\Common\ExternalService\RechargeService\RechargeServiceContext;
use App\OpenApi\Security\SignatureHelper;
use Ramsey\Uuid\Uuid;
use Unirest\Request;

class NullRechargeServiceProvider extends AbstractRechargeServiceProvider {
    const PROVIDER_NAME = '调试平台';

    public function submitOrder(RechargeServiceContext $context) {
        //$this->logger()->info(__CLASS__ . ": 开始向上游充值供应商提交订单", ['order_id' => 'TEST:' . Uuid::uuid4()]);

        $n = 100;
        $rnd = $this->normalRand(0, $n);
        $mseconds = max(($n / 2 - $rnd) * 10 + 100, 10);
        usleep($mseconds * 1000);

        $rnd = $this->normalRand(0, 100);
        if($rnd < 5 || $rnd > 95) {
            throw new \RuntimeException('随机失败：rnd=' . $rnd);
        }

        //$this->logger()->info(__CLASS__ . ": 向上游充值供应商提交订单成功（{$mseconds}ms）", ['order_id' => 'TEST:' . Uuid::uuid4()]);
    }

    public function queryStatus(RechargeServiceContext $context) {
        return 1;
    }

    // 正态分布随机数
    private function normalRand($min = 0, $max = 1) {
        static $n;
        static $last  = FALSE;
        static $range = 10000000;

        $useLast = false;

        if ($last) {
            $last = FALSE;
            $m = $n;
        } else {
            do {
                // 以下为Box-Mueller方法
                $u = mt_rand($min, $range) / $range;
                $v = mt_rand($min, $range) / $range;
                $s = sqrt(-2 * log($u));
                $x = $s * sin(2 * M_PI * $v);
                $y = $s * cos(2 * M_PI * $v);

                // 以下为封装
                $width = 1.0; // 分布的宽度。
                $step = 5.0; // 分布的锋锐程度。数字越小，曲线越平。
                $m = $x / ($step * $width * 2.0) + $width / 2.0;
                $n = $y / ($step * $width * 2.0) + $width / 2.0;
                if($m < $width && $m > 0 && $n < $width && $n > 0) {
                    $useLast = TRUE;
                }
            } while(!$useLast);
        }

        return $m * $max + $min;
    }

    public function handleNotify(?RechargeServiceContext $context = null) {
        return '回调通知处理完毕: ' . __CLASS__;
    }
}
