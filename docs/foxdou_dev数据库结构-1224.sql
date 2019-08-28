/*
Navicat MySQL Data Transfer

Source Server         : 192.168.1.11
Source Server Version : 50723
Source Host           : 192.168.1.11:3306
Source Database       : foxdou_dev

Target Server Type    : MYSQL
Target Server Version : 50723
File Encoding         : 65001

Date: 2018-12-24 18:38:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for yzb_admin_operation_log
-- ----------------------------
DROP TABLE IF EXISTS `yzb_admin_operation_log`;
CREATE TABLE `yzb_admin_operation_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `subject_type` varchar(50) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `info` text,
  `sn` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `add_time` datetime DEFAULT NULL,
  `context` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_admin_template_contact
-- ----------------------------
DROP TABLE IF EXISTS `yzb_admin_template_contact`;
CREATE TABLE `yzb_admin_template_contact` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(255) DEFAULT NULL COMMENT '管理员联系人姓名',
  `qq` varchar(255) DEFAULT NULL COMMENT '联系qq',
  `qq_group` varchar(255) DEFAULT NULL COMMENT '联系qq群',
  `mobile` varchar(255) DEFAULT NULL COMMENT '联系手机号',
  `telephone` varchar(255) DEFAULT NULL COMMENT '联系固定电话',
  `wechat` varchar(255) DEFAULT NULL COMMENT '联系微信',
  `foxdou_id` int(11) DEFAULT NULL COMMENT '狐豆帐号',
  `info` varchar(255) DEFAULT NULL COMMENT '备注',
  `add_time` int(11) DEFAULT NULL,
  `template_id` varchar(255) DEFAULT NULL COMMENT '模版id',
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_admins
-- ----------------------------
DROP TABLE IF EXISTS `yzb_admins`;
CREATE TABLE `yzb_admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL COMMENT '管理员名称',
  `password` varchar(100) NOT NULL COMMENT '管理员登录密码',
  `name` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `add_time` int(11) DEFAULT NULL,
  `roles` varchar(255) NOT NULL DEFAULT '10' COMMENT '角色id',
  `edit_time` int(11) DEFAULT NULL,
  `avatar_url` varchar(255) DEFAULT NULL COMMENT '头像',
  `status` varchar(20) NOT NULL DEFAULT '1' COMMENT '状态.0不可用,1正常,2冻结',
  `gender` varchar(6) DEFAULT NULL,
  `title` varchar(20) DEFAULT NULL,
  `last_login_time` int(11) DEFAULT NULL,
  `last_login_ip` varchar(20) DEFAULT NULL,
  `is_deleted` int(11) DEFAULT '0',
  `deleted_at` int(11) DEFAULT NULL,
  `password_error_num` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`),
  KEY `mobile` (`mobile`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_agent_notice_read_situation
-- ----------------------------
DROP TABLE IF EXISTS `yzb_agent_notice_read_situation`;
CREATE TABLE `yzb_agent_notice_read_situation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notice_id` int(11) NOT NULL COMMENT '公告id',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '阅读状态 1已经阅读，2未阅读',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_agent_users
-- ----------------------------
DROP TABLE IF EXISTS `yzb_agent_users`;
CREATE TABLE `yzb_agent_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `balance` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '用户所在供货商平台金额',
  `rebate_balance` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '推广返利佣金余额',
  `parent_dealer_user_id` int(11) NOT NULL DEFAULT '0' COMMENT '代理商上级经销商user_id,0是直属表示没有上级或上级为系统',
  `level` int(11) NOT NULL COMMENT '等级',
  `status` varchar(16) NOT NULL DEFAULT '0' COMMENT 'INACTIVE=未激活,  ACTIVE=正常,  REVIEW=审核中,  SUSPENED=冻结, BANNED=封号清退, REJECTED=审核失败',
  `skin` varchar(20) NOT NULL DEFAULT 'default' COMMENT '皮肤',
  `lock_screen` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否锁屏.0否,1是',
  `agency_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '代理商类型，''1''=>''普通代理商''，''2''=>''平台指定经销商'',''3''=>''经销商下属代理商''',
  `shop_name` varchar(20) NOT NULL DEFAULT '',
  `shop_address` varchar(255) NOT NULL DEFAULT '',
  `add_time` int(11) NOT NULL DEFAULT '0',
  `if_show_recharge_cenben` tinyint(1) NOT NULL DEFAULT '1' COMMENT '充值时是否显示商品成本，0不显示，1显示',
  `if_auto_play` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否自动播报0否1是',
  `service_group` enum('A','B','C','D') NOT NULL DEFAULT 'A' COMMENT '可用服务分组',
  `freeze_amount` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '冻结金额',
  `drawing_rebate` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '提现中佣金金额',
  `edit_time` int(11) NOT NULL DEFAULT '0' COMMENT '修改时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_agent_users_available_service_group
-- ----------------------------
DROP TABLE IF EXISTS `yzb_agent_users_available_service_group`;
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COMMENT='代理商平台可用服务分组';

-- ----------------------------
-- Table structure for yzb_agent_users_print_settings
-- ----------------------------
DROP TABLE IF EXISTS `yzb_agent_users_print_settings`;
CREATE TABLE `yzb_agent_users_print_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `view` varchar(255) DEFAULT NULL COMMENT 'json格式如{order_sn,on}',
  `print_type` varchar(20) NOT NULL DEFAULT '0' COMMENT 'thermal_58mm: 58mm打印机，generic:普通打印机',
  `content` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`,`print_type`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_agent_users_product_life_real_sell_price
-- ----------------------------
DROP TABLE IF EXISTS `yzb_agent_users_product_life_real_sell_price`;
CREATE TABLE `yzb_agent_users_product_life_real_sell_price` (
  `product_id` int(11) NOT NULL,
  `product_type` int(11) NOT NULL,
  `life_real_sell_price` decimal(17,5) NOT NULL,
  `user_id` int(11) NOT NULL,
  `add_time` int(11) NOT NULL,
  `edit_time` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `product_id` (`product_id`,`product_type`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_agent_users_profit_count_by_day
-- ----------------------------
DROP TABLE IF EXISTS `yzb_agent_users_profit_count_by_day`;
CREATE TABLE `yzb_agent_users_profit_count_by_day` (
  `user_id` int(11) NOT NULL,
  `profit` decimal(17,5) NOT NULL,
  `date` int(11) NOT NULL,
  `add_time` int(11) NOT NULL,
  KEY `user_id` (`user_id`,`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_agent_users_rebate_log
-- ----------------------------
DROP TABLE IF EXISTS `yzb_agent_users_rebate_log`;
CREATE TABLE `yzb_agent_users_rebate_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trade_sn` char(27) NOT NULL,
  `order_sn` varchar(27) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL DEFAULT '',
  `rebate` decimal(17,5) NOT NULL,
  `after_rebate_balance` decimal(17,5) NOT NULL,
  `after_pintai_rebate_balance` decimal(17,5) NOT NULL,
  `dealer_user_id` int(11) NOT NULL COMMENT '经销商',
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '贡献返利的用户，0为系统（提取佣金时用）',
  `rebate_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '返利类型0、其他、1、订单成功结算、2订单退款结算、3、推广佣金、4提取佣金',
  `add_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_agent_users_set_price_group
-- ----------------------------
DROP TABLE IF EXISTS `yzb_agent_users_set_price_group`;
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COMMENT='代理商平台商品定价分组';

-- ----------------------------
-- Table structure for yzb_alipay_cookies
-- ----------------------------
DROP TABLE IF EXISTS `yzb_alipay_cookies`;
CREATE TABLE `yzb_alipay_cookies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cookie` text NOT NULL,
  `bill_user_id` varchar(255) NOT NULL,
  `collection_account` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `bill_user_id` (`bill_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_api_app_open
-- ----------------------------
DROP TABLE IF EXISTS `yzb_api_app_open`;
CREATE TABLE `yzb_api_app_open` (
  `app_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '应用id',
  `ak` varchar(255) NOT NULL COMMENT 'app密钥',
  `service_id` int(11) NOT NULL COMMENT '服务id',
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '用户id',
  `name` varchar(255) NOT NULL COMMENT '应用名称',
  `thumb` varchar(255) DEFAULT NULL COMMENT 'app图标',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '应用状态0已禁用，1已上线，2已暂停，3调试中',
  `free` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否为免费应用，0否，1是',
  `pay_type` int(11) NOT NULL COMMENT '扣费方式,1=>''实时扣费'',2=>''实时计次'',3=>''包量计次'',4=>''包量计时'',5=>''按天计次''',
  `balance` decimal(13,0) NOT NULL DEFAULT '0' COMMENT '余量',
  `last_pay_time` int(11) NOT NULL DEFAULT '0' COMMENT '上次续费时间',
  `end_use_time` int(11) NOT NULL DEFAULT '0' COMMENT '到期时间',
  `pay_template` varchar(255) DEFAULT NULL COMMENT '扣费模版',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  `notify_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=InnoDB AUTO_INCREMENT=100126 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_api_notice_to_inside_log
-- ----------------------------
DROP TABLE IF EXISTS `yzb_api_notice_to_inside_log`;
CREATE TABLE `yzb_api_notice_to_inside_log` (
  `absoluteUrl` text,
  `msg` varchar(255) DEFAULT NULL,
  `request_ip` varchar(255) DEFAULT NULL,
  `request_params` text,
  `add_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_area
-- ----------------------------
DROP TABLE IF EXISTS `yzb_area`;
CREATE TABLE `yzb_area` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `areaname` varchar(50) NOT NULL COMMENT '栏目名',
  `parentid` int(10) NOT NULL COMMENT '父栏目',
  `shortname` varchar(50) DEFAULT NULL COMMENT '短名称',
  `areacode` int(6) DEFAULT NULL COMMENT '地区代码',
  `zipcode` int(10) DEFAULT NULL COMMENT '压缩后的代码',
  `pinyin` varchar(100) DEFAULT NULL COMMENT '地区拼音',
  `lng` varchar(20) DEFAULT NULL COMMENT '纬度',
  `lat` varchar(20) DEFAULT NULL COMMENT '经度',
  `level` tinyint(1) NOT NULL COMMENT '级别，省1，市2，县3',
  `position` varchar(255) NOT NULL COMMENT '位置，所属关系',
  `sort` tinyint(3) unsigned DEFAULT '50' COMMENT '分类',
  PRIMARY KEY (`id`),
  KEY `shortname` (`shortname`)
) ENGINE=InnoDB AUTO_INCREMENT=659004503 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_articles
-- ----------------------------
DROP TABLE IF EXISTS `yzb_articles`;
CREATE TABLE `yzb_articles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `portal_id` int(11) unsigned DEFAULT NULL COMMENT '场景id',
  `cate_id` int(11) unsigned DEFAULT NULL COMMENT '分类id',
  `label_id` varchar(50) DEFAULT NULL COMMENT '标签id',
  `title` varchar(50) DEFAULT NULL COMMENT '标题',
  `abstract` varchar(255) DEFAULT NULL COMMENT '摘要',
  `keywords` varchar(255) DEFAULT NULL COMMENT '关键词语',
  `cover_image_id` int(11) DEFAULT NULL,
  `cover_image_url` varchar(255) DEFAULT NULL COMMENT '文章封面图片',
  `content` text COMMENT '文章内容',
  `source` varchar(255) DEFAULT NULL COMMENT '作者，来源',
  `editor_id` varchar(255) DEFAULT NULL COMMENT '文章添加者',
  `published` tinyint(5) DEFAULT NULL COMMENT '0为已经发布，1为还未发布',
  `view_count` int(255) DEFAULT '0' COMMENT '浏览量',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  `publish_time` int(11) DEFAULT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_articles_categories
-- ----------------------------
DROP TABLE IF EXISTS `yzb_articles_categories`;
CREATE TABLE `yzb_articles_categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `portal_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL COMMENT '分类名称',
  `level` int(11) DEFAULT '1' COMMENT '级别,1场景，2分类，3标签',
  `parent_id` int(11) unsigned DEFAULT '0' COMMENT '父级id',
  `user_type` tinyint(255) DEFAULT '0' COMMENT '用户分类，0=>所有人，1=>个人，2=>个体，3=>企业',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_articles_read_statuses
-- ----------------------------
DROP TABLE IF EXISTS `yzb_articles_read_statuses`;
CREATE TABLE `yzb_articles_read_statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '开放平台，已经阅读过的公告',
  `article_id` int(11) NOT NULL COMMENT '公告id',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '阅读状态 1已经阅读，2未阅读',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_cash_bank
-- ----------------------------
DROP TABLE IF EXISTS `yzb_cash_bank`;
CREATE TABLE `yzb_cash_bank` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '提现金额',
  `interface_type` tinyint(4) DEFAULT NULL COMMENT '1为网络支付，2为银行支付',
  `transfer_cash_max` decimal(10,3) DEFAULT NULL COMMENT '单次转账最大值',
  `transfer_cash_min` decimal(10,3) DEFAULT NULL COMMENT '单次转账最小值',
  `transfer_count` tinyint(4) DEFAULT NULL COMMENT '单日转账最大次数',
  `shouxu_id` int(11) DEFAULT NULL COMMENT '手续费id',
  `available_status` tinyint(4) DEFAULT '0' COMMENT '可用状态：1：可用，0不可用',
  `add_time` int(11) DEFAULT NULL COMMENT '提现提交申请时间',
  `edit_time` int(11) DEFAULT NULL COMMENT '提现成功时间',
  `min_price` decimal(10,0) DEFAULT '0' COMMENT '手续费最低额，如果手续费不足该值按该值收，微信单笔手续费少于0.1元的，按0.1元收取',
  `accumulate_type` tinyint(4) DEFAULT '0' COMMENT '累加类型，还是按照单笔计算，0=》单笔，1=》单日累积，2=》指定日期，3=》从头累积',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_cash_shouxu
-- ----------------------------
DROP TABLE IF EXISTS `yzb_cash_shouxu`;
CREATE TABLE `yzb_cash_shouxu` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '手续规则名称',
  `start_price` decimal(15,3) DEFAULT NULL COMMENT '起步价',
  `start_num` decimal(15,3) DEFAULT NULL COMMENT '起步所在的价格数值，',
  `start_plug` tinyint(4) DEFAULT '1' COMMENT '起步价加不加，1为加，0为不加',
  `middle_price` varchar(50) DEFAULT NULL COMMENT '中间区间计算值，1固定数值，2百分比,3混合型.第1种:该值为"1,2,3,4,5,6"在每个区间"100,200,300,400,500"内的扣款为对应的数值，num数小与区间数，则剩余区间使用最后一个(num).第2种:每个区间(range)内的扣款为对应的(num此值应该为百分比)*(range_内的值)，(num)格式为2%,3%，4%，5%。第3种,混合型，区间"100,200,"，数值1,2%,3，则start_num-100内取1，100-200内取其百分之2，200-end_num内取其3',
  `middle_range` varchar(255) DEFAULT NULL COMMENT '中间区间，可以自定义如，1000,3000,6000，\r\n表示的区间为[start_num,1000),[1000,3000),[3000,6000),[6000,end_num) 4个区间\r\n.若内部数值设置大于end_num则大于end_num的数值无效如6000>end_num，则最后的区间变为[3000,end_num),区间数小于start_num的情况相同',
  `end_price` decimal(15,0) DEFAULT NULL COMMENT '封顶价格:所有交易额大于(num)的应按此价格收取',
  `end_num` decimal(15,3) DEFAULT NULL COMMENT '封顶数值，当交易额大于此数时所有手续费应按(end_price)收取',
  `min_price` decimal(10,0) DEFAULT '0' COMMENT '手续费最低额，如果手续费不足该值按该值收，微信单笔手续费少于0.1元的，按0.1元收取',
  `accumulate_type` tinyint(4) DEFAULT NULL COMMENT '累加类型，还是按照单笔计算，0=》单笔，1=》单日累积，2=》指定日期，3=》从头累积',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_cash_user_account
-- ----------------------------
DROP TABLE IF EXISTS `yzb_cash_user_account`;
CREATE TABLE `yzb_cash_user_account` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL COMMENT '用户id',
  `auth_path` varchar(255) DEFAULT NULL COMMENT '授权路径，权限范围：open平台，servicemall平台，sell平台，all所有平台;例如：1,2,3,表示在这3个平台,例如:open,servicemall表示在open,和servicemall平台上使用',
  `apply_from` varchar(255) DEFAULT NULL COMMENT '从哪个平台申请的',
  `account_bank_type` tinyint(4) DEFAULT NULL COMMENT '账户类型，1网络支付，2银行类',
  `account_bank_name` varchar(50) DEFAULT NULL COMMENT '银行账户名称',
  `account_bank_id` tinyint(4) DEFAULT NULL COMMENT '银行id，cash_bank的id',
  `account_num` int(11) DEFAULT NULL COMMENT '帐号id，银行帐号，或支付宝帐号',
  `account_user` varchar(255) DEFAULT NULL COMMENT '开户名，或用户名',
  `account_place` varchar(255) DEFAULT NULL COMMENT '开户地',
  `account_shouxu_id` tinyint(11) DEFAULT NULL COMMENT '手续费id，cash_shouxu',
  `account_min` decimal(10,0) DEFAULT '0' COMMENT '转账最小资金',
  `account_max` decimal(10,0) DEFAULT '20000' COMMENT '单日提款上限，默认20000',
  `account_count` smallint(6) DEFAULT '3' COMMENT '单日提现次数,默认3次',
  `shenfenzheng_id` varchar(19) DEFAULT NULL COMMENT '身份证',
  `info` varchar(255) DEFAULT NULL COMMENT '备注',
  `verify_status` tinyint(4) DEFAULT '0' COMMENT '0=审核中，1=审核通过，2=审核未通过',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_file_refs
-- ----------------------------
DROP TABLE IF EXISTS `yzb_file_refs`;
CREATE TABLE `yzb_file_refs` (
  `file_id` int(11) DEFAULT NULL,
  `object_id` int(11) DEFAULT NULL,
  `object_type` varchar(20) DEFAULT NULL,
  UNIQUE KEY `file_id` (`file_id`,`object_id`),
  KEY `object_type` (`object_type`,`object_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Table structure for yzb_files
-- ----------------------------
DROP TABLE IF EXISTS `yzb_files`;
CREATE TABLE `yzb_files` (
  `id` bigint(32) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `storage_type` varchar(32) DEFAULT NULL,
  `size` bigint(20) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25859070762158885 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Table structure for yzb_icp
-- ----------------------------
DROP TABLE IF EXISTS `yzb_icp`;
CREATE TABLE `yzb_icp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prefix` int(3) DEFAULT NULL COMMENT '网络识别号，手机号前三位，即运营商',
  `phone` int(7) NOT NULL COMMENT '手机号后4到11位',
  `province_name` varchar(20) NOT NULL COMMENT '省',
  `city_name` varchar(20) NOT NULL COMMENT '市',
  `name` varchar(20) NOT NULL COMMENT '运营商',
  `post_code` varchar(20) NOT NULL COMMENT '邮编',
  `city_code` varchar(20) NOT NULL COMMENT '固话前缀编码',
  `area_code` varchar(20) NOT NULL COMMENT '地区行政编码',
  `types` varchar(50) DEFAULT NULL COMMENT '运营商业务',
  `if_mvno` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否是虚拟运营商,1是，0不是',
  `mvno_isp` varchar(20) DEFAULT NULL COMMENT '虚拟运营商所属顶级运营商',
  `mvno` int(11) NOT NULL DEFAULT '0',
  `province_code` varchar(20) NOT NULL COMMENT '省级行政单位编号',
  `status_icp` tinyint(4) NOT NULL DEFAULT '1' COMMENT '号码状态,1正常,2维护',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT '1' COMMENT '1为正常nomal，0为维护maintain',
  PRIMARY KEY (`id`,`phone`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=360946 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_icp_mvno
-- ----------------------------
DROP TABLE IF EXISTS `yzb_icp_mvno`;
CREATE TABLE `yzb_icp_mvno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_icp_tel
-- ----------------------------
DROP TABLE IF EXISTS `yzb_icp_tel`;
CREATE TABLE `yzb_icp_tel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prefix` varchar(255) DEFAULT NULL COMMENT '固话号码前缀',
  `phone` varchar(255) DEFAULT NULL COMMENT '固定电话号码',
  `province` varchar(255) DEFAULT NULL COMMENT '所在省',
  `city` varchar(255) DEFAULT NULL COMMENT '所在市',
  `isp` varchar(255) DEFAULT NULL COMMENT '运营商',
  `post_code` varchar(255) DEFAULT NULL COMMENT '邮编',
  `city_code` varchar(255) DEFAULT NULL COMMENT '固话前缀',
  `area_code` varchar(255) DEFAULT NULL COMMENT '市行政编码',
  `types` varchar(255) DEFAULT NULL COMMENT '运营商业务类型',
  `senfen_code` varchar(255) DEFAULT NULL COMMENT '省级行政单位编码',
  `status_icp` tinyint(1) NOT NULL DEFAULT '1' COMMENT '号码状态,1正常,2维护',
  `if_mvno` tinyint(1) NOT NULL COMMENT '0',
  `mvno_isp` varchar(255) DEFAULT NULL,
  `mvno` int(11) NOT NULL COMMENT '0',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT '1' COMMENT '1为正常nomal，0为维护maintain',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_idcard
-- ----------------------------
DROP TABLE IF EXISTS `yzb_idcard`;
CREATE TABLE `yzb_idcard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `card` varchar(18) NOT NULL COMMENT '身份证号',
  `name` varchar(255) DEFAULT NULL COMMENT '姓名',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态,0=>''未知'',1=>''正常'',2=>''待补齐'',3=>''黑名单''',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `card` (`card`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_idcard_insert_error_log
-- ----------------------------
DROP TABLE IF EXISTS `yzb_idcard_insert_error_log`;
CREATE TABLE `yzb_idcard_insert_error_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idcard` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `msg` text,
  `add_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_interface
-- ----------------------------
DROP TABLE IF EXISTS `yzb_interface`;
CREATE TABLE `yzb_interface` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `english_name` varchar(100) NOT NULL,
  `access_use` varchar(50) NOT NULL DEFAULT '0' COMMENT '使用权限',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '接口状态',
  `pay_use` tinyint(1) NOT NULL COMMENT '是否收费',
  `limit_ci` int(11) NOT NULL DEFAULT '0',
  `limit_miao` int(11) NOT NULL DEFAULT '0',
  `request_demo` varchar(1000) NOT NULL COMMENT '请求示例',
  `request_type` varchar(255) NOT NULL COMMENT '请求方式',
  `format` varchar(255) NOT NULL DEFAULT 'json' COMMENT '请求格式',
  `request_url` varchar(255) NOT NULL COMMENT '请求地址',
  `explain` varchar(255) NOT NULL DEFAULT '' COMMENT '接口备注',
  `return_demo` varchar(1000) NOT NULL COMMENT '返l回示例',
  `add_time` int(11) NOT NULL,
  `edit_time` int(11) NOT NULL,
  `is_dispay_notice_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否显示,通知,回调.0不显示,1显示',
  PRIMARY KEY (`id`),
  UNIQUE KEY `english_name` (`english_name`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_interface_err_code
-- ----------------------------
DROP TABLE IF EXISTS `yzb_interface_err_code`;
CREATE TABLE `yzb_interface_err_code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `interface_id` int(11) DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `interface` varchar(255) DEFAULT NULL,
  `msg` varchar(255) DEFAULT NULL,
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_interface_params
-- ----------------------------
DROP TABLE IF EXISTS `yzb_interface_params`;
CREATE TABLE `yzb_interface_params` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `interface_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `default_val` varchar(255) NOT NULL DEFAULT '',
  `must` tinyint(1) NOT NULL DEFAULT '0',
  `type` varchar(255) NOT NULL DEFAULT '',
  `explain` varchar(255) NOT NULL DEFAULT '',
  `add_time` int(11) NOT NULL,
  `edit_time` int(11) NOT NULL,
  `attention` tinyint(1) NOT NULL DEFAULT '0' COMMENT '注意.0否，1是',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_interface_return_params
-- ----------------------------
DROP TABLE IF EXISTS `yzb_interface_return_params`;
CREATE TABLE `yzb_interface_return_params` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `interface_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(255) NOT NULL DEFAULT '',
  `explain` varchar(255) NOT NULL DEFAULT '',
  `add_time` int(11) NOT NULL,
  `edit_time` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `example` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_migration
-- ----------------------------
DROP TABLE IF EXISTS `yzb_migration`;
CREATE TABLE `yzb_migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_mobile_balance_query_log
-- ----------------------------
DROP TABLE IF EXISTS `yzb_mobile_balance_query_log`;
CREATE TABLE `yzb_mobile_balance_query_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `platform` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0失败,1成功',
  `mobile` varchar(20) NOT NULL DEFAULT '',
  `query_num` int(11) NOT NULL DEFAULT '1',
  `request` text,
  `params` text,
  `response` text,
  `ip` varchar(50) NOT NULL DEFAULT '',
  `add_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_number
-- ----------------------------
DROP TABLE IF EXISTS `yzb_number`;
CREATE TABLE `yzb_number` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` bigint(20) NOT NULL COMMENT '靓号',
  `price` decimal(10,3) NOT NULL DEFAULT '0.000' COMMENT '价格',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '注册状态，''0''=>''未注册'',''1''=>''已注册''',
  `info` varchar(255) DEFAULT NULL COMMENT '备注',
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '账户类型，''0''=>''未知'',''1''=>''普通注册'',''2''=>''免费靓号'',''3''=>''收费靓号'',''4''=>''未开放号码''',
  `user_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '用户类型，''0''=>''未知'',''1''=>''个人'',''2''=>''个体户'',''3''=>''企业''',
  `add_time` int(11) NOT NULL DEFAULT '0',
  `reg_time` int(11) NOT NULL DEFAULT '0' COMMENT '注册时间',
  `edit_time` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `number` (`number`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_open_notice_read_situation
-- ----------------------------
DROP TABLE IF EXISTS `yzb_open_notice_read_situation`;
CREATE TABLE `yzb_open_notice_read_situation` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '开放平台，已经阅读过的公告',
  `notice_id` int(11) NOT NULL COMMENT '公告id',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '阅读状态 1已经阅读，2未阅读',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_open_users
-- ----------------------------
DROP TABLE IF EXISTS `yzb_open_users`;
CREATE TABLE `yzb_open_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `balance` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '平台账户余额',
  `user_id` int(11) DEFAULT NULL COMMENT '用户id',
  `sign_key` varchar(255) DEFAULT NULL COMMENT '数字签名',
  `level` int(11) DEFAULT NULL COMMENT '级别',
  `add_time` int(11) DEFAULT '0',
  `status` varchar(16) NOT NULL DEFAULT 'INACTIVE' COMMENT 'INACTIVE=未激活,  ACTIVE=正常,  REVIEW=审核中,  SUSPENED=冻结, BANNED=封号清退, REJECTED=审核失败',
  `disable_money` decimal(17,5) NOT NULL DEFAULT '0.00000' COMMENT '不可用余额，',
  `parent_dealer_user_id` int(11) NOT NULL DEFAULT '0' COMMENT '代理商上级经销商user_id,0是直属表示没有上级或上级为系统',
  `edit_time` int(11) NOT NULL DEFAULT '0' COMMENT '修改时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_open_users_aduit_log
-- ----------------------------
DROP TABLE IF EXISTS `yzb_open_users_aduit_log`;
CREATE TABLE `yzb_open_users_aduit_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `cause` varchar(255) DEFAULT NULL,
  `add_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_order_complaint
-- ----------------------------
DROP TABLE IF EXISTS `yzb_order_complaint`;
CREATE TABLE `yzb_order_complaint` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '投诉订单',
  `order_sn` varchar(255) DEFAULT NULL COMMENT '订单号',
  `order_cate` int(11) DEFAULT NULL COMMENT '订单分类',
  `prouduct_id` int(11) DEFAULT NULL COMMENT '投诉产品id',
  `product_name` varchar(255) DEFAULT NULL COMMENT '投诉产品',
  `order_sup_user_id` int(11) NOT NULL DEFAULT '0' COMMENT '订单供应商',
  `complaint_user_id` int(11) NOT NULL COMMENT '投诉人',
  `complaint_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '投诉状态  0投诉中，1已处理，2已受理',
  `complaint_type` varchar(255) DEFAULT NULL COMMENT '投诉类型，1卡单，2充值未到账，3冲正，4其他',
  `complaint_deal_type` tinyint(4) DEFAULT NULL COMMENT '投诉处理类型，1退款，2补充，3',
  `complaint_proof` varchar(255) DEFAULT NULL COMMENT '投诉凭证',
  `info` varchar(255) DEFAULT NULL COMMENT '投诉详情',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  `deal_time` int(11) DEFAULT NULL COMMENT '处理时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='投诉订单';

-- ----------------------------
-- Table structure for yzb_order_flow
-- ----------------------------
DROP TABLE IF EXISTS `yzb_order_flow`;
CREATE TABLE `yzb_order_flow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pintai` tinyint(1) NOT NULL COMMENT '平台',
  `sn` varchar(30) NOT NULL COMMENT '订单号',
  `trade_sn` varchar(30) NOT NULL COMMENT '交易流水号',
  `request_order_id` varchar(50) DEFAULT NULL COMMENT '第三方请求单号(如 api接口商的单号）',
  `product_type` tinyint(1) NOT NULL COMMENT '移动｜联通｜电信',
  `kuai_man` tinyint(1) NOT NULL COMMENT '快充或慢充',
  `product_name` varchar(255) NOT NULL COMMENT '商品名称',
  `product_id` int(11) NOT NULL COMMENT '商品id',
  `user_id` int(11) NOT NULL COMMENT '下单人id',
  `senfen` varchar(20) NOT NULL COMMENT '省份',
  `city` varchar(20) DEFAULT NULL COMMENT '城市',
  `icp` varchar(20) DEFAULT NULL COMMENT '运营商',
  `user_money` decimal(12,5) DEFAULT NULL COMMENT '下单人余额',
  `on` varchar(11) NOT NULL COMMENT '充值号码',
  `sell_user_id` int(11) DEFAULT NULL COMMENT '卖家id',
  `qudao_id` int(11) DEFAULT NULL COMMENT '渠道id',
  `t_id` int(11) DEFAULT NULL COMMENT '模版id',
  `t_sn` varchar(20) DEFAULT NULL COMMENT '模版编号',
  `template_name` varchar(50) DEFAULT NULL COMMENT '模版名称',
  `product_mianzi` decimal(10,2) NOT NULL COMMENT '商品面值',
  `rechage_price` decimal(10,2) NOT NULL COMMENT '充值金额',
  `rechage_way` tinyint(1) DEFAULT NULL COMMENT '充值方式,0=>''未知'',1=>''人工充值'',2=>''接口充值'',3=>''批量充值'',4=>''卡密充值''',
  `rechage_num` int(11) NOT NULL DEFAULT '0' COMMENT '充值次数,第n次充值',
  `num` int(11) NOT NULL DEFAULT '0' COMMENT '购买数量',
  `cenben` decimal(12,5) DEFAULT NULL COMMENT '成本',
  `old_price` decimal(12,5) DEFAULT NULL COMMENT '前余额',
  `sell_price` decimal(12,5) DEFAULT NULL COMMENT '出货价',
  `lirun` decimal(12,5) DEFAULT NULL COMMENT '利润',
  `status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '订单状态，''0''=>''未知'',''1''=>''充值中'',''2''=>''充值成功'',''3''=>''充值失败'',''4''=>''待付款'',''5''=>''已取消''',
  `rechage_status` tinyint(2) NOT NULL COMMENT '充值状态,''0''=>''未知'',''1''=>''待付款'',''2''=>''等待提单'',''3''=>''充值中'',''4''=>''提交失败'',''5''=>''充值成功''',
  `closing_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '结算状态，0未知，1未结算，2已结算，3已退款',
  `rechage_yes_no` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否可以充值，1是0否',
  `order_ip` varchar(255) DEFAULT NULL COMMENT '下单ip',
  `user_info` varchar(255) DEFAULT NULL COMMENT '用户备注',
  `admin_info` varchar(255) DEFAULT NULL COMMENT '管理员备注',
  `add_time` int(11) DEFAULT '0',
  `pay_time` int(11) DEFAULT NULL COMMENT '付款时间',
  `finish_time` int(11) DEFAULT '0' COMMENT '处理时间',
  `official_sn` varchar(255) DEFAULT NULL COMMENT '官方流水',
  `life_real_sell_price` decimal(17,5) DEFAULT '0.00000',
  `on_before_info` varchar(255) NOT NULL DEFAULT '',
  `sup_info` varchar(255) NOT NULL DEFAULT '',
  `app_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`,`sn`),
  UNIQUE KEY `sn` (`sn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_order_game
-- ----------------------------
DROP TABLE IF EXISTS `yzb_order_game`;
CREATE TABLE `yzb_order_game` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pintai` tinyint(1) NOT NULL DEFAULT '0' COMMENT '下单人平台',
  `user_id` int(11) NOT NULL COMMENT '下单人id',
  `product_name` varchar(255) NOT NULL COMMENT '商品名称',
  `product_id` int(11) NOT NULL COMMENT '商品id',
  `master_id` int(11) NOT NULL,
  `product_type` tinyint(4) NOT NULL,
  `request_order_id` varchar(50) DEFAULT NULL COMMENT '第三方请求单号(如 api接口商的单号）',
  `sn` varchar(30) NOT NULL COMMENT '订单编号',
  `trade_sn` varchar(30) NOT NULL COMMENT '交易流水号',
  `on` varchar(100) NOT NULL COMMENT '充值号码',
  `game_region` varchar(255) DEFAULT NULL COMMENT '游戏地区',
  `qudao_id` int(11) DEFAULT NULL COMMENT '渠道id',
  `sell_user_id` int(11) DEFAULT NULL COMMENT '卖家id',
  `t_id` int(11) DEFAULT NULL COMMENT '模版id',
  `t_sn` varchar(20) DEFAULT NULL COMMENT '模版编号',
  `template_name` varchar(50) DEFAULT NULL COMMENT '模版名称',
  `product_mianzi` decimal(10,3) NOT NULL COMMENT '商品面值',
  `rechage_price` decimal(12,5) NOT NULL COMMENT '充值金额',
  `rechage_way` tinyint(1) NOT NULL COMMENT '充值方式,0=>''未知'',1=>''人工充值'',2=>''接口充值'',3=>''批量充值'',4=>''卡密充值''',
  `rechage_num` int(11) NOT NULL COMMENT '充值次数,第n次充值',
  `num` int(11) NOT NULL DEFAULT '0' COMMENT '购买数量',
  `cenben` decimal(12,5) DEFAULT NULL COMMENT '成本',
  `old_price` decimal(12,5) DEFAULT NULL COMMENT '前余额',
  `sell_price` decimal(12,5) DEFAULT NULL COMMENT '出货价',
  `lirun` decimal(12,5) DEFAULT NULL COMMENT '利润',
  `status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '订单状态，''0''=>''未知'',''1''=>''充值中'',''2''=>''充值成功'',''3''=>''充值失败'',''4''=>''待付款'',''5''=>''已取消''',
  `rechage_status` tinyint(2) NOT NULL COMMENT '充值状态,''0''=>''未知'',''1''=>''待付款'',''2''=>''等待提单'',''3''=>''充值中'',''4''=>''提交失败'',''5''=>''充值成功''',
  `closing_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '结算状态，0未知，1未结算，2已结算，3已退款',
  `rechage_yes_no` tinyint(1) DEFAULT '1' COMMENT '1是0否',
  `add_time` int(11) DEFAULT '0',
  `pay_time` int(11) DEFAULT NULL COMMENT '支付时间',
  `finish_time` int(11) DEFAULT '0' COMMENT '处理时间',
  `user_info` varchar(255) DEFAULT NULL COMMENT '用户备注',
  `admin_info` varchar(255) DEFAULT NULL COMMENT '管理员备注',
  `order_ip` varchar(255) DEFAULT NULL COMMENT '下单ip',
  `sell_info` varchar(255) DEFAULT NULL COMMENT '供应商备注',
  `official_sn` varchar(255) DEFAULT NULL COMMENT '官方流水',
  `life_real_sell_price` decimal(17,5) DEFAULT '0.00000',
  `on_before_info` varchar(255) NOT NULL DEFAULT '',
  `sup_info` varchar(255) NOT NULL DEFAULT '',
  `app_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `sn` (`sn`),
  UNIQUE KEY `trade_sn` (`trade_sn`),
  KEY `add_time` (`add_time`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_order_mobile
-- ----------------------------
DROP TABLE IF EXISTS `yzb_order_mobile`;
CREATE TABLE `yzb_order_mobile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pintai` tinyint(1) NOT NULL COMMENT '平台',
  `sn` varchar(30) NOT NULL COMMENT '订单号',
  `trade_sn` varchar(30) NOT NULL COMMENT '交易流水号',
  `official_sn` varchar(255) DEFAULT NULL COMMENT '官方流水',
  `request_order_id` varchar(50) DEFAULT NULL COMMENT '第三方请求单号(如 api接口商的单号）',
  `product_type` tinyint(1) NOT NULL COMMENT '移动｜联通｜电信',
  `kuai_man` tinyint(1) NOT NULL COMMENT '快充或慢充',
  `product_name` varchar(255) NOT NULL COMMENT '商品名称',
  `product_id` int(11) NOT NULL COMMENT '商品id',
  `user_id` int(11) NOT NULL COMMENT '下单人id',
  `senfen` varchar(20) NOT NULL COMMENT '省份',
  `city` varchar(20) DEFAULT NULL COMMENT '城市',
  `icp` varchar(20) DEFAULT NULL COMMENT '运营商',
  `mvno` int(11) DEFAULT NULL,
  `user_money` decimal(12,5) DEFAULT NULL COMMENT '下单人余额',
  `on` varchar(11) NOT NULL COMMENT '充值号码',
  `sell_user_id` int(11) DEFAULT NULL COMMENT '卖家id',
  `qudao_id` int(11) DEFAULT NULL COMMENT '渠道id',
  `t_id` int(11) DEFAULT NULL COMMENT '模版id',
  `t_sn` varchar(20) DEFAULT NULL COMMENT '模版编号',
  `template_name` varchar(50) DEFAULT NULL COMMENT '模版名称',
  `product_mianzi` decimal(10,2) NOT NULL COMMENT '商品面值',
  `source_mianzi` decimal(10,2) DEFAULT NULL,
  `rechage_price` decimal(10,2) NOT NULL COMMENT '充值金额',
  `rechage_way` tinyint(1) DEFAULT NULL COMMENT '充值方式,0=>''未知'',1=>''人工充值'',2=>''接口充值'',3=>''批量充值'',4=>''卡密充值''',
  `rechage_num` int(11) NOT NULL DEFAULT '0' COMMENT '充值次数,第n次充值',
  `num` decimal(11,2) NOT NULL DEFAULT '0.00' COMMENT '购买数量',
  `cenben` decimal(12,5) DEFAULT NULL COMMENT '成本',
  `old_price` decimal(12,5) DEFAULT NULL COMMENT '前余额',
  `sell_price` decimal(12,5) DEFAULT NULL COMMENT '出货价',
  `lirun` decimal(12,5) DEFAULT NULL COMMENT '利润',
  `status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '订单状态，''0''=>''未知'',''1''=>''充值中'',''2''=>''充值成功'',''3''=>''充值失败'',''4''=>''待付款'',''5''=>''已取消''',
  `rechage_status` tinyint(2) NOT NULL COMMENT '充值状态,''0''=>''未知'',''1''=>''待付款'',''2''=>''等待提单'',''3''=>''充值中'',''4''=>''提交失败'',''5''=>''充值成功''',
  `closing_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '结算状态，0未知，1未结算，2已结算，3已退款',
  `rechage_yes_no` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否可以充值，1是0否',
  `order_ip` varchar(255) DEFAULT NULL COMMENT '下单ip',
  `user_info` varchar(255) DEFAULT NULL COMMENT '用户备注',
  `admin_info` varchar(255) NOT NULL DEFAULT '' COMMENT '管理员备注',
  `add_time` int(11) NOT NULL DEFAULT '0',
  `pay_time` int(11) DEFAULT NULL COMMENT '付款时间',
  `finish_time` int(11) DEFAULT '0' COMMENT '处理时间',
  `app_id` int(11) NOT NULL DEFAULT '0',
  `need_notify` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否需要通知第三方接口',
  `life_real_sell_price` decimal(17,5) DEFAULT '0.00000',
  `on_before_info` varchar(255) NOT NULL DEFAULT '',
  `sup_info` varchar(255) NOT NULL DEFAULT '',
  `on_after_info` varchar(255) NOT NULL DEFAULT '',
  `careful_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否需要注意，0否，1是',
  PRIMARY KEY (`id`,`sn`),
  UNIQUE KEY `sn` (`sn`),
  UNIQUE KEY `trade_sn` (`trade_sn`),
  KEY `add_time` (`add_time`),
  KEY `t_sn` (`t_sn`,`status`,`rechage_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_order_recharge
-- ----------------------------
DROP TABLE IF EXISTS `yzb_order_recharge`;
CREATE TABLE `yzb_order_recharge` (
  `id` varchar(36) NOT NULL COMMENT '订单号',
  `trade_id` varchar(36) DEFAULT NULL COMMENT '交易流水号',
  `outer_sn` varchar(50) DEFAULT NULL COMMENT '第三方请求单号(如 api接口商的单号）',
  `product_id` int(11) NOT NULL COMMENT '商品id',
  `product_sub_id` int(11) DEFAULT NULL,
  `product_sub_type` varchar(5) DEFAULT NULL,
  `source_id` int(11) DEFAULT NULL,
  `request_id` bigint(11) DEFAULT '0' COMMENT '请求ID',
  `platform_id` int(1) NOT NULL COMMENT '平台',
  `order_cate_id` int(11) DEFAULT NULL COMMENT '订单分类',
  `product_master_id` int(11) DEFAULT NULL COMMENT '主商品分类',
  `product_cate_id` int(11) DEFAULT NULL COMMENT '商品分类',
  `product_name` varchar(255) DEFAULT NULL COMMENT '商品名称',
  `product_face_value` decimal(10,2) DEFAULT NULL COMMENT '商品面值',
  `user_id` int(11) NOT NULL COMMENT '下单人id',
  `supplier_id` int(11) DEFAULT NULL COMMENT '供应商用户ID',
  `isp_id` tinyint(4) DEFAULT '0' COMMENT '运营商',
  `phone_number` varchar(120) DEFAULT NULL COMMENT '充值号码',
  `on_before_info` varchar(255) DEFAULT '' COMMENT '帐号充值前信息',
  `on_after_info` varchar(255) DEFAULT '' COMMENT '帐号充值前信息',
  `on_other` varchar(255) DEFAULT '' COMMENT '其他订单信息，(JSON格式)',
  `recharge_amount` decimal(10,2) DEFAULT NULL COMMENT '充值金额',
  `payment_class_id` int(1) DEFAULT NULL COMMENT '充值方式,0=>未知,1=>人工充值,2=>接口充值,3=>批量充值,4=>卡密充值',
  `recharge_sequence` int(11) DEFAULT NULL COMMENT '充值次数,第n次充值才成功',
  `buy_num` decimal(11,2) DEFAULT '1.00' COMMENT '购买数量',
  `sell_price` decimal(12,5) DEFAULT NULL COMMENT '出货价',
  `settlement_status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '结算状态：0=>未扣款，1=>已扣款，2=>系统失败退款，3=>人工失败退款，4=>二次扣款',
  `status` tinyint(2) DEFAULT NULL COMMENT '订单状态，0=>未知,1=>充值中,2=>充值成功(系统),3=>充值失败(系统),4=>待付款,5=>已取消,6=>充值成功(人工),7=>充值失败(人工)',
  `user_ip` varchar(130) DEFAULT '' COMMENT '下单ip',
  `recharge_ip` varchar(130) DEFAULT '' COMMENT '传到第三方的IP',
  `note` varchar(120) DEFAULT '' COMMENT '用户备注',
  `app_id` int(11) DEFAULT '0',
  `real_sell_price` decimal(17,5) DEFAULT '0.00000' COMMENT '用户卖给客户的零售价格',
  `add_time` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  `pay_time` datetime DEFAULT NULL COMMENT '付款时间',
  `edit_time` datetime DEFAULT NULL COMMENT '修改时间',
  `end_time` datetime DEFAULT NULL COMMENT '结束时间',
  `speed` tinyint(4) DEFAULT '1' COMMENT '充值速度.1=快,2=慢.',
  `province_name` varchar(10) DEFAULT '' COMMENT '省份',
  `city_name` varchar(20) DEFAULT '' COMMENT '城市',
  `mvno` tinyint(4) DEFAULT '0' COMMENT '虚拟运营商',
  `admin_info` varchar(255) DEFAULT '' COMMENT '管理员备注信息',
  `order_mark` tinyint(1) NOT NULL DEFAULT '0' COMMENT '订单标记：0=>正常，1=>超时2分钟，2=>卡单，3=>待人工处理，4=>失败可疑',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_id` (`id`) USING BTREE,
  UNIQUE KEY `idx_trade_id` (`trade_id`) USING BTREE,
  KEY `idx_add_time` (`add_time`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='给用户查询，和后台查询';

-- ----------------------------
-- Table structure for yzb_order_recharge_beifen
-- ----------------------------
DROP TABLE IF EXISTS `yzb_order_recharge_beifen`;
CREATE TABLE `yzb_order_recharge_beifen` (
  `order_sn` varchar(30) NOT NULL COMMENT '订单号',
  `trade_sn` varchar(30) NOT NULL COMMENT '交易流水号',
  `outer_sn` varchar(50) NOT NULL COMMENT '第三方请求单号(如 api接口商的单号）',
  `product_id` int(11) NOT NULL COMMENT '商品id',
  `request_id` bigint(11) NOT NULL DEFAULT '0' COMMENT '请求ID',
  `pintai` tinyint(1) NOT NULL COMMENT '平台',
  `order_cate` int(11) NOT NULL COMMENT '订单分类',
  `product_master_id` int(11) NOT NULL COMMENT '主商品分类',
  `product_cate` int(11) NOT NULL COMMENT '商品分类',
  `product_name` varchar(255) NOT NULL COMMENT '商品名称',
  `product_mianzi` decimal(10,2) NOT NULL COMMENT '商品面值',
  `user_id` int(11) NOT NULL COMMENT '下单人id',
  `icp` tinyint(4) NOT NULL DEFAULT '0' COMMENT '运营商',
  `on` varchar(120) NOT NULL COMMENT '充值号码',
  `on_before_info` varchar(255) NOT NULL DEFAULT '' COMMENT '帐号充值前信息',
  `on_after_info` varchar(255) NOT NULL DEFAULT '' COMMENT '帐号充值前信息',
  `on_other` varchar(255) NOT NULL DEFAULT '' COMMENT '其他订单信息，(JSON格式)',
  `recharge_amount` decimal(10,2) NOT NULL COMMENT '充值金额',
  `recharge_way` tinyint(1) NOT NULL COMMENT '充值方式,0=>''未知'',1=>''人工充值'',2=>''接口充值'',3=>''批量充值'',4=>''卡密充值''',
  `recharge_sequence` int(11) NOT NULL COMMENT '充值次数,第n次充值才成功',
  `buy_num` decimal(11,2) NOT NULL DEFAULT '1.00' COMMENT '购买数量',
  `sell_price` decimal(12,5) NOT NULL COMMENT '出货价',
  `order_status` tinyint(2) NOT NULL COMMENT '订单状态，''0''=>''未知'',''1''=>''充值中'',''2''=>''充值成功'',''3''=>''充值失败'',''4''=>''待付款'',''5''=>''已取消''',
  `user_ip` varchar(130) NOT NULL DEFAULT '' COMMENT '下单ip',
  `recharge_ip` varchar(130) NOT NULL DEFAULT '' COMMENT '传到第三方的IP',
  `user_info` varchar(120) NOT NULL DEFAULT '' COMMENT '用户备注',
  `app_id` int(11) NOT NULL DEFAULT '0',
  `life_real_sell_price` decimal(17,5) NOT NULL DEFAULT '0.00000' COMMENT '用户卖给客户的零售价格',
  `add_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '添加时间',
  `pay_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '付款时间',
  `end_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '结束时间',
  `speed` tinyint(4) NOT NULL DEFAULT '1' COMMENT '充值速度.1=快,2=慢.',
  `province` varchar(10) NOT NULL DEFAULT '' COMMENT '省份',
  `city` varchar(20) NOT NULL DEFAULT '' COMMENT '城市',
  `mvno` tinyint(4) NOT NULL DEFAULT '0' COMMENT '虚拟运营商',
  `admin_info` varchar(255) NOT NULL DEFAULT '' COMMENT '管理员备注信息',
  PRIMARY KEY (`order_sn`),
  UNIQUE KEY `sn` (`order_sn`),
  UNIQUE KEY `trade_sn` (`trade_sn`),
  UNIQUE KEY `outer_sn` (`outer_sn`,`user_id`),
  KEY `add_time` (`add_time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='给用户查询，和后台查询';

-- ----------------------------
-- Table structure for yzb_order_recharge_sup
-- ----------------------------
DROP TABLE IF EXISTS `yzb_order_recharge_sup`;
CREATE TABLE `yzb_order_recharge_sup` (
  `id` varchar(36) NOT NULL,
  `order_id` varchar(36) NOT NULL COMMENT '订单号',
  `official_sn` varchar(255) NOT NULL DEFAULT '' COMMENT '官方流水',
  `sup_order_cate_id` int(11) NOT NULL COMMENT '订单分类',
  `template_id` varchar(36) NOT NULL COMMENT '模版编号',
  `sup_user_id` int(11) NOT NULL DEFAULT '0' COMMENT '卖家id',
  `source_id` int(11) NOT NULL COMMENT '货源id',
  `source_mianzi` decimal(10,2) NOT NULL COMMENT '货源面值',
  `source_buy_num` decimal(11,2) NOT NULL COMMENT '购买数量',
  `sup_cost` decimal(12,5) NOT NULL DEFAULT '0.00000' COMMENT '供货商自身成本',
  `sup_price` decimal(12,5) NOT NULL DEFAULT '0.00000' COMMENT '供货商出货价',
  `sup_profit` decimal(12,5) DEFAULT NULL,
  `on_before_info` varchar(255) NOT NULL DEFAULT '' COMMENT '供应商自查帐号充值前信息',
  `on_after_info` varchar(255) NOT NULL DEFAULT '' COMMENT '供应商自查帐号充值后信息',
  `phone_number` varchar(120) NOT NULL COMMENT '充值帐号',
  `on_other` varchar(255) NOT NULL DEFAULT '' COMMENT '其他订单信息，(JSON格式)',
  `recharge_status` tinyint(2) NOT NULL COMMENT '充值状态: 0 => 未知 , 1 => 待付款 , 2 => 待提单 , 3 => 已提单 , 4 => 已验单 , 5 => 提交可疑 , 6 => 提交失败 , 7 => 充值中 , 8 => 充值可疑 , 9 => 充值成功 (系统) , 10 => 充值成功 (供应商人工) , 11 => 充值成功 (总后台人工) , 12 => 充值失败 (系统) , 13 => 充值失败 (供应商人工) , 14 => 充值失败 (总后台人工) , 15 => 已退款 , 16 => 已取消 , 17 => 待处理 ',
  `recharge_sequence` int(11) NOT NULL DEFAULT '0' COMMENT '充值次数,第n次充值才成功',
  `settle_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '结算状态，0=>未知，1=>待结算，2=>验单不通过，不付款结算，3=>系统提单失败，不付款结算，4=>系统充值成功，已付款结算，5=>系统充值失败，不付款结算，6=>供应商人工成功，已付款结算，7=>供应商人工失败，不付款结算，8=>供应商人工失败，已退款结算，9=>总后台人工成功，待结算，10=>总后台人工成功，已付款结算，11=>总后台人工失败，不付款结算，12=>总后台人工失败，已退款结算',
  `can_recharge` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否可以充值，1是0否',
  `sup_admin_info` varchar(255) NOT NULL DEFAULT '' COMMENT '管理员给供货商备注',
  `add_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '供应商下单时间',
  `edit_time` datetime DEFAULT NULL COMMENT '修改时间',
  `end_time` datetime DEFAULT NULL COMMENT '处理时间',
  `sup_info` varchar(255) NOT NULL DEFAULT '' COMMENT '供货商备注信息',
  `careful_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否需要注意，0否，1是',
  `sup_speed` tinyint(4) NOT NULL DEFAULT '1' COMMENT '供货商充值速度.1=快,2=慢.',
  `source_product_name` varchar(255) CHARACTER SET utf8mb4 NOT NULL COMMENT '主商品',
  `source_product_cate_id` int(11) NOT NULL COMMENT '子分类master表里面的cate_id,也是product_cate模型连的1话费，2游戏分类',
  `source_product_master_id` int(11) NOT NULL DEFAULT '0' COMMENT '主商品',
  `source_product_unit` tinyint(1) NOT NULL DEFAULT '3' COMMENT '充值单位1=>''个'',2=>''月'',3=>''元''',
  `province_name` varchar(10) NOT NULL DEFAULT '' COMMENT '供货商选择的省份',
  `city_name` varchar(20) NOT NULL DEFAULT '' COMMENT '供货商选择的城市',
  `mvno` tinyint(4) NOT NULL DEFAULT '0' COMMENT '供货商选择的虚拟运营商',
  `isp_id` tinyint(4) NOT NULL DEFAULT '0',
  `recharge_ip` varchar(130) NOT NULL DEFAULT '' COMMENT '传到第三方的IP',
  PRIMARY KEY (`id`),
  UNIQUE KEY `order_sn` (`order_id`,`recharge_sequence`),
  UNIQUE KEY `sup_sn` (`id`),
  KEY `add_time` (`add_time`),
  KEY `t_sn` (`template_id`,`recharge_status`,`sup_order_cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_order_recharge_sup_beifen
-- ----------------------------
DROP TABLE IF EXISTS `yzb_order_recharge_sup_beifen`;
CREATE TABLE `yzb_order_recharge_sup_beifen` (
  `sup_sn` varchar(30) NOT NULL,
  `order_sn` varchar(30) NOT NULL COMMENT '订单号',
  `official_sn` varchar(255) NOT NULL DEFAULT '' COMMENT '官方流水',
  `sup_order_cate` int(11) NOT NULL COMMENT '订单分类',
  `t_sn` varchar(20) NOT NULL COMMENT '模版编号',
  `sup_user_id` int(11) NOT NULL DEFAULT '0' COMMENT '卖家id',
  `source_id` int(11) NOT NULL COMMENT '货源id',
  `source_mianzi` decimal(10,2) NOT NULL COMMENT '货源面值',
  `source_buy_num` decimal(11,2) NOT NULL COMMENT '购买数量',
  `sup_cost` decimal(12,5) NOT NULL DEFAULT '0.00000' COMMENT '供货商自身成本',
  `sup_price` decimal(12,5) NOT NULL DEFAULT '0.00000' COMMENT '供货商出货价',
  `on_before_info` varchar(255) NOT NULL DEFAULT '' COMMENT '供应商自查帐号充值前信息',
  `on_after_info` varchar(255) NOT NULL DEFAULT '' COMMENT '供应商自查帐号充值后信息',
  `on` varchar(120) NOT NULL COMMENT '充值帐号',
  `on_other` varchar(255) NOT NULL DEFAULT '' COMMENT '其他订单信息，(JSON格式)',
  `recharge_status` tinyint(2) NOT NULL COMMENT '充值状态,''0''=>''未知'',''1''=>''待付款'',''2''=>''等待提单'',''3''=>''充值中'',''4''=>''提交失败'',''5''=>''充值成功''',
  `recharge_sequence` int(11) NOT NULL DEFAULT '0' COMMENT '充值次数,第n次充值才成功',
  `closing_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '结算状态，0未知，1未结算，2已结算，3已退款',
  `can_recharge` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否可以充值，1是0否',
  `sup_admin_info` varchar(255) NOT NULL DEFAULT '' COMMENT '管理员给供货商备注',
  `add_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '供应商下单时间',
  `end_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '处理时间',
  `sup_info` varchar(255) NOT NULL DEFAULT '' COMMENT '供货商备注信息',
  `careful_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否需要注意，0否，1是',
  `sup_speed` tinyint(4) NOT NULL DEFAULT '1' COMMENT '供货商充值速度.1=快,2=慢.',
  `source_product_name` varchar(255) CHARACTER SET utf8mb4 NOT NULL COMMENT '主商品',
  `source_product_cate_id` int(11) NOT NULL COMMENT '子分类master表里面的cate_id,也是product_cate模型连的1话费，2游戏分类',
  `source_product_master_id` int(11) NOT NULL DEFAULT '0' COMMENT '主商品',
  `source_product_unit` tinyint(1) NOT NULL DEFAULT '3' COMMENT '充值单位1=>''个'',2=>''月'',3=>''元''',
  `province` varchar(10) NOT NULL DEFAULT '' COMMENT '供货商选择的省份',
  `city` varchar(20) NOT NULL DEFAULT '' COMMENT '供货商选择的城市',
  `mvno` tinyint(4) NOT NULL DEFAULT '0' COMMENT '供货商选择的虚拟运营商',
  `icp` tinyint(4) NOT NULL DEFAULT '0',
  `recharge_ip` varchar(130) NOT NULL DEFAULT '' COMMENT '传到第三方的IP',
  PRIMARY KEY (`sup_sn`),
  UNIQUE KEY `order_sn` (`order_sn`,`recharge_sequence`),
  UNIQUE KEY `sup_sn` (`sup_sn`),
  KEY `add_time` (`add_time`),
  KEY `t_sn` (`t_sn`,`recharge_status`,`sup_order_cate`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_order_recharge_sup_for_get
-- ----------------------------
DROP TABLE IF EXISTS `yzb_order_recharge_sup_for_get`;
CREATE TABLE `yzb_order_recharge_sup_for_get` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sup_order_id` varchar(36) NOT NULL,
  `order_id` varchar(36) NOT NULL DEFAULT '',
  `template_id` varchar(20) NOT NULL COMMENT '模版编号',
  `sup_user_id` int(11) NOT NULL DEFAULT '0' COMMENT '卖家id',
  `response` text NOT NULL,
  `add_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '供应商下单时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_id` (`sup_order_id`) USING BTREE,
  KEY `idx_template_id` (`template_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5808734 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_order_recharge_sup_status_operation_log
-- ----------------------------
DROP TABLE IF EXISTS `yzb_order_recharge_sup_status_operation_log`;
CREATE TABLE `yzb_order_recharge_sup_status_operation_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sup_order_id` varchar(36) NOT NULL DEFAULT '',
  `order_id` varchar(36) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `recharge_status` varchar(255) NOT NULL,
  `settle_status` varchar(255) NOT NULL,
  `operation_user_id` int(11) NOT NULL,
  `if_admin` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否为管理操作，0否1是',
  `operator_ip` varchar(255) NOT NULL,
  `operation_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '操作方式0未知1接口2手动',
  `add_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `edit_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=877 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_order_status_operation_log
-- ----------------------------
DROP TABLE IF EXISTS `yzb_order_status_operation_log`;
CREATE TABLE `yzb_order_status_operation_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `recharge_num` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `recharge_status` varchar(255) DEFAULT NULL,
  `settle_status` varchar(255) DEFAULT NULL,
  `order_cate_id` int(11) DEFAULT NULL,
  `operation_user_id` int(11) DEFAULT NULL,
  `if_admin` tinyint(1) DEFAULT '0' COMMENT '是否为管理操作，0否1是',
  `ip` varchar(255) DEFAULT NULL,
  `source_id` int(11) DEFAULT NULL,
  `source_cost` decimal(15,5) DEFAULT NULL,
  `source_profit` decimal(15,5) DEFAULT NULL,
  `add_time` int(11) DEFAULT NULL,
  `operation_type` tinyint(1) DEFAULT '0' COMMENT '操作方式0未知1接口2手动',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_order_telephone
-- ----------------------------
DROP TABLE IF EXISTS `yzb_order_telephone`;
CREATE TABLE `yzb_order_telephone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pintai` tinyint(1) NOT NULL COMMENT '平台',
  `sn` varchar(30) NOT NULL COMMENT '订单号',
  `trade_sn` varchar(30) NOT NULL COMMENT '交易流水号',
  `request_order_id` varchar(50) DEFAULT NULL COMMENT '第三方请求单号(如 api接口商的单号）',
  `product_type` tinyint(1) NOT NULL COMMENT '移动｜联通｜电信',
  `kuai_man` tinyint(1) NOT NULL COMMENT '快充或慢充',
  `product_name` varchar(255) NOT NULL COMMENT '商品名称',
  `product_id` int(11) NOT NULL COMMENT '商品id',
  `user_id` int(11) NOT NULL COMMENT '下单人id',
  `senfen` varchar(20) NOT NULL COMMENT '省份',
  `city` varchar(20) DEFAULT NULL COMMENT '城市',
  `icp` varchar(20) DEFAULT NULL COMMENT '运营商',
  `user_money` decimal(12,5) DEFAULT NULL COMMENT '下单人余额',
  `on` varchar(11) NOT NULL COMMENT '充值号码',
  `sell_user_id` int(11) DEFAULT NULL COMMENT '卖家id',
  `qudao_id` int(11) DEFAULT NULL COMMENT '渠道id',
  `t_id` int(11) DEFAULT NULL COMMENT '模版id',
  `t_sn` varchar(20) DEFAULT NULL COMMENT '模版编号',
  `template_name` varchar(50) DEFAULT NULL COMMENT '模版名称',
  `product_mianzi` decimal(10,3) NOT NULL COMMENT '商品面值',
  `rechage_price` decimal(12,5) NOT NULL COMMENT '充值金额',
  `rechage_way` tinyint(1) DEFAULT NULL COMMENT '充值方式,0=>''未知'',1=>''人工充值'',2=>''接口充值'',3=>''批量充值'',4=>''卡密充值''',
  `rechage_num` int(11) NOT NULL DEFAULT '0' COMMENT '充值次数,第n次充值',
  `num` int(11) NOT NULL DEFAULT '0' COMMENT '购买数量',
  `cenben` decimal(12,5) DEFAULT NULL COMMENT '成本',
  `old_price` decimal(12,5) DEFAULT NULL COMMENT '前余额',
  `sell_price` decimal(12,5) DEFAULT NULL COMMENT '出货价',
  `lirun` decimal(12,5) DEFAULT NULL COMMENT '利润',
  `status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '订单状态，''0''=>''未知'',''1''=>''充值中'',''2''=>''充值成功'',''3''=>''充值失败'',''4''=>''待付款'',''5''=>''已取消''',
  `rechage_status` tinyint(2) NOT NULL COMMENT '充值状态,''0''=>''未知'',''1''=>''待付款'',''2''=>''等待提单'',''3''=>''充值中'',''4''=>''提交失败'',''5''=>''充值成功''',
  `closing_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '结算状态，0未知，1未结算，2已结算，3已退款',
  `rechage_yes_no` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否可以充值，1是0否',
  `order_ip` varchar(255) DEFAULT NULL COMMENT '下单ip',
  `user_info` varchar(255) DEFAULT NULL COMMENT '用户备注',
  `admin_info` varchar(255) DEFAULT NULL COMMENT '管理员备注',
  `add_time` int(11) DEFAULT '0',
  `pay_time` int(11) DEFAULT NULL COMMENT '付款时间',
  `finish_time` int(11) DEFAULT '0' COMMENT '处理时间',
  `official_sn` varchar(255) DEFAULT NULL COMMENT '官方流水',
  `life_real_sell_price` decimal(17,5) DEFAULT '0.00000',
  `on_before_info` varchar(255) NOT NULL DEFAULT '',
  `sup_info` varchar(255) NOT NULL DEFAULT '',
  `app_id` int(11) NOT NULL DEFAULT '0',
  `on_after_info` varchar(255) NOT NULL DEFAULT '',
  `careful_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否需要注意，0否，1是',
  PRIMARY KEY (`id`,`sn`),
  UNIQUE KEY `sn` (`sn`),
  UNIQUE KEY `trade_sn` (`trade_sn`),
  KEY `add_time` (`add_time`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_order_tencent
-- ----------------------------
DROP TABLE IF EXISTS `yzb_order_tencent`;
CREATE TABLE `yzb_order_tencent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trade_sn` varchar(30) NOT NULL COMMENT '交易流水号',
  `on` varchar(20) NOT NULL COMMENT '充值号码',
  `sn` varchar(30) NOT NULL COMMENT '订单编号',
  `pintai` tinyint(1) NOT NULL DEFAULT '0' COMMENT '下单人平台',
  `user_id` int(11) NOT NULL COMMENT '下单人id',
  `master_id` int(11) NOT NULL COMMENT '主商品id',
  `product_type` tinyint(1) NOT NULL COMMENT '商品类型',
  `product_name` varchar(255) NOT NULL COMMENT '商品名称',
  `product_id` int(11) NOT NULL COMMENT '商品id',
  `request_order_id` varchar(50) DEFAULT NULL COMMENT '第三方请求单号(如 api接口商的单号）',
  `qudao_id` int(11) DEFAULT NULL COMMENT '渠道id',
  `sell_user_id` int(11) DEFAULT NULL COMMENT '卖家id',
  `t_id` int(11) DEFAULT NULL COMMENT '模版id',
  `t_sn` varchar(20) DEFAULT NULL COMMENT '模版编号',
  `template_name` varchar(50) DEFAULT NULL COMMENT '模版名称',
  `product_mianzi` decimal(10,3) NOT NULL COMMENT '商品面值',
  `rechage_price` decimal(12,2) NOT NULL COMMENT '充值金额',
  `rechage_way` tinyint(1) NOT NULL COMMENT '充值方式,0=>''未知'',1=>''人工充值'',2=>''接口充值'',3=>''批量充值'',4=>''卡密充值''',
  `rechage_num` int(11) NOT NULL COMMENT '充值次数,第n次充值',
  `num` int(11) NOT NULL DEFAULT '0' COMMENT '购买数量',
  `cenben` decimal(12,5) DEFAULT NULL COMMENT '成本',
  `old_price` decimal(12,5) DEFAULT NULL COMMENT '前余额',
  `sell_price` decimal(12,5) NOT NULL COMMENT '出货价',
  `lirun` decimal(12,5) DEFAULT NULL COMMENT '利润',
  `status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '订单状态，''0''=>''未知'',''1''=>''充值中'',''2''=>''充值成功'',''3''=>''充值失败'',''4''=>''待付款'',''5''=>''已取消''',
  `rechage_status` tinyint(2) NOT NULL COMMENT '充值状态,''0''=>''未知'',''1''=>''待付款'',''2''=>''等待提单'',''3''=>''充值中'',''4''=>''提交失败'',''5''=>''充值成功''',
  `closing_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '结算状态，0未知，1未结算，2已结算，3已退款',
  `rechage_yes_no` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1是0否',
  `add_time` int(11) DEFAULT '0',
  `pay_time` int(11) DEFAULT NULL COMMENT '支付时间',
  `finish_time` int(11) DEFAULT '0' COMMENT '处理时间',
  `user_info` varchar(255) DEFAULT '' COMMENT '用户备注',
  `admin_info` varchar(255) DEFAULT NULL COMMENT '管理员备注',
  `recharge_ip` varchar(255) NOT NULL COMMENT '用户的ip',
  `order_ip` varchar(255) DEFAULT NULL COMMENT '下单ip',
  `official_sn` varchar(255) DEFAULT NULL COMMENT '官方流水',
  `life_real_sell_price` decimal(17,5) DEFAULT '0.00000',
  `on_before_info` varchar(255) NOT NULL DEFAULT '',
  `sup_info` varchar(255) NOT NULL DEFAULT '',
  `app_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `sn` (`sn`),
  UNIQUE KEY `trade_sn` (`trade_sn`),
  KEY `add_time` (`add_time`),
  KEY `user_id` (`user_id`,`request_order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1448 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_os_setting
-- ----------------------------
DROP TABLE IF EXISTS `yzb_os_setting`;
CREATE TABLE `yzb_os_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL COMMENT '用户审核认证方式',
  `value` varchar(255) DEFAULT NULL COMMENT '用户审核，1开启，0关闭',
  `type` varchar(255) DEFAULT NULL,
  `edit_time` datetime DEFAULT NULL,
  `note` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_pay_way
-- ----------------------------
DROP TABLE IF EXISTS `yzb_pay_way`;
CREATE TABLE `yzb_pay_way` (
  `id` int(11) NOT NULL COMMENT '注意：该id为PayWay模型中$user_pay_way的键名',
  `way_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '支付类型（payway模型中有）',
  `pay_scene_id` int(11) NOT NULL COMMENT '支付名称',
  `pay_scene` int(11) NOT NULL,
  `picture` varchar(255) DEFAULT NULL COMMENT '支付方式图标',
  `collection_account` varchar(255) DEFAULT NULL COMMENT '收款帐号',
  `pay_key` varchar(255) DEFAULT NULL COMMENT '支付密钥',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '启用状态(1，启动，0，停用）',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pay_way_id` (`id`,`way_type`,`pay_scene_id`,`pay_scene`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_payment_institution
-- ----------------------------
DROP TABLE IF EXISTS `yzb_payment_institution`;
CREATE TABLE `yzb_payment_institution` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `way_id` int(11) NOT NULL DEFAULT '1' COMMENT '名称',
  `img` varchar(255) NOT NULL COMMENT '图标',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '机构分类（1银行2第三方支付）',
  `info` varchar(255) DEFAULT NULL COMMENT '备注',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_payment_method_settings
-- ----------------------------
DROP TABLE IF EXISTS `yzb_payment_method_settings`;
CREATE TABLE `yzb_payment_method_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `way_type` tinyint(1) NOT NULL COMMENT '支付类型',
  `class_id` int(11) NOT NULL COMMENT '支付方式的id',
  `platform_id` int(11) NOT NULL COMMENT '支付场景，模型pay_way里面声明里面的''id''键',
  `scene_id` bit(1) NOT NULL COMMENT '支付场景，模型pay_way里面声明的键为scene的具体值',
  `if_deduct_poundage` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否扣手续费pay_way模型里面有声明',
  `deduct_poundage_way` tinyint(1) NOT NULL DEFAULT '1' COMMENT '扣手续费的方式，如订单价格100元，手续费1元，是收99元还是收101元。if_deduct_poundage为收取生效',
  `rate` decimal(17,5) DEFAULT '0.00000' COMMENT '手续费费率',
  `rate_unit` tinyint(1) DEFAULT '1' COMMENT '手续费单位',
  `overflow` varchar(255) DEFAULT '' COMMENT '满扣，当费率单位为满扣时生效，json格式',
  `info` varchar(255) DEFAULT NULL,
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `poundage_id` (`way_type`,`class_id`,`platform_id`,`scene_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_payment_methods
-- ----------------------------
DROP TABLE IF EXISTS `yzb_payment_methods`;
CREATE TABLE `yzb_payment_methods` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '注意：该id为PayWay模型中$user_pay_way的键名',
  `name` varchar(20) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL COMMENT 'PaymentConstants::PAYMENT_METHOD_CLASSES  中的类型 1 => ''余额支付'', 2 => ''支付宝转账'', 3 => ''支付宝在线PC付款'', 4 => ''淘宝店铺'', 5 => ''微信'', 6 => ''现金'', ',
  `way_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '支付类型（payway模型中有） 1=>''余额'',2=>''网银'',3=>''快捷'',4=>''在线支付'',5=>''转账'',6=>''现金''',
  `platform_id` int(11) NOT NULL COMMENT '支付名称',
  `scene_id` int(11) NOT NULL,
  `picture` varchar(255) DEFAULT NULL COMMENT '支付方式图标',
  `collection_account` varchar(255) DEFAULT NULL COMMENT '收款帐号',
  `pay_key` varchar(255) DEFAULT NULL COMMENT '支付密钥',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '启用状态(1，启动，0，停用）',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pay_way_id` (`id`,`way_type`,`platform_id`,`scene_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Table structure for yzb_payment_template
-- ----------------------------
DROP TABLE IF EXISTS `yzb_payment_template`;
CREATE TABLE `yzb_payment_template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '模版名称',
  `explain` varchar(255) DEFAULT NULL COMMENT '说明',
  `remark` varchar(255) DEFAULT NULL COMMENT '备注',
  `type_name` varchar(100) DEFAULT NULL COMMENT '扣费方式',
  `type_value` int(11) DEFAULT NULL COMMENT '按天计次，模版名称',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_payment_template_pinlv
-- ----------------------------
DROP TABLE IF EXISTS `yzb_payment_template_pinlv`;
CREATE TABLE `yzb_payment_template_pinlv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_t_id` int(11) DEFAULT NULL COMMENT '模版id,payment_template',
  `pinlv_miao` int(11) DEFAULT '1' COMMENT '频率秒数',
  `pinlv_ci` int(11) DEFAULT NULL COMMENT '频率次数',
  `user_level` int(11) DEFAULT NULL COMMENT '用户级别',
  PRIMARY KEY (`id`),
  KEY `yzb_payment_template_pinlv_ibfk_1` (`p_t_id`),
  CONSTRAINT `yzb_payment_template_pinlv_ibfk_1` FOREIGN KEY (`p_t_id`) REFERENCES `yzb_payment_template` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=218 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_payment_template_pinlv_ci
-- ----------------------------
DROP TABLE IF EXISTS `yzb_payment_template_pinlv_ci`;
CREATE TABLE `yzb_payment_template_pinlv_ci` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_t_id` int(11) DEFAULT '0' COMMENT '模板ID,payment_template',
  `pinlv_id` int(11) DEFAULT '0' COMMENT '频率表id，payment_template_pinlv',
  `ci` int(11) DEFAULT '0' COMMENT '次数',
  `tian` int(11) DEFAULT '0' COMMENT '天数',
  `user_level` int(11) DEFAULT NULL COMMENT '用户级别',
  `package` int(11) DEFAULT '0' COMMENT '套餐，可选',
  PRIMARY KEY (`id`),
  KEY `yzb_payment_template_pinlv_ci_ibfk_1` (`pinlv_id`),
  CONSTRAINT `yzb_payment_template_pinlv_ci_ibfk_1` FOREIGN KEY (`pinlv_id`) REFERENCES `yzb_payment_template_pinlv` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=216 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_payment_template_pinlv_ci_price
-- ----------------------------
DROP TABLE IF EXISTS `yzb_payment_template_pinlv_ci_price`;
CREATE TABLE `yzb_payment_template_pinlv_ci_price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_t_id` int(11) DEFAULT '0' COMMENT '模板ID,payment_template',
  `pinlv_id` int(11) DEFAULT '0' COMMENT '频率id，payment_template_pinlv',
  `pinlv_ci_id` int(11) DEFAULT NULL COMMENT '频率次表id，payment_template_pinlv_ci',
  `user_level` int(11) NOT NULL COMMENT '用户级别',
  `price` decimal(10,3) NOT NULL COMMENT '频率价格',
  `chaoprice` decimal(10,3) NOT NULL COMMENT '超出次数的价格',
  `shifouzhuanshu` tinyint(1) DEFAULT NULL COMMENT '是否专属，1是，0否',
  PRIMARY KEY (`id`),
  KEY `yzb_payment_template_pinlv_ci_price_ibfk_1` (`pinlv_ci_id`),
  CONSTRAINT `yzb_payment_template_pinlv_ci_price_ibfk_1` FOREIGN KEY (`pinlv_ci_id`) REFERENCES `yzb_payment_template_pinlv_ci` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=396 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_payment_template_pinlv_price
-- ----------------------------
DROP TABLE IF EXISTS `yzb_payment_template_pinlv_price`;
CREATE TABLE `yzb_payment_template_pinlv_price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_t_id` int(11) DEFAULT '0' COMMENT '模板ID,payment_template',
  `pinlv_id` int(11) DEFAULT '0' COMMENT '频率id，payment_template_pinlv',
  `price` decimal(10,3) NOT NULL COMMENT '频率价格',
  `chaoprice` decimal(10,3) NOT NULL COMMENT '超过规定的次数的价格',
  `manyuan` decimal(10,3) DEFAULT '0.000' COMMENT '满量送',
  `songci` decimal(10,3) DEFAULT '0.000' COMMENT '赠送次数',
  `shifouzhuanshu` tinyint(1) DEFAULT NULL COMMENT '是否专属，1是，0否',
  `user_level` int(11) NOT NULL COMMENT '用户等级',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pinlv_id` (`pinlv_id`),
  CONSTRAINT `yzb_payment_template_pinlv_price_ibfk_1` FOREIGN KEY (`pinlv_id`) REFERENCES `yzb_payment_template_pinlv` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=171 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_payment_type
-- ----------------------------
DROP TABLE IF EXISTS `yzb_payment_type`;
CREATE TABLE `yzb_payment_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(50) DEFAULT NULL COMMENT '扣费方式名称',
  `service_id` int(11) DEFAULT NULL COMMENT '服务id',
  `payment_type` int(11) DEFAULT NULL COMMENT '扣费方式，''实时扣费''=>1,''实时计次''=>2,''包量计次''=>3,''包量计时''=>4,''按天计次''=>5',
  `template_id` int(11) DEFAULT '0' COMMENT '模版id，payment_template',
  `explain` varchar(255) DEFAULT NULL COMMENT '说明',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_pintai_config
-- ----------------------------
DROP TABLE IF EXISTS `yzb_pintai_config`;
CREATE TABLE `yzb_pintai_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pintai` tinyint(1) NOT NULL DEFAULT '0' COMMENT '平台',
  `name` varchar(255) NOT NULL COMMENT '名称',
  `english_name` varchar(255) NOT NULL COMMENT '英文名称',
  `is_user_reg_aduit_geren` tinyint(1) NOT NULL DEFAULT '1' COMMENT '个人用户，0=>''需要'',1=>''不需要人工审核''',
  `is_user_reg_aduit_geti` tinyint(1) NOT NULL DEFAULT '1' COMMENT '个体用户，0=>''需要'',1=>''不需要人工审核''',
  `is_user_reg_aduit_qiye` tinyint(1) NOT NULL DEFAULT '1' COMMENT '企业用户，0=>''需要'',1=>''不需要人工审核''',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_platform_user_level
-- ----------------------------
DROP TABLE IF EXISTS `yzb_platform_user_level`;
CREATE TABLE `yzb_platform_user_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '等级名称',
  `info` varchar(255) DEFAULT NULL COMMENT '备注',
  `default` tinyint(1) DEFAULT '0' COMMENT '是否是默认级别，1是，0否',
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否删除：0否1是',
  `platform_id` tinyint(1) NOT NULL COMMENT '平台',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_product_common
-- ----------------------------
DROP TABLE IF EXISTS `yzb_product_common`;
CREATE TABLE `yzb_product_common` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '子商品',
  `master_id` int(11) NOT NULL COMMENT 'master表的id',
  `renyi_type` tinyint(1) DEFAULT '0' COMMENT '是否为任意充话费类型 0否 1是',
  `num` varchar(100) NOT NULL DEFAULT '1' COMMENT '可购数量',
  `mianzi` decimal(10,2) NOT NULL COMMENT '面值',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态，1=>''在售'',0=>''停售''',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10094 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_product_common_celue_level
-- ----------------------------
DROP TABLE IF EXISTS `yzb_product_common_celue_level`;
CREATE TABLE `yzb_product_common_celue_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_level` int(11) DEFAULT NULL COMMENT '用户级别',
  `ratio` int(11) DEFAULT NULL COMMENT '比例',
  `level` int(11) DEFAULT NULL COMMENT '排序',
  `relation_id` int(11) DEFAULT NULL COMMENT '关系表relation的id',
  `pintai` tinyint(1) DEFAULT NULL COMMENT '平台',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=562 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_product_common_celue_user
-- ----------------------------
DROP TABLE IF EXISTS `yzb_product_common_celue_user`;
CREATE TABLE `yzb_product_common_celue_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL COMMENT '用户id',
  `ratio` int(11) DEFAULT NULL COMMENT '比例',
  `level` int(11) DEFAULT NULL COMMENT '排序',
  `relation_id` int(11) DEFAULT NULL COMMENT '关系表relation的id',
  `pintai` tinyint(1) DEFAULT NULL COMMENT '平台',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_product_common_level
-- ----------------------------
DROP TABLE IF EXISTS `yzb_product_common_level`;
CREATE TABLE `yzb_product_common_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '子商品',
  `product_id` int(11) NOT NULL COMMENT 'produc_common的id',
  `num` varchar(100) NOT NULL DEFAULT '1' COMMENT '可购数量',
  `user_level` int(11) NOT NULL COMMENT '用户级别',
  `sell_price` decimal(12,5) NOT NULL COMMENT '售价',
  `lirun` decimal(12,5) DEFAULT NULL COMMENT '利润',
  `rebate` decimal(12,5) NOT NULL DEFAULT '0.00000' COMMENT '返利',
  `xiejia` tinyint(1) NOT NULL DEFAULT '0' COMMENT '限价',
  `price_set_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '设价状态，0=>''未设价'',1=>''固定价格'',2=>''固定利润''',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态,1=>''在售'',0=>''停售''',
  `celue_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '策略类型，''1''=>''排序'',''2''=>''比例分流'',''3''=>''最低成本''',
  `pintai` tinyint(1) DEFAULT NULL COMMENT '平台',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=939 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_product_common_master
-- ----------------------------
DROP TABLE IF EXISTS `yzb_product_common_master`;
CREATE TABLE `yzb_product_common_master` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '主商品',
  `cate_id` int(11) NOT NULL COMMENT '分类，''2''=>''游戏''',
  `unit` tinyint(1) NOT NULL DEFAULT '1' COMMENT '充值单位1=>''个'',2=>''月'',3=>''元''',
  `sort` tinyint(1) DEFAULT '0' COMMENT '推荐充值时显示排序',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_product_common_template_relation
-- ----------------------------
DROP TABLE IF EXISTS `yzb_product_common_template_relation`;
CREATE TABLE `yzb_product_common_template_relation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `template_id` int(11) NOT NULL DEFAULT '0' COMMENT 'sell_template模版id',
  `product_id` int(11) NOT NULL DEFAULT '0' COMMENT 'product_common的id',
  `cenben` decimal(12,5) DEFAULT NULL COMMENT '供货商卖给平台的价格',
  `sell_cenben` decimal(12,5) DEFAULT NULL COMMENT '供货商自己的供货成本',
  `num` varchar(100) DEFAULT '1' COMMENT '货源可购买数量',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `sell_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '[''1'' => ''已启用'', ''0'' => ''已停止'']',
  `add_time` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1057 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_product_common_user
-- ----------------------------
DROP TABLE IF EXISTS `yzb_product_common_user`;
CREATE TABLE `yzb_product_common_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '子商品',
  `product_id` int(11) NOT NULL COMMENT 'produc_common的id',
  `num` varchar(100) NOT NULL DEFAULT '1' COMMENT '可购数量',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `sell_price` decimal(12,5) NOT NULL COMMENT '售价',
  `lirun` decimal(12,5) DEFAULT NULL COMMENT '利润',
  `xiejia` tinyint(1) NOT NULL DEFAULT '0' COMMENT '限价',
  `rebate` decimal(12,5) NOT NULL DEFAULT '0.00000' COMMENT '返利',
  `price_set_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '设价状态，0=>''未设价'',1=>''固定价格'',2=>''固定利润''',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态，1=>''在售'',0=>''停售''',
  `celue_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '策略类型，''1''=>''排序'',''2''=>''比例分流'',''3''=>''最低成本''',
  `pintai` tinyint(1) DEFAULT NULL COMMENT '平台',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_product_flow
-- ----------------------------
DROP TABLE IF EXISTS `yzb_product_flow`;
CREATE TABLE `yzb_product_flow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate` tinyint(1) DEFAULT NULL COMMENT '1移动2联通3电信4虚拟',
  `kuai_man` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1快充2慢充',
  `name` varchar(50) DEFAULT NULL COMMENT '商品名称',
  `mianzi` decimal(10,3) NOT NULL COMMENT '面值',
  `num` varchar(100) NOT NULL DEFAULT '1' COMMENT '可购数量',
  `renyi_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否为任意充话费类型 0否 1是',
  `buy_acc` varchar(50) DEFAULT NULL COMMENT '消费权限',
  `sell_price` decimal(10,3) NOT NULL COMMENT '销售价格',
  `lirun` decimal(10,3) DEFAULT NULL COMMENT '利润',
  `xiejia` tinyint(1) DEFAULT '0' COMMENT '限价',
  `status` tinyint(1) DEFAULT '1' COMMENT '状态,1=>''在售'',0=>''停售''',
  `price_set_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '设价状态，0=>''未设价'',1=>''固定价格'',2=>''固定利润''',
  `celue_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '策略类型，''1''=>''排序'',''2''=>''比例分流'',''3''=>''最低成本''',
  `senfen_id` int(11) NOT NULL DEFAULT '0' COMMENT '省级行政单位编码',
  `city_id` int(11) DEFAULT '0' COMMENT '地级市行政编号',
  `icp` varchar(20) DEFAULT NULL COMMENT '运营商',
  `if_mvno` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否虚拟运营商，1是，0否',
  `mvno` varchar(255) DEFAULT '' COMMENT '虚拟运营商名称',
  `edit_time` int(11) DEFAULT '0',
  `add_time` int(11) DEFAULT '0',
  `rebate` decimal(10,3) DEFAULT NULL COMMENT '返利',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10006 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_product_flow_level
-- ----------------------------
DROP TABLE IF EXISTS `yzb_product_flow_level`;
CREATE TABLE `yzb_product_flow_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL COMMENT '产品id',
  `pintai` tinyint(1) NOT NULL COMMENT '平台',
  `user_level` int(11) DEFAULT NULL COMMENT '用户级别',
  `buy_acc` varchar(255) DEFAULT NULL COMMENT '消费权限',
  `sell_price` decimal(10,3) NOT NULL COMMENT '售价',
  `lirun` decimal(10,3) DEFAULT NULL COMMENT '利润',
  `xiejia` tinyint(1) NOT NULL DEFAULT '0' COMMENT '限价',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态,1=>''在售'',0=>''停售''',
  `price_set_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1为固定价格 2因定利润',
  `area_priority` tinyint(1) NOT NULL DEFAULT '2' COMMENT '货源分配地区优先切换开关(1省份 2城市)',
  `celue_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '策略类型(1、排序2比例3、相同地区成本4、混合地区成本）',
  `edit_time` int(11) DEFAULT '0',
  `add_time` int(11) DEFAULT '0',
  `rebate` decimal(12,5) NOT NULL DEFAULT '0.00000' COMMENT '返利',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_product_flow_source
-- ----------------------------
DROP TABLE IF EXISTS `yzb_product_flow_source`;
CREATE TABLE `yzb_product_flow_source` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate` tinyint(1) NOT NULL DEFAULT '0' COMMENT '运营商分类，1=>''移动'',2=>''联通'',3=>''电信'',4=>''虚商''',
  `kuai_man` tinyint(1) NOT NULL COMMENT '1=>''快充'',2=>''慢充''',
  `senfen` varchar(50) NOT NULL DEFAULT '' COMMENT '省份',
  `city` varchar(50) NOT NULL DEFAULT '' COMMENT '城市',
  `sell_user_id` int(11) NOT NULL DEFAULT '0' COMMENT '供货商ID',
  `senfen_id` int(11) NOT NULL DEFAULT '0' COMMENT '省份编码',
  `city_id` int(11) NOT NULL DEFAULT '0' COMMENT '城市编码',
  `t_id` int(11) NOT NULL DEFAULT '0' COMMENT '模板ID',
  `icp` varchar(20) DEFAULT NULL COMMENT '运营商名称',
  `mianzi` decimal(10,3) NOT NULL COMMENT '面值',
  `num` varchar(100) NOT NULL DEFAULT '1' COMMENT '可购数量',
  `renyi_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '策略类型(1、排序2比例3、相同地区成本4、混合地区成本）',
  `cenben` decimal(12,5) NOT NULL COMMENT '供货商卖给平台的售价，平台的成本',
  `sell_cenben` decimal(12,5) DEFAULT NULL COMMENT '供货商的供货成本',
  `zekou` float(255,0) DEFAULT NULL COMMENT '折扣',
  `info` varchar(255) DEFAULT NULL COMMENT '备注',
  `sell_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '启用状态，''0''=>''已停止'',''1''=>''已启用'',''2''=>''已暂停''',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '货源状态,1 => ''已上架'',0 => ''已下架'',2=>''被冻结'',3=>''待审核'',4=>''审核拒绝''',
  `if_mvno` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否是虚拟运营商',
  `mvno` varchar(255) DEFAULT '' COMMENT '虚拟运营商',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1027 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_product_flow_source_celue_level
-- ----------------------------
DROP TABLE IF EXISTS `yzb_product_flow_source_celue_level`;
CREATE TABLE `yzb_product_flow_source_celue_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` int(11) DEFAULT NULL COMMENT '排序',
  `pintai` tinyint(1) NOT NULL COMMENT '平台',
  `user_level` int(11) DEFAULT NULL COMMENT '用户级别',
  `ratio` int(11) DEFAULT NULL COMMENT '比例',
  `product_id` int(11) DEFAULT NULL COMMENT '产品id',
  `q_id` int(11) DEFAULT NULL COMMENT '货源id',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `q_id` (`q_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_product_flow_source_celue_user
-- ----------------------------
DROP TABLE IF EXISTS `yzb_product_flow_source_celue_user`;
CREATE TABLE `yzb_product_flow_source_celue_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` int(11) DEFAULT NULL COMMENT '排序',
  `pintai` tinyint(1) NOT NULL COMMENT '平台',
  `user_id` int(11) DEFAULT NULL COMMENT '用户id',
  `ratio` int(11) DEFAULT NULL COMMENT '比例',
  `product_id` int(11) DEFAULT NULL COMMENT '产品id',
  `q_id` int(11) DEFAULT NULL COMMENT '货源id',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `q_id` (`q_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_product_flow_user
-- ----------------------------
DROP TABLE IF EXISTS `yzb_product_flow_user`;
CREATE TABLE `yzb_product_flow_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL COMMENT '产品id',
  `pintai` tinyint(1) NOT NULL COMMENT '平台',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `buy_acc` varchar(255) DEFAULT NULL COMMENT '消费权限',
  `sell_price` decimal(10,3) NOT NULL COMMENT '售价',
  `lirun` decimal(10,3) DEFAULT NULL COMMENT '利润',
  `xiejia` tinyint(1) NOT NULL DEFAULT '0' COMMENT '限价',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态,1=>''在售'',0=>''停售''',
  `price_set_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1为固定价格 2因定利润',
  `area_priority` tinyint(1) DEFAULT '0' COMMENT '货源分配地区优先切换开关(1省份 2城市)',
  `celue_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '策略类型(1、排序2比例3、相同地区成本4、混合地区成本）',
  `edit_time` int(11) DEFAULT '0',
  `add_time` int(11) DEFAULT '0',
  `rebate` decimal(12,5) NOT NULL DEFAULT '0.00000' COMMENT '返利',
  PRIMARY KEY (`id`),
  KEY `yzb_product_open_ibfk_1` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_product_mobile
-- ----------------------------
DROP TABLE IF EXISTS `yzb_product_mobile`;
CREATE TABLE `yzb_product_mobile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_id` tinyint(1) DEFAULT NULL COMMENT '1移动2联通3电信4虚拟',
  `speed` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1快充2慢充',
  `name` varchar(50) NOT NULL COMMENT '商品名称',
  `face_value` decimal(10,3) NOT NULL COMMENT '面值',
  `num` varchar(100) NOT NULL DEFAULT '1' COMMENT '可购数量',
  `renyi_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '面值类型：1=>固定面值，2=>任意充，3=>其他面值',
  `buy_acc` varchar(50) DEFAULT NULL COMMENT '消费权限',
  `sell_price` decimal(12,5) NOT NULL COMMENT '售价',
  `profit` decimal(12,5) DEFAULT NULL COMMENT '利润',
  `xiejia` tinyint(1) DEFAULT '0' COMMENT '限价',
  `status` tinyint(1) DEFAULT '1' COMMENT '状态,1=>''在售'',0=>''停售''',
  `price_set_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1为固定价格 2因定利润',
  `strategy_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '策略类型，''1''=>''排序'',''2''=>''比例分流'',''3''=>''最低成本''',
  `province_code` int(11) NOT NULL DEFAULT '0' COMMENT '省级行政编号',
  `city_code` int(11) DEFAULT '0' COMMENT '地级市行政编号',
  `isp_id` int(11) DEFAULT NULL,
  `isp_name` varchar(20) DEFAULT NULL COMMENT '运营商',
  `if_mvno` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否虚拟运营商，1是，0否',
  `mvno` int(11) DEFAULT '0' COMMENT '虚拟运营商id',
  `edit_time` int(11) DEFAULT '0',
  `add_time` int(11) DEFAULT '0',
  `rebate` decimal(12,5) DEFAULT NULL COMMENT '返利',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11670 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_product_mobile_level
-- ----------------------------
DROP TABLE IF EXISTS `yzb_product_mobile_level`;
CREATE TABLE `yzb_product_mobile_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `platform_id` int(1) NOT NULL COMMENT '平台',
  `product_id` int(11) DEFAULT NULL COMMENT '产品id',
  `user_level` int(11) DEFAULT NULL COMMENT '用户级别',
  `buy_acc` varchar(255) DEFAULT NULL COMMENT '消费权限',
  `sell_price` decimal(12,5) NOT NULL COMMENT '售价',
  `profit` decimal(12,5) DEFAULT NULL COMMENT '利润',
  `xiejia` tinyint(1) NOT NULL DEFAULT '0' COMMENT '限价',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态,1=>''在售'',0=>''停售''',
  `price_set_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1为固定价格 2因定利润',
  `area_priority` tinyint(1) NOT NULL DEFAULT '2' COMMENT '货源分配地区优先切换开关(1省份 2城市)',
  `strategy_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '策略类型(1、排序2比例3、相同地区成本4、混合地区成本）',
  `edit_time` int(11) DEFAULT '0',
  `add_time` int(11) DEFAULT '0',
  `rebate` decimal(12,5) NOT NULL DEFAULT '0.00000' COMMENT '返利',
  PRIMARY KEY (`id`),
  KEY `yzb_product_open_ibfk_1` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19530 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_product_mobile_province_city_code
-- ----------------------------
DROP TABLE IF EXISTS `yzb_product_mobile_province_city_code`;
CREATE TABLE `yzb_product_mobile_province_city_code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `province_name` varchar(50) NOT NULL,
  `city_name` varchar(50) DEFAULT NULL,
  `province_code` varchar(50) NOT NULL DEFAULT '1' COMMENT '1',
  `city_code` varchar(50) NOT NULL DEFAULT '0' COMMENT '0',
  `add_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=355 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_product_mobile_source
-- ----------------------------
DROP TABLE IF EXISTS `yzb_product_mobile_source`;
CREATE TABLE `yzb_product_mobile_source` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_id` tinyint(1) NOT NULL DEFAULT '0' COMMENT '运营商分类，1=>''移动'',2=>''联通'',3=>''电信'',4=>''虚商''',
  `speed` tinyint(1) NOT NULL COMMENT '1=>''快充'',2=>''慢充''',
  `province_name` varchar(50) NOT NULL DEFAULT '' COMMENT '省份',
  `city_name` varchar(50) NOT NULL DEFAULT '' COMMENT '城市',
  `sell_user_id` int(11) NOT NULL DEFAULT '0' COMMENT '供货商ID',
  `province_code` int(11) NOT NULL DEFAULT '0' COMMENT '省份编码',
  `city_code` int(11) NOT NULL DEFAULT '0' COMMENT '城市编码',
  `template_id` varchar(32) NOT NULL DEFAULT '0' COMMENT '模板ID. (渠道商)',
  `isp_name` varchar(20) DEFAULT NULL COMMENT '运营商名称',
  `face_value` decimal(10,3) NOT NULL COMMENT '面值',
  `num` varchar(100) NOT NULL DEFAULT '1' COMMENT '可购数量',
  `renyi_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '面值类型：1=>固定面值，2=>任意充，3=>其他面值',
  `cost` decimal(12,5) NOT NULL COMMENT '供货商卖给平台的售价，平台的成本',
  `sell_cost` decimal(12,5) DEFAULT NULL COMMENT '供货商的供货成本',
  `discount` float(255,0) DEFAULT NULL COMMENT '折扣',
  `info` varchar(255) DEFAULT NULL COMMENT '备注',
  `sell_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '启用状态，''0''=>''已停止'',''1''=>''已启用'',''2''=>''已暂停''',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '货源状态,1 => ''已上架'',0 => ''已下架'',2=>''被冻结'',3=>''待审核'',4=>''审核拒绝''',
  `if_mvno` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否是虚拟运营商',
  `mvno` int(11) DEFAULT '0' COMMENT '虚拟运营商id',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18949 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Table structure for yzb_product_mobile_source_celue_level
-- ----------------------------
DROP TABLE IF EXISTS `yzb_product_mobile_source_celue_level`;
CREATE TABLE `yzb_product_mobile_source_celue_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `platform_id` int(1) NOT NULL COMMENT '平台',
  `weight` int(11) DEFAULT NULL COMMENT '排序',
  `user_level` int(11) DEFAULT NULL COMMENT '用户级别',
  `ratio` int(11) DEFAULT NULL COMMENT '比例',
  `product_id` int(11) DEFAULT NULL COMMENT '产品id',
  `source_id` int(11) DEFAULT NULL COMMENT '货源id',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '策略的使用状态0停用1启用',
  PRIMARY KEY (`id`),
  KEY `q_id` (`source_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=274231 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_product_mobile_source_celue_user
-- ----------------------------
DROP TABLE IF EXISTS `yzb_product_mobile_source_celue_user`;
CREATE TABLE `yzb_product_mobile_source_celue_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weight` int(11) DEFAULT NULL COMMENT '排序',
  `platform_id` int(1) NOT NULL COMMENT '平台',
  `user_id` int(11) DEFAULT NULL COMMENT '用户id',
  `ratio` int(11) DEFAULT NULL COMMENT '比例',
  `product_id` int(11) DEFAULT NULL COMMENT '产品id',
  `source_id` int(11) DEFAULT NULL COMMENT '货源id',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `q_id` (`source_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=289 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_product_mobile_user
-- ----------------------------
DROP TABLE IF EXISTS `yzb_product_mobile_user`;
CREATE TABLE `yzb_product_mobile_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `platform_id` tinyint(1) NOT NULL COMMENT '平台',
  `product_id` int(11) DEFAULT NULL COMMENT '产品id',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `buy_acc` varchar(255) DEFAULT NULL COMMENT '消费权限',
  `sell_price` decimal(12,5) NOT NULL COMMENT '售价',
  `profit` decimal(12,5) DEFAULT NULL COMMENT '利润',
  `xiejia` tinyint(1) NOT NULL DEFAULT '0' COMMENT '限价',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态,1=>''在售'',0=>''停售''',
  `price_set_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1为固定价格 2因定利润',
  `area_priority` tinyint(1) DEFAULT '0' COMMENT '货源分配地区优先切换开关(1省份 2城市)',
  `strategy_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '策略类型(1、排序2比例3、相同地区成本4、混合地区成本）',
  `edit_time` int(11) DEFAULT '0',
  `add_time` int(11) DEFAULT '0',
  `rebate` decimal(12,5) NOT NULL DEFAULT '0.00000' COMMENT '返利',
  PRIMARY KEY (`id`),
  KEY `yzb_product_open_ibfk_1` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_product_suorce_mobile_rechargeable_card
-- ----------------------------
DROP TABLE IF EXISTS `yzb_product_suorce_mobile_rechargeable_card`;
CREATE TABLE `yzb_product_suorce_mobile_rechargeable_card` (
  `id` int(11) NOT NULL,
  `card_number` varchar(255) DEFAULT NULL,
  `card_password` varchar(255) DEFAULT NULL,
  `card_face_value` decimal(11,2) DEFAULT NULL,
  `card_type` varchar(255) DEFAULT NULL,
  `add_time` int(11) DEFAULT NULL,
  `end_use_time` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_product_telephone
-- ----------------------------
DROP TABLE IF EXISTS `yzb_product_telephone`;
CREATE TABLE `yzb_product_telephone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate` tinyint(1) NOT NULL COMMENT '1移动2联通3电信4虚拟',
  `kuai_man` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1快充2慢充',
  `name` varchar(50) NOT NULL COMMENT '商品名称',
  `mianzi` decimal(10,3) NOT NULL COMMENT '面值',
  `num` varchar(100) NOT NULL DEFAULT '1' COMMENT '可购数量',
  `renyi_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否为任意充话费类型 0否 1是',
  `buy_acc` varchar(50) DEFAULT NULL COMMENT '消费权限',
  `sell_price` decimal(12,5) NOT NULL COMMENT '售价',
  `lirun` decimal(12,5) DEFAULT NULL COMMENT '利润',
  `xiejia` tinyint(1) DEFAULT '0' COMMENT '限价',
  `status` tinyint(1) DEFAULT '1' COMMENT '状态,1=>''在售'',0=>''停售''',
  `price_set_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1为固定价格 2因定利润',
  `celue_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '策略类型，''1''=>''排序'',''2''=>''比例分流'',''3''=>''最低成本''',
  `senfen_id` int(11) NOT NULL DEFAULT '0' COMMENT '省级行政编号',
  `city_id` int(11) DEFAULT '0' COMMENT '地级市行政编号',
  `icp` varchar(20) DEFAULT NULL COMMENT '运营商',
  `if_mvno` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否虚拟运营商，1是，0否',
  `mvno` int(11) DEFAULT '0' COMMENT '虚拟运营商id',
  `edit_time` int(11) DEFAULT '0',
  `add_time` int(11) DEFAULT '0',
  `rebate` decimal(12,5) DEFAULT NULL COMMENT '返利',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10008 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_product_telephone_level
-- ----------------------------
DROP TABLE IF EXISTS `yzb_product_telephone_level`;
CREATE TABLE `yzb_product_telephone_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pintai` tinyint(1) NOT NULL COMMENT '平台',
  `product_id` int(11) DEFAULT NULL COMMENT '产品id',
  `user_level` int(11) DEFAULT NULL COMMENT '用户级别',
  `buy_acc` varchar(255) DEFAULT NULL COMMENT '消费权限',
  `sell_price` decimal(12,5) NOT NULL COMMENT '售价',
  `lirun` decimal(12,5) DEFAULT NULL COMMENT '利润',
  `xiejia` tinyint(1) NOT NULL DEFAULT '0' COMMENT '限价',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态,1=>''在售'',0=>''停售''',
  `price_set_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1为固定价格 2因定利润',
  `area_priority` tinyint(1) NOT NULL DEFAULT '2' COMMENT '货源分配地区优先切换开关(1省份 2城市)',
  `celue_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '策略类型(1、排序2比例3、相同地区成本4、混合地区成本）',
  `edit_time` int(11) DEFAULT '0',
  `add_time` int(11) DEFAULT '0',
  `rebate` decimal(12,5) NOT NULL DEFAULT '0.00000' COMMENT '返利',
  PRIMARY KEY (`id`),
  KEY `yzb_product_open_ibfk_1` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_product_telephone_source
-- ----------------------------
DROP TABLE IF EXISTS `yzb_product_telephone_source`;
CREATE TABLE `yzb_product_telephone_source` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate` tinyint(1) NOT NULL DEFAULT '0' COMMENT '运营商分类，1=>''移动'',2=>''联通'',3=>''电信'',4=>''虚商''',
  `kuai_man` tinyint(1) NOT NULL COMMENT '1=>''快充'',2=>''慢充''',
  `senfen` varchar(50) NOT NULL DEFAULT '' COMMENT '省份',
  `city` varchar(50) NOT NULL DEFAULT '' COMMENT '城市',
  `sell_user_id` int(11) NOT NULL DEFAULT '0' COMMENT '供货商ID',
  `senfen_id` int(11) NOT NULL DEFAULT '0' COMMENT '省份编码',
  `city_id` int(11) NOT NULL DEFAULT '0' COMMENT '城市编码',
  `template_id` varchar(32) NOT NULL DEFAULT '0' COMMENT '模板ID',
  `icp` varchar(20) DEFAULT NULL COMMENT '运营商名称',
  `mianzi` decimal(10,3) NOT NULL COMMENT '面值',
  `num` varchar(100) NOT NULL DEFAULT '1' COMMENT '可购数量',
  `renyi_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '策略类型(1、排序2比例3、相同地区成本4、混合地区成本）',
  `cenben` decimal(12,5) NOT NULL COMMENT '供货商卖给平台的售价，平台的成本',
  `sell_cenben` decimal(12,5) DEFAULT NULL COMMENT '供货商的供货成本',
  `zekou` float(255,0) DEFAULT NULL COMMENT '折扣',
  `info` varchar(255) DEFAULT NULL COMMENT '备注',
  `sell_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '启用状态，''0''=>''已停止'',''1''=>''已启用'',''2''=>''已暂停''',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '货源状态,1 => ''已上架'',0 => ''已下架'',2=>''被冻结'',3=>''待审核'',4=>''审核拒绝''',
  `if_mvno` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否是虚拟运营商',
  `mvno` int(11) DEFAULT '0' COMMENT '虚拟运营商id',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1008 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_product_telephone_source_celue_level
-- ----------------------------
DROP TABLE IF EXISTS `yzb_product_telephone_source_celue_level`;
CREATE TABLE `yzb_product_telephone_source_celue_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pintai` tinyint(1) NOT NULL COMMENT '平台',
  `weight` int(11) DEFAULT NULL COMMENT '排序',
  `user_level` int(11) DEFAULT NULL COMMENT '用户级别',
  `ratio` int(11) DEFAULT NULL COMMENT '比例',
  `product_id` int(11) DEFAULT NULL COMMENT '产品id',
  `q_id` int(11) DEFAULT NULL COMMENT '货源id',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `q_id` (`q_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_product_telephone_source_celue_user
-- ----------------------------
DROP TABLE IF EXISTS `yzb_product_telephone_source_celue_user`;
CREATE TABLE `yzb_product_telephone_source_celue_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` int(11) DEFAULT NULL COMMENT '排序',
  `pintai` tinyint(1) NOT NULL COMMENT '平台',
  `user_id` int(11) DEFAULT NULL COMMENT '用户id',
  `ratio` int(11) DEFAULT NULL COMMENT '比例',
  `product_id` int(11) DEFAULT NULL COMMENT '产品id',
  `q_id` int(11) DEFAULT NULL COMMENT '货源id',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `q_id` (`q_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_product_telephone_user
-- ----------------------------
DROP TABLE IF EXISTS `yzb_product_telephone_user`;
CREATE TABLE `yzb_product_telephone_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL COMMENT '产品id',
  `pintai` tinyint(1) NOT NULL COMMENT '平台',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `buy_acc` varchar(255) DEFAULT NULL COMMENT '消费权限',
  `sell_price` decimal(12,5) NOT NULL COMMENT '售价',
  `lirun` decimal(12,5) DEFAULT NULL COMMENT '利润',
  `xiejia` tinyint(1) NOT NULL DEFAULT '0' COMMENT '限价',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态,1=>''在售'',0=>''停售''',
  `price_set_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1为固定价格 2因定利润',
  `area_priority` tinyint(1) DEFAULT '0' COMMENT '货源分配地区优先切换开关(1省份 2城市)',
  `celue_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '策略类型(1、排序2比例3、相同地区成本4、混合地区成本）',
  `edit_time` int(11) DEFAULT '0',
  `add_time` int(11) DEFAULT '0',
  `rebate` decimal(12,5) NOT NULL DEFAULT '0.00000' COMMENT '返利',
  PRIMARY KEY (`id`),
  KEY `yzb_product_open_ibfk_1` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_request_api_log_open
-- ----------------------------
DROP TABLE IF EXISTS `yzb_request_api_log_open`;
CREATE TABLE `yzb_request_api_log_open` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `app_id` int(11) DEFAULT NULL COMMENT '应用id',
  `app_status` tinyint(1) DEFAULT NULL,
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `koufei` decimal(17,5) NOT NULL DEFAULT '0.00000' COMMENT '扣费',
  `interface_id` int(11) DEFAULT NULL COMMENT '接口id',
  `sys_status` tinyint(1) DEFAULT '0' COMMENT 'api系统级调用状态0失败，1成功',
  `status` tinyint(1) DEFAULT '0' COMMENT '服务级（业务级）状态码0失败、1成功',
  `code` varchar(20) DEFAULT '0',
  `add_time` int(11) DEFAULT NULL,
  `ip` int(10) unsigned DEFAULT NULL,
  `pay_type` tinyint(1) NOT NULL DEFAULT '0',
  `request_type` tinyint(1) DEFAULT NULL COMMENT '请求类型，1：get,2:post',
  `request_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `request_id` (`request_id`),
  KEY `add_time` (`add_time`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_request_api_log_open_all
-- ----------------------------
DROP TABLE IF EXISTS `yzb_request_api_log_open_all`;
CREATE TABLE `yzb_request_api_log_open_all` (
  `method` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `params` varchar(255) NOT NULL DEFAULT '',
  `response` varchar(255) NOT NULL DEFAULT '',
  `ip` varchar(255) NOT NULL DEFAULT '',
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_request_api_log_open_info
-- ----------------------------
DROP TABLE IF EXISTS `yzb_request_api_log_open_info`;
CREATE TABLE `yzb_request_api_log_open_info` (
  `request_log_id` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `params` varchar(500) DEFAULT NULL,
  `response` varchar(500) DEFAULT NULL,
  `interface_english_name` varchar(255) DEFAULT NULL,
  `trade_sn` char(27) DEFAULT NULL,
  `info` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`request_log_id`),
  UNIQUE KEY `request_log_id` (`request_log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_request_log_sup_api
-- ----------------------------
DROP TABLE IF EXISTS `yzb_request_log_sup_api`;
CREATE TABLE `yzb_request_log_sup_api` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `params` text,
  `response` text,
  `add_time` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_safe_ip_open
-- ----------------------------
DROP TABLE IF EXISTS `yzb_safe_ip_open`;
CREATE TABLE `yzb_safe_ip_open` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(500) DEFAULT NULL COMMENT 'ip白名单',
  `app_id` int(11) DEFAULT NULL COMMENT '应用id',
  `user_id` int(11) DEFAULT NULL COMMENT '用户id',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_sell_cash_user_log
-- ----------------------------
DROP TABLE IF EXISTS `yzb_sell_cash_user_log`;
CREATE TABLE `yzb_sell_cash_user_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL COMMENT '用户id',
  `sn` varchar(255) DEFAULT NULL COMMENT '提款流水号',
  `account_id` int(11) DEFAULT NULL COMMENT 'cash_user_account的id 帐号',
  `account_name` varchar(255) DEFAULT NULL COMMENT '账户名称',
  `available_cash` decimal(10,0) DEFAULT NULL COMMENT '可用余额',
  `get_cash` decimal(10,0) DEFAULT NULL COMMENT '提现金额',
  `shouxu_cash` decimal(10,0) DEFAULT NULL COMMENT '手续费',
  `actual_cash` decimal(10,0) DEFAULT NULL COMMENT '实际到账金额',
  `num` tinyint(4) DEFAULT NULL COMMENT '一天提现次数',
  `info` varchar(255) DEFAULT NULL COMMENT '备注',
  `verify_status` tinyint(4) DEFAULT '0' COMMENT '审核状态:0=审核中，1=审核通过，2=审核未通过',
  `trade_status` tinyint(4) DEFAULT '0' COMMENT '交易状态:0未交易，1交易成功',
  `add_time` int(11) DEFAULT '0',
  `finish_time` int(11) DEFAULT NULL COMMENT '提现成功时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_sell_template
-- ----------------------------
DROP TABLE IF EXISTS `yzb_sell_template`;
CREATE TABLE `yzb_sell_template` (
  `id` varchar(32) NOT NULL,
  `sn` varchar(255) NOT NULL COMMENT '模版编号',
  `name` varchar(255) DEFAULT NULL COMMENT '模版名称',
  `sell_time` int(11) NOT NULL DEFAULT '0',
  `sell_type` tinyint(1) NOT NULL COMMENT '商品类型，根据ProductCate,''2''=>''游戏''',
  `loser_limit` int(11) DEFAULT '0' COMMENT '失败订单上限',
  `auto_tuikuan` tinyint(1) NOT NULL DEFAULT '0' COMMENT '自动退款，1是，0否',
  `info` varchar(255) DEFAULT NULL COMMENT '备注',
  `sell_user_id` int(11) NOT NULL DEFAULT '0' COMMENT '供货商id',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '''1''=>''启用'',''0''=>''停用''',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  `supply_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '供货方式 ',
  `contact_id` varchar(255) DEFAULT NULL COMMENT '联系人id',
  PRIMARY KEY (`id`),
  UNIQUE KEY `sn` (`sn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_sell_users
-- ----------------------------
DROP TABLE IF EXISTS `yzb_sell_users`;
CREATE TABLE `yzb_sell_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '供货商名称',
  `balance` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '供货商，平台余额',
  `sell_time` int(11) DEFAULT '0' COMMENT '供货时间',
  `user_id` int(11) DEFAULT NULL COMMENT '用户帐号id',
  `level` int(11) DEFAULT NULL COMMENT '等级',
  `add_time` int(11) DEFAULT '0',
  `status` tinyint(1) DEFAULT '0' COMMENT '审核 0未通过，1通过',
  `cash_pledge` decimal(10,0) unsigned NOT NULL COMMENT '抵押余额',
  `sign_key` varchar(255) DEFAULT NULL COMMENT '数字签名',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_service
-- ----------------------------
DROP TABLE IF EXISTS `yzb_service`;
CREATE TABLE `yzb_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '充许购买的用户类型',
  `title` varchar(255) NOT NULL,
  `index_tuijian` tinyint(1) DEFAULT '0',
  `product_type` int(11) DEFAULT NULL COMMENT '产品类型，参考product_cate模型中的get',
  `cate_id` int(11) DEFAULT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `intro` varchar(255) DEFAULT NULL,
  `yinxiao_price` varchar(50) DEFAULT NULL,
  `thumb` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL COMMENT '服务状态',
  `service_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '服务状态（1正常，0维护）',
  `buy_status` tinyint(1) NOT NULL COMMENT '购买状态（1上架，0下架壮态）',
  `audit` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否需要审核 1是0否',
  `default_app_num` int(11) NOT NULL COMMENT '默认应用数量',
  `default_app_name` varchar(20) NOT NULL COMMENT '默认应用名称',
  `default_app_flow` varchar(255) NOT NULL COMMENT '默认流量',
  `default_app_status` varchar(255) NOT NULL COMMENT '默认应用状态',
  `must_bing_ip` tinyint(255) NOT NULL DEFAULT '0' COMMENT '是否必顺绑定IP（0否，1是）',
  `app_ico` varchar(255) NOT NULL COMMENT '应用图标',
  `add_time` int(11) NOT NULL DEFAULT '0',
  `edit_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_service_api_description
-- ----------------------------
DROP TABLE IF EXISTS `yzb_service_api_description`;
CREATE TABLE `yzb_service_api_description` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `content` text,
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_service_cate
-- ----------------------------
DROP TABLE IF EXISTS `yzb_service_cate`;
CREATE TABLE `yzb_service_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `pid` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_service_explain
-- ----------------------------
DROP TABLE IF EXISTS `yzb_service_explain`;
CREATE TABLE `yzb_service_explain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL COMMENT '服务说明分类字段',
  `name` varchar(50) DEFAULT NULL,
  `content` text,
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_service_order
-- ----------------------------
DROP TABLE IF EXISTS `yzb_service_order`;
CREATE TABLE `yzb_service_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sn` varchar(50) DEFAULT NULL COMMENT '服务订单号',
  `trade_sn` varchar(50) NOT NULL COMMENT '交易流水号',
  `order_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '订单类型（1、新建应用，2、为应用续费，3、应用升级）',
  `money` decimal(10,3) DEFAULT NULL COMMENT '订单金额',
  `pay_type` tinyint(1) DEFAULT NULL COMMENT '套餐类型，1=>''实时扣费'',2=>''实时计次'',3=>''包量计次'',4=>''包量计时'',5=>''按天计次''',
  `pay_template` text COMMENT '扣款方式模版',
  `user_id` int(11) DEFAULT '0' COMMENT '用户id',
  `app_id` int(11) DEFAULT NULL COMMENT '应用id',
  `service_id` int(11) DEFAULT '0' COMMENT '服务id',
  `pay_time` int(11) DEFAULT '0' COMMENT '支付时间',
  `pay_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '支付状态，0未支付，1已支付，2已取消',
  `add_time` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=182 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_servicemall_api_request_sn_log
-- ----------------------------
DROP TABLE IF EXISTS `yzb_servicemall_api_request_sn_log`;
CREATE TABLE `yzb_servicemall_api_request_sn_log` (
  `val` varchar(32) NOT NULL,
  `app_id` int(11) NOT NULL,
  `add_time` int(11) NOT NULL,
  PRIMARY KEY (`val`),
  UNIQUE KEY `val` (`val`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_simin_verify
-- ----------------------------
DROP TABLE IF EXISTS `yzb_simin_verify`;
CREATE TABLE `yzb_simin_verify` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `name` varchar(50) NOT NULL COMMENT '用户实名',
  `sex` tinyint(1) NOT NULL COMMENT '性别:0=>女，1=>男',
  `cred_number` varchar(50) NOT NULL COMMENT '营业执照号码',
  `img_cred` varchar(255) DEFAULT NULL COMMENT '营业执照',
  `img_zen` varchar(255) NOT NULL COMMENT '身份证 正面',
  `img_fan` varchar(255) NOT NULL COMMENT '身份证 反面',
  `img_souci` varchar(255) NOT NULL COMMENT '手持身份证照',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  `expiry_time_start` int(11) DEFAULT NULL COMMENT '营业执照开始有效期',
  `expiry_time_end` int(11) DEFAULT NULL COMMENT '营业执照截止有效期',
  `long_time` tinyint(1) NOT NULL COMMENT '营业执照长期有效',
  `verify` tinyint(1) NOT NULL DEFAULT '0' COMMENT '审核状态，''1''=>''待审核'',''2''=>''已开始审核'',''3''=>''已通过审核'',''4''=>''未通过审核''',
  `img_cred_verify` tinyint(1) DEFAULT NULL COMMENT '营业执照 审核状态',
  `img_zen_verify` tinyint(1) DEFAULT '0' COMMENT '身份证正面审核',
  `img_fan_verify` tinyint(1) DEFAULT '0' COMMENT '身份证反面审核',
  `img_souci_verify` tinyint(1) DEFAULT '0' COMMENT '手持身份证审核',
  `orther_msg` text COMMENT '其他信息,企业业务范围,法人省份证有效期',
  `address` varchar(255) NOT NULL COMMENT '经营地址',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_simin_verify_log
-- ----------------------------
DROP TABLE IF EXISTS `yzb_simin_verify_log`;
CREATE TABLE `yzb_simin_verify_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `name` varchar(50) NOT NULL COMMENT '用户实名',
  `sex` tinyint(1) NOT NULL COMMENT '用户性别，0->女，1->男',
  `cred_number` varchar(50) NOT NULL COMMENT '营业号',
  `img_cred` varchar(255) DEFAULT NULL COMMENT '营业照照片',
  `img_zen` varchar(255) NOT NULL COMMENT '身份证 正面',
  `img_fan` varchar(255) NOT NULL COMMENT '身份证 反面',
  `img_souci` varchar(255) NOT NULL COMMENT '手持身份证照',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  `expiry_time_start` int(11) DEFAULT NULL COMMENT '营业执照开始有效期',
  `expiry_time_end` int(11) DEFAULT NULL COMMENT '营业执照截止有效期',
  `long_time` tinyint(1) NOT NULL COMMENT '营业执照长期有效',
  `verify` tinyint(1) NOT NULL DEFAULT '0' COMMENT '审核状态，''1''=>''待审核'',''2''=>''已开始审核'',''3''=>''已通过审核'',''4''=>''未通过审核''',
  `img_cred_verify` tinyint(1) DEFAULT NULL COMMENT '营业执照 审核状态',
  `img_zen_verify` tinyint(1) DEFAULT '0' COMMENT '身份证正面审核',
  `img_fan_verify` tinyint(1) DEFAULT '0' COMMENT '身份证反面审核',
  `img_souci_verify` tinyint(1) DEFAULT '0' COMMENT '手持身份证审核',
  `address` varchar(255) NOT NULL COMMENT '经营地址',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_site_agent_article
-- ----------------------------
DROP TABLE IF EXISTS `yzb_site_agent_article`;
CREATE TABLE `yzb_site_agent_article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `scene_id` int(11) unsigned DEFAULT NULL COMMENT '场景id',
  `cate_id` int(11) unsigned DEFAULT NULL COMMENT '分类id',
  `label_id` varchar(50) DEFAULT NULL COMMENT '标签id',
  `title` varchar(50) DEFAULT NULL COMMENT '标题',
  `abstracte` varchar(255) DEFAULT NULL COMMENT '摘要',
  `keywords` varchar(255) DEFAULT NULL COMMENT '关键词语',
  `images` varchar(255) DEFAULT NULL COMMENT '文章封面图片',
  `content` text COMMENT '文章内容',
  `author` varchar(255) DEFAULT NULL COMMENT '作者，来源',
  `add_user` varchar(255) DEFAULT NULL COMMENT '文章添加者',
  `publish` tinyint(5) DEFAULT NULL COMMENT '0为已经发布，1为还未发布',
  `view_count` varchar(255) DEFAULT NULL COMMENT '浏览量',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  `publish_time` int(11) DEFAULT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_site_agent_article_cate
-- ----------------------------
DROP TABLE IF EXISTS `yzb_site_agent_article_cate`;
CREATE TABLE `yzb_site_agent_article_cate` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '分类名称',
  `level` int(11) DEFAULT '1' COMMENT '级别,1场景，2分类，3标签',
  `parent_id` int(11) unsigned DEFAULT '0' COMMENT '父级id',
  `user_type` tinyint(255) DEFAULT '0' COMMENT '用户分类，0=>所有人，1=>个人，2=>个体，3=>企业',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_site_public_article
-- ----------------------------
DROP TABLE IF EXISTS `yzb_site_public_article`;
CREATE TABLE `yzb_site_public_article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `scene_id` int(11) unsigned DEFAULT NULL COMMENT '场景id',
  `cate_id` int(11) unsigned DEFAULT NULL COMMENT '分类id',
  `label_id` varchar(50) DEFAULT NULL COMMENT '标签id',
  `title` varchar(50) DEFAULT NULL COMMENT '标题',
  `abstracte` varchar(255) DEFAULT NULL COMMENT '摘要',
  `keywords` varchar(255) DEFAULT NULL COMMENT '关键词语',
  `images` varchar(255) DEFAULT NULL COMMENT '文章封面图片',
  `content` text COMMENT '文章内容',
  `author` varchar(255) DEFAULT NULL COMMENT '作者，来源',
  `add_user` varchar(255) DEFAULT NULL COMMENT '文章添加者',
  `publish` tinyint(5) DEFAULT NULL COMMENT '0为已经发布，1为还未发布',
  `view_count` varchar(255) DEFAULT NULL COMMENT '浏览量',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  `publish_time` int(11) DEFAULT NULL COMMENT '发布时间',
  `publish_only` tinyint(4) DEFAULT NULL COMMENT '是否唯一发布',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_site_public_article_cate
-- ----------------------------
DROP TABLE IF EXISTS `yzb_site_public_article_cate`;
CREATE TABLE `yzb_site_public_article_cate` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '分类名称',
  `level` int(11) DEFAULT '1' COMMENT '级别,1场景，2分类，3标签',
  `parent_id` int(11) unsigned DEFAULT '0' COMMENT '父级id',
  `user_type` tinyint(255) DEFAULT '0' COMMENT '用户分类，0=>所有人，1=>个人，2=>个体，3=>企业',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  `publish_only` tinyint(4) DEFAULT '0' COMMENT '是否唯一，该分类下的文章是唯一发布的,0=>否，1=>是',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_site_sell_article
-- ----------------------------
DROP TABLE IF EXISTS `yzb_site_sell_article`;
CREATE TABLE `yzb_site_sell_article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cate_id` int(2) DEFAULT NULL COMMENT '分类id',
  `label_id` varchar(50) DEFAULT NULL COMMENT '标签id',
  `title` varchar(50) DEFAULT NULL COMMENT '标题',
  `content` text COMMENT '文章内容',
  `images` text COMMENT '文章图片',
  `add_user` varchar(255) DEFAULT NULL COMMENT '文章添加者',
  `author` varchar(255) DEFAULT NULL COMMENT '作者，来源',
  `view_count` int(11) DEFAULT '0' COMMENT '阅读次数',
  `publish` tinyint(5) DEFAULT '0' COMMENT '0未发布，1发布',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  `publish_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_site_sell_article_cate
-- ----------------------------
DROP TABLE IF EXISTS `yzb_site_sell_article_cate`;
CREATE TABLE `yzb_site_sell_article_cate` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '分类名称',
  `type` int(11) DEFAULT NULL COMMENT ' ''0''=>''栏目'',''1''=>''标签'',''2''=>''公告'',''3''=>''协议''',
  `level` int(11) DEFAULT NULL COMMENT '级别',
  `user_type` tinyint(255) DEFAULT NULL COMMENT '用户分类，0=>所有人，1=>个人，2=>个体，3=>企业',
  `controller` varchar(50) DEFAULT NULL COMMENT '作用的控制器',
  `action` varchar(50) DEFAULT NULL COMMENT '作用的方法',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=236 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_site_servicemall_article
-- ----------------------------
DROP TABLE IF EXISTS `yzb_site_servicemall_article`;
CREATE TABLE `yzb_site_servicemall_article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `scene_id` int(11) unsigned DEFAULT NULL COMMENT '场景id',
  `cate_id` int(11) unsigned DEFAULT NULL COMMENT '分类id',
  `label_id` varchar(50) DEFAULT NULL COMMENT '标签id',
  `title` varchar(50) DEFAULT NULL COMMENT '标题',
  `abstracte` varchar(255) DEFAULT NULL COMMENT '摘要',
  `keywords` varchar(255) DEFAULT NULL COMMENT '关键词语',
  `images` varchar(255) DEFAULT NULL COMMENT '文章封面图片',
  `content` text COMMENT '文章内容',
  `author` varchar(255) DEFAULT NULL COMMENT '作者，来源',
  `add_user` varchar(255) DEFAULT NULL COMMENT '文章添加者',
  `publish` tinyint(5) DEFAULT NULL COMMENT '0为已经发布，1为还未发布',
  `view_count` varchar(255) DEFAULT NULL COMMENT '浏览量',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  `publish_time` int(11) DEFAULT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_site_servicemall_article_cate
-- ----------------------------
DROP TABLE IF EXISTS `yzb_site_servicemall_article_cate`;
CREATE TABLE `yzb_site_servicemall_article_cate` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '分类名称',
  `level` int(11) DEFAULT '1' COMMENT '级别,1场景，2分类，3标签',
  `parent_id` int(11) unsigned DEFAULT '0' COMMENT '父级id',
  `user_type` tinyint(255) DEFAULT '0' COMMENT '用户分类，0=>所有人，1=>个人，2=>个体，3=>企业',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_site_sup_article
-- ----------------------------
DROP TABLE IF EXISTS `yzb_site_sup_article`;
CREATE TABLE `yzb_site_sup_article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `scene_id` int(11) unsigned DEFAULT NULL COMMENT '场景id',
  `cate_id` int(11) unsigned DEFAULT NULL COMMENT '分类id',
  `label_id` varchar(50) DEFAULT NULL COMMENT '标签id',
  `title` varchar(50) DEFAULT NULL COMMENT '标题',
  `abstracte` varchar(255) DEFAULT NULL COMMENT '摘要',
  `keywords` varchar(255) DEFAULT NULL COMMENT '关键词语',
  `images` varchar(255) DEFAULT NULL COMMENT '文章封面图片',
  `content` text COMMENT '文章内容',
  `author` varchar(255) DEFAULT NULL COMMENT '作者，来源',
  `add_user` varchar(255) DEFAULT NULL COMMENT '文章添加者',
  `publish` tinyint(5) DEFAULT NULL COMMENT '0为已经发布，1为还未发布',
  `view_count` varchar(255) DEFAULT NULL COMMENT '浏览量',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  `publish_time` int(11) DEFAULT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_site_sup_article_cate
-- ----------------------------
DROP TABLE IF EXISTS `yzb_site_sup_article_cate`;
CREATE TABLE `yzb_site_sup_article_cate` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '分类名称',
  `level` int(11) DEFAULT '1' COMMENT '级别,1场景，2分类，3标签',
  `parent_id` int(11) unsigned DEFAULT '0' COMMENT '父级id',
  `user_type` tinyint(255) DEFAULT '0' COMMENT '用户分类，0=>所有人，1=>个人，2=>个体，3=>企业',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_sup_users
-- ----------------------------
DROP TABLE IF EXISTS `yzb_sup_users`;
CREATE TABLE `yzb_sup_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '供货商名称',
  `balance` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '供货商，平台余额',
  `sell_time` int(11) DEFAULT '0' COMMENT '供货时间',
  `user_id` int(11) DEFAULT NULL COMMENT '用户帐号id',
  `level` int(11) DEFAULT NULL COMMENT '等级',
  `add_time` int(11) DEFAULT '0',
  `status` varchar(16) NOT NULL DEFAULT '0' COMMENT 'INACTIVE=未激活,  ACTIVE=正常,  REVIEW=审核中,  SUSPENED=冻结, BANNED=封号清退, REJECTED=审核失败',
  `cash_pledge` decimal(10,0) unsigned NOT NULL COMMENT '抵押余额',
  `sign_key` varchar(255) DEFAULT NULL COMMENT '数字签名',
  `drawing_amount` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '提现中金额',
  `freeze_amount` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '冻结金额',
  `edit_time` int(11) NOT NULL DEFAULT '0' COMMENT '修改时间',
  `parent_dealer_user_id` int(11) NOT NULL DEFAULT '0' COMMENT '代理商上级经销商user_id,0是直属表示没有上级或上级为系统',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_system_settings
-- ----------------------------
DROP TABLE IF EXISTS `yzb_system_settings`;
CREATE TABLE `yzb_system_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `value` varchar(1000) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `section` (`section`,`name`)
) ENGINE=InnoDB AUTO_INCREMENT=174 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Table structure for yzb_third_party_pay_log
-- ----------------------------
DROP TABLE IF EXISTS `yzb_third_party_pay_log`;
CREATE TABLE `yzb_third_party_pay_log` (
  `id` varchar(36) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `platform_id` int(11) DEFAULT NULL,
  `order_cate` int(11) NOT NULL COMMENT '订单分类',
  `order_id` varchar(255) DEFAULT NULL COMMENT '订单编号',
  `trade_sn` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '交易流水号',
  `order_amount` decimal(10,3) DEFAULT NULL COMMENT '订单金额',
  `total_amount` decimal(10,2) DEFAULT NULL COMMENT '付款金额（支付接口实际扣的钱）',
  `note` varchar(50) DEFAULT NULL COMMENT '备注',
  `sub_third_party_order_sn` varchar(255) DEFAULT NULL COMMENT '提交到第三方支付的订单号',
  `third_party_trade_sn` varchar(255) DEFAULT NULL COMMENT '第三方支付返回的流水号',
  `pay_status` tinyint(1) DEFAULT NULL COMMENT '支付状态',
  `product_name` varchar(255) DEFAULT NULL COMMENT '业务名称',
  `out_pay_user_accounts` varchar(255) DEFAULT NULL COMMENT '第三方支付用户帐号',
  `payment_class_id` int(11) DEFAULT NULL COMMENT '支付方式id',
  `poundage` decimal(4,0) DEFAULT NULL COMMENT '手续费',
  `add_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_user_balance_recharge_orders
-- ----------------------------
DROP TABLE IF EXISTS `yzb_user_balance_recharge_orders`;
CREATE TABLE `yzb_user_balance_recharge_orders` (
  `id` varchar(36) NOT NULL,
  `trade_sn` varchar(36) DEFAULT NULL COMMENT '交易流水号',
  `outer_sn` varchar(50) DEFAULT NULL COMMENT '外部请求单号',
  `cate_id` int(11) DEFAULT NULL,
  `outer_content` varchar(255) DEFAULT NULL,
  `platform_id` int(1) NOT NULL COMMENT '平台',
  `scene_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL COMMENT '用户id',
  `note` varchar(255) NOT NULL COMMENT '备注信息',
  `payment_class_id` int(2) DEFAULT NULL COMMENT '用户支付的方式（如现金、支付宝转账、在线充值等）',
  `payment_auxiliary_id` int(11) DEFAULT '0' COMMENT '充值方式子方式(如盛付通下的中国银行）0为没有',
  `collection_account` varchar(255) DEFAULT NULL COMMENT '收款帐号',
  `recharge_way` tinyint(2) NOT NULL DEFAULT '0' COMMENT '充值方式（1、人工充值、2自动充值）',
  `amount` decimal(17,5) NOT NULL COMMENT '充值金额',
  `poundage` decimal(7,2) DEFAULT NULL,
  `current_balance` decimal(17,5) DEFAULT NULL COMMENT '用户充值后剩余的钱',
  `status` varchar(16) NOT NULL DEFAULT '0' COMMENT '充值状态，PENDING_PAYMENT: 等待付款, PROCESSING: 处理, SUCCEED: 充值成功, FAILED: 充值失败, CANCELED: 已取消, USER_UNKNOWN: 用户未知',
  `platform_total_balance` decimal(18,5) DEFAULT NULL COMMENT '用户充值后整个平台剩余的钱',
  `add_time` int(11) NOT NULL COMMENT '创建时间',
  `product_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `trade_sn` (`trade_sn`),
  KEY `outer_sn` (`outer_sn`,`payment_class_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_user_binding_pay_way
-- ----------------------------
DROP TABLE IF EXISTS `yzb_user_binding_pay_way`;
CREATE TABLE `yzb_user_binding_pay_way` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `way_id` int(11) NOT NULL COMMENT '支付方式，pay_way表',
  `accounts` varchar(255) DEFAULT NULL COMMENT '账户',
  `way_type` tinyint(1) NOT NULL COMMENT '1网银、2快捷、3在线支付、4人工',
  `bind_scene_id` int(11) DEFAULT '0',
  `bind_scene` int(11) DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_bind_pay_way_id` (`user_id`,`way_id`,`accounts`,`way_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_user_level
-- ----------------------------
DROP TABLE IF EXISTS `yzb_user_level`;
CREATE TABLE `yzb_user_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `info` varchar(255) DEFAULT NULL,
  `default` tinyint(1) DEFAULT '0',
  `add_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_user_log_agent
-- ----------------------------
DROP TABLE IF EXISTS `yzb_user_log_agent`;
CREATE TABLE `yzb_user_log_agent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL COMMENT '用户id',
  `mobile` varchar(50) DEFAULT NULL COMMENT '用户手机号',
  `ip` varchar(255) DEFAULT NULL COMMENT '用户ip',
  `info` varchar(255) DEFAULT NULL COMMENT '备注',
  `time` int(11) DEFAULT NULL COMMENT '操作时间',
  `type` varchar(50) DEFAULT NULL COMMENT '操作记录，login',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_user_log_open
-- ----------------------------
DROP TABLE IF EXISTS `yzb_user_log_open`;
CREATE TABLE `yzb_user_log_open` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL COMMENT '用户id',
  `mobile` varchar(50) DEFAULT NULL COMMENT '用户手机号',
  `ip` varchar(255) DEFAULT NULL COMMENT '用户ip',
  `info` varchar(255) DEFAULT NULL COMMENT '备注',
  `time` int(11) DEFAULT NULL COMMENT '操作时间',
  `type` varchar(50) DEFAULT NULL COMMENT '操作记录，login',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_user_log_sell
-- ----------------------------
DROP TABLE IF EXISTS `yzb_user_log_sell`;
CREATE TABLE `yzb_user_log_sell` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL COMMENT '用户id',
  `mobile` varchar(50) DEFAULT NULL COMMENT '用户手机号',
  `ip` varchar(255) DEFAULT NULL COMMENT '用户ip',
  `info` varchar(255) DEFAULT NULL COMMENT '备注',
  `time` int(11) DEFAULT NULL COMMENT '操作时间',
  `type` varchar(50) DEFAULT NULL COMMENT '操作记录，login',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_user_money_alipay_transfer_recharge_log
-- ----------------------------
DROP TABLE IF EXISTS `yzb_user_money_alipay_transfer_recharge_log`;
CREATE TABLE `yzb_user_money_alipay_transfer_recharge_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `platform_id` int(1) NOT NULL COMMENT '平台',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `foxdou_user_name` varchar(255) NOT NULL DEFAULT '',
  `trade_id` varchar(36) NOT NULL DEFAULT '' COMMENT '交易流水号',
  `alipay_sn` varchar(255) NOT NULL COMMENT '支付宝流水号',
  `collection_account` varchar(30) NOT NULL COMMENT '收款帐号',
  `alipay_user_name` varchar(255) NOT NULL COMMENT '支付宝用户的姓名',
  `amount` decimal(10,2) NOT NULL COMMENT '转账金额',
  `alipay_user_account` varchar(255) NOT NULL COMMENT '用户支付宝帐号',
  `alipay_user_id` char(30) NOT NULL COMMENT '支付宝用户id',
  `alipay_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `add_time` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '充值状态，0=>''未知'',1=>''等待充值'', 2=>''充值成功'', 3=>''充值失败'', 4=>''已取消'',5=>''用户未知''',
  `alipay_trans_memo` varchar(255) NOT NULL DEFAULT '' COMMENT '支付宝留言备注',
  PRIMARY KEY (`id`,`alipay_sn`),
  UNIQUE KEY `alipay_sn` (`alipay_sn`)
) ENGINE=InnoDB AUTO_INCREMENT=182 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_user_money_log
-- ----------------------------
DROP TABLE IF EXISTS `yzb_user_money_log`;
CREATE TABLE `yzb_user_money_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `platform_id` int(1) NOT NULL COMMENT '平台',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `trade_id` varchar(36) NOT NULL COMMENT '交易记录流水',
  `order_id` varchar(36) DEFAULT NULL COMMENT '外部业务单号',
  `log_type` smallint(4) NOT NULL DEFAULT '0' COMMENT '类型：0=>未知, 1=>订单支付,2=>提现, 3=>余额充值,4=>退款,5=>订单结算,6=>转账,7=>佣金提取（注：7只有代理商平台才有）按平台区分类型，三位数表示，比如开放平台201表示订单支付',
  `name` varchar(50) DEFAULT NULL COMMENT '交易名称',
  `note` varchar(255) DEFAULT NULL COMMENT '备注',
  `amount` decimal(17,5) NOT NULL COMMENT '交易金额',
  `current_balance` decimal(17,5) NOT NULL COMMENT '用户余额',
  `platform_total_balance` decimal(18,5) NOT NULL COMMENT '平台余额',
  `add_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=974 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_user_money_recharge_alipay_user_relation
-- ----------------------------
DROP TABLE IF EXISTS `yzb_user_money_recharge_alipay_user_relation`;
CREATE TABLE `yzb_user_money_recharge_alipay_user_relation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `platform_id` int(1) NOT NULL DEFAULT '0' COMMENT '平台',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `alipay_user_id` varchar(50) NOT NULL COMMENT '阿里用户id',
  `alipay_user_account` varchar(255) DEFAULT NULL COMMENT '用户阿里账户',
  `alipay_user_name` varchar(255) DEFAULT NULL COMMENT '支付宝用户的姓名',
  `add_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`,`alipay_user_id`),
  UNIQUE KEY `alipay_user_id` (`alipay_user_id`,`platform_id`),
  UNIQUE KEY `user_id` (`user_id`,`platform_id`),
  UNIQUE KEY `alipay_user_account` (`alipay_user_account`,`platform_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_user_money_taobao_buy_recharge_log
-- ----------------------------
DROP TABLE IF EXISTS `yzb_user_money_taobao_buy_recharge_log`;
CREATE TABLE `yzb_user_money_taobao_buy_recharge_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `taobao_order_sn` varchar(255) NOT NULL,
  `taobao_order_status` varchar(255) NOT NULL,
  `amount` decimal(11,2) DEFAULT NULL,
  `taobao_consign_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '淘宝发货时间',
  `taobao_created_time` datetime DEFAULT NULL COMMENT '淘宝交易创建时间',
  `taobao_pay_time` datetime DEFAULT NULL COMMENT '付款时间',
  `taobao_modified_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT 'taobao交易修改时间(用户对订单的任何修改都会更新此字段)。格式:yyyy-MM-dd HH:mm:ss',
  `taobao_buyer_nick` varchar(255) DEFAULT NULL,
  `taobao_received_payment` decimal(11,2) DEFAULT NULL COMMENT '支付宝实际已经收到的金额',
  `taobao_payment` decimal(11,2) DEFAULT NULL COMMENT '淘宝订单金额',
  `add_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `taobao_end_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_user_money_trade_log
-- ----------------------------
DROP TABLE IF EXISTS `yzb_user_money_trade_log`;
CREATE TABLE `yzb_user_money_trade_log` (
  `id` varchar(36) NOT NULL,
  `order_id` varchar(50) DEFAULT NULL COMMENT '交易订单号',
  `outer_sn` varchar(50) DEFAULT NULL,
  `order_cate_id` int(11) NOT NULL COMMENT '订单类型',
  `produc_cate_id` int(11) DEFAULT NULL COMMENT '产品类型',
  `user_id` int(11) NOT NULL COMMENT '买家user_id',
  `other_party_user_id` int(11) DEFAULT NULL COMMENT '卖家user_id',
  `other_party_user_pintai` tinyint(4) DEFAULT NULL COMMENT '卖家所在平台',
  `trade_status` tinyint(2) NOT NULL COMMENT '0=>''未知'',1=>''待付款'',2=>''交易中'',3=>''交易完成'',4=>''交易失败''',
  `trade_log_type` int(11) NOT NULL COMMENT '交易类型(1.api扣款、2.新建应用、3.提现、4充值余额）',
  `name` varchar(255) NOT NULL COMMENT '交易名称',
  `note` varchar(255) DEFAULT NULL COMMENT '交易名称、说明',
  `amount` decimal(17,2) NOT NULL COMMENT '交易金额',
  `payment_class_id` int(10) DEFAULT '0' COMMENT '用户付款方式',
  `platform_id` int(11) DEFAULT NULL COMMENT '交易场景，id',
  `scene_id` int(2) DEFAULT NULL COMMENT '交易场景，1=>''余额充值'',2=>''服务市场'',3=>''商城''',
  `trade_time` int(11) NOT NULL DEFAULT '0',
  `pay_time` int(11) NOT NULL DEFAULT '0' COMMENT '0',
  `end_time` int(11) NOT NULL DEFAULT '0' COMMENT '0',
  `add_time` int(11) NOT NULL DEFAULT '0' COMMENT '0',
  `trade_poundage` decimal(17,5) DEFAULT '0.00000',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_user_operation_log
-- ----------------------------
DROP TABLE IF EXISTS `yzb_user_operation_log`;
CREATE TABLE `yzb_user_operation_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `operation_user_id` int(11) NOT NULL,
  `log_type` tinyint(4) NOT NULL,
  `platform_id` int(4) NOT NULL DEFAULT '0' COMMENT '平台/站点id',
  `info` varchar(255) DEFAULT NULL COMMENT '操作备注',
  `ip` varchar(255) DEFAULT NULL COMMENT '操作者ip',
  `client` tinyint(1) DEFAULT '0' COMMENT '操作端（网页、客户端、安卓、苹果等）',
  `add_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2422 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_user_pay_way_auxiliary
-- ----------------------------
DROP TABLE IF EXISTS `yzb_user_pay_way_auxiliary`;
CREATE TABLE `yzb_user_pay_way_auxiliary` (
  `id` int(11) NOT NULL COMMENT '支付方式子类',
  `name` varchar(255) DEFAULT NULL COMMENT '支付名称',
  `way_id` int(11) NOT NULL COMMENT '支付方式，pay_way表',
  `picture` varchar(255) DEFAULT NULL,
  `poundage_id` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_user_safe_question
-- ----------------------------
DROP TABLE IF EXISTS `yzb_user_safe_question`;
CREATE TABLE `yzb_user_safe_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_user_service
-- ----------------------------
DROP TABLE IF EXISTS `yzb_user_service`;
CREATE TABLE `yzb_user_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '用户id',
  `service_id` int(11) NOT NULL COMMENT '服务id',
  `limit_app_num` int(11) NOT NULL DEFAULT '5' COMMENT '用户最多可申请应用的数量',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '用户服务的使用状态，1正常，0暂停',
  `add_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_user_third_party_login_info
-- ----------------------------
DROP TABLE IF EXISTS `yzb_user_third_party_login_info`;
CREATE TABLE `yzb_user_third_party_login_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `third_user_id` varchar(255) NOT NULL COMMENT '代表第三方平台用户的唯一id',
  `third_key` varchar(255) DEFAULT NULL COMMENT '第三方平台用户的安全key',
  `third_platform` tinyint(1) NOT NULL COMMENT '第三方平台代码,1=>QQ,2=>支付宝',
  `third_user_info` text,
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`,`third_platform`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for yzb_users
-- ----------------------------
DROP TABLE IF EXISTS `yzb_users`;
CREATE TABLE `yzb_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` char(1) NOT NULL COMMENT '账号类型 I 个人， B 公司',
  `business_type` int(11) DEFAULT NULL,
  `user_name` char(50) DEFAULT '' COMMENT '用户名',
  `nick_name` varchar(50) DEFAULT NULL COMMENT '昵称',
  `roles` varchar(100) DEFAULT NULL,
  `login_nick_name` varchar(50) DEFAULT NULL,
  `head_img` varchar(255) DEFAULT '/img/default-head-portrait.jpg' COMMENT '头像',
  `mobile` varchar(15) DEFAULT NULL COMMENT '登录手机号',
  `bind_mobile` varchar(50) DEFAULT NULL COMMENT '绑定手机号',
  `email` varchar(50) DEFAULT NULL COMMENT '登录邮箱',
  `bind_email` varchar(50) DEFAULT NULL COMMENT '绑定登录邮箱',
  `email_verified` int(11) DEFAULT '0',
  `password` varchar(100) NOT NULL COMMENT '登录密码',
  `pay_password` varchar(100) DEFAULT NULL COMMENT '支付密码',
  `status` varchar(10) NOT NULL DEFAULT 'INACTIVE' COMMENT 'INACTIVE 未激活  ACTIVE 正常  REVIEW 审核中  SUSPENDED 冻结 BANNED 封号清退',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否删除：0否1是',
  `pay_status` char(1) NOT NULL DEFAULT 'N' COMMENT '余额支付状态，N=>关闭，Y=>开启',
  `password_error_num` int(11) DEFAULT '0' COMMENT '登录输入密码错误次数',
  `pay_password_error_num` int(11) DEFAULT '0' COMMENT '支付密码输入错误次数',
  `balance` decimal(12,2) DEFAULT '0.00' COMMENT '用户金额',
  `real_name_status` char(20) NOT NULL DEFAULT 'INCOMPLETE' COMMENT '实名认证状态，INCOMPLETE=>未认证,PENDING=>待审核,REVIEW=>审核中,VERIFIED=>已认证,FAILED=>未通过审核',
  `register_ip` varchar(16) DEFAULT NULL,
  `info` varchar(100) DEFAULT NULL COMMENT '备注',
  `add_time` int(11) NOT NULL,
  `edit_time` int(11) DEFAULT NULL,
  `opened_platform` varchar(50) DEFAULT NULL COMMENT '已开通的平台(用逗号隔开平台数字代码如1,2,3)',
  `is_open_platform` varchar(10) NOT NULL DEFAULT 'N' COMMENT '是否开通开放平台账户：N=>否，Y=>是',
  `is_agent_platform` varchar(10) NOT NULL DEFAULT 'N' COMMENT '是否开通代理商平台账户：N=>否，Y=>是',
  `is_supplier_platform` varchar(10) NOT NULL DEFAULT 'N' COMMENT '是否开通供应商平台账户：N=>否，Y=>是',
  `other_user_data` varchar(255) NOT NULL DEFAULT '{}' COMMENT 'json格式储存用户其他资料如生日',
  `last_login_ip` varchar(16) DEFAULT NULL,
  `last_login_time` int(11) DEFAULT NULL,
  `avatar_url` varchar(255) DEFAULT NULL,
  `referrer_id` int(11) DEFAULT NULL COMMENT '注册邀请人id',
  `is_entry_identity_info` varchar(10) NOT NULL DEFAULT 'N' COMMENT '是否已录入身份信息：N=>否，Y=>是',
  `open_methods` varchar(50) NOT NULL DEFAULT '' COMMENT '开户方式：201=>开放平台激活通行证自动开户,202=>开放平台身份信息过审自动开户,203=>开放平台已写入身份信息且开户申请过审,301=>供货商平台开放激活通行证自动开户，302=>供货商平台身份信息过审自动开户,303=>供货商平台已写入身份信息且开户申请过审,501=>代理商平台开放激活通行证自动开户,502=>代理商平台身份信息过审自动开户,503=>代理商平台已写入身份信息且开户申请过审。多个数值用逗号隔开',
  `assign_account` enum('Y','N') NOT NULL DEFAULT 'N' COMMENT '是否已分配狐豆靓号：N=>否，Y=>是',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `login_nick_name` (`login_nick_name`),
  UNIQUE KEY `mail` (`email`),
  UNIQUE KEY `phone` (`mobile`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=157 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_users_account_application
-- ----------------------------
DROP TABLE IF EXISTS `yzb_users_account_application`;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COMMENT='开户申请记录';

-- ----------------------------
-- Table structure for yzb_users_account_status_log
-- ----------------------------
DROP TABLE IF EXISTS `yzb_users_account_status_log`;
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COMMENT='账户冻结/解冻状态记录';

-- ----------------------------
-- Table structure for yzb_users_activation_codes
-- ----------------------------
DROP TABLE IF EXISTS `yzb_users_activation_codes`;
CREATE TABLE `yzb_users_activation_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `expires_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Table structure for yzb_users_aduit_log
-- ----------------------------
DROP TABLE IF EXISTS `yzb_users_aduit_log`;
CREATE TABLE `yzb_users_aduit_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_type` tinyint(1) NOT NULL COMMENT '用户类型',
  `legal_person_name` varchar(255) NOT NULL COMMENT '法人姓名',
  `legal_person_identity_card_no` varchar(255) DEFAULT NULL COMMENT '法人身份证号码',
  `legal_person_address` varchar(255) CHARACTER SET utf32 DEFAULT '' COMMENT '法人身份证地址',
  `legal_person_identity_card_valid_time_start` int(11) DEFAULT '0' COMMENT '法人身份证有效期起始日期',
  `legal_person_identity_card_valid_time_end` int(11) DEFAULT '0' COMMENT '法人身份证有效期结束日期',
  `positive_photo_of_legal_person_identity_card` varchar(255) DEFAULT NULL COMMENT '法人身份证正面照片',
  `negative_photo_of_legal_person_identity_card` varchar(255) DEFAULT NULL COMMENT '法人身份证反面照片',
  `hand_photo_of_legal_person_identity_card` varchar(255) DEFAULT NULL COMMENT '法人手持身份证正面照片',
  `business_name` varchar(255) NOT NULL COMMENT '营业名称（企业名称）和个人姓名',
  `business_address` varchar(255) DEFAULT NULL COMMENT '营业地址',
  `business_scope` varchar(255) DEFAULT NULL COMMENT '营业范围',
  `business_license_no` varchar(255) NOT NULL COMMENT '营业执照证件号码或身份证号码',
  `business_license_valid_time_start` int(11) DEFAULT '0' COMMENT '营业执照有效期起始日期',
  `business_license_valid_time_end` int(11) DEFAULT '0' COMMENT '营业执照有效期结束日期',
  `business_license_photo` varchar(255) DEFAULT NULL COMMENT '营业执照照片',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '实名认证状态,请在代码中控制与user表中的simin_status保持值一致',
  `status_info` tinyint(1) NOT NULL DEFAULT '0' COMMENT '基本信息状态',
  `status_positive_photo` tinyint(1) NOT NULL DEFAULT '0' COMMENT '法人身份证正面照片认证状态',
  `status_negative_photo` tinyint(1) NOT NULL DEFAULT '0' COMMENT '法人身份证反面照片认证状态',
  `status_business_license_photo` tinyint(1) NOT NULL DEFAULT '0' COMMENT '营业执照正面照片认证状态',
  `submission_of_authentication_ip` varchar(255) DEFAULT NULL,
  `sub_info_authentication_ip` varchar(255) DEFAULT NULL,
  `add_time` int(11) NOT NULL COMMENT '添加时间',
  `edit_time` int(11) DEFAULT NULL,
  `submission_of_authentication_time` int(11) DEFAULT NULL COMMENT '提交实名认证时间',
  `real_name_authentication_finish_time` int(11) DEFAULT NULL COMMENT '完成实名认证时间',
  `info_authentication_finish_time` int(11) DEFAULT NULL COMMENT '基本信息审核完成时间',
  `admin_id` int(11) DEFAULT NULL,
  `cause` varchar(255) DEFAULT NULL COMMENT '原因',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_users_business_licenses
-- ----------------------------
DROP TABLE IF EXISTS `yzb_users_business_licenses`;
CREATE TABLE `yzb_users_business_licenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `legal_person_name` varchar(255) NOT NULL COMMENT '法人姓名',
  `legal_person_identity_card_no` varchar(255) DEFAULT NULL COMMENT '法人身份证号码',
  `legal_person_identity_card_valid_time_start` int(11) DEFAULT '0' COMMENT '法人身份证有效期起始日期',
  `legal_person_identity_card_valid_time_end` int(11) DEFAULT '0' COMMENT '法人身份证有效期结束日期',
  `positive_photo_of_legal_person_identity_card` varchar(255) DEFAULT NULL COMMENT '法人身份证正面照片',
  `negative_photo_of_legal_person_identity_card` varchar(255) DEFAULT NULL COMMENT '法人身份证反面照片',
  `hand_photo_of_legal_person_identity_card` varchar(255) DEFAULT NULL COMMENT '法人手持身份证正面照片',
  `business_name` varchar(255) NOT NULL COMMENT '营业名称（企业名称）和个人姓名',
  `business_address` varchar(255) DEFAULT NULL COMMENT '营业地址',
  `business_scope` varchar(255) DEFAULT NULL COMMENT '营业范围',
  `business_license_no` varchar(255) NOT NULL COMMENT '营业执照证件号码或身份证号码',
  `business_license_valid_time_start` int(11) DEFAULT '0' COMMENT '营业执照有效期起始日期',
  `business_license_valid_time_end` int(11) DEFAULT '0' COMMENT '营业执照有效期结束日期',
  `business_license_photo` varchar(255) DEFAULT NULL COMMENT '营业执照照片',
  `status` char(20) NOT NULL DEFAULT 'PENDING' COMMENT '实名认证状态,请在代码中控制与user表中的real_name_status保持值一致',
  `status_info` tinyint(1) NOT NULL DEFAULT '0' COMMENT '基本信息状态',
  `status_positive_photo` tinyint(1) NOT NULL DEFAULT '0' COMMENT '法人身份证正面照片认证状态',
  `status_negative_photo` tinyint(1) NOT NULL DEFAULT '0' COMMENT '法人身份证反面照片认证状态',
  `status_business_license_photo` tinyint(1) NOT NULL DEFAULT '0' COMMENT '营业执照正面照片认证状态',
  `submission_of_authentication_ip` varchar(255) DEFAULT NULL,
  `sub_info_authentication_ip` varchar(255) DEFAULT NULL,
  `add_time` int(11) NOT NULL COMMENT '添加时间',
  `edit_time` int(11) DEFAULT NULL,
  `submission_of_authentication_time` int(11) DEFAULT NULL COMMENT '提交实名认证时间',
  `real_name_authentication_finish_time` int(11) DEFAULT NULL COMMENT '完成实名认证时间',
  `info_authentication_finish_time` int(11) DEFAULT NULL COMMENT '基本信息审核完成时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`),
  UNIQUE KEY `user_type` (`business_license_no`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_users_contact
-- ----------------------------
DROP TABLE IF EXISTS `yzb_users_contact`;
CREATE TABLE `yzb_users_contact` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `contact_name` varchar(50) DEFAULT NULL,
  `contact_phone` varchar(20) DEFAULT NULL,
  `contact_mail` varchar(20) DEFAULT NULL,
  `contact_qq` varchar(20) DEFAULT NULL,
  `contact_address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='foxdou用户联系信息';

-- ----------------------------
-- Table structure for yzb_users_contact_sell
-- ----------------------------
DROP TABLE IF EXISTS `yzb_users_contact_sell`;
CREATE TABLE `yzb_users_contact_sell` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL COMMENT '用户id',
  `telephone` varchar(20) DEFAULT NULL COMMENT '固定电话',
  `mobilephone` varchar(20) DEFAULT NULL COMMENT '联系手机号码',
  `fax` varchar(20) DEFAULT NULL COMMENT '传真',
  `qq` varchar(20) DEFAULT NULL COMMENT '联系qq',
  `mail` varchar(50) DEFAULT NULL COMMENT '联系邮箱',
  `post_id` int(6) DEFAULT NULL COMMENT '邮编',
  `area` varchar(255) DEFAULT NULL COMMENT '省市',
  `area_id` int(11) DEFAULT NULL COMMENT '省市编号',
  `address` varchar(255) DEFAULT NULL COMMENT '地址',
  `service_name` varchar(255) DEFAULT NULL COMMENT '客服名',
  `service_phone` varchar(255) DEFAULT NULL COMMENT '客服电话',
  `service_mail` varchar(255) DEFAULT NULL COMMENT '客服邮箱',
  `service_qq` varchar(255) DEFAULT NULL COMMENT '客服qq,可以填4个',
  `service_time` varchar(255) DEFAULT NULL COMMENT '客服服务时间',
  `service_inline` varchar(255) DEFAULT NULL COMMENT '客服信息备注',
  `add_time` int(11) DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_users_employee
-- ----------------------------
DROP TABLE IF EXISTS `yzb_users_employee`;
CREATE TABLE `yzb_users_employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_user_id` int(11) NOT NULL COMMENT '员工用户id',
  `boss_user_id` int(11) NOT NULL COMMENT '老板的用户id',
  `add_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_users_employee_boss_position
-- ----------------------------
DROP TABLE IF EXISTS `yzb_users_employee_boss_position`;
CREATE TABLE `yzb_users_employee_boss_position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '岗位名称',
  `boss_user_id` int(11) NOT NULL COMMENT '添加该岗位的老板',
  `platform_id` int(11) NOT NULL COMMENT '平台数字代码',
  `add_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_users_employee_boss_power_list
-- ----------------------------
DROP TABLE IF EXISTS `yzb_users_employee_boss_power_list`;
CREATE TABLE `yzb_users_employee_boss_power_list` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL COMMENT '权限名称',
  `url` varchar(255) NOT NULL COMMENT '权限路径',
  `platform_id` int(11) NOT NULL COMMENT '平台数字代码',
  `add_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_users_employee_position_power
-- ----------------------------
DROP TABLE IF EXISTS `yzb_users_employee_position_power`;
CREATE TABLE `yzb_users_employee_position_power` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position_id` int(11) NOT NULL COMMENT '岗位id',
  `power_id` int(11) NOT NULL COMMENT '权限id',
  `add_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_users_employee_position_relation
-- ----------------------------
DROP TABLE IF EXISTS `yzb_users_employee_position_relation`;
CREATE TABLE `yzb_users_employee_position_relation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position_id` int(11) NOT NULL COMMENT '岗位id',
  `employee_user_id` int(11) NOT NULL COMMENT '员工id',
  `add_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_users_identities
-- ----------------------------
DROP TABLE IF EXISTS `yzb_users_identities`;
CREATE TABLE `yzb_users_identities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `identity_type` char(1) DEFAULT '' COMMENT '用户类型：I=>个人,B=>公司',
  `identity_name` varchar(100) DEFAULT NULL COMMENT '法人姓名',
  `identity_no` varchar(32) DEFAULT NULL COMMENT '法人身份证号码',
  `identity_address` varchar(255) DEFAULT NULL,
  `identity_valid_from` date DEFAULT NULL COMMENT '法人身份证有效期起始日期',
  `identity_valid_to` date DEFAULT NULL COMMENT '法人身份证有效期结束日期',
  `identity_valid_long_term` int(11) DEFAULT NULL,
  `identity_front_image_id` bigint(11) DEFAULT NULL,
  `identity_front_image_url` varchar(255) DEFAULT NULL COMMENT '法人身份证正面照片',
  `identity_front_image_review_result` varchar(10) DEFAULT '0' COMMENT '法人身份证正面照片认证状态',
  `identity_back_image_id` bigint(11) DEFAULT NULL,
  `identity_back_image_review_result` varchar(10) DEFAULT NULL,
  `identity_back_image_url` varchar(255) DEFAULT NULL COMMENT '法人身份证反面照片',
  `identity_handheld_image_id` bigint(11) DEFAULT NULL COMMENT '法人手持身份证正面照片',
  `identity_handheld_image_review_result` varchar(10) DEFAULT NULL,
  `identity_handheld_image_url` varchar(255) DEFAULT NULL,
  `biz_scope` varchar(255) DEFAULT NULL COMMENT '营业范围',
  `biz_legal_representative_name` varchar(20) DEFAULT NULL COMMENT '营业名称（企业名称）和个人姓名',
  `biz_legal_representative_id_no` varchar(32) DEFAULT NULL,
  `biz_legal_representative_id_valid_from` date DEFAULT NULL,
  `biz_legal_representative_id_valid_to` date DEFAULT NULL,
  `biz_legal_representative_id_valid_long_term` int(11) DEFAULT NULL,
  `biz_legal_representative_id_front_image_id` bigint(11) DEFAULT NULL,
  `biz_legal_representative_id_front_image_url` varchar(255) DEFAULT NULL,
  `biz_legal_representative_id_front_image_review_result` varchar(10) DEFAULT NULL,
  `biz_legal_representative_id_back_image_id` bigint(11) DEFAULT NULL,
  `biz_legal_representative_id_back_image_url` varchar(255) DEFAULT NULL,
  `biz_legal_representative_id_back_image_review_result` varchar(10) DEFAULT NULL,
  `status` char(20) DEFAULT 'PENDING' COMMENT '实名认证状态,请在代码中控制与user表中的real_name_status保持值一致',
  `status_info` tinyint(1) DEFAULT '0' COMMENT '基本信息状态',
  `submission_ip` varchar(20) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL COMMENT '添加时间',
  `updated_at` datetime(6) DEFAULT NULL,
  `submitted_at` datetime(6) DEFAULT NULL COMMENT '提交实名认证时间',
  `basic_reviewed_at` datetime(6) DEFAULT NULL COMMENT '基本信息审核完成时间',
  `full_reviewed_at` datetime(6) DEFAULT NULL COMMENT '完成实名认证时间',
  `province_code` varchar(10) DEFAULT NULL,
  `city_code` varchar(10) DEFAULT NULL,
  `district_code` varchar(10) DEFAULT NULL,
  `certification_level` tinyint(1) DEFAULT '0' COMMENT '认证级别',
  `review_status` varchar(20) DEFAULT 'PENDING' COMMENT '审核状态：PENDING=>待审核，SUCCESS=>审核通过，FAIL=>审核不通过',
  `note` varchar(255) DEFAULT '' COMMENT '审核说明',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`),
  UNIQUE KEY `user_type` (`identity_type`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_users_individual_identity_info
-- ----------------------------
DROP TABLE IF EXISTS `yzb_users_individual_identity_info`;
CREATE TABLE `yzb_users_individual_identity_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_type` char(1) NOT NULL DEFAULT '' COMMENT '用户类型：I=>个人,B=>个体,E=>企业',
  `legal_person_name` varchar(255) NOT NULL COMMENT '法人姓名',
  `legal_person_identity_card_no` varchar(255) DEFAULT NULL COMMENT '法人身份证号码',
  `legal_person_address` varchar(255) CHARACTER SET utf32 DEFAULT '' COMMENT '法人身份证地址',
  `legal_person_identity_card_valid_time_start` int(11) DEFAULT '0' COMMENT '法人身份证有效期起始日期',
  `legal_person_identity_card_valid_time_end` int(11) DEFAULT '0' COMMENT '法人身份证有效期结束日期',
  `positive_photo_of_legal_person_identity_card` varchar(255) DEFAULT NULL COMMENT '法人身份证正面照片',
  `negative_photo_of_legal_person_identity_card` varchar(255) DEFAULT NULL COMMENT '法人身份证反面照片',
  `hand_photo_of_legal_person_identity_card` varchar(255) DEFAULT NULL COMMENT '法人手持身份证正面照片',
  `business_name` varchar(255) NOT NULL COMMENT '营业名称（企业名称）和个人姓名',
  `business_address` varchar(255) DEFAULT NULL COMMENT '营业地址',
  `business_scope` varchar(255) DEFAULT NULL COMMENT '营业范围',
  `business_license_no` varchar(255) NOT NULL COMMENT '营业执照证件号码或身份证号码',
  `business_license_valid_time_start` int(11) DEFAULT '0' COMMENT '营业执照有效期起始日期',
  `business_license_valid_time_end` int(11) DEFAULT '0' COMMENT '营业执照有效期结束日期',
  `business_license_photo` varchar(255) DEFAULT NULL COMMENT '营业执照照片',
  `status` char(20) NOT NULL DEFAULT 'PENDING' COMMENT '实名认证状态,请在代码中控制与user表中的real_name_status保持值一致',
  `status_info` tinyint(1) NOT NULL DEFAULT '0' COMMENT '基本信息状态',
  `status_positive_photo` tinyint(1) NOT NULL DEFAULT '0' COMMENT '法人身份证正面照片认证状态',
  `status_negative_photo` tinyint(1) NOT NULL DEFAULT '0' COMMENT '法人身份证反面照片认证状态',
  `status_business_license_photo` tinyint(1) NOT NULL DEFAULT '0' COMMENT '营业执照正面照片认证状态',
  `submission_of_authentication_ip` varchar(255) DEFAULT NULL,
  `sub_info_authentication_ip` varchar(255) DEFAULT NULL,
  `add_time` int(11) NOT NULL COMMENT '添加时间',
  `edit_time` int(11) DEFAULT NULL,
  `submission_of_authentication_time` int(11) DEFAULT NULL COMMENT '提交实名认证时间',
  `real_name_authentication_finish_time` int(11) DEFAULT NULL COMMENT '完成实名认证时间',
  `info_authentication_finish_time` int(11) DEFAULT NULL COMMENT '基本信息审核完成时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`),
  UNIQUE KEY `user_type` (`user_type`,`business_license_no`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_users_information
-- ----------------------------
DROP TABLE IF EXISTS `yzb_users_information`;
CREATE TABLE `yzb_users_information` (
  `user_id` int(11) NOT NULL,
  `sex` tinyint(1) NOT NULL DEFAULT '0' COMMENT '性别，0未知，1男2女',
  `personality_signature` varchar(255) NOT NULL DEFAULT '' COMMENT '个性签名',
  `hometown_country` varchar(255) NOT NULL DEFAULT '' COMMENT '家乡国家',
  `hometown_province` varchar(255) NOT NULL DEFAULT '' COMMENT '家乡省份',
  `hometown_city` varchar(255) NOT NULL DEFAULT '' COMMENT '家乡城市',
  `hometown_district` varchar(255) NOT NULL DEFAULT '' COMMENT '家乡所在区',
  `hometown_details` varchar(255) NOT NULL DEFAULT '' COMMENT '家乡所在地',
  `school` varchar(255) NOT NULL DEFAULT '' COMMENT '学校',
  `company` varchar(255) NOT NULL DEFAULT '' COMMENT '所属公司',
  `introduction` varchar(255) NOT NULL DEFAULT '',
  `occupation` tinyint(2) NOT NULL DEFAULT '0' COMMENT '职业',
  `birthday` char(20) CHARACTER SET utf16 NOT NULL DEFAULT '' COMMENT '生日',
  `blood_type` char(2) NOT NULL DEFAULT '' COMMENT '血型',
  `add_time` int(11) NOT NULL DEFAULT '0',
  `edit_time` int(11) NOT NULL DEFAULT '0',
  `location_province` varchar(255) NOT NULL DEFAULT '' COMMENT '所在地省份',
  `location_city` varchar(255) NOT NULL DEFAULT '' COMMENT '所在地城市',
  `location_district` varchar(255) NOT NULL DEFAULT '' COMMENT '所在地区域',
  `location_country` varchar(255) NOT NULL DEFAULT '' COMMENT '所在地国家',
  `location_details` varchar(255) NOT NULL DEFAULT '' COMMENT '所在地具体地址',
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_users_invite_register_log
-- ----------------------------
DROP TABLE IF EXISTS `yzb_users_invite_register_log`;
CREATE TABLE `yzb_users_invite_register_log` (
  `register_user_id` int(11) NOT NULL,
  `inviter_user_id` int(11) NOT NULL,
  `add_time` int(11) NOT NULL,
  UNIQUE KEY `register_user_id` (`register_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_users_message
-- ----------------------------
DROP TABLE IF EXISTS `yzb_users_message`;
CREATE TABLE `yzb_users_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '消息类型：1.普通消息，',
  `title` varchar(64) NOT NULL DEFAULT '' COMMENT '消息标题',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '阅读状态 1未阅读，2已阅读',
  `content` varchar(255) NOT NULL DEFAULT '' COMMENT '消息内容',
  `add_time` int(11) DEFAULT '0',
  `edit_time` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='站内消息';

-- ----------------------------
-- Table structure for yzb_users_open_account_log
-- ----------------------------
DROP TABLE IF EXISTS `yzb_users_open_account_log`;
CREATE TABLE `yzb_users_open_account_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `pass` varchar(50) NOT NULL DEFAULT '' COMMENT '狐豆通行证',
  `account` varchar(20) NOT NULL DEFAULT '' COMMENT '狐豆号',
  `method` tinyint(1) NOT NULL DEFAULT '1' COMMENT '开户方式：1=>激活通行证自动开户，2=>身份信息过审自动开户，3=>开户申请审核通过，4=>后台人工主动开户',
  `platform_id` tinyint(1) NOT NULL DEFAULT '0' COMMENT '平台id',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态：0=>待审核，1=>审核中，2=>审核通过，3=>审核不通过',
  `add_time` int(11) NOT NULL DEFAULT '0' COMMENT '开通时间',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='平台账户开通记录';

-- ----------------------------
-- Table structure for yzb_users_premium_account
-- ----------------------------
DROP TABLE IF EXISTS `yzb_users_premium_account`;
CREATE TABLE `yzb_users_premium_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '用户id',
  `account` varchar(20) NOT NULL DEFAULT '' COMMENT '狐豆靓号',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '账号状态：0=>未使用，1=>使用中',
  `add_time` int(11) NOT NULL DEFAULT '0' COMMENT '添加时间',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COMMENT='用户靓号关联表';

-- ----------------------------
-- Table structure for yzb_users_real_name_authentication_info
-- ----------------------------
DROP TABLE IF EXISTS `yzb_users_real_name_authentication_info`;
CREATE TABLE `yzb_users_real_name_authentication_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_type` char(1) NOT NULL DEFAULT '' COMMENT '用户类型：I=>个人,B=>公司',
  `legal_person_name` varchar(255) NOT NULL COMMENT '法人姓名',
  `legal_person_identity_card_no` varchar(255) DEFAULT NULL COMMENT '法人身份证号码',
  `legal_person_address` varchar(255) CHARACTER SET utf32 DEFAULT '' COMMENT '法人身份证地址',
  `legal_person_identity_card_valid_time_start` int(11) DEFAULT '0' COMMENT '法人身份证有效期起始日期',
  `legal_person_identity_card_valid_time_end` int(11) DEFAULT '0' COMMENT '法人身份证有效期结束日期',
  `positive_photo_of_legal_person_identity_card` varchar(255) DEFAULT NULL COMMENT '法人身份证正面照片',
  `negative_photo_of_legal_person_identity_card` varchar(255) DEFAULT NULL COMMENT '法人身份证反面照片',
  `hand_photo_of_legal_person_identity_card` varchar(255) DEFAULT NULL COMMENT '法人手持身份证正面照片',
  `business_name` varchar(255) DEFAULT NULL COMMENT '营业名称（企业名称）和个人姓名',
  `business_address` varchar(255) DEFAULT NULL COMMENT '营业地址',
  `business_scope` varchar(255) DEFAULT NULL COMMENT '营业范围',
  `business_license_no` varchar(255) DEFAULT NULL COMMENT '营业执照证件号码或身份证号码',
  `business_license_valid_time_start` int(11) DEFAULT '0' COMMENT '营业执照有效期起始日期',
  `business_license_valid_time_end` int(11) DEFAULT '0' COMMENT '营业执照有效期结束日期',
  `business_license_photo` varchar(255) DEFAULT NULL COMMENT '营业执照照片',
  `status` char(20) DEFAULT 'PENDING' COMMENT '实名认证状态,请在代码中控制与user表中的real_name_status保持值一致',
  `status_info` tinyint(1) DEFAULT '0' COMMENT '基本信息状态',
  `status_positive_photo` tinyint(1) DEFAULT '0' COMMENT '法人身份证正面照片认证状态',
  `status_negative_photo` tinyint(1) DEFAULT '0' COMMENT '法人身份证反面照片认证状态',
  `status_business_license_photo` tinyint(1) DEFAULT '0' COMMENT '营业执照正面照片认证状态',
  `submission_of_authentication_ip` varchar(255) DEFAULT NULL,
  `sub_info_authentication_ip` varchar(255) DEFAULT NULL,
  `add_time` int(11) NOT NULL COMMENT '添加时间',
  `edit_time` int(11) DEFAULT NULL,
  `submission_of_authentication_time` int(11) DEFAULT NULL COMMENT '提交实名认证时间',
  `real_name_authentication_finish_time` int(11) DEFAULT NULL COMMENT '完成实名认证时间',
  `info_authentication_finish_time` int(11) DEFAULT NULL COMMENT '基本信息审核完成时间',
  `province_code` varchar(10) DEFAULT NULL,
  `city_code` varchar(10) DEFAULT NULL,
  `district_code` varchar(10) DEFAULT NULL,
  `certification_level` tinyint(1) NOT NULL DEFAULT '0' COMMENT '认证级别',
  `review_status` varchar(20) NOT NULL DEFAULT 'PENDING' COMMENT '审核状态：PENDING=>待审核，SUCCESS=>审核通过，FAIL=>审核不通过',
  `note` varchar(255) NOT NULL DEFAULT '' COMMENT '审核说明',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`),
  UNIQUE KEY `user_type` (`user_type`,`business_license_no`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for yzb_yii_log
-- ----------------------------
DROP TABLE IF EXISTS `yzb_yii_log`;
CREATE TABLE `yzb_yii_log` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `level` int(11) DEFAULT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `log_time` double DEFAULT NULL,
  `prefix` text COLLATE utf8_unicode_ci,
  `message` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `idx_log_level` (`level`),
  KEY `idx_log_category` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=41405 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
