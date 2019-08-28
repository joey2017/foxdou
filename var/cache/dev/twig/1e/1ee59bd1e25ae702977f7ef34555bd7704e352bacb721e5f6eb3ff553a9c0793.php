<?php

/* Admin/UserDetail/index.twig */
class __TwigTemplate_05ea57a3e1a5b64e0122bfb1c0a523854450648f60d7eb97bac6564165fe13fc extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/index.twig"));

        // line 1
        $context["current_group"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "request", array()), "get", array(0 => "group", 1 => "main"), "method");
        // line 2
        echo "
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/user.css\" />
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/sidenav.css\" />
    <script src=\"/assets/admin/h/js/jquery.min.js?v=2.1.4\"></script>
    <title>用户详情</title>
</head>

<body>
<div class=\"h-head\">
  <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_info"]) || array_key_exists("user_info", $context) ? $context["user_info"] : (function () { throw new Twig_Error_Runtime('Variable "user_info" does not exist.', 16, $this->source); })()), "avatar_url", array()), "html", null, true);
        echo "\" class=\"h-head-portrait\">
  <h3>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_info"]) || array_key_exists("user_info", $context) ? $context["user_info"] : (function () { throw new Twig_Error_Runtime('Variable "user_info" does not exist.', 17, $this->source); })()), "nick_name", array()), "html", null, true);
        echo "</h3>
  <p class=\"h-head-pro\">
    狐豆帐号：<span>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_info"]) || array_key_exists("user_info", $context) ? $context["user_info"] : (function () { throw new Twig_Error_Runtime('Variable "user_info" does not exist.', 19, $this->source); })()), "user_name", array()), "html", null, true);
        echo "</span>
    性质：<span>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_info"]) || array_key_exists("user_info", $context) ? $context["user_info"] : (function () { throw new Twig_Error_Runtime('Variable "user_info" does not exist.', 20, $this->source); })()), "getTypeText", array(), "method"), "html", null, true);
        echo "</span>
    认证状态：<span>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_info"]) || array_key_exists("user_info", $context) ? $context["user_info"] : (function () { throw new Twig_Error_Runtime('Variable "user_info" does not exist.', 21, $this->source); })()), "getRealNameStatusText", array(), "method"), "html", null, true);
        echo "</span>
  </p>
</div>
<div class=\"h-menu\">
  ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new Twig_Error_Runtime('Variable "menu" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["group_id"] => $context["group_info"]) {
            // line 26
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group_info"], "url", array()), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_info"]) || array_key_exists("user_info", $context) ? $context["user_info"] : (function () { throw new Twig_Error_Runtime('Variable "user_info" does not exist.', 26, $this->source); })()), "id", array()), "html", null, true);
            echo "\" target=\"main-frame\" class=\"btn btn-middle ";
            echo ((((isset($context["current_group"]) || array_key_exists("current_group", $context) ? $context["current_group"] : (function () { throw new Twig_Error_Runtime('Variable "current_group" does not exist.', 26, $this->source); })()) == $context["group_id"])) ? ("btn-green") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group_info"], "name", array()), "html", null, true);
            echo "</a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_id'], $context['group_info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</div>
<div class=\"h-main\">
<iframe name=\"main-frame\" frameborder=\"0\" marginheight=\"0\" scrolling=\"auto\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_main_details_main", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user_info"]) || array_key_exists("user_info", $context) ? $context["user_info"] : (function () { throw new Twig_Error_Runtime('Variable "user_info" does not exist.', 30, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" width=\"100%\" height=\"100%\"></iframe>
</div>
</body>
</html>
<script>
    \$('.h-menu').on('click','a',function () {
        \$(this).addClass('btn-green');
        \$(this).siblings().removeClass('btn-green');
    });
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/UserDetail/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 30,  90 => 28,  75 => 26,  71 => 25,  64 => 21,  60 => 20,  56 => 19,  51 => 17,  47 => 16,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set current_group = app.request.get('group', 'main') %}

<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/user.css\" />
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/sidenav.css\" />
    <script src=\"/assets/admin/h/js/jquery.min.js?v=2.1.4\"></script>
    <title>用户详情</title>
</head>

<body>
<div class=\"h-head\">
  <img src=\"{{ user_info.avatar_url }}\" class=\"h-head-portrait\">
  <h3>{{ user_info.nick_name }}</h3>
  <p class=\"h-head-pro\">
    狐豆帐号：<span>{{ user_info.user_name }}</span>
    性质：<span>{{ user_info.getTypeText() }}</span>
    认证状态：<span>{{ user_info.getRealNameStatusText() }}</span>
  </p>
</div>
<div class=\"h-menu\">
  {% for group_id, group_info in menu %}
    <a href=\"{{ group_info.url }}?id={{ user_info.id }}\" target=\"main-frame\" class=\"btn btn-middle {{ current_group == group_id ? 'btn-green' : '' }}\">{{ group_info.name }}</a>
  {% endfor %}
</div>
<div class=\"h-main\">
<iframe name=\"main-frame\" frameborder=\"0\" marginheight=\"0\" scrolling=\"auto\" src=\"{{ path('admin_user_details_main_details_main', {'id': user_info.id}) }}\" width=\"100%\" height=\"100%\"></iframe>
</div>
</body>
</html>
<script>
    \$('.h-menu').on('click','a',function () {
        \$(this).addClass('btn-green');
        \$(this).siblings().removeClass('btn-green');
    });
</script>
", "Admin/UserDetail/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\UserDetail\\index.twig");
    }
}
