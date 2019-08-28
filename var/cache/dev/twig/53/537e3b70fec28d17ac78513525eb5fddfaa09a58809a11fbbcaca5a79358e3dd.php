<?php

/* Passport/EmailTemplates/registration_confirm_email.html.twig */
class __TwigTemplate_f42fec21251ab076591f3823788d00bcb82a427d9e098c399d5593c0e7f23a27 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/EmailTemplates/registration_confirm_email.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/EmailTemplates/registration_confirm_email.html.twig"));

        // line 1
        echo "<h3>狐豆账号注册成功</h3>

<p>您好！您的狐豆账号已经注册成功，请点击下面的链接激活您的账号：</p>

";
        // line 6
        echo "<a href=\"";
        echo twig_escape_filter($this->env, (isset($context["activate_url"]) || array_key_exists("activate_url", $context) ? $context["activate_url"] : (function () { throw new Twig_Error_Runtime('Variable "activate_url" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "\">马上激活账户</a>。


<p>如果您看不到上面的链接，请复制下面的地址到浏览器地址栏打开：</p>

<p>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["activate_url"]) || array_key_exists("activate_url", $context) ? $context["activate_url"] : (function () { throw new Twig_Error_Runtime('Variable "activate_url" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</p>


<p>感谢您对狐豆的支持。</p>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Passport/EmailTemplates/registration_confirm_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 11,  35 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>狐豆账号注册成功</h3>

<p>您好！您的狐豆账号已经注册成功，请点击下面的链接激活您的账号：</p>

{# example, assuming you have a route named \"login\" #}
<a href=\"{{ activate_url }}\">马上激活账户</a>。


<p>如果您看不到上面的链接，请复制下面的地址到浏览器地址栏打开：</p>

<p>{{ activate_url }}</p>


<p>感谢您对狐豆的支持。</p>
", "Passport/EmailTemplates/registration_confirm_email.html.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\EmailTemplates\\registration_confirm_email.html.twig");
    }
}
