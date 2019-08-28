<?php

/* Admin/UserDetail/Main/operation_logs.twig */
class __TwigTemplate_d837eb941569382f5cb457f2a3d840b0fc047a13bdf7482725fa38dac04bfd32 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/Main/operation_logs.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/Main/operation_logs.twig"));

        // line 1
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
    <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
    <script src=\"/assets/admin/js/common.js\"></script>
    <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/layer/laydate/laydate.js\"></script>

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
            <form action=\"\" post=\"get\" enctype=\"multipart/form-data\">
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_user_details_main_operation_logs"), "html", null, true);
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
                            <input style=\"width:50%\" id=\"start_time\" class=\"form-control product-price layer-date\" name=\"start_time\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" type=\"text\">
                            <input style=\"width:50%\" id=\"end_time\" class=\"form-control product-price layer-date\" name=\"end_time\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env, "+1days"), "Y-m-d"), "html", null, true);
        echo "\" type=\"text\">
                        </div>
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\" style=\"position:relative;top:-60px;margin-right:100px;float: right;\" onclick=\"get_data();return false;\">查询</button>
            </form>

        </div>
    </div>
    <div class=\"h-input-block table-style1\">
        <table id=\"paged-table\" lay-filter=\"user-table\">

        </table>
    </div>
</div>
<script id=\"add_time\" type=\"text/html\">
    ";
        // line 82
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

    var columns = [[
        {\"field\": \"add_time\", \"title\": \"操作时间\",templet: \"#add_time\"},
        {\"field\": \"info\", \"title\": \"操作详情\"},
        {\"field\": \"ip\", \"title\": \"操作IP\"},
        {\"field\": \"user_name\", \"title\": \"操作人\"}
    ]];

    function get_data() {
        var url    = '";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_main_operation_logs");
        echo "';
        var params = '?' + \$('form').serialize();
        url        +=  params;
        rander_table('#paged-table', url, columns);
    }

    layui.use('table', function(){
        // 初始化
        get_data();
    })

</script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/UserDetail/Main/operation_logs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 94,  118 => 82,  99 => 60,  95 => 59,  72 => 39,  68 => 38,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>操作日志</title>
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
    <link href=\"/assets/admin/h/css/bootstrap.min14ed.css?v=3.3.6\" rel=\"stylesheet\">
    <script src=\"/assets/admin/h/js/jquery.min.js?v=2.1.4\"></script>
    <link href=\"/assets/admin/h/css/style.min862f.css?v=4.1.0\" rel=\"stylesheet\">
    <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
    <script src=\"/assets/admin/js/common.js\"></script>
    <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/layer/laydate/laydate.js\"></script>

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
            <form action=\"\" post=\"get\" enctype=\"multipart/form-data\">
                <input type=\"hidden\" name=\"id\" value=\"{{ id }}\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('admin_user_details_main_operation_logs') }}\">

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
                            <input style=\"width:50%\" id=\"start_time\" class=\"form-control product-price layer-date\" name=\"start_time\" value=\"{{ \"now\"|date(\"Y-m-d\") }}\" type=\"text\">
                            <input style=\"width:50%\" id=\"end_time\" class=\"form-control product-price layer-date\" name=\"end_time\" value=\"{{ date('+1days')|date('Y-m-d') }}\" type=\"text\">
                        </div>
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\" style=\"position:relative;top:-60px;margin-right:100px;float: right;\" onclick=\"get_data();return false;\">查询</button>
            </form>

        </div>
    </div>
    <div class=\"h-input-block table-style1\">
        <table id=\"paged-table\" lay-filter=\"user-table\">

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

    var columns = [[
        {\"field\": \"add_time\", \"title\": \"操作时间\",templet: \"#add_time\"},
        {\"field\": \"info\", \"title\": \"操作详情\"},
        {\"field\": \"ip\", \"title\": \"操作IP\"},
        {\"field\": \"user_name\", \"title\": \"操作人\"}
    ]];

    function get_data() {
        var url    = '{{ path('admin_user_details_main_operation_logs') }}';
        var params = '?' + \$('form').serialize();
        url        +=  params;
        rander_table('#paged-table', url, columns);
    }

    layui.use('table', function(){
        // 初始化
        get_data();
    })

</script>
</body>
</html>
", "Admin/UserDetail/Main/operation_logs.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\UserDetail\\Main\\operation_logs.twig");
    }
}
