<?php

/* Reseller/Finance/transfer.twig */
class __TwigTemplate_6732f33576651830d4b00e32bfc9d60dbd2d933f36ab79983714efffc834779f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Reseller/Common/layout.twig", "Reseller/Finance/transfer.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Finance/transfer.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Finance/transfer.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("Common/simple_form_helpers.html.twig", "Reseller/Finance/transfer.twig", 2);
        // line 4
        $context["title"] = "我的财务-我要转账";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 10
        echo "  <style type=\"text/css\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/transfer.css\"></style>
  <style type=\"text/css\">
    .panel-item {
      float: left;
      width: calc(100% - 380px);
      height: auto;
      box-sizing: border-box;
      border-radius: 2px;
      margin-bottom: 20px;
      background: #FFFFFF;
    }

    .m-information {
      width: auto;
      height: 55px;
      box-sizing: border-box;
      padding: 0 20px;
      border-radius: 2px;
      border-bottom: 1px solid #E0E0E0;
      line-height: 55px;
      background: #FFFFFF;
      color: #333333;
    }

    .m-table table th {
      background: #F0F0F0;
      font-weight: normal;
      line-height: 30px;
      font-size: 14px;
      color: #333333;
    }

    .m-table table tr {
      padding: 5px 10px;
      line-height: 20px;
    }

    .m-table table td {
      padding: 5px 10px;
      line-height: 20px;
    }

    .financial-item .contact-icon {
      width: 30px;
      height: 20px;
      line-height: 24px;
      font-size: 24px;
      color: #2CA9E1;
      cursor: pointer;
    }
  </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 64
        echo "  <div class=\"panel-item\" style=\"min-height: 400px;\">
    <div class=\"m-information\">
      <span>账户余额：<span class=\"f-fs-16 s-orange\">";
        // line 66
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array(), "any", false, true), "resellerAccount", array(), "any", false, true), "balance", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array(), "any", false, true), "resellerAccount", array(), "any", false, true), "balance", array()), 0)) : (0)), 2), "html", null, true);
        echo "</span>元</span>
      <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_finance_trade_logs", array("trade_type" => 502));
        echo "\" class=\"s-blue\" style=\"margin: 0 30px;\">查看转账记录</a>
    </div>
    <div class=\"financial-item\">
      <div class=\"layui-form\">
        <div style=\"padding: 50px 50px 20px 50px;border-bottom: 1px solid #E0E0E0;\">
          <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">收款帐号</label>
            <div class=\"layui-input-inline\">
              ";
        // line 75
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->source); })()), "recipient_id", array()), array("class" => "layui-input", "placeholder" => "请输入对方的狐豆帐号", "autocomplete" => "off"));
        echo "
            </div>
            <div class=\"layui-form-mid\">
              <span id=\"indicator_recipient_id\" class=\"indicator\"></span>
            </div>
          </div>
          <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">账户姓名</label>
            <div class=\"layui-input-inline\">
              ";
        // line 84
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 84, $this->source); })()), "recipient_name", array()), array("class" => "layui-input", "placeholder" => "请输入对方的账户姓名", "autocomplete" => "off"));
        echo "
            </div>
            <div class=\"layui-form-mid\">
              <!--                            <i class=\"iconfont contact-icon site-demo-layer\" data-type=\"warning\" >&#xe687;</i>-->
              <span id=\"indicator_recipient_name\" class=\"indicator\"></span>
            </div>
          </div>
          <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">转账金额</label>
            <div class=\"layui-input-inline\">
              ";
        // line 94
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->source); })()), "amount", array()), array("class" => "layui-input", "placeholder" => "请输入转账金额", "autocomplete" => "off"));
        echo "
            </div>
            <div class=\"layui-form-mid\">
              <!--                            <i class=\"iconfont contact-icon site-demo-layer\" data-type=\"warning\" >&#xe687;</i>-->
              <span id=\"indicator_amount\" class=\"indicator\"></span>
            </div>
          </div>
          <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">确认金额</label>
            <div class=\"layui-input-inline\">
              ";
        // line 104
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 104, $this->source); })()), "amount_confirm", array()), array("class" => "layui-input", "placeholder" => "请确认转账金额", "autocomplete" => "off"));
        echo "
            </div>
            <div class=\"layui-form-mid\">
              <!--                            <i class=\"iconfont contact-icon site-demo-layer\" data-type=\"warning\" >&#xe687;</i>-->
              <span id=\"indicator_amount_confirm\" class=\"indicator\"></span>
            </div>
          </div>
          <div class=\"layui-form-item layui-form-text\">
            <label class=\"layui-form-label\">备注</label>
            <div class=\"layui-input-block\">
              ";
        // line 114
        echo $context["sf"]->macro_textarea(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->source); })()), "note", array()), array("class" => "layui-textarea", "placeholder" => "可根据您的需求，自定义输入内容（可空）"));
        echo "
            </div>
          </div>
        </div>
        <!--                <div style=\"padding: 20px 50px 0 50px;\">-->
        <!--                    <div class=\"layui-form-item\">-->
        <!--                        <label class=\"layui-form-label\">支付密码</label>-->
        <!--                        <div class=\"layui-input-inline\">-->
        <!--                            <input type=\"password\" name=\"password\" required lay-verify=\"required\" placeholder=\"请输入密码\" autocomplete=\"off\" class=\"layui-input\">-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <div class=\"layui-form-item\" style=\"text-align: left; padding: 20px 0 10px 50px;\">
          <div class=\"layui-input-block\">
            <button class=\"layui-btn f-fnsna\" lay-submit=\"\" lay-filter=\"demo2\" onclick=\"sub();\">确认转账</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  ";
        // line 134
        $this->loadTemplate("Reseller/Common/_rightPanel.twig", "Reseller/Finance/transfer.twig", 134)->display($context);
        // line 135
        echo "
  <!-- 转账给好友店铺 -->
  <div class=\"demo-warning\" style=\"display: none;\">
    <form class=\"layui-form\" action=\"\">
      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">店铺名称</label>
        <div class=\"layui-input-inline\">
          <input name=\"title\" lay-verify=\"title\" autocomplete=\"off\" placeholder=\"请输入好友店铺名称关键字\" class=\"layui-input f-fnsna\" type=\"text\">
        </div>
        <div class=\"layui-input-inline\">
          <button class=\"layui-btn f-fnsna\">确认转账</button>
        </div>
      </div>
    </form>
    <div class=\"m-table\" style=\"margin-top: 20px;\">
      <table>
        <thead>
        <tr>
          <th>狐豆帐号</th>
          <th>店铺名称</th>
          <th>联系人</th>
          <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>s12345613</td>
          <td>广西移动</td>
          <td>某某</td>
          <td>
            <a href=\"#\">选择</a>
          </td>
        </tr>
        <tr>
          <td>s12345613</td>
          <td>广西移动</td>
          <td>某某</td>
          <td>
            <a href=\"#\">选择</a>
          </td>
        </tr>
        <tr>
          <td>s12345613</td>
          <td>广西移动</td>
          <td>某某</td>
          <td>
            <a href=\"#\">选择</a>
          </td>
        </tr>
        </tbody>
      </table>
    </div>

  </div>

  <div class=\"layer-content \" id=\"pay_password_dialog\">
    <div class=\"layui-input-block\">
      <input type=\"password\" value=\"\" name=\"\" placeholder=\"请输入支付密码\" id=\"pay_password\" class=\"layui-input\"/>
      <div class=\"layui-form-mid\">
        <span id=\"indicator_pay_password\" class=\"indicator\"></span>
      </div>
    </div>
    <div class=\"layer-btn\">
      <button type=\"button\" id=\"btn_transfer_confirm\" class=\"layui-btn layui-btn-normal layui-btn-sm\">确定</button>
      <button type=\"button\" id=\"btn_cancel\" class=\"layui-btn layui-btn-primary layui-btn-sm\">取消</button>
    </div>
  </div>

  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.md5.js\"></script>
  <!-- /转账给好友店铺 -->
  <script type=\"text/javascript\">
      var inspect_recipient = false;
      layui.use('form', function () {
          var form = layui.form
              , layer = layui.layer
      });

      \$('#recipient_id').change(function () {
          var recipient_id = \$(this).val()
          if (recipient_id === \"\") {
              return;
          }

          \$('#indicator_recipient_id').html('正在查询该用户信息...');
          \$.ajax('";
        // line 219
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_finance_check_user");
        echo "', {
              data: {username: recipient_id}
              , success: function (data) {
                  if (data.code === \"SUCCEED\") {
                      inspect_recipient = true;
                      \$('#indicator_recipient_id').html('<span style=\"color: green;\">' + data.msg + '</span>');
//                      \$('#recipient_name').val(data.recipient_name);
                      \$('#recipient_name').focus();
                  } else {
                      inspect_recipient = false;
                      \$('#indicator_recipient_id').html('<span style=\"color: red;\">' + data.msg + '</span>');
//                      \$('#recipient_name').val(\"\");
                  }
              }
              , error: function () {
                  inspect_recipient = false;
                  \$('#indicator_recipient_id').html('<span style=\"color: red;\">系统繁忙，请稍后再试</span>');
//                  \$('#recipient_name').val(\"\");
              }
          })
      });

      var transfer_box;
      function sub() {
          \$('.indicator').html(\"\");

          if (!check_data()) {
              return false;
          }
          \$('#pay_password').val('');
          transfer_box = layer.open({
              type: 1
              , title: ['请输入支付密码，转账给好友店铺', 'font-size:14px;font-weight:bold;'] //不显示标题栏
              , closeBtn: 1
              , area: ['400px']
              , shade: 0.6
              , moveType: 1 //拖拽模式，0或者1
              , content: \$('#pay_password_dialog')
          });
      }
      \$('#btn_transfer_confirm').click(function () {
          transfer_do();
      });
      \$('#btn_cancel').click(function () {
          layer.close(transfer_box);
      });

      function transfer_do() {
          var data = check_data();
          if (!data) {
              return false;
          }
          var pay_password = \$('#pay_password').val().trim();
          if (!pay_password) {
              layer.msg('请先输入转账密码');
              return false;
          }
          data.pay_password = pay_password;

          \$('.indicator').html(\"\");
          \$('#pay_password').val('');
          \$(this).attr('disabled', 'true');
          \$.ajax('";
        // line 281
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_finance_transfer_confirm");
        echo "', {
              type: 'post'
              , data: data
              , success: function (data) {
                  \$('#btn_transfer_confirm').removeAttr('disabled');

                  if (data.code === \"SUCCEED\") {
                      layer.close(transfer_box);
                      clear_form_val();
                      layer.open({
                          title: '温馨提醒'
                          , content: '您的转账已经成功，您可以'
                          , btn: ['查看转账记录', '继续转账']
                          , yes: function () {
                              location.href = '";
        // line 295
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_finance_trade_logs", array("trade_type" => 502));
        echo "';
                          }
                      });
                      return;
                  }

                  if(data.errors) {
                      \$.each(data.errors, function (field, errorMsg) {
                          \$(\"#indicator_\" + field).html('<span style=\"color: red;\">' + errorMsg + '</span>');
                      });

                      // 仅仅是转账密码错误的话，不关闭转账密码对话框，方便用户重新输入
                      if(data.errors.pay_password && Object.keys(data.errors).length === 1) {
                          return;
                      }
                  }

                  layer.close(transfer_box);
                  layer.msg(data.msg);

                  return false;
              }
              , error: function () {
                  layer.close(transfer_box);
                  layer.msg('系统繁忙，请稍候再试');
                  \$('#btn_transfer_confirm').removeAttr('disabled');

              }
          });
      }

      function check_data() {
          if (!inspect_recipient) {
              layer.msg('请填写正确的收款帐号');
              return false;
          }
          var recipient_id = \$('#recipient_id').val();
          var recipient_name = \$('#recipient_name').val();
          var amount = \$('#amount').val();
          var amount_confirm = \$('#amount_confirm').val();
          var note = \$('#note').val();

          if (!recipient_id) {
              layer.msg('请填写对方收款帐号');
              return false;
          }
          if (!recipient_name) {
              layer.msg('请填写对方帐号姓名');
              return false;
          }
          if (!amount) {
              layer.msg('请填写转账金额');
              return false;
          }
          if (!amount_confirm) {
              layer.msg('请填写确认转账金额');
              return false;
          }
          if (amount !== amount_confirm) {
              layer.msg('转账金额和确认转账金额不一致');
              return false;
          }

          return {
              _csrf_token: '";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("reseller_transfer"), "html", null, true);
        echo "',
              recipient_id: recipient_id,
              recipient_name: recipient_name,
              amount: amount,
              amount_confirm: amount_confirm,
              note: note
          };
      }


      function clear_form_val() {
          \$('#recipient_id').val('');
          \$('#recipient_name').val('');
          \$('#amount').val('');
          \$('#amount_confirm').val('');
          \$('#note').val('');
          \$('#indicator').html('<span style=\"color: red\">请输入对方收款帐号</span>');
      }

      layui.use('layer', function () { //独立版的layer无需执行这一句
          var \$ = layui.jquery, layer = layui.layer; //独立版的layer无需执行这一句

          //触发事件
          var active = {
              warning: function () {
                  //预警设置层
                  layer.open({
                      type: 1
                      , title: ['转账给好友店铺', 'font-size:14px;font-weight:bold;'] //不显示标题栏
                      , closeBtn: 1
                      , area: '600px;'
                      , shade: 0.6
                      , id: 'LAY_layuipro' //设定一个id，防止重复弹出
                      , moveType: 1 //拖拽模式，0或者1
                      , content: \$('.demo-warning')
                      , success: function (layero) {
                          var btn = layero.find('.layui-layer-btn');
                          btn.css('text-align', 'center');
                          btn.find('.layui-layer-btn0').attr({
                              href: 'http://www.layui.com/'
                              , target: '_blank'
                          });
                      }
                  });
              }
          };
          \$('.site-demo-layer').on('click', function () {
              var type = \$(this).data('type');
              active[type] ? active[type].call(this) : '';
          });
      });
  </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Reseller/Finance/transfer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 359,  415 => 295,  398 => 281,  333 => 219,  247 => 135,  245 => 134,  222 => 114,  209 => 104,  196 => 94,  183 => 84,  171 => 75,  160 => 67,  156 => 66,  152 => 64,  143 => 63,  82 => 10,  73 => 9,  60 => 7,  51 => 6,  41 => 1,  39 => 4,  37 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Reseller/Common/layout.twig' %}
{% import ('Common/simple_form_helpers.html.twig') as sf %}

{% set title = '我的财务-我要转账' %}

{% block title %}
  {{ title }}
{% endblock %}
{% block css %}
  <style type=\"text/css\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/transfer.css\"></style>
  <style type=\"text/css\">
    .panel-item {
      float: left;
      width: calc(100% - 380px);
      height: auto;
      box-sizing: border-box;
      border-radius: 2px;
      margin-bottom: 20px;
      background: #FFFFFF;
    }

    .m-information {
      width: auto;
      height: 55px;
      box-sizing: border-box;
      padding: 0 20px;
      border-radius: 2px;
      border-bottom: 1px solid #E0E0E0;
      line-height: 55px;
      background: #FFFFFF;
      color: #333333;
    }

    .m-table table th {
      background: #F0F0F0;
      font-weight: normal;
      line-height: 30px;
      font-size: 14px;
      color: #333333;
    }

    .m-table table tr {
      padding: 5px 10px;
      line-height: 20px;
    }

    .m-table table td {
      padding: 5px 10px;
      line-height: 20px;
    }

    .financial-item .contact-icon {
      width: 30px;
      height: 20px;
      line-height: 24px;
      font-size: 24px;
      color: #2CA9E1;
      cursor: pointer;
    }
  </style>
{% endblock %}

{% block main_content %}
  <div class=\"panel-item\" style=\"min-height: 400px;\">
    <div class=\"m-information\">
      <span>账户余额：<span class=\"f-fs-16 s-orange\">{{ app.user.resellerAccount.balance|default(0)|number_format(2) }}</span>元</span>
      <a href=\"{{ path(\"reseller_finance_trade_logs\", {\"trade_type\": 502}) }}\" class=\"s-blue\" style=\"margin: 0 30px;\">查看转账记录</a>
    </div>
    <div class=\"financial-item\">
      <div class=\"layui-form\">
        <div style=\"padding: 50px 50px 20px 50px;border-bottom: 1px solid #E0E0E0;\">
          <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">收款帐号</label>
            <div class=\"layui-input-inline\">
              {{ sf.text(form.recipient_id,  {'class': 'layui-input',  'placeholder': '请输入对方的狐豆帐号', \"autocomplete\": \"off\"}) }}
            </div>
            <div class=\"layui-form-mid\">
              <span id=\"indicator_recipient_id\" class=\"indicator\"></span>
            </div>
          </div>
          <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">账户姓名</label>
            <div class=\"layui-input-inline\">
              {{ sf.text(form.recipient_name,  {'class': 'layui-input',  'placeholder': '请输入对方的账户姓名', \"autocomplete\": \"off\"}) }}
            </div>
            <div class=\"layui-form-mid\">
              <!--                            <i class=\"iconfont contact-icon site-demo-layer\" data-type=\"warning\" >&#xe687;</i>-->
              <span id=\"indicator_recipient_name\" class=\"indicator\"></span>
            </div>
          </div>
          <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">转账金额</label>
            <div class=\"layui-input-inline\">
              {{ sf.text(form.amount,  {'class': 'layui-input',  'placeholder': '请输入转账金额', \"autocomplete\": \"off\"}) }}
            </div>
            <div class=\"layui-form-mid\">
              <!--                            <i class=\"iconfont contact-icon site-demo-layer\" data-type=\"warning\" >&#xe687;</i>-->
              <span id=\"indicator_amount\" class=\"indicator\"></span>
            </div>
          </div>
          <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">确认金额</label>
            <div class=\"layui-input-inline\">
              {{ sf.text(form.amount_confirm,  {'class': 'layui-input',  'placeholder': '请确认转账金额', \"autocomplete\": \"off\"}) }}
            </div>
            <div class=\"layui-form-mid\">
              <!--                            <i class=\"iconfont contact-icon site-demo-layer\" data-type=\"warning\" >&#xe687;</i>-->
              <span id=\"indicator_amount_confirm\" class=\"indicator\"></span>
            </div>
          </div>
          <div class=\"layui-form-item layui-form-text\">
            <label class=\"layui-form-label\">备注</label>
            <div class=\"layui-input-block\">
              {{ sf.textarea(form.note,  {'class': 'layui-textarea',  'placeholder': '可根据您的需求，自定义输入内容（可空）'}) }}
            </div>
          </div>
        </div>
        <!--                <div style=\"padding: 20px 50px 0 50px;\">-->
        <!--                    <div class=\"layui-form-item\">-->
        <!--                        <label class=\"layui-form-label\">支付密码</label>-->
        <!--                        <div class=\"layui-input-inline\">-->
        <!--                            <input type=\"password\" name=\"password\" required lay-verify=\"required\" placeholder=\"请输入密码\" autocomplete=\"off\" class=\"layui-input\">-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <div class=\"layui-form-item\" style=\"text-align: left; padding: 20px 0 10px 50px;\">
          <div class=\"layui-input-block\">
            <button class=\"layui-btn f-fnsna\" lay-submit=\"\" lay-filter=\"demo2\" onclick=\"sub();\">确认转账</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  {% include \"Reseller/Common/_rightPanel.twig\" %}

  <!-- 转账给好友店铺 -->
  <div class=\"demo-warning\" style=\"display: none;\">
    <form class=\"layui-form\" action=\"\">
      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">店铺名称</label>
        <div class=\"layui-input-inline\">
          <input name=\"title\" lay-verify=\"title\" autocomplete=\"off\" placeholder=\"请输入好友店铺名称关键字\" class=\"layui-input f-fnsna\" type=\"text\">
        </div>
        <div class=\"layui-input-inline\">
          <button class=\"layui-btn f-fnsna\">确认转账</button>
        </div>
      </div>
    </form>
    <div class=\"m-table\" style=\"margin-top: 20px;\">
      <table>
        <thead>
        <tr>
          <th>狐豆帐号</th>
          <th>店铺名称</th>
          <th>联系人</th>
          <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>s12345613</td>
          <td>广西移动</td>
          <td>某某</td>
          <td>
            <a href=\"#\">选择</a>
          </td>
        </tr>
        <tr>
          <td>s12345613</td>
          <td>广西移动</td>
          <td>某某</td>
          <td>
            <a href=\"#\">选择</a>
          </td>
        </tr>
        <tr>
          <td>s12345613</td>
          <td>广西移动</td>
          <td>某某</td>
          <td>
            <a href=\"#\">选择</a>
          </td>
        </tr>
        </tbody>
      </table>
    </div>

  </div>

  <div class=\"layer-content \" id=\"pay_password_dialog\">
    <div class=\"layui-input-block\">
      <input type=\"password\" value=\"\" name=\"\" placeholder=\"请输入支付密码\" id=\"pay_password\" class=\"layui-input\"/>
      <div class=\"layui-form-mid\">
        <span id=\"indicator_pay_password\" class=\"indicator\"></span>
      </div>
    </div>
    <div class=\"layer-btn\">
      <button type=\"button\" id=\"btn_transfer_confirm\" class=\"layui-btn layui-btn-normal layui-btn-sm\">确定</button>
      <button type=\"button\" id=\"btn_cancel\" class=\"layui-btn layui-btn-primary layui-btn-sm\">取消</button>
    </div>
  </div>

  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.md5.js\"></script>
  <!-- /转账给好友店铺 -->
  <script type=\"text/javascript\">
      var inspect_recipient = false;
      layui.use('form', function () {
          var form = layui.form
              , layer = layui.layer
      });

      \$('#recipient_id').change(function () {
          var recipient_id = \$(this).val()
          if (recipient_id === \"\") {
              return;
          }

          \$('#indicator_recipient_id').html('正在查询该用户信息...');
          \$.ajax('{{ path(\"reseller_finance_check_user\") }}', {
              data: {username: recipient_id}
              , success: function (data) {
                  if (data.code === \"SUCCEED\") {
                      inspect_recipient = true;
                      \$('#indicator_recipient_id').html('<span style=\"color: green;\">' + data.msg + '</span>');
//                      \$('#recipient_name').val(data.recipient_name);
                      \$('#recipient_name').focus();
                  } else {
                      inspect_recipient = false;
                      \$('#indicator_recipient_id').html('<span style=\"color: red;\">' + data.msg + '</span>');
//                      \$('#recipient_name').val(\"\");
                  }
              }
              , error: function () {
                  inspect_recipient = false;
                  \$('#indicator_recipient_id').html('<span style=\"color: red;\">系统繁忙，请稍后再试</span>');
//                  \$('#recipient_name').val(\"\");
              }
          })
      });

      var transfer_box;
      function sub() {
          \$('.indicator').html(\"\");

          if (!check_data()) {
              return false;
          }
          \$('#pay_password').val('');
          transfer_box = layer.open({
              type: 1
              , title: ['请输入支付密码，转账给好友店铺', 'font-size:14px;font-weight:bold;'] //不显示标题栏
              , closeBtn: 1
              , area: ['400px']
              , shade: 0.6
              , moveType: 1 //拖拽模式，0或者1
              , content: \$('#pay_password_dialog')
          });
      }
      \$('#btn_transfer_confirm').click(function () {
          transfer_do();
      });
      \$('#btn_cancel').click(function () {
          layer.close(transfer_box);
      });

      function transfer_do() {
          var data = check_data();
          if (!data) {
              return false;
          }
          var pay_password = \$('#pay_password').val().trim();
          if (!pay_password) {
              layer.msg('请先输入转账密码');
              return false;
          }
          data.pay_password = pay_password;

          \$('.indicator').html(\"\");
          \$('#pay_password').val('');
          \$(this).attr('disabled', 'true');
          \$.ajax('{{ path(\"reseller_finance_transfer_confirm\") }}', {
              type: 'post'
              , data: data
              , success: function (data) {
                  \$('#btn_transfer_confirm').removeAttr('disabled');

                  if (data.code === \"SUCCEED\") {
                      layer.close(transfer_box);
                      clear_form_val();
                      layer.open({
                          title: '温馨提醒'
                          , content: '您的转账已经成功，您可以'
                          , btn: ['查看转账记录', '继续转账']
                          , yes: function () {
                              location.href = '{{ path(\"reseller_finance_trade_logs\", {\"trade_type\": 502}) }}';
                          }
                      });
                      return;
                  }

                  if(data.errors) {
                      \$.each(data.errors, function (field, errorMsg) {
                          \$(\"#indicator_\" + field).html('<span style=\"color: red;\">' + errorMsg + '</span>');
                      });

                      // 仅仅是转账密码错误的话，不关闭转账密码对话框，方便用户重新输入
                      if(data.errors.pay_password && Object.keys(data.errors).length === 1) {
                          return;
                      }
                  }

                  layer.close(transfer_box);
                  layer.msg(data.msg);

                  return false;
              }
              , error: function () {
                  layer.close(transfer_box);
                  layer.msg('系统繁忙，请稍候再试');
                  \$('#btn_transfer_confirm').removeAttr('disabled');

              }
          });
      }

      function check_data() {
          if (!inspect_recipient) {
              layer.msg('请填写正确的收款帐号');
              return false;
          }
          var recipient_id = \$('#recipient_id').val();
          var recipient_name = \$('#recipient_name').val();
          var amount = \$('#amount').val();
          var amount_confirm = \$('#amount_confirm').val();
          var note = \$('#note').val();

          if (!recipient_id) {
              layer.msg('请填写对方收款帐号');
              return false;
          }
          if (!recipient_name) {
              layer.msg('请填写对方帐号姓名');
              return false;
          }
          if (!amount) {
              layer.msg('请填写转账金额');
              return false;
          }
          if (!amount_confirm) {
              layer.msg('请填写确认转账金额');
              return false;
          }
          if (amount !== amount_confirm) {
              layer.msg('转账金额和确认转账金额不一致');
              return false;
          }

          return {
              _csrf_token: '{{ csrf_token(\"reseller_transfer\") }}',
              recipient_id: recipient_id,
              recipient_name: recipient_name,
              amount: amount,
              amount_confirm: amount_confirm,
              note: note
          };
      }


      function clear_form_val() {
          \$('#recipient_id').val('');
          \$('#recipient_name').val('');
          \$('#amount').val('');
          \$('#amount_confirm').val('');
          \$('#note').val('');
          \$('#indicator').html('<span style=\"color: red\">请输入对方收款帐号</span>');
      }

      layui.use('layer', function () { //独立版的layer无需执行这一句
          var \$ = layui.jquery, layer = layui.layer; //独立版的layer无需执行这一句

          //触发事件
          var active = {
              warning: function () {
                  //预警设置层
                  layer.open({
                      type: 1
                      , title: ['转账给好友店铺', 'font-size:14px;font-weight:bold;'] //不显示标题栏
                      , closeBtn: 1
                      , area: '600px;'
                      , shade: 0.6
                      , id: 'LAY_layuipro' //设定一个id，防止重复弹出
                      , moveType: 1 //拖拽模式，0或者1
                      , content: \$('.demo-warning')
                      , success: function (layero) {
                          var btn = layero.find('.layui-layer-btn');
                          btn.css('text-align', 'center');
                          btn.find('.layui-layer-btn0').attr({
                              href: 'http://www.layui.com/'
                              , target: '_blank'
                          });
                      }
                  });
              }
          };
          \$('.site-demo-layer').on('click', function () {
              var type = \$(this).data('type');
              active[type] ? active[type].call(this) : '';
          });
      });
  </script>

{% endblock %}
", "Reseller/Finance/transfer.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Finance\\transfer.twig");
    }
}
