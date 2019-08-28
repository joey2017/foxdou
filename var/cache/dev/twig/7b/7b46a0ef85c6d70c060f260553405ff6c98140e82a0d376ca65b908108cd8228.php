<?php

/* Passport/Register/emailActivationFailed.twig */
class __TwigTemplate_735d668c974bc32b34dc38731b135d7bb4535320ae3f53f7a48f2b2a2db5d9bc extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/Register/emailActivationFailed.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/Register/emailActivationFailed.twig"));

        // line 1
        echo "<?php
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <title>激活链接失效</title>
    ";
        // line 8
        echo $this->extensions['App\Common\Twig\AppExtension']->useAssets(array(0 => "/assets/common/layui/css/layui.css"));
        // line 10
        echo "
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
                <p class=\"ero-title\">您的激活链接已经被外星人吃掉了，请重新注册。</p>

                <div class=\"layui-form\">
                    <div class=\"layui-form-item\" style=\"text-align: left;\">
                        <a class=\"layui-btn layui-btn-normal\" style=\"margin-top: 7px;\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("passport_login");
        echo "\">返回</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id=\"foot\">
    <p>
        ";
        // line 52
        echo "    </p>
    <p>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 53, $this->source); })()), "system", array()), "beian_info", array()), "html", null, true);
        echo "</p>
</div>

<script>
</script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Passport/Register/emailActivationFailed.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 53,  86 => 52,  74 => 42,  40 => 10,  38 => 8,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <title>激活链接失效</title>
    {{ use_assets([
        '/assets/common/layui/css/layui.css'
    ]) }}
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
                <p class=\"ero-title\">您的激活链接已经被外星人吃掉了，请重新注册。</p>

                <div class=\"layui-form\">
                    <div class=\"layui-form-item\" style=\"text-align: left;\">
                        <a class=\"layui-btn layui-btn-normal\" style=\"margin-top: 7px;\" href=\"{{ url('passport_login') }}\">返回</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id=\"foot\">
    <p>
        {#<span>&copy;{{ 'now'|date('Y') }} </span>#}
    </p>
    <p>{{ settings.system.beian_info }}</p>
</div>

<script>
</script>
</body>
</html>
", "Passport/Register/emailActivationFailed.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\Register\\emailActivationFailed.twig");
    }
}
