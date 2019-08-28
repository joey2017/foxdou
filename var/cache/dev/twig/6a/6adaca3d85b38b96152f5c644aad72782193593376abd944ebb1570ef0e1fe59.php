<?php

/* Admin/Audit/users.twig */
class __TwigTemplate_79a03f22586cd69950239cae65ab7b711f525cb628183e22524b71fc9f53de56 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Audit/users.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Audit/users.twig"));

        // line 1
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers.html.twig", "Admin/Audit/users.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>用户信息审核</title>
    <link rel=\"shortcut icon\" href=\"favicon.ico\">
    <link href=\"/assets/admin/h/css/bootstrap.min14ed.css?v=3.3.6\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/font-awesome.min93e3.css?v=4.4.0\" rel=\"stylesheet\">
    <!-- Data Tables -->
    <link href=\"/assets/admin/h/css/plugins/dataTables/dataTables.bootstrap.css\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/plugins/iCheck/custom.css\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/animate.min.css\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/style.min862f.css?v=4.1.0\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/page.css\" rel=\"stylesheet\">
    <script src=\"/assets/admin/h/js/jquery.min.js?v=2.1.4\"></script>
    <script src=\"/assets/admin/h/js/bootstrap.min.js?v=3.3.6\"></script>
    <script src=\"/assets/admin/h/js/plugins/jeditable/jquery.jeditable.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/dataTables/jquery.dataTables.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/dataTables/dataTables.bootstrap.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/iCheck/icheck.min.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/layer/laydate/laydate.js\"></script>
    <script src=\"/assets/admin/js/jsencrypt.min.js\"></script>
    <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
    <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>
    <script src=\"/assets/admin/js/common.js\"></script>
    <script src=\"/assets/common/js/ajaxRequest.js\"></script>

    <style>
        .seach input, .seach select {
            background-color: #fff;
            border: 1px solid #e5e6e7;
            padding: 6px 12px;
        }

        .table-header {
            padding: 20px;
            background: #fcf8e3
        }

        .layui-layer-btn1, .layui-layer-btn2 {
            color: #fff !important;
            background: #009f95 !important;
        }

        .form-control {
            padding: 4px 12px !important;
        }

        .form-more {
            display: inline-block !important;
            vertical-align: bottom !important;
        }

        .form-half {
            width: 49% !important
        }

        .form-third-head {
            width: 32% !important;
        }

        .form-third {
            width: 33% !important;
        }
    </style>
</head>

