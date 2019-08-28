<?php

/* Passport/Register/register__header.twig */
class __TwigTemplate_2d14ed40756856c0326942e0ada4178d9eedc99f47d31dc56eb001b4d69b055d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/Register/register__header.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/Register/register__header.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  <title>用户注册 - ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['App\Common\Twig\AppExtension']->getParams("site_name"), "html", null, true);
        echo "</title>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/common-register.css\"/>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/register.css\"/>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/font-icon.css\"/>
  ";
        // line 11
        echo "  ";
        // line 12
        echo "  ";
        echo $this->extensions['App\Common\Twig\AppExtension']->useAssets(array(0 => "/assets/common/layui/css/layui.css"));
        // line 14
        echo "


  ";
        // line 17
        $context["city_picker_js"] = (((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->source); })()), "environment", array()) == "dev")) ? ("city-picker-dev.js") : ("city-picker.js"));
        // line 18
        echo "
  ";
        // line 19
        echo $this->extensions['App\Common\Twig\AppExtension']->useAssets(array(0 => "/assets/common/js/jquery.min.js", 1 => "/assets/common/layui/layui.all.js", 2 => "/assets/common/js/jquery.serializejson.js", 3 => "/assets/common/js/common-verify.js", 4 => ("/assets/common/components/city-picker/" .         // line 24
(isset($context["city_picker_js"]) || array_key_exists("city_picker_js", $context) ? $context["city_picker_js"] : (function () { throw new Twig_Error_Runtime('Variable "city_picker_js" does not exist.', 24, $this->source); })())), 5 => "/assets/passport/js/passwdverify.js"));
        // line 26
        echo "


  <script>
      //服务协议
      function agreement() {
          layer.open({
              title:    '服务协议',
              type:     1,
              closeBtn: 1,
              area:     ['800px', '600px'], //宽高
              skin:     'layui-layer-rim',
              btn:      ['我已阅读'],
              content:  \$('#agreements'),
              yes:      function (index, layero) {
                  parent.\$(\"#agree\").attr('checked', true);
                  layer.close(index);
              }
          });
      }

      /**
       *发送手机/邮箱验证码
       * @param type mobile|email
       * @param img_verify_code 图形验证码
       * @param target 发送目标/手机号码或邮箱帐号
       */
      function send_code(type, img_verify_code, target) {
          var url;
          var post_data;
          if (type === 'mobile') {
              if (!target || \$('#bind_mobile').attr('check')) {
                  layer.msg('请填写正确的手机号码');
                  return false;
              }
              url       = '";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("common_sms_verifier_send_sms");
        echo "';
              post_data = {mobile: target, recaptcha: img_verify_code, type: 'user_login'};
          } else if (type === 'email') {
              if (!target) {
                  layer.msg('请填写正确的邮箱');
                  return false;
              }
              url       = '";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("common_sms_verifier_send_verify_code_by_email");
        echo "';
              post_data = {email: target, recaptcha: img_verify_code, type: 'user_login'};
          } else {
              layer.msg('错误的验证类型：' + type);
              return false;
          }
          if (!img_verify_code || img_verify_code === '' || img_verify_code === undefined) {
              layer.msg('请填写正确的图形验证码');
              return false;
          }

          \$.post(url, post_data,
              function (data, status) {
                  if (!data.status) {
                      layer.msg('发送失败！' + data.msg);
                      \$('.verify_img').attr('src', '";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("common_recaptcha_index");
        echo "?&' + Math.random());
                      return false;
                  }
                  layer.msg('发送成功');
                  if (type === 'mobile') {
                      setCountDown(\$('#mobile-button'), \$('#mobile-time'), \$('#mobile-time-span'));
                  } else if (type === 'email') {
                      setCountDown(\$('#email-button'), \$('#email-time'), \$('#email-time-span'));
                  }
              }, 'json');
      }

      function register_success(content) {
          layer.open({
              title:    '注册成功',
              type:     1,
              closeBtn: 1,
              area:     ['400px', '300px'], //宽高
              skin:     'layui-layer-rim',
              btn:      ['现在就去登录'],
              content:  content,
              yes:      function (index, layero) {
                  window.location = '";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("login");
        echo "';
              }
          });

      }
  </script>

  <style>
  </style>
</head>

<body>
<div class=\"login-top-item\">
  <div class=\"login-top\">
    <div class=\"login-logo\"></div>
    <div class=\"top-page-name\"><span>&bull;&nbsp;&nbsp;</span>注册</div>
    <div class=\"login-logo-right\">已有帐号,<a href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("login");
        echo "\" class=\"s-blue\">请登录</a></div>
  </div>
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Passport/Register/register__header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 121,  151 => 105,  126 => 83,  108 => 68,  98 => 61,  61 => 26,  59 => 24,  58 => 19,  55 => 18,  53 => 17,  48 => 14,  45 => 12,  43 => 11,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  <title>用户注册 - {{ params('site_name') }}</title>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/common-register.css\"/>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/register.css\"/>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/font-icon.css\"/>
  {#{{ use_asset('/assets/passport/css/register-common.css') }}#}
  {#{{ use_asset('/assets/passport/css/register.css') }}#}
  {{ use_assets([
    '/assets/common/layui/css/layui.css',
  ]) }}


  {% set city_picker_js = app.environment == 'dev' ? \"city-picker-dev.js\" : \"city-picker.js\" %}

  {{ use_assets([
    '/assets/common/js/jquery.min.js',
    '/assets/common/layui/layui.all.js',
    '/assets/common/js/jquery.serializejson.js',
    '/assets/common/js/common-verify.js',
    '/assets/common/components/city-picker/' ~ city_picker_js,
    '/assets/passport/js/passwdverify.js',
  ]) }}


  <script>
      //服务协议
      function agreement() {
          layer.open({
              title:    '服务协议',
              type:     1,
              closeBtn: 1,
              area:     ['800px', '600px'], //宽高
              skin:     'layui-layer-rim',
              btn:      ['我已阅读'],
              content:  \$('#agreements'),
              yes:      function (index, layero) {
                  parent.\$(\"#agree\").attr('checked', true);
                  layer.close(index);
              }
          });
      }

      /**
       *发送手机/邮箱验证码
       * @param type mobile|email
       * @param img_verify_code 图形验证码
       * @param target 发送目标/手机号码或邮箱帐号
       */
      function send_code(type, img_verify_code, target) {
          var url;
          var post_data;
          if (type === 'mobile') {
              if (!target || \$('#bind_mobile').attr('check')) {
                  layer.msg('请填写正确的手机号码');
                  return false;
              }
              url       = '{{ url('common_sms_verifier_send_sms') }}';
              post_data = {mobile: target, recaptcha: img_verify_code, type: 'user_login'};
          } else if (type === 'email') {
              if (!target) {
                  layer.msg('请填写正确的邮箱');
                  return false;
              }
              url       = '{{ url('common_sms_verifier_send_verify_code_by_email') }}';
              post_data = {email: target, recaptcha: img_verify_code, type: 'user_login'};
          } else {
              layer.msg('错误的验证类型：' + type);
              return false;
          }
          if (!img_verify_code || img_verify_code === '' || img_verify_code === undefined) {
              layer.msg('请填写正确的图形验证码');
              return false;
          }

          \$.post(url, post_data,
              function (data, status) {
                  if (!data.status) {
                      layer.msg('发送失败！' + data.msg);
                      \$('.verify_img').attr('src', '{{ path('common_recaptcha_index') }}?&' + Math.random());
                      return false;
                  }
                  layer.msg('发送成功');
                  if (type === 'mobile') {
                      setCountDown(\$('#mobile-button'), \$('#mobile-time'), \$('#mobile-time-span'));
                  } else if (type === 'email') {
                      setCountDown(\$('#email-button'), \$('#email-time'), \$('#email-time-span'));
                  }
              }, 'json');
      }

      function register_success(content) {
          layer.open({
              title:    '注册成功',
              type:     1,
              closeBtn: 1,
              area:     ['400px', '300px'], //宽高
              skin:     'layui-layer-rim',
              btn:      ['现在就去登录'],
              content:  content,
              yes:      function (index, layero) {
                  window.location = '{{ url('login') }}';
              }
          });

      }
  </script>

  <style>
  </style>
</head>

<body>
<div class=\"login-top-item\">
  <div class=\"login-top\">
    <div class=\"login-logo\"></div>
    <div class=\"top-page-name\"><span>&bull;&nbsp;&nbsp;</span>注册</div>
    <div class=\"login-logo-right\">已有帐号,<a href=\"{{ url('login') }}\" class=\"s-blue\">请登录</a></div>
  </div>
</div>

", "Passport/Register/register__header.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\Register\\register__header.twig");
    }
}
