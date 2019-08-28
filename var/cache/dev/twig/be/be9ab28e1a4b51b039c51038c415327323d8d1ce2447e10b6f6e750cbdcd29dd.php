<?php

/* Admin/User/set_price_group_js.twig */
class __TwigTemplate_063f573215cefc87dd96bc4d6c180265375e32aeffe3f94cadb4b0b7a34f6bc7 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/User/set_price_group_js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/User/set_price_group_js.twig"));

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

    var add_action = true;
    // 初始化
    get_data();
    table.on('tool(paged-table)', function (obj) { //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
        var data = obj.data; //获得当前行数据
        var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）
        var tr = obj.tr; //获得行元素

        if (layEvent === 'edit') { //编辑
            \$('#set_price_name').val(data.set_price_name);
            \$('#note').val(data.note);
            \$('#csrf_token').val('";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_users_edit_price_group"), "html", null, true);
        echo "');
            \$('#item_id').val(data.id);
            \$('.submit').text('确认修改');
            nxwd.ajaxOpen('修改定价组', '550px', '320px', 'btn-add-group');
            add_action = false;
        }

        if (layEvent === 'delete') { //删除
            var btn = \$(tr).find('a[lay-event=delete]');
            nxwd.ajaxDelete('";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_del_price_group");
        echo "', btn, false, data.id)
        }
    });

    var checked_ids = [];
    // 监听复选框选中事件
    table.on('checkbox(paged-table)', function (obj) {
        if (obj.checked) {
            checked_ids.push(obj.data.id);
        } else {
            checked_ids.remove(obj.data.id);
        }
    });

    \$(document).on('click', function (e) {
        var target = \$(e.target);

        if (target.is('.reverse-select') || target.parents().is('.reverse-select')) {
            \$('.layui-table-box').find('input:checkbox').next().each(function () {
                \$(this).toggleClass('layui-form-checked');
            })
        } else if (target.is('.set-default') || target.parents().is('.set-default')) {
            if (checked_ids.length == 0) {
                nxwd.showMsg('至少选择一条数据');
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
            nxwd.ajaxRequest('";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_set_default_price");
        echo "', 'POST', {id: checked_ids}, 'json', success, before, error)
        } else if (target.is('.add-group') || target.parents().is('.add-group')) {
            //addGroup('";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_add_price_group");
        echo "')
            \$('#set_price_name').val('');
            \$('#note').val('');
            \$('#csrf_token').val('";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_users_add_price_group"), "html", null, true);
        echo "');
            \$('.submit').text('立即提交');
            nxwd.ajaxOpen('添加定价组', '550px', '320px', 'btn-add-group');
            add_action = true;
        } else if (target.is('.submit') || target.parents().is('.submit')) {
            var args = {};
            args.set_price_name = \$('#set_price_name').val();
            args.note           = \$('#note').val();
            args._token    = \$('#csrf_token').val();
            var target_url = '';
            if (!add_action) {
                args.id = \$('#item_id').val();
                target_url = '";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_edit_price_group");
        echo "';
            } else {
                target_url = '";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_add_price_group");
        echo "';
            }

            ajaxSend(target_url, args, target);
        }

    });

    /**
     *
     * @param url
     * @param data
     * @param _target
     */
    function ajaxSend(url,data,_target){
        var that = _target;
        var txt = that.text();

        if (data.set_price_name == '') {
            nxwd.showMsg('请输入服务组名称');
            return false;
        }
        var before = function () {
            that.attr('disabled', true).html('处理中...');
        }
        var error = function () {
            that.removeAttr('disabled').html(txt);
            nxwd.showMsg('服务器未响应，请稍后重试', 'danger');
            return false;
        }
        var success = function (res) {
            that.removeAttr('disabled').html(txt);
            if (res.status) {
                nxwd.showMsg(res.msg, 'success');
                setTimeout(function () {
                    layer.closeAll();
                    location.reload();
                }, 1500);
            } else {
                nxwd.showMsg(res.msg)
            }
        }
        nxwd.ajaxRequest(url, 'POST', data, 'json', success, before, error);

    }

</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/User/set_price_group_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 107,  153 => 105,  138 => 93,  132 => 90,  127 => 88,  81 => 45,  69 => 36,  32 => 2,  29 => 1,);
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

    var add_action = true;
    // 初始化
    get_data();
    table.on('tool(paged-table)', function (obj) { //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
        var data = obj.data; //获得当前行数据
        var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）
        var tr = obj.tr; //获得行元素

        if (layEvent === 'edit') { //编辑
            \$('#set_price_name').val(data.set_price_name);
            \$('#note').val(data.note);
            \$('#csrf_token').val('{{ csrf_token(\"admin_users_edit_price_group\") }}');
            \$('#item_id').val(data.id);
            \$('.submit').text('确认修改');
            nxwd.ajaxOpen('修改定价组', '550px', '320px', 'btn-add-group');
            add_action = false;
        }

        if (layEvent === 'delete') { //删除
            var btn = \$(tr).find('a[lay-event=delete]');
            nxwd.ajaxDelete('{{ path(\"admin_users_del_price_group\") }}', btn, false, data.id)
        }
    });

    var checked_ids = [];
    // 监听复选框选中事件
    table.on('checkbox(paged-table)', function (obj) {
        if (obj.checked) {
            checked_ids.push(obj.data.id);
        } else {
            checked_ids.remove(obj.data.id);
        }
    });

    \$(document).on('click', function (e) {
        var target = \$(e.target);

        if (target.is('.reverse-select') || target.parents().is('.reverse-select')) {
            \$('.layui-table-box').find('input:checkbox').next().each(function () {
                \$(this).toggleClass('layui-form-checked');
            })
        } else if (target.is('.set-default') || target.parents().is('.set-default')) {
            if (checked_ids.length == 0) {
                nxwd.showMsg('至少选择一条数据');
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
            nxwd.ajaxRequest('{{ path(\"admin_users_set_default_price\") }}', 'POST', {id: checked_ids}, 'json', success, before, error)
        } else if (target.is('.add-group') || target.parents().is('.add-group')) {
            //addGroup('{{ path(\"admin_users_add_price_group\") }}')
            \$('#set_price_name').val('');
            \$('#note').val('');
            \$('#csrf_token').val('{{ csrf_token(\"admin_users_add_price_group\") }}');
            \$('.submit').text('立即提交');
            nxwd.ajaxOpen('添加定价组', '550px', '320px', 'btn-add-group');
            add_action = true;
        } else if (target.is('.submit') || target.parents().is('.submit')) {
            var args = {};
            args.set_price_name = \$('#set_price_name').val();
            args.note           = \$('#note').val();
            args._token    = \$('#csrf_token').val();
            var target_url = '';
            if (!add_action) {
                args.id = \$('#item_id').val();
                target_url = '{{ path(\"admin_users_edit_price_group\") }}';
            } else {
                target_url = '{{ path(\"admin_users_add_price_group\") }}';
            }

            ajaxSend(target_url, args, target);
        }

    });

    /**
     *
     * @param url
     * @param data
     * @param _target
     */
    function ajaxSend(url,data,_target){
        var that = _target;
        var txt = that.text();

        if (data.set_price_name == '') {
            nxwd.showMsg('请输入服务组名称');
            return false;
        }
        var before = function () {
            that.attr('disabled', true).html('处理中...');
        }
        var error = function () {
            that.removeAttr('disabled').html(txt);
            nxwd.showMsg('服务器未响应，请稍后重试', 'danger');
            return false;
        }
        var success = function (res) {
            that.removeAttr('disabled').html(txt);
            if (res.status) {
                nxwd.showMsg(res.msg, 'success');
                setTimeout(function () {
                    layer.closeAll();
                    location.reload();
                }, 1500);
            } else {
                nxwd.showMsg(res.msg)
            }
        }
        nxwd.ajaxRequest(url, 'POST', data, 'json', success, before, error);

    }

</script>
", "Admin/User/set_price_group_js.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\User\\set_price_group_js.twig");
    }
}
