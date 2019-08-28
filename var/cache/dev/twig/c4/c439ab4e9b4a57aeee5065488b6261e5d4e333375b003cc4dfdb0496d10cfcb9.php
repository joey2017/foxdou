<?php

/* /Supplier/Finance/withdraw_account_js.twig */
class __TwigTemplate_487afbc38fa9c7188021a359d8683d99155f577304b708145a6b3f1a74755a56 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Supplier/Finance/withdraw_account_js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Supplier/Finance/withdraw_account_js.twig"));

        // line 1
        echo "<script>
    var verify_statuses = JSON.parse('";
        // line 2
        echo json_encode(twig_constant("App\\Common\\Model\\Payment\\CashUserAccount::VERIFY_STATUSES"));
        echo "');
    var url = \"\";
    var columns = [[
        {\"field\": \"id\", \"title\": \"提现账户编号\"},
        {\"field\": \"account_bank_name\", \"title\": \"银行\"},
        {\"field\": \"account_place\", \"title\": \"开户行名称\"},
        {\"field\": \"account_user\", \"title\": \"姓名\"},
        {\"field\": \"account_num\", \"title\": \"账号\"},
        {\"field\": \"shenfenzheng_id\", \"title\": \"身份证\"},
        {\"field\": \"mobile\", \"title\": \"绑定手机号\"},
        {\"field\": \"info\", \"title\": \"备注\"},
        {
            \"field\": \"verify_status\", \"title\": \"审核状态\", templet: function(d){
                return verify_statuses[d.verify_status]
            }
        },
        {\"field\": \"add_time\", \"title\": \"添加时间\", templet: \"#add_time\"},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\", \"width\": 200}
    ]];

    function get_data() {
        var params = \$('form#trade-list').serialize();
        url = '?' + params;
        rander_table('#trade-list-table', url, columns);
    }

    // 初始化
    get_data();
    form.render();

    table.on('tool(trade-list-table)', function (obj) {
        var data = obj.data;
        var layEvent = obj.event;

        if (layEvent === 'delete') { //移除
            nxwd.ajaxDelete('";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_finance_del_withdraw_account");
        echo "',this,false,data.id);
        }
    });

    \$('#add-withdraw-account').on('click',function(){
        window.location.href = '";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_finance_add_withdraw_account");
        echo "';
    });

</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/Supplier/Finance/withdraw_account_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 42,  70 => 37,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    var verify_statuses = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Payment\\\\CashUserAccount::VERIFY_STATUSES\")|json_encode|raw }}');
    var url = \"\";
    var columns = [[
        {\"field\": \"id\", \"title\": \"提现账户编号\"},
        {\"field\": \"account_bank_name\", \"title\": \"银行\"},
        {\"field\": \"account_place\", \"title\": \"开户行名称\"},
        {\"field\": \"account_user\", \"title\": \"姓名\"},
        {\"field\": \"account_num\", \"title\": \"账号\"},
        {\"field\": \"shenfenzheng_id\", \"title\": \"身份证\"},
        {\"field\": \"mobile\", \"title\": \"绑定手机号\"},
        {\"field\": \"info\", \"title\": \"备注\"},
        {
            \"field\": \"verify_status\", \"title\": \"审核状态\", templet: function(d){
                return verify_statuses[d.verify_status]
            }
        },
        {\"field\": \"add_time\", \"title\": \"添加时间\", templet: \"#add_time\"},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\", \"width\": 200}
    ]];

    function get_data() {
        var params = \$('form#trade-list').serialize();
        url = '?' + params;
        rander_table('#trade-list-table', url, columns);
    }

    // 初始化
    get_data();
    form.render();

    table.on('tool(trade-list-table)', function (obj) {
        var data = obj.data;
        var layEvent = obj.event;

        if (layEvent === 'delete') { //移除
            nxwd.ajaxDelete('{{ path(\"supplier_finance_del_withdraw_account\") }}',this,false,data.id);
        }
    });

    \$('#add-withdraw-account').on('click',function(){
        window.location.href = '{{ path(\"supplier_finance_add_withdraw_account\") }}';
    });

</script>
", "/Supplier/Finance/withdraw_account_js.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Supplier\\Finance\\withdraw_account_js.twig");
    }
}
