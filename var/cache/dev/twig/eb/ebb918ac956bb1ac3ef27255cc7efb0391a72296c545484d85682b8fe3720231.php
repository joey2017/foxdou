<?php

/* Admin/User/tabs.twig */
class __TwigTemplate_d7be739fba4cb8e4bf11e160c1bbddb3e81f187673941ae8df10d33fed4622ec extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/User/tabs.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/User/tabs.twig"));

        // line 1
        $context["current_route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 2
        $context["tabs"] = (((isset($context["tabs"]) || array_key_exists("tabs", $context))) ? (_twig_default_filter((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new Twig_Error_Runtime('Variable "tabs" does not exist.', 2, $this->source); })()), twig_get_array_keys_filter(twig_constant("App\\Platform::PLATFORMS")))) : (twig_get_array_keys_filter(twig_constant("App\\Platform::PLATFORMS"))));
        // line 3
        echo "<div class=\"tabs-container\">
  <ul class=\"nav nav-tabs\" id=\"platform_tabs\">
    ";
        // line 5
        $context["current_tab"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->source); })()), "request", array()), "get", array(0 => "tab", 1 => ""), "method");
        // line 6
        echo "    ";
        if (twig_in_filter(0, (isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new Twig_Error_Runtime('Variable "tabs" does not exist.', 6, $this->source); })()))) {
            // line 7
            echo "      <li class=\"";
            echo ((("" == (isset($context["current_tab"]) || array_key_exists("current_tab", $context) ? $context["current_tab"] : (function () { throw new Twig_Error_Runtime('Variable "current_tab" does not exist.', 7, $this->source); })()))) ? ("active") : (""));
            echo "\" data-tab=\"\">
        <a href=\"";
            // line 8
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new Twig_Error_Runtime('Variable "current_route" does not exist.', 8, $this->source); })()));
            echo "\">全部</a>
      </li>
    ";
        }
        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_constant("App\\Platform::PLATFORMS"));
        foreach ($context['_seq'] as $context["id"] => $context["name"]) {
            // line 12
            echo "      ";
            if (twig_in_filter($context["id"], (isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new Twig_Error_Runtime('Variable "tabs" does not exist.', 12, $this->source); })()))) {
                // line 13
                echo "      <li class=\"";
                echo ((($context["id"] == (isset($context["current_tab"]) || array_key_exists("current_tab", $context) ? $context["current_tab"] : (function () { throw new Twig_Error_Runtime('Variable "current_tab" does not exist.', 13, $this->source); })()))) ? ("active") : (""));
                echo "\" data-tab=\"";
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "\">
        <a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new Twig_Error_Runtime('Variable "current_route" does not exist.', 14, $this->source); })()), array("tab" => $context["id"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</a>
      </li>
      ";
            }
            // line 17
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  </ul>
  <div class=\"tab-content m-b\">
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/User/tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 18,  76 => 17,  68 => 14,  61 => 13,  58 => 12,  53 => 11,  47 => 8,  42 => 7,  39 => 6,  37 => 5,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set current_route = app.request.attributes.get('_route') %}
{% set tabs = tabs|default(constant(\"App\\\\Platform::PLATFORMS\")|keys) %}
<div class=\"tabs-container\">
  <ul class=\"nav nav-tabs\" id=\"platform_tabs\">
    {% set current_tab = app.request.get('tab', '') %}
    {% if 0 in tabs %}
      <li class=\"{{ '' == current_tab ? 'active' : '' }}\" data-tab=\"\">
        <a href=\"{{ path(current_route) }}\">全部</a>
      </li>
    {% endif %}
    {% for id, name in constant('App\\\\Platform::PLATFORMS') %}
      {% if id in tabs %}
      <li class=\"{{ id == current_tab ? 'active' : '' }}\" data-tab=\"{{ id }}\">
        <a href=\"{{ path(current_route, {'tab': id}) }}\">{{ name }}</a>
      </li>
      {% endif %}
    {% endfor %}
  </ul>
  <div class=\"tab-content m-b\">
  </div>
</div>
", "Admin/User/tabs.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\User\\tabs.twig");
    }
}
