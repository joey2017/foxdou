<?php

/* Reseller/PrinterSetting/printer_THERMAL_58MM.twig */
class __TwigTemplate_4f9613b9a3649acba2064b391ea75ab877cca4aa81588d8e1d876a65c44de0ce extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/PrinterSetting/printer_THERMAL_58MM.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/PrinterSetting/printer_THERMAL_58MM.twig"));

        // line 1
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Reseller/PrinterSetting/printer_THERMAL_58MM.twig", 1);
        // line 2
        echo "
<blockquote class=\"layui-elem-quote layui-quote-nm\">
  58mm打印机驱动安装指导书<a href=\"\" class=\"\">（点击下载）</a>
</blockquote>
<h2>直充商品</h2>
<div class=\"hz-single\">
  <dl class=\"hz-dl hz-title\">
    <dt>&nbsp;</dt>
    <dd>
      ";
        // line 11
        echo $context["sf"]->macro_text_raw(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), "title_content", array()), array("class" => "layui-input print_view_content", "placeholder" => "在这里输入标题"));
        echo "
      ";
        // line 12
        echo $context["sf"]->macro_checkbox_raw(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), "title", array()), array("1" => "显示"), array("class" => "show_and_hide hz-dl layui-btn", "lay-skin" => "switch", "lay-text" => "显示|隐藏"));
        echo "
    </dd>
  </dl>
  <dl class=\"hz-dl\">
    <dt>订单号：</dt>
    <dd>
      <span>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d H:i:s"), "html", null, true);
        echo "76283</span>
      ";
        // line 19
        echo $context["sf"]->macro_checkbox_raw(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "order_id", array()), array("1" => "显示"), array("class" => "show_and_hide hz-dl layui-btn", "lay-skin" => "switch", "lay-text" => "显示|隐藏"));
        echo "
    </dd>
    <dt>交易时间：</dt>
    <dd>
      <span>";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d H:i:s"), "html", null, true);
        echo "</span>
      ";
        // line 24
        echo $context["sf"]->macro_checkbox_raw(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "add_time", array()), array("1" => "显示"), array("class" => "show_and_hide hz-dl layui-btn", "lay-skin" => "switch", "lay-text" => "显示|隐藏"));
        echo "
    </dd>
  </dl>
  <dl class=\"hz-dl\">
    <dt>商品名称：</dt>
    <dd>
      <span>广西联通话费10元快充</span>
      ";
        // line 31
        echo $context["sf"]->macro_checkbox_raw(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "product_name", array()), array("1" => "显示"), array("class" => "show_and_hide", "lay-skin" => "switch", "lay-text" => "显示|隐藏"));
        echo "
    </dd>
    <dt>充值号码：</dt>
    <dd>
      <span class=\"\">13888888888</span>
      ";
        // line 36
        echo $context["sf"]->macro_checkbox_raw(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "on", array()), array("1" => "显示"), array("class" => "show_and_hide", "lay-skin" => "switch", "lay-text" => "显示|隐藏"));
        echo "
    </dd>
    <dt>充值前帐号信息：</dt>
    <dd>
      <span class=\"\">姓名：刘*，余额：-0.5元</span>
      ";
        // line 41
        echo $context["sf"]->macro_checkbox_raw(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "on_before_info", array()), array("1" => "显示"), array("class" => "show_and_hide", "lay-skin" => "switch", "lay-text" => "显示|隐藏"));
        echo "
    </dd>
    <dt>充值金额：</dt>
    <dd>
      <span>50元</span>
      ";
        // line 46
        echo $context["sf"]->macro_checkbox_raw(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "recharge_amount", array()), array("1" => "显示"), array("class" => "show_and_hide", "lay-skin" => "switch", "lay-text" => "显示|隐藏"));
        echo "
    </dd>
    <dt>付款金额：</dt>
    <dd>
      <span class=\"\">51元</span>
      ";
        // line 51
        echo $context["sf"]->macro_checkbox_raw(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->source); })()), "pay_money", array()), array("1" => "显示"), array("class" => "show_and_hide", "lay-skin" => "switch", "lay-text" => "显示|隐藏"));
        echo "
    </dd>
  </dl>
  <dl class=\"hz-dl\" style=\"border-bottom: none;\">
    <dt>收银员：</dt>
    <dd>
      <span>";
        // line 57
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "realNameInfo", array(), "any", false, true), "business_name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "realNameInfo", array(), "any", false, true), "business_name", array()), "张三")) : ("张三")), "html", null, true);
        echo "</span>
      ";
        // line 58
        echo $context["sf"]->macro_checkbox_raw(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "cashier", array()), array("1" => "显示"), array("class" => "show_and_hide", "lay-skin" => "switch", "lay-text" => "显示|隐藏"));
        echo "
    </dd>
    <dt>联系电话：</dt>
    <dd>
      ";
        // line 62
        echo $context["sf"]->macro_text_raw(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->source); })()), "contact_mobile_content", array()), array("class" => "layui-input print_view_content", "placeholder" => "在这里输入联系电话"));
        echo "
      ";
        // line 63
        echo $context["sf"]->macro_checkbox_raw(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->source); })()), "contact_mobile", array()), array("1" => "显示"), array("class" => "show_and_hide", "lay-skin" => "switch", "lay-text" => "显示|隐藏"));
        echo "
    </dd>
    <dt>地址：</dt>
    <dd>
      ";
        // line 67
        echo $context["sf"]->macro_text_raw(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->source); })()), "shop_address_content", array()), array("class" => "layui-input print_view_content", "placeholder" => "在这里输入地址"));
        echo "
      ";
        // line 68
        echo $context["sf"]->macro_checkbox_raw(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "shop_address", array()), array("1" => "显示"), array("class" => "show_and_hide", "lay-skin" => "switch", "lay-text" => "显示|隐藏"));
        echo "
    </dd>

    <dt>网点名称：</dt>
    <dd>
      ";
        // line 73
        echo $context["sf"]->macro_text_raw(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->source); })()), "shop_name_content", array()), array("class" => "layui-input print_view_content", "placeholder" => "在这里输入地址"));
        echo "
      ";
        // line 74
        echo $context["sf"]->macro_checkbox_raw(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 74, $this->source); })()), "shop_name", array()), array("1" => "显示"), array("class" => "show_and_hide", "lay-skin" => "switch", "lay-text" => "显示|隐藏"));
        echo "
    </dd>
    <dt>&nbsp;</dt>
    <dd>
      ";
        // line 78
        echo $context["sf"]->macro_text_raw(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->source); })()), "foot_content", array()), array("class" => "layui-input foot_content", "placeholder" => "在这里输入页脚内容"));
        echo "
      ";
        // line 79
        echo $context["sf"]->macro_checkbox_raw(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 79, $this->source); })()), "foot", array()), array("1" => "显示"), array("class" => "show_and_hide", "lay-skin" => "switch", "lay-text" => "显示|隐藏"));
        echo "
    </dd>
  </dl>
  <div class=\"layui-input-block\">
    <button class=\"layui-btn layui-btn-sm\" lay-submit=\"\" lay-filter=\"submit\" id=\"sub\">保&nbsp;存</button>
  </div>
