<?php

/* Test/SimpleFormDemo/validators.twig */
class __TwigTemplate_debba4a097b4b2f33777797c7bac906ba284fec860a3deb396816f30ab7e0f37 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/Test/SimpleFormDemo/layout.twig", "Test/SimpleFormDemo/validators.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Test/SimpleFormDemo/validators.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Test/SimpleFormDemo/validators.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Test/SimpleFormDemo/validators.twig", 2);
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
                <h3><strong>Simple Form 验证器列表</strong></h3>
            </div>
            <p>简单介绍各个验证器的基本用法</p>
        </div>
    </div>
    <div class=\"foxdou-content\">
        <div class=\"layui-card\">
            <div class=\"layui-card-header\">
                <h1>特殊验证器</h1>
            </div>
            <div class=\"layui-card-body\">
                <table class=\"layui-table\">
                    <tr>
                        <td>名字</td>
                        <td>说明</td>
                    </tr>
                    <tr>
                        <td>required</td>
                        <td>
                            指定该表单项为必填项。<span style=\"color:red;\">注意：如果表单项没指定 required 验证器，那么，一个空字符串值可以通过所有其他验证器的验证！</span><br>
                            无论是否表单项是否有 requred 验证器，表单项都会有 field.required 属性。如果有 requred 验证器则 field.required 为 true，否则为
                            false
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class=\"layui-card\">
            <div class=\"layui-card-header\">
                <h1>普通验证器列表</h1>
            </div>
            <div class=\"layui-card-body\">
                <table class=\"layui-table\">
                    <tr>
                        <td>名字</td>
                        <td>说明</td>
                    </tr>
                    <tr>
                        <td>alpha_dash</td>
                        <td>字母和下划线</td>
                    </tr>
                    <tr>
                        <td>alpha_numeric</td>
                        <td>字母和数字</td>
                    </tr>
                    <tr>
                        <td>alpha</td>
                        <td>纯字母</td>
                    </tr>
                    <tr>
                        <td>base64</td>
                        <td>base64</td>
                    </tr>
                    <tr>
                        <td>decimal</td>
                        <td>decimal 类型的数字</td>
                    </tr>
                    <tr>
                        <td>digit</td>
                        <td>纯数字字符串，可以 0 开头</td>
                    </tr>
                    <tr>
                        <td>date</td>
                        <td>日期，格式为 2018-12-12</td>
                    </tr>
                    <tr>
                        <td>date_time</td>
                        <td>日期时间，格式为 2018-12-12 12:34:56</td>
                    </tr>
                    <tr>
                        <td>email</td>
                        <td>Email地址</td>
                    </tr>
                    <tr>
                        <td>enum[arg]</td>
                        <td>枚举类型，各个值之间用 | 分开，如为 enum[V|A|L|U|E|S]，可以用 to_enum(\$array) 方法把一个数组快速生成一个 enum 验证器<br>
                            <pre>
    \$form->init([
        'sex' => ['enum[M|F]']
    ]);
                            </pre>
                        </td>
                    </tr>
                    <tr>
                        <td>exact_length[arg]</td>
                        <td>确切长度的字符串，参数为指定的长度。比如 exact_length[12]</td>
                    </tr>
                    <tr>
                        <td>id_card</td>
                        <td>中国身份证，只支持 18 位身份证号码</td>
                    </tr>
                    <tr>
                        <td>integer</td>
                        <td>整形数字，如 -1， 0， 100， 11111</td>
                    </tr>
                    <tr>
                        <td>natural</td>
                        <td>自然数，从 0 开始。0，1，2，3...</td>
                    </tr>
                    <tr>
                        <td>min[arg]</td>
                        <td>最小值，如 min[5]，则该表单值最小为 5，支持浮点数。</td>
                    </tr>
                    <tr>
                        <td>max[arg]</td>
                        <td>最小值，如 max[100]，则该表单值最大为 100，支持浮点数。</td>
                    </tr>
                    <tr>
                        <td>matches[arg]</td>
                        <td>匹配目标表单项的值，用法：matches[target_field_name]。典型用途是用于两次密码确认，如：<br>
                            <pre>
    \$form->init([
        'password_confirm' => ['matches[password]']
    ]);
                            </pre>
                        </td>
                    </tr>
                    <tr>
                        <td>max_length[arg]</td>
                        <td>最大长度，如 max_length[20]，则该表单值最多可以输入 20 个字符</td>
                    </tr>
                    <tr>
                        <td>min_length[arg]</td>
                        <td>最小长度，如 min_length[5]，则该表单值最短为 5 个字符</td>
                    </tr>
                    <tr>
                        <td>mobile</td>
                        <td>中国手机号</td>
                    </tr>
                    <tr>
                        <td>numeric</td>
                        <td>数字类型，包括整形、浮点等，内部调用 numeric 函数来判断</td>
                    </tr>
                    <tr>
                        <td>regex[arg]</td>
                        <td>自定义正则表达式验证器。arg 参数为任意合法的 pcre 正则表达式。如：<br>
                            <pre>
    \$form->init([
        'guid' => ['regex[/^\\{?[A-Z0-9]{8}-[A-Z0-9]{4}-[A-Z0-9]{4}-[A-Z0-9]{4}-[A-Z0-9]{12}\\}?\$/]']
    ]);
                            </pre>
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
        return "Test/SimpleFormDemo/validators.twig";
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
                <h3><strong>Simple Form 验证器列表</strong></h3>
            </div>
            <p>简单介绍各个验证器的基本用法</p>
        </div>
    </div>
    <div class=\"foxdou-content\">
        <div class=\"layui-card\">
            <div class=\"layui-card-header\">
                <h1>特殊验证器</h1>
            </div>
            <div class=\"layui-card-body\">
                <table class=\"layui-table\">
                    <tr>
                        <td>名字</td>
                        <td>说明</td>
                    </tr>
                    <tr>
                        <td>required</td>
                        <td>
                            指定该表单项为必填项。<span style=\"color:red;\">注意：如果表单项没指定 required 验证器，那么，一个空字符串值可以通过所有其他验证器的验证！</span><br>
                            无论是否表单项是否有 requred 验证器，表单项都会有 field.required 属性。如果有 requred 验证器则 field.required 为 true，否则为
                            false
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class=\"layui-card\">
            <div class=\"layui-card-header\">
                <h1>普通验证器列表</h1>
            </div>
            <div class=\"layui-card-body\">
                <table class=\"layui-table\">
                    <tr>
                        <td>名字</td>
                        <td>说明</td>
                    </tr>
                    <tr>
                        <td>alpha_dash</td>
                        <td>字母和下划线</td>
                    </tr>
                    <tr>
                        <td>alpha_numeric</td>
                        <td>字母和数字</td>
                    </tr>
                    <tr>
                        <td>alpha</td>
                        <td>纯字母</td>
                    </tr>
                    <tr>
                        <td>base64</td>
                        <td>base64</td>
                    </tr>
                    <tr>
                        <td>decimal</td>
                        <td>decimal 类型的数字</td>
                    </tr>
                    <tr>
                        <td>digit</td>
                        <td>纯数字字符串，可以 0 开头</td>
                    </tr>
                    <tr>
                        <td>date</td>
                        <td>日期，格式为 2018-12-12</td>
                    </tr>
                    <tr>
                        <td>date_time</td>
                        <td>日期时间，格式为 2018-12-12 12:34:56</td>
                    </tr>
                    <tr>
                        <td>email</td>
                        <td>Email地址</td>
                    </tr>
                    <tr>
                        <td>enum[arg]</td>
                        <td>枚举类型，各个值之间用 | 分开，如为 enum[V|A|L|U|E|S]，可以用 to_enum(\$array) 方法把一个数组快速生成一个 enum 验证器<br>
                            <pre>
    \$form->init([
        'sex' => ['enum[M|F]']
    ]);
                            </pre>
                        </td>
                    </tr>
                    <tr>
                        <td>exact_length[arg]</td>
                        <td>确切长度的字符串，参数为指定的长度。比如 exact_length[12]</td>
                    </tr>
                    <tr>
                        <td>id_card</td>
                        <td>中国身份证，只支持 18 位身份证号码</td>
                    </tr>
                    <tr>
                        <td>integer</td>
                        <td>整形数字，如 -1， 0， 100， 11111</td>
                    </tr>
                    <tr>
                        <td>natural</td>
                        <td>自然数，从 0 开始。0，1，2，3...</td>
                    </tr>
                    <tr>
                        <td>min[arg]</td>
                        <td>最小值，如 min[5]，则该表单值最小为 5，支持浮点数。</td>
                    </tr>
                    <tr>
                        <td>max[arg]</td>
                        <td>最小值，如 max[100]，则该表单值最大为 100，支持浮点数。</td>
                    </tr>
                    <tr>
                        <td>matches[arg]</td>
                        <td>匹配目标表单项的值，用法：matches[target_field_name]。典型用途是用于两次密码确认，如：<br>
                            <pre>
    \$form->init([
        'password_confirm' => ['matches[password]']
    ]);
                            </pre>
                        </td>
                    </tr>
                    <tr>
                        <td>max_length[arg]</td>
                        <td>最大长度，如 max_length[20]，则该表单值最多可以输入 20 个字符</td>
                    </tr>
                    <tr>
                        <td>min_length[arg]</td>
                        <td>最小长度，如 min_length[5]，则该表单值最短为 5 个字符</td>
                    </tr>
                    <tr>
                        <td>mobile</td>
                        <td>中国手机号</td>
                    </tr>
                    <tr>
                        <td>numeric</td>
                        <td>数字类型，包括整形、浮点等，内部调用 numeric 函数来判断</td>
                    </tr>
                    <tr>
                        <td>regex[arg]</td>
                        <td>自定义正则表达式验证器。arg 参数为任意合法的 pcre 正则表达式。如：<br>
                            <pre>
    \$form->init([
        'guid' => ['regex[/^\\{?[A-Z0-9]{8}-[A-Z0-9]{4}-[A-Z0-9]{4}-[A-Z0-9]{4}-[A-Z0-9]{12}\\}?\$/]']
    ]);
                            </pre>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
{% endblock %}
", "Test/SimpleFormDemo/validators.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Test\\SimpleFormDemo\\validators.twig");
    }
}
