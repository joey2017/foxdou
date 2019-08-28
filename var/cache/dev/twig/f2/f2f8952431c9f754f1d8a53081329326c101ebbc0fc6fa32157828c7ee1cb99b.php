<?php

/* /Supplier/Orders/order_list_js.twig */
class __TwigTemplate_875ff3f37eb4d35f2912dd39c7e8294e6a1d8554dd555f4d36e28b4ecff0bc00 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Supplier/Orders/order_list_js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Supplier/Orders/order_list_js.twig"));

        // line 1
        echo "<script type=\"text/html\" id=\"actions\">
";
        // line 12
        echo "

  <%# if(d.recharge_status != 9 && d.recharge_status != 10 && d.recharge_status != 11 && d.recharge_status != 14 && d.settle_status == 1) { %>
    <a class=\"layui-btn layui-btn-xs\" lay-event=\"mark_succeed\">置成功</a>
  <%#  } %>

  <%# if((d.recharge_status != 11 && d.recharge_status != 12 && d.recharge_status != 13 && d.recharge_status != 14 && (d.settle_status == 1 || d.settle_status == 9 || d.settle_status == 4 || d.settle_status == 6 || d.settle_status == 10))) { %>
    <a class=\"layui-btn layui-btn-xs\" lay-event=\"mark_failed\">置失败</a>
  <%#  } %>

";
        echo "
</script>

