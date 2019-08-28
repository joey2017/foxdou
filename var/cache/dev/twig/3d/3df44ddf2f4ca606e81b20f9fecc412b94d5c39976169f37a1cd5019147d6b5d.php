<?php

/* /Common/simple_form_helpers_raw.html.twig */
class __TwigTemplate_ca95a59c3bed77ad8dbd34ebce02fb19148cbe7feb7356cf7117d1c58899d9f5 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Common/simple_form_helpers_raw.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Common/simple_form_helpers_raw.html.twig"));

        // line 8
        echo "
";
        // line 18
        echo "
";
        // line 28
        echo "
";
        // line 33
        echo "
";
        // line 38
        echo "
";
        // line 43
        echo "
";
        // line 48
        echo "
";
        // line 77
        echo "
";
        // line 96
        echo "
";
        // line 112
        echo "
";
        // line 122
        echo "
";
        // line 135
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_attrs_raw($__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attrs" => $__attrs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attrs_raw"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attrs_raw"));

            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 3, $this->source); })()));
            foreach ($context['_seq'] as $context["attrName"] => $context["attrValue"]) {
                // line 4
                echo "            ";
                echo ((((" " . $context["attrName"]) . "=\"") . $context["attrValue"]) . "\"");
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrName'], $context['attrValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 9
    public function macro_label_raw($__for__ = null, $__label_text__ = null, $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "for" => $__for__,
            "label_text" => $__label_text__,
            "attrs" => $__attrs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "label_raw"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "label_raw"));

            // line 10
            echo "    ";
            ob_start();
            // line 11
            echo "        ";
            $context["sf"] = $this;
            // line 12
            echo "        ";
            $context["attrs"] = twig_array_merge(array("for" => (isset($context["for"]) || array_key_exists("for", $context) ? $context["for"] : (function () { throw new Twig_Error_Runtime('Variable "for" does not exist.', 12, $this->source); })())), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 12, $this->source); })()));
            // line 13
            echo "        <label ";
            echo $context["sf"]->macro_attrs_raw((isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 13, $this->source); })()));
            echo ">
            ";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["label_text"]) || array_key_exists("label_text", $context) ? $context["label_text"] : (function () { throw new Twig_Error_Runtime('Variable "label_text" does not exist.', 14, $this->source); })()), "html", null, true);
            echo "
        </label>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 19
    public function macro_input_raw($__type__ = null, $__name__ = null, $__value__ = null, $__attrs__ = array(), $__raw__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "name" => $__name__,
            "value" => $__value__,
            "attrs" => $__attrs__,
            "raw" => $__raw__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "input_raw"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "input_raw"));

            // line 20
            echo "    ";
            ob_start();
            // line 21
            echo "        ";
            $context["sf"] = $this;
            // line 22
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "id", array(), "any", true, true)) {
                // line 23
                echo "            ";
                // line 24
                echo "        ";
            }
            // line 25
            echo "        <input name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 25, $this->source); })()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (((isset($context["raw"]) || array_key_exists("raw", $context) ? $context["raw"] : (function () { throw new Twig_Error_Runtime('Variable "raw" does not exist.', 25, $this->source); })())) ? ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 25, $this->source); })())) : ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 25, $this->source); })()))), "html", null, true);
            echo "\" type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 25, $this->source); })()), "html", null, true);
            echo "\" ";
            echo $context["sf"]->macro_attrs_raw((isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 25, $this->source); })()));
            echo " />
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 29
    public function macro_text_raw($__name__ = null, $__value__ = null, $__attrs__ = array(), $__raw__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attrs" => $__attrs__,
            "raw" => $__raw__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "text_raw"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "text_raw"));

            // line 30
            echo "    ";
            $context["sf"] = $this;
            // line 31
            echo "    ";
            echo $context["sf"]->macro_input_raw("text", (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 31, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 31, $this->source); })()), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 31, $this->source); })()), (isset($context["raw"]) || array_key_exists("raw", $context) ? $context["raw"] : (function () { throw new Twig_Error_Runtime('Variable "raw" does not exist.', 31, $this->source); })()));
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 34
    public function macro_password_raw($__name__ = null, $__value__ = null, $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attrs" => $__attrs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "password_raw"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "password_raw"));

            // line 35
            echo "    ";
            $context["sf"] = $this;
            // line 36
            echo "    ";
            echo $context["sf"]->macro_input_raw("password", (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 36, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 36, $this->source); })()), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 36, $this->source); })()), true);
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 39
    public function macro_hidden_raw($__name__ = null, $__value__ = null, $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attrs" => $__attrs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "hidden_raw"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "hidden_raw"));

            // line 40
            echo "    ";
            $context["sf"] = $this;
            // line 41
            echo "    ";
            echo $context["sf"]->macro_input_raw("hidden", (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 41, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 41, $this->source); })()), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 41, $this->source); })()), false);
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 44
    public function macro_file_raw($__name__ = null, $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "attrs" => $__attrs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "file_raw"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "file_raw"));

            // line 45
            echo "    ";
            $context["sf"] = $this;
            // line 46
            echo "    ";
            echo $context["sf"]->macro_input_raw("file", (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 46, $this->source); })()), "", (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 46, $this->source); })()), false);
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 49
    public function macro_checkbox_raw($__name__ = null, $__choices__ = null, $__checked_values__ = null, $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "choices" => $__choices__,
            "checked_values" => $__checked_values__,
            "attrs" => $__attrs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "checkbox_raw"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "checkbox_raw"));

            // line 50
            echo "    ";
            $context["sf"] = $this;
            // line 51
            echo "
    ";
            // line 52
            $context["checked_values"] = ((((isset($context["checked_values"]) || array_key_exists("checked_values", $context) ? $context["checked_values"] : (function () { throw new Twig_Error_Runtime('Variable "checked_values" does not exist.', 52, $this->source); })()) === null)) ? (array()) : (((twig_test_iterable((isset($context["checked_values"]) || array_key_exists("checked_values", $context) ? $context["checked_values"] : (function () { throw new Twig_Error_Runtime('Variable "checked_values" does not exist.', 52, $this->source); })()))) ? ((isset($context["checked_values"]) || array_key_exists("checked_values", $context) ? $context["checked_values"] : (function () { throw new Twig_Error_Runtime('Variable "checked_values" does not exist.', 52, $this->source); })())) : (array(0 => (isset($context["checked_values"]) || array_key_exists("checked_values", $context) ? $context["checked_values"] : (function () { throw new Twig_Error_Runtime('Variable "checked_values" does not exist.', 52, $this->source); })()))))));
            // line 53
            echo "    ";
            $context["attrs"] = twig_array_merge(array("value" => ""), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 53, $this->source); })()));
            // line 54
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 54, $this->source); })()));
            foreach ($context['_seq'] as $context["opt_value"] => $context["title"]) {
                // line 55
                echo "        ";
                // line 56
                echo "        ";
                $context["opt_value"] = sprintf("%s", $context["opt_value"]);
                // line 57
                echo "        ";
                // line 58
                echo "        ";
                $context["item_attrs"] = twig_array_merge((isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 58, $this->source); })()), array("title" => $context["title"]));
                // line 59
                echo "
        ";
                // line 61
                echo "        ";
                $context["checked"] = false;
                // line 62
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["checked_values"]) || array_key_exists("checked_values", $context) ? $context["checked_values"] : (function () { throw new Twig_Error_Runtime('Variable "checked_values" does not exist.', 62, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["checked_value"]) {
                    if ( !(isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 62, $this->source); })())) {
                        // line 63
                        echo "            ";
                        $context["checked_value"] = sprintf("%s", $context["checked_value"]);
                        // line 64
                        echo "            ";
                        if (($context["opt_value"] === $context["checked_value"])) {
                            // line 65
                            echo "                ";
                            $context["checked"] = true;
                            // line 66
                            echo "            ";
                        }
                        // line 67
                        echo "        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['checked_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "
        ";
                // line 69
                if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 69, $this->source); })())) {
                    // line 70
                    echo "            ";
                    $context["item_attrs"] = twig_array_merge(array("checked" => "checked"), (isset($context["item_attrs"]) || array_key_exists("item_attrs", $context) ? $context["item_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "item_attrs" does not exist.', 70, $this->source); })()));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "
        ";
                // line 73
                echo $context["sf"]->macro_input_raw("checkbox", (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 73, $this->source); })()), $context["opt_value"], (isset($context["item_attrs"]) || array_key_exists("item_attrs", $context) ? $context["item_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "item_attrs" does not exist.', 73, $this->source); })()));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['opt_value'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 78
    public function macro_radio_raw($__name__ = null, $__choices__ = null, $__selected_value__ = null, $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "choices" => $__choices__,
            "selected_value" => $__selected_value__,
            "attrs" => $__attrs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "radio_raw"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "radio_raw"));

            // line 79
            echo "    ";
            $context["sf"] = $this;
            // line 80
            echo "
    ";
            // line 81
            $context["selected_value"] = ((((isset($context["selected_value"]) || array_key_exists("selected_value", $context) ? $context["selected_value"] : (function () { throw new Twig_Error_Runtime('Variable "selected_value" does not exist.', 81, $this->source); })()) === null)) ? ((isset($context["selected_value"]) || array_key_exists("selected_value", $context) ? $context["selected_value"] : (function () { throw new Twig_Error_Runtime('Variable "selected_value" does not exist.', 81, $this->source); })())) : (sprintf("%s", (isset($context["selected_value"]) || array_key_exists("selected_value", $context) ? $context["selected_value"] : (function () { throw new Twig_Error_Runtime('Variable "selected_value" does not exist.', 81, $this->source); })()))));
            // line 82
            echo "    ";
            $context["attrs"] = twig_array_merge(array("opt_value" => ""), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 82, $this->source); })()));
            // line 83
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 83, $this->source); })()));
            foreach ($context['_seq'] as $context["opt_value"] => $context["title"]) {
                // line 84
                echo "        ";
                // line 85
                echo "        ";
                $context["opt_value"] = sprintf("%s", $context["opt_value"]);
                // line 86
                echo "        ";
                // line 87
                echo "
        ";
                // line 88
                $context["item_attrs"] = twig_array_merge((isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 88, $this->source); })()), array("title" => $context["title"]));
                // line 89
                echo "        ";
                if (($context["opt_value"] === (isset($context["selected_value"]) || array_key_exists("selected_value", $context) ? $context["selected_value"] : (function () { throw new Twig_Error_Runtime('Variable "selected_value" does not exist.', 89, $this->source); })()))) {
                    // line 90
                    echo "            ";
                    $context["item_attrs"] = twig_array_merge(array("checked" => "checked"), (isset($context["item_attrs"]) || array_key_exists("item_attrs", $context) ? $context["item_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "item_attrs" does not exist.', 90, $this->source); })()));
                    // line 91
                    echo "        ";
                }
                // line 92
                echo "
        ";
                // line 93
                echo $context["sf"]->macro_input_raw("radio", (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 93, $this->source); })()), $context["opt_value"], (isset($context["item_attrs"]) || array_key_exists("item_attrs", $context) ? $context["item_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "item_attrs" does not exist.', 93, $this->source); })()));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['opt_value'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 97
    public function macro_select_raw($__name__ = null, $__choices__ = null, $__selected_value__ = null, $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "choices" => $__choices__,
            "selected_value" => $__selected_value__,
            "attrs" => $__attrs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "select_raw"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "select_raw"));

            // line 98
            echo "    ";
            $context["sf"] = $this;
            // line 99
            echo "
    ";
            // line 101
            echo "    ";
            $context["selected_value"] = ((((isset($context["selected_value"]) || array_key_exists("selected_value", $context) ? $context["selected_value"] : (function () { throw new Twig_Error_Runtime('Variable "selected_value" does not exist.', 101, $this->source); })()) === null)) ? ((isset($context["selected_value"]) || array_key_exists("selected_value", $context) ? $context["selected_value"] : (function () { throw new Twig_Error_Runtime('Variable "selected_value" does not exist.', 101, $this->source); })())) : (sprintf("%s", (isset($context["selected_value"]) || array_key_exists("selected_value", $context) ? $context["selected_value"] : (function () { throw new Twig_Error_Runtime('Variable "selected_value" does not exist.', 101, $this->source); })()))));
            // line 102
            echo "    ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "id", array(), "any", true, true)) {
                // line 103
                echo "        ";
                // line 104
                echo "    ";
            }
            // line 105
            echo "    <select name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 105, $this->source); })()), "html", null, true);
            echo "\" ";
            echo $context["sf"]->macro_attrs_raw((isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 105, $this->source); })()));
            echo ">
        ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 106, $this->source); })()));
            foreach ($context['_seq'] as $context["opt_value"] => $context["opt_text"]) {
                // line 107
                echo "            ";
                $context["opt_value"] = sprintf("%s", $context["opt_value"]);
                // line 108
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $context["opt_value"], "html", null, true);
                echo "\" ";
                echo ((($context["opt_value"] === (isset($context["selected_value"]) || array_key_exists("selected_value", $context) ? $context["selected_value"] : (function () { throw new Twig_Error_Runtime('Variable "selected_value" does not exist.', 108, $this->source); })()))) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo twig_escape_filter($this->env, $context["opt_text"], "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['opt_value'], $context['opt_text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "    </select>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 113
    public function macro_textarea_raw($__name__ = null, $__value__ = "", $__attrs__ = array(), $__raw__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attrs" => $__attrs__,
            "raw" => $__raw__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "textarea_raw"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "textarea_raw"));

            // line 114
            echo "    ";
            $context["sf"] = $this;
            // line 115
            echo "
    ";
            // line 116
            if ( !twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "id", array(), "any", true, true)) {
                // line 117
                echo "        ";
                // line 118
                echo "    ";
            }
            // line 119
            echo "
    <textarea name=\"";
            // line 120
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 120, $this->source); })()), "html", null, true);
            echo "\" ";
            echo $context["sf"]->macro_attrs_raw((isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 120, $this->source); })()));
            echo ">";
            echo twig_escape_filter($this->env, (((isset($context["raw"]) || array_key_exists("raw", $context) ? $context["raw"] : (function () { throw new Twig_Error_Runtime('Variable "raw" does not exist.', 120, $this->source); })())) ? ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 120, $this->source); })())) : ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 120, $this->source); })()))), "html", null, true);
            echo "</textarea>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 123
    public function macro_button_raw($__name__ = null, $__title__ = null, $__value__ = null, $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "attrs" => $__attrs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "button_raw"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "button_raw"));

            // line 124
            echo "    ";
            $context["sf"] = $this;
            // line 125
            echo "
    ";
            // line 126
            if ( !twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "id", array(), "any", true, true)) {
                // line 127
                echo "        ";
                // line 128
                echo "    ";
            }
            // line 129
            echo "    ";
            if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 129, $this->source); })())) {
                // line 130
                echo "        ";
                $context["attrs"] = twig_array_merge(array("name" => (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 130, $this->source); })()), "value" => (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 130, $this->source); })())), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 130, $this->source); })()));
                // line 131
                echo "    ";
            }
            // line 132
            echo "
    <button type=\"button\" ";
            // line 133
            echo $context["sf"]->macro_attrs_raw((isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 133, $this->source); })()));
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 133, $this->source); })()), "html", null, true);
            echo "</button>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 136
    public function macro_submit_raw($__name__ = null, $__title__ = null, $__value__ = null, $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "attrs" => $__attrs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "submit_raw"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "submit_raw"));

            // line 137
            echo "    ";
            $context["sf"] = $this;
            // line 138
            echo "
    ";
            // line 139
            if ( !twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "id", array(), "any", true, true)) {
                // line 140
                echo "        ";
                // line 141
                echo "    ";
            }
            // line 142
            echo "
    ";
            // line 143
            if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 143, $this->source); })())) {
                // line 144
                echo "        ";
                $context["attrs"] = twig_array_merge(array("name" => (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 144, $this->source); })()), "value" => (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 144, $this->source); })())), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 144, $this->source); })()));
                // line 145
                echo "    ";
            }
            // line 146
            echo "
    <button type=\"submit\" ";
            // line 147
            echo $context["sf"]->macro_attrs_raw((isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 147, $this->source); })()));
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 147, $this->source); })()), "html", null, true);
            echo "</button>

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
        return "/Common/simple_form_helpers_raw.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  852 => 147,  849 => 146,  846 => 145,  843 => 144,  841 => 143,  838 => 142,  835 => 141,  833 => 140,  831 => 139,  828 => 138,  825 => 137,  804 => 136,  785 => 133,  782 => 132,  779 => 131,  776 => 130,  773 => 129,  770 => 128,  768 => 127,  766 => 126,  763 => 125,  760 => 124,  739 => 123,  718 => 120,  715 => 119,  712 => 118,  710 => 117,  708 => 116,  705 => 115,  702 => 114,  681 => 113,  665 => 110,  652 => 108,  649 => 107,  645 => 106,  638 => 105,  635 => 104,  633 => 103,  630 => 102,  627 => 101,  624 => 99,  621 => 98,  600 => 97,  579 => 93,  576 => 92,  573 => 91,  570 => 90,  567 => 89,  565 => 88,  562 => 87,  560 => 86,  557 => 85,  555 => 84,  550 => 83,  547 => 82,  545 => 81,  542 => 80,  539 => 79,  518 => 78,  502 => 75,  494 => 73,  491 => 72,  488 => 71,  485 => 70,  483 => 69,  480 => 68,  473 => 67,  470 => 66,  467 => 65,  464 => 64,  461 => 63,  455 => 62,  452 => 61,  449 => 59,  446 => 58,  444 => 57,  441 => 56,  439 => 55,  434 => 54,  431 => 53,  429 => 52,  426 => 51,  423 => 50,  402 => 49,  384 => 46,  381 => 45,  362 => 44,  344 => 41,  341 => 40,  321 => 39,  303 => 36,  300 => 35,  280 => 34,  262 => 31,  259 => 30,  238 => 29,  213 => 25,  210 => 24,  208 => 23,  205 => 22,  202 => 21,  199 => 20,  177 => 19,  158 => 14,  153 => 13,  150 => 12,  147 => 11,  144 => 10,  124 => 9,  108 => 6,  99 => 4,  94 => 3,  91 => 2,  73 => 1,  62 => 135,  59 => 122,  56 => 112,  53 => 96,  50 => 77,  47 => 48,  44 => 43,  41 => 38,  38 => 33,  35 => 28,  32 => 18,  29 => 8,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro attrs_raw(attrs={}) %}
    {% spaceless %}
        {% for attrName, attrValue in attrs %}
            {{ \" #{attrName}=\\\"#{attrValue}\\\"\"|raw }}
        {% endfor %}
    {% endspaceless %}
{% endmacro %}

{% macro label_raw(for, label_text, attrs={}) %}
    {% spaceless %}
        {% import _self as sf %}
        {% set attrs = {'for': for}|merge(attrs) %}
        <label {{ sf.attrs_raw(attrs) }}>
            {{ label_text }}
        </label>
    {% endspaceless %}
{% endmacro %}

{% macro input_raw(type, name, value, attrs={}, raw=false) %}
    {% spaceless %}
        {% import _self as sf %}
        {% if attrs.id is not defined %}
            {#{% set attrs = {'id': name }|merge(attrs) %}#}
        {% endif %}
        <input name=\"{{ name }}\" value=\"{{ raw ? value|raw : value }}\" type=\"{{ type }}\" {{ sf.attrs_raw(attrs) }} />
    {% endspaceless %}
{% endmacro %}

{% macro text_raw(name, value, attrs={}, raw=false) %}
    {% import _self as sf %}
    {{ sf.input_raw('text', name, value, attrs, raw) }}
{% endmacro %}

{% macro password_raw(name, value, attrs={}) %}
    {% import _self as sf %}
    {{ sf.input_raw('password', name, value, attrs, true) }}
{% endmacro %}

{% macro hidden_raw(name, value, attrs={}) %}
    {% import _self as sf %}
    {{ sf.input_raw('hidden', name, value, attrs, false) }}
{% endmacro %}

{% macro file_raw(name, attrs={}) %}
    {% import _self as sf %}
    {{ sf.input_raw('file', name, '', attrs, false) }}
{% endmacro %}

{% macro checkbox_raw(name, choices, checked_values=null, attrs={}) %}
    {% import _self as sf %}

    {% set checked_values = checked_values is same as (null) ? [] : (checked_values is iterable ? checked_values : [checked_values]) %}
    {% set attrs = {'value': ''}|merge(attrs) %}
    {% for opt_value, title in choices %}
        {# forced cast to string to avoid automatic type cast in compare #}
        {% set opt_value = \"%s\"|format(opt_value) %}
        {#{% set attrs = {'id': name ~ '_' ~ loop.index0}|merge(attrs) %}#}
        {% set item_attrs = attrs|merge({'title': title }) %}

        {# do a strict comparison #}
        {% set checked = false %}
        {% for checked_value in checked_values if not checked %}
            {% set checked_value = \"%s\"|format(checked_value) %}
            {% if opt_value is same as (checked_value) %}
                {% set checked = true %}
            {% endif %}
        {% endfor %}

        {% if checked %}
            {% set item_attrs = {'checked': 'checked' }|merge(item_attrs) %}
        {% endif %}

        {{ sf.input_raw('checkbox', name, opt_value, item_attrs) }}
    {% endfor %}

{% endmacro %}

{% macro radio_raw(name, choices, selected_value=null, attrs={}) %}
    {% import _self as sf %}

    {% set selected_value = selected_value is same as (null) ? selected_value : (\"%s\"|format(selected_value)) %}
    {% set attrs = {'opt_value': ''}|merge(attrs) %}
    {% for opt_value, title in choices %}
        {# forced cast to string to avoid automatic type cast in compare #}
        {% set opt_value = \"%s\"|format(opt_value) %}
        {#{% set attrs = {'id': name ~ '_' ~ loop.index0, 'title': title }|merge(attrs) %}#}

        {% set item_attrs = attrs|merge({'title': title }) %}
        {% if opt_value is same as(selected_value) %}
            {% set item_attrs = {'checked': 'checked' }|merge(item_attrs) %}
        {% endif %}

        {{ sf.input_raw('radio', name, opt_value, item_attrs) }}
    {% endfor %}
{% endmacro %}

{% macro select_raw(name, choices, selected_value=null, attrs={}) %}
    {% import _self as sf %}

    {# forced cast to string to avoid automatic type cast in compare #}
    {% set selected_value = selected_value is same as (null) ? selected_value : (\"%s\"|format(selected_value)) %}
    {% if attrs.id is not defined %}
        {#{% set attrs = {'id': name }|merge(attrs) %}#}
    {% endif %}
    <select name=\"{{ name }}\" {{ sf.attrs_raw(attrs) }}>
        {% for opt_value, opt_text in choices %}
            {% set opt_value = \"%s\"|format(opt_value) %}
            <option value=\"{{ opt_value }}\" {{ opt_value is same as(selected_value)  ? 'selected=\"selected\"' : '' }}>{{ opt_text }}</option>
        {% endfor %}
    </select>
{% endmacro %}

{% macro textarea_raw(name, value='', attrs={}, raw=false) %}
    {% import _self as sf %}

    {% if attrs.id is not defined %}
        {#{% set attrs = {'id': name}|merge(attrs) %}#}
    {% endif %}

    <textarea name=\"{{ name }}\" {{ sf.attrs_raw(attrs) }}>{{ raw ? (value|raw) : value }}</textarea>
{% endmacro %}

{% macro button_raw(name, title, value=null, attrs={}) %}
    {% import _self as sf %}

    {% if attrs.id is not defined %}
        {#{% set attrs = {'id': name }|merge(attrs) %}#}
    {% endif %}
    {% if value %}
        {% set attrs = {'name': name, 'value': value }|merge(attrs) %}
    {% endif %}

    <button type=\"button\" {{ sf.attrs_raw(attrs) }}>{{ title }}</button>
{% endmacro %}

{% macro submit_raw(name, title, value=null, attrs={}) %}
    {% import _self as sf %}

    {% if attrs.id is not defined %}
        {#{% set attrs = {'id': name }|merge(attrs) %}#}
    {% endif %}

    {% if value %}
        {% set attrs = {'name': name, 'value': value }|merge(attrs) %}
    {% endif %}

    <button type=\"submit\" {{ sf.attrs_raw(attrs) }}>{{ title }}</button>

{% endmacro %}
", "/Common/simple_form_helpers_raw.html.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Common\\simple_form_helpers_raw.html.twig");
    }
}
