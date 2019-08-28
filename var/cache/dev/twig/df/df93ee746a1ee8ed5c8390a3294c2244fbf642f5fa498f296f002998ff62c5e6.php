<?php

/* /Admin/Order/supplier_recharge_js.twig */
class __TwigTemplate_81d69fefdebb6292c0fd1a010d8191e2c033ecd6507539a8f9344b4f53705def extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Admin/Order/supplier_recharge_js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Admin/Order/supplier_recharge_js.twig"));

        // line 1
        echo "<script type=\"text/html\" id=\"actions\">
";
        // line 18
        echo "
  {{#  if(d.order_status == 4 || d.order_status == 5){ }}
    <a class=\"layui-btn layui-btn-xs\" lay-event=\"view\">查询余额</a>
  {{#  } }}

  {{# if(d.order_status == 1 || d.order_status == 3) { }}
    <a class=\"layui-btn layui-btn-xs\" lay-event=\"mark_succeed\">置成功</a>
  {{#  } }}

  {{# if(d.order_status != 3 || d.order_status != 7) { }}
    <a class=\"layui-btn layui-btn-xs\" lay-event=\"mark_failed\">置失败</a>
  {{#  } }}

  {{# if(d.order_status != 3 || d.order_status != 7) { }}
    <a class=\"layui-btn layui-btn-xs\" lay-event=\"mark_failed\">查看关联主订单</a>
  {{#  } }}
";
        echo "
</script>

<script>
    var url = \"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_suppliers");
        echo "\";

    var columns = [[
        {\"field\": \"\", \"title\": \"\", type: \"checkbox\", \"width\": 50},
        {\"field\": \"id\", \"title\": \"SUP订单编号\", \"width\": 300, templet: function(d){
                return d.id + '<br><a href=\"\">主订单编号</a>';
            }},
        {\"field\": \"info\", \"title\": \"充值信息\", \"width\": 150, templet: function(d){
                return '号码：'+ d.phone_number + '<br>地区：' + d.province_name + '-' + d.city_name + '<br>充值金额：' + d.recharge_amount + '<br><a href=\"\">查询余额</a>' + '<br><a href=\"\">查询记录</a>';
            }},
        {\"field\": \"sup_user_name\", \"title\": \"匹配货源\", \"width\": 100, templet: function(d){
                return d.sup_user_name + '<br>' + d.source_id + '<br>面值：' + d.source_mianzi + '<br>成本：' + d.sup_cost + '<br>数量' + d.source_buy_num;
            }},
        {\"field\": \"template_name\", \"title\": \"货源来源\", \"width\": 200, templet: function(d){
                return d.mobile + '<br>' + d.template_name + '<br>' + d.template_id;
            }},
        {\"field\": \"source_mianzi\", \"title\": \"SUP订单金额\", \"width\": 100},
        {\"field\": \"recharge_status\", \"title\": \"充值状态\", \"width\": 150, templet: function (d) {
                return recharge_statuses && d.recharge_status ? recharge_statuses[d.recharge_status] : '';
            }},
        {\"field\": \"settle_status\", \"title\": \"结算状态\", \"width\": 150, templet: function (d) {
                return settle_statuses && d.settle_status ? settle_statuses[d.settle_status] : '';
            }},
        {\"field\": \"add_time\", \"title\": \"时间节点\", \"width\": 200, templet: function (d) {
                return '创建时间：' + d.add_time + '<br>支付时间：' + d.pay_time + '<br>完成时间：' + d.end_time;
            }},
        {\"field\": \"note\", \"title\": \"备注\", \"width\": 200},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\", \"width\": 200}
    ]
    ];

    get_data();
    function get_data() {
        var params = \$('form').serialize();
        url        = '?' + params;
        rander_table('#order-table', url, columns);
    }

    // 下拉框初始化
    layui.use(['form'], function() {
        var form = layui.form;
        form.render();
    });

    \$('#recharge_order_sup').on('click',function(e){
        var target = \$(e.target);
        if (target.is('.reverse-select') || target.parents().is('.reverse-select')) {
            \$('.layui-table-box').find('input:checkbox').next().each(function () {
                \$(this).toggleClass('layui-form-checked');
            })
        } else if (target.is('.site-demo-layer') || target.parents().is('.site-demo-layer')) {

            var active = {
                setSuccess: function(){
                    //按钮【确定】的回调
                    confirmAction('";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_edit_status_sup");
        echo "',11,'setSuccessDome','type_success','置成功确认',460,270);

                },
                setFailure: function(){
                    //按钮【确定】的回调
                    confirmAction('";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_edit_status_sup");
        echo "',14,'setFailureDome','type_fail','置失败确认',0,0);
                },
                settlement: function(){
                    var yes = function(index){
                        //按钮【确定】的回调

                        var args = getPostArgs();
                        if (false === args) {
                            return;
                        }

                        layer.close(index);
                        \$('#settlementDome').hide();

                        nxwd.ajaxRequest('";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_settlement_sup");
        echo "','POST',args,'json',success,before,error);
                    }

                    layerShowView('结算确认','settlementDome',yes,'',370,170)
                },
            };

            var posttype = target.data('type');
            active[posttype] ? active[posttype].call(this) : '';

        }
    });

    // 表格操作
    table.on('tool(order-table)', function(obj){ //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
        var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）
        var data = obj.data;
        if(layEvent === 'mark_succeed'){ //置成功
            confirmAction('";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_edit_status_sup");
        echo "',6,'setSuccessDome','type_success','置成功确认',460,270);
        }

        if(layEvent === 'mark_failed'){ //置失败
            confirmAction('";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_edit_status_sup");
        echo "',7,'setFailureDome','type_fail','置失败确认',0,0);
        }

    });

</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/Admin/Order/supplier_recharge_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 118,  159 => 114,  138 => 96,  121 => 82,  113 => 77,  55 => 22,  32 => 18,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/html\" id=\"actions\">
{% verbatim %}
  {{#  if(d.order_status == 4 || d.order_status == 5){ }}
    <a class=\"layui-btn layui-btn-xs\" lay-event=\"view\">查询余额</a>
  {{#  } }}

  {{# if(d.order_status == 1 || d.order_status == 3) { }}
    <a class=\"layui-btn layui-btn-xs\" lay-event=\"mark_succeed\">置成功</a>
  {{#  } }}

  {{# if(d.order_status != 3 || d.order_status != 7) { }}
    <a class=\"layui-btn layui-btn-xs\" lay-event=\"mark_failed\">置失败</a>
  {{#  } }}

  {{# if(d.order_status != 3 || d.order_status != 7) { }}
    <a class=\"layui-btn layui-btn-xs\" lay-event=\"mark_failed\">查看关联主订单</a>
  {{#  } }}
{% endverbatim %}
</script>

<script>
    var url = \"{{ path('admin_orders_suppliers') }}\";

    var columns = [[
        {\"field\": \"\", \"title\": \"\", type: \"checkbox\", \"width\": 50},
        {\"field\": \"id\", \"title\": \"SUP订单编号\", \"width\": 300, templet: function(d){
                return d.id + '<br><a href=\"\">主订单编号</a>';
            }},
        {\"field\": \"info\", \"title\": \"充值信息\", \"width\": 150, templet: function(d){
                return '号码：'+ d.phone_number + '<br>地区：' + d.province_name + '-' + d.city_name + '<br>充值金额：' + d.recharge_amount + '<br><a href=\"\">查询余额</a>' + '<br><a href=\"\">查询记录</a>';
            }},
        {\"field\": \"sup_user_name\", \"title\": \"匹配货源\", \"width\": 100, templet: function(d){
                return d.sup_user_name + '<br>' + d.source_id + '<br>面值：' + d.source_mianzi + '<br>成本：' + d.sup_cost + '<br>数量' + d.source_buy_num;
            }},
        {\"field\": \"template_name\", \"title\": \"货源来源\", \"width\": 200, templet: function(d){
                return d.mobile + '<br>' + d.template_name + '<br>' + d.template_id;
            }},
        {\"field\": \"source_mianzi\", \"title\": \"SUP订单金额\", \"width\": 100},
        {\"field\": \"recharge_status\", \"title\": \"充值状态\", \"width\": 150, templet: function (d) {
                return recharge_statuses && d.recharge_status ? recharge_statuses[d.recharge_status] : '';
            }},
        {\"field\": \"settle_status\", \"title\": \"结算状态\", \"width\": 150, templet: function (d) {
                return settle_statuses && d.settle_status ? settle_statuses[d.settle_status] : '';
            }},
        {\"field\": \"add_time\", \"title\": \"时间节点\", \"width\": 200, templet: function (d) {
                return '创建时间：' + d.add_time + '<br>支付时间：' + d.pay_time + '<br>完成时间：' + d.end_time;
            }},
        {\"field\": \"note\", \"title\": \"备注\", \"width\": 200},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\", \"width\": 200}
    ]
    ];

    get_data();
    function get_data() {
        var params = \$('form').serialize();
        url        = '?' + params;
        rander_table('#order-table', url, columns);
    }

    // 下拉框初始化
    layui.use(['form'], function() {
        var form = layui.form;
        form.render();
    });

    \$('#recharge_order_sup').on('click',function(e){
        var target = \$(e.target);
        if (target.is('.reverse-select') || target.parents().is('.reverse-select')) {
            \$('.layui-table-box').find('input:checkbox').next().each(function () {
                \$(this).toggleClass('layui-form-checked');
            })
        } else if (target.is('.site-demo-layer') || target.parents().is('.site-demo-layer')) {

            var active = {
                setSuccess: function(){
                    //按钮【确定】的回调
                    confirmAction('{{ path(\"admin_orders_edit_status_sup\") }}',11,'setSuccessDome','type_success','置成功确认',460,270);

                },
                setFailure: function(){
                    //按钮【确定】的回调
                    confirmAction('{{ path(\"admin_orders_edit_status_sup\") }}',14,'setFailureDome','type_fail','置失败确认',0,0);
                },
                settlement: function(){
                    var yes = function(index){
                        //按钮【确定】的回调

                        var args = getPostArgs();
                        if (false === args) {
                            return;
                        }

                        layer.close(index);
                        \$('#settlementDome').hide();

                        nxwd.ajaxRequest('{{ path(\"admin_orders_settlement_sup\") }}','POST',args,'json',success,before,error);
                    }

                    layerShowView('结算确认','settlementDome',yes,'',370,170)
                },
            };

            var posttype = target.data('type');
            active[posttype] ? active[posttype].call(this) : '';

        }
    });

    // 表格操作
    table.on('tool(order-table)', function(obj){ //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
        var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）
        var data = obj.data;
        if(layEvent === 'mark_succeed'){ //置成功
            confirmAction('{{ path(\"admin_orders_edit_status_sup\") }}',6,'setSuccessDome','type_success','置成功确认',460,270);
        }

        if(layEvent === 'mark_failed'){ //置失败
            confirmAction('{{ path(\"admin_orders_edit_status_sup\") }}',7,'setFailureDome','type_fail','置失败确认',0,0);
        }

    });

</script>
", "/Admin/Order/supplier_recharge_js.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\Order\\supplier_recharge_js.twig");
    }
}
