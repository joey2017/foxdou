<?php

/* Reseller/Recharge/mobileBatch.twig */
class __TwigTemplate_638ad9e100da9d198e02aabf5c2340e9e5019cfbae6c082ee67a40f618e281ef extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Reseller/Common/layout.twig", "Reseller/Recharge/mobileBatch.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'popup' => array($this, 'block_popup'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Recharge/mobileBatch.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Recharge/mobileBatch.twig"));

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

    .m-single{width: 100%;height: auto;box-sizing: border-box;padding: 40px 20px 0 20px;}
    .pre-query{cursor: pointer; color: #01AAED; }
    .layui-form-radio{margin-top: 0px;}
    .layui-form-radio i{font-size: 18px!important;}
    .layui-input-block{padding-top: 5px;}
    .m-single .price{display: inline-block;float: none;height: 28px;line-height: 28px; color: #01AAED;font-size: 14px;}
    .info-text{padding: 20px 40px;color: #888;line-height: 30px;}
    .inp-text{font: normal small-caps normal 24px/1.8em Arial, \"微软雅黑\";color: #FF4C00;font-weight: bold;}
    .container-title{position: relative; line-height: 40px;border-bottom: 1px solid #EEEEEE;box-sizing: border-box;padding: 0 10px;font-weight: bold;color: #333333;}
    .container-title span{position: absolute;display: block;width: 20px;height: 20px;top: 2px;right: 10px;cursor: pointer;}
    .container-title span:hover .icon-break{color: #999999;}

    .m-denomination{width: calc(100% - 120px)!important; margin-right: 0!important;}
    .m-denomination input, .m-denomination a{display: inline-block; margin-bottom: 5px;}
  </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_popup($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup"));

        // line 30
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 34
        echo "  <div class=\"\" id=\"submit_order_success\" style=\"min-height: 400px; display: none;\">
    <div class=\"m-screen-item single-confirm\">
      <pre class=\"f-fnsna\"><i class=\"iconfont icon-ok\">&#x3442;</i>恭喜您，订单已提交成功！目前正在充值中</pre>
    </div>
    <div style=\"padding: 0;\">
      <fieldset class=\"layui-elem-field layui-field-title s-red\" style=\"margin: 10px 0 5px 0;\">
        <legend>充值失败的号码</legend>
      </fieldset>
      <div>
        <table id=\"failed_numbers\" style=\"margin: 0px auto 0px auto;\">
        </table>
      </div>
    </div>
    <div class=\"layui-form-item\" style=\"padding-top: 20px;text-align: center;\">
      <button class=\"layui-btn f-fnsna\" lay-submit=\"\" lay-filter=\"demo2\" onclick=\"jump_url()\">继续充值</button>
    </div>
  </div>

  <div class=\"\" id=\"confirm_content\" style=\"min-height: 400px; display: none;\">
    <div style=\"padding: 0;\">
      <fieldset class=\"layui-elem-field layui-field-title s-red\" style=\"margin: 10px 0 5px 0;\">
        <legend>不可充值的订单</legend>
      </fieldset>
      <table id=\"invalid_numbers\" style=\"margin: 0px auto 0px auto;\">
      </table>
    </div>

    <div style=\"padding: 0;\">
      <fieldset class=\"layui-elem-field layui-field-title s-blue\" style=\"margin: 10px 0 5px 0;\">
        <legend>可以充值的订单</legend>
      </fieldset>
      <div>
        <table id=\"valid_numbers\" style=\"margin: 0px auto 0px auto;\">
        </table>
      </div>
    </div>
    <div class=\"\" style=\"text-align: center;\">
      <div class=\"layui-input-inline m-input-block\">
        <form id=\"batch_order_confirm_form\" method=\"post\" class=\"layui-form\">
        <input name=\"uuid\" type=\"hidden\" id=\"uuid\" value=\"\">
        <input name=\"pay_password\" placeholder=\"请输入支付密码\"  class=\"layui-input lg\" type=\"password\" id=\"pay_password\">
        </form>
      </div>
    </div>
    <div class=\"layui-form-item\" style=\"padding-top: 20px;text-align: center;\">
      <button class=\"layui-btn f-fnsna\" id=\"btn_submit_order\">确认充值</button>
      <button class=\"layui-btn f-fnsna\" onclick=\"javascript:history.back(-1);\">重新下单</button>
    </div>
  </div>
  <div class=\"panel-item\"  style=\"min-height: 400px;\">
    <div class=\"m-tab-item\">
      <ul class=\"m-tab\">
        <li><a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_recharge_mobile_single");
        echo "\" title=\"手机话费\">单笔充值</a></li>
        <li class=\"tab-this\"><a href=\"\" title=\"点击刷新\">批量充值</a></li>
      </ul>
    </div>
    <!-- 批量充值 -->
    <div class=\"m-single\">
      <form id=\"batch_order_form\" class=\"layui-form\">
      <input type=\"hidden\" name=\"amount\" id=\"amount\" value=\"\" />
      <div class=\"layui-form-item layui-form-text\">
        <label class=\"layui-form-label\">充值号码</label>
        <div class=\"layui-input-inline\">
          <textarea placeholder=\"\" name=\"numbers\" class=\"layui-textarea f-fnsna\" style=\"max-width: 250px;width: 250px;max-height: 400px;height: 300px;\"></textarea>
        </div>
        <div class=\"layui-form-mid layui-word-aux\">
          <p>批量充值说明：</p>
          <p>1、每行一个号码，可选择是否添加面值如“132XXXXXXX,50”。</p>
          <p>2、如果输入面值，号码与面值间请用英文逗号“,”隔开。</p>
          <p>3、每次最多可给1000个号码充值。</p>
        </div>
      </div>
      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">选择面额</label>
        <div class=\"layui-input-inline m-denomination\">
          <input type=\"text\"  placeholder=\"任意充\" />
          <a value=\"10\">10元</a>
          <a value=\"20\">20元</a>
          <a value=\"30\">30元</a>
          <a value=\"50\">50元</a>
          <a value=\"100\">100元</a>
          <a value=\"200\">200元</a>
          <a value=\"300\">300元</a>
          <a value=\"500\">500元</a>
        </div>
      </div>
      <div class=\"layui-form-item\">
        <div class=\"layui-input-block\">
          <button class=\"layui-btn f-fnsna\" id=\"btn_check_numbers\" >提交订单</button>
        </div>
      </div>
      </form>
    </div>
  </div>
  <!-- 右边日历 -->
  ";
        // line 129
        $this->loadTemplate("Reseller/Common/_rightPanel.twig", "Reseller/Recharge/mobileBatch.twig", 129)->display($context);
        // line 130
        echo "
  <script type=\"text/javascript\">
      layui.use(['form', 'layer', 'table'], function(){
          var form = layui.form
              ,layer = layui.layer
              ,table = layui.table;

          var confirm_dialog;
          var result_dialog;
          \$('#btn_check_numbers').click(function (e) {
              e.preventDefault();

              var amount = \$('#amount').val();
              if(amount === '') {
                  layer.msg('请先选择充值面值');
                  return;
              }
              \$.post('";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_recharge_orders_prepare_order");
        echo "', \$('#batch_order_form').serialize(), function (data) {
                  if(!data.status) {
                      layer.msg(data.msg);
                      return;
                  }

                  \$('#uuid').val(data.uuid);
                  render_number_table(table, '#invalid_numbers', data.invalid_numbers);
                  render_number_table(table, '#valid_numbers', data.products);

                  layer.close(result_dialog);

                  confirm_dialog = layer.open({
                      id: 'confirm_dialog',
                      type: 1,
                      skin: 'layui-layer-rim', //加上边框
                      area: ['1000px', '90%'],
                      content: \$('#confirm_content'),
                      title: \"确认订单\"
                  });

              });
          }) ;


          \$('#btn_submit_order').click(function (e) {
              e.preventDefault();

              if(\$('#uuid').val() === '') {
                  layer.msg('页面状态失效，请刷新后重新下单');
                  return;
              }
              if(\$('#pay_password').val() === '') {
                  layer.msg('请先输入支付密码');
                  \$('#pay_password').focus();
                  return;
              }

              \$.post('";
        // line 185
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_recharge_orders_checkout_batch_order");
        echo "', \$('#batch_order_confirm_form').serialize(), function (data) {
                  if(!data.status) {
                      layer.msg(data.msg);
                      return;
                  }

                  layer.close(confirm_dialog);

                  result_dialog = layer.open({
                      id: 'result_dialog',
                      type: 1,
                      skin: 'layui-layer-rim', //加上边框
                      area: ['1000px', '90%'],
                      content: \$('#submit_order_success'),
                      title: \"提交订单成功\"
                  });

                  render_failed_number_table(table, '#failed_numbers', data.failed_numbers);
              });
          }) ;

      });

      function render_number_table(table, elem, items) {
          table.render({
              elem: elem
              ,cols: [[ //标题栏
                  {field: 'idx', title: '编号', width: 60, sort: true}
                  ,{field: 'number', title: '充值号码', width: 110}
                  ,{field: 'amount', title: '充值金额', width: 80}
                  ,{field: 'number_location', title: '归属地', width: 150}
                  ,{field: 'number_status', title: '号码检验', width: 80}
                  ,{field: 'recharge_status', title: '充值状态', width: 80}
                  ,{field: 'name', title: '说明'}
              ]]
              ,data: items
              ,even: true
              ,page: false //是否显示分页
              ,width: \"95%\"
              ,size: 'sm'
              ,limit: 1000
              ,align: \"center\"
          });
      }

      function render_failed_number_table(table, elem, items) {
          table.render({
              elem: elem
              ,cols: [[ //标题栏
                  {field: 'idx', title: '编号', width: 80, sort: true}
                  ,{field: 'number', title: '充值号码', width: 120}
                  ,{field: 'reason', title: '说明'}
              ]]
              ,data: items
              ,even: true
              ,page: false //是否显示分页
              ,width: \"95%\"
              ,size: 'sm'
              ,limit: 1000
              ,align: \"center\"
          });
      }

      \$('.m-denomination input').click(function(){
          \$(this).siblings('a').removeClass('denomination-this');
          \$('#amount').val(\$(this).val());
      });
      \$('.m-denomination input').blur(function(){
          \$('#amount').val(\$(this).val());
      });
      \$('.m-denomination a').click(function(){
          \$(this).addClass('denomination-this');
          \$(this).siblings().removeClass('denomination-this');
          \$('#amount').val(\$(this).attr('value'));
      });


      function jump(count) {
          \$('#time').text(count);
          window.setTimeout(function(){
              count--;
              if(count > 0) {
                  \$('#time').text(count);
                  jump(count);
              } else {
                  location.href='";
        // line 270
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_recharge_mobile_single");
        echo "';
              }
          }, 1000);
      }
  </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Reseller/Recharge/mobileBatch.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 270,  281 => 185,  240 => 147,  221 => 130,  219 => 129,  173 => 86,  119 => 34,  110 => 33,  99 => 30,  90 => 29,  58 => 5,  49 => 4,  39 => 1,  37 => 2,  15 => 1,);
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

    .m-single{width: 100%;height: auto;box-sizing: border-box;padding: 40px 20px 0 20px;}
    .pre-query{cursor: pointer; color: #01AAED; }
    .layui-form-radio{margin-top: 0px;}
    .layui-form-radio i{font-size: 18px!important;}
    .layui-input-block{padding-top: 5px;}
    .m-single .price{display: inline-block;float: none;height: 28px;line-height: 28px; color: #01AAED;font-size: 14px;}
    .info-text{padding: 20px 40px;color: #888;line-height: 30px;}
    .inp-text{font: normal small-caps normal 24px/1.8em Arial, \"微软雅黑\";color: #FF4C00;font-weight: bold;}
    .container-title{position: relative; line-height: 40px;border-bottom: 1px solid #EEEEEE;box-sizing: border-box;padding: 0 10px;font-weight: bold;color: #333333;}
    .container-title span{position: absolute;display: block;width: 20px;height: 20px;top: 2px;right: 10px;cursor: pointer;}
    .container-title span:hover .icon-break{color: #999999;}

    .m-denomination{width: calc(100% - 120px)!important; margin-right: 0!important;}
    .m-denomination input, .m-denomination a{display: inline-block; margin-bottom: 5px;}
  </style>
{% endblock %}

{% block popup %}

{% endblock %}

{% block main_content %}
  <div class=\"\" id=\"submit_order_success\" style=\"min-height: 400px; display: none;\">
    <div class=\"m-screen-item single-confirm\">
      <pre class=\"f-fnsna\"><i class=\"iconfont icon-ok\">&#x3442;</i>恭喜您，订单已提交成功！目前正在充值中</pre>
    </div>
    <div style=\"padding: 0;\">
      <fieldset class=\"layui-elem-field layui-field-title s-red\" style=\"margin: 10px 0 5px 0;\">
        <legend>充值失败的号码</legend>
      </fieldset>
      <div>
        <table id=\"failed_numbers\" style=\"margin: 0px auto 0px auto;\">
        </table>
      </div>
    </div>
    <div class=\"layui-form-item\" style=\"padding-top: 20px;text-align: center;\">
      <button class=\"layui-btn f-fnsna\" lay-submit=\"\" lay-filter=\"demo2\" onclick=\"jump_url()\">继续充值</button>
    </div>
  </div>

  <div class=\"\" id=\"confirm_content\" style=\"min-height: 400px; display: none;\">
    <div style=\"padding: 0;\">
      <fieldset class=\"layui-elem-field layui-field-title s-red\" style=\"margin: 10px 0 5px 0;\">
        <legend>不可充值的订单</legend>
      </fieldset>
      <table id=\"invalid_numbers\" style=\"margin: 0px auto 0px auto;\">
      </table>
    </div>

    <div style=\"padding: 0;\">
      <fieldset class=\"layui-elem-field layui-field-title s-blue\" style=\"margin: 10px 0 5px 0;\">
        <legend>可以充值的订单</legend>
      </fieldset>
      <div>
        <table id=\"valid_numbers\" style=\"margin: 0px auto 0px auto;\">
        </table>
      </div>
    </div>
    <div class=\"\" style=\"text-align: center;\">
      <div class=\"layui-input-inline m-input-block\">
        <form id=\"batch_order_confirm_form\" method=\"post\" class=\"layui-form\">
        <input name=\"uuid\" type=\"hidden\" id=\"uuid\" value=\"\">
        <input name=\"pay_password\" placeholder=\"请输入支付密码\"  class=\"layui-input lg\" type=\"password\" id=\"pay_password\">
        </form>
      </div>
    </div>
    <div class=\"layui-form-item\" style=\"padding-top: 20px;text-align: center;\">
      <button class=\"layui-btn f-fnsna\" id=\"btn_submit_order\">确认充值</button>
      <button class=\"layui-btn f-fnsna\" onclick=\"javascript:history.back(-1);\">重新下单</button>
    </div>
  </div>
  <div class=\"panel-item\"  style=\"min-height: 400px;\">
    <div class=\"m-tab-item\">
      <ul class=\"m-tab\">
        <li><a href=\"{{ path('reseller_recharge_mobile_single') }}\" title=\"手机话费\">单笔充值</a></li>
        <li class=\"tab-this\"><a href=\"\" title=\"点击刷新\">批量充值</a></li>
      </ul>
    </div>
    <!-- 批量充值 -->
    <div class=\"m-single\">
      <form id=\"batch_order_form\" class=\"layui-form\">
      <input type=\"hidden\" name=\"amount\" id=\"amount\" value=\"\" />
      <div class=\"layui-form-item layui-form-text\">
        <label class=\"layui-form-label\">充值号码</label>
        <div class=\"layui-input-inline\">
          <textarea placeholder=\"\" name=\"numbers\" class=\"layui-textarea f-fnsna\" style=\"max-width: 250px;width: 250px;max-height: 400px;height: 300px;\"></textarea>
        </div>
        <div class=\"layui-form-mid layui-word-aux\">
          <p>批量充值说明：</p>
          <p>1、每行一个号码，可选择是否添加面值如“132XXXXXXX,50”。</p>
          <p>2、如果输入面值，号码与面值间请用英文逗号“,”隔开。</p>
          <p>3、每次最多可给1000个号码充值。</p>
        </div>
      </div>
      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">选择面额</label>
        <div class=\"layui-input-inline m-denomination\">
          <input type=\"text\"  placeholder=\"任意充\" />
          <a value=\"10\">10元</a>
          <a value=\"20\">20元</a>
          <a value=\"30\">30元</a>
          <a value=\"50\">50元</a>
          <a value=\"100\">100元</a>
          <a value=\"200\">200元</a>
          <a value=\"300\">300元</a>
          <a value=\"500\">500元</a>
        </div>
      </div>
      <div class=\"layui-form-item\">
        <div class=\"layui-input-block\">
          <button class=\"layui-btn f-fnsna\" id=\"btn_check_numbers\" >提交订单</button>
        </div>
      </div>
      </form>
    </div>
  </div>
  <!-- 右边日历 -->
  {% include \"Reseller/Common/_rightPanel.twig\" %}

  <script type=\"text/javascript\">
      layui.use(['form', 'layer', 'table'], function(){
          var form = layui.form
              ,layer = layui.layer
              ,table = layui.table;

          var confirm_dialog;
          var result_dialog;
          \$('#btn_check_numbers').click(function (e) {
              e.preventDefault();

              var amount = \$('#amount').val();
              if(amount === '') {
                  layer.msg('请先选择充值面值');
                  return;
              }
              \$.post('{{ path('reseller_recharge_orders_prepare_order') }}', \$('#batch_order_form').serialize(), function (data) {
                  if(!data.status) {
                      layer.msg(data.msg);
                      return;
                  }

                  \$('#uuid').val(data.uuid);
                  render_number_table(table, '#invalid_numbers', data.invalid_numbers);
                  render_number_table(table, '#valid_numbers', data.products);

                  layer.close(result_dialog);

                  confirm_dialog = layer.open({
                      id: 'confirm_dialog',
                      type: 1,
                      skin: 'layui-layer-rim', //加上边框
                      area: ['1000px', '90%'],
                      content: \$('#confirm_content'),
                      title: \"确认订单\"
                  });

              });
          }) ;


          \$('#btn_submit_order').click(function (e) {
              e.preventDefault();

              if(\$('#uuid').val() === '') {
                  layer.msg('页面状态失效，请刷新后重新下单');
                  return;
              }
              if(\$('#pay_password').val() === '') {
                  layer.msg('请先输入支付密码');
                  \$('#pay_password').focus();
                  return;
              }

              \$.post('{{ path('reseller_recharge_orders_checkout_batch_order') }}', \$('#batch_order_confirm_form').serialize(), function (data) {
                  if(!data.status) {
                      layer.msg(data.msg);
                      return;
                  }

                  layer.close(confirm_dialog);

                  result_dialog = layer.open({
                      id: 'result_dialog',
                      type: 1,
                      skin: 'layui-layer-rim', //加上边框
                      area: ['1000px', '90%'],
                      content: \$('#submit_order_success'),
                      title: \"提交订单成功\"
                  });

                  render_failed_number_table(table, '#failed_numbers', data.failed_numbers);
              });
          }) ;

      });

      function render_number_table(table, elem, items) {
          table.render({
              elem: elem
              ,cols: [[ //标题栏
                  {field: 'idx', title: '编号', width: 60, sort: true}
                  ,{field: 'number', title: '充值号码', width: 110}
                  ,{field: 'amount', title: '充值金额', width: 80}
                  ,{field: 'number_location', title: '归属地', width: 150}
                  ,{field: 'number_status', title: '号码检验', width: 80}
                  ,{field: 'recharge_status', title: '充值状态', width: 80}
                  ,{field: 'name', title: '说明'}
              ]]
              ,data: items
              ,even: true
              ,page: false //是否显示分页
              ,width: \"95%\"
              ,size: 'sm'
              ,limit: 1000
              ,align: \"center\"
          });
      }

      function render_failed_number_table(table, elem, items) {
          table.render({
              elem: elem
              ,cols: [[ //标题栏
                  {field: 'idx', title: '编号', width: 80, sort: true}
                  ,{field: 'number', title: '充值号码', width: 120}
                  ,{field: 'reason', title: '说明'}
              ]]
              ,data: items
              ,even: true
              ,page: false //是否显示分页
              ,width: \"95%\"
              ,size: 'sm'
              ,limit: 1000
              ,align: \"center\"
          });
      }

      \$('.m-denomination input').click(function(){
          \$(this).siblings('a').removeClass('denomination-this');
          \$('#amount').val(\$(this).val());
      });
      \$('.m-denomination input').blur(function(){
          \$('#amount').val(\$(this).val());
      });
      \$('.m-denomination a').click(function(){
          \$(this).addClass('denomination-this');
          \$(this).siblings().removeClass('denomination-this');
          \$('#amount').val(\$(this).attr('value'));
      });


      function jump(count) {
          \$('#time').text(count);
          window.setTimeout(function(){
              count--;
              if(count > 0) {
                  \$('#time').text(count);
                  jump(count);
              } else {
                  location.href='{{ path('reseller_recharge_mobile_single') }}';
              }
          }, 1000);
      }
  </script>


{% endblock %}
", "Reseller/Recharge/mobileBatch.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Recharge\\mobileBatch.twig");
    }
}
