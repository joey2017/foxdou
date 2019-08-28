<?php

/* Admin/SystemAdministration/SystemSetting/edit__reseller_platform.twig */
class __TwigTemplate_6ae78e877ebdb2c6bcc5d1f350d5423d9fab6088549ddc56457c20eb18a8fe72 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/SystemSetting/edit__reseller_platform.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/SystemSetting/edit__reseller_platform.twig"));

        // line 1
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Admin/SystemAdministration/SystemSetting/edit__reseller_platform.twig", 1);
        // line 2
        echo "
<div class=\"layui-card-header\">代理商平台设置</div>
<div class=\"layui-card-body\">
    <div class=\"layui-collapse  layadmin-form-body\">
        <div class=\"layui-colla-item\">
            <h2 class=\"layui-colla-title\">佣金提现设置</h2>
            <div class=\"layui-colla-content layui-show\">
                ";
        // line 9
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->source); })()), "max_withdraw_times_per_day", array()), "每日最大提现次数");
        echo "
                <div class=\"layui-form-item\">
                    ";
        // line 11
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), "min_withdraw_amount", array()), "单次可提现范围", array("outer" => null, "inner" => "inline"));
        echo "
                    <div class=\"layui-form-mid layui-word-aux\"> ~</div>
                    ";
        // line 13
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), "max_withdraw_amount", array()), null, array("outer" => null, "inner" => "inline"));
        echo "
                    <div class=\"layui-input-inline\" style=\"\">
                        <div class=\"layui-form-mid layui-word-aux\">元</div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"layui-colla-item\">
            <h2 class=\"layui-colla-title\">员工模块设置</h2>
            <div class=\"layui-colla-content layui-show\">
                ";
        // line 23
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "invite_employee_expires_time", array()), "邀请员工等待确认时间");
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
        return "Admin/SystemAdministration/SystemSetting/edit__reseller_platform.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 23,  50 => 13,  45 => 11,  40 => 9,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

<div class=\"layui-card-header\">代理商平台设置</div>
<div class=\"layui-card-body\">
    <div class=\"layui-collapse  layadmin-form-body\">
        <div class=\"layui-colla-item\">
            <h2 class=\"layui-colla-title\">佣金提现设置</h2>
            <div class=\"layui-colla-content layui-show\">
                {{ sf.text(form.max_withdraw_times_per_day, '每日最大提现次数') }}
                <div class=\"layui-form-item\">
                    {{ sf.text(form.min_withdraw_amount, '单次可提现范围', {'outer': null, 'inner': 'inline'}) }}
                    <div class=\"layui-form-mid layui-word-aux\"> ~</div>
                    {{ sf.text(form.max_withdraw_amount, null, {'outer': null, 'inner': 'inline'}) }}
                    <div class=\"layui-input-inline\" style=\"\">
                        <div class=\"layui-form-mid layui-word-aux\">元</div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"layui-colla-item\">
            <h2 class=\"layui-colla-title\">员工模块设置</h2>
            <div class=\"layui-colla-content layui-show\">
                {{ sf.text(form.invite_employee_expires_time, '邀请员工等待确认时间') }}
            </div>
        </div>
    </div>
</div>
", "Admin/SystemAdministration/SystemSetting/edit__reseller_platform.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\SystemAdministration\\SystemSetting\\edit__reseller_platform.twig");
    }
}
