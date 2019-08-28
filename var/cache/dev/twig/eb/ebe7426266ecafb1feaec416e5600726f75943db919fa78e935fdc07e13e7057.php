<?php

/* Reseller/Common/_leftNav.twig */
class __TwigTemplate_b6e402d8417b5314e16ab73f01b8446663ff4476756744975caffdc579e86667 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Common/_leftNav.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Common/_leftNav.twig"));

        // line 1
        echo "<div class=\"m-left-head\">
  <div class=\"head-img\">
    <a href=\"/user-info/index\" title=\"查看账户信息\">
      <img class=\"user_head_portrait\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/img/default-head-portrait.jpg\" onerror=\"this.src='//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/img/default-head-portrait.jpg'\"/>
    </a>
  </div>
  <div class=\"user\">
    <p>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 8, $this->source); })()), "nick_name", array()), "html", null, true);
        echo "</p>
    <pre>I'm Boss</pre>
  </div>
</div>
<div class=\"m-side-nav\">
  <div class=\"nav\">
    ";
        // line 14
        $context["icon_idx"] = 1;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["left_nav"]) || array_key_exists("left_nav", $context) ? $context["left_nav"] : (function () { throw new Twig_Error_Runtime('Variable "left_nav" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
            // line 16
            echo "      ";
            // line 17
            echo "      ";
            $context["url"] = $this->extensions['App\Common\Twig\AppExtension']->getMenuPath($context["nav"]);
            // line 18
            echo "      ";
            $context["is_current"] = false;
            // line 19
            echo "      ";
            // line 20
            echo "      <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ((((twig_get_attribute($this->env, $this->source, $context["nav"], "target", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["nav"], "target", array()), "")) : (""))) ? ((("target=\"" . twig_get_attribute($this->env, $this->source, $context["nav"], "target", array())) . "\"")) : ("")), "html", null, true);
            echo "
         class=\"nav-title ";
            // line 21
            echo (((isset($context["is_current"]) || array_key_exists("is_current", $context) ? $context["is_current"] : (function () { throw new Twig_Error_Runtime('Variable "is_current" does not exist.', 21, $this->source); })())) ? ("nav-title-this") : (""));
            echo "\">
        <i class=\"iconfont icon-nav icon-nav-";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["icon_idx"]) || array_key_exists("icon_idx", $context) ? $context["icon_idx"] : (function () { throw new Twig_Error_Runtime('Variable "icon_idx" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["nav"], "icon", array());
            echo "</i>
        <span class=\"f-fs-16\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "name", array()), "html", null, true);
            echo "</span>
      </a>
      ";
            // line 25
            $context["icon_idx"] = ((isset($context["icon_idx"]) || array_key_exists("icon_idx", $context) ? $context["icon_idx"] : (function () { throw new Twig_Error_Runtime('Variable "icon_idx" does not exist.', 25, $this->source); })()) + 1);
            // line 26
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "  </div>
</div>
<div class=\"m-copy  f-tac s-gray\">

</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Reseller/Common/_leftNav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 27,  88 => 26,  86 => 25,  81 => 23,  75 => 22,  71 => 21,  64 => 20,  62 => 19,  59 => 18,  56 => 17,  54 => 16,  49 => 15,  47 => 14,  38 => 8,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"m-left-head\">
  <div class=\"head-img\">
    <a href=\"/user-info/index\" title=\"查看账户信息\">
      <img class=\"user_head_portrait\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/img/default-head-portrait.jpg\" onerror=\"this.src='//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/img/default-head-portrait.jpg'\"/>
    </a>
  </div>
  <div class=\"user\">
    <p>{{ user.nick_name }}</p>
    <pre>I'm Boss</pre>
  </div>
</div>
<div class=\"m-side-nav\">
  <div class=\"nav\">
    {% set icon_idx = 1 %}
    {% for nav in left_nav %}
      {#{% set path = nav.route ? path(nav.route) : nav.url %}#}
      {% set url = menu_path(nav) %}
      {% set is_current = false %}
      {#{% set is_current = nav.route in current_path %}#}
      <a href=\"{{ url }}\" {{ nav.target|default('') ? 'target=\"' ~ nav.target ~ '\"' : '' }}
         class=\"nav-title {{ is_current ? 'nav-title-this' : '' }}\">
        <i class=\"iconfont icon-nav icon-nav-{{ icon_idx }}\">{{ nav.icon|raw }}</i>
        <span class=\"f-fs-16\">{{ nav.name }}</span>
      </a>
      {% set icon_idx = icon_idx + 1 %}
    {% endfor %}
  </div>
</div>
<div class=\"m-copy  f-tac s-gray\">

</div>
", "Reseller/Common/_leftNav.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Common\\_leftNav.twig");
    }
}
