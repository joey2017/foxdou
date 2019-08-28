<?php

/* Supplier/Finance/index.twig */
class __TwigTemplate_78ed5084b4c41afcefd406d8fea5ac487c001dbc707d5d78ebcc48bbbb08da1a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Supplier/Common/layout.twig", "Supplier/Finance/index.twig", 1);
        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
            'extra' => array($this, 'block_extra'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Supplier/Finance/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Supplier/Finance/index.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Supplier/Finance/index.twig", 2);
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
        echo "    <div class=\"foxdou-row foxdou-row-notm\">
        <div class=\"foxdou-form-row\" style=\"margin-left: 200px;\">
            <div class=\"layui-row layui-col-space15\">
                <div class=\"layui-col-md12\">
                    <div class=\"foxdou-row foxdou-row-notm\">
                        <div class=\"foxdou-api-info\">
                            <h2>你好！<span style=\"color: #009688\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 11, $this->source); })()), "name", array()), "html", null, true);
        echo "</span></h2>
                            <div class=\"foxdou-api-money\">
                                <i class=\"icon iconfont icon-yue\"></i>
                                <span>账户可用余额（元）：</span>
                                <span class=\"money\">";
        // line 15
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "balance", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "balance", array()), 0)) : (0)), "html", null, true);
        echo "</span>

                                <span>提现中金额（元）：</span>
                                <span class=\"money\">";
        // line 18
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "drawing_amount", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "drawing_amount", array()), 0)) : (0)), "html", null, true);
        echo "</span>

                                <span>冻结金额（元）：</span>
                                <span class=\"money\">";
        // line 21
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "freeze_amount", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "freeze_amount", array()), 0)) : (0)), "html", null, true);
        echo "</span>

                                <span>押金余额（元）：</span>
                                <span class=\"money\">";
        // line 24
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "cash_pledge", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "cash_pledge", array()), 0)) : (0)), "html", null, true);
        echo "</span>
                            </div>

                        </div>
                        <div class=\"foxdou-table-page\">

                            <div class=\"layui-form-item\">
                                <div class=\"layui-inline foxdou-left\">
                                    <h3>
                                        <strong>最近交易记录</strong>
                                        <span class=\"foxdou-th-item\" style=\"margin-left: 10px;color: #009688\">
                                            <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_finance_trade_list");
        echo "\">更多</a>
                                        </span>
                                    </h3>
                                </div>
                            </div>

                            <table class=\"layui-table\" id=\"page-table\" lay-filter=\"page-table\">

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script id=\"add_time\" type=\"text/html\">
              <%#
              var date = new Date();
              date.setTime(d.add_time*1000);
              return date.Format(\"yyyy-MM-dd hh:mm:ss\");
          %>
        </script>
    <script type=\"text/html\" id=\"actions\">
        ";
        // line 59
        echo "    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_extra($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        // line 63
        echo "
    <style type=\"text/css\">
        /*api账户信息-在线充值*/
        .foxdou-api-info {padding: 20px 10px 25px 20px; border-bottom: 2px dashed #E0E0E0;}
        .foxdou-api-money {padding: 15px 0 8px 0; color: #666;}
        .foxdou-api-money .icon {font-size: 18px;}
        .foxdou-api-money .money {margin: 0 10px; font-size: 20px; color: #F07E05;}
        .foxdou-api-money .layui-btn {position: relative; top: -4px; height: 28px; line-height: 28px; padding: 0 10px; margin-left: 20px;}

        /*表格单元格-标题行th*/
        .foxdou-th-title {}
        .foxdou-th-title h3 {display: inline-block; margin-right: 30px; color: #2B3B52;}
        .foxdou-th-title .foxdou-th-item {color: #1E9FFF; cursor: pointer;}
        .foxdou-th-title .spacer {position: relative; top: 2px; display: inline-block; margin: 0 8px; width: 1px; height: 14px; background-color: #999; cursor: default;}
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 81
        echo "    ";
        $this->loadTemplate("/Supplier/Finance/index_js.twig", "Supplier/Finance/index.twig", 81)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Supplier/Finance/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 81,  176 => 80,  151 => 63,  142 => 62,  131 => 59,  105 => 35,  91 => 24,  85 => 21,  79 => 18,  73 => 15,  66 => 11,  58 => 5,  49 => 4,  39 => 1,  37 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Supplier/Common/layout.twig' %}
{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

{% block main_content %}
    <div class=\"foxdou-row foxdou-row-notm\">
        <div class=\"foxdou-form-row\" style=\"margin-left: 200px;\">
            <div class=\"layui-row layui-col-space15\">
                <div class=\"layui-col-md12\">
                    <div class=\"foxdou-row foxdou-row-notm\">
                        <div class=\"foxdou-api-info\">
                            <h2>你好！<span style=\"color: #009688\">{{ account.name }}</span></h2>
                            <div class=\"foxdou-api-money\">
                                <i class=\"icon iconfont icon-yue\"></i>
                                <span>账户可用余额（元）：</span>
                                <span class=\"money\">{{ account.balance|default(0) }}</span>

                                <span>提现中金额（元）：</span>
                                <span class=\"money\">{{ account.drawing_amount|default(0) }}</span>

                                <span>冻结金额（元）：</span>
                                <span class=\"money\">{{ account.freeze_amount|default(0) }}</span>

                                <span>押金余额（元）：</span>
                                <span class=\"money\">{{ account.cash_pledge|default(0) }}</span>
                            </div>

                        </div>
                        <div class=\"foxdou-table-page\">

                            <div class=\"layui-form-item\">
                                <div class=\"layui-inline foxdou-left\">
                                    <h3>
                                        <strong>最近交易记录</strong>
                                        <span class=\"foxdou-th-item\" style=\"margin-left: 10px;color: #009688\">
                                            <a href=\"{{ path('supplier_finance_trade_list') }}\">更多</a>
                                        </span>
                                    </h3>
                                </div>
                            </div>

                            <table class=\"layui-table\" id=\"page-table\" lay-filter=\"page-table\">

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script id=\"add_time\" type=\"text/html\">
              <%#
              var date = new Date();
              date.setTime(d.add_time*1000);
              return date.Format(\"yyyy-MM-dd hh:mm:ss\");
          %>
        </script>
    <script type=\"text/html\" id=\"actions\">
        {#<a class=\"layui-btn layui-btn-success layui-btn-xs\" lay-event=\"detail\">详情</a>#}
    </script>
{% endblock %}

{% block extra %}

    <style type=\"text/css\">
        /*api账户信息-在线充值*/
        .foxdou-api-info {padding: 20px 10px 25px 20px; border-bottom: 2px dashed #E0E0E0;}
        .foxdou-api-money {padding: 15px 0 8px 0; color: #666;}
        .foxdou-api-money .icon {font-size: 18px;}
        .foxdou-api-money .money {margin: 0 10px; font-size: 20px; color: #F07E05;}
        .foxdou-api-money .layui-btn {position: relative; top: -4px; height: 28px; line-height: 28px; padding: 0 10px; margin-left: 20px;}

        /*表格单元格-标题行th*/
        .foxdou-th-title {}
        .foxdou-th-title h3 {display: inline-block; margin-right: 30px; color: #2B3B52;}
        .foxdou-th-title .foxdou-th-item {color: #1E9FFF; cursor: pointer;}
        .foxdou-th-title .spacer {position: relative; top: 2px; display: inline-block; margin: 0 8px; width: 1px; height: 14px; background-color: #999; cursor: default;}
    </style>
{% endblock %}

{% block js_end %}
    {% include \"/Supplier/Finance/index_js.twig\" %}
{% endblock %}
", "Supplier/Finance/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Supplier\\Finance\\index.twig");
    }
}
