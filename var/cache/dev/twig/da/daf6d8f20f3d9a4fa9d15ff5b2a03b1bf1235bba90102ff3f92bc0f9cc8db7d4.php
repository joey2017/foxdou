<?php

/* /Common/_flash_messages.html.twig */
class __TwigTemplate_90f8d6069dfe09889a4e8faa9b004270614eeb5a39219e38b3ba66c18e37d264 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Common/_flash_messages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Common/_flash_messages.html.twig"));

        // line 1
        $context["flashes"] = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "flashes", array());
        // line 3
        echo "    ";
        // line 4
        echo "    ";
        // line 5
        echo "    ";
        // line 6
        echo "    ";
        // line 8
        echo "
";
        // line 9
        if ((isset($context["flashes"]) || array_key_exists("flashes", $context) ? $context["flashes"] : (function () { throw new Twig_Error_Runtime('Variable "flashes" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "    <style>

        .alert {
            position: relative;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }

        .alert-heading {
            color: inherit;
        }

        .alert-link {
            font-weight: 700;
        }

        .alert-dismissible {
            padding-right: 4rem;
        }

        .alert-dismissible .close {
            position: absolute;
            top: 0;
            right: 0;
            padding: 0.75rem 1.25rem;
            color: inherit;
        }

        .alert-primary {
            color: #004085;
            background-color: #cce5ff;
            border-color: #b8daff;
        }

        .alert-primary hr {
            border-top-color: #9fcdff;
        }

        .alert-primary .alert-link {
            color: #002752;
        }

        .alert-secondary {
            color: #383d41;
            background-color: #e2e3e5;
            border-color: #d6d8db;
        }

        .alert-secondary hr {
            border-top-color: #c8cbcf;
        }

        .alert-secondary .alert-link {
            color: #202326;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        .alert-success hr {
            border-top-color: #b1dfbb;
        }

        .alert-success .alert-link {
            color: #0b2e13;
        }

        .alert-info {
            color: #0c5460;
            background-color: #d1ecf1;
            border-color: #bee5eb;
        }

        .alert-info hr {
            border-top-color: #abdde5;
        }

        .alert-info .alert-link {
            color: #062c33;
        }

        .alert-warning {
            color: #856404;
            background-color: #fff3cd;
            border-color: #ffeeba;
        }

        .alert-warning hr {
            border-top-color: #ffe8a1;
        }

        .alert-warning .alert-link {
            color: #533f03;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }

        .alert-danger hr {
            border-top-color: #f1b0b7;
        }

        .alert-danger .alert-link {
            color: #491217;
        }

        .alert-light {
            color: #818182;
            background-color: #fefefe;
            border-color: #fdfdfe;
        }

        .alert-light hr {
            border-top-color: #ececf6;
        }

        .alert-light .alert-link {
            color: #686868;
        }

        .alert-dark {
            color: #1b1e21;
            background-color: #d6d8d9;
            border-color: #c6c8ca;
        }

        .alert-dark hr {
            border-top-color: #b9bbbe;
        }

        .alert-dark .alert-link {
            color: #040505;
        }

    </style>

    <div id=\"flash-messages\" style=\"display: none;padding: 10px;\" class=\"layui-card\">
        <div class=\"layui-card-body\" style=\"padding: 5px;\">
            ";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flashes"]) || array_key_exists("flashes", $context) ? $context["flashes"] : (function () { throw new Twig_Error_Runtime('Variable "flashes" does not exist.', 156, $this->source); })()));
            foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
                // line 157
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 158
                    echo "                    <div class=\"alert alert-dismissible alert-";
                    echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                    echo "\" role=\"alert\">
                        ";
                    // line 159
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 162
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "        </div>
    </div>

    <script>
        layer.open({
            type: 1,
            shade: 0.5,
            title: '提示',
            offset: 't',
            area: ['500px', 'auto'],
            content: \$('#flash-messages'), //捕获的元素，注意：最好该指定的元素要存放在body最外层，否则可能被其它的相对元素所影响
            cancel: function(){
                \$('#flash-messages').hide();
            }
        });

    </script>
";
        }
        // line 181
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/Common/_flash_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 181,  221 => 163,  215 => 162,  206 => 159,  201 => 158,  196 => 157,  192 => 156,  44 => 10,  42 => 9,  39 => 8,  37 => 6,  35 => 5,  33 => 4,  31 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set flashes = app.flashes %}
{#{% set flashes = {#}
    {#'info': [\"info发的撒飞洒发的发生法第三方第三方发顺丰都是\", \"发的撒飞洒发的发生法第三方第三方发顺丰都是\"],#}
    {#'danger': [\"danger发的撒飞洒发的发生法第三方第三方发顺丰都是\", \"发的撒飞洒发的发生法第三方第三方发顺丰都是\"],#}
    {#'warning': [\"warning发的撒飞洒发的发生法第三方第三方发顺丰都是\", \"发的撒飞洒发的发生法第三方第三方发顺丰都是\"],#}
    {#'success': [\"success发success的撒飞洒发的发生法第三方第三方发顺丰都是\", \"发的撒飞洒发的发生法第三方第三方发顺丰都是\"],#}
{#} %}#}

{% if flashes %}
    <style>

        .alert {
            position: relative;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }

        .alert-heading {
            color: inherit;
        }

        .alert-link {
            font-weight: 700;
        }

        .alert-dismissible {
            padding-right: 4rem;
        }

        .alert-dismissible .close {
            position: absolute;
            top: 0;
            right: 0;
            padding: 0.75rem 1.25rem;
            color: inherit;
        }

        .alert-primary {
            color: #004085;
            background-color: #cce5ff;
            border-color: #b8daff;
        }

        .alert-primary hr {
            border-top-color: #9fcdff;
        }

        .alert-primary .alert-link {
            color: #002752;
        }

        .alert-secondary {
            color: #383d41;
            background-color: #e2e3e5;
            border-color: #d6d8db;
        }

        .alert-secondary hr {
            border-top-color: #c8cbcf;
        }

        .alert-secondary .alert-link {
            color: #202326;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        .alert-success hr {
            border-top-color: #b1dfbb;
        }

        .alert-success .alert-link {
            color: #0b2e13;
        }

        .alert-info {
            color: #0c5460;
            background-color: #d1ecf1;
            border-color: #bee5eb;
        }

        .alert-info hr {
            border-top-color: #abdde5;
        }

        .alert-info .alert-link {
            color: #062c33;
        }

        .alert-warning {
            color: #856404;
            background-color: #fff3cd;
            border-color: #ffeeba;
        }

        .alert-warning hr {
            border-top-color: #ffe8a1;
        }

        .alert-warning .alert-link {
            color: #533f03;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }

        .alert-danger hr {
            border-top-color: #f1b0b7;
        }

        .alert-danger .alert-link {
            color: #491217;
        }

        .alert-light {
            color: #818182;
            background-color: #fefefe;
            border-color: #fdfdfe;
        }

        .alert-light hr {
            border-top-color: #ececf6;
        }

        .alert-light .alert-link {
            color: #686868;
        }

        .alert-dark {
            color: #1b1e21;
            background-color: #d6d8d9;
            border-color: #c6c8ca;
        }

        .alert-dark hr {
            border-top-color: #b9bbbe;
        }

        .alert-dark .alert-link {
            color: #040505;
        }

    </style>

    <div id=\"flash-messages\" style=\"display: none;padding: 10px;\" class=\"layui-card\">
        <div class=\"layui-card-body\" style=\"padding: 5px;\">
            {% for label, messages in flashes %}
                {% for message in messages %}
                    <div class=\"alert alert-dismissible alert-{{ label }}\" role=\"alert\">
                        {{ message|trans }}
                    </div>
                {% endfor %}
            {% endfor %}
        </div>
    </div>

    <script>
        layer.open({
            type: 1,
            shade: 0.5,
            title: '提示',
            offset: 't',
            area: ['500px', 'auto'],
            content: \$('#flash-messages'), //捕获的元素，注意：最好该指定的元素要存放在body最外层，否则可能被其它的相对元素所影响
            cancel: function(){
                \$('#flash-messages').hide();
            }
        });

    </script>
{% endif %}


", "/Common/_flash_messages.html.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Common\\_flash_messages.html.twig");
    }
}
