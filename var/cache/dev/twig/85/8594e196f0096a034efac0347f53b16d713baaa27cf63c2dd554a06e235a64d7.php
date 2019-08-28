<?php

/* /Admin/Audit/withdraws_js.twig */
class __TwigTemplate_10f7ea190f9390b970d0f67670bced66091e3dec5c2b0820c8435587ff5a8c7f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Admin/Audit/withdraws_js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Admin/Audit/withdraws_js.twig"));

        // line 1
        echo "<script>
    var trade_statuses = JSON.parse('";
        // line 2
        echo json_encode(twig_constant("App\\Common\\Model\\Payment\\SellCashUserLog::TRADE_STATUSES"));
        echo "');
    var url = \"\";
    var columns = [[
        {\"field\": \"\", \"title\": \"\", type: \"checkbox\", \"width\": 50},
        {\"field\": \"id\", \"title\": \"提现记录编号\", \"width\": 150},
        {
            \"field\": \"trade_status\", \"title\": \"提现状态\", \"width\": 150, templet: function (d) {
                return trade_statuses[d.trade_status];
            }
        },
        {
            \"field\": \"pass\", \"title\": \"申请者\", \"width\": 150, templet: function (d) {
                return d.pass+'<br>'+d.legal_person_name+'<br>'+d.bind_mobile+'<br>'+d.legal_person_identity_card_no;
            }
        },
        {\"field\": \"get_cash\", \"title\": \"提现金额\", \"width\": 150},
        {\"field\": \"shouxu_cash\", \"title\": \"手续费\"},
        {\"field\": \"actual_cash\", \"title\": \"预计到账金额\"},
        {\"field\": \"account_name\", \"title\": \"提现账户\"},
        {\"field\": \"info\", \"title\": \"备注\"},
        {\"field\": \"add_time\", \"title\": \"申请时间\", templet: \"#add_time\"},
        {\"field\": \"edit_time\", \"title\": \"审核时间\", templet: \"#edit_time\"},
        {\"field\": \"platform_info\", \"title\": \"平台备注\"},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\", \"width\": 100}
    ]];

    function get_data() {
        var params = \$('form#withdraws-list').serialize();
        url = '?' + params;
        rander_table('#withdraws-table', url, columns);
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
    table.on('tool(withdraws-table)', function (obj) {
        var data = obj.data;
        var layEvent = obj.event;

        if (layEvent === 'review') { //审核
            var yes = function (index){
                var args           = {id: data.id};
                args.status        = \$('#setSuccessDome').find('input[name=status_a]:checked').val();
                args.platform_info = \$('#setSuccessDome').find('input[name=platform_info_a]').val();
                args.password      = \$('#setSuccessDome').find('input[name=password_a]').val();

                if (args.status === '') {
                    nxwd.showMsg('参数有误');
                    return false;
                }

                if (args.platform_info === '') {
                    nxwd.showMsg('请输入备注信息');
                    return false;
                }

                if (args.password === '') {
                    nxwd.showMsg('请输入安全操作密码');
                    return false;
                }

                layer.close(index);

                nxwd.ajaxRequest('";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_withdraw_review");
        echo "','POST',args,'json',success,before,error);
            }
            nxwd.ajaxOpenCallBack('审核','setSuccessDome',0,0,yes);
        }
        if (layEvent === 'withdraw') { //提现修改
            var yes = function (index){
                layer.close(index);
                var args           = {id: data.id};
                args.status        = \$('#setFailureDome').find('input[name=status_b]:checked').val();
                args.platform_info = \$('#setFailureDome').find('input[name=platform_info_b]').val();
                args.password      = \$('#setFailureDome').find('input[name=password_b]').val();

                if (args.status === '') {
                    nxwd.showMsg('参数有误');
                    return false;
                }

                if (args.platform_info === '') {
                    nxwd.showMsg('请输入备注信息');
                    return false;
                }

                if (args.password === '') {
                    nxwd.showMsg('请输入安全操作密码');
                    return false;
                }

                nxwd.ajaxRequest('";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_edit_withdraw");
        echo "','POST',args,'json',success,before,error);
            }
            nxwd.ajaxOpenCallBack('修改提现结果','setFailureDome',0,0,yes);
        }
    });

    var checked_ids = [];
    table.on('checkbox(withdraws-table)', function(obj){
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
            if (checked_ids.length == 0) {
                nxwd.showMsg('至少选择一条记录');
                return false;
            }
            var review_yes = function(index){
                var args           = {id: checked_ids};
                args.status        = \$('#setSuccessDome').find('input[name=status_a]:checked').val();
                args.platform_info = \$('#setSuccessDome').find('input[name=platform_info_a]').val();
                args.password      = \$('#setSuccessDome').find('input[name=password_a]').val();

                if (args.status === '') {
                    nxwd.showMsg('参数有误');
                    return false;
                }

                if (args.platform_info === '') {
                    nxwd.showMsg('请输入备注信息');
                    return false;
                }

                if (args.password === '') {
                    nxwd.showMsg('请输入安全操作密码');
                    return false;
                }
                layer.close(index);

                nxwd.ajaxRequest('";
        // line 158
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_withdraw_review");
        echo "','POST',args,'json',success,before,error);
            };
            var withdraw_yes = function(index){
                var args           = {id: checked_ids};
                args.status        = \$('#setFailureDome').find('input[name=status_b]:checked').val();
                args.platform_info = \$('#setFailureDome').find('input[name=platform_info_b]').val();
                args.password      = \$('#setFailureDome').find('input[name=password_b]').val();

                if (args.status === '') {
                    nxwd.showMsg('参数有误');
                    return false;
                }

                if (args.platform_info === '') {
                    nxwd.showMsg('请输入备注信息');
                    return false;
                }

                if (args.password === '') {
                    nxwd.showMsg('请输入安全操作密码');
                    return false;
                }
                layer.close(index);

                nxwd.ajaxRequest('";
        // line 182
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_edit_withdraw");
        echo "','POST',args,'json',success,before,error);
            };

            var active = {
                review: function(){
                    nxwd.ajaxOpenCallBack('审核','setSuccessDome',0,0,review_yes);

                },
                withdraw: function(){
                    nxwd.ajaxOpenCallBack('修改提现结果','setFailureDome',0,0,withdraw_yes);

                }
            };

            var posttype = target.data('type');
            active[posttype] ? active[posttype].call(this) : '';

        }
    });

    /**
     * 余额提现申请审核
     * @param url           // 请求url
     * @param id            // 项目ID
     * @param status        // 1=>审核未通过，2=>提现处理中，3=>已提现，4=>提现失败
     * @param info          // 备注
     * @param password      // 安全操作密码
     */
    function withdrawOperation(url, id, status, info, password) {
        if (id == '' || typeof id == 'undefined' || id == null) {
            nxwd.showMsg('项目id不能为空');
            return false;
        }

        if (status === '') {
            nxwd.showMsg('参数有误');
            return false;
        }

        if (info === '') {
            nxwd.showMsg('请输入备注信息');
            return false;
        }

        if (password === '') {
            nxwd.showMsg('请输入安全操作密码');
            return false;
        }

        var args           = {id: id};
        args.status        = status;
        args.platform_info = info;
        args.password      = password;

        nxwd.ajaxRequest(url,'POST',args,'json',success,before,error);
    }
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/Admin/Audit/withdraws_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 182,  197 => 158,  145 => 109,  115 => 82,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    var trade_statuses = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Payment\\\\SellCashUserLog::TRADE_STATUSES\")|json_encode|raw }}');
    var url = \"\";
    var columns = [[
        {\"field\": \"\", \"title\": \"\", type: \"checkbox\", \"width\": 50},
        {\"field\": \"id\", \"title\": \"提现记录编号\", \"width\": 150},
        {
            \"field\": \"trade_status\", \"title\": \"提现状态\", \"width\": 150, templet: function (d) {
                return trade_statuses[d.trade_status];
            }
        },
        {
            \"field\": \"pass\", \"title\": \"申请者\", \"width\": 150, templet: function (d) {
                return d.pass+'<br>'+d.legal_person_name+'<br>'+d.bind_mobile+'<br>'+d.legal_person_identity_card_no;
            }
        },
        {\"field\": \"get_cash\", \"title\": \"提现金额\", \"width\": 150},
        {\"field\": \"shouxu_cash\", \"title\": \"手续费\"},
        {\"field\": \"actual_cash\", \"title\": \"预计到账金额\"},
        {\"field\": \"account_name\", \"title\": \"提现账户\"},
        {\"field\": \"info\", \"title\": \"备注\"},
        {\"field\": \"add_time\", \"title\": \"申请时间\", templet: \"#add_time\"},
        {\"field\": \"edit_time\", \"title\": \"审核时间\", templet: \"#edit_time\"},
        {\"field\": \"platform_info\", \"title\": \"平台备注\"},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\", \"width\": 100}
    ]];

    function get_data() {
        var params = \$('form#withdraws-list').serialize();
        url = '?' + params;
        rander_table('#withdraws-table', url, columns);
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
    table.on('tool(withdraws-table)', function (obj) {
        var data = obj.data;
        var layEvent = obj.event;

        if (layEvent === 'review') { //审核
            var yes = function (index){
                var args           = {id: data.id};
                args.status        = \$('#setSuccessDome').find('input[name=status_a]:checked').val();
                args.platform_info = \$('#setSuccessDome').find('input[name=platform_info_a]').val();
                args.password      = \$('#setSuccessDome').find('input[name=password_a]').val();

                if (args.status === '') {
                    nxwd.showMsg('参数有误');
                    return false;
                }

                if (args.platform_info === '') {
                    nxwd.showMsg('请输入备注信息');
                    return false;
                }

                if (args.password === '') {
                    nxwd.showMsg('请输入安全操作密码');
                    return false;
                }

                layer.close(index);

                nxwd.ajaxRequest('{{ path(\"admin_audit_withdraw_review\") }}','POST',args,'json',success,before,error);
            }
            nxwd.ajaxOpenCallBack('审核','setSuccessDome',0,0,yes);
        }
        if (layEvent === 'withdraw') { //提现修改
            var yes = function (index){
                layer.close(index);
                var args           = {id: data.id};
                args.status        = \$('#setFailureDome').find('input[name=status_b]:checked').val();
                args.platform_info = \$('#setFailureDome').find('input[name=platform_info_b]').val();
                args.password      = \$('#setFailureDome').find('input[name=password_b]').val();

                if (args.status === '') {
                    nxwd.showMsg('参数有误');
                    return false;
                }

                if (args.platform_info === '') {
                    nxwd.showMsg('请输入备注信息');
                    return false;
                }

                if (args.password === '') {
                    nxwd.showMsg('请输入安全操作密码');
                    return false;
                }

                nxwd.ajaxRequest('{{ path(\"admin_audit_edit_withdraw\") }}','POST',args,'json',success,before,error);
            }
            nxwd.ajaxOpenCallBack('修改提现结果','setFailureDome',0,0,yes);
        }
    });

    var checked_ids = [];
    table.on('checkbox(withdraws-table)', function(obj){
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
            if (checked_ids.length == 0) {
                nxwd.showMsg('至少选择一条记录');
                return false;
            }
            var review_yes = function(index){
                var args           = {id: checked_ids};
                args.status        = \$('#setSuccessDome').find('input[name=status_a]:checked').val();
                args.platform_info = \$('#setSuccessDome').find('input[name=platform_info_a]').val();
                args.password      = \$('#setSuccessDome').find('input[name=password_a]').val();

                if (args.status === '') {
                    nxwd.showMsg('参数有误');
                    return false;
                }

                if (args.platform_info === '') {
                    nxwd.showMsg('请输入备注信息');
                    return false;
                }

                if (args.password === '') {
                    nxwd.showMsg('请输入安全操作密码');
                    return false;
                }
                layer.close(index);

                nxwd.ajaxRequest('{{ path(\"admin_audit_withdraw_review\") }}','POST',args,'json',success,before,error);
            };
            var withdraw_yes = function(index){
                var args           = {id: checked_ids};
                args.status        = \$('#setFailureDome').find('input[name=status_b]:checked').val();
                args.platform_info = \$('#setFailureDome').find('input[name=platform_info_b]').val();
                args.password      = \$('#setFailureDome').find('input[name=password_b]').val();

                if (args.status === '') {
                    nxwd.showMsg('参数有误');
                    return false;
                }

                if (args.platform_info === '') {
                    nxwd.showMsg('请输入备注信息');
                    return false;
                }

                if (args.password === '') {
                    nxwd.showMsg('请输入安全操作密码');
                    return false;
                }
                layer.close(index);

                nxwd.ajaxRequest('{{ path(\"admin_audit_edit_withdraw\") }}','POST',args,'json',success,before,error);
            };

            var active = {
                review: function(){
                    nxwd.ajaxOpenCallBack('审核','setSuccessDome',0,0,review_yes);

                },
                withdraw: function(){
                    nxwd.ajaxOpenCallBack('修改提现结果','setFailureDome',0,0,withdraw_yes);

                }
            };

            var posttype = target.data('type');
            active[posttype] ? active[posttype].call(this) : '';

        }
    });

    /**
     * 余额提现申请审核
     * @param url           // 请求url
     * @param id            // 项目ID
     * @param status        // 1=>审核未通过，2=>提现处理中，3=>已提现，4=>提现失败
     * @param info          // 备注
     * @param password      // 安全操作密码
     */
    function withdrawOperation(url, id, status, info, password) {
        if (id == '' || typeof id == 'undefined' || id == null) {
            nxwd.showMsg('项目id不能为空');
            return false;
        }

        if (status === '') {
            nxwd.showMsg('参数有误');
            return false;
        }

        if (info === '') {
            nxwd.showMsg('请输入备注信息');
            return false;
        }

        if (password === '') {
            nxwd.showMsg('请输入安全操作密码');
            return false;
        }

        var args           = {id: id};
        args.status        = status;
        args.platform_info = info;
        args.password      = password;

        nxwd.ajaxRequest(url,'POST',args,'json',success,before,error);
    }
</script>
", "/Admin/Audit/withdraws_js.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\Audit\\withdraws_js.twig");
    }
}
