<?php

/* Admin/UserDetail/OpenPlatform/common_tabs.twig */
class __TwigTemplate_da914f889da83c2ccc956171d6a229e7e1d5303632d3932cf3dfef16d63553ff extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/OpenPlatform/common_tabs.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/OpenPlatform/common_tabs.twig"));

        // line 1
        echo "<div class=\"panel-nav-item\">
    <ul class=\"h-tab\">
        <li class=\"";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "finance")) {
            echo "'tab-this'";
        }
        echo "\">
        <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_open_platform_finance", array("id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 4, $this->source); })()))), "html", null, true);
        echo "\">账户概览</a></li>
        <li class=\"";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "trade-logs")) {
            echo "'tab-this'";
        }
        echo "\">
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_open_platform_trade_logs", array("id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 6, $this->source); })()))), "html", null, true);
        echo "\">交易记录</a></li>
        <li class=\"";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "finance-detail")) {
            echo "'tab-this'";
        }
        echo "\">
        <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_open_platform_finance_detail", array("id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 8, $this->source); })()))), "html", null, true);
        echo "\">资金明细</a></li>
        <li class=\"";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "charge-logs")) {
            echo "'tab-this'";
        }
        echo "\">
        <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_open_platform_charge_logs", array("id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 10, $this->source); })()))), "html", null, true);
        echo "\">充值记录</a></li>
    </ul>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/UserDetail/OpenPlatform/common_tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  63 => 9,  59 => 8,  53 => 7,  49 => 6,  43 => 5,  39 => 4,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"panel-nav-item\">
    <ul class=\"h-tab\">
        <li class=\"{% if app.request.get('_route') == 'finance' %}'tab-this'{% endif %}\">
        <a href=\"{{ path('admin_user_details_open_platform_finance',{id:id}) }}\">账户概览</a></li>
        <li class=\"{% if app.request.get('_route') == 'trade-logs' %}'tab-this'{% endif %}\">
        <a href=\"{{ path('admin_user_details_open_platform_trade_logs',{id:id}) }}\">交易记录</a></li>
        <li class=\"{% if app.request.get('_route') == 'finance-detail' %}'tab-this'{% endif %}\">
        <a href=\"{{ path('admin_user_details_open_platform_finance_detail',{id:id}) }}\">资金明细</a></li>
        <li class=\"{% if app.request.get('_route') == 'charge-logs' %}'tab-this'{% endif %}\">
        <a href=\"{{ path('admin_user_details_open_platform_charge_logs',{id:id}) }}\">充值记录</a></li>
    </ul>
</div>", "Admin/UserDetail/OpenPlatform/common_tabs.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\UserDetail\\OpenPlatform\\common_tabs.twig");
    }
}
