<?php

/* Common/_productCategories.twig */
class __TwigTemplate_3ff137e465b1b9ee997cc7f1c9e6e5bcbdf104e502870a57425ae5e3ccda877c extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/_productCategories.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/_productCategories.twig"));

        // line 2
        $context["categories"] = array(0 => array("value" => 1, "name" => "话费充值"), 1 => array("value" => 2, "name" => "游戏充值"), 2 => array("value" => 3, "name" => "腾讯业务"), 3 => array("value" => 4, "name" => "流量充值"), 4 => array("value" => 5, "name" => "加油卡"), 5 => array("value" => 6, "name" => "视频卡"), 6 => array("value" => 7, "name" => "票务"), 7 => array("value" => 8, "name" => "手机卡号"), 8 => array("value" => 9, "name" => "生活激费"), 9 => array("value" => 10, "name" => "固话宽带充值"));
        // line 15
        $context["current_cate"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->source); })()), "request", array()), "get", array(0 => "cate_id", 1 => 1), "method");
        // line 16
        echo "
<div class=\"page-head\">
  ";
        // line 19
        echo "  <div class=\"tab-item f-fl\">
    <div class=\"layui-tab layui-tab-brief\" lay-filter=\"docDemoTabBrief\" style=\"margin: 0;\">
      <ul class=\"layui-tab-title tab-item-item\" id=\"order_nav\" style=\"padding-left: 0px;\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cate_id"]) {
            // line 23
            echo "        <li class=\"";
            echo ((((isset($context["current_cate"]) || array_key_exists("current_cate", $context) ? $context["current_cate"] : (function () { throw new Twig_Error_Runtime('Variable "current_cate" does not exist.', 23, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["cate_id"], "value", array()))) ? ("layui-this") : (""));
            echo "\">
          <a href=\"?cate_id=";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cate_id"], "value", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cate_id"], "name", array()), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cate_id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "      </ul>
    </div>
  </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/_productCategories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 27,  51 => 24,  46 => 23,  42 => 22,  37 => 19,  33 => 16,  31 => 15,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%
set categories = [
  {\"value\": 1,  \"name\": \"话费充值\"},
  {\"value\": 2,  \"name\": \"游戏充值\"},
  {\"value\": 3,  \"name\": \"腾讯业务\"},
  {\"value\": 4,  \"name\": \"流量充值\"},
  {\"value\": 5,  \"name\": \"加油卡\"},
  {\"value\": 6,  \"name\": \"视频卡\"},
  {\"value\": 7,  \"name\": \"票务\"},
  {\"value\": 8,  \"name\": \"手机卡号\"},
  {\"value\": 9,  \"name\": \"生活激费\"},
  {\"value\": 10, \"name\": \"固话宽带充值\"},
]
%}
{% set current_cate = app.request.get('cate_id', 1) %}

<div class=\"page-head\">
  {#<a href=\"{{ path(\"reseller_orders_index\", {\"cate_id\": 1}) }}\" class=\"fw-return f-fl\"><i class=\"iconfont\">&#xe60a;</i></a>#}
  <div class=\"tab-item f-fl\">
    <div class=\"layui-tab layui-tab-brief\" lay-filter=\"docDemoTabBrief\" style=\"margin: 0;\">
      <ul class=\"layui-tab-title tab-item-item\" id=\"order_nav\" style=\"padding-left: 0px;\">
        {% for cate_id in categories %}
        <li class=\"{{ current_cate == cate_id.value ? \"layui-this\" : \"\" }}\">
          <a href=\"?cate_id={{ cate_id.value }}\">{{ cate_id.name }}</a>
        </li>
        {% endfor %}
      </ul>
    </div>
  </div>
</div>", "Common/_productCategories.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Common\\_productCategories.twig");
    }
}
