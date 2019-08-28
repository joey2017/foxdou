<?php

/* Reseller/Common/_topNav.twig */
class __TwigTemplate_2485f663c4ec7f419b211142ef2485af2a8586b7af5e91b689880836acae6935 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Common/_topNav.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Common/_topNav.twig"));

        // line 2
        $context["top_nav"] = array(0 => array("name" => "控制面板", "route" => "reseller_dashboard_index", "icon" => ""), 1 => array("name" => "我的财务", "route" => "reseller_finance_index", "icon" => ""), 2 => array("name" => "我要充值", "route" => "reseller_recharge_mobile_single", "icon" => ""), 3 => array("name" => "我的订单", "route" => "reseller_orders_index", "icon" => ""), 4 => array("name" => "我的商品", "route" => "reseller_product_index", "icon" => ""), 5 => array("name" => "我的营销", "route" => "reseller_affiliate_index", "icon" => ""));
        // line 11
        echo "<ul class=\"m-head-title f-tac\">
  ";
        // line 12
        $context["current_path"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "request", array()), "pathinfo", array());
        // line 13
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["top_nav"]) || array_key_exists("top_nav", $context) ? $context["top_nav"] : (function () { throw new Twig_Error_Runtime('Variable "top_nav" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 14
            echo "    ";
            $context["url"] = $this->extensions['App\Common\Twig\AppExtension']->getMenuPath($context["menu"]);
            // line 15
            echo "    <li>
      <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "\" class=\"head-nav ";
            echo ((twig_in_filter((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 16, $this->source); })()), (isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new Twig_Error_Runtime('Variable "current_path" does not exist.', 16, $this->source); })()))) ? ("head-nav-this") : (""));
            echo "\">
        ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "name", array()), "html", null, true);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</ul>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Reseller/Common/_topNav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 21,  53 => 17,  47 => 16,  44 => 15,  41 => 14,  36 => 13,  34 => 12,  31 => 11,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%
  set top_nav = [
    {'name': '控制面板', 'route': 'reseller_dashboard_index','icon': '',},
    {'name': '我的财务', 'route': 'reseller_finance_index','icon': '',},
    {'name': '我要充值', 'route': 'reseller_recharge_mobile_single','icon': '',},
    {'name': '我的订单', 'route': 'reseller_orders_index','icon': '',},
    {'name': '我的商品', 'route': 'reseller_product_index','icon': '',},
    {'name': '我的营销', 'route': 'reseller_affiliate_index','icon': '',}
  ]
%}
<ul class=\"m-head-title f-tac\">
  {% set current_path = app.request.pathinfo %}
  {% for menu in top_nav %}
    {% set url = menu_path(menu) %}
    <li>
      <a href=\"{{ url }}\" class=\"head-nav {{ url in current_path ? 'head-nav-this' : '' }}\">
        {{ menu.name }}
      </a>
    </li>
  {% endfor %}
</ul>
", "Reseller/Common/_topNav.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Common\\_topNav.twig");
    }
}
