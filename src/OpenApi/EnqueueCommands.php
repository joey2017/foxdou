<?php
namespace App\OpenApi;

class EnqueueCommands {
    const TEST_COMMAND                  = 'TEST_COMMAND';                  // 测试用
    const RECHARGE_SUBMIT_ORDER         = 'RECHARGE_SUBMIT_ORDER';                  // 充值订单命令
    const RECHARGE_REFRESH_ORDER_STATUS = 'RECHARGE_REFRESH_ORDER_STATUS';            // 刷新充值订单状态命令
}
