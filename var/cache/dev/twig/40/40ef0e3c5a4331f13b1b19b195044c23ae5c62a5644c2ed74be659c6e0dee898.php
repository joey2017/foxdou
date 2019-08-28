<?php

/* Passport/IdentityManagement/index.twig */
class __TwigTemplate_c2761219a52701e47da675310751a17a9f640371c5b85264456b23cfad2cbd59 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Reseller/Common/layout.twig", "Passport/IdentityManagement/index.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/IdentityManagement/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/IdentityManagement/index.twig"));

        // line 2
        $context["title"] = "实名身份管理";
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
  </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 22
        echo "  <div class=\"m-wrapper\">
    <div class=\"title-block\">
      <h2 class=\"title-skin\">实名认证</h2>
    </div>
    ";
        // line 26
        $context["user_type"] = ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "type", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "type", array()), "I")) : ("I"));
        // line 27
        echo "    ";
        $context["real_name_status"] = twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 27, $this->source); })()), "real_name_status", array());
        // line 28
        echo "
    ";
        // line 29
        if (((isset($context["real_name_status"]) || array_key_exists("real_name_status", $context) ? $context["real_name_status"] : (function () { throw new Twig_Error_Runtime('Variable "real_name_status" does not exist.', 29, $this->source); })()) == "UNKNOWN")) {
            echo " ";
            // line 30
            echo "      <div class=\"m-single\">
        <ul class=\"info-skin\">
          <li>
            <div class=\"info-skin-left\" style=\"margin-top: 15px;\"></div>
            <div class=\"info-skin-right\">
              <span class=\"notice\" id=\"info\">您还没有填写实名认证信息，请先填写并提交实名认证信息，认证通过后就可以使用本站所有功能了。</span>
            </div>
          </li>
        </ul>
      </div>
    ";
        } elseif ((        // line 40
(isset($context["real_name_status"]) || array_key_exists("real_name_status", $context) ? $context["real_name_status"] : (function () { throw new Twig_Error_Runtime('Variable "real_name_status" does not exist.', 40, $this->source); })()) == "INCOMPLETE")) {
            echo " ";
            // line 41
            echo "      <div class=\"m-single\">
        <ul class=\"info-skin\">
          <li>
            <div class=\"info-skin-left\" style=\"margin-top: 15px;\"></div>
            <div class=\"info-skin-right\">
              <span class=\"notice\">您的实名认证信息还没提交审核，请先提交实名认证信息。以下是您填写的实名认证信息</span>
            </div>
          </li>
        </ul>
      </div>
    ";
        } elseif ((        // line 51
(isset($context["real_name_status"]) || array_key_exists("real_name_status", $context) ? $context["real_name_status"] : (function () { throw new Twig_Error_Runtime('Variable "real_name_status" does not exist.', 51, $this->source); })()) == "PENDING")) {
            echo " ";
            // line 52
            echo "      <ul class=\"info-skin\">
        <li>
          <div class=\"info-skin-left\" style=\"margin-top: 15px;\"></div>
          <div class=\"info-skin-right\">
            <span class=\"notice\">您的实名认证信息正在等待审核，客服会尽快帮您审核通过，请耐心等待。以下是您填写的实名认证信息</span>
          </div>
        </li>
      </ul>
    ";
        } elseif ((        // line 60
(isset($context["real_name_status"]) || array_key_exists("real_name_status", $context) ? $context["real_name_status"] : (function () { throw new Twig_Error_Runtime('Variable "real_name_status" does not exist.', 60, $this->source); })()) == "REVIEW")) {
            // line 61
            echo "      <ul class=\"info-skin\">
        <li>
          <div class=\"info-skin-left\" style=\"margin-top: 15px;\"></div>
          <div class=\"info-skin-right\">
            <span class=\"notice\">您的实名认证正在审核中，客服会尽快帮您审核通过，请您耐心等待。以下是您提交的实名认证信息</span>
          </div>
        </li>
      </ul>
    ";
        } elseif ((        // line 69
(isset($context["real_name_status"]) || array_key_exists("real_name_status", $context) ? $context["real_name_status"] : (function () { throw new Twig_Error_Runtime('Variable "real_name_status" does not exist.', 69, $this->source); })()) == "FAILED")) {
            // line 70
            echo "      <ul class=\"info-skin\">
        <li>
          <div class=\"info-skin-left\" style=\"margin-top: 15px;\"></div>
          <div class=\"info-skin-right\">
            <span class=\"notice\">您的实名认证没有通过审核，请重新提交认证资料。以下是您提交的实名认证信息</span>
          </div>
        </li>
      </ul>
    ";
        } elseif ((        // line 78
(isset($context["real_name_status"]) || array_key_exists("real_name_status", $context) ? $context["real_name_status"] : (function () { throw new Twig_Error_Runtime('Variable "real_name_status" does not exist.', 78, $this->source); })()) == "VERIFIED")) {
            echo " ";
            // line 79
            echo "      <ul class=\"info-skin\">
        <li>
          <div class=\"info-skin-left\" style=\"margin-top: 15px;\"></div>
          <div class=\"info-skin-right\">
            <span class=\"notice\">您已通过实名认证，以下是您的实名认证信息</span>
          </div>
        </li>
      </ul>
    ";
        }
        // line 88
        echo "  </div>
  ";
        // line 89
        if (((isset($context["real_name_status"]) || array_key_exists("real_name_status", $context) ? $context["real_name_status"] : (function () { throw new Twig_Error_Runtime('Variable "real_name_status" does not exist.', 89, $this->source); })()) != "UNKNOWN")) {
            // line 90
            echo "      ";
            $context["realNameInfo"] = twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 90, $this->source); })()), "realNameInfo", array());
            // line 91
            echo "      ";
            if (((isset($context["user_type"]) || array_key_exists("user_type", $context) ? $context["user_type"] : (function () { throw new Twig_Error_Runtime('Variable "user_type" does not exist.', 91, $this->source); })()) == "I")) {
                // line 92
                echo "          ";
                $this->loadTemplate("/Passport/IdentityManagement/_individualIdentityInfo.twig", "Passport/IdentityManagement/index.twig", 92)->display($context);
                // line 93
                echo "      ";
            } else {
                // line 94
                echo "          ";
                $this->loadTemplate("/Passport/IdentityManagement/_businessIdentityInfo.twig", "Passport/IdentityManagement/index.twig", 94)->display($context);
                // line 95
                echo "      ";
            }
            // line 96
            echo "  ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Passport/IdentityManagement/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 96,  205 => 95,  202 => 94,  199 => 93,  196 => 92,  193 => 91,  190 => 90,  188 => 89,  185 => 88,  174 => 79,  171 => 78,  161 => 70,  159 => 69,  149 => 61,  147 => 60,  137 => 52,  134 => 51,  122 => 41,  119 => 40,  107 => 30,  104 => 29,  101 => 28,  98 => 27,  96 => 26,  90 => 22,  81 => 21,  59 => 7,  50 => 6,  40 => 1,  38 => 4,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Reseller/Common/layout.twig' %}
{% set title = '实名身份管理' %}

