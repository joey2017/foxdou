<?php

/* Passport/EmailTemplates/registration_confirm_email.text.twig */
class __TwigTemplate_49b9765cfc975155818354e3ecf72dc1924fffa4343eb5d097656827203902f1 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/EmailTemplates/registration_confirm_email.text.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/EmailTemplates/registration_confirm_email.text.twig"));

        // line 1
        echo "狐豆账号注册成功

您好！您的狐豆账号已经注册成功，请在浏览器打开下面的链接以激活您的账号：

";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["activate_url"]) || array_key_exists("activate_url", $context) ? $context["activate_url"] : (function () { throw new Twig_Error_Runtime('Variable "activate_url" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "

感谢您对狐豆的支持。
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Passport/EmailTemplates/registration_confirm_email.text.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("狐豆账号注册成功

您好！您的狐豆账号已经注册成功，请在浏览器打开下面的链接以激活您的账号：

{{ activate_url }}

感谢您对狐豆的支持。
", "Passport/EmailTemplates/registration_confirm_email.text.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\EmailTemplates\\registration_confirm_email.text.twig");
    }
}
