<?php

/* Reseller/Home/top-nav.twig */
class __TwigTemplate_5d130637b209a70d407e54332a24e09c4b59d222a08dabce02d373e159cba83a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Home/top-nav.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Home/top-nav.twig"));

        // line 2
        $context["top_nav"] = array(0 => array("name" => "首页", "route" => "reseller_home"), 1 => array("name" => "最新公告", "route" => "reseller_home_announcements"), 2 => array("name" => "招商加盟", "route" => "reseller_home_recruitment"), 3 => array("name" => "常见问题", "route" => "reseller_home_faqs"));
        // line 9
        echo "
<ul class=\"agent-nav-ul\">
  ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["top_nav"]) || array_key_exists("top_nav", $context) ? $context["top_nav"] : (function () { throw new Twig_Error_Runtime('Variable "top_nav" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
            // line 12
            echo "    ";
            $context["is_current"] = (twig_get_attribute($this->env, $this->source, $context["nav"], "route", array()) == (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new Twig_Error_Runtime('Variable "current_route" does not exist.', 12, $this->source); })()));
            // line 13
            echo "    <li class=\"agent-nav-li ";
            echo (((isset($context["is_current"]) || array_key_exists("is_current", $context) ? $context["is_current"] : (function () { throw new Twig_Error_Runtime('Variable "is_current" does not exist.', 13, $this->source); })())) ? ("link-this") : (""));
            echo "\">
      <a href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["nav"], "route", array()));
            echo "\">
        <span class=\"link-bg link-bg-l\"></span>
        <span class=\"txt\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "name", array()), "html", null, true);
            echo "</span>
        <span class=\"link-bg link-bg-r\"></span>
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</ul>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Reseller/Home/top-nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 21,  52 => 16,  47 => 14,  42 => 13,  39 => 12,  35 => 11,  31 => 9,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%
set top_nav = [
  {\"name\": \"首页\",    \"route\": \"reseller_home\"},
  {\"name\": \"最新公告\", \"route\": \"reseller_home_announcements\"},
  {\"name\": \"招商加盟\", \"route\": \"reseller_home_recruitment\"},
  {\"name\": \"常见问题\", \"route\": \"reseller_home_faqs\"},
]
%}

<ul class=\"agent-nav-ul\">
  {% for nav in top_nav %}
    {% set is_current = nav.route == current_route %}
    <li class=\"agent-nav-li {{ is_current ? 'link-this' : '' }}\">
      <a href=\"{{ path(nav.route) }}\">
        <span class=\"link-bg link-bg-l\"></span>
        <span class=\"txt\">{{ nav.name }}</span>
        <span class=\"link-bg link-bg-r\"></span>
      </a>
    </li>
  {% endfor %}
</ul>", "Reseller/Home/top-nav.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Home\\top-nav.twig");
    }
}
