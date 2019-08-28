<?php

/* Admin/SystemAdministration/SystemSetting/edit__supplier_platform.twig */
class __TwigTemplate_2755f371d0656f29855b6fb4500b2602f5b492bf5ab63c823f0e189f6b70165c extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/SystemSetting/edit__supplier_platform.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/SystemSetting/edit__supplier_platform.twig"));

        // line 1
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Admin/SystemAdministration/SystemSetting/edit__supplier_platform.twig", 1);
        // line 2
        $context["sfr"] = $this->loadTemplate("/Common/simple_form_helpers_raw.html.twig", "Admin/SystemAdministration/SystemSetting/edit__supplier_platform.twig", 2);
        // line 3
        echo "
<div class=\"layui-card-header\">供应商平台设置</div>
<div class=\"layui-card-body\">
    <div class=\"layui-collapse  layadmin-form-body\">
        <div class=\"layui-colla-item\">
            <h2 class=\"layui-colla-title\">押金设置</h2>
            <div class=\"layui-colla-content layui-show\">
                ";
        // line 10
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), "deposit_amount", array()), "押金标准", array("tips" => "元（必须保证满足该设定金额才能发起提现）"));
        echo "
                ";
        // line 11
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), "min_deposit_amount", array()), "失败扣款最低扣至", array("tips" => "元（失败扣款结算时优先扣除余额账户金额，当余额账户小于等于 0 时，从押金账户扣至该设定金额后，再重新对余额账户进行扣除）"));
        echo "
            </div>
        </div>
        <div class=\"layui-colla-item\">
            <h2 class=\"layui-colla-title\">余额提现设置</h2>
            <div class=\"layui-colla-content layui-show\">
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">提现手续费：</label>
                    <div class=\"layui-input-block\">
                        <div class=\"layui-input-inline\">
                            ";
        // line 21
        echo $context["sf"]->macro_radio_raw(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), "withdraw_fee_rate_type", array()), array("0" => "不收取手续费"));
        echo "
                        </div>
                    </div>
                    <div class=\"layui-input-block\">
                        <div class=\"layui-input-inline\">
                            ";
        // line 26
        echo $context["sf"]->macro_radio_raw(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "withdraw_fee_rate_type", array()), array("1" => "按费率收取"));
        echo "
                        </div>
                        <div class=\"layui-input-inline\">
                            ";
        // line 29
        echo $context["sf"]->macro_text_raw(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "withdraw_fee_rate_percent", array()), array("placeholder" => "比例费率"));
        echo "
                        </div>
                        <div class=\"layui-form-mid layui-word-aux\">%</div>
                    </div>
                    <div class=\"layui-input-block\">
                        <div class=\"layui-input-inline\">
                            ";
        // line 35
        echo $context["sf"]->macro_radio_raw(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "withdraw_fee_rate_type", array()), array("2" => "按单笔收取固定金额"));
        echo "
                        </div>
                        <div class=\"layui-input-inline\">
                            ";
        // line 38
        echo $context["sf"]->macro_text_raw(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "withdraw_fee_rate_fixed", array()), array("placeholder" => "固定费率"));
        echo "
                        </div>
                        <div class=\"layui-form-mid layui-word-aux\">元</div>
                    </div>
                </div>

                ";
        // line 44
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), "max_withdraw_times_per_day", array()), "每日最大申请提现次数", array("tips" => "次"));
        echo "
                <div class=\"layui-form-item\">
                    ";
        // line 46
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "min_withdraw_amount", array()), "单次可提现范围", array("outer" => null, "inner" => "inline"));
        echo "
                    <div class=\"layui-form-mid layui-word-aux\"> ~</div>
                    ";
        // line 48
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "max_withdraw_amount", array()), null, array("outer" => null, "inner" => "inline"));
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
        // line 58
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "invite_employee_expires_time", array()), "邀请员工等待确认时间", array("tips" => "次"));
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
        return "Admin/SystemAdministration/SystemSetting/edit__supplier_platform.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 58,  107 => 48,  102 => 46,  97 => 44,  88 => 38,  82 => 35,  73 => 29,  67 => 26,  59 => 21,  46 => 11,  42 => 10,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}
{% import ('/Common/simple_form_helpers_raw.html.twig') as sfr %}

<div class=\"layui-card-header\">供应商平台设置</div>
<div class=\"layui-card-body\">
    <div class=\"layui-collapse  layadmin-form-body\">
        <div class=\"layui-colla-item\">
            <h2 class=\"layui-colla-title\">押金设置</h2>
            <div class=\"layui-colla-content layui-show\">
                {{ sf.text(form.deposit_amount, '押金标准', {'tips': '元（必须保证满足该设定金额才能发起提现）'}) }}
                {{ sf.text(form.min_deposit_amount, '失败扣款最低扣至', {'tips': '元（失败扣款结算时优先扣除余额账户金额，当余额账户小于等于 0 时，从押金账户扣至该设定金额后，再重新对余额账户进行扣除）'}) }}
            </div>
        </div>
        <div class=\"layui-colla-item\">
            <h2 class=\"layui-colla-title\">余额提现设置</h2>
            <div class=\"layui-colla-content layui-show\">
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">提现手续费：</label>
                    <div class=\"layui-input-block\">
                        <div class=\"layui-input-inline\">
                            {{ sf.radio_raw(form.withdraw_fee_rate_type, {'0': '不收取手续费'}) }}
                        </div>
                    </div>
                    <div class=\"layui-input-block\">
                        <div class=\"layui-input-inline\">
                            {{ sf.radio_raw(form.withdraw_fee_rate_type, {'1': '按费率收取'}) }}
                        </div>
                        <div class=\"layui-input-inline\">
                            {{ sf.text_raw(form.withdraw_fee_rate_percent, {'placeholder': '比例费率'}) }}
                        </div>
                        <div class=\"layui-form-mid layui-word-aux\">%</div>
                    </div>
                    <div class=\"layui-input-block\">
                        <div class=\"layui-input-inline\">
                            {{ sf.radio_raw(form.withdraw_fee_rate_type, {'2': '按单笔收取固定金额'}) }}
                        </div>
                        <div class=\"layui-input-inline\">
                            {{ sf.text_raw(form.withdraw_fee_rate_fixed, {'placeholder': '固定费率'}) }}
                        </div>
                        <div class=\"layui-form-mid layui-word-aux\">元</div>
                    </div>
                </div>

                {{ sf.text(form.max_withdraw_times_per_day, '每日最大申请提现次数', {'tips': '次'}) }}
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
                {{ sf.text(form.invite_employee_expires_time, '邀请员工等待确认时间', {'tips': '次'}) }}
            </div>
        </div>
    </div>
</div>
", "Admin/SystemAdministration/SystemSetting/edit__supplier_platform.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\SystemAdministration\\SystemSetting\\edit__supplier_platform.twig");
    }
}
