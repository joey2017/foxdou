<?php

/* /Supplier/Finance/trade_list_js.twig */
class __TwigTemplate_bcde9db1b526a2c2321a4c4d420c4d4ba4cbbec61f4a782ebf80748f934c85b6 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Supplier/Finance/trade_list_js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Supplier/Finance/trade_list_js.twig"));

        // line 1
        echo "<script>
    var trade_log_types = JSON.parse('";
        // line 2
        echo json_encode(twig_constant("App\\Common\\Model\\Payment\\UserMoneyTradeLog::TRADE_TYPES"));
        echo "');
    var trade_statuses = JSON.parse('";
        // line 3
        echo json_encode(twig_constant("App\\Common\\Model\\Payment\\UserMoneyTradeLog::TRADE_STATUSES"));
        echo "');
    var payment_class_ids = JSON.parse('";
        // line 4
        echo json_encode(twig_constant("App\\PaymentConstants::PAYMENT_METHOD_CLASSES"));
        echo "');
    var url = \"\";
    var columns = [[
        {\"field\": \"outer_sn\", \"title\": \"交易流水号\", \"width\": 150},
        {\"field\": \"order_id\", \"title\": \"业务单号\", \"width\": 150},
        {\"field\": \"name\", \"title\": \"交易名称\"},
        {
            \"field\": \"trade_log_type\", \"title\": \"交易类型\", \"width\": 150, templet: function (d) {
                return trade_log_types[d.trade_log_type];
            }
        },
        {\"field\": \"amount\", \"title\": \"金额\"},
        {
            \"field\": \"trade_status\", \"title\": \"交易状态\", templet: function (d) {
                return trade_statuses[d.trade_status];
            }
        },
        {
            \"field\": \"payment_class_id\", \"title\": \"支付方式\", templet: function (d) {
                return payment_class_ids[d.payment_class_id]
            }
        },
        {\"field\": \"add_time\", \"title\": \"时间\", templet: \"#add_time\"},
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

    \$(document).on('click', function (e) {
        var target = \$(e.target);
        if (target.is('#statics') || target.parents().is('#statics')) {

            if (\$('#show-count').css('display') == 'none') {
                var success = function(res) {
                    var income_count = res.income.count || 0;
                    var income_amount = res.income.amount || 0;
                    var payment_count = res.payment.count || '0.00';
                    var payment_amount = res.payment.amount || '0.00';

                    \$('.income-count').text(income_count);
                    \$('.income-money').text(income_amount);
                    \$('.payment-count').text(payment_count);
                    \$('.payment-money').text(payment_amount);

                }
                var params = \$('form#trade-list').serialize();
                nxwd.ajaxRequest('";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_finance_trade_list");
        echo "?'+params,'GET',{count:'yes'},'json',success);

                \$('#show-count').show();

            }else {
                \$('#show-count').hide();
            }

        }
    });

</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/Supplier/Finance/trade_list_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 58,  40 => 4,  36 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    var trade_log_types = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Payment\\\\UserMoneyTradeLog::TRADE_TYPES\")|json_encode|raw }}');
    var trade_statuses = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Payment\\\\UserMoneyTradeLog::TRADE_STATUSES\")|json_encode|raw }}');
    var payment_class_ids = JSON.parse('{{ constant(\"App\\\\PaymentConstants::PAYMENT_METHOD_CLASSES\")|json_encode|raw }}');
    var url = \"\";
    var columns = [[
        {\"field\": \"outer_sn\", \"title\": \"交易流水号\", \"width\": 150},
        {\"field\": \"order_id\", \"title\": \"业务单号\", \"width\": 150},
        {\"field\": \"name\", \"title\": \"交易名称\"},
        {
            \"field\": \"trade_log_type\", \"title\": \"交易类型\", \"width\": 150, templet: function (d) {
                return trade_log_types[d.trade_log_type];
            }
        },
        {\"field\": \"amount\", \"title\": \"金额\"},
        {
            \"field\": \"trade_status\", \"title\": \"交易状态\", templet: function (d) {
                return trade_statuses[d.trade_status];
            }
        },
        {
            \"field\": \"payment_class_id\", \"title\": \"支付方式\", templet: function (d) {
                return payment_class_ids[d.payment_class_id]
            }
        },
        {\"field\": \"add_time\", \"title\": \"时间\", templet: \"#add_time\"},
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

    \$(document).on('click', function (e) {
        var target = \$(e.target);
        if (target.is('#statics') || target.parents().is('#statics')) {

            if (\$('#show-count').css('display') == 'none') {
                var success = function(res) {
                    var income_count = res.income.count || 0;
                    var income_amount = res.income.amount || 0;
                    var payment_count = res.payment.count || '0.00';
                    var payment_amount = res.payment.amount || '0.00';

                    \$('.income-count').text(income_count);
                    \$('.income-money').text(income_amount);
                    \$('.payment-count').text(payment_count);
                    \$('.payment-money').text(payment_amount);

                }
                var params = \$('form#trade-list').serialize();
                nxwd.ajaxRequest('{{ path(\"supplier_finance_trade_list\") }}?'+params,'GET',{count:'yes'},'json',success);

                \$('#show-count').show();

            }else {
                \$('#show-count').hide();
            }

        }
    });

</script>
", "/Supplier/Finance/trade_list_js.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Supplier\\Finance\\trade_list_js.twig");
    }
}
