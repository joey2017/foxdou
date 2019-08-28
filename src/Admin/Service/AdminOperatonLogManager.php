<?php
namespace App\Admin\Service;

use App\Admin\Model\AdminUser;
use App\Admin\Model\AdminOperationLog;
use App\Common\Service\BaseService;

class AdminOperatonLogManager extends BaseService {
    public function createLog(AdminUser $user, $type, $subjectType, $message = '', $ip = '', $context = []) : ?AdminOperationLog {
        $log = new AdminOperationLog();
        $log->user_id = $user->id;
        $log->type =$type;
        $log->subject_type = $subjectType;
        $log->info = $message;
        $log->ip = $this->getUserIp();
        $log->context = $context ? json_encode($context) : null;
        $log->add_time = time();

        try {
            $log->save(true, true);
            return $log;
        } catch (\Exception $e) {
            $this->logger->error('保存管理员操作日记失败', ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]);
            return null;
        }
    }
}