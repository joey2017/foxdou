<?php

/* Admin/UserDetail/OpenPlatform/orders.twig */
class __TwigTemplate_3f6afccfd28910c487439426b868af8e18b7d7b13b8b70f3a53be251169de704 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/OpenPlatform/orders.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/OpenPlatform/orders.twig"));

        // line 1
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers.html.twig", "Admin/UserDetail/OpenPlatform/orders.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>开放平台-Ta的订单</title>
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
    <style type=\"text/css\">
        .table-style1 table tr td a{width: auto;}
    </style>
</head>

<body>
<div class=\"main-box\">
    <div class=\"screen-item\">
        <form action=\"\" method=\"get\" enctype=\"multipart/form-data\" id=\"list-data\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_user_details_open_platform_ajax_orders"), "html", null, true);
        echo "\">
        <div class=\"h-form-input\">
            <div class=\"h-input-item\">
                <div class=\"h-input-group\">
                    <label class=\"h-input-lable\">订单编号</label>
                    <div class=\"h-input-inline\">
                        <input type=\"text\" name=\"sn\" value=\"\" placeholder=\"订单编号\" class=\"h-input-ing\" />
                    </div>
                </div>
                <div class=\"h-input-group\">
                    <label class=\"h-input-lable\">服务名称</label>
                    <div class=\"h-input-inline\">
                        <input type=\"text\" name=\"name\" value=\"\" placeholder=\"请输入服务名称\" class=\"h-input-ing\" />
                    </div>
                </div>
                <div class=\"h-input-group\">
                    <label class=\"h-input-lable\">订单类型</label>
                    <div class=\"h-input-inline\" style=\"background: #FFFFFF;\">
                        <div class=\"xui-select2\" name=\"order_type\" value=\"\"  style=\"width: 200px;\">
                            <div class=\"xui-arrow\"></div>
                            <ul class=\"xui-select2-option\" style=\"display: none;\">
                                <li value=\"all\" >全部</li>
                                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_constant("App\\Common\\Model\\Order\\ServiceOrder::ORDER_TYPE"));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 55
            echo "                                    <li value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"h-input-group\">
                    <label class=\"h-input-lable\">订单状态</label>
                    <div class=\"h-input-inline\" style=\"background: #FFFFFF;\">
                        <div class=\"xui-select2\" name=\"pay_status\" value=\"<?=\$status==null?'all':\$status?>\"  style=\"width: 200px;\">
                            <div class=\"xui-arrow\"></div>
                            <ul class=\"xui-select2-option\" style=\"display: none;\">
                                <li value=\"all\" >全部</li>
                                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_constant("App\\Common\\Model\\Order\\ServiceOrder::PAY_STATUSES"));
        foreach ($context['_seq'] as $context["key_p"] => $context["value_p"]) {
            // line 69
            echo "                                    <li value=\"";
            echo twig_escape_filter($this->env, $context["key_p"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["value_p"], "html", null, true);
            echo "</li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key_p'], $context['value_p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"location-btn\">
                <div class=\"h-input-group\">
                    <div class=\"h-input-inline\">
                        <button type=\"submit\" class=\"btn-green btn btn-primary\" style=\"top:-60px;margin-right:100px;float: right;\" onclick=\"get_data();return false;\">查询</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    <div class=\"h-input-block table-style1\" style=\"overflow-x: auto;width:100%\">
        <table id=\"paged-table\" lay-filter=\"test\">

        </table>
    </div>
</div>

<script id=\"add_time\" type=\"text/html\">
    ";
        // line 100
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
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_open_platform_ajax_orders");
        echo "';

    var order_types = [];
    ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_constant("App\\Common\\Model\\Order\\ServiceOrder::ORDER_TYPE"));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 113
            echo "        order_types.push('";
            echo twig_escape_filter($this->env, $context["status"], "html", null, true);
            echo "');
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "
    var order_statuses = [];
    ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_constant("App\\Common\\Model\\Order\\ServiceOrder::PAY_STATUSES"));
        foreach ($context['_seq'] as $context["_key"] => $context["status_a"]) {
            // line 118
            echo "        order_statuses.push('";
            echo twig_escape_filter($this->env, $context["status_a"], "html", null, true);
            echo "');
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status_a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "
    var columns = [[
        {\"field\": \"sn\", \"title\": \"订单编号\"},
        {\"field\": \"trade_sn\", \"title\": \"流水号\"},
        {\"field\": \"name\", \"title\": \"服务名称\"},
        {\"field\": \"pay_type\", \"title\": \"套餐/频率\"},
        {\"field\": \"order_type\", \"title\": \"订单类型\", templet: function(d){
                return order_types[d.order_type-1];
            }},
        {\"field\": \"money\", \"title\": \"订单金额\"},
        {\"field\": \"pay_status\", \"title\": \"订单状态\", templet: function(d){
                return order_statuses[d.pay_status];
            }},
        {\"field\": \"add_time\", \"title\": \"订单时间\", templet: \"#add_time\"},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\"}
    ]];

    function get_data() {
        var params = \$('form#list-data').serialize();
        var url = baseUrl + '?' + 'id=";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 139, $this->source); })()), "html", null, true);
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
        // line 161
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 161, $this->source); })()), "html", null, true);
        echo "'+'的服务',
                    area:['400px','400px'],
                    content: \$('#dialog'),
                    btn: ['确定', '取消'],
                    yes: function(index) {

                        var args = {};
                        var loading = null;
                        args.id = '";
        // line 169
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 169, $this->source); })()), "html", null, true);
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