{% set left_nav = [{\"name\": \"实名认证\", \"route\": \"identity_management_index\", \"icon\": \"&#xe64e;\"}] %}

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
  </style>
{% endblock %}

{% block main_content %}
  <div class=\"m-wrapper\">
    <div class=\"title-block\">
      <h2 class=\"title-skin\">实名认证</h2>
    </div>
    {% set user_type = user.type|default('I') %}
    {% set real_name_status = user.real_name_status %}

    {% if real_name_status == 'UNKNOWN' %} {#// 没填写#}
      <div class=\"m-single\">
        <ul class=\"info-skin\">
          <li>
            <div class=\"info-skin-left\" style=\"margin-top: 15px;\"></div>
            <div class=\"info-skin-right\">
              <span class=\"notice\" id=\"info\">您还没有填写实名认证信息，请先填写并提交实名认证信息，认证通过后就可以使用本站所有功能了。</span>
            </div>
          </li>
        </ul>
      </div>
    {% elseif real_name_status == 'INCOMPLETE' %} {# 没提交 #}
      <div class=\"m-single\">
        <ul class=\"info-skin\">
          <li>
            <div class=\"info-skin-left\" style=\"margin-top: 15px;\"></div>
            <div class=\"info-skin-right\">
              <span class=\"notice\">您的实名认证信息还没提交审核，请先提交实名认证信息。以下是您填写的实名认证信息</span>
            </div>
          </li>
        </ul>
      </div>
    {% elseif real_name_status == 'PENDING' %} {# 等待审核 #}
      <ul class=\"info-skin\">
        <li>
          <div class=\"info-skin-left\" style=\"margin-top: 15px;\"></div>
          <div class=\"info-skin-right\">
            <span class=\"notice\">您的实名认证信息正在等待审核，客服会尽快帮您审核通过，请耐心等待。以下是您填写的实名认证信息</span>
          </div>
        </li>
      </ul>
    {% elseif real_name_status == 'REVIEW' %}
      <ul class=\"info-skin\">
        <li>
          <div class=\"info-skin-left\" style=\"margin-top: 15px;\"></div>
          <div class=\"info-skin-right\">
            <span class=\"notice\">您的实名认证正在审核中，客服会尽快帮您审核通过，请您耐心等待。以下是您提交的实名认证信息</span>
          </div>
        </li>
      </ul>
    {% elseif real_name_status == 'FAILED' %}
      <ul class=\"info-skin\">
        <li>
          <div class=\"info-skin-left\" style=\"margin-top: 15px;\"></div>
          <div class=\"info-skin-right\">
            <span class=\"notice\">您的实名认证没有通过审核，请重新提交认证资料。以下是您提交的实名认证信息</span>
          </div>
        </li>
      </ul>
    {% elseif real_name_status == 'VERIFIED' %} {# 审核通过 #}
      <ul class=\"info-skin\">
        <li>
          <div class=\"info-skin-left\" style=\"margin-top: 15px;\"></div>
          <div class=\"info-skin-right\">
            <span class=\"notice\">您已通过实名认证，以下是您的实名认证信息</span>
          </div>
        </li>
      </ul>
    {% endif %}
  </div>
  {% if real_name_status != 'UNKNOWN' %}
      {% set realNameInfo = user.realNameInfo %}
      {% if user_type == 'I' %}
          {% include '/Passport/IdentityManagement/_individualIdentityInfo.twig' %}
      {% else %}
          {% include '/Passport/IdentityManagement/_businessIdentityInfo.twig' %}
      {% endif %}
  {% endif %}
{% endblock %}
", "Passport/IdentityManagement/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\IdentityManagement\\index.twig");
    }
}
