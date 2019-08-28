<?php

/* /Admin/Audit/withdraw_accounts_js.twig */
class __TwigTemplate_3444c300526940cc5b8d2f801925b73c1498df70e09c53add44da989aac4fb55 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Admin/Audit/withdraw_accounts_js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Admin/Audit/withdraw_accounts_js.twig"));

        // line 1
        echo "<script>
    var verify_statuses = JSON.parse('";
        // line 2
        echo json_encode(twig_constant("App\\Common\\Model\\Payment\\CashUserAccount::VERIFY_STATUSES"));
        echo "');
    var url = \"\";
    var columns = [[
        {\"field\": \"\", \"title\": \"\", type: \"checkbox\", \"width\": 50},
        {\"field\": \"id\", \"title\": \"提现记录编号\", \"width\": 150},
        {
            \"field\": \"pass\", \"title\": \"创建者\", \"width\": 150, templet: function (d) {
                return d.pass+'<br>'+d.legal_person_name+'<br>'+d.bind_mobile+'<br>'+d.legal_person_identity_card_no;
            }
        },
        {\"field\": \"account_bank_name\", \"title\": \"银行\", \"width\": 150},
        {\"field\": \"account_place\", \"title\": \"开户行名称\"},
        {\"field\": \"account_user\", \"title\": \"姓名\"},
        {\"field\": \"account_num\", \"title\": \"账号\"},
        {\"field\": \"shenfenzheng_id\", \"title\": \"身份证\"},
        {\"field\": \"mobile\", \"title\": \"绑定手机号\"},
        {\"field\": \"info\", \"title\": \"备注\"},
        {
            \"field\": \"verify_status\", \"title\": \"状态\", \"width\": 150, templet: function (d) {
                return verify_statuses[d.verify_status];
            }
        },
        {\"field\": \"add_time\", \"title\": \"申请时间\", templet: \"#add_time\"},
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
                layer.close(index);
                var args = {id:data.id};
                args.status = \$('#setSuccessDome').find('input[name=status]:checked').val();

                nxwd.ajaxRequest('";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_withdraw_accounts_review");
        echo "','POST',args,'json',success,before,error);
            }
            nxwd.ajaxOpenCallBack('审核','setSuccessDome',0,0,yes);
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
            var yes = function(index){
                layer.close(index);
                var args = {id:checked_ids};
                args.status = \$('#setSuccessDome').find('input[name=status]:checked').val();

                nxwd.ajaxRequest('";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_withdraw_accounts_review");
        echo "','POST',args,'json',success,before,error);
            };

            nxwd.ajaxOpenCallBack('审核','setSuccessDome',0,0,yes);
        }
    });

    /**
     * 余额提现申请审核
     * @param url           // 请求url
     * @param id            // 项目ID
     * @param status        // 1=>审核未通过，2=>提现处理中，3=>已提现，4=>提现失败
     */
    function withdrawOperation(url, id, status) {

        if (id == '' || typeof id == 'undefined' || id == null) {
            nxwd.showMsg('项目id不能为空');
            return false;
        }

        if (status === '') {
            nxwd.showMsg('参数有误');
            return false;
        }

        var ok = layer.confirm('您确定要执行该操作吗？', {icon: 3, title: '系统提示'}, function(){
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
        return "/Admin/Audit/withdraw_accounts_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 96,  97 => 64,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    var verify_statuses = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Payment\\\\CashUserAccount::VERIFY_STATUSES\")|json_encode|raw }}');
    var url = \"\";
    var columns = [[
        {\"field\": \"\", \"title\": \"\", type: \"checkbox\", \"width\": 50},
        {\"field\": \"id\", \"title\": \"提现记录编号\", \"width\": 150},
        {
            \"field\": \"pass\", \"title\": \"创建者\", \"width\": 150, templet: function (d) {
                return d.pass+'<br>'+d.legal_person_name+'<br>'+d.bind_mobile+'<br>'+d.legal_person_identity_card_no;
            }
        },
        {\"field\": \"account_bank_name\", \"title\": \"银行\", \"width\": 150},
        {\"field\": \"account_place\", \"title\": \"开户行名称\"},
        {\"field\": \"account_user\", \"title\": \"姓名\"},
        {\"field\": \"account_num\", \"title\": \"账号\"},
        {\"field\": \"shenfenzheng_id\", \"title\": \"身份证\"},
        {\"field\": \"mobile\", \"title\": \"绑定手机号\"},
        {\"field\": \"info\", \"title\": \"备注\"},
        {
            \"field\": \"verify_status\", \"title\": \"状态\", \"width\": 150, templet: function (d) {
                return verify_statuses[d.verify_status];
            }
        },
        {\"field\": \"add_time\", \"title\": \"申请时间\", templet: \"#add_time\"},
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
                layer.close(index);
                var args = {id:data.id};
                args.status = \$('#setSuccessDome').find('input[name=status]:checked').val();

                nxwd.ajaxRequest('{{ path(\"admin_audit_withdraw_accounts_review\") }}','POST',args,'json',success,before,error);
            }
            nxwd.ajaxOpenCallBack('审核','setSuccessDome',0,0,yes);
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
            var yes = function(index){
                layer.close(index);
                var args = {id:checked_ids};
                args.status = \$('#setSuccessDome').find('input[name=status]:checked').val();

                nxwd.ajaxRequest('{{ path(\"admin_audit_withdraw_accounts_review\") }}','POST',args,'json',success,before,error);
            };

            nxwd.ajaxOpenCallBack('审核','setSuccessDome',0,0,yes);
        }
    });

    /**
     * 余额提现申请审核
     * @param url           // 请求url
     * @param id            // 项目ID
     * @param status        // 1=>审核未通过，2=>提现处理中，3=>已提现，4=>提现失败
     */
    function withdrawOperation(url, id, status) {

        if (id == '' || typeof id == 'undefined' || id == null) {
            nxwd.showMsg('项目id不能为空');
            return false;
        }

        if (status === '') {
            nxwd.showMsg('参数有误');
            return false;
        }

        var ok = layer.confirm('您确定要执行该操作吗？', {icon: 3, title: '系统提示'}, function(){
            layer.close(ok);
            nxwd.ajaxRequest(url, 'POST', {id: id, status: status}, 'json', success, before, error);
        });
    }
</script>
", "/Admin/Audit/withdraw_accounts_js.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\Audit\\withdraw_accounts_js.twig");
    }
}
