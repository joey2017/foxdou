<?php

/* /Passport/Tool/safe_tool_common_left.twig */
class __TwigTemplate_fafe2fde7a46b270d2a49b2a3029808fa2cf41d7a7f213ea9ce23ac161cf7260 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Passport/Tool/safe_tool_common_left.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Passport/Tool/safe_tool_common_left.twig"));

        // line 1
        echo "<div class=\"sildrtitle\">
    <em></em>
    密保工具箱
</div>
";
        // line 5
        $context["tool_type"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->source); })()), "request", array()), "get", array(0 => "type"), "method");
        // line 6
        echo "<ul class=\"silderlist\">
    <li class=\"";
        // line 7
        if ((((isset($context["tool_type"]) || array_key_exists("tool_type", $context) ? $context["tool_type"] : (function () { throw new Twig_Error_Runtime('Variable "tool_type" does not exist.', 7, $this->source); })()) == "email") || ((isset($context["tool_type"]) || array_key_exists("tool_type", $context) ? $context["tool_type"] : (function () { throw new Twig_Error_Runtime('Variable "tool_type" does not exist.', 7, $this->source); })()) == "question"))) {
            echo " ";
        } else {
            echo "link-this";
        }
        echo "\">
        <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_tool_index");
        echo "\">密保手机</a>
    </li>
    <li class=\"";
        // line 10
        if (((isset($context["tool_type"]) || array_key_exists("tool_type", $context) ? $context["tool_type"] : (function () { throw new Twig_Error_Runtime('Variable "tool_type" does not exist.', 10, $this->source); })()) == "email")) {
            echo "link-this";
        }
        echo "\">
        <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_tool_index", array("type" => "email"));
        echo "\">密保邮箱</a>
    </li>
    <li  class=\"";
        // line 13
        if (((isset($context["tool_type"]) || array_key_exists("tool_type", $context) ? $context["tool_type"] : (function () { throw new Twig_Error_Runtime('Variable "tool_type" does not exist.', 13, $this->source); })()) == "question")) {
            echo "link-this";
        }
        echo "\">
        <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_tool_index", array("type" => "question"));
        echo "\">密保问题</a>
    </li>
</ul>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/Passport/Tool/safe_tool_common_left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  64 => 13,  59 => 11,  53 => 10,  48 => 8,  40 => 7,  37 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sildrtitle\">
    <em></em>
    密保工具箱
</div>
{% set tool_type = app.request.get('type') %}
<ul class=\"silderlist\">
    <li class=\"{% if tool_type == 'email' or tool_type == 'question' %} {% else %}link-this{% endif %}\">
        <a href=\"{{ path('passport_tool_index') }}\">密保手机</a>
    </li>
    <li class=\"{% if tool_type == 'email' %}link-this{% endif %}\">
        <a href=\"{{ path('passport_tool_index',{'type':'email'}) }}\">密保邮箱</a>
    </li>
    <li  class=\"{% if tool_type == 'question' %}link-this{% endif %}\">
        <a href=\"{{ path('passport_tool_index',{'type':'question'}) }}\">密保问题</a>
    </li>
</ul>

", "/Passport/Tool/safe_tool_common_left.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\Tool\\safe_tool_common_left.twig");
    }
}
