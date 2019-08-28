<?php

/* /Passport/Login/index.twig */
class __TwigTemplate_65ea0c2b7a5900eca0d285762c39377cd8796a4e0a984fcf6f9a23c0b8476bfe extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/Passport/layout.twig", "/Passport/Login/index.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'main_content' => array($this, 'block_main_content'),
            'js_end' => array($this, 'block_js_end'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/Passport/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Passport/Login/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Passport/Login/index.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 3
        echo "    <style type=\"text/css\">
        .page-content {max-height: 680px; padding: 30px 0;}
        /*登录前*/
        .before-login {width: 100%; height: auto; padding-top: 50px; text-align: center;}
        .before-login .login {width: 310px; height: auto; max-height: 300px; padding: 20px 30px; margin: 0 auto;}
        .before-login .login h2 { line-height: 40px; font-weight: normal;}
        .before-login .login pre {font-size: 14px; color: #888888;}
        .before-login .login pre a {margin: 0 5px; color: #2f86f6;}
        .before-login .login-input-group {margin-top: 30px;}
        .before-login .login-input-group li {position: relative; width: 100%; height: 40px; margin: 10px 0;}
        .before-login .login-input-group input {width: 100%; height: 100%; border-radius: 2px; border: 1px solid #DDDDDD; padding: 0 35px 0 10px;
            font-size: 15px;}
        .before-login .login-input-group input:focus {border-color: #2f86f6;}
        .before-login .login-input-group button {display: block; width: 100%; height: 40px; margin-top: 20px; border-radius: 2px; background: #2f86f6;
            color: #FFFFFF; font-size: 16px; text-align: center; line-height: 40px;}
        .before-login .login-input-group .icon {display: block; width: 18px; height: 18px; background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/css/img/del.png) no-repeat;
            position: absolute; top: 11px; right: 10px;cursor: pointer;}
        .before-login .login-input-group .icon:hover {background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/css/img/del-fous.png) no-repeat;}
        .before-login .indexinfo {width: 100%; height: 180px; margin-top: 80px; padding: 30px 30px 0 30px; border-top: 1px solid #E0E0E0;}
        .before-login .indexinfo .item {float: left; width: 160px; height: auto; margin: 0 14px;}
        .before-login .indexinfo .item:last-child {margin-right: 0;}
        .before-login .indexinfo .item:hover {box-shadow: 0 2px 5px #DDDDDD;background: linear-gradient(to bottom, #ffffff, #f5f5f5);}
        .before-login .indexinfo .item a {display: block; padding: 15px 10px; width: 100%; height: 100%; color: #444444;}
        .before-login .indexinfo .item h3 {font-weight: normal; line-height: 30px;}
        .before-login .indexinfo .item p {color: #999; line-height: 20px; font-size: 13px;}

    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 32
        echo "    <!-- 登录前 -->
    <div class=\"before-login\">
        <div class=\"login\">
            <h2>";
        // line 35
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 35, $this->source); })()), "request", array()), "get", array(0 => "need_login"), "method")) ? ("请登录后操作") : ("狐豆帐号登录"));
        echo "</h2>
            <form action=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("passport_login");
        echo "\" method=\"post\" id=\"login-form\">
                ";
        // line 37
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 37, $this->source); })())) {
            // line 38
            echo "                    <div class=\"layui-form-item\">
                        <div class=\"foxdou-error-tip\">";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 39, $this->source); })()), "messageKey", array())), "html", null, true);
            echo "</div>
                    </div>
                ";
        }
        // line 42
        echo "                <ul class=\"login-input-group\">
                    <li>
                        <input type=\"text\" name=\"username\" id=\"username\" value=\"\" placeholder=\"帐号\"/>
                        <i class=\"icon\" onclick=\"clear_val(this);\"></i>
                    </li>
                    <li>
                        <input type=\"password\" name=\"password\" id=\"password\" value=\"\" placeholder=\"密码\"/>
                        <i class=\"icon\" onclick=\"clear_val(this);\"></i>
                    </li>
                    <li><button class=\"layui-btn layui-btn-fluid\" onclick=\"login(event)\">登录</button></li>
                </ul>
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("authenticate"), "html", null, true);
        echo "\">
                ";
        // line 54
        $context["target_url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 54, $this->source); })()), "request", array()), "get", array(0 => "target_url"), "method");
        // line 55
        echo "                <input type=\"hidden\" name=\"_target_path\" value=\"";
        echo twig_escape_filter($this->env, (((isset($context["target_url"]) || array_key_exists("target_url", $context) ? $context["target_url"] : (function () { throw new Twig_Error_Runtime('Variable "target_url" does not exist.', 55, $this->source); })())) ? ((isset($context["target_url"]) || array_key_exists("target_url", $context) ? $context["target_url"] : (function () { throw new Twig_Error_Runtime('Variable "target_url" does not exist.', 55, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("passport_home_index"))), "html", null, true);
        echo "\">
            </form>
        </div>
        <div class=\"indexinfo\">
            <div class=\"item\">
                <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_user_password_reset_index", array("type" => "5"));
        echo "\">
                    <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/i1.png\"/>
                    <h3>找回密码</h3>
                    <p>帮您快速找回狐豆密码</p>
                </a>
            </div>
            <div class=\"item\">
                <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_user_password_reset_index", array("type" => "6"));
        echo "\">
                    <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/i2.png\"/>
                    <h3>找回支付密码</h3>
                    <p>帮您快速找回狐豆密码</p>
                </a>
            </div>
            <div class=\"item\">
                <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_safe_center_identity_verify_way", array("type" => 1));
        echo "\">
                    <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/i3.png\"/>
                    <h3>修改手机</h3>
                    <p>帮您快速找回狐豆密码</p>
                </a>
            </div>
            <div class=\"item\">
                <a href=\"\">
                    <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/i4.png\"/>
                    <h3>登录有问题</h3>
                    <p>帮您快速找回狐豆密码</p>
                </a>
            </div>
            <div class=\"item\">
                <a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_safe_center_identity_verify_way", array("type" => 2));
        echo "\">
                    <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/i5.png\"/>
                    <h3>修改邮箱</h3>
                    <p>帮您快速找回狐豆密码</p>
                </a>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 97
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 98
        echo "    <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.md5.js\"></script>
    <script type=\"text/javascript\">

        function login(evt) {
            var username = \$('#username').val();
            var password = \$('#password').val();
            if (!username) {
                nxwd.showMsg('账户不能为空');
                evt.preventDefault();
            }
            if (!password) {
                nxwd.showMsg('密码不能为空');
                evt.preventDefault();
            }
            return ;
            ";
        // line 114
        echo "                ";
        // line 115
        echo "                    ";
        // line 116
        echo "                    ";
        // line 117
        echo "                ";
        // line 118
        echo "                ";
        // line 119
        echo "            ";
        // line 120
        echo "        }

        function clear_val(dom) {
            \$(dom).parents('li').find('input').val('');
        }

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/Passport/Login/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 120,  245 => 119,  243 => 118,  241 => 117,  239 => 116,  237 => 115,  235 => 114,  218 => 98,  209 => 97,  190 => 88,  173 => 74,  163 => 67,  153 => 60,  144 => 55,  142 => 54,  138 => 53,  125 => 42,  119 => 39,  116 => 38,  114 => 37,  110 => 36,  106 => 35,  101 => 32,  92 => 31,  55 => 3,  46 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '/Passport/layout.twig' %}
{% block css %}
    <style type=\"text/css\">
        .page-content {max-height: 680px; padding: 30px 0;}
        /*登录前*/
        .before-login {width: 100%; height: auto; padding-top: 50px; text-align: center;}
        .before-login .login {width: 310px; height: auto; max-height: 300px; padding: 20px 30px; margin: 0 auto;}
        .before-login .login h2 { line-height: 40px; font-weight: normal;}
        .before-login .login pre {font-size: 14px; color: #888888;}
        .before-login .login pre a {margin: 0 5px; color: #2f86f6;}
        .before-login .login-input-group {margin-top: 30px;}
        .before-login .login-input-group li {position: relative; width: 100%; height: 40px; margin: 10px 0;}
        .before-login .login-input-group input {width: 100%; height: 100%; border-radius: 2px; border: 1px solid #DDDDDD; padding: 0 35px 0 10px;
            font-size: 15px;}
        .before-login .login-input-group input:focus {border-color: #2f86f6;}
        .before-login .login-input-group button {display: block; width: 100%; height: 40px; margin-top: 20px; border-radius: 2px; background: #2f86f6;
            color: #FFFFFF; font-size: 16px; text-align: center; line-height: 40px;}
        .before-login .login-input-group .icon {display: block; width: 18px; height: 18px; background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/css/img/del.png) no-repeat;
            position: absolute; top: 11px; right: 10px;cursor: pointer;}
        .before-login .login-input-group .icon:hover {background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/css/img/del-fous.png) no-repeat;}
        .before-login .indexinfo {width: 100%; height: 180px; margin-top: 80px; padding: 30px 30px 0 30px; border-top: 1px solid #E0E0E0;}
        .before-login .indexinfo .item {float: left; width: 160px; height: auto; margin: 0 14px;}
        .before-login .indexinfo .item:last-child {margin-right: 0;}
        .before-login .indexinfo .item:hover {box-shadow: 0 2px 5px #DDDDDD;background: linear-gradient(to bottom, #ffffff, #f5f5f5);}
        .before-login .indexinfo .item a {display: block; padding: 15px 10px; width: 100%; height: 100%; color: #444444;}
        .before-login .indexinfo .item h3 {font-weight: normal; line-height: 30px;}
        .before-login .indexinfo .item p {color: #999; line-height: 20px; font-size: 13px;}

    </style>
{% endblock %}
{% block main_content %}
    <!-- 登录前 -->
    <div class=\"before-login\">
        <div class=\"login\">
            <h2>{{ app.request.get('need_login') ? '请登录后操作' : '狐豆帐号登录' }}</h2>
            <form action=\"{{ url('passport_login') }}\" method=\"post\" id=\"login-form\">
                {% if error %}
                    <div class=\"layui-form-item\">
                        <div class=\"foxdou-error-tip\">{{ error.messageKey|trans }}</div>
                    </div>
                {% endif %}
                <ul class=\"login-input-group\">
                    <li>
                        <input type=\"text\" name=\"username\" id=\"username\" value=\"\" placeholder=\"帐号\"/>
                        <i class=\"icon\" onclick=\"clear_val(this);\"></i>
                    </li>
                    <li>
                        <input type=\"password\" name=\"password\" id=\"password\" value=\"\" placeholder=\"密码\"/>
                        <i class=\"icon\" onclick=\"clear_val(this);\"></i>
                    </li>
                    <li><button class=\"layui-btn layui-btn-fluid\" onclick=\"login(event)\">登录</button></li>
                </ul>
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token(\"authenticate\") }}\">
                {% set target_url = app.request.get('target_url') %}
                <input type=\"hidden\" name=\"_target_path\" value=\"{{ target_url ? target_url : url('passport_home_index') }}\">
            </form>
        </div>
        <div class=\"indexinfo\">
            <div class=\"item\">
                <a href=\"{{ path('passport_user_password_reset_index',{'type':'5'}) }}\">
                    <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/i1.png\"/>
                    <h3>找回密码</h3>
                    <p>帮您快速找回狐豆密码</p>
                </a>
            </div>
            <div class=\"item\">
                <a href=\"{{ path('passport_user_password_reset_index',{'type':'6'}) }}\">
                    <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/i2.png\"/>
                    <h3>找回支付密码</h3>
                    <p>帮您快速找回狐豆密码</p>
                </a>
            </div>
            <div class=\"item\">
                <a href=\"{{ path('passport_safe_center_identity_verify_way',{'type':1}) }}\">
                    <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/i3.png\"/>
                    <h3>修改手机</h3>
                    <p>帮您快速找回狐豆密码</p>
                </a>
            </div>
            <div class=\"item\">
                <a href=\"\">
                    <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/i4.png\"/>
                    <h3>登录有问题</h3>
                    <p>帮您快速找回狐豆密码</p>
                </a>
            </div>
            <div class=\"item\">
                <a href=\"{{ path('passport_safe_center_identity_verify_way',{'type':2}) }}\">
                    <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/i5.png\"/>
                    <h3>修改邮箱</h3>
                    <p>帮您快速找回狐豆密码</p>
                </a>
            </div>
        </div>
    </div>
{% endblock %}
{% block js_end %}
    <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.md5.js\"></script>
    <script type=\"text/javascript\">

        function login(evt) {
            var username = \$('#username').val();
            var password = \$('#password').val();
            if (!username) {
                nxwd.showMsg('账户不能为空');
                evt.preventDefault();
            }
            if (!password) {
                nxwd.showMsg('密码不能为空');
                evt.preventDefault();
            }
            return ;
            {#\$.post('{{ path(\"passport_login\") }}', {username: username, password: password}, function (data) {#}
                {#if (!data.status) {#}
                    {#nxwd.showMsg(data.msg);#}
                    {#return false;#}
                {#}#}
                {#location.href = '{{ path(\"passport_home_index\") }}';#}
            {#});#}
        }

        function clear_val(dom) {
            \$(dom).parents('li').find('input').val('');
        }

    </script>
{% endblock %}
", "/Passport/Login/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\Login\\index.twig");
    }
}
