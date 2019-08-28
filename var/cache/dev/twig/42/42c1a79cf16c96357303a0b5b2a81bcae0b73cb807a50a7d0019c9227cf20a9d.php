<?php

/* /Supplier/Finance/index_js.twig */
class __TwigTemplate_f0ca9ed37ef0016da61f3689e0b2d1705205d0023c89f8c2b90bba52b7b6eddd extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Supplier/Finance/index_js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Supplier/Finance/index_js.twig"));

        // line 1
        echo "<script>
    var statuses = JSON.parse('";
        // line 2
        echo json_encode(twig_constant("App\\Common\\Model\\Payment\\UserMoneyTradeLog::TRADE_STATUSES"));
        echo "');
    var url = \"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_finance_trade_list");
        echo "\";
    var columns = [[
        {\"field\": \"add_time\", \"title\": \"交易时间\",templet:\"#add_time\"},
        {\"field\": \"name\", \"title\": \"商品名称\"},
        {\"field\": \"amount\", \"title\": \"价格\"},
        {
            \"field\": \"trade_status\", \"title\": \"状态\", \"width\": 150, templet: function (d) {
                return statuses[d.trade_status];
            }
        },
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\", \"width\": 200}
    ]];

    function get_data() {
        rander_table('#page-table', url, columns);
    }

    // 初始化
    get_data();
    form.render();

    table.on('tool(page-table)', function (obj) {
        var data = obj.data;
        var layEvent = obj.event;

        if (layEvent === 'detail') { //查看模板下商品

            window.location.href = '";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_product_source_groups_products_list");
        echo "?template_id='+data.id+'&produc_cate_id='+data.produc_cate_id;
        }
    });
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/Supplier/Finance/index_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 30,  36 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    var statuses = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Payment\\\\UserMoneyTradeLog::TRADE_STATUSES\")|json_encode|raw }}');
    var url = \"{{ path('supplier_finance_trade_list') }}\";
    var columns = [[
        {\"field\": \"add_time\", \"title\": \"交易时间\",templet:\"#add_time\"},
        {\"field\": \"name\", \"title\": \"商品名称\"},
        {\"field\": \"amount\", \"title\": \"价格\"},
        {
            \"field\": \"trade_status\", \"title\": \"状态\", \"width\": 150, templet: function (d) {
                return statuses[d.trade_status];
            }
        },
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\", \"width\": 200}
    ]];

    function get_data() {
        rander_table('#page-table', url, columns);
    }

    // 初始化
    get_data();
    form.render();

    table.on('tool(page-table)', function (obj) {
        var data = obj.data;
        var layEvent = obj.event;

        if (layEvent === 'detail') { //查看模板下商品

            window.location.href = '{{ path(\"supplier_product_source_groups_products_list\") }}?template_id='+data.id+'&produc_cate_id='+data.produc_cate_id;
        }
    });
</script>
", "/Supplier/Finance/index_js.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Supplier\\Finance\\index_js.twig");
    }
}
