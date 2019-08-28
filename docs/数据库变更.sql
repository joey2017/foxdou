#
# 表改名：
# yzb_user_money_rechage_log =>  yzb_user_balance_recharge_orders
#
#
#
# 数据库结构修改：

ALTER TABLE `foxdou_dev`.`yzb_users` CHANGE COLUMN `type` `type` char(1) NOT NULL COMMENT '账号类型 I 个人， B 个体商户，E 企业用户', CHANGE COLUMN `status` `status` varchar(10) NOT NULL DEFAULT 1 COMMENT 'INACTIVE 未激活  ACTIVE 正常  REVIEW 审核中  SUSPENED 冻结 BANNED 封号清退', CHANGE COLUMN `pay_status` `pay_status` char(1) NOT NULL DEFAULT 1 COMMENT '余额支付状态，N=>关闭，Y=>开启';

update yzb_users set type='I' where type='1';
update yzb_users set type='B' where type='2';
update yzb_users set type='E' where type='3';

update yzb_users set status='INACTIVE' where status='0';
update yzb_users set status='ACTIVE' where status='1';
update yzb_users set status='REVIEW' where status='2';
update yzb_users set status='SUSPENED' where status='3';
update yzb_users set status='BANNED' where status='4';


update yzb_users set pay_status='N' where pay_status=0;
update yzb_users set pay_status='Y' where pay_status=1;


ALTER TABLE `foxdou_dev`.`yzb_users` ADD COLUMN `last_login_ip` varchar(255) AFTER `other_user_data`;
ALTER TABLE `foxdou_dev`.`yzb_users` ADD COLUMN `last_login_time` int AFTER `last_login_ip`;
ALTER TABLE `foxdou_dev`.`yzb_users` ADD COLUMN `roles` varchar(100) AFTER `nick_name`;


ALTER TABLE foxdou_dev.yzb_agent_users_print_settings CHANGE COLUMN print_type print_type varchar(20) NOT NULL DEFAULT 0 COMMENT "thermal_58mm: 58mm打印机，generic:普通打印机";

ALTER TABLE `foxdou_dev`.`yzb_agent_users_print_settings` CHANGE COLUMN `view` `view` varchar(255) COMMENT 'json格式如{order_sn,on}';

ALTER TABLE `foxdou_dev`.`yzb_agent_users_print_settings` CHANGE COLUMN `content` `content` varchar(1000) NOT NULL;

ALTER TABLE `foxdou_dev`.`yzb_agent_users_print_settings` DROP INDEX `user_id`, ADD UNIQUE `user_id` USING BTREE (`user_id`, `print_type`) comment '';

ALTER TABLE `foxdou_dev`.`yzb_agent_users_print_settings` ADD COLUMN `id` int NOT NULL AUTO_INCREMENT FIRST, DROP PRIMARY KEY, ADD PRIMARY KEY (`id`);



ALTER TABLE `foxdou_dev`.`yzb_pay_way` ADD COLUMN `name` varchar(20) AFTER `id`;
ALTER TABLE `foxdou_dev`.`yzb_pay_way` ADD COLUMN `enabled_scenes` varchar(1000) AFTER `pay_scene`;


ALTER TABLE `foxdou_dev`.`yzb_payment_methods` CHANGE COLUMN `pay_scene_id` `platform_id` int(11) NOT NULL COMMENT '支付名称';
ALTER TABLE `foxdou_dev`.`yzb_user_money_trade_log` CHANGE COLUMN `pay_scene_id` `platform_id` int(11) DEFAULT NULL COMMENT '交易场景，id';
ALTER TABLE `foxdou_dev`.`yzb_user_money_trade_log` CHANGE COLUMN `pay_scene` `scene_id` int(2) DEFAULT NULL COMMENT '交易场景，1=>余额充值,2=>服务市场,3=>商城';
ALTER TABLE `foxdou_dev`.`yzb_payment_methods` CHANGE COLUMN `pay_scene` `scene_id` int(11) NOT NULL;
ALTER TABLE `foxdou_dev`.`yzb_payment_method_settings` CHANGE COLUMN `pay_way_id` `class_id` int(11) NOT NULL COMMENT '支付方式的id', CHANGE COLUMN `pay_scene_id` `platform_id` int(11) NOT NULL COMMENT '支付场景，模型pay_way里面声明里面的id键', CHANGE COLUMN `pay_scene` `scene_id` bit(1) NOT NULL COMMENT '支付场景，模型pay_way里面声明的键为scene的具体值';

ALTER TABLE `foxdou_dev`.`yzb_user_money_trade_log` DROP COLUMN `pintai`;

ALTER TABLE `foxdou_dev`.`yzb_user_money_rechage_log` CHANGE COLUMN `pintai` `platform_id` int(11) NOT NULL COMMENT '平台', CHANGE COLUMN `user_pay_way` `payment_class_id` int(11) DEFAULT NULL COMMENT '用户支付的方式（如现金、支付宝转账、在线充值等）';

ALTER TABLE `foxdou_dev`.`yzb_user_money_rechage_log` CHANGE COLUMN `user_end_money` `current_balance` decimal(12,2) DEFAULT NULL COMMENT '用户充值后剩余的钱', CHANGE COLUMN `pintai_end_money` `platform_total_balance` decimal(12,2) DEFAULT NULL COMMENT '用户充值后整个平台剩余的钱';
ALTER TABLE `foxdou_dev`.`yzb_user_money_log` CHANGE COLUMN `pintai` `platform_id` int(11) NOT NULL COMMENT '平台', CHANGE COLUMN `user_end_money` `current_balance` decimal(12,2) NOT NULL COMMENT '用户余额', CHANGE COLUMN `pintai_end_money` `platform_total_balance` decimal(12,2) NOT NULL COMMENT '平台余额';

ALTER TABLE `foxdou_dev`.`yzb_user_money_log` CHANGE COLUMN `money_log_type` `log_type` tinyint(11) NOT NULL COMMENT '类型，0=>未知, 1=>订单支付,2=>提现, 3=>余额充值,4=>退款,5=>订单结算', CHANGE COLUMN `money` `amount` decimal(12,2) NOT NULL COMMENT '交易金额';
ALTER TABLE `foxdou_dev`.`yzb_user_money_rechage_log` CHANGE COLUMN `money` `amount` decimal(12,2) NOT NULL COMMENT '充值金额';

ALTER TABLE `foxdou_dev`.`yzb_user_money_alipay_transfer_recharge_log` CHANGE COLUMN `pintai` `platform_id` int(11) NOT NULL COMMENT '平台', CHANGE COLUMN `money` `amount` decimal(12,2) NOT NULL COMMENT '转账金额';

ALTER TABLE `foxdou_dev`.`yzb_user_money_recharge_alipay_user_relation` CHANGE COLUMN `pintai` `platform_id` int(11) NOT NULL DEFAULT 0 COMMENT '平台';

ALTER TABLE `foxdou_dev`.`yzb_user_money_taobao_buy_recharge_log` CHANGE COLUMN `money` `amount` decimal(12,2) DEFAULT NULL;
ALTER TABLE `foxdou_dev`.`yzb_user_money_trade_log` CHANGE COLUMN `money` `amount` decimal(12,2) NOT NULL COMMENT '交易金额', CHANGE COLUMN `user_pay_way` `payment_class_id` int(11) DEFAULT 0 COMMENT '用户付款方式';
ALTER TABLE `foxdou_dev`.`yzb_user_operation_log` CHANGE COLUMN `pintai` `platform_id` int(11) NOT NULL DEFAULT 0 COMMENT '平台/站点id';

