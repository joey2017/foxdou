<?php

/* /Admin/Audit/product_supplies_js.twig */
class __TwigTemplate_62b60088d43cf2d7b287d272147a857a8545a8f39b74f33083fc062500f0ae9a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Admin/Audit/product_supplies_js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Admin/Audit/product_supplies_js.twig"));

        // line 1
        echo "<script>
    var face_value_types = JSON.parse('";
        // line 2
        echo json_encode(twig_constant("App\\Common\\Model\\Product\\ProductMobile::FACE_VALUE_TYPES"));
        echo "');
    var cate_ids = JSON.parse('";
        // line 3
        echo json_encode(twig_constant("App\\Constants::CARRIERS"));
        echo "');
    var speeds = JSON.parse('";
        // line 4
        echo json_encode(twig_constant("App\\Constants::RECHARGE_SPEED"));
        echo "');
    var sell_statuses = JSON.parse('";
        // line 5
        echo json_encode(twig_constant("App\\Common\\Model\\Product\\ProductMobileSource::SELL_STATUSES"));
        echo "');
    var statuses = JSON.parse('";
        // line 6
        echo json_encode(twig_constant("App\\Common\\Model\\Product\\ProductMobileSource::STATUSES"));
        echo "');
    var url = \"\";
    var columns = [[
        {\"field\": \"\", \"title\": \"\", type: \"checkbox\", \"width\": 50},
        {\"field\": \"id\", \"title\": \"申请记录编号\", \"width\": 150},
        {\"field\": \"pass\", \"title\": \"供应商通行证账号\", \"width\": 150},
        {\"field\": \"nick_name\", \"title\": \"供应商昵称\", \"width\": 150},
        {\"field\": \"t_name\", \"title\": \"供货模板\",\"width\": 100},
        {\"field\": \"product_name\", \"title\": \"商品名称\",\"width\": 200},
        {\"field\": \"face_value\", \"title\": \"面值\"},
        {
            \"field\": \"face_value_type\", \"title\": \"面值类型\", \"width\": 150, templet: function (d) {
                return face_value_types[d.face_value_type];
            }
        },
        {
            \"field\": \"province_name\", \"title\": \"商品适用范围\", \"width\": 150, templet: function(d){
                return d.province_name ? d.province_name : d.city_name;
            }
        },
        {
            \"field\": \"operator_id\", \"title\": \"运营商类别\", templet: function (d) {
                return cate_ids[d.operator_id];
            }
        },
        {
            \"field\": \"speed\", \"title\": \"快充/慢充\", templet: function (d) {
                return speeds[d.speed];
            }
        },
        {\"field\": \"source_price\", \"title\": \"供货价\", \"width\": 150},
        {
            \"field\": \"cost_percent\", \"title\": \"供货价/面值\", \"width\": 200, templet: function (d) {
                return d.source_price / d.face_value;
            }
        },
        {
            \"field\": \"sell_status\", \"title\": \"货源启用状态\", \"width\": 200, templet: function (d) {
                return sell_statuses[d.sell_status];
            }
        },
        {
            \"field\": \"status\", \"title\": \"货源审核状态\", \"width\": 200, templet: function (d) {
                return statuses[d.status];
            }
        },
        {\"field\": \"add_time\", \"title\": \"货源添加时间\", \"width\": 180, templet: \"#add_time\"},
        {\"field\": \"edit_time\", \"title\": \"审核时间\", templet: \"#edit_time\", \"width\": 180},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\", \"width\": 150}
    ]];

    if ('";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["product_cate_id"]) || array_key_exists("product_cate_id", $context) ? $context["product_cate_id"] : (function () { throw new Twig_Error_Runtime('Variable "product_cate_id" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "' == 3) {
        columns = [[
            {\"field\": \"\", \"title\": \"\", type: \"checkbox\", \"width\": 50},
            {\"field\": \"id\", \"title\": \"申请记录编号\", \"width\": 150},
            {\"field\": \"pass\", \"title\": \"供应商通行证账号\", \"width\": 150},
            {\"field\": \"nick_name\", \"title\": \"供应商昵称\", \"width\": 150},
            {\"field\": \"t_name\", \"title\": \"供货模板\",\"width\": 150},
            {\"field\": \"product_name\", \"title\": \"商品名称\",\"width\": 200},
            {\"field\": \"tencent_name\", \"title\": \"腾讯业务品类\",\"width\": 200},
            {\"field\": \"face_value\", \"title\": \"面值\"},
            {
                \"field\": \"face_value_type\", \"title\": \"面值类型\", \"width\": 150, templet: function (d) {
                    return face_value_types[d.face_value_type];
                }
            },
            {\"field\": \"source_price\", \"title\": \"供货价\", \"width\": 150},
            {
                \"field\": \"cost_percent\", \"title\": \"供货价/面值\", \"width\": 200, templet: function (d) {
                    return d.source_price / d.face_value;
                }
            },
            {
                \"field\": \"sell_status\", \"title\": \"货源启用状态\", \"width\": 200, templet: function (d) {
                    return sell_statuses[d.sell_status];
                }
            },
            {
                \"field\": \"status\", \"title\": \"货源审核状态\", \"width\": 200, templet: function (d) {
                    return statuses[d.status];
                }
            },
            {\"field\": \"add_time\", \"title\": \"货源添加时间\", \"width\": 180, templet: \"#add_time\"},
            {\"field\": \"edit_time\", \"title\": \"审核时间\", templet: \"#edit_time\", \"width\": 180},
            {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\", \"width\": 150}
        ]];
    }
    function get_data() {
        var params = \$('form#product-supplies-list').serialize();
        url = '?' + params + '&product_cate_id=' + '";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["product_cate_id"]) || array_key_exists("product_cate_id", $context) ? $context["product_cate_id"] : (function () { throw new Twig_Error_Runtime('Variable "product_cate_id" does not exist.', 95, $this->source); })()), "html", null, true);
        echo "';
        rander_table('#product-supplies-table', url, columns);
    }

    var loading = null;
    var before = function () {
        loading = layer.load();
    }
    var error = function () {
        layer.close(loading);
        nxwd.showMsg('服务器未响应，请稍后重试');
    }
    var success = function (res) {
        layer.close(loading);
        if (res.status) {
            nxwd.showMsg(res.msg, 'success');
            location.reload();
        } else {
            nxwd.showMsg(res.msg, 'danger');
        }
    }

    // 初始化
    get_data();
    table.on('tool(product-supplies-table)', function (obj) {
        var data = obj.data;
        var layEvent = obj.event;

        if (layEvent === 'review') { //审核
            var yes = function (index){
                layer.close(index);
                var args = {};
                args.product_cate_id = '";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["product_cate_id"]) || array_key_exists("product_cate_id", $context) ? $context["product_cate_id"] : (function () { throw new Twig_Error_Runtime('Variable "product_cate_id" does not exist.', 127, $this->source); })()), "html", null, true);
        echo "';
                args.id = data.id;
                args.status = \$(\"input[name=review_status]:checked\").val();
                nxwd.ajaxRequest('";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_product_review");
        echo "','POST',args,'json',success,before,error);
            }
            nxwd.ajaxOpenCallBack('货源审核','review-content','320px','220px',yes);
        }
        if (layEvent === 'delete') { //删除
            nxwd.ajaxDelete('";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_product_supplies_del");
        echo "?product_cate_id=";
        echo twig_escape_filter($this->env, (isset($context["product_cate_id"]) || array_key_exists("product_cate_id", $context) ? $context["product_cate_id"] : (function () { throw new Twig_Error_Runtime('Variable "product_cate_id" does not exist.', 135, $this->source); })()), "html", null, true);
        echo "',this,false,data.id);
        }
    });

    //运营商类别
    form.on('select(operator)', function(data){
        if (data.value == 4) {
            \$('#mvno-block').show();
        } else {
            \$('#mvno-block').hide();
        }
    });

    var checked_ids = [];
    table.on('checkbox(product-supplies-table)', function(obj){
        if (obj.checked) {
            checked_ids.push(obj.data.id);
        } else {
            checked_ids.remove(obj.data.id);
        }

    });

    \$(document).on('click',function(e){
        var target = \$(e.target);
        if (target.is('.reverse-select') || target.parents().is('.reverse-select')) {
            \$('.layui-table-box').find('input:checkbox').next().each(function () {
                \$(this).toggleClass('layui-form-checked');
            })
        } else if (target.is('.site-demo-layer') || target.parents().is('.site-demo-layer')) {
            var change_status = target.attr('data-status');
            var _that = e.target;
            var active = {
                setSuccess: function(){
                    productOperation('";
        // line 169
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_product_review");
        echo "','";
        echo twig_escape_filter($this->env, (isset($context["product_cate_id"]) || array_key_exists("product_cate_id", $context) ? $context["product_cate_id"] : (function () { throw new Twig_Error_Runtime('Variable "product_cate_id" does not exist.', 169, $this->source); })()), "html", null, true);
        echo "',checked_ids,1);
                },
                setFailure: function(){
                    productOperation('";
        // line 172
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_product_review");
        echo "','";
        echo twig_escape_filter($this->env, (isset($context["product_cate_id"]) || array_key_exists("product_cate_id", $context) ? $context["product_cate_id"] : (function () { throw new Twig_Error_Runtime('Variable "product_cate_id" does not exist.', 172, $this->source); })()), "html", null, true);
        echo "',checked_ids,4);
                },
                changeStatus: function(){
                    productOperation('";
        // line 175
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_product_change_status");
        echo "','";
        echo twig_escape_filter($this->env, (isset($context["product_cate_id"]) || array_key_exists("product_cate_id", $context) ? $context["product_cate_id"] : (function () { throw new Twig_Error_Runtime('Variable "product_cate_id" does not exist.', 175, $this->source); })()), "html", null, true);
        echo "',checked_ids,change_status);
                },
                delete: function(){
                    nxwd.ajaxDelete('";
        // line 178
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_product_supplies_del");
        echo "?product_cate_id=";
        echo twig_escape_filter($this->env, (isset($context["product_cate_id"]) || array_key_exists("product_cate_id", $context) ? $context["product_cate_id"] : (function () { throw new Twig_Error_Runtime('Variable "product_cate_id" does not exist.', 178, $this->source); })()), "html", null, true);
        echo "',_that,true);
                }

            };

            var posttype = target.data('type');
            active[posttype] ? active[posttype].call(this) : '';

        }
    });

    /**
     * 货源审核/启用/停用
     * @param url           // 请求url
     * @param id            // 项目ID
     * @param status        // 通过或不通过 1,4 | 停止或启用 0,1
     */
    function productOperation(url, product_cate_id, id, status) {

        if (id == '' || typeof id == 'undefined' || id == null) {
            nxwd.showMsg('项目id不能为空');
            return false;
        }

        if (status === '' || product_cate_id === '' || typeof product_cate_id == 'undefined' || product_cate_id == null) {
            nxwd.showMsg('参数有误');
            return false;
        }

        //var action = (status == 1 ? '审核通过' : '审核不通过');
        var ok = layer.confirm('您确定要执行该操作吗？', {icon: 3, title: '系统提示'}, function(){
            layer.close(ok);
            nxwd.ajaxRequest(url, 'POST', {product_cate_id: product_cate_id,id: id, status: status}, 'json', success, before, error);
        });
    }
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/Admin/Audit/product_supplies_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 178,  247 => 175,  239 => 172,  231 => 169,  192 => 135,  184 => 130,  178 => 127,  143 => 95,  102 => 57,  48 => 6,  44 => 5,  40 => 4,  36 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    var face_value_types = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Product\\\\ProductMobile::FACE_VALUE_TYPES\")|json_encode|raw }}');
    var cate_ids = JSON.parse('{{ constant(\"App\\\\Constants::CARRIERS\")|json_encode|raw }}');
    var speeds = JSON.parse('{{ constant(\"App\\\\Constants::RECHARGE_SPEED\")|json_encode|raw }}');
    var sell_statuses = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Product\\\\ProductMobileSource::SELL_STATUSES\")|json_encode|raw }}');
    var statuses = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Product\\\\ProductMobileSource::STATUSES\")|json_encode|raw }}');
    var url = \"\";
    var columns = [[
        {\"field\": \"\", \"title\": \"\", type: \"checkbox\", \"width\": 50},
        {\"field\": \"id\", \"title\": \"申请记录编号\", \"width\": 150},
        {\"field\": \"pass\", \"title\": \"供应商通行证账号\", \"width\": 150},
        {\"field\": \"nick_name\", \"title\": \"供应商昵称\", \"width\": 150},
        {\"field\": \"t_name\", \"title\": \"供货模板\",\"width\": 100},
        {\"field\": \"product_name\", \"title\": \"商品名称\",\"width\": 200},
        {\"field\": \"face_value\", \"title\": \"面值\"},
        {
            \"field\": \"face_value_type\", \"title\": \"面值类型\", \"width\": 150, templet: function (d) {
                return face_value_types[d.face_value_type];
            }
        },
        {
            \"field\": \"province_name\", \"title\": \"商品适用范围\", \"width\": 150, templet: function(d){
                return d.province_name ? d.province_name : d.city_name;
            }
        },
        {
            \"field\": \"operator_id\", \"title\": \"运营商类别\", templet: function (d) {
                return cate_ids[d.operator_id];
            }
        },
        {
            \"field\": \"speed\", \"title\": \"快充/慢充\", templet: function (d) {
                return speeds[d.speed];
            }
        },
        {\"field\": \"source_price\", \"title\": \"供货价\", \"width\": 150},
        {
            \"field\": \"cost_percent\", \"title\": \"供货价/面值\", \"width\": 200, templet: function (d) {
                return d.source_price / d.face_value;
            }
        },
        {
            \"field\": \"sell_status\", \"title\": \"货源启用状态\", \"width\": 200, templet: function (d) {
                return sell_statuses[d.sell_status];
            }
        },
        {
            \"field\": \"status\", \"title\": \"货源审核状态\", \"width\": 200, templet: function (d) {
                return statuses[d.status];
            }
        },
        {\"field\": \"add_time\", \"title\": \"货源添加时间\", \"width\": 180, templet: \"#add_time\"},
        {\"field\": \"edit_time\", \"title\": \"审核时间\", templet: \"#edit_time\", \"width\": 180},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\", \"width\": 150}
    ]];

    if ('{{ product_cate_id }}' == 3) {
        columns = [[
            {\"field\": \"\", \"title\": \"\", type: \"checkbox\", \"width\": 50},
            {\"field\": \"id\", \"title\": \"申请记录编号\", \"width\": 150},
            {\"field\": \"pass\", \"title\": \"供应商通行证账号\", \"width\": 150},
            {\"field\": \"nick_name\", \"title\": \"供应商昵称\", \"width\": 150},
            {\"field\": \"t_name\", \"title\": \"供货模板\",\"width\": 150},
            {\"field\": \"product_name\", \"title\": \"商品名称\",\"width\": 200},
            {\"field\": \"tencent_name\", \"title\": \"腾讯业务品类\",\"width\": 200},
            {\"field\": \"face_value\", \"title\": \"面值\"},
            {
                \"field\": \"face_value_type\", \"title\": \"面值类型\", \"width\": 150, templet: function (d) {
                    return face_value_types[d.face_value_type];
                }
            },
            {\"field\": \"source_price\", \"title\": \"供货价\", \"width\": 150},
            {
                \"field\": \"cost_percent\", \"title\": \"供货价/面值\", \"width\": 200, templet: function (d) {
                    return d.source_price / d.face_value;
                }
            },
            {
                \"field\": \"sell_status\", \"title\": \"货源启用状态\", \"width\": 200, templet: function (d) {
                    return sell_statuses[d.sell_status];
                }
            },
            {
                \"field\": \"status\", \"title\": \"货源审核状态\", \"width\": 200, templet: function (d) {
                    return statuses[d.status];
                }
            },
            {\"field\": \"add_time\", \"title\": \"货源添加时间\", \"width\": 180, templet: \"#add_time\"},
            {\"field\": \"edit_time\", \"title\": \"审核时间\", templet: \"#edit_time\", \"width\": 180},
            {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\", \"width\": 150}
        ]];
    }
    function get_data() {
        var params = \$('form#product-supplies-list').serialize();
        url = '?' + params + '&product_cate_id=' + '{{ product_cate_id }}';
        rander_table('#product-supplies-table', url, columns);
    }

    var loading = null;
    var before = function () {
        loading = layer.load();
    }
    var error = function () {
        layer.close(loading);
        nxwd.showMsg('服务器未响应，请稍后重试');
    }
    var success = function (res) {
        layer.close(loading);
        if (res.status) {
            nxwd.showMsg(res.msg, 'success');
            location.reload();
        } else {
            nxwd.showMsg(res.msg, 'danger');
        }
    }

    // 初始化
    get_data();
    table.on('tool(product-supplies-table)', function (obj) {
        var data = obj.data;
        var layEvent = obj.event;

        if (layEvent === 'review') { //审核
            var yes = function (index){
                layer.close(index);
                var args = {};
                args.product_cate_id = '{{ product_cate_id }}';
                args.id = data.id;
                args.status = \$(\"input[name=review_status]:checked\").val();
                nxwd.ajaxRequest('{{ path(\"admin_audit_product_review\") }}','POST',args,'json',success,before,error);
            }
            nxwd.ajaxOpenCallBack('货源审核','review-content','320px','220px',yes);
        }
        if (layEvent === 'delete') { //删除
            nxwd.ajaxDelete('{{ path(\"admin_audit_product_supplies_del\") }}?product_cate_id={{ product_cate_id }}',this,false,data.id);
        }
    });

    //运营商类别
    form.on('select(operator)', function(data){
        if (data.value == 4) {
            \$('#mvno-block').show();
        } else {
            \$('#mvno-block').hide();
        }
    });

    var checked_ids = [];
    table.on('checkbox(product-supplies-table)', function(obj){
        if (obj.checked) {
            checked_ids.push(obj.data.id);
        } else {
            checked_ids.remove(obj.data.id);
        }

    });

    \$(document).on('click',function(e){
        var target = \$(e.target);
        if (target.is('.reverse-select') || target.parents().is('.reverse-select')) {
            \$('.layui-table-box').find('input:checkbox').next().each(function () {
                \$(this).toggleClass('layui-form-checked');
            })
        } else if (target.is('.site-demo-layer') || target.parents().is('.site-demo-layer')) {
            var change_status = target.attr('data-status');
            var _that = e.target;
            var active = {
                setSuccess: function(){
                    productOperation('{{ path(\"admin_audit_product_review\") }}','{{ product_cate_id }}',checked_ids,1);
                },
                setFailure: function(){
                    productOperation('{{ path(\"admin_audit_product_review\") }}','{{ product_cate_id }}',checked_ids,4);
                },
                changeStatus: function(){
                    productOperation('{{ path(\"admin_audit_product_change_status\") }}','{{ product_cate_id }}',checked_ids,change_status);
                },
                delete: function(){
                    nxwd.ajaxDelete('{{ path(\"admin_audit_product_supplies_del\") }}?product_cate_id={{ product_cate_id }}',_that,true);
                }

            };

            var posttype = target.data('type');
            active[posttype] ? active[posttype].call(this) : '';

        }
    });

    /**
     * 货源审核/启用/停用
     * @param url           // 请求url
     * @param id            // 项目ID
     * @param status        // 通过或不通过 1,4 | 停止或启用 0,1
     */
    function productOperation(url, product_cate_id, id, status) {

        if (id == '' || typeof id == 'undefined' || id == null) {
            nxwd.showMsg('项目id不能为空');
            return false;
        }

        if (status === '' || product_cate_id === '' || typeof product_cate_id == 'undefined' || product_cate_id == null) {
            nxwd.showMsg('参数有误');
            return false;
        }

        //var action = (status == 1 ? '审核通过' : '审核不通过');
        var ok = layer.confirm('您确定要执行该操作吗？', {icon: 3, title: '系统提示'}, function(){
            layer.close(ok);
            nxwd.ajaxRequest(url, 'POST', {product_cate_id: product_cate_id,id: id, status: status}, 'json', success, before, error);
        });
    }
</script>
", "/Admin/Audit/product_supplies_js.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\Audit\\product_supplies_js.twig");
    }
}
