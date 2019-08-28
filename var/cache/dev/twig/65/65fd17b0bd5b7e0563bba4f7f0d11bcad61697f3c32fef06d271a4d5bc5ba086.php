<?php

/* Admin/SystemAdministration/SystemSetting/edit__passport.twig */
class __TwigTemplate_d0b4703bb2b8650506c4ab5925184dc11e09ab2cd5b5deeef8e993e6eb2b9b2a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/SystemSetting/edit__passport.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/SystemSetting/edit__passport.twig"));

        // line 1
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Admin/SystemAdministration/SystemSetting/edit__passport.twig", 1);
        // line 2
        echo "
<div class=\"layui-card-header\">通行证设置</div>
<div class=\"layui-card-body\">
  <div class=\"layui-tab layui-tab-brief\">
    <ul class=\"layui-tab-title\">
      <li class=\"layui-this\">个人通行证注册激活/平台账户自动开户</li>
      <li>企业通行证注册激活/平台账户自动开户</li>
      <li>账密错误导致通行证冻结</li>
    </ul>
    <div class=\"layui-tab-content  layadmin-form-body\" style=\"padding-top: 10px;\">
      <div class=\"layui-tab-item layui-show\">
        <div class=\"layui-form \">
          ";
        // line 14
        echo $context["sf"]->macro_radio(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "individual_requires_identity", array()), "注册时", array("0" => "注册时需要填写身份信息", "1" => "注册时不需要填写身份信息"), array("inner" => "block"));
        echo "
          ";
        // line 15
        echo $context["sf"]->macro_radio(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->source); })()), "individual_activation_method", array()), "注册后", array("0" => "注册后无需审核身份信息自动激活", "1" => "注册后需审核身份信息才自动激活"), array("inner" => "block"));
        echo "
          ";
        // line 16
        echo $context["sf"]->macro_radio(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), "individual_identity_verify_method", array()), "身份审核方式", array("0" => "后台人工", "1" => "接口校验（调取失败转人工）"), array("inner" => "block"));
        echo "
          ";
        // line 17
        echo $context["sf"]->macro_radio(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), "individual_open_platform_create_account_method", array()), "开放平台账户开户方式", array("0" => "激活通行证自动开户", "1" => "身份信息过审自动开户", "2" => "需完成身份信息审核后，额外申请开户并通过"), array("inner" => "block"));
        echo "
          ";
        // line 18
        echo $context["sf"]->macro_radio(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "individual_reseller_platform_create_account_method", array()), "代理商平台账户开户方式", array("0" => "激活通行证自动开户", "1" => "身份信息过审自动开户", "2" => "需完成身份信息审核后，额外申请开户并通过"), array("inner" => "block"));
        echo "
          ";
        // line 19
        echo $context["sf"]->macro_radio(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "individual_supplier_platform_create_account_method", array()), "供应商平台账户开户方式", array("0" => "激活通行证自动开户", "1" => "身份信息过审自动开户", "2" => "需完成身份信息审核后，额外申请开户并通过"), array("inner" => "block"));
        echo "
        </div>
      </div>
      <div class=\"layui-tab-item\">
        <div class=\"layui-form\">
          ";
        // line 24
        echo $context["sf"]->macro_radio(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "business_activation_method", array()), "注册后", array("0" => "注册后完成邮箱验证，无需审核身份信息自动激活", "1" => "注册后完成邮箱验证，需审核身份信息才自动激活"), array("inner" => "block"));
        echo "
          ";
        // line 25
        echo $context["sf"]->macro_radio(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "business_identity_verify_method", array()), "身份审核方式", array("0" => "后台人工", "1" => "接口校验（调取失败转人工）"), array("inner" => "block"));
        echo "
          ";
        // line 26
        echo $context["sf"]->macro_radio(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "business_open_platform_create_account_method", array()), "开放平台账户开户方式", array("0" => "激活通行证自动开户", "1" => "身份信息过审自动开户", "2" => "需完成身份信息审核后，额外申请开户并通过"), array("inner" => "block"));
        echo "
          ";
        // line 27
        echo $context["sf"]->macro_radio(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "business_reseller_platform_create_account_method", array()), "代理商平台账户开户方式", array("0" => "激活通行证自动开户", "1" => "身份信息过审自动开户", "2" => "需完成身份信息审核后，额外申请开户并通过"), array("inner" => "block"));
        echo "
          ";
        // line 28
        echo $context["sf"]->macro_radio(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), "business_supplier_platform_create_account_method", array()), "供应商平台账户开户方式", array("0" => "激活通行证自动开户", "1" => "身份信息过审自动开户", "2" => "需完成身份信息审核后，额外申请开户并通过"), array("inner" => "block"));
        echo "
        </div>
      </div>
      <div class=\"layui-tab-item\">
        <div class=\"layui-form\">
          ";
        // line 33
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "max_password_errors_per_day", array()), "每日最多允许输错密码次数", array("inner" => "block"));
        echo "
          ";
        // line 34
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), "suspend_period", array()), "超过错误次数后冻结时间", array("inner" => "block"));
        echo "
        </div>
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
        return "Admin/SystemAdministration/SystemSetting/edit__passport.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 34,  97 => 33,  89 => 28,  85 => 27,  81 => 26,  77 => 25,  73 => 24,  65 => 19,  61 => 18,  57 => 17,  53 => 16,  49 => 15,  45 => 14,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

