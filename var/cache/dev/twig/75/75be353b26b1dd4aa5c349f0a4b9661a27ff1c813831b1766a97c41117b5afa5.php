<?php

/* Reseller/Finance/fundingLogs.twig */
class __TwigTemplate_1936522ea06283c18e3bb68d54a6d937fd6bcc6c0f2185db58ebb65efdcab224 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Reseller/Common/layout.twig", "Reseller/Finance/fundingLogs.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Finance/fundingLogs.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Finance/fundingLogs.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Reseller/Finance/fundingLogs.twig", 2);
        // line 4
        $context["title"] = "我的财务-充值记录";
        // line 6
        $context["order_statuses"] = twig_constant("App\\Common\\Model\\Payment\\RechargeOrder::STATUSES");
        // line 7
        $context["payment_methods"] = twig_constant("App\\PaymentConstants::PAYMENT_METHOD_CLASSES");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
                  ";
        // line 21
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), "order_id", array()), null, array("outer" => null), array("placeholder" => "业务单号"));
        echo "
                  ";
        // line 22
        echo $context["sf"]->macro_select(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), "payment_method", array()), null, $this->extensions['App\Common\Twig\AppExtension']->toOptions((isset($context["payment_methods"]) || array_key_exists("payment_methods", $context) ? $context["payment_methods"] : (function () { throw new Twig_Error_Runtime('Variable "payment_methods" does not exist.', 22, $this->source); })()), "支付方式"), array("outer" => null));
        echo "
                  ";
        // line 23
        echo $context["sf"]->macro_select(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "status", array()), null, $this->extensions['App\Common\Twig\AppExtension']->toOptions((isset($context["order_statuses"]) || array_key_exists("order_statuses", $context) ? $context["order_statuses"] : (function () { throw new Twig_Error_Runtime('Variable "order_statuses" does not exist.', 23, $this->source); })()), "交易状态"), array("outer" => null));
        echo "
                  ";
        // line 24
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "from", array()), null, array("outer" => null), array("placeholder" => "开始时间", "class" => "layui-input datepicker"));
        echo "
                  ";
        // line 25
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "to", array()), null, array("outer" => null), array("placeholder" => "结束时间", "class" => "layui-input datepicker"));
        echo "
              </div>
            <div class=\"m-cx btn-location\">
              <button class=\"layui-btn\" onclick=\"get_trade_data();return false;\">查 询</button>
            </div>
            <div style=\"clear: both;\"></div>
            ";
        // line 32
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
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 61
            echo "            <tr>
              <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "product_name", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "amount", array()), 2), "html", null, true);
            echo "</td>
              <td>";
            // line 65
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["order_statuses"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "status", array()), array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["order_statuses"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "status", array()), array(), "array"), (("未知状态(" . twig_get_attribute($this->env, $this->source, $context["order"], "status", array())) . ")"))) : ((("未知状态(" . twig_get_attribute($this->env, $this->source, $context["order"], "status", array())) . ")"))), "html", null, true);
            echo "</td>
              <td>";
            // line 66
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["payment_methods"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "payment_class_id", array()), array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["payment_methods"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "payment_class_id", array()), array(), "array"), (("未知状态(" . twig_get_attribute($this->env, $this->source, $context["order"], "payment_class_id", array())) . ")"))) : ((("未知状态(" . twig_get_attribute($this->env, $this->source, $context["order"], "payment_class_id", array())) . ")"))), "html", null, true);
            echo "</td>
              <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "add_time", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "          </tbody>
        </table>
      </div>
    </div>
  </div>
  ";
        // line 75
        $this->loadTemplate("Reseller/Common/_rightPanel.twig", "Reseller/Finance/fundingLogs.twig", 75)->display($context);
        // line 76
        echo "
  <script type=\"text/javascript\">
      var show_count_num=";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["row_count"]) || array_key_exists("row_count", $context) ? $context["row_count"] : (function () { throw new Twig_Error_Runtime('Variable "row_count" does not exist.', 78, $this->source); })()), "html", null, true);
        echo ";
      function show_count(dom){
          if(\$(dom).text()=='查看统计'){
              \$('.m-table-total').css('display','block');
              var params=\$('form').serialize();
              if(show_count_num == 0){
                  \$.get(\"";
        // line 84
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
        // line 114
        echo twig_escape_filter($this->env, (isset($context["row_count"]) || array_key_exists("row_count", $context) ? $context["row_count"] : (function () { throw new Twig_Error_Runtime('Variable "row_count" does not exist.', 114, $this->source); })()), "html", null, true);
        echo ";
          if(count_data_num == 0){
              layer.msg('无数据不能导出');
              return;
          }

          var params = \$('form').serialize();
          location.href=\"";
        // line 121
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
        return array (  251 => 121,  241 => 114,  208 => 84,  199 => 78,  195 => 76,  193 => 75,  186 => 70,  177 => 67,  173 => 66,  169 => 65,  165 => 64,  161 => 63,  157 => 62,  154 => 61,  150 => 60,  120 => 32,  111 => 25,  107 => 24,  103 => 23,  99 => 22,  95 => 21,  90 => 18,  88 => 17,  83 => 14,  74 => 13,  63 => 10,  54 => 9,  44 => 1,  42 => 7,  40 => 6,  38 => 4,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Reseller/Common/layout.twig' %}
{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

{% set title = '我的财务-充值记录' %}

{% set order_statuses        = constant('App\\\\Common\\\\Model\\\\Payment\\\\RechargeOrder::STATUSES') %}
{% set payment_methods = constant('App\\\\PaymentConstants::PAYMENT_METHOD_CLASSES') %}

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
                  {{ sf.text(form.order_id, null, {'outer': null}, {'placeholder': '业务单号'}) }}
                  {{ sf.select(form.payment_method, null,  to_options(payment_methods, '支付方式'), {'outer': null}) }}
                  {{ sf.select(form.status, null,  to_options(order_statuses, '交易状态'), {'outer': null}) }}
                  {{ sf.text(form.from, null, {'outer': null}, {'placeholder': '开始时间', 'class': 'layui-input datepicker'}) }}
                  {{ sf.text(form.to,  null, {'outer': null}, {'placeholder': '结束时间', 'class': 'layui-input datepicker'}) }}
              </div>
            <div class=\"m-cx btn-location\">
              <button class=\"layui-btn\" onclick=\"get_trade_data();return false;\">查 询</button>
            </div>
            <div style=\"clear: both;\"></div>
            {#<input name=\"_token\" value=\"{{ csrf_token('finance') }}\" id=\"_token\">#}
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

          {% for order in data %}
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
