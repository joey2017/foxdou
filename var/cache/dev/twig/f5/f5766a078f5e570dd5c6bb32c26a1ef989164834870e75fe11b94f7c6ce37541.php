<?php

/* Reseller/PrinterSetting/index.twig */
class __TwigTemplate_6108c60d3ba469e2f88d8edb249bd86f99be5f36faeacc25e150b6026bc4bebc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Reseller/Common/layout.twig", "Reseller/PrinterSetting/index.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/PrinterSetting/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/PrinterSetting/index.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Reseller/PrinterSetting/index.twig", 2);
        // line 4
        $context["print_type"] = (((isset($context["print_type"]) || array_key_exists("print_type", $context))) ? (_twig_default_filter((isset($context["print_type"]) || array_key_exists("print_type", $context) ? $context["print_type"] : (function () { throw new Twig_Error_Runtime('Variable "print_type" does not exist.', 4, $this->source); })()), "THERMAL_58MM")) : ("THERMAL_58MM"));
        // line 5
        $context["title_map"] = array("thermal_58mm" => "打印设置-58mm热敏打印-狐豆", "generic" => "打印设置-普通打印样板-狐豆");
        // line 11
        $context["title"] = ((twig_get_attribute($this->env, $this->source, ($context["title_map"] ?? null), (isset($context["print_type"]) || array_key_exists("print_type", $context) ? $context["print_type"] : (function () { throw new Twig_Error_Runtime('Variable "print_type" does not exist.', 11, $this->source); })()), array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["title_map"] ?? null), (isset($context["print_type"]) || array_key_exists("print_type", $context) ? $context["print_type"] : (function () { throw new Twig_Error_Runtime('Variable "print_type" does not exist.', 11, $this->source); })()), array(), "array"), "打印设置-普通打印样板-狐豆")) : ("打印设置-普通打印样板-狐豆"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 14
        echo "  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/print-single.css\">
  <style>
    .layui-form-switch {
      float: right;}
  </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 25
        echo "  <form id=\"print_settings\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_printer_settings_save", array("print_type" => (isset($context["print_type"]) || array_key_exists("print_type", $context) ? $context["print_type"] : (function () { throw new Twig_Error_Runtime('Variable "print_type" does not exist.', 25, $this->source); })()))), "html", null, true);
        echo "\" method=\"post\"  class=\"layui-form\">
  <div class=\"m-wrapper\">
    <div class=\"layui-form hz-form\">
      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\" style=\"width: auto;\"><b>选择打印默认模板：</b></label>
        <div class=\"layui-input-block\">
          <input type=\"radio\" name=\"print_type\" lay-filter=\"print_type\" value=\"THERMAL_58MM\" title=\"58mm热敏打印样板\" ";
        // line 31
        echo ((((isset($context["print_type"]) || array_key_exists("print_type", $context) ? $context["print_type"] : (function () { throw new Twig_Error_Runtime('Variable "print_type" does not exist.', 31, $this->source); })()) == "THERMAL_58MM")) ? ("checked") : (""));
        echo ">
          <input type=\"radio\" name=\"print_type\" lay-filter=\"print_type\" value=\"GENERIC\" title=\"普通打印样板\"  ";
        // line 32
        echo ((((isset($context["print_type"]) || array_key_exists("print_type", $context) ? $context["print_type"] : (function () { throw new Twig_Error_Runtime('Variable "print_type" does not exist.', 32, $this->source); })()) == "GENERIC")) ? ("checked") : (""));
        echo ">
        </div>
      </div>
    </div>
    <div class=\"hz-box\">
      <div class=\"hz-form-contant\">
      ";
        // line 38
        if (((isset($context["print_type"]) || array_key_exists("print_type", $context) ? $context["print_type"] : (function () { throw new Twig_Error_Runtime('Variable "print_type" does not exist.', 38, $this->source); })()) == "THERMAL_58MM")) {
            // line 39
            echo "        ";
            $this->loadTemplate("/Reseller/PrinterSetting/printer_THERMAL_58MM.twig", "Reseller/PrinterSetting/index.twig", 39)->display(array_merge($context, array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()))));
            // line 40
            echo "      ";
        } else {
            // line 41
            echo "        ";
            $this->loadTemplate("/Reseller/PrinterSetting/printer_GENERIC.twig", "Reseller/PrinterSetting/index.twig", 41)->display(array_merge($context, array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()))));
            // line 42
            echo "      ";
        }
        // line 43
        echo "      </div>
    </div>
  </div>
  <div hidden>
    <input type=\"text\" id=\"product_type_content\" class=\"print_view_content\" value=\"\">
    <input type=\"text\" id=\"print_info_content\" class=\"print_view_content\" value=\"\">
      ";
        // line 49
        echo $context["sf"]->macro_csrf("printer_settings");
        echo "

  </div>
  </form>

  <script type=\"text/javascript\">
      layui.use(['form'], function(){
          var form = layui.form;
          form.on('radio(print_type)', function(data){
              location.href='";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new Twig_Error_Runtime('Variable "current_route" does not exist.', 58, $this->source); })()));
        echo "?print_type=' + data.value ;
          });

      });
  </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Reseller/PrinterSetting/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 58,  150 => 49,  142 => 43,  139 => 42,  136 => 41,  133 => 40,  130 => 39,  128 => 38,  119 => 32,  115 => 31,  105 => 25,  96 => 24,  79 => 21,  64 => 14,  55 => 13,  45 => 1,  43 => 11,  41 => 5,  39 => 4,  37 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Reseller/Common/layout.twig' %}
{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

{% set print_type = print_type|default(\"THERMAL_58MM\") %}
{% set title_map = {
    \"thermal_58mm\": \"打印设置-58mm热敏打印-狐豆\",
    \"generic\": \"打印设置-普通打印样板-狐豆\",
   }
%}

{% set title = title_map[print_type]|default(\"打印设置-普通打印样板-狐豆\") %}

{% block css %}
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/print-single.css\">
  <style>
    .layui-form-switch {
      float: right;}
  </style>
{% endblock %}

{% block js %}
{% endblock %}

{% block main_content %}
  <form id=\"print_settings\" action=\"{{ path(\"reseller_printer_settings_save\", {\"print_type\": print_type}) }}\" method=\"post\"  class=\"layui-form\">
  <div class=\"m-wrapper\">
    <div class=\"layui-form hz-form\">
      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\" style=\"width: auto;\"><b>选择打印默认模板：</b></label>
        <div class=\"layui-input-block\">
          <input type=\"radio\" name=\"print_type\" lay-filter=\"print_type\" value=\"THERMAL_58MM\" title=\"58mm热敏打印样板\" {{ print_type == 'THERMAL_58MM' ? \"checked\" : \"\" }}>
          <input type=\"radio\" name=\"print_type\" lay-filter=\"print_type\" value=\"GENERIC\" title=\"普通打印样板\"  {{ print_type == 'GENERIC' ? \"checked\" : \"\" }}>
        </div>
      </div>
    </div>
    <div class=\"hz-box\">
      <div class=\"hz-form-contant\">
      {% if print_type == 'THERMAL_58MM' %}
        {% include \"/Reseller/PrinterSetting/printer_THERMAL_58MM.twig\" with {\"form\": form} %}
      {% else %}
        {% include \"/Reseller/PrinterSetting/printer_GENERIC.twig\" with {\"form\": form} %}
      {% endif %}
      </div>
    </div>
  </div>
  <div hidden>
    <input type=\"text\" id=\"product_type_content\" class=\"print_view_content\" value=\"\">
    <input type=\"text\" id=\"print_info_content\" class=\"print_view_content\" value=\"\">
      {{ sf.csrf('printer_settings') }}

  </div>
  </form>

  <script type=\"text/javascript\">
      layui.use(['form'], function(){
          var form = layui.form;
          form.on('radio(print_type)', function(data){
              location.href='{{ path(current_route) }}?print_type=' + data.value ;
          });

      });
  </script>

{% endblock %}
", "Reseller/PrinterSetting/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\PrinterSetting\\index.twig");
    }
}
