<?php

/* Passport/Register/register.twig */
class __TwigTemplate_c82a595811ea3605d3147466ade7db88d31a032e1947e3abf05e53a3ab5f19b9 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/Register/register.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/Register/register.twig"));

        // line 1
        $this->loadTemplate("/Passport/Register/register__header.twig", "Passport/Register/register.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"register-main\">
    <div class=\"register-main-bgimg\">
        <div class=\"register-title\">
            <h2>注册</h2>
        </div>
        <p class=\"register-pro\"></p>
        <div style=\"margin: auto;\">
            <ul class=\"register-warp\" style=\"\">
                <li class=\"register-item\">
                    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_register_individual");
        echo "\">
                        <h2 class=\"clearfloat\">
                            <em class=\"reg-icon-1\"></em>
                            <span>个人注册</span>
                        </h2>
                        <p>一个身份证只能注册一个帐号</p>
                    </a>
                </li>
                <li class=\"register-item\">
                    <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_register_business");
        echo "\">
                        <h2 class=\"clearfloat\">
                            <em class=\"reg-icon-2\"></em>
                            <span>企业注册</span>
                        </h2>
                        <p>注册企业帐号需要人工审核后才能登录，请务必填写真实资料</p>
                    </a>
                </li>
              ";
        // line 30
        echo "              ";
        // line 31
        echo "              ";
        // line 32
        echo "              ";
        // line 33
        echo "              ";
        // line 34
        echo "              ";
        // line 35
        echo "              ";
        // line 36
        echo "              ";
        // line 37
        echo "              ";
        // line 38
        echo "            </ul>
        </div>
    </div>
</div>

";
        // line 43
        $this->loadTemplate("/Passport/Register/register__footer.twig", "Passport/Register/register.twig", 43)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Passport/Register/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 43,  82 => 38,  80 => 37,  78 => 36,  76 => 35,  74 => 34,  72 => 33,  70 => 32,  68 => 31,  66 => 30,  55 => 21,  43 => 12,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include \"/Passport/Register/register__header.twig\" %}

<div class=\"register-main\">
    <div class=\"register-main-bgimg\">
        <div class=\"register-title\">
            <h2>注册</h2>
        </div>
        <p class=\"register-pro\"></p>
        <div style=\"margin: auto;\">
            <ul class=\"register-warp\" style=\"\">
                <li class=\"register-item\">
                    <a href=\"{{ path('passport_register_individual') }}\">
                        <h2 class=\"clearfloat\">
                            <em class=\"reg-icon-1\"></em>
                            <span>个人注册</span>
                        </h2>
                        <p>一个身份证只能注册一个帐号</p>
                    </a>
                </li>
                <li class=\"register-item\">
                    <a href=\"{{ path('passport_register_business') }}\">
                        <h2 class=\"clearfloat\">
                            <em class=\"reg-icon-2\"></em>
                            <span>企业注册</span>
                        </h2>
                        <p>注册企业帐号需要人工审核后才能登录，请务必填写真实资料</p>
                    </a>
                </li>
              {#<li class=\"register-item\">#}
              {#<a href=\"{{ path('passport_register', {'type': 'E'}) }}\">#}
              {#<h2 class=\"clearfloat\" style=\"width: 190px;\">#}
              {#<em class=\"reg-icon-3\"></em>#}
              {#<span>个体工商户注册</span>#}
              {#</h2>#}
              {#<p>注册个体户帐号需要人工审核后才能登录，请务必填写真实资料</p>#}
              {#</a>#}
              {#</li>#}
            </ul>
        </div>
    </div>
</div>

{% include \"/Passport/Register/register__footer.twig\" %}
", "Passport/Register/register.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\Register\\register.twig");
    }
}
