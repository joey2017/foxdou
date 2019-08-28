<?php

/* Admin/Audit/tabs.twig */
class __TwigTemplate_63602e0f7a8190bb975fc84d44ba09d74310e9146db075925503c12cef94353f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Audit/tabs.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Audit/tabs.twig"));

        // line 1
        echo "<div class=\"tabs-container\">
    <ul class=\"nav nav-tabs\">
        <li class=\" ";
        // line 3
        if (((isset($context["platform_id"]) || array_key_exists("platform_id", $context) ? $context["platform_id"] : (function () { throw new Twig_Error_Runtime('Variable "platform_id" does not exist.', 3, $this->source); })()) == 0)) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_users_info");
        echo "\">身份信息</a></li>
        <li class=\"";
        // line 4
        if (((isset($context["platform_id"]) || array_key_exists("platform_id", $context) ? $context["platform_id"] : (function () { throw new Twig_Error_Runtime('Variable "platform_id" does not exist.', 4, $this->source); })()) == 5)) {
            echo "active";
        }
        echo "\"><a  href=\"\">代理商</a></li>
        <li class=\"";
        // line 5
        if (((isset($context["platform_id"]) || array_key_exists("platform_id", $context) ? $context["platform_id"] : (function () { throw new Twig_Error_Runtime('Variable "platform_id" does not exist.', 5, $this->source); })()) == 2)) {
            echo "active";
        }
        echo "\"><a  href=\"\">开放平台</a></li>
        <li class=\"";
        // line 6
        if (((isset($context["platform_id"]) || array_key_exists("platform_id", $context) ? $context["platform_id"] : (function () { throw new Twig_Error_Runtime('Variable "platform_id" does not exist.', 6, $this->source); })()) == 3)) {
            echo "active";
        }
        echo "\"><a  href=\"\" aria-expanded=\"false\">供应商</a></li>
        <li class=\"";
        // line 7
        if (((isset($context["platform_id"]) || array_key_exists("platform_id", $context) ? $context["platform_id"] : (function () { throw new Twig_Error_Runtime('Variable "platform_id" does not exist.', 7, $this->source); })()) == 4)) {
            echo "active";
        }
        echo "\"><a  href=\"\" aria-expanded=\"false\">商城卖家</a></li>
    </ul>
    <div class=\"tab-content m-b\">

    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Audit/tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 7,  53 => 6,  47 => 5,  41 => 4,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"tabs-container\">
    <ul class=\"nav nav-tabs\">
        <li class=\" {% if platform_id == 0 %}active{% endif %}\"><a href=\"{{ path('admin_audit_users_info') }}\">身份信息</a></li>
        <li class=\"{% if platform_id == 5 %}active{% endif %}\"><a  href=\"\">代理商</a></li>
        <li class=\"{% if platform_id == 2 %}active{% endif %}\"><a  href=\"\">开放平台</a></li>
        <li class=\"{% if platform_id == 3 %}active{% endif %}\"><a  href=\"\" aria-expanded=\"false\">供应商</a></li>
        <li class=\"{% if platform_id == 4 %}active{% endif %}\"><a  href=\"\" aria-expanded=\"false\">商城卖家</a></li>
    </ul>
    <div class=\"tab-content m-b\">

    </div>
</div>", "Admin/Audit/tabs.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\Audit\\tabs.twig");
    }
}
