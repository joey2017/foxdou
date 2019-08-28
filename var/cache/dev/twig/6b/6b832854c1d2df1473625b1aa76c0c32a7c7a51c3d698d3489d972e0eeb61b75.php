<?php

/* Admin/Audit/account_application.twig */
class __TwigTemplate_df9e48b071698c3e965cfd67ac55e0cc606a6a434cf0003edca1c182cf523585 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Admin/Common/layout.twig", "Admin/Audit/account_application.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Audit/account_application.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Audit/account_application.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Admin/Audit/account_application.twig", 2);
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
            <a><cite>开户申请列表</cite></a>
        </div>
    </div>
    <div class=\"layui-fluid\">
        <div class=\"layui-card\">
            <div class=\"layui-tab layui-tab-brief layadmin-tab\" lay-filter=\"docDemoTabBrief\">
                <div class=\"layui-tab-content\">
                    <div class=\"layui-tab-item layui-show\">
                        <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
                            <div class=\"layui-form-item\">
                                <form action=\"\" method=\"get\" id=\"account-application\">
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">申请开户平台</label>
                                        <div class=\"layui-input-block\">
                                            ";
        // line 23
        echo $context["sf"]->macro_select_raw("platform_id", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Platform::PLATFORMS"), "全部"), array("class" => "layui-input"));
        echo "
                                        </div>
                                    </div>

                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">审核状态</label>
                                        <div class=\"layui-input-block\">
                                            ";
        // line 30
        echo $context["sf"]->macro_select_raw("status", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\User\\UsersAccountApplication::REVIEW_STATUSES"), "全部"), array("class" => "layui-input"));
        echo "
                                        </div>
                                    </div>

                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">注册类型</label>
                                        <div class=\"layui-input-block\">
                                            ";
        // line 37
        echo $context["sf"]->macro_select_raw("type", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\User\\User::TYPES"), "全部"), array("class" => "layui-input"));
        echo "
                                        </div>
                                    </div>

                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">日期范围</label>
                                        <div class=\"layui-input-block\">
                                            <input type=\"text\" name=\"range_time\" class=\"layui-input\" id=\"timeFrame\" placeholder=\"\">
                                            <input type=\"hidden\" name=\"start_time\" id=\"start_time\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\">
                                            <input type=\"hidden\" name=\"end_time\" id=\"end_time\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\">
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">搜索</label>
                                        <div class=\"layui-input-block\">
                                            <input type=\"text\" name=\"account\" placeholder=\"狐豆号搜索...\" autocomplete=\"off\" class=\"layui-input\">
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">搜索</label>
                                        <div class=\"layui-input-block\">
                                            <input type=\"text\" name=\"pass\" placeholder=\"狐豆通行证搜索...\" autocomplete=\"off\" class=\"layui-input\">
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
                            <table class=\"layui-table\" id=\"account-application-table\" lay-filter=\"account-application-table\">

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
    <script id=\"edit_time\" type=\"text/html\">
              <%#
              var date = new Date();
              date.setTime(d.edit_time*1000);
              return date.Format(\"yyyy-MM-dd hh:mm:ss\");
          %>
        </script>
    <script type=\"text/html\" id=\"actions\">
              <%# if(d.status == 'PENDING' || d.status == \"FAIL\"){ %>
             <a class=\"layui-btn layui-btn-success layui-btn-xs\" lay-event=\"review\">审核</a>
          <%# } %>
          </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_extra($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        // line 103
        echo "    <style type=\"text/css\">
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
    <!--个人开始-->
    <div id=\"review-content-individual\" class=\"layadmin-layer-content\" style=\"display: none\">
        <table class=\"layui-table layadmin-remove-color\">
            <colgroup>
                <col width=\"140\">
                <col width=\"250\">
                <col width=\"160\">
                <col >
            </colgroup>
            <tbody>
            <tr>
                <td colspan=\"4\" class=\"layadmin-td-head\">个人信息：</td>
            </tr>
            <tr>
                <td class=\"layadmin-td-title\">姓名</td>
                <td id=\"user_name\"></td>
            </tr>
            <tr>
                <td class=\"layadmin-td-title\">身份证号</td>
                <td id=\"identity\"></td>
            </tr>

            <tr>
                <td colspan=\"4\" class=\"layadmin-td-head\">审核说明：</td>
            </tr>
            <tr>
                <td colspan=\"4\">
                    <textarea class=\"layui-textarea\" id=\"note\" name=\"note\" placeholder=\"请输入……\"></textarea>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--个人结束-->
    <!--企业开始-->
    <div id=\"review-content-bussniss\" class=\"layadmin-layer-content\" style=\"display: none\">
        <table class=\"layui-table layadmin-remove-color\">
            <colgroup>
                <col width=\"140\">
                <col width=\"250\">
                <col width=\"160\">
                <col >
            </colgroup>
            <tbody>
            <tr>
                <td colspan=\"4\" class=\"layadmin-td-head\">企业信息：</td>
            </tr>
            <tr>
                <td class=\"layadmin-td-title\">企业名称</td>
                <td id=\"business_name\"></td>
                <td class=\"layadmin-td-title\">企业类型</td>
                <td id=\"user_type\"></td>
            </tr>
            <tr>
                <td class=\"layadmin-td-title\">营业执照号</td>
                <td id=\"business_license_no\"></td>
                <td class=\"layadmin-td-title\">企业地址(省市区)</td>
                <td id=\"province_city_district\"></td>
            </tr>
            <tr>
                <td class=\"layadmin-td-title\">详细地址</td>
                <td id=\"business_address\" colspan=\"3\"></td>
            </tr>
            <tr>
                <td colspan=\"4\" class=\"layadmin-td-head\">法人信息：</td>
            </tr>
            <tr>
                <td class=\"layadmin-td-title\">法人姓名</td>
                <td id=\"legal_person_name\"></td>
                <td class=\"layadmin-td-title\">法人身份证号</td>
                <td id=\"identity_card_no\"></td>
            </tr>
            <tr>
                <td colspan=\"4\" class=\"layadmin-td-head\">审核说明：</td>
            </tr>
            <tr>
                <td colspan=\"4\">
                    <textarea id=\"bussniss_note\" class=\"layui-textarea\" placeholder=\"请输入……\"></textarea>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--企业结束-->

    <!--此处为弹出层内容开始end-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 220
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 221
        echo "  ";
        $this->loadTemplate("/Admin/Audit/account_application_js.twig", "Admin/Audit/account_application.twig", 221)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Audit/account_application.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 221,  312 => 220,  187 => 103,  178 => 102,  113 => 46,  109 => 45,  98 => 37,  88 => 30,  78 => 23,  58 => 5,  49 => 4,  39 => 1,  37 => 2,  15 => 1,);
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
            <a><cite>开户申请列表</cite></a>
        </div>
    </div>
    <div class=\"layui-fluid\">
        <div class=\"layui-card\">
            <div class=\"layui-tab layui-tab-brief layadmin-tab\" lay-filter=\"docDemoTabBrief\">
                <div class=\"layui-tab-content\">
                    <div class=\"layui-tab-item layui-show\">
                        <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
                            <div class=\"layui-form-item\">
                                <form action=\"\" method=\"get\" id=\"account-application\">
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">申请开户平台</label>
                                        <div class=\"layui-input-block\">
                                            {{ sf.select_raw('platform_id', to_options(constant(\"App\\\\Platform::PLATFORMS\"), '全部'), {\"class\": \"layui-input\"}) }}
                                        </div>
                                    </div>

                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">审核状态</label>
                                        <div class=\"layui-input-block\">
                                            {{ sf.select_raw('status', to_options(constant(\"App\\\\Common\\\\Model\\\\User\\\\UsersAccountApplication::REVIEW_STATUSES\"), '全部'), {\"class\": \"layui-input\"}) }}
                                        </div>
                                    </div>

                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">注册类型</label>
                                        <div class=\"layui-input-block\">
                                            {{ sf.select_raw('type', to_options(constant(\"App\\\\Common\\\\Model\\\\User\\\\User::TYPES\"), '全部'), {\"class\": \"layui-input\"}) }}
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
                                            <input type=\"text\" name=\"account\" placeholder=\"狐豆号搜索...\" autocomplete=\"off\" class=\"layui-input\">
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">搜索</label>
                                        <div class=\"layui-input-block\">
                                            <input type=\"text\" name=\"pass\" placeholder=\"狐豆通行证搜索...\" autocomplete=\"off\" class=\"layui-input\">
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
                            <table class=\"layui-table\" id=\"account-application-table\" lay-filter=\"account-application-table\">

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
    <script id=\"edit_time\" type=\"text/html\">
              <%#
              var date = new Date();
              date.setTime(d.edit_time*1000);
              return date.Format(\"yyyy-MM-dd hh:mm:ss\");
          %>
        </script>
    <script type=\"text/html\" id=\"actions\">
              <%# if(d.status == 'PENDING' || d.status == \"FAIL\"){ %>
             <a class=\"layui-btn layui-btn-success layui-btn-xs\" lay-event=\"review\">审核</a>
          <%# } %>
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
    <!--个人开始-->
    <div id=\"review-content-individual\" class=\"layadmin-layer-content\" style=\"display: none\">
        <table class=\"layui-table layadmin-remove-color\">
            <colgroup>
                <col width=\"140\">
                <col width=\"250\">
                <col width=\"160\">
                <col >
            </colgroup>
            <tbody>
            <tr>
                <td colspan=\"4\" class=\"layadmin-td-head\">个人信息：</td>
            </tr>
            <tr>
                <td class=\"layadmin-td-title\">姓名</td>
                <td id=\"user_name\"></td>
            </tr>
            <tr>
                <td class=\"layadmin-td-title\">身份证号</td>
                <td id=\"identity\"></td>
            </tr>

            <tr>
                <td colspan=\"4\" class=\"layadmin-td-head\">审核说明：</td>
            </tr>
            <tr>
                <td colspan=\"4\">
                    <textarea class=\"layui-textarea\" id=\"note\" name=\"note\" placeholder=\"请输入……\"></textarea>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--个人结束-->
    <!--企业开始-->
    <div id=\"review-content-bussniss\" class=\"layadmin-layer-content\" style=\"display: none\">
        <table class=\"layui-table layadmin-remove-color\">
            <colgroup>
                <col width=\"140\">
                <col width=\"250\">
                <col width=\"160\">
                <col >
            </colgroup>
            <tbody>
            <tr>
                <td colspan=\"4\" class=\"layadmin-td-head\">企业信息：</td>
            </tr>
            <tr>
                <td class=\"layadmin-td-title\">企业名称</td>
                <td id=\"business_name\"></td>
                <td class=\"layadmin-td-title\">企业类型</td>
                <td id=\"user_type\"></td>
            </tr>
            <tr>
                <td class=\"layadmin-td-title\">营业执照号</td>
                <td id=\"business_license_no\"></td>
                <td class=\"layadmin-td-title\">企业地址(省市区)</td>
                <td id=\"province_city_district\"></td>
            </tr>
            <tr>
                <td class=\"layadmin-td-title\">详细地址</td>
                <td id=\"business_address\" colspan=\"3\"></td>
            </tr>
            <tr>
                <td colspan=\"4\" class=\"layadmin-td-head\">法人信息：</td>
            </tr>
            <tr>
                <td class=\"layadmin-td-title\">法人姓名</td>
                <td id=\"legal_person_name\"></td>
                <td class=\"layadmin-td-title\">法人身份证号</td>
                <td id=\"identity_card_no\"></td>
            </tr>
            <tr>
                <td colspan=\"4\" class=\"layadmin-td-head\">审核说明：</td>
            </tr>
            <tr>
                <td colspan=\"4\">
                    <textarea id=\"bussniss_note\" class=\"layui-textarea\" placeholder=\"请输入……\"></textarea>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--企业结束-->

    <!--此处为弹出层内容开始end-->
{% endblock %}

{% block js_end %}
  {% include \"/Admin/Audit/account_application_js.twig\" %}
{% endblock %}
", "Admin/Audit/account_application.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\Audit\\account_application.twig");
    }
}
