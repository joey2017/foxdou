<?php

/* Reseller/Product/_form.twig */
class __TwigTemplate_0e7c943a8953c729859f2002320a4bc3993efa70cf2fb1e409e896af8a71ba07 extends Twig_Template
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
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Reseller/Product/_form.twig", 1);
        // line 2
        echo "
<form action=\"\" class=\"layui-form\" id=\"form\">
    <input type=\"hidden\" name=\"cate_id\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->source); })()), "request", array()), "get", array(0 => "cate_id"), "method"), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"isp_id\" id=\"isp_id\" value=\"\">
    <div class=\"layui-form-item m-screen\">
        ";
        // line 7
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()), "id", array()), null, array("outer" => null), array("placeholder" => "商品编号"));
        echo "
        ";
        // line 8
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->source); })()), "name", array()), null, array("outer" => null), array("placeholder" => "商品名称"));
        echo "
        ";
        // line 9
        echo $context["sf"]->macro_select(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->source); })()), "status", array()), null, $this->extensions['App\Common\Twig\AppExtension']->toOptions("App\\Common\\Model\\Product\\Product::STATUSES", "商品状态"), array("outer" => null));
        echo "
    </div>
    <div class=\"layui-form-item m-screen\">
        ";
        // line 12
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), "face_value", array()), null, array("outer" => null), array("placeholder" => "商品编号"));
        echo "
        ";
        // line 13
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), "sell_price", array()), null, array("outer" => null), array("placeholder" => "商品编号"));
        echo "
        ";
        // line 14
        echo $context["sf"]->macro_select(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "speed", array()), null, $this->extensions['App\Common\Twig\AppExtension']->toOptions(array("1" => "快充", "2" => "慢充"), "充值速度"), array("outer" => null));
        echo "
    </div>
    <div class=\"m-cx\">
        <input type=\"button\" value=\"查询\" class=\"layui-btn\" onclick=\"get_data('";
        // line 17
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
        return array (  69 => 17,  63 => 14,  59 => 13,  55 => 12,  49 => 9,  45 => 8,  41 => 7,  35 => 4,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

<form action=\"\" class=\"layui-form\" id=\"form\">
    <input type=\"hidden\" name=\"cate_id\" value=\"{{ app.request.get('cate_id') }}\">
    <input type=\"hidden\" name=\"isp_id\" id=\"isp_id\" value=\"\">
    <div class=\"layui-form-item m-screen\">
        {{ sf.text(form.id, null, {'outer': null}, {'placeholder': '商品编号'}) }}
        {{ sf.text(form.name, null, {'outer': null}, {'placeholder': '商品名称'}) }}
        {{ sf.select(form.status, null,  to_options('App\\\\Common\\\\Model\\\\Product\\\\Product::STATUSES', \"商品状态\"), {'outer': null}) }}
    </div>
    <div class=\"layui-form-item m-screen\">
        {{ sf.text(form.face_value, null, {'outer': null}, {'placeholder': '商品编号'}) }}
        {{ sf.text(form.sell_price, null, {'outer': null}, {'placeholder': '商品编号'}) }}
        {{ sf.select(form.speed, null,  to_options({'1': '快充', '2': '慢充'}, \"充值速度\"), {'outer': null}) }}
    </div>
    <div class=\"m-cx\">
        <input type=\"button\" value=\"查询\" class=\"layui-btn\" onclick=\"get_data('{{ path('reseller_product_index') }}');return false;\">
    </div>
    <div style=\"clear: both;\"></div>
</form>
", "Reseller/Product/_form.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Product\\_form.twig");
    }
}
