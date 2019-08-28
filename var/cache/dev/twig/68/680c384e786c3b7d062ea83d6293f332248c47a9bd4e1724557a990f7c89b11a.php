<?php

/* Reseller/Dashboard/operationLogs.twig */
class __TwigTemplate_d1c82d6469415363734772fd1468157a8f5d6035b7d44ffb37115e148417f502 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Reseller/Common/layout.twig", "Reseller/Dashboard/operationLogs.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Dashboard/operationLogs.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Dashboard/operationLogs.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Reseller/Dashboard/operationLogs.twig", 2);
        // line 4
        $context["title"] = "操作日志";
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
    .m-table-total{height: auto;margin: 10px; padding: 10px;background: #d9efff;border: 1px solid #E0E0E0;}
    .m-table-total li{float: left;margin: 0 20px;}
    .m-table-1{padding: 10px;}
    .m-table-1 img{width: 40px;height: 40px;}
    .btn-location button{height: 34px;}
    .layui-form-item{margin-bottom: 0px;}
    .ipt-ml .layui-input{border-color: #E6E6E6;}
    .m-screen-item{background-color: #ffffff}
  </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 20
        echo "<!-- 我的API -->
<div class=\"m-wrapper g-bdc\">
  <div class=\"m-screen-item\">
    <form action=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new Twig_Error_Runtime('Variable "current_route" does not exist.', 23, $this->source); })()));
        echo "\" method=\"get\" class=\"layui-form\">
    <div class=\"layui-form-item m-screen\">
      <label class=\"layui-form-label\">操作人</label>
      <div class=\"layui-input-inline m-input-block\">
        ";
        // line 27
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "user_name", array()), array("class" => "layui-input", "placeholder" => "狐豆帐号"));
        echo "
      </div>
      <label class=\"layui-form-label \">操作详情</label>
      <div class=\"layui-input-inline m-input-block\">
        ";
        // line 31
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "note", array()), array("class" => "layui-input", "placeholder" => "操作详情"));
        echo "
      </div>
      <label class=\"layui-form-label\">操作IP</label>
      <div class=\"layui-input-inline m-input-block\">
        ";
        // line 35
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "ip", array()), array("class" => "layui-input", "placeholder" => "操作IP"));
        echo "
      </div>
      <label class=\"layui-form-label\">操作时间</label>
      <div class=\"layui-input-inline m-input-block\" style=\"width: 90px;\">
        ";
        // line 39
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "from", array()), array("class" => "layui-input f-fnsna datepicker", "placeholder" => "开始时间", "style" => ""));
        echo "
      </div>
      <div class=\"layui-input-inline m-input-block\" style=\"width: 90px;\">
        ";
        // line 42
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "to", array()), array("class" => "layui-input f-fnsna datepicker", "placeholder" => "结束时间", "style" => ""));
        echo "
      </div>
    </div>
    <div class=\"m-cx\">
      <input type=\"submit\" value=\"查询\" class=\"layui-btn\">
    </div>
    <div style=\"clear: both;\"></div>
    </form>
  </div>
  <div class=\"m-table-1 g-bdc\">
    <table class=\"f-fl\">
      <thead>
      <tr>
        <th>操作时间</th>
        <th>操作详情</th>
        <th>操作IP</th>
        <th>操作人昵称</th>
        <th>平台帐号</th>
      </tr>
      </thead>
      <tbody id=\"data-table\">
      ";
        // line 63
        if ((isset($context["operation_logs"]) || array_key_exists("operation_logs", $context) ? $context["operation_logs"] : (function () { throw new Twig_Error_Runtime('Variable "operation_logs" does not exist.', 63, $this->source); })())) {
            // line 64
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["operation_logs"]) || array_key_exists("operation_logs", $context) ? $context["operation_logs"] : (function () { throw new Twig_Error_Runtime('Variable "operation_logs" does not exist.', 64, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 65
                echo "        <tr>
          <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "add_time", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
          <td>";
                // line 67
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["log"], "note", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["log"], "note", array()), "-")) : ("-")), "html", null, true);
                echo "</td>
          <td>";
                // line 68
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["log"], "ip", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["log"], "ip", array()), "-")) : ("-")), "html", null, true);
                echo "</td>
          <td>";
                // line 69
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["log"], "nick_name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["log"], "nick_name", array()), "-")) : ("-")), "html", null, true);
                echo "</td>
          <td>";
                // line 70
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["log"], "user_name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["log"], "user_name", array()), "-")) : ("-")), "html", null, true);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "      ";
        } else {
            // line 74
            echo "      ";
        }
        // line 75
        echo "      </tbody>
    </table>

    <div id=\"page\"></div>

  </div>
  <!-- /我的API -->
  <script type=\"text/javascript\">
      layui.use(['laydate'],function () {
          var laydate=layui.laydate;
          laydate.render( {
              elem: '#from'
              ,type: 'date'
          });
          laydate.render({
              elem: '#to'
              ,type: 'date'
          });
      });


      layui.use(['laypage'],function () {
          var laypage = layui.laypage;
          laypage.render({
              elem: 'page'
              ,count: ";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["row_count"]) || array_key_exists("row_count", $context) ? $context["row_count"] : (function () { throw new Twig_Error_Runtime('Variable "row_count" does not exist.', 100, $this->source); })()), "html", null, true);
        echo "
              ,curr: ";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 101, $this->source); })()), "html", null, true);
        echo "
              ,limit: ";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["page_size"]) || array_key_exists("page_size", $context) ? $context["page_size"] : (function () { throw new Twig_Error_Runtime('Variable "page_size" does not exist.', 102, $this->source); })()), "html", null, true);
        echo " //每页要显示多少条
              ,limits:null
              ,first: '首页'
              ,last: '尾页'
              ,prev: '<em>←</em>'
              ,next: '<em>→</em>'
              ,layout:['prev','page','next','limit']
              ,jump: function(obj, first){
                  if(!first){
                      location.href='?page='+obj.curr;
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
        return "Reseller/Dashboard/operationLogs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 102,  223 => 101,  219 => 100,  192 => 75,  189 => 74,  186 => 73,  177 => 70,  173 => 69,  169 => 68,  165 => 67,  161 => 66,  158 => 65,  153 => 64,  151 => 63,  127 => 42,  121 => 39,  114 => 35,  107 => 31,  100 => 27,  93 => 23,  88 => 20,  79 => 19,  59 => 7,  50 => 6,  40 => 1,  38 => 4,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Reseller/Common/layout.twig' %}
{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

{% set title = '操作日志' %}

{% block css %}
  <style type=\"text/css\">
    .m-table-total{height: auto;margin: 10px; padding: 10px;background: #d9efff;border: 1px solid #E0E0E0;}
    .m-table-total li{float: left;margin: 0 20px;}
    .m-table-1{padding: 10px;}
    .m-table-1 img{width: 40px;height: 40px;}
    .btn-location button{height: 34px;}
    .layui-form-item{margin-bottom: 0px;}
    .ipt-ml .layui-input{border-color: #E6E6E6;}
    .m-screen-item{background-color: #ffffff}
  </style>
{% endblock %}

{% block main_content %}
<!-- 我的API -->
<div class=\"m-wrapper g-bdc\">
  <div class=\"m-screen-item\">
    <form action=\"{{ path(current_route) }}\" method=\"get\" class=\"layui-form\">
    <div class=\"layui-form-item m-screen\">
      <label class=\"layui-form-label\">操作人</label>
      <div class=\"layui-input-inline m-input-block\">
        {{ sf.text(form.user_name,  {'class': 'layui-input',  'placeholder': '狐豆帐号'}) }}
      </div>
      <label class=\"layui-form-label \">操作详情</label>
      <div class=\"layui-input-inline m-input-block\">
        {{ sf.text(form.note,  {'class': 'layui-input',  'placeholder': '操作详情'}) }}
      </div>
      <label class=\"layui-form-label\">操作IP</label>
      <div class=\"layui-input-inline m-input-block\">
        {{ sf.text(form.ip,  {'class': 'layui-input',  'placeholder': '操作IP'}) }}
      </div>
      <label class=\"layui-form-label\">操作时间</label>
      <div class=\"layui-input-inline m-input-block\" style=\"width: 90px;\">
        {{ sf.text(form.from,  {'class': 'layui-input f-fnsna datepicker',  'placeholder': '开始时间', 'style': ''}) }}
      </div>
      <div class=\"layui-input-inline m-input-block\" style=\"width: 90px;\">
        {{ sf.text(form.to,  {'class': 'layui-input f-fnsna datepicker',  'placeholder': '结束时间', 'style': ''}) }}
      </div>
    </div>
    <div class=\"m-cx\">
      <input type=\"submit\" value=\"查询\" class=\"layui-btn\">
    </div>
    <div style=\"clear: both;\"></div>
    </form>
  </div>
  <div class=\"m-table-1 g-bdc\">
    <table class=\"f-fl\">
      <thead>
      <tr>
        <th>操作时间</th>
        <th>操作详情</th>
        <th>操作IP</th>
        <th>操作人昵称</th>
        <th>平台帐号</th>
      </tr>
      </thead>
      <tbody id=\"data-table\">
      {% if operation_logs %}
        {% for log in operation_logs %}
        <tr>
          <td>{{ log.add_time|date('Y-m-d H:i:s') }}</td>
          <td>{{ log.note|default('-') }}</td>
          <td>{{ log.ip|default('-') }}</td>
          <td>{{ log.nick_name|default('-') }}</td>
          <td>{{ log.user_name|default('-') }}</td>
        </tr>
        {% endfor %}
      {% else %}
      {% endif %}
      </tbody>
    </table>

    <div id=\"page\"></div>

  </div>
  <!-- /我的API -->
  <script type=\"text/javascript\">
      layui.use(['laydate'],function () {
          var laydate=layui.laydate;
          laydate.render( {
              elem: '#from'
              ,type: 'date'
          });
          laydate.render({
              elem: '#to'
              ,type: 'date'
          });
      });


      layui.use(['laypage'],function () {
          var laypage = layui.laypage;
          laypage.render({
              elem: 'page'
              ,count: {{ row_count }}
              ,curr: {{ page }}
              ,limit: {{ page_size }} //每页要显示多少条
              ,limits:null
              ,first: '首页'
              ,last: '尾页'
              ,prev: '<em>←</em>'
              ,next: '<em>→</em>'
              ,layout:['prev','page','next','limit']
              ,jump: function(obj, first){
                  if(!first){
                      location.href='?page='+obj.curr;
                  }
              }
          });
      });
  </script>
{% endblock %}", "Reseller/Dashboard/operationLogs.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Dashboard\\operationLogs.twig");
    }
}
