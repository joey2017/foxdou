<?php

/* Passport/Register/registerIndividual.twig */
class __TwigTemplate_0aa23c6abb42185167232d85155632ef09094cd5104413f4b397a080b02b863c extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/Register/registerIndividual.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/Register/registerIndividual.twig"));

        // line 1
        $this->loadTemplate("/Passport/Register/register__header.twig", "Passport/Register/registerIndividual.twig", 1)->display($context);
        // line 2
        echo "
<div id=\"agreements\" style=\"display: none; padding: 20px;\">
  ";
        // line 4
        $this->loadTemplate("/Passport/Register/register__agreements.twig", "Passport/Register/registerIndividual.twig", 4)->display($context);
        // line 5
        echo "</div>

<div class=\"register-main\" style=\"margin-top: 20px;\">
  <div class=\"register-title\" style=\"text-align: center;\">
  <h2>个人注册</h2>
  </div>
  <div class=\"register-content\">
    <form class=\"layui-form\" style=\"margin-top: 10px;\">
      <!-- 验证身份信息 -->
      <div class=\"register-step-1\" style=\"display: block;\">
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">手机号码</label>
          <div class=\"layui-input-inline\">
            <select>
              <option value=\"中国大陆居民\" selected=\"\">中国大陆 &nbsp;+86</option>
            </select>
          </div>
          <div class=\"layui-input-inline\"  style=\"width: 202px;\">
            <input name=\"mobile\" id=\"mobile\" lay-verify=\"mobile\" placeholder=\"请输入您的手机号码\"
                   autocomplete=\"off\"
                   class=\"layui-input\" type=\"tel\" value=\"17897726969\" required>
          </div>
          <div class=\"layui-form-mid layui-word-aux\"></div>
        </div>
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">图片验证码</label>
          <div class=\"layui-input-inline\" style=\"width: 202px;\">
            <input name=\"recaptcha\" id=\"recaptcha\" value=\"111111\" placeholder=\"\" class=\"layui-input\" type=\"text\" required/>
          </div>
          <div class=\"layui-input-inline\">
            <div class=\"security-code\">
              <img class=\"verify_img\" src=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("common_recaptcha_index");
        echo "\" height=\"34px\"
                   width=\"90px\"
                   onclick=\"this.src='";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("common_recaptcha_index");
        echo "?&'+Math.random();\"
                   title=\"点击获取\"/>
            </div>
          </div>
        </div>
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">手机验证码</label>
          <div class=\"layui-input-inline\" style=\"width: 202px;\">
            <input name=\"verify_code\" placeholder=\"请输入手机验证码\" autocomplete=\"off\" class=\"layui-input\" type=\"text\" required>
          </div>
          <div class=\"layui-input-inline\">
            <button type=\"button\" id=\"send-mobile-code\" style=\"width: 120px;padding: 0px!important;\"
                    onclick=\"send_code('mobile', \$('#recaptcha').val(),\$('#mobile').val());\"
                    class=\"layui-btn layui-btn-warm\">
              <span class=\"s-white\" id=\"mobile-time\"></span><span id=\"mobile-time-span\">发送手机验证码</span>
            </button>
          </div>
          <div class=\"layui-form-mid layui-word-aux\"></div>
        </div>
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">登录密码</label>
          <div class=\"layui-input-inline\" style=\"width: 202px;\">
            <input type=\"password\" name=\"password\" placeholder=\"请输入登录密码\" autocomplete=\"off\" class=\"layui-input\" style=\"width: 202px;\" required>
          </div>
          <div class=\"layui-form-mid layui-word-aux\"></div>
        </div>
        ";
        // line 65
        echo "          ";
        // line 66
        echo "          ";
        // line 67
        echo "            ";
        // line 68
        echo "                   ";
        // line 69
        echo "          ";
        // line 70
        echo "          ";
        // line 71
        echo "        ";
        // line 72
        echo "
        ";
        // line 73
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 73, $this->source); })()), "passport", array()), "individual_requires_identity", array())) {
            // line 74
            echo "        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">真实姓名</label>
          <div class=\"layui-input-inline\" style=\"width: 202px;\">
            <input type=\"text\" name=\"real_name\" placeholder=\"真实姓名\" autocomplete=\"off\" class=\"layui-input\" style=\"width: 202px;\" required value=\"陈亚莉\">
          </div>
          <div class=\"layui-form-mid layui-word-aux\"></div>
        </div>
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">身份证号</label>
          <div class=\"layui-input-inline\" style=\"width: 202px;\">
            <input type=\"text\" name=\"id_num\" placeholder=\"请输入您的身份证号\" autocomplete=\"off\" class=\"layui-input\" style=\"width: 202px;\" required lay-verify=\"id_num\" value=\"350103198705202325\">
          </div>
          <div class=\"layui-form-mid layui-word-aux\"></div>
        </div>
        ";
        }
        // line 89
        echo "
        <div style=\"padding-left: 110px; margin-top: 10px;\">
          <input id=\"_token\" name=\"_token\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("user_register"), "html", null, true);
        echo "\" type=\"hidden\" >
          <input id=\"agree\" name=\"agree\" value=\"yes\" title=\"我已阅读并同意相关服务条款和隐私政策\" type=\"checkbox\" class=\"sisi-checkbox\" >
          <span>我已阅读并同意相关<a href=\"javascript:void (0);\" style=\"color: #00a0e9\" onclick=\"agreement();\">《服务条款和隐私政策》</a></span>
        </div>
        <div style=\"padding-left: 110px; margin-top: 40px;\">
          <button type=\"submit\" class=\"layui-btn\" style=\"padding: 0 25px;\">立即注册</button>
        </div>
      </div>
    </form>
    <!-- /填写账户信息 -->
    <!-- 注册成功 -->
    <div class=\"register-step-2\" style=\"display: none; text-align: center;\">
      <p id=\"info-box\"></p>
      <p style=\"text-align: center;margin-top: 50px;\">
        <a href=\"";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["return_url"]) || array_key_exists("return_url", $context) ? $context["return_url"] : (function () { throw new Twig_Error_Runtime('Variable "return_url" does not exist.', 105, $this->source); })()), "html", null, true);
        echo "\" class=\"layui-btn\" id=\"btn-next-action\">马上登录</a>
      </p>
    </div>
    <!-- /注册成功 -->
  </div>
