<?php

/* Test/SimpleFormDemo/inline_with_dynamic_table.twig */
class __TwigTemplate_f5ee2a0b2092d05bfdb61d083773aeee70db56e5106865b5521aa5db97ce947a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/Test/SimpleFormDemo/layout.twig", "Test/SimpleFormDemo/inline_with_dynamic_table.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Test/SimpleFormDemo/inline_with_dynamic_table.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Test/SimpleFormDemo/inline_with_dynamic_table.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Test/SimpleFormDemo/inline_with_dynamic_table.twig", 2);
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
        echo "<style>
    .horizon-form .input_username, .horizon-form .input_mobile, .horizon-form .input_gender {width: 150px !important;}
    .horizon-form .input_search {width: 300px !important;}
</style>

    <div class=\"foxdou-note\">
    <div class=\"foxdou-row\">
        <div class=\"foxdou-row-title\">
            <span></span>
            <h3><strong>行内横排 + LayUI动态表格</strong></h3>
        </div>
        <p>这个适用于常用的表格数据过滤、展示界面</p>
    </div>
</div>
<div class=\"foxdou-content\">
    <div class=\"layui-tab layui-tab-card\">
        <ul class=\"layui-tab-title\">
            <li class=\"layui-this\">显示效果</li>
            <li>代码</li>
        </ul>
        <div class=\"layui-tab-content\" style=\"\">
            <div class=\"layui-tab-item layui-show\">
                ";
        // line 27
        $this->loadTemplate("/Test/SimpleFormDemo/inline_with_dynamic_table_form.twig", "Test/SimpleFormDemo/inline_with_dynamic_table.twig", 27)->display($context);
        // line 28
        echo "            </div>
            <div class=\"layui-tab-item\">
                <pre><code class=\"twig\">";
        // line 30
        echo twig_escape_filter($this->env, twig_source($this->env, "/Test/SimpleFormDemo/inline_with_dynamic_table_form.twig"));
        echo "</code></pre>
            </div>
        </div>
    </div>
</div>

<script>
    function reload() {
        table.reload('user-table', {
            where: \$('#search-form').serializeJSON(),
            done: function(res, curr, count){
                //如果是异步请求数据方式，res即为你接口返回的信息。
                console.log(res);
            }
        });
    }
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Test/SimpleFormDemo/inline_with_dynamic_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 30,  82 => 28,  80 => 27,  56 => 5,  47 => 4,  37 => 1,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"/Test/SimpleFormDemo/layout.twig\" %}
{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

{% block page_content %}
<style>
    .horizon-form .input_username, .horizon-form .input_mobile, .horizon-form .input_gender {width: 150px !important;}
    .horizon-form .input_search {width: 300px !important;}
</style>

    <div class=\"foxdou-note\">
    <div class=\"foxdou-row\">
        <div class=\"foxdou-row-title\">
            <span></span>
            <h3><strong>行内横排 + LayUI动态表格</strong></h3>
        </div>
        <p>这个适用于常用的表格数据过滤、展示界面</p>
    </div>
</div>
<div class=\"foxdou-content\">
    <div class=\"layui-tab layui-tab-card\">
        <ul class=\"layui-tab-title\">
            <li class=\"layui-this\">显示效果</li>
            <li>代码</li>
        </ul>
        <div class=\"layui-tab-content\" style=\"\">
            <div class=\"layui-tab-item layui-show\">
                {% include \"/Test/SimpleFormDemo/inline_with_dynamic_table_form.twig\" %}
            </div>
            <div class=\"layui-tab-item\">
                <pre><code class=\"twig\">{{ source(\"/Test/SimpleFormDemo/inline_with_dynamic_table_form.twig\")|e }}</code></pre>
            </div>
        </div>
    </div>
</div>

<script>
    function reload() {
        table.reload('user-table', {
            where: \$('#search-form').serializeJSON(),
            done: function(res, curr, count){
                //如果是异步请求数据方式，res即为你接口返回的信息。
                console.log(res);
            }
        });
    }
</script>
{% endblock %}", "Test/SimpleFormDemo/inline_with_dynamic_table.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Test\\SimpleFormDemo\\inline_with_dynamic_table.twig");
    }
}
