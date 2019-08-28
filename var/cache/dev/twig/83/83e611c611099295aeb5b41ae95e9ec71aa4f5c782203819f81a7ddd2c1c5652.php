<?php

/* Common/Article/view.twig */
class __TwigTemplate_057bc335ab37f2593a018c0c285c0175fb974ed7414b02ba2f928f38a4c8ed23 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/Article/view.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/Article/view.twig"));

        // line 1
        $context["user"] = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "user", array());
        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"renderer\" content=\"webkit\">
  <title>";
        // line 8
        echo twig_escape_filter($this->env, (((isset($context["title"]) || array_key_exists("title", $context))) ? (_twig_default_filter((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 8, $this->source); })()), "狐豆")) : ("狐豆")), "html", null, true);
        echo "</title>
  ";
        // line 9
        echo $this->extensions['App\Common\Twig\AppExtension']->useAssets(array(0 => "/assets/common/layui/css/layui.css"));
        // line 11
        echo "
  <style>
    .agent-news-end {
      text-align: center;
      cursor: default;
    }
    .agent-news-end span {
      display: inline-block;
      width: 80px;
      height: 80px;
      border-radius: 50%;
      background-color: #f6fbff;
      border: 1px solid #EEEEEE;
      line-height: 80px;
      font-size: 24px;
      color: #779ebb;
    }
    .agent-news-time {
      display: block;
      padding-bottom: 20px;
      border-bottom: 1px dashed #E0E0E0;
      font-size: 14px;
      color: #888;
    }
    .cover-image {
      padding: 10px;
      text-align: center;
      border: dashed 1px #eee;
    }
    .cover-image img {
      width: 100%;
    }

  </style>
</head>
<body>
  <div class=\"layui-layout\">
      <div class=\"layui-card\">
        <div class=\"layui-card-header\" style=\"text-align: center;\">
          ";
        // line 50
        $context["platforms"] = twig_constant("App\\Platform::PLATFORMS");
        // line 51
        echo "          <h2>";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["platforms"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 51, $this->source); })()), "portal_id", array()), array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["platforms"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 51, $this->source); })()), "portal_id", array()), array(), "array"), "狐豆")) : ("狐豆")), "html", null, true);
        echo "</h2>
        </div>
        <div class=\"layui-card-body\">
          <p style=\"\">
            <h1 style=\"text-align: center;margin: 20px 10px\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 55, $this->source); })()), "title", array()), "html", null, true);
        echo "</h1>
          </p>
          <div style=\"text-align: center;color: #888;\">
            <div class=\"agent-news-time\">发布时间：";
        // line 58
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 58, $this->source); })()), "publish_time", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</div>
          </div>
          ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 60, $this->source); })()), "cover_image_url", array())) {
            // line 61
            echo "          <div class=\"cover-image\">
            <img src=\"";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 62, $this->source); })()), "cover_image_url", array()), "html", null, true);
            echo "\">
          </div>
          ";
        }
        // line 65
        echo "          <div style=\"margin-top: 30px;\">
            ";
        // line 66
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 66, $this->source); })()), "content", array());
        echo "
          </div>


        </div>
      </div>
        <div class=\"agent-news-end\">
          <span>完</span>
        </div>
  </div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/Article/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 66,  118 => 65,  112 => 62,  109 => 61,  107 => 60,  102 => 58,  96 => 55,  88 => 51,  86 => 50,  45 => 11,  43 => 9,  39 => 8,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set user = app.user %}

<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"renderer\" content=\"webkit\">
  <title>{{ title|default(\"狐豆\") }}</title>
  {{ use_assets([
    '/assets/common/layui/css/layui.css',
  ])}}
  <style>
    .agent-news-end {
      text-align: center;
      cursor: default;
    }
    .agent-news-end span {
      display: inline-block;
      width: 80px;
      height: 80px;
      border-radius: 50%;
      background-color: #f6fbff;
      border: 1px solid #EEEEEE;
      line-height: 80px;
      font-size: 24px;
      color: #779ebb;
    }
    .agent-news-time {
      display: block;
      padding-bottom: 20px;
      border-bottom: 1px dashed #E0E0E0;
      font-size: 14px;
      color: #888;
    }
    .cover-image {
      padding: 10px;
      text-align: center;
      border: dashed 1px #eee;
    }
    .cover-image img {
      width: 100%;
    }

  </style>
</head>
<body>
  <div class=\"layui-layout\">
      <div class=\"layui-card\">
        <div class=\"layui-card-header\" style=\"text-align: center;\">
          {% set platforms = constant('App\\\\Platform::PLATFORMS') %}
          <h2>{{ platforms[article.portal_id]|default('狐豆') }}</h2>
        </div>
        <div class=\"layui-card-body\">
          <p style=\"\">
            <h1 style=\"text-align: center;margin: 20px 10px\">{{ article.title }}</h1>
          </p>
          <div style=\"text-align: center;color: #888;\">
            <div class=\"agent-news-time\">发布时间：{{ article.publish_time|date('Y-m-d H:i:s') }}</div>
          </div>
          {% if article.cover_image_url %}
          <div class=\"cover-image\">
            <img src=\"{{ article.cover_image_url }}\">
          </div>
          {% endif %}
          <div style=\"margin-top: 30px;\">
            {{ article.content|raw }}
          </div>


        </div>
      </div>
        <div class=\"agent-news-end\">
          <span>完</span>
        </div>
  </div>
</body>
</html>
", "Common/Article/view.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Common\\Article\\view.twig");
    }
}
