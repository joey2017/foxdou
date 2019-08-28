<?php

/* Reseller/Dashboard/printer_GENERIC.twig */
class __TwigTemplate_e308ad4957f0e0e861aacf8e41e9796b38c9690d6064d3c19ae88156d1d69def extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Dashboard/printer_GENERIC.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Dashboard/printer_GENERIC.twig"));

        // line 1
        $context["sf"] = $this->loadTemplate("Common/simple_form_helpers.html.twig", "Reseller/Dashboard/printer_GENERIC.twig", 1);
        // line 2
        echo "
  <h2>直充商品</h2>
  <div class=\"hz-single hz-single-mn\">
    <div class=\"hz-table-block\">
      <dl class=\"hz-dl hz-title\">
        <dt>&nbsp;</dt>
        <dd>
          ";
        // line 9
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->source); })()), "title_content", array()), array("class" => "layui-input print_view_content", "placeholder" => "在这里输入标题"));
        echo "
          ";
        // line 10
        echo $context["sf"]->macro_checkbox(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), "title", array()), "1", null, array("class" => "show_and_hide hz-dl layui-btn", "lay-skin" => "switch", "lay-text" => "显示|隐藏"));
        echo "
        </dd>
      </dl>
      <ul class=\"hz-ul\">
        <li>订单号：S541515464615
          ";
        // line 15
        echo $context["sf"]->macro_checkbox(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->source); })()), "order_id", array()), "1", null, array("class" => "show_and_hide hz-dl layui-btn", "lay-skin" => "switch", "lay-text" => "显示|隐藏"));
        echo "
        </li>
        <li>交易日期：2018-03-22
          ";
        // line 18
        echo $context["sf"]->macro_checkbox(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "add_time", array()), "1", null, array("class" => "show_and_hide hz-dl layui-btn", "lay-skin" => "switch", "lay-text" => "显示|隐藏"));
        echo "
        </li>
      </ul>
      <table class=\"hz-table\">
        <colgroup>
          <col width=\"15%\">
          <col width=\"35%\">
          <col width=\"15%\">
          <col width=\"35%\">
        </colgroup>
        <tbody>
        <tr>
          <td>
            <b>充值号码</b>
          </td>
          <td>
            <span>13815153434</span>
          </td>
          <td>
            <b>业务类型</b>
          </td>
          <td>
            <div class=\"layui-input-inline\">
              ";
        // line 41
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "product_type_content", array()), array("class" => "layui-input print_view_content", "placeholder" => "在这里输入说明信息"));
        echo "
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <b>商品名称</b>
          </td>
          <td>
            <span>江苏移动话费50元快充</span>

          </td>
          <td>
            <b>付款方式</b>
          </td>
          <td>
            <span>现金支付</span>
          </td>
        </tr>
        <tr>
          <td colspan=\"2\">
            <dl class=\"hz-dl hz-dl-mn\">
              <dt>充值号码：</dt>
              <dd>
                <span>1381513434</span>
                ";
        // line 66
        echo $context["sf"]->macro_checkbox(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->source); })()), "on", array()), "1", null, array("class" => "show_and_hide", "lay-skin" => "switch", "lay-text" => "显示|隐藏"));
        echo "
              </dd>
              <dt>充值前帐号信息：</dt>
              <dd>
                <span>11元</span>
                ";
        // line 71
        echo $context["sf"]->macro_checkbox(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 71, $this->source); })()), "on_before_info", array()), "1", null, array("class" => "show_and_hide", "lay-skin" => "switch", "lay-text" => "显示|隐藏"));
        echo "
              </dd>
              <dt>充值金额：</dt>
              <dd>
                <span>50元</span>
                ";
        // line 76
        echo $context["sf"]->macro_checkbox(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->source); })()), "pay_money", array()), "1", null, array("class" => "show_and_hide", "lay-skin" => "switch", "lay-text" => "显示|隐藏"));
        echo "
              </dd>
              <dt>充值时间：</dt>
              <dd>
                <span>2018-03-21 16:40</span>
                <!--                                        <button type=\"button\" class=\"layui-btn layui-btn-primary layui-btn-sm show_and_hide\">隐藏</button>-->
              </dd>
            </dl>
          </td>
          <td colspan=\"2\">
            ";
        // line 86
        echo $context["sf"]->macro_textarea(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 86, $this->source); })()), "print_info_content", array()), array("class" => "layui-textarea print_view_content", "placeholder" => "在这里输入业务类型"));
        echo "
          </td>
        </tr>
        <tr>
          <td>
            <b>大写金额</b>
          </td>
          <td>
            <span>伍拾圆整</span>
          </td>
          <td>
            <b>小写金额</b>

          </td>
          <td>
            <span>50元</span>
            ";
        // line 102
        echo $context["sf"]->macro_checkbox(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->source); })()), "pay_money", array()), "1", null, array("class" => "show_and_hide", "lay-skin" => "switch", "lay-text" => "显示|隐藏"));
        echo "

          </td>
        </tr>
        </tbody>
      </table>
      <ul class=\"hz-ul\">
        <li>
          <dl class=\"hz-dl hz-dl-mn\">
            <dt>网点名称：</dt>
            <dd>
              ";
        // line 113
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 113, $this->source); })()), "shop_name_content", array()), array("class" => "layui-input print_view_content", "placeholder" => "在这里输入地址"));
        echo "
              ";
        // line 114
        echo $context["sf"]->macro_checkbox(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->source); })()), "shop_name", array()), "1", null, array("class" => "show_and_hide", "lay-skin" => "switch", "lay-text" => "显示|隐藏"));
        echo "
            </dd>
          </dl>
        </li>
        <li>
          <dl class=\"hz-dl hz-dl-mn\">
            <dt>收银员：</dt>
            <dd>
              <span>";
        // line 122
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "realNameInfo", array(), "any", false, true), "business_name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "realNameInfo", array(), "any", false, true), "business_name", array()), "张三")) : ("张三")), "html", null, true);
        echo "</span>
              ";
        // line 123
        echo $context["sf"]->macro_checkbox(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 123, $this->source); })()), "cashier", array()), "1", null, array("class" => "show_and_hide", "lay-skin" => "switch", "lay-text" => "显示|隐藏"));
        echo "
            </dd>
          </dl>
        </li>
      </ul>
    </div>
    <div class=\"layui-input-block\">
      <button class=\"layui-btn layui-btn-sm\" lay-submit=\"\" lay-filter=\"submit\" id=\"sub\">保&nbsp;存</button>
    </div>
  </div>