<body class=\"gray-bg\">
<div class=\"wrapper wrapper-content animated fadeInRight\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"ibox float-e-margins\">
                <div class=\"ibox-title\">
                    <h5>审核
                        <small>用户身份信息审核</small>
                    </h5>
                </div>
                <div class=\"ibox-content\">
                    <style type=\"text/css\">
                        .seach .col-sm-2 {
                            width: 220px !important;
                        }
                    </style>
                    <div class=\"seach\">
                        <form action=\"\" method=\"get\" enctype=\"multipart/form-data\" id=\"search-form\">
                            <input type=\"hidden\" id=\"csrf_token\" name=\"_csrf_token\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_audit_users_info_list"), "html", null, true);
        echo "\">
                            <div class=\"row\">
                                <div class=\"col-sm-2\">
                                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">注册类型</span>
                                        ";
        // line 92
        echo $context["sf"]->macro_select_raw("type", $this->extensions['App\Common\Twig\AppExtension']->arrayToOptions(twig_constant("App\\Common\\Model\\User\\User::TYPES"), "全部"), array("class" => "form-control"));
        echo "
                                    </div>
                                </div>
                                <div class=\"col-sm-2\">
                                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">审核状态</span>
                                        ";
        // line 97
        echo $context["sf"]->macro_select_raw("status", $this->extensions['App\Common\Twig\AppExtension']->arrayToOptions(twig_constant("App\\Common\\Model\\User\\User::TYPES"), "全部"), array("class" => "form-control"));
        echo "
                                    </div>
                                </div>
                                <div class=\"col-sm-2\">
                                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">狐豆号</span>
                                        <input class=\"form-control product-price\" name=\"foxdou_number\" value=\"\" placeholder=\"狐豆号\" type=\"text\">
                                    </div>
                                </div>
                                <div class=\"col-sm-2\">
                                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">通行证账号</span>
                                        <input class=\"form-control product-price\" name=\"account\" value=\"\" placeholder=\"通行证账号\" type=\"text\">
                                    </div>
                                </div>
                                <div class=\"col-sm-2\">
                                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">审核说明</span>
                                        <input class=\"form-control product-price\" name=\"description\" value=\"\" placeholder=\"审核说明\" type=\"text\">
                                    </div>
                                </div>

                                <button type=\"submit\" class=\"btn btn-primary\" style=\"top:-60px;margin-right:100px;float: right;\" onclick=\"get_data();return false;\">查询
                                </button>
                            </div>
                        </form>
                    </div>
                    <div>
                        ";
        // line 122
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 122, $this->source); })()), "info_audit_geren", array()) == 0)) {
            // line 123
            echo "                            <button class=\"btn btn-primary btn-sm\" onclick=\"reg_aduit_status('geren',this)\"
                                    data-status=\"on\">已关闭个人信息审核
                            </button>
                        ";
        } else {
            // line 127
            echo "                            <button class=\"btn btn-primary btn-sm\" onclick=\"reg_aduit_status('geren',this)\"
                                    data-status=\"off\">已开启个人信息审核
                            </button>
                        ";
        }
        // line 131
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 131, $this->source); })()), "info_audit_qiye", array()) == 0)) {
            // line 132
            echo "                            <button class=\"btn btn-primary btn-sm\" onclick=\"reg_aduit_status('qiye',this)\"
                                    data-status=\"on\">已关闭企业信息审核
                            </button>
                        ";
        } else {
            // line 136
            echo "                            <button class=\"btn btn-primary btn-sm\" onclick=\"reg_aduit_status('qiye',this)\"
                                    data-status=\"off\">已开启企业信息审核
                            </button>
                        ";
        }
        // line 140
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 140, $this->source); })()), "info_audit_geti", array()) == 0)) {
            // line 141
            echo "                            <button class=\"btn btn-primary btn-sm\" onclick=\"reg_aduit_status('geti',this)\"
                                    data-status=\"on\">已关闭个体信息审核
                            </button>
                        ";
        } else {
            // line 145
            echo "                            <button class=\"btn btn-primary btn-sm\" onclick=\"reg_aduit_status('geti',this)\"
                                    data-status=\"off\">已开启个体信息审核
                            </button>
                        ";
        }
        // line 149
        echo "                    </div>
                    <div style=\"overflow-x: auto;width:100%\">
                        <table id=\"paged-table\" lay-filter=\"user-table\">

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"xiugai_denji_dialog\" style=\"display: none; padding: 20px 20px 0px 20px;\">
    <div class=\"input-group m-b\"><span class=\"input-group-addon\">用户级别</span>
        <input class=\"form-control product-price\" name=\"sn\" placeholder=\"用户级别\" type=\"text\">
    </div>
</div>
<!--用户审核box-->
<div id=\"aduit_dialog\" style=\"display: none; padding: 20px 20px 0px 20px;\">
    <ul>

    </ul>
</div>
<div id=\"password_dialog\" style=\"display: none;\">
    <h2 style=\"text-align: center\">确认审核通过？</h2>
    <div class=\"col-sm-12\">
        <div class=\"input-group m-b\"><span class=\"input-group-addon\">验证密码</span>
            <input class=\"form-control password-a\" type=\"password\" placeholder=\"请输入账号密码\" type=\"text\">
        </div>
    </div>
