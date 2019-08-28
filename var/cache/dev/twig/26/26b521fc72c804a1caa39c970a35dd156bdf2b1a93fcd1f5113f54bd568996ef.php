<?php

/* Admin/SystemAdministration/SystemSetting/edit__system.twig */
class __TwigTemplate_c557603cea4d1e3b5862adbd6431e349adbdc7040ac8a29283f213a4f5d99b78 extends Twig_Template
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
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers.html.twig", "Admin/SystemAdministration/SystemSetting/edit__system.twig", 1);
        // line 2
        echo "
<div class=\"layui-card\">
  <div class=\"layui-card-header\">系统设置</div>
  <div class=\"layui-card-body\">
    <form action=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_system_settings_save", array("section" => "system"));
        echo "\" method=\"post\">
    <div class=\"layui-form layadmin-form-body\">
      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">运行模式：</label>
        <div class=\"layui-input-block\">
          ";
        // line 11
        echo $context["sf"]->macro_radio(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), "maintenance_mode", array()), "0", "正常运行模式");
        echo "
          ";
        // line 12
        echo $context["sf"]->macro_radio(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), "maintenance_mode", array()), "1", "维护模式");
        echo "
        </div>
      </div>
      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">网站名字：</label>
        <div class=\"layui-input-inline\" style=\"width: 500px;\">
          ";
        // line 18
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "site_name", array()), array("placeholder" => "网站名字"));
        echo "
        </div>
      </div>
      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">备案信息：</label>
        <div class=\"layui-input-block\" style=\"width: 500px;\">
          ";
        // line 24
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "beian_info", array()), array("placeholder" => "网站备案信息"));
        echo "
        </div>
      </div>
      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">维护模式提示信息：</label>
        <div class=\"layui-input-block\" style=\"width: 500px;\">
          ";
        // line 30
        echo $context["sf"]->macro_textarea(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "maintenance_note", array()), array("rows" => 10, "cols" => 120, "placeholder" => "支持 HTML 代码，使用 HTML 代码时请注意安全问题。"));
        echo "
        </div>
      </div>
    </div>
    <div class=\"layui-form\">
      <div class=\"layui-form-item\">
        <div class=\"layui-input-block\" style=\"margin-left: 170px;\">
          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_system_administration_system_settings_save"), "html", null, true);
        echo "\" />
          <button class=\"layui-btn\">保存</button>
          <button class=\"layui-btn layui-btn-primary\">取消</button>
        </div>
      </div>
    </div>
    </form>
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
        return array (  86 => 37,  76 => 30,  67 => 24,  58 => 18,  49 => 12,  45 => 11,  37 => 6,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import ('/Common/simple_form_helpers.html.twig') as sf %}

<div class=\"layui-card\">
  <div class=\"layui-card-header\">系统设置</div>
  <div class=\"layui-card-body\">
    <form action=\"{{ path('admin_system_administration_system_settings_save', {'section': 'system'}) }}\" method=\"post\">
    <div class=\"layui-form layadmin-form-body\">
      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">运行模式：</label>
        <div class=\"layui-input-block\">
          {{ sf.radio(form.maintenance_mode, '0', '正常运行模式') }}
          {{ sf.radio(form.maintenance_mode, '1', '维护模式') }}
        </div>
      </div>
      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">网站名字：</label>
        <div class=\"layui-input-inline\" style=\"width: 500px;\">
          {{ sf.text(form.site_name, {'placeholder': '网站名字'}) }}
        </div>
      </div>
      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">备案信息：</label>
        <div class=\"layui-input-block\" style=\"width: 500px;\">
          {{ sf.text(form.beian_info, {'placeholder': '网站备案信息'}) }}
        </div>
      </div>
      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">维护模式提示信息：</label>
        <div class=\"layui-input-block\" style=\"width: 500px;\">
          {{ sf.textarea(form.maintenance_note, {'rows': 10, 'cols': 120, 'placeholder': '支持 HTML 代码，使用 HTML 代码时请注意安全问题。'}) }}
        </div>
      </div>
    </div>
    <div class=\"layui-form\">
      <div class=\"layui-form-item\">
        <div class=\"layui-input-block\" style=\"margin-left: 170px;\">
          <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('admin_system_administration_system_settings_save') }}\" />
          <button class=\"layui-btn\">保存</button>
          <button class=\"layui-btn layui-btn-primary\">取消</button>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>
", "Admin/SystemAdministration/SystemSetting/edit__system.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\SystemAdministration\\SystemSetting\\edit__system.twig");
    }
}
