<?php

/* Admin/Common/layout.twig */
class __TwigTemplate_b7d7c6a3dbfbe0194168351f3e9d003324b0e8763ca634730ffb354eb0be3661 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'assets' => array($this, 'block_assets'),
            'main_content' => array($this, 'block_main_content'),
            'extra' => array($this, 'block_extra'),
            'footer' => array($this, 'block_footer'),
            'js_end' => array($this, 'block_js_end'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Common/layout.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Common/layout.twig"));

        // line 1
        $context["user"] = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "user", array());
        // line 2
        echo "
<!DOCTYPE html>
<html lang=\"zh-CN\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"renderer\" content=\"webkit\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 9
        echo $this->extensions['App\Common\Twig\AppExtension']->useAssets(array(0 => "/assets/common/layui/css/layui.css", 1 => "/assets/admin/css/admin.css", 2 => "/assets/common/css/font-icon.css"));
        // line 13
        echo "

    <style>
        div.error {
            color: #FF5722 !important;
        }
        .layui-body {
             overflow: auto;
        }
    </style>
    ";
        // line 23
        $this->displayBlock('css', $context, $blocks);
        // line 25
        echo "
    ";
        // line 26
        $this->displayBlock('assets', $context, $blocks);
        // line 28
        echo "
    ";
        // line 29
        echo $this->extensions['App\Common\Twig\AppExtension']->useAssets(array(0 => "/assets/common/js/jquery.min.js"));
        // line 31
        echo "
</head>

<body class=\"layui-layout layui-layout-admin\">
<!-- 头部区域 -->
";
        // line 36
        $this->loadTemplate("Admin/Common/top_nav.twig", "Admin/Common/layout.twig", 36)->display($context);
        // line 37
        echo "
<!--侧栏菜单-->
<div class=\"layui-side layui-side-menu\">
    ";
        // line 40
        $this->loadTemplate("Admin/Common/left_nav.twig", "Admin/Common/layout.twig", 40)->display($context);
        // line 41
        echo "</div>

<!--主体内容-->
<div class=\"layui-body\">
    ";
        // line 45
        $this->displayBlock('main_content', $context, $blocks);
        // line 47
        echo "</div>
";
        // line 48
        $this->displayBlock('extra', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        echo $this->extensions['App\Common\Twig\AppExtension']->useAssets(array(0 => "/assets/common/js/axios.min.js", 1 => "/assets/common/layui/layui.all.js", 2 => "/assets/common/js/common.js", 3 => "/assets/admin/js/common.js", 4 => "/assets/common/js/ajaxRequest.js", 5 => "/assets/common/js/jquery.serializejson.js", 6 => "/assets/common/js/common-verify.js"));
        // line 59
        echo "

<script>
    axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

    axios_json = axios.create({
        headers: {'Content-Type': 'application/json;charset=utf-8'}
    });

    axios_form = axios.create({
        headers: {'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8'},
        transformRequest: [function (data, headers) {
            if(typeof(data) !== 'object') {
                return data;
            }

            var str = [];
            \$.each(data, function(key, value) {
                str.push(encodeURIComponent(key) + \"=\" + encodeURIComponent(value));
            });

            return str.join(\"&\");
        }]
    });

    if(layui && layui.form) {
        layui.form.render();
    }
</script>

";
        // line 89
        $this->displayBlock('footer', $context, $blocks);
        // line 91
        $this->displayBlock('js_end', $context, $blocks);
        // line 93
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, (((isset($context["title"]) || array_key_exists("title", $context))) ? (_twig_default_filter((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 8, $this->source); })()), "狐豆管理平台")) : ("狐豆管理平台")), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 24
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_assets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "assets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "assets"));

        // line 27
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 46
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_extra($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 89
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
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
        return "Admin/Common/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 91,  252 => 89,  235 => 48,  225 => 46,  216 => 45,  206 => 27,  197 => 26,  187 => 24,  178 => 23,  158 => 8,  146 => 93,  144 => 91,  142 => 89,  110 => 59,  108 => 51,  105 => 50,  103 => 48,  100 => 47,  98 => 45,  92 => 41,  90 => 40,  85 => 37,  83 => 36,  76 => 31,  74 => 29,  71 => 28,  69 => 26,  66 => 25,  64 => 23,  52 => 13,  50 => 9,  46 => 8,  38 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set user = app.user %}

<!DOCTYPE html>
<html lang=\"zh-CN\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"renderer\" content=\"webkit\">
    <title>{% block title %} {{ title|default(\"狐豆管理平台\") }} {% endblock %}</title>
    {{ use_assets([
        '/assets/common/layui/css/layui.css',
        '/assets/admin/css/admin.css',
        '/assets/common/css/font-icon.css',
    ]) }}

    <style>
        div.error {
            color: #FF5722 !important;
        }
        .layui-body {
             overflow: auto;
        }
    </style>
    {% block css %}
    {% endblock %}

    {% block assets %}
    {% endblock %}

    {{ use_assets([
        '/assets/common/js/jquery.min.js',
    ]) }}
</head>

<body class=\"layui-layout layui-layout-admin\">
<!-- 头部区域 -->
{% include \"Admin/Common/top_nav.twig\" %}

<!--侧栏菜单-->
<div class=\"layui-side layui-side-menu\">
    {% include \"Admin/Common/left_nav.twig\" %}
</div>

<!--主体内容-->
<div class=\"layui-body\">
    {% block main_content %}
    {% endblock %}
</div>
{% block extra %}
{% endblock %}

{{ use_assets([
    '/assets/common/js/axios.min.js',
    '/assets/common/layui/layui.all.js',
    '/assets/common/js/common.js',
    '/assets/admin/js/common.js',
    '/assets/common/js/ajaxRequest.js',
    '/assets/common/js/jquery.serializejson.js',
    '/assets/common/js/common-verify.js',
]) }}

<script>
    axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

    axios_json = axios.create({
        headers: {'Content-Type': 'application/json;charset=utf-8'}
    });

    axios_form = axios.create({
        headers: {'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8'},
        transformRequest: [function (data, headers) {
            if(typeof(data) !== 'object') {
                return data;
            }

            var str = [];
            \$.each(data, function(key, value) {
                str.push(encodeURIComponent(key) + \"=\" + encodeURIComponent(value));
            });

            return str.join(\"&\");
        }]
    });

    if(layui && layui.form) {
        layui.form.render();
    }
</script>

{% block footer %}
{% endblock %}
{% block js_end %}
{% endblock %}
</body>
</html>
", "Admin/Common/layout.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\Common\\layout.twig");
    }
}
