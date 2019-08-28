<?php

/* Reseller/Order/index.twig */
class __TwigTemplate_562ab9d8007bb19fc624c864f2f91095e37ebd262e58f4d1270fad993517db0c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Reseller/Common/layout.twig", "Reseller/Order/index.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Reseller/Common/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Order/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Order/index.twig"));

        // line 2
        $context["title"] = "我的订单-充值订单-";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 5
        echo "    <style type=\"text/css\">
        .page-content { border: 1px solid #E0E0E0; text-align: left }
        .m-side-nav .icon-nav { display: inline-block; width: 24px; height: 24px; font-size: 24px; }
        .m-side-nav .nav-title { padding: 0 26px; }
        .m-side-nav .nav-title span { width: 90px; margin-left: 15px; font-size: 14px; }
        .m-right { padding: 20px 0; }
        .m-table-total { height: auto; margin: 10px; padding: 10px; background: #d9efff; border: 1px solid #E0E0E0; }
        .m-table-total li { float: left; margin: 0 20px; }
        .m-screen { text-align: left; }
        .m-screen-item { padding-bottom: 25px; }
        .m-screen .rq { display: inline-block; margin-right: 10px; }
        .m-time input { width: 300px !important; }
        .m-tab-btn .layui-btn-small { height: 34px; }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 22
        echo "    <div class=\"page-content\">
        ";
        // line 23
        $this->loadTemplate("/Common/_productCategories.twig", "Reseller/Order/index.twig", 23)->display($context);
        // line 24
        echo "        ";
        $this->loadTemplate("Common/_carriers.twig", "Reseller/Order/index.twig", 24)->display($context);
        // line 25
        echo "        <div class=\"m-screen-item\">
            ";
        // line 26
        $this->loadTemplate("Reseller/Order/_form.twig", "Reseller/Order/index.twig", 26)->display($context);
        // line 27
        echo "        </div>
        <div class=\"m-tab-btn\">
            <button class=\"layui-btn layui-btn-small f-fnsna\" onclick=\"count_order(this);\">查看统计</button>
            <button class=\"layui-btn layui-btn-small f-fnsna\" onclick=\"export_cvs();\">导出订单</button>
        </div>
        <div class=\"m-table-total\" id=\"count_order_box\" style=\"display: none;\">
            <span id=\"count_wait_info\">正在统计中，请稍候...</span>
            <ul class=\"g-bdc\" id=\"count_ul_box\" style=\"display: none\">
                <li>成功订单：<span id=\"success_count\">0</span>笔（<span id=\"success_sum\">0</span>元,利润<span id=\"success_lirun\">0</span>元）
                </li>
                <li>失败订单：<span id=\"loser_count\">0</span>笔（<span id=\"loser_sum\">0</span>元）</li>
                <li>充值中订单：<span id=\"recharge_count\">0</span>笔（<span id=\"recharge_sum\">0</span>元）</li>
                <li>待付款订单：<span id=\"nopay_count\">0</span>笔（<span id=\"nopay_sum\">0</span>元）</li>
            </ul>
        </div>
        <div class=\"m-table g-bdc\">
            <table class=\"layui-hide f-fl\" id=\"data-table\"></table>
        </div>
    </div>
    <script>

        var url     = \"\";
        var columns = [
            [
                {\"field\": \"id\", \"title\": \"订单号\", \"width\": 250},
                {\"field\": \"isp_name\", \"title\": \"运营商\", \"width\": 70},
                {\"field\": \"phone_number\", \"title\": \"充值号码\", \"width\": 120},
                {\"field\": \"status\", \"title\": \"订单状态\", \"width\": 80},
                {\"field\": \"product_name\", \"title\": \"商品名称\"},
                {\"field\": \"product_face_value\", \"title\": \"商品面值\", \"width\": 80},
                {\"field\": \"recharge_amount\", \"title\": \"充值金额\", \"width\": 80},
                {\"field\": \"speed\", \"title\": \"充值速度\", \"width\": 80},
                {\"field\": \"add_time\", \"title\": \"下单时间\", \"width\": 150}
            ]
        ];

        //      layui.config({
        //          open: '<%',
        //          close: '%>'
        //      });
        layui.use('table', function () {
            get_data(url, columns);
        });

        function get_data() {
            var params = \$('#form').serialize();
            url        = '?' + params;
            rander_table('#data-table', url, columns);
        }

        function rander_table(elem, url, columns) {
            layui.table.render({
                elem:       elem
                , url:      url
                , cols:     columns
                , page:     { //支持传入 laypage 组件的所有参数（某些参数除外，如：jump/elem） - 详见文档
                    layout:   ['prev', 'page', 'next', 'skip', 'limit', 'count'] //自定义分页布局
                    , limits: [10, 25, 50, 100]
                    , limit:  50
                }
                , size:     'sm'
            });

            layui.table.on('tool(row-actions)', function (obj) { //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
                var data = obj.data; //获得当前行数据
                if (obj.event === 'set_default') {
                }
            });
        }
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Reseller/Order/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 27,  101 => 26,  98 => 25,  95 => 24,  93 => 23,  90 => 22,  81 => 21,  57 => 5,  48 => 4,  38 => 1,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Reseller/Common/layout.twig' %}
{% set title = '我的订单-充值订单-' %}

{% block css %}
    <style type=\"text/css\">
        .page-content { border: 1px solid #E0E0E0; text-align: left }
        .m-side-nav .icon-nav { display: inline-block; width: 24px; height: 24px; font-size: 24px; }
        .m-side-nav .nav-title { padding: 0 26px; }
        .m-side-nav .nav-title span { width: 90px; margin-left: 15px; font-size: 14px; }
        .m-right { padding: 20px 0; }
        .m-table-total { height: auto; margin: 10px; padding: 10px; background: #d9efff; border: 1px solid #E0E0E0; }
        .m-table-total li { float: left; margin: 0 20px; }
        .m-screen { text-align: left; }
        .m-screen-item { padding-bottom: 25px; }
        .m-screen .rq { display: inline-block; margin-right: 10px; }
        .m-time input { width: 300px !important; }
        .m-tab-btn .layui-btn-small { height: 34px; }
    </style>
{% endblock %}

{% block main_content %}
    <div class=\"page-content\">
        {% include \"/Common/_productCategories.twig\" %}
        {% include \"Common/_carriers.twig\" %}
        <div class=\"m-screen-item\">
            {% include \"Reseller/Order/_form.twig\" %}
        </div>
        <div class=\"m-tab-btn\">
            <button class=\"layui-btn layui-btn-small f-fnsna\" onclick=\"count_order(this);\">查看统计</button>
            <button class=\"layui-btn layui-btn-small f-fnsna\" onclick=\"export_cvs();\">导出订单</button>
        </div>
        <div class=\"m-table-total\" id=\"count_order_box\" style=\"display: none;\">
            <span id=\"count_wait_info\">正在统计中，请稍候...</span>
            <ul class=\"g-bdc\" id=\"count_ul_box\" style=\"display: none\">
                <li>成功订单：<span id=\"success_count\">0</span>笔（<span id=\"success_sum\">0</span>元,利润<span id=\"success_lirun\">0</span>元）
                </li>
                <li>失败订单：<span id=\"loser_count\">0</span>笔（<span id=\"loser_sum\">0</span>元）</li>
                <li>充值中订单：<span id=\"recharge_count\">0</span>笔（<span id=\"recharge_sum\">0</span>元）</li>
                <li>待付款订单：<span id=\"nopay_count\">0</span>笔（<span id=\"nopay_sum\">0</span>元）</li>
            </ul>
        </div>
        <div class=\"m-table g-bdc\">
            <table class=\"layui-hide f-fl\" id=\"data-table\"></table>
        </div>
    </div>
    <script>

        var url     = \"\";
        var columns = [
            [
                {\"field\": \"id\", \"title\": \"订单号\", \"width\": 250},
                {\"field\": \"isp_name\", \"title\": \"运营商\", \"width\": 70},
                {\"field\": \"phone_number\", \"title\": \"充值号码\", \"width\": 120},
                {\"field\": \"status\", \"title\": \"订单状态\", \"width\": 80},
                {\"field\": \"product_name\", \"title\": \"商品名称\"},
                {\"field\": \"product_face_value\", \"title\": \"商品面值\", \"width\": 80},
                {\"field\": \"recharge_amount\", \"title\": \"充值金额\", \"width\": 80},
                {\"field\": \"speed\", \"title\": \"充值速度\", \"width\": 80},
                {\"field\": \"add_time\", \"title\": \"下单时间\", \"width\": 150}
            ]
        ];

        //      layui.config({
        //          open: '<%',
        //          close: '%>'
        //      });
        layui.use('table', function () {
            get_data(url, columns);
        });

        function get_data() {
            var params = \$('#form').serialize();
            url        = '?' + params;
            rander_table('#data-table', url, columns);
        }

        function rander_table(elem, url, columns) {
            layui.table.render({
                elem:       elem
                , url:      url
                , cols:     columns
                , page:     { //支持传入 laypage 组件的所有参数（某些参数除外，如：jump/elem） - 详见文档
                    layout:   ['prev', 'page', 'next', 'skip', 'limit', 'count'] //自定义分页布局
                    , limits: [10, 25, 50, 100]
                    , limit:  50
                }
                , size:     'sm'
            });

            layui.table.on('tool(row-actions)', function (obj) { //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
                var data = obj.data; //获得当前行数据
                if (obj.event === 'set_default') {
                }
            });
        }
    </script>

{% endblock %}
", "Reseller/Order/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Order\\index.twig");
    }
}