</div>

<script>

    var form;
    layui.use('form', function () {
        form = layui.form;
        layui.form.verify({
            mobile: function (value) {
                var re = /^1\\d{10}\$/;
                if (!re.test(value)) {
                    return '请输入正确的手机号';
                }

                err = check_reg_number('";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_register_check_reg_mobile");
        echo "', 'mobile', value, '手机号已被注册');
                if (err) {
                    return err;
                }
            },
            id_num:    function (value) {
                var err = checkIdcard(value);
                if (err.indexOf(\"验证通过\") === -1) {
                    return err;
                }
            }
        });
        \$('.layui-form-checkbox').remove();
        \$('.sisi-checkbox').show();
        bind_verify(\$('form'), form);
    });

    \$('form').submit(function () {
        if (\$('#agree').attr('checked') !== 'checked') {
            layer.msg('请先同意服务条款并勾选同意');
            return false;
        }

        if (!check_submit(\$('.register-step-1'), form)) {
            return false;
        }

        var form_data = \$(this).serializeArray();
        \$.post('";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_register_individual");
        echo "', form_data, function (data) {
            if (data.status) {
                \$('.register-step-1').css('display', 'none');
                \$('.register-step-2').css('display', 'block');
                \$('#info-box').html(data.content);

                if(!data.activated) {
                    \$('#btn-next-action').attr('href', '";
        // line 159
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontpage");
        echo "');
                    \$('#btn-next-action').html('返回首页');
                }
            }
            if (data.msg) {
                layer.msg(data.msg);
            }
        }, 'json');
        return false;
    });

</script>

";
        // line 172
        $this->loadTemplate("/Passport/Register/register__footer.twig", "Passport/Register/registerIndividual.twig", 172)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Passport/Register/registerIndividual.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 172,  224 => 159,  214 => 152,  183 => 124,  161 => 105,  144 => 91,  140 => 89,  123 => 74,  121 => 73,  118 => 72,  116 => 71,  114 => 70,  112 => 69,  110 => 68,  108 => 67,  106 => 66,  104 => 65,  75 => 38,  70 => 36,  37 => 5,  35 => 4,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include \"/Passport/Register/register__header.twig\" %}

<div id=\"agreements\" style=\"display: none; padding: 20px;\">
  {% include \"/Passport/Register/register__agreements.twig\" %}
</div>

<div class=\"register-main\" style=\"margin-top: 20px;\">
  <div class=\"register-title\" style=\"text-align: center;\">
  <h2>个人注册</h2>
  </div>
  <div class=\"register-content\">
    <form class=\"layui-form\" style=\"margin-top: 10px;\">
      <!-- 验证身份信息 -->
      <div class=\"register-step-1\" style=\"display: block;\">
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">手机号码</label>
          <div class=\"layui-input-inline\">
            <select>
              <option value=\"中国大陆居民\" selected=\"\">中国大陆 &nbsp;+86</option>
            </select>
          </div>
          <div class=\"layui-input-inline\"  style=\"width: 202px;\">
            <input name=\"mobile\" id=\"mobile\" lay-verify=\"mobile\" placeholder=\"请输入您的手机号码\"
                   autocomplete=\"off\"
                   class=\"layui-input\" type=\"tel\" value=\"17897726969\" required>
          </div>
          <div class=\"layui-form-mid layui-word-aux\"></div>
        </div>
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">图片验证码</label>
          <div class=\"layui-input-inline\" style=\"width: 202px;\">
            <input name=\"recaptcha\" id=\"recaptcha\" value=\"111111\" placeholder=\"\" class=\"layui-input\" type=\"text\" required/>
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
          <label class=\"layui-form-label\">手机验证码</label>
          <div class=\"layui-input-inline\" style=\"width: 202px;\">
            <input name=\"verify_code\" placeholder=\"请输入手机验证码\" autocomplete=\"off\" class=\"layui-input\" type=\"text\" required>
          </div>
          <div class=\"layui-input-inline\">
            <button type=\"button\" id=\"send-mobile-code\" style=\"width: 120px;padding: 0px!important;\"
                    onclick=\"send_code('mobile', \$('#recaptcha').val(),\$('#mobile').val());\"
                    class=\"layui-btn layui-btn-warm\">
              <span class=\"s-white\" id=\"mobile-time\"></span><span id=\"mobile-time-span\">发送手机验证码</span>
            </button>
          </div>
          <div class=\"layui-form-mid layui-word-aux\"></div>
        </div>
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">登录密码</label>
          <div class=\"layui-input-inline\" style=\"width: 202px;\">
            <input type=\"password\" name=\"password\" placeholder=\"请输入登录密码\" autocomplete=\"off\" class=\"layui-input\" style=\"width: 202px;\" required>
          </div>
          <div class=\"layui-form-mid layui-word-aux\"></div>
        </div>
        {#<div class=\"layui-form-item\">#}
          {#<label class=\"layui-form-label\">确认密码</label>#}
          {#<div class=\"layui-input-inline\">#}
            {#<input type=\"password\" name=\"password_confirm\" placeholder=\"请再次输入登录密码\"#}
                   {#autocomplete=\"off\" class=\"layui-input\" style=\"width: 250px;\">#}
          {#</div>#}
          {#<div class=\"layui-form-mid layui-word-aux\"></div>#}
        {#</div>#}

        {% if settings.passport.individual_requires_identity %}
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">真实姓名</label>
          <div class=\"layui-input-inline\" style=\"width: 202px;\">
            <input type=\"text\" name=\"real_name\" placeholder=\"真实姓名\" autocomplete=\"off\" class=\"layui-input\" style=\"width: 202px;\" required value=\"陈亚莉\">
          </div>
          <div class=\"layui-form-mid layui-word-aux\"></div>
        </div>
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">身份证号</label>
          <div class=\"layui-input-inline\" style=\"width: 202px;\">
            <input type=\"text\" name=\"id_num\" placeholder=\"请输入您的身份证号\" autocomplete=\"off\" class=\"layui-input\" style=\"width: 202px;\" required lay-verify=\"id_num\" value=\"350103198705202325\">
          </div>
          <div class=\"layui-form-mid layui-word-aux\"></div>
        </div>
        {% endif %}

        <div style=\"padding-left: 110px; margin-top: 10px;\">
          <input id=\"_token\" name=\"_token\" value=\"{{ csrf_token('user_register') }}\" type=\"hidden\" >
          <input id=\"agree\" name=\"agree\" value=\"yes\" title=\"我已阅读并同意相关服务条款和隐私政策\" type=\"checkbox\" class=\"sisi-checkbox\" >
          <span>我已阅读并同意相关<a href=\"javascript:void (0);\" style=\"color: #00a0e9\" onclick=\"agreement();\">《服务条款和隐私政策》</a></span>
        </div>
        <div style=\"padding-left: 110px; margin-top: 40px;\">
          <button type=\"submit\" class=\"layui-btn\" style=\"padding: 0 25px;\">立即注册</button>
        </div>
      </div>
    </form>
    <!-- /填写账户信息 -->
    <!-- 注册成功 -->
    <div class=\"register-step-2\" style=\"display: none; text-align: center;\">
      <p id=\"info-box\"></p>
      <p style=\"text-align: center;margin-top: 50px;\">
        <a href=\"{{ return_url }}\" class=\"layui-btn\" id=\"btn-next-action\">马上登录</a>
      </p>
    </div>
    <!-- /注册成功 -->
  </div>
</div>

<script>

    var form;
    layui.use('form', function () {
        form = layui.form;
        layui.form.verify({
            mobile: function (value) {
                var re = /^1\\d{10}\$/;
                if (!re.test(value)) {
                    return '请输入正确的手机号';
                }

                err = check_reg_number('{{ path('passport_register_check_reg_mobile') }}', 'mobile', value, '手机号已被注册');
                if (err) {
                    return err;
                }
            },
            id_num:    function (value) {
                var err = checkIdcard(value);
                if (err.indexOf(\"验证通过\") === -1) {
                    return err;
                }
            }
        });
        \$('.layui-form-checkbox').remove();
        \$('.sisi-checkbox').show();
        bind_verify(\$('form'), form);
    });

    \$('form').submit(function () {
        if (\$('#agree').attr('checked') !== 'checked') {
            layer.msg('请先同意服务条款并勾选同意');
            return false;
        }

        if (!check_submit(\$('.register-step-1'), form)) {
            return false;
        }

        var form_data = \$(this).serializeArray();
        \$.post('{{ path('passport_register_individual') }}', form_data, function (data) {
            if (data.status) {
                \$('.register-step-1').css('display', 'none');
                \$('.register-step-2').css('display', 'block');
                \$('#info-box').html(data.content);

                if(!data.activated) {
                    \$('#btn-next-action').attr('href', '{{ path('frontpage') }}');
                    \$('#btn-next-action').html('返回首页');
                }
            }
            if (data.msg) {
                layer.msg(data.msg);
            }
        }, 'json');
        return false;
    });

</script>

{% include \"/Passport/Register/register__footer.twig\" %}
", "Passport/Register/registerIndividual.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\Register\\registerIndividual.twig");
    }
}
