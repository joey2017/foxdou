<?php

/* /Passport/SafeCenter/identity_verify_way.twig */
class __TwigTemplate_d442d5b7d04d3ee7e81dc715ab903fa31453c95661ab1df1fe8b1680f2e5cc73 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/Passport/layout.twig", "/Passport/SafeCenter/identity_verify_way.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/Passport/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Passport/SafeCenter/identity_verify_way.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Passport/SafeCenter/identity_verify_way.twig"));

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
        .page-content{padding: 30px 80px;}
        .title{display: block; padding: 10px 0 20px 0; color: #444444}
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 9
        echo "    <h3 style=\"color: #666666;\">您正在为账户 ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 9, $this->source); })()), "user_name", array()), "html", null, true);
        echo "(";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 9, $this->source); })()), "nick_name", array()), "html", null, true);
        echo ") ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["operation"]) || array_key_exists("operation", $context) ? $context["operation"] : (function () { throw new Twig_Error_Runtime('Variable "operation" does not exist.', 9, $this->source); })()), (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 9, $this->source); })()), array(), "array"), "name", array(), "array"), "html", null, true);
        echo "，请选择身份验证方式：</h3>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inspect_way_views"]) || array_key_exists("inspect_way_views", $context) ? $context["inspect_way_views"] : (function () { throw new Twig_Error_Runtime('Variable "inspect_way_views" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 11
            echo "        <div class=\"div-group\">
            ";
            // line 12
            if (twig_in_filter("2", twig_get_attribute($this->env, $this->source, $context["v"], "ways_ids", array()))) {
                // line 13
                echo "                <div class=\"div-ico\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/ico1.jpg\" /></div>
            ";
            } elseif (twig_in_filter("5", twig_get_attribute($this->env, $this->source,             // line 14
$context["v"], "ways_ids", array()))) {
                // line 15
                echo "                <div class=\"div-ico\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/ico4.jpg\" /></div>
            ";
            }
            // line 17
            echo "            <div class=\"div-content\">
                <h3>通过 ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "ways_name", array()), "html", null, true);
            echo "</h3>
            ";
            // line 19
            if (twig_in_filter("2", twig_get_attribute($this->env, $this->source, $context["v"], "ways_ids", array()))) {
                // line 20
                echo "                <p class=\"f-cl-gray\">如果你的手机 ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_check"]) || array_key_exists("user_check", $context) ? $context["user_check"] : (function () { throw new Twig_Error_Runtime('Variable "user_check" does not exist.', 20, $this->source); })()), "bind_mobile", array()), "html", null, true);
                echo " 还在正常使用，请选择此方式</p>
            ";
            } elseif (twig_in_filter("5", twig_get_attribute($this->env, $this->source,             // line 21
$context["v"], "ways_ids", array()))) {
                // line 22
                echo "                <p class=\"f-cl-gray\">如果你的邮箱 ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_check"]) || array_key_exists("user_check", $context) ? $context["user_check"] : (function () { throw new Twig_Error_Runtime('Variable "user_check" does not exist.', 22, $this->source); })()), "bind_email", array()), "html", null, true);
                echo " 还在正常使用，请选择此方式</p>
            ";
            } else {
                // line 24
                echo "                    <p class=\"f-cl-gray\">通过 ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "ways_name", array()), "html", null, true);
                echo "</p>
            ";
            }
            // line 26
            echo "
            </div>
            <div class=\"div-btn\">
                <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_safe_center_identity_verify", array("type" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 29, $this->source); })()), "verify_identity_way" => $context["k"])), "html", null, true);
            echo "\" class=\"btn btn-yellow\">立即验证</a>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    <div class=\"div-group\">
        <div class=\"div-ico\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/ico3.jpg\" /></div>
        <div class=\"div-content\">
            <h3>通过人工服务</h3>
            ";
        // line 37
        if ((isset($context["inspect_way_views"]) || array_key_exists("inspect_way_views", $context) ? $context["inspect_way_views"] : (function () { throw new Twig_Error_Runtime('Variable "inspect_way_views" does not exist.', 37, $this->source); })())) {
            // line 38
            echo "            <p class=\"f-cl-gray\">若以上信息已忘记或不再使用，请联系客服</p>
            ";
        } else {
            // line 40
            echo "            <p class=\"f-cl-gray\">抱歉，根据系统安全中心检测，暂无其他验证方式适合您，请联系客服人工处理</p>
            ";
        }
        // line 42
        echo "        </div>
        <div class=\"div-btn\">
            <a href=\"http://crm2.qq.com/page/portalpage/wpa.php?uin=800093007&aty=0&a=0&curl=&ty=1\" target=\"_blank\" class=\"btn btn-yellow\">立即联系</a>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/Passport/SafeCenter/identity_verify_way.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 42,  159 => 40,  155 => 38,  153 => 37,  147 => 33,  137 => 29,  132 => 26,  126 => 24,  120 => 22,  118 => 21,  113 => 20,  111 => 19,  107 => 18,  104 => 17,  100 => 15,  98 => 14,  95 => 13,  93 => 12,  90 => 11,  86 => 10,  77 => 9,  68 => 8,  54 => 3,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '/Passport/layout.twig' %}
{% block css%}
    <style type=\"text/css\">
        .page-content{padding: 30px 80px;}
        .title{display: block; padding: 10px 0 20px 0; color: #444444}
    </style>
{% endblock %}
{% block main_content %}
    <h3 style=\"color: #666666;\">您正在为账户 {{ user.user_name }}({{ user.nick_name }}) {{ operation[type]['name'] }}，请选择身份验证方式：</h3>
    {% for k,v in inspect_way_views %}
        <div class=\"div-group\">
            {% if '2' in v.ways_ids %}
                <div class=\"div-ico\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/ico1.jpg\" /></div>
            {% elseif '5' in v.ways_ids %}
                <div class=\"div-ico\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/ico4.jpg\" /></div>
            {% endif %}
            <div class=\"div-content\">
                <h3>通过 {{ v.ways_name }}</h3>
            {% if '2' in v.ways_ids %}
                <p class=\"f-cl-gray\">如果你的手机 {{ user_check.bind_mobile }} 还在正常使用，请选择此方式</p>
            {% elseif '5' in v.ways_ids %}
                <p class=\"f-cl-gray\">如果你的邮箱 {{ user_check.bind_email }} 还在正常使用，请选择此方式</p>
            {% else %}
                    <p class=\"f-cl-gray\">通过 {{ v.ways_name }}</p>
            {% endif %}

            </div>
            <div class=\"div-btn\">
                <a href=\"{{ path('passport_safe_center_identity_verify',{'type':type,'verify_identity_way':k}) }}\" class=\"btn btn-yellow\">立即验证</a>
            </div>
        </div>
    {% endfor %}
    <div class=\"div-group\">
        <div class=\"div-ico\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/ico3.jpg\" /></div>
        <div class=\"div-content\">
            <h3>通过人工服务</h3>
            {% if inspect_way_views %}
            <p class=\"f-cl-gray\">若以上信息已忘记或不再使用，请联系客服</p>
            {% else %}
            <p class=\"f-cl-gray\">抱歉，根据系统安全中心检测，暂无其他验证方式适合您，请联系客服人工处理</p>
            {% endif %}
        </div>
        <div class=\"div-btn\">
            <a href=\"http://crm2.qq.com/page/portalpage/wpa.php?uin=800093007&aty=0&a=0&curl=&ty=1\" target=\"_blank\" class=\"btn btn-yellow\">立即联系</a>
        </div>
    </div>
{% endblock %}", "/Passport/SafeCenter/identity_verify_way.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\SafeCenter\\identity_verify_way.twig");
    }
}
