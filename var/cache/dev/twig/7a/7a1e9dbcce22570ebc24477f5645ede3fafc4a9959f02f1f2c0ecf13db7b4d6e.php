<?php

/* Admin/Order/recharge.twig */
class __TwigTemplate_f262617b144435e6f350be7966c6cfa6b9709c60f6c039141080298278ef4b0c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Admin/Common/layout.twig", "Admin/Order/recharge.twig", 1);
        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
            'extra' => array($this, 'block_extra'),
            'js_end' => array($this, 'block_js_end'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Admin/Common/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Order/recharge.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Order/recharge.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers.html.twig", "Admin/Order/recharge.twig", 2);
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
        .laytable-cell-1-actions{width:200px !important;}
    </style>
    <!--面包屑-->
    <div class=\"layui-card layadmin-header\">
        <div class=\"layui-breadcrumb\">
            <a href=\"javascript:;\">主页</a>
            <a href=\"javascript:;\">订单管理</a>
            <a><cite>正文</cite></a>
        </div>
    </div>
    <div class=\"layui-fluid\" id=\"recharge_order\">
        <div class=\"layui-card\">
            <div class=\"layui-tab layui-tab-brief layadmin-tab\" lay-filter=\"docDemoTabBrief\">
                <ul class=\"layui-tab-title\" id=\"order_mark\">
                  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_constant("App\\Common\\Model\\Order\\OrderRecharge::MARKS"));
        foreach ($context['_seq'] as $context["key"] => $context["mark"]) {
            // line 21
            echo "                      <li data-mark=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" ";
            if (($context["key"] == (isset($context["order_mark"]) || array_key_exists("order_mark", $context) ? $context["order_mark"] : (function () { throw new Twig_Error_Runtime('Variable "order_mark" does not exist.', 21, $this->source); })()))) {
                echo "class=\"layui-this\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["mark"], "html", null, true);
            echo "
                          <span class=\"layui-badge\">
                              ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order_mark_statistics"]) || array_key_exists("order_mark_statistics", $context) ? $context["order_mark_statistics"] : (function () { throw new Twig_Error_Runtime('Variable "order_mark_statistics" does not exist.', 23, $this->source); })()), $context["key"], array(), "array"), "html", null, true);
            echo "
                          </span>
                      </li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['mark'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                </ul>
                <div class=\"layui-tab-content\">
                    <div class=\"layui-tab-item layui-show\">
                        <div class=\"layui-form layadmin-bgcolor\">
                            <div class=\"layui-inline\">
                                <label class=\"layui-form-label\" style=\"width: 90px; padding: 9px 10px;\">空渠道下单：</label>
                                <div class=\"layui-input-block\">
                                  ";
        // line 34
        if (((isset($context["empty_channel_add_order"]) || array_key_exists("empty_channel_add_order", $context) ? $context["empty_channel_add_order"] : (function () { throw new Twig_Error_Runtime('Variable "empty_channel_add_order" does not exist.', 34, $this->source); })()) == 0)) {
            // line 35
            echo "                                      <input type=\"checkbox\" name=\"close\" lay-skin=\"switch\" lay-filter=\"empty_channel_add_order\" lay-text=\"ON|OFF\">
                                  ";
        } else {
            // line 37
            echo "                                      <input type=\"checkbox\" checked name=\"open\" lay-skin=\"switch\" lay-filter=\"empty_channel_add_order\" lay-text=\"ON|OFF\">
                                  ";
        }
        // line 39
        echo "                                </div>
                            </div>
                        </div>
                        <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
                            <div class=\"layui-form-item\">
                                <form action=\"\" method=\"get\" id=\"order-recharge\">
                                    <input type=\"hidden\" name=\"order_mark\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["order_mark"]) || array_key_exists("order_mark", $context) ? $context["order_mark"] : (function () { throw new Twig_Error_Runtime('Variable "order_mark" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "\">
                                    <input type=\"hidden\" name=\"product_cate_id\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["product_cate_id"]) || array_key_exists("product_cate_id", $context) ? $context["product_cate_id"] : (function () { throw new Twig_Error_Runtime('Variable "product_cate_id" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "\">
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">订单来源</label>
                                        <div class=\"layui-input-block\">
                                          ";
        // line 50
        echo $context["sf"]->macro_select_raw("platform_id", $this->extensions['App\Common\Twig\AppExtension']->arrayToOptions(twig_constant("App\\Platform::PLATFORMS"), "全部"), array("class" => "form-control"));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">订单状态</label>
                                        <div class=\"layui-input-block\">
                                          ";
        // line 56
        echo $context["sf"]->macro_select_raw("status", $this->extensions['App\Common\Twig\AppExtension']->arrayToOptions(twig_constant("App\\Common\\Model\\Order\\OrderRecharge::STATUSES"), "全部"), array("class" => "form-control"));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">充值状态</label>
                                        <div class=\"layui-input-block\">
                                          ";
        // line 62
        echo $context["sf"]->macro_select_raw("recharge_status", $this->extensions['App\Common\Twig\AppExtension']->arrayToOptions(twig_constant("App\\Common\\Model\\Order\\OrderRechargeSup::RECHARGE_STATUS"), "全部"), array("class" => "form-control"));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">用户结算状态</label>
                                        <div class=\"layui-input-block\">
                                          ";
        // line 68
        echo $context["sf"]->macro_select_raw("settlement_status", $this->extensions['App\Common\Twig\AppExtension']->arrayToOptions(twig_constant("App\\Common\\Model\\Order\\OrderRecharge::SETTLEMENT"), "全部"), array("class" => "form-control"));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">SUP订单结算状态</label>
                                        <div class=\"layui-input-block\">
                                          ";
        // line 74
        echo $context["sf"]->macro_select_raw("settle_status", $this->extensions['App\Common\Twig\AppExtension']->arrayToOptions(twig_constant("App\\Common\\Model\\Order\\OrderRechargeSup::SETTLE_STATUS"), "全部"), array("class" => "form-control"));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">日期范围</label>
                                        <div class=\"layui-input-block\">
                                            <input type=\"text\" name=\"range_time\" class=\"layui-input\" id=\"timeFrame\" placeholder=\"\">
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">搜索</label>
                                        <div class=\"layui-input-block\">
                                            <input type=\"text\" name=\"id\" placeholder=\"主订单编号搜索...\" autocomplete=\"off\" class=\"layui-input\">
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <div class=\"layui-input-block layui-input-block-margin\">
                                            <button class=\"layui-btn layuiadmin-btn-useradmin\" onclick=\"get_data();return false;\">
                                                <i class=\"layui-icon layui-icon-search layuiadmin-button-btn\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class=\"layui-card-body\">
                            <div style=\"padding: 5px 0;\">
                                <button class=\"layui-btn layuiadmin-btn-useradmin reverse-select\">反选</button>
                                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"setSuccess\">置成功</button>
                                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"setFailure\">置失败</button>
                                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"settlement\">结算</button>
                            </div>

                            <table class=\"layui-table\" id=\"order-table\" lay-filter=\"order-table\">

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 118
    public function block_extra($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        // line 119
        echo "
    <!--弹窗信息------------------------>

    <!--置成功提示-->
    <div id=\"setSuccessDome\" class=\"layer-demo layui-form\" style=\"display: none;\">
        <input type=\"radio\" name=\"type_success\" value=\"1\" title=\"对最新SUP订单置成功并结算\" checked>
        <input type=\"radio\" name=\"type_success\" value=\"2\" title=\"对最新SUP订单置成功，暂不结算\">
        <input type=\"radio\" name=\"type_success\" value=\"3\" title=\"对最新SUP订单不进行任何操作\">
    </div>
    <!--置失败提示-->
    <div id=\"setFailureDome\" class=\"layer-demo layui-form\" style=\"display: none;\">
        <input type=\"radio\" name=\"type_fail\" value=\"1\" title=\"对最新SUP订单置失败并结算\" checked>
        <input type=\"radio\" name=\"type_fail\" value=\"3\" title=\"对最新SUP订单不进行任何操作\">
        <div class=\"layui-input-inline\" style=\"margin-top: 20px;\">
            <input type=\"password\" name=\"password\" lay-verify=\"pass\" placeholder=\"请输入安全操作密码\" autocomplete=\"off\" class=\"layui-input\">
        </div>
    </div>
    <!--结算提示-->
    <div id=\"settlementDome\" class=\"layer-demo layui-form\" style=\"display: none;\">
        确定对所选订单对应最新SUP订单进行结算？
    </div>

    <!--重新充值操作提示-->
    <div id=\"againRechargeDome\" class=\"layer-demo layui-form\" style=\"display: none;\">
        <input type=\"radio\" name=\"again\" value=\"1\" title=\"对当前SUP订单置失败并结算\" checked>
        <input type=\"radio\" name=\"again\" value=\"2\" title=\"对当前SUP订单不进行任何操作\">
        <div class=\"layui-input-inline\" style=\"margin-top: 20px;\">
            <input type=\"password\" name=\"repassword\" lay-verify=\"pass\" placeholder=\"请输入安全操作密码\" autocomplete=\"off\" class=\"layui-input\">
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 152
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 153
        echo "  ";
        $this->loadTemplate("/Admin/Order/common_js.twig", "Admin/Order/recharge.twig", 153)->display($context);
        // line 154
        echo "  ";
        $this->loadTemplate("/Admin/Order/recharge_js.twig", "Admin/Order/recharge.twig", 154)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Order/recharge.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 154,  287 => 153,  278 => 152,  237 => 119,  228 => 118,  175 => 74,  166 => 68,  157 => 62,  148 => 56,  139 => 50,  132 => 46,  128 => 45,  120 => 39,  116 => 37,  112 => 35,  110 => 34,  101 => 27,  91 => 23,  79 => 21,  75 => 20,  58 => 5,  49 => 4,  39 => 1,  37 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Admin/Common/layout.twig' %}
{% import ('/Common/simple_form_helpers.html.twig') as sf %}

{% block main_content %}
    <style>
        .laytable-cell-1-actions{width:200px !important;}
    </style>
    <!--面包屑-->
    <div class=\"layui-card layadmin-header\">
        <div class=\"layui-breadcrumb\">
            <a href=\"javascript:;\">主页</a>
            <a href=\"javascript:;\">订单管理</a>
            <a><cite>正文</cite></a>
        </div>
    </div>
    <div class=\"layui-fluid\" id=\"recharge_order\">
        <div class=\"layui-card\">
            <div class=\"layui-tab layui-tab-brief layadmin-tab\" lay-filter=\"docDemoTabBrief\">
                <ul class=\"layui-tab-title\" id=\"order_mark\">
                  {% for key,mark in constant('App\\\\Common\\\\Model\\\\Order\\\\OrderRecharge::MARKS') %}
                      <li data-mark=\"{{ key }}\" {% if key==order_mark %}class=\"layui-this\"{% endif %}>{{ mark }}
                          <span class=\"layui-badge\">
                              {{ order_mark_statistics[key] }}
                          </span>
                      </li>
                  {% endfor %}
                </ul>
                <div class=\"layui-tab-content\">
                    <div class=\"layui-tab-item layui-show\">
                        <div class=\"layui-form layadmin-bgcolor\">
                            <div class=\"layui-inline\">
                                <label class=\"layui-form-label\" style=\"width: 90px; padding: 9px 10px;\">空渠道下单：</label>
                                <div class=\"layui-input-block\">
                                  {% if empty_channel_add_order == 0 %}
                                      <input type=\"checkbox\" name=\"close\" lay-skin=\"switch\" lay-filter=\"empty_channel_add_order\" lay-text=\"ON|OFF\">
                                  {% else %}
                                      <input type=\"checkbox\" checked name=\"open\" lay-skin=\"switch\" lay-filter=\"empty_channel_add_order\" lay-text=\"ON|OFF\">
                                  {% endif %}
                                </div>
                            </div>
                        </div>
                        <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
                            <div class=\"layui-form-item\">
                                <form action=\"\" method=\"get\" id=\"order-recharge\">
                                    <input type=\"hidden\" name=\"order_mark\" value=\"{{ order_mark }}\">
                                    <input type=\"hidden\" name=\"product_cate_id\" value=\"{{ product_cate_id }}\">
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">订单来源</label>
                                        <div class=\"layui-input-block\">
                                          {{ sf.select_raw('platform_id', to_options(constant(\"App\\\\Platform::PLATFORMS\"), '全部'), {\"class\": \"form-control\"}) }}
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">订单状态</label>
                                        <div class=\"layui-input-block\">
                                          {{ sf.select_raw('status', to_options(constant(\"App\\\\Common\\\\Model\\\\Order\\\\OrderRecharge::STATUSES\"), '全部'), {\"class\": \"form-control\"}) }}
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">充值状态</label>
                                        <div class=\"layui-input-block\">
                                          {{ sf.select_raw('recharge_status', to_options(constant(\"App\\\\Common\\\\Model\\\\Order\\\\OrderRechargeSup::RECHARGE_STATUS\"), '全部'), {\"class\": \"form-control\"}) }}
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">用户结算状态</label>
                                        <div class=\"layui-input-block\">
                                          {{ sf.select_raw('settlement_status', to_options(constant(\"App\\\\Common\\\\Model\\\\Order\\\\OrderRecharge::SETTLEMENT\"), '全部'), {\"class\": \"form-control\"}) }}
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">SUP订单结算状态</label>
                                        <div class=\"layui-input-block\">
                                          {{ sf.select_raw('settle_status', to_options(constant(\"App\\\\Common\\\\Model\\\\Order\\\\OrderRechargeSup::SETTLE_STATUS\"), '全部'), {\"class\": \"form-control\"}) }}
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">日期范围</label>
                                        <div class=\"layui-input-block\">
                                            <input type=\"text\" name=\"range_time\" class=\"layui-input\" id=\"timeFrame\" placeholder=\"\">
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">搜索</label>
                                        <div class=\"layui-input-block\">
                                            <input type=\"text\" name=\"id\" placeholder=\"主订单编号搜索...\" autocomplete=\"off\" class=\"layui-input\">
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <div class=\"layui-input-block layui-input-block-margin\">
                                            <button class=\"layui-btn layuiadmin-btn-useradmin\" onclick=\"get_data();return false;\">
                                                <i class=\"layui-icon layui-icon-search layuiadmin-button-btn\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class=\"layui-card-body\">
                            <div style=\"padding: 5px 0;\">
                                <button class=\"layui-btn layuiadmin-btn-useradmin reverse-select\">反选</button>
                                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"setSuccess\">置成功</button>
                                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"setFailure\">置失败</button>
                                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"settlement\">结算</button>
                            </div>

                            <table class=\"layui-table\" id=\"order-table\" lay-filter=\"order-table\">

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block extra %}

    <!--弹窗信息------------------------>

    <!--置成功提示-->
    <div id=\"setSuccessDome\" class=\"layer-demo layui-form\" style=\"display: none;\">
        <input type=\"radio\" name=\"type_success\" value=\"1\" title=\"对最新SUP订单置成功并结算\" checked>
        <input type=\"radio\" name=\"type_success\" value=\"2\" title=\"对最新SUP订单置成功，暂不结算\">
        <input type=\"radio\" name=\"type_success\" value=\"3\" title=\"对最新SUP订单不进行任何操作\">
    </div>
    <!--置失败提示-->
    <div id=\"setFailureDome\" class=\"layer-demo layui-form\" style=\"display: none;\">
        <input type=\"radio\" name=\"type_fail\" value=\"1\" title=\"对最新SUP订单置失败并结算\" checked>
        <input type=\"radio\" name=\"type_fail\" value=\"3\" title=\"对最新SUP订单不进行任何操作\">
        <div class=\"layui-input-inline\" style=\"margin-top: 20px;\">
            <input type=\"password\" name=\"password\" lay-verify=\"pass\" placeholder=\"请输入安全操作密码\" autocomplete=\"off\" class=\"layui-input\">
        </div>
    </div>
    <!--结算提示-->
    <div id=\"settlementDome\" class=\"layer-demo layui-form\" style=\"display: none;\">
        确定对所选订单对应最新SUP订单进行结算？
    </div>

    <!--重新充值操作提示-->
    <div id=\"againRechargeDome\" class=\"layer-demo layui-form\" style=\"display: none;\">
        <input type=\"radio\" name=\"again\" value=\"1\" title=\"对当前SUP订单置失败并结算\" checked>
        <input type=\"radio\" name=\"again\" value=\"2\" title=\"对当前SUP订单不进行任何操作\">
        <div class=\"layui-input-inline\" style=\"margin-top: 20px;\">
            <input type=\"password\" name=\"repassword\" lay-verify=\"pass\" placeholder=\"请输入安全操作密码\" autocomplete=\"off\" class=\"layui-input\">
        </div>
    </div>

{% endblock %}

{% block js_end %}
  {% include \"/Admin/Order/common_js.twig\" %}
  {% include \"/Admin/Order/recharge_js.twig\" %}
{% endblock %}", "Admin/Order/recharge.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\Order\\recharge.twig");
    }
}
