<?php

/* Admin/Audit/real_names_list.twig */
class __TwigTemplate_78b1e246384214a02e5902a75095d20d99f46f2c8f1c2798d96cbabe0bdbde99 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Admin/Common/layout.twig", "Admin/Audit/real_names_list.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Audit/real_names_list.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Audit/real_names_list.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Admin/Audit/real_names_list.twig", 2);
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
            <a><cite>实名认证列表</cite></a>
        </div>
    </div>
    <div class=\"layui-fluid\">
        <div class=\"layui-card\">
            <div class=\"layui-tab layui-tab-brief layadmin-tab\" lay-filter=\"docDemoTabBrief\">
                <div class=\"layui-tab-content\">
                    <div class=\"layui-tab-item layui-show\">
                        <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
                            <div class=\"layui-form-item\">
                                <form action=\"\" method=\"get\" id=\"search-form\">
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">审核状态</label>
                                        <div class=\"layui-input-block\">
                                            ";
        // line 23
        echo $context["sf"]->macro_select_raw("status", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\User\\RealNameAuthenticationInfo::STATUSES"), "全部"), array("class" => "layui-input"));
        echo "
                                        </div>
                                    </div>

                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">注册类型</label>
                                        <div class=\"layui-input-block\">
                                            ";
        // line 30
        echo $context["sf"]->macro_select_raw("entity_type", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\User\\User::TYPES"), "全部"), array("class" => "layui-input"));
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
                                            <input type=\"text\" name=\"keyword\" placeholder=\"狐豆号/狐豆通行证搜索...\" autocomplete=\"off\" class=\"layui-input\">
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
                            <table id=\"table\" class=\"layui-table\" lay-data=\"{url:'";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_identities");
        echo "', page:true, id:'table', method:'get'}\" lay-filter=\"table\">
                                <thead>
                                <tr>
                                    ";
        // line 62
        echo "                                    <th lay-data=\"{field:'id', width: 50, align: 'center'}\">ID</th>
                                    <th lay-data=\"{field:'status', width:100, align: 'center'}\">审核状态</th>
                                    <th lay-data=\"{field:'account', width:200, align: 'center'}\">狐豆名</th>
                                    <th lay-data=\"{field:'passport_name', width:200, align: 'center'}\">通行证</th>
                                    <th lay-data=\"{field:'entity_type', width:150, align: 'center'}\">通行证类型</th>
                                    <th lay-data=\"{field:'note', align: 'center'}\">审核说明</th>
                                    <th lay-data=\"{field:'status', width:100, align: 'center'}\">状态</th>
                                    <th lay-data=\"{field:'submitted_at', width:180, align: 'center'}\">提交审核时间</th>
                                    <th lay-data=\"{field:'reviewed_at', width:180, align: 'center'}\">审核处理时间</th>
                                    <th lay-data=\"{align:'center', toolbar: '#actions', width:100}\">操作</th>
                                </tr>
                                </thead>
                            </table>
                            <script id=\"actions\" type=\"text/html\">
                                ";
        // line 80
        echo "
                                {{# if(d.status == 'PENDING' || d.status == 'FAIL') { }}
                                    <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"review\">审核</a>
                                {{#  } }}
                                ";
        echo "
                            </script>
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

    // line 90
    public function block_extra($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        // line 91
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
                <td id=\"business_name-individual\"></td>
            </tr>
            <tr>
                <td class=\"layadmin-td-title\">身份证号</td>
                <td id=\"business_license_no-individual\"></td>
            </tr>
            <tr>
                <td class=\"layadmin-td-title\">身份证地址</td>
                <td id=\"legal_person_address-individual\"></td>
            </tr>
            <td class=\"layadmin-td-title\">身份证正面照<br/>反面照<br/>手持照</td>
            <td colspan=\"3\">
                <!--点击图片,弹出大图-->
                <div class=\"layadmin-td-img\">
                    <img id=\"positive-individual\" src=\"\" />
                    <img id=\"negative-individual\" src=\"\" />
                    <img id=\"hand-individual\" src=\"\" />
                </div>
            </td>
            <tr>
                <td class=\"layadmin-td-title\">身份证有效期</td>
                <td id=\"card_valid_time-individual\"></td>
            </tr>

            <tr>
                <td colspan=\"4\" class=\"layadmin-td-head\">审核说明：</td>
            </tr>
            <tr>
                <td colspan=\"4\">
                    <textarea class=\"layui-textarea\" id=\"note-individual\" name=\"note-individual\" placeholder=\"请输入……\"></textarea>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

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
                <td class=\"layadmin-td-title\">企业地址（省市区）</td>
                <td id=\"province_city_district\"></td>
            </tr>
            <tr>
                <td class=\"layadmin-td-title\">详细地址</td>
                <td id=\"business_address\"></td>
                <td class=\"layadmin-td-title\">经营范围</td>
                <td id=\"business_scope\"></td>
            </tr>
            <tr>
                <td class=\"layadmin-td-title\">营业执照证照</td>
                <td>
                    <div class=\"layadmin-td-img\">
                        <img id=\"business_license_no\" src=\"\" />
                    </div>
                </td>
                <td class=\"layadmin-td-title\">有效日期</td>
                <td id=\"license_valid_time\"></td>
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
                <td class=\"layadmin-td-title\">身份证地址</td>
                <td id=\"legal_person_address\"></td>
                <td class=\"layadmin-td-title\">身份证有效期</td>
                <td id=\"card_valid_time\"></td>
            </tr>
            <tr>
                <td class=\"layadmin-td-title\">法人身份证正面照<br/>反面照<br/>手持照</td>
                <td colspan=\"3\">
                    <!--点击图片,弹出大图-->
                    <div class=\"layadmin-td-img\">
                        <img id=\"positive\" src=\"\" />
                        <img id=\"negative\" src=\"\" />
                        <img id=\"hand\" src=\"\" />
                    </div>
                </td>
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
    <!--此处为弹出层内容开始end-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 253
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 254
        echo "  <script>
      layui.table.on('tool(table)', function (row) {
          if (row.event === 'review') {
              console.log(row.data);
              show_review_dialog(row.data);
          }
      });

      function reload_table() {
          table.reload('table', {
              where: \$('#search-form').serializeJSON()
          });
      }

      function show_review_dialog(data) {
          // \$('#edit-form')[0].reset();
          \$('.error').html('');
          \$('.error').hide();
          \$('.tips').show();

          if (data) {
              layui.form.val(\"edit-form\", {
                  \"id\":  data.id
                  , \"status\":  data.status
                  , \"user_name\":  data.user_name
                  , \"roles\":    data.roles
                  , \"name\":     data.name
                  , \"password\": ''
                  , \"mobile\":   data.mobile
                  , \"title\":    data.title
              });
          }

          layer.open({
              title:    data ? '编辑' : '新增',
              type:     1,
              area:     'auto',
              content:  \$('#review-content-individual'),
              closeBtn: false,
              btn:      ['保存', '取消'],
              yes:      function (index, layero) {
                  ajax_post('";
        // line 295
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_administrator_save");
        echo "', \$('#edit-form').serialize(),
                      function (data) {
                          layer.close(index);
                          \$('#edit-user').toggle();
                          reload_table();
                      }, function (error) {

                      });
              },
              btn2:     function (index, layero) {
                  layer.close(index);
                  \$('#edit-user').toggle();
              }
          });
      }
  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Audit/real_names_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 295,  352 => 254,  343 => 253,  173 => 91,  164 => 90,  141 => 80,  125 => 62,  119 => 58,  88 => 30,  78 => 23,  58 => 5,  49 => 4,  39 => 1,  37 => 2,  15 => 1,);
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
            <a><cite>实名认证列表</cite></a>
        </div>
    </div>
    <div class=\"layui-fluid\">
        <div class=\"layui-card\">
            <div class=\"layui-tab layui-tab-brief layadmin-tab\" lay-filter=\"docDemoTabBrief\">
                <div class=\"layui-tab-content\">
                    <div class=\"layui-tab-item layui-show\">
                        <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
                            <div class=\"layui-form-item\">
                                <form action=\"\" method=\"get\" id=\"search-form\">
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">审核状态</label>
                                        <div class=\"layui-input-block\">
                                            {{ sf.select_raw('status', to_options(constant(\"App\\\\Common\\\\Model\\\\User\\\\RealNameAuthenticationInfo::STATUSES\"), '全部'), {\"class\": \"layui-input\"}) }}
                                        </div>
                                    </div>

                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">注册类型</label>
                                        <div class=\"layui-input-block\">
                                            {{ sf.select_raw('entity_type', to_options(constant(\"App\\\\Common\\\\Model\\\\User\\\\User::TYPES\"), '全部'), {\"class\": \"layui-input\"}) }}
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
                                            <input type=\"text\" name=\"keyword\" placeholder=\"狐豆号/狐豆通行证搜索...\" autocomplete=\"off\" class=\"layui-input\">
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
                            <table id=\"table\" class=\"layui-table\" lay-data=\"{url:'{{ path('admin_audit_identities') }}', page:true, id:'table', method:'get'}\" lay-filter=\"table\">
                                <thead>
                                <tr>
                                    {#<th lay-data=\"{type:'checkbox', fixed: 'left', width:'5%'}\"></th>#}
                                    <th lay-data=\"{field:'id', width: 50, align: 'center'}\">ID</th>
                                    <th lay-data=\"{field:'status', width:100, align: 'center'}\">审核状态</th>
                                    <th lay-data=\"{field:'account', width:200, align: 'center'}\">狐豆名</th>
                                    <th lay-data=\"{field:'passport_name', width:200, align: 'center'}\">通行证</th>
                                    <th lay-data=\"{field:'entity_type', width:150, align: 'center'}\">通行证类型</th>
                                    <th lay-data=\"{field:'note', align: 'center'}\">审核说明</th>
                                    <th lay-data=\"{field:'status', width:100, align: 'center'}\">状态</th>
                                    <th lay-data=\"{field:'submitted_at', width:180, align: 'center'}\">提交审核时间</th>
                                    <th lay-data=\"{field:'reviewed_at', width:180, align: 'center'}\">审核处理时间</th>
                                    <th lay-data=\"{align:'center', toolbar: '#actions', width:100}\">操作</th>
                                </tr>
                                </thead>
                            </table>
                            <script id=\"actions\" type=\"text/html\">
                                {% verbatim %}
                                {{# if(d.status == 'PENDING' || d.status == 'FAIL') { }}
                                    <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"review\">审核</a>
                                {{#  } }}
                                {% endverbatim %}
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                <td id=\"business_name-individual\"></td>
            </tr>
            <tr>
                <td class=\"layadmin-td-title\">身份证号</td>
                <td id=\"business_license_no-individual\"></td>
            </tr>
            <tr>
                <td class=\"layadmin-td-title\">身份证地址</td>
                <td id=\"legal_person_address-individual\"></td>
            </tr>
            <td class=\"layadmin-td-title\">身份证正面照<br/>反面照<br/>手持照</td>
            <td colspan=\"3\">
                <!--点击图片,弹出大图-->
                <div class=\"layadmin-td-img\">
                    <img id=\"positive-individual\" src=\"\" />
                    <img id=\"negative-individual\" src=\"\" />
                    <img id=\"hand-individual\" src=\"\" />
                </div>
            </td>
            <tr>
                <td class=\"layadmin-td-title\">身份证有效期</td>
                <td id=\"card_valid_time-individual\"></td>
            </tr>

            <tr>
                <td colspan=\"4\" class=\"layadmin-td-head\">审核说明：</td>
            </tr>
            <tr>
                <td colspan=\"4\">
                    <textarea class=\"layui-textarea\" id=\"note-individual\" name=\"note-individual\" placeholder=\"请输入……\"></textarea>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

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
                <td class=\"layadmin-td-title\">企业地址（省市区）</td>
                <td id=\"province_city_district\"></td>
            </tr>
            <tr>
                <td class=\"layadmin-td-title\">详细地址</td>
                <td id=\"business_address\"></td>
                <td class=\"layadmin-td-title\">经营范围</td>
                <td id=\"business_scope\"></td>
            </tr>
            <tr>
                <td class=\"layadmin-td-title\">营业执照证照</td>
                <td>
                    <div class=\"layadmin-td-img\">
                        <img id=\"business_license_no\" src=\"\" />
                    </div>
                </td>
                <td class=\"layadmin-td-title\">有效日期</td>
                <td id=\"license_valid_time\"></td>
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
                <td class=\"layadmin-td-title\">身份证地址</td>
                <td id=\"legal_person_address\"></td>
                <td class=\"layadmin-td-title\">身份证有效期</td>
                <td id=\"card_valid_time\"></td>
            </tr>
            <tr>
                <td class=\"layadmin-td-title\">法人身份证正面照<br/>反面照<br/>手持照</td>
                <td colspan=\"3\">
                    <!--点击图片,弹出大图-->
                    <div class=\"layadmin-td-img\">
                        <img id=\"positive\" src=\"\" />
                        <img id=\"negative\" src=\"\" />
                        <img id=\"hand\" src=\"\" />
                    </div>
                </td>
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
    <!--此处为弹出层内容开始end-->

{% endblock %}

{% block js_end %}
  <script>
      layui.table.on('tool(table)', function (row) {
          if (row.event === 'review') {
              console.log(row.data);
              show_review_dialog(row.data);
          }
      });

      function reload_table() {
          table.reload('table', {
              where: \$('#search-form').serializeJSON()
          });
      }

      function show_review_dialog(data) {
          // \$('#edit-form')[0].reset();
          \$('.error').html('');
          \$('.error').hide();
          \$('.tips').show();

          if (data) {
              layui.form.val(\"edit-form\", {
                  \"id\":  data.id
                  , \"status\":  data.status
                  , \"user_name\":  data.user_name
                  , \"roles\":    data.roles
                  , \"name\":     data.name
                  , \"password\": ''
                  , \"mobile\":   data.mobile
                  , \"title\":    data.title
              });
          }

          layer.open({
              title:    data ? '编辑' : '新增',
              type:     1,
              area:     'auto',
              content:  \$('#review-content-individual'),
              closeBtn: false,
              btn:      ['保存', '取消'],
              yes:      function (index, layero) {
                  ajax_post('{{ path('admin_system_administration_administrator_save') }}', \$('#edit-form').serialize(),
                      function (data) {
                          layer.close(index);
                          \$('#edit-user').toggle();
                          reload_table();
                      }, function (error) {

                      });
              },
              btn2:     function (index, layero) {
                  layer.close(index);
                  \$('#edit-user').toggle();
              }
          });
      }
  </script>
{% endblock %}
", "Admin/Audit/real_names_list.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\Audit\\real_names_list.twig");
    }
}
