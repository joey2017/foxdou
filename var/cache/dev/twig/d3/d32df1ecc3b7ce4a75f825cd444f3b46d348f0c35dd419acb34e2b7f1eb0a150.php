<?php

/* Reseller/Finance/tradeLogs.twig */
class __TwigTemplate_92713349293e425c7f1b0cf4178c25b946d982ab393deab9d3fe0237a55eefca extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Reseller/Common/layout.twig", "Reseller/Finance/tradeLogs.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Finance/tradeLogs.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Finance/tradeLogs.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("Common/simple_form_helpers.html.twig", "Reseller/Finance/tradeLogs.twig", 2);
        // line 4
        $context["title"] = "我的财务-交易记录";
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
        $this->loadTemplate("Reseller/Finance/commonCss.twig", "Reseller/Finance/tradeLogs.twig", 10)->display($context);
        
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
        $this->loadTemplate("Reseller/Finance/financeTabs.twig", "Reseller/Finance/tradeLogs.twig", 17)->display($context);
        // line 18
        echo "        <div class=\"m-screen-item\">
          <form action=\"\" method=\"get\" id=\"get-search\" class=\"layui-form\">
          <div class=\"layui-form-item m-screen\">

            <div class=\"g-bdc rq\" style=\"width: 190px\">
              <label class=\"layui-form-label m-screen-label\">流水号</label>
              <div class=\"layui-input-inline m-input-block\" style=\"width: 100px\">
                ";
        // line 25
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "trade_id", array()), array("class" => "layui-input", "placeholder" => "流水号", "style" => ""));
        echo "
              </div>
              ";
        // line 27
        echo $context["sf"]->macro_error(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "trade_id", array()));
        echo "
            </div>
            <div class=\"g-bdc rq\" style=\"width: 190px\">
              <label class=\"layui-form-label m-screen-label\">业务单号</label>
              <div class=\"layui-input-inline m-input-block\" style=\"width: 100px\">
                ";
        // line 32
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "order_id", array()), array("class" => "layui-input", "placeholder" => "业务单号", "style" => ""));
        echo "
              </div>
            </div>
            <div class=\"g-bdc rq\" style=\"width: 260px\">
              <label class=\"layui-form-label m-screen-label\">交易类型</label>
              <div class=\"layui-input-inline m-input-block\" style=\"width: 170px\">
                ";
        // line 38
        echo $context["sf"]->macro_select(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "trade_type", array()), twig_array_merge(array(0 => array("name" => "全部", "value" => "")), (isset($context["trade_types"]) || array_key_exists("trade_types", $context) ? $context["trade_types"] : (function () { throw new Twig_Error_Runtime('Variable "trade_types" does not exist.', 38, $this->source); })())));
        echo "
              </div>
            </div>
          </div>
          <div class=\"layui-form-item m-screen\">
            <div class=\"g-bdc rq\" style=\"width: 190px\">
              <label class=\"layui-form-label m-screen-label\">支付方式</label>
              <div class=\"layui-input-inline m-input-block\" style=\"width: 100px\">
                  ";
        // line 46
        echo $context["sf"]->macro_select(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "payment_method", array()), twig_array_merge(array(0 => array("name" => "全部", "value" => "")), (isset($context["payment_methods"]) || array_key_exists("payment_methods", $context) ? $context["payment_methods"] : (function () { throw new Twig_Error_Runtime('Variable "payment_methods" does not exist.', 46, $this->source); })())));
        echo "
              </div>
            </div>
            <div class=\"g-bdc rq\" style=\"width: 190px\">
              <label class=\"layui-form-label m-screen-label\">交易状态</label>
              <div class=\"layui-input-inline m-input-block\" style=\"width: 100px\">
                  ";
        // line 52
        echo $context["sf"]->macro_select(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->source); })()), "trade_status", array()), twig_array_merge(array(0 => array("name" => "全部", "value" => "")), (isset($context["trade_statuses"]) || array_key_exists("trade_statuses", $context) ? $context["trade_statuses"] : (function () { throw new Twig_Error_Runtime('Variable "trade_statuses" does not exist.', 52, $this->source); })())));
        echo "
              </div>
            </div>
            <div class=\"g-bdc rq\" style=\"width: 320px;\">
              <div class=\"layui-input-inline m-input-block\" style=\"width: 90px;\">
                ";
        // line 57
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "from", array()), array("class" => "layui-input f-fnsna datepicker", "placeholder" => "开始时间", "style" => ""));
        echo "
              </div>
              <div class=\"layui-input-inline m-input-block\" style=\"width: 90px;\">
                ";
        // line 60
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->source); })()), "to", array()), array("class" => "layui-input f-fnsna datepicker", "placeholder" => "结束时间", "style" => ""));
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
        // line 71
        echo "          </form>
        </div>
      </div>
      <div class=\"m-tab-btn\">
        <button class=\"layui-btn layui-btn-small f-fnsna\" onclick=\"show_count(this)\">查看统计</button>
        <button class=\"layui-btn layui-btn-small f-fnsna\" onclick=\"export_cvs()\">导出订单</button>
      </div>

      <div class=\"m-table-total\" style=\"display: none;\">
        <ul class=\"g-bdc\">
          <li>待付款：<span id=\"no_pay_count\"></span><span id=\"no_pay_sum_money\"></span></li>
          <li>交易中：<span id=\"trading_count\"></span><span id=\"trading_sum_money\"></span></li>
          <li>交易成功：<span id=\"success_count\"></span>(<span id=\"success_sum_money\"></span>)</li>
          <li>交易失败：<span id=\"loser_count\"></span><span id=\"loser_sum_money\"></span></li>
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
            <th>金额</th>
            <th>交易状态</th>
            <th>支付方式</th>
            <th>时间</th>
          </tr>
          </thead>
          <tbody id=\"data-table\">

          ";
        // line 105
        $context["statuses"] = twig_constant("App\\Common\\Model\\Payment\\UserMoneyTradeLog::TRADE_STATUSES");
        // line 106
        echo "          ";
        $context["trade_types"] = twig_constant("App\\Common\\Model\\Payment\\UserMoneyTradeLog::TRADE_TYPES");
        // line 107
        echo "          ";
        $context["payment_methods"] = twig_constant("App\\PaymentConstants::PAYMENT_METHOD_CLASSES");
        // line 108
        echo "
          ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trade_logs"]) || array_key_exists("trade_logs", $context) ? $context["trade_logs"] : (function () { throw new Twig_Error_Runtime('Variable "trade_logs" does not exist.', 109, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 110
            echo "            <tr>
              <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "id", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "order_id", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "name", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 114
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["trade_types"] ?? null), twig_get_attribute($this->env, $this->source, $context["log"], "trade_log_type", array()), array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["trade_types"] ?? null), twig_get_attribute($this->env, $this->source, $context["log"], "trade_log_type", array()), array(), "array"), (("未知状态（" . twig_get_attribute($this->env, $this->source, $context["log"], "trade_log_type", array())) . "）"))) : ((("未知状态（" . twig_get_attribute($this->env, $this->source, $context["log"], "trade_log_type", array())) . "）"))), "html", null, true);
            echo "</td>
              <td>";
            // line 115
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "amount", array()), 2), "html", null, true);
            echo "</td>
              <td>";
            // line 116
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), twig_get_attribute($this->env, $this->source, $context["log"], "trade_status", array()), array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), twig_get_attribute($this->env, $this->source, $context["log"], "trade_status", array()), array(), "array"), (("未知状态(" . twig_get_attribute($this->env, $this->source, $context["log"], "trade_status", array())) . ")"))) : ((("未知状态(" . twig_get_attribute($this->env, $this->source, $context["log"], "trade_status", array())) . ")"))), "html", null, true);
            echo "</td>
              <td>";
            // line 117
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["payment_methods"] ?? null), twig_get_attribute($this->env, $this->source, $context["log"], "payment_class_id", array()), array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["payment_methods"] ?? null), twig_get_attribute($this->env, $this->source, $context["log"], "payment_class_id", array()), array(), "array"), (("未知状态(" . twig_get_attribute($this->env, $this->source, $context["log"], "payment_class_id", array())) . ")"))) : ((("未知状态(" . twig_get_attribute($this->env, $this->source, $context["log"], "payment_class_id", array())) . ")"))), "html", null, true);
            echo "</td>
              <td>";
            // line 118
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "add_time", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "          </tbody>
        </table>
      </div>
    </div>
  </div>
  ";
        // line 126
        $this->loadTemplate("Reseller/Common/_rightPanel.twig", "Reseller/Finance/tradeLogs.twig", 126)->display($context);
        // line 127
        echo "
  <script type=\"text/javascript\">
      var show_count_num=";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["row_count"]) || array_key_exists("row_count", $context) ? $context["row_count"] : (function () { throw new Twig_Error_Runtime('Variable "row_count" does not exist.', 129, $this->source); })()), "html", null, true);
        echo ";
      function show_count(dom){
          if(\$(dom).text()=='查看统计'){
              \$('.m-table-total').css('display','block');
              var params=\$('form').serialize();
              if(show_count_num > 0){
                  \$.get(\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_finance_trade_logs_summary");
        echo "?\" + params,'',function (data) {
                      \$('#no_pay_count').text(data.summary.no_pay+'笔');
                      \$('#trading_count').text(data.summary.trading+'笔');
                      \$('#success_count').text(data.summary.success.count+'笔');
                      \$('#loser_count').text(data.summary.loser+'笔');
                      //  \$('#no_pay_sum_money').text(data.data.no_pay.sum_money+'元');
                      //  \$('#trading_sum_money').text(data.data.trading.sum_money+'元');
                      \$('#success_sum_money').text(data.summary.success.sum_money+'元');
                      //   \$('#loser_sum_money').text(data.data.loser.sum_money+'元');
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
        // line 171
        echo twig_escape_filter($this->env, (isset($context["row_count"]) || array_key_exists("row_count", $context) ? $context["row_count"] : (function () { throw new Twig_Error_Runtime('Variable "row_count" does not exist.', 171, $this->source); })()), "html", null, true);
        echo ";
          if(count_data_num == 0){
              layer.msg('无数据不能导出');
              return;
          }

          var params = \$('form').serialize();
          location.href=\"";
        // line 178
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
        return "Reseller/Finance/tradeLogs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 178,  339 => 171,  300 => 135,  291 => 129,  287 => 127,  285 => 126,  278 => 121,  269 => 118,  265 => 117,  261 => 116,  257 => 115,  253 => 114,  249 => 113,  245 => 112,  241 => 111,  238 => 110,  234 => 109,  231 => 108,  228 => 107,  225 => 106,  223 => 105,  187 => 71,  174 => 60,  168 => 57,  160 => 52,  151 => 46,  140 => 38,  131 => 32,  123 => 27,  118 => 25,  109 => 18,  107 => 17,  102 => 14,  93 => 13,  82 => 10,  73 => 9,  60 => 7,  51 => 6,  41 => 1,  39 => 4,  37 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Reseller/Common/layout.twig' %}
{% import ('Common/simple_form_helpers.html.twig') as sf %}

{% set title = '我的财务-交易记录' %}

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

            <div class=\"g-bdc rq\" style=\"width: 190px\">
              <label class=\"layui-form-label m-screen-label\">流水号</label>
              <div class=\"layui-input-inline m-input-block\" style=\"width: 100px\">
                {{ sf.text(form.trade_id,  {'class': 'layui-input',  'placeholder': '流水号', 'style': ''}) }}
              </div>
              {{ sf.error(form.trade_id) }}
            </div>
            <div class=\"g-bdc rq\" style=\"width: 190px\">
              <label class=\"layui-form-label m-screen-label\">业务单号</label>
              <div class=\"layui-input-inline m-input-block\" style=\"width: 100px\">
                {{ sf.text(form.order_id,  {'class': 'layui-input',  'placeholder': '业务单号', 'style': ''}) }}
              </div>
            </div>
            <div class=\"g-bdc rq\" style=\"width: 260px\">
              <label class=\"layui-form-label m-screen-label\">交易类型</label>
              <div class=\"layui-input-inline m-input-block\" style=\"width: 170px\">
                {{ sf.select(form.trade_type, [{\"name\": \"全部\", \"value\": \"\"}]|merge(trade_types)) }}
              </div>
            </div>
          </div>
          <div class=\"layui-form-item m-screen\">
            <div class=\"g-bdc rq\" style=\"width: 190px\">
              <label class=\"layui-form-label m-screen-label\">支付方式</label>
              <div class=\"layui-input-inline m-input-block\" style=\"width: 100px\">
                  {{ sf.select(form.payment_method, [{\"name\": \"全部\", \"value\": \"\"}]|merge(payment_methods)) }}
              </div>
            </div>
            <div class=\"g-bdc rq\" style=\"width: 190px\">
              <label class=\"layui-form-label m-screen-label\">交易状态</label>
              <div class=\"layui-input-inline m-input-block\" style=\"width: 100px\">
                  {{ sf.select(form.trade_status, [{\"name\": \"全部\", \"value\": \"\"}]|merge(trade_statuses)) }}
              </div>
            </div>
            <div class=\"g-bdc rq\" style=\"width: 320px;\">
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
          <li>待付款：<span id=\"no_pay_count\"></span><span id=\"no_pay_sum_money\"></span></li>
          <li>交易中：<span id=\"trading_count\"></span><span id=\"trading_sum_money\"></span></li>
          <li>交易成功：<span id=\"success_count\"></span>(<span id=\"success_sum_money\"></span>)</li>
          <li>交易失败：<span id=\"loser_count\"></span><span id=\"loser_sum_money\"></span></li>
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
            <th>金额</th>
            <th>交易状态</th>
            <th>支付方式</th>
            <th>时间</th>
          </tr>
          </thead>
          <tbody id=\"data-table\">

          {% set statuses        = constant('App\\\\Common\\\\Model\\\\Payment\\\\UserMoneyTradeLog::TRADE_STATUSES') %}
          {% set trade_types     = constant('App\\\\Common\\\\Model\\\\Payment\\\\UserMoneyTradeLog::TRADE_TYPES') %}
          {% set payment_methods = constant('App\\\\PaymentConstants::PAYMENT_METHOD_CLASSES') %}

          {% for log in trade_logs %}
            <tr>
              <td>{{ log.id }}</td>
              <td>{{ log.order_id }}</td>
              <td>{{ log.name }}</td>
              <td>{{ trade_types[log.trade_log_type]|default('未知状态（' ~ log.trade_log_type ~ '）') }}</td>
              <td>{{ log.amount|number_format(2) }}</td>
              <td>{{ statuses[log.trade_status]|default('未知状态(' ~ log.trade_status ~ ')') }}</td>
              <td>{{ payment_methods[log.payment_class_id]|default('未知状态(' ~ log.payment_class_id ~ ')') }}</td>
              <td>{{ log.add_time|date('Y-m-d H:i:s') }}</td>
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
              if(show_count_num > 0){
                  \$.get(\"{{ path(\"reseller_finance_trade_logs_summary\") }}?\" + params,'',function (data) {
                      \$('#no_pay_count').text(data.summary.no_pay+'笔');
                      \$('#trading_count').text(data.summary.trading+'笔');
                      \$('#success_count').text(data.summary.success.count+'笔');
                      \$('#loser_count').text(data.summary.loser+'笔');
                      //  \$('#no_pay_sum_money').text(data.data.no_pay.sum_money+'元');
                      //  \$('#trading_sum_money').text(data.data.trading.sum_money+'元');
                      \$('#success_sum_money').text(data.summary.success.sum_money+'元');
                      //   \$('#loser_sum_money').text(data.data.loser.sum_money+'元');
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
", "Reseller/Finance/tradeLogs.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Finance\\tradeLogs.twig");
    }
}
