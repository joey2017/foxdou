<?php

/* Reseller/Order/_form.twig */
class __TwigTemplate_93543df11efa6db15a994dc598d02b4ceeee1fbd379646249e523fc1965673a4 extends Twig_Template
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
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Reseller/Order/_form.twig", 1);
        // line 2
        echo "
<form action=\"\" class=\"layui-form\" id=\"form\">
<input type=\"hidden\" name=\"product_cate_id\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->source); })()), "request", array()), "get", array(0 => "product_cate_id"), "method"), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"isp_id\" id=\"isp_id\" value=\"\">
  <div class=\"layui-form-item m-screen\">
      ";
        // line 7
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()), "order_id", array()), null, array("outer" => null), array("placeholder" => "业务单号"));
        echo "
      ";
        // line 8
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->source); })()), "phone_number", array()), null, array("outer" => null), array("placeholder" => "充值号码"));
        echo "
      ";
        // line 9
        echo $context["sf"]->macro_select(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->source); })()), "status", array()), null, $this->extensions['App\Common\Twig\AppExtension']->toOptions("App\\Common\\Model\\Order\\OrderRecharge::STATUSES", "全部"), array("outer" => null));
        echo "
      ";
        // line 10
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), "product_name", array()), null, array("outer" => null), array("placeholder" => "商品名称"));
        echo "
  </div>
  <div class=\"layui-form-item m-screen\">
      ";
        // line 13
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), "product_face_value", array()), null, array("outer" => null), array("placeholder" => "面值"));
        echo "
      ";
        // line 14
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "recharge_amount", array()), null, array("outer" => null), array("placeholder" => "金额"));
        echo "
      ";
        // line 15
        echo $context["sf"]->macro_select(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->source); })()), "speed", array()), null, $this->extensions['App\Common\Twig\AppExtension']->toOptions(array("1" => "快充", "2" => "慢充"), "充值速度"), array("outer" => null));
        echo "
      ";
        // line 16
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), "from", array()), null, array("outer" => null), array("placeholder" => "开始时间"));
        echo "
      ";
        // line 17
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), "to", array()), null, array("outer" => null), array("placeholder" => "结束时间"));
        echo "
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
        return array (  75 => 17,  71 => 16,  67 => 15,  63 => 14,  59 => 13,  53 => 10,  49 => 9,  45 => 8,  41 => 7,  35 => 4,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

<form action=\"\" class=\"layui-form\" id=\"form\">
<input type=\"hidden\" name=\"product_cate_id\" value=\"{{ app.request.get('product_cate_id') }}\">
<input type=\"hidden\" name=\"isp_id\" id=\"isp_id\" value=\"\">
  <div class=\"layui-form-item m-screen\">
      {{ sf.text(form.order_id, null, {'outer': null}, {'placeholder': '业务单号'}) }}
      {{ sf.text(form.phone_number, null, {'outer': null}, {'placeholder': '充值号码'}) }}
      {{ sf.select(form.status, null,  to_options('App\\\\Common\\\\Model\\\\Order\\\\OrderRecharge::STATUSES', \"全部\"), {'outer': null}) }}
      {{ sf.text(form.product_name, null, {'outer': null}, {'placeholder': '商品名称'}) }}
  </div>
  <div class=\"layui-form-item m-screen\">
      {{ sf.text(form.product_face_value, null, {'outer': null}, {'placeholder': '面值'}) }}
      {{ sf.text(form.recharge_amount, null, {'outer': null}, {'placeholder': '金额'}) }}
      {{ sf.select(form.speed, null,  to_options({'1': '快充', '2': '慢充'}, \"充值速度\"), {'outer': null}) }}
      {{ sf.text(form.from, null, {'outer': null}, {'placeholder': '开始时间'}) }}
      {{ sf.text(form.to,  null, {'outer': null}, {'placeholder': '结束时间'}) }}
  </div>
<div class=\"m-cx\">
  <input type=\"button\" value=\"查询\" class=\"layui-btn\" onclick=\"get_data();return false;\">
</div>
<div style=\"clear: both;\"></div>
</form>
", "Reseller/Order/_form.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Order\\_form.twig");
    }
}
