<?php

/* Admin/Login/login.html.twig */
class __TwigTemplate_d0f54564feba163f55b645eaaecda00104fdf4cf77ed2a238309ae4225421a17 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Login/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Login/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>登录</title>
    ";
        // line 6
        echo $this->extensions['App\Common\Twig\AppExtension']->useAssets(array(0 => "/assets/common/layui/css/layui.css", 1 => "/assets/admin/css/admin.css", 2 => "/assets/admin/css/login.css"));
        // line 10
        echo "
</head>

<body>
<div class=\"layadmin-tabspage-none\">
    <div class=\"layadmin-user-login layadmin-user-display-show\">
        <div class=\"layadmin-user-login-main\">
            <div class=\"layadmin-user-login-box layadmin-user-login-header\">
                <h2>狐豆后台管理系统</h2>
                <p>请登录</p>
            </div>
            <div class=\"layadmin-user-login-box layadmin-user-login-body layui-form\">
                <form action=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_login");
        echo "\" method=\"post\" id=\"login-form\">
                    ";
        // line 23
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 23, $this->source); })())) {
            // line 24
            echo "                    <div class=\"layui-form-item\">
                        <div class=\"foxdou-error-tip\">";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 25, $this->source); })())), "html", null, true);
            echo "</div>
                    </div>
                    ";
        }
        // line 28
        echo "                <div class=\"layui-form-item\">
                    <label class=\"layadmin-user-login-icon layui-icon layui-icon-username\"></label>
                    <input type=\"text\" name=\"username\" value=\"\" class=\"layui-input\" placeholder=\"用户名\" />
                    <!--错误提示-->
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layadmin-user-login-icon layui-icon layui-icon-password\"></label>
                    <input type=\"password\" name=\"password\" value=\"\" class=\"layui-input\" placeholder=\"密码\" />
                </div>
                <div class=\"layui-form-item\">
                    <button class=\"layui-btn layui-btn-fluid\">登录</button>
                </div>
                <div class=\"layui-form-item\" style=\"margin-bottom: 20px;\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("authenticate"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_index");
        echo "\">
                    <input type=\"checkbox\" name=\"remember\" lay-skin=\"primary\" title=\"记住密码\">
                    <a class=\"layadmin-user-jump-change layadmin-link\" style=\"margin-top: 7px;\">忘记密码？</a>
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


</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Login/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 42,  82 => 41,  67 => 28,  61 => 25,  58 => 24,  56 => 23,  52 => 22,  38 => 10,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>登录</title>
    {{ use_assets([
    '/assets/common/layui/css/layui.css',
    '/assets/admin/css/admin.css',
    '/assets/admin/css/login.css',
    ])}}
</head>

<body>
<div class=\"layadmin-tabspage-none\">
    <div class=\"layadmin-user-login layadmin-user-display-show\">
        <div class=\"layadmin-user-login-main\">
            <div class=\"layadmin-user-login-box layadmin-user-login-header\">
                <h2>狐豆后台管理系统</h2>
                <p>请登录</p>
            </div>
            <div class=\"layadmin-user-login-box layadmin-user-login-body layui-form\">
                <form action=\"{{ path('admin_login') }}\" method=\"post\" id=\"login-form\">
                    {% if error %}
                    <div class=\"layui-form-item\">
                        <div class=\"foxdou-error-tip\">{{ error|trans }}</div>
                    </div>
                    {% endif %}
                <div class=\"layui-form-item\">
                    <label class=\"layadmin-user-login-icon layui-icon layui-icon-username\"></label>
                    <input type=\"text\" name=\"username\" value=\"\" class=\"layui-input\" placeholder=\"用户名\" />
                    <!--错误提示-->
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layadmin-user-login-icon layui-icon layui-icon-password\"></label>
                    <input type=\"password\" name=\"password\" value=\"\" class=\"layui-input\" placeholder=\"密码\" />
                </div>
                <div class=\"layui-form-item\">
                    <button class=\"layui-btn layui-btn-fluid\">登录</button>
                </div>
                <div class=\"layui-form-item\" style=\"margin-bottom: 20px;\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(\"authenticate\") }}\">
                    <input type=\"hidden\" name=\"_target_path\" value=\"{{ path('admin_dashboard_index') }}\">
                    <input type=\"checkbox\" name=\"remember\" lay-skin=\"primary\" title=\"记住密码\">
                    <a class=\"layadmin-user-jump-change layadmin-link\" style=\"margin-top: 7px;\">忘记密码？</a>
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


</body>
</html>

", "Admin/Login/login.html.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\Login\\login.html.twig");
    }
}
