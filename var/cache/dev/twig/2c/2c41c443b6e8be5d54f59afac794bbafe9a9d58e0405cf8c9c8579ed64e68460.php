<?php

/* Passport/Register/registerBusiness.twig */
class __TwigTemplate_7689cf487fec0a612ac2287c6ae3627dbe3526d34515021f80a3e66943df848a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/Register/registerBusiness.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/Register/registerBusiness.twig"));

        // line 1
        $this->loadTemplate("/Common/User/register__header.twig", "Passport/Register/registerBusiness.twig", 1)->display($context);
        // line 2
        echo "
<div id=\"agreements\" style=\"display: none; padding: 20px;\">
  ";
        // line 4
        $this->loadTemplate("/Common/User/register__agreements.twig", "Passport/Register/registerBusiness.twig", 4)->display($context);
        // line 5
        echo "</div>

<style>
  .layui-input-inline.error {
    border: solid 1px red;
  }

  .register-item-2 .layui-form-label{width: 90px;}
  .register-item-2 .layui-input-block input{width: 510px;}

  /*新增的样式*/
  .register-content {padding-left: 280px;}
  .layui-col-left .layui-form, .layui-col-right .layui-form {margin-top: 30px;}
  .layui-col-left .layui-input-inline, .layui-col-right .layui-input-inline {width: 260px;}
  .layui-col-left .layui-select-title, .layui-col-right .layui-select-title {width: auto;}
  .layui-cols-title {margin-left: -30px; border-bottom: 2px solid #eee;margin-bottom: 20px;}
  .layui-cols-title h3 {display: inline-block; font-weight: bold; color: #777; font-size: 15px;}
  .layui-cols-title span {padding-left: 15px; font-size: 13px; line-height: 24px; color: #999;}

</style>
<div class=\"register-main\" style=\"margin-top: 20px;\">
  <div class=\"register-title\" style=\"text-align: center;\">
    <h2>企业注册</h2>
  </div>
  <div class=\"register-content\">
    <form id=\"business_reg_form\" class=\"layui-form\" style=\"margin-top: 10px;\">
      <div class=\"register-item-1\" style=\"display: block;\">
        <div class=\"layui-row\">
          <div class=\"layui-col-xs12 layui-col-left\">
            <div class=\"layui-cols-title\">
              <h3>1. 企业资料</h3>
              <span>请填写企业相关信息</span>
            </div>
            <div class=\"layui-form-item\">
              <label class=\"layui-form-label\" for=\"business_type\">企业类型</label>
              <div class=\"layui-input-inline\" style=\"width: 332px;\">
                <select id=\"business_type\" name=\"business_type\" lay-filter=\"business_type\" lay-verify=\"required\" class=\"layui-input\">
                  <option value=\"\">请选择企业类型</option>
                  <option value=\"1\" selected>民营企业</option>
                  <option value=\"2\">个体经营</option>
                  <option value=\"3\">有限责任公司</option>
                  <option value=\"4\">股份制公司</option>
                  <option value=\"5\">三资企业</option>
                  <option value=\"6\">集体企业</option>
                  <option value=\"7\">中外合资企业</option>
                  <option value=\"8\">国有单位</option>
                  <option value=\"9\">事业单位</option>
                </select>
              </div>
              <div class=\"layui-form-mid layui-word-aux\"></div>
            </div>
            <div class=\"layui-form-item\">
              <label class=\"layui-form-label\">企业名称</label>
              <div class=\"layui-input-inline\" style=\"width: 332px;\">
                <input value=\"你行我动\" name=\"business_name\" lay-verify=\"required\" autocomplete=\"off\" placeholder=\"请输入公司名称\" class=\"layui-input\" type=\"text\" style=\"width: 332px;\"/>
              </div>
              <div class=\"layui-form-mid layui-word-aux\"></div>
            </div>
            <div class=\"layui-form-item\">
              <label class=\"layui-form-label\">营业执照</label>
              <div class=\"layui-input-inline\" style=\"width: 332px;\">
                <input value=\"914501003403198946\" name=\"business_license_no\" autocomplete=\"off\" lay-verify=\"business_license_no\" placeholder=\"请输入营业执照注册码\" class=\"layui-input\" type=\"text\" style=\"width: 332px;\"/>
              </div>
              <div class=\"layui-form-mid layui-word-aux\"></div>
            </div>
            <div class=\"layui-form-item\">
              <label class=\"layui-form-label\">法人姓名</label>
              <div class=\"layui-input-inline\" style=\"width: 332px;\">
                <input value=\"陈亚莉\" name=\"legal_person_name\" id=\"legal_person_name\" lay-verify=\"required\" autocomplete=\"off\" placeholder=\"请输法人姓名\" class=\"layui-input\" type=\"text\" style=\"width: 332px;\"/>
              </div>
              <div class=\"layui-form-mid layui-word-aux\"></div>
            </div>
            <div class=\"layui-form-item\">
              <label class=\"layui-form-label\">法人身份证</label>
              <div class=\"layui-input-inline\" style=\"width: 332px;\">
                <input value=\"350103198705202325\" name=\"legal_person_id_num\" style=\"width: 332px;\" id=\"legal_person_id_num\" lay-verify=\"id_num\" placeholder=\"请输入法人身份证号码\" autocomplete=\"off\" class=\"layui-input\" type=\"tel\"/>
              </div>
              <div class=\"layui-form-mid layui-word-aux id_num_msg\"></div>
            </div>
            <div class=\"layui-form-item select-box\">
              <label class=\"layui-form-label\">企业所在地</label>
              <div class=\"layui-input-inline\" style=\"width:332px\">
                <input value=\"\" type=\"text\" autocomplete=\"on\" class=\"layui-input\" id=\"city-picker\" name=\"city-picker\" readonly=\"readonly\" data-toggle=\"city-picker\" placeholder=\"请选择\">
              </div>
              <div class=\"layui-form-mid layui-word-aux\"></div>
            </div>
            <div class=\"layui-form-item\">
              <label class=\"layui-form-label\">详细地址</label>
              <div class=\"layui-input-inline\" style=\"width: 332px;\">
                <input value=\"test\" name=\"business_address\" lay-verify=\"required\" class=\"layui-input\" placeholder=\"请填写营业执照上的地址\" type=\"text\"/>
              </div>
              <div class=\"layui-form-mid layui-word-aux\"></div>
            </div>
          </div>
          <div class=\"layui-col-xs12 layui-col-right\" style=\"margin-top: 30px;\">
            <div class=\"layui-cols-title\">
              <h3>2. 登录信息</h3>
              <span>请输入登录邮箱、手机号、密码等信息</span>
            </div>
            <div class=\"layui-form-item reg_type reg_type_email\">
              <label class=\"layui-form-label\">电子邮箱</label>
              <div class=\"layui-input-inline\" style=\"width: 332px;\">
                <input value=\"test@edge.ac\" name=\"email\" id=\"email\" lay-verify=\"email\" autocomplete=\"off\" class=\"layui-input\" type=\"text\" placeholder=\"邮箱帐号\" style=\"width: 332px;\"/>
              </div>
              <div class=\"layui-form-mid layui-word-aux\"></div>
            </div>
            <div class=\"layui-form-item\">
              <label class=\"layui-form-label\">登录密码</label>
              <div class=\"layui-input-inline\" style=\"width: 332px;\">
                <input value=\"111111\" name=\"password\" id=\"password\" lay-verify=\"password\" autocomplete=\"off\" class=\"layui-input\" type=\"password\" placeholder=\"登录密码\" style=\"width: 332px;\"/>
              </div>
              <div class=\"layui-form-mid layui-word-aux\"></div>
            </div>
            <div class=\"layui-form-item reg_type reg_type_mobile\">
              <label class=\"layui-form-label\">手机号</label>
              <div class=\"layui-input-inline\" style=\"width: 332px;\">
                <input value=\"17897726969\" name=\"mobile\" id=\"mobile\" lay-verify=\"mobile\" autocomplete=\"off\" class=\"layui-input\" type=\"text\" placeholder=\"手机号\" style=\"width: 332px;\"/>
              </div>
              <div class=\"layui-form-mid layui-word-aux\"></div>
            </div>
            <div class=\"layui-form-item\">
              <label class=\"layui-form-label\">图形验证码</label>
              <div class=\"layui-input-inline\" style=\"width: 202px;\">
                <input value=\"111111\" name=\"recaptcha\" id=\"recaptcha\" class=\"layui-input\" type=\"text\" placeholder=\"图形验证码\" style=\"width: 202px;\"/>
              </div>
              <div class=\"layui-input-inline\">
                <div class=\"security-code\">
                  <img class=\"verify_img\" src=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("common_recaptcha_index");
        echo "\" height=\"34px\"
                       width=\"90px\"
                       onclick=\"this.src='";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("common_recaptcha_index");
        echo "?&'+Math.random();\"
                       title=\"点击获取\"/>
                </div>
              </div>
            </div>

            <div class=\"layui-form-item\">
              <label class=\"layui-form-label\">短信验证码</label>
              <div class=\"layui-input-inline\" style=\"width: 202px;\">
                <input value=\"111111\" name=\"verify_code\" placeholder=\"请输入验证码\" autocomplete=\"off\" class=\"layui-input\" type=\"text\" style=\"width: 202px;\"/>
              </div>

              <div class=\"layui-input-inline\" style=\"width: 202px;\">
                <button type=\"button\" id=\"email-button\" style=\"width: 120px;padding: 0px!important;\"
                        onclick=\"send_verify_code()\"
                        class=\"layui-btn layui-btn-warm\">
                  <span class=\"s-white\" id=\"email-time\"></span><span id=\"email-time-span\">发送验证码</span>
                </button>
              </div>
            </div>
            <div style=\"padding-left: 110px; margin-top: 10px;\">
              <input checked id=\"agree\" name=\"agree\" value=\"yes\" title=\"我已阅读并同意相关服务条款和隐私政策\" type=\"checkbox\" class=\"sisi-checkbox\">
              <span>我已阅读并同意相关<a href=\"javascript:void (0);\" style=\"color: #00a0e9\" onclick=\"agreement()\">《服务条款和隐私政策》</a></span>
            </div>
            <div style=\"padding-left: 110px; margin-top: 40px;\">
              <input type=\"hidden\" name=\"reg_type\" value=\"email\">
              <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("user_register"), "html", null, true);
        echo "\">
              <button type=\"button\" class=\"layui-btn reg-btn\" style=\"padding: 0 25px;\" id=\"btn-reg-now\">立即注册</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- /填写账户信息 -->
    <!-- 注册成功 -->
    <div class=\"register-item-2\" style=\"display: none;text-align: center;\">
      <p id=\"info-box\"></p>
      <p style=\"text-align: center;margin-top: 50px;\">
        <a href=\"";
        // line 172
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" id=\"btn-next-action\" class=\"layui-btn\">马上登录</a></p>
    </div>
    <!-- /注册成功 -->
  </div>
</div>

<script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/js/common-verify.js\"></script>
<script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/drag/drag.js\"></script>
<script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/js/passwdverify.js\"></script>
<script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.form.min.js\"></script>

";
        // line 184
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 184, $this->source); })()), "environment", array()) == "dev")) {
            // line 185
            echo "<script src=\"/assets/common/city-picker/city-picker-dev.js\"></script>
";
        } else {
            // line 187
            echo "<script type='text/javascript' src='//foxdou-public.oss-cn-shenzhen.aliyuncs.com/city-picker/city-picker.js'></script>
";
        }
        // line 189
        echo "<script>
    function toggle_reg_type(type) {
        \$('.reg_type').css('display', 'none');
        \$('.reg_type_' + type).css('display', 'block');
        \$('input[reg_type]').val(type);
    }

    function send_verify_code() {
        var type         = \$('input[name=reg_type]').val();
        var target_field = '#' + type;
        var target_value = \$(target_field).val();
        send_code(type, \$('#recaptcha').val(), target_value);
    }
