<?php

/* Passport/IdentityManagement/verify.twig */
class __TwigTemplate_aac77e6e00be59248e6a21ce146fedcc30d70fd26bd1ab772490f8d1b4525c21 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Reseller/Common/layout.twig", "Passport/IdentityManagement/verify.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Reseller/Common/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/IdentityManagement/verify.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/IdentityManagement/verify.twig"));

        // line 2
        $context["title"] = "提交实名认证";
        // line 4
        $context["left_nav"] = array(0 => array("name" => "实名认证", "route" => "identity_management_index", "icon" => "&#xe64e;"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 7
        echo "  <style type=\"text/css\">
    /*input { height: 34px !important; }*/
    /*.page-content { text-align: left; }*/
    /*a:hover { opacity: .7; }*/
    /*.head-portrait { position: relative; }*/
    /*.uploadImage { position: absolute; top: 0; left: 0; width: 60px; height: 60px; overflow: hidden; }*/
    /*.uploadImage img { width: 100%; height: 100%; }*/
    /*#uploadImage { display: block; width: 60px; height: 60px !important; opacity: 0; cursor: pointer; }*/
    /*.verify_failed { height: 100%; line-height: 34px; color: red }*/
    /*.verify_successed { height: 100%; line-height: 34px; color: green }*/
    /*.notice { font-size: 20pt; }*/

    .m-wrapper {padding: 20px}
    .info-main {margin-top: 30px}
    .layui-form-label {width: 120px}
  </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 26
        echo "  <div class=\"m-wrapper\">
    ";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 27, $this->source); })()), "type", array()) == 1)) {
            // line 28
            echo "      ";
            $this->loadTemplate("IdentityManagement/_individualForm.twig", "Passport/IdentityManagement/verify.twig", 28)->display($context);
            // line 29
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 29, $this->source); })()), "type", array()) == 2)) {
            // line 30
            echo "      ";
            $this->loadTemplate("IdentityManagement/_businessForm.twig", "Passport/IdentityManagement/verify.twig", 30)->display($context);
            // line 31
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 31, $this->source); })()), "type", array()) == 3)) {
            // line 32
            echo "      ";
            $this->loadTemplate("IdentityManagement/_businessForm.twig", "Passport/IdentityManagement/verify.twig", 32)->display($context);
            // line 33
            echo "    ";
        }
        // line 34
        echo "  </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Passport/IdentityManagement/verify.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 34,  114 => 33,  111 => 32,  108 => 31,  105 => 30,  102 => 29,  99 => 28,  97 => 27,  94 => 26,  85 => 25,  59 => 7,  50 => 6,  40 => 1,  38 => 4,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Reseller/Common/layout.twig' %}
{% set title = '提交实名认证' %}

{% set left_nav = [{\"name\": \"实名认证\", \"route\": \"identity_management_index\", \"icon\": \"&#xe64e;\"}] %}

{% block css %}
  <style type=\"text/css\">
    /*input { height: 34px !important; }*/
    /*.page-content { text-align: left; }*/
    /*a:hover { opacity: .7; }*/
    /*.head-portrait { position: relative; }*/
    /*.uploadImage { position: absolute; top: 0; left: 0; width: 60px; height: 60px; overflow: hidden; }*/
    /*.uploadImage img { width: 100%; height: 100%; }*/
    /*#uploadImage { display: block; width: 60px; height: 60px !important; opacity: 0; cursor: pointer; }*/
    /*.verify_failed { height: 100%; line-height: 34px; color: red }*/
    /*.verify_successed { height: 100%; line-height: 34px; color: green }*/
    /*.notice { font-size: 20pt; }*/

    .m-wrapper {padding: 20px}
    .info-main {margin-top: 30px}
    .layui-form-label {width: 120px}
  </style>
{% endblock %}

{% block main_content %}
  <div class=\"m-wrapper\">
    {% if user.type == 1 %}
      {% include 'IdentityManagement/_individualForm.twig' %}
    {% elseif user.type == 2 %}
      {% include 'IdentityManagement/_businessForm.twig' %}
    {% elseif user.type == 3 %}
      {% include 'IdentityManagement/_businessForm.twig' %}
    {% endif %}
  </div>

{% endblock %}
", "Passport/IdentityManagement/verify.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\IdentityManagement\\verify.twig");
    }
}