ALTER TABLE `foxdou_dev`.`yzb_sup_users` CHANGE COLUMN `money` `balance` decimal(12,2) NOT NULL DEFAULT 0.00000 COMMENT '供货商，平台余额';
ALTER TABLE `foxdou_dev`.`yzb_users` CHANGE COLUMN `money` `balance` decimal(12,2) NOT NULL DEFAULT 0.00000 COMMENT '用户金额';
ALTER TABLE `foxdou_dev`.`yzb_sell_users` CHANGE COLUMN `money` `balance` decimal(12,2) NOT NULL DEFAULT 0.00000 COMMENT '供货商，平台余额';
ALTER TABLE `foxdou_dev`.`yzb_open_users` CHANGE COLUMN `money` `balance` decimal(12,2) NOT NULL DEFAULT 0.00000 COMMENT '平台账户余额';
ALTER TABLE `foxdou_dev`.`yzb_agent_users` CHANGE COLUMN `money` `balance` decimal(12,2) NOT NULL DEFAULT 0.00000 COMMENT '用户所在供货商平台金额', CHANGE COLUMN `rebate_balance` `rebate_balance` decimal(12,2) NOT NULL DEFAULT 0.00000 COMMENT '推广返利佣金余额';

ALTER TABLE `foxdou_dev`.`yzb_user_money_rechage_log` CHANGE COLUMN `user_pay_way_auxiliary_id` `payment_auxiliary_id` int(11) DEFAULT 0 COMMENT '充值方式子方式(如盛付通下的中国银行）0为没有';

ALTER TABLE `foxdou_dev`.`yzb_user_balance_recharge_orders` CHANGE COLUMN `trade_sn` `trade_sn` varchar(36) COMMENT '交易流水号', CHANGE COLUMN `order_sn` `order_sn` varchar(36) NOT NULL DEFAULT '' COMMENT '第三方交易流水号';

ALTER TABLE `foxdou_dev`.`yzb_user_money_trade_log` CHANGE COLUMN `trade_sn` `trade_sn` varchar(36) NOT NULL COMMENT '交易流水号';

ALTER TABLE `foxdou_dev`.`yzb_user_money_log` CHANGE COLUMN `trade_sn` `trade_sn` varchar(36) NOT NULL COMMENT '交易记录流水';

ALTER TABLE `foxdou_dev`.`yzb_user_balance_recharge_orders` CHANGE COLUMN `info` `note` varchar(255) NOT NULL COMMENT '备注信息', ADD COLUMN `product_name` varchar(100) AFTER `add_time`;

ALTER TABLE `foxdou_dev`.`yzb_third_party_pay_log` DROP COLUMN `pay_sn`, CHANGE COLUMN `id` `id` varchar(36) NOT NULL, CHANGE COLUMN `order_money` `order_amount` decimal(10,3) DEFAULT NULL COMMENT '订单金额', CHANGE COLUMN `pay_money` `total_amount` decimal(10,2) DEFAULT NULL COMMENT '付款金额（支付接口实际扣的钱）', CHANGE COLUMN `info` `note` varchar(50) DEFAULT NULL COMMENT '备注', CHANGE COLUMN `name` `product_name` varchar(255) DEFAULT NULL COMMENT '业务名称', CHANGE COLUMN `way_id` `payment_class_id` int(11) DEFAULT NULL COMMENT '支付方式id';

ALTER TABLE `foxdou_dev`.`yzb_third_party_pay_log` CHANGE COLUMN `order_sn` `order_id` varchar(255) DEFAULT NULL COMMENT '订单编号';

ALTER TABLE `foxdou_dev`.`yzb_user_balance_recharge_orders` DROP COLUMN `order_sn`;
ALTER TABLE `foxdou_dev`.`yzb_user_balance_recharge_orders` CHANGE COLUMN `id` `id` varchar(36) NOT NULL;

ALTER TABLE `foxdou_dev`.`yzb_user_money_trade_log` DROP COLUMN `trade_sn`, CHANGE COLUMN `id` `id` varchar(36) NOT NULL, CHANGE COLUMN `order_sn` `order_id` varchar(50) DEFAULT NULL COMMENT '交易订单号';
ALTER TABLE `foxdou_dev`.`yzb_user_money_log` CHANGE COLUMN `trade_sn` `trade_id` varchar(36) NOT NULL COMMENT '交易记录流水', CHANGE COLUMN `order_sn` `order_id` varchar(36) DEFAULT NULL COMMENT '外部业务单号';
ALTER TABLE `foxdou_dev`.`yzb_user_money_alipay_transfer_recharge_log` CHANGE COLUMN `trade_sn` `trade_id` varchar(36) NOT NULL DEFAULT '' COMMENT '交易流水号';

ALTER TABLE `foxdou_dev`.`yzb_user_money_log` CHANGE COLUMN `info` `note` varchar(255) DEFAULT NULL COMMENT '备注';
ALTER TABLE `foxdou_dev`.`yzb_user_balance_recharge_orders` DROP INDEX `outer_sn`, ADD INDEX `outer_sn` USING BTREE (`outer_sn`, `payment_class_id`) comment '';

ALTER TABLE `foxdou_dev`.`yzb_third_party_pay_log` ADD COLUMN `user_id` int AFTER `id`;
ALTER TABLE `foxdou_dev`.`yzb_third_party_pay_log` ADD COLUMN `platform_id` int AFTER `user_id`;
ALTER TABLE `foxdou_dev`.`yzb_user_balance_recharge_orders` ADD COLUMN `scene_id` int AFTER `platform_id`;
ALTER TABLE `foxdou_dev`.`yzb_user_balance_recharge_orders` ADD COLUMN `poundage` decimal(7,2) AFTER `amount`;
ALTER TABLE `foxdou_dev`.`yzb_user_balance_recharge_orders` ADD COLUMN `cate_id` int AFTER `outer_sn`;
ALTER TABLE `foxdou_dev`.`yzb_user_balance_recharge_orders` CHANGE COLUMN `recharge_status` `status` varchar(16) NOT NULL DEFAULT 0 COMMENT '充值状态, UNPAID: 等待付款, PROCESSING: 处理, SUCCEED: 充值成功, FAILED: 充值失败, CANCELED: 已取消, USER_UNKNOWN: 用户未知';

update yzb_user_balance_recharge_orders set status='UNPAID' where status = '0';
update yzb_user_balance_recharge_orders set status='PROCESSING' where status = '1';
update yzb_user_balance_recharge_orders set status='SUCCEED' where status = '2';
update yzb_user_balance_recharge_orders set status='FAILED' where status = '3';
update yzb_user_balance_recharge_orders set status='CANCELED' where status = '4';
update yzb_user_balance_recharge_orders set status='USER_UNKNOWN' where status = '5';

ALTER TABLE `foxdou_dev`.`yzb_agent_users` CHANGE COLUMN `status` `status` varchar(16) NOT NULL DEFAULT 0 COMMENT 'INACTIVE=未激活,  ACTIVE=正常,  REVIEW=审核中,  SUSPENED=冻结, BANNED=封号清退, REJECTED=审核失败';
update yzb_agent_users set status='INACTIVE' where status='0';
update yzb_agent_users set status='ACTIVE' where status='1';
update yzb_agent_users set status='REVIEWING' where status='2';
update yzb_agent_users set status='SUSPENED' where status='3';
update yzb_agent_users set status='BANNED' where status='4';
update yzb_agent_users set status='REJECTED' where status='5';

ALTER TABLE `foxdou_dev`.`yzb_open_users` CHANGE COLUMN `status` `status` varchar(16) NOT NULL DEFAULT 0 COMMENT 'INACTIVE=未激活,  ACTIVE=正常,  REVIEW=审核中,  SUSPENED=冻结, BANNED=封号清退, REJECTED=审核失败';
update yzb_open_users set status='INACTIVE' where status='0';
update yzb_open_users set status='ACTIVE' where status='1';
update yzb_open_users set status='REVIEWING' where status='2';
update yzb_open_users set status='SUSPENED' where status='3';
update yzb_open_users set status='BANNED' where status='4';
update yzb_open_users set status='REJECTED' where status='5';

