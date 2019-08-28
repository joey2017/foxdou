<?php

/* /Supplier/Finance/detail_js.twig */
class __TwigTemplate_605b2423edc78be4f7c02cd5d5f74632347b25c243f141ed51e4a6228ce2c0a6 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Supplier/Finance/detail_js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Supplier/Finance/detail_js.twig"));

        // line 1
        echo "<script>
    var log_types = JSON.parse('";
        // line 2
        echo json_encode(twig_constant("App\\Common\\Model\\Payment\\UserMoneyLog::LOG_TYPES"));
        echo "');
    var url = \"\";
    var columns = [[
        {\"field\": \"trade_id\", \"title\": \"交易流水号\"},
        {\"field\": \"order_id\", \"title\": \"业务单号\"},
        {\"field\": \"name\", \"title\": \"交易名称\"},
        {
            \"field\": \"log_type\", \"title\": \"交易类型\", \"width\": 150, templet: function (d) {
                return log_types[d.log_type[2]];
            }
        },
        {\"field\": \"amount\", \"title\": \"交易金额\"},
        {\"field\": \"trade_status\", \"title\": \"交易后余额\"},
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
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_finance_detail");
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
        return "/Supplier/Finance/detail_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 47,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    var log_types = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Payment\\\\UserMoneyLog::LOG_TYPES\")|json_encode|raw }}');
    var url = \"\";
    var columns = [[
        {\"field\": \"trade_id\", \"title\": \"交易流水号\"},
        {\"field\": \"order_id\", \"title\": \"业务单号\"},
        {\"field\": \"name\", \"title\": \"交易名称\"},
        {
            \"field\": \"log_type\", \"title\": \"交易类型\", \"width\": 150, templet: function (d) {
                return log_types[d.log_type[2]];
            }
        },
        {\"field\": \"amount\", \"title\": \"交易金额\"},
        {\"field\": \"trade_status\", \"title\": \"交易后余额\"},
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
                nxwd.ajaxRequest('{{ path(\"supplier_finance_detail\") }}?'+params,'GET',{count:'yes'},'json',success);

                \$('#show-count').show();

            }else {
                \$('#show-count').hide();
            }

        }
    });

</script>
", "/Supplier/Finance/detail_js.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Supplier\\Finance\\detail_js.twig");
    }
}
