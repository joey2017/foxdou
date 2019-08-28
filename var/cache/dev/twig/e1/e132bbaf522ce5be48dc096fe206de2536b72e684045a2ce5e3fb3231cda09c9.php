<?php

/* /Passport/layout.twig */
class __TwigTemplate_3755b824226b45169384d8edc05ccd257e095c7f7685dce189bc71790e7e72f7 extends Twig_Template
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
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Passport/layout.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Passport/layout.twig"));

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

  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
  ";
        // line 12
        echo $this->extensions['App\Common\Twig\AppExtension']->useAssets(array(0 => "/assets/passport/css/common.css", 1 => "/assets/passport/css/font-class.css", 2 => "/assets/common/js/jquery.min.js"));
        // line 16
        echo "

  <style type=\"text/css\">

    .page-content{min-height: 650px; padding: 0;}

    /*登录后*/
    .after-login{width: 100%; height: 100%;}
    .after-login:after{display:block;visibility:hidden;clear:both;height:0;overflow:hidden;content:'.';}

    /*主体左侧*/
    .my-info{padding: 5px 0; margin: 0 8px;}
    .my-info .index-face{float: left; width: 60px; height: 60px; border-radius: 50%; border: 1px solid #E0E0E0; overflow: hidden; background: #DDDDDD;}
    .my-info .index-face img{width: 100%;height: 100%;}
    .my-info dl{float: left; width: 540px; height: auto; margin-left: 20px; line-height: 30px;}
    .my-info dt, .my-info dd{display: inline-block;}
    .my-info dd{width: 480px; margin-left: 5px;}

    .my-last-login-time{padding: 2px 0 20px 88px; border-bottom: 1px dashed #DDDDDD;}
    .my-last-login-time h3{display: block; line-height: 30px;}
    .my-last-login-time p{display: block; text-align: left; color: #777777; font-family: arial;}
    .my-last-login-time span{margin-right: 30px;line-height: 24px;}

    .middel{padding: 40px 0 20px 88px;}
    .level{margin-bottom: 40px;}
    .level label, .level p{display: inline-block;}
    .level label{float: left; padding: 10px 5px 0 0; color: #666666;}
    .level p{text-align: left;}
    .level img{display: inline-block;}
    .level em{padding-left: 10px; font-family: arial; font-size: 28px; color: #ff8a00; font-style: normal;}
    .level span{font-size: 16px; color: #ff8a00;}

    .my-circs{margin-top: 20px; padding-right: 50px;}
    .my-circs .risk-item{position: relative; padding: 15px; margin: 15px 0; border: 1px dashed #CCCCCC;}
    .my-circs .risk-item em{float: left; display: block; width: 20px; height: 20px; margin-right: 10px;
      background: url(";
        // line 51
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/passport/css/img/gantan.png");
        echo ") no-repeat;}
    .my-circs .risk-item dt{padding-bottom: 7px; font-size: 16px;color: #444}
    .my-circs .risk-item dd{padding: 0 120px 0 30px; color: #777777; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;}
    .my-circs .risk-item a{position: absolute; top: 22px; right: 20px; padding: 6px 20px; border-radius: 2px;
      background: #F5F5F5; border: 1px solid #CCCCCC; color: #444;}
    .my-circs .risk-item a:hover{border-color: #2f86f6;}


    /*注：原.my_circs统一改为.my-circs*/
    .my-circs-col {position: relative;}
    .my-circs-col .open-item {position: absolute; top: 5px; right: 40px; padding-right: 22px; cursor: pointer; color: #2F86F6;}
    .my-circs-col .open-item .triangle {content: ''; width: 0; height: 0; border-style: solid dashed dashed; border-color: #2F86F6 transparent transparent;
      overflow: hidden; cursor: pointer; transition:all .2s; -webkit-transition:all .2s; position: absolute; top: 50%; right: 5px;
      margin-top: -3px; border-width: 5px; border-top-color: #2F86F6;}
    .my-circs-col .open-item:hover {opacity: .8;}

    .my-yes-col {display: none; margin-top: 5px;}
    .my-yes-col .my-circs {margin-top: 15px;}
    .my-yes-col .my-circs .risk-item em{background: url(";
        // line 69
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/passport/css/img/xiaolian.png");
        echo ") no-repeat;}
    .testing {position: relative; top: 50px; left: 90px; width: 300px; height: 200px; background-size: 100%!important;}


  </style>

  ";
        // line 75
        $this->displayBlock('css', $context, $blocks);
        // line 77
        echo "  ";
        $this->displayBlock('js', $context, $blocks);
        // line 79
        echo "  ";
        $this->displayBlock('validation_scripts', $context, $blocks);
        // line 81
        echo "
</head>

<body>
";
        // line 85
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 85, $this->source); })()), "debug", array())) {
            // line 86
            echo "  <div style=\"background-color: darkred;height: 5px;\"></div>
";
        }
        // line 88
        echo "
<div class=\"page-top\">
  ";
        // line 90
        $this->loadTemplate("/Passport/_topNav.twig", "/Passport/layout.twig", 90)->display($context);
        // line 91
        echo "</div>

<div class=\"page-content\">
  <!-- 登录后 -->
  ";
        // line 95
        $this->displayBlock('main_content', $context, $blocks);
        // line 97
        echo "</div>

<div class=\"page-foot\">
  ";
        // line 100
        $this->loadTemplate("/Passport/_footer.twig", "/Passport/layout.twig", 100)->display($context);
        // line 101
        echo "</div>

";
        // line 103
        $this->displayBlock('footer', $context, $blocks);
        // line 105
        echo "

</body>
<script type=\"text/javascript\">
</script>
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
        echo twig_escape_filter($this->env, (((isset($context["title"]) || array_key_exists("title", $context))) ? (_twig_default_filter((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 8, $this->source); })()), "狐豆-安全中心")) : ("狐豆-安全中心")), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 76
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 78
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_validation_scripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "validation_scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "validation_scripts"));

        // line 80
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 95
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 96
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 103
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/Passport/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 103,  272 => 96,  263 => 95,  253 => 80,  244 => 79,  234 => 78,  225 => 77,  215 => 76,  206 => 75,  186 => 8,  170 => 105,  168 => 103,  164 => 101,  162 => 100,  157 => 97,  155 => 95,  149 => 91,  147 => 90,  143 => 88,  139 => 86,  137 => 85,  131 => 81,  128 => 79,  125 => 77,  123 => 75,  114 => 69,  93 => 51,  56 => 16,  54 => 12,  47 => 8,  41 => 4,  39 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set user = app.user %}
{% set current_route = app.request.attributes.get('_route') %}
{% set current_path  = app.request.pathinfo %}

<!DOCTYPE html>
<html>
<head>
  <title>{% block title %} {{ title|default(\"狐豆-安全中心\") }} {% endblock %}</title>

  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
  {{ use_assets([
    '/assets/passport/css/common.css',
    '/assets/passport/css/font-class.css',
    '/assets/common/js/jquery.min.js',
  ]) }}

  <style type=\"text/css\">

    .page-content{min-height: 650px; padding: 0;}

    /*登录后*/
    .after-login{width: 100%; height: 100%;}
    .after-login:after{display:block;visibility:hidden;clear:both;height:0;overflow:hidden;content:'.';}

    /*主体左侧*/
    .my-info{padding: 5px 0; margin: 0 8px;}
    .my-info .index-face{float: left; width: 60px; height: 60px; border-radius: 50%; border: 1px solid #E0E0E0; overflow: hidden; background: #DDDDDD;}
    .my-info .index-face img{width: 100%;height: 100%;}
    .my-info dl{float: left; width: 540px; height: auto; margin-left: 20px; line-height: 30px;}
    .my-info dt, .my-info dd{display: inline-block;}
    .my-info dd{width: 480px; margin-left: 5px;}

    .my-last-login-time{padding: 2px 0 20px 88px; border-bottom: 1px dashed #DDDDDD;}
    .my-last-login-time h3{display: block; line-height: 30px;}
    .my-last-login-time p{display: block; text-align: left; color: #777777; font-family: arial;}
    .my-last-login-time span{margin-right: 30px;line-height: 24px;}

    .middel{padding: 40px 0 20px 88px;}
    .level{margin-bottom: 40px;}
    .level label, .level p{display: inline-block;}
    .level label{float: left; padding: 10px 5px 0 0; color: #666666;}
    .level p{text-align: left;}
    .level img{display: inline-block;}
    .level em{padding-left: 10px; font-family: arial; font-size: 28px; color: #ff8a00; font-style: normal;}
    .level span{font-size: 16px; color: #ff8a00;}

    .my-circs{margin-top: 20px; padding-right: 50px;}
    .my-circs .risk-item{position: relative; padding: 15px; margin: 15px 0; border: 1px dashed #CCCCCC;}
    .my-circs .risk-item em{float: left; display: block; width: 20px; height: 20px; margin-right: 10px;
      background: url({{ asset('/assets/passport/css/img/gantan.png')}}) no-repeat;}
    .my-circs .risk-item dt{padding-bottom: 7px; font-size: 16px;color: #444}
    .my-circs .risk-item dd{padding: 0 120px 0 30px; color: #777777; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;}
    .my-circs .risk-item a{position: absolute; top: 22px; right: 20px; padding: 6px 20px; border-radius: 2px;
      background: #F5F5F5; border: 1px solid #CCCCCC; color: #444;}
    .my-circs .risk-item a:hover{border-color: #2f86f6;}


    /*注：原.my_circs统一改为.my-circs*/
    .my-circs-col {position: relative;}
    .my-circs-col .open-item {position: absolute; top: 5px; right: 40px; padding-right: 22px; cursor: pointer; color: #2F86F6;}
    .my-circs-col .open-item .triangle {content: ''; width: 0; height: 0; border-style: solid dashed dashed; border-color: #2F86F6 transparent transparent;
      overflow: hidden; cursor: pointer; transition:all .2s; -webkit-transition:all .2s; position: absolute; top: 50%; right: 5px;
      margin-top: -3px; border-width: 5px; border-top-color: #2F86F6;}
    .my-circs-col .open-item:hover {opacity: .8;}

    .my-yes-col {display: none; margin-top: 5px;}
    .my-yes-col .my-circs {margin-top: 15px;}
    .my-yes-col .my-circs .risk-item em{background: url({{ asset('/assets/passport/css/img/xiaolian.png')}}) no-repeat;}
    .testing {position: relative; top: 50px; left: 90px; width: 300px; height: 200px; background-size: 100%!important;}


  </style>

  {% block css %}
  {% endblock %}
  {% block js %}
  {% endblock %}
  {% block validation_scripts %}
  {% endblock %}

</head>

<body>
{% if app.debug %}
  <div style=\"background-color: darkred;height: 5px;\"></div>
{% endif %}

<div class=\"page-top\">
  {% include \"/Passport/_topNav.twig\" %}
</div>

<div class=\"page-content\">
  <!-- 登录后 -->
  {% block main_content %}
  {% endblock %}
</div>

<div class=\"page-foot\">
  {% include \"/Passport/_footer.twig\" %}
</div>

{% block footer %}
{% endblock %}


</body>
<script type=\"text/javascript\">
</script>
</html>
", "/Passport/layout.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\layout.twig");
    }
}
