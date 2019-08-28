<?php

/* Reseller/Finance/transactions.twig */
class __TwigTemplate_2ac75f77511fb018800b264fb6120e55e116c1b5adb32d9d1ffe9094fcd1e565 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Reseller/Common/layout.twig", "Reseller/Finance/transactions.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Finance/transactions.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Finance/transactions.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Reseller/Finance/transactions.twig", 2);
        // line 4
        $context["title"] = "我的财务-资金明细";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 7
        echo "  ";
        $this->loadTemplate("Reseller/Finance/commonCss.twig", "Reseller/Finance/transactions.twig", 7)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 11
        echo "  <div class=\"caiwu-left\" style=\"float: left; width: calc(100% - 380px);height: auto;border:1px solid #E0E0E0;\">
    <div class=\"panel-item g-bdc\">
      <div style=\"\">
        ";
        // line 14
        $this->loadTemplate("Reseller/Finance/financeTabs.twig", "Reseller/Finance/transactions.twig", 14)->display($context);
        // line 15
        echo "        <div class=\"m-screen-item\">
          <form action=\"\" method=\"get\" id=\"get-search\" class=\"layui-form\">
              <div class=\"layui-form-item m-screen\">
                  ";
        // line 18
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "trade_id", array()), null, array("outer" => null), array("placeholder" => "流水号"));
        echo "
                  ";
        // line 19
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "order_id", array()), null, array("outer" => null), array("placeholder" => "业务单号"));
        echo "
                  ";
        // line 20
        echo $context["sf"]->macro_select(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), "log_type", array()), null, $this->extensions['App\Common\Twig\AppExtension']->toOptions("App\\Common\\Model\\Payment\\UserMoneyLog::LOG_TYPES", "交易类型"), array("outer" => null));
        echo "
                  ";
        // line 21
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), "name", array()), null, array("outer" => null), array("placeholder" => "交易名称"));
        echo "
              </div>
              <div class=\"layui-form-item m-screen\">
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
          </form>
        </div>
      </div>
      <div class=\"m-tab-btn\">
        <button class=\"layui-btn layui-btn-small f-fnsna\" onclick=\"show_count(this)\">查看统计</button>
        <button class=\"layui-btn layui-btn-small f-fnsna\" onclick=\"export_cvs()\">导出订单</button>
      </div>

      <div class=\"m-table-total\" style=\"display: none;\">
        <ul class=\"g-bdc\">
          <li>收入：<span id=\"shouru_count\"></span>（<span id=\"shouru_sum_money\"></span>）</li>
          <li>支出：<span id=\"zhichu_count\"></span>（<span id=\"zhichu_sum_money\"></span>）</li>
        </ul>
      </div>


      <div class=\"record-table g-bdc\">
        <table class=\"\">
          <thead>
          <tr>
            <th>交易流水号</th>
            <th>业务单号</th>
            <th>交易名称</th>
            <th>交易类型</th>
            <th>交易金额</th>
            <th>账户余额</th>
            <th>时间</th>
          </tr>
          </thead>
          <tbody id=\"data-table\">

          ";
        // line 63
        $context["log_types"] = twig_constant("App\\Common\\Model\\Payment\\UserMoneyLog::LOG_TYPES");
        // line 64
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new Twig_Error_Runtime('Variable "transactions" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 65
            echo "            <tr>
              <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "trade_id", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "order_id", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "name", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 69
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["log_types"] ?? null), twig_get_attribute($this->env, $this->source, $context["t"], "log_type", array()), array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["log_types"] ?? null), twig_get_attribute($this->env, $this->source, $context["t"], "log_type", array()), array(), "array"), (("未知类型(" . twig_get_attribute($this->env, $this->source, $context["t"], "log_type", array())) . ")"))) : ((("未知类型(" . twig_get_attribute($this->env, $this->source, $context["t"], "log_type", array())) . ")"))), "html", null, true);
            echo "</td>
              <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "amount", array()), 2), "html", null, true);
            echo "</td>
              <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "current_balance", array()), 2), "html", null, true);
            echo "</td>
              <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "add_time", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "          </tbody>
        </table>
      </div>
    </div>
  </div>
  ";
        // line 80
        $this->loadTemplate("Reseller/Common/_rightPanel.twig", "Reseller/Finance/transactions.twig", 80)->display($context);
        // line 81
        echo "
  <script type=\"text/javascript\">
      //      //获取数据
      //      get_trade_data();
      //      function get_trade_data(){
      //          show_count_num=0;
      //          get_table_data('',{
      //              last_td:'<td>详情</td>',
      //              data_int_to_str:{payment_class_id:<?=json_encode(array_column(\\common\\models\\amount\\pay\\PayWay::get_pay_way(),'name'))?>,trade_status:<?=json_encode(\\common\\models\\amount\\log\\TradeLog::\$trade_status)?>,trade_log_type:<?=json_encode(\\common\\models\\amount\\log\\TradeLog::get_trade_log_type(\$this->params['pintai']['code']))?>},
      //      });
      //      }

      var show_count_num=";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["row_count"]) || array_key_exists("row_count", $context) ? $context["row_count"] : (function () { throw new Twig_Error_Runtime('Variable "row_count" does not exist.', 93, $this->source); })()), "html", null, true);
        echo ";
      function show_count(dom){
          if(\$(dom).text()=='查看统计'){
              \$('.m-table-total').css('display','block');
              var params=\$('form').serialize();
              if(show_count_num < 1){
                  layer.msg(\"没有统计数据\");
                  return;
              }

              \$.get(\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_finance_transactions_summary");
        echo "?\" + params, '',function (data) {
                  \$('#shouru_count').text(data.income.count+'笔');
                  \$('#shouru_sum_money').text(data.income.sum_money+'元');
                  \$('#zhichu_count').text(data.spend.count+'笔');
                  \$('#zhichu_sum_money').text(data.spend.sum_money+'元');
              });
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
        // line 134
        echo twig_escape_filter($this->env, (isset($context["row_count"]) || array_key_exists("row_count", $context) ? $context["row_count"] : (function () { throw new Twig_Error_Runtime('Variable "row_count" does not exist.', 134, $this->source); })()), "html", null, true);
        echo ";
          if(count_data_num == 0){
              layer.msg('无数据不能导出');
              return;
          }

          var params = \$('form').serialize();
          location.href=\"";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_finance_transactions_export");
        echo "?\" + params;
      }



  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Reseller/Finance/transactions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 141,  267 => 134,  233 => 103,  220 => 93,  206 => 81,  204 => 80,  197 => 75,  188 => 72,  184 => 71,  180 => 70,  176 => 69,  172 => 68,  168 => 67,  164 => 66,  161 => 65,  156 => 64,  154 => 63,  113 => 25,  109 => 24,  103 => 21,  99 => 20,  95 => 19,  91 => 18,  86 => 15,  84 => 14,  79 => 11,  70 => 10,  59 => 7,  50 => 6,  40 => 1,  38 => 4,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Reseller/Common/layout.twig' %}
{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

{% set title = '我的财务-资金明细' %}

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
                  {{ sf.text(form.trade_id, null, {'outer': null}, {'placeholder': '流水号'}) }}
                  {{ sf.text(form.order_id, null, {'outer': null}, {'placeholder': '业务单号'}) }}
                  {{ sf.select(form.log_type, null,  to_options('App\\\\Common\\\\Model\\\\Payment\\\\UserMoneyLog::LOG_TYPES', '交易类型'), {'outer': null}) }}
                  {{ sf.text(form.name, null, {'outer': null}, {'placeholder': '交易名称'}) }}
              </div>
              <div class=\"layui-form-item m-screen\">
                  {{ sf.text(form.from, null, {'outer': null}, {'placeholder': '开始时间', 'class': 'layui-input datepicker'}) }}
                  {{ sf.text(form.to,  null, {'outer': null}, {'placeholder': '结束时间', 'class': 'layui-input datepicker'}) }}
              </div>

            <div class=\"m-cx btn-location\">
              <button class=\"layui-btn\" onclick=\"get_trade_data();return false;\">查 询</button>
            </div>
            <div style=\"clear: both;\"></div>
          </form>
        </div>
      </div>
      <div class=\"m-tab-btn\">
        <button class=\"layui-btn layui-btn-small f-fnsna\" onclick=\"show_count(this)\">查看统计</button>
        <button class=\"layui-btn layui-btn-small f-fnsna\" onclick=\"export_cvs()\">导出订单</button>
      </div>

      <div class=\"m-table-total\" style=\"display: none;\">
        <ul class=\"g-bdc\">
          <li>收入：<span id=\"shouru_count\"></span>（<span id=\"shouru_sum_money\"></span>）</li>
          <li>支出：<span id=\"zhichu_count\"></span>（<span id=\"zhichu_sum_money\"></span>）</li>
        </ul>
      </div>


      <div class=\"record-table g-bdc\">
        <table class=\"\">
          <thead>
          <tr>
            <th>交易流水号</th>
            <th>业务单号</th>
            <th>交易名称</th>
            <th>交易类型</th>
            <th>交易金额</th>
            <th>账户余额</th>
            <th>时间</th>
          </tr>
          </thead>
          <tbody id=\"data-table\">

          {% set log_types = constant('App\\\\Common\\\\Model\\\\Payment\\\\UserMoneyLog::LOG_TYPES') %}
          {% for t in transactions %}
            <tr>
              <td>{{ t.trade_id }}</td>
              <td>{{ t.order_id }}</td>
              <td>{{ t.name }}</td>
              <td>{{ log_types[t.log_type]|default('未知类型(' ~ t.log_type ~ ')') }}</td>
              <td>{{ t.amount|number_format(2) }}</td>
              <td>{{ t.current_balance|number_format(2) }}</td>
              <td>{{ t.add_time|date('Y-m-d H:i:s') }}</td>
            </tr>
          {% endfor %}
          </tbody>
        </table>
      </div>
    </div>
  </div>
  {% include \"Reseller/Common/_rightPanel.twig\" %}

  <script type=\"text/javascript\">
      //      //获取数据
      //      get_trade_data();
      //      function get_trade_data(){
      //          show_count_num=0;
      //          get_table_data('',{
      //              last_td:'<td>详情</td>',
      //              data_int_to_str:{payment_class_id:<?=json_encode(array_column(\\common\\models\\amount\\pay\\PayWay::get_pay_way(),'name'))?>,trade_status:<?=json_encode(\\common\\models\\amount\\log\\TradeLog::\$trade_status)?>,trade_log_type:<?=json_encode(\\common\\models\\amount\\log\\TradeLog::get_trade_log_type(\$this->params['pintai']['code']))?>},
      //      });
      //      }

      var show_count_num={{ row_count }};
      function show_count(dom){
          if(\$(dom).text()=='查看统计'){
              \$('.m-table-total').css('display','block');
              var params=\$('form').serialize();
              if(show_count_num < 1){
                  layer.msg(\"没有统计数据\");
                  return;
              }

              \$.get(\"{{ path(\"reseller_finance_transactions_summary\") }}?\" + params, '',function (data) {
                  \$('#shouru_count').text(data.income.count+'笔');
                  \$('#shouru_sum_money').text(data.income.sum_money+'元');
                  \$('#zhichu_count').text(data.spend.count+'笔');
                  \$('#zhichu_sum_money').text(data.spend.sum_money+'元');
              });
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
          location.href=\"{{ path(\"reseller_finance_transactions_export\") }}?\" + params;
      }



  </script>
{% endblock %}
", "Reseller/Finance/transactions.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Finance\\transactions.twig");
    }
}
