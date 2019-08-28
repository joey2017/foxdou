<?php

/* Common/Common/layout_public.twig */
class __TwigTemplate_9c64720e59da9f94585c42c80192a766af20dcc5beceda81d39ebc1c0538e5ce extends Twig_Template
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
            'js' => array($this, 'block_js'),
            'validation_scripts' => array($this, 'block_validation_scripts'),
            'main_content' => array($this, 'block_main_content'),
            'extra' => array($this, 'block_extra'),
            'js_end' => array($this, 'block_js_end'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/Common/layout_public.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/Common/layout_public.twig"));

        // line 1
        $context["user"] = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "user", array());
        // line 2
        $context["current_route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 3
        $context["current_path"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "request", array()), "pathinfo", array());
        // line 4
        echo "
<!DOCTYPE html>
<html>
<head>
  <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/layui/css/layui.css\"/>
  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.min.js\"></script>


  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/css/index.css\"/>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/css/common.css\"/>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/css/font/iconfont.css\">
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/js/slideBanner/css/fullSlide.css\">

  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/css/font-icon.css\"/>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/css/font/iconfont.css\"/>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/css/article-article.css\"/>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/js/select/css/xui-select.css\"/>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/js/prettifyCode/prettify.css\"/>

  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/js/slideBanner/js/superslide.2.1.js\"></script>

  <!--    代码修饰-->
  <script src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/js/prettifyCode/prettify.js\" charset=\"utf-8\"></script>
  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/js/select/xui-select.js\"></script>

  <style type=\"text/css\">

    .appitem-main h2,.appitem-main p{overflow: hidden;white-space: nowrap;text-overflow: ellipsis;}
    /*合作流程*/
    .cooperation {width: 100%; height: auto; margin-top: 60px; background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/img/hzlc-bg.jpg) no-repeat; background-color: #36393b; background-position: center;}
    .cooperation-location {width: 1200px; height: 500px; margin: 0 auto;}
    .cooperation-location h2 {color: #fff;}
    .cooperation-main {position: relative; height: 320px;}
    .cooperation-axis {position: absolute; top: 150px; left: 0; right: 0; text-align: center;}
    .cooperation-axis li {position: relative; top: -7px; display: inline-block; width: 200px; height: 1px; background-color: rgba(255,255,255,.5);}
    .cooperation-axis li:nth-child(even) {position: initial; width: 14px; height: 14px; border-radius: 50%; margin: 0 8px;}

    .cooperation-bubble {position: absolute; top: 20px; display: block; width: 200px; height: auto;}
    .bubble { position:relative; display: inline-block; width:100%; padding: 10px; background:rgba(99, 107, 109, 0.78); border-radius:4px;
      box-shadow: 0 3px 8px rgba(0,0,0,.1); cursor: default;}
    .bubble p {line-height: 20px; color: #444355; font-size: 14px; text-align: left;}
    .bubble .arrow { position:absolute; bottom: -16px; left:43%; width:0; height:0; font-size:0; border:solid 8px;
      border-color:rgba(99, 107, 109, 0.78) transparent transparent transparent; }

    .cm-col2 .bubble {background:rgba(99, 107, 109, 0.78);}
    .cm-col2 .arrow {top: -16px; border-color:transparent transparent rgba(99, 107, 109, 0.78) transparent;}
    .cm-col3 .bubble {background: rgba(99, 107, 109, 0.78);}
    .cm-col3 .arrow {bottom: -16px; border-color:rgba(99, 107, 109, 0.78) transparent transparent transparent;}

    .cooperation-bubble .cm-text {position: relative; padding: 7px;}
    .cooperation-bubble .cm-text em {position: absolute; top: 0; left: 0; display: block; font-family: arial;
      font-size: 64px; line-height: 64px; color: #fff;}
    .cooperation-bubble .cm-text h1, .cooperation-bubble .cm-text p {padding-left: 45px;}
    .cooperation-bubble .cm-text h1 {display: block;height: 24px; margin-bottom: 10px; font-size: 24px; color: #fff; font-weight: normal;
      overflow: hidden; white-space: nowrap; text-overflow: ellipsis;}
    .cooperation-bubble .cm-text p {display: block; height: 40px; color: #fff; overflow: hidden;}
    .cooperation-bubble .cm-text p a{height: 40px; color: #fff;overflow: hidden;}
    .cm-col1 {left: 260px;}
    .cm-col2 {top: 200px; left: 500px;}
    .cm-col3 {right: 265px;}

    .layui-elem-quote{border-color: #0fb5d8;}
    .detail-arrt .qita-input{display: inline-block;width: 60px;height: 26px;margin-left: 5px; padding: 0 10px;border: 1px solid #BBBBBB;}
    .detail-arrt .qita-input:focus{border-color: #0fb5d8;}
  </style>

  ";
        // line 72
        $this->displayBlock('css', $context, $blocks);
        // line 74
        echo "  ";
        $this->displayBlock('js', $context, $blocks);
        // line 76
        echo "  ";
        $this->displayBlock('validation_scripts', $context, $blocks);
        // line 78
        echo "
</head>
<body>

<div class=\"g-head\">
  ";
        // line 83
        $this->loadTemplate("/Open/Common/topNav.twig", "Common/Common/layout_public.twig", 83)->display($context);
        // line 84
        echo "</div>
";
        // line 85
        $this->displayBlock('main_content', $context, $blocks);
        // line 87
        $this->displayBlock('extra', $context, $blocks);
        // line 89
        $this->displayBlock('js_end', $context, $blocks);
        // line 91
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
        echo twig_escape_filter($this->env, (((isset($context["title"]) || array_key_exists("title", $context))) ? (_twig_default_filter((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 8, $this->source); })()), "狐豆云数据")) : ("狐豆云数据")), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 73
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 75
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_validation_scripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "validation_scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "validation_scripts"));

        // line 77
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
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
        return "Common/Common/layout_public.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 89,  247 => 87,  230 => 85,  220 => 77,  211 => 76,  201 => 75,  192 => 74,  182 => 73,  173 => 72,  153 => 8,  141 => 91,  139 => 89,  137 => 87,  135 => 85,  132 => 84,  130 => 83,  123 => 78,  120 => 76,  117 => 74,  115 => 72,  48 => 8,  42 => 4,  40 => 3,  38 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set user = app.user %}
{% set current_route = app.request.attributes.get('_route') %}
{% set current_path  = app.request.pathinfo %}

<!DOCTYPE html>
<html>
<head>
  <title>{% block title %} {{ title|default(\"狐豆云数据\") }} {% endblock %}</title>

  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/layui/css/layui.css\"/>
  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.min.js\"></script>


  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/css/index.css\"/>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/css/common.css\"/>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/css/font/iconfont.css\">
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/js/slideBanner/css/fullSlide.css\">

  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/css/font-icon.css\"/>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/css/font/iconfont.css\"/>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/css/article-article.css\"/>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/js/select/css/xui-select.css\"/>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/js/prettifyCode/prettify.css\"/>

  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/js/slideBanner/js/superslide.2.1.js\"></script>

  <!--    代码修饰-->
  <script src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/js/prettifyCode/prettify.js\" charset=\"utf-8\"></script>
  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/js/select/xui-select.js\"></script>

  <style type=\"text/css\">

    .appitem-main h2,.appitem-main p{overflow: hidden;white-space: nowrap;text-overflow: ellipsis;}
    /*合作流程*/
    .cooperation {width: 100%; height: auto; margin-top: 60px; background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/img/hzlc-bg.jpg) no-repeat; background-color: #36393b; background-position: center;}
    .cooperation-location {width: 1200px; height: 500px; margin: 0 auto;}
    .cooperation-location h2 {color: #fff;}
    .cooperation-main {position: relative; height: 320px;}
    .cooperation-axis {position: absolute; top: 150px; left: 0; right: 0; text-align: center;}
    .cooperation-axis li {position: relative; top: -7px; display: inline-block; width: 200px; height: 1px; background-color: rgba(255,255,255,.5);}
    .cooperation-axis li:nth-child(even) {position: initial; width: 14px; height: 14px; border-radius: 50%; margin: 0 8px;}

    .cooperation-bubble {position: absolute; top: 20px; display: block; width: 200px; height: auto;}
    .bubble { position:relative; display: inline-block; width:100%; padding: 10px; background:rgba(99, 107, 109, 0.78); border-radius:4px;
      box-shadow: 0 3px 8px rgba(0,0,0,.1); cursor: default;}
    .bubble p {line-height: 20px; color: #444355; font-size: 14px; text-align: left;}
    .bubble .arrow { position:absolute; bottom: -16px; left:43%; width:0; height:0; font-size:0; border:solid 8px;
      border-color:rgba(99, 107, 109, 0.78) transparent transparent transparent; }

    .cm-col2 .bubble {background:rgba(99, 107, 109, 0.78);}
    .cm-col2 .arrow {top: -16px; border-color:transparent transparent rgba(99, 107, 109, 0.78) transparent;}
    .cm-col3 .bubble {background: rgba(99, 107, 109, 0.78);}
    .cm-col3 .arrow {bottom: -16px; border-color:rgba(99, 107, 109, 0.78) transparent transparent transparent;}

    .cooperation-bubble .cm-text {position: relative; padding: 7px;}
    .cooperation-bubble .cm-text em {position: absolute; top: 0; left: 0; display: block; font-family: arial;
      font-size: 64px; line-height: 64px; color: #fff;}
    .cooperation-bubble .cm-text h1, .cooperation-bubble .cm-text p {padding-left: 45px;}
    .cooperation-bubble .cm-text h1 {display: block;height: 24px; margin-bottom: 10px; font-size: 24px; color: #fff; font-weight: normal;
      overflow: hidden; white-space: nowrap; text-overflow: ellipsis;}
    .cooperation-bubble .cm-text p {display: block; height: 40px; color: #fff; overflow: hidden;}
    .cooperation-bubble .cm-text p a{height: 40px; color: #fff;overflow: hidden;}
    .cm-col1 {left: 260px;}
    .cm-col2 {top: 200px; left: 500px;}
    .cm-col3 {right: 265px;}

    .layui-elem-quote{border-color: #0fb5d8;}
    .detail-arrt .qita-input{display: inline-block;width: 60px;height: 26px;margin-left: 5px; padding: 0 10px;border: 1px solid #BBBBBB;}
    .detail-arrt .qita-input:focus{border-color: #0fb5d8;}
  </style>

  {% block css %}
  {% endblock %}
  {% block js %}
  {% endblock %}
  {% block validation_scripts %}
  {% endblock %}

</head>
<body>

<div class=\"g-head\">
  {% include \"/Open/Common/topNav.twig\" %}
</div>
{% block main_content %}
{% endblock %}
{% block extra %}
{% endblock %}
{% block js_end %}
{% endblock %}
</body>
</html>
", "Common/Common/layout_public.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Common\\Common\\layout_public.twig");
    }
}