</div>
<div id=\"cause_dialog\" style=\"display: none;\">
    <div class=\"input-group\">
        <label class=\"col-sm-3 control-label\">原因：</label>
        <div class=\"col-sm-12\" style=\"margin-bottom: 10px;\">
            <textarea id=\"cause\" name=\"comment\" class=\"form-control\" required=\"\" aria-required=\"true\"></textarea>
        </div>
    </div>
    <div class=\"col-sm-12\">
        <div class=\"input-group m-b\"><span class=\"input-group-addon\">验证密码</span>
            <input class=\"form-control password-b\" type=\"password\" placeholder=\"请输入账号密码\" type=\"text\">
        </div>
    </div>
</div>

<script type=\"text/html\" id=\"actions\">
    <a class=\"layui-btn layui-btn-xs\" lay-event=\"audit\">审核</a>
</script>
<script id=\"add_time\" type=\"text/html\">
    ";
        // line 203
        echo "
    {{#
        var date = new Date();
        date.setTime(d.add_time*1000);
        return date.Format(\"yyyy-MM-dd hh:mm:ss\");
    }}
    ";
        echo "
</script>
<script id=\"submit_time\" type=\"text/html\">
    ";
        // line 212
        echo "
    {{#
        var date = new Date();
        date.setTime(d.submit_time*1000);
        return date.Format(\"yyyy-MM-dd hh:mm:ss\");
    }}
    ";
        echo "
</script>
<script>
    var types = {};

    ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_constant("App\\Common\\Model\\User\\User::TYPES"));
        foreach ($context['_seq'] as $context["key_t"] => $context["type"]) {
            // line 218
            echo "        types.";
            echo twig_escape_filter($this->env, $context["key_t"], "html", null, true);
            echo " = '";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key_t'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "
    var statuses = {};

    ";
        // line 223
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_constant("App\\Common\\Model\\User\\RealNameAuthenticationInfo::STATUSES"));
        foreach ($context['_seq'] as $context["s"] => $context["status"]) {
            // line 224
            echo "        statuses.";
            echo twig_escape_filter($this->env, $context["s"], "html", null, true);
            echo " = '";
            echo twig_escape_filter($this->env, $context["status"], "html", null, true);
            echo "';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['s'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo "
    var columns = [[
        {\"field\": \"id\", \"title\": \"ID\"},
        {\"field\": \"bind_mobile\", \"title\": \"手机号码\"},
        {\"field\": \"name\", \"title\": \"名字\", \"width\": 150},
        {\"field\": \"nick_name\", \"title\": \"昵称\", \"width\": 150},
        {
            \"field\": \"type\", \"title\": \"性质\", templet: function (d) {
                return types[d.type]
            }
        },
        {\"field\": \"add_time\", \"title\": \"注册时间\", templet: \"#add_time\"},
        {\"field\": \"submit_time\", \"title\": \"提交审核时间\", templet: \"#submit_time\"},
        {
            \"field\": \"status\", \"title\": \"审核状态\", templet: function (d) {
                return statuses[d.status]
            }
        },
        {\"field\": \"register_ip\", \"title\": \"提交ip\"},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\"}
    ]];

    function get_data() {
        var params = \$('form#search-form').serialize();
        var url = \"";
        // line 250
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_users_info_list");
        echo "\";
        url += '?' + params;
        rander_table('#paged-table', url, columns);
    }

    layui.use(['table', 'laytpl'], function () {
        // 初始化
        get_data();
        layui.table.on('tool(user-table)', function (obj) { //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
            var data = obj.data; //获得当前行数据
            var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）
            var tr = obj.tr; //获得当前行 tr 的DOM对象

            if (layEvent === 'audit') { //审核
                //aduit_dialog(data.id);
                var loading = null;
                var before = function(){
                    layer.load();
                }
                var error = function(){
                    layer.close(loading);
                    nxwd.showMsg('服务器未响应，请稍后重试','danger');
                }
                var success = function(res){
                    layer.close(loading);
                    if (res.status) {
                        nxwd.showMsg(res.msg,'success');
                    }else{
                        nxwd.showMsg(res.msg,'danger');
                    }
                }
                nxwd.ajaxRequest(\"";
        // line 281
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_users_info_list");
        echo "\",\"POST\",{id:data.id},'json',success,before,error);
            }
        });
    })

    function do_encrypt(encryptedstr) {
        return encryptedstr;
    }

    /*function aduit_dialog(user_id) {
        \$.post('";
        // line 291
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_users_info_audit");
        echo "', {
            id: user_id,
            getInfo: 1,
            '_csrf_token': \$('#csrf_token').val()
        }, function (res) {
            if (res.status) {
                \$('#aduit_dialog').find('ul').html('');
                \$.each(res.data, function (k, v) {
                    if (typeof res.img == 'object' && typeof res.img[k] != 'undefined') {
                        \$('#aduit_dialog').find('ul').append('<p><span class=\"name-info-aduit\">' + k + '：</span><span class=\"value-info-aduit\"><img class=\"img-value-aduit\" style=\"width: 70px;\" src=\"' + v + '\"></span></p>');
                    } else {
                        \$('#aduit_dialog').find('ul').append('<p><span class=\"name-info-aduit\">' + k + '：</span><span class=\"value-info-aduit\">' + v + '</span></p>');
                    }

                });
            }
        }, 'json');

        function callback(index, layero) {
            layer.close(index);
            ajax_get();
        }

        //弹出框
        layer.open({
            type: 1,
            closeBtn: 1,
            area: ['900px', '600px'], //宽高
            skin: 'layui-layer-molv',
            btn: ['通过审核', '不通过审核', '取消'],
            content: \$('#aduit_dialog'),
            yes: function (index, layero) {
                //弹出框
                layer.open({
                    type: 1,
                    closeBtn: 1,
                    skin: 'layui-layer-molv',
                    btn: ['确定', '取消'],
                    content: \$('#password_dialog'),
                    yes: function (layerindex, layero) {
                        aduit(user_id, 'ok');
                    }
                });

            }, btn2: function (index, layero) {
                //弹出框
                layer.open({
                    type: 1,
                    closeBtn: 1,
                    skin: 'layui-layer-molv',
                    btn: ['确定', '取消'],
                    content: \$('#cause_dialog'),
                    yes: function (layerindex, layero) {
                        aduit(user_id, 'no');
                    }
                });
            }
        });
    }*/

    /**
     * 用户审核
     * @param id
     * @param action
     * @param action
     * @returns {*}
     */
    function aduit(id, action) {
        var post_data = {id: id, '_crsf_token': \$('#csrf_token').val()};
        if (action == 'ok') {
            post_data.aduit_ok = 'yes';
            post_data.password = do_encrypt(\$('.password-a').val());
        } else if (action == 'no') {
            post_data.aduit_ok = 'no';
            post_data.password = do_encrypt(\$('.password-b').val());
        }
        post_data.cause = \$('#cause').val();
        post_data.aduit = 'yes';
        if (!post_data.password) {
            layer.msg('密码不能为空');
            return;
        }
        \$.ajax({
            async: false, type: 'post', dataType: 'json', url: '', data: post_data,
            error: function () {
                layer.msg('网络请求失败');
            },
            success: function (data) {
                if (data.status) {
                    layer.msg(data.msg, {time: 1000}, function () {
                        location.reload();
                    });
                    return;
                }
                layer.msg(data.msg);
            }
        });
    }

    /*
     *变更渠道
     */
    function reg_aduit_status(type, dom) {
        \$.post('', {
            status: \$(dom).attr('data-status'),
            type: type,
            '_crsf_token': \$('#csrf_token').val()
        }, function (data) {
            if (!data.status) {
                layer.alert(data.msg);
                return;
            } else {
                layer.msg(data.msg);
                var txt = \$(dom).text();
                var content = txt.substr(3);
                if (\$(dom).attr('data-status') == 'on') {
                    \$(dom).attr('data-status', 'off');
                    \$(dom).text('已开启' + content);
                } else {
                    \$(dom).attr('data-status', 'on');
                    \$(dom).text('已关闭' + content);
                }
            }
            get_data();
        }, 'json');
    }

    \$('#search-form').submit(function () {
        get_data();
        return false;
    });


</script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Audit/users.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 291,  377 => 281,  343 => 250,  317 => 226,  306 => 224,  302 => 223,  297 => 220,  286 => 218,  282 => 217,  268 => 212,  256 => 203,  206 => 149,  200 => 145,  194 => 141,  191 => 140,  185 => 136,  179 => 132,  176 => 131,  170 => 127,  164 => 123,  162 => 122,  134 => 97,  126 => 92,  119 => 88,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import ('/Common/simple_form_helpers.html.twig') as sf %}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>用户信息审核</title>
    <link rel=\"shortcut icon\" href=\"favicon.ico\">
    <link href=\"/assets/admin/h/css/bootstrap.min14ed.css?v=3.3.6\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/font-awesome.min93e3.css?v=4.4.0\" rel=\"stylesheet\">
    <!-- Data Tables -->
    <link href=\"/assets/admin/h/css/plugins/dataTables/dataTables.bootstrap.css\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/plugins/iCheck/custom.css\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/animate.min.css\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/style.min862f.css?v=4.1.0\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/page.css\" rel=\"stylesheet\">
    <script src=\"/assets/admin/h/js/jquery.min.js?v=2.1.4\"></script>
    <script src=\"/assets/admin/h/js/bootstrap.min.js?v=3.3.6\"></script>
    <script src=\"/assets/admin/h/js/plugins/jeditable/jquery.jeditable.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/dataTables/jquery.dataTables.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/dataTables/dataTables.bootstrap.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/iCheck/icheck.min.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/layer/laydate/laydate.js\"></script>
    <script src=\"/assets/admin/js/jsencrypt.min.js\"></script>
    <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
    <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>
    <script src=\"/assets/admin/js/common.js\"></script>
    <script src=\"/assets/common/js/ajaxRequest.js\"></script>

    <style>
        .seach input, .seach select {
            background-color: #fff;
            border: 1px solid #e5e6e7;
            padding: 6px 12px;
        }

        .table-header {
            padding: 20px;
            background: #fcf8e3
        }

        .layui-layer-btn1, .layui-layer-btn2 {
            color: #fff !important;
            background: #009f95 !important;
        }

        .form-control {
            padding: 4px 12px !important;
        }

        .form-more {
            display: inline-block !important;
            vertical-align: bottom !important;
        }

        .form-half {
            width: 49% !important
        }

        .form-third-head {
            width: 32% !important;
        }

        .form-third {
            width: 33% !important;
        }
    </style>
</head>

<body class=\"gray-bg\">
<div class=\"wrapper wrapper-content animated fadeInRight\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"ibox float-e-margins\">
                <div class=\"ibox-title\">
                    <h5>审核
                        <small>用户身份信息审核</small>
                    </h5>
                </div>
                <div class=\"ibox-content\">
                    <style type=\"text/css\">
                        .seach .col-sm-2 {
                            width: 220px !important;
                        }
                    </style>
                    <div class=\"seach\">
                        <form action=\"\" method=\"get\" enctype=\"multipart/form-data\" id=\"search-form\">
                            <input type=\"hidden\" id=\"csrf_token\" name=\"_csrf_token\" value=\"{{ csrf_token('admin_audit_users_info_list') }}\">
                            <div class=\"row\">
                                <div class=\"col-sm-2\">
                                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">注册类型</span>
                                        {{ sf.select_raw('type', to_options(constant(\"App\\\\Common\\\\Model\\\\User\\\\User::TYPES\"), '全部'), {\"class\": \"form-control\"}) }}
                                    </div>
                                </div>
                                <div class=\"col-sm-2\">
                                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">审核状态</span>
                                        {{ sf.select_raw('status', to_options(constant(\"App\\\\Common\\\\Model\\\\User\\\\User::TYPES\"), '全部'), {\"class\": \"form-control\"}) }}
                                    </div>
                                </div>
                                <div class=\"col-sm-2\">
                                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">狐豆号</span>
                                        <input class=\"form-control product-price\" name=\"foxdou_number\" value=\"\" placeholder=\"狐豆号\" type=\"text\">
                                    </div>
                                </div>
                                <div class=\"col-sm-2\">
                                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">通行证账号</span>
                                        <input class=\"form-control product-price\" name=\"account\" value=\"\" placeholder=\"通行证账号\" type=\"text\">
                                    </div>
                                </div>
                                <div class=\"col-sm-2\">
                                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">审核说明</span>
                                        <input class=\"form-control product-price\" name=\"description\" value=\"\" placeholder=\"审核说明\" type=\"text\">
                                    </div>
                                </div>

                                <button type=\"submit\" class=\"btn btn-primary\" style=\"top:-60px;margin-right:100px;float: right;\" onclick=\"get_data();return false;\">查询
                                </button>
                            </div>
                        </form>
                    </div>
                    <div>
                        {% if data.info_audit_geren == 0 %}
                            <button class=\"btn btn-primary btn-sm\" onclick=\"reg_aduit_status('geren',this)\"
                                    data-status=\"on\">已关闭个人信息审核
                            </button>
                        {% else %}
                            <button class=\"btn btn-primary btn-sm\" onclick=\"reg_aduit_status('geren',this)\"
                                    data-status=\"off\">已开启个人信息审核
                            </button>
                        {% endif %}
                        {% if data.info_audit_qiye == 0 %}
                            <button class=\"btn btn-primary btn-sm\" onclick=\"reg_aduit_status('qiye',this)\"
                                    data-status=\"on\">已关闭企业信息审核
                            </button>
                        {% else %}
                            <button class=\"btn btn-primary btn-sm\" onclick=\"reg_aduit_status('qiye',this)\"
                                    data-status=\"off\">已开启企业信息审核
                            </button>
                        {% endif %}
                        {% if data.info_audit_geti == 0 %}
                            <button class=\"btn btn-primary btn-sm\" onclick=\"reg_aduit_status('geti',this)\"
                                    data-status=\"on\">已关闭个体信息审核
                            </button>
                        {% else %}
                            <button class=\"btn btn-primary btn-sm\" onclick=\"reg_aduit_status('geti',this)\"
                                    data-status=\"off\">已开启个体信息审核
                            </button>
                        {% endif %}
                    </div>
                    <div style=\"overflow-x: auto;width:100%\">
                        <table id=\"paged-table\" lay-filter=\"user-table\">

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"xiugai_denji_dialog\" style=\"display: none; padding: 20px 20px 0px 20px;\">
    <div class=\"input-group m-b\"><span class=\"input-group-addon\">用户级别</span>
        <input class=\"form-control product-price\" name=\"sn\" placeholder=\"用户级别\" type=\"text\">
    </div>
</div>
<!--用户审核box-->
<div id=\"aduit_dialog\" style=\"display: none; padding: 20px 20px 0px 20px;\">
    <ul>

    </ul>
</div>
<div id=\"password_dialog\" style=\"display: none;\">
    <h2 style=\"text-align: center\">确认审核通过？</h2>
    <div class=\"col-sm-12\">
        <div class=\"input-group m-b\"><span class=\"input-group-addon\">验证密码</span>
            <input class=\"form-control password-a\" type=\"password\" placeholder=\"请输入账号密码\" type=\"text\">
        </div>
    </div>
</div>
<div id=\"cause_dialog\" style=\"display: none;\">
    <div class=\"input-group\">
        <label class=\"col-sm-3 control-label\">原因：</label>
        <div class=\"col-sm-12\" style=\"margin-bottom: 10px;\">
            <textarea id=\"cause\" name=\"comment\" class=\"form-control\" required=\"\" aria-required=\"true\"></textarea>
        </div>
    </div>
    <div class=\"col-sm-12\">
        <div class=\"input-group m-b\"><span class=\"input-group-addon\">验证密码</span>
            <input class=\"form-control password-b\" type=\"password\" placeholder=\"请输入账号密码\" type=\"text\">
        </div>
    </div>
</div>

<script type=\"text/html\" id=\"actions\">
    <a class=\"layui-btn layui-btn-xs\" lay-event=\"audit\">审核</a>
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
<script id=\"submit_time\" type=\"text/html\">
    {% verbatim %}
    {{#
        var date = new Date();
        date.setTime(d.submit_time*1000);
        return date.Format(\"yyyy-MM-dd hh:mm:ss\");
    }}
    {% endverbatim %}
</script>
<script>
    var types = {};

    {% for key_t,type in constant(\"App\\\\Common\\\\Model\\\\User\\\\User::TYPES\") %}
        types.{{ key_t }} = '{{ type }}';
    {% endfor %}

    var statuses = {};

    {% for s,status in constant(\"App\\\\Common\\\\Model\\\\User\\\\RealNameAuthenticationInfo::STATUSES\") %}
        statuses.{{ s }} = '{{ status }}';
    {% endfor %}

    var columns = [[
        {\"field\": \"id\", \"title\": \"ID\"},
        {\"field\": \"bind_mobile\", \"title\": \"手机号码\"},
        {\"field\": \"name\", \"title\": \"名字\", \"width\": 150},
        {\"field\": \"nick_name\", \"title\": \"昵称\", \"width\": 150},
        {
            \"field\": \"type\", \"title\": \"性质\", templet: function (d) {
                return types[d.type]
            }
        },
        {\"field\": \"add_time\", \"title\": \"注册时间\", templet: \"#add_time\"},
        {\"field\": \"submit_time\", \"title\": \"提交审核时间\", templet: \"#submit_time\"},
        {
            \"field\": \"status\", \"title\": \"审核状态\", templet: function (d) {
                return statuses[d.status]
            }
        },
        {\"field\": \"register_ip\", \"title\": \"提交ip\"},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\"}
    ]];

    function get_data() {
        var params = \$('form#search-form').serialize();
        var url = \"{{ path('admin_audit_users_info_list') }}\";
        url += '?' + params;
        rander_table('#paged-table', url, columns);
    }

    layui.use(['table', 'laytpl'], function () {
        // 初始化
        get_data();
        layui.table.on('tool(user-table)', function (obj) { //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
            var data = obj.data; //获得当前行数据
            var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）
            var tr = obj.tr; //获得当前行 tr 的DOM对象

            if (layEvent === 'audit') { //审核
                //aduit_dialog(data.id);
                var loading = null;
                var before = function(){
                    layer.load();
                }
                var error = function(){
                    layer.close(loading);
                    nxwd.showMsg('服务器未响应，请稍后重试','danger');
                }
                var success = function(res){
                    layer.close(loading);
                    if (res.status) {
                        nxwd.showMsg(res.msg,'success');
                    }else{
                        nxwd.showMsg(res.msg,'danger');
                    }
                }
                nxwd.ajaxRequest(\"{{ path('admin_audit_users_info_list') }}\",\"POST\",{id:data.id},'json',success,before,error);
            }
        });
    })

    function do_encrypt(encryptedstr) {
        return encryptedstr;
    }

    /*function aduit_dialog(user_id) {
        \$.post('{{ path('admin_audit_users_info_audit') }}', {
            id: user_id,
            getInfo: 1,
            '_csrf_token': \$('#csrf_token').val()
        }, function (res) {
            if (res.status) {
                \$('#aduit_dialog').find('ul').html('');
                \$.each(res.data, function (k, v) {
                    if (typeof res.img == 'object' && typeof res.img[k] != 'undefined') {
                        \$('#aduit_dialog').find('ul').append('<p><span class=\"name-info-aduit\">' + k + '：</span><span class=\"value-info-aduit\"><img class=\"img-value-aduit\" style=\"width: 70px;\" src=\"' + v + '\"></span></p>');
                    } else {
                        \$('#aduit_dialog').find('ul').append('<p><span class=\"name-info-aduit\">' + k + '：</span><span class=\"value-info-aduit\">' + v + '</span></p>');
                    }

                });
            }
        }, 'json');

        function callback(index, layero) {
            layer.close(index);
            ajax_get();
        }

        //弹出框
        layer.open({
            type: 1,
            closeBtn: 1,
            area: ['900px', '600px'], //宽高
            skin: 'layui-layer-molv',
            btn: ['通过审核', '不通过审核', '取消'],
            content: \$('#aduit_dialog'),
            yes: function (index, layero) {
                //弹出框
                layer.open({
                    type: 1,
                    closeBtn: 1,
                    skin: 'layui-layer-molv',
                    btn: ['确定', '取消'],
                    content: \$('#password_dialog'),
                    yes: function (layerindex, layero) {
                        aduit(user_id, 'ok');
                    }
                });

            }, btn2: function (index, layero) {
                //弹出框
                layer.open({
                    type: 1,
                    closeBtn: 1,
                    skin: 'layui-layer-molv',
                    btn: ['确定', '取消'],
                    content: \$('#cause_dialog'),
                    yes: function (layerindex, layero) {
                        aduit(user_id, 'no');
                    }
                });
            }
        });
    }*/

    /**
     * 用户审核
     * @param id
     * @param action
     * @param action
     * @returns {*}
     */
    function aduit(id, action) {
        var post_data = {id: id, '_crsf_token': \$('#csrf_token').val()};
        if (action == 'ok') {
            post_data.aduit_ok = 'yes';
            post_data.password = do_encrypt(\$('.password-a').val());
        } else if (action == 'no') {
            post_data.aduit_ok = 'no';
            post_data.password = do_encrypt(\$('.password-b').val());
        }
        post_data.cause = \$('#cause').val();
        post_data.aduit = 'yes';
        if (!post_data.password) {
            layer.msg('密码不能为空');
            return;
        }
        \$.ajax({
            async: false, type: 'post', dataType: 'json', url: '', data: post_data,
            error: function () {
                layer.msg('网络请求失败');
            },
            success: function (data) {
                if (data.status) {
                    layer.msg(data.msg, {time: 1000}, function () {
                        location.reload();
                    });
                    return;
                }
                layer.msg(data.msg);
            }
        });
    }

    /*
     *变更渠道
     */
    function reg_aduit_status(type, dom) {
        \$.post('', {
            status: \$(dom).attr('data-status'),
            type: type,
            '_crsf_token': \$('#csrf_token').val()
        }, function (data) {
            if (!data.status) {
                layer.alert(data.msg);
                return;
            } else {
                layer.msg(data.msg);
                var txt = \$(dom).text();
                var content = txt.substr(3);
                if (\$(dom).attr('data-status') == 'on') {
                    \$(dom).attr('data-status', 'off');
                    \$(dom).text('已开启' + content);
                } else {
                    \$(dom).attr('data-status', 'on');
                    \$(dom).text('已关闭' + content);
                }
            }
            get_data();
        }, 'json');
    }

    \$('#search-form').submit(function () {
        get_data();
        return false;
    });


</script>
</body>
</html>", "Admin/Audit/users.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\Audit\\users.twig");
    }
}
