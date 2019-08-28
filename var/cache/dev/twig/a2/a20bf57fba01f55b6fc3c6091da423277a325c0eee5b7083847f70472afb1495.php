<?php

/* Reseller/Finance/fundingLogs.twig */
class __TwigTemplate_a6ebcdb7cd6258206bd15b3c5d648768032d6cf4302481633b817d1eca0c1501 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Reseller/Common/layout.twig", "Reseller/Finance/fundingLogs.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Finance/fundingLogs.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Finance/fundingLogs.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("Common/simple_form_helpers.html.twig", "Reseller/Finance/fundingLogs.twig", 2);
        // line 4
        $context["title"] = "我的财务-充值记录";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 10
        echo "  ";
        $this->loadTemplate("Reseller/Finance/commonCss.twig", "Reseller/Finance/fundingLogs.twig", 10)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 14
        echo "  <div class=\"caiwu-left\" style=\"float: left; width: calc(100% - 380px);height: auto;border:1px solid #E0E0E0;\">
    <div class=\"panel-item g-bdc\">
      <div style=\"\">
        ";
        // line 17
        $this->loadTemplate("Reseller/Finance/financeTabs.twig", "Reseller/Finance/fundingLogs.twig", 17)->display($context);
        // line 18
        echo "        <div class=\"m-screen-item\">
          <form action=\"\" method=\"get\" id=\"get-search\" class=\"layui-form\">
            <div class=\"layui-form-item m-screen\">

              <div class=\"g-bdc rq\" style=\"width: 180px\">
                <label class=\"layui-form-label m-screen-label\">流水号</label>
                <div class=\"layui-input-inline m-input-block\" style=\"width: 100px\">
                  ";
        // line 25
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "order_id", array()), array("class" => "layui-input", "placeholder" => "流水号", "style" => ""));
        echo "
                </div>
                ";
        // line 27
        echo $context["sf"]->macro_error(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "order_id", array()));
        echo "
              </div>
              <div class=\"g-bdc rq\" style=\"width: 230px\">
                <label class=\"layui-form-label m-screen-label\">支付方式</label>
                <div class=\"layui-input-inline m-input-block\" style=\"width: 150px\">
                  ";
        // line 32
        echo $context["sf"]->macro_select(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "payment_method", array()), twig_array_merge(array(0 => array("name" => "全部", "value" => "")), (isset($context["payment_methods"]) || array_key_exists("payment_methods", $context) ? $context["payment_methods"] : (function () { throw new Twig_Error_Runtime('Variable "payment_methods" does not exist.', 32, $this->source); })())));
        echo "
                </div>
              </div>
              <div class=\"g-bdc rq\" style=\"width: 180px\">
                <label class=\"layui-form-label m-screen-label\">充值状态</label>
                <div class=\"layui-input-inline m-input-block\" style=\"width: 100px\">
                  ";
        // line 38
        echo $context["sf"]->macro_select(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "status", array()), twig_array_merge(array(0 => array("name" => "全部", "value" => "")), (isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new Twig_Error_Runtime('Variable "statuses" does not exist.', 38, $this->source); })())));
        echo "
                </div>
              </div>
              <div class=\"g-bdc rq\" style=\"width: 310px;\">
                <div class=\"layui-input-inline m-input-block\" style=\"width: 90px;\">
                  ";
        // line 43
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), "from", array()), array("class" => "layui-input f-fnsna datepicker", "placeholder" => "开始时间", "style" => ""));
        echo "
                </div>
                <div class=\"layui-input-inline m-input-block\" style=\"width: 90px;\">
                  ";
        // line 46
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "to", array()), array("class" => "layui-input f-fnsna datepicker", "placeholder" => "结束时间", "style" => ""));
        echo "
                </div>
              </div>
            </div>
            <div class=\"m-cx btn-location\">
              <button class=\"layui-btn\" onclick=\"get_trade_data();return false;\">查 询</button>
            </div>
            <div style=\"clear: both;\"></div>
            ";
        // line 55
        echo "          </form>
        </div>
      </div>
      <div class=\"m-tab-btn\">
        <button class=\"layui-btn layui-btn-small f-fnsna\" onclick=\"show_count(this)\">查看统计</button>
      </div>

      <div class=\"m-table-total\" style=\"display: none;\">
        <ul class=\"g-bdc\">
          <li>总计：<span id=\"shouru_count\"></span>（<span id=\"shouru_sum_money\"></span>）</li>
        </ul>
      </div>


      <div class=\"record-table g-bdc\">
        <table class=\"\">
          <thead>
          <tr>
            <th>充值单号</th>
            <th>交易名称</th>
            <th>金额</th>
            <th>交易状态</th>
            <th>支付方式</th>
            <th>时间</th>
          </tr>
          </thead>
          <tbody id=\"data-table\">

          ";
        // line 83
        $context["order_statuses"] = twig_constant("App\\Common\\Model\\Payment\\RechargeOrder::STATUSES");
        // line 84
        echo "          ";
        $context["payment_methods"] = twig_constant("App\\PaymentConstants::PAYMENT_METHOD_CLASSES");
        // line 85
        echo "
          ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new Twig_Error_Runtime('Variable "rows" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 87
            echo "            <tr>
              <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "product_name", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "amount", array()), 2), "html", null, true);
            echo "</td>
              <td>";
            // line 91
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["order_statuses"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "status", array()), array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["order_statuses"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "status", array()), array(), "array"), (("未知状态(" . twig_get_attribute($this->env, $this->source, $context["order"], "status", array())) . ")"))) : ((("未知状态(" . twig_get_attribute($this->env, $this->source, $context["order"], "status", array())) . ")"))), "html", null, true);
            echo "</td>
              <td>";
            // line 92
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["payment_methods"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "payment_class_id", array()), array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["payment_methods"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "payment_class_id", array()), array(), "array"), (("未知状态(" . twig_get_attribute($this->env, $this->source, $context["order"], "payment_class_id", array())) . ")"))) : ((("未知状态(" . twig_get_attribute($this->env, $this->source, $context["order"], "payment_class_id", array())) . ")"))), "html", null, true);
            echo "</td>
              <td>";
            // line 93
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "add_time", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "          </tbody>
        </table>
      </div>
    </div>
  </div>
  ";
        // line 101
        $this->loadTemplate("Reseller/Common/_rightPanel.twig", "Reseller/Finance/fundingLogs.twig", 101)->display($context);
        // line 102
        echo "
  <script type=\"text/javascript\">
      var show_count_num=";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["row_count"]) || array_key_exists("row_count", $context) ? $context["row_count"] : (function () { throw new Twig_Error_Runtime('Variable "row_count" does not exist.', 104, $this->source); })()), "html", null, true);
        echo ";
      function show_count(dom){
          if(\$(dom).text()=='查看统计'){
              \$('.m-table-total').css('display','block');
              var params=\$('form').serialize();
              if(show_count_num == 0){
                  \$.get(\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_finance_funding_summary");
        echo "?\" + params,'',function (data) {
                      \$('#shouru_count').text(data.summary.count+'笔');
                      \$('#shouru_sum_money').text(data.summary.sum_money+'元');
                  });
              }
              \$(dom).text('关闭统计')
          }else if(\$(dom).text()=='关闭统计'){
              \$('.m-table-total').css('display','none');
              \$(dom).text('查看统计')
          }
      }


      layui.use(['form', 'laydate'], function(){
          var form = layui.form
              ,layer = layui.layer
              ,laydate = layui.laydate;

          laydate.render( {
              elem: '#from'
              ,type: 'date'
          });
          laydate.render({
              elem: '#to'
              ,type: 'date'
          });
      });


      function export_cvs(){
          var count_data_num = ";
        // line 140
        echo twig_escape_filter($this->env, (isset($context["row_count"]) || array_key_exists("row_count", $context) ? $context["row_count"] : (function () { throw new Twig_Error_Runtime('Variable "row_count" does not exist.', 140, $this->source); })()), "html", null, true);
        echo ";
          if(count_data_num == 0){
              layer.msg('无数据不能导出');
              return;
          }

          var params = \$('form').serialize();
          location.href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_finance_trade_logs_export");
        echo "?\" + params;
      }



  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Reseller/Finance/fundingLogs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 147,  294 => 140,  261 => 110,  252 => 104,  248 => 102,  246 => 101,  239 => 96,  230 => 93,  226 => 92,  222 => 91,  218 => 90,  214 => 89,  210 => 88,  207 => 87,  203 => 86,  200 => 85,  197 => 84,  195 => 83,  165 => 55,  154 => 46,  148 => 43,  140 => 38,  131 => 32,  123 => 27,  118 => 25,  109 => 18,  107 => 17,  102 => 14,  93 => 13,  82 => 10,  73 => 9,  60 => 7,  51 => 6,  41 => 1,  39 => 4,  37 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Reseller/Common/layout.twig' %}
{% import ('Common/simple_form_helpers.html.twig') as sf %}

