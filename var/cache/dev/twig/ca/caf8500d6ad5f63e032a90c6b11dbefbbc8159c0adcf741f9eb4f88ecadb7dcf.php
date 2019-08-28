<?php

/* Admin/UserDetail/SupplierPlatform/trade_logs.twig */
class __TwigTemplate_8823062d43438dfa9c6640b3058aacd233130bd1b1968c4e8d3fa64c7a0ea281 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/SupplierPlatform/trade_logs.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/SupplierPlatform/trade_logs.twig"));

        // line 1
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Admin/UserDetail/SupplierPlatform/trade_logs.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>基本管理-Ta的财务-交易记录</title>
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
    <link href=\"/assets/admin/h/css/bootstrap.min14ed.css?v=3.3.6\" rel=\"stylesheet\">
    <script src=\"/assets/admin/h/js/jquery.min.js?v=2.1.4\"></script>
    <link href=\"/assets/admin/h/css/style.min862f.css?v=4.1.0\" rel=\"stylesheet\">

    <script src=\"/assets/admin/h/js/plugins/layer/laydate/laydate.js\"></script>

    <script src=\"/assets/admin/js/common.js\"></script>
    <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
    <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>
    <script src=\"/assets/common/js/ajaxRequest.js\"></script>
    <!--下拉列表-->
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/xui-select2.css\"/>
    <script type=\"text/javascript\" src=\"/assets/admin/h/js/xui-select2.js\"></script>
    <style>
        .screen-item{background:none; border:none;  padding: 0px;}
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
    </style>
</head>

