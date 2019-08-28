<?php

/* Admin/UserDetail/ResellerPlatform/extension.twig */
class __TwigTemplate_5475b83d345bbe34a28db25b75019a409502251b31c1a84e779b7968cb6f8213 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/ResellerPlatform/extension.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/ResellerPlatform/extension.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>所有用户</title>
    <link rel=\"shortcut icon\" href=\"favicon.ico\">

    <link href=\"/assets/admin/h/css/bootstrap.min14ed.css?v=3.3.6\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/font-awesome.min93e3.css?v=4.4.0\" rel=\"stylesheet\">
    <!-- Data Tables -->
    <link href=\"/assets/admin/h/css/animate.min.css\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/style.min862f.css?v=4.1.0\" rel=\"stylesheet\">
    <script src=\"/assets/admin/h/js/jquery.min.js?v=2.1.4\"></script>
    <script src=\"/assets/admin/h/js/bootstrap.min.js?v=3.3.6\"></script>
    <script src=\"/assets/admin/h/js/plugins/jeditable/jquery.jeditable.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/dataTables/jquery.dataTables.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/dataTables/dataTables.bootstrap.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/layer/layer.min.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/iCheck/icheck.min.js\"></script>
    <script src=\"/assets/admin/js/common.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/layer/laydate/laydate.js\"></script>

    <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
    <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>
    <script src=\"/assets/common/js/ajaxRequest.js\"></script>
    <style>
        .seach input,.seach select {  background-color: #fff;  border: 1px solid #e5e6e7;  padding: 6px 12px;  }
        .table-header{padding: 20px; background:#fcf8e3}
        table td,table th{text-align: center}
        .col-sm-2{width: 300px;}
        .ibox-content{border-style: hidden}
    </style>
</head>


<body>
<div class=\"ibox-content\">
    <div class=\"seach\">
        <form action=\"\" method=\"get\" enctype=\"multipart/form-data\" id=\"list-data\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_user_details_reseller_platform_ajax_extension"), "html", null, true);
        echo "\">
        <div class=\"row\">
            <div class=\"col-sm-2\">
                <div class=\"input-group m-b\"><span class=\"input-group-addon\">用户名</span>
                    <input class=\"form-control product-price\" name=\"user_name\" placeholder=\"用户名\" type=\"text\">
                </div>
            </div>
            <div class=\"col-sm-2\">
                <div class=\"input-group m-b\"><span class=\"input-group-addon\">昵称</span>
                    <input class=\"form-control product-price\" name=\"nick_name\" placeholder=\"昵称\" type=\"text\">
                </div>
            </div>
            <div class=\"col-sm-2\">
                <div class=\"input-group m-b\"><span class=\"input-group-addon\">级别</span>
                    <input class=\"form-control product-price\" name=\"level\" placeholder=\"级别\" type=\"text\">
                </div>
            </div>
            <div class=\"col-sm-2\">
                <div class=\"input-group m-b\"><span class=\"input-group-addon\">状态</span>
                    <select class=\"form-control\" name=\"status\">
                        <option value=\"\">全部</option>
                        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new Twig_Error_Runtime('Variable "statuses" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["key_s"] => $context["status"]) {
            // line 63
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["key_s"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["status"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key_s'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                    </select>
                </div>
            </div>
            <div class=\"col-sm-2\">
                <div class=\"input-group m-b\"><span class=\"input-group-addon\">经销商类型</span>
                    <select class=\"form-control\" name=\"agency_type\">
                        <option value=\"\">全部</option>
                        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agency_types"]) || array_key_exists("agency_types", $context) ? $context["agency_types"] : (function () { throw new Twig_Error_Runtime('Variable "agency_types" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["key_t"] => $context["type"]) {
            // line 73
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["key_t"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key_t'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                    </select>
                </div>
            </div>
        </div>
            <button type=\"submit\" class=\"btn btn-primary\" style=\"position:relative;top:-60px;margin-right:100px;float: right;\" onclick=\"get_data();return false;\">查询</button>
        </form>
    </div>

</div>

<div class=\"table-header\" style=\"display: none;\">
    总计：元
</div>
<table id=\"paged-table\" lay-filter=\"test\">

</table>
</div>
<div id=\"edit_level_dialog\" style=\"display: none; padding: 20px 20px 0px 20px;\">

    <div class=\"input-group m-b\"><span class=\"input-group-addon\">选择级别</span>
        <select class=\"form-control \" id=\"new_level_id\" >
            <option value=\"\">请选择正确的级别</option>

        </select>
    </div>
</div>

<div id=\"edit-status\" style=\"display: none; padding: 20px 20px 0px 20px;\">
    <div class=\"col-sm-12\" style=\"padding-left: 0px\">
        <div class=\"input-group m-b\" >
            <span class=\"input-group-addon\">用户状态</span>
            <select id=\"new_status\"  class=\"form-control \">

            </select>
        </div>
    </div>

</div>
<!--用户审核box-->
<div id=\"aduit_dialog\" style=\"display: none; padding: 20px 20px 0px 20px;\">

</div>

<script id=\"add_time\" type=\"text/html\">
    ";
        // line 125
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

    var statuses = {};
    ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new Twig_Error_Runtime('Variable "statuses" does not exist.', 131, $this->source); })()));
        foreach ($context['_seq'] as $context["k_s"] => $context["status_s"]) {
            // line 132
            echo "        statuses.";
            echo twig_escape_filter($this->env, $context["k_s"], "html", null, true);
            echo " = '";
            echo twig_escape_filter($this->env, $context["status_s"], "html", null, true);
            echo "';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k_s'], $context['status_s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "
    var agency_types = [];
    ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agency_types"]) || array_key_exists("agency_types", $context) ? $context["agency_types"] : (function () { throw new Twig_Error_Runtime('Variable "agency_types" does not exist.', 136, $this->source); })()));
        foreach ($context['_seq'] as $context["k_t"] => $context["type_s"]) {
            // line 137
            echo "        agency_types.push('";
            echo twig_escape_filter($this->env, $context["type_s"], "html", null, true);
            echo "');
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k_t'], $context['type_s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "
    var baseUrl = '";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_reseller_platform_ajax_extension");
        echo "';
    var columns = [[
        {\"field\": \"user_name\", \"title\": \"用户名\"},
        {\"field\": \"nick_name\", \"title\": \"昵称\"},
        {\"field\": \"balance\", \"title\": \"用户所在供货商平台金额\"},
        {\"field\": \"rebate_balance\", \"title\": \"推广返利佣金余额\"},
        {\"field\": \"level\", \"title\": \"级别\"},
        {\"field\": \"status\", \"title\": \"状态\", templet: function(d){
                return statuses[d.status];
            }},
        {\"field\": \"agency_type\", \"title\": \"经销商类型\", templet: function(d){
                return agency_types[d.agency_type-1];
            }},
        {\"field\": \"add_time\", \"title\": \"添加时间\", templet: \"#add_time\"}
    ]];

    function get_data() {
        var params = \$('form#list-data').serialize();
        var url = baseUrl + '?' + 'id=";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 158, $this->source); })()), "html", null, true);
        echo "&' + params;
        rander_table('#paged-table', url, columns);
    }

    layui.use(['table', 'laytpl'], function() {
        // 初始化
        get_data();
    });
</script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/UserDetail/ResellerPlatform/extension.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 158,  230 => 140,  227 => 139,  218 => 137,  214 => 136,  210 => 134,  199 => 132,  195 => 131,  180 => 125,  134 => 75,  123 => 73,  119 => 72,  110 => 65,  99 => 63,  95 => 62,  71 => 41,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>所有用户</title>
    <link rel=\"shortcut icon\" href=\"favicon.ico\">

    <link href=\"/assets/admin/h/css/bootstrap.min14ed.css?v=3.3.6\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/font-awesome.min93e3.css?v=4.4.0\" rel=\"stylesheet\">
    <!-- Data Tables -->
    <link href=\"/assets/admin/h/css/animate.min.css\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/style.min862f.css?v=4.1.0\" rel=\"stylesheet\">
    <script src=\"/assets/admin/h/js/jquery.min.js?v=2.1.4\"></script>
    <script src=\"/assets/admin/h/js/bootstrap.min.js?v=3.3.6\"></script>
    <script src=\"/assets/admin/h/js/plugins/jeditable/jquery.jeditable.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/dataTables/jquery.dataTables.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/dataTables/dataTables.bootstrap.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/layer/layer.min.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/iCheck/icheck.min.js\"></script>
    <script src=\"/assets/admin/js/common.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/layer/laydate/laydate.js\"></script>

    <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
    <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>
    <script src=\"/assets/common/js/ajaxRequest.js\"></script>
    <style>
        .seach input,.seach select {  background-color: #fff;  border: 1px solid #e5e6e7;  padding: 6px 12px;  }
        .table-header{padding: 20px; background:#fcf8e3}
        table td,table th{text-align: center}
        .col-sm-2{width: 300px;}
        .ibox-content{border-style: hidden}
    </style>
</head>


<body>
<div class=\"ibox-content\">
    <div class=\"seach\">
        <form action=\"\" method=\"get\" enctype=\"multipart/form-data\" id=\"list-data\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('admin_user_details_reseller_platform_ajax_extension') }}\">
        <div class=\"row\">
            <div class=\"col-sm-2\">
                <div class=\"input-group m-b\"><span class=\"input-group-addon\">用户名</span>
                    <input class=\"form-control product-price\" name=\"user_name\" placeholder=\"用户名\" type=\"text\">
                </div>
            </div>
            <div class=\"col-sm-2\">
                <div class=\"input-group m-b\"><span class=\"input-group-addon\">昵称</span>
                    <input class=\"form-control product-price\" name=\"nick_name\" placeholder=\"昵称\" type=\"text\">
                </div>
            </div>
            <div class=\"col-sm-2\">
                <div class=\"input-group m-b\"><span class=\"input-group-addon\">级别</span>
                    <input class=\"form-control product-price\" name=\"level\" placeholder=\"级别\" type=\"text\">
                </div>
            </div>
            <div class=\"col-sm-2\">
                <div class=\"input-group m-b\"><span class=\"input-group-addon\">状态</span>
                    <select class=\"form-control\" name=\"status\">
                        <option value=\"\">全部</option>
                        {% for key_s,status in statuses%}
                            <option value=\"{{ key_s }}\">{{ status }}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>
            <div class=\"col-sm-2\">
                <div class=\"input-group m-b\"><span class=\"input-group-addon\">经销商类型</span>
                    <select class=\"form-control\" name=\"agency_type\">
                        <option value=\"\">全部</option>
                        {% for key_t,type in agency_types%}
                            <option value=\"{{ key_t }}\">{{ type }}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>
        </div>
            <button type=\"submit\" class=\"btn btn-primary\" style=\"position:relative;top:-60px;margin-right:100px;float: right;\" onclick=\"get_data();return false;\">查询</button>
        </form>
    </div>

</div>

<div class=\"table-header\" style=\"display: none;\">
    总计：元
</div>
<table id=\"paged-table\" lay-filter=\"test\">

</table>
</div>
<div id=\"edit_level_dialog\" style=\"display: none; padding: 20px 20px 0px 20px;\">

    <div class=\"input-group m-b\"><span class=\"input-group-addon\">选择级别</span>
        <select class=\"form-control \" id=\"new_level_id\" >
            <option value=\"\">请选择正确的级别</option>

        </select>
    </div>
</div>

<div id=\"edit-status\" style=\"display: none; padding: 20px 20px 0px 20px;\">
    <div class=\"col-sm-12\" style=\"padding-left: 0px\">
        <div class=\"input-group m-b\" >
            <span class=\"input-group-addon\">用户状态</span>
            <select id=\"new_status\"  class=\"form-control \">

            </select>
        </div>
    </div>

</div>
<!--用户审核box-->
<div id=\"aduit_dialog\" style=\"display: none; padding: 20px 20px 0px 20px;\">

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

    var statuses = {};
    {% for k_s,status_s in statuses%}
        statuses.{{ k_s }} = '{{ status_s }}';
    {% endfor %}

    var agency_types = [];
    {% for k_t,type_s in agency_types%}
        agency_types.push('{{ type_s }}');
    {% endfor %}

    var baseUrl = '{{ path('admin_user_details_reseller_platform_ajax_extension') }}';
    var columns = [[
        {\"field\": \"user_name\", \"title\": \"用户名\"},
        {\"field\": \"nick_name\", \"title\": \"昵称\"},
        {\"field\": \"balance\", \"title\": \"用户所在供货商平台金额\"},
        {\"field\": \"rebate_balance\", \"title\": \"推广返利佣金余额\"},
        {\"field\": \"level\", \"title\": \"级别\"},
        {\"field\": \"status\", \"title\": \"状态\", templet: function(d){
                return statuses[d.status];
            }},
        {\"field\": \"agency_type\", \"title\": \"经销商类型\", templet: function(d){
                return agency_types[d.agency_type-1];
            }},
        {\"field\": \"add_time\", \"title\": \"添加时间\", templet: \"#add_time\"}
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
</html>", "Admin/UserDetail/ResellerPlatform/extension.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\UserDetail\\ResellerPlatform\\extension.twig");
    }
}
