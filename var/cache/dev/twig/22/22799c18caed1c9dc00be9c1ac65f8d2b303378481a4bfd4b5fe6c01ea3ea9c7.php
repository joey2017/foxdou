<?php

/* Reseller/Frontpage/top-nav.twig */
class __TwigTemplate_f44c121fccd16fd058d5b91e26c8dcec8fde8e5b16722414d02f762e002b6dc2 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Frontpage/top-nav.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Frontpage/top-nav.twig"));

        // line 2
        $context["top_nav"] = array(0 => array("name" => "首页", "path" => "/reseller"), 1 => array("name" => "最新公告", "path" => "/reseller/announcements"), 2 => array("name" => "招商加盟", "path" => "/reseller/affiliates"), 3 => array("name" => "常见问题", "path" => "/reseller/faq"));
        // line 9
        $context["current_path"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->source); })()), "request", array()), "pathinfo", array());
        // line 10
        echo "<ul class=\"agent-nav-ul\">
  ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["top_nav"]) || array_key_exists("top_nav", $context) ? $context["top_nav"] : (function () { throw new Twig_Error_Runtime('Variable "top_nav" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
            // line 12
            echo "    ";
            $context["is_current"] = (twig_get_attribute($this->env, $this->source, $context["nav"], "path", array()) == (isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new Twig_Error_Runtime('Variable "current_path" does not exist.', 12, $this->source); })()));
            // line 13
            echo "    <li class=\"agent-nav-li ";
            echo (((isset($context["is_current"]) || array_key_exists("is_current", $context) ? $context["is_current"] : (function () { throw new Twig_Error_Runtime('Variable "is_current" does not exist.', 13, $this->source); })())) ? ("link-this") : (""));
            echo "\">
      <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "path", array()), "html", null, true);
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
        return "Reseller/Frontpage/top-nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 21,  53 => 16,  48 => 14,  43 => 13,  40 => 12,  36 => 11,  33 => 10,  31 => 9,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%
set top_nav = [
  {\"name\": \"首页\",    \"path\": \"/reseller\"},
  {\"name\": \"最新公告\", \"path\": \"/reseller/announcements\"},
  {\"name\": \"招商加盟\", \"path\": \"/reseller/affiliates\"},
  {\"name\": \"常见问题\", \"path\": \"/reseller/faq\"},
]
%}
{% set current_path = app.request.pathinfo %}
<ul class=\"agent-nav-ul\">
  {% for nav in top_nav %}
    {% set is_current = nav.path == current_path %}
    <li class=\"agent-nav-li {{ is_current ? 'link-this' : '' }}\">
      <a href=\"{{ nav.path }}\">
        <span class=\"link-bg link-bg-l\"></span>
        <span class=\"txt\">{{ nav.name }}</span>
        <span class=\"link-bg link-bg-r\"></span>
      </a>
    </li>
  {% endfor %}
</ul>", "Reseller/Frontpage/top-nav.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Frontpage\\top-nav.twig");
    }
}
