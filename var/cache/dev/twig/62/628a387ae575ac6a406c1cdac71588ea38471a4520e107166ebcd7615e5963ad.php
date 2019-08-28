<?php

/* Test/SimpleFormDemo/full_row.twig */
class __TwigTemplate_74fa9df3bd366569f589deac73ad8685cc5af05eaa7c938c904d9b157f84806e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/Test/SimpleFormDemo/layout.twig", "Test/SimpleFormDemo/full_row.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Test/SimpleFormDemo/full_row.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Test/SimpleFormDemo/full_row.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Test/SimpleFormDemo/full_row.twig", 2);
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
                <h3><strong>整行布局</strong></h3>
            </div>
            <p>适合于快速生成要求不高的、整行显示的表单</p>
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
        // line 22
        $this->loadTemplate("/Test/SimpleFormDemo/full_row_form.twig", "Test/SimpleFormDemo/full_row.twig", 22)->display($context);
        // line 23
        echo "                </div>
                <div class=\"layui-tab-item\">
                    <pre><code class=\"twig\">";
        // line 25
        echo twig_escape_filter($this->env, twig_source($this->env, "/Test/SimpleFormDemo/full_row_form.twig"));
        echo "</code></pre>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Test/SimpleFormDemo/full_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  77 => 23,  75 => 22,  56 => 5,  47 => 4,  37 => 1,  35 => 2,  15 => 1,);
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
                <h3><strong>整行布局</strong></h3>
            </div>
            <p>适合于快速生成要求不高的、整行显示的表单</p>
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
                    {% include \"/Test/SimpleFormDemo/full_row_form.twig\" %}
                </div>
                <div class=\"layui-tab-item\">
                    <pre><code class=\"twig\">{{ source(\"/Test/SimpleFormDemo/full_row_form.twig\")|e }}</code></pre>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "Test/SimpleFormDemo/full_row.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Test\\SimpleFormDemo\\full_row.twig");
    }
}
