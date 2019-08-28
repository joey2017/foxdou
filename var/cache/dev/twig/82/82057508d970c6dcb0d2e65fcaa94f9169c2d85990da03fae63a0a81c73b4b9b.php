<?php

/* Admin/Audit/identities.twig */
class __TwigTemplate_0c094f8913e62cc0009a4ede7c6eb6d21f054af36c16a4ae413a0023a905c575 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Admin/Common/layout.twig", "Admin/Audit/identities.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Audit/identities.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Audit/identities.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Admin/Audit/identities.twig", 2);
        // line 4
        $context["title"] = "实名认证审核 - 平台审核管理";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 7
        echo "    <div class=\"layui-fluid\">
        <div class=\"layui-card\">
            <div class=\"layui-tab-item layui-show\">
                <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
                    <div class=\"layui-form-item\">
                        <form id=\"search-form\">
                            <div class=\"layui-inline\">
                                <label class=\"layui-form-label\">审核状态</label>
                                <div class=\"layui-input-block\">
                                    ";
        // line 16
        echo $context["sf"]->macro_select_raw("status", $this->extensions['App\Common\Twig\AppExtension']->toOptions(array("PENDING" => "待审核", "REJECTED" => "审核失败", "VERIFIED" => "审核通过")), array("id" => "search_status"));
        echo "
                                </div>
                            </div>

                            <div class=\"layui-inline\">
                                <label class=\"layui-form-label\">注册类型</label>
                                <div class=\"layui-input-block\">
                                    ";
        // line 23
        echo $context["sf"]->macro_select_raw("entity_type", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\User\\User::TYPES"), "全部"), array("id" => "search_entity_type"));
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
                                    <button type=\"button\" class=\"layui-btn layuiadmin-btn-useradmin\" onclick=\"reload_table();return false;\">
                                        <i class=\"layui-icon layui-icon-search layuiadmin-button-btn\"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class=\"layui-card-body\">
                    <table id=\"table\" class=\"layui-table\" lay-data=\"{url:'";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_identities");
        echo "?status=PENDING', page:true, id:'table', method:'get'}\" lay-filter=\"table\">
                        <thead>
                        <tr>
                            ";
        // line 55
        echo "                            <th lay-data=\"{field:'id', width: 50, align: 'center'}\">ID</th>
                            <th lay-data=\"{field:'account', width:200, align: 'center'}\">狐豆名</th>
                            <th lay-data=\"{field:'passport_name', width:200, align: 'center'}\">通行证</th>
                            <th lay-data=\"{field:'entity_type', width:150, align: 'center'}\">通行证类型</th>
                            <th lay-data=\"{field:'note', align: 'center'}\">审核说明</th>
                            <th lay-data=\"{field:'status_text', width:100, align: 'center'}\">状态</th>
                            <th lay-data=\"{field:'submitted_at', width:180, align: 'center'}\">提交审核时间</th>
                            <th lay-data=\"{field:'reviewed_at', width:180, align: 'center'}\">审核处理时间</th>
                            <th lay-data=\"{align:'center', toolbar: '#actions', width:100}\">操作</th>
                        </tr>
                        </thead>
                    </table>
                    <script id=\"actions\" type=\"text/html\">
                        ";
        // line 74
        echo "
                                {{# if(d.status == 'PENDING' || d.status == 'FAIL') { }}
                                    <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"review\">审核</a>
                                {{#  } else { }}
                                    <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"details\">查看</a>
                                {{#  } }}
                                ";
        echo "
                    </script>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_extra($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        // line 83
        echo "    <style type=\"text/css\">
        .photos { margin: 20px 0 0 0; }
        .photos li { display: inline-block; width: 200px; height: 140px; margin-right: 21px; background: #CCCCCC; }
        .photos li:nth-child(4n) { margin-right: 0px; }
        .photos li img { width: 100%; height: 100%; }
        .layui-table img {max-width: 100% !important;}
    </style>

    <div id=\"review-details\" class=\"layui-card-body\" style=\"display: none;\">
        <table class=\"layui-table\">
            <tr>
                <td colspan=\"2\" style=\"background-color: #eee;\">实体信息</td>
            </tr>
            <tr>
                <td style=\"width: 200px;\">实体性质：</td>
                <td><span id=\"entity_type\"></span></td>
            </tr>
            <tr>
                <td>实体名称：</td>
                <td><span id=\"entity_name\"></span></td>
            </tr>
            <tr>
                <td>证件号码：</td>
                <td><span id=\"entity_license_no\"></span></td>
            </tr>
            <tr>
                <td>证件有效期：</td>
                <td><span id=\"entity_license_valid_period\"></span></td>
            </tr>
            <tr>
                <td>证件地址：</td>
                <td><span id=\"entity_license_address\"></span></td>
            </tr>
        </table>
        <table id=\"biz_legal_representative_info\" class=\"layui-table ui-toggle ui-toggle-business\">
            <tr>
                <td colspan=\"2\" style=\"background-color: #eee;\">法人信息</td>
            </tr>
            <tr>
                <td style=\"width: 200px;\">法人姓名：</td>
                <td><span id=\"biz_legal_representative_name\"></span></td>
            </tr>
            <tr>
                <td>法人身份证号：</td>
                <td><span id=\"biz_legal_representative_id_no\"></span></td>
            </tr>
            <tr>
                <td>身份证有效期：</td>
                <td><span id=\"biz_legal_representative_id_valid_period\"></span></td>
            </tr>
        </table>
        <table class=\"layui-table\">
            <tr>
                <td colspan=\"2\" style=\"background-color: #eee;\">证件照片</td>
            </tr>
            <tr>
                <td>

                    <ul id=\"individual_photos\" class=\"photos ui-toggle ui-toggle-individual\" style=\"display: none;\">
                        <li>
                            <img id=\"entity_license_front_image_url\" src=\"\"/>
                        </li>
                        <li>
                            <img id=\"entity_license_back_image_url\" src=\"\"/>
                        </li>
                        <li>
                            <img id=\"entity_license_handheld_image_url\" src=\"\"/>
                        </li>
                    </ul>
                    <ul id=\"biz_photos\" class=\"photos ui-toggle ui-toggle-business\" style=\"display: none;\">
                        <li>
                            <img id=\"entity_license_front_image_url\" src=\"\"/>
                        </li>
                        <li>
                            <img id=\"biz_legal_representative_id_front_image_url\" src=\"\"/>
                        </li>
                        <li>
                            <img id=\"biz_legal_representative_id_back_image_url\" src=\"\"/>
                        </li>
                        <li>
                            <img id=\"biz_legal_representative_id_handheld_image_url\" src=\"\"/>
                        </li>
                    </ul>
                </td>
            </tr>
        </table>
        <table class=\"layui-table\">
            <tr>
                <td colspan=\"2\" style=\"background-color: #eee;\">审核备注</td>
            </tr>
            <tr>
                <td>
                    <form class=\"layui-form\">
                        <textarea name=\"note\" id=\"note\" class=\"layui-textarea\"></textarea>
                        <span id=\"note_span\"></span>
                    </form>
                </td>
            </tr>
        </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 185
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 186
        echo "    <script>
        layui.table.on('tool(table)', function (row) {
            if (row.event === 'review') {
                show_review_dialog(row.data);
            } else if (row.event === 'details') {
                show_details_dialog(row.data);
            }
        });

        function reload_table() {
            table.reload('table', {
                url:'";
        // line 197
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_identities");
        echo "',
                where: \$('#search-form').serializeJSON()
            });
        }


        /**
         * 实名认证审核
         */
        function submit_identity_review(form_data, dlgIndex) {
            var loading = layer.load();

            axios.post('";
        // line 209
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_identity_review_submit");
        echo "', form_data)
                .then(function (response) {
                    layer.close(loading);
                    if(response.data.msg) {
                        layer.msg(response.data.msg)
                    }

                    if(response.data.status) {
                        layer.close(dlgIndex);
                        \$('#review-details').toggle();
                        reload_table();
                    }
                })
                .catch(function (error) {
                    console.log(error);
                    layer.close(loading);
                    layer.msg('服务器未响应，请稍后重试')
                });
        }

        function fill_review_dialog_data(data) {
            // \$('#edit-form')[0].reset();
            \$('.ui-toggle').hide();
            if (data.entity_type === 'I') {
                \$('.ui-toggle-individual').show();
            } else {
                \$('.ui-toggle-business').show();
            }

            \$('#note').val('');
            \$.each(data, function (key, value) {
                if (key.match(/_url\$/)) {
                    \$('#' + key).attr('src', value);
                } else {
                    \$('#' + key).html(value);
                }
            });
        }

        function show_review_dialog(data) {
            fill_review_dialog_data(data);
            \$('#note').show();
            \$('#note_span').hide();

            layer.open({
                title:    '审核',
                type:     1,
                area:     ['1000px', 'auto'],
                content:  \$('#review-details'),
                closeBtn: false,
                btn:      ['审核通过', '拒绝', '取消'],
                yes:      function (index, layero) {
                    var form_data = {id: data.id, status: 'VERIFIED', note: \$('#note').val(), _token: '";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("identity_review"), "html", null, true);
        echo "'};
                    submit_identity_review(form_data, index);
                    return false;
                },
                btn2:     function (index, layero) {
                    var form_data = {id: data.id, status: 'REJECTED', note: \$('#note').val(), _token: '";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("identity_review"), "html", null, true);
        echo "'};
                    submit_identity_review(form_data, index);
                    return false;
                },
                btn3:     function (index, layero) {
                    layer.close(index);
                    \$('#review-details').hide();
                }
            });
        }

        function show_details_dialog(data) {
            fill_review_dialog_data(data);
            \$('#note').hide();
            \$('#note_span').html(data.note);
            \$('#note_span').show();

            layer.open({
                title:    '审核',
                type:     1,
                area:     ['1000px', 'auto'],
                content:  \$('#review-details'),
                closeBtn: false,
                shadeClose: true,
                btn:      ['关闭'],
                yes:      function (index, layero) {
                    layer.close(index);
                    \$('#review-details').hide();
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
        return "Admin/Audit/identities.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 266,  367 => 261,  312 => 209,  297 => 197,  284 => 186,  275 => 185,  165 => 83,  156 => 82,  133 => 74,  118 => 55,  112 => 51,  81 => 23,  71 => 16,  60 => 7,  51 => 6,  41 => 1,  39 => 4,  37 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Admin/Common/layout.twig' %}
{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

{% set title = '实名认证审核 - 平台审核管理' %}

{% block main_content %}
    <div class=\"layui-fluid\">
        <div class=\"layui-card\">
            <div class=\"layui-tab-item layui-show\">
                <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
                    <div class=\"layui-form-item\">
                        <form id=\"search-form\">
                            <div class=\"layui-inline\">
                                <label class=\"layui-form-label\">审核状态</label>
                                <div class=\"layui-input-block\">
                                    {{ sf.select_raw('status', to_options({'PENDING': '待审核', 'REJECTED': '审核失败', 'VERIFIED': '审核通过'}), {'id': 'search_status'}) }}
                                </div>
                            </div>

                            <div class=\"layui-inline\">
                                <label class=\"layui-form-label\">注册类型</label>
                                <div class=\"layui-input-block\">
                                    {{ sf.select_raw('entity_type', to_options(constant(\"App\\\\Common\\\\Model\\\\User\\\\User::TYPES\"), '全部'), {'id': 'search_entity_type'}) }}
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
                                    <button type=\"button\" class=\"layui-btn layuiadmin-btn-useradmin\" onclick=\"reload_table();return false;\">
                                        <i class=\"layui-icon layui-icon-search layuiadmin-button-btn\"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class=\"layui-card-body\">
                    <table id=\"table\" class=\"layui-table\" lay-data=\"{url:'{{ path('admin_audit_identities') }}?status=PENDING', page:true, id:'table', method:'get'}\" lay-filter=\"table\">
                        <thead>
                        <tr>
                            {#<th lay-data=\"{type:'checkbox', fixed: 'left', width:'5%'}\"></th>#}
                            <th lay-data=\"{field:'id', width: 50, align: 'center'}\">ID</th>
                            <th lay-data=\"{field:'account', width:200, align: 'center'}\">狐豆名</th>
                            <th lay-data=\"{field:'passport_name', width:200, align: 'center'}\">通行证</th>
                            <th lay-data=\"{field:'entity_type', width:150, align: 'center'}\">通行证类型</th>
                            <th lay-data=\"{field:'note', align: 'center'}\">审核说明</th>
                            <th lay-data=\"{field:'status_text', width:100, align: 'center'}\">状态</th>
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
                                {{#  } else { }}
                                    <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"details\">查看</a>
                                {{#  } }}
                                {% endverbatim %}
                    </script>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block extra %}
    <style type=\"text/css\">
        .photos { margin: 20px 0 0 0; }
        .photos li { display: inline-block; width: 200px; height: 140px; margin-right: 21px; background: #CCCCCC; }
        .photos li:nth-child(4n) { margin-right: 0px; }
        .photos li img { width: 100%; height: 100%; }
        .layui-table img {max-width: 100% !important;}
    </style>

    <div id=\"review-details\" class=\"layui-card-body\" style=\"display: none;\">
        <table class=\"layui-table\">
            <tr>
                <td colspan=\"2\" style=\"background-color: #eee;\">实体信息</td>
            </tr>
            <tr>
                <td style=\"width: 200px;\">实体性质：</td>
                <td><span id=\"entity_type\"></span></td>
            </tr>
            <tr>
                <td>实体名称：</td>
                <td><span id=\"entity_name\"></span></td>
            </tr>
            <tr>
                <td>证件号码：</td>
                <td><span id=\"entity_license_no\"></span></td>
            </tr>
            <tr>
                <td>证件有效期：</td>
                <td><span id=\"entity_license_valid_period\"></span></td>
            </tr>
            <tr>
                <td>证件地址：</td>
                <td><span id=\"entity_license_address\"></span></td>
            </tr>
        </table>
        <table id=\"biz_legal_representative_info\" class=\"layui-table ui-toggle ui-toggle-business\">
            <tr>
                <td colspan=\"2\" style=\"background-color: #eee;\">法人信息</td>
            </tr>
            <tr>
                <td style=\"width: 200px;\">法人姓名：</td>
                <td><span id=\"biz_legal_representative_name\"></span></td>
            </tr>
            <tr>
                <td>法人身份证号：</td>
                <td><span id=\"biz_legal_representative_id_no\"></span></td>
            </tr>
            <tr>
                <td>身份证有效期：</td>
                <td><span id=\"biz_legal_representative_id_valid_period\"></span></td>
            </tr>
        </table>
        <table class=\"layui-table\">
            <tr>
                <td colspan=\"2\" style=\"background-color: #eee;\">证件照片</td>
            </tr>
            <tr>
                <td>

                    <ul id=\"individual_photos\" class=\"photos ui-toggle ui-toggle-individual\" style=\"display: none;\">
                        <li>
                            <img id=\"entity_license_front_image_url\" src=\"\"/>
                        </li>
                        <li>
                            <img id=\"entity_license_back_image_url\" src=\"\"/>
                        </li>
                        <li>
                            <img id=\"entity_license_handheld_image_url\" src=\"\"/>
                        </li>
                    </ul>
                    <ul id=\"biz_photos\" class=\"photos ui-toggle ui-toggle-business\" style=\"display: none;\">
                        <li>
                            <img id=\"entity_license_front_image_url\" src=\"\"/>
                        </li>
                        <li>
                            <img id=\"biz_legal_representative_id_front_image_url\" src=\"\"/>
                        </li>
                        <li>
                            <img id=\"biz_legal_representative_id_back_image_url\" src=\"\"/>
                        </li>
                        <li>
                            <img id=\"biz_legal_representative_id_handheld_image_url\" src=\"\"/>
                        </li>
                    </ul>
                </td>
            </tr>
        </table>
        <table class=\"layui-table\">
            <tr>
                <td colspan=\"2\" style=\"background-color: #eee;\">审核备注</td>
            </tr>
            <tr>
                <td>
                    <form class=\"layui-form\">
                        <textarea name=\"note\" id=\"note\" class=\"layui-textarea\"></textarea>
                        <span id=\"note_span\"></span>
                    </form>
                </td>
            </tr>
        </table>
    </div>
{% endblock %}

{% block js_end %}
    <script>
        layui.table.on('tool(table)', function (row) {
            if (row.event === 'review') {
                show_review_dialog(row.data);
            } else if (row.event === 'details') {
                show_details_dialog(row.data);
            }
        });

        function reload_table() {
            table.reload('table', {
                url:'{{ path('admin_audit_identities') }}',
                where: \$('#search-form').serializeJSON()
            });
        }


        /**
         * 实名认证审核
         */
        function submit_identity_review(form_data, dlgIndex) {
            var loading = layer.load();

            axios.post('{{ path(\"admin_audit_identity_review_submit\") }}', form_data)
                .then(function (response) {
                    layer.close(loading);
                    if(response.data.msg) {
                        layer.msg(response.data.msg)
                    }

                    if(response.data.status) {
                        layer.close(dlgIndex);
                        \$('#review-details').toggle();
                        reload_table();
                    }
                })
                .catch(function (error) {
                    console.log(error);
                    layer.close(loading);
                    layer.msg('服务器未响应，请稍后重试')
                });
        }

        function fill_review_dialog_data(data) {
            // \$('#edit-form')[0].reset();
            \$('.ui-toggle').hide();
            if (data.entity_type === 'I') {
                \$('.ui-toggle-individual').show();
            } else {
                \$('.ui-toggle-business').show();
            }

            \$('#note').val('');
            \$.each(data, function (key, value) {
                if (key.match(/_url\$/)) {
                    \$('#' + key).attr('src', value);
                } else {
                    \$('#' + key).html(value);
                }
            });
        }

        function show_review_dialog(data) {
            fill_review_dialog_data(data);
            \$('#note').show();
            \$('#note_span').hide();

            layer.open({
                title:    '审核',
                type:     1,
                area:     ['1000px', 'auto'],
                content:  \$('#review-details'),
                closeBtn: false,
                btn:      ['审核通过', '拒绝', '取消'],
                yes:      function (index, layero) {
                    var form_data = {id: data.id, status: 'VERIFIED', note: \$('#note').val(), _token: '{{ csrf_token(\"identity_review\") }}'};
                    submit_identity_review(form_data, index);
                    return false;
                },
                btn2:     function (index, layero) {
                    var form_data = {id: data.id, status: 'REJECTED', note: \$('#note').val(), _token: '{{ csrf_token(\"identity_review\") }}'};
                    submit_identity_review(form_data, index);
                    return false;
                },
                btn3:     function (index, layero) {
                    layer.close(index);
                    \$('#review-details').hide();
                }
            });
        }

        function show_details_dialog(data) {
            fill_review_dialog_data(data);
            \$('#note').hide();
            \$('#note_span').html(data.note);
            \$('#note_span').show();

            layer.open({
                title:    '审核',
                type:     1,
                area:     ['1000px', 'auto'],
                content:  \$('#review-details'),
                closeBtn: false,
                shadeClose: true,
                btn:      ['关闭'],
                yes:      function (index, layero) {
                    layer.close(index);
                    \$('#review-details').hide();
                }
            });
        }
    </script>
{% endblock %}
", "Admin/Audit/identities.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\Audit\\identities.twig");
    }
}