</div>
<div class=\"hz-img\">
  <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/img/58remin.png\"/>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Reseller/PrinterSetting/printer_THERMAL_58MM.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 79,  166 => 78,  159 => 74,  155 => 73,  147 => 68,  143 => 67,  136 => 63,  132 => 62,  125 => 58,  121 => 57,  112 => 51,  104 => 46,  96 => 41,  88 => 36,  80 => 31,  70 => 24,  66 => 23,  59 => 19,  55 => 18,  46 => 12,  42 => 11,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

<blockquote class=\"layui-elem-quote layui-quote-nm\">
  58mm打印机驱动安装指导书<a href=\"\" class=\"\">（点击下载）</a>
</blockquote>
<h2>直充商品</h2>
<div class=\"hz-single\">
  <dl class=\"hz-dl hz-title\">
    <dt>&nbsp;</dt>
    <dd>
      {{ sf.text_raw(form.title_content,  {'class': 'layui-input print_view_content',  'placeholder': '在这里输入标题'}) }}
      {{ sf.checkbox_raw(form.title, {'1': '显示'}, {'class': 'show_and_hide hz-dl layui-btn', 'lay-skin': 'switch', 'lay-text': '显示|隐藏'}) }}
    </dd>
  </dl>
  <dl class=\"hz-dl\">
    <dt>订单号：</dt>
    <dd>
      <span>{{ \"now\"|date(\"Y-m-d H:i:s\") }}76283</span>
      {{ sf.checkbox_raw(form.order_id, {'1': '显示'}, {'class': 'show_and_hide hz-dl layui-btn', 'lay-skin': 'switch', 'lay-text': '显示|隐藏'}) }}
    </dd>
    <dt>交易时间：</dt>
    <dd>
      <span>{{ \"now\"|date(\"Y-m-d H:i:s\") }}</span>
      {{ sf.checkbox_raw(form.add_time, {'1': '显示'}, {'class': 'show_and_hide hz-dl layui-btn', 'lay-skin': 'switch', 'lay-text': '显示|隐藏'}) }}
    </dd>
  </dl>
  <dl class=\"hz-dl\">
    <dt>商品名称：</dt>
    <dd>
      <span>广西联通话费10元快充</span>
      {{ sf.checkbox_raw(form.product_name, {'1': '显示'}, {'class': 'show_and_hide', 'lay-skin': 'switch', 'lay-text': '显示|隐藏'}) }}
    </dd>
    <dt>充值号码：</dt>
    <dd>
      <span class=\"\">13888888888</span>
      {{ sf.checkbox_raw(form.on, {'1': '显示'}, {'class': 'show_and_hide', 'lay-skin': 'switch', 'lay-text': '显示|隐藏'}) }}
    </dd>
    <dt>充值前帐号信息：</dt>
    <dd>
      <span class=\"\">姓名：刘*，余额：-0.5元</span>
      {{ sf.checkbox_raw(form.on_before_info, {'1': '显示'}, {'class': 'show_and_hide', 'lay-skin': 'switch', 'lay-text': '显示|隐藏'}) }}
    </dd>
    <dt>充值金额：</dt>
    <dd>
      <span>50元</span>
      {{ sf.checkbox_raw(form.recharge_amount, {'1': '显示'}, {'class': 'show_and_hide', 'lay-skin': 'switch', 'lay-text': '显示|隐藏'}) }}
    </dd>
    <dt>付款金额：</dt>
    <dd>
      <span class=\"\">51元</span>
      {{ sf.checkbox_raw(form.pay_money, {'1': '显示'}, {'class': 'show_and_hide', 'lay-skin': 'switch', 'lay-text': '显示|隐藏'}) }}
    </dd>
  </dl>
  <dl class=\"hz-dl\" style=\"border-bottom: none;\">
    <dt>收银员：</dt>
    <dd>
      <span>{{ user.realNameInfo.business_name|default(\"张三\") }}</span>
      {{ sf.checkbox_raw(form.cashier, {'1': '显示'}, {'class': 'show_and_hide', 'lay-skin': 'switch', 'lay-text': '显示|隐藏'}) }}
    </dd>
    <dt>联系电话：</dt>
    <dd>
      {{ sf.text_raw(form.contact_mobile_content,  {'class': 'layui-input print_view_content',  'placeholder': '在这里输入联系电话'}) }}
      {{ sf.checkbox_raw(form.contact_mobile, {'1': '显示'}, {'class': 'show_and_hide', 'lay-skin': 'switch', 'lay-text': '显示|隐藏'}) }}
    </dd>
    <dt>地址：</dt>
    <dd>
      {{ sf.text_raw(form.shop_address_content,  {'class': 'layui-input print_view_content',  'placeholder': '在这里输入地址'}) }}
      {{ sf.checkbox_raw(form.shop_address, {'1': '显示'}, {'class': 'show_and_hide', 'lay-skin': 'switch', 'lay-text': '显示|隐藏'}) }}
    </dd>

    <dt>网点名称：</dt>
    <dd>
      {{ sf.text_raw(form.shop_name_content,  {'class': 'layui-input print_view_content',  'placeholder': '在这里输入地址'}) }}
      {{ sf.checkbox_raw(form.shop_name, {'1': '显示'}, {'class': 'show_and_hide', 'lay-skin': 'switch', 'lay-text': '显示|隐藏'}) }}
    </dd>
    <dt>&nbsp;</dt>
    <dd>
      {{ sf.text_raw(form.foot_content,  {'class': 'layui-input foot_content',  'placeholder': '在这里输入页脚内容'}) }}
      {{ sf.checkbox_raw(form.foot, {'1': '显示'}, {'class': 'show_and_hide', 'lay-skin': 'switch', 'lay-text': '显示|隐藏'}) }}
    </dd>
  </dl>
  <div class=\"layui-input-block\">
    <button class=\"layui-btn layui-btn-sm\" lay-submit=\"\" lay-filter=\"submit\" id=\"sub\">保&nbsp;存</button>
  </div>
</div>
<div class=\"hz-img\">
  <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/img/58remin.png\"/>
</div>
", "Reseller/PrinterSetting/printer_THERMAL_58MM.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\PrinterSetting\\printer_THERMAL_58MM.twig");
    }
}
