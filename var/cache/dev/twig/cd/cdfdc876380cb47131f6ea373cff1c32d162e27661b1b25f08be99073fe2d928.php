<?php

/* Supplier/Finance/add_withdraw.twig */
class __TwigTemplate_25f593351d7c1d85895ce3437754632f5c01cc2cf2381627b7b204b6442a4965 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Supplier/Common/layout.twig", "Supplier/Finance/add_withdraw.twig", 1);
        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
            'js_end' => array($this, 'block_js_end'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Supplier/Common/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Supplier/Finance/add_withdraw.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Supplier/Finance/add_withdraw.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Supplier/Finance/add_withdraw.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 5
        echo "    <style>
        .margin-set{
            margin-bottom: 15px;
        }
        .layui-input-inline{
            width:300px;
        }
        .layui-form-label{
            width:90px;
        }
    </style>
    <div class=\"foxdou-row foxdou-row-notm\">
        <div class=\"foxdou-form-row\" style=\"margin-left: 200px;\">
            <form class=\"layui-form\" action=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_finance_add_withdraw");
        echo "\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("supplier_finance_add_withdraw"), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"sup_users_id\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new Twig_Error_Runtime('Variable "supplier" does not exist.', 20, $this->source); })()), "id", array()), "html", null, true);
        echo "\">
                <div class=\"margin-set\">
                    <label class=\"layui-form-label\">可用余额</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"available_cash\" autocomplete=\"off\" readonly value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new Twig_Error_Runtime('Variable "supplier" does not exist.', 24, $this->source); })()), "balance", array()), "html", null, true);
        echo "\" class=\"layui-input\">
                    </div>
                </div>
                <div class=\"margin-set\">
                    <label class=\"layui-form-label\">提现账户</label>
                    <div class=\"layui-input-inline\">
                        <select name=\"account_id\" id=\"account_id\">
                            <option value=\"\">--请选择提现账户--</option>
                            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 33
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "account_user", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "account_num", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "account_bank_name", array()), "html", null, true);
            echo ")</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                        </select>

                    </div>
                </div>
                <div class=\"margin-set\">
                    <label class=\"layui-form-label\">提现金额</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"number\" name=\"get_cash\" id=\"get_cash\" lay-verify=\"required\" placeholder=\"请输入提现金额\" autocomplete=\"off\" class=\"layui-input\">
                    </div>
                </div>
                <div class=\"margin-set\">
                    <label class=\"layui-form-label\">确认提现金额</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"number\" name=\"re_get_cash\" id=\"re_get_cash\" lay-verify=\"required\" placeholder=\"请输入提现金额\" autocomplete=\"off\" class=\"layui-input\">
                    </div>
                </div>

                <div class=\"margin-set\">
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">手续费</label>
                        <div class=\"layui-input-inline\">
                            <input type=\"text\" name=\"shouxu_cash\" id=\"shouxu_cash\" readonly value=\"0\" lay-verify=\"required\" autocomplete=\"off\" class=\"layui-input\">
                        </div>
                    </div>
                </div>

                <div class=\"margin-set\">
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">预计到账金额</label>
                        <div class=\"layui-input-inline\">
                            <input type=\"text\" name=\"actual_cash\" id=\"actual_cash\" readonly autocomplete=\"off\" class=\"layui-input\">
                        </div>
                    </div>
                </div>

                <div class=\"margin-set\">
                    <label class=\"layui-form-label\">备注</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"info\" id=\"info\" placeholder=\"请输入备注信息\" autocomplete=\"off\" class=\"layui-input\">
                    </div>
                </div>
                <button style=\"margin: 20px;\" type=\"submit\" class=\"layui-btn layui-btn-normal submit\">提交</button>
            </form>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 83
        echo "    ";
        $this->loadTemplate("/Supplier/Finance/add_withdraw_js.twig", "Supplier/Finance/add_withdraw.twig", 83)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Supplier/Finance/add_withdraw.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 83,  172 => 82,  117 => 35,  102 => 33,  98 => 32,  87 => 24,  80 => 20,  76 => 19,  72 => 18,  57 => 5,  48 => 4,  38 => 1,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Supplier/Common/layout.twig' %}
{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

{% block main_content %}
    <style>
        .margin-set{
            margin-bottom: 15px;
        }
        .layui-input-inline{
            width:300px;
        }
        .layui-form-label{
            width:90px;
        }
    </style>
    <div class=\"foxdou-row foxdou-row-notm\">
        <div class=\"foxdou-form-row\" style=\"margin-left: 200px;\">
            <form class=\"layui-form\" action=\"{{ path('supplier_finance_add_withdraw') }}\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('supplier_finance_add_withdraw') }}\">
                <input type=\"hidden\" name=\"sup_users_id\" value=\"{{ supplier.id }}\">
                <div class=\"margin-set\">
                    <label class=\"layui-form-label\">可用余额</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"available_cash\" autocomplete=\"off\" readonly value=\"{{ supplier.balance }}\" class=\"layui-input\">
                    </div>
                </div>
                <div class=\"margin-set\">
                    <label class=\"layui-form-label\">提现账户</label>
                    <div class=\"layui-input-inline\">
                        <select name=\"account_id\" id=\"account_id\">
                            <option value=\"\">--请选择提现账户--</option>
                            {% for item in account %}
                                <option value=\"{{ item.id }}\">{{ item.account_user }},{{ item.account_num }} ({{ item.account_bank_name }})</option>
                            {% endfor %}
                        </select>

                    </div>
                </div>
                <div class=\"margin-set\">
                    <label class=\"layui-form-label\">提现金额</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"number\" name=\"get_cash\" id=\"get_cash\" lay-verify=\"required\" placeholder=\"请输入提现金额\" autocomplete=\"off\" class=\"layui-input\">
                    </div>
                </div>
                <div class=\"margin-set\">
                    <label class=\"layui-form-label\">确认提现金额</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"number\" name=\"re_get_cash\" id=\"re_get_cash\" lay-verify=\"required\" placeholder=\"请输入提现金额\" autocomplete=\"off\" class=\"layui-input\">
                    </div>
                </div>

                <div class=\"margin-set\">
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">手续费</label>
                        <div class=\"layui-input-inline\">
                            <input type=\"text\" name=\"shouxu_cash\" id=\"shouxu_cash\" readonly value=\"0\" lay-verify=\"required\" autocomplete=\"off\" class=\"layui-input\">
                        </div>
                    </div>
                </div>

                <div class=\"margin-set\">
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">预计到账金额</label>
                        <div class=\"layui-input-inline\">
                            <input type=\"text\" name=\"actual_cash\" id=\"actual_cash\" readonly autocomplete=\"off\" class=\"layui-input\">
                        </div>
                    </div>
                </div>

                <div class=\"margin-set\">
                    <label class=\"layui-form-label\">备注</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"info\" id=\"info\" placeholder=\"请输入备注信息\" autocomplete=\"off\" class=\"layui-input\">
                    </div>
                </div>
                <button style=\"margin: 20px;\" type=\"submit\" class=\"layui-btn layui-btn-normal submit\">提交</button>
            </form>
        </div>
    </div>
{% endblock %}

{% block js_end %}
    {% include \"/Supplier/Finance/add_withdraw_js.twig\" %}
{% endblock %}", "Supplier/Finance/add_withdraw.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Supplier\\Finance\\add_withdraw.twig");
    }
}
