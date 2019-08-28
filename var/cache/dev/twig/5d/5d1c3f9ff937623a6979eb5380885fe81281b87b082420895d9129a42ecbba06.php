<?php

/* /Passport/Tool/safe_tool_question.twig */
class __TwigTemplate_0e39a4bfce645431fa17e36de947200f995429e2d4a9fb06bb0c7efeacd551a3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/Passport/layout.twig", "/Passport/Tool/safe_tool_question.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Passport/Tool/safe_tool_question.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Passport/Tool/safe_tool_question.twig"));

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
    .banner-info{background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/css/img/a3.png) no-repeat;}
    .problem .text{clear: both; margin-top: 10px; padding: 15px 15px 15px 70px;
        background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/rk1.png) no-repeat; background-color: #F5F5F5; background-position: 10px; color: #666666;}
</style>
<div class=\"page-content\">
    <div class=\"sildebar\">
        ";
        // line 12
        $this->loadTemplate("/Passport/Tool/safe_tool_common_left.twig", "/Passport/Tool/safe_tool_question.twig", 12)->display($context);
        // line 13
        echo "    </div>
    <div class=\"mainbar\">
        <h2 class=\"title\">密保问题</h2>
        <div class=\"banner-info\">
            <div class=\"text\">
                ";
        // line 18
        if ((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 19, $this->source); })()), "bind_mobile", array())) {
                // line 20
                echo "                        在进行重要操作时可选择通过密保问题进行身份验证。您已设置了3个密保问题，如需修改密保问题请点击下方按钮“修改密保问题”。
                        <a href=\"";
                // line 21
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_safe_center_identity_verify_way", array("type" => 16));
                echo "\">修改密保问题</a>
                    ";
            } else {
                // line 23
                echo "                        在进行重要操作时可选择通过密保问题进行身份验证。您可以现在设置密保问题。
                        <a href=\"";
                // line 24
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_safe_center_identity_verify_way", array("type" => 15));
                echo "\">创建密保问题</a>
                    ";
            }
            // line 26
            echo "                ";
        } else {
            // line 27
            echo "                    在进行重要操作时可选择通过密保问题进行身份验证，登录后可查看您的账户是否已设置密保问题。
                    <a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_home_index");
            echo "\">请登录后操作</a>
                ";
        }
        // line 30
        echo "            </div>


        </div>
        <h2 class=\"title\">风险提示</h2>
        <div class=\"problem\" style=\"height: 150px;\">
            <p>密保问题有什么局限？</p>
            <div class=\"text\">
                密保问题采用静态密码，易引起安全风险，如果您不在常用地登录，可能无法通过它完成身份验证。<br />
                推荐使用：<a style=\"color: #2F86F6;float: none\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_tool_index");
        echo "\">密保手机</a>
            </div>
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
        return "/Passport/Tool/safe_tool_question.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 39,  105 => 30,  100 => 28,  97 => 27,  94 => 26,  89 => 24,  86 => 23,  81 => 21,  78 => 20,  75 => 19,  73 => 18,  66 => 13,  64 => 12,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '/Passport/layout.twig' %}
{% block main_content %}
<style type=\"text/css\">
    .page-content{height: 740px; padding: 0;}
    .sildrtitle em{background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/css/img/t1.png) no-repeat;}
    .banner-info{background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/css/img/a3.png) no-repeat;}
    .problem .text{clear: both; margin-top: 10px; padding: 15px 15px 15px 70px;
        background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/rk1.png) no-repeat; background-color: #F5F5F5; background-position: 10px; color: #666666;}
</style>
<div class=\"page-content\">
    <div class=\"sildebar\">
        {% include \"/Passport/Tool/safe_tool_common_left.twig\" %}
    </div>
    <div class=\"mainbar\">
        <h2 class=\"title\">密保问题</h2>
        <div class=\"banner-info\">
            <div class=\"text\">
                {% if user %}
                    {% if user.bind_mobile %}
                        在进行重要操作时可选择通过密保问题进行身份验证。您已设置了3个密保问题，如需修改密保问题请点击下方按钮“修改密保问题”。
                        <a href=\"{{ path('passport_safe_center_identity_verify_way',{'type':16}) }}\">修改密保问题</a>
                    {% else %}
                        在进行重要操作时可选择通过密保问题进行身份验证。您可以现在设置密保问题。
                        <a href=\"{{ path('passport_safe_center_identity_verify_way',{'type':15}) }}\">创建密保问题</a>
                    {% endif %}
                {% else %}
                    在进行重要操作时可选择通过密保问题进行身份验证，登录后可查看您的账户是否已设置密保问题。
                    <a href=\"{{ path('passport_home_index') }}\">请登录后操作</a>
                {% endif %}
            </div>


        </div>
        <h2 class=\"title\">风险提示</h2>
        <div class=\"problem\" style=\"height: 150px;\">
            <p>密保问题有什么局限？</p>
            <div class=\"text\">
                密保问题采用静态密码，易引起安全风险，如果您不在常用地登录，可能无法通过它完成身份验证。<br />
                推荐使用：<a style=\"color: #2F86F6;float: none\" href=\"{{ path('passport_tool_index') }}\">密保手机</a>
            </div>
        </div>
        <h2 class=\"title\">常见问题</h2>
        <div class=\"problem\">
            无
        </div>
    </div>
</div>
{% endblock %}

", "/Passport/Tool/safe_tool_question.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\Tool\\safe_tool_question.twig");
    }
}