ALTER TABLE `foxdou_dev`.`yzb_sup_users` CHANGE COLUMN `status` `status` varchar(16) NOT NULL DEFAULT 0 COMMENT 'INACTIVE=未激活,  ACTIVE=正常,  REVIEW=审核中,  SUSPENED=冻结, BANNED=封号清退, REJECTED=审核失败';
update yzb_sup_users set status='INACTIVE' where status='0';
update yzb_sup_users set status='ACTIVE' where status='1';
update yzb_sup_users set status='REVIEWING' where status='2';
update yzb_sup_users set status='SUSPENED' where status='3';
update yzb_sup_users set status='BANNED' where status='4';
update yzb_sup_users set status='REJECTED' where status='5';

ALTER TABLE `foxdou_dev`.`yzb_user_money_trade_log` CHANGE COLUMN `trade_log_type` `trade_log_type` int(2) NOT NULL COMMENT '交易类型(1.api扣款、2.新建应用、3.提现、4充值余额）';

ALTER TABLE `foxdou_dev`.`yzb_icp` CHANGE COLUMN `province` `province_name` varchar(20) NOT NULL COMMENT '省', CHANGE COLUMN `city` `city_name` varchar(20) NOT NULL COMMENT '市';
ALTER TABLE `foxdou_dev`.`yzb_icp` CHANGE COLUMN `senfen_code` `province_code` varchar(20) NOT NULL COMMENT '省级行政单位编号';

ALTER TABLE `foxdou_dev`.`yzb_product_mobile_level` CHANGE COLUMN `pintai` `platform_id` int(1) NOT NULL COMMENT '平台';
ALTER TABLE `foxdou_dev`.`yzb_product_mobile_user` CHANGE COLUMN `pintai` `platform_id` int(1) NOT NULL COMMENT '平台';


ALTER TABLE `foxdou_dev`.`yzb_order_recharge` CHANGE COLUMN `trade_id` `trade_id` varchar(36) COMMENT '交易流水号', CHANGE COLUMN `outer_sn` `outer_sn` varchar(50) COMMENT '第三方请求单号(如 api接口商的单号）', CHANGE COLUMN `request_id` `request_id` bigint(11) DEFAULT 0 COMMENT '请求ID', CHANGE COLUMN `order_cate_id` `order_cate_id` int(11) COMMENT '订单分类', CHANGE COLUMN `product_master_id` `product_master_id` int(11) COMMENT '主商品分类', CHANGE COLUMN `product_cate_id` `product_cate_id` int(11) COMMENT '商品分类', CHANGE COLUMN `product_name` `product_name` varchar(255) COMMENT '商品名称', CHANGE COLUMN `product_face_value` `product_face_value` decimal(10,2) COMMENT '商品面值', CHANGE COLUMN `icp` `isp_id` tinyint(4) DEFAULT 0 COMMENT '运营商', CHANGE COLUMN `on` `phone_number` varchar(120) COMMENT '充值号码', CHANGE COLUMN `on_before_info` `on_before_info` varchar(255) DEFAULT '' COMMENT '帐号充值前信息', CHANGE COLUMN `on_after_info` `on_after_info` varchar(255) DEFAULT '' COMMENT '帐号充值前信息', CHANGE COLUMN `on_other` `on_other` varchar(255) DEFAULT '' COMMENT '其他订单信息，(JSON格式)', CHANGE COLUMN `recharge_amount` `recharge_amount` decimal(10,2) COMMENT '充值金额', CHANGE COLUMN `payment_class_id` `payment_class_id` int(1) COMMENT '充值方式,0=>未知,1=>人工充值,2=>接口充值,3=>批量充值,4=>卡密充值', CHANGE COLUMN `recharge_sequence` `recharge_sequence` int(11) COMMENT '充值次数,第n次充值才成功', CHANGE COLUMN `buy_num` `buy_num` decimal(11,2) DEFAULT 1.00 COMMENT '购买数量', CHANGE COLUMN `sell_price` `sell_price` decimal(12,5) COMMENT '出货价', CHANGE COLUMN `order_status` `status` tinyint(2) COMMENT '订单状态，0=>未知,1=>充值中,2=>充值成功,3=>充值失败,4=>待付款,5=>已取消', CHANGE COLUMN `user_ip` `user_ip` varchar(130) DEFAULT '' COMMENT '下单ip', CHANGE COLUMN `recharge_ip` `recharge_ip` varchar(130) DEFAULT '' COMMENT '传到第三方的IP', CHANGE COLUMN `note` `user_info` varchar(120) DEFAULT '' COMMENT '用户备注', CHANGE COLUMN `app_id` `app_id` int(11) DEFAULT 0, CHANGE COLUMN `real_sell_price` `real_sell_price` decimal(17,5) DEFAULT 0.00000 COMMENT '用户卖给客户的零售价格', CHANGE COLUMN `add_time` `add_time` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间', CHANGE COLUMN `pay_time` `pay_time` datetime COMMENT '付款时间', CHANGE COLUMN `end_time` `end_time` datetime COMMENT '结束时间', CHANGE COLUMN `speed` `speed` tinyint(4) DEFAULT 1 COMMENT '充值速度.1=快,2=慢.', CHANGE COLUMN `province_name` `province_name` varchar(10) DEFAULT '' COMMENT '省份', CHANGE COLUMN `city_name` `city_name` varchar(20) DEFAULT '' COMMENT '城市', CHANGE COLUMN `mvno` `mvno` tinyint(4) DEFAULT 0 COMMENT '虚拟运营商', CHANGE COLUMN `admin_info` `admin_info` varchar(255) DEFAULT '' COMMENT '管理员备注信息';


ALTER TABLE `foxdou_dev`.`yzb_product_telephone_source` CHANGE COLUMN `t_id` `template_id` varchar(32) NOT NULL DEFAULT 0 COMMENT '模板ID';
ALTER TABLE `foxdou_dev`.`yzb_product_mobile_source` CHANGE COLUMN `t_id` `template_id` varchar(32) NOT NULL DEFAULT 0 COMMENT '模板ID. (渠道商)';


