<?php

/* Reseller/Order/_form.twig */
class __TwigTemplate_8de9084e2d0aa2dd115091f3c676429e07cae284d08368b28540b8afa10aa424 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Order/_form.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Order/_form.twig"));

        // line 1
        $context["sf"] = $this->loadTemplate("Common/simple_form_helpers.html.twig", "Reseller/Order/_form.twig", 1);
        // line 2
        echo "
<form action=\"\" class=\"layui-form\" id=\"form\">
<input type=\"hidden\" name=\"product_cate_id\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->source); })()), "request", array()), "get", array(0 => "product_cate_id"), "method"), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"isp_id\" id=\"isp_id\" value=\"\">
<div class=\"layui-form-item m-screen\">
  <label class=\"layui-form-label m-screen-label\">订单编号</label>
  <div class=\"layui-input-inline m-input-block\">
    <input type=\"text\" name=\"order_id\" value=\"\" class=\"layui-input\" placeholder=\"订单编号\">
  </div>
  <label class=\"layui-form-label m-screen-label\">充值号码</label>
  <div class=\"layui-input-inline m-input-block\">
    <input type=\"text\" name=\"phone_number\" value=\"\" class=\"layui-input\" placeholder=\"充值号码\">
  </div>
  <label class=\"layui-form-label m-screen-label\">订单状态</label>
  <div class=\"layui-input-inline m-input-block\">
    ";
        // line 17
        echo $context["sf"]->macro_select_raw("status", $this->extensions['App\Common\Twig\AppExtension']->arrayToOptions(twig_constant("App\\Common\\Model\\Order\\OrderRecharge::STATUSES"), "全部"));
        echo "
  </div>
</div>
<div class=\"layui-form-item m-screen\">
  <label class=\"layui-form-label m-screen-label\">商品名称</label>
  <div class=\"layui-input-inline m-input-block\">
    <input type=\"text\" name=\"\" value=\"\" class=\"layui-input\" placeholder=\"商品名称\">
  </div>
  <label class=\"layui-form-label m-screen-label-m\">面值</label>
  <div class=\"layui-input-inline m-input-block-m\">
    <input type=\"text\" name=\"\" value=\"\" class=\"layui-input\" placeholder=\"面值\">
  </div>
  <label class=\"layui-form-label m-screen-label-m\">金额</label>
  <div class=\"layui-input-inline m-input-block-m\">
    <input type=\"text\" name=\"\" value=\"\" class=\"layui-input\" placeholder=\"金额\">
  </div>
  <label class=\"layui-form-label m-screen-label\">时间范围</label>
  <div class=\"layui-input-inline m-input-block\" style=\"width: 90px;\">
    <input type=\"text\" name=\"\" value=\"\" class=\"layui-input\" placeholder=\"开始时间\">
  </div>
  <div class=\"layui-input-inline m-input-block\" style=\"width: 90px;\">
    <input type=\"text\" name=\"\" value=\"\" class=\"layui-input\" placeholder=\"结束时间\">
  </div>
</div>
<div class=\"m-cx\">
  <input type=\"button\" value=\"查询\" class=\"layui-btn\" onclick=\"get_data();return false;\">
</div>
<div style=\"clear: both;\"></div>
</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Reseller/Order/_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 17,  35 => 4,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import ('Common/simple_form_helpers.html.twig') as sf %}

<form action=\"\" class=\"layui-form\" id=\"form\">
<input type=\"hidden\" name=\"product_cate_id\" value=\"{{ app.request.get('product_cate_id') }}\">
<input type=\"hidden\" name=\"isp_id\" id=\"isp_id\" value=\"\">
<div class=\"layui-form-item m-screen\">
  <label class=\"layui-form-label m-screen-label\">订单编号</label>
  <div class=\"layui-input-inline m-input-block\">
    <input type=\"text\" name=\"order_id\" value=\"\" class=\"layui-input\" placeholder=\"订单编号\">
  </div>
  <label class=\"layui-form-label m-screen-label\">充值号码</label>
  <div class=\"layui-input-inline m-input-block\">
    <input type=\"text\" name=\"phone_number\" value=\"\" class=\"layui-input\" placeholder=\"充值号码\">
  </div>
  <label class=\"layui-form-label m-screen-label\">订单状态</label>
  <div class=\"layui-input-inline m-input-block\">
    {{ sf.select_raw('status', to_options(constant('App\\\\Common\\\\Model\\\\Order\\\\OrderRecharge::STATUSES'), \"全部\")) }}
  </div>
</div>
<div class=\"layui-form-item m-screen\">
  <label class=\"layui-form-label m-screen-label\">商品名称</label>
  <div class=\"layui-input-inline m-input-block\">
    <input type=\"text\" name=\"\" value=\"\" class=\"layui-input\" placeholder=\"商品名称\">
  </div>
  <label class=\"layui-form-label m-screen-label-m\">面值</label>
  <div class=\"layui-input-inline m-input-block-m\">
    <input type=\"text\" name=\"\" value=\"\" class=\"layui-input\" placeholder=\"面值\">
  </div>
  <label class=\"layui-form-label m-screen-label-m\">金额</label>
  <div class=\"layui-input-inline m-input-block-m\">
    <input type=\"text\" name=\"\" value=\"\" class=\"layui-input\" placeholder=\"金额\">
  </div>
  <label class=\"layui-form-label m-screen-label\">时间范围</label>
  <div class=\"layui-input-inline m-input-block\" style=\"width: 90px;\">
    <input type=\"text\" name=\"\" value=\"\" class=\"layui-input\" placeholder=\"开始时间\">
  </div>
  <div class=\"layui-input-inline m-input-block\" style=\"width: 90px;\">
    <input type=\"text\" name=\"\" value=\"\" class=\"layui-input\" placeholder=\"结束时间\">
  </div>
</div>
<div class=\"m-cx\">
  <input type=\"button\" value=\"查询\" class=\"layui-btn\" onclick=\"get_data();return false;\">
</div>
<div style=\"clear: both;\"></div>
</form>
", "Reseller/Order/_form.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Order\\_form.twig");
    }
}
