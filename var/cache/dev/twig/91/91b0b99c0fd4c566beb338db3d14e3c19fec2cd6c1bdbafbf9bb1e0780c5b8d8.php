<?php

/* /Admin/Order/recharge_js.twig */
class __TwigTemplate_cc9d96761b1a47d039c35b9a2dc510d3819d880a51a04fc9225b157de358e9c7 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Admin/Order/recharge_js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Admin/Order/recharge_js.twig"));

        // line 1
        echo "<script type=\"text/html\" id=\"actions\">
  ";
        // line 25
        echo "
    <div class=\"layui-table-cell laytable-cell-4-0-9\">

      {{# if(d.settlement_status == 1 && (d.order_status == 1 || d.order_status == 3 || d.order_status == 7)) { }}
        <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"mark_succeed\">置成功</a>
      {{#  } }}

      {{# if((d.settlement_status == 1 && d.order_status == 1) || (d.settlement_status == 1 && d.order_status == 2) || (d.settlement_status == 4 && d.order_status == 6)) { }}
        <a class=\"layui-btn layui-btn-danger layui-btn-xs\" lay-event=\"mark_failed\">置失败</a>
      {{#  } }}

      {{# if(d.order_status == 1 || d.order_status == 2 || d.order_status == 6) { }}
        <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"mark_again\">重新充值</a>
      {{#  } }}

      {{# if((d.order_status == 6 || d.order_status == 2) && d.settlement_status == 1) { }}
        <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"mark_balance\">查询余额</a>
      {{#  } }}

       {{# if((d.order_status == 7) && d.settlement_status == 1) { }}
        <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"mark_sup\">查看关联SUP订单</a>
      {{#  } }}
    </div>
    ";
        echo "
</script>
<script>
    //订单状态
    var order_statuses = JSON.parse('";
        // line 29
        echo json_encode(twig_constant("App\\Common\\Model\\Order\\OrderRecharge::STATUSES"));
        echo "');

    //用户结算状态
    var settlement_statuses = JSON.parse('";
        // line 32
        echo json_encode(twig_constant("App\\Common\\Model\\Order\\OrderRecharge::SETTLEMENT"));
        echo "');

    var platform = JSON.parse('";
        // line 34
        echo json_encode(twig_constant("App\\Platform::PLATFORMS"));
        echo "');

    var url = \"\";

    var columns = [[
        {\"field\": \"\", \"title\": \"\", type: \"checkbox\", \"width\": 50},
        {\"field\": \"id\", \"title\": \"主订单编号\", \"width\": 300},
        {\"field\": \"product_name\", \"title\": \"商品名称/编号\", \"width\": 200},
        {\"field\": \"sup_user_name\", \"title\": \"供应商\", \"width\": 100},
        {\"field\": \"template_name\", \"title\": \"供应模版\", \"width\": 200},
        {\"field\": \"source_id\", \"title\": \"货源编号\", \"width\": 100},
        {\"field\": \"product_face_value\", \"title\": \"商品面值\", \"width\": 150},
        {\"field\": \"sell_price\", \"title\": \"主订单销售价格\", \"width\": 150},
        {\"field\": \"sup_price\", \"title\": \"SUP货源价格\", \"width\": 150},
        {\"field\": \"recharge_amount\", \"title\": \"主订单金额\", \"width\": 150, templet: function(d){
                return d.sell_price*d.buy_num;
            }},
        {\"field\": \"recharge_amount\", \"title\": \"SUP订单金额\", \"width\": 150, templet: function(d){
                return d.sup_price*d.buy_num;
            }},

        {\"field\": \"profit\", \"title\": \"利润\", \"width\": 100},

        {\"field\": \"platform_id\", \"title\": \"主订单来源\", \"width\": 100, templet: function(d){
                return platform ? platform[d.platform_id-1] : '';
            }},
        {\"field\": \"nick_name\", \"title\": \"来源用户\", \"width\": 100},

        {\"field\": \"info\", \"title\": \"充值信息\", \"width\": 300, templet: function(d){
                return '号码：'+ d.phone_number + ' 地区：' + d.province_name + '-' + d.city_name;
            }},
        {\"field\": \"status\", \"title\": \"主订单状态\", \"width\": 200, templet: function(d){
                return order_statuses && d.order_status ? order_statuses[d.order_status] : '';
            }},

        {\"field\": \"recharge_status\", \"title\": \"SUP订单充值状态\", \"width\": 200, templet: function(d){
                return recharge_statuses && d.recharge_status ? recharge_statuses[d.recharge_status] : '';
            }},

        {\"field\": \"settlement_status\", \"title\": \"用户结算状态\", \"width\": 200, templet: function(d){
                return settlement_statuses && d.settlement_status ? settlement_statuses[d.settlement_status] : '';
            }},

        {\"field\": \"settle_status\", \"title\": \"SUP订单结算状态\", \"width\": 200, templet: function(d){
                return settle_statuses && d.settle_status ? settle_statuses[d.settle_status] : '';
            }},

        {\"field\": \"recharge_sequence\", \"title\": \"充值次数\", \"width\": 100},
        {\"field\": \"add_time\", \"title\": \"时间节点\", \"width\": 200, templet: function(d){
                return '创建时间：' + d.add_time + ' 结束时间：' + d.end_time;
            }},
        {\"field\": \"note\", \"title\": \"备注\", \"width\": 100},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\", \"width\": 200}
    ]
    ];

    get_data();
    function get_data() {
        var params = \$('form#order-recharge').serialize();
        url        = '?' + params;
        rander_table('#order-table', url, columns);
    }

    table.on('tool(order-table)', function(obj){ //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
        var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）
        var data = obj.data;
        if(layEvent === 'mark_succeed'){ //置成功
            confirmAction('";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_edit_status");
        echo "',6,'setSuccessDome','type_success','置成功确认',0,0,false,data.id);
        }

        if(layEvent === 'mark_failed'){ //置失败
            confirmAction('";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_edit_status");
        echo "',7,'setFailureDome','type_fail','置失败确认',0,0,false,data.id);
        }

        if(layEvent === 'mark_again') { //重新充值
            rechargeAgain(data.id,this);
        }

    });

    \$('#recharge_order').on('click',function(e){
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

            var active = {
                setSuccess: function(){
                    //按钮【确定】的回调
                    confirmAction('";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_edit_status");
        echo "',6,'setSuccessDome','type_success','置成功确认',0,0,true);

                },
                setFailure: function(){
                    //按钮【确定】的回调
                    confirmAction('";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_edit_status");
        echo "',7,'setFailureDome','type_fail','置失败确认',0,0,true);
                },
                settlement: function(){
                    var yes = function(index){
                        //按钮【确定】的回调
                        var args = getPostArgs('','',true);
                        if (false === args) {
                            return;
                        }
                        layer.close(index);
                        \$('#settlementDome').hide();

                        nxwd.ajaxRequest('";
        // line 146
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

    // 重新充值操作提示
    function rechargeAgain(order_id,dom){
        //最新的SUP订单状态
        var yes = function(index){
            //按钮【确定】的回调
            var args = {};

            var password = \$('input[name=repassword]').val();
            if (password == '') {
                nxwd.showMsg('请输入安全操作密码');
                return;
            }

            args.password = password;
            args.order_id = order_id;
            args.again = \$('input[name=again]:checked').val();

            layer.close(index);
            \$('#againRechargeDome').hide();

            nxwd.ajaxRequest('";
        // line 180
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_recharge_again");
        echo "','POST',args,'json',success,before,error);
        }
        var that = \$(dom);
        var txt = that.text();
        var before = function(){
            that.attr('disabled',true).text('处理中');
        }
        var error = function(){
            that.removeAttr('disabled').html(txt);
            nxwd.showMsg('服务器未响应，请稍后重试');
        }
        var success = function(res){
            that.removeAttr('disabled').html(txt);
            if (res.status) {
                //置失败确认
                layerShowView('重新充值前对关联最新SUP订单置失败确认','againRechargeDome',yes,'',0,0);
            } else {
                //重新充值页面
            }
        }

        nxwd.ajaxRequest('";
        // line 201
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_get_sup_order_status");
        echo "','POST',{order_id:order_id},'json',success,before,error);
    }

    //switch空渠道开关
    form.on('switch(empty_channel_add_order)', function(data){
        //console.log(data.elem); //得到checkbox原始DOM对象
        //console.log(data.elem.checked); //开关是否开启，true或者false

        var args = {};
        var url = '";
        // line 210
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_empty_channel_add_order");
        echo "';
        if (data.elem.checked == false) {
            args.val = 0;
        } else {
            args.val = 1;
        }
        var success = function(res){
            if (res.status) {
                nxwd.showMsg(res.msg,'success');
            } else {
                nxwd.showMsg(res.msg,'danger');
            }
        }
        nxwd.ajaxRequest(url,'POST',args,'json',success);
    });

</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/Admin/Order/recharge_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 210,  261 => 201,  237 => 180,  200 => 146,  185 => 134,  177 => 129,  150 => 105,  143 => 101,  73 => 34,  68 => 32,  62 => 29,  32 => 25,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/html\" id=\"actions\">
  {% verbatim %}
    <div class=\"layui-table-cell laytable-cell-4-0-9\">

      {{# if(d.settlement_status == 1 && (d.order_status == 1 || d.order_status == 3 || d.order_status == 7)) { }}
        <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"mark_succeed\">置成功</a>
      {{#  } }}

      {{# if((d.settlement_status == 1 && d.order_status == 1) || (d.settlement_status == 1 && d.order_status == 2) || (d.settlement_status == 4 && d.order_status == 6)) { }}
        <a class=\"layui-btn layui-btn-danger layui-btn-xs\" lay-event=\"mark_failed\">置失败</a>
      {{#  } }}

      {{# if(d.order_status == 1 || d.order_status == 2 || d.order_status == 6) { }}
        <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"mark_again\">重新充值</a>
      {{#  } }}

      {{# if((d.order_status == 6 || d.order_status == 2) && d.settlement_status == 1) { }}
        <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"mark_balance\">查询余额</a>
      {{#  } }}

       {{# if((d.order_status == 7) && d.settlement_status == 1) { }}
        <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"mark_sup\">查看关联SUP订单</a>
      {{#  } }}
    </div>
    {% endverbatim %}
</script>
<script>
    //订单状态
    var order_statuses = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Order\\\\OrderRecharge::STATUSES\")|json_encode|raw }}');

    //用户结算状态
    var settlement_statuses = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Order\\\\OrderRecharge::SETTLEMENT\")|json_encode|raw }}');

    var platform = JSON.parse('{{ constant(\"App\\\\Platform::PLATFORMS\")|json_encode|raw }}');

    var url = \"\";

    var columns = [[
        {\"field\": \"\", \"title\": \"\", type: \"checkbox\", \"width\": 50},
        {\"field\": \"id\", \"title\": \"主订单编号\", \"width\": 300},
        {\"field\": \"product_name\", \"title\": \"商品名称/编号\", \"width\": 200},
        {\"field\": \"sup_user_name\", \"title\": \"供应商\", \"width\": 100},
        {\"field\": \"template_name\", \"title\": \"供应模版\", \"width\": 200},
        {\"field\": \"source_id\", \"title\": \"货源编号\", \"width\": 100},
        {\"field\": \"product_face_value\", \"title\": \"商品面值\", \"width\": 150},
        {\"field\": \"sell_price\", \"title\": \"主订单销售价格\", \"width\": 150},
        {\"field\": \"sup_price\", \"title\": \"SUP货源价格\", \"width\": 150},
        {\"field\": \"recharge_amount\", \"title\": \"主订单金额\", \"width\": 150, templet: function(d){
                return d.sell_price*d.buy_num;
            }},
        {\"field\": \"recharge_amount\", \"title\": \"SUP订单金额\", \"width\": 150, templet: function(d){
                return d.sup_price*d.buy_num;
            }},

        {\"field\": \"profit\", \"title\": \"利润\", \"width\": 100},

        {\"field\": \"platform_id\", \"title\": \"主订单来源\", \"width\": 100, templet: function(d){
                return platform ? platform[d.platform_id-1] : '';
            }},
        {\"field\": \"nick_name\", \"title\": \"来源用户\", \"width\": 100},

        {\"field\": \"info\", \"title\": \"充值信息\", \"width\": 300, templet: function(d){
                return '号码：'+ d.phone_number + ' 地区：' + d.province_name + '-' + d.city_name;
            }},
        {\"field\": \"status\", \"title\": \"主订单状态\", \"width\": 200, templet: function(d){
                return order_statuses && d.order_status ? order_statuses[d.order_status] : '';
            }},

        {\"field\": \"recharge_status\", \"title\": \"SUP订单充值状态\", \"width\": 200, templet: function(d){
                return recharge_statuses && d.recharge_status ? recharge_statuses[d.recharge_status] : '';
            }},

        {\"field\": \"settlement_status\", \"title\": \"用户结算状态\", \"width\": 200, templet: function(d){
                return settlement_statuses && d.settlement_status ? settlement_statuses[d.settlement_status] : '';
            }},

        {\"field\": \"settle_status\", \"title\": \"SUP订单结算状态\", \"width\": 200, templet: function(d){
                return settle_statuses && d.settle_status ? settle_statuses[d.settle_status] : '';
            }},

        {\"field\": \"recharge_sequence\", \"title\": \"充值次数\", \"width\": 100},
        {\"field\": \"add_time\", \"title\": \"时间节点\", \"width\": 200, templet: function(d){
                return '创建时间：' + d.add_time + ' 结束时间：' + d.end_time;
            }},
        {\"field\": \"note\", \"title\": \"备注\", \"width\": 100},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\", \"width\": 200}
    ]
    ];

    get_data();
    function get_data() {
        var params = \$('form#order-recharge').serialize();
        url        = '?' + params;
        rander_table('#order-table', url, columns);
    }

    table.on('tool(order-table)', function(obj){ //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
        var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）
        var data = obj.data;
        if(layEvent === 'mark_succeed'){ //置成功
            confirmAction('{{ path(\"admin_orders_edit_status\") }}',6,'setSuccessDome','type_success','置成功确认',0,0,false,data.id);
        }

        if(layEvent === 'mark_failed'){ //置失败
            confirmAction('{{ path(\"admin_orders_edit_status\") }}',7,'setFailureDome','type_fail','置失败确认',0,0,false,data.id);
        }

        if(layEvent === 'mark_again') { //重新充值
            rechargeAgain(data.id,this);
        }

    });

    \$('#recharge_order').on('click',function(e){
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

            var active = {
                setSuccess: function(){
                    //按钮【确定】的回调
                    confirmAction('{{ path(\"admin_orders_edit_status\") }}',6,'setSuccessDome','type_success','置成功确认',0,0,true);

                },
                setFailure: function(){
                    //按钮【确定】的回调
                    confirmAction('{{ path(\"admin_orders_edit_status\") }}',7,'setFailureDome','type_fail','置失败确认',0,0,true);
                },
                settlement: function(){
                    var yes = function(index){
                        //按钮【确定】的回调
                        var args = getPostArgs('','',true);
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

    // 重新充值操作提示
    function rechargeAgain(order_id,dom){
        //最新的SUP订单状态
        var yes = function(index){
            //按钮【确定】的回调
            var args = {};

            var password = \$('input[name=repassword]').val();
            if (password == '') {
                nxwd.showMsg('请输入安全操作密码');
                return;
            }

            args.password = password;
            args.order_id = order_id;
            args.again = \$('input[name=again]:checked').val();

            layer.close(index);
            \$('#againRechargeDome').hide();

            nxwd.ajaxRequest('{{ path(\"admin_orders_recharge_again\") }}','POST',args,'json',success,before,error);
        }
        var that = \$(dom);
        var txt = that.text();
        var before = function(){
            that.attr('disabled',true).text('处理中');
        }
        var error = function(){
            that.removeAttr('disabled').html(txt);
            nxwd.showMsg('服务器未响应，请稍后重试');
        }
        var success = function(res){
            that.removeAttr('disabled').html(txt);
            if (res.status) {
                //置失败确认
                layerShowView('重新充值前对关联最新SUP订单置失败确认','againRechargeDome',yes,'',0,0);
            } else {
                //重新充值页面
            }
        }

        nxwd.ajaxRequest('{{ path(\"admin_orders_get_sup_order_status\") }}','POST',{order_id:order_id},'json',success,before,error);
    }

    //switch空渠道开关
    form.on('switch(empty_channel_add_order)', function(data){
        //console.log(data.elem); //得到checkbox原始DOM对象
        //console.log(data.elem.checked); //开关是否开启，true或者false

        var args = {};
        var url = '{{ path(\"admin_orders_empty_channel_add_order\") }}';
        if (data.elem.checked == false) {
            args.val = 0;
        } else {
            args.val = 1;
        }
        var success = function(res){
            if (res.status) {
                nxwd.showMsg(res.msg,'success');
            } else {
                nxwd.showMsg(res.msg,'danger');
            }
        }
        nxwd.ajaxRequest(url,'POST',args,'json',success);
    });

</script>", "/Admin/Order/recharge_js.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\Order\\recharge_js.twig");
    }
}