<div class=\"layui-card-header\">通行证设置</div>
<div class=\"layui-card-body\">
  <div class=\"layui-tab layui-tab-brief\">
    <ul class=\"layui-tab-title\">
      <li class=\"layui-this\">个人通行证注册激活/平台账户自动开户</li>
      <li>企业通行证注册激活/平台账户自动开户</li>
      <li>账密错误导致通行证冻结</li>
    </ul>
    <div class=\"layui-tab-content  layadmin-form-body\" style=\"padding-top: 10px;\">
      <div class=\"layui-tab-item layui-show\">
        <div class=\"layui-form \">
          {{ sf.radio(form.individual_requires_identity, '注册时', {'0': '注册时需要填写身份信息', '1': '注册时不需要填写身份信息'}, {'inner': 'block'}) }}
          {{ sf.radio(form.individual_activation_method, '注册后', {'0': '注册后无需审核身份信息自动激活', '1': '注册后需审核身份信息才自动激活'}, {'inner': 'block'}) }}
          {{ sf.radio(form.individual_identity_verify_method, '身份审核方式', {'0': '后台人工', '1': '接口校验（调取失败转人工）'}, {'inner': 'block'}) }}
          {{ sf.radio(form.individual_open_platform_create_account_method, '开放平台账户开户方式', {'0': '激活通行证自动开户', '1': '身份信息过审自动开户', '2': '需完成身份信息审核后，额外申请开户并通过'}, {'inner': 'block'}) }}
          {{ sf.radio(form.individual_reseller_platform_create_account_method, '代理商平台账户开户方式', {'0': '激活通行证自动开户', '1': '身份信息过审自动开户', '2': '需完成身份信息审核后，额外申请开户并通过'}, {'inner': 'block'}) }}
          {{ sf.radio(form.individual_supplier_platform_create_account_method, '供应商平台账户开户方式', {'0': '激活通行证自动开户', '1': '身份信息过审自动开户', '2': '需完成身份信息审核后，额外申请开户并通过'}, {'inner': 'block'}) }}
        </div>
      </div>
      <div class=\"layui-tab-item\">
        <div class=\"layui-form\">
          {{ sf.radio(form.business_activation_method, '注册后', {'0': '注册后完成邮箱验证，无需审核身份信息自动激活', '1': '注册后完成邮箱验证，需审核身份信息才自动激活'}, {'inner': 'block'}) }}
          {{ sf.radio(form.business_identity_verify_method, '身份审核方式', {'0': '后台人工', '1': '接口校验（调取失败转人工）'}, {'inner': 'block'}) }}
          {{ sf.radio(form.business_open_platform_create_account_method, '开放平台账户开户方式', {'0': '激活通行证自动开户', '1': '身份信息过审自动开户', '2': '需完成身份信息审核后，额外申请开户并通过'}, {'inner': 'block'}) }}
          {{ sf.radio(form.business_reseller_platform_create_account_method, '代理商平台账户开户方式', {'0': '激活通行证自动开户', '1': '身份信息过审自动开户', '2': '需完成身份信息审核后，额外申请开户并通过'}, {'inner': 'block'}) }}
          {{ sf.radio(form.business_supplier_platform_create_account_method, '供应商平台账户开户方式', {'0': '激活通行证自动开户', '1': '身份信息过审自动开户', '2': '需完成身份信息审核后，额外申请开户并通过'}, {'inner': 'block'}) }}
        </div>
      </div>
      <div class=\"layui-tab-item\">
        <div class=\"layui-form\">
          {{ sf.text(form.max_password_errors_per_day, '每日最多允许输错密码次数', {'inner': 'block'}) }}
          {{ sf.text(form.suspend_period, '超过错误次数后冻结时间', {'inner': 'block'}) }}
        </div>
      </div>
    </div>
  </div>
</div>
", "Admin/SystemAdministration/SystemSetting/edit__passport.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\SystemAdministration\\SystemSetting\\edit__passport.twig");
    }
}
