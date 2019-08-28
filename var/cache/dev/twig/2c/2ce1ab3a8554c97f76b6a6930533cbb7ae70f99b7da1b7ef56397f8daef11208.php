<?php

/* Test/SimpleFormDemo/inline_with_dynamic_table_form.twig */
class __TwigTemplate_c5edeb420d0d3497e0b62ceda6eacb33ceaacee0c99697a4b690ff00ce9c7922 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Test/SimpleFormDemo/inline_with_dynamic_table_form.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Test/SimpleFormDemo/inline_with_dynamic_table_form.twig"));

        // line 1
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Test/SimpleFormDemo/inline_with_dynamic_table_form.twig", 1);
        // line 2
        echo "
<form class=\"layui-form foxdou-row horizon-form\" id=\"search-form\">
    <div class=\"layui-form-item\" style=\"margin-bottom: 0;\">
        ";
        // line 5
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->source); })()), "username", array()), null, array("outer" => "inline"), array("placeholder" => "用户名"));
        echo "
        ";
        // line 6
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->source); })()), "mobile", array()), null, array("outer" => "inline"), array("placeholder" => "手机号"));
        echo "
        ";
        // line 7
        echo $context["sf"]->macro_select(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()), "gender", array()), null, (isset($context["genders"]) || array_key_exists("genders", $context) ? $context["genders"] : (function () { throw new Twig_Error_Runtime('Variable "genders" does not exist.', 7, $this->source); })()), array("outer" => "inline"));
        echo "
        ";
        // line 8
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->source); })()), "search", array()), null, array("outer" => "inline"), array("placeholder" => "模糊搜索"));
        echo "
        ";
        // line 9
        echo $context["sf"]->macro_button(null, "搜索", null, array("outer" => "inline"), array("onclick" => "reload()"));
        echo "
    </div>
</form>
<div class=\"foxdou-row\">
    <div class=\"layui-card-body\">
        <table class=\"layui-table\" lay-data=\"{url:'";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("simple_form_demo_show", array("page" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->source); })()), "request", array()), "get", array(0 => "page"), "method"))), "html", null, true);
        echo "', page:true, id:'user-table', method:'get'}\" lay-filter=\"demo\">
            <thead>
            <tr>
                <th lay-data=\"{type:'checkbox', fixed: 'left', width:50}\"></th>
                <th lay-data=\"{field:'id', width:50, align: 'center'}\">ID</th>
                <th lay-data=\"{field:'type', width:80, align: 'center'}\">用户类型</th>
                <th lay-data=\"{field:'user_name', width:150, align: 'center'}\">用户名</th>
                <th lay-data=\"{field:'mobile', width:150, align: 'center'}\">联系电话</th>
                <th lay-data=\"{field:'email', width:150, align: 'center'}\">email</th>
                <th lay-data=\"{field:'status', sort: true, width:120, align: 'center'}\">状态</th>
                <th lay-data=\"{field:'info', align: 'left'}\">备注</th>
                <th lay-data=\"{fixed: 'right', align:'center', toolbar: '#barDemo', width:180}\">操作</th>
            </tr>
            </thead>
        </table>
        <script type=\"text/html\" id=\"barDemo\">
            <div class=\"layui-table-cell laytable-cell-4-0-9\">
                <a class=\"layui-btn layui-btn-primary layui-btn-xs\" lay-event=\"detail\">查看</a>
                <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"edit\">编辑</a>
                <a class=\"layui-btn layui-btn-danger layui-btn-xs\" lay-event=\"del\">删除</a>
            </div>
        </script>
    </div>

</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Test/SimpleFormDemo/inline_with_dynamic_table_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  52 => 9,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

<form class=\"layui-form foxdou-row horizon-form\" id=\"search-form\">
    <div class=\"layui-form-item\" style=\"margin-bottom: 0;\">
        {{ sf.text(form.username, null, {'outer': 'inline'}, {'placeholder': '用户名'}) }}
        {{ sf.text(form.mobile, null, {'outer': 'inline'}, {'placeholder': '手机号'}) }}
        {{ sf.select(form.gender, null, genders, {'outer': 'inline'}) }}
        {{ sf.text(form.search, null, {'outer': 'inline'}, {'placeholder': '模糊搜索'}) }}
        {{ sf.button(null, '搜索', null, {'outer': 'inline'}, {'onclick': 'reload()'}) }}
    </div>
</form>
<div class=\"foxdou-row\">
    <div class=\"layui-card-body\">
        <table class=\"layui-table\" lay-data=\"{url:'{{ path('simple_form_demo_show', {'page': app.request.get('page')}) }}', page:true, id:'user-table', method:'get'}\" lay-filter=\"demo\">
            <thead>
            <tr>
                <th lay-data=\"{type:'checkbox', fixed: 'left', width:50}\"></th>
                <th lay-data=\"{field:'id', width:50, align: 'center'}\">ID</th>
                <th lay-data=\"{field:'type', width:80, align: 'center'}\">用户类型</th>
                <th lay-data=\"{field:'user_name', width:150, align: 'center'}\">用户名</th>
                <th lay-data=\"{field:'mobile', width:150, align: 'center'}\">联系电话</th>
                <th lay-data=\"{field:'email', width:150, align: 'center'}\">email</th>
                <th lay-data=\"{field:'status', sort: true, width:120, align: 'center'}\">状态</th>
                <th lay-data=\"{field:'info', align: 'left'}\">备注</th>
                <th lay-data=\"{fixed: 'right', align:'center', toolbar: '#barDemo', width:180}\">操作</th>
            </tr>
            </thead>
        </table>
        <script type=\"text/html\" id=\"barDemo\">
            <div class=\"layui-table-cell laytable-cell-4-0-9\">
                <a class=\"layui-btn layui-btn-primary layui-btn-xs\" lay-event=\"detail\">查看</a>
                <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"edit\">编辑</a>
                <a class=\"layui-btn layui-btn-danger layui-btn-xs\" lay-event=\"del\">删除</a>
            </div>
        </script>
    </div>

</div>
", "Test/SimpleFormDemo/inline_with_dynamic_table_form.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Test\\SimpleFormDemo\\inline_with_dynamic_table_form.twig");
    }
}
