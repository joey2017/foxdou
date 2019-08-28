<?php

/* Test/SimpleFormDemo/custom_form_form.twig */
class __TwigTemplate_fc78254050d79dd864d894ebc334a9022d57afc14cf27812fa547ba52dd8e74d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Test/SimpleFormDemo/custom_form_form.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Test/SimpleFormDemo/custom_form_form.twig"));

        // line 1
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Test/SimpleFormDemo/custom_form_form.twig", 1);
        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("simple_form_demo_submit", array("page" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "request", array()), "get", array(0 => "page"), "method"))), "html", null, true);
        echo "\" method=\"post\" class=\"layui-form foxdou-row\">
    <div class=\"layui-form-item\">
        ";
        // line 5
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->source); })()), "username", array()), "用户名", array("inner" => "block", "outer" => "inline"), array("placeholder" => "自定义Placeholder", "class" => "layui-input custom-class1", "data-name" => "zzzz"));
        echo "
        ";
        // line 6
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->source); })()), "email", array()), "Email", array("inner" => "block", "outer" => "inline"), array("placeholder" => "自定义class(查看源码可见)", "class" => "layui-input custom-class1"));
        echo "
        ";
        // line 7
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()), "mobile", array()), "手机号", array("inner" => "block", "outer" => "inline"), array("placeholder" => "自定义style(查看源码可见)", "style" => "border: solid 2px red;"));
        echo "
    </div>
    ";
        // line 9
        echo $context["sf"]->macro_file(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->source); })()), "avatar", array()), "上传头像", array("inner" => "block"));
        echo "
    ";
        // line 10
        echo $context["sf"]->macro_radio(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), "do_not_disturb", array()), "勿扰模式", array("Y" => "是", "N" => "否"));
        echo "
    ";
        // line 11
        echo $context["sf"]->macro_password(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), "password", array()), "密码", array("tips" => " 自定义提示文本"));
        echo "
    ";
        // line 12
        echo $context["sf"]->macro_password(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), "password_confirm", array()), "确认密码", array("inner" => "block"));
        echo "
    ";
        // line 13
        echo $context["sf"]->macro_select(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), "gender", array()), "性别", (isset($context["genders"]) || array_key_exists("genders", $context) ? $context["genders"] : (function () { throw new Twig_Error_Runtime('Variable "genders" does not exist.', 13, $this->source); })()), array("value" => (isset($context["default_gender"]) || array_key_exists("default_gender", $context) ? $context["default_gender"] : (function () { throw new Twig_Error_Runtime('Variable "default_gender" does not exist.', 13, $this->source); })())));
        echo "
    ";
        // line 14
        echo $context["sf"]->macro_checkbox(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "favourite_languages", array()), "掌握的语言", (isset($context["languages"]) || array_key_exists("languages", $context) ? $context["languages"] : (function () { throw new Twig_Error_Runtime('Variable "languages" does not exist.', 14, $this->source); })()), array("values" => (isset($context["default_checked_values"]) || array_key_exists("default_checked_values", $context) ? $context["default_checked_values"] : (function () { throw new Twig_Error_Runtime('Variable "default_checked_values" does not exist.', 14, $this->source); })())));
        echo "
    ";
        // line 15
        echo $context["sf"]->macro_radio(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->source); })()), "most_skilled_language", array()), "主力语言", (isset($context["languages"]) || array_key_exists("languages", $context) ? $context["languages"] : (function () { throw new Twig_Error_Runtime('Variable "languages" does not exist.', 15, $this->source); })()), array("value" => (isset($context["default_most_skilled_language"]) || array_key_exists("default_most_skilled_language", $context) ? $context["default_most_skilled_language"] : (function () { throw new Twig_Error_Runtime('Variable "default_most_skilled_language" does not exist.', 15, $this->source); })())));
        echo "
    ";
        // line 16
        echo $context["sf"]->macro_textarea(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), "intro", array()), "自我介绍");
        echo "


    ";
        // line 19
        echo $context["sf"]->macro_rest((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()));
        echo "
    ";
        // line 20
        echo $context["sf"]->macro_submit(null, "提交", "", array("outer" => null));
        echo "
    ";
        // line 21
        echo $context["sf"]->macro_button(null, "暂存", null, array("outer" => null));
        echo "
</form>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Test/SimpleFormDemo/custom_form_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 21,  90 => 20,  86 => 19,  80 => 16,  76 => 15,  72 => 14,  68 => 13,  64 => 12,  60 => 11,  56 => 10,  52 => 9,  47 => 7,  43 => 6,  39 => 5,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

<form action=\"{{ path('simple_form_demo_submit', {'page': app.request.get('page')}) }}\" method=\"post\" class=\"layui-form foxdou-row\">
    <div class=\"layui-form-item\">
        {{ sf.text(form.username, '用户名', {'inner': 'block', 'outer': 'inline'}, {'placeholder': '自定义Placeholder', 'class': 'layui-input custom-class1', 'data-name': 'zzzz'}) }}
        {{ sf.text(form.email, 'Email', {'inner': 'block', 'outer': 'inline'}, {'placeholder': '自定义class(查看源码可见)', 'class': 'layui-input custom-class1'}) }}
        {{ sf.text(form.mobile, '手机号', {'inner': 'block', 'outer': 'inline'}, {'placeholder': '自定义style(查看源码可见)', 'style': 'border: solid 2px red;'}) }}
    </div>
    {{ sf.file(form.avatar, '上传头像', {'inner': 'block'}) }}
    {{ sf.radio(form.do_not_disturb, '勿扰模式', {'Y': '是', 'N': '否'}) }}
    {{ sf.password(form.password, '密码', {'tips': ' 自定义提示文本'}) }}
    {{ sf.password(form.password_confirm, '确认密码', {'inner': 'block'}) }}
    {{ sf.select(form.gender, '性别', genders, {'value': default_gender}) }}
    {{ sf.checkbox(form.favourite_languages, '掌握的语言', languages, {'values': default_checked_values}) }}
    {{ sf.radio(form.most_skilled_language, '主力语言', languages, {'value': default_most_skilled_language}) }}
    {{ sf.textarea(form.intro, '自我介绍') }}


    {{ sf.rest(form) }}
    {{ sf.submit(null, '提交', '', {'outer': null}) }}
    {{ sf.button(null, '暂存', null, {'outer': null}) }}
</form>", "Test/SimpleFormDemo/custom_form_form.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Test\\SimpleFormDemo\\custom_form_form.twig");
    }
}