</script>

<script>
    var picker = new layui.citypicker(\"#city-picker\", {
        // simple: false, // 是否使用简称，比如北京市简称北京
        // responsive: false,
        // placeholder: '请选择省/市/区',
        // level: 'district',// 级别
        // province_widget_name: 'province_code',//input hidden 的name属性
        // city_widget_name: 'city_code',    //input hidden 的name属性
        // district_widget_name: 'district_code',//input hidden 的name属性
        province_code: '110000',// 默认省份名称
        city_code: '110100',// 默认地市名称
        district_code: '110109'// 默认区县名称
    });

    var form = layui.form.render();

    //注入新的验证规格
    form.verify({
        email:               function (value) {
            var re = /^([a-zA-Z0-9_.\\-])+\\@(([a-zA-Z0-9\\-])+\\.)+([a-zA-Z0-9]{2,4})+\$/;
            if (!re.test(value)) {
                return '邮箱格式不正确';
            }

            err = check_reg_number('";
        // line 228
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_user_check_reg_email");
        echo "?email=' + value, 'email', value, '邮箱已被注册');
            if (err) {
                return err;
            }
        },
        mobile:              function (value) {
            var re = /^1\\d{10}\$/;
            if (!re.test(value)) {
                return '请输入正确的手机号';
            }

            if (\$('#phone_is_user').attr('checked')) {
                var err = check_reg_number('";
        // line 240
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_user_check_reg_mobile");
        echo "', 'mobile', value, '手机号已被注册');
                if (err) {
                    return err;
                }
            }
        },
        id_num:              function (value) {
            var err = checkIdcard(value);
            if (err.indexOf(\"验证通过\") === -1) {
                return err;
            }
        },
        business_license_no: function (value) {
            var err = verifyLicenseId(value);
            if (err.indexOf(\"格式正确\") === -1) {
                return err;
            }
        }
    });
    \$('.layui-form-checkbox').remove();
    \$('.sisi-checkbox').show();

    bind_verify(\$('form'), form);

    \$('#btn-reg-now').click(function () {
        if (\$(\"input[name='verify_code']\").val().length === 0) {
            layer.msg('请先填写正确的信息');
            return;
        }
        if (\$('#agree').attr('checked') === false) {
            layer.msg('注册必须同意服务条款并勾选同意');
            return;
        }

        \$('.layui-word-aux').html('');

        //提交数据
        \$.ajax({
            type:     'post',
            dataType: 'json',
            url:      '";
        // line 280
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_user_register_business");
        echo "',
            data:     \$('#business_reg_form').serialize(),
            error:    function (xhr, status, error) {
                layer.msg('请求失败');
            },
            success:  function (data) {
                var errors = data.errors;
                if (errors) {
                    \$.each(errors, function (k, v) {
                        var errorMsg = /^[a-zA-Z0-9.]+\$/.test(v) ? '填写错误' : v;
                        createAlertMsg(\$('input[name=' + k + ']'), errorMsg, false);
                    });

                    if (errors.province_code || errors.city_code || errors.district_code) {
                        createAlertMsg(\$('#city-picker'), '请选择企业所在地', false);
                    }
                }

                if (!data.status) {
                    \$('#next_verify_img').click();
                    layer.msg(data.msg);
                    return;
                }

                \$('#info-box').html(data.content);
                \$('.register-item-1').css('display', 'none');
                \$('.register-item-2').css('display', 'block');

                if (!data.activated) {
                    \$('#btn-next-action').attr('href', '";
        // line 309
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontpage");
        echo "');
                    \$('#btn-next-action').html('返回首页');
                }

            }
        });
    });

    \$('#phone_is_user').click(function () {
        _verify(\$('#bind_mobile'), form);
    });

    \$('form').submit(function () {
        if (!check_submit(\$('.register-item-2'), form)) {
            return false;
        }

        var form_data = \$(this).serializeArray();
        for (var key in form_data) {
            if (form_data[key].name == 'password') {
                var password = form_data[key].value = form_data[key].value;
            }
            if (form_data[key].name == 'affirm_password') {
                var key_affirm_password = key;
            }
            if (form_data[key].name == 'pay_password') {
                var pay_password = form_data[key].value = form_data[key].value;
            }
            if (form_data[key].name == 'pay_affirm_password') {
                var key_password_confirm = key;

            }
        }
        form_data[key_affirm_password].value  = password;
        form_data[key_password_confirm].value = pay_password;

        \$.post(\$(this).attr('action'), form_data, function (data) {
            if (data.status) {
                \$('.register-item-1').css('display', 'none');
                \$('.register-item-2').css('display', 'none');
                \$('.register-item-3').css('display', 'block');
                \$('.reg-bar').eq(0).removeClass('reg-this');
                \$('.reg-bar').eq(1).removeClass('reg-this');
                \$('.reg-bar').eq(2).addClass('reg-this');
                \$('#info-box').html(data.content);
            }
            if (!data.status) {
                layer.msg(data.msg);
            }
        }, 'json');
        return false;
    });
</script>


";
        // line 364
        $this->loadTemplate("/Common/User/register__footer.twig", "Passport/Register/registerBusiness.twig", 364)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Passport/Register/registerBusiness.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 364,  370 => 309,  338 => 280,  295 => 240,  280 => 228,  239 => 189,  235 => 187,  231 => 185,  229 => 184,  215 => 172,  200 => 160,  171 => 134,  166 => 132,  37 => 5,  35 => 4,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include \"/Common/User/register__header.twig\" %}

<div id=\"agreements\" style=\"display: none; padding: 20px;\">
  {% include \"/Common/User/register__agreements.twig\" %}
</div>

<style>
  .layui-input-inline.error {
    border: solid 1px red;
  }

  .register-item-2 .layui-form-label{width: 90px;}
  .register-item-2 .layui-input-block input{width: 510px;}

  /*新增的样式*/
  .register-content {padding-left: 280px;}
  .layui-col-left .layui-form, .layui-col-right .layui-form {margin-top: 30px;}
  .layui-col-left .layui-input-inline, .layui-col-right .layui-input-inline {width: 260px;}
  .layui-col-left .layui-select-title, .layui-col-right .layui-select-title {width: auto;}
  .layui-cols-title {margin-left: -30px; border-bottom: 2px solid #eee;margin-bottom: 20px;}
  .layui-cols-title h3 {display: inline-block; font-weight: bold; color: #777; font-size: 15px;}
  .layui-cols-title span {padding-left: 15px; font-size: 13px; line-height: 24px; color: #999;}

</style>
<div class=\"register-main\" style=\"margin-top: 20px;\">
  <div class=\"register-title\" style=\"text-align: center;\">
    <h2>企业注册</h2>
  </div>
  <div class=\"register-content\">
    <form id=\"business_reg_form\" class=\"layui-form\" style=\"margin-top: 10px;\">
      <div class=\"register-item-1\" style=\"display: block;\">
        <div class=\"layui-row\">
          <div class=\"layui-col-xs12 layui-col-left\">
            <div class=\"layui-cols-title\">
              <h3>1. 企业资料</h3>
              <span>请填写企业相关信息</span>
            </div>
            <div class=\"layui-form-item\">
              <label class=\"layui-form-label\" for=\"business_type\">企业类型</label>
              <div class=\"layui-input-inline\" style=\"width: 332px;\">
                <select id=\"business_type\" name=\"business_type\" lay-filter=\"business_type\" lay-verify=\"required\" class=\"layui-input\">
                  <option value=\"\">请选择企业类型</option>
                  <option value=\"1\" selected>民营企业</option>
                  <option value=\"2\">个体经营</option>
                  <option value=\"3\">有限责任公司</option>
                  <option value=\"4\">股份制公司</option>
                  <option value=\"5\">三资企业</option>
                  <option value=\"6\">集体企业</option>
                  <option value=\"7\">中外合资企业</option>
                  <option value=\"8\">国有单位</option>
                  <option value=\"9\">事业单位</option>
                </select>
              </div>
              <div class=\"layui-form-mid layui-word-aux\"></div>
            </div>
            <div class=\"layui-form-item\">
              <label class=\"layui-form-label\">企业名称</label>
              <div class=\"layui-input-inline\" style=\"width: 332px;\">
                <input value=\"你行我动\" name=\"business_name\" lay-verify=\"required\" autocomplete=\"off\" placeholder=\"请输入公司名称\" class=\"layui-input\" type=\"text\" style=\"width: 332px;\"/>
              </div>
              <div class=\"layui-form-mid layui-word-aux\"></div>
            </div>
            <div class=\"layui-form-item\">
              <label class=\"layui-form-label\">营业执照</label>
              <div class=\"layui-input-inline\" style=\"width: 332px;\">
                <input value=\"914501003403198946\" name=\"business_license_no\" autocomplete=\"off\" lay-verify=\"business_license_no\" placeholder=\"请输入营业执照注册码\" class=\"layui-input\" type=\"text\" style=\"width: 332px;\"/>
              </div>
              <div class=\"layui-form-mid layui-word-aux\"></div>
            </div>
            <div class=\"layui-form-item\">
              <label class=\"layui-form-label\">法人姓名</label>
              <div class=\"layui-input-inline\" style=\"width: 332px;\">
                <input value=\"陈亚莉\" name=\"legal_person_name\" id=\"legal_person_name\" lay-verify=\"required\" autocomplete=\"off\" placeholder=\"请输法人姓名\" class=\"layui-input\" type=\"text\" style=\"width: 332px;\"/>
              </div>
              <div class=\"layui-form-mid layui-word-aux\"></div>
            </div>
            <div class=\"layui-form-item\">
              <label class=\"layui-form-label\">法人身份证</label>
              <div class=\"layui-input-inline\" style=\"width: 332px;\">
                <input value=\"350103198705202325\" name=\"legal_person_id_num\" style=\"width: 332px;\" id=\"legal_person_id_num\" lay-verify=\"id_num\" placeholder=\"请输入法人身份证号码\" autocomplete=\"off\" class=\"layui-input\" type=\"tel\"/>
              </div>
              <div class=\"layui-form-mid layui-word-aux id_num_msg\"></div>
            </div>
            <div class=\"layui-form-item select-box\">
              <label class=\"layui-form-label\">企业所在地</label>
              <div class=\"layui-input-inline\" style=\"width:332px\">
                <input value=\"\" type=\"text\" autocomplete=\"on\" class=\"layui-input\" id=\"city-picker\" name=\"city-picker\" readonly=\"readonly\" data-toggle=\"city-picker\" placeholder=\"请选择\">
              </div>
              <div class=\"layui-form-mid layui-word-aux\"></div>
            </div>
            <div class=\"layui-form-item\">
              <label class=\"layui-form-label\">详细地址</label>
              <div class=\"layui-input-inline\" style=\"width: 332px;\">
                <input value=\"test\" name=\"business_address\" lay-verify=\"required\" class=\"layui-input\" placeholder=\"请填写营业执照上的地址\" type=\"text\"/>
              </div>
              <div class=\"layui-form-mid layui-word-aux\"></div>
            </div>
          </div>
          <div class=\"layui-col-xs12 layui-col-right\" style=\"margin-top: 30px;\">
            <div class=\"layui-cols-title\">
              <h3>2. 登录信息</h3>
              <span>请输入登录邮箱、手机号、密码等信息</span>
            </div>
            <div class=\"layui-form-item reg_type reg_type_email\">
              <label class=\"layui-form-label\">电子邮箱</label>
              <div class=\"layui-input-inline\" style=\"width: 332px;\">
                <input value=\"test@edge.ac\" name=\"email\" id=\"email\" lay-verify=\"email\" autocomplete=\"off\" class=\"layui-input\" type=\"text\" placeholder=\"邮箱帐号\" style=\"width: 332px;\"/>
              </div>
              <div class=\"layui-form-mid layui-word-aux\"></div>
            </div>
            <div class=\"layui-form-item\">
              <label class=\"layui-form-label\">登录密码</label>
              <div class=\"layui-input-inline\" style=\"width: 332px;\">
                <input value=\"111111\" name=\"password\" id=\"password\" lay-verify=\"password\" autocomplete=\"off\" class=\"layui-input\" type=\"password\" placeholder=\"登录密码\" style=\"width: 332px;\"/>
              </div>
              <div class=\"layui-form-mid layui-word-aux\"></div>
            </div>
            <div class=\"layui-form-item reg_type reg_type_mobile\">
              <label class=\"layui-form-label\">手机号</label>
              <div class=\"layui-input-inline\" style=\"width: 332px;\">
                <input value=\"17897726969\" name=\"mobile\" id=\"mobile\" lay-verify=\"mobile\" autocomplete=\"off\" class=\"layui-input\" type=\"text\" placeholder=\"手机号\" style=\"width: 332px;\"/>
              </div>
              <div class=\"layui-form-mid layui-word-aux\"></div>
            </div>
            <div class=\"layui-form-item\">
              <label class=\"layui-form-label\">图形验证码</label>
              <div class=\"layui-input-inline\" style=\"width: 202px;\">
                <input value=\"111111\" name=\"recaptcha\" id=\"recaptcha\" class=\"layui-input\" type=\"text\" placeholder=\"图形验证码\" style=\"width: 202px;\"/>
              </div>
              <div class=\"layui-input-inline\">
                <div class=\"security-code\">
                  <img class=\"verify_img\" src=\"{{ path('common_recaptcha_index') }}\" height=\"34px\"
                       width=\"90px\"
                       onclick=\"this.src='{{ path('common_recaptcha_index') }}?&'+Math.random();\"
                       title=\"点击获取\"/>
                </div>
              </div>
            </div>

            <div class=\"layui-form-item\">
              <label class=\"layui-form-label\">短信验证码</label>
              <div class=\"layui-input-inline\" style=\"width: 202px;\">
                <input value=\"111111\" name=\"verify_code\" placeholder=\"请输入验证码\" autocomplete=\"off\" class=\"layui-input\" type=\"text\" style=\"width: 202px;\"/>
              </div>

              <div class=\"layui-input-inline\" style=\"width: 202px;\">
                <button type=\"button\" id=\"email-button\" style=\"width: 120px;padding: 0px!important;\"
                        onclick=\"send_verify_code()\"
                        class=\"layui-btn layui-btn-warm\">
                  <span class=\"s-white\" id=\"email-time\"></span><span id=\"email-time-span\">发送验证码</span>
                </button>
              </div>
            </div>
            <div style=\"padding-left: 110px; margin-top: 10px;\">
              <input checked id=\"agree\" name=\"agree\" value=\"yes\" title=\"我已阅读并同意相关服务条款和隐私政策\" type=\"checkbox\" class=\"sisi-checkbox\">
              <span>我已阅读并同意相关<a href=\"javascript:void (0);\" style=\"color: #00a0e9\" onclick=\"agreement()\">《服务条款和隐私政策》</a></span>
            </div>
            <div style=\"padding-left: 110px; margin-top: 40px;\">
              <input type=\"hidden\" name=\"reg_type\" value=\"email\">
              <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('user_register') }}\">
              <button type=\"button\" class=\"layui-btn reg-btn\" style=\"padding: 0 25px;\" id=\"btn-reg-now\">立即注册</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- /填写账户信息 -->
    <!-- 注册成功 -->
    <div class=\"register-item-2\" style=\"display: none;text-align: center;\">
      <p id=\"info-box\"></p>
      <p style=\"text-align: center;margin-top: 50px;\">
        <a href=\"{{ path('login') }}\" id=\"btn-next-action\" class=\"layui-btn\">马上登录</a></p>
    </div>
    <!-- /注册成功 -->
  </div>
</div>

<script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/js/common-verify.js\"></script>
<script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/drag/drag.js\"></script>
<script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/js/passwdverify.js\"></script>
<script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.form.min.js\"></script>

{#<script src=\"https://foxdou-public.oss-cn-shenzhen.aliyuncs.com/city-picker/city-picker.data.js\"></script>#}
{% if app.environment == 'dev' %}
<script src=\"/assets/common/city-picker/city-picker-dev.js\"></script>
{% else %}
<script type='text/javascript' src='//foxdou-public.oss-cn-shenzhen.aliyuncs.com/city-picker/city-picker.js'></script>
{% endif %}
<script>
    function toggle_reg_type(type) {
        \$('.reg_type').css('display', 'none');
        \$('.reg_type_' + type).css('display', 'block');
        \$('input[reg_type]').val(type);
    }

    function send_verify_code() {
        var type         = \$('input[name=reg_type]').val();
        var target_field = '#' + type;
        var target_value = \$(target_field).val();
        send_code(type, \$('#recaptcha').val(), target_value);
    }
</script>

<script>
    var picker = new layui.citypicker(\"#city-picker\", {
        // simple: false, // 是否使用简称，比如北京市简称北京
        // responsive: false,
        // placeholder: '请选择省/市/区',
        // level: 'district',// 级别
        // province_widget_name: 'province_code',//input hidden 的name属性
        // city_widget_name: 'city_code',    //input hidden 的name属性
        // district_widget_name: 'district_code',//input hidden 的name属性
        province_code: '110000',// 默认省份名称
        city_code: '110100',// 默认地市名称
        district_code: '110109'// 默认区县名称
    });

    var form = layui.form.render();

    //注入新的验证规格
    form.verify({
        email:               function (value) {
            var re = /^([a-zA-Z0-9_.\\-])+\\@(([a-zA-Z0-9\\-])+\\.)+([a-zA-Z0-9]{2,4})+\$/;
            if (!re.test(value)) {
                return '邮箱格式不正确';
            }

            err = check_reg_number('{{ path('passport_user_check_reg_email') }}?email=' + value, 'email', value, '邮箱已被注册');
            if (err) {
                return err;
            }
        },
        mobile:              function (value) {
            var re = /^1\\d{10}\$/;
            if (!re.test(value)) {
                return '请输入正确的手机号';
            }

            if (\$('#phone_is_user').attr('checked')) {
                var err = check_reg_number('{{ path('passport_user_check_reg_mobile') }}', 'mobile', value, '手机号已被注册');
                if (err) {
                    return err;
                }
            }
        },
        id_num:              function (value) {
            var err = checkIdcard(value);
            if (err.indexOf(\"验证通过\") === -1) {
                return err;
            }
        },
        business_license_no: function (value) {
            var err = verifyLicenseId(value);
            if (err.indexOf(\"格式正确\") === -1) {
                return err;
            }
        }
    });
    \$('.layui-form-checkbox').remove();
    \$('.sisi-checkbox').show();

    bind_verify(\$('form'), form);

    \$('#btn-reg-now').click(function () {
        if (\$(\"input[name='verify_code']\").val().length === 0) {
            layer.msg('请先填写正确的信息');
            return;
        }
        if (\$('#agree').attr('checked') === false) {
            layer.msg('注册必须同意服务条款并勾选同意');
            return;
        }

        \$('.layui-word-aux').html('');

        //提交数据
        \$.ajax({
            type:     'post',
            dataType: 'json',
            url:      '{{ path('passport_user_register_business') }}',
            data:     \$('#business_reg_form').serialize(),
            error:    function (xhr, status, error) {
                layer.msg('请求失败');
            },
            success:  function (data) {
                var errors = data.errors;
                if (errors) {
                    \$.each(errors, function (k, v) {
                        var errorMsg = /^[a-zA-Z0-9.]+\$/.test(v) ? '填写错误' : v;
                        createAlertMsg(\$('input[name=' + k + ']'), errorMsg, false);
                    });

                    if (errors.province_code || errors.city_code || errors.district_code) {
                        createAlertMsg(\$('#city-picker'), '请选择企业所在地', false);
                    }
                }

                if (!data.status) {
                    \$('#next_verify_img').click();
                    layer.msg(data.msg);
                    return;
                }

                \$('#info-box').html(data.content);
                \$('.register-item-1').css('display', 'none');
                \$('.register-item-2').css('display', 'block');

                if (!data.activated) {
                    \$('#btn-next-action').attr('href', '{{ path('frontpage') }}');
                    \$('#btn-next-action').html('返回首页');
                }

            }
        });
    });

    \$('#phone_is_user').click(function () {
        _verify(\$('#bind_mobile'), form);
    });

    \$('form').submit(function () {
        if (!check_submit(\$('.register-item-2'), form)) {
            return false;
        }

        var form_data = \$(this).serializeArray();
        for (var key in form_data) {
            if (form_data[key].name == 'password') {
                var password = form_data[key].value = form_data[key].value;
            }
            if (form_data[key].name == 'affirm_password') {
                var key_affirm_password = key;
            }
            if (form_data[key].name == 'pay_password') {
                var pay_password = form_data[key].value = form_data[key].value;
            }
            if (form_data[key].name == 'pay_affirm_password') {
                var key_password_confirm = key;

            }
        }
        form_data[key_affirm_password].value  = password;
        form_data[key_password_confirm].value = pay_password;

        \$.post(\$(this).attr('action'), form_data, function (data) {
            if (data.status) {
                \$('.register-item-1').css('display', 'none');
                \$('.register-item-2').css('display', 'none');
                \$('.register-item-3').css('display', 'block');
                \$('.reg-bar').eq(0).removeClass('reg-this');
                \$('.reg-bar').eq(1).removeClass('reg-this');
                \$('.reg-bar').eq(2).addClass('reg-this');
                \$('#info-box').html(data.content);
            }
            if (!data.status) {
                layer.msg(data.msg);
            }
        }, 'json');
        return false;
    });
</script>


{% include \"/Common/User/register__footer.twig\" %}
", "Passport/Register/registerBusiness.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\Register\\registerBusiness.twig");
    }
}
