<?php

/* /Passport/Protect/index.twig */
class __TwigTemplate_e7c92677de4fccc3f9ec0c281ac7bbb5ce9c5a3a8f35d72004a874078178f7ec extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/Passport/layout.twig", "/Passport/Protect/index.twig", 1);
        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
            'js_end' => array($this, 'block_js_end'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/Passport/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Passport/Protect/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Passport/Protect/index.twig"));

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
    .page-content{padding: 0;}
     div:after{height: auto}
    .sildrtitle em{background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/css/img/t1.png) no-repeat;}
    .banner-info{background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/css/img/a1.png) no-repeat;}

    .div-content{width: 460px;}
    .div-group{background: #F8F8F8;}
    .div-ico{background: none;}
    .btn{width: 88px;}
    .btn-green{background-color: #82D660;color: #FBFAFA;border-color: #F5F7F5}
    .btn-orange{background-color: #F3C14D;color: #FBFAFA;border-color: #F5F7F5}
</style>
<div class=\"page-content\">
    <div class=\"sildebar\">
        <div class=\"sildrtitle\">
            <em></em>
            帐号保护
        </div>
        <ul class=\"silderlist\">
            <li class=\"link-this\">
                <a href=\"\">帐号保护</a>
            </li>
            <li>
                <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_identity_management_index");
        echo "\">实名认证</a>
            </li>
        </ul>
    </div>
    <div class=\"mainbar\">
        <h2 class=\"title\">资金保护</h2>
        <div style=\"padding: 10px 20px;\">
            <div class=\"div-group\">
                <div class=\"div-ico\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/i2.png\" /></div>
                <div class=\"div-content\">
                    <h3>支付密码</h3>
                    <p class=\"f-cl-gray\">付款或修改账户信息时输入，保护账户资金安全</p>
                </div>
                <div class=\"div-btn\">
                    <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_safe_center_identity_verify_way", array("type" => "4"));
        echo "\" class=\"btn\">修改</a>
                </div>
            </div>
            <div class=\"div-group\">
                <div class=\"div-ico\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/i5.png\" /></div>
                <div class=\"div-content\">
                    <h3>余额支付</h3>
                    <p class=\"f-cl-gray\">余额支付功能：";
        // line 48
        if ((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 48, $this->source); })())) {
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 48, $this->source); })()), "pay_status", array()) == "1")) ? ("开") : ("关"));
        }
        echo "</p>
                </div>
                <div class=\"div-btn\">
                    ";
        // line 51
        if (((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 51, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 51, $this->source); })()), "pay_status", array()) == "1"))) {
            // line 52
            echo "                        <a href=\"\" class=\"btn \">关闭</a>
                        ";
        } else {
            // line 54
            echo "                        <a href=\"\" class=\"btn btn-orange\">开启</a>
                    ";
        }
        // line 56
        echo "                </div>
            </div>
            <div class=\"div-group\">
                <div class=\"div-ico\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/i6.png\" /></div>
                <div class=\"div-content\">
                    <h3>狐豆安全风控</h3>
                    <p class=\"f-cl-gray\">能实时监控您的账户和交易异常，一旦发现异常，会及时通知到您</p>
                </div>
                <div class=\"div-btn\">
                    <a href=\"\" class=\"btn btn-green\">保护中</a>
                </div>
            </div>
            <div class=\"div-group\">
                <div class=\"div-ico\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/i7.png\" /></div>
                <div class=\"div-content\">
                    <h3>数字证书</h3>
                    <p class=\"f-cl-gray\">数字证书已升级为智能安全防护系统，保护你的账户安全</p>
                </div>
                <div class=\"div-btn\">
                    <a href=\"\" class=\"btn btn-green\">保护中</a>
                </div>
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

    // line 87
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 88
        echo "<script type=\"text/javascript\">
    \$('.sildebar').height(\$('.mainbar').height());
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/Passport/Protect/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 88,  165 => 87,  125 => 56,  121 => 54,  117 => 52,  115 => 51,  107 => 48,  97 => 41,  80 => 27,  54 => 3,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '/Passport/layout.twig' %}
{% block main_content %}
<style type=\"text/css\">
    .page-content{padding: 0;}
     div:after{height: auto}
    .sildrtitle em{background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/css/img/t1.png) no-repeat;}
    .banner-info{background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/css/img/a1.png) no-repeat;}

    .div-content{width: 460px;}
    .div-group{background: #F8F8F8;}
    .div-ico{background: none;}
    .btn{width: 88px;}
    .btn-green{background-color: #82D660;color: #FBFAFA;border-color: #F5F7F5}
    .btn-orange{background-color: #F3C14D;color: #FBFAFA;border-color: #F5F7F5}
</style>
<div class=\"page-content\">
    <div class=\"sildebar\">
        <div class=\"sildrtitle\">
            <em></em>
            帐号保护
        </div>
        <ul class=\"silderlist\">
            <li class=\"link-this\">
                <a href=\"\">帐号保护</a>
            </li>
            <li>
                <a href=\"{{ path('passport_identity_management_index') }}\">实名认证</a>
            </li>
        </ul>
    </div>
    <div class=\"mainbar\">
        <h2 class=\"title\">资金保护</h2>
        <div style=\"padding: 10px 20px;\">
            <div class=\"div-group\">
                <div class=\"div-ico\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/i2.png\" /></div>
                <div class=\"div-content\">
                    <h3>支付密码</h3>
                    <p class=\"f-cl-gray\">付款或修改账户信息时输入，保护账户资金安全</p>
                </div>
                <div class=\"div-btn\">
                    <a href=\"{{ path('passport_safe_center_identity_verify_way',{'type':'4'}) }}\" class=\"btn\">修改</a>
                </div>
            </div>
            <div class=\"div-group\">
                <div class=\"div-ico\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/i5.png\" /></div>
                <div class=\"div-content\">
                    <h3>余额支付</h3>
                    <p class=\"f-cl-gray\">余额支付功能：{% if user %}{{ user.pay_status == '1' ? '开' : '关' }}{% endif %}</p>
                </div>
                <div class=\"div-btn\">
                    {% if user and user.pay_status == '1' %}
                        <a href=\"\" class=\"btn \">关闭</a>
                        {% else %}
                        <a href=\"\" class=\"btn btn-orange\">开启</a>
                    {% endif %}
                </div>
            </div>
            <div class=\"div-group\">
                <div class=\"div-ico\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/i6.png\" /></div>
                <div class=\"div-content\">
                    <h3>狐豆安全风控</h3>
                    <p class=\"f-cl-gray\">能实时监控您的账户和交易异常，一旦发现异常，会及时通知到您</p>
                </div>
                <div class=\"div-btn\">
                    <a href=\"\" class=\"btn btn-green\">保护中</a>
                </div>
            </div>
            <div class=\"div-group\">
                <div class=\"div-ico\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/i7.png\" /></div>
                <div class=\"div-content\">
                    <h3>数字证书</h3>
                    <p class=\"f-cl-gray\">数字证书已升级为智能安全防护系统，保护你的账户安全</p>
                </div>
                <div class=\"div-btn\">
                    <a href=\"\" class=\"btn btn-green\">保护中</a>
                </div>
            </div>
        </div>
        <h2 class=\"title\">常见问题</h2>
        <div class=\"problem\">
            无
        </div>
    </div>

</div>
{% endblock %}
{% block js_end %}
<script type=\"text/javascript\">
    \$('.sildebar').height(\$('.mainbar').height());
</script>
{% endblock %}
", "/Passport/Protect/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\Protect\\index.twig");
    }
}
