<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('zh_CN', array (
  'security' => 
  array (
    'An authentication exception occurred.' => '身份验证发生异常。',
    'Authentication credentials could not be found.' => '没有找到身份验证的凭证。',
    'Authentication request could not be processed due to a system problem.' => '由于系统故障，身份验证的请求无法被处理。',
    'Invalid credentials.' => '无效的凭证。',
    'Cookie has already been used by someone else.' => 'Cookie 已经被其他人使用。',
    'Not privileged to request the resource.' => '没有权限请求此资源。',
    'Invalid CSRF token.' => '无效的 CSRF token 。',
    'No authentication provider found to support the authentication token.' => '没有找到支持此 token 的身份验证服务提供方。',
    'No session available, it either timed out or cookies are not enabled.' => 'Session 不可用。会话超时或没有启用 cookies 。',
    'No token could be found.' => '找不到 token 。',
    'Username could not be found.' => '找不到用户名。',
    'Account has expired.' => '帐号已过期。',
    'Credentials have expired.' => '凭证已过期。',
    'Account is disabled.' => '帐号已被禁用。',
    'Account is locked.' => '帐号已被锁定。',
  ),
  'OneupUploaderBundle' => 
  array (
    'error.maxsize' => '文件大小超出限制',
    'error.whitelist' => '不支持上传此类型文件',
    'error.blacklist' => '此类型文件已经被管理员禁止上传',
  ),
  'messages' => 
  array (
    'Bad credentials.' => '登录失败：用户名或密码不正确',
    'Invalid credentials.' => '登录失败：用户名或密码不正确',
    'Account is disabled.' => '此账号已被封禁，请勿尝试登陆',
    'Account is locked.' => '此账号已经锁定，请勿尝试登陆',
    'Invalid CSRF token.' => '安全验证失败，请刷新页面后重新提交',
    'email_not_verified' => '您的邮箱尚未验证，请验证邮箱后再登录',
    'validation.errors.required' => '此项为必填项',
    'validation.errors.email' => 'Email 地址格式错误',
    'validation.errors.url' => 'URL 地址格式错误',
    'validation.errors.date' => '日期格式错误',
    'validation.errors.date_time' => '日期时间日期格式错误',
    'validation.errors.number' => '数字格式错误',
    'validation.errors.digit' => '只能输入数字',
    'validation.errors.equals_to' => '请再次输入相同的值',
    'validation.errors.max_length' => '最多 %argument% 个字符',
    'validation.errors.min_length' => '最少要 %argument% 个字符',
    'validation.errors.max' => '不能大于 %argument%',
    'validation.errors.min' => '不能小于 %argument%',
    'validation.errors.csrf' => '安全验证失败，请刷新页面后重新提交',
    'validation.errors.decimal' => '数字格式错误',
    'validation.errors.enum' => '请选择合法的值',
    'validation.errors.mobile' => '手机号格式错误',
    'validation.errors.id_card' => '身份证号格式错误',
    'validation.errors.alpha_dash' => '只允许输入字母、下划线 _ 和减号 -',
    'validation.errors.alpha_numeric' => '只允许输入字母和数字',
    'validation.errors.alpha' => '只允许输入字母',
    'validation.errors.base64' => 'Base64格式错误',
    'validation.errors.exact_length' => '能且仅能输入 %argument% 个字符',
    'validation.errors.integer' => '格式错误，只允许输入整数',
    'validation.errors.numeric' => '数字格式错误',
    'validation.errors.regex' => '格式错误，请检查',
  ),
));

$catalogueZh = new MessageCatalogue('zh', array (
  'validation-errors' => 
  array (
    'validation.errors.required' => '此项为必填项',
    'validation.errors.email' => 'Email 地址格式错误',
    'validation.errors.url' => 'URL 地址格式错误',
    'validation.errors.date' => '日期格式错误',
    'validation.errors.date_time' => '日期时间日期格式错误',
    'validation.errors.number' => '数字格式错误',
    'validation.errors.digit' => '只能输入数字',
    'validation.errors.equals_to' => '请再次输入相同的值',
    'validation.errors.max_length' => '最多 %argument% 个字符',
    'validation.errors.min_length' => '最少要 %argument% 个字符',
    'validation.errors.max' => '不能大于 %argument%',
    'validation.errors.min' => '不能小于 %argument%',
    'validation.errors.csrf' => '安全验证失败，请刷新页面后重新提交',
    'validation.errors.decimal' => '数字格式错误',
    'validation.errors.enum' => '请选择合法的值',
    'validation.errors.mobile' => '手机号格式错误',
    'validation.errors.id_card' => '身份证号格式错误',
    'validation.errors.alpha_dash' => '只允许输入字母、下划线 _ 和减号 -',
    'validation.errors.alpha_numeric' => '只允许输入字母和数字',
    'validation.errors.alpha' => '只允许输入字母',
    'validation.errors.base64' => 'Base64格式错误',
    'validation.errors.exact_length' => '能且仅能输入 %argument% 个字符',
    'validation.errors.integer' => '格式错误，只允许输入整数',
    'validation.errors.numeric' => '数字格式错误',
    'validation.errors.regex' => '格式错误，请检查',
  ),
));
$catalogue->addFallbackCatalogue($catalogueZh);

return $catalogue;
