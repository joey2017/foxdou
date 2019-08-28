<?php

/* Supplier/Orders/order_list.twig */
class __TwigTemplate_b9ef4793438a091df6d9d18684a248160561f98c8b57a308c0c5b0dc1b634dd0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Supplier/Common/layout.twig", "Supplier/Orders/order_list.twig", 1);
        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
            'js_end' => array($this, 'block_js_end'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Supplier/Common/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Supplier/Orders/order_list.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Supplier/Orders/order_list.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Supplier/Orders/order_list.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 5
        echo "  <div class=\"layui-fluid\" id=\"recharge_order_sup\" style=\"margin-left: 200px;padding-top: 15px;\">
    <div class=\"layui-card\">
      <div class=\"layui-tab layui-tab-brief layadmin-tab\" lay-filter=\"docDemoTabBrief\">
        <ul class=\"layui-tab-title\" id=\"order_mark\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_constant("App\\Common\\Model\\Order\\OrderRecharge::MARKS"));
        foreach ($context['_seq'] as $context["key"] => $context["mark"]) {
            // line 10
            echo "              <li data-mark=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" ";
            if (($context["key"] == (isset($context["order_mark"]) || array_key_exists("order_mark", $context) ? $context["order_mark"] : (function () { throw new Twig_Error_Runtime('Variable "order_mark" does not exist.', 10, $this->source); })()))) {
                echo "class=\"layui-this\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["mark"], "html", null, true);
            echo "
                <span class=\"layui-badge\">
                    ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order_mark_statistics"]) || array_key_exists("order_mark_statistics", $context) ? $context["order_mark_statistics"] : (function () { throw new Twig_Error_Runtime('Variable "order_mark_statistics" does not exist.', 12, $this->source); })()), $context["key"], array(), "array"), "html", null, true);
            echo "
                </span>
              </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['mark'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </ul>
        <div class=\"layui-tab-content\">
          <div class=\"layui-tab-item layui-show\">
            <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\" style=\"padding-bottom: 15px;\">
              <div class=\"layui-form-item\">
                <form action=\"\" method=\"get\" id=\"order-recharge-sup\">
                  <input type=\"hidden\" name=\"order_mark\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["order_mark"]) || array_key_exists("order_mark", $context) ? $context["order_mark"] : (function () { throw new Twig_Error_Runtime('Variable "order_mark" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\">
                  <input type=\"hidden\" name=\"product_cate_id\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["product_cate_id"]) || array_key_exists("product_cate_id", $context) ? $context["product_cate_id"] : (function () { throw new Twig_Error_Runtime('Variable "product_cate_id" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\">
                  <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">充值状态</label>
                    <div class=\"layui-input-block\">
                        ";
        // line 27
        echo $context["sf"]->macro_select_raw("recharge_status", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\Order\\OrderRechargeSup::SHOW_SUPPLIER_RECHARGE_STATUS_ARRAY"), "全部"), array("class" => "layui-input"));
        echo "
                    </div>
                  </div>

                  <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">订单结算状态</label>
                    <div class=\"layui-input-block\">
                        ";
        // line 34
        echo $context["sf"]->macro_select_raw("settle_status", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\Order\\OrderRechargeSup::SHOW_SUPPLIER_SETTLE_STATUS_ARRAY"), "全部"), array("class" => "layui-input"));
        echo "
                    </div>
                  </div>

                  <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">日期范围</label>
                    <div class=\"layui-input-block\">
                      <input type=\"text\" name=\"range_time\" class=\"layui-input\" id=\"timeFrame\" placeholder=\"\">
                      <input type=\"hidden\" name=\"start_time\" id=\"start_time\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\">
                      <input type=\"hidden\" name=\"end_time\" id=\"end_time\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\">
                    </div>
                  </div>
                  <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">搜索</label>
                    <div class=\"layui-input-block\">
                      <input type=\"text\" name=\"id\" placeholder=\"主订单编号搜索...\" autocomplete=\"off\" class=\"layui-input\">
                    </div>
                  </div>
                  <div class=\"layui-inline\">
                    <div class=\"layui-input-block layui-input-block-margin\">
                      <button class=\"layui-btn layuiadmin-btn-useradmin\" onclick=\"get_data();return false;\">
                        <i class=\"layui-icon layui-icon-search layuiadmin-button-btn\"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class=\"layui-card-body\">
              <div style=\"padding: 5px 0;\">
                <button class=\"layui-btn layuiadmin-btn-useradmin reverse-select\">反选</button>
                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_constant("\\App\\Common\\Model\\Order\\OrderRechargeSup::STATUS_SUCCEED_SUP"), "html", null, true);
        echo "\">置成功</button>
                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_constant("\\App\\Common\\Model\\Order\\OrderRechargeSup::STATUS_FAILED_SUP"), "html", null, true);
        echo "\">置失败</button>
              </div>
              <table class=\"layui-table\" id=\"order-table\" lay-filter=\"order-table\">

              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 80
        echo "  ";
        $this->loadTemplate("/Supplier/Orders/order_list_js.twig", "Supplier/Orders/order_list.twig", 80)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Supplier/Orders/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 80,  184 => 79,  162 => 66,  158 => 65,  133 => 43,  129 => 42,  118 => 34,  108 => 27,  101 => 23,  97 => 22,  89 => 16,  79 => 12,  67 => 10,  63 => 9,  57 => 5,  48 => 4,  38 => 1,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Supplier/Common/layout.twig' %}
{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

{% block main_content %}
  <div class=\"layui-fluid\" id=\"recharge_order_sup\" style=\"margin-left: 200px;padding-top: 15px;\">
    <div class=\"layui-card\">
      <div class=\"layui-tab layui-tab-brief layadmin-tab\" lay-filter=\"docDemoTabBrief\">
        <ul class=\"layui-tab-title\" id=\"order_mark\">
            {% for key,mark in constant('App\\\\Common\\\\Model\\\\Order\\\\OrderRecharge::MARKS') %}
              <li data-mark=\"{{ key }}\" {% if key==order_mark %}class=\"layui-this\"{% endif %}>{{ mark }}
                <span class=\"layui-badge\">
                    {{ order_mark_statistics[key] }}
                </span>
              </li>
            {% endfor %}
        </ul>
        <div class=\"layui-tab-content\">
          <div class=\"layui-tab-item layui-show\">
            <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\" style=\"padding-bottom: 15px;\">
              <div class=\"layui-form-item\">
                <form action=\"\" method=\"get\" id=\"order-recharge-sup\">
                  <input type=\"hidden\" name=\"order_mark\" value=\"{{ order_mark }}\">
                  <input type=\"hidden\" name=\"product_cate_id\" value=\"{{ product_cate_id }}\">
                  <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">充值状态</label>
                    <div class=\"layui-input-block\">
                        {{ sf.select_raw('recharge_status', to_options(constant(\"App\\\\Common\\\\Model\\\\Order\\\\OrderRechargeSup::SHOW_SUPPLIER_RECHARGE_STATUS_ARRAY\"), '全部'), {\"class\": \"layui-input\"}) }}
                    </div>
                  </div>

                  <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">订单结算状态</label>
                    <div class=\"layui-input-block\">
                        {{ sf.select_raw('settle_status', to_options(constant(\"App\\\\Common\\\\Model\\\\Order\\\\OrderRechargeSup::SHOW_SUPPLIER_SETTLE_STATUS_ARRAY\"), '全部'), {\"class\": \"layui-input\"}) }}
                    </div>
                  </div>

                  <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">日期范围</label>
                    <div class=\"layui-input-block\">
                      <input type=\"text\" name=\"range_time\" class=\"layui-input\" id=\"timeFrame\" placeholder=\"\">
                      <input type=\"hidden\" name=\"start_time\" id=\"start_time\" value=\"{{ 'now'|date('Y-m-d') }}\">
                      <input type=\"hidden\" name=\"end_time\" id=\"end_time\" value=\"{{ 'now'|date('Y-m-d') }}\">
                    </div>
                  </div>
                  <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">搜索</label>
                    <div class=\"layui-input-block\">
                      <input type=\"text\" name=\"id\" placeholder=\"主订单编号搜索...\" autocomplete=\"off\" class=\"layui-input\">
                    </div>
                  </div>
                  <div class=\"layui-inline\">
                    <div class=\"layui-input-block layui-input-block-margin\">
                      <button class=\"layui-btn layuiadmin-btn-useradmin\" onclick=\"get_data();return false;\">
                        <i class=\"layui-icon layui-icon-search layuiadmin-button-btn\"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class=\"layui-card-body\">
              <div style=\"padding: 5px 0;\">
                <button class=\"layui-btn layuiadmin-btn-useradmin reverse-select\">反选</button>
                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"{{ constant('\\\\App\\\\Common\\\\Model\\\\Order\\\\OrderRechargeSup::STATUS_SUCCEED_SUP') }}\">置成功</button>
                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"{{ constant('\\\\App\\\\Common\\\\Model\\\\Order\\\\OrderRechargeSup::STATUS_FAILED_SUP') }}\">置失败</button>
              </div>
              <table class=\"layui-table\" id=\"order-table\" lay-filter=\"order-table\">

              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
{% endblock %}

{% block js_end %}
  {% include \"/Supplier/Orders/order_list_js.twig\" %}
{% endblock %}
", "Supplier/Orders/order_list.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Supplier\\Orders\\order_list.twig");
    }
}