ALTER TABLE `foxdou_dev`.`yzb_order_recharge_sup` CHANGE COLUMN `sup_sn` `id` varchar(36) NOT NULL, CHANGE COLUMN `order_sn` `order_id` varchar(36) NOT NULL COMMENT '订单号', CHANGE COLUMN `sup_order_cate` `sup_order_cate_id` int(11) NOT NULL COMMENT '订单分类', CHANGE COLUMN `t_sn` `t_sn` varchar(36) NOT NULL COMMENT '模版编号', CHANGE COLUMN `add_time` `add_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '供应商下单时间', CHANGE COLUMN `end_time` `end_time` datetime NOT NULL COMMENT '处理时间', CHANGE COLUMN `province` `province_name` varchar(10) NOT NULL DEFAULT '' COMMENT '供货商选择的省份', CHANGE COLUMN `city` `city_name` varchar(20) NOT NULL DEFAULT '' COMMENT '供货商选择的城市', DROP PRIMARY KEY, ADD PRIMARY KEY (`id`);


ALTER TABLE `foxdou_dev`.`yzb_product_telephone_source` CHANGE COLUMN `t_id` `template_id` varchar(32) NOT NULL DEFAULT 0 COMMENT '模板ID';
ALTER TABLE `foxdou_dev`.`yzb_product_mobile_source` CHANGE COLUMN `t_id` `template_id` varchar(32) NOT NULL DEFAULT 0 COMMENT '模板ID. (渠道商)';


START TRANSACTION;
UPDATE yzb_product_mobile_source, yzb_sell_template
SET yzb_product_mobile_source.template_id = yzb_sell_template.sn
WHERE yzb_product_mobile_source.template_id = yzb_sell_template.id;
commit;

ALTER TABLE `foxdou_dev`.`yzb_sell_template` CHANGE COLUMN `id` `id` varchar(32) NOT NULL;
update `foxdou_dev`.`yzb_sell_template` set id=sn;



ALTER TABLE `foxdou_dev`.`yzb_product_mobile_user`  CHANGE COLUMN `lirun` `profit` decimal(12,5) DEFAULT NULL COMMENT '利润', CHANGE COLUMN `celue_type` `strategy_type` tinyint(1) NOT NULL DEFAULT 1 COMMENT '策略类型(1、排序2比例3、相同地区成本4、混合地区成本）';


ALTER TABLE `foxdou_dev`.`yzb_product_mobile_level` CHANGE COLUMN `pintai` `platform_id` int(1) NOT NULL COMMENT '平台', CHANGE COLUMN `lirun` `profit` decimal(12,5) DEFAULT NULL COMMENT '利润', CHANGE COLUMN `celue_type` `strategy_type` tinyint(1) NOT NULL DEFAULT 1 COMMENT '策略类型(1、排序2比例3、相同地区成本4、混合地区成本）';

ALTER TABLE `foxdou_dev`.`yzb_product_mobile_source` CHANGE COLUMN `senfen_id` `province_code` int(11) NOT NULL DEFAULT 0 COMMENT '省份编码', CHANGE COLUMN `city_id` `city_code` int(11) NOT NULL DEFAULT 0 COMMENT '城市编码';



ALTER TABLE `foxdou_dev`.`yzb_product_mobile_source`
  CHANGE COLUMN `cate` `cate_id` tinyint(1) NOT NULL DEFAULT 0 COMMENT '运营商分类，1=>移动,2=>联通,3=>电信,4=>虚商',
  CHANGE COLUMN `kuai_man` `speed` tinyint(1) NOT NULL COMMENT '1=>快充,2=>慢充',
  CHANGE COLUMN `senfen` `province_name` varchar(50) NOT NULL DEFAULT '' COMMENT '省份',
  CHANGE COLUMN `city` `city_name` varchar(50) NOT NULL DEFAULT '' COMMENT '城市',
  CHANGE COLUMN `t_id` `template_id` varchar(32) NOT NULL DEFAULT 0 COMMENT '模板ID. (渠道商)',
  CHANGE COLUMN `mianzi` `face_value` decimal(10,3) NOT NULL COMMENT '面值',
  CHANGE COLUMN `cenben` `cost` decimal(12,5) NOT NULL COMMENT '供货商卖给平台的售价，平台的成本',
  CHANGE COLUMN `sell_cenben` `source_cost` decimal(12,5) DEFAULT NULL COMMENT '供货商的供货成本',
  CHANGE COLUMN `zekou` `discount` float(255,0) DEFAULT NULL COMMENT '折扣';

ALTER TABLE `foxdou_dev`.`yzb_product_mobile`
CHANGE COLUMN `cate` `cate_id` tinyint(1) DEFAULT NULL COMMENT '1移动2联通3电信4虚拟',
CHANGE COLUMN `kuai_man` `speed` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1快充2慢充',
CHANGE COLUMN `mianzi` `face_value` decimal(10,3) NOT NULL COMMENT '面值',
CHANGE COLUMN `lirun` `profit` decimal(12,5) DEFAULT NULL COMMENT '利润',
CHANGE COLUMN `celue_type` `strategy_type` tinyint(1) NOT NULL DEFAULT 1 COMMENT '策略类型，1=>排序,2=>比例分流,3=>最低成本',
CHANGE COLUMN `senfen_id` `province_code` int(11) NOT NULL DEFAULT 0 COMMENT '省级行政编号',
CHANGE COLUMN `city_id` `city_code` int(11) DEFAULT 0 COMMENT '地级市行政编号';

ALTER TABLE `foxdou_dev`.`yzb_product_mobile` ADD COLUMN `isp_id` int AFTER `city_code`, CHANGE COLUMN `icp` `isp_name` varchar(20) DEFAULT NULL COMMENT '运营商';

ALTER TABLE `foxdou_dev`.`yzb_order_recharge` CHANGE COLUMN `trade_id` `trade_id` varchar(36) COMMENT '交易流水号', CHANGE COLUMN `outer_sn` `outer_sn` varchar(50) COMMENT '第三方请求单号(如 api接口商的单号）', CHANGE COLUMN `request_id` `request_id` bigint(11) DEFAULT 0 COMMENT '请求ID', CHANGE COLUMN `order_cate_id` `order_cate_id` int(11) COMMENT '订单分类', CHANGE COLUMN `product_master_id` `product_master_id` int(11) COMMENT '主商品分类', CHANGE COLUMN `product_cate_id` `product_cate_id` int(11) COMMENT '商品分类', CHANGE COLUMN `product_name` `product_name` varchar(255) COMMENT '商品名称', CHANGE COLUMN `product_face_value` `product_face_value` decimal(10,2) COMMENT '商品面值', CHANGE COLUMN `isp_id` `isp_id` tinyint(4) DEFAULT 0 COMMENT '运营商', CHANGE COLUMN `phone_number` `phone_number` varchar(120) COMMENT '充值号码', CHANGE COLUMN `on_before_info` `on_before_info` varchar(255) DEFAULT '' COMMENT '帐号充值前信息', CHANGE COLUMN `on_after_info` `on_after_info` varchar(255) DEFAULT '' COMMENT '帐号充值前信息', CHANGE COLUMN `on_other` `on_other` varchar(255) DEFAULT '' COMMENT '其他订单信息，(JSON格式)', CHANGE COLUMN `recharge_amount` `recharge_amount` decimal(10,2) COMMENT '充值金额', CHANGE COLUMN `payment_class_id` `payment_class_id` int(1) COMMENT '充值方式,0=>未知,1=>人工充值,2=>接口充值,3=>批量充值,4=>卡密充值', CHANGE COLUMN `recharge_sequence` `recharge_sequence` int(11) COMMENT '充值次数,第n次充值才成功', CHANGE COLUMN `buy_num` `buy_num` decimal(11,2) DEFAULT 1.00 COMMENT '购买数量', CHANGE COLUMN `sell_price` `sell_price` decimal(12,5) COMMENT '出货价', CHANGE COLUMN `order_status` `status` tinyint(2) COMMENT '订单状态，0=>未知,1=>充值中,2=>充值成功,3=>充值失败,4=>待付款,5=>已取消', CHANGE COLUMN `user_ip` `user_ip` varchar(130) DEFAULT '' COMMENT '下单ip', CHANGE COLUMN `recharge_ip` `recharge_ip` varchar(130) DEFAULT '' COMMENT '传到第三方的IP', CHANGE COLUMN `user_info` `user_info` varchar(120) DEFAULT '' COMMENT '用户备注', CHANGE COLUMN `app_id` `app_id` int(11) DEFAULT 0, CHANGE COLUMN `real_sell_price` `real_sell_price` decimal(17,5) DEFAULT 0.00000 COMMENT '用户卖给客户的零售价格', CHANGE COLUMN `add_time` `add_time` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间', CHANGE COLUMN `pay_time` `pay_time` datetime COMMENT '付款时间', CHANGE COLUMN `end_time` `end_time` datetime COMMENT '结束时间', CHANGE COLUMN `speed` `speed` tinyint(4) DEFAULT 1 COMMENT '充值速度.1=快,2=慢.', CHANGE COLUMN `province_name` `province_name` varchar(10) DEFAULT '' COMMENT '省份', CHANGE COLUMN `city_name` `city_name` varchar(20) DEFAULT '' COMMENT '城市', CHANGE COLUMN `mvno` `mvno` tinyint(4) DEFAULT 0 COMMENT '虚拟运营商', CHANGE COLUMN `admin_info` `admin_info` varchar(255) DEFAULT '' COMMENT '管理员备注信息';
ALTER TABLE `foxdou_dev`.`yzb_order_recharge` ADD COLUMN `product_sub_id` int AFTER `product_id`;
ALTER TABLE `foxdou_dev`.`yzb_order_recharge` DROP INDEX `sn`, DROP INDEX `trade_sn`, DROP INDEX `outer_sn`, DROP INDEX `add_time`, ADD UNIQUE `idx_id` USING BTREE (`id`) comment '', ADD UNIQUE `idx_trade_id` USING BTREE (`trade_id`) comment '', ADD INDEX `idx_add_time` USING BTREE (`add_time`) comment '';
ALTER TABLE `foxdou_dev`.`yzb_order_recharge` ADD COLUMN `product_sub_type` varchar(5) AFTER `product_sub_id`;
ALTER TABLE `foxdou_dev`.`yzb_order_recharge` ADD COLUMN `source_id` int AFTER `product_sub_type`;
ALTER TABLE `foxdou_dev`.`yzb_order_recharge` CHANGE COLUMN `user_info` `note` varchar(120) DEFAULT '' COMMENT '用户备注';
ALTER TABLE `foxdou_dev`.`yzb_order_recharge` ADD COLUMN `supplier_id` int COMMENT '供应商用户ID' AFTER `user_id`;

ALTER TABLE `foxdou_dev`.`yzb_order_recharge_sup` CHANGE COLUMN `t_sn` `template_id` varchar(36) NOT NULL COMMENT '模版编号', CHANGE COLUMN `on` `phone_number` varchar(120) NOT NULL COMMENT '充值帐号', CHANGE COLUMN `icp` `isp_id` tinyint(4) NOT NULL DEFAULT 0;

ALTER TABLE `foxdou_dev`.`yzb_order_recharge_sup` ADD COLUMN `sup_profit` decimal(12,5) AFTER `sup_price`, CHANGE COLUMN `closing_status` `settle_status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '结算状态，0未知，1未结算，2已结算，3已退款', CHANGE COLUMN `icp_id` `isp_id` tinyint(4) NOT NULL DEFAULT 0;

