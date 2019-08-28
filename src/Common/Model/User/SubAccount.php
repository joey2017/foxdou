<?php
namespace App\Common\Model\User;

use App\Common\Model\BaseModel;
use PDOStatement;
use Psr\Log\LoggerInterface;

abstract class SubAccount extends BaseModel
{
    const STATUS_INACTIVE  = 'INACTIVE';    // 未激活
    const STATUS_ACTIVE    = 'ACTIVE';      // 正常
    const STATUS_REVIEWING = 'REVIEWING';   // 待审核
    const STATUS_SUSPENDED = 'SUSPENDED';   // 被冻结
    const STATUS_BANNED    = 'BANNED';      // 被清退
    const STATUS_REJECTED  = 'REJECTED';      // 审核失败


    const STATUSES = [
        self::STATUS_INACTIVE  => '未激活',
        self::STATUS_ACTIVE    => '正常',
        self::STATUS_REVIEWING => '待审核',
        self::STATUS_SUSPENDED => '被冻结',
        self::STATUS_BANNED    => '被清退',
        self::STATUS_REJECTED  => '审核失败'
    ];

    public static $belongs_to = [
        ['user', 'class_name' => '\App\Common\Model\User\User'],
    ];

    abstract function getPlatformId();

    /** @var User $user */
    private $user = false; // 此子账号对应的用户

    /**
     * @return User|null
     */
    public function getUser() {
        if($this->user === false) {
            $this->user = User::find($this->user_id);
            if(!$this->user) {
                throw new \RuntimeException(sprintf('平台(%s)子账号(%s)没有对应的用户(%s)', $this->getPlatformId(), $this->id, $this->user_id));
            }
        }

        return $this->user;
    }

    public function isValid() {
        return $this->status === static::STATUS_ACTIVE;
    }

    /**
     * @param float                $amount
     * @param bool                 $throwExceptionOnFailure
     * @param LoggerInterface|null $logger
     * @param array                $context
     * @return bool
     * @throws \SimpleRecord\Exception\DatabaseException
     */
    public function decrBalance(float $amount, LoggerInterface $logger = null, $context = []) {
        static::begin_transaction();

        $table = static::table_name();
        /**
         * @var $stmt PDOStatement
         */
        $stmt = static::query("UPDATE {$table} SET balance = balance - :amount WHERE id = :id AND balance >= :amount", ['id' => $this->id, 'amount' => $amount]);

        // 必须严格等于 1 才算扣款成功，如果等于 0 那是 id 不对或者余额不足，如果 大于 1 说明一次扣了多个人的款，说明出错了，必须中断交易
        $succeed = $stmt->rowCount() === 1;
        if($succeed) {
            $this->reload();
        } else {
            if($logger) {
                $logger->error('从用户账户扣款失败',  array_merge($context, ['user_id' => $this->user_id, 'sub_account_id' => $this->id, 'account_class' => static::class, 'amount' => $amount]));
            }

            throw new \RuntimeException('对平台用户进行增加余额失败！');
        }

        static::commit();

        return $succeed;
    }

    /**
     * @param float                $amount
     * @param bool                 $throwExceptionOnFailure
     * @param LoggerInterface|null $logger
     * @param array                $context
     * @return bool
     * @throws \SimpleRecord\Exception\DatabaseException
     */
    public function incrBalance(float $amount, LoggerInterface $logger = null, $context = []) {
        static::begin_transaction();

        $table = static::table_name();
        /**
         * @var $stmt PDOStatement
         */
        $stmt = static::query("UPDATE {$table} SET balance = balance + :amount WHERE id = :id", ['id' => $this->id, 'amount' => $amount]);

        $succeed = $stmt->rowCount() === 1;
        if($succeed) {
            $this->reload();
        } else {
            if($logger) {
                $logger->error('从用户账户扣款失败',  array_merge($context, ['user_id' => $this->user_id, 'sub_account_id' => $this->id, 'account_class' => static::class, 'amount' => $amount]));
            }
            throw new \RuntimeException('对平台用户进行扣款失败！');
        }

        static::commit();

        return $succeed;
    }

    public function __toString() {
        return sprintf("[%s(%s)]", $this->shop_name, $this->id);
    }
}
