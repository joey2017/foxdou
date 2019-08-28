<?php

/* Passport/Register/emailActivationSuccess.twig */
class __TwigTemplate_92633544316bd314c07c900aff824e9d081437585bfea05597c31a0d1de63992 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/Register/emailActivationSuccess.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/Register/emailActivationSuccess.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>邮件验证通过 - 狐豆通行证</title>
    ";
        // line 6
        echo $this->extensions['App\Common\Twig\AppExtension']->useAssets(array(0 => "/assets/common/js/jquery.min.js", 1 => "/assets/common/layui/css/layui.css", 2 => "/assets/passport/css/login.css"));
        // line 10
        echo "

    <style>
        .layadmin-user-login-main {
            width: 650px;
            margin: 0 auto;
            box-sizing: border-box;
        }
        .layadmin-user-login-header p {
            color: #000;
        }
    </style>
</head>

<body>
<div class=\"layadmin-tabspage-none\">
    <div class=\"layadmin-user-login layadmin-user-display-show\">
        <div class=\"layadmin-user-login-main\">
            <div class=\"layadmin-user-login-box layadmin-user-login-header\">
                <h2>邮箱地址验证</h2>
                <p>您的账号 ";
        // line 30
        echo $this->extensions['App\Common\Twig\AppExtension']->maskEmail(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 30, $this->source); })()), "user", array()), "email", array()));
        echo " 已经验证成功，现在可以使用您的邮箱和密码来登录账户了</p>
            </div>
            <div class=\"layadmin-user-login-box layadmin-user-login-body layui-form\">
                <div class=\"layui-form-item\" style=\"text-align: center;\">
                    <a class=\"layui-btn layui-btn-normal\" style=\"margin-top: 7px;\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, (((isset($context["target_url"]) || array_key_exists("target_url", $context) ? $context["target_url"] : (function () { throw new Twig_Error_Runtime('Variable "target_url" does not exist.', 34, $this->source); })())) ? ((isset($context["target_url"]) || array_key_exists("target_url", $context) ? $context["target_url"] : (function () { throw new Twig_Error_Runtime('Variable "target_url" does not exist.', 34, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("passport_login"))), "html", null, true);
        echo "\">下一步，登录账户</a>
                </div>
            </div>
        </div>
        <div class=\"layui-trans layadmin-user-login-footer\">
            <p>
                &copy; 2018 &nbsp;
                <a href=\"http://www.foxdou.cn\">foxdou.cn</a>
                <span>广西你行我动科技有限公司</span>
            </p>
        </div>
    </div>
</div>

<script>
    function show_input_box() {
        \$('#email-input-box').show();
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
        return "Passport/Register/emailActivationSuccess.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 34,  60 => 30,  38 => 10,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>邮件验证通过 - 狐豆通行证</title>
    {{ use_assets([
        '/assets/common/js/jquery.min.js',
        '/assets/common/layui/css/layui.css',
        '/assets/passport/css/login.css',
    ])}}

    <style>
        .layadmin-user-login-main {
            width: 650px;
            margin: 0 auto;
            box-sizing: border-box;
        }
        .layadmin-user-login-header p {
            color: #000;
        }
    </style>
</head>

<body>
<div class=\"layadmin-tabspage-none\">
    <div class=\"layadmin-user-login layadmin-user-display-show\">
        <div class=\"layadmin-user-login-main\">
            <div class=\"layadmin-user-login-box layadmin-user-login-header\">
                <h2>邮箱地址验证</h2>
                <p>您的账号 {{ app.user.email|mask_email }} 已经验证成功，现在可以使用您的邮箱和密码来登录账户了</p>
            </div>
            <div class=\"layadmin-user-login-box layadmin-user-login-body layui-form\">
                <div class=\"layui-form-item\" style=\"text-align: center;\">
                    <a class=\"layui-btn layui-btn-normal\" style=\"margin-top: 7px;\" href=\"{{ target_url ? target_url : url('passport_login') }}\">下一步，登录账户</a>
                </div>
            </div>
        </div>
        <div class=\"layui-trans layadmin-user-login-footer\">
            <p>
                &copy; 2018 &nbsp;
                <a href=\"http://www.foxdou.cn\">foxdou.cn</a>
                <span>广西你行我动科技有限公司</span>
            </p>
        </div>
    </div>
</div>

<script>
    function show_input_box() {
        \$('#email-input-box').show();
    }
</script>

</body>
</html>

", "Passport/Register/emailActivationSuccess.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\Register\\emailActivationSuccess.twig");
    }
}