<div hidden>
  ";
        // line 135
        echo $context["sf"]->macro_checkbox(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->source); })()), "product_name", array()), "1", null, array("class" => "show_and_hide", "lay-skin" => "switch", "lay-text" => "显示|隐藏"));
        echo "

  ";
        // line 137
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 137, $this->source); })()), "contact_mobile_content", array()), array("class" => "layui-input print_view_content", "placeholder" => "在这里输入联系电话"));
        echo "
  ";
        // line 138
        echo $context["sf"]->macro_checkbox(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 138, $this->source); })()), "contact_mobile", array()), "1", null, array("class" => "show_and_hide", "lay-skin" => "switch", "lay-text" => "显示|隐藏"));
        echo "

  ";
        // line 140
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 140, $this->source); })()), "shop_address_content", array()), array("class" => "layui-input print_view_content", "placeholder" => "在这里输入地址"));
        echo "
  ";
        // line 141
        echo $context["sf"]->macro_checkbox(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 141, $this->source); })()), "shop_address", array()), "1", null, array("class" => "show_and_hide", "lay-skin" => "switch", "lay-text" => "显示|隐藏"));
        echo "

  ";
        // line 143
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->source); })()), "foot_content", array()), array("class" => "layui-input foot_content", "placeholder" => "在这里输入页脚内容"));
        echo "
  ";
        // line 144
        echo $context["sf"]->macro_checkbox(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 144, $this->source); })()), "foot", array()), "1", null, array("class" => "show_and_hide", "lay-skin" => "switch", "lay-text" => "显示|隐藏"));
        echo "
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Reseller/Dashboard/printer_GENERIC.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 144,  231 => 143,  226 => 141,  222 => 140,  217 => 138,  213 => 137,  208 => 135,  193 => 123,  189 => 122,  178 => 114,  174 => 113,  160 => 102,  141 => 86,  128 => 76,  120 => 71,  112 => 66,  84 => 41,  58 => 18,  52 => 15,  44 => 10,  40 => 9,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import ('Common/simple_form_helpers.html.twig') as sf %}

  <h2>直充商品</h2>
  <div class=\"hz-single hz-single-mn\">
    <div class=\"hz-table-block\">
      <dl class=\"hz-dl hz-title\">
        <dt>&nbsp;</dt>
        <dd>
          {{ sf.text(form.title_content,  {'class': 'layui-input print_view_content',  'placeholder': '在这里输入标题'}) }}
          {{ sf.checkbox(form.title, \"1\", null, {'class': 'show_and_hide hz-dl layui-btn', 'lay-skin': 'switch', 'lay-text': '显示|隐藏'}) }}
        </dd>
      </dl>
      <ul class=\"hz-ul\">
        <li>订单号：S541515464615
          {{ sf.checkbox(form.order_id, \"1\", null, {'class': 'show_and_hide hz-dl layui-btn', 'lay-skin': 'switch', 'lay-text': '显示|隐藏'}) }}
        </li>
        <li>交易日期：2018-03-22
          {{ sf.checkbox(form.add_time, \"1\", null, {'class': 'show_and_hide hz-dl layui-btn', 'lay-skin': 'switch', 'lay-text': '显示|隐藏'}) }}
        </li>
      </ul>
      <table class=\"hz-table\">
        <colgroup>
          <col width=\"15%\">
          <col width=\"35%\">
          <col width=\"15%\">
          <col width=\"35%\">
        </colgroup>
        <tbody>
        <tr>
          <td>
            <b>充值号码</b>
          </td>
          <td>
            <span>13815153434</span>
          </td>
          <td>
            <b>业务类型</b>
          </td>
          <td>
            <div class=\"layui-input-inline\">
              {{ sf.text(form.product_type_content,  {'class': 'layui-input print_view_content',  'placeholder': '在这里输入说明信息'}) }}
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <b>商品名称</b>
          </td>
          <td>
            <span>江苏移动话费50元快充</span>

          </td>
          <td>
            <b>付款方式</b>
          </td>
          <td>
            <span>现金支付</span>
          </td>
        </tr>
        <tr>
          <td colspan=\"2\">
            <dl class=\"hz-dl hz-dl-mn\">
              <dt>充值号码：</dt>
              <dd>
                <span>1381513434</span>
                {{ sf.checkbox(form.on, \"1\", null, {'class': 'show_and_hide', 'lay-skin': 'switch', 'lay-text': '显示|隐藏'}) }}
              </dd>
              <dt>充值前帐号信息：</dt>
              <dd>
                <span>11元</span>
                {{ sf.checkbox(form.on_before_info, \"1\", null, {'class': 'show_and_hide', 'lay-skin': 'switch', 'lay-text': '显示|隐藏'}) }}
              </dd>
              <dt>充值金额：</dt>
              <dd>
                <span>50元</span>
                {{ sf.checkbox(form.pay_money, \"1\", null, {'class': 'show_and_hide', 'lay-skin': 'switch', 'lay-text': '显示|隐藏'}) }}
              </dd>
              <dt>充值时间：</dt>
              <dd>
                <span>2018-03-21 16:40</span>
                <!--                                        <button type=\"button\" class=\"layui-btn layui-btn-primary layui-btn-sm show_and_hide\">隐藏</button>-->
              </dd>
            </dl>
          </td>
          <td colspan=\"2\">
            {{ sf.textarea(form.print_info_content,  {'class': 'layui-textarea print_view_content',  'placeholder': '在这里输入业务类型'}) }}
          </td>
        </tr>
        <tr>
          <td>
            <b>大写金额</b>
          </td>
          <td>
            <span>伍拾圆整</span>
          </td>
          <td>
            <b>小写金额</b>

          </td>
          <td>
            <span>50元</span>
            {{ sf.checkbox(form.pay_money, \"1\", null, {'class': 'show_and_hide', 'lay-skin': 'switch', 'lay-text': '显示|隐藏'}) }}

          </td>
        </tr>
        </tbody>
      </table>
      <ul class=\"hz-ul\">
        <li>
          <dl class=\"hz-dl hz-dl-mn\">
            <dt>网点名称：</dt>
            <dd>
              {{ sf.text(form.shop_name_content,  {'class': 'layui-input print_view_content',  'placeholder': '在这里输入地址'}) }}
              {{ sf.checkbox(form.shop_name, \"1\", null, {'class': 'show_and_hide', 'lay-skin': 'switch', 'lay-text': '显示|隐藏'}) }}
            </dd>
          </dl>
        </li>
        <li>
          <dl class=\"hz-dl hz-dl-mn\">
            <dt>收银员：</dt>
            <dd>
              <span>{{ user.realNameInfo.business_name|default(\"张三\") }}</span>
              {{ sf.checkbox(form.cashier, \"1\", null, {'class': 'show_and_hide', 'lay-skin': 'switch', 'lay-text': '显示|隐藏'}) }}
            </dd>
          </dl>
        </li>
      </ul>
    </div>
    <div class=\"layui-input-block\">
      <button class=\"layui-btn layui-btn-sm\" lay-submit=\"\" lay-filter=\"submit\" id=\"sub\">保&nbsp;存</button>
    </div>
  </div>

<div hidden>
  {{ sf.checkbox(form.product_name, \"1\", null, {'class': 'show_and_hide', 'lay-skin': 'switch', 'lay-text': '显示|隐藏'}) }}

  {{ sf.text(form.contact_mobile_content,  {'class': 'layui-input print_view_content',  'placeholder': '在这里输入联系电话'}) }}
  {{ sf.checkbox(form.contact_mobile, \"1\", null, {'class': 'show_and_hide', 'lay-skin': 'switch', 'lay-text': '显示|隐藏'}) }}

  {{ sf.text(form.shop_address_content,  {'class': 'layui-input print_view_content',  'placeholder': '在这里输入地址'}) }}
  {{ sf.checkbox(form.shop_address, \"1\", null, {'class': 'show_and_hide', 'lay-skin': 'switch', 'lay-text': '显示|隐藏'}) }}

  {{ sf.text(form.foot_content,  {'class': 'layui-input foot_content',  'placeholder': '在这里输入页脚内容'}) }}
  {{ sf.checkbox(form.foot, \"1\", null, {'class': 'show_and_hide', 'lay-skin': 'switch', 'lay-text': '显示|隐藏'}) }}
</div>
", "Reseller/Dashboard/printer_GENERIC.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Dashboard\\printer_GENERIC.twig");
    }
}