<body>
<div class=\"main-box\">
    ";
        // line 40
        $this->loadTemplate("Admin/UserDetail/SupplierPlatform/common_tabs.twig", "Admin/UserDetail/SupplierPlatform/trade_logs.twig", 40)->display($context);
        // line 41
        echo "    <div class=\"screen-item\">
        <div class=\"seach\">
            <form action=\"\" method=\"get\" enctype=\"multipart/form-data\" id=\"list-data\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_user_details_supplier_platform_ajax_trade_logs"), "html", null, true);
        echo "\">
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">流水号</span>
                        <input class=\"form-control product-price\" name=\"trade_sn\" placeholder=\"流水号\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">业务单号</span>
                        <input class=\"form-control product-price\" name=\"order_sn\" placeholder=\"业务单号\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">交易名称</span>
                        <input class=\"form-control product-price\" name=\"name\" placeholder=\"交易名称\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">交易类型</span>
                        ";
        // line 63
        echo $context["sf"]->macro_select_raw("trade_log_type", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\Payment\\UserMoneyTradeLog::TRADE_TYPES"), "全部"), array("class" => "form-control"));
        echo "

                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">支付方式</span>
                        ";
        // line 71
        echo $context["sf"]->macro_select_raw("payment_class_id", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\PaymentConstants::PAYMENT_METHOD_CLASSES"), "全部"), array("class" => "form-control"));
        echo "
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">交易状态</span>
                        ";
        // line 76
        echo $context["sf"]->macro_select_raw("trade_status", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\Payment\\UserMoneyTradeLog::TRADE_STATUSES"), "全部"), array("class" => "form-control"));
        echo "
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">金额范围</span>
                        <input style=\"width:50%\" class=\"form-control product-price\" name=\"amount_min\" placeholder=\"最小金额\" type=\"text\">
                        <input style=\"width:50%\" class=\"form-control product-price\" name=\"amount_max\" placeholder=\"最大金额\" type=\"text\">
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-2\" style=\"width:170px;\">
                    <div class=\"input-group m-b\" style=\"height: 34px\">
                        <select  name=\"time_type\" style=\"height: 34px;width: 170px\">
                            <option value=\"add_time\">订单时间</option>
                            <option value=\"pay_time\">付款时间</option>
                            <option value=\"end_time\">截止时间</option>
                        </select>
                    </div>
                </div>
                <div class=\"col-sm-2\" style=\"width: 400px;padding-right: 2px\">
                    <div class=\"input-group date\" style=\"float: left\">
                        <input class=\"form-control layer-date\" id=\"start_time\" name=\"start_time\"  value=\"\" style=\"width: 156px\" placeholder=\"开始时间\" type=\"text\">
                        <input class=\"form-control layer-date\" id=\"end_time\" name=\"end_time\" value=\"\" style=\"width: 156px\" placeholder=\"结束时间\" type=\"text\">
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
            <li>待付款：<span id=\"no_pay_count\"></span><span id=\"no_pay_sum_money\"></span></li>
            <li>交易中：<span id=\"trading_count\"></span><span id=\"trading_sum_money\"></span></li>
            <li>交易成功：<span id=\"success_count\"></span>(<span id=\"success_sum_money\"></span>)</li>
            <li>交易失败：<span id=\"loser_count\"></span><span id=\"loser_sum_money\"></span></li>
        </ul>
    </div>
    <div class=\"h-input-block table-style1\">
        <table id=\"paged-table\" lay-filter=\"test\">

        </table>
    </div>
</div>

<script id=\"add_time\" type=\"text/html\">
    ";
        // line 133
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
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_supplier_platform_ajax_trade_logs");
        echo "';
    var columns = [[
        {\"field\": \"id\", \"title\": \"交易流水号\"},
        {\"field\": \"order_id\", \"title\": \"业务单号\"},
        {\"field\": \"name\", \"title\": \"交易名称\"},
        {\"field\": \"trade_log_type\", \"title\": \"交易类型\"},
        {\"field\": \"amount\", \"title\": \"金额\"},
        {\"field\": \"trade_status\", \"title\": \"交易状态\"},
        {\"field\": \"payment_class_id\", \"title\": \"支付方式\"},
        {\"field\": \"add_time\", \"title\": \"时间\", templet: \"#add_time\"},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\"}
    ]];

    function get_data() {
        var params = \$('form#list-data').serialize();
        var url = baseUrl + '?' + 'id=";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 157, $this->source); })()), "html", null, true);
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
            var params = \$('form').serialize();
            var url = baseUrl+'?id=";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 171, $this->source); })()), "html", null, true);
        echo "&'+params+'&count=yes';
            if(show_count_num==0){
                \$.get(url,'',function (data) {
                    show_count_num=0;
                    \$('#no_pay_count').text(data.data.no_pay+'笔');
                    \$('#trading_count').text(data.data.trading+'笔');
                    \$('#success_count').text(data.data.success[0].count+'笔');
                    \$('#loser_count').text(data.data.loser+'笔');
                    \$('#success_sum_money').text(data.data.success[0].sum_money+'元');
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
        return "Admin/UserDetail/SupplierPlatform/trade_logs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 171,  209 => 157,  191 => 142,  173 => 133,  119 => 76,  111 => 71,  100 => 63,  78 => 44,  73 => 41,  71 => 40,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>基本管理-Ta的财务-交易记录</title>
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
    <link href=\"/assets/admin/h/css/bootstrap.min14ed.css?v=3.3.6\" rel=\"stylesheet\">
    <script src=\"/assets/admin/h/js/jquery.min.js?v=2.1.4\"></script>
    <link href=\"/assets/admin/h/css/style.min862f.css?v=4.1.0\" rel=\"stylesheet\">

    <script src=\"/assets/admin/h/js/plugins/layer/laydate/laydate.js\"></script>

    <script src=\"/assets/admin/js/common.js\"></script>
    <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
    <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>
    <script src=\"/assets/common/js/ajaxRequest.js\"></script>
    <!--下拉列表-->
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/xui-select2.css\"/>
    <script type=\"text/javascript\" src=\"/assets/admin/h/js/xui-select2.js\"></script>
    <style>
        .screen-item{background:none; border:none;  padding: 0px;}
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
    </style>
</head>

<body>
<div class=\"main-box\">
    {% include \"Admin/UserDetail/SupplierPlatform/common_tabs.twig\" %}
    <div class=\"screen-item\">
        <div class=\"seach\">
            <form action=\"\" method=\"get\" enctype=\"multipart/form-data\" id=\"list-data\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('admin_user_details_supplier_platform_ajax_trade_logs') }}\">
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">流水号</span>
                        <input class=\"form-control product-price\" name=\"trade_sn\" placeholder=\"流水号\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">业务单号</span>
                        <input class=\"form-control product-price\" name=\"order_sn\" placeholder=\"业务单号\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">交易名称</span>
                        <input class=\"form-control product-price\" name=\"name\" placeholder=\"交易名称\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">交易类型</span>
                        {{ sf.select_raw('trade_log_type', to_options(constant(\"App\\\\Common\\\\Model\\\\Payment\\\\UserMoneyTradeLog::TRADE_TYPES\"), '全部'), {\"class\": \"form-control\"}) }}

                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">支付方式</span>
                        {{ sf.select_raw('payment_class_id', to_options(constant(\"App\\\\PaymentConstants::PAYMENT_METHOD_CLASSES\"), '全部'), {\"class\": \"form-control\"}) }}
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">交易状态</span>
                        {{ sf.select_raw('trade_status', to_options(constant(\"App\\\\Common\\\\Model\\\\Payment\\\\UserMoneyTradeLog::TRADE_STATUSES\"), '全部'), {\"class\": \"form-control\"}) }}
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">金额范围</span>
                        <input style=\"width:50%\" class=\"form-control product-price\" name=\"amount_min\" placeholder=\"最小金额\" type=\"text\">
                        <input style=\"width:50%\" class=\"form-control product-price\" name=\"amount_max\" placeholder=\"最大金额\" type=\"text\">
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-2\" style=\"width:170px;\">
                    <div class=\"input-group m-b\" style=\"height: 34px\">
                        <select  name=\"time_type\" style=\"height: 34px;width: 170px\">
                            <option value=\"add_time\">订单时间</option>
                            <option value=\"pay_time\">付款时间</option>
                            <option value=\"end_time\">截止时间</option>
                        </select>
                    </div>
                </div>
                <div class=\"col-sm-2\" style=\"width: 400px;padding-right: 2px\">
                    <div class=\"input-group date\" style=\"float: left\">
                        <input class=\"form-control layer-date\" id=\"start_time\" name=\"start_time\"  value=\"\" style=\"width: 156px\" placeholder=\"开始时间\" type=\"text\">
                        <input class=\"form-control layer-date\" id=\"end_time\" name=\"end_time\" value=\"\" style=\"width: 156px\" placeholder=\"结束时间\" type=\"text\">
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
            <li>待付款：<span id=\"no_pay_count\"></span><span id=\"no_pay_sum_money\"></span></li>
            <li>交易中：<span id=\"trading_count\"></span><span id=\"trading_sum_money\"></span></li>
            <li>交易成功：<span id=\"success_count\"></span>(<span id=\"success_sum_money\"></span>)</li>
            <li>交易失败：<span id=\"loser_count\"></span><span id=\"loser_sum_money\"></span></li>
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

    var baseUrl = '{{ path('admin_user_details_supplier_platform_ajax_trade_logs') }}';
    var columns = [[
        {\"field\": \"id\", \"title\": \"交易流水号\"},
        {\"field\": \"order_id\", \"title\": \"业务单号\"},
        {\"field\": \"name\", \"title\": \"交易名称\"},
        {\"field\": \"trade_log_type\", \"title\": \"交易类型\"},
        {\"field\": \"amount\", \"title\": \"金额\"},
        {\"field\": \"trade_status\", \"title\": \"交易状态\"},
        {\"field\": \"payment_class_id\", \"title\": \"支付方式\"},
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
            var params = \$('form').serialize();
            var url = baseUrl+'?id={{ id }}&'+params+'&count=yes';
            if(show_count_num==0){
                \$.get(url,'',function (data) {
                    show_count_num=0;
                    \$('#no_pay_count').text(data.data.no_pay+'笔');
                    \$('#trading_count').text(data.data.trading+'笔');
                    \$('#success_count').text(data.data.success[0].count+'笔');
                    \$('#loser_count').text(data.data.loser+'笔');
                    \$('#success_sum_money').text(data.data.success[0].sum_money+'元');
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
", "Admin/UserDetail/SupplierPlatform/trade_logs.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\UserDetail\\SupplierPlatform\\trade_logs.twig");
    }
}
