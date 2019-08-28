<?php

/* Supplier/Common/layout.twig */
class __TwigTemplate_fb3fc544d310faf37eb8b31f98deb05610823dc6cc307841da40ad2d0967e880 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main_content' => array($this, 'block_main_content'),
            'extra' => array($this, 'block_extra'),
            'js_end' => array($this, 'block_js_end'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Supplier/Common/layout.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Supplier/Common/layout.twig"));

        // line 1
        $context["user"] = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "user", array());
        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  <meta name=\"renderer\" content=\"webkit\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

    ";
        // line 13
        echo $this->extensions['App\Common\Twig\AppExtension']->useAssets(array(0 => "/assets/common/layui/css/layui.css", 1 => "/assets/supplier/font/iconfont.css", 2 => "/assets/supplier/css/common.css", 3 => "/assets/supplier/css/index.css", 4 => "/assets/supplier/css/media-all.css"));
        // line 19
        echo "

    ";
        // line 21
        echo $this->extensions['App\Common\Twig\AppExtension']->useAssets(array(0 => "/assets/common/js/jquery.min.js", 1 => "/assets/common/layui/layui.all.js", 2 => "/assets/admin/js/common.js", 3 => "/assets/common/js/ajaxRequest.js", 4 => "/assets/common/js/jquery.serializejson.js", 5 => "/assets/common/js/common-verify.js"));
        // line 28
        echo "

</head>

<body>

<div class=\"foxdou-box\">
  ";
        // line 35
        $this->loadTemplate("/Supplier/Common/top_nav.twig", "Supplier/Common/layout.twig", 35)->display($context);
        // line 36
        echo "  ";
        $this->loadTemplate("/Supplier/Common/left_nav.twig", "Supplier/Common/layout.twig", 36)->display($context);
        // line 37
        echo "
  ";
        // line 38
        $this->displayBlock('main_content', $context, $blocks);
        // line 40
        echo "
  <div class=\"foxdou-footer\">
    Copyright ©你行我动科技
  </div>
</div>

<script type=\"text/javascript\">
    // layui.config({
    //     base: '/assets/supplier/js/'
    // }).use('index'); //加载入口

    var ele = layui.element.render();

    layui.use('carousel',function(){
        var carousel = layui.carousel;

        //常规轮播
        carousel.render({
            elem: '#test1'
            ,arrow: 'hover'
            ,width: '100%'
            ,height: '130px'
        });
    })



</script>

";
        // line 69
        $this->displayBlock('extra', $context, $blocks);
        // line 71
        $this->displayBlock('js_end', $context, $blocks);
        // line 73
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, (((isset($context["title"]) || array_key_exists("title", $context))) ? (_twig_default_filter((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 7, $this->source); })()), "狐豆供应商平台")) : ("狐豆供应商平台")), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 39
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_extra($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Supplier/Common/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 71,  164 => 69,  154 => 39,  145 => 38,  125 => 7,  113 => 73,  111 => 71,  109 => 69,  78 => 40,  76 => 38,  73 => 37,  70 => 36,  68 => 35,  59 => 28,  57 => 21,  53 => 19,  51 => 13,  42 => 7,  35 => 2,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set user = app.user %}

<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <title>{% block title %} {{ title|default(\"狐豆供应商平台\") }} {% endblock %}</title>

  <meta name=\"renderer\" content=\"webkit\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

    {{ use_assets([
        '/assets/common/layui/css/layui.css',
        '/assets/supplier/font/iconfont.css',
        '/assets/supplier/css/common.css',
        '/assets/supplier/css/index.css',
        '/assets/supplier/css/media-all.css',
    ]) }}

    {{ use_assets([
        '/assets/common/js/jquery.min.js',
        '/assets/common/layui/layui.all.js',
        '/assets/admin/js/common.js',
        '/assets/common/js/ajaxRequest.js',
        '/assets/common/js/jquery.serializejson.js',
        '/assets/common/js/common-verify.js',
    ]) }}

</head>

<body>

<div class=\"foxdou-box\">
  {% include \"/Supplier/Common/top_nav.twig\" %}
  {% include \"/Supplier/Common/left_nav.twig\" %}

  {% block main_content %}
  {% endblock %}

  <div class=\"foxdou-footer\">
    Copyright ©你行我动科技
  </div>
</div>

<script type=\"text/javascript\">
    // layui.config({
    //     base: '/assets/supplier/js/'
    // }).use('index'); //加载入口

    var ele = layui.element.render();

    layui.use('carousel',function(){
        var carousel = layui.carousel;

        //常规轮播
        carousel.render({
            elem: '#test1'
            ,arrow: 'hover'
            ,width: '100%'
            ,height: '130px'
        });
    })



</script>

{% block extra %}
{% endblock %}
{% block js_end %}
{% endblock %}
</body>
</html>
", "Supplier/Common/layout.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Supplier\\Common\\layout.twig");
    }
}
