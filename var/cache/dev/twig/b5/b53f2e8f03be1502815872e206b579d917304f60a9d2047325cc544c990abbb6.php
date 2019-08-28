<?php

/* Reseller/Dashboard/announcementDetails.twig */
class __TwigTemplate_f88a2ac5626a401d5d5802ddf8a699b45782702fd4e0c00988164b1c9ae62014 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Reseller/Common/layout.twig", "Reseller/Dashboard/announcementDetails.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Dashboard/announcementDetails.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Dashboard/announcementDetails.twig"));

        // line 3
        $context["title"] = twig_get_attribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new Twig_Error_Runtime('Variable "announcement" does not exist.', 3, $this->source); })()), "title", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "  <style type=\"text/css\">
    .m-wrapper{padding:10px 20px;text-align: left;}
    .m-notice-box{}
    .m-notice{padding: 10px 0;}
    .m-notice h1{height: 50px;line-height: 50px; margin: 20px 0;}
    .title{font-size: 28px;font-weight: bold;color: #666666;}
    .info-pro{height: 40px;line-height: 40px; border-bottom: 1px dashed #E0E0E0;color: #999999;padding-bottom: 8px;}
    .info-pro div{display: inline-block;text-align: center;margin: 0 30px;}
    .info-text{padding: 40px 0; text-align: left;line-height: 30px;color: #666666;font-size: 16px;}
    .info-text p{margin-bottom: 20px;}
    .info-text img{max-width: 100%;margin: 0 auto;}
    .info-foot{text-align: center;}
    .info-foot a{display: inline-block;margin: 0 20px; line-height: 30px;padding: 0 20px;border-radius: 2px; border: 1px solid #1AB394;color: #1AB394;}
    .info-foot a:hover{background: #F5F5F5;}
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
        echo "  <div class=\"m-wrapper g-bdc\">
    <div class=\"m-notice-box\">
      <div class=\"m-notice\">
        <h1 class=\"title\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new Twig_Error_Runtime('Variable "announcement" does not exist.', 29, $this->source); })()), "title", array()), "html", null, true);
        echo "</h1>
        <div class=\"info-pro\">
          <div>发布时间：<span>";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new Twig_Error_Runtime('Variable "announcement" does not exist.', 31, $this->source); })()), "add_time", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</span></div>
        </div>
        <div class=\"info-text\">
          ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new Twig_Error_Runtime('Variable "announcement" does not exist.', 34, $this->source); })()), "content", array()), "html", null, true);
        echo "
        </div>
        <div class=\"info-foot\">
          ";
        // line 37
        if ((isset($context["prev_id"]) || array_key_exists("prev_id", $context) ? $context["prev_id"] : (function () { throw new Twig_Error_Runtime('Variable "prev_id" does not exist.', 37, $this->source); })())) {
            // line 38
            echo "            <a href=\"\">上一篇</a>
          ";
        }
        // line 40
        echo "
          <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_dashboard_announcements");
        echo "\">返回列表</a>

          ";
        // line 43
        if ((isset($context["next_id"]) || array_key_exists("next_id", $context) ? $context["next_id"] : (function () { throw new Twig_Error_Runtime('Variable "next_id" does not exist.', 43, $this->source); })())) {
            // line 44
            echo "            <a href=\"\">下一篇</a>
          ";
        }
        // line 46
        echo "        </div>
      </div>
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Reseller/Dashboard/announcementDetails.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 46,  131 => 44,  129 => 43,  124 => 41,  121 => 40,  117 => 38,  115 => 37,  109 => 34,  103 => 31,  98 => 29,  93 => 26,  84 => 25,  57 => 6,  48 => 5,  38 => 1,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Reseller/Common/layout.twig' %}

{% set title = announcement.title %}

{% block css %}
  <style type=\"text/css\">
    .m-wrapper{padding:10px 20px;text-align: left;}
    .m-notice-box{}
    .m-notice{padding: 10px 0;}
    .m-notice h1{height: 50px;line-height: 50px; margin: 20px 0;}
    .title{font-size: 28px;font-weight: bold;color: #666666;}
    .info-pro{height: 40px;line-height: 40px; border-bottom: 1px dashed #E0E0E0;color: #999999;padding-bottom: 8px;}
    .info-pro div{display: inline-block;text-align: center;margin: 0 30px;}
    .info-text{padding: 40px 0; text-align: left;line-height: 30px;color: #666666;font-size: 16px;}
    .info-text p{margin-bottom: 20px;}
    .info-text img{max-width: 100%;margin: 0 auto;}
    .info-foot{text-align: center;}
    .info-foot a{display: inline-block;margin: 0 20px; line-height: 30px;padding: 0 20px;border-radius: 2px; border: 1px solid #1AB394;color: #1AB394;}
    .info-foot a:hover{background: #F5F5F5;}
  </style>


{% endblock %}

{% block main_content %}
  <div class=\"m-wrapper g-bdc\">
    <div class=\"m-notice-box\">
      <div class=\"m-notice\">
        <h1 class=\"title\">{{ announcement.title }}</h1>
        <div class=\"info-pro\">
          <div>发布时间：<span>{{ announcement.add_time|date(\"Y-m-d H:i:s\") }}</span></div>
        </div>
        <div class=\"info-text\">
          {{ announcement.content }}
        </div>
        <div class=\"info-foot\">
          {% if prev_id %}
            <a href=\"\">上一篇</a>
          {% endif %}

          <a href=\"{{ path(\"reseller_dashboard_announcements\") }}\">返回列表</a>

          {% if next_id %}
            <a href=\"\">下一篇</a>
          {% endif %}
        </div>
      </div>
    </div>
  </div>
{% endblock %}", "Reseller/Dashboard/announcementDetails.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Dashboard\\announcementDetails.twig");
    }
}
