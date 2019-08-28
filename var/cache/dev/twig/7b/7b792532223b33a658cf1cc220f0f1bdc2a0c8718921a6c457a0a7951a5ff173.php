<?php

/* Open/Common/left_nav_head.twig */
class __TwigTemplate_ed89418eb6622912fbc00381d88252e74a0b35090d5eb49b1b974223437c2595 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Open/Common/left_nav_head.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Open/Common/left_nav_head.twig"));

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
  </div>
</div>
<div class=\"m-side-nav\">
  <div class=\"nav\">
    ";
        // line 13
        $context["icon_idx"] = 1;
        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["left_nav"]) || array_key_exists("left_nav", $context) ? $context["left_nav"] : (function () { throw new Twig_Error_Runtime('Variable "left_nav" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
            // line 15
            echo "      ";
            // line 16
            echo "      ";
            $context["url"] = $this->extensions['App\Common\Twig\AppExtension']->getMenuPath($context["nav"]);
            // line 17
            echo "      ";
            $context["is_current"] = ((isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new Twig_Error_Runtime('Variable "current_path" does not exist.', 17, $this->source); })()) == (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 17, $this->source); })()));
            // line 18
            echo "      <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "\" route=\"";
            echo twig_escape_filter($this->env, json_encode($context["nav"]), "html", null, true);
            echo "\"
         class=\"nav-title zzzzzzzzzz ";
            // line 19
            echo (((isset($context["is_current"]) || array_key_exists("is_current", $context) ? $context["is_current"] : (function () { throw new Twig_Error_Runtime('Variable "is_current" does not exist.', 19, $this->source); })())) ? ("nav-title-this") : (""));
            echo "\">
        <i class=\"iconfont icon-nav icon-nav-";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["icon_idx"]) || array_key_exists("icon_idx", $context) ? $context["icon_idx"] : (function () { throw new Twig_Error_Runtime('Variable "icon_idx" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["nav"], "icon", array());
            echo "</i>
        <span class=\"f-fs-16\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "name", array()), "html", null, true);
            echo "</span>
      </a>
      ";
            // line 23
            $context["icon_idx"] = ((isset($context["icon_idx"]) || array_key_exists("icon_idx", $context) ? $context["icon_idx"] : (function () { throw new Twig_Error_Runtime('Variable "icon_idx" does not exist.', 23, $this->source); })()) + 1);
            // line 24
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
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
        return "Open/Common/left_nav_head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  85 => 24,  83 => 23,  78 => 21,  72 => 20,  68 => 19,  61 => 18,  58 => 17,  55 => 16,  53 => 15,  48 => 14,  46 => 13,  38 => 8,  29 => 1,);
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
  </div>
</div>
<div class=\"m-side-nav\">
  <div class=\"nav\">
    {% set icon_idx = 1 %}
    {% for nav in left_nav %}
      {#{% set path = nav.route ? path(nav.route) : nav.url %}#}
      {% set url = menu_path(nav) %}
      {% set is_current = current_path == url %}
      <a href=\"{{ url }}\" route=\"{{ nav|json_encode }}\"
         class=\"nav-title zzzzzzzzzz {{ is_current ? 'nav-title-this' : '' }}\">
        <i class=\"iconfont icon-nav icon-nav-{{ icon_idx }}\">{{ nav.icon|raw }}</i>
        <span class=\"f-fs-16\">{{ nav.name }}</span>
      </a>
      {% set icon_idx = icon_idx + 1 %}
    {% endfor %}
  </div>
</div>
<div class=\"m-copy  f-tac s-gray\">

</div>
", "Open/Common/left_nav_head.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Open\\Common\\left_nav_head.twig");
    }
}
