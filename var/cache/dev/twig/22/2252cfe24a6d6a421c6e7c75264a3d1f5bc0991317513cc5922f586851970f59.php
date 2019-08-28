<?php

/* Reseller/Recharge/checkoutOrder.twig */
class __TwigTemplate_448671c4b8f029c9463f4fde5fb23e3d334bfa2d1f6c5f9436a4b1822206c469 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Reseller/Common/layout.twig", "Reseller/Recharge/checkoutOrder.twig", 1);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Recharge/checkoutOrder.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Recharge/checkoutOrder.twig"));

        // line 2
        $context["title"] = "我要充值-手机话费充值-单笔充值";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 5
        echo "  <style type=\"text/css\">
    .m-side-nav .icon-nav{display: inline-block;width: 24px;height: 24px;font-size: 24px;}
    .m-side-nav .nav-title{padding: 0 26px;}
    .m-side-nav .nav-title span{width: 90px; margin-left: 15px;font-size: 14px;}

    .panel-item{float: left; width: calc(100% - 380px);height: auto;box-sizing: border-box; border-radius: 2px; margin-bottom: 20px; background: #FFFFFF;}

    .single-confirm{line-height: 34px;color: #666666;background: rgba(44, 169, 225, 0.09)}
    .single-confirm span{margin: 0 10px;}
    .layui-btn-primary {background-color: #FFFFFF!important;}
  </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 19
        echo "  <div class=\"panel-item\" id=\"confirm_content\" style=\"min-height: 400px;\">
    ";
        // line 20
        if ( !(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "      <div class=\"m-screen-item single-confirm\" style=\"margin-bottom: 20px;\" >
        <p>
          <h2>错误：</h2>
          <div class=\"layui-bg-red\" style=\"margin-bottom: 20px;\">
            <span>";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 25, $this->source); })()), "html", null, true);
            echo "</span>
          </div>
        </p>
        <div class=\"layui-form-item\" style=\"padding-top: 20px;text-align: center;\">
          <button class=\"layui-btn f-fnsna\" style=\"color: white\" onclick=\"location.href='";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_recharge_mobile_single");
            echo "'\">返回充值界面</button>
        </div>
      </div>
    ";
        } else {
            // line 33
            echo "      <div class=\"m-screen-item single-confirm\" style=\"margin-bottom: 20px;\">
        <p>
          <span>订单编号：</span><span>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 35, $this->source); })()), "id", array()), "html", null, true);
            echo "</span>
        </p>
        <p>
          <span>充值号码：</span><span>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 38, $this->source); })()), "phone_number", array()), "html", null, true);
            echo "</span>
        </p>
        <p>
          <span>商品名称：</span><span>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 41, $this->source); })()), "product_name", array()), "html", null, true);
            echo "</span>
        </p>
        <p>
          <span>充值金额：</span><span>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 44, $this->source); })()), "recharge_amount", array()), "html", null, true);
            echo "元</span><span class=\"s-orange\">成本：";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 44, $this->source); })()), "sell_price", array()), "html", null, true);
            echo "元</span>
        </p>
        <p>
          <span>零售价格：</span><span>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 47, $this->source); })()), "real_sell_price", array()), "html", null, true);
            echo "元</span><span class=\"s-orange\">利润：";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 47, $this->source); })()), "real_sell_price", array()) - twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 47, $this->source); })()), "sell_price", array())), 5), "html", null, true);
            echo "元</span>
        </p>
        <p>
          <span>订单备注：</span><span>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 50, $this->source); })()), "note", array()), "html", null, true);
            echo "</span>
        </p>
        ";
            // line 52
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 52, $this->source); })()), "debug", array())) {
                // line 53
                echo "          <p class=\"layui-bg-blue\">
            <span>source_id：</span><span>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 54, $this->source); })()), "source_id", array()), "html", null, true);
                echo "</span>
          </p>
        ";
            }
            // line 57
            echo "      </div>
      <div style=\"padding-left: 10px;\">
        <label class=\"layui-form-label m-screen-label\">支付密码</label>
        <div class=\"layui-input-inline m-input-block\">
          <input name=\"password\" lay-verify=\"pass\" placeholder=\"请输入密码\" autocomplete=\"off\" class=\"layui-input\" type=\"password\" id=\"password\">
        </div>
        <label id=\"msg\" style=\"color:orangered\"></label>
      </div>
      <div class=\"layui-form-item\" style=\"padding-top: 20px;text-align: center;\">
        <button class=\"layui-btn f-fnsna\" lay-submit=\"\" lay-filter=\"demo2\" onclick=\"sub(this);\">确认充值</button>
        <button class=\"layui-btn f-fnsna\" style=\"color: white\" onclick=\"location.href='";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_recharge_mobile_single");
            echo "'\">重新下单</button>
      </div>
    ";
        }
        // line 70
        echo "  </div>

  ";
        // line 72
        $this->loadTemplate("Reseller/Common/_rightPanel.twig", "Reseller/Recharge/checkoutOrder.twig", 72)->display($context);
        // line 73
        echo "
  <script type=\"text/javascript\">
      function sub(dom) {
          \$(dom).attr('disabled','disabled');

          var password=\$('#password').val().trim();
          if(!password){
              layer.msg('请输入正确的密码');
              \$('#msg').text('请输入正确的密码');
              \$(dom).removeAttr('disabled');
              return false;
          }
          var load=layer.load();
          \$.ajax('";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_recharge_orders_checkout");
        echo "',{
              type:'post',
              data:{_token:'";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("reseller_recharge_orders_checkout"), "html", null, true);
        echo "', order_id:'";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", array()), 0)) : (0)), "html", null, true);
        echo "', password:password},
              success:function (data) {
                  if(!data.status){
                      \$('#msg').text(data.msg);
                      \$(dom).removeAttr('disabled');
                      layer.close(load);
                      return false;
                  }
                  success();
                  layer.close(load);
              },
              error:function () {
                  \$(dom).removeAttr('disabled');
                  layer.close(load);
              }
          });
          return false;
      }

      function success() {
          var style='<style type=\"text/css\">.single-confirm{padding-top:20px;color: #666666;text-align: center;}.single-confirm pre{padding-top: 10px;padding-bottom:5px;font-size: 16px!important;}.single-confirm i{position: relative; top: 5px;}.single-confirm span{margin: 0 5px;}</style>';
          var html=style+'<div class=\"m-screen-item single-confirm\">'+
              '<pre class=\"f-fnsna\"><i class=\"iconfont icon-ok\">&#x3442;</i>恭喜您，订单已提交成功！目前正在充值中，稍后将在<span class=\"s-orange\" id=\"time\"></span>秒后自动跳转..</pre></div>'+
              '<div class=\"layui-form-item\" style=\"padding-top: 20px;text-align: center;\">'+
              '<button class=\"layui-btn f-fnsna\" lay-submit=\"\" lay-filter=\"demo2\" onclick=\"jump_url()\">继续充值</button> </div>';
          //<!--        <button class=\"layui-btn layui-btn-primary f-fnsna\">打印发票</button>-->
          \$('#confirm_content').html(html);
          jump(10);
      }

      function jump(count) {
          \$('#time').text(count);
          window.setTimeout(function(){
              count--;
              if(count > 0) {
                  \$('#time').text(count);
                  jump(count);
              } else {
                  jump_url();
              }
          }, 1000);
      }

      function jump_url(){
          location.href='";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_recharge_mobile_single");
        echo "';
      }
  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Reseller/Recharge/checkoutOrder.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 132,  210 => 88,  205 => 86,  190 => 73,  188 => 72,  184 => 70,  178 => 67,  166 => 57,  160 => 54,  157 => 53,  155 => 52,  150 => 50,  142 => 47,  134 => 44,  128 => 41,  122 => 38,  116 => 35,  112 => 33,  105 => 29,  98 => 25,  92 => 21,  90 => 20,  87 => 19,  78 => 18,  57 => 5,  48 => 4,  38 => 1,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Reseller/Common/layout.twig' %}
{% set title = '我要充值-手机话费充值-单笔充值' %}