<script>
    var url = \"\";

    //SUP订单充值状态
    var recharge_statuses = JSON.parse('";
        // line 19
        echo json_encode(twig_constant("App\\Common\\Model\\Order\\OrderRechargeSup::RECHARGE_STATUS"));
        echo "');
    var show_supplier_recharge_statuses = JSON.parse('";
        // line 20
        echo json_encode(twig_constant("App\\Common\\Model\\Order\\OrderRechargeSup::SHOW_SUPPLIER_RECHARGE_STATUS"));
        echo "');
    //SUP订单结算状态
    var settle_statuses = JSON.parse('";
        // line 22
        echo json_encode(twig_constant("App\\Common\\Model\\Order\\OrderRechargeSup::SETTLE_STATUS"));
        echo "');
    var show_supplier_settle_statuses = JSON.parse('";
        // line 23
        echo json_encode(twig_constant("App\\Common\\Model\\Order\\OrderRechargeSup::SHOW_SUPPLIER_SETTLE_STATUS"));
        echo "');

    var columns = [[
        {\"field\": \"\", \"title\": \"\", type: \"checkbox\", \"width\": 50},
        {\"field\": \"id\", \"title\": \"订单编号\", \"width\": 300},
        {\"field\": \"info\", \"title\": \"充值信息\", \"width\": 150, templet: function(d){
                return '号码：'+ d.phone_number + '<br>地区：' + d.province_name + '-' + d.city_name + '<br>充值金额：' + d.recharge_amount;
            }},
        {\"field\": \"sup_user_name\", \"title\": \"匹配货源\", \"width\": 100, templet: function(d){
                return d.sup_user_name + '<br>' + d.source_id + '<br>面值：' + d.source_mianzi + '<br>成本：' + d.sup_cost + '<br>数量' + d.source_buy_num;
            }},
        {\"field\": \"template_name\", \"title\": \"货源来源\", \"width\": 200, templet: function(d){
                return d.mobile + '<br>' + d.template_name + '<br>' + d.template_id;
            }},
        {\"field\": \"source_mianzi\", \"title\": \"SUP订单金额\", \"width\": 100},
        {\"field\": \"recharge_status\", \"title\": \"充值状态\", \"width\": 150, templet: function (d) {
                var recharge = '';
                if (recharge_statuses && d.recharge_status) {
                    if (show_supplier_recharge_statuses[recharge_statuses[d.recharge_status]]){
                        recharge = show_supplier_recharge_statuses[recharge_statuses[d.recharge_status]];
                    } else {
                        recharge = recharge_statuses[d.recharge_status];
                    }
                }
                return recharge;
            }},
        {\"field\": \"settle_status\", \"title\": \"结算状态\", \"width\": 150, templet: function (d) {
                var settle = '';
                if (settle_statuses && d.settle_status) {
                    if (show_supplier_settle_statuses[settle_statuses[d.settle_status]]){
                        settle = show_supplier_settle_statuses[settle_statuses[d.settle_status]];
                    } else {
                        settle = settle_statuses[d.settle_status];
                    }
                }
                return settle;
            }},
        {\"field\": \"add_time\", \"title\": \"时间节点\", \"width\": 200, templet: function (d) {
                return '创建时间：' + d.add_time + '<br>支付时间：' + d.pay_time + '<br>完成时间：' + d.end_time;
            }},
        {\"field\": \"note\", \"title\": \"备注\", \"width\": 200},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\", \"width\": 200}
    ]
    ];

    form.render();
    get_data();
    function get_data() {
        var params = \$('form#order-recharge-sup').serialize();
        url        = '?' + params;
        rander_table('#order-table', url, columns);
    }

    var order_ids = [];
    table.on('checkbox(order-table)', function(obj){
        if (obj.checked) {
            order_ids.push(obj.data.id);
        } else {
            order_ids.remove(obj.data.id);
        }

    });

    // 更新订单统计
    setInterval(function(){
        var url = '";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_orders_get_order_mark_total");
        echo "';
        var args = {'product_cate_id':'";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["product_cate_id"]) || array_key_exists("product_cate_id", $context) ? $context["product_cate_id"] : (function () { throw new Twig_Error_Runtime('Variable "product_cate_id" does not exist.', 89, $this->source); })()), "html", null, true);
        echo "'};
        var success = function(res) {
            if (res) {
                \$('#order_mark').find('li').each(function(){
                    var that = this;
                    \$.each(res,function(i,v){
                        if (i * 1 == \$(that).attr('data-mark') * 1) {
                            \$(that).find('span').text(v);
                        }
                    })
                })
            } else {
                nxwd.showMsg('获取订单统计失败','danger')
            }
        }
        nxwd.ajaxRequest(url,'POST',args,'json',success);
        getOrderTypeTotal();
    },60000);

    // 订单分类统计
    function getOrderTypeTotal(){
        var success = function(res){
            if (res.status) {
                var data = res.data.suppliers;
                \$('#layui-nav-tree').find('a').each(function(){
                    for (var i in data) {
                        if (i == \$(this).data('id')) {
                            \$(this).find('span').text(data[i]);
                        }
                    }
                })
            } else {
                console.log('订单分类统计信息获取错误');
            }
        }
        nxwd.ajaxRequest('";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_orders_get_recharge_order_type_total");
        echo "','POST',{},'json',success);
    }

    \$('#recharge_order_sup').on('click',function(e){
        var target = \$(e.target);
        if (target.is('#order_mark li') || target.parents().is('#order_mark li')) {
            var v = target.attr('data-mark');
            \$('input[name=order_mark]').val(v);
            get_data();
        } else if (target.is('.reverse-select') || target.parents().is('.reverse-select')) {
            \$('.layui-table-box').find('input:checkbox').next().each(function () {
                \$(this).toggleClass('layui-form-checked');
            })
        } else if (target.is('.site-demo-layer') || target.parents().is('.site-demo-layer')) {
            orderOperation('";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_orders_edit_status_sup");
        echo "',order_ids,target.attr('data-type'))
        }
    });

    // 表格操作
    table.on('tool(order-table)', function(obj){ //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
        var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）
        var data = obj.data;
        if(layEvent === 'mark_succeed'){ //置成功
            orderOperation('";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_orders_edit_status_sup");
        echo "',data.id,10);
        }

        if(layEvent === 'mark_failed'){ //置失败
            orderOperation('";
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_orders_edit_status_sup");
        echo "',data.id,13);
        }

    });

    /**
     * 置成功/失败
     * @param url           // 请求url
     * @param id            // 项目ID
     * @param status        // 成功或失败
     */
    function orderOperation(url, id, status) {

        if (id === '' || typeof id == 'undefined' || id == null) {
            nxwd.showMsg('项目id不能为空');
            return false;
        }

        if (status === '') {
            nxwd.showMsg('参数有误');
            return false;
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

        var ok = layer.confirm('您确定要执行该操作吗？', {icon: 3, title: '系统提示'}, function () {
            layer.close(ok);
            nxwd.ajaxRequest(url, 'POST', {id: id, status: status}, 'json', success, before, error);
        });
    }

</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/Supplier/Orders/order_list_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 151,  204 => 147,  192 => 138,  175 => 124,  137 => 89,  133 => 88,  65 => 23,  61 => 22,  56 => 20,  52 => 19,  32 => 12,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/html\" id=\"actions\">
{% verbatim %}

  <%# if(d.recharge_status != 9 && d.recharge_status != 10 && d.recharge_status != 11 && d.recharge_status != 14 && d.settle_status == 1) { %>
    <a class=\"layui-btn layui-btn-xs\" lay-event=\"mark_succeed\">置成功</a>
  <%#  } %>

  <%# if((d.recharge_status != 11 && d.recharge_status != 12 && d.recharge_status != 13 && d.recharge_status != 14 && (d.settle_status == 1 || d.settle_status == 9 || d.settle_status == 4 || d.settle_status == 6 || d.settle_status == 10))) { %>
    <a class=\"layui-btn layui-btn-xs\" lay-event=\"mark_failed\">置失败</a>
  <%#  } %>

{% endverbatim %}
</script>

<script>
    var url = \"\";

    //SUP订单充值状态
    var recharge_statuses = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Order\\\\OrderRechargeSup::RECHARGE_STATUS\")|json_encode|raw }}');
    var show_supplier_recharge_statuses = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Order\\\\OrderRechargeSup::SHOW_SUPPLIER_RECHARGE_STATUS\")|json_encode|raw }}');
    //SUP订单结算状态
    var settle_statuses = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Order\\\\OrderRechargeSup::SETTLE_STATUS\")|json_encode|raw }}');
    var show_supplier_settle_statuses = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Order\\\\OrderRechargeSup::SHOW_SUPPLIER_SETTLE_STATUS\")|json_encode|raw }}');

    var columns = [[
        {\"field\": \"\", \"title\": \"\", type: \"checkbox\", \"width\": 50},
        {\"field\": \"id\", \"title\": \"订单编号\", \"width\": 300},
        {\"field\": \"info\", \"title\": \"充值信息\", \"width\": 150, templet: function(d){
                return '号码：'+ d.phone_number + '<br>地区：' + d.province_name + '-' + d.city_name + '<br>充值金额：' + d.recharge_amount;
            }},
        {\"field\": \"sup_user_name\", \"title\": \"匹配货源\", \"width\": 100, templet: function(d){
                return d.sup_user_name + '<br>' + d.source_id + '<br>面值：' + d.source_mianzi + '<br>成本：' + d.sup_cost + '<br>数量' + d.source_buy_num;
            }},
        {\"field\": \"template_name\", \"title\": \"货源来源\", \"width\": 200, templet: function(d){
                return d.mobile + '<br>' + d.template_name + '<br>' + d.template_id;
            }},
        {\"field\": \"source_mianzi\", \"title\": \"SUP订单金额\", \"width\": 100},
        {\"field\": \"recharge_status\", \"title\": \"充值状态\", \"width\": 150, templet: function (d) {
                var recharge = '';
                if (recharge_statuses && d.recharge_status) {
                    if (show_supplier_recharge_statuses[recharge_statuses[d.recharge_status]]){
                        recharge = show_supplier_recharge_statuses[recharge_statuses[d.recharge_status]];
                    } else {
                        recharge = recharge_statuses[d.recharge_status];
                    }
                }
                return recharge;
            }},
        {\"field\": \"settle_status\", \"title\": \"结算状态\", \"width\": 150, templet: function (d) {
                var settle = '';
                if (settle_statuses && d.settle_status) {
                    if (show_supplier_settle_statuses[settle_statuses[d.settle_status]]){
                        settle = show_supplier_settle_statuses[settle_statuses[d.settle_status]];
                    } else {
                        settle = settle_statuses[d.settle_status];
                    }
                }
                return settle;
            }},
        {\"field\": \"add_time\", \"title\": \"时间节点\", \"width\": 200, templet: function (d) {
                return '创建时间：' + d.add_time + '<br>支付时间：' + d.pay_time + '<br>完成时间：' + d.end_time;
            }},
        {\"field\": \"note\", \"title\": \"备注\", \"width\": 200},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\", \"width\": 200}
    ]
    ];

    form.render();
    get_data();
    function get_data() {
        var params = \$('form#order-recharge-sup').serialize();
        url        = '?' + params;
        rander_table('#order-table', url, columns);
    }

    var order_ids = [];
    table.on('checkbox(order-table)', function(obj){
        if (obj.checked) {
            order_ids.push(obj.data.id);
        } else {
            order_ids.remove(obj.data.id);
        }

    });

    // 更新订单统计
    setInterval(function(){
        var url = '{{ path(\"supplier_orders_get_order_mark_total\") }}';
        var args = {'product_cate_id':'{{ product_cate_id }}'};
        var success = function(res) {
            if (res) {
                \$('#order_mark').find('li').each(function(){
                    var that = this;
                    \$.each(res,function(i,v){
                        if (i * 1 == \$(that).attr('data-mark') * 1) {
                            \$(that).find('span').text(v);
                        }
                    })
                })
            } else {
                nxwd.showMsg('获取订单统计失败','danger')
            }
        }
        nxwd.ajaxRequest(url,'POST',args,'json',success);
        getOrderTypeTotal();
    },60000);

    // 订单分类统计
    function getOrderTypeTotal(){
        var success = function(res){
            if (res.status) {
                var data = res.data.suppliers;
                \$('#layui-nav-tree').find('a').each(function(){
                    for (var i in data) {
                        if (i == \$(this).data('id')) {
                            \$(this).find('span').text(data[i]);
                        }
                    }
                })
            } else {
                console.log('订单分类统计信息获取错误');
            }
        }
        nxwd.ajaxRequest('{{ path(\"supplier_orders_get_recharge_order_type_total\") }}','POST',{},'json',success);
    }

    \$('#recharge_order_sup').on('click',function(e){
        var target = \$(e.target);
        if (target.is('#order_mark li') || target.parents().is('#order_mark li')) {
            var v = target.attr('data-mark');
            \$('input[name=order_mark]').val(v);
            get_data();
        } else if (target.is('.reverse-select') || target.parents().is('.reverse-select')) {
            \$('.layui-table-box').find('input:checkbox').next().each(function () {
                \$(this).toggleClass('layui-form-checked');
            })
        } else if (target.is('.site-demo-layer') || target.parents().is('.site-demo-layer')) {
            orderOperation('{{ path(\"supplier_orders_edit_status_sup\") }}',order_ids,target.attr('data-type'))
        }
    });

    // 表格操作
    table.on('tool(order-table)', function(obj){ //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
        var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）
        var data = obj.data;
        if(layEvent === 'mark_succeed'){ //置成功
            orderOperation('{{ path(\"supplier_orders_edit_status_sup\") }}',data.id,10);
        }

        if(layEvent === 'mark_failed'){ //置失败
            orderOperation('{{ path(\"supplier_orders_edit_status_sup\") }}',data.id,13);
        }

    });

    /**
     * 置成功/失败
     * @param url           // 请求url
     * @param id            // 项目ID
     * @param status        // 成功或失败
     */
    function orderOperation(url, id, status) {

        if (id === '' || typeof id == 'undefined' || id == null) {
            nxwd.showMsg('项目id不能为空');
            return false;
        }

        if (status === '') {
            nxwd.showMsg('参数有误');
            return false;
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

        var ok = layer.confirm('您确定要执行该操作吗？', {icon: 3, title: '系统提示'}, function () {
            layer.close(ok);
            nxwd.ajaxRequest(url, 'POST', {id: id, status: status}, 'json', success, before, error);
        });
    }

</script>
", "/Supplier/Orders/order_list_js.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Supplier\\Orders\\order_list_js.twig");
    }
}
