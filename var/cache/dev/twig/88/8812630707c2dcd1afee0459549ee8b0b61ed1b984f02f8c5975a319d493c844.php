<?php

/* Admin/User/pass_management_js.twig */
class __TwigTemplate_4a7fc48a56c3bf538515d172a7a2058957bf8a47307eecd6379a4ed351876729 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/User/pass_management_js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/User/pass_management_js.twig"));

        // line 1
        echo "<script>
    var statuses = JSON.parse('";
        // line 2
        echo json_encode(twig_constant("App\\Common\\Model\\User\\User::STATUSES"));
        echo "');
    var real_name_statuses = JSON.parse('";
        // line 3
        echo json_encode(twig_constant("App\\Common\\Model\\User\\RealNameAuthenticationInfo::STATUSES"));
        echo "');
    var types = JSON.parse('";
        // line 4
        echo json_encode(twig_constant("App\\Common\\Model\\User\\User::TYPES"));
        echo "');
    ;

    var url = \"\";
    var columns = [[
        {\"field\": \"id\", \"title\": \"ID\", \"width\": 30, type: \"checkbox\"},
        {\"field\": \"id\", \"title\": \"用户编号\", \"width\": 50},
        {\"field\": \"user_name\", \"title\": \"登录名\", \"width\": 150},
        {\"field\": \"pass\", \"title\": \"通行证账号\", \"width\": 150},
        {\"field\": \"account\", \"title\": \"狐豆靓号\", \"width\": 150},
        {\"field\": \"bind_mobile\", \"title\": \"绑定手机\"},
        {\"field\": \"bind_email\", \"title\": \"绑定邮箱\", \"width\": 150},
        {
            \"field\": \"type\", \"title\": \"注册类型\", \"width\": 150, templet: function (d) {
                return types[d.type]
            }
        },
        {
            \"field\": \"status\", \"title\": \"狐豆通行证账号状态\", \"width\": 150, templet: function (d) {
                return statuses[d.status]
            }
        },
        {
            \"field\": \"is_entry_identity_info\", \"title\": \"狐豆通行证身份信息\", \"width\": 150, templet: function (d) {
                return d.is_entry_identity_info * 1 == 0 ? '未写入' : '已写入';
            }
        },
        {
            \"field\": \"real_name_status\", \"title\": \"狐豆通行证实名认证\", templet: function (d) {
                return real_name_statuses[d.real_name_status]
            }
        },
        {
            \"field\": \"is_open_platform\", \"title\": \"开放平台账户开通状态\", templet: function (d) {
                return d.is_open_platform * 1 == 0 ? '未开通' : '已开通';
            }
        },
        {
            \"field\": \"is_agent_platform\", \"title\": \"代理商平台账户开通状态\", templet: function (d) {
                return d.is_agent_platform * 1 == 0 ? '未开通' : '已开通';
            }
        },
        {
            \"field\": \"is_supplier_platform\", \"title\": \"供应商平台账户开通状态\", templet: function (d) {
                return d.is_supplier_platform * 1 == 0 ? '未开通' : '已开通';
            }
        },
        {\"field\": \"referrer_name\", \"title\": \"注册邀请人\"},

        {\"field\": \"add_time\", \"title\": \"注册时间\", \"width\": 145},
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
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_index");
        echo "?id=' + data.id, '', 1400, 900);
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
        //console.log(obj.type); //如果触发的是全选，则为：all，如果触发的是单选，则为：one
        //console.log(checked_ids);
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
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_set_pass_status");
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
        return "Admin/User/pass_management_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 95,  109 => 70,  40 => 4,  36 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    var statuses = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\User\\\\User::STATUSES\")|json_encode|raw }}');
    var real_name_statuses = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\User\\\\RealNameAuthenticationInfo::STATUSES\")|json_encode|raw }}');
    var types = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\User\\\\User::TYPES\")|json_encode|raw }}');
    ;

    var url = \"\";
    var columns = [[
        {\"field\": \"id\", \"title\": \"ID\", \"width\": 30, type: \"checkbox\"},
        {\"field\": \"id\", \"title\": \"用户编号\", \"width\": 50},
        {\"field\": \"user_name\", \"title\": \"登录名\", \"width\": 150},
        {\"field\": \"pass\", \"title\": \"通行证账号\", \"width\": 150},
        {\"field\": \"account\", \"title\": \"狐豆靓号\", \"width\": 150},
        {\"field\": \"bind_mobile\", \"title\": \"绑定手机\"},
        {\"field\": \"bind_email\", \"title\": \"绑定邮箱\", \"width\": 150},
        {
            \"field\": \"type\", \"title\": \"注册类型\", \"width\": 150, templet: function (d) {
                return types[d.type]
            }
        },
        {
            \"field\": \"status\", \"title\": \"狐豆通行证账号状态\", \"width\": 150, templet: function (d) {
                return statuses[d.status]
            }
        },
        {
            \"field\": \"is_entry_identity_info\", \"title\": \"狐豆通行证身份信息\", \"width\": 150, templet: function (d) {
                return d.is_entry_identity_info * 1 == 0 ? '未写入' : '已写入';
            }
        },
        {
            \"field\": \"real_name_status\", \"title\": \"狐豆通行证实名认证\", templet: function (d) {
                return real_name_statuses[d.real_name_status]
            }
        },
        {
            \"field\": \"is_open_platform\", \"title\": \"开放平台账户开通状态\", templet: function (d) {
                return d.is_open_platform * 1 == 0 ? '未开通' : '已开通';
            }
        },
        {
            \"field\": \"is_agent_platform\", \"title\": \"代理商平台账户开通状态\", templet: function (d) {
                return d.is_agent_platform * 1 == 0 ? '未开通' : '已开通';
            }
        },
        {
            \"field\": \"is_supplier_platform\", \"title\": \"供应商平台账户开通状态\", templet: function (d) {
                return d.is_supplier_platform * 1 == 0 ? '未开通' : '已开通';
            }
        },
        {\"field\": \"referrer_name\", \"title\": \"注册邀请人\"},

        {\"field\": \"add_time\", \"title\": \"注册时间\", \"width\": 145},
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
            checked_ids.push(obj.data.id);
        } else {
            checked_ids.remove(obj.data.id);
        }
        //console.log(obj.type); //如果触发的是全选，则为：all，如果触发的是单选，则为：one
        //console.log(checked_ids);
    });

    \$('#pass-management').on('click', function (e) {
        var target = \$(e.target);

        if (target.is('.reverse-select') || target.parents().is('.reverse-select')) {
            \$('.layui-table-box').find('input:checkbox').next().each(function () {
                \$(this).toggleClass('layui-form-checked');
            })
        } else if (target.is('.set-status') || target.parents().is('.set-status')) {
            var status = target.attr('data-type');
            frozenUserStatus('{{ path(\"admin_users_set_pass_status\") }}', status, checked_ids);
        }
    });
</script>
", "Admin/User/pass_management_js.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\User\\pass_management_js.twig");
    }
}