{% block css %}
  <style type=\"text/css\">
    .m-side-nav .icon-nav{display: inline-block;width: 24px;height: 24px;font-size: 24px;}
    .m-side-nav .nav-title{padding: 0 26px;}
    .m-side-nav .nav-title span{width: 90px; margin-left: 15px;font-size: 14px;}

    .panel-item{float: left; width: calc(100% - 380px);height: auto;box-sizing: border-box; border-radius: 2px; margin-bottom: 20px; background: #FFFFFF;}

    .single-confirm{line-height: 34px;color: #666666;background: rgba(44, 169, 225, 0.09)}
    .single-confirm span{margin: 0 10px;}
    .layui-btn-primary {background-color: #FFFFFF!important;}
  </style>
{% endblock %}

{% block main_content %}
  <div class=\"panel-item\" id=\"confirm_content\" style=\"min-height: 400px;\">
    {% if not order %}
      <div class=\"m-screen-item single-confirm\" style=\"margin-bottom: 20px;\" >
        <p>
          <h2>错误：</h2>
          <div class=\"layui-bg-red\" style=\"margin-bottom: 20px;\">
            <span>{{ error }}</span>
          </div>
        </p>
        <div class=\"layui-form-item\" style=\"padding-top: 20px;text-align: center;\">
          <button class=\"layui-btn f-fnsna\" style=\"color: white\" onclick=\"location.href='{{ path('reseller_recharge_mobile_single') }}'\">返回充值界面</button>
        </div>
      </div>
    {% else %}
      <div class=\"m-screen-item single-confirm\" style=\"margin-bottom: 20px;\">
        <p>
          <span>订单编号：</span><span>{{ order.id }}</span>
        </p>
        <p>
          <span>充值号码：</span><span>{{ order.phone_number }}</span>
        </p>
        <p>
          <span>商品名称：</span><span>{{ order.product_name }}</span>
        </p>
        <p>
          <span>充值金额：</span><span>{{ order.recharge_amount }}元</span><span class=\"s-orange\">成本：{{ order.sell_price }}元</span>
        </p>
        <p>
          <span>零售价格：</span><span>{{ order.real_sell_price }}元</span><span class=\"s-orange\">利润：{{ (order.real_sell_price - order.sell_price)|number_format(5) }}元</span>
        </p>
        <p>
          <span>订单备注：</span><span>{{ order.note }}</span>
        </p>
        {% if app.debug %}
          <p class=\"layui-bg-blue\">
            <span>source_id：</span><span>{{ order.source_id }}</span>
          </p>
        {% endif %}
      </div>
      <div style=\"padding-left: 10px;\">
        <label class=\"layui-form-label m-screen-label\">支付密码</label>
        <div class=\"layui-input-inline m-input-block\">
          <input name=\"password\" lay-verify=\"pass\" placeholder=\"请输入密码\" autocomplete=\"off\" class=\"layui-input\" type=\"password\" id=\"password\">
        </div>
        <label id=\"msg\" style=\"color:orangered\"></label>
      </div>
      <div class=\"layui-form-item\" style=\"padding-top: 20px;text-align: center;\">
        <button class=\"layui-btn f-fnsna\" lay-submit=\"\" lay-filter=\"demo2\" onclick=\"sub(this);\">确认充值</button>
        <button class=\"layui-btn f-fnsna\" style=\"color: white\" onclick=\"location.href='{{ path('reseller_recharge_mobile_single') }}'\">重新下单</button>
      </div>
    {% endif %}
  </div>

  {% include \"Reseller/Common/_rightPanel.twig\" %}

  <script type=\"text/javascript\">
      function sub(dom) {
          \$(dom).attr('disabled','disabled');

          var password=\$('#password').val().trim();
          if(!password){
              layer.msg('请输入正确的密码');
              \$('#msg').text('请输入正确的密码');
              \$(dom).removeAttr('disabled');
              return false;
          }
          var load=layer.load();
          \$.ajax('{{ path('reseller_recharge_orders_checkout') }}',{
              type:'post',
              data:{_token:'{{ csrf_token('reseller_recharge_orders_checkout') }}', order_id:'{{ order.id|default(0) }}', password:password},
              success:function (data) {
                  if(!data.status){
                      \$('#msg').text(data.msg);
                      \$(dom).removeAttr('disabled');
                      layer.close(load);
                      return false;
                  }
                  success();
                  layer.close(load);
              },
              error:function () {
                  \$(dom).removeAttr('disabled');
                  layer.close(load);
              }
          });
          return false;
      }

      function success() {
          var style='<style type=\"text/css\">.single-confirm{padding-top:20px;color: #666666;text-align: center;}.single-confirm pre{padding-top: 10px;padding-bottom:5px;font-size: 16px!important;}.single-confirm i{position: relative; top: 5px;}.single-confirm span{margin: 0 5px;}</style>';
          var html=style+'<div class=\"m-screen-item single-confirm\">'+
              '<pre class=\"f-fnsna\"><i class=\"iconfont icon-ok\">&#x3442;</i>恭喜您，订单已提交成功！目前正在充值中，稍后将在<span class=\"s-orange\" id=\"time\"></span>秒后自动跳转..</pre></div>'+
              '<div class=\"layui-form-item\" style=\"padding-top: 20px;text-align: center;\">'+
              '<button class=\"layui-btn f-fnsna\" lay-submit=\"\" lay-filter=\"demo2\" onclick=\"jump_url()\">继续充值</button> </div>';
          //<!--        <button class=\"layui-btn layui-btn-primary f-fnsna\">打印发票</button>-->
          \$('#confirm_content').html(html);
          jump(10);
      }

      function jump(count) {
          \$('#time').text(count);
          window.setTimeout(function(){
              count--;
              if(count > 0) {
                  \$('#time').text(count);
                  jump(count);
              } else {
                  jump_url();
              }
          }, 1000);
      }

      function jump_url(){
          location.href='{{ path('reseller_recharge_mobile_single') }}';
      }
  </script>
{% endblock %}
", "Reseller/Recharge/checkoutOrder.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Recharge\\checkoutOrder.twig");
    }
}
