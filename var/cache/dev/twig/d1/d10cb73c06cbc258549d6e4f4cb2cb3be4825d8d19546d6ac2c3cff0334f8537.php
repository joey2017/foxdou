<?php

/* Reseller/Finance/financeTabs.twig */
class __TwigTemplate_777fbe3802d6a8b9e80cdc3737e2fee9af9645cc1dadcd0df959b2911329712a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Finance/financeTabs.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Finance/financeTabs.twig"));

        // line 2
        $context["tabs"] = array(0 => array("name" => "账户概览", "route" => "reseller_finance_index"), 1 => array("name" => "交易记录", "route" => "reseller_finance_trade_logs"), 2 => array("name" => "资金明细", "route" => "reseller_finance_transactions"), 3 => array("name" => "充值记录", "route" => "reseller_finance_funding"));
        // line 9
        echo "
";
        // line 10
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array(), "any", false, true), "resellerAccount", array(), "any", false, true), "agency_type", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array(), "any", false, true), "resellerAccount", array(), "any", false, true), "agency_type", array()), 0)) : (0)) == 2)) {
            // line 11
            echo "  ";
            $context["tabs"] = twig_array_merge((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new Twig_Error_Runtime('Variable "tabs" does not exist.', 11, $this->source); })()), array("name" => "佣金明细", "path" => "/reseller/dashboard/finance/rebate-log"));
        }
        // line 13
        echo "
<div class=\"panel-nav-item\">
  <ul class=\"panel-nav g-bdc\">
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new Twig_Error_Runtime('Variable "tabs" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 17
            echo "      <li class=\"panel-nav-li  ";
            echo (((twig_get_attribute($this->env, $this->source, $context["tab"], "route", array()) == (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new Twig_Error_Runtime('Variable "current_route" does not exist.', 17, $this->source); })()))) ? ("panel-nav-this") : (""));
            echo "\">
        <a href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["tab"], "route", array()));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "name", array()), "html", null, true);
            echo "</a>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
  </ul>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Reseller/Finance/financeTabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 21,  54 => 18,  49 => 17,  45 => 16,  40 => 13,  36 => 11,  34 => 10,  31 => 9,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%
set tabs = [
  {\"name\": \"账户概览\", \"route\": \"reseller_finance_index\"},
  {\"name\": \"交易记录\", \"route\": \"reseller_finance_trade_logs\"},
  {\"name\": \"资金明细\", \"route\": \"reseller_finance_transactions\"},
  {\"name\": \"充值记录\", \"route\": \"reseller_finance_funding\"},
]
%}

{% if app.user.resellerAccount.agency_type|default(0) == 2 %}
  {% set tabs = tabs|merge({\"name\": \"佣金明细\", \"path\": \"/reseller/dashboard/finance/rebate-log\"}) %}
{% endif %}

<div class=\"panel-nav-item\">
  <ul class=\"panel-nav g-bdc\">
    {% for tab in tabs %}
      <li class=\"panel-nav-li  {{ tab.route == current_route ? 'panel-nav-this' : ''}}\">
        <a href=\"{{ path(tab.route) }}\">{{ tab.name }}</a>
      </li>
    {% endfor %}

  </ul>
</div>", "Reseller/Finance/financeTabs.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Finance\\financeTabs.twig");
    }
}
