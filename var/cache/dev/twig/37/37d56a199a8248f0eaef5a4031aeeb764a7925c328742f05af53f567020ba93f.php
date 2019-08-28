<?php

/* Passport/Register/accountActivationResult.twig */
class __TwigTemplate_424230f91f4a784bb3f56117f170a30754c53349b6df6f87ff83f64b1f0d3a74 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/Register/accountActivationResult.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/Register/accountActivationResult.twig"));

        // line 1
        echo "<?php
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <title>激活链接已经过期</title>
    <link rel=\"stylesheet\" href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/layui/css/layui.css\" />
    <style type=\"text/css\">
        html,body{height: 100%;min-height: 768px;font:normal normal normal 14px/1.5em \"微软雅黑\", Arial;}

        .wrapper{position: relative; width: 100%;height: calc(100% - 38px); background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/new-default/img/cw-bg.jpg);}
        .wrapper-bg{position: absolute;left: 0;right: 0;bottom: 0; width: 100%;height: 40%;background: #e5e5e5;}
        .error-wrapper{position: fixed;top: 42%; left: 50%; transform: translate(-50%, -50%); width: 1200px;height:590px;background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/new-default/img/cw.png) no-repeat;}
        .error{width: 710px;height: 200px;margin: 270px 0px 0 490px;}
        .error p{display: block;height: auto; color: #555555;}
        .error .ero-title{line-height: 50px; font-size: 26px;color: #6d6c6a;font-weight: bold;letter-spacing:2px;}
        .error .btnGroup{display: block; margin-top: 20px;margin-bottom: 15px; height: 34px;}
        .error .btnGroup a{display: inline-block; padding: 8px 20px;margin-right: 20px;border-radius: 2px; background: #999999;text-decoration: none;color: #FFFFFF;}
        .error .btnGroup a:hover{opacity: .9;}
        .error .feedback{display: inline-block; color: #FF9900;line-height: 20px;cursor: pointer;}
        .error .feedback:hover{opacity: .9;}
        .error .feedback .icon{float: left; margin-right: 3px;font-size: 22px;}

        #foot{position: fixed;bottom: 0;width: 100%; margin: 20px 0;}
        #foot a{color: #16b5ea;}
    </style>
</head>

<body>
<div class=\"wrapper\">
    <div class=\"wrapper-bg\">
        <div class=\"error-wrapper\">
            <div class=\"error\">
                <p class=\"ero-title\">哦噢~~~~...</p>
                <p class=\"ero-title\">您的激活链接已经过期了，如果您账号还需要激活，请点下面的按钮重新发送激活邮件</p>

                <div class=\"btnGroup\">
                    <a href=\"javascript:resend_activation_code('";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["user_id"]) || array_key_exists("user_id", $context) ? $context["user_id"] : (function () { throw new Twig_Error_Runtime('Variable "user_id" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "');\" style=\"background: #00a6de;\">重新发送激活邮件</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id=\"foot\">
    <p>
        <span>&copy;";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['App\Common\Twig\AppExtension']->getParams("system_site_name"), "html", null, true);
        echo " </span>
    </p>
    <p>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 49, $this->source); })()), "system", array()), "beian_info", array()), "html", null, true);
        echo "</p>
</div>

<script>
    function resend_activation_code(userId) {

    }
</script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Passport/Register/accountActivationResult.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 49,  80 => 47,  69 => 39,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <title>激活链接已经过期</title>
    <link rel=\"stylesheet\" href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/layui/css/layui.css\" />
    <style type=\"text/css\">
        html,body{height: 100%;min-height: 768px;font:normal normal normal 14px/1.5em \"微软雅黑\", Arial;}

        .wrapper{position: relative; width: 100%;height: calc(100% - 38px); background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/new-default/img/cw-bg.jpg);}
        .wrapper-bg{position: absolute;left: 0;right: 0;bottom: 0; width: 100%;height: 40%;background: #e5e5e5;}
        .error-wrapper{position: fixed;top: 42%; left: 50%; transform: translate(-50%, -50%); width: 1200px;height:590px;background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/new-default/img/cw.png) no-repeat;}
        .error{width: 710px;height: 200px;margin: 270px 0px 0 490px;}
        .error p{display: block;height: auto; color: #555555;}
        .error .ero-title{line-height: 50px; font-size: 26px;color: #6d6c6a;font-weight: bold;letter-spacing:2px;}
        .error .btnGroup{display: block; margin-top: 20px;margin-bottom: 15px; height: 34px;}
        .error .btnGroup a{display: inline-block; padding: 8px 20px;margin-right: 20px;border-radius: 2px; background: #999999;text-decoration: none;color: #FFFFFF;}
        .error .btnGroup a:hover{opacity: .9;}
        .error .feedback{display: inline-block; color: #FF9900;line-height: 20px;cursor: pointer;}
        .error .feedback:hover{opacity: .9;}
        .error .feedback .icon{float: left; margin-right: 3px;font-size: 22px;}

        #foot{position: fixed;bottom: 0;width: 100%; margin: 20px 0;}
        #foot a{color: #16b5ea;}
    </style>
</head>

<body>
<div class=\"wrapper\">
    <div class=\"wrapper-bg\">
        <div class=\"error-wrapper\">
            <div class=\"error\">
                <p class=\"ero-title\">哦噢~~~~...</p>
                <p class=\"ero-title\">您的激活链接已经过期了，如果您账号还需要激活，请点下面的按钮重新发送激活邮件</p>

                <div class=\"btnGroup\">
                    <a href=\"javascript:resend_activation_code('{{ user_id }}');\" style=\"background: #00a6de;\">重新发送激活邮件</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id=\"foot\">
    <p>
        <span>&copy;{{ 'now'|date('Y') }} {{ params('system_site_name') }} </span>
    </p>
    <p>{{ settings.system.beian_info }}</p>
</div>

<script>
    function resend_activation_code(userId) {

    }
</script>
</body>
</html>
", "Passport/Register/accountActivationResult.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\Register\\accountActivationResult.twig");
    }
}
