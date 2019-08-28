<?php

/* Passport/IdentityManagement/test.twig */
class __TwigTemplate_e77eca99e3470d3e7d5a9a653cb0e3358cbce6813aa1b6382b93ac2e30f9f4d9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Reseller/Common/layout.twig", "Passport/IdentityManagement/test.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/IdentityManagement/test.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/IdentityManagement/test.twig"));

        // line 2
        $context["title"] = "测试";
        // line 3
        $context["left_nav"] = array(0 => array("name" => "实名认证", "route" => "identity_management_index", "icon" => "&#xe64e;"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 11
        echo "  <style type=\"text/css\">
    input { height: 34px !important; }
    .page-content { text-align: left; }
    a:hover { opacity: .7; }
    .head-portrait { position: relative; }
    .uploadImage { position: absolute; top: 0; left: 0; width: 60px; height: 60px; overflow: hidden; }
    .uploadImage img { width: 100%; height: 100%; }
    #uploadImage { display: block; width: 60px; height: 60px !important; opacity: 0; cursor: pointer; }
    .verify_failed { height: 100%; line-height: 34px; color: red }
    .verify_successed { height: 100%; line-height: 34px; color: green }
    .notice { font-size: 20pt; }
    .w-wrapper {padding: 15px; background-color: #ffffff}
    .w-wrapper h1 {margin-top: 0}


  </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 30
        echo "  <div class=\"w-wrapper\">
    <div class=\"title-block\">
      <h2 class=\"titlr-skin\">实名认证</h2>
    </div>
    <div class=\"w-single\">
      <ul class=\"info-shin\">
        <li>
          <div class=\"info-skin-left\" style=\"margin-top: 15px;\"></div>
          <div class=\"info-skin-right\">
            <span class=\"notice\" id=\"info\">您还没有填写实名认证信息，请先填写并提交实名认证信息，认证通过后就可以使用本站所有功能了。</span>
          </div>
        </li>
      </ul>
    </div>
    ";
        // line 44
        if ((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 44, $this->source); })())) {
            // line 45
            echo "      欢迎 ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 45, $this->source); })()), "realNameInfo", array()), "status", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 47
            echo "      <a href=\"/login\">请登录</a>
    ";
        }
        // line 49
        echo "
    ";
        // line 50
        $context["items"] = array(0 => array("name" => "张三", "id" => "1"), 1 => array("name" => "李四", "id" => "2"), 2 => array("name" => "王五", "id" => "3"));
        // line 51
        echo "    <ul>
      ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new Twig_Error_Runtime('Variable "items" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 53
            echo "        <li><a href=\"http:://qq.com/?name=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
            echo "</a> </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "     </ul>
    <div style=\"border: solid 3px red;\">";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 56, $this->source); })()), "html", null, true);
        echo "</div>
  </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Passport/IdentityManagement/test.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 56,  145 => 55,  134 => 53,  130 => 52,  127 => 51,  125 => 50,  122 => 49,  118 => 47,  112 => 45,  110 => 44,  94 => 30,  85 => 29,  59 => 11,  50 => 10,  40 => 1,  38 => 3,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Reseller/Common/layout.twig' %}
{% set title = '测试' %}
{% set left_nav = [{\"name\": \"实名认证\", \"route\": \"identity_management_index\", \"icon\": \"&#xe64e;\"}] %}

{#  user: id, user_name, nick_name, realNameInfo  #}

{#  realNameInfo: status, legal_person_name, business_name  #}


{% block css %}
  <style type=\"text/css\">
    input { height: 34px !important; }
    .page-content { text-align: left; }
    a:hover { opacity: .7; }
    .head-portrait { position: relative; }
    .uploadImage { position: absolute; top: 0; left: 0; width: 60px; height: 60px; overflow: hidden; }
    .uploadImage img { width: 100%; height: 100%; }
    #uploadImage { display: block; width: 60px; height: 60px !important; opacity: 0; cursor: pointer; }
    .verify_failed { height: 100%; line-height: 34px; color: red }
    .verify_successed { height: 100%; line-height: 34px; color: green }
    .notice { font-size: 20pt; }
    .w-wrapper {padding: 15px; background-color: #ffffff}
    .w-wrapper h1 {margin-top: 0}


  </style>
{% endblock %}

{% block main_content %}
  <div class=\"w-wrapper\">
    <div class=\"title-block\">
      <h2 class=\"titlr-skin\">实名认证</h2>
    </div>
    <div class=\"w-single\">
      <ul class=\"info-shin\">
        <li>
          <div class=\"info-skin-left\" style=\"margin-top: 15px;\"></div>
          <div class=\"info-skin-right\">
            <span class=\"notice\" id=\"info\">您还没有填写实名认证信息，请先填写并提交实名认证信息，认证通过后就可以使用本站所有功能了。</span>
          </div>
        </li>
      </ul>
    </div>
    {% if user %}
      欢迎 {{ user.realNameInfo.status }}
    {% else %}
      <a href=\"/login\">请登录</a>
    {% endif %}

    {% set items = [ {\"name\": \"张三\", \"id\": \"1\"}, {\"name\": \"李四\", \"id\": \"2\"}, {\"name\": \"王五\", \"id\": \"3\"} ] %}
    <ul>
      {% for item in items %}
        <li><a href=\"http:://qq.com/?name={{ item.id }}\">{{ item.name }}</a> </li>
      {% endfor %}
     </ul>
    <div style=\"border: solid 3px red;\">{{ title }}</div>
  </div>

{% endblock %}
", "Passport/IdentityManagement/test.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\IdentityManagement\\test.twig");
    }
}
