<?php

/* Admin/UserDetail/OpenPlatform/request_logs.twig */
class __TwigTemplate_2938e3be12d58a084ba614b9f75c7680ff44dfa830861fcef119c6eefd595c13 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/OpenPlatform/request_logs.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/OpenPlatform/request_logs.twig"));

        // line 1
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Admin/UserDetail/OpenPlatform/request_logs.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>Ta的财务-资金明细</title>
    <link href=\"/assets/admin/h/css/bootstrap.min14ed.css?v=3.3.6\" rel=\"stylesheet\">

    <script src=\"/assets/admin/h/js/plugins/layer/laydate/laydate.js\"></script>
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
    <link href=\"/assets/admin/h/css/bootstrap.min14ed.css?v=3.3.6\" rel=\"stylesheet\">
    <script src=\"/assets/admin/h/js/jquery.min.js?v=2.1.4\"></script>
    <link href=\"/assets/admin/h/css/style.min862f.css?v=4.1.0\" rel=\"stylesheet\">

    <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
    <script src=\"/assets/admin/js/common.js\"></script>
    <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>
    <script src=\"/assets/common/js/ajaxRequest.js\"></script>
    <!--下拉列表-->
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/xui-select2.css\"/>
    <script type=\"text/javascript\" src=\"/assets/admin/h/js/xui-select2.js\"></script>
    <style>
        .screen-item{background:none; border:none;  padding: 0px;}
        .col-sm-2{width: 17.45%}
        .h-button-group{margin-bottom: 5px;}
        .h-button-group button{margin-right: -10px;}
        .date {
            width: 420px;
            float: left;
        }
        .seach input, .seach select {
            background-color: #fff;
            border: 1px solid #e5e6e7;
            padding: 6px 12px;
        }
        .form-control{padding: 4px 12px!important;}
        .form-more{display: inline-block!important;vertical-align:bottom!important;}
        .form-half{width: 49%!important}
        .form-third-head{width: 32%!important;}
        .form-third{width: 33%!important;}
        .box-info{padding: 10px;}
    </style>
</head>

<body>
<div class=\"main-box\">
    <div class=\"screen-item\">
        <div class=\"seach\">
            <form action=\"\" method=\"get\" enctype=\"multipart/form-data\" id=\"list-data\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_user_details_open_platform_ajax_request_logs"), "html", null, true);
        echo "\">
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">交易流水号</span>
                        <input class=\"form-control product-price\" name=\"trade_sn\" value=\"\" placeholder=\"交易流水号\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">应用名称</span>
                        <input class=\"form-control product-price\" name=\"app_name\" value=\"\" placeholder=\"应用名称\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">应用状态</span>
                        ";
        // line 65
        echo $context["sf"]->macro_select_raw("app_status", twig_array_merge(array("" => "全部"), twig_constant("App\\Common\\Model\\User\\ApiAppOpen::APP_STATUSES")), array("class" => "form-control"));
        echo "
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">状态码</span>
                        <input class=\"form-control product-price\" name=\"code\" value=\"\" placeholder=\"状态码\" type=\"text\">
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">用户名</span>
                        <input class=\"form-control product-price\" name=\"user_name\" value=\"\" placeholder=\"用户名\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">接口名称</span>
                        <input class=\"form-control product-price\" name=\"interface_name\" value=\"\" placeholder=\"接口名称\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">系统状态</span>
                        ";
        // line 87
        echo $context["sf"]->macro_select_raw("sys_status", twig_array_merge(array("" => "全部"), twig_constant("App\\Common\\Model\\RequestApiLogOpen::SYS_STATUS")), array("class" => "form-control"));
        echo "
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">状态</span>
                        ";
        // line 92
        echo $context["sf"]->macro_select_raw("status", twig_array_merge(array("" => "全部"), twig_constant("App\\Common\\Model\\RequestApiLogOpen::STATUS")), array("class" => "form-control"));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">支付类型</span>
                        ";
        // line 99
        echo $context["sf"]->macro_select_raw("pay_type", twig_array_merge(array("" => "全部"), twig_constant("App\\Common\\Model\\User\\ApiAppOpen::PAY_TYPES")), array("class" => "form-control"));
        echo "
                    </div>
                </div>
                <div class=\"col-sm-2\" style=\"width:170px;\">
                    <div class=\"input-group m-b\" style=\"height: 34px\">
                        <select  name=\"time_type\" style=\"height: 34px;width: 170px\">
                            <option value=\"add_time\">请求时间</option>
                        </select>
                    </div>
                </div>
                <div class=\"col-sm-2\" style=\"width: 400px;padding-right: 2px\">
                    <div class=\"input-group date\" style=\"float: left\">
                        <input class=\"form-control layer-date\" id=\"start_time\" name=\"start_time\"  value=\"\" style=\"width: 167px\" placeholder=\"开始时间\" type=\"text\">
                        <input class=\"form-control layer-date\" id=\"end_time\" name=\"end_time\" value=\"\" style=\"width: 167px\" placeholder=\"结束时间\" type=\"text\">
                    </div>
                </div>
            </div>
            <div class=\"row\">

            </div>
                <button type=\"submit\" class=\"btn btn-primary\" style=\"position:relative;top:-60px;margin-right:100px;float: right;\" onclick=\"get_data();return false;\">查询</button>
            </form>
        </div>
    </div>

    <div class=\"h-input-block table-style1\">
        <table id=\"paged-table\" lay-filter=\"test\">

        </table>
    </div>
