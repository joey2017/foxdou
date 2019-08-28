<?php

/* Supplier/Finance/add_withdraw_account.twig */
class __TwigTemplate_641c286e26e579ccd6aa06c3dee41738905454edcf5213822b4cf7c0cd589034 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Supplier/Common/layout.twig", "Supplier/Finance/add_withdraw_account.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Supplier/Finance/add_withdraw_account.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Supplier/Finance/add_withdraw_account.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Supplier/Finance/add_withdraw_account.twig", 2);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_finance_add_withdraw_account");
        echo "\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("supplier_finance_add_withdraw_account"), "html", null, true);
        echo "\">
                <div class=\"margin-set\">
                    <label class=\"layui-form-label\">选择银行</label>
                    <div class=\"layui-input-inline\">
                        <select name=\"account_bank_id\" id=\"account_bank_id\">
                            <option value=\"\">--请选择银行--</option>
                            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bank"]) || array_key_exists("bank", $context) ? $context["bank"] : (function () { throw new Twig_Error_Runtime('Variable "bank" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 26
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                        </select>

                    </div>
                </div>
                <div class=\"margin-set\">
                    <label class=\"layui-form-label\">开户行名称</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"account_place\" id=\"account_place\" lay-verify=\"required\" placeholder=\"请输入开户行名称\" autocomplete=\"off\" class=\"layui-input\">
                    </div>
                </div>
                <div class=\"margin-set\">
                    <label class=\"layui-form-label\">姓名</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"account_user\" id=\"account_user\" lay-verify=\"required\" placeholder=\"请输入姓名\" autocomplete=\"off\" class=\"layui-input\">
                    </div>
                </div>

                <div class=\"margin-set\">
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">账号</label>
                        <div class=\"layui-input-inline\">
                            <input type=\"text\" name=\"account_num\" id=\"account_num\" placeholder=\"请输入账号\" lay-verify=\"required\" autocomplete=\"off\" class=\"layui-input\">
                        </div>
                    </div>
                </div>

                <div class=\"margin-set\">
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">身份证号</label>
                        <div class=\"layui-input-inline\">
                            <input type=\"text\" name=\"shenfenzheng_id\" id=\"shenfenzheng_id\" placeholder=\"请输入身份证号\" autocomplete=\"off\" class=\"layui-input\">
                        </div>
                    </div>
                </div>

                <div class=\"margin-set\">
                    <label class=\"layui-form-label\">绑定手机号</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"mobile\" id=\"mobile\" placeholder=\"请输入绑定手机号\" autocomplete=\"off\" class=\"layui-input\">
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

    // line 81
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 82
        echo "    ";
        $this->loadTemplate("/Supplier/Finance/add_withdraw_account_js.twig", "Supplier/Finance/add_withdraw_account.twig", 82)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Supplier/Finance/add_withdraw_account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 82,  161 => 81,  100 => 28,  89 => 26,  85 => 25,  76 => 19,  72 => 18,  57 => 5,  48 => 4,  38 => 1,  36 => 2,  15 => 1,);
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
            <form class=\"layui-form\" action=\"{{ path('supplier_finance_add_withdraw_account') }}\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('supplier_finance_add_withdraw_account') }}\">
                <div class=\"margin-set\">
                    <label class=\"layui-form-label\">选择银行</label>
                    <div class=\"layui-input-inline\">
                        <select name=\"account_bank_id\" id=\"account_bank_id\">
                            <option value=\"\">--请选择银行--</option>
                            {% for item in bank %}
                                <option value=\"{{ item.id }}\">{{ item.name }}</option>
                            {% endfor %}
                        </select>

                    </div>
                </div>
                <div class=\"margin-set\">
                    <label class=\"layui-form-label\">开户行名称</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"account_place\" id=\"account_place\" lay-verify=\"required\" placeholder=\"请输入开户行名称\" autocomplete=\"off\" class=\"layui-input\">
                    </div>
                </div>
                <div class=\"margin-set\">
                    <label class=\"layui-form-label\">姓名</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"account_user\" id=\"account_user\" lay-verify=\"required\" placeholder=\"请输入姓名\" autocomplete=\"off\" class=\"layui-input\">
                    </div>
                </div>

                <div class=\"margin-set\">
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">账号</label>
                        <div class=\"layui-input-inline\">
                            <input type=\"text\" name=\"account_num\" id=\"account_num\" placeholder=\"请输入账号\" lay-verify=\"required\" autocomplete=\"off\" class=\"layui-input\">
                        </div>
                    </div>
                </div>

                <div class=\"margin-set\">
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">身份证号</label>
                        <div class=\"layui-input-inline\">
                            <input type=\"text\" name=\"shenfenzheng_id\" id=\"shenfenzheng_id\" placeholder=\"请输入身份证号\" autocomplete=\"off\" class=\"layui-input\">
                        </div>
                    </div>
                </div>

                <div class=\"margin-set\">
                    <label class=\"layui-form-label\">绑定手机号</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"mobile\" id=\"mobile\" placeholder=\"请输入绑定手机号\" autocomplete=\"off\" class=\"layui-input\">
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
    {% include \"/Supplier/Finance/add_withdraw_account_js.twig\" %}
{% endblock %}", "Supplier/Finance/add_withdraw_account.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Supplier\\Finance\\add_withdraw_account.twig");
    }
}
