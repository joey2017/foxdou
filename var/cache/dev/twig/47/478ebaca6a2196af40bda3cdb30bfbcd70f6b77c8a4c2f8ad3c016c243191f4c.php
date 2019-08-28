<?php

/* Admin/User/get_supplier_account_js.twig */
class __TwigTemplate_087c4b380375eb5d68050cf6f851bd195033057274cc372e93dba3a1033b222d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/User/get_supplier_account_js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/User/get_supplier_account_js.twig"));

        // line 1
        echo "<script>
    var statuses = JSON.parse('";
        // line 2
        echo json_encode(twig_constant("App\\Common\\Model\\User\\SupplierAccount::STATUSES"));
        echo "');
    var url = \"\";
    var columns = [[
        {\"field\": \"id\", \"title\": \"ID\", \"width\": 30, type: \"checkbox\"},
        {\"field\": \"sup_users_id\", \"title\": \"账户编号\", \"width\": 50},
        {\"field\": \"account\", \"title\": \"狐豆名\", \"width\": 150},
        {\"field\": \"pass\", \"title\": \"通行证账号\", \"width\": 150},
        {\"field\": \"nick_name\", \"title\": \"昵称\", \"width\": 150},
        {
            \"field\": \"status\", \"title\": \"账户状态\", templet: function (d) {
                return statuses[d.status];
            }
        },
        {\"field\": \"balance\", \"title\": \"账户可用余额\"},
        {\"field\": \"cash_pledge\", \"title\": \"押金余额\"},
        {\"field\": \"drawing_amount\", \"title\": \"提现中金额\"},
        {\"field\": \"freeze_amount\", \"title\": \"冻结金额\"},
        {\"field\": \"add_time\", \"title\": \"账户开通时间\", \"width\": 145, templet: \"#add_time\"},
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
        // line 36
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
        } else if (target.is('.set-status') || target.parents().is('.set-status')) {
            var status = target.attr('data-type');
            frozenUserStatus('";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_set_sup_account_status");
        echo "', status, checked_ids);
        }

    });

</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/User/get_supplier_account_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 59,  69 => 36,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    var statuses = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\User\\\\SupplierAccount::STATUSES\")|json_encode|raw }}');
    var url = \"\";
    var columns = [[
        {\"field\": \"id\", \"title\": \"ID\", \"width\": 30, type: \"checkbox\"},
        {\"field\": \"sup_users_id\", \"title\": \"账户编号\", \"width\": 50},
        {\"field\": \"account\", \"title\": \"狐豆名\", \"width\": 150},
        {\"field\": \"pass\", \"title\": \"通行证账号\", \"width\": 150},
        {\"field\": \"nick_name\", \"title\": \"昵称\", \"width\": 150},
        {
            \"field\": \"status\", \"title\": \"账户状态\", templet: function (d) {
                return statuses[d.status];
            }
        },
        {\"field\": \"balance\", \"title\": \"账户可用余额\"},
        {\"field\": \"cash_pledge\", \"title\": \"押金余额\"},
        {\"field\": \"drawing_amount\", \"title\": \"提现中金额\"},
        {\"field\": \"freeze_amount\", \"title\": \"冻结金额\"},
        {\"field\": \"add_time\", \"title\": \"账户开通时间\", \"width\": 145, templet: \"#add_time\"},
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
        } else if (target.is('.set-status') || target.parents().is('.set-status')) {
            var status = target.attr('data-type');
            frozenUserStatus('{{ path(\"admin_users_set_sup_account_status\") }}', status, checked_ids);
        }

    });

</script>
", "Admin/User/get_supplier_account_js.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\User\\get_supplier_account_js.twig");
    }
}
