<?php

/* Reseller/Finance/transactions.twig */
class __TwigTemplate_2bb3533353dafa78673819bb6a39c29d1b357497264c6a33a900b3a2bce890a4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Reseller/Common/layout.twig", "Reseller/Finance/transactions.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Finance/transactions.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Finance/transactions.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("Common/simple_form_helpers.html.twig", "Reseller/Finance/transactions.twig", 2);
        // line 4
        $context["title"] = "我的财务-资金明细";
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
        $this->loadTemplate("Reseller/Finance/commonCss.twig", "Reseller/Finance/transactions.twig", 10)->display($context);
        
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
        $this->loadTemplate("Reseller/Finance/financeTabs.twig", "Reseller/Finance/transactions.twig", 17)->display($context);
        // line 18
        echo "        <div class=\"m-screen-item\">
          <form action=\"\" method=\"get\" id=\"get-search\" class=\"layui-form\">
            <div class=\"layui-form-item m-screen\">
              <div class=\"g-bdc rq\" style=\"\">
                <label class=\"layui-form-label m-screen-label\">流水号</label>
                <div class=\"layui-input-inline m-input-block\" style=\"width: 100px\">
                  ";
        // line 24
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "trade_id", array()), array("class" => "layui-input", "placeholder" => "流水号", "style" => ""));
        echo "
                </div>
                ";
        // line 26
        echo $context["sf"]->macro_error(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "trade_id", array()));
        echo "
              </div>
              <div class=\"g-bdc rq\" style=\"\">
                <label class=\"layui-form-label m-screen-label\">业务单号</label>
                <div class=\"layui-input-inline m-input-block\" style=\"width: 100px\">
                  ";
        // line 31
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "order_id", array()), array("class" => "layui-input", "placeholder" => "业务单号", "style" => ""));
        echo "
                </div>
              </div>
              <div class=\"g-bdc rq\" style=\"\">
                <label class=\"layui-form-label m-screen-label\">交易类型</label>
                <div class=\"layui-input-inline m-input-block\" style=\"width: 120px\">
                  ";
        // line 37
        echo $context["sf"]->macro_select(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), "log_type", array()), twig_array_merge(array(0 => array("name" => "全部", "value" => "")), (isset($context["log_types"]) || array_key_exists("log_types", $context) ? $context["log_types"] : (function () { throw new Twig_Error_Runtime('Variable "log_types" does not exist.', 37, $this->source); })())));
        echo "
                </div>
              </div>
              <div class=\"g-bdc rq\" style=\"\">
                <label class=\"layui-form-label m-screen-label\">交易名称</label>
                <div class=\"layui-input-inline m-input-block\" style=\"width: 180px;\">
                  ";
        // line 43
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), "name", array()), array("class" => "layui-input", "placeholder" => "交易名称", "style" => ""));
        echo "
                </div>
              </div>
            ";
        // line 47
        echo "            ";
        // line 48
        echo "              ";
        // line 49
        echo "                ";
        // line 50
        echo "                ";
        // line 51
        echo "                  ";
        // line 52
        echo "                ";
        // line 53
        echo "                ";
        // line 54
        echo "                  ";
        // line 55
        echo "                ";
        // line 56
        echo "              ";
        // line 57
        echo "              <div class=\"g-bdc rq\" style=\"\">
                <div class=\"layui-input-inline m-input-block\" style=\"width: 100px;\">
                  <select name=\"time_type\">
                    <option value=\"add_time\">创建时间</option>
                    <option value=\"pay_time\">支付时间</option>
                    <option value=\"end_time\">完成时间</option>
                  </select>
                </div>
                <div class=\"layui-input-inline m-input-block\" style=\"width: 90px;\">
                  ";
        // line 66
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->source); })()), "from", array()), array("class" => "layui-input f-fnsna datepicker", "placeholder" => "开始时间", "style" => ""));
        echo "
                </div>
                <div class=\"layui-input-inline m-input-block\" style=\"width: 90px;\">
                  ";
        // line 69
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->source); })()), "to", array()), array("class" => "layui-input f-fnsna datepicker", "placeholder" => "结束时间", "style" => ""));
        echo "
                </div>
              </div>
            </div>
            <div class=\"layui-form-item m-screen\">
            </div>
            <div class=\"m-cx btn-location\">
              <button class=\"layui-btn\" onclick=\"get_trade_data();return false;\">查 询</button>
            </div>
            <div style=\"clear: both;\"></div>
            ";
        // line 80
        echo "          </form>
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
        // line 111
        $context["log_types"] = twig_constant("App\\Common\\Model\\Payment\\UserMoneyLog::LOG_TYPES");
        // line 112
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new Twig_Error_Runtime('Variable "transactions" does not exist.', 112, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 113
            echo "            <tr>
              <td>";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "trade_id", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "order_id", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "name", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 117
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["log_types"] ?? null), twig_get_attribute($this->env, $this->source, $context["t"], "log_type", array()), array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["log_types"] ?? null), twig_get_attribute($this->env, $this->source, $context["t"], "log_type", array()), array(), "array"), (("未知类型(" . twig_get_attribute($this->env, $this->source, $context["t"], "log_type", array())) . ")"))) : ((("未知类型(" . twig_get_attribute($this->env, $this->source, $context["t"], "log_type", array())) . ")"))), "html", null, true);
            echo "</td>
              <td>";
            // line 118
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "amount", array()), 2), "html", null, true);
            echo "</td>
              <td>";
            // line 119
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "current_balance", array()), 2), "html", null, true);
            echo "</td>
              <td>";
            // line 120
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "add_time", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "          </tbody>
        </table>
      </div>
    </div>
  </div>
  ";
        // line 128
        $this->loadTemplate("Reseller/Common/_rightPanel.twig", "Reseller/Finance/transactions.twig", 128)->display($context);
        // line 129
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
        // line 141
        echo twig_escape_filter($this->env, (isset($context["row_count"]) || array_key_exists("row_count", $context) ? $context["row_count"] : (function () { throw new Twig_Error_Runtime('Variable "row_count" does not exist.', 141, $this->source); })()), "html", null, true);
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
        // line 151
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
        // line 182
        echo twig_escape_filter($this->env, (isset($context["row_count"]) || array_key_exists("row_count", $context) ? $context["row_count"] : (function () { throw new Twig_Error_Runtime('Variable "row_count" does not exist.', 182, $this->source); })()), "html", null, true);
        echo ";
          if(count_data_num == 0){
              layer.msg('无数据不能导出');
              return;
          }

          var params = \$('form').serialize();
          location.href=\"";
        // line 189
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
        return array (  360 => 189,  350 => 182,  316 => 151,  303 => 141,  289 => 129,  287 => 128,  280 => 123,  271 => 120,  267 => 119,  263 => 118,  259 => 117,  255 => 116,  251 => 115,  247 => 114,  244 => 113,  239 => 112,  237 => 111,  204 => 80,  191 => 69,  185 => 66,  174 => 57,  172 => 56,  170 => 55,  168 => 54,  166 => 53,  164 => 52,  162 => 51,  160 => 50,  158 => 49,  156 => 48,  154 => 47,  148 => 43,  139 => 37,  130 => 31,  122 => 26,  117 => 24,  109 => 18,  107 => 17,  102 => 14,  93 => 13,  82 => 10,  73 => 9,  60 => 7,  51 => 6,  41 => 1,  39 => 4,  37 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Reseller/Common/layout.twig' %}
{% import ('Common/simple_form_helpers.html.twig') as sf %}

{% set title = '我的财务-资金明细' %}

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
              <div class=\"g-bdc rq\" style=\"\">
                <label class=\"layui-form-label m-screen-label\">流水号</label>
                <div class=\"layui-input-inline m-input-block\" style=\"width: 100px\">
                  {{ sf.text(form.trade_id,  {'class': 'layui-input',  'placeholder': '流水号', 'style': ''}) }}
                </div>
                {{ sf.error(form.trade_id) }}
              </div>
              <div class=\"g-bdc rq\" style=\"\">
                <label class=\"layui-form-label m-screen-label\">业务单号</label>
                <div class=\"layui-input-inline m-input-block\" style=\"width: 100px\">
                  {{ sf.text(form.order_id,  {'class': 'layui-input',  'placeholder': '业务单号', 'style': ''}) }}
                </div>
              </div>
              <div class=\"g-bdc rq\" style=\"\">
                <label class=\"layui-form-label m-screen-label\">交易类型</label>
                <div class=\"layui-input-inline m-input-block\" style=\"width: 120px\">
                  {{ sf.select(form.log_type, [{\"name\": \"全部\", \"value\": \"\"}]|merge(log_types)) }}
                </div>
              </div>
              <div class=\"g-bdc rq\" style=\"\">
                <label class=\"layui-form-label m-screen-label\">交易名称</label>
                <div class=\"layui-input-inline m-input-block\" style=\"width: 180px;\">
                  {{ sf.text(form.name,  {'class': 'layui-input',  'placeholder': '交易名称', 'style': ''}) }}
                </div>
              </div>
            {#</div>#}
            {#<div class=\"layui-form-item m-screen\">#}
              {#<div class=\"g-bdc rq\" style=\"width: 265px\">#}
                {#<label class=\"layui-form-label m-screen-label\">金额范围</label>#}
                {#<div class=\"layui-input-inline m-input-block\" style=\"width: 80px\">#}
                  {#{{ sf.text(form.min,  {'class': 'layui-input',  'placeholder': '最小金额', 'style': ''}) }}#}
                {#</div>#}
                {#<div class=\"layui-input-inline m-input-block\" style=\"width: 80px\">#}
                  {#{{ sf.text(form.max,  {'class': 'layui-input',  'placeholder': '最大金额', 'style': ''}) }}#}
                {#</div>#}
              {#</div>#}
              <div class=\"g-bdc rq\" style=\"\">
                <div class=\"layui-input-inline m-input-block\" style=\"width: 100px;\">
                  <select name=\"time_type\">
                    <option value=\"add_time\">创建时间</option>
                    <option value=\"pay_time\">支付时间</option>
                    <option value=\"end_time\">完成时间</option>
                  </select>
                </div>
                <div class=\"layui-input-inline m-input-block\" style=\"width: 90px;\">
                  {{ sf.text(form.from,  {'class': 'layui-input f-fnsna datepicker',  'placeholder': '开始时间', 'style': ''}) }}
                </div>
                <div class=\"layui-input-inline m-input-block\" style=\"width: 90px;\">
                  {{ sf.text(form.to,  {'class': 'layui-input f-fnsna datepicker',  'placeholder': '结束时间', 'style': ''}) }}
                </div>
              </div>
            </div>
            <div class=\"layui-form-item m-screen\">
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
