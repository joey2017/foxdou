<?php

/* Admin/Common/layout.twig */
class __TwigTemplate_62e932f6f9b1e40a08efe91ca73228a074d121275f67a16e5f749db89a672eae extends Twig_Template
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
        echo $this->extensions['App\Common\Twig\AppExtension']->useAssets(array(0 => "/assets/common/layui/css/layui.css", 1 => "/assets/admin/css/admin.css"));
        // line 12
        echo "


  <style>
    div.error {
      color: #FF5722 !important;
    }
  </style>
  ";
        // line 20
        $this->displayBlock('css', $context, $blocks);
        // line 22
        echo "
  ";
        // line 23
        $this->displayBlock('assets', $context, $blocks);
        // line 25
        echo "</head>

<body>

<div class=\"layui-card\" id=\"change-password-dialog\" style=\"display: none;\">
  <div class=\"layui-card-body\" style=\"padding-right: 50px;\">
    <form id=\"change-password-form\" class=\"layui-form\" lay-filter=\"edit-form\">
      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">旧密码：</label>
        <div class=\"layui-input-block\">
          <input type=\"password\" class=\"layui-input\" name=\"old_password\" />
        </div>
        <div class=\"layui-form-mid layui-word-aux error\" id=\"tips_old_password\"></div>
      </div>
      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">新密码：</label>
        <div class=\"layui-input-block\">
          <input type=\"password\" class=\"layui-input\" name=\"new_password\" />
        </div>
        <div class=\"layui-form-mid layui-word-aux error\" id=\"tips_new_password\"></div>
      </div>
      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">新密码确认</label>
        <div class=\"layui-input-block\">
          <input type=\"password\" class=\"layui-input\" name=\"new_password_confirm\" />
        </div>
        <div class=\"layui-form-mid layui-word-aux error\" id=\"tips_new_password_confirm\"></div>
      </div>
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_profile_change_password"), "html", null, true);
        echo "\">
    </form>
  </div>
</div>

<div class=\"layadmin-tabspage-none\">
  <div class=\"layui-layout layui-layout-admin\">
    <div class=\"layui-header\">
      <!-- 头部区域 -->
      ";
        // line 62
        $this->loadTemplate("Admin/Common/top_nav.twig", "Admin/Common/layout.twig", 62)->display($context);
        // line 63
        echo "    </div>
    <!--侧栏菜单-->
    <div class=\"layui-side layui-side-menu\">
      ";
        // line 66
        $this->loadTemplate("Admin/Common/left_nav.twig", "Admin/Common/layout.twig", 66)->display($context);
        // line 67
        echo "    </div>

    <!--主体内容-->
    <div class=\"layui-body\">
      <div class=\"layadmin-tabsbody-item layui-show\">
        ";
        // line 72
        $this->displayBlock('main_content', $context, $blocks);
        // line 74
        echo "      </div>
    </div>
  </div>
</div>
";
        // line 78
        $this->displayBlock('extra', $context, $blocks);
        // line 80
        echo $this->extensions['App\Common\Twig\AppExtension']->useAssets(array(0 => "/assets/common/js/jquery.min.js", 1 => "/assets/common/layui/layui.all.js", 2 => "/assets/admin/js/common.js", 3 => "/assets/common/js/ajaxRequest.js", 4 => "/assets/common/js/jquery.serializejson.js"));
        // line 86
        echo "

";
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('footer', $context, $blocks);
        // line 96
        $this->displayBlock('js_end', $context, $blocks);
        // line 98
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

    // line 20
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 21
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_assets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "assets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "assets"));

        // line 24
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 73
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 78
    public function block_extra($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
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
        return array (  273 => 96,  256 => 94,  239 => 78,  229 => 73,  220 => 72,  210 => 24,  201 => 23,  191 => 21,  182 => 20,  162 => 8,  150 => 98,  148 => 96,  146 => 94,  143 => 93,  139 => 86,  137 => 80,  135 => 78,  129 => 74,  127 => 72,  120 => 67,  118 => 66,  113 => 63,  111 => 62,  99 => 53,  69 => 25,  67 => 23,  64 => 22,  62 => 20,  52 => 12,  50 => 9,  46 => 8,  38 => 2,  36 => 1,);
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
  ])}}


  <style>
    div.error {
      color: #FF5722 !important;
    }
  </style>
  {% block css %}
  {% endblock %}

  {% block assets %}
  {% endblock %}
</head>

<body>

<div class=\"layui-card\" id=\"change-password-dialog\" style=\"display: none;\">
  <div class=\"layui-card-body\" style=\"padding-right: 50px;\">
    <form id=\"change-password-form\" class=\"layui-form\" lay-filter=\"edit-form\">
      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">旧密码：</label>
        <div class=\"layui-input-block\">
          <input type=\"password\" class=\"layui-input\" name=\"old_password\" />
        </div>
        <div class=\"layui-form-mid layui-word-aux error\" id=\"tips_old_password\"></div>
      </div>
      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">新密码：</label>
        <div class=\"layui-input-block\">
          <input type=\"password\" class=\"layui-input\" name=\"new_password\" />
        </div>
        <div class=\"layui-form-mid layui-word-aux error\" id=\"tips_new_password\"></div>
      </div>
      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">新密码确认</label>
        <div class=\"layui-input-block\">
          <input type=\"password\" class=\"layui-input\" name=\"new_password_confirm\" />
        </div>
        <div class=\"layui-form-mid layui-word-aux error\" id=\"tips_new_password_confirm\"></div>
      </div>
      <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('admin_profile_change_password') }}\">
    </form>
  </div>
</div>

<div class=\"layadmin-tabspage-none\">
  <div class=\"layui-layout layui-layout-admin\">
    <div class=\"layui-header\">
      <!-- 头部区域 -->
      {% include \"Admin/Common/top_nav.twig\" %}
    </div>
    <!--侧栏菜单-->
    <div class=\"layui-side layui-side-menu\">
      {% include \"Admin/Common/left_nav.twig\" %}
    </div>

    <!--主体内容-->
    <div class=\"layui-body\">
      <div class=\"layadmin-tabsbody-item layui-show\">
        {% block main_content %}
        {% endblock %}
      </div>
    </div>
  </div>
</div>
{% block extra %}
{% endblock %}
{{ use_assets([
  '/assets/common/js/jquery.min.js',
  '/assets/common/layui/layui.all.js',
  '/assets/admin/js/common.js',
  '/assets/common/js/ajaxRequest.js',
  '/assets/common/js/jquery.serializejson.js',
]) }}

{#<link href=\"http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css\" rel=\"stylesheet\">#}
{#<script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js\"></script>#}
{#<script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js\"></script>#}
{#<link href=\"http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css\" rel=\"stylesheet\">#}
{#<script src=\"http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js\"></script>#}

{% block footer %}
{% endblock %}
{% block js_end %}
{% endblock %}
</body>
</html>
", "Admin/Common/layout.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\Common\\layout.twig");
    }
}
