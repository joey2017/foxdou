<?php

/* Admin/UserDetail/OpenPlatform/operation_logs.twig */
class __TwigTemplate_082127c81feca85b9572c36d20051dc18cf6a892eeeb0ce962699fb7301f533d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/OpenPlatform/operation_logs.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/OpenPlatform/operation_logs.twig"));

        // line 1
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers.html.twig", "Admin/UserDetail/OpenPlatform/operation_logs.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>操作日志</title>
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
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
    <br/>
    <div class=\"screen-item\">
        <div class=\"seach\">
            <form action=\"\" method=\"get\" enctype=\"multipart/form-data\" id=\"list-data\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_user_details_open_platform_ajax_operation_logs"), "html", null, true);
        echo "\">
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">操作详情</span>
                        <input class=\"form-control product-price\" name=\"info\" placeholder=\"操作详情\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">操作IP</span>
                        <input class=\"form-control product-price\" name=\"ip\" placeholder=\"操作IP\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">操作人</span>
                        <input class=\"form-control product-price\" name=\"user_name\" placeholder=\"账号\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\" style=\"width: 400px;\"><span class=\"input-group-addon\">操作时间</span>
                        <input style=\"width:50%\" id=\"start_time\" class=\"form-control product-price layer-date\" name=\"start_time\" value=\"\" type=\"text\">
                        <input style=\"width:50%\" id=\"end_time\" class=\"form-control product-price layer-date\" name=\"end_time\" value=\"\" type=\"text\">
                    </div>
                </div>
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
        // line 83
        echo "
    {{#
        var date = new Date();
        date.setTime(d.add_time);
        return date.Format(\"yyyy-MM-dd hh:mm:ss\");
    }}
    ";
        echo "
</script>

<script type=\"text/javascript\">

    var baseUrl = '";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_open_platform_ajax_operation_logs");
        echo "';
    var columns = [[
        {\"field\": \"add_time\", \"title\": \"操作时间\", templet: \"#add_time\"},
        {\"field\": \"info\", \"title\": \"操作详情\"},
        {\"field\": \"ip\", \"title\": \"操作IP\"},
        {\"field\": \"user_name\", \"title\": \"操作人\"}
    ]];

    function get_data() {
        var params = \$('form#list-data').serialize();
        var url = baseUrl + '?' + 'id=";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 98, $this->source); })()), "html", null, true);
        echo "&' + params;
        rander_table('#paged-table', url, columns);
    }

    layui.use(['table', 'laytpl'], function() {
        // 初始化
        get_data();
    });

</script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/UserDetail/OpenPlatform/operation_logs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 98,  125 => 88,  111 => 83,  72 => 41,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import ('/Common/simple_form_helpers.html.twig') as sf %}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>操作日志</title>
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
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
    <br/>
    <div class=\"screen-item\">
        <div class=\"seach\">
            <form action=\"\" method=\"get\" enctype=\"multipart/form-data\" id=\"list-data\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('admin_user_details_open_platform_ajax_operation_logs') }}\">
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">操作详情</span>
                        <input class=\"form-control product-price\" name=\"info\" placeholder=\"操作详情\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">操作IP</span>
                        <input class=\"form-control product-price\" name=\"ip\" placeholder=\"操作IP\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">操作人</span>
                        <input class=\"form-control product-price\" name=\"user_name\" placeholder=\"账号\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\" style=\"width: 400px;\"><span class=\"input-group-addon\">操作时间</span>
                        <input style=\"width:50%\" id=\"start_time\" class=\"form-control product-price layer-date\" name=\"start_time\" value=\"\" type=\"text\">
                        <input style=\"width:50%\" id=\"end_time\" class=\"form-control product-price layer-date\" name=\"end_time\" value=\"\" type=\"text\">
                    </div>
                </div>
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

<script type=\"text/javascript\">

    var baseUrl = '{{ path('admin_user_details_open_platform_ajax_operation_logs') }}';
    var columns = [[
        {\"field\": \"add_time\", \"title\": \"操作时间\", templet: \"#add_time\"},
        {\"field\": \"info\", \"title\": \"操作详情\"},
        {\"field\": \"ip\", \"title\": \"操作IP\"},
        {\"field\": \"user_name\", \"title\": \"操作人\"}
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

</script>
</body>
</html>
", "Admin/UserDetail/OpenPlatform/operation_logs.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\UserDetail\\OpenPlatform\\operation_logs.twig");
    }
}
