<?php

/* Common/_carriers.twig */
class __TwigTemplate_a0632a11ce025634d940693015504a3d21ae5132f0c0c73ee2311d89c2363307 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/_carriers.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/_carriers.twig"));

        // line 2
        $context["carriers"] = array(0 => array("name" => "移动", "value" => 1), 1 => array("name" => "联通", "value" => 2), 2 => array("name" => "电信", "value" => 3), 3 => array("name" => "虚商", "value" => 4));
        // line 9
        $context["current_carrier"] = (((isset($context["current_carrier"]) || array_key_exists("current_carrier", $context))) ? (_twig_default_filter((isset($context["current_carrier"]) || array_key_exists("current_carrier", $context) ? $context["current_carrier"] : (function () { throw new Twig_Error_Runtime('Variable "current_carrier" does not exist.', 9, $this->source); })()), 1)) : (1));
        // line 10
        echo "
<div class=\"m-tab-item\">
  <ul class=\"m-tab\" id=\"icp\">
    <li class=\"tab-this\" value=\"\"><a href=\"javascript:void(0);\" >全部</a></li>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carriers"]) || array_key_exists("carriers", $context) ? $context["carriers"] : (function () { throw new Twig_Error_Runtime('Variable "carriers" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 15
            echo "      ";
            $context["params"] = array("carrier" => (isset($context["current_carrier"]) || array_key_exists("current_carrier", $context) ? $context["current_carrier"] : (function () { throw new Twig_Error_Runtime('Variable "current_carrier" does not exist.', 15, $this->source); })()));
            // line 16
            echo "    <li class=\"";
            echo (((twig_get_attribute($this->env, $this->source, $context["c"], "value", array()) == (isset($context["current_carrier"]) || array_key_exists("current_carrier", $context) ? $context["current_carrier"] : (function () { throw new Twig_Error_Runtime('Variable "current_carrier" does not exist.', 16, $this->source); })()))) ? ("layui-this") : (""));
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "value", array()), "html", null, true);
            echo "\">
      ";
            // line 18
            echo "      <a href=\"javascript:void(0);\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", array()), "html", null, true);
            echo "</a>
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "  </ul>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/_carriers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 21,  53 => 18,  46 => 16,  43 => 15,  39 => 14,  33 => 10,  31 => 9,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%
set carriers = [
  {\"name\": \"移动\", \"value\": 1, },
  {\"name\": \"联通\", \"value\": 2, },
  {\"name\": \"电信\", \"value\": 3, },
  {\"name\": \"虚商\", \"value\": 4, },
]
%}
{% set current_carrier = current_carrier|default(1) %}

<div class=\"m-tab-item\">
  <ul class=\"m-tab\" id=\"icp\">
    <li class=\"tab-this\" value=\"\"><a href=\"javascript:void(0);\" >全部</a></li>
    {% for c in carriers %}
      {% set params = {\"carrier\": current_carrier} %}
    <li class=\"{{ c.value == current_carrier ? \"layui-this\" : \"\" }}\" value=\"{{ c.value }}\">
      {#<a href=\"?cate_id={{ current_cate }}&carrier={{ c.value }}\" >{{ c.name }}</a>#}
      <a href=\"javascript:void(0);\" >{{ c.name }}</a>
    </li>
    {% endfor %}
  </ul>
</div>
", "Common/_carriers.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Common\\_carriers.twig");
    }
}