{% set title = '我的财务-充值记录' %}

{% block title %}
  {{ title }}
{% endblock %}
{% block css %}
  {% include \"Reseller/Finance/commonCss.twig\" %}
{% endblock %}

{% block main_content %}
  <div class=\"caiwu-left\" style=\"float: left; width: calc(100% - 380px);height: auto;border:1px solid #E0E0E0;\">
    <div class=\"panel-item g-bdc\">
      <div style=\"\">
        {% include \"Reseller/Finance/financeTabs.twig\" %}
        <div class=\"m-screen-item\">
          <form action=\"\" method=\"get\" id=\"get-search\" class=\"layui-form\">
            <div class=\"layui-form-item m-screen\">

              <div class=\"g-bdc rq\" style=\"width: 180px\">
                <label class=\"layui-form-label m-screen-label\">流水号</label>
                <div class=\"layui-input-inline m-input-block\" style=\"width: 100px\">
                  {{ sf.text(form.order_id,  {'class': 'layui-input',  'placeholder': '流水号', 'style': ''}) }}
                </div>
                {{ sf.error(form.order_id) }}
              </div>
              <div class=\"g-bdc rq\" style=\"width: 230px\">
                <label class=\"layui-form-label m-screen-label\">支付方式</label>
                <div class=\"layui-input-inline m-input-block\" style=\"width: 150px\">
                  {{ sf.select(form.payment_method, [{\"name\": \"全部\", \"value\": \"\"}]|merge(payment_methods)) }}
                </div>
              </div>
              <div class=\"g-bdc rq\" style=\"width: 180px\">
                <label class=\"layui-form-label m-screen-label\">充值状态</label>
                <div class=\"layui-input-inline m-input-block\" style=\"width: 100px\">
                  {{ sf.select(form.status, [{\"name\": \"全部\", \"value\": \"\"}]|merge(statuses)) }}
                </div>
              </div>
              <div class=\"g-bdc rq\" style=\"width: 310px;\">
                <div class=\"layui-input-inline m-input-block\" style=\"width: 90px;\">
                  {{ sf.text(form.from,  {'class': 'layui-input f-fnsna datepicker',  'placeholder': '开始时间', 'style': ''}) }}
                </div>
                <div class=\"layui-input-inline m-input-block\" style=\"width: 90px;\">
                  {{ sf.text(form.to,  {'class': 'layui-input f-fnsna datepicker',  'placeholder': '结束时间', 'style': ''}) }}
                </div>
              </div>
            </div>
            <div class=\"m-cx btn-location\">
              <button class=\"layui-btn\" onclick=\"get_trade_data();return false;\">查 询</button>
            </div>
            <div style=\"clear: both;\"></div>
            {#<input name=\"_csrf_token\" value=\"{{ csrf_token('finance') }}\" id=\"_csrf_token\">#}
          </form>
        </div>
      </div>
      <div class=\"m-tab-btn\">
        <button class=\"layui-btn layui-btn-small f-fnsna\" onclick=\"show_count(this)\">查看统计</button>
      </div>

      <div class=\"m-table-total\" style=\"display: none;\">
        <ul class=\"g-bdc\">
          <li>总计：<span id=\"shouru_count\"></span>（<span id=\"shouru_sum_money\"></span>）</li>
        </ul>
      </div>


      <div class=\"record-table g-bdc\">
        <table class=\"\">
          <thead>
          <tr>
            <th>充值单号</th>
            <th>交易名称</th>
            <th>金额</th>
            <th>交易状态</th>
            <th>支付方式</th>
            <th>时间</th>
          </tr>
          </thead>
          <tbody id=\"data-table\">

          {% set order_statuses        = constant('App\\\\Common\\\\Model\\\\Payment\\\\RechargeOrder::STATUSES') %}
          {% set payment_methods = constant('App\\\\PaymentConstants::PAYMENT_METHOD_CLASSES') %}

          {% for order in rows %}
            <tr>
              <td>{{ order.id }}</td>
              <td>{{ order.product_name }}</td>
              <td>{{ order.amount|number_format(2) }}</td>
              <td>{{ order_statuses[order.status]|default('未知状态(' ~ order.status ~ ')') }}</td>
              <td>{{ payment_methods[order.payment_class_id]|default('未知状态(' ~ order.payment_class_id ~ ')') }}</td>
              <td>{{ order.add_time|date('Y-m-d H:i:s') }}</td>
            </tr>
          {% endfor %}
          </tbody>
        </table>
      </div>
    </div>
  </div>
  {% include \"Reseller/Common/_rightPanel.twig\" %}

  <script type=\"text/javascript\">
      var show_count_num={{ row_count }};
      function show_count(dom){
          if(\$(dom).text()=='查看统计'){
              \$('.m-table-total').css('display','block');
              var params=\$('form').serialize();
              if(show_count_num == 0){
                  \$.get(\"{{ path(\"reseller_finance_funding_summary\") }}?\" + params,'',function (data) {
                      \$('#shouru_count').text(data.summary.count+'笔');
                      \$('#shouru_sum_money').text(data.summary.sum_money+'元');
                  });
              }
              \$(dom).text('关闭统计')
          }else if(\$(dom).text()=='关闭统计'){
              \$('.m-table-total').css('display','none');
              \$(dom).text('查看统计')
          }
      }


      layui.use(['form', 'laydate'], function(){
          var form = layui.form
              ,layer = layui.layer
              ,laydate = layui.laydate;

          laydate.render( {
              elem: '#from'
              ,type: 'date'
          });
          laydate.render({
              elem: '#to'
              ,type: 'date'
          });
      });


      function export_cvs(){
          var count_data_num = {{ row_count }};
          if(count_data_num == 0){
              layer.msg('无数据不能导出');
              return;
          }

          var params = \$('form').serialize();
          location.href=\"{{ path(\"reseller_finance_trade_logs_export\") }}?\" + params;
      }



  </script>
{% endblock %}
", "Reseller/Finance/fundingLogs.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Finance\\fundingLogs.twig");
    }
}
