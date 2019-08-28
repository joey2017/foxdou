<?php

/* Admin/SystemAdministration/SystemSetting/edit__system.twig */
class __TwigTemplate_481a4dc959b0b49d74def4d0b51a5f8b0c6d9df51ecc996cf49da4da1bcb0698 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/SystemSetting/edit__system.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/SystemSetting/edit__system.twig"));

        // line 1
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Admin/SystemAdministration/SystemSetting/edit__system.twig", 1);
        // line 2
        echo "
<div class=\"layui-card-header\">系统设置</div>
<div class=\"layui-card-body\">
  <div class=\"layui-collapse  layadmin-form-body\">
    <div class=\"layui-colla-item\">
      <h2 class=\"layui-colla-title\">网站信息设置</h2>
      <div class=\"layui-colla-content layui-show\">
          ";
        // line 9
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->source); })()), "site_name", array()), "网站名字");
        echo "
          ";
        // line 10
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), "beian_info", array()), "网站备案信息");
        echo "
      </div>
    </div>
    <div class=\"layui-colla-item\">
      <h2 class=\"layui-colla-title\">网站运行模式</h2>
      <div class=\"layui-colla-content layui-show\">
          ";
        // line 16
        echo $context["sf"]->macro_radio(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), "maintenance_mode", array()), "运行模式", array("0" => "正常运行模式", "1" => "维护模式"));
        echo "
          ";
        // line 17
        echo $context["sf"]->macro_textarea(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), "maintenance_note", array()), "维护模式提示信息", array(), array("rows" => 10, "cols" => 120, "placeholder" => "支持 HTML 代码，使用 HTML 代码时请注意安全问题。"));
        echo "
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/SystemAdministration/SystemSetting/edit__system.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  53 => 16,  44 => 10,  40 => 9,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

<div class=\"layui-card-header\">系统设置</div>
<div class=\"layui-card-body\">
  <div class=\"layui-collapse  layadmin-form-body\">
    <div class=\"layui-colla-item\">
      <h2 class=\"layui-colla-title\">网站信息设置</h2>
      <div class=\"layui-colla-content layui-show\">
          {{ sf.text(form.site_name,    '网站名字') }}
          {{ sf.text(form.beian_info,    '网站备案信息') }}
      </div>
    </div>
    <div class=\"layui-colla-item\">
      <h2 class=\"layui-colla-title\">网站运行模式</h2>
      <div class=\"layui-colla-content layui-show\">
          {{ sf.radio(form.maintenance_mode,    '运行模式', {'0': '正常运行模式', '1': '维护模式'}) }}
          {{ sf.textarea(form.maintenance_note, '维护模式提示信息', {}, {'rows': 10, 'cols': 120, 'placeholder': '支持 HTML 代码，使用 HTML 代码时请注意安全问题。'}) }}
      </div>
    </div>
  </div>
</div>
", "Admin/SystemAdministration/SystemSetting/edit__system.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\SystemAdministration\\SystemSetting\\edit__system.twig");
    }
}
