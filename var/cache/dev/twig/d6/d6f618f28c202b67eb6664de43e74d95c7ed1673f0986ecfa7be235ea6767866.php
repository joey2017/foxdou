<?php

/* Common/Finance/Balance/add_balance_success.twig */
class __TwigTemplate_72a43a386c507c600c8266b8766b4cb376ffc422b666b0d705522fdc47168371 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/Finance/Balance/add_balance_success.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/Finance/Balance/add_balance_success.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  <title>充值成功 - ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['App\Common\Twig\AppExtension']->getPlatformName(twig_get_attribute($this->env, $this->source, (isset($context["recharge_order"]) || array_key_exists("recharge_order", $context) ? $context["recharge_order"] : (function () { throw new Twig_Error_Runtime('Variable "recharge_order" does not exist.', 6, $this->source); })()), "platform_id", array())), "html", null, true);
        echo "</title>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/js/css/layui.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/nornmalize.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/common.css\"/>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/iconfont/iconfont.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/rechage.css\" />
  <style type=\"text/css\">
    body {background-color: #FFFFFF;}
    .g-head {background-color: rgba(24,166,137,1);}
    .m-head {width: 1000px; margin: 0 auto;}
    .page-content {border: none; width: 1000px; margin: 0 auto;}

    .pay-return-info {width: auto; margin-top: 40px; text-align: center;}
    .pay-return-info .icon {display: block;line-height: 44px; font-size: 44px;}
    .pay-return-info p{padding: 10px 0 30px 0; font-size: 16px;}
    .pay-return-info .layui-btn {margin-bottom: 20px;}
    .success-css {color: #18a689;}
    .fail-css {color: #ff0000;}
  </style>
</head>

<body>
<!-- 头部 -->
<div class=\"g-head\">
  <div class=\"m-head s-head\">
    <!-- LOGO -->
    <div class=\"m-logo\"></div>
    <!-- /LOGO -->
  </div>
</div>
<div class=\"page-content\">
  <div class=\"pay-return-info success-css\">
    <i class=\"icon iconfont icon-zhengque\"></i>
    <p>成功充值 ";
        // line 39
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recharge_order"]) || array_key_exists("recharge_order", $context) ? $context["recharge_order"] : (function () { throw new Twig_Error_Runtime('Variable "recharge_order" does not exist.', 39, $this->source); })()), "amount", array()), 2), "html", null, true);
        echo "元</p>
    <a href=\"javascript:void (0);\" class=\"layui-btn\" onclick=\"window.close();\">关闭页面</a>
  </div>
</div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/Finance/Balance/add_balance_success.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 39,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  <title>充值成功 - {{ platform_name(recharge_order.platform_id) }}</title>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/js/css/layui.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/nornmalize.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/common.css\"/>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/iconfont/iconfont.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/rechage.css\" />
  <style type=\"text/css\">
    body {background-color: #FFFFFF;}
    .g-head {background-color: rgba(24,166,137,1);}
    .m-head {width: 1000px; margin: 0 auto;}
    .page-content {border: none; width: 1000px; margin: 0 auto;}

    .pay-return-info {width: auto; margin-top: 40px; text-align: center;}
    .pay-return-info .icon {display: block;line-height: 44px; font-size: 44px;}
    .pay-return-info p{padding: 10px 0 30px 0; font-size: 16px;}
    .pay-return-info .layui-btn {margin-bottom: 20px;}
    .success-css {color: #18a689;}
    .fail-css {color: #ff0000;}
  </style>
</head>

<body>
<!-- 头部 -->
<div class=\"g-head\">
  <div class=\"m-head s-head\">
    <!-- LOGO -->
    <div class=\"m-logo\"></div>
    <!-- /LOGO -->
  </div>
</div>
<div class=\"page-content\">
  <div class=\"pay-return-info success-css\">
    <i class=\"icon iconfont icon-zhengque\"></i>
    <p>成功充值 {{ recharge_order.amount|number_format(2) }}元</p>
    <a href=\"javascript:void (0);\" class=\"layui-btn\" onclick=\"window.close();\">关闭页面</a>
  </div>
</div>
</body>
</html>", "Common/Finance/Balance/add_balance_success.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Common\\Finance\\Balance\\add_balance_success.twig");
    }
}