</div>

<script id=\"add_time\" type=\"text/html\">
    ";
        // line 138
        echo "
    {{#
        var date = new Date();
        date.setTime(d.add_time);
        return date.Format(\"yyyy-MM-dd hh:mm:ss\");
    }}
    ";
        echo "
</script>

<script type=\"text/html\" id=\"actions\">
    <button class=\"layui-btn layui-btn-xs edit_btn\" lay-event=\"detail\">详情</button>
</script>

<script type=\"text/javascript\">

    var baseUrl = '";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_open_platform_ajax_request_logs");
        echo "';
    var columns = [[
        {\"field\": \"id\", \"title\": \"交易流水号\"},
        {\"field\": \"app_id\", \"title\": \"应用ID\"},
        {\"field\": \"app_name\", \"title\": \"应用名称\"},
        {\"field\": \"app_status\", \"title\": \"应用状态\"},
        {\"field\": \"user_name\", \"title\": \"用户名\"},
        {\"field\": \"nick_name\", \"title\": \"用户昵称\"},
        {\"field\": \"interface_name\", \"title\": \"接口名称\"},
        {\"field\": \"sys_status\", \"title\": \"系统状态\"},
        {\"field\": \"status\", \"title\": \"业务状态\"},
        {\"field\": \"code\", \"title\": \"状态码\"},
        {\"field\": \"pay_type\", \"title\": \"支付类型\"},
        {\"field\": \"ip\", \"title\": \"IP\"},
        {\"field\": \"add_time\", \"title\": \"订单时间\", templet: \"#add_time\"},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\"}
    ]];

    function get_data() {
        var params = \$('form#list-data').serialize();
        var url = baseUrl + '?' + 'id=";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 167, $this->source); })()), "html", null, true);
        echo "&' + params;
        rander_table('#paged-table', url, columns);
    }

    layui.use(['table', 'laytpl'], function() {
        // 初始化
        get_data();

        //监听工具条
        layui.table.on('tool(test)', function(obj){ //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
            var data = obj.data; //获得当前行数据
            var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）

            if(layEvent === 'detail'){ //查看详情
                //do something
                var obj = \$('#dialog');

                obj.find('input[name=\"status\"]').val(data.status);
                obj.find('div[name=\"status\"]').find('span').text(app_statuses[data.status]);

                layer.open({
                    type: 1,
                    title:'修改用户id='+'";
        // line 189
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 189, $this->source); })()), "html", null, true);
        echo "'+'的服务',
                    area:['400px','400px'],
                    content: \$('#dialog'),
                    btn: ['确定', '取消'],
                    yes: function(index) {

                        var args = {};
                        var loading = null;
                        args.id = '";
        // line 197
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 197, $this->source); })()), "html", null, true);
        echo "';
                        args.status = obj.find('input[name=\"status\"]').val();
                        args.app_id = data.app_id;

                        var before = function(){
                            loading = layer.load();
                        }
                        var error = function(){
                            layer.close(loading);
                            layer.alert('服务器未响应，请稍后重试');
                        }
                        var success = function(data){
                            layer.close(loading);
                            if(data.status){
                                layer.close(index);
                                layer.msg('修改成功',{time:1000},function () {
                                    location.reload();
                                });
                            }else{
                                layer.alert(data.msg);
                            }
                        }
                        nxwd.ajaxRequest(baseUrl,'POST',args,'json',success,before,error);
                    }
                });
            }
        });
    });

    //checkbox 全选/取消全选
    var isCheckAll = false;
    function swapCheck() {
        if (isCheckAll) {
            \$(\"input[type='checkbox']\").each(function() {
                this.checked = false;
            });
            isCheckAll = false;
        } else {
            \$(\"input[type='checkbox']\").each(function() {
                this.checked = true;
            });
            isCheckAll = true;
        }
    }

</script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/UserDetail/OpenPlatform/request_logs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 197,  244 => 189,  219 => 167,  196 => 147,  178 => 138,  142 => 99,  132 => 92,  124 => 87,  99 => 65,  82 => 51,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>Ta的财务-资金明细</title>
    <link href=\"/assets/admin/h/css/bootstrap.min14ed.css?v=3.3.6\" rel=\"stylesheet\">

    <script src=\"/assets/admin/h/js/plugins/layer/laydate/laydate.js\"></script>
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
    <link href=\"/assets/admin/h/css/bootstrap.min14ed.css?v=3.3.6\" rel=\"stylesheet\">
    <script src=\"/assets/admin/h/js/jquery.min.js?v=2.1.4\"></script>
    <link href=\"/assets/admin/h/css/style.min862f.css?v=4.1.0\" rel=\"stylesheet\">

    <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
    <script src=\"/assets/admin/js/common.js\"></script>
    <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>
    <script src=\"/assets/common/js/ajaxRequest.js\"></script>
    <!--下拉列表-->
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/xui-select2.css\"/>
    <script type=\"text/javascript\" src=\"/assets/admin/h/js/xui-select2.js\"></script>
    <style>
        .screen-item{background:none; border:none;  padding: 0px;}
        .col-sm-2{width: 17.45%}
        .h-button-group{margin-bottom: 5px;}
        .h-button-group button{margin-right: -10px;}
        .date {
            width: 420px;
            float: left;
        }
        .seach input, .seach select {
            background-color: #fff;
            border: 1px solid #e5e6e7;
            padding: 6px 12px;
        }
        .form-control{padding: 4px 12px!important;}
        .form-more{display: inline-block!important;vertical-align:bottom!important;}
        .form-half{width: 49%!important}
        .form-third-head{width: 32%!important;}
        .form-third{width: 33%!important;}
        .box-info{padding: 10px;}
    </style>
</head>

<body>
<div class=\"main-box\">
    <div class=\"screen-item\">
        <div class=\"seach\">
            <form action=\"\" method=\"get\" enctype=\"multipart/form-data\" id=\"list-data\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('admin_user_details_open_platform_ajax_request_logs') }}\">
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">交易流水号</span>
                        <input class=\"form-control product-price\" name=\"trade_sn\" value=\"\" placeholder=\"交易流水号\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">应用名称</span>
                        <input class=\"form-control product-price\" name=\"app_name\" value=\"\" placeholder=\"应用名称\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">应用状态</span>
                        {{ sf.select_raw('app_status', {\"\": \"全部\"}|merge(constant(\"App\\\\Common\\\\Model\\\\User\\\\ApiAppOpen::APP_STATUSES\")), {\"class\": \"form-control\"}) }}
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">状态码</span>
                        <input class=\"form-control product-price\" name=\"code\" value=\"\" placeholder=\"状态码\" type=\"text\">
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">用户名</span>
                        <input class=\"form-control product-price\" name=\"user_name\" value=\"\" placeholder=\"用户名\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">接口名称</span>
                        <input class=\"form-control product-price\" name=\"interface_name\" value=\"\" placeholder=\"接口名称\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">系统状态</span>
                        {{ sf.select_raw('sys_status', {\"\": \"全部\"}|merge(constant(\"App\\\\Common\\\\Model\\\\RequestApiLogOpen::SYS_STATUS\")), {\"class\": \"form-control\"}) }}
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">状态</span>
                        {{ sf.select_raw('status', {\"\": \"全部\"}|merge(constant(\"App\\\\Common\\\\Model\\\\RequestApiLogOpen::STATUS\")), {\"class\": \"form-control\"}) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">支付类型</span>
                        {{ sf.select_raw('pay_type', {\"\": \"全部\"}|merge(constant(\"App\\\\Common\\\\Model\\\\User\\\\ApiAppOpen::PAY_TYPES\")), {\"class\": \"form-control\"}) }}
                    </div>
                </div>
                <div class=\"col-sm-2\" style=\"width:170px;\">
                    <div class=\"input-group m-b\" style=\"height: 34px\">
                        <select  name=\"time_type\" style=\"height: 34px;width: 170px\">
                            <option value=\"add_time\">请求时间</option>
                        </select>
                    </div>
                </div>
                <div class=\"col-sm-2\" style=\"width: 400px;padding-right: 2px\">
                    <div class=\"input-group date\" style=\"float: left\">
                        <input class=\"form-control layer-date\" id=\"start_time\" name=\"start_time\"  value=\"\" style=\"width: 167px\" placeholder=\"开始时间\" type=\"text\">
                        <input class=\"form-control layer-date\" id=\"end_time\" name=\"end_time\" value=\"\" style=\"width: 167px\" placeholder=\"结束时间\" type=\"text\">
                    </div>
                </div>
            </div>
            <div class=\"row\">

            </div>
                <button type=\"submit\" class=\"btn btn-primary\" style=\"position:relative;top:-60px;margin-right:100px;float: right;\" onclick=\"get_data();return false;\">查询</button>
            </form>
        </div>
    </div>

    <div class=\"h-input-block table-style1\">
        <table id=\"paged-table\" lay-filter=\"test\">

        </table>
    </div>
</div>

<script id=\"add_time\" type=\"text/html\">
    {% verbatim %}
    {{#
        var date = new Date();
        date.setTime(d.add_time);
        return date.Format(\"yyyy-MM-dd hh:mm:ss\");
    }}
    {% endverbatim %}
</script>

<script type=\"text/html\" id=\"actions\">
    <button class=\"layui-btn layui-btn-xs edit_btn\" lay-event=\"detail\">详情</button>
</script>

<script type=\"text/javascript\">

    var baseUrl = '{{ path('admin_user_details_open_platform_ajax_request_logs') }}';
    var columns = [[
        {\"field\": \"id\", \"title\": \"交易流水号\"},
        {\"field\": \"app_id\", \"title\": \"应用ID\"},
        {\"field\": \"app_name\", \"title\": \"应用名称\"},
        {\"field\": \"app_status\", \"title\": \"应用状态\"},
        {\"field\": \"user_name\", \"title\": \"用户名\"},
        {\"field\": \"nick_name\", \"title\": \"用户昵称\"},
        {\"field\": \"interface_name\", \"title\": \"接口名称\"},
        {\"field\": \"sys_status\", \"title\": \"系统状态\"},
        {\"field\": \"status\", \"title\": \"业务状态\"},
        {\"field\": \"code\", \"title\": \"状态码\"},
        {\"field\": \"pay_type\", \"title\": \"支付类型\"},
        {\"field\": \"ip\", \"title\": \"IP\"},
        {\"field\": \"add_time\", \"title\": \"订单时间\", templet: \"#add_time\"},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\"}
    ]];

    function get_data() {
        var params = \$('form#list-data').serialize();
        var url = baseUrl + '?' + 'id={{ id }}&' + params;
        rander_table('#paged-table', url, columns);
    }

    layui.use(['table', 'laytpl'], function() {
        // 初始化
        get_data();

        //监听工具条
        layui.table.on('tool(test)', function(obj){ //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
            var data = obj.data; //获得当前行数据
            var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）

            if(layEvent === 'detail'){ //查看详情
                //do something
                var obj = \$('#dialog');

                obj.find('input[name=\"status\"]').val(data.status);
                obj.find('div[name=\"status\"]').find('span').text(app_statuses[data.status]);

                layer.open({
                    type: 1,
                    title:'修改用户id='+'{{ id }}'+'的服务',
                    area:['400px','400px'],
                    content: \$('#dialog'),
                    btn: ['确定', '取消'],
                    yes: function(index) {

                        var args = {};
                        var loading = null;
                        args.id = '{{ id }}';
                        args.status = obj.find('input[name=\"status\"]').val();
                        args.app_id = data.app_id;

                        var before = function(){
                            loading = layer.load();
                        }
                        var error = function(){
                            layer.close(loading);
                            layer.alert('服务器未响应，请稍后重试');
                        }
                        var success = function(data){
                            layer.close(loading);
                            if(data.status){
                                layer.close(index);
                                layer.msg('修改成功',{time:1000},function () {
                                    location.reload();
                                });
                            }else{
                                layer.alert(data.msg);
                            }
                        }
                        nxwd.ajaxRequest(baseUrl,'POST',args,'json',success,before,error);
                    }
                });
            }
        });
    });

    //checkbox 全选/取消全选
    var isCheckAll = false;
    function swapCheck() {
        if (isCheckAll) {
            \$(\"input[type='checkbox']\").each(function() {
                this.checked = false;
            });
            isCheckAll = false;
        } else {
            \$(\"input[type='checkbox']\").each(function() {
                this.checked = true;
            });
            isCheckAll = true;
        }
    }

</script>
</body>
</html>
", "Admin/UserDetail/OpenPlatform/request_logs.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\UserDetail\\OpenPlatform\\request_logs.twig");
    }
}
