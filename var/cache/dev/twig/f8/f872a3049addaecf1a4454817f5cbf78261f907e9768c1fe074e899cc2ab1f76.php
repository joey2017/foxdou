<?php

/* Reseller/Product/index.twig */
class __TwigTemplate_ebe4ccf80b428095014e09cea011050fd317a0537e35d279306fc0d8a282b526 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Reseller/Common/layout.twig", "Reseller/Product/index.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Product/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Product/index.twig"));

        // line 2
        $context["title"] = "我的商品";
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
        echo "  <style type=\"text/css\">
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

    // line 22
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 23
        echo "  <div class=\"page-content\">
    ";
        // line 24
        $this->loadTemplate("Common/_productCategories.twig", "Reseller/Product/index.twig", 24)->display($context);
        // line 25
        echo "    ";
        $this->loadTemplate("Common/_carriers.twig", "Reseller/Product/index.twig", 25)->display($context);
        // line 26
        echo "    <div class=\"m-screen-item\">
      ";
        // line 27
        $this->loadTemplate("Reseller/Product/_form.twig", "Reseller/Product/index.twig", 27)->display($context);
        // line 28
        echo "    </div>
    <div class=\"m-table g-bdc\">
      <table class=\"layui-hide f-fl\" id=\"data-table\"></table>
      ";
        // line 32
        echo "        ";
        // line 33
        echo "          ";
        // line 34
        echo "          ";
        // line 35
        echo "          ";
        // line 36
        echo "          ";
        // line 37
        echo "          ";
        // line 38
        echo "          ";
        // line 39
        echo "          ";
        // line 40
        echo "          ";
        // line 41
        echo "          ";
        // line 42
        echo "        ";
        // line 43
        echo "        ";
        // line 44
        echo "        ";
        // line 45
        echo "      ";
        // line 46
        echo "    </div>
    <!-- /订单管理 -->
  </div>

  <script>
      layui.use('table', function () {
          get_data('');
      });

      function rander_table(url) {
          var table = layui.table;
          table.render({
              elem:   '#data-table'
//            ,cellMinWidth: 80
              , url:  url
              , cols: [
                  [
                      {\"field\": \"product_id\", \"title\": \"编号\", \"width\": 80},
                      {\"field\": \"name\", \"title\": \"商品名称\"},
                      {\"field\": \"face_value\", \"title\": \"商品面值\", \"width\": 100},
                      {\"field\": \"num\", \"title\": \"可购数量\", \"width\": 90},
                      {\"field\": \"sell_price\", \"title\": \"成本\", \"width\": 80},
                      {\"field\": \"real_sell_price\", \"title\": \"零售价\", \"width\": 90},
                      {\"field\": \"status\", \"title\": \"商品状态\", \"width\": 90},
                      {\"field\": \"speed\", \"title\": \"充值类型\", \"width\": 90}
                  ]
              ]
              , page: { //支持传入 laypage 组件的所有参数（某些参数除外，如：jump/elem） - 详见文档
                  layout:   ['prev', 'page', 'next', 'skip', 'limit', 'count'] //自定义分页布局
                  , first:  true //不显示首页
                  , last:   false //不显示尾页
                  , limit:  2
                  , limits: [2, 25, 50, 100]
              }
              , id:   \"order_id\"
              , text: \"暂无相关数据\"
          });

      }
      \$('#icp li').click(function () {
          \$(this).addClass('tab-this');
          \$(this).siblings().removeClass('tab-this');
          var icp = \$(this).attr('value');
          \$('#icp_value').val(icp == '' ? '' : icp);
          get_data();
      });

      function get_data(url) {
          url = url ? url : \"\";
          var params = \$('#form').serialize();
          var url    = url + '?' + params;
          rander_table(url);
      }
  </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Reseller/Product/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 46,  135 => 45,  133 => 44,  131 => 43,  129 => 42,  127 => 41,  125 => 40,  123 => 39,  121 => 38,  119 => 37,  117 => 36,  115 => 35,  113 => 34,  111 => 33,  109 => 32,  104 => 28,  102 => 27,  99 => 26,  96 => 25,  94 => 24,  91 => 23,  82 => 22,  57 => 5,  48 => 4,  38 => 1,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Reseller/Common/layout.twig' %}
{% set title = '我的商品' %}

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
    {% include \"Common/_productCategories.twig\" %}
    {% include \"Common/_carriers.twig\" %}
    <div class=\"m-screen-item\">
      {% include \"Reseller/Product/_form.twig\" %}
    </div>
    <div class=\"m-table g-bdc\">
      <table class=\"layui-hide f-fl\" id=\"data-table\"></table>
      {#<table class=\"f-fl\">#}
        {#<thead>#}
          {#<th>商品编号</th>#}
          {#<th>商品名称</th>#}
          {#<th>商品面值</th>#}
          {#<th>可购数量</th>#}
          {#<th>成本</th>#}
          {#<th>零售价</th>#}
          {#<th>商品状态</th>#}
          {#<th>充值类型</th>#}
          {#<th>操作</th>#}
        {#</thead>#}
        {#<tbody id=\"data-table\">#}
        {#</tbody>#}
      {#</table>#}
    </div>
    <!-- /订单管理 -->
  </div>

  <script>
      layui.use('table', function () {
          get_data('');
      });

      function rander_table(url) {
          var table = layui.table;
          table.render({
              elem:   '#data-table'
//            ,cellMinWidth: 80
              , url:  url
              , cols: [
                  [
                      {\"field\": \"product_id\", \"title\": \"编号\", \"width\": 80},
                      {\"field\": \"name\", \"title\": \"商品名称\"},
                      {\"field\": \"face_value\", \"title\": \"商品面值\", \"width\": 100},
                      {\"field\": \"num\", \"title\": \"可购数量\", \"width\": 90},
                      {\"field\": \"sell_price\", \"title\": \"成本\", \"width\": 80},
                      {\"field\": \"real_sell_price\", \"title\": \"零售价\", \"width\": 90},
                      {\"field\": \"status\", \"title\": \"商品状态\", \"width\": 90},
                      {\"field\": \"speed\", \"title\": \"充值类型\", \"width\": 90}
                  ]
              ]
              , page: { //支持传入 laypage 组件的所有参数（某些参数除外，如：jump/elem） - 详见文档
                  layout:   ['prev', 'page', 'next', 'skip', 'limit', 'count'] //自定义分页布局
                  , first:  true //不显示首页
                  , last:   false //不显示尾页
                  , limit:  2
                  , limits: [2, 25, 50, 100]
              }
              , id:   \"order_id\"
              , text: \"暂无相关数据\"
          });

      }
      \$('#icp li').click(function () {
          \$(this).addClass('tab-this');
          \$(this).siblings().removeClass('tab-this');
          var icp = \$(this).attr('value');
          \$('#icp_value').val(icp == '' ? '' : icp);
          get_data();
      });

      function get_data(url) {
          url = url ? url : \"\";
          var params = \$('#form').serialize();
          var url    = url + '?' + params;
          rander_table(url);
      }
  </script>

{% endblock %}
", "Reseller/Product/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Product\\index.twig");
    }
}