ALTER TABLE `foxdou_dev`.`yzb_icp` CHANGE COLUMN `icp` `name` varchar(20) NOT NULL COMMENT '运营商';

ALTER TABLE `foxdou_dev`.`yzb_order_recharge_sup_for_get_copy`
ADD COLUMN `id` int NOT NULL AUTO_INCREMENT FIRST,
CHANGE COLUMN `sup_sn` `sup_order_id` varchar(36) NOT NULL,
CHANGE COLUMN `order_sn` `order_id` varchar(36) NOT NULL DEFAULT '',
CHANGE COLUMN `template_sn` `template_id` varchar(20) NOT NULL COMMENT '模版编号',
CHANGE COLUMN `add_time` `add_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '供应商下单时间',
DROP PRIMARY KEY, ADD PRIMARY KEY (`id`),
DROP INDEX `sup_sn`, DROP INDEX `template_sn`,
ADD UNIQUE `idx_id` USING BTREE (`id`) comment '',
ADD INDEX `idx_template_id` USING BTREE (`template_id`) comment '';

ALTER TABLE `foxdou_dev`.`yzb_order_status_operation_log` CHANGE COLUMN `closing_status` `settle_status` varchar(255) DEFAULT NULL, CHANGE COLUMN `order_cate` `order_cate_id` int(11) DEFAULT NULL, CHANGE COLUMN `qudao_id` `source_id` int(11) DEFAULT NULL, CHANGE COLUMN `qudao_cenben` `source_cost` decimal(15,5) DEFAULT NULL, CHANGE COLUMN `qudao_lirun` `source_profit` decimal(15,5) DEFAULT NULL, CHANGE COLUMN `operation_way` `operation_type` tinyint(1) DEFAULT 0 COMMENT '操作方式0未知1接口2手动';

ALTER TABLE `foxdou_dev`.`yzb_order_recharge_sup_status_operation_log` CHANGE COLUMN `sup_sn` `sup_order_id` varchar(36) NOT NULL DEFAULT '', CHANGE COLUMN `order_sn` `order_id` varchar(36) NOT NULL, CHANGE COLUMN `closing_status` `settle_status` varchar(255) NOT NULL, CHANGE COLUMN `ip` `operator_ip` varchar(255) NOT NULL, CHANGE COLUMN `operation_way` `operation_type` tinyint(1) NOT NULL DEFAULT 0 COMMENT '操作方式0未知1接口2手动';


ALTER TABLE `foxdou_dev`.`yzb_user_money_trade_log` CHANGE COLUMN `order_cate` `order_cate_id` int(11) NOT NULL COMMENT '订单类型', CHANGE COLUMN `produc_cate` `product_cate_id` int(11) DEFAULT NULL COMMENT '产品类型';

ALTER TABLE `foxdou_dev`.`yzb_product_mobile_source` CHANGE COLUMN `icp` `isp_name` varchar(20) DEFAULT NULL COMMENT '运营商名称';

ALTER TABLE `foxdou_dev`.`yzb_product_mobile_source_celue_level` CHANGE COLUMN `pintai` `platform_id` int(1) NOT NULL COMMENT '平台', CHANGE COLUMN `q_id` `source_id` int(11) DEFAULT NULL COMMENT '货源id',  CHANGE COLUMN `level` `weight` int(11) DEFAULT NULL COMMENT '排序';
ALTER TABLE `foxdou_dev`.`yzb_product_mobile_source_celue_user` CHANGE COLUMN `pintai` `platform_id` int(1) NOT NULL COMMENT '平台', CHANGE COLUMN `q_id` `source_id` int(11) DEFAULT NULL COMMENT '货源id',  CHANGE COLUMN `level` `weight` int(11) DEFAULT NULL COMMENT '排序';

ALTER TABLE `foxdou_dev`.`yzb_number` CHANGE COLUMN `xinzi_type` `user_type` tinyint(1) NOT NULL DEFAULT 0 COMMENT '用户类型，0=>未知,1=>个人,2=>个体户,3=>企业';


ALTER TABLE `foxdou_dev`.`yzb_users` ADD COLUMN `referrer_id` int DEFAULT NULL AFTER `avatar_url`;
ALTER TABLE `foxdou_dev`.`yzb_users` ADD COLUMN `business_type` int AFTER `type`;
ALTER TABLE `foxdou_dev`.`yzb_users_real_name_authentication_info` ADD COLUMN `province_code` varchar(10) AFTER `info_authentication_finish_time`, ADD COLUMN `city_code` varchar(10) AFTER `province_code`, ADD COLUMN `district_code` varchar(10) AFTER `city_code`;
ALTER TABLE `foxdou_dev`.`yzb_users` CHANGE COLUMN `mail` `email` varchar(50) DEFAULT NULL COMMENT '登录邮箱', CHANGE COLUMN `bind_mail` `bind_email` varchar(50) DEFAULT NULL COMMENT '绑定登录邮箱';


CREATE TABLE `foxdou_dev`.`yzb_users_activation_codes` (
	`id` varchar(100) NOT NULL,
	`user_id` int NOT NULL,
	`expires_at` int NOT NULL,
	PRIMARY KEY (`id`)
) COMMENT='';

ALTER TABLE `foxdou_dev`.`yzb_users` CHANGE COLUMN `mobile` `mobile` varchar(15) DEFAULT NULL COMMENT '登录手机号', ADD COLUMN `email_verified` int DEFAULT 0 AFTER `bind_email`;


CREATE TABLE `yzb_users_open_account_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `pass` varchar(50) NOT NULL DEFAULT '' COMMENT '狐豆通行证',
  `account` varchar(20) NOT NULL DEFAULT '' COMMENT '狐豆号',
  `method` tinyint(1) NOT NULL DEFAULT '1' COMMENT '开户方式：1=>激活通行证自动开户，2=>身份信息过审自动开户，3=>开户申请审核通过，4=>后台人工主动开户',
  `platform_id` tinyint(1) NOT NULL DEFAULT '0' COMMENT '平台id',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态：0=>待审核，1=>审核中，2=>审核通过，3=>审核不通过',
  `add_time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='平台账户开通记录';


CREATE TABLE `yzb_users_account_status_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `platform_user_id` int(11) NOT NULL DEFAULT '0' COMMENT '平台账户id',
  `pass` varchar(50) NOT NULL DEFAULT '' COMMENT '用户狐豆通行证',
  `platform_id` tinyint(1) NOT NULL DEFAULT '0' COMMENT '平台id，0表示狐豆通行证的记录',
  `operate_admin_id` int(11) NOT NULL DEFAULT '0' COMMENT '操作管理员id',
  `account` varchar(20) NOT NULL DEFAULT '' COMMENT '狐豆号',
  `status` varchar(20) NOT NULL DEFAULT '' COMMENT '状态：1=>冻结，2=>解冻',
  `desc` varchar(255) NOT NULL DEFAULT '' COMMENT '事件描述',
  `add_time` int(11) NOT NULL DEFAULT '0' COMMENT '记录时间',
  PRIMARY KEY (`id`),
  KEY `user_id` (`platform_user_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='账户冻结/解冻状态记录';


alter table yzb_sup_users add `drawing_amount` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '提现中金额',
alter table yzb_sup_users add `freeze_amount` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '冻结金额',
alter table yzb_sup_users add `edit_time` int(11) NOT NULL DEFAULT '0' COMMENT '修改时间',

CREATE TABLE `yzb_users_premium_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '用户id',
  `account` varchar(20) NOT NULL DEFAULT '' COMMENT '狐豆靓号',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '账号状态：0=>未使用，1=>使用中',
  `add_time` int(11) NOT NULL DEFAULT '0' COMMENT '添加时间',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='用户靓号关联表';


alter table yzb_order_recharge_sup_status_operation_log add `edit_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP;

alter table yzb_users modify `user_name` char(50) DEFAULT '' COMMENT '用户名';

alter table yzb_users modify `nick_name` varchar(50) DEFAULT NULL COMMENT '昵称',

alter table yzb_users modify `bind_mobile` varchar(50) DEFAULT NULL COMMENT '绑定手机号',

alter table yzb_users modify `bind_mail` varchar(50) DEFAULT NULL COMMENT '绑定登录邮箱',

alter table yzb_users modify `pay_password` varchar(100) DEFAULT NULL COMMENT '支付密码',

alter table yzb_order_recharge add `edit_time` datetime DEFAULT NULL COMMENT '修改时间';

alter table yzb_order_recharge_sup add `edit_time` datetime DEFAULT NULL COMMENT '修改时间';

alter table yzb_order_recharge add `order_mark` tinyint(1) NOT NULL DEFAULT '0' COMMENT '订单标记：0=>正常，1=>超时2分钟，2=>卡单，3=>待人工处理，4=>失败可疑';

alter table yzb_order_recharge add `settlement_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '结算状态：0=>未扣款，1=>已扣款，2=>系统失败退款，3=>人工失败退款，4=>二次扣款';

alter table yzb_agent_users add `service_group` enum('A','B','C','D') NOT NULL COMMENT '可用服务分组';

alter table yzb_agent_users add `freeze_amount` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '冻结金额';

alter table yzb_agent_users add `drawing_rebate` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '提现中佣金金额';

alter table yzb_agent_users add `edit_time` int(11) NOT NULL DEFAULT '0' COMMENT '修改时间';


CREATE TABLE `yzb_agent_users_set_price_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '定价组编号',
  `group_name` varchar(50) NOT NULL DEFAULT '' COMMENT '定价组名称',
  `note` varchar(255) NOT NULL DEFAULT '' COMMENT '备注',
  `user_amount` int(11) NOT NULL DEFAULT '0' COMMENT '用户数量',
  `is_default` enum('Y','N') NOT NULL DEFAULT 'N' COMMENT '开通时默认组：N=>否，Y=>是',
  `add_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `edit_time` int(11) NOT NULL DEFAULT '0' COMMENT '修改时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `group_name` (`group_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COMMENT='代理商平台商品定价分组';

CREATE TABLE `yzb_agent_users_available_service_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '服务分组编号',
  `service_name` varchar(50) NOT NULL DEFAULT '' COMMENT '服务分组名称',
  `note` varchar(255) NOT NULL DEFAULT '' COMMENT '备注',
  `user_amount` int(11) NOT NULL DEFAULT '0' COMMENT '用户数量',
  `is_default` enum('Y','N') NOT NULL DEFAULT 'N' COMMENT '开通时默认组：N=>否，Y=>是',
  `add_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `edit_time` int(11) NOT NULL DEFAULT '0' COMMENT '修改时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `service_name` (`service_name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COMMENT='代理商平台可用服务分组';

alter table yzb_users_real_name_authentication_info add `certification_level` tinyint(1) NOT NULL DEFAULT '0' COMMENT '认证级别';
alter table yzb_users_real_name_authentication_info add `review_status` varchar(20) NOT NULL DEFAULT 'PENDING' COMMENT '审核状态：PENDING=>待审核，SUCCESS=>审核通过，FAIL=>审核不通过';

alter table yzb_users modify `type` char(1) NOT NULL COMMENT '账号类型 I 个人， B 公司';
update yzb_users set type='B' where type='E';

alter table yzb_users_real_name_authentication_info modify `user_type` char(1) NOT NULL DEFAULT '' COMMENT '用户类型：I=>个人,B=>公司';
update yzb_users_real_name_authentication_info set user_type='B' where user_type='E';

alter table yzb_users_real_name_authentication_info add `note` varchar(255) NOT NULL DEFAULT '' COMMENT '审核说明';
alter table yzb_users_real_name_authentication_info add `assign_account` enum('Y','N') NOT NULL DEFAULT 'N' COMMENT '是否已分配狐豆靓号：N=>否，Y=>是';

CREATE TABLE `yzb_users_account_application` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '用户id',
  `platform_id` tinyint(1) NOT NULL DEFAULT '0' COMMENT '平台id',
  `referrer_account` varchar(50) NOT NULL DEFAULT '' COMMENT '邀请人狐豆号',
  `status` enum('PENDING','SUCCESS','FAIL') NOT NULL DEFAULT 'PENDING' COMMENT '审核状态：PENDING=>待审核，SUCCESS=>审核通过，FAIL=>审核不通过',
  `note` varchar(255) NOT NULL DEFAULT '' COMMENT '审核说明',
  `add_time` int(11) NOT NULL DEFAULT '0' COMMENT '申请时间',
  `edit_time` int(11) NOT NULL DEFAULT '0' COMMENT '处理时间',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `platform_id` (`platform_id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4 COMMENT='开户申请记录';


alter table yzb_users add `open_methods` varchar(50) NOT NULL DEFAULT '' COMMENT '开户方式：201=>开放平台激活通行证自动开户,202=>开放平台身份信息过审自动开户,203=>开放平台已写入身份信息且开户申请过审,301=>供货商平台开放激活通行证自动开户，302=>供货商平台身份信息过审自动开户,303=>供货商平台已写入身份信息且开户申请过审,501=>代理商平台开放激活通行证自动开户,502=>代理商平台身份信息过审自动开户,503=>代理商平台已写入身份信息且开户申请过审。多个数值用逗号隔开',

alter table yzb_open_users add `parent_dealer_user_id` int(11) NOT NULL DEFAULT '0' COMMENT '代理商上级经销商user_id,0是直属表示没有上级或上级为系统';
alter table yzb_open_users add `edit_time` int(11) NOT NULL DEFAULT '0' COMMENT '修改时间';
alter table yzb_sup_users add `parent_dealer_user_id` int(11) NOT NULL DEFAULT '0' COMMENT '代理商上级经销商user_id,0是直属表示没有上级或上级为系统';
alter table yzb_sup_users add `edit_time` int(11) NOT NULL DEFAULT '0' COMMENT '修改时间';

alter table yzb_users_open_account_log modify `add_time` int(11) NOT NULL DEFAULT '0' COMMENT '开通时间';

alter table yzb_product_mobile modify `face_value_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '面值类型：1=>固定面值，2=>任意充，3=>其他面值';

alter table yzb_product_mobile_source modify `face_value_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '面值类型：1=>固定面值，2=>任意充，3=>其他面值';

alter table yzb_product_telephone_source CHANGE COLUMN `cate` `cate_id` tinyint(1) NOT NULL DEFAULT '0' COMMENT '运营商分类，1=>移动,2=>联通,3=>电信,4=>虚商';
alter table yzb_product_telephone_source CHANGE COLUMN `kuai_man` `speed` tinyint(1) NOT NULL COMMENT '1=>快充,2=>慢充';
alter table yzb_product_telephone_source CHANGE COLUMN `senfen` `province_name` varchar(50) NOT NULL DEFAULT '' COMMENT '省份';
alter table yzb_product_telephone_source CHANGE COLUMN `city` `city_name` varchar(50) NOT NULL DEFAULT '' COMMENT '城市';
alter table yzb_product_telephone_source CHANGE COLUMN `cate` `province_code` int(11) NOT NULL DEFAULT '0' COMMENT '省份编码';
alter table yzb_product_telephone_source CHANGE COLUMN `city_id` `city_code` int(11) NOT NULL DEFAULT '0' COMMENT '城市编码';
alter table yzb_product_telephone_source CHANGE COLUMN `mainzi` `face_value` decimal(10,3) NOT NULL COMMENT '面值';
alter table yzb_product_telephone_source CHANGE COLUMN `cenben` `cost` decimal(12,5) NOT NULL COMMENT '供货商卖给平台的售价，平台的成本';
alter table yzb_product_telephone_source CHANGE COLUMN `sell_cenben` `source_cost` decimal(12,5) DEFAULT NULL COMMENT '供货商的供货成本';
alter table yzb_product_telephone_source CHANGE COLUMN `zekou` `discount` float(255,0) DEFAULT NULL COMMENT '折扣';
alter table yzb_product_telephone_source modify `face_value_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '面值类型：1=>固定面值，2=>任意充，3=>其他面值';

alter table yzb_product_flow_source CHANGE COLUMN `cate` `cate_id` tinyint(1) NOT NULL DEFAULT '0' COMMENT '运营商分类，1=>移动,2=>联通,3=>电信,4=>虚商';
alter table yzb_product_flow_source CHANGE COLUMN `kuai_man` `speed` tinyint(1) NOT NULL COMMENT '1=>快充,2=>慢充';
alter table yzb_product_flow_source CHANGE COLUMN `senfen` `province_name` varchar(50) NOT NULL DEFAULT '' COMMENT '省份';
alter table yzb_product_flow_source CHANGE COLUMN `city` `city_name` varchar(50) NOT NULL DEFAULT '' COMMENT '城市';
alter table yzb_product_flow_source CHANGE COLUMN `cate` `province_code` int(11) NOT NULL DEFAULT '0' COMMENT '省份编码';
alter table yzb_product_flow_source CHANGE COLUMN `city_id` `city_code` int(11) NOT NULL DEFAULT '0' COMMENT '城市编码';
alter table yzb_product_flow_source CHANGE COLUMN `mainzi` `face_value` decimal(10,3) NOT NULL COMMENT '面值';
alter table yzb_product_flow_source CHANGE COLUMN `cenben` `cost` decimal(12,5) NOT NULL COMMENT '供货商卖给平台的售价，平台的成本';
alter table yzb_product_flow_source CHANGE COLUMN `sell_cenben` `source_cost` decimal(12,5) DEFAULT NULL COMMENT '供货商的供货成本';
alter table yzb_product_flow_source CHANGE COLUMN `zekou` `discount` float(255,0) DEFAULT NULL COMMENT '折扣';
alter table yzb_product_flow_source CHANGE COLUMN `t_id` `template_id` int(11) NOT NULL DEFAULT '0' COMMENT '模板ID';
alter table yzb_product_flow_source modify `face_value_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '面值类型：1=>固定面值，2=>任意充，3=>其他面值';


alter table yzb_product_common CHANGE COLUMN `mianzi` `face_value` decimal(10,2) NOT NULL COMMENT '面值';

alter table yzb_product_common_template_relation CHANGE COLUMN `cenben` `cost` decimal(12,5) DEFAULT NULL COMMENT '供货商卖给平台的价格';
alter table yzb_product_common_template_relation CHANGE COLUMN `sell_cenben` `source_cost` decimal(12,5) DEFAULT NULL COMMENT '供货商自己的供货成本';
alter table yzb_product_common_template_relation modify `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '货源状态,1 => 已上架,0 => 已下架,2=>被冻结,3=>待审核,4=>审核拒绝';
alter table yzb_product_common_template_relation modify `sell_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '启用状态,0=>已停止,1=>已启用,2=>已暂停';
alter table yzb_product_common_template_relation add `edit_time` int(11) DEFAULT '0' COMMENT '修改时间';

alter table yzb_user_log_sell rename yzb_user_log_sup;

CREATE TABLE `yzb_users_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '消息类型：1.普通消息，',
  `title` varchar(64) NOT NULL DEFAULT '' COMMENT '消息标题',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '阅读状态 1未阅读，2已阅读',
  `content` varchar(255) NOT NULL DEFAULT '' COMMENT '消息内容',
  `add_time` int(11) DEFAULT 0,
  `edit_time` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COMMENT '站内消息';

ALTER TABLE yzb_sell_template DROP sn;

alter table yzb_product_flow_source CHANGE COLUMN `icp` `icp_name` varchar(20) DEFAULT NULL COMMENT '运营商名称';
alter table yzb_product_telephone_source CHANGE COLUMN `icp` `icp_name` varchar(20) DEFAULT NULL COMMENT '运营商名称';

alter table yzb_product_common_template_relation modify `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '货源状态：0=>下架，1=>上架';
alter table yzb_product_common_template_relation add `review_status` tinyint(1) DEFAULT '1' COMMENT '审核状态：1=>待审核,2=>审核通过,3=>审核不通过';

update yzb_product_common_template_relation set review_status = 1 where status = 3;
update yzb_product_common_template_relation set review_status = 3 where status = 2;
update yzb_product_common_template_relation set review_status = 3 where status = 4;

update yzb_product_common_template_relation set status = 0 where status = 4;
update yzb_product_common_template_relation set status = 0 where status = 2;
update yzb_product_common_template_relation set status = 0 where status = 3;


alter table yzb_product_mobile_source modify `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '货源状态：0=>下架，1=>上架';
alter table yzb_product_mobile_source add `review_status` tinyint(1) DEFAULT '1' COMMENT '审核状态：1=>待审核,2=>审核通过,3=>审核不通过';

update yzb_product_mobile_source set review_status = 1 where status = 3;
update yzb_product_mobile_source set review_status = 3 where status = 2;
update yzb_product_mobile_source set review_status = 3 where status = 4;

update yzb_product_mobile_source set status = 0 where status = 4;
update yzb_product_mobile_source set status = 0 where status = 2;
update yzb_product_mobile_source set status = 0 where status = 3;

alter table yzb_product_flow_source modify `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '货源状态：0=>下架，1=>上架';
alter table yzb_product_flow_source add `review_status` tinyint(1) DEFAULT '1' COMMENT '审核状态：1=>待审核,2=>审核通过,3=>审核不通过';

update yzb_product_flow_source set review_status = 1 where status = 3;
update yzb_product_flow_source set review_status = 3 where status = 2;
update yzb_product_flow_source set review_status = 3 where status = 4;

update yzb_product_flow_source set status = 0 where status = 4;
update yzb_product_flow_source set status = 0 where status = 2;
update yzb_product_flow_source set status = 0 where status = 3;

alter table yzb_product_telephone_source modify `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '货源状态：0=>下架，1=>上架';
alter table yzb_product_telephone_source add `review_status` tinyint(1) DEFAULT '1' COMMENT '审核状态：1=>待审核,2=>审核通过,3=>审核不通过';

update yzb_product_telephone_source set review_status = 1 where status = 3;
update yzb_product_telephone_source set review_status = 3 where status = 2;
update yzb_product_telephone_source set review_status = 3 where status = 4;

update yzb_product_telephone_source set status = 0 where status = 4;
update yzb_product_telephone_source set status = 0 where status = 2;
update yzb_product_telephone_source set status = 0 where status = 3;


update yzb_product_mobile_source set review_status = 1 where review_status = 0;
update yzb_product_common_template_relation set review_status = 1 where review_status = 0;
update yzb_product_flow_source set review_status = 1 where review_status = 0;
update yzb_product_telephone_source set review_status = 1 where review_status = 0;


alter table yzb_product_mobile_source add `product_id` int(11) NOT NULL DEFAULT '0' COMMENT '商品id';
alter table yzb_product_telephone_source add `product_id` int(11) NOT NULL DEFAULT '0' COMMENT '商品id';
alter table yzb_product_flow_source add `product_id` int(11) NOT NULL DEFAULT '0' COMMENT '商品id';

alter table yzb_product_flow_source_celue_level CHANGE COLUMN `q_id` `source_id` varchar(32) NOT NULL DEFAULT '0' COMMENT '模板ID. (渠道商)';
alter table yzb_product_flow_source_celue_user CHANGE COLUMN `q_id` `source_id` varchar(32) NOT NULL DEFAULT '0' COMMENT '模板ID. (渠道商)';
alter table yzb_product_telephone_source_celue_level CHANGE COLUMN `q_id` `source_id` varchar(32) NOT NULL DEFAULT '0' COMMENT '模板ID. (渠道商)';
alter table yzb_product_telephone_source_celue_user CHANGE COLUMN `q_id` `source_id` varchar(32) NOT NULL DEFAULT '0' COMMENT '模板ID. (渠道商)';


alter table yzb_product_telephone_source modify `face_value_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '面值类型：1=>固定面值，2=>任意充，3=>其他面值';
alter table yzb_product_flow_source modify `face_value_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '面值类型：1=>固定面值，2=>任意充，3=>其他面值';


alter table yzb_product_telephone CHANGE COLUMN `mianzi` `face_value` decimal(10,3) NOT NULL COMMENT '面值';
alter table yzb_product_flow CHANGE COLUMN `mianzi` `face_value` decimal(10,3) NOT NULL COMMENT '面值';

alter table yzb_product_common_template_relation add `sell_user_id` int(11) NOT NULL DEFAULT '0' COMMENT '供货商id';

alter table yzb_product_common_template_relation add `face_value` decimal(10,3) NOT NULL COMMENT '面值';

UPDATE yzb_product_common_template_relation AS r
SET r.face_value = (
    SELECT
        face_value
    FROM
        yzb_product_common
    WHERE
        id = r.product_id
);

alter table yzb_product_flow_source modify `mvno` int(11) DEFAULT '0' COMMENT '虚拟运营商id';

alter table yzb_order_recharge modify `payment_class_id` int(1) DEFAULT NULL COMMENT '支付方式,1=>余额支付,2=>支付宝转账,3=>支付宝在线PC付款,4=>淘宝店铺,5=>微信,6=>现金';
alter table yzb_order_recharge add `recharge_method` int(1) DEFAULT NULL COMMENT '充值方式,0=>未知,1=>人工充值,2=>接口充值,3=>批量充值,4=>卡密充值';


alter table yzb_user_money_trade_log modify `trade_status` tinyint(2) NOT NULL COMMENT '0=>未知,1=>待付款,2=>交易中,3=>交易完成,4=>交易失败,5=>交易取消';
alter table yzb_user_money_trade_log modify `trade_log_type` int(11) NOT NULL COMMENT '交易类型：0=>未知, 1=>订单支付,2=>提现, 3=>余额充值,4=>退款,5=>订单结算,6=>转账,7=>佣金提取（注：7只有代理商平台才有）按平台区分类型，三位数表示，比如开放平台201表示订单支付';

alter table yzb_cash_user_account add `mobile` varchar(15) DEFAULT NULL COMMENT '绑定手机号';

alter table yzb_sell_cash_user_log modify `trade_status` tinyint(4) DEFAULT '0' COMMENT '提现状态:0=>待审核，1=>审核未通过，2=>提现处理中，3=>已提现，4=>提现失败';

alter table yzb_sell_cash_user_log DROP verify_status;

alter table yzb_sell_cash_user_log add `edit_time` int(11) DEFAULT NULL COMMENT '修改时间';

alter table yzb_cash_user_account modify `account_num` varchar(20) DEFAULT NULL COMMENT '帐号id，银行帐号，或支付宝帐号';

alter table yzb_sell_cash_user_log add `platform_info` varchar(255) DEFAULT NULL COMMENT '平台备注';

alter table yzb_sell_cash_user_log add `platform_id` tinyint(4) DEFAULT NULL COMMENT '平台id';

alter table yzb_product_flow_source CHANGE COLUMN `icp_name` `isp_name` varchar(20) DEFAULT NULL COMMENT '运营商名称';
alter table yzb_product_telephone_source CHANGE COLUMN `icp_name` `isp_name` varchar(20) DEFAULT NULL COMMENT '运营商名称';

alter table yzb_users_message add `platform_id` tinyint(1) NOT NULL DEFAULT '0' COMMENT '平台id';

alter table yzb_sup_users add `shop_name` varchar(20) NOT NULL DEFAULT '';
alter table yzb_sup_users add `shop_address` varchar(255) NOT NULL DEFAULT '';

alter table yzb_sup_users modify `cash_pledge` decimal(10,0) unsigned NOT NULL DEFAULT '0' COMMENT '抵押余额';


alter table yzb_mobile_balance_query_log CHANGE COLUMN `platform` `platform_id` tinyint(1) NOT NULL DEFAULT '0' COMMENT '平台id';

alter table yzb_user_operation_log DROP operation_user_id;

alter table yzb_user_operation_log modify `log_type` varchar(20) DEFAULT NULL COMMENT '类型';

alter table yzb_users_real_name_authentication_info modify `status_info` tinyint(1) DEFAULT '0' COMMENT '基本信息状态：0=>未填写,1=>已通过,2=>等待审核,3=>未通过';

alter table yzb_product_common CHANGE COLUMN `renyi_type` `face_value_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '面值类型：1=>固定面值，2=>任意充，3=>其他面值';

alter table yzb_product_telephone_source change COLUMN `renyi_type` `face_value_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '面值类型：1=>固定面值，2=>任意充，3=>其他面值';

alter table yzb_product_telephone_source change COLUMN `cost` `source_price` decimal(12,5) NOT NULL COMMENT '供货商卖给平台的售价，平台的成本';
alter table yzb_product_telephone_source change COLUMN `sell_cost` `source_cost` decimal(12,5) DEFAULT NULL COMMENT '供货商的供货成本';

alter table yzb_product_common_template_relation change COLUMN `cost` `source_price` decimal(12,5) NOT NULL COMMENT '供货商卖给平台的售价，平台的成本';
alter table yzb_product_common_template_relation change COLUMN `sell_cost` `source_cost` decimal(12,5) DEFAULT NULL COMMENT '供货商的供货成本';

alter table yzb_product_telephone_source change COLUMN cate_id `operator_id` int(1) NOT NULL DEFAULT '0' COMMENT '运营商分类，1=>''移动'',2=>''联通'',3=>''电信'',4=>''虚商''';

alter table yzb_user_money_log modify `log_type` smallint(4) NOT NULL DEFAULT '0' COMMENT '类型：0=>未知, 1=>订单支付,2=>提现, 3=>余额充值,4=>退款,5=>订单结算,6=>转账,7=>佣金提取（注：7只有代理商平台才有）,8=>失败扣款。按平台区分类型，三位数表示，比如开放平台201表示订单支付';

alter table yzb_users_contact add `add_time` datetime DEFAULT NULL;
alter table yzb_users_contact add `edit_time` datetime DEFAULT NULL;

ALTER TABLE yzb_users_identities DROP INDEX `user_type`;

alter table yzb_users_identities add UNIQUE KEY `user_type` (`entity_type`,`user_id`);

alter table yzb_users add `is_safe_question` enum('N','Y') NOT NULL DEFAULT 'N' COMMENT 'N=>否，Y=>是';