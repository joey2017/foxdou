<?php

/* /Admin/Order/common_js.twig */
class __TwigTemplate_4ecb081949c47e296f7b75d8a49a60f166c2b5d74bf17014aa4eed4dc280be00 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Admin/Order/common_js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Admin/Order/common_js.twig"));

        // line 1
        echo "<script>

    //SUP订单充值状态
    var recharge_statuses = JSON.parse('";
        // line 4
        echo json_encode(twig_constant("App\\Common\\Model\\Order\\OrderRechargeSup::RECHARGE_STATUS"));
        echo "');

    //SUP订单结算状态
    var settle_statuses = JSON.parse('";
        // line 7
        echo json_encode(twig_constant("App\\Common\\Model\\Order\\OrderRechargeSup::SETTLE_STATUS"));
        echo "');

    var order_ids = [];
    table.on('checkbox(order-table)', function(obj){
        if (obj.checked) {
            order_ids.push(obj.data.id);
        } else {
            order_ids.remove(obj.data.id);
        }

    });

    var loading = null;
    var before = function(){
        loading = layer.load();
    }
    var error = function(){
        layer.close(loading);
        nxwd.showMsg('服务器未响应，请稍后重试','danger');
    }
    var success = function(res){
        layer.close(loading);
        if (res.status){
            nxwd.showMsg(res.msg,'success');
            window.location.reload();
        } else {
            nxwd.showMsg(res.msg,'danger');
        }
    }

    /**
     * 弹出div
     * @param title
     * @param id
     * @param w
     * @param h
     */
    function layerShowView(title,id,yes,btn2,w,h){
        var args = {
            type: 1,
            title: title,
            area: [w+'px', h +'px'],
            fix: false, //不固定
            btn: ['确定', '取消'],
            yes: yes,
            btn2: btn2,
            shade:0.4,
            btnAlign: 'c',
            content: \$('#' + id + '')
        };

        if (title == null || title == '') {
            args.title=false;
        }

        if (btn2 == '' || btn2 == null) {
            args.btn2 = function(){
                //按钮【取消】的回调
                \$('#'+id +'').hide();
                //return false 开启该代码可禁止点击该按钮关闭
            }
        }

        if ((w == undefined || w == 0 || w == null || w == '') && (h == undefined || h == 0 || h == null || h == '')) {
            args.area = 'auto'
        }

        layer.open(args);
    }

    // 获取请求参数
    function getPostArgs(type,order_status,check_box,item_id){
        //var checkStatus = table.checkStatus('order-table'); //order-table 即为基础参数 id 对应的值
        //console.log(checkStatus.data) //获取选中行的数据
        //console.log(checkStatus.data.length) //获取选中行数量，可作为是否有选中行的条件
        var args = {};

        if (check_box) {
            if (order_ids.length == 0) {
                nxwd.showMsg('请选择至少一条订单');
                return false;
            }
            args.id  = order_ids;

        } else {
            args.id  = item_id;
        }
        if (type != '' && typeof(type) != 'undefined') {
            args.type = \$('input[name='+ type +']:checked').val();
        }
        if (type == 'type_fail') {
            var password = \$('input[name=password]').val();
            if (password == '') {
                nxwd.showMsg('请输入安全操作密码');
                return false;
            }
            args.password = password;
        }
        if (order_status != '' && typeof(type) != 'undefined') {
            args.order_status = order_status;
        }

        return args;
    }

    /**
     * 置成功或失败确认操作
     * @param url          请求URL
     * @param order_status 需要发送的主订单状态（成功或失败）
     * @param dom_id       弹出层的id值
     * @param type         置成功或失败
     * @param title        弹出层标题
     * @param width        弹出层宽度(0,'',null都是自动宽度)
     * @param height       弹出层高度(0,'',null都是自动高度)
     * @param check_box    是否验证选中复选框(true|false)
     * @param item_id      项目id
     */
    function confirmAction(url,order_status,dom_id,type,title,width,height,check_box,item_id){
        var yes = function(index){
            var args = getPostArgs(type,order_status,check_box,item_id);
            if (false === args) {
                return;
            }
            layer.close(index);
            \$('#'+dom_id).hide();

            nxwd.ajaxRequest(url,'POST',args,'json',success,before,error);
        }

        layerShowView(title,dom_id,yes,'',width,height)
    }

    // 更新订单统计
    setInterval(function(){
        var url = '";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_get_order_mark_total");
        echo "';
        var args = {'product_cate_id':'";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["product_cate_id"]) || array_key_exists("product_cate_id", $context) ? $context["product_cate_id"] : (function () { throw new Twig_Error_Runtime('Variable "product_cate_id" does not exist.', 142, $this->source); })()), "html", null, true);
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
    },60000);


    \$('.demoTable .layui-btn').on('click', function(){
        var type = \$(this).data('type');
        active[type] ? active[type].call(this) : '';
    });

</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/Admin/Order/common_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 142,  177 => 141,  40 => 7,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>

    //SUP订单充值状态
    var recharge_statuses = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Order\\\\OrderRechargeSup::RECHARGE_STATUS\")|json_encode|raw }}');

    //SUP订单结算状态
    var settle_statuses = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Order\\\\OrderRechargeSup::SETTLE_STATUS\")|json_encode|raw }}');

    var order_ids = [];
    table.on('checkbox(order-table)', function(obj){
        if (obj.checked) {
            order_ids.push(obj.data.id);
        } else {
            order_ids.remove(obj.data.id);
        }

    });

    var loading = null;
    var before = function(){
        loading = layer.load();
    }
    var error = function(){
        layer.close(loading);
        nxwd.showMsg('服务器未响应，请稍后重试','danger');
    }
    var success = function(res){
        layer.close(loading);
        if (res.status){
            nxwd.showMsg(res.msg,'success');
            window.location.reload();
        } else {
            nxwd.showMsg(res.msg,'danger');
        }
    }

    /**
     * 弹出div
     * @param title
     * @param id
     * @param w
     * @param h
     */
    function layerShowView(title,id,yes,btn2,w,h){
        var args = {
            type: 1,
            title: title,
            area: [w+'px', h +'px'],
            fix: false, //不固定
            btn: ['确定', '取消'],
            yes: yes,
            btn2: btn2,
            shade:0.4,
            btnAlign: 'c',
            content: \$('#' + id + '')
        };

        if (title == null || title == '') {
            args.title=false;
        }

        if (btn2 == '' || btn2 == null) {
            args.btn2 = function(){
                //按钮【取消】的回调
                \$('#'+id +'').hide();
                //return false 开启该代码可禁止点击该按钮关闭
            }
        }

        if ((w == undefined || w == 0 || w == null || w == '') && (h == undefined || h == 0 || h == null || h == '')) {
            args.area = 'auto'
        }

        layer.open(args);
    }

    // 获取请求参数
    function getPostArgs(type,order_status,check_box,item_id){
        //var checkStatus = table.checkStatus('order-table'); //order-table 即为基础参数 id 对应的值
        //console.log(checkStatus.data) //获取选中行的数据
        //console.log(checkStatus.data.length) //获取选中行数量，可作为是否有选中行的条件
        var args = {};

        if (check_box) {
            if (order_ids.length == 0) {
                nxwd.showMsg('请选择至少一条订单');
                return false;
            }
            args.id  = order_ids;

        } else {
            args.id  = item_id;
        }
        if (type != '' && typeof(type) != 'undefined') {
            args.type = \$('input[name='+ type +']:checked').val();
        }
        if (type == 'type_fail') {
            var password = \$('input[name=password]').val();
            if (password == '') {
                nxwd.showMsg('请输入安全操作密码');
                return false;
            }
            args.password = password;
        }
        if (order_status != '' && typeof(type) != 'undefined') {
            args.order_status = order_status;
        }

        return args;
    }

    /**
     * 置成功或失败确认操作
     * @param url          请求URL
     * @param order_status 需要发送的主订单状态（成功或失败）
     * @param dom_id       弹出层的id值
     * @param type         置成功或失败
     * @param title        弹出层标题
     * @param width        弹出层宽度(0,'',null都是自动宽度)
     * @param height       弹出层高度(0,'',null都是自动高度)
     * @param check_box    是否验证选中复选框(true|false)
     * @param item_id      项目id
     */
    function confirmAction(url,order_status,dom_id,type,title,width,height,check_box,item_id){
        var yes = function(index){
            var args = getPostArgs(type,order_status,check_box,item_id);
            if (false === args) {
                return;
            }
            layer.close(index);
            \$('#'+dom_id).hide();

            nxwd.ajaxRequest(url,'POST',args,'json',success,before,error);
        }

        layerShowView(title,dom_id,yes,'',width,height)
    }

    // 更新订单统计
    setInterval(function(){
        var url = '{{ path(\"admin_orders_get_order_mark_total\") }}';
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
    },60000);


    \$('.demoTable .layui-btn').on('click', function(){
        var type = \$(this).data('type');
        active[type] ? active[type].call(this) : '';
    });

</script>", "/Admin/Order/common_js.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\Order\\common_js.twig");
    }
}
