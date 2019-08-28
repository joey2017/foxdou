<?php

/* Reseller/Finance/index.twig */
class __TwigTemplate_960724144e1715d362db0928c74108cc50f1f5f8c488a4d09c121976e8a87544 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Reseller/Common/layout.twig", "Reseller/Finance/index.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Finance/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Finance/index.twig"));

        // line 2
        $context["title"] = "我的财务-我的账户";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 8
        echo "  ";
        $this->loadTemplate("Reseller/Finance/commonCss.twig", "Reseller/Finance/index.twig", 8)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 12
        echo "  <div class=\"caiwu-left\" style=\"float: left; width: calc(100% - 380px);height: auto;\">
    <div class=\"panel-item g-bdc\">
      ";
        // line 14
        $this->loadTemplate("Reseller/Finance/financeTabs.twig", "Reseller/Finance/index.twig", 14)->display($context);
        // line 15
        echo "
      <div class=\"m-container\" style=\"background-color: #FFFFFF;\">
        <div class=\"m-cwel\">
          <a class=\"f-fs-16\">";
        // line 18
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "realNameInfo", array(), "any", false, true), "business_name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "realNameInfo", array(), "any", false, true), "business_name", array()), "未实名认证")) : ("未实名认证")), "html", null, true);
        echo "</a>
        </div>
        <div class=\"m-item\">
          <div class=\"item g-bdc\">
            <div class=\"item-icon f-fl\"><i class=\"iconfont icon-item-icom\">&#xe65a;</i></div>
            <div class=\"item-amount f-fl\">
              <span class=\"f-fs-14 s-gray\">账户余额</span><br />
              <strong class=\"f-fs-20 s-red\">";
        // line 25
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "resellerAccount", array(), "any", false, true), "balance", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "resellerAccount", array(), "any", false, true), "balance", array()), 0)) : (0)), 2), "html", null, true);
        echo "</strong><span style=\"margin-left: 10px;\">元</span>
              <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_finance_add_balance");
        echo "\" class=\"layui-btn\" >在线充值</a>
            </div>
          </div>
        </div>
      </div>

      <!-- 最近交易记录 -->
      <div class=\"panel-item\" style=\"box-sizing: border-box; padding: 10px; background-color: #FFFFFF; border: 1px solid #E0E0E0; border-top: none;\">
        <table class=\"f-fl\">
          <thead>
          <tr>
            <th colspan=\"5\">
              <strong style=\"color: #2ca9e1;\">最近交易记录</strong>
              <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_finance_trade_logs");
        echo "\">更多</a>
            </th>
          </tr>
          </thead>
          <tbody>
          ";
        // line 44
        if ((isset($context["trades"]) || array_key_exists("trades", $context) ? $context["trades"] : (function () { throw new Twig_Error_Runtime('Variable "trades" does not exist.', 44, $this->source); })())) {
            // line 45
            echo "            <tr>
              <td style=\"width: 200px;\">交易时间</td>
              <td>交易事由</td>
              <td>交易金额</td>
              <td>交易状态</td>
              <td></td>
            </tr>
          ";
        }
        // line 53
        echo "          ";
        $context["statuses"] = twig_constant("App\\Common\\Model\\Payment\\UserMoneyTradeLog::TRADE_STATUSES");
        // line 54
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trades"]) || array_key_exists("trades", $context) ? $context["trades"] : (function () { throw new Twig_Error_Runtime('Variable "trades" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 55
            echo "          <tr>
            <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "trade_time", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "name", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "amount", array()), 2), "html", null, true);
            echo "</td>
            <td>";
            // line 59
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), twig_get_attribute($this->env, $this->source, $context["t"], "trade_status", array()), array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), twig_get_attribute($this->env, $this->source, $context["t"], "trade_status", array()), array(), "array"), (("未知状态(" . twig_get_attribute($this->env, $this->source, $context["t"], "trade_status", array())) . ")"))) : ((("未知状态(" . twig_get_attribute($this->env, $this->source, $context["t"], "trade_status", array())) . ")"))), "html", null, true);
            echo "</td>
            <td>
              <a href=\"javascript:void();\">详情</a>
            </td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "          </tbody>
        </table>
        <!-- /最近交易记录 -->
      </div>
    </div>
  </div>
  ";
        // line 71
        $this->loadTemplate("Reseller/Common/_rightPanel.twig", "Reseller/Finance/index.twig", 71)->display($context);
        // line 72
        echo "  <!-- /我的财务 -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Reseller/Finance/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 72,  204 => 71,  196 => 65,  184 => 59,  180 => 58,  176 => 57,  172 => 56,  169 => 55,  164 => 54,  161 => 53,  151 => 45,  149 => 44,  141 => 39,  125 => 26,  121 => 25,  111 => 18,  106 => 15,  104 => 14,  100 => 12,  91 => 11,  80 => 8,  71 => 7,  58 => 5,  49 => 4,  39 => 1,  37 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Reseller/Common/layout.twig' %}
{% set title = '我的财务-我的账户' %}

