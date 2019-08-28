<?php

/* /Supplier/Finance/withdraw_js.twig */
class __TwigTemplate_cacddd0744463b69efc8f07c06aceeda2d84d6df3c1270d994339692f56c49a1 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Supplier/Finance/withdraw_js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Supplier/Finance/withdraw_js.twig"));

        // line 1
        echo "<script>
    var trade_statuses = JSON.parse('";
        // line 2
        echo json_encode(twig_constant("App\\Common\\Model\\Payment\\SellCashUserLog::TRADE_STATUSES"));
        echo "');
    var url = \"\";
    var columns = [[
        {\"field\": \"id\", \"title\": \"提现记录编号\"},
        {
            \"field\": \"trade_status\", \"title\": \"提现状态\", templet: function (d) {
                return trade_statuses[d.trade_status];
            }
        },
        {\"field\": \"get_cash\", \"title\": \"申请提现金额\"},
        {\"field\": \"shouxu_cash\", \"title\": \"手续费\"},
        {\"field\": \"actual_cash\", \"title\": \"预计到账金额\"},
        {
            \"field\": \"log_type\", \"title\": \"提现账户\", \"width\": 150, templet: function (d) {
                return d.account_user + ',' + d.account_num + '('+ d.account_bank_name +')';
            }
        },
        {\"field\": \"info\", \"title\": \"备注\"},
        {\"field\": \"add_time\", \"title\": \"时间\", templet: \"#add_time\"},
        {\"field\": \"edit_time\", \"title\": \"审核时间\", templet: \"#edit_time\"},
        {\"field\": \"remark\", \"title\": \"平台备注\"}
    ]];

    function get_data() {
        var params = \$('form#trade-list').serialize();
        url = '?' + params;
        rander_table('#trade-list-table', url, columns);
    }

    // 初始化
    get_data();
    form.render();

    \$(document).on('click', function (e) {
        var target = \$(e.target);
    });

</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/Supplier/Finance/withdraw_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    var trade_statuses = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Payment\\\\SellCashUserLog::TRADE_STATUSES\")|json_encode|raw }}');
    var url = \"\";
    var columns = [[
        {\"field\": \"id\", \"title\": \"提现记录编号\"},
        {
            \"field\": \"trade_status\", \"title\": \"提现状态\", templet: function (d) {
                return trade_statuses[d.trade_status];
            }
        },
        {\"field\": \"get_cash\", \"title\": \"申请提现金额\"},
        {\"field\": \"shouxu_cash\", \"title\": \"手续费\"},
        {\"field\": \"actual_cash\", \"title\": \"预计到账金额\"},
        {
            \"field\": \"log_type\", \"title\": \"提现账户\", \"width\": 150, templet: function (d) {
                return d.account_user + ',' + d.account_num + '('+ d.account_bank_name +')';
            }
        },
        {\"field\": \"info\", \"title\": \"备注\"},
        {\"field\": \"add_time\", \"title\": \"时间\", templet: \"#add_time\"},
        {\"field\": \"edit_time\", \"title\": \"审核时间\", templet: \"#edit_time\"},
        {\"field\": \"remark\", \"title\": \"平台备注\"}
    ]];

    function get_data() {
        var params = \$('form#trade-list').serialize();
        url = '?' + params;
        rander_table('#trade-list-table', url, columns);
    }

    // 初始化
    get_data();
    form.render();

    \$(document).on('click', function (e) {
        var target = \$(e.target);
    });

</script>
", "/Supplier/Finance/withdraw_js.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Supplier\\Finance\\withdraw_js.twig");
    }
}
