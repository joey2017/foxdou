<?php

/* /Supplier/Home/index.twig */
class __TwigTemplate_2d10d9f4eb6024be2d5e90c0ff819bff27bb44c212f90956ba63376bcbf67855 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Supplier/Home/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Supplier/Home/index.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"renderer\" content=\"ie-stand\">
    <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/sup/css/login.css\" />
    <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/sup/css/font-icon/iconfont.css\" />

    ";
        // line 9
        echo $this->extensions['App\Common\Twig\AppExtension']->useAssets(array(0 => "/assets/common/layui/css/layui.css", 1 => "/assets/common/js/jquery.min.js", 2 => "/assets/common/layui/layui.all.js"));
        // line 13
        echo "

    <title>登录-供应商用户中心</title>
    <style type=\"text/css\">
        .layui-form-item label{width: 150px;}
    </style>
</head>
<body style=\"overflow-y:hidden;overflow-x: hidden;\">
<div id=\"particles-js\">
    <canvas style=\"width: 100%; height: 100%; min-height:1000px;\" width=\"1920\" height=\"1000\"></canvas>
</div>
<div class=\"content\">
    <div class=\"loginBg\">
        <div class=\"loginBox\">
            <div class=\"login\">
                <div class=\"loginView\"></div>
                <div class=\"loginFrame\">
                    <pre>供应商后台登录</pre>
                </div>
                <form action=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("passport_login");
        echo "\" class=\"inputGroup\" method=\"post\">
                    <p>
                        <i class=\"icon iconfont icon-zhanghu\"></i>
                        <input type=\"text\" name=\"username\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"请输入您的登录帐号\"/>
                    </p>
                    <p>
                        <i class=\"icon iconfont icon-password\"></i>
                        <input type=\"password\" name=\"password\" value=\"\" placeholder=\"请输入您的登录密码\"/>
                    </p>
                    ";
        // line 41
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 41, $this->source); })())) {
            // line 42
            echo "                        <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 42, $this->source); })()), "message", array())), "html", null, true);
            echo "</p>
                    ";
        }
        // line 44
        echo "                    <input type=\"hidden\" name=\"_target_path\" value=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_dashboard_index");
        echo "\" />
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("authenticate"), "html", null, true);
        echo "\" />

                    <button type=\"submit\">登&nbsp;录</button>
                </form>
                <div class=\"loginPro\">
                    <a href=\"//safe.foxdou.com/safe/user-inspect?operation=5\" target=\"_blank\">忘记密码？立即找回</a>
                    <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("passport_register");
        echo "\" target=\"_blank\">注册&gt;&gt;</a>
                </div>

            </div>
        </div>
    </div>
</div>

<script type=\"text/javascript\">
</script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/Supplier/Home/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 51,  90 => 45,  85 => 44,  79 => 42,  77 => 41,  68 => 35,  62 => 32,  41 => 13,  39 => 9,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"renderer\" content=\"ie-stand\">
    <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/sup/css/login.css\" />
    <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/sup/css/font-icon/iconfont.css\" />

    {{ use_assets([
        '/assets/common/layui/css/layui.css',
        '/assets/common/js/jquery.min.js',
        '/assets/common/layui/layui.all.js',
    ]) }}

    <title>登录-供应商用户中心</title>
    <style type=\"text/css\">
        .layui-form-item label{width: 150px;}
    </style>
</head>
<body style=\"overflow-y:hidden;overflow-x: hidden;\">
<div id=\"particles-js\">
    <canvas style=\"width: 100%; height: 100%; min-height:1000px;\" width=\"1920\" height=\"1000\"></canvas>
</div>
<div class=\"content\">
    <div class=\"loginBg\">
        <div class=\"loginBox\">
            <div class=\"login\">
                <div class=\"loginView\"></div>
                <div class=\"loginFrame\">
                    <pre>供应商后台登录</pre>
                </div>
                <form action=\"{{ url('passport_login') }}\" class=\"inputGroup\" method=\"post\">
                    <p>
                        <i class=\"icon iconfont icon-zhanghu\"></i>
                        <input type=\"text\" name=\"username\" value=\"{{ last_username }}\" placeholder=\"请输入您的登录帐号\"/>
                    </p>
                    <p>
                        <i class=\"icon iconfont icon-password\"></i>
                        <input type=\"password\" name=\"password\" value=\"\" placeholder=\"请输入您的登录密码\"/>
                    </p>
                    {% if error %}
                        <p>{{ error.message|trans }}</p>
                    {% endif %}
                    <input type=\"hidden\" name=\"_target_path\" value=\"{{ path('supplier_dashboard_index') }}\" />
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('authenticate') }}\" />

                    <button type=\"submit\">登&nbsp;录</button>
                </form>
                <div class=\"loginPro\">
                    <a href=\"//safe.foxdou.com/safe/user-inspect?operation=5\" target=\"_blank\">忘记密码？立即找回</a>
                    <a href=\"{{ url('passport_register') }}\" target=\"_blank\">注册&gt;&gt;</a>
                </div>

            </div>
        </div>
    </div>
</div>

<script type=\"text/javascript\">
</script>
</body>
</html>", "/Supplier/Home/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Supplier\\Home\\index.twig");
    }
}
