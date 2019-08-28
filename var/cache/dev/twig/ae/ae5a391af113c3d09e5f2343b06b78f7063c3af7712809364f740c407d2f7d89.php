<?php

/* Test/SimpleFormDemo/full_row_form.twig */
class __TwigTemplate_ca35e42b68ced7078129ad08d48e4b37666372a978b2a67127527c45f779a265 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Test/SimpleFormDemo/full_row_form.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Test/SimpleFormDemo/full_row_form.twig"));

        // line 1
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Test/SimpleFormDemo/full_row_form.twig", 1);
        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("simple_form_demo_submit", array("page" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "request", array()), "get", array(0 => "page"), "method"))), "html", null, true);
        echo "\" method=\"post\" class=\"layui-form foxdou-row\">
    ";
        // line 4
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->source); })()), "username", array()), "用户名", array("inner" => "block"));
        echo "
    ";
        // line 5
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->source); })()), "email", array()), "Email", array("inner" => "block"));
        echo "
    ";
        // line 6
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->source); })()), "mobile", array()), "手机号", array("inner" => "block"));
        echo "
    ";
        // line 7
        echo $context["sf"]->macro_file(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()), "avatar", array()), "上传头像", array("inner" => "block"));
        echo "
    ";
        // line 8
        echo $context["sf"]->macro_checkbox(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->source); })()), "do_not_disturb", array()), "勿扰模式", array("Y" => "是"), array(), array("lay-skin" => "switch", "lay-text" => "是|否"));
        echo "
    ";
        // line 9
        echo $context["sf"]->macro_password(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->source); })()), "password", array()), "密码", array("inner" => "block"));
        echo "
    ";
        // line 10
        echo $context["sf"]->macro_password(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), "password_confirm", array()), "确认密码", array("inner" => "block"));
        echo "
    ";
        // line 11
        echo $context["sf"]->macro_select(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), "gender", array()), "性别", (isset($context["genders"]) || array_key_exists("genders", $context) ? $context["genders"] : (function () { throw new Twig_Error_Runtime('Variable "genders" does not exist.', 11, $this->source); })()), array("inner" => "block", "value" => (isset($context["default_gender"]) || array_key_exists("default_gender", $context) ? $context["default_gender"] : (function () { throw new Twig_Error_Runtime('Variable "default_gender" does not exist.', 11, $this->source); })())));
        echo "
    ";
        // line 12
        echo $context["sf"]->macro_checkbox(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), "favourite_languages", array()), "掌握的语言", (isset($context["languages"]) || array_key_exists("languages", $context) ? $context["languages"] : (function () { throw new Twig_Error_Runtime('Variable "languages" does not exist.', 12, $this->source); })()), array("inner" => "block", "values" => (isset($context["default_checked_values"]) || array_key_exists("default_checked_values", $context) ? $context["default_checked_values"] : (function () { throw new Twig_Error_Runtime('Variable "default_checked_values" does not exist.', 12, $this->source); })())));
        echo "
    ";
        // line 13
        echo $context["sf"]->macro_radio(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), "most_skilled_language", array()), "主力语言", (isset($context["languages"]) || array_key_exists("languages", $context) ? $context["languages"] : (function () { throw new Twig_Error_Runtime('Variable "languages" does not exist.', 13, $this->source); })()), array("inner" => "block", "value" => (isset($context["default_most_skilled_language"]) || array_key_exists("default_most_skilled_language", $context) ? $context["default_most_skilled_language"] : (function () { throw new Twig_Error_Runtime('Variable "default_most_skilled_language" does not exist.', 13, $this->source); })())));
        echo "
    ";
        // line 14
        echo $context["sf"]->macro_textarea(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "intro", array()), "自我介绍", array(), array("placeholder" => "textarea默认就是整行显示"));
        echo "


    ";
        // line 17
        echo $context["sf"]->macro_rest((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()));
        echo "
    ";
        // line 18
        echo $context["sf"]->macro_submit(null, "提交", "", array("outer" => null));
        echo "
    ";
        // line 19
        echo $context["sf"]->macro_button(null, "暂存", null, array("outer" => null));
        echo "
</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Test/SimpleFormDemo/full_row_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 19,  88 => 18,  84 => 17,  78 => 14,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  50 => 7,  46 => 6,  42 => 5,  38 => 4,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

<form action=\"{{ path('simple_form_demo_submit', {'page': app.request.get('page')}) }}\" method=\"post\" class=\"layui-form foxdou-row\">
    {{ sf.text(form.username, '用户名', {'inner': 'block'}) }}
    {{ sf.text(form.email, 'Email', {'inner': 'block'}) }}
    {{ sf.text(form.mobile, '手机号', {'inner': 'block'}) }}
    {{ sf.file(form.avatar, '上传头像', {'inner': 'block'}) }}
    {{ sf.checkbox(form.do_not_disturb, '勿扰模式', {'Y': '是'}, {}, {'lay-skin': 'switch', 'lay-text': '是|否'}) }}
    {{ sf.password(form.password, '密码', {'inner': 'block'}) }}
    {{ sf.password(form.password_confirm, '确认密码', {'inner': 'block'}) }}
    {{ sf.select(form.gender, '性别', genders, {'inner': 'block', 'value': default_gender}) }}
    {{ sf.checkbox(form.favourite_languages, '掌握的语言', languages, {'inner': 'block', 'values': default_checked_values}) }}
    {{ sf.radio(form.most_skilled_language, '主力语言', languages, {'inner': 'block', 'value': default_most_skilled_language}) }}
    {{ sf.textarea(form.intro, '自我介绍', {}, {'placeholder': 'textarea默认就是整行显示'}) }}


    {{ sf.rest(form) }}
    {{ sf.submit(null, '提交', '', {'outer': null}) }}
    {{ sf.button(null, '暂存', null, {'outer': null}) }}
</form>
", "Test/SimpleFormDemo/full_row_form.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Test\\SimpleFormDemo\\full_row_form.twig");
    }
}
