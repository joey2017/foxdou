<?php

/* Admin/UserDetail/OpenPlatform/services.twig */
class __TwigTemplate_6c154c2cbad678e6d1fcbe87a3003d5f401492c1c5674e33020ff56d3c1e9d0d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/OpenPlatform/services.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/OpenPlatform/services.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>基本管理-Ta的财务-交易记录</title>
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
    <script src=\"/assets/admin/js/jquery.min.js\"></script>
    <link href=\"/assets/admin/h/css/bootstrap.min14ed.css?v=3.3.6\" rel=\"stylesheet\">
    <script src=\"/assets/admin/h/js/jquery.min.js?v=2.1.4\"></script>
    <link href=\"/assets/admin/h/css/style.min862f.css?v=4.1.0\" rel=\"stylesheet\">

    <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
    <script src=\"/assets/admin/js/common.js\"></script>
    <script src=\"/assets/common/js/ajaxRequest.js\"></script>
    <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>

    <script src=\"/assets/admin/h/js/plugins/layer/laydate/laydate.js\"></script>

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
        <form id=\"service_list\" action=\"\" method=\"get\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_user_details_open_platform_services"), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"id\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "\">
            <div class=\"h-form-input\">
                <div class=\"h-input-group\">
                    <label class=\"h-input-lable\">服务名称</label>
                    <div class=\"h-input-inline\">
                        <input type=\"text\" name=\"service_name\" placeholder=\"请输入服务名称\" class=\"h-input-ing\" />
                    </div>
                </div>
                <div class=\"h-input-group\">
                    <label class=\"h-input-lable\">服务状态</label>
                    <div class=\"h-input-inline\" style=\"background: #FFFFFF;\">
                        <div class=\"xui-select2\" name=\"service_status\" value=\"\"  style=\"width: 200px;\">
                            <div class=\"xui-arrow\"></div>
                            <ul class=\"xui-select2-option\" style=\"display: none;\">
                                <li value=\"all\">全部</li>
                                <li value=\"1\">正常</li>
                                <li value=\"0\">维护</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"h-input-group\">
                    <label class=\"h-input-lable\">使用状态</label>
                    <div class=\"h-input-inline\" style=\"background: #FFFFFF;\">
                        <div class=\"xui-select2\" name=\"use_status\" value=\"\"  style=\"width: 200px;\">
                            <div class=\"xui-arrow\"></div>
                            <ul class=\"xui-select2-option\" style=\"display: none;\">
                                <li value=\"all\" >全部</li>
                                <li value=\"1\">使用中</li>
                                <li value=\"0\">已暂停</li>
                            </ul>
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
<div id=\"dialog\" style=\"display: none;\">
    <div class=\"h-form-input\">
        <div class=\"h-input-item\">
            <div class=\"h-input-group\">
                <label class=\"h-input-lable\">应用数量</label>
                <div class=\"h-input-inline\">
                    <input type=\"text\" name=\"limit_app_num\" value=\"\" placeholder=\"请输入应用\" class=\"h-input-ing\" />
                </div>
            </div>
        </div>
        <div class=\"h-input-item\">
            <div class=\"h-input-group\">
                <label class=\"h-input-lable\">使用状态</label>
                <div class=\"h-input-inline\" style=\"background: #FFFFFF;\">
                    <div class=\"xui-select2\" name=\"status\" value=\"\"  style=\"width: 200px;\">
                        <div class=\"xui-arrow\"></div>
                        <ul class=\"xui-select2-option\" style=\"display: none;\">
                            <li value=\"1\">使用中</li>
                            <li value=\"0\">已暂停</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type=\"text/html\" id=\"actions\">
    ";
        // line 112
        echo "    <button class=\"btn btn-green btn-xs edit_btn\" lay-event=\"edit\" value=\"";
        echo "{{d.id}}";
        echo "\" limit_app_num=\"";
        echo "{{d.app_count}}";
        echo "\" use_status=\"";
        echo "{{d.status}}";
        echo "\">修改</button>
</script>

