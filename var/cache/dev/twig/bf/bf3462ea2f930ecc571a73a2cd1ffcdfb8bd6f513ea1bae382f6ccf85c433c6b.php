<?php

/* Test/SimpleFormDemo/index.twig */
class __TwigTemplate_8aa9b3306b13f63d7599849350cf596552a00b54eeb92e6b1ff33dc5cbd4bbd8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/Test/SimpleFormDemo/layout.twig", "Test/SimpleFormDemo/index.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/Test/SimpleFormDemo/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Test/SimpleFormDemo/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Test/SimpleFormDemo/index.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Test/SimpleFormDemo/index.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 5
        echo "    <div class=\"foxdou-note\">
        <div class=\"foxdou-row\">
            <div class=\"foxdou-row-title\">
                <span></span>
                <h3><strong>SimpleForm 表单组件使用说明</strong></h3>
            </div>
            <p>简单介绍基本用法</p>
        </div>
    </div>
    <div class=\"foxdou-content\">
        <div class=\"layui-card\">
            <div class=\"layui-card-header\">
                <h1>1. 控制器内生成 form 对象</h1>
            </div>
            <div class=\"layui-card-body\">
                <pre><code class=\"php\">class DemoController extends BaseController {
    // 使用依赖注入方式注入 Form 表单
    public function demoAction(Request \$request, Form \$form) {
        // 初始化 form 表单对象
        \$form->init([
            // 格式为：表单字段名 => ['验证器1, 验证器2, ...', '默认值（此项为可选填，留空则默认为空字符串）', '预处理器1, 预处理器2, ...（不填预处理器则默认不做任何处理)）']

            'username' => ['min_length[2],regex[/[\\x80-\\xff\\w\\-]+/]'],
            'mobile'   => ['mobile'],
            'gender'   => ['enum[M|F]'],
            'search'   => [''],
        ], 'register_form'); // 这里的 \"register_form\" 是 CSRF Token ID，如果不为空则会启用 CSRF 验证，否则此表单启用 CSRF 验证。

        // 渲染 twig 模板生成页面
        return \$this->render('/Test/SimpleFormDemo/inline_with_dynamic_table.twig', ['form' => \$form]);
    }
}</code></pre>
            </div>
        </div>
        <div class=\"layui-card\">
            <div class=\"layui-card-header\">
                <h1>2. Twig模板里使用助手方法快速生成 LayUI 表单<a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("simple_form_demo_show", array("page" => "default"));
        echo "\" style=\"color: blue;\">（点击查看效果）</a></h1>

            </div>
            <div class=\"layui-card-body\">
                <h2>2.1 先在 Twig 文件里导入助手方法到 sf 命名空间：</h2>
                ";
        // line 48
        echo "
                <pre><code class=\"twig\">{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}</code></pre>
                ";
        echo "
                <h2>2.2 然后在 Twig 模板里使用助手方法快速生成 LayUI 表单：</h2>
                <pre><code class=\"twig\">";
        // line 50
        echo twig_escape_filter($this->env, twig_source($this->env, "/Test/SimpleFormDemo/default_form.twig"));
        echo "</code></pre>
                <h2>2.3 Twig 模板里还可以访问 form 对象里各个表单项的属性：</h2>
                ";
        // line 59
        echo "
                <pre><code class=\"twig\">
{% set field_name  = form.username.name %}      {# 表单名字 #}
{% set field_value = form.username.value %}     {# 读取表单值（可能经过处理） #}
{% set raw_value   = form.username.raw_value %} {# 表单项原始值 #}
{% set error       = form.username.error %}     {# 表单项验证错误（ValidationError 对象实例，如果验证通过则为 null） #}
{% set is_required = form.username.required %}  {# 该表单是否是必填项 #}
                ";
        echo "
            </div>
        </div>
        <div class=\"layui-card\">
            <div class=\"layui-card-header\">
                <h1>3. 各个助手方法的<a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("simple_form_demo_show", array("page" => "helpers"));
        echo "\" style=\"color: blue;\">参数详细说明</a></h1>
            </div>
            <div class=\"layui-card-body\">
            </div>
        </div>
        <div class=\"layui-card\">
            <div class=\"layui-card-header\">
                <h1>4. 目前支持的<a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("simple_form_demo_show", array("page" => "validators"));
        echo "\" style=\"color: blue;\">验证器列表</a></h1>
            </div>
            <div class=\"layui-card-body\">
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Test/SimpleFormDemo/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 71,  129 => 64,  114 => 59,  109 => 50,  102 => 48,  94 => 41,  56 => 5,  47 => 4,  37 => 1,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"/Test/SimpleFormDemo/layout.twig\" %}
{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

{% block page_content %}
    <div class=\"foxdou-note\">
        <div class=\"foxdou-row\">
            <div class=\"foxdou-row-title\">
                <span></span>
                <h3><strong>SimpleForm 表单组件使用说明</strong></h3>
            </div>
            <p>简单介绍基本用法</p>
        </div>
    </div>
    <div class=\"foxdou-content\">
        <div class=\"layui-card\">
            <div class=\"layui-card-header\">
                <h1>1. 控制器内生成 form 对象</h1>
            </div>
            <div class=\"layui-card-body\">
                <pre><code class=\"php\">class DemoController extends BaseController {
    // 使用依赖注入方式注入 Form 表单
    public function demoAction(Request \$request, Form \$form) {
        // 初始化 form 表单对象
        \$form->init([
            // 格式为：表单字段名 => ['验证器1, 验证器2, ...', '默认值（此项为可选填，留空则默认为空字符串）', '预处理器1, 预处理器2, ...（不填预处理器则默认不做任何处理)）']

            'username' => ['min_length[2],regex[/[\\x80-\\xff\\w\\-]+/]'],
            'mobile'   => ['mobile'],
            'gender'   => ['enum[M|F]'],
            'search'   => [''],
        ], 'register_form'); // 这里的 \"register_form\" 是 CSRF Token ID，如果不为空则会启用 CSRF 验证，否则此表单启用 CSRF 验证。

        // 渲染 twig 模板生成页面
        return \$this->render('/Test/SimpleFormDemo/inline_with_dynamic_table.twig', ['form' => \$form]);
    }
}</code></pre>
            </div>
        </div>
        <div class=\"layui-card\">
            <div class=\"layui-card-header\">
                <h1>2. Twig模板里使用助手方法快速生成 LayUI 表单<a href=\"{{ path('simple_form_demo_show', {'page': 'default'}) }}\" style=\"color: blue;\">（点击查看效果）</a></h1>

            </div>
            <div class=\"layui-card-body\">
                <h2>2.1 先在 Twig 文件里导入助手方法到 sf 命名空间：</h2>
                {% verbatim %}
                <pre><code class=\"twig\">{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}</code></pre>
                {% endverbatim %}
                <h2>2.2 然后在 Twig 模板里使用助手方法快速生成 LayUI 表单：</h2>
                <pre><code class=\"twig\">{{ source(\"/Test/SimpleFormDemo/default_form.twig\")|e }}</code></pre>
                <h2>2.3 Twig 模板里还可以访问 form 对象里各个表单项的属性：</h2>
                {% verbatim %}
                <pre><code class=\"twig\">
{% set field_name  = form.username.name %}      {# 表单名字 #}
{% set field_value = form.username.value %}     {# 读取表单值（可能经过处理） #}
{% set raw_value   = form.username.raw_value %} {# 表单项原始值 #}
{% set error       = form.username.error %}     {# 表单项验证错误（ValidationError 对象实例，如果验证通过则为 null） #}
{% set is_required = form.username.required %}  {# 该表单是否是必填项 #}
                {% endverbatim %}
            </div>
        </div>
        <div class=\"layui-card\">
            <div class=\"layui-card-header\">
                <h1>3. 各个助手方法的<a href=\"{{ path('simple_form_demo_show', {'page': 'helpers'}) }}\" style=\"color: blue;\">参数详细说明</a></h1>
            </div>
            <div class=\"layui-card-body\">
            </div>
        </div>
        <div class=\"layui-card\">
            <div class=\"layui-card-header\">
                <h1>4. 目前支持的<a href=\"{{ path('simple_form_demo_show', {'page': 'validators'}) }}\" style=\"color: blue;\">验证器列表</a></h1>
            </div>
            <div class=\"layui-card-body\">
            </div>
        </div>
    </div>
{% endblock %}
", "Test/SimpleFormDemo/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Test\\SimpleFormDemo\\index.twig");
    }
}
