<?php

/* Reseller/Dashboard/announcements.twig */
class __TwigTemplate_fed41739f43e0537a97c850542416e3fb50ea0d1be96f90afc8a81185d6db53f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Reseller/Common/layout.twig", "Reseller/Dashboard/announcements.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Dashboard/announcements.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Dashboard/announcements.twig"));

        // line 3
        $context["title"] = "平台公告";
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
    .m-notice{padding: 25px 0;border-bottom: 1px dashed #E0E0E0;}
    .m-notice:last-child{border: none;}
    .m-notice h1{height: 40px;}
    .title{font-size: 18px;font-weight: bold;}
    .title a{color: #666666;}
    .title a:hover{color: #1AB394;}
    .info-text{font-size: 14px;color: #666666;line-height: 20px;}
    .info-text p{padding-bottom: 10px;}
    .info-foot{height:20px;line-height: 20px;color: #999999;}
    .info-foot div{display: inline-block; margin-right:40px;}
  </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 23
        echo "  <div class=\"m-wrapper g-bdc\">
    <div class=\"m-notice-box\">
      ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["announcements"]) || array_key_exists("announcements", $context) ? $context["announcements"] : (function () { throw new Twig_Error_Runtime('Variable "announcements" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 26
            echo "      <div class=\"m-notice\">
        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_dashboard_announcement_details", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "\">
          <h1 class=\"title\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
            echo "</h1>
          <div class=\"info-text\">
            ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "abstracte", array()), "html", null, true);
            echo "
          </div>
          <div class=\"info-foot\">
            <div>发布时间：<span>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "add_time", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</span></div>
          </div>
        </a>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
      <div id=\"page\"></div>
    </div>
  </div>

  <script type=\"text/javascript\">
      layui.use(['laypage'],function () {
          var laypage = layui.laypage;
          laypage.render({
              elem: 'page'
              ,count: ";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["row_count"]) || array_key_exists("row_count", $context) ? $context["row_count"] : (function () { throw new Twig_Error_Runtime('Variable "row_count" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "
              ,curr: ";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "
          ,limit: ";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["page_size"]) || array_key_exists("page_size", $context) ? $context["page_size"] : (function () { throw new Twig_Error_Runtime('Variable "page_size" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "//每页要显示多少条
          ,limits:[page_size]
              ,first: '首页'
              ,last: '尾页'
              ,prev: '<em>←</em>'
              ,next: '<em>→</em>'
              ,layout:['prev','page','next','limit']
              ,jump: function(obj, first){
              if(!first){
                  location.href='?page='+obj.curr+'&page_size='+obj.limit;
              }
          }
      });
      });
  </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Reseller/Dashboard/announcements.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 50,  143 => 49,  139 => 48,  127 => 38,  116 => 33,  110 => 30,  105 => 28,  101 => 27,  98 => 26,  94 => 25,  90 => 23,  81 => 22,  57 => 6,  48 => 5,  38 => 1,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Reseller/Common/layout.twig' %}

{% set title = '平台公告' %}

{% block css %}
  <style type=\"text/css\">
    .m-wrapper{padding:10px 20px;text-align: left;}
    .m-notice-box{}
    .m-notice{padding: 25px 0;border-bottom: 1px dashed #E0E0E0;}
    .m-notice:last-child{border: none;}
    .m-notice h1{height: 40px;}
    .title{font-size: 18px;font-weight: bold;}
    .title a{color: #666666;}
    .title a:hover{color: #1AB394;}
    .info-text{font-size: 14px;color: #666666;line-height: 20px;}
    .info-text p{padding-bottom: 10px;}
    .info-foot{height:20px;line-height: 20px;color: #999999;}
    .info-foot div{display: inline-block; margin-right:40px;}
  </style>
{% endblock %}

{% block main_content %}
  <div class=\"m-wrapper g-bdc\">
    <div class=\"m-notice-box\">
      {% for item in announcements %}
      <div class=\"m-notice\">
        <a href=\"{{ path(\"reseller_dashboard_announcement_details\", {'id': item.id}) }}\">
          <h1 class=\"title\">{{ item.title }}</h1>
          <div class=\"info-text\">
            {{ item.abstracte }}
          </div>
          <div class=\"info-foot\">
            <div>发布时间：<span>{{ item.add_time|date(\"Y-m-d H:i:s\") }}</span></div>
          </div>
        </a>
      </div>
      {% endfor %}

      <div id=\"page\"></div>
    </div>
  </div>

  <script type=\"text/javascript\">
      layui.use(['laypage'],function () {
          var laypage = layui.laypage;
          laypage.render({
              elem: 'page'
              ,count: {{ row_count }}
              ,curr: {{ page }}
          ,limit: {{ page_size }}//每页要显示多少条
          ,limits:[page_size]
              ,first: '首页'
              ,last: '尾页'
              ,prev: '<em>←</em>'
              ,next: '<em>→</em>'
              ,layout:['prev','page','next','limit']
              ,jump: function(obj, first){
              if(!first){
                  location.href='?page='+obj.curr+'&page_size='+obj.limit;
              }
          }
      });
      });
  </script>

{% endblock %}", "Reseller/Dashboard/announcements.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Dashboard\\announcements.twig");
    }
}
