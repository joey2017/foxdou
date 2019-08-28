<?php

/* Admin/Order/suppliers.twig */
class __TwigTemplate_1c44d21d73ba59412b5400379c12f93bb4dcfc135317e83d80ec643bd136da36 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Admin/Common/layout.twig", "Admin/Order/suppliers.twig", 1);
        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
            'extra' => array($this, 'block_extra'),
            'js_end' => array($this, 'block_js_end'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Admin/Common/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Order/suppliers.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Order/suppliers.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers.html.twig", "Admin/Order/suppliers.twig", 2);
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
        echo "  <style>
    tr td{height:150px!important;}
  </style>
  <div class=\"layui-card layadmin-header\">
    <div class=\"layui-breadcrumb\">
      <a href=\"javascript:;\">主页</a>
      <a href=\"javascript:;\">订单管理</a>
      <a><cite>SUP订单</cite></a>
    </div>
  </div>
  <div class=\"layui-fluid\" id=\"recharge_order_sup\">
    <div class=\"layui-card\">
      <div class=\"layui-tab layui-tab-brief layadmin-tab\" lay-filter=\"docDemoTabBrief\">
        <div class=\"layui-tab-content\">
          <div class=\"layui-tab-item layui-show\">
            <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
              <div class=\"layui-form-item\">
                <form action=\"\" method=\"get\">
                  <input type=\"hidden\" name=\"product_cate_id\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["product_cate_id"]) || array_key_exists("product_cate_id", $context) ? $context["product_cate_id"] : (function () { throw new Twig_Error_Runtime('Variable "product_cate_id" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\">
                  <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">充值状态</label>
                    <div class=\"layui-input-block\">
                      ";
        // line 27
        echo $context["sf"]->macro_select_raw("recharge_status", $this->extensions['App\Common\Twig\AppExtension']->arrayToOptions(twig_constant("App\\Common\\Model\\Order\\OrderRechargeSup::RECHARGE_STATUS"), "全部"), array("class" => "layui-input"));
        echo "
                    </div>
                  </div>

                  <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">订单结算状态</label>
                    <div class=\"layui-input-block\">
                      ";
        // line 34
        echo $context["sf"]->macro_select_raw("settle_status", $this->extensions['App\Common\Twig\AppExtension']->arrayToOptions(twig_constant("App\\Common\\Model\\Order\\OrderRechargeSup::SETTLE_STATUS"), "全部"), array("class" => "layui-input"));
        echo "
                    </div>
                  </div>

                  <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">日期范围</label>
                    <div class=\"layui-input-block\">
                      <input type=\"text\" name=\"range_time\" class=\"layui-input\" id=\"timeFrame\" placeholder=\"\">
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
                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"setSuccess\">置成功</button>
                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"setFailure\">置失败</button>
                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"settlement\">结算</button>
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

    // line 80
    public function block_extra($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        // line 81
        echo "
  <!--弹窗信息------------------------>

  <!--置成功提示-->
  <div id=\"setSuccessDome\" class=\"layer-demo layui-form\" style=\"display: none;\">
    <input type=\"radio\" name=\"type_success\" value=\"1\" title=\"结算该笔SUP订单，并对主订单置成功\" checked>
    <input type=\"radio\" name=\"type_success\" value=\"2\" title=\"暂不结算该笔SUP订单，并对主订单置成功\">
    <input type=\"radio\" name=\"type_success\" value=\"3\" title=\"结算该笔SUP订单，对主订单不进行任何操作\">
    <input type=\"radio\" name=\"type_success\" value=\"4\" title=\"暂不结算该笔SUP订单，对主订单不进行任何操作\">
  </div>
  <!--置失败提示-->
  <div id=\"setFailureDome\" class=\"layer-demo layui-form\" style=\"display: none;\">
    <input type=\"radio\" name=\"type_fail\" value=\"2\" title=\"对主订单置失败\" checked>
    <input type=\"radio\" name=\"type_fail\" value=\"4\" title=\"对主订单不进行任何操作\">
    <div class=\"layui-input-inline\" style=\"margin-top: 20px;\">
      <input type=\"password\" name=\"password\" lay-verify=\"pass\" placeholder=\"请输入安全操作密码\" autocomplete=\"off\" class=\"layui-input\">
    </div>
  </div>

  <!--结算提示-->
  <div id=\"settlementDome\" class=\"layer-demo layui-form\" style=\"display: none;\">
    确定对所选SUP订单进行结算？
  </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 107
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 108
        echo "  ";
        $this->loadTemplate("/Admin/Order/common_js.twig", "Admin/Order/suppliers.twig", 108)->display($context);
        // line 109
        echo "  ";
        $this->loadTemplate("/Admin/Order/supplier_recharge_js.twig", "Admin/Order/suppliers.twig", 109)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Order/suppliers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 109,  202 => 108,  193 => 107,  159 => 81,  150 => 80,  95 => 34,  85 => 27,  78 => 23,  58 => 5,  49 => 4,  39 => 1,  37 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Admin/Common/layout.twig' %}
{% import ('/Common/simple_form_helpers.html.twig') as sf %}

{% block main_content %}
  <style>
    tr td{height:150px!important;}
  </style>
  <div class=\"layui-card layadmin-header\">
    <div class=\"layui-breadcrumb\">
      <a href=\"javascript:;\">主页</a>
      <a href=\"javascript:;\">订单管理</a>
      <a><cite>SUP订单</cite></a>
    </div>
  </div>
  <div class=\"layui-fluid\" id=\"recharge_order_sup\">
    <div class=\"layui-card\">
      <div class=\"layui-tab layui-tab-brief layadmin-tab\" lay-filter=\"docDemoTabBrief\">
        <div class=\"layui-tab-content\">
          <div class=\"layui-tab-item layui-show\">
            <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
              <div class=\"layui-form-item\">
                <form action=\"\" method=\"get\">
                  <input type=\"hidden\" name=\"product_cate_id\" value=\"{{ product_cate_id }}\">
                  <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">充值状态</label>
                    <div class=\"layui-input-block\">
                      {{ sf.select_raw('recharge_status', to_options(constant(\"App\\\\Common\\\\Model\\\\Order\\\\OrderRechargeSup::RECHARGE_STATUS\"), '全部'), {\"class\": \"layui-input\"}) }}
                    </div>
                  </div>

                  <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">订单结算状态</label>
                    <div class=\"layui-input-block\">
                      {{ sf.select_raw('settle_status', to_options(constant(\"App\\\\Common\\\\Model\\\\Order\\\\OrderRechargeSup::SETTLE_STATUS\"), '全部'), {\"class\": \"layui-input\"}) }}
                    </div>
                  </div>

                  <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">日期范围</label>
                    <div class=\"layui-input-block\">
                      <input type=\"text\" name=\"range_time\" class=\"layui-input\" id=\"timeFrame\" placeholder=\"\">
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
                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"setSuccess\">置成功</button>
                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"setFailure\">置失败</button>
                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"settlement\">结算</button>
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

{% block extra %}

  <!--弹窗信息------------------------>

  <!--置成功提示-->
  <div id=\"setSuccessDome\" class=\"layer-demo layui-form\" style=\"display: none;\">
    <input type=\"radio\" name=\"type_success\" value=\"1\" title=\"结算该笔SUP订单，并对主订单置成功\" checked>
    <input type=\"radio\" name=\"type_success\" value=\"2\" title=\"暂不结算该笔SUP订单，并对主订单置成功\">
    <input type=\"radio\" name=\"type_success\" value=\"3\" title=\"结算该笔SUP订单，对主订单不进行任何操作\">
    <input type=\"radio\" name=\"type_success\" value=\"4\" title=\"暂不结算该笔SUP订单，对主订单不进行任何操作\">
  </div>
  <!--置失败提示-->
  <div id=\"setFailureDome\" class=\"layer-demo layui-form\" style=\"display: none;\">
    <input type=\"radio\" name=\"type_fail\" value=\"2\" title=\"对主订单置失败\" checked>
    <input type=\"radio\" name=\"type_fail\" value=\"4\" title=\"对主订单不进行任何操作\">
    <div class=\"layui-input-inline\" style=\"margin-top: 20px;\">
      <input type=\"password\" name=\"password\" lay-verify=\"pass\" placeholder=\"请输入安全操作密码\" autocomplete=\"off\" class=\"layui-input\">
    </div>
  </div>

  <!--结算提示-->
  <div id=\"settlementDome\" class=\"layer-demo layui-form\" style=\"display: none;\">
    确定对所选SUP订单进行结算？
  </div>

{% endblock %}

{% block js_end %}
  {% include \"/Admin/Order/common_js.twig\" %}
  {% include \"/Admin/Order/supplier_recharge_js.twig\" %}
{% endblock %}
", "Admin/Order/suppliers.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\Order\\suppliers.twig");
    }
}
