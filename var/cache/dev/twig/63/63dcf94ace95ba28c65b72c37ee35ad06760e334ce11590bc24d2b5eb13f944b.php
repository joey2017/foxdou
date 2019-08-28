<?php

/* Common/_carriers.twig */
class __TwigTemplate_b3674f186141500031593a2947900f203377274c9f374d836482fe058acfb6c3 extends Twig_Template
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

        // line 1
        $context["carriers"] = twig_constant("App\\Constants::CARRIERS");
        // line 2
        $context["current_carrier"] = (((isset($context["current_carrier"]) || array_key_exists("current_carrier", $context))) ? (_twig_default_filter((isset($context["current_carrier"]) || array_key_exists("current_carrier", $context) ? $context["current_carrier"] : (function () { throw new Twig_Error_Runtime('Variable "current_carrier" does not exist.', 2, $this->source); })()), 1)) : (1));
        // line 3
        echo "
<div class=\"m-tab-item\">
  <ul class=\"m-tab\" id=\"isp_list\">
    <li class=\"tab-this isp_item \" data-id=\"\"><a href=\"javascript:void(0);\" >全部</a></li>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carriers"]) || array_key_exists("carriers", $context) ? $context["carriers"] : (function () { throw new Twig_Error_Runtime('Variable "carriers" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["id"] => $context["name"]) {
            // line 8
            echo "      ";
            $context["params"] = array("carrier" => (isset($context["current_carrier"]) || array_key_exists("current_carrier", $context) ? $context["current_carrier"] : (function () { throw new Twig_Error_Runtime('Variable "current_carrier" does not exist.', 8, $this->source); })()));
            // line 9
            echo "    <li class=\"isp_item ";
            echo ((($context["id"] == (isset($context["current_carrier"]) || array_key_exists("current_carrier", $context) ? $context["current_carrier"] : (function () { throw new Twig_Error_Runtime('Variable "current_carrier" does not exist.', 9, $this->source); })()))) ? ("layui-this") : (""));
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">
      <a href=\"javascript:void(0);\" >";
            // line 10
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</a>
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  </ul>
</div>
<script>
    \$('li.isp_item').click(function () {
        \$(this).addClass('tab-this');
        \$(this).siblings().removeClass('tab-this');
        var isp_id = \$(this).data('id');
        \$('#isp_id').val(isp_id === undefined ? '' : isp_id);

        if(get_data) {
            get_data();
        }else if(reload_table) {
            reload_table();
        }
    });
</script>";
        
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
        return array (  62 => 13,  53 => 10,  46 => 9,  43 => 8,  39 => 7,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set carriers = constant('App\\\\Constants::CARRIERS') %}
{% set current_carrier = current_carrier|default(1) %}

<div class=\"m-tab-item\">
  <ul class=\"m-tab\" id=\"isp_list\">
    <li class=\"tab-this isp_item \" data-id=\"\"><a href=\"javascript:void(0);\" >全部</a></li>
    {% for id, name in carriers %}
      {% set params = {\"carrier\": current_carrier} %}
    <li class=\"isp_item {{ id == current_carrier ? \"layui-this\" : \"\" }}\" data-id=\"{{ id }}\">
      <a href=\"javascript:void(0);\" >{{ name }}</a>
    </li>
    {% endfor %}
  </ul>
</div>
<script>
    \$('li.isp_item').click(function () {
        \$(this).addClass('tab-this');
        \$(this).siblings().removeClass('tab-this');
        var isp_id = \$(this).data('id');
        \$('#isp_id').val(isp_id === undefined ? '' : isp_id);

        if(get_data) {
            get_data();
        }else if(reload_table) {
            reload_table();
        }
    });
</script>", "Common/_carriers.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Common\\_carriers.twig");
    }
}
