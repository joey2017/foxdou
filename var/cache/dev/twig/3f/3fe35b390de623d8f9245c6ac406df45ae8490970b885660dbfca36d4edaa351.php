<?php

/* Admin/Order/tabs.twig */
class __TwigTemplate_0e971bdc5c92393d5489a96bd20d8e7d26185f6cb42b741e7aa124a1c69a91d0 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Order/tabs.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Order/tabs.twig"));

        // line 1
        $context["current_tab"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "request", array()), "get", array(0 => "tab", 1 => ""), "method");
        // line 2
        echo "
<ul class=\"nav nav-tabs\">
  <li class=\"";
        // line 4
        echo ((((isset($context["current_tab"]) || array_key_exists("current_tab", $context) ? $context["current_tab"] : (function () { throw new Twig_Error_Runtime('Variable "current_tab" does not exist.', 4, $this->source); })()) == "")) ? ("active") : (""));
        echo "\">
    <a href=\"?\">
      全部订单
    </a>
  </li>
  ";
        // line 9
        $context["cates"] = twig_constant("App\\Constants::PRODUCT_CATEGORIES");
        // line 10
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cates"]) || array_key_exists("cates", $context) ? $context["cates"] : (function () { throw new Twig_Error_Runtime('Variable "cates" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["id"] => $context["cate_id"]) {
            // line 11
            echo "    <li class=\"";
            echo ((((isset($context["current_tab"]) || array_key_exists("current_tab", $context) ? $context["current_tab"] : (function () { throw new Twig_Error_Runtime('Variable "current_tab" does not exist.', 11, $this->source); })()) == $context["id"])) ? ("active") : (""));
            echo "\">
    <a  href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_recharge", array("tab" => $context["id"])), "html", null, true);
            echo "\" >
      ";
            // line 13
            echo twig_escape_filter($this->env, $context["cate_id"], "html", null, true);
            echo "
    </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['cate_id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</ul>
<div class=\"tab-content m-b\">
  <div id=\"tab-1\" class=\"tab-pane active\">
    <div class=\"panel-body\">
      <a class=\"a-nav btn btn-primary\" href=\"javascript:void (0);\" value=\"\">全部</a>
      ";
        // line 22
        if (twig_in_filter((isset($context["current_tab"]) || array_key_exists("current_tab", $context) ? $context["current_tab"] : (function () { throw new Twig_Error_Runtime('Variable "current_tab" does not exist.', 22, $this->source); })()), array(0 => 1, 1 => 4, 2 => 10))) {
            // line 23
            echo "        ";
            $context["carriers"] = twig_constant("App\\Constants::CARRIERS");
            // line 24
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["carriers"]) || array_key_exists("carriers", $context) ? $context["carriers"] : (function () { throw new Twig_Error_Runtime('Variable "carriers" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["id"] => $context["name"]) {
                // line 25
                echo "          <a class=\"a-nav \" href=\"javascript:void (0);\" value=\"";
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "      ";
        }
        // line 28
        echo "    </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Order/tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 28,  97 => 27,  86 => 25,  81 => 24,  78 => 23,  76 => 22,  69 => 17,  59 => 13,  55 => 12,  50 => 11,  45 => 10,  43 => 9,  35 => 4,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set current_tab = app.request.get('tab', '') %}

<ul class=\"nav nav-tabs\">
  <li class=\"{{ current_tab == '' ? 'active' : ''}}\">
    <a href=\"?\">
      全部订单
    </a>
  </li>
  {% set cates = constant('App\\\\Constants::PRODUCT_CATEGORIES') %}
  {% for id, cate_id in cates %}
    <li class=\"{{ current_tab == id ? 'active' : '' }}\">
    <a  href=\"{{ path('admin_orders_recharge', {'tab': id}) }}\" >
      {{ cate_id }}
    </a>
    </li>
  {% endfor %}
</ul>
<div class=\"tab-content m-b\">
  <div id=\"tab-1\" class=\"tab-pane active\">
    <div class=\"panel-body\">
      <a class=\"a-nav btn btn-primary\" href=\"javascript:void (0);\" value=\"\">全部</a>
      {% if current_tab in [1, 4, 10] %}
        {% set carriers = constant('App\\\\Constants::CARRIERS') %}
        {% for id, name in carriers %}
          <a class=\"a-nav \" href=\"javascript:void (0);\" value=\"{{ id }}\">{{ name }}</a>
        {% endfor %}
      {% endif %}
    </div>
  </div>
</div>
", "Admin/Order/tabs.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\Order\\tabs.twig");
    }
}