<script type=\"text/javascript\">
    var use_statuses = ['已暂停','使用中'];
    var service_statuses = ['维护','正常'];
    var columns = [[
        {\"field\": \"id\", \"title\": \"服务ID\"},
        {\"field\": \"name\", \"title\": \"服务名称\"},
        {\"field\": \"limit_app_num\", \"title\": \"可创建应用数量\"},
        {\"field\": \"app_count\", \"title\": \"已申请应用\"},
        {\"field\": \"service_status\", \"title\": \"服务状态\", templet: function(d){
                return service_statuses[d.service_status]
            }},
        {\"field\": \"status\", \"title\": \"使用状态\", templet: function(d){
                return use_statuses[d.status]
            }},
        {\"field\": \"actions\", \"title\": \"操作\",\"toolbar\": \"#actions\"}
    ]];

    function get_data() {
        var url    = '";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_open_platform_services");
        echo "';
        var params = '?' + \$('form#service_list').serialize();
        url        +=  params;
        rander_table('#paged-table', url, columns);
    }

    layui.use('table', function(){
        // 初始化
        get_data();

        //监听工具条
        layui.table.on('tool(test)', function(obj){ //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
            var data = obj.data; //获得当前行数据
            var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）

            if(layEvent === 'edit'){ //编辑
                //do something
                var obj = \$('#dialog');
                var url = '";
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_open_platform_services_edit");
        echo "';

                obj.find('input[name=\"limit_app_num\"]').val(data.limit_app_num);
                obj.find('input[name=\"status\"]').val(data.status);
                obj.find('div[name=\"status\"]').find('span').text(use_statuses[data.status]);

                layer.open({
                    type: 1,
                    title:'修改用户id='+'";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 159, $this->source); })()), "html", null, true);
        echo "'+'的服务',
                    area:['400px','400px'],
                    content: \$('#dialog'),
                    btn: ['确定', '取消'],
                    yes: function(index) {

                        var args = {};
                        var loading = null;
                        args.id = '";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 167, $this->source); })()), "html", null, true);
        echo "';
                        args.status = obj.find('input[name=\"status\"]').val();
                        args.limit_app_num = obj.find('input[name=\"limit_app_num\"]').val();
                        args.service_id = data.id;

                        /*var before = function(){
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
                        ajaxRequest.ajaxRequest(url,'POST',args,'json',success,before,error);*/
                        \$.post(url,args,function (res) {
                            if(res.status){
                                layer.close(index);
                                layer.msg('修改成功',{time:1000},function () {
                                    location.reload();
                                });
                            }else{
                                layer.alert(res.msg);
                            }
                        },'json');
                    }
                });
            }
        });
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
        return "Admin/UserDetail/OpenPlatform/services.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 167,  208 => 159,  197 => 151,  176 => 133,  147 => 112,  66 => 33,  62 => 32,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>基本管理-Ta的财务-交易记录</title>
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
    <script src=\"/assets/admin/js/jquery.min.js\"></script>
    <link href=\"/assets/admin/h/css/bootstrap.min14ed.css?v=3.3.6\" rel=\"stylesheet\">
    <script src=\"/assets/admin/h/js/jquery.min.js?v=2.1.4\"></script>
    <link href=\"/assets/admin/h/css/style.min862f.css?v=4.1.0\" rel=\"stylesheet\">

    <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
    <script src=\"/assets/admin/js/common.js\"></script>
    <script src=\"/assets/common/js/ajaxRequest.js\"></script>
    <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>

    <script src=\"/assets/admin/h/js/plugins/layer/laydate/laydate.js\"></script>

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
        <form id=\"service_list\" action=\"\" method=\"get\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('admin_user_details_open_platform_services') }}\">
            <input type=\"hidden\" name=\"id\" value=\"{{ id }}\">
            <div class=\"h-form-input\">
                <div class=\"h-input-group\">
                    <label class=\"h-input-lable\">服务名称</label>
                    <div class=\"h-input-inline\">
                        <input type=\"text\" name=\"service_name\" placeholder=\"请输入服务名称\" class=\"h-input-ing\" />
                    </div>
                </div>
                <div class=\"h-input-group\">
                    <label class=\"h-input-lable\">服务状态</label>
                    <div class=\"h-input-inline\" style=\"background: #FFFFFF;\">
                        <div class=\"xui-select2\" name=\"service_status\" value=\"\"  style=\"width: 200px;\">
                            <div class=\"xui-arrow\"></div>
                            <ul class=\"xui-select2-option\" style=\"display: none;\">
                                <li value=\"all\">全部</li>
                                <li value=\"1\">正常</li>
                                <li value=\"0\">维护</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"h-input-group\">
                    <label class=\"h-input-lable\">使用状态</label>
                    <div class=\"h-input-inline\" style=\"background: #FFFFFF;\">
                        <div class=\"xui-select2\" name=\"use_status\" value=\"\"  style=\"width: 200px;\">
                            <div class=\"xui-arrow\"></div>
                            <ul class=\"xui-select2-option\" style=\"display: none;\">
                                <li value=\"all\" >全部</li>
                                <li value=\"1\">使用中</li>
                                <li value=\"0\">已暂停</li>
                            </ul>
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
<div id=\"dialog\" style=\"display: none;\">
    <div class=\"h-form-input\">
        <div class=\"h-input-item\">
            <div class=\"h-input-group\">
                <label class=\"h-input-lable\">应用数量</label>
                <div class=\"h-input-inline\">
                    <input type=\"text\" name=\"limit_app_num\" value=\"\" placeholder=\"请输入应用\" class=\"h-input-ing\" />
                </div>
            </div>
        </div>
        <div class=\"h-input-item\">
            <div class=\"h-input-group\">
                <label class=\"h-input-lable\">使用状态</label>
                <div class=\"h-input-inline\" style=\"background: #FFFFFF;\">
                    <div class=\"xui-select2\" name=\"status\" value=\"\"  style=\"width: 200px;\">
                        <div class=\"xui-arrow\"></div>
                        <ul class=\"xui-select2-option\" style=\"display: none;\">
                            <li value=\"1\">使用中</li>
                            <li value=\"0\">已暂停</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type=\"text/html\" id=\"actions\">
    {#<a class=\"layui-btn layui-btn-xs edit_btn\" lay-event=\"edit\">修改</a>#}
    <button class=\"btn btn-green btn-xs edit_btn\" lay-event=\"edit\" value=\"{% verbatim %}{{d.id}}{% endverbatim %}\" limit_app_num=\"{% verbatim %}{{d.app_count}}{% endverbatim %}\" use_status=\"{% verbatim %}{{d.status}}{% endverbatim %}\">修改</button>
</script>

<script type=\"text/javascript\">
    var use_statuses = ['已暂停','使用中'];
    var service_statuses = ['维护','正常'];
    var columns = [[
        {\"field\": \"id\", \"title\": \"服务ID\"},
        {\"field\": \"name\", \"title\": \"服务名称\"},
        {\"field\": \"limit_app_num\", \"title\": \"可创建应用数量\"},
        {\"field\": \"app_count\", \"title\": \"已申请应用\"},
        {\"field\": \"service_status\", \"title\": \"服务状态\", templet: function(d){
                return service_statuses[d.service_status]
            }},
        {\"field\": \"status\", \"title\": \"使用状态\", templet: function(d){
                return use_statuses[d.status]
            }},
        {\"field\": \"actions\", \"title\": \"操作\",\"toolbar\": \"#actions\"}
    ]];

    function get_data() {
        var url    = '{{ path('admin_user_details_open_platform_services') }}';
        var params = '?' + \$('form#service_list').serialize();
        url        +=  params;
        rander_table('#paged-table', url, columns);
    }

    layui.use('table', function(){
        // 初始化
        get_data();

        //监听工具条
        layui.table.on('tool(test)', function(obj){ //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
            var data = obj.data; //获得当前行数据
            var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）

            if(layEvent === 'edit'){ //编辑
                //do something
                var obj = \$('#dialog');
                var url = '{{ path('admin_user_details_open_platform_services_edit') }}';

                obj.find('input[name=\"limit_app_num\"]').val(data.limit_app_num);
                obj.find('input[name=\"status\"]').val(data.status);
                obj.find('div[name=\"status\"]').find('span').text(use_statuses[data.status]);

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
                        args.limit_app_num = obj.find('input[name=\"limit_app_num\"]').val();
                        args.service_id = data.id;

                        /*var before = function(){
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
                        ajaxRequest.ajaxRequest(url,'POST',args,'json',success,before,error);*/
                        \$.post(url,args,function (res) {
                            if(res.status){
                                layer.close(index);
                                layer.msg('修改成功',{time:1000},function () {
                                    location.reload();
                                });
                            }else{
                                layer.alert(res.msg);
                            }
                        },'json');
                    }
                });
            }
        });
    })

</script>
</body>
</html>
", "Admin/UserDetail/OpenPlatform/services.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\UserDetail\\OpenPlatform\\services.twig");
    }
}