</script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/UserDetail/OpenPlatform/orders.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 169,  256 => 161,  231 => 139,  210 => 120,  201 => 118,  197 => 117,  193 => 115,  184 => 113,  180 => 112,  174 => 109,  156 => 100,  131 => 71,  120 => 69,  116 => 68,  103 => 57,  92 => 55,  88 => 54,  63 => 32,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import ('/Common/simple_form_helpers.html.twig') as sf %}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>开放平台-Ta的订单</title>
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
    <style type=\"text/css\">
        .table-style1 table tr td a{width: auto;}
    </style>
</head>

<body>
<div class=\"main-box\">
    <div class=\"screen-item\">
        <form action=\"\" method=\"get\" enctype=\"multipart/form-data\" id=\"list-data\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('admin_user_details_open_platform_ajax_orders') }}\">
        <div class=\"h-form-input\">
            <div class=\"h-input-item\">
                <div class=\"h-input-group\">
                    <label class=\"h-input-lable\">订单编号</label>
                    <div class=\"h-input-inline\">
                        <input type=\"text\" name=\"sn\" value=\"\" placeholder=\"订单编号\" class=\"h-input-ing\" />
                    </div>
                </div>
                <div class=\"h-input-group\">
                    <label class=\"h-input-lable\">服务名称</label>
                    <div class=\"h-input-inline\">
                        <input type=\"text\" name=\"name\" value=\"\" placeholder=\"请输入服务名称\" class=\"h-input-ing\" />
                    </div>
                </div>
                <div class=\"h-input-group\">
                    <label class=\"h-input-lable\">订单类型</label>
                    <div class=\"h-input-inline\" style=\"background: #FFFFFF;\">
                        <div class=\"xui-select2\" name=\"order_type\" value=\"\"  style=\"width: 200px;\">
                            <div class=\"xui-arrow\"></div>
                            <ul class=\"xui-select2-option\" style=\"display: none;\">
                                <li value=\"all\" >全部</li>
                                {% for key,value in constant('App\\\\Common\\\\Model\\\\Order\\\\ServiceOrder::ORDER_TYPE') %}
                                    <li value=\"{{ key }}\">{{ value }}</li>
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"h-input-group\">
                    <label class=\"h-input-lable\">订单状态</label>
                    <div class=\"h-input-inline\" style=\"background: #FFFFFF;\">
                        <div class=\"xui-select2\" name=\"pay_status\" value=\"<?=\$status==null?'all':\$status?>\"  style=\"width: 200px;\">
                            <div class=\"xui-arrow\"></div>
                            <ul class=\"xui-select2-option\" style=\"display: none;\">
                                <li value=\"all\" >全部</li>
                                {% for key_p,value_p in constant('App\\\\Common\\\\Model\\\\Order\\\\ServiceOrder::PAY_STATUSES') %}
                                    <li value=\"{{ key_p }}\">{{ value_p }}</li>
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"location-btn\">
                <div class=\"h-input-group\">
                    <div class=\"h-input-inline\">
                        <button type=\"submit\" class=\"btn-green btn btn-primary\" style=\"top:-60px;margin-right:100px;float: right;\" onclick=\"get_data();return false;\">查询</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    <div class=\"h-input-block table-style1\" style=\"overflow-x: auto;width:100%\">
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

    var baseUrl = '{{ path('admin_user_details_open_platform_ajax_orders') }}';

    var order_types = [];
    {% for status in constant(\"App\\\\Common\\\\Model\\\\Order\\\\ServiceOrder::ORDER_TYPE\") %}
        order_types.push('{{ status }}');
    {% endfor %}

    var order_statuses = [];
    {% for status_a in constant(\"App\\\\Common\\\\Model\\\\Order\\\\ServiceOrder::PAY_STATUSES\") %}
        order_statuses.push('{{ status_a }}');
    {% endfor %}

    var columns = [[
        {\"field\": \"sn\", \"title\": \"订单编号\"},
        {\"field\": \"trade_sn\", \"title\": \"流水号\"},
        {\"field\": \"name\", \"title\": \"服务名称\"},
        {\"field\": \"pay_type\", \"title\": \"套餐/频率\"},
        {\"field\": \"order_type\", \"title\": \"订单类型\", templet: function(d){
                return order_types[d.order_type-1];
            }},
        {\"field\": \"money\", \"title\": \"订单金额\"},
        {\"field\": \"pay_status\", \"title\": \"订单状态\", templet: function(d){
                return order_statuses[d.pay_status];
            }},
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

</script>
</body>
</html>
", "Admin/UserDetail/OpenPlatform/orders.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\UserDetail\\OpenPlatform\\orders.twig");
    }
}
