<?php

/* Test/SimpleFormDemo/transformers.twig */
class __TwigTemplate_e26763e6e5d62bd69b6619992e7a9c706f7e1df20cd129cc77d52a467c8c6efc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/Test/SimpleFormDemo/layout.twig", "Test/SimpleFormDemo/transformers.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Test/SimpleFormDemo/transformers.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Test/SimpleFormDemo/transformers.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Test/SimpleFormDemo/transformers.twig", 2);
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
                <h3><strong>Simple Form 转换器列表</strong></h3>
            <p>转换器，顾名思义，就是用来转换数据的。转换器需要实现 TransformerInterface。</p>
            </div>
        </div>
    </div>

    <div class=\"foxdou-content\">
        <div class=\"layui-card\">
            <div class=\"layui-card-header\">
                <h1>使用说明</h1>
            </div>
            <div class=\"layui-card-body\">
                <p>基本用法：</p>
                <p>定义 Form 的时候，写在第三列里，转换器参数放在中括号 [ ] 里，如：</p>
                <pre><code class=\"php\">class DemoController extends BaseController {
    public function demoAction(Request \$request, Form \$form) {
        // 初始化 form 表单对象
        \$form->init([
            // '表单字段名' => ['验证器列表', '默认值（此项为可选填，留空则默认为空字符串）', '预处理器1, 预处理器2, ...（不填预处理器则默认不做任何处理)）']
            'roles'       => ['required', '',                                       'split[,]'], // split 转换器根据分割符 \",\" 把输入数据分割成数组
        ]);

        \$data = [
            'roles' => 'ROLE1,ROLE2,ROLE3',
        ];

        // 验证一下数据是否合格
        if(!\$form->validate(\$data)) {
            return ['status' => false, 'msg' => '表单验证错误', 'errors' => \$form->getErrors()];
        }

        \$roles = \$form->roles; // roles 返回的是已经经过 split 转换器处理过的数据，也就是一个数组： ['ROLE1', 'ROLE2', 'ROLE3']

        // 渲染 twig 模板生成页面
        return \$this->render('/Test/SimpleFormDemo/inline_with_dynamic_table.twig', ['form' => \$form]);
    }
}
</code></pre>
            </div>
        </div>
    </div>

    <div class=\"foxdou-content\">
        <div class=\"layui-card\">
            <div class=\"layui-card-header\">
                <h1>转换器列表</h1>
            </div>
            <div class=\"layui-card-body\">
                <table class=\"layui-table\">
                    <tr>
                        <td>名字</td>
                        <td>说明</td>
                    </tr>
                    <tr>
                        <td>split[args]</td>
                        <td>
                            <p>split 转换器，有一个分隔符参数。</p>
                            <p>用途是根据分隔符参数对输入的字符串进行 split 分割操作，返回一个数组，参见上面的说明。</p>
                        </td>
                    </tr>
                    <tr>
                        <td>trim</td>
                        <td>
                            <p>Trim 转换器，无参数。</p>
                            <p>用途是对输入的字符串进行 trim 操作，trim 掉头尾空白字符</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Test/SimpleFormDemo/transformers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 5,  47 => 4,  37 => 1,  35 => 2,  15 => 1,);
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
                <h3><strong>Simple Form 转换器列表</strong></h3>
            <p>转换器，顾名思义，就是用来转换数据的。转换器需要实现 TransformerInterface。</p>
            </div>
        </div>
    </div>

    <div class=\"foxdou-content\">
        <div class=\"layui-card\">
            <div class=\"layui-card-header\">
                <h1>使用说明</h1>
            </div>
            <div class=\"layui-card-body\">
                <p>基本用法：</p>
                <p>定义 Form 的时候，写在第三列里，转换器参数放在中括号 [ ] 里，如：</p>
                <pre><code class=\"php\">class DemoController extends BaseController {
    public function demoAction(Request \$request, Form \$form) {
        // 初始化 form 表单对象
        \$form->init([
            // '表单字段名' => ['验证器列表', '默认值（此项为可选填，留空则默认为空字符串）', '预处理器1, 预处理器2, ...（不填预处理器则默认不做任何处理)）']
            'roles'       => ['required', '',                                       'split[,]'], // split 转换器根据分割符 \",\" 把输入数据分割成数组
        ]);

        \$data = [
            'roles' => 'ROLE1,ROLE2,ROLE3',
        ];

        // 验证一下数据是否合格
        if(!\$form->validate(\$data)) {
            return ['status' => false, 'msg' => '表单验证错误', 'errors' => \$form->getErrors()];
        }

        \$roles = \$form->roles; // roles 返回的是已经经过 split 转换器处理过的数据，也就是一个数组： ['ROLE1', 'ROLE2', 'ROLE3']

        // 渲染 twig 模板生成页面
        return \$this->render('/Test/SimpleFormDemo/inline_with_dynamic_table.twig', ['form' => \$form]);
    }
}
</code></pre>
            </div>
        </div>
    </div>

    <div class=\"foxdou-content\">
        <div class=\"layui-card\">
            <div class=\"layui-card-header\">
                <h1>转换器列表</h1>
            </div>
            <div class=\"layui-card-body\">
                <table class=\"layui-table\">
                    <tr>
                        <td>名字</td>
                        <td>说明</td>
                    </tr>
                    <tr>
                        <td>split[args]</td>
                        <td>
                            <p>split 转换器，有一个分隔符参数。</p>
                            <p>用途是根据分隔符参数对输入的字符串进行 split 分割操作，返回一个数组，参见上面的说明。</p>
                        </td>
                    </tr>
                    <tr>
                        <td>trim</td>
                        <td>
                            <p>Trim 转换器，无参数。</p>
                            <p>用途是对输入的字符串进行 trim 操作，trim 掉头尾空白字符</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
{% endblock %}
", "Test/SimpleFormDemo/transformers.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Test\\SimpleFormDemo\\transformers.twig");
    }
}
