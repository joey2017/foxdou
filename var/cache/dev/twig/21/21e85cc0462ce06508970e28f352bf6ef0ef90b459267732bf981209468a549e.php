<?php

/* Supplier/ProductSourceGroup/index.twig */
class __TwigTemplate_9c8e667ad6ed648b3198c6bb8b5e7c1ddaa2b21a2af903543fe64a0944961b49 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Supplier/Common/layout.twig", "Supplier/ProductSourceGroup/index.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Supplier/ProductSourceGroup/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Supplier/ProductSourceGroup/index.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Supplier/ProductSourceGroup/index.twig", 2);
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
            <form class=\"layui-form layui-form-pane\" action=\"\" id=\"template-list\">
                <div class=\"layui-form-item\">
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">商品类型</label>
                        <div class=\"layui-input-block foxdou-select-length\">
                            ";
        // line 12
        echo $context["sf"]->macro_select_raw("product_cate_id", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Constants::PRODUCT_CATEGORIES"), "全部"), array("class" => "layui-input"));
        echo "
                        </div>
                    </div>
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">自动退款</label>
                        <div class=\"layui-input-block foxdou-select-length\">
                            ";
        // line 18
        echo $context["sf"]->macro_select_raw("auto_refund", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\Product\\SourceGroup::AUTO_REFUND_STATUSES"), "全部"), array("class" => "layui-input"));
        echo "
                        </div>
                    </div>
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">模板状态</label>
                        <div class=\"layui-input-block foxdou-select-length\">
                            ";
        // line 24
        echo $context["sf"]->macro_select_raw("status", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\Product\\SourceGroup::STATUSES"), "全部"), array("class" => "layui-input"));
        echo "
                        </div>
                    </div>
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">供货方式</label>
                        <div class=\"layui-input-block foxdou-select-length\">
                            ";
        // line 30
        echo $context["sf"]->macro_select_raw("supply_type", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\Product\\SourceGroup::SUPPLY_TYPES"), "全部"), array("class" => "layui-input"));
        echo "
                        </div>
                    </div>
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">日期范围</label>
                        <div class=\"layui-input-block\">
                            <input type=\"text\" name=\"range_time\" class=\"layui-input\" id=\"timeFrame\" placeholder=\"\"><input type=\"hidden\" name=\"start_time\" id=\"start_time\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\">
                            <input type=\"hidden\" name=\"end_time\" id=\"end_time\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">模板名称</label>
                        <div class=\"layui-input-block\">
                            <input type=\"text\" name=\"name\" placeholder=\"请输入模板名称\" class=\"layui-input\">
                        </div>
                    </div>
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">模板编号</label>
                        <div class=\"layui-input-block\">
                            <input type=\"text\" name=\"id\" placeholder=\"请输入模板编号\" class=\"layui-input\">
                        </div>
                    </div>
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">备注</label>
                        <div class=\"layui-input-block\">
                            <input type=\"text\" name=\"info\" placeholder=\"请输入备注信息\" class=\"layui-input\">
                        </div>
                    </div>

                    <div class=\"layui-inline\">
                        <button class=\"layui-btn layui-btn-normal\" onclick=\"get_data();return false;\">立即查询</button>
                    </div>
                </div>
            </form>
        </div>
        <div class=\"foxdou-table-page\" style=\"padding: 15px;margin-left: 200px;\">
            <div class=\"layui-form-item\">
                <div class=\"layui-inline foxdou-left\">
                    <button class=\"layui-btn layui-btn-sm layui-btn-normal\" id=\"negative\">反选</button>
                    <button class=\"layui-btn layui-btn-sm layui-btn-success\" id=\"add\">新增</button>
                    <button class=\"layui-btn layui-btn-sm layui-btn-success\" id=\"enable\">启用</button>
                    <button class=\"layui-btn layui-btn-sm layui-btn-warm\" id=\"disable\">停用</button>
                    <button class=\"layui-btn layui-btn-sm layui-btn-danger\" id=\"delete\">删除</button>
                </div>
            </div>
            <table class=\"layui-table\" id=\"template-list-table\" lay-filter=\"template-list-table\">

            </table>
        </div>
    </div>
    <script id=\"actions\" type=\"text/html\">
        <div class=\"layui-btn-container\">
            <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"detail\">模板下商品</a>
            <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"edit\">编辑</a>
            <a class=\"layui-btn layui-btn-danger layui-btn-xs\" lay-event=\"delete\">删除</a>
        </div>
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

    // line 96
    public function block_extra($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        // line 97
        echo "
    <style type=\"text/css\">
        /*局部样式*/
        .layadmin-layer-content {
            padding: 15px 30px 0 30px;
        }
        .layadmin-td-head {
            padding: 8px 10px!important;
            font-weight: bold;
            color: #444;
        }
        .layadmin-td-title {
            padding-right: 15px!important;
            text-align: right;
            color: #999;
            background-color: #fcfcfc;
        }
        .layadmin-td-img img {
            width: 100px;
            height: 80px;
            box-sizing: border-box;
            margin: 5px 3px;
            cursor: pointer;
        }
        .layadmin-td-img img:hover {
            border: 2px solid #5FB878;
        }
    </style>

    <!--此处为弹出层内容star-->
    <div id=\"template\" class=\"layadmin-layer-content\" style=\"display: none;padding-left: 0px;\">
        <form class=\"layui-form\" action=\"\">
            <input type=\"hidden\" id=\"csrf_token\" name=\"_token\" value=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("supplier_product_source_groups_add_template"), "html", null, true);
        echo "\">
            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">模板名称</label>
                <div class=\"layui-input-block\">
                    <input type=\"text\" name=\"name\" id=\"name\" required lay-verify=\"required\" placeholder=\"请输入模板名称\" autocomplete=\"off\" class=\"layui-input\">
                </div>
            </div>
            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">商品类型</label>
                <div class=\"layui-input-block\">
                    <input type=\"radio\" class=\"product_cate_id\" name=\"product_cate_id\" value=\"1\" title=\"手机话费充值\" checked>
                    <input type=\"radio\" class=\"product_cate_id\" name=\"product_cate_id\" value=\"10\" title=\"固话充值\">
                    <input type=\"radio\" class=\"product_cate_id\" name=\"product_cate_id\" value=\"3\" title=\"腾讯业务充值\">
                </div>
            </div>
            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">自动退款</label>
                <div class=\"layui-input-block\">
                    <input type=\"radio\" class=\"auto_refund\" name=\"auto_refund\" value=\"1\" title=\"是\" checked>
                    <input type=\"radio\" class=\"auto_refund\" name=\"auto_refund\" value=\"0\" title=\"否\">
                </div>
            </div>
            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">供货方式</label>
                <div class=\"layui-input-block\">
                    <input type=\"radio\" class=\"supply_type\" name=\"supply_type\" value=\"1\" title=\"接口\" checked>
                    <input type=\"radio\" class=\"supply_type\" name=\"supply_type\" value=\"2\" title=\"卡密\">
                    <input type=\"radio\" class=\"supply_type\" name=\"supply_type\" value=\"3\" title=\"人工\">
                </div>
            </div>
            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">模板启用状态</label>
                <div class=\"layui-input-block\">
                    <input type=\"radio\" class=\"status\" name=\"status\" value=\"1\" title=\"启用\" checked>
                    <input type=\"radio\" class=\"status\" name=\"status\" value=\"0\" title=\"停用\">
                </div>
            </div>
            <div class=\"layui-form-item layui-form-text\">
                <label class=\"layui-form-label\">备注</label>
                <div class=\"layui-input-block\">
                    <textarea name=\"info\" id=\"info\" placeholder=\"请输入内容\" class=\"layui-textarea\"></textarea>
                </div>
            </div>
            ";
        // line 173
        echo "                ";
        // line 174
        echo "                    ";
        // line 175
        echo "                    ";
        // line 176
        echo "                ";
        // line 177
        echo "            ";
        // line 178
        echo "        </form>
    </div>
    <!--此处为弹出层内容开始end-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 184
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 185
        echo "    ";
        $this->loadTemplate("/Supplier/ProductSourceGroup/index_js.twig", "Supplier/ProductSourceGroup/index.twig", 185)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Supplier/ProductSourceGroup/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 185,  288 => 184,  274 => 178,  272 => 177,  270 => 176,  268 => 175,  266 => 174,  264 => 173,  218 => 129,  184 => 97,  175 => 96,  107 => 37,  103 => 36,  94 => 30,  85 => 24,  76 => 18,  67 => 12,  58 => 5,  49 => 4,  39 => 1,  37 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Supplier/Common/layout.twig' %}
{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

{% block main_content %}
    <div class=\"foxdou-row foxdou-row-notm\">
        <div class=\"foxdou-form-row\" style=\"margin-left: 200px;\">
            <form class=\"layui-form layui-form-pane\" action=\"\" id=\"template-list\">
                <div class=\"layui-form-item\">
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">商品类型</label>
                        <div class=\"layui-input-block foxdou-select-length\">
                            {{ sf.select_raw('product_cate_id', to_options(constant(\"App\\\\Constants::PRODUCT_CATEGORIES\"), '全部'), {\"class\": \"layui-input\"}) }}
                        </div>
                    </div>
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">自动退款</label>
                        <div class=\"layui-input-block foxdou-select-length\">
                            {{ sf.select_raw('auto_refund', to_options(constant(\"App\\\\Common\\\\Model\\\\Product\\\\SourceGroup::AUTO_REFUND_STATUSES\"), '全部'), {\"class\": \"layui-input\"}) }}
                        </div>
                    </div>
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">模板状态</label>
                        <div class=\"layui-input-block foxdou-select-length\">
                            {{ sf.select_raw('status', to_options(constant(\"App\\\\Common\\\\Model\\\\Product\\\\SourceGroup::STATUSES\"), '全部'), {\"class\": \"layui-input\"}) }}
                        </div>
                    </div>
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">供货方式</label>
                        <div class=\"layui-input-block foxdou-select-length\">
                            {{ sf.select_raw('supply_type', to_options(constant(\"App\\\\Common\\\\Model\\\\Product\\\\SourceGroup::SUPPLY_TYPES\"), '全部'), {\"class\": \"layui-input\"}) }}
                        </div>
                    </div>
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">日期范围</label>
                        <div class=\"layui-input-block\">
                            <input type=\"text\" name=\"range_time\" class=\"layui-input\" id=\"timeFrame\" placeholder=\"\"><input type=\"hidden\" name=\"start_time\" id=\"start_time\" value=\"{{ 'now'|date('Y-m-d') }}\">
                            <input type=\"hidden\" name=\"end_time\" id=\"end_time\" value=\"{{ 'now'|date('Y-m-d') }}\">
                        </div>
                    </div>
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">模板名称</label>
                        <div class=\"layui-input-block\">
                            <input type=\"text\" name=\"name\" placeholder=\"请输入模板名称\" class=\"layui-input\">
                        </div>
                    </div>
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">模板编号</label>
                        <div class=\"layui-input-block\">
                            <input type=\"text\" name=\"id\" placeholder=\"请输入模板编号\" class=\"layui-input\">
                        </div>
                    </div>
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">备注</label>
                        <div class=\"layui-input-block\">
                            <input type=\"text\" name=\"info\" placeholder=\"请输入备注信息\" class=\"layui-input\">
                        </div>
                    </div>

                    <div class=\"layui-inline\">
                        <button class=\"layui-btn layui-btn-normal\" onclick=\"get_data();return false;\">立即查询</button>
                    </div>
                </div>
            </form>
        </div>
        <div class=\"foxdou-table-page\" style=\"padding: 15px;margin-left: 200px;\">
            <div class=\"layui-form-item\">
                <div class=\"layui-inline foxdou-left\">
                    <button class=\"layui-btn layui-btn-sm layui-btn-normal\" id=\"negative\">反选</button>
                    <button class=\"layui-btn layui-btn-sm layui-btn-success\" id=\"add\">新增</button>
                    <button class=\"layui-btn layui-btn-sm layui-btn-success\" id=\"enable\">启用</button>
                    <button class=\"layui-btn layui-btn-sm layui-btn-warm\" id=\"disable\">停用</button>
                    <button class=\"layui-btn layui-btn-sm layui-btn-danger\" id=\"delete\">删除</button>
                </div>
            </div>
            <table class=\"layui-table\" id=\"template-list-table\" lay-filter=\"template-list-table\">

            </table>
        </div>
    </div>
    <script id=\"actions\" type=\"text/html\">
        <div class=\"layui-btn-container\">
            <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"detail\">模板下商品</a>
            <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"edit\">编辑</a>
            <a class=\"layui-btn layui-btn-danger layui-btn-xs\" lay-event=\"delete\">删除</a>
        </div>
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

    <style type=\"text/css\">
        /*局部样式*/
        .layadmin-layer-content {
            padding: 15px 30px 0 30px;
        }
        .layadmin-td-head {
            padding: 8px 10px!important;
            font-weight: bold;
            color: #444;
        }
        .layadmin-td-title {
            padding-right: 15px!important;
            text-align: right;
            color: #999;
            background-color: #fcfcfc;
        }
        .layadmin-td-img img {
            width: 100px;
            height: 80px;
            box-sizing: border-box;
            margin: 5px 3px;
            cursor: pointer;
        }
        .layadmin-td-img img:hover {
            border: 2px solid #5FB878;
        }
    </style>

    <!--此处为弹出层内容star-->
    <div id=\"template\" class=\"layadmin-layer-content\" style=\"display: none;padding-left: 0px;\">
        <form class=\"layui-form\" action=\"\">
            <input type=\"hidden\" id=\"csrf_token\" name=\"_token\" value=\"{{ csrf_token('supplier_product_source_groups_add_template') }}\">
            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">模板名称</label>
                <div class=\"layui-input-block\">
                    <input type=\"text\" name=\"name\" id=\"name\" required lay-verify=\"required\" placeholder=\"请输入模板名称\" autocomplete=\"off\" class=\"layui-input\">
                </div>
            </div>
            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">商品类型</label>
                <div class=\"layui-input-block\">
                    <input type=\"radio\" class=\"product_cate_id\" name=\"product_cate_id\" value=\"1\" title=\"手机话费充值\" checked>
                    <input type=\"radio\" class=\"product_cate_id\" name=\"product_cate_id\" value=\"10\" title=\"固话充值\">
                    <input type=\"radio\" class=\"product_cate_id\" name=\"product_cate_id\" value=\"3\" title=\"腾讯业务充值\">
                </div>
            </div>
            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">自动退款</label>
                <div class=\"layui-input-block\">
                    <input type=\"radio\" class=\"auto_refund\" name=\"auto_refund\" value=\"1\" title=\"是\" checked>
                    <input type=\"radio\" class=\"auto_refund\" name=\"auto_refund\" value=\"0\" title=\"否\">
                </div>
            </div>
            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">供货方式</label>
                <div class=\"layui-input-block\">
                    <input type=\"radio\" class=\"supply_type\" name=\"supply_type\" value=\"1\" title=\"接口\" checked>
                    <input type=\"radio\" class=\"supply_type\" name=\"supply_type\" value=\"2\" title=\"卡密\">
                    <input type=\"radio\" class=\"supply_type\" name=\"supply_type\" value=\"3\" title=\"人工\">
                </div>
            </div>
            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">模板启用状态</label>
                <div class=\"layui-input-block\">
                    <input type=\"radio\" class=\"status\" name=\"status\" value=\"1\" title=\"启用\" checked>
                    <input type=\"radio\" class=\"status\" name=\"status\" value=\"0\" title=\"停用\">
                </div>
            </div>
            <div class=\"layui-form-item layui-form-text\">
                <label class=\"layui-form-label\">备注</label>
                <div class=\"layui-input-block\">
                    <textarea name=\"info\" id=\"info\" placeholder=\"请输入内容\" class=\"layui-textarea\"></textarea>
                </div>
            </div>
            {#<div class=\"layui-form-item\">#}
                {#<div class=\"layui-input-block\">#}
                    {#<button class=\"layui-btn\" lay-submit=\"\" lay-filter=\"formDemo\">确定</button>#}
                    {#<button class=\"layui-btn\">返回</button>#}
                {#</div>#}
            {#</div>#}
        </form>
    </div>
    <!--此处为弹出层内容开始end-->

{% endblock %}

{% block js_end %}
    {% include \"/Supplier/ProductSourceGroup/index_js.twig\" %}
{% endblock %}
", "Supplier/ProductSourceGroup/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Supplier\\ProductSourceGroup\\index.twig");
    }
}
