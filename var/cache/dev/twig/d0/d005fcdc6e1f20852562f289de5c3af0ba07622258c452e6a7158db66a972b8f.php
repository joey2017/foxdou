<?php

/* Admin/Audit/withdraws.twig */
class __TwigTemplate_55f299be709474ef1bb53699e1b1a64aedd95b2052b44bdfa1e93f2bbc852478 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Admin/Common/layout.twig", "Admin/Audit/withdraws.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Audit/withdraws.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Audit/withdraws.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Admin/Audit/withdraws.twig", 2);
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
            <a><cite>余额提现申请审核列表</cite></a>
        </div>
    </div>
    <div class=\"layui-fluid\">
        <div class=\"layui-card\">
            <div class=\"layui-tab layui-tab-brief layadmin-tab\" lay-filter=\"docDemoTabBrief\">
                <div class=\"layui-tab-content\">
                    <div class=\"layui-tab-item layui-show\">
                        <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
                            <div class=\"layui-form-item\">
                                <form action=\"\" method=\"get\" id=\"withdraws-list\">
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">审核状态</label>
                                        <div class=\"layui-input-block\">
                                            ";
        // line 23
        echo $context["sf"]->macro_select_raw("trade_status", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\Payment\\SellCashUserLog::TRADE_STATUSES"), "全部"), array("class" => "layui-input"));
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
                                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"review\">审核</button>
                                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"withdraw\">修改提现结果</button>
                            </div>
                            <table class=\"layui-table\" id=\"withdraws-table\" lay-filter=\"withdraws-table\">

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script id=\"actions\" type=\"text/html\">
        ";
        // line 72
        echo "
          {{# if (d.trade_status < 2) { }}
              <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"review\">审核</a>
          {{# } }}
          {{# if (d.trade_status == 2) { }}
              <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"withdraw\">修改提现结果</a>
          {{# } }}
        ";
        echo "
    </script>
    <script id=\"add_time\" type=\"text/html\">
        ";
        // line 81
        echo "
          {{#
              var date = new Date();
              date.setTime(d.add_time*1000);
              return date.Format(\"yyyy-MM-dd hh:mm:ss\");
          }}
        ";
        echo "
    </script>
    <script id=\"edit_time\" type=\"text/html\">
        ";
        // line 90
        echo "
          {{#
              var date = new Date();
              date.setTime(d.edit_time*1000);
              return date.Format(\"yyyy-MM-dd hh:mm:ss\");
          }}
        ";
        echo "
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_extra($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        // line 95
        echo "
    <!--此处为弹出层内容star-->
    <div id=\"setSuccessDome\" class=\"layer-demo layui-form\" style=\"display: none;\">
        <input type=\"radio\" name=\"status_a\" value=\"1\" title=\"审核不通过\" checked>
        <input type=\"radio\" name=\"status_a\" value=\"2\" title=\"审核通过（人工转账）\">
        <input type=\"text\" class=\"layui-input\" name=\"platform_info_a\" placeholder=\"请输入备注\" style=\"margin-top: 15px\">
        <input type=\"password\" class=\"layui-input\" name=\"password_a\" placeholder=\"请输入安全操作密码\" style=\"margin-top: 15px\">
    </div>

    <!--此处为弹出层内容开始end-->

    <!--此处为弹出层内容star-->
    <div id=\"setFailureDome\" class=\"layer-demo layui-form\" style=\"display: none;\">
        <input type=\"radio\" name=\"status_b\" value=\"3\" title=\"已提现\" checked>
        <input type=\"radio\" name=\"status_b\" value=\"4\" title=\"提现失败\">
        <input type=\"text\" class=\"layui-input\" name=\"platform_info_b\" placeholder=\"请输入备注\" style=\"margin-top: 15px\">
        <input type=\"password\" class=\"layui-input\" name=\"password_b\" placeholder=\"请输入安全操作密码\" style=\"margin-top: 15px\">
    </div>
    <!--此处为弹出层内容开始end-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 117
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 118
        echo "  ";
        $this->loadTemplate("/Admin/Audit/withdraws_js.twig", "Admin/Audit/withdraws.twig", 118)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Audit/withdraws.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 118,  206 => 117,  176 => 95,  167 => 94,  148 => 90,  136 => 81,  123 => 72,  78 => 23,  58 => 5,  49 => 4,  39 => 1,  37 => 2,  15 => 1,);
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
            <a><cite>余额提现申请审核列表</cite></a>
        </div>
    </div>
    <div class=\"layui-fluid\">
        <div class=\"layui-card\">
            <div class=\"layui-tab layui-tab-brief layadmin-tab\" lay-filter=\"docDemoTabBrief\">
                <div class=\"layui-tab-content\">
                    <div class=\"layui-tab-item layui-show\">
                        <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
                            <div class=\"layui-form-item\">
                                <form action=\"\" method=\"get\" id=\"withdraws-list\">
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">审核状态</label>
                                        <div class=\"layui-input-block\">
                                            {{ sf.select_raw('trade_status', to_options(constant(\"App\\\\Common\\\\Model\\\\Payment\\\\SellCashUserLog::TRADE_STATUSES\"), '全部'), {\"class\": \"layui-input\"}) }}
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
                                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"review\">审核</button>
                                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"withdraw\">修改提现结果</button>
                            </div>
                            <table class=\"layui-table\" id=\"withdraws-table\" lay-filter=\"withdraws-table\">

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script id=\"actions\" type=\"text/html\">
        {% verbatim %}
          {{# if (d.trade_status < 2) { }}
              <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"review\">审核</a>
          {{# } }}
          {{# if (d.trade_status == 2) { }}
              <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"withdraw\">修改提现结果</a>
          {{# } }}
        {% endverbatim %}
    </script>
    <script id=\"add_time\" type=\"text/html\">
        {% verbatim %}
          {{#
              var date = new Date();
              date.setTime(d.add_time*1000);
              return date.Format(\"yyyy-MM-dd hh:mm:ss\");
          }}
        {% endverbatim %}
    </script>
    <script id=\"edit_time\" type=\"text/html\">
        {% verbatim %}
          {{#
              var date = new Date();
              date.setTime(d.edit_time*1000);
              return date.Format(\"yyyy-MM-dd hh:mm:ss\");
          }}
        {% endverbatim %}
    </script>
{% endblock %}

{% block extra %}

    <!--此处为弹出层内容star-->
    <div id=\"setSuccessDome\" class=\"layer-demo layui-form\" style=\"display: none;\">
        <input type=\"radio\" name=\"status_a\" value=\"1\" title=\"审核不通过\" checked>
        <input type=\"radio\" name=\"status_a\" value=\"2\" title=\"审核通过（人工转账）\">
        <input type=\"text\" class=\"layui-input\" name=\"platform_info_a\" placeholder=\"请输入备注\" style=\"margin-top: 15px\">
        <input type=\"password\" class=\"layui-input\" name=\"password_a\" placeholder=\"请输入安全操作密码\" style=\"margin-top: 15px\">
    </div>

    <!--此处为弹出层内容开始end-->

    <!--此处为弹出层内容star-->
    <div id=\"setFailureDome\" class=\"layer-demo layui-form\" style=\"display: none;\">
        <input type=\"radio\" name=\"status_b\" value=\"3\" title=\"已提现\" checked>
        <input type=\"radio\" name=\"status_b\" value=\"4\" title=\"提现失败\">
        <input type=\"text\" class=\"layui-input\" name=\"platform_info_b\" placeholder=\"请输入备注\" style=\"margin-top: 15px\">
        <input type=\"password\" class=\"layui-input\" name=\"password_b\" placeholder=\"请输入安全操作密码\" style=\"margin-top: 15px\">
    </div>
    <!--此处为弹出层内容开始end-->

{% endblock %}

{% block js_end %}
  {% include \"/Admin/Audit/withdraws_js.twig\" %}
{% endblock %}
", "Admin/Audit/withdraws.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\Audit\\withdraws.twig");
    }
}
