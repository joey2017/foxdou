<?php

/* Admin/UserDetail/OpenPlatform/finance_detail.twig */
class __TwigTemplate_b80013bdb8d4eb8f607cd74746b8bf37c8a6080558c62c37992cab5ddc6baf3c extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/OpenPlatform/finance_detail.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/OpenPlatform/finance_detail.twig"));

        // line 1
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Admin/UserDetail/OpenPlatform/finance_detail.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>Ta的财务-资金明细</title>
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
    <script type=\"text/javascript\" src=\"/assets/admin/js/jquery.min.js\"></script>
    <link href=\"/assets/admin/h/css/bootstrap.min14ed.css?v=3.3.6\" rel=\"stylesheet\">
    <script src=\"/assets/admin/h/js/jquery.min.js?v=2.1.4\"></script>
    <link href=\"/assets/admin/h/css/style.min862f.css?v=4.1.0\" rel=\"stylesheet\">

    <script src=\"/assets/admin/h/js/plugins/layer/laydate/laydate.js\"></script>

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
        .seach input, .seach select {
            background-color: #fff;
            border: 1px solid #e5e6e7;
            padding: 6px 12px;
        }
    </style>
</head>

<body>
<div class=\"main-box\">
    ";
        // line 38
        $this->loadTemplate("Admin/UserDetail/OpenPlatform/common_tabs.twig", "Admin/UserDetail/OpenPlatform/finance_detail.twig", 38)->display($context);
        // line 39
        echo "    <div class=\"screen-item\">
        <div class=\"seach\">
            <form action=\"\" method=\"get\" enctype=\"multipart/form-data\" id=\"list-data\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_user_details_open_platform_ajax_finance_detail"), "html", null, true);
        echo "\">
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">流水号</span>
                        <input class=\"form-control product-price\" name=\"trade_id\" placeholder=\"流水号\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">业务单号</span>
                        <input class=\"form-control product-price\" name=\"order_id\" placeholder=\"业务单号\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">交易名称</span>
                        <input class=\"form-control product-price\" name=\"name\" placeholder=\"交易名称\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">业务类型</span>
                        ";
        // line 61
        echo $context["sf"]->macro_select_raw("log_type", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\Payment\\UserMoneyLog::LOG_TYPES"), "全部"), array("class" => "form-control"));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">金额范围</span>
                        <input style=\"width:50%\" class=\"form-control product-price\" name=\"amount_min\" value=\"\" placeholder=\"最小金额\" type=\"text\">
                        <input style=\"width:50%\" class=\"form-control product-price\" name=\"amount_max\" value=\"\" placeholder=\"最大金额\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\" style=\"width: 370px;\"><span class=\"input-group-addon\">时间</span>
                        <input style=\"width:50%\" id=\"start_time\" class=\"form-control product-price layer-date\" name=\"start_time\" value=\"\" type=\"text\">
                        <input style=\"width:50%\" id=\"end_time\" class=\"form-control product-price layer-date\" name=\"end_time\" value=\"\" type=\"text\">
                    </div>
                </div>
            </div>
                <button type=\"submit\" class=\"btn btn-primary\" style=\"position:relative;top:-60px;margin-right:100px;float: right;\" onclick=\"get_data();return false;\">查询</button>
            </form>
        </div>
    </div>
    <div class=\"h-button-group\">
        <button class=\"layui-btn layui-btn-small f-fnsna\" onclick=\"show_count(this)\">查看统计</button>
        <button class=\"layui-btn layui-btn-small f-fnsna\" onclick=\"export_cvs()\">导出订单</button>
    </div>
    <div class=\"m-table-total\" style=\"display: none; padding: 20px; background: #fcf8e3;\">
        <ul class=\"g-bdc\">
            <li>收入：<span id=\"income_count\"></span>（<span id=\"income_sum_money\"></span>）</li>
            <li>支出：<span id=\"payment_count\"></span>（<span id=\"payment_sum_money\"></span>）</li>
        </ul>
    </div>
    <div class=\"h-input-block table-style1\">
        <table id=\"paged-table\" lay-filter=\"test\">

        </table>
    </div>
</div>

<script id=\"add_time\" type=\"text/html\">
    ";
        // line 107
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
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_open_platform_ajax_finance_detail");
        echo "';
    var columns = [[
        {\"field\": \"trade_id\", \"title\": \"交易流水号\"},
        {\"field\": \"order_id\", \"title\": \"业务单号\"},
        {\"field\": \"name\", \"title\": \"交易名称\"},
        {\"field\": \"log_type\", \"title\": \"类型\"},
        {\"field\": \"amount\", \"title\": \"交易金额\"},
        {\"field\": \"current_balance\", \"title\": \"交易后余额\", templet: function(d){
                return app_statuses[d.status];
            }},
        {\"field\": \"add_time\", \"title\": \"时间\", templet: \"#add_time\"},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\"}
    ]];

    function get_data() {
        var params = \$('form#list-data').serialize();
        var url = baseUrl + '?' + 'id=";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 132, $this->source); })()), "html", null, true);
        echo "&' + params;
        rander_table('#paged-table', url, columns);
    }

    layui.use(['table', 'laytpl'], function() {
        // 初始化
        get_data();
    });

    var show_count_num=0;
    function show_count(dom){
        if(\$(dom).text()=='查看统计'){
            \$('.m-table-total').css('display','block');
            var params=\$('form#list-data').serialize();
            var url = baseUrl+'?id=";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 146, $this->source); })()), "html", null, true);
        echo "&'+params+'&count=yes';
            if(show_count_num==0){
                \$.get(url,'',function (data) {
                    if(data.status){
                        \$('#income_count').text(data.data.income[0].count+'笔');
                        \$('#income_sum_money').text(data.data.income[0].sum_money+'元');
                        \$('#payment_count').text(data.data.payment[0].count+'笔');
                        \$('#payment_sum_money').text(data.data.payment[0].sum_money+'元');
                    }
                });
            }
            \$(dom).text('关闭统计')
        }else if(\$(dom).text()=='关闭统计'){
            \$('.m-table-total').css('display','none');
            \$(dom).text('查看统计')
        }
    }

    function export_cvs(){
        if(\$('#count_data_num').text()==0){
            layer.msg('无数据不能导出');
            return;
        }
        var params=\$('form').serialize();
        var url=location.href;
        location.href=location.href+(url.indexOf('?')!=-1?'':'?')+params+'&export=yes';
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
        return "Admin/UserDetail/OpenPlatform/finance_detail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 146,  178 => 132,  159 => 116,  141 => 107,  98 => 61,  76 => 42,  71 => 39,  69 => 38,  31 => 2,  29 => 1,);
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
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
    <script type=\"text/javascript\" src=\"/assets/admin/js/jquery.min.js\"></script>
    <link href=\"/assets/admin/h/css/bootstrap.min14ed.css?v=3.3.6\" rel=\"stylesheet\">
    <script src=\"/assets/admin/h/js/jquery.min.js?v=2.1.4\"></script>
    <link href=\"/assets/admin/h/css/style.min862f.css?v=4.1.0\" rel=\"stylesheet\">

    <script src=\"/assets/admin/h/js/plugins/layer/laydate/laydate.js\"></script>

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
        .seach input, .seach select {
            background-color: #fff;
            border: 1px solid #e5e6e7;
            padding: 6px 12px;
        }
    </style>
</head>

<body>
<div class=\"main-box\">
    {% include \"Admin/UserDetail/OpenPlatform/common_tabs.twig\" %}
    <div class=\"screen-item\">
        <div class=\"seach\">
            <form action=\"\" method=\"get\" enctype=\"multipart/form-data\" id=\"list-data\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('admin_user_details_open_platform_ajax_finance_detail') }}\">
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">流水号</span>
                        <input class=\"form-control product-price\" name=\"trade_id\" placeholder=\"流水号\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">业务单号</span>
                        <input class=\"form-control product-price\" name=\"order_id\" placeholder=\"业务单号\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">交易名称</span>
                        <input class=\"form-control product-price\" name=\"name\" placeholder=\"交易名称\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">业务类型</span>
                        {{ sf.select_raw('log_type', to_options(constant(\"App\\\\Common\\\\Model\\\\Payment\\\\UserMoneyLog::LOG_TYPES\"), '全部'), {\"class\": \"form-control\"}) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">金额范围</span>
                        <input style=\"width:50%\" class=\"form-control product-price\" name=\"amount_min\" value=\"\" placeholder=\"最小金额\" type=\"text\">
                        <input style=\"width:50%\" class=\"form-control product-price\" name=\"amount_max\" value=\"\" placeholder=\"最大金额\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\" style=\"width: 370px;\"><span class=\"input-group-addon\">时间</span>
                        <input style=\"width:50%\" id=\"start_time\" class=\"form-control product-price layer-date\" name=\"start_time\" value=\"\" type=\"text\">
                        <input style=\"width:50%\" id=\"end_time\" class=\"form-control product-price layer-date\" name=\"end_time\" value=\"\" type=\"text\">
                    </div>
                </div>
            </div>
                <button type=\"submit\" class=\"btn btn-primary\" style=\"position:relative;top:-60px;margin-right:100px;float: right;\" onclick=\"get_data();return false;\">查询</button>
            </form>
        </div>
    </div>
    <div class=\"h-button-group\">
        <button class=\"layui-btn layui-btn-small f-fnsna\" onclick=\"show_count(this)\">查看统计</button>
        <button class=\"layui-btn layui-btn-small f-fnsna\" onclick=\"export_cvs()\">导出订单</button>
    </div>
    <div class=\"m-table-total\" style=\"display: none; padding: 20px; background: #fcf8e3;\">
        <ul class=\"g-bdc\">
            <li>收入：<span id=\"income_count\"></span>（<span id=\"income_sum_money\"></span>）</li>
            <li>支出：<span id=\"payment_count\"></span>（<span id=\"payment_sum_money\"></span>）</li>
        </ul>
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

    var baseUrl = '{{ path('admin_user_details_open_platform_ajax_finance_detail') }}';
    var columns = [[
        {\"field\": \"trade_id\", \"title\": \"交易流水号\"},
        {\"field\": \"order_id\", \"title\": \"业务单号\"},
        {\"field\": \"name\", \"title\": \"交易名称\"},
        {\"field\": \"log_type\", \"title\": \"类型\"},
        {\"field\": \"amount\", \"title\": \"交易金额\"},
        {\"field\": \"current_balance\", \"title\": \"交易后余额\", templet: function(d){
                return app_statuses[d.status];
            }},
        {\"field\": \"add_time\", \"title\": \"时间\", templet: \"#add_time\"},
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
    });

    var show_count_num=0;
    function show_count(dom){
        if(\$(dom).text()=='查看统计'){
            \$('.m-table-total').css('display','block');
            var params=\$('form#list-data').serialize();
            var url = baseUrl+'?id={{ id }}&'+params+'&count=yes';
            if(show_count_num==0){
                \$.get(url,'',function (data) {
                    if(data.status){
                        \$('#income_count').text(data.data.income[0].count+'笔');
                        \$('#income_sum_money').text(data.data.income[0].sum_money+'元');
                        \$('#payment_count').text(data.data.payment[0].count+'笔');
                        \$('#payment_sum_money').text(data.data.payment[0].sum_money+'元');
                    }
                });
            }
            \$(dom).text('关闭统计')
        }else if(\$(dom).text()=='关闭统计'){
            \$('.m-table-total').css('display','none');
            \$(dom).text('查看统计')
        }
    }

    function export_cvs(){
        if(\$('#count_data_num').text()==0){
            layer.msg('无数据不能导出');
            return;
        }
        var params=\$('form').serialize();
        var url=location.href;
        location.href=location.href+(url.indexOf('?')!=-1?'':'?')+params+'&export=yes';
    }

</script>
</body>
</html>

", "Admin/UserDetail/OpenPlatform/finance_detail.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\UserDetail\\OpenPlatform\\finance_detail.twig");
    }
}
