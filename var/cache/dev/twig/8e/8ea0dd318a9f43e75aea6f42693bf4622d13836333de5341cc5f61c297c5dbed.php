<?php

/* /Admin/User/set_price_group_js.twig */
class __TwigTemplate_8f18eef548a417ffbc600de3367c7b6198194569d37d3177d6a924b2dfe0f5be extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Admin/User/set_price_group_js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Admin/User/set_price_group_js.twig"));

        // line 1
        echo "<script>
    var defalut = JSON.parse('";
        // line 2
        echo json_encode(twig_constant("App\\Common\\Model\\SetPriceGroup::IS_DEFAULT"));
        echo "');
    var url = \"\";
    var columns = [[
        {\"field\": \"id\", \"title\": \"ID\", \"width\": 30, type: \"checkbox\"},
        {\"field\": \"id\", \"title\": \"定价组编号\", \"width\": 50},
        {\"field\": \"set_price_name\", \"title\": \"定价组名称\", \"width\": 150},
        {\"field\": \"note\", \"title\": \"备注\", \"width\": 150},
        {\"field\": \"user_amount\", \"title\": \"用户数\", \"width\": 150},
        {
            \"field\": \"is_default\", \"title\": \"开通时默认组\", templet: function (d) {
                return defalut[d.is_default];
            }
        },
        {\"field\": \"add_time\", \"title\": \"创建时间\", \"width\": 145, templet: \"#add_time\"},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\", \"width\": 100}
    ]];

    function get_data() {
        var params = \$('#form').serialize();
        url = '?' + params;
        rander_table('#paged-table', url, columns);
    }

    // 初始化
    get_data();
    table.on('tool(paged-table)', function (obj) { //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
        var data = obj.data; //获得当前行数据
        var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）

        if (layEvent === 'detail') { //查看
            openWin('";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_index");
        echo "?id=' + data.id, '', 1400, 900);
        }
    });

    var checked_ids = [];
    // 监听复选框选中事件
    table.on('checkbox(paged-table)', function (obj) {
        if (obj.checked) {
            checked_ids.push(obj.data.sup_users_id);
        } else {
            checked_ids.remove(obj.data.sup_users_id);
        }
    });

    \$('#pass-management').on('click', function (e) {
        var target = \$(e.target);

        if (target.is('.reverse-select') || target.parents().is('.reverse-select')) {
            \$('.layui-table-box').find('input:checkbox').next().each(function () {
                \$(this).toggleClass('layui-form-checked');
            })
        } else if (target.is('.set-default') || target.parents().is('.set-default')) {
            frozenUserStatus('";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_set_sup_account_status");
        echo "', status, checked_ids);
        } else if (target.is('.add-group') || target.parents().is('.add-group')) {
            addGroup()
        }

    });

    /**
     * 新增定价组
     * @param url   //请求url
     */

    function addGroup(url){
        layer.open({
            type:1,
            area:['550px','320px'],
            content:\$('#btn-add-group'),
        });

        \$('#btn-add-group .submit').on('click',function(){
            var that = \$(this);
            var txt = that.text();
            var user_ids = [];
            \$('.ibox-content').find('.layui-form-checked').each(function () {
                user_ids.push(\$(this).parents('tr').find('td[data-field=status] button').attr('data-id'));
            });
            var title = \$('input[name=title]').val();
            var content = \$('textarea[name=content]').val();
            if (user_ids.length == 0){
                nxwd.showMsg('请选择要发送的用户');
                return false;
            }
            if (title == '' || content == ''){
                nxwd.showMsg('请填写标题或内容');
                return false;
            }
            var before = function(){
                that.attr('disabled',true).html('处理中...');
            }
            var error = function(){
                that.removeAttr('disabled').html(txt);
                nxwd.showMsg('服务器未响应，请稍后重试','danger');
                return false;
            }
            var success = function(res){
                that.removeAttr('disabled').html(txt);
                if(res.status){
                    nxwd.showMsg(res.msg,'success');
                    setTimeout(function(){
                        layer.closeAll();
                    },1500);
                }else{
                    nxwd.showMsg(res.msg)
                }
            }
            nxwd.ajaxRequest(url,'POST',{user_ids:user_ids,title:title,content:content},'json',success,before,error);

        });
    }

</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/Admin/User/set_price_group_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 54,  65 => 32,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    var defalut = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\SetPriceGroup::IS_DEFAULT\")|json_encode|raw }}');
    var url = \"\";
    var columns = [[
        {\"field\": \"id\", \"title\": \"ID\", \"width\": 30, type: \"checkbox\"},
        {\"field\": \"id\", \"title\": \"定价组编号\", \"width\": 50},
        {\"field\": \"set_price_name\", \"title\": \"定价组名称\", \"width\": 150},
        {\"field\": \"note\", \"title\": \"备注\", \"width\": 150},
        {\"field\": \"user_amount\", \"title\": \"用户数\", \"width\": 150},
        {
            \"field\": \"is_default\", \"title\": \"开通时默认组\", templet: function (d) {
                return defalut[d.is_default];
            }
        },
        {\"field\": \"add_time\", \"title\": \"创建时间\", \"width\": 145, templet: \"#add_time\"},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\", \"width\": 100}
    ]];

    function get_data() {
        var params = \$('#form').serialize();
        url = '?' + params;
        rander_table('#paged-table', url, columns);
    }

    // 初始化
    get_data();
    table.on('tool(paged-table)', function (obj) { //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
        var data = obj.data; //获得当前行数据
        var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）

        if (layEvent === 'detail') { //查看
            openWin('{{ path('admin_user_details_index') }}?id=' + data.id, '', 1400, 900);
        }
    });

    var checked_ids = [];
    // 监听复选框选中事件
    table.on('checkbox(paged-table)', function (obj) {
        if (obj.checked) {
            checked_ids.push(obj.data.sup_users_id);
        } else {
            checked_ids.remove(obj.data.sup_users_id);
        }
    });

    \$('#pass-management').on('click', function (e) {
        var target = \$(e.target);

        if (target.is('.reverse-select') || target.parents().is('.reverse-select')) {
            \$('.layui-table-box').find('input:checkbox').next().each(function () {
                \$(this).toggleClass('layui-form-checked');
            })
        } else if (target.is('.set-default') || target.parents().is('.set-default')) {
            frozenUserStatus('{{ path(\"admin_users_set_sup_account_status\") }}', status, checked_ids);
        } else if (target.is('.add-group') || target.parents().is('.add-group')) {
            addGroup()
        }

    });

    /**
     * 新增定价组
     * @param url   //请求url
     */

    function addGroup(url){
        layer.open({
            type:1,
            area:['550px','320px'],
            content:\$('#btn-add-group'),
        });

        \$('#btn-add-group .submit').on('click',function(){
            var that = \$(this);
            var txt = that.text();
            var user_ids = [];
            \$('.ibox-content').find('.layui-form-checked').each(function () {
                user_ids.push(\$(this).parents('tr').find('td[data-field=status] button').attr('data-id'));
            });
            var title = \$('input[name=title]').val();
            var content = \$('textarea[name=content]').val();
            if (user_ids.length == 0){
                nxwd.showMsg('请选择要发送的用户');
                return false;
            }
            if (title == '' || content == ''){
                nxwd.showMsg('请填写标题或内容');
                return false;
            }
            var before = function(){
                that.attr('disabled',true).html('处理中...');
            }
            var error = function(){
                that.removeAttr('disabled').html(txt);
                nxwd.showMsg('服务器未响应，请稍后重试','danger');
                return false;
            }
            var success = function(res){
                that.removeAttr('disabled').html(txt);
                if(res.status){
                    nxwd.showMsg(res.msg,'success');
                    setTimeout(function(){
                        layer.closeAll();
                    },1500);
                }else{
                    nxwd.showMsg(res.msg)
                }
            }
            nxwd.ajaxRequest(url,'POST',{user_ids:user_ids,title:title,content:content},'json',success,before,error);

        });
    }

</script>
", "/Admin/User/set_price_group_js.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\User\\set_price_group_js.twig");
    }
}