{% block title %}
  {{ title }}
{% endblock %}
{% block css %}
  {% include \"Reseller/Finance/commonCss.twig\" %}
{% endblock %}

{% block main_content %}
  <div class=\"caiwu-left\" style=\"float: left; width: calc(100% - 380px);height: auto;\">
    <div class=\"panel-item g-bdc\">
      {% include \"Reseller/Finance/financeTabs.twig\" %}

      <div class=\"m-container\" style=\"background-color: #FFFFFF;\">
        <div class=\"m-cwel\">
          <a class=\"f-fs-16\">{{ user.realNameInfo.business_name|default(\"未实名认证\")  }}</a>
        </div>
        <div class=\"m-item\">
          <div class=\"item g-bdc\">
            <div class=\"item-icon f-fl\"><i class=\"iconfont icon-item-icom\">&#xe65a;</i></div>
            <div class=\"item-amount f-fl\">
              <span class=\"f-fs-14 s-gray\">账户余额</span><br />
              <strong class=\"f-fs-20 s-red\">{{ user.resellerAccount.balance|default(0)|number_format(2) }}</strong><span style=\"margin-left: 10px;\">元</span>
              <a href=\"{{ path('reseller_finance_add_balance') }}\" class=\"layui-btn\" >在线充值</a>
            </div>
          </div>
        </div>
      </div>

      <!-- 最近交易记录 -->
      <div class=\"panel-item\" style=\"box-sizing: border-box; padding: 10px; background-color: #FFFFFF; border: 1px solid #E0E0E0; border-top: none;\">
        <table class=\"f-fl\">
          <thead>
          <tr>
            <th colspan=\"5\">
              <strong style=\"color: #2ca9e1;\">最近交易记录</strong>
              <a href=\"{{ path(\"reseller_finance_trade_logs\") }}\">更多</a>
            </th>
          </tr>
          </thead>
          <tbody>
          {% if trades %}
            <tr>
              <td style=\"width: 200px;\">交易时间</td>
              <td>交易事由</td>
              <td>交易金额</td>
              <td>交易状态</td>
              <td></td>
            </tr>
          {% endif %}
          {% set statuses = constant('App\\\\Common\\\\Model\\\\Payment\\\\UserMoneyTradeLog::TRADE_STATUSES') %}
          {% for t in trades %}
          <tr>
            <td>{{ t.trade_time|date(\"Y-m-d H:i:s\") }}</td>
            <td>{{ t.name }}</td>
            <td>{{ t.amount|number_format(2) }}</td>
            <td>{{ statuses[t.trade_status]|default('未知状态(' ~ t.trade_status ~ ')') }}</td>
            <td>
              <a href=\"javascript:void();\">详情</a>
            </td>
          </tr>
          {% endfor %}
          </tbody>
        </table>
        <!-- /最近交易记录 -->
      </div>
    </div>
  </div>
  {% include \"Reseller/Common/_rightPanel.twig\" %}
  <!-- /我的财务 -->
{% endblock %}
", "Reseller/Finance/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Finance\\index.twig");
    }
}
