<?php

/* Admin/Audit/product_supplies.twig */
class __TwigTemplate_46e925197a9114eb901b9e0f9dc79574114e0e8b50ad67ded77d5cba98b71718 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Admin/Common/layout.twig", "Admin/Audit/product_supplies.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Audit/product_supplies.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Audit/product_supplies.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Admin/Audit/product_supplies.twig", 2);
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
        echo "    <div class=\"layui-card layadmin-header\">
        <div class=\"layui-breadcrumb\">
            <a href=\"javascript:;\">主页</a>
            <a href=\"javascript:;\">平台审核管理</a>
            <a><cite>货源审核列表</cite></a>
        </div>
    </div>
    <div class=\"layui-fluid\">
        <div class=\"layui-card\">
            <div class=\"layui-tab layui-tab-brief layadmin-tab\" lay-filter=\"docDemoTabBrief\">
                <div class=\"layui-tab-content\">
                    <div class=\"layui-tab-item layui-show\">
                        <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
                            <div class=\"layui-form-item\">
                                <form action=\"\" method=\"get\" id=\"product-supplies-list\">
                                    ";
        // line 20
        if (((isset($context["product_cate_id"]) || array_key_exists("product_cate_id", $context) ? $context["product_cate_id"] : (function () { throw new Twig_Error_Runtime('Variable "product_cate_id" does not exist.', 20, $this->source); })()) == "3")) {
            // line 21
            echo "                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">腾讯业务品类</label>
                                        <div class=\"layui-input-block\">
                                            <select name=\"category\" id=\"category\">
                                                <option value>全部</option>
                                                ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tencent"]) || array_key_exists("tencent", $context) ? $context["tencent"] : (function () { throw new Twig_Error_Runtime('Variable "tencent" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ten"]) {
                // line 27
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ten"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ten"], "name", array()), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ten'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                                            </select>
                                        </div>
                                    </div>
                                    ";
        }
        // line 33
        echo "                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">面值类型</label>
                                        <div class=\"layui-input-block\">
                                            ";
        // line 36
        echo $context["sf"]->macro_select_raw("face_value_type", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\Product\\ProductMobile::FACE_VALUE_TYPES"), "全部"), array("class" => "layui-input"));
        echo "
                                        </div>
                                    </div>

                                    ";
        // line 40
        if (((isset($context["product_cate_id"]) || array_key_exists("product_cate_id", $context) ? $context["product_cate_id"] : (function () { throw new Twig_Error_Runtime('Variable "product_cate_id" does not exist.', 40, $this->source); })()) != "3")) {
            // line 41
            echo "                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">商品适用范围</label>
                                        <div class=\"layui-input-block\">
                                            ";
            // line 44
            echo $context["sf"]->macro_select_raw("area_name", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\ProductConstants::PRODUCT_SALE_REGIONS"), "全部"), array("class" => "layui-input"));
            echo "
                                        </div>
                                    </div>

                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">运营商类别</label>
                                        <div class=\"layui-input-block\">
                                            ";
            // line 51
            echo $context["sf"]->macro_select_raw("operator_id", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Constants::CARRIERS"), "全部"), array("class" => "layui-input", "lay-filter" => "operator"));
            echo "
                                        </div>
                                    </div>

                                    <div class=\"layui-inline\" style=\"display: none\" id=\"mvno-block\">
                                        <label class=\"layui-form-label\">虚拟运营商</label>
                                        <div class=\"layui-input-block\">
                                            <select name=\"mvno\" id=\"mvno\">
                                                <option value>全部</option>
                                                ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mvno"]) || array_key_exists("mvno", $context) ? $context["mvno"] : (function () { throw new Twig_Error_Runtime('Variable "mvno" does not exist.', 60, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["mo"]) {
                // line 61
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mo"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mo"], "short_name", array()), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                                            </select>
                                        </div>
                                    </div>

                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">快充/慢充</label>
                                        <div class=\"layui-input-block\">
                                            ";
            // line 70
            echo $context["sf"]->macro_select_raw("speed", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Constants::RECHARGE_SPEED"), "全部"), array("class" => "layui-input"));
            echo "
                                        </div>
                                    </div>
                                    ";
        }
        // line 74
        echo "                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">货源启用状态</label>
                                        <div class=\"layui-input-block\">
                                            ";
        // line 77
        echo $context["sf"]->macro_select_raw("sell_status", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\Product\\ProductMobileSource::SELL_STATUSES"), "全部"), array("class" => "layui-input"));
        echo "
                                        </div>
                                    </div>

                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">货源审核状态</label>
                                        <div class=\"layui-input-block\">
                                            ";
        // line 84
        echo $context["sf"]->macro_select_raw("status", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\Product\\ProductMobileSource::STATUSES"), "全部"), array("class" => "layui-input"));
        echo "
                                        </div>
                                    </div>

                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">日期范围</label>
                                        <div class=\"layui-input-block\">
                                            <input type=\"text\" name=\"range_time\" class=\"layui-input\" id=\"timeFrame\" placeholder=\"\">
                                            <input type=\"hidden\" name=\"start_time\" id=\"start_time\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\">
                                            <input type=\"hidden\" name=\"end_time\" id=\"end_time\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\">
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">搜索</label>
                                        <div class=\"layui-input-block\">
                                            <input type=\"text\" name=\"keyword\" placeholder=\"商品名称搜索...\" autocomplete=\"off\" class=\"layui-input\">
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
                                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"setSuccess\">审核通过</button>
                                <button class=\"layui-btn layui-btn-warm layuiadmin-btn-useradmin site-demo-layer\" data-type=\"setFailure\">审核不通过</button>
                                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"changeStatus\" data-status=\"1\">启用</button>
                                <button class=\"layui-btn layui-btn-warm layuiadmin-btn-useradmin site-demo-layer\" data-type=\"changeStatus\" data-status=\"0\">停用</button>
                                <button class=\"layui-btn layui-btn-danger site-demo-layer\" data-type=\"delete\">删除货源</button>
                            </div>
                            <table class=\"layui-table\" id=\"product-supplies-table\" lay-filter=\"product-supplies-table\">

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script id=\"actions\" type=\"text/html\">
        <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"review\">审核</a>
        <a class=\"layui-btn layui-btn-danger layui-btn-xs\" lay-event=\"delete\">删除</a>
    </script>
    <script id=\"add_time\" type=\"text/html\">
        <%#
          var date = new Date();
          date.setTime(d.add_time*1000);
          return date.Format(\"yyyy-MM-dd hh:mm:ss\");
        %>
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 143
    public function block_extra($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        // line 144
        echo "
    <!--此处为弹出层内容star-->
    <div id=\"review-content\" class=\"layer-demo layui-form\" style=\"display: none;\">
        <div class=\"layui-inline\">
            <label class=\"layui-form-label\">审核</label>
            <input type=\"radio\" name=\"review_status\" value=\"0\" title=\"已下架\" checked>
            <input type=\"radio\" name=\"review_status\" value=\"1\" title=\"已上架\">
            <input type=\"radio\" name=\"review_status\" value=\"2\" title=\"被冻结\">
            <input type=\"radio\" name=\"review_status\" value=\"3\" title=\"待审核\">
            <input type=\"radio\" name=\"review_status\" value=\"4\" title=\"审核拒绝\">
        </div>
    </div>
    <!--此处为弹出层内容开始end-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 160
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 161
        echo "  ";
        $this->loadTemplate("/Admin/Audit/product_supplies_js.twig", "Admin/Audit/product_supplies.twig", 161)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Audit/product_supplies.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 161,  299 => 160,  275 => 144,  266 => 143,  207 => 93,  203 => 92,  192 => 84,  182 => 77,  177 => 74,  170 => 70,  161 => 63,  150 => 61,  146 => 60,  134 => 51,  124 => 44,  119 => 41,  117 => 40,  110 => 36,  105 => 33,  99 => 29,  88 => 27,  84 => 26,  77 => 21,  75 => 20,  58 => 5,  49 => 4,  39 => 1,  37 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Admin/Common/layout.twig' %}
{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

{% block main_content %}
    <div class=\"layui-card layadmin-header\">
        <div class=\"layui-breadcrumb\">
            <a href=\"javascript:;\">主页</a>
            <a href=\"javascript:;\">平台审核管理</a>
            <a><cite>货源审核列表</cite></a>
        </div>
    </div>
    <div class=\"layui-fluid\">
        <div class=\"layui-card\">
            <div class=\"layui-tab layui-tab-brief layadmin-tab\" lay-filter=\"docDemoTabBrief\">
                <div class=\"layui-tab-content\">
                    <div class=\"layui-tab-item layui-show\">
                        <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
                            <div class=\"layui-form-item\">
                                <form action=\"\" method=\"get\" id=\"product-supplies-list\">
                                    {% if product_cate_id == '3' %}
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">腾讯业务品类</label>
                                        <div class=\"layui-input-block\">
                                            <select name=\"category\" id=\"category\">
                                                <option value>全部</option>
                                                {% for ten in tencent %}
                                                    <option value=\"{{ ten.id }}\">{{ ten.name }}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>
                                    {% endif %}
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">面值类型</label>
                                        <div class=\"layui-input-block\">
                                            {{ sf.select_raw('face_value_type', to_options(constant(\"App\\\\Common\\\\Model\\\\Product\\\\ProductMobile::FACE_VALUE_TYPES\"), '全部'), {\"class\": \"layui-input\"}) }}
                                        </div>
                                    </div>

                                    {% if product_cate_id != '3' %}
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">商品适用范围</label>
                                        <div class=\"layui-input-block\">
                                            {{ sf.select_raw('area_name', to_options(constant(\"App\\\\ProductConstants::PRODUCT_SALE_REGIONS\"), '全部'), {\"class\": \"layui-input\"}) }}
                                        </div>
                                    </div>

                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">运营商类别</label>
                                        <div class=\"layui-input-block\">
                                            {{ sf.select_raw('operator_id', to_options(constant(\"App\\\\Constants::CARRIERS\"), '全部'), {\"class\": \"layui-input\",\"lay-filter\":\"operator\"}) }}
                                        </div>
                                    </div>

                                    <div class=\"layui-inline\" style=\"display: none\" id=\"mvno-block\">
                                        <label class=\"layui-form-label\">虚拟运营商</label>
                                        <div class=\"layui-input-block\">
                                            <select name=\"mvno\" id=\"mvno\">
                                                <option value>全部</option>
                                                {% for mo in mvno %}
                                                    <option value=\"{{ mo.id }}\">{{ mo.short_name }}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>

                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">快充/慢充</label>
                                        <div class=\"layui-input-block\">
                                            {{ sf.select_raw('speed', to_options(constant(\"App\\\\Constants::RECHARGE_SPEED\"), '全部'), {\"class\": \"layui-input\"}) }}
                                        </div>
                                    </div>
                                    {% endif %}
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">货源启用状态</label>
                                        <div class=\"layui-input-block\">
                                            {{ sf.select_raw('sell_status', to_options(constant(\"App\\\\Common\\\\Model\\\\Product\\\\ProductMobileSource::SELL_STATUSES\"), '全部'), {\"class\": \"layui-input\"}) }}
                                        </div>
                                    </div>

                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">货源审核状态</label>
                                        <div class=\"layui-input-block\">
                                            {{ sf.select_raw('status', to_options(constant(\"App\\\\Common\\\\Model\\\\Product\\\\ProductMobileSource::STATUSES\"), '全部'), {\"class\": \"layui-input\"}) }}
                                        </div>
                                    </div>

                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">日期范围</label>
                                        <div class=\"layui-input-block\">
                                            <input type=\"text\" name=\"range_time\" class=\"layui-input\" id=\"timeFrame\" placeholder=\"\">
                                            <input type=\"hidden\" name=\"start_time\" id=\"start_time\" value=\"{{ 'now'|date('Y-m-d') }}\">
                                            <input type=\"hidden\" name=\"end_time\" id=\"end_time\" value=\"{{ 'now'|date('Y-m-d') }}\">
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">搜索</label>
                                        <div class=\"layui-input-block\">
                                            <input type=\"text\" name=\"keyword\" placeholder=\"商品名称搜索...\" autocomplete=\"off\" class=\"layui-input\">
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
                                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"setSuccess\">审核通过</button>
                                <button class=\"layui-btn layui-btn-warm layuiadmin-btn-useradmin site-demo-layer\" data-type=\"setFailure\">审核不通过</button>
                                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"changeStatus\" data-status=\"1\">启用</button>
                                <button class=\"layui-btn layui-btn-warm layuiadmin-btn-useradmin site-demo-layer\" data-type=\"changeStatus\" data-status=\"0\">停用</button>
                                <button class=\"layui-btn layui-btn-danger site-demo-layer\" data-type=\"delete\">删除货源</button>
                            </div>
                            <table class=\"layui-table\" id=\"product-supplies-table\" lay-filter=\"product-supplies-table\">

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script id=\"actions\" type=\"text/html\">
        <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"review\">审核</a>
        <a class=\"layui-btn layui-btn-danger layui-btn-xs\" lay-event=\"delete\">删除</a>
    </script>
    <script id=\"add_time\" type=\"text/html\">
        <%#
          var date = new Date();
          date.setTime(d.add_time*1000);
          return date.Format(\"yyyy-MM-dd hh:mm:ss\");
        %>
    </script>
{% endblock %}

{% block extra %}

    <!--此处为弹出层内容star-->
    <div id=\"review-content\" class=\"layer-demo layui-form\" style=\"display: none;\">
        <div class=\"layui-inline\">
            <label class=\"layui-form-label\">审核</label>
            <input type=\"radio\" name=\"review_status\" value=\"0\" title=\"已下架\" checked>
            <input type=\"radio\" name=\"review_status\" value=\"1\" title=\"已上架\">
            <input type=\"radio\" name=\"review_status\" value=\"2\" title=\"被冻结\">
            <input type=\"radio\" name=\"review_status\" value=\"3\" title=\"待审核\">
            <input type=\"radio\" name=\"review_status\" value=\"4\" title=\"审核拒绝\">
        </div>
    </div>
    <!--此处为弹出层内容开始end-->

{% endblock %}

{% block js_end %}
  {% include \"/Admin/Audit/product_supplies_js.twig\" %}
{% endblock %}
", "Admin/Audit/product_supplies.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\Audit\\product_supplies.twig");
    }
}
