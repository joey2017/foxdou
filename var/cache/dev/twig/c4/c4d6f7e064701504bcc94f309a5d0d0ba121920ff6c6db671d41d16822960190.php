<?php

/* /Passport/Tool/safe_tool_email.twig */
class __TwigTemplate_ca8e79d706b908a8fde34be0cb1b12d025b862fd8a316596529117d446b3e83c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/Passport/layout.twig", "/Passport/Tool/safe_tool_email.twig", 1);
        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/Passport/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Passport/Tool/safe_tool_email.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Passport/Tool/safe_tool_email.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 3
        echo "<style type=\"text/css\">
    .page-content{height: 740px; padding: 0;}
    .sildrtitle em{background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/css/img/t1.png) no-repeat;}
</style>
<div class=\"page-content\">
    <div class=\"sildebar\">
        ";
        // line 9
        $this->loadTemplate("/Passport/Tool/safe_tool_common_left.twig", "/Passport/Tool/safe_tool_email.twig", 9)->display($context);
        // line 10
        echo "    </div>
    <div class=\"mainbar\">
        <h2 class=\"title\">密保邮箱</h2>
        <div class=\"banner-info\">
            <div class=\"text\">
                ";
        // line 15
        if ((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 16, $this->source); })()), "bind_email", array())) {
                // line 17
                echo "                        <style type=\"text/css\">.banner-info{background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/css/img/a2.png) no-repeat;}</style>
                        您已绑定邮箱，如需更换邮箱请点击下方按钮“修改邮箱”。
                        <a href=\"";
                // line 19
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_safe_center_identity_verify_way", array("type" => 2));
                echo "\">修改邮箱</a>
                    ";
            } else {
                // line 21
                echo "                        <style type=\"text/css\">.banner-info{background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/css/img/a2-2.png) no-repeat;}</style>
                        可通过绑定接收异常通知、找回帐号密码等。为了您的账户安全，请及时绑定邮箱帐号
                        <a href=\"";
                // line 23
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_safe_center_identity_verify_way", array("type" => 7));
                echo "\">绑定邮箱</a>
                    ";
            }
            // line 25
            echo "                ";
        } else {
            // line 26
            echo "                    <style type=\"text/css\">.banner-info{background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/css/img/a2-2.png) no-repeat;}</style>
                    可通过绑定接收异常通知、找回帐号密码等。登录后可查看您的账户是否已绑定邮箱。
                    <a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_home_index");
            echo "\">请登录后操作</a>
                ";
        }
        // line 30
        echo "            </div>

        </div>
        <h2 class=\"title\">温馨提示</h2>
        <div class=\"problem\" style=\"height: 150px;\">
            <p>邮箱停用或无法收到邮件的情况下若需要修改邮箱帐号，可在点击修改邮箱之后选择其他身份验证方式，也可以联系在线客服为您解决。</p>
        </div>
        <h2 class=\"title\">常见问题</h2>
        <div class=\"problem\">
            无
        </div>
    </div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/Passport/Tool/safe_tool_email.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  100 => 28,  96 => 26,  93 => 25,  88 => 23,  84 => 21,  79 => 19,  75 => 17,  72 => 16,  70 => 15,  63 => 10,  61 => 9,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '/Passport/layout.twig' %}
{% block main_content %}
<style type=\"text/css\">
    .page-content{height: 740px; padding: 0;}
    .sildrtitle em{background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/css/img/t1.png) no-repeat;}
</style>
<div class=\"page-content\">
    <div class=\"sildebar\">
        {% include \"/Passport/Tool/safe_tool_common_left.twig\" %}
    </div>
    <div class=\"mainbar\">
        <h2 class=\"title\">密保邮箱</h2>
        <div class=\"banner-info\">
            <div class=\"text\">
                {% if user %}
                    {% if user.bind_email %}
                        <style type=\"text/css\">.banner-info{background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/css/img/a2.png) no-repeat;}</style>
                        您已绑定邮箱，如需更换邮箱请点击下方按钮“修改邮箱”。
                        <a href=\"{{ path('passport_safe_center_identity_verify_way',{'type':2}) }}\">修改邮箱</a>
                    {% else %}
                        <style type=\"text/css\">.banner-info{background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/css/img/a2-2.png) no-repeat;}</style>
                        可通过绑定接收异常通知、找回帐号密码等。为了您的账户安全，请及时绑定邮箱帐号
                        <a href=\"{{ path('passport_safe_center_identity_verify_way',{'type':7}) }}\">绑定邮箱</a>
                    {% endif %}
                {% else %}
                    <style type=\"text/css\">.banner-info{background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/css/img/a2-2.png) no-repeat;}</style>
                    可通过绑定接收异常通知、找回帐号密码等。登录后可查看您的账户是否已绑定邮箱。
                    <a href=\"{{ path('passport_home_index') }}\">请登录后操作</a>
                {% endif %}
            </div>

        </div>
        <h2 class=\"title\">温馨提示</h2>
        <div class=\"problem\" style=\"height: 150px;\">
            <p>邮箱停用或无法收到邮件的情况下若需要修改邮箱帐号，可在点击修改邮箱之后选择其他身份验证方式，也可以联系在线客服为您解决。</p>
        </div>
        <h2 class=\"title\">常见问题</h2>
        <div class=\"problem\">
            无
        </div>
    </div>

</div>
{% endblock %}

", "/Passport/Tool/safe_tool_email.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\Tool\\safe_tool_email.twig");
    }
}
