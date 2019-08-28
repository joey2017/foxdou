<?php

/* Reseller/Product/_form.twig */
class __TwigTemplate_dee099411d40eb28da1841098bce677877277fed71b84eef1bd6e3fc85f1f3c1 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Product/_form.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Product/_form.twig"));

        // line 1
        $context["sf"] = $this->loadTemplate("Common/simple_form_helpers.html.twig", "Reseller/Product/_form.twig", 1);
        // line 2
        echo "
<form action=\"\" class=\"layui-form\" id=\"form\">
<input type=\"hidden\" name=\"product_cate_id\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->source); })()), "request", array()), "get", array(0 => "product_cate_id"), "method"), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"icp\" id=\"icp_value\" value=\"\">
<div class=\"layui-form-item m-screen\">
  <label class=\"layui-form-label m-screen-label\">订单编号</label>
  <div class=\"layui-input-inline m-input-block\">
    ";
        // line 9
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->source); })()), "id", array()), array("class" => "layui-input", "placeholder" => "商品编号"));
        echo "
  </div>
  <label class=\"layui-form-label m-screen-label\">商品名称</label>
  <div class=\"layui-input-inline m-input-block\">
    ";
        // line 13
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), "name", array()), array("class" => "layui-input", "placeholder" => "商品名称"));
        echo "
  </div>
  <label class=\"layui-form-label m-screen-label\">商品状态</label>
  <div class=\"layui-input-inline m-input-block\">
    ";
        // line 17
        echo $context["sf"]->macro_select(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), "status", array()), $this->extensions['App\Common\Twig\AppExtension']->arrayToOptions((isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new Twig_Error_Runtime('Variable "statuses" does not exist.', 17, $this->source); })()), "全部"));
        echo "
  </div>
</div>
<div class=\"layui-form-item m-screen\">
  <label class=\"layui-form-label m-screen-label-m\">面值</label>
  <div class=\"layui-input-inline m-input-block-m\">
    ";
        // line 23
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "face_value", array()), array("class" => "layui-input", "placeholder" => "面值"));
        echo "
  </div>
  <label class=\"layui-form-label m-screen-label-m\">价格</label>
  <div class=\"layui-input-inline m-input-block-m\">
    ";
        // line 27
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "price", array()), array("class" => "layui-input", "placeholder" => "价格"));
        echo "
  </div>
  <label class=\"layui-form-label m-screen-label\">充值类型</label>
  <div class=\"layui-input-inline m-input-block\">
    ";
        // line 31
        echo $context["sf"]->macro_select(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "speed", array()), array(0 => array("name" => "全部", "value" => ""), 1 => array("name" => "快充", "value" => "1"), 2 => array("name" => "慢充", "value" => "2")));
        echo "
  </div>
</div>
<div class=\"m-cx\">
  <input type=\"button\" value=\"查询\" class=\"layui-btn\" onclick=\"get_data('";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_product_index");
        echo "');return false;\">
</div>
<div style=\"clear: both;\"></div>
</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Reseller/Product/_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 35,  80 => 31,  73 => 27,  66 => 23,  57 => 17,  50 => 13,  43 => 9,  35 => 4,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import ('Common/simple_form_helpers.html.twig') as sf %}

<form action=\"\" class=\"layui-form\" id=\"form\">
<input type=\"hidden\" name=\"product_cate_id\" value=\"{{ app.request.get('product_cate_id') }}\">
<input type=\"hidden\" name=\"icp\" id=\"icp_value\" value=\"\">
<div class=\"layui-form-item m-screen\">
  <label class=\"layui-form-label m-screen-label\">订单编号</label>
  <div class=\"layui-input-inline m-input-block\">
    {{ sf.text(form.id,  {'class': 'layui-input',  'placeholder': '商品编号'}) }}
  </div>
  <label class=\"layui-form-label m-screen-label\">商品名称</label>
  <div class=\"layui-input-inline m-input-block\">
    {{ sf.text(form.name,  {'class': 'layui-input',  'placeholder': '商品名称'}) }}
  </div>
  <label class=\"layui-form-label m-screen-label\">商品状态</label>
  <div class=\"layui-input-inline m-input-block\">
    {{ sf.select(form.status, to_options(statuses, \"全部\")) }}
  </div>
</div>
<div class=\"layui-form-item m-screen\">
  <label class=\"layui-form-label m-screen-label-m\">面值</label>
  <div class=\"layui-input-inline m-input-block-m\">
    {{ sf.text(form.face_value,  {'class': 'layui-input',  'placeholder': '面值'}) }}
  </div>
  <label class=\"layui-form-label m-screen-label-m\">价格</label>
  <div class=\"layui-input-inline m-input-block-m\">
    {{ sf.text(form.price,  {'class': 'layui-input',  'placeholder': '价格'}) }}
  </div>
  <label class=\"layui-form-label m-screen-label\">充值类型</label>
  <div class=\"layui-input-inline m-input-block\">
    {{ sf.select(form.speed, [{\"name\": \"全部\", \"value\": \"\"}, {\"name\": \"快充\", \"value\": \"1\"}, {\"name\": \"慢充\", \"value\": \"2\"}, ]) }}
  </div>
</div>
<div class=\"m-cx\">
  <input type=\"button\" value=\"查询\" class=\"layui-btn\" onclick=\"get_data('{{ path('reseller_product_index') }}');return false;\">
</div>
<div style=\"clear: both;\"></div>
</form>
", "Reseller/Product/_form.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Product\\_form.twig");
    }
}
