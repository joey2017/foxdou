<?php

/* Common/Finance/Balance/_add_balance_form.twig */
class __TwigTemplate_7b0feb64adc3014bfbe496c9c6c3027dd3b4a7adc8f5f32384e3e3217bbe8f01 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/Finance/Balance/_add_balance_form.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/Finance/Balance/_add_balance_form.twig"));

        // line 1
        echo "<div class=\"panel-item\">
  <div class=\"m-information\">
    <strong class=\"f-fs-16 s-orange\">狐豆";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sub_account"]) || array_key_exists("sub_account", $context) ? $context["sub_account"] : (function () { throw new Twig_Error_Runtime('Variable "sub_account" does not exist.', 3, $this->source); })()), "getPlatformName", array(), "method"), "html", null, true);
        echo "账户</strong>
    <span class=\"s-gray\">/ 充值</span>
    <span style=\"margin: 0 20px;\">充值账户：";
        // line 5
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "realNameInfo", array(), "any", false, true), "business_name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "realNameInfo", array(), "any", false, true), "business_name", array()), "-")) : ("-")), "html", null, true);
        echo "（";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->source); })()), "user_name", array()), "html", null, true);
        echo "）</span>
    <span>账户余额：<span class=\"f-fs-16 s-orange\">";
        // line 6
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["sub_account"] ?? null), "balance", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["sub_account"] ?? null), "balance", array()), 0)) : (0)), 2), "html", null, true);
        echo "</span></span> 元</span>
  </div>
  <div class=\"pay-main\" style=\"padding-bottom: 20px;\">
    <div class=\"pay-item g-bdc\">
      <ul class=\"pay-way-tab\">
        <li class=\"pay-way-tab-li pay-way-this\">
          <i class=\"iconfont\">&#xe648;</i>
          <strong class=\"f-fs-16\">在线充值</strong>
          <span class=\"f-fr\"><span class=\"f-fs-16 s-orange\">";
        // line 14
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["sub_account"] ?? null), "balance", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["sub_account"] ?? null), "balance", array()), 0)) : (0)), 2), "html", null, true);
        echo "</span> 元</span>
        </li>
      </ul>
      <div class=\"pay-item-content\">

        <div class=\"wrapper\">
          <div class=\"wap-tab\">
            <div class=\"wap-title\">充值方式：</div>
            <ul class=\"wap-tab-ul\">
              <li key=\"a\" class=\"wap-this\">支付宝转账<span style=\"color: #FF0000;\">(免费率)</span></li>
              <!--                            <li key=\"b\">淘宝店铺<span style=\"color: #FF0000;\">(免费率)</span></li>-->
              <li key=\"c\">支付宝在线( 0.6%)</li>
            </ul>
          </div>
          <div class=\"wap-main\">
            <div key=\"a\" style=\"display: block;\">
              <div class=\"alipay-row g-bdc\">
                <div class=\"alipay-left-row\">
                  <h5>1、打开支付宝扫一扫</h5>
                  <div class=\"alipay-item\">
                    ";
        // line 34
        $context["qr_data"] = ("http://foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/site/index.html?user_num=A" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 34, $this->source); })()), "user_name", array()));
        // line 35
        echo "                    <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Endroid\QrCodeBundle\Twig\QrCodeExtension']->qrCodeDataUriFunction((isset($context["qr_data"]) || array_key_exists("qr_data", $context) ? $context["qr_data"] : (function () { throw new Twig_Error_Runtime('Variable "qr_data" does not exist.', 35, $this->source); })()), array("writer" => "png", "size" => 158)), "html", null, true);
        echo "\"/>
                    <div class=\"alipay-tip\">
                      <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/img/saoyisao.png\"/>
                      <p>
                        打开手机支付宝<br/>
                        扫一扫转账付款
                      </p>
                    </div>
                  </div>
                  <p>支付宝转账时备注您的商户编号</p>
                  <p class=\"alipay-number\">A";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 45, $this->source); })()), "user_name", array()), "html", null, true);
        echo "</p>
                  <p>可在1分钟左右自动到账</p>
                </div>
                <div class=\"alipay-right-row\">
                  <h5>2、转账至下方支付宝账号</h5>
                  <div class=\"alipay-text\">
                    <form id=\"via_transfer\">
                    <p>支付宝帐号：admin@foxdou.com</p>
                    <p>支付宝户名：广西你行我动科技有限公司</p>
                    <div class=\"layui-form-item\">
                      <p style=\"margin-bottom: 5px;color: #ff320b\">忘记备注或备注信息填错时，将转账成功的支付宝流水号填入下方即可到账，如有疑问请联系客服。</p>
                      <label class=\"layui-form-label\">支付宝流水号</label>
                      <div class=\"layui-input-block\">
                        <input name=\"alipay_trade_no\" lay-verify=\"\" autocomplete=\"off\" id=\"alipay_trade_no\" placeholder=\"支付宝转账成功的交易流水号\" class=\"layui-input f-fnsna\" type=\"text\">
                      </div>
                    </div>
                    <div style=\"margin-top: 20px;\">
                      <input name=\"_token\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("common_finance_balance_add_balance_via_alipay_transfer"), "html", null, true);
        echo "\" type=\"hidden\">
                      <input name=\"platform_id\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sub_account"]) || array_key_exists("sub_account", $context) ? $context["sub_account"] : (function () { throw new Twig_Error_Runtime('Variable "sub_account" does not exist.', 63, $this->source); })()), "platformId", array()), "html", null, true);
        echo "\" type=\"hidden\">
                      <input name=\"scene_id\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["scene_id"]) || array_key_exists("scene_id", $context) ? $context["scene_id"] : (function () { throw new Twig_Error_Runtime('Variable "scene_id" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "\" type=\"hidden\">
                      <button class=\"layui-btn f-fnsna\" lay-submit=\"\" lay-filter=\"demo1\" onclick=\"alipay_transfer_sub(this);\">
                        确认充值
                      </button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div key=\"c\">
              <form id=\"via_online_payment\">
              <div class=\"alipay g-bdc\" style=\"width: 100%;height: auto;\">
                <div class=\"layui-form-item\">
                  <label class=\"layui-form-label\">充值金额</label>
                  <div class=\"layui-input-inline\">
                    <input id=\"amount\" name=\"amount\" type=\"text\" name=\"\" value=\"\" readonly placeholder=\"请输入充值金额\" autocomplete=\"off\" class=\"layui-input amount\" style=\"border: 2px solid #18a689;color: #FF9900;font-family:Arial;\"/>
                  </div>
                  <label class=\"layui-form-label\" style=\"color: red;display: none\" id=\"alipayshouxufei\"><span id=\"alipaypcshouxufei\">手续费0元</span></label>
                </div>
                <div class=\"alipay-left\">
                  <p class=\"g-bdc\">
                    <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/img/alipay.png\" class=\"alipay-logo\"/>
                    <span class=\"alipay-pro\">请您在使用支付宝在线加款前仔细阅读下方说明信息：</span>
                  </p>
                  <p style=\"margin-top: 20px;\">1、使用支付宝在线充值功能不需绑定支付宝，只需要输入充值金额后点击下一步然后在支付宝完成付款即可。</p>
                  <p>2、手续费按充值金额的0.6%收取，该手续费由支付宝官方直接收取。若不想承担该笔手续费可以选择转账加款的方式。</p>
                  <p>3、付款成功后即可自动到账，若付款后出现不到账的情况请联系客服。</p>
                </div>

              </div>
              <div style=\"margin-top: 20px;\">
                <input name=\"_token\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("common_finance_balance_add_balance_via_alipay_online_payment"), "html", null, true);
        echo "\" type=\"hidden\">

                <input name=\"platform_id\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sub_account"]) || array_key_exists("sub_account", $context) ? $context["sub_account"] : (function () { throw new Twig_Error_Runtime('Variable "sub_account" does not exist.', 98, $this->source); })()), "platformId", array()), "html", null, true);
        echo "\" type=\"hidden\">
                <input name=\"scene_id\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["scene_id"]) || array_key_exists("scene_id", $context) ? $context["scene_id"] : (function () { throw new Twig_Error_Runtime('Variable "scene_id" does not exist.', 99, $this->source); })()), "html", null, true);
        echo "\" type=\"hidden\">
                <button class=\"layui-btn f-fnsna\" lay-submit=\"\" lay-filter=\"demo1\" id=\"pc-alipay-next\">下一步</button>
              </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style type=\"text/css\">
  .layer-content { display: none; }
  .layer-content .layui-input-block { margin-left: 0; padding: 20px; }
  .layer-content .layer-btn { border-top: 1px solid #EEEEEE; padding: 10px 20px; text-align: right; }
  .layer-content .layer-btn button { padding: 0 20px; height: 30px; font-family: inherit }
  .layer-content .layer-btn .layui-btn-primary { background-color: #fff !important; }
</style>

<script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.md5.js\"></script>

<script src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/js/lanrenzhijia.js\" type=\"text/javascript\"></script>

<script type=\"text/javascript\">
    layui.use('layer', function () {
        var layer = layui.layer;
    });

    \$('#amount').bind('click focus', function () {
        if (\$(this).attr('readonly')) {
            \$(this).removeAttr('readonly');
        }
    });

    function alipay_transfer_sub(dom) {
        var alipay_trade_no = \$('#alipay_trade_no').val();
        if (!alipay_trade_no) {
            layer.msg('支付宝流水号不能为空');
            return false;
        }
        if (alipay_trade_no.length < 25 || isNaN(alipay_trade_no) || alipay_trade_no.length > 38) {
            layer.msg('请填写正确的支付宝流水号');
            return false;
        }
        \$(dom).attr('disabled', 'disabled');
        var load = layer.load(1, {
            shade:  [0.1, '#fff'] //0.1透明度的白色背景
            , time: 0
        });
        \$.ajax('";
        // line 150
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("common_finance_balance_add_balance_via_alipay_transfer");
        echo "', {
            type:      'post'
            , data:    \$('#via_transfer').serializeArray()
            , success: function (data) {
                layer.close(load);
                layer.msg(data.msg, function () {
                });
                if (data.status) {
                    location.reload();
                }
                \$(dom).removeAttr('disabled');

            }
            , error:   function () {
                layer.close(load);
                layer.msg('系统繁忙，请稍候再试');
                \$(dom).removeAttr('disabled');

            }

        });
    }
</script>

<script type=\"text/javascript\">

    layui.use(['layer'], function () {
        var layer = layui.layer;

        bind_input_event('amount', function () {
            var amount   = \$('#amount').val();
            var money_match;
            //---modify orx start
            money_reg   = /(^[1-9]([0-9]+)?(\\.[0-9]{1,2})?)|(^(0){1}\$)|(^[0-9]\\.[0-9]{0,2})/;
            money_match = amount.match(money_reg);

            if (!money_reg.test(amount)) {
                \$('#amount').val('');
                \$('#alipaypcshouxufei').text('请输入正确的金额');
                \$('#alipayshouxufei').show();
                return;
            } else {
                if (amount.substr(-1, 1) == '.') {
                    if (amount.match(/\\./gi).length > 1) {
                        amount = money_match[0];
                        \$('#amount').val(amount);
                    }
                } else if (amount != '0') {
                    if (typeof money_match[0] != 'undefined') {
                        amount = money_match[0];
                        \$('#amount').val(amount);
                    }
                }
            }
            amount = parseFloat(amount);
            if (!amount) {
                \$('#alipayshouxufei').hide();
                return;
            }

            ";
        // line 210
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 210, $this->source); })()), "debug", array())) {
            // line 211
            echo "            if (amount < 0.1 && amount != 0) {
                \$('#amount').val(0.1);
            }
            ";
        }
        // line 215
        echo "
            if (amount > 9999999) {
                amount = 9999999;
                \$('#amount').val(9999999);
            }
            var fei   = amount * 0.006;
            var feilv = fei.toFixed(2);
            if (amount < 0.9) {
                feilv = 0;
            }
            \$('#alipaypcshouxufei').text('手续费' + feilv + '元');
            \$('#alipayshouxufei').show();
        });


        \$('#pc-alipay-next').click(function (e) {
            var amount = \$('#amount').val();
            if (amount == '' || amount == null || amount == undefined) {
                layer.msg('请先填写充值金额');
                return;
            }

            \$.ajax({
                \"type\":    \"post\",
                \"url\":     \"";
        // line 239
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("common_finance_balance_add_balance_via_alipay_online_payment");
        echo "\",
                \"async\":   false,
                \"data\":    \$('#via_online_payment').serializeArray(),
                \"success\": function (data) {
                    if (data.status) {
                        window.open(data.url, \"_blank\");
                    } else {
                        layer.msg(data.msg);
                    }
                }
            });

            e.preventDefault();
        });


        function bind_input_event(call_name, call_back) {
            var dom = document.getElementsByClassName(call_name);
            for (v in dom) {
                if (document.all) {
                    dom[v].onpropertychange = function () {
                        call_back();
                    };
                } else {
                    dom[v].oninput = function () {
                        call_back();
                    };
                }
            }
        }
    });


    //在线充值
    \$('.wap-tab-ul li').click(function () {
        var key = \$(this).attr('key');

        \$(this).addClass('wap-this').siblings().removeClass('wap-this');
        \$(\".wap-main div[key='\" + key + \"']\").show().siblings().hide();
    });

    \$('.pay-way-tab-li').click(function () {
        \$(this).addClass('pay-way-this');
        \$(this).siblings().removeClass('pay-way-this');
        var num = \$('.pay-way-tab-li').index(this);
        if (num == 1) {
            \$('.wrapper').hide();
            \$('.wallet').show();
        } else {
            \$('.wallet').hide();
            \$('.wrapper').show();
        }
    });

</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/Finance/Balance/_add_balance_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 239,  291 => 215,  285 => 211,  283 => 210,  220 => 150,  166 => 99,  162 => 98,  157 => 96,  122 => 64,  118 => 63,  114 => 62,  94 => 45,  80 => 35,  78 => 34,  55 => 14,  44 => 6,  38 => 5,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"panel-item\">
  <div class=\"m-information\">
    <strong class=\"f-fs-16 s-orange\">狐豆{{ sub_account.getPlatformName() }}账户</strong>
    <span class=\"s-gray\">/ 充值</span>
    <span style=\"margin: 0 20px;\">充值账户：{{ user.realNameInfo.business_name|default('-') }}（{{ user.user_name }}）</span>
    <span>账户余额：<span class=\"f-fs-16 s-orange\">{{ sub_account.balance|default(0)|number_format(2) }}</span></span> 元</span>
  </div>
  <div class=\"pay-main\" style=\"padding-bottom: 20px;\">
    <div class=\"pay-item g-bdc\">
      <ul class=\"pay-way-tab\">
        <li class=\"pay-way-tab-li pay-way-this\">
          <i class=\"iconfont\">&#xe648;</i>
          <strong class=\"f-fs-16\">在线充值</strong>
          <span class=\"f-fr\"><span class=\"f-fs-16 s-orange\">{{ sub_account.balance|default(0)|number_format(2) }}</span> 元</span>
        </li>
      </ul>
      <div class=\"pay-item-content\">

        <div class=\"wrapper\">
          <div class=\"wap-tab\">
            <div class=\"wap-title\">充值方式：</div>
            <ul class=\"wap-tab-ul\">
              <li key=\"a\" class=\"wap-this\">支付宝转账<span style=\"color: #FF0000;\">(免费率)</span></li>
              <!--                            <li key=\"b\">淘宝店铺<span style=\"color: #FF0000;\">(免费率)</span></li>-->
              <li key=\"c\">支付宝在线( 0.6%)</li>
            </ul>
          </div>
          <div class=\"wap-main\">
            <div key=\"a\" style=\"display: block;\">
              <div class=\"alipay-row g-bdc\">
                <div class=\"alipay-left-row\">
                  <h5>1、打开支付宝扫一扫</h5>
                  <div class=\"alipay-item\">
                    {% set qr_data = 'http://foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/site/index.html?user_num=A' ~ user.user_name %}
                    <img src=\"{{ qr_code_data_uri(qr_data, { writer: 'png', size: 158 }) }}\"/>
                    <div class=\"alipay-tip\">
                      <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/img/saoyisao.png\"/>
                      <p>
                        打开手机支付宝<br/>
                        扫一扫转账付款
                      </p>
                    </div>
                  </div>
                  <p>支付宝转账时备注您的商户编号</p>
                  <p class=\"alipay-number\">A{{ user.user_name }}</p>
                  <p>可在1分钟左右自动到账</p>
                </div>
                <div class=\"alipay-right-row\">
                  <h5>2、转账至下方支付宝账号</h5>
                  <div class=\"alipay-text\">
                    <form id=\"via_transfer\">
                    <p>支付宝帐号：admin@foxdou.com</p>
                    <p>支付宝户名：广西你行我动科技有限公司</p>
                    <div class=\"layui-form-item\">
                      <p style=\"margin-bottom: 5px;color: #ff320b\">忘记备注或备注信息填错时，将转账成功的支付宝流水号填入下方即可到账，如有疑问请联系客服。</p>
                      <label class=\"layui-form-label\">支付宝流水号</label>
                      <div class=\"layui-input-block\">
                        <input name=\"alipay_trade_no\" lay-verify=\"\" autocomplete=\"off\" id=\"alipay_trade_no\" placeholder=\"支付宝转账成功的交易流水号\" class=\"layui-input f-fnsna\" type=\"text\">
                      </div>
                    </div>
                    <div style=\"margin-top: 20px;\">
                      <input name=\"_token\" value=\"{{ csrf_token('common_finance_balance_add_balance_via_alipay_transfer') }}\" type=\"hidden\">
                      <input name=\"platform_id\" value=\"{{ sub_account.platformId }}\" type=\"hidden\">
                      <input name=\"scene_id\" value=\"{{ scene_id }}\" type=\"hidden\">
                      <button class=\"layui-btn f-fnsna\" lay-submit=\"\" lay-filter=\"demo1\" onclick=\"alipay_transfer_sub(this);\">
                        确认充值
                      </button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div key=\"c\">
              <form id=\"via_online_payment\">
              <div class=\"alipay g-bdc\" style=\"width: 100%;height: auto;\">
                <div class=\"layui-form-item\">
                  <label class=\"layui-form-label\">充值金额</label>
                  <div class=\"layui-input-inline\">
                    <input id=\"amount\" name=\"amount\" type=\"text\" name=\"\" value=\"\" readonly placeholder=\"请输入充值金额\" autocomplete=\"off\" class=\"layui-input amount\" style=\"border: 2px solid #18a689;color: #FF9900;font-family:Arial;\"/>
                  </div>
                  <label class=\"layui-form-label\" style=\"color: red;display: none\" id=\"alipayshouxufei\"><span id=\"alipaypcshouxufei\">手续费0元</span></label>
                </div>
                <div class=\"alipay-left\">
                  <p class=\"g-bdc\">
                    <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/img/alipay.png\" class=\"alipay-logo\"/>
                    <span class=\"alipay-pro\">请您在使用支付宝在线加款前仔细阅读下方说明信息：</span>
                  </p>
                  <p style=\"margin-top: 20px;\">1、使用支付宝在线充值功能不需绑定支付宝，只需要输入充值金额后点击下一步然后在支付宝完成付款即可。</p>
                  <p>2、手续费按充值金额的0.6%收取，该手续费由支付宝官方直接收取。若不想承担该笔手续费可以选择转账加款的方式。</p>
                  <p>3、付款成功后即可自动到账，若付款后出现不到账的情况请联系客服。</p>
                </div>

              </div>
              <div style=\"margin-top: 20px;\">
                <input name=\"_token\" value=\"{{ csrf_token('common_finance_balance_add_balance_via_alipay_online_payment') }}\" type=\"hidden\">

                <input name=\"platform_id\" value=\"{{ sub_account.platformId }}\" type=\"hidden\">
                <input name=\"scene_id\" value=\"{{ scene_id }}\" type=\"hidden\">
                <button class=\"layui-btn f-fnsna\" lay-submit=\"\" lay-filter=\"demo1\" id=\"pc-alipay-next\">下一步</button>
              </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style type=\"text/css\">
  .layer-content { display: none; }
  .layer-content .layui-input-block { margin-left: 0; padding: 20px; }
  .layer-content .layer-btn { border-top: 1px solid #EEEEEE; padding: 10px 20px; text-align: right; }
  .layer-content .layer-btn button { padding: 0 20px; height: 30px; font-family: inherit }
  .layer-content .layer-btn .layui-btn-primary { background-color: #fff !important; }
</style>

<script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.md5.js\"></script>

<script src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/js/lanrenzhijia.js\" type=\"text/javascript\"></script>

<script type=\"text/javascript\">
    layui.use('layer', function () {
        var layer = layui.layer;
    });

    \$('#amount').bind('click focus', function () {
        if (\$(this).attr('readonly')) {
            \$(this).removeAttr('readonly');
        }
    });

    function alipay_transfer_sub(dom) {
        var alipay_trade_no = \$('#alipay_trade_no').val();
        if (!alipay_trade_no) {
            layer.msg('支付宝流水号不能为空');
            return false;
        }
        if (alipay_trade_no.length < 25 || isNaN(alipay_trade_no) || alipay_trade_no.length > 38) {
            layer.msg('请填写正确的支付宝流水号');
            return false;
        }
        \$(dom).attr('disabled', 'disabled');
        var load = layer.load(1, {
            shade:  [0.1, '#fff'] //0.1透明度的白色背景
            , time: 0
        });
        \$.ajax('{{ path('common_finance_balance_add_balance_via_alipay_transfer') }}', {
            type:      'post'
            , data:    \$('#via_transfer').serializeArray()
            , success: function (data) {
                layer.close(load);
                layer.msg(data.msg, function () {
                });
                if (data.status) {
                    location.reload();
                }
                \$(dom).removeAttr('disabled');

            }
            , error:   function () {
                layer.close(load);
                layer.msg('系统繁忙，请稍候再试');
                \$(dom).removeAttr('disabled');

            }

        });
    }
</script>

<script type=\"text/javascript\">

    layui.use(['layer'], function () {
        var layer = layui.layer;

        bind_input_event('amount', function () {
            var amount   = \$('#amount').val();
            var money_match;
            //---modify orx start
            money_reg   = /(^[1-9]([0-9]+)?(\\.[0-9]{1,2})?)|(^(0){1}\$)|(^[0-9]\\.[0-9]{0,2})/;
            money_match = amount.match(money_reg);

            if (!money_reg.test(amount)) {
                \$('#amount').val('');
                \$('#alipaypcshouxufei').text('请输入正确的金额');
                \$('#alipayshouxufei').show();
                return;
            } else {
                if (amount.substr(-1, 1) == '.') {
                    if (amount.match(/\\./gi).length > 1) {
                        amount = money_match[0];
                        \$('#amount').val(amount);
                    }
                } else if (amount != '0') {
                    if (typeof money_match[0] != 'undefined') {
                        amount = money_match[0];
                        \$('#amount').val(amount);
                    }
                }
            }
            amount = parseFloat(amount);
            if (!amount) {
                \$('#alipayshouxufei').hide();
                return;
            }

            {% if not app.debug %}
            if (amount < 0.1 && amount != 0) {
                \$('#amount').val(0.1);
            }
            {% endif %}

            if (amount > 9999999) {
                amount = 9999999;
                \$('#amount').val(9999999);
            }
            var fei   = amount * 0.006;
            var feilv = fei.toFixed(2);
            if (amount < 0.9) {
                feilv = 0;
            }
            \$('#alipaypcshouxufei').text('手续费' + feilv + '元');
            \$('#alipayshouxufei').show();
        });


        \$('#pc-alipay-next').click(function (e) {
            var amount = \$('#amount').val();
            if (amount == '' || amount == null || amount == undefined) {
                layer.msg('请先填写充值金额');
                return;
            }

            \$.ajax({
                \"type\":    \"post\",
                \"url\":     \"{{ path('common_finance_balance_add_balance_via_alipay_online_payment') }}\",
                \"async\":   false,
                \"data\":    \$('#via_online_payment').serializeArray(),
                \"success\": function (data) {
                    if (data.status) {
                        window.open(data.url, \"_blank\");
                    } else {
                        layer.msg(data.msg);
                    }
                }
            });

            e.preventDefault();
        });


        function bind_input_event(call_name, call_back) {
            var dom = document.getElementsByClassName(call_name);
            for (v in dom) {
                if (document.all) {
                    dom[v].onpropertychange = function () {
                        call_back();
                    };
                } else {
                    dom[v].oninput = function () {
                        call_back();
                    };
                }
            }
        }
    });


    //在线充值
    \$('.wap-tab-ul li').click(function () {
        var key = \$(this).attr('key');

        \$(this).addClass('wap-this').siblings().removeClass('wap-this');
        \$(\".wap-main div[key='\" + key + \"']\").show().siblings().hide();
    });

    \$('.pay-way-tab-li').click(function () {
        \$(this).addClass('pay-way-this');
        \$(this).siblings().removeClass('pay-way-this');
        var num = \$('.pay-way-tab-li').index(this);
        if (num == 1) {
            \$('.wrapper').hide();
            \$('.wallet').show();
        } else {
            \$('.wallet').hide();
            \$('.wrapper').show();
        }
    });

</script>
", "Common/Finance/Balance/_add_balance_form.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Common\\Finance\\Balance\\_add_balance_form.twig");
    }
}
