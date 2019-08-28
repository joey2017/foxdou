<?php

/* Passport/Register/emailActivationPending.twig */
class __TwigTemplate_416a7f150a17e7a7a96a395f3aac492bab1ecb312ee1a019135f769df8096cac extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/Register/emailActivationPending.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/Register/emailActivationPending.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>邮箱地址验证 - 狐豆通行证</title>
    ";
        // line 6
        echo $this->extensions['App\Common\Twig\AppExtension']->useAssets(array(0 => "/assets/common/js/jquery.min.js", 1 => "/assets/common/js/axios.min.js", 2 => "/assets/common/layui/layui.all.js", 3 => "/assets/common/layui/css/layui.css", 4 => "/assets/passport/css/login.css"));
        // line 12
        echo "

    <style>
        .layadmin-user-login-main {
            width: 650px;
            margin: 0 auto;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
<div class=\"layadmin-tabspage-none\">
    <div class=\"layadmin-user-login layadmin-user-display-show\">
        <div class=\"layadmin-user-login-main\">
            <div class=\"layadmin-user-login-box layadmin-user-login-header\">
                <h2>邮箱地址验证</h2>
                    <p id=\"message\">";
        // line 29
        echo twig_escape_filter($this->env, (((isset($context["message"]) || array_key_exists("message", $context))) ? (_twig_default_filter((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 29, $this->source); })()), "")) : ("")), "html", null, true);
        echo "</p>
            </div>
            <div class=\"layadmin-user-login-box layadmin-user-login-body layui-form\">
                <form id=\"resend-email-form\" autocomplete=\"off\">
                    <div class=\" ui-toggle ui-toggle-change-email\">
                        <div class=\"layui-form-item\" id=\"error\" style=\"display: ";
        // line 34
        echo ((((isset($context["error"]) || array_key_exists("error", $context)) && (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 34, $this->source); })()))) ? ("block") : ("none"));
        echo "\">
                            <div class=\"foxdou-error-tip\">";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((((isset($context["error"]) || array_key_exists("error", $context))) ? (_twig_default_filter((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 35, $this->source); })()), "")) : (""))), "html", null, true);
        echo "</div>
                        </div>
                        <div id=\"email-input-box\" style=\"display: none;\">
                            <div class=\"layui-form-item\">
                                <label class=\"layadmin-user-login-icon layui-icon layui-icon-username\"></label>
                                <input type=\"text\" name=\"old_email\" value=\"\" class=\"layui-input\" placeholder=\"请输入旧邮箱\" autocomplete=\"off\" readonly  />
                            </div>
                            <div class=\"layui-form-item\">
                                <label class=\"layadmin-user-login-icon layui-icon layui-icon-username\"></label>
                                <input type=\"text\" name=\"new_email\" value=\"\" class=\"layui-input\" placeholder=\"请输入新邮箱\" autocomplete=\"off\"  readonly  />
                            </div>
                            <div class=\"layui-form-item\">
                                <label class=\"layadmin-user-login-icon layui-icon layui-icon-password\"></label>
                                <input type=\"password\" name=\"password\" value=\"\" class=\"layui-input\" placeholder=\"请输入当前密码\" autocomplete=\"off\" readonly  />
                            </div>
                        </div>
                        ";
        // line 51
        $context["target_url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 51, $this->source); })()), "request", array()), "get", array(0 => "target_url", 1 => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("passport_home_index")), "method");
        // line 52
        echo "                        <div class=\"layui-form-item \">
                            <button class=\"layui-btn layui-btn-fluid\" type=\"button\" onclick=\"resend_email();\">重新发送验证邮件</button>
                        </div>
                        <div class=\"layui-form-item \" style=\"margin-bottom: 20px;text-align: center;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("resend_activation_email"), "html", null, true);
        echo "\">
                            <input type=\"hidden\" name=\"target_url\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["target_url"]) || array_key_exists("target_url", $context) ? $context["target_url"] : (function () { throw new Twig_Error_Runtime('Variable "target_url" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "\">
                            <input type=\"checkbox\" name=\"remember\" lay-skin=\"primary\" title=\"记住密码\">
                            <a class=\"layadmin-link\" style=\"margin-top: 7px;\" href=\"javascript:show_input_box();\">更换邮箱地址</a>
                        </div>
                    </div>
                    <div class=\" ui-toggle ui-toggle-send-result\" style=\"display: none;\">
                        <div class=\"layui-form-item\" style=\"text-align: center;\">
                            <a class=\"layui-btn layui-btn-normal\" style=\"margin-top: 7px;\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["target_url"]) || array_key_exists("target_url", $context) ? $context["target_url"] : (function () { throw new Twig_Error_Runtime('Variable "target_url" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "\">返回</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class=\"layui-trans layadmin-user-login-footer\">
            <p>
                &copy; 2018 &nbsp;
                <a href=\"http://www.foxdou.cn\">foxdou.cn</a>
                <span>广西你行我动科技有限公司</span>
            </p>
        </div>
    </div>
</div>

<script>
    function show_input_box() {
        \$('#email-input-box').show();
        \$('input').removeAttr('readonly'); // F*CK Google for ignoring autocomplete=\"off\" in Chrome
    }

    function resend_email() {
        var loading = layer.load();
        axios.post('";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_register_resend_activation_email");
        echo "', \$('#resend-email-form').serialize())
            .then(function (response) {
                layer.close(loading);
                if(response.data.message) {
                    layer.msg(response.data.message);
                    \$('#message').show();
                    \$('#message').html(response.data.message)
                }

                if(response.data.error) {
                    layer.msg(response.data.error);
                    \$('#error').show();
                    \$('#error .foxdou-error-tip').html(response.data.error)
                }

                if(response.data.status) {
                    \$('.ui-toggle-change-email').hide();
                    \$('.ui-toggle-send-result').show();
                }
            })
            .catch(function (error) {
                console.log(error);
                layer.close(loading);
                layer.msg('服务器未响应，请稍后重试')
            });
    }
</script>

</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Passport/Register/emailActivationPending.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 88,  110 => 64,  100 => 57,  96 => 56,  90 => 52,  88 => 51,  69 => 35,  65 => 34,  57 => 29,  38 => 12,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>邮箱地址验证 - 狐豆通行证</title>
    {{ use_assets([
        '/assets/common/js/jquery.min.js',
        '/assets/common/js/axios.min.js',
        '/assets/common/layui/layui.all.js',
        '/assets/common/layui/css/layui.css',
        '/assets/passport/css/login.css',
    ])}}

    <style>
        .layadmin-user-login-main {
            width: 650px;
            margin: 0 auto;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
<div class=\"layadmin-tabspage-none\">
    <div class=\"layadmin-user-login layadmin-user-display-show\">
        <div class=\"layadmin-user-login-main\">
            <div class=\"layadmin-user-login-box layadmin-user-login-header\">
                <h2>邮箱地址验证</h2>
                    <p id=\"message\">{{ message|default('') }}</p>
            </div>
            <div class=\"layadmin-user-login-box layadmin-user-login-body layui-form\">
                <form id=\"resend-email-form\" autocomplete=\"off\">
                    <div class=\" ui-toggle ui-toggle-change-email\">
                        <div class=\"layui-form-item\" id=\"error\" style=\"display: {{ error is defined and error ? 'block' : 'none' }}\">
                            <div class=\"foxdou-error-tip\">{{ error|default('')|trans }}</div>
                        </div>
                        <div id=\"email-input-box\" style=\"display: none;\">
                            <div class=\"layui-form-item\">
                                <label class=\"layadmin-user-login-icon layui-icon layui-icon-username\"></label>
                                <input type=\"text\" name=\"old_email\" value=\"\" class=\"layui-input\" placeholder=\"请输入旧邮箱\" autocomplete=\"off\" readonly  />
                            </div>
                            <div class=\"layui-form-item\">
                                <label class=\"layadmin-user-login-icon layui-icon layui-icon-username\"></label>
                                <input type=\"text\" name=\"new_email\" value=\"\" class=\"layui-input\" placeholder=\"请输入新邮箱\" autocomplete=\"off\"  readonly  />
                            </div>
                            <div class=\"layui-form-item\">
                                <label class=\"layadmin-user-login-icon layui-icon layui-icon-password\"></label>
                                <input type=\"password\" name=\"password\" value=\"\" class=\"layui-input\" placeholder=\"请输入当前密码\" autocomplete=\"off\" readonly  />
                            </div>
                        </div>
                        {% set target_url = app.request.get('target_url', url('passport_home_index')) %}
                        <div class=\"layui-form-item \">
                            <button class=\"layui-btn layui-btn-fluid\" type=\"button\" onclick=\"resend_email();\">重新发送验证邮件</button>
                        </div>
                        <div class=\"layui-form-item \" style=\"margin-bottom: 20px;text-align: center;\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token(\"resend_activation_email\") }}\">
                            <input type=\"hidden\" name=\"target_url\" value=\"{{ target_url }}\">
                            <input type=\"checkbox\" name=\"remember\" lay-skin=\"primary\" title=\"记住密码\">
                            <a class=\"layadmin-link\" style=\"margin-top: 7px;\" href=\"javascript:show_input_box();\">更换邮箱地址</a>
                        </div>
                    </div>
                    <div class=\" ui-toggle ui-toggle-send-result\" style=\"display: none;\">
                        <div class=\"layui-form-item\" style=\"text-align: center;\">
                            <a class=\"layui-btn layui-btn-normal\" style=\"margin-top: 7px;\" href=\"{{ target_url }}\">返回</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class=\"layui-trans layadmin-user-login-footer\">
            <p>
                &copy; 2018 &nbsp;
                <a href=\"http://www.foxdou.cn\">foxdou.cn</a>
                <span>广西你行我动科技有限公司</span>
            </p>
        </div>
    </div>
</div>

<script>
    function show_input_box() {
        \$('#email-input-box').show();
        \$('input').removeAttr('readonly'); // F*CK Google for ignoring autocomplete=\"off\" in Chrome
    }

    function resend_email() {
        var loading = layer.load();
        axios.post('{{ path(\"passport_register_resend_activation_email\") }}', \$('#resend-email-form').serialize())
            .then(function (response) {
                layer.close(loading);
                if(response.data.message) {
                    layer.msg(response.data.message);
                    \$('#message').show();
                    \$('#message').html(response.data.message)
                }

                if(response.data.error) {
                    layer.msg(response.data.error);
                    \$('#error').show();
                    \$('#error .foxdou-error-tip').html(response.data.error)
                }

                if(response.data.status) {
                    \$('.ui-toggle-change-email').hide();
                    \$('.ui-toggle-send-result').show();
                }
            })
            .catch(function (error) {
                console.log(error);
                layer.close(loading);
                layer.msg('服务器未响应，请稍后重试')
            });
    }
</script>

</body>
</html>

", "Passport/Register/emailActivationPending.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\Register\\emailActivationPending.twig");
    }
}
