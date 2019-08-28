<?php

/* Common/menu_helpers.twig */
class __TwigTemplate_a20b6e7be79e615f85d8162e3fa55066acd15c7d1bc982370e2517d9a5be33f2 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/menu_helpers.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/menu_helpers.twig"));

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_render_menu_item($__item__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

            // line 2
            echo "  ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "id", array(), "any", true, true)) {
                // line 3
                echo "    ";
                $context["attrs"] = twig_array_merge(array("id" => (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 3, $this->source); })())), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 3, $this->source); })()));
                // line 4
                echo "  ";
            }
            // line 5
            echo "  <select name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sf"]) || array_key_exists("sf", $context) ? $context["sf"] : (function () { throw new Twig_Error_Runtime('Variable "sf" does not exist.', 5, $this->source); })()), "attrs", array(0 => (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 5, $this->source); })())), "method"), "html", null, true);
            echo ">
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 6, $this->source); })()));
            foreach ($context['_seq'] as $context["opt_value"] => $context["opt_text"]) {
                // line 7
                echo "      <option value=\"";
                echo twig_escape_filter($this->env, $context["opt_value"], "html", null, true);
                echo "\" ";
                echo ((((isset($context["current_value"]) || array_key_exists("current_value", $context) ? $context["current_value"] : (function () { throw new Twig_Error_Runtime('Variable "current_value" does not exist.', 7, $this->source); })()) === $context["opt_value"])) ? ("selected=\"selected\"") : (""));
                echo ">
        ";
                // line 8
                echo twig_escape_filter($this->env, $context["opt_text"], "html", null, true);
                echo "
      </option>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['opt_value'], $context['opt_text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "  </select>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Common/menu_helpers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 11,  82 => 8,  75 => 7,  71 => 6,  64 => 5,  61 => 4,  58 => 3,  55 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro render_menu_item(item) %}
  {% if attrs.id is not defined %}
    {% set attrs = {'id': name }|merge(attrs) %}
  {% endif %}
  <select name=\"{{ name }}\" {{ sf.attrs(attrs) }}>
    {% for opt_value, opt_text in choices %}
      <option value=\"{{ opt_value }}\" {{ current_value is same as(opt_value)  ? 'selected=\"selected\"' : '' }}>
        {{ opt_text }}
      </option>
    {% endfor %}
  </select>
{% endmacro %}", "Common/menu_helpers.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Common\\menu_helpers.twig");
    }
}
