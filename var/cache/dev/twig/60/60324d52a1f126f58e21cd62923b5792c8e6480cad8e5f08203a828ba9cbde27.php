<?php

/* @SimpleForm/helpers.html.twig */
class __TwigTemplate_d4bc343d0eca563af5b1a0d606b8e635bb0f3e06a7670e49076276f8ffb89483 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SimpleForm/helpers.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SimpleForm/helpers.html.twig"));

        // line 8
        echo "
";
        // line 16
        echo "
";
        // line 22
        echo "
";
        // line 31
        echo "
";
        // line 43
        echo "
";
        // line 48
        echo "
";
        // line 53
        echo "
";
        // line 58
        echo "
";
        // line 74
        echo "
";
        // line 90
        echo "
";
        // line 99
        echo "
";
        // line 115
        echo "
";
        // line 125
        echo "
";
        // line 137
        echo "
";
        // line 145
        echo "
";
        // line 156
        echo "
";
        // line 163
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_attrs($__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attrs" => $__attrs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attrs"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attrs"));

            // line 2
            ob_start();
            // line 3
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 3, $this->source); })()));
            foreach ($context['_seq'] as $context["attrName"] => $context["attrValue"]) {
                // line 4
                echo "      ";
                echo ((((" " . $context["attrName"]) . "=\"") . $context["attrValue"]) . "\"");
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrName'], $context['attrValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 9
    public function macro_label_begin($__field__ = null, $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "attrs" => $__attrs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "label_begin"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "label_begin"));

            // line 10
            ob_start();
            // line 11
            echo "    ";
            $context["sf"] = $this;
            // line 12
            echo "    ";
            $context["attrs"] = twig_array_merge(array("for" => twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 12, $this->source); })()), "name", array()), "class" => "control-label"), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 12, $this->source); })()));
            // line 13
            echo "      <label ";
            echo $context["sf"]->macro_attrs((isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 13, $this->source); })()));
            echo ">
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 17
    public function macro_label_end(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "label_end"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "label_end"));

            // line 18
            ob_start();
            // line 19
            echo "    </label>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 23
    public function macro_label($__field__ = null, $__label_text__ = null, $__attrs__ = array(), $__mark_required__ = " *", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "label_text" => $__label_text__,
            "attrs" => $__attrs__,
            "mark_required" => $__mark_required__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "label"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "label"));

            // line 24
            ob_start();
            // line 25
            echo "    ";
            $context["sf"] = $this;
            // line 26
            echo "    ";
            echo $context["sf"]->macro_label_begin((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 26, $this->source); })()), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 26, $this->source); })()));
            echo "
      ";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["label_text"]) || array_key_exists("label_text", $context) ? $context["label_text"] : (function () { throw new Twig_Error_Runtime('Variable "label_text" does not exist.', 27, $this->source); })()), "html", null, true);
            echo twig_escape_filter($this->env, ((((isset($context["mark_required"]) || array_key_exists("mark_required", $context) ? $context["mark_required"] : (function () { throw new Twig_Error_Runtime('Variable "mark_required" does not exist.', 27, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 27, $this->source); })()), "required", array()))) ? ((isset($context["mark_required"]) || array_key_exists("mark_required", $context) ? $context["mark_required"] : (function () { throw new Twig_Error_Runtime('Variable "mark_required" does not exist.', 27, $this->source); })())) : ("")), "html", null, true);
            echo "
    ";
            // line 28
            echo $context["sf"]->macro_label_end();
            echo "
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 32
    public function macro_input($__field__ = null, $__type__ = null, $__attrs__ = array(), $__raw__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "type" => $__type__,
            "attrs" => $__attrs__,
            "raw" => $__raw__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "input"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "input"));

            // line 33
            ob_start();
            // line 34
            echo "  ";
            $context["sf"] = $this;
            // line 35
            echo "  ";
            $context["form"] = twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 35, $this->source); })()), "form", array());
            // line 36
            echo "  ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 36, $this->source); })()), "form", array()), "setRendered", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 36, $this->source); })()), "name", array()), 1 => true), "method");
            // line 37
            echo "  ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "id", array(), "any", true, true)) {
                // line 38
                echo "    ";
                $context["attrs"] = twig_array_merge(array("id" => twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 38, $this->source); })()), "name", array())), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 38, $this->source); })()));
                // line 39
                echo "  ";
            }
            // line 40
            echo "  <input name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 40, $this->source); })()), "name", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (((isset($context["raw"]) || array_key_exists("raw", $context) ? $context["raw"] : (function () { throw new Twig_Error_Runtime('Variable "raw" does not exist.', 40, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 40, $this->source); })()), "value", array())) : (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 40, $this->source); })()), "value", array()))), "html", null, true);
            echo "\" type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 40, $this->source); })()), "html", null, true);
            echo "\" ";
            echo $context["sf"]->macro_attrs((isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 40, $this->source); })()));
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

    // line 44
    public function macro_text($__field__ = null, $__attrs__ = array(), $__raw__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "attrs" => $__attrs__,
            "raw" => $__raw__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "text"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "text"));

            // line 45
            echo "  ";
            $context["sf"] = $this;
            // line 46
            echo "  ";
            echo $context["sf"]->macro_input((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 46, $this->source); })()), "text", (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 46, $this->source); })()), (isset($context["raw"]) || array_key_exists("raw", $context) ? $context["raw"] : (function () { throw new Twig_Error_Runtime('Variable "raw" does not exist.', 46, $this->source); })()));
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
    public function macro_password($__field__ = null, $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "attrs" => $__attrs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "password"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "password"));

            // line 50
            echo "  ";
            $context["sf"] = $this;
            // line 51
            echo "  ";
            echo $context["sf"]->macro_input((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 51, $this->source); })()), "password", (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 51, $this->source); })()), true);
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 54
    public function macro_hidden($__field__ = null, $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "attrs" => $__attrs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "hidden"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "hidden"));

            // line 55
            echo "  ";
            $context["sf"] = $this;
            // line 56
            echo "  ";
            echo $context["sf"]->macro_input((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 56, $this->source); })()), "hidden", (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 56, $this->source); })()), false);
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 59
    public function macro_checkbox($__field__ = null, $__value__ = null, $__text__ = null, $__attrs__ = array(), $__label_attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "value" => $__value__,
            "text" => $__text__,
            "attrs" => $__attrs__,
            "label_attrs" => $__label_attrs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "checkbox"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "checkbox"));

            // line 60
            echo "  ";
            $context["sf"] = $this;
            // line 61
            echo "  ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "id", array(), "any", true, true)) {
                // line 62
                echo "    ";
                $context["id"] = ((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 62, $this->source); })()), "name", array()) + "_") + twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 62, $this->source); })()), "value", array()));
                // line 63
                echo "    ";
                $context["attrs"] = twig_array_merge(array("id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 63, $this->source); })())), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 63, $this->source); })()));
                // line 64
                echo "  ";
            }
            // line 65
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 65, $this->source); })()), "value", array()) == (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 65, $this->source); })()))) {
                // line 66
                echo "    ";
                $context["attrs"] = twig_array_merge(array("checked" => "checked"), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 66, $this->source); })()));
                // line 67
                echo "  ";
            }
            // line 68
            echo "  ";
            $context["label_attrs"] = twig_array_merge(array("class" => "checkbox", "for" => twig_get_attribute($this->env, $this->source, (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 68, $this->source); })()), "id", array())), (isset($context["label_attrs"]) || array_key_exists("label_attrs", $context) ? $context["label_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "label_attrs" does not exist.', 68, $this->source); })()));
            // line 69
            echo "  <label ";
            echo $context["sf"]->macro_attrs((isset($context["label_attrs"]) || array_key_exists("label_attrs", $context) ? $context["label_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "label_attrs" does not exist.', 69, $this->source); })()));
            echo ">
    ";
            // line 70
            echo $context["sf"]->macro_input((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 70, $this->source); })()), "checkbox", (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 70, $this->source); })()));
            echo "
    ";
            // line 71
            echo (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 71, $this->source); })());
            echo "
  </label>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 75
    public function macro_radio($__field__ = null, $__value__ = null, $__text__ = null, $__attrs__ = array(), $__label_attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "value" => $__value__,
            "text" => $__text__,
            "attrs" => $__attrs__,
            "label_attrs" => $__label_attrs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "radio"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "radio"));

            // line 76
            echo "  ";
            $context["sf"] = $this;
            // line 77
            echo "  ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "id", array(), "any", true, true)) {
                // line 78
                echo "    ";
                $context["id"] = ((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 78, $this->source); })()), "name", array()) + "_") + twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 78, $this->source); })()), "value", array()));
                // line 79
                echo "    ";
                $context["attrs"] = twig_array_merge(array("id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 79, $this->source); })())), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 79, $this->source); })()));
                // line 80
                echo "  ";
            }
            // line 81
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 81, $this->source); })()), "value", array()) == (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 81, $this->source); })()))) {
                // line 82
                echo "    ";
                $context["attrs"] = twig_array_merge(array("checked" => "checked"), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 82, $this->source); })()));
                // line 83
                echo "  ";
            }
            // line 84
            echo "  ";
            $context["label_attrs"] = twig_array_merge(array("class" => "radio", "for" => twig_get_attribute($this->env, $this->source, (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 84, $this->source); })()), "id", array())), (isset($context["label_attrs"]) || array_key_exists("label_attrs", $context) ? $context["label_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "label_attrs" does not exist.', 84, $this->source); })()));
            // line 85
            echo "  <label ";
            echo $context["sf"]->macro_attrs((isset($context["label_attrs"]) || array_key_exists("label_attrs", $context) ? $context["label_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "label_attrs" does not exist.', 85, $this->source); })()));
            echo ">
    ";
            // line 86
            echo $context["sf"]->macro_input((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 86, $this->source); })()), "radio", (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 86, $this->source); })()));
            echo "
    ";
            // line 87
            echo (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 87, $this->source); })());
            echo "
  </label>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 91
    public function macro_textarea($__field__ = null, $__attrs__ = array(), $__raw__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "attrs" => $__attrs__,
            "raw" => $__raw__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "textarea"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "textarea"));

            // line 92
            echo "  ";
            $context["sf"] = $this;
            // line 93
            echo "  ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 93, $this->source); })()), "form", array()), "setRendered", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 93, $this->source); })()), "name", array()), 1 => true), "method");
            // line 94
            echo "  ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "id", array(), "any", true, true)) {
                // line 95
                echo "    ";
                $context["attrs"] = twig_array_merge(array("id" => twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 95, $this->source); })()), "name", array())), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 95, $this->source); })()));
                // line 96
                echo "  ";
            }
            // line 97
            echo "  <textarea name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 97, $this->source); })()), "name", array()), "html", null, true);
            echo "\" ";
            echo $context["sf"]->macro_attrs((isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 97, $this->source); })()));
            echo ">";
            echo twig_escape_filter($this->env, (((isset($context["raw"]) || array_key_exists("raw", $context) ? $context["raw"] : (function () { throw new Twig_Error_Runtime('Variable "raw" does not exist.', 97, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 97, $this->source); })()), "value", array())) : (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 97, $this->source); })()), "value", array()))), "html", null, true);
            echo "</textarea>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 100
    public function macro_select($__field__ = null, $__options__ = null, $__translate__ = false, $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "options" => $__options__,
            "translate" => $__translate__,
            "attrs" => $__attrs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "select"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "select"));

            // line 101
            echo "  ";
            $context["sf"] = $this;
            // line 102
            echo "  ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 102, $this->source); })()), "form", array()), "setRendered", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 102, $this->source); })()), "name", array()), 1 => true), "method");
            // line 103
            echo "  ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "id", array(), "any", true, true)) {
                // line 104
                echo "    ";
                $context["attrs"] = twig_array_merge(array("id" => twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 104, $this->source); })()), "name", array())), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 104, $this->source); })()));
                // line 105
                echo "  ";
            }
            // line 106
            echo "  <select name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 106, $this->source); })()), "name", array()), "html", null, true);
            echo "\" ";
            echo $context["sf"]->macro_attrs((isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 106, $this->source); })()));
            echo ">
  ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 107, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
                // line 108
                echo "    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opt"], "value", array()), "html", null, true);
                echo "\" ";
                echo (((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 108, $this->source); })()), "value", array()) == twig_get_attribute($this->env, $this->source, $context["opt"], "value", array()))) ? ("selected=\"selected\"") : (""));
                echo ">
      ";
                // line 109
                $context["opt_text"] = (((isset($context["translate"]) || array_key_exists("translate", $context) ? $context["translate"] : (function () { throw new Twig_Error_Runtime('Variable "translate" does not exist.', 109, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["opt"], "text", array()))) : (twig_get_attribute($this->env, $this->source, $context["opt"], "text", array())));
                // line 110
                echo "      ";
                echo twig_escape_filter($this->env, (isset($context["opt_text"]) || array_key_exists("opt_text", $context) ? $context["opt_text"] : (function () { throw new Twig_Error_Runtime('Variable "opt_text" does not exist.', 110, $this->source); })()), "html", null, true);
                echo "
    </option>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "  </select>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 116
    public function macro_button($__field__ = null, $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "attrs" => $__attrs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "button"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "button"));

            // line 117
            echo "  ";
            $context["sf"] = $this;
            // line 118
            echo "  ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 118, $this->source); })()), "form", array()), "setRendered", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 118, $this->source); })()), "name", array()), 1 => true), "method");
            // line 119
            echo "  ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "id", array(), "any", true, true)) {
                // line 120
                echo "    ";
                $context["attrs"] = twig_array_merge(array("id" => ("btn_" + twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 120, $this->source); })()), "name", array()))), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 120, $this->source); })()));
                // line 121
                echo "  ";
            }
            // line 122
            echo "  ";
            $context["attrs"] = twig_array_merge(array("class" => "btn"), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 122, $this->source); })()));
            // line 123
            echo "  <button name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 123, $this->source); })()), "name", array()), "html", null, true);
            echo "\" type=\"button\" ";
            echo $context["sf"]->macro_attrs((isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 123, $this->source); })()));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 123, $this->source); })()), "value", array()), "html", null, true);
            echo "</button>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 126
    public function macro_submit($__text__ = null, $__input__ = true, $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "input" => $__input__,
            "attrs" => $__attrs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "submit"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "submit"));

            // line 127
            echo "  ";
            $context["sf"] = $this;
            // line 128
            echo "  ";
            if ((isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new Twig_Error_Runtime('Variable "input" does not exist.', 128, $this->source); })())) {
                // line 129
                echo "    ";
                $context["attrs"] = twig_array_merge(array("name" => "btn_submit"), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 129, $this->source); })()));
                // line 130
                echo "  ";
            }
            // line 131
            echo "  ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "id", array(), "any", true, true)) {
                // line 132
                echo "    ";
                $context["attrs"] = twig_array_merge(array("id" => ("btn_submit_" . (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 132, $this->source); })()))), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 132, $this->source); })()));
                // line 133
                echo "  ";
            }
            // line 134
            echo "  ";
            $context["attrs"] = twig_array_merge(array("class" => "btn btn-primary"), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 134, $this->source); })()));
            // line 135
            echo "  <button type=\"submit\" ";
            echo $context["sf"]->macro_attrs((isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 135, $this->source); })()));
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 135, $this->source); })()), "html", null, true);
            echo "</button>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 138
    public function macro_rest($__form__ = null, $__type__ = "hidden", $__attrs__ = array(), $__raw__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "type" => $__type__,
            "attrs" => $__attrs__,
            "raw" => $__raw__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "rest"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "rest"));

            // line 139
            echo "  ";
            $context["sf"] = $this;
            // line 140
            echo "  ";
            $context["rest_fields"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 140, $this->source); })()), "getUnrenderedFields", array(), "method");
            // line 141
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rest_fields"]) || array_key_exists("rest_fields", $context) ? $context["rest_fields"] : (function () { throw new Twig_Error_Runtime('Variable "rest_fields" does not exist.', 141, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 142
                echo "    ";
                echo $context["sf"]->macro_input($context["field"], (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 142, $this->source); })()), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 142, $this->source); })()), (isset($context["raw"]) || array_key_exists("raw", $context) ? $context["raw"] : (function () { throw new Twig_Error_Runtime('Variable "raw" does not exist.', 142, $this->source); })()));
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 146
    public function macro_error($__field__ = null, $__translate__ = false, $__label_attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "translate" => $__translate__,
            "label_attrs" => $__label_attrs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "error"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "error"));

            // line 147
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 147, $this->source); })()), "error", array())) {
                // line 148
                echo "    ";
                $context["sf"] = $this;
                // line 149
                echo "    ";
                $context["label_attrs"] = twig_array_merge(array("for" => twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 149, $this->source); })()), "name", array()), "class" => "help-inline error"), (isset($context["label_attrs"]) || array_key_exists("label_attrs", $context) ? $context["label_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "label_attrs" does not exist.', 149, $this->source); })()));
                // line 150
                echo "    <label ";
                echo $context["sf"]->macro_attrs((isset($context["label_attrs"]) || array_key_exists("label_attrs", $context) ? $context["label_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "label_attrs" does not exist.', 150, $this->source); })()));
                echo ">
      ";
                // line 151
                $context["error"] = (((isset($context["translate"]) || array_key_exists("translate", $context) ? $context["translate"] : (function () { throw new Twig_Error_Runtime('Variable "translate" does not exist.', 151, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 151, $this->source); })()), "error", array()))) : (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 151, $this->source); })()), "error", array())));
                // line 152
                echo "      ";
                echo (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 152, $this->source); })());
                echo "
    </label>
  ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 157
    public function macro_rules($__form__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "rules"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "rules"));

            // line 158
            echo "  ";
            $context["rules"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 158, $this->source); })()), "generateRules", array(), "method");
            // line 159
            echo "  ";
            if ((isset($context["rules"]) || array_key_exists("rules", $context) ? $context["rules"] : (function () { throw new Twig_Error_Runtime('Variable "rules" does not exist.', 159, $this->source); })())) {
                // line 160
                echo "    ";
                echo json_encode((isset($context["rules"]) || array_key_exists("rules", $context) ? $context["rules"] : (function () { throw new Twig_Error_Runtime('Variable "rules" does not exist.', 160, $this->source); })()));
                echo "
  ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 165
    public function macro_field($__field__ = null, $__type__ = null, $__label_title__ = null, $__translate__ = false, $__label_attrs__ = array(), $__widget_settings__ = array(), $__error_attrs__ = array(), $__controls_attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "type" => $__type__,
            "label_title" => $__label_title__,
            "translate" => $__translate__,
            "label_attrs" => $__label_attrs__,
            "widget_settings" => $__widget_settings__,
            "error_attrs" => $__error_attrs__,
            "controls_attrs" => $__controls_attrs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "field"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "field"));

            // line 166
            ob_start();
            // line 167
            echo "  ";
            $context["sf"] = $this;
            // line 168
            echo "
  ";
            // line 169
            $context["widget_raw"] = ((twig_get_attribute($this->env, $this->source, ($context["widget_settings"] ?? null), "raw", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["widget_settings"]) || array_key_exists("widget_settings", $context) ? $context["widget_settings"] : (function () { throw new Twig_Error_Runtime('Variable "widget_settings" does not exist.', 169, $this->source); })()), "raw", array())) : (array()));
            // line 170
            echo "  ";
            $context["widget_attrs"] = ((twig_get_attribute($this->env, $this->source, ($context["widget_settings"] ?? null), "attrs", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["widget_settings"]) || array_key_exists("widget_settings", $context) ? $context["widget_settings"] : (function () { throw new Twig_Error_Runtime('Variable "widget_settings" does not exist.', 170, $this->source); })()), "attrs", array())) : (array()));
            // line 171
            echo "  ";
            $context["widget_desc"] = ((twig_get_attribute($this->env, $this->source, ($context["widget_settings"] ?? null), "desc", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["widget_settings"]) || array_key_exists("widget_settings", $context) ? $context["widget_settings"] : (function () { throw new Twig_Error_Runtime('Variable "widget_settings" does not exist.', 171, $this->source); })()), "desc", array())) : (null));
            // line 172
            echo "
  ";
            // line 173
            $context["label_attrs"] = twig_array_merge(array("class" => "control-label"), (isset($context["label_attrs"]) || array_key_exists("label_attrs", $context) ? $context["label_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "label_attrs" does not exist.', 173, $this->source); })()));
            // line 174
            echo "  ";
            $context["error_attrs"] = twig_array_merge(array("class" => "help-inline error"), (isset($context["error_attrs"]) || array_key_exists("error_attrs", $context) ? $context["error_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "error_attrs" does not exist.', 174, $this->source); })()));
            // line 175
            echo "
  ";
            // line 176
            $context["controls_attrs"] = twig_array_merge(array("class" => "controls"), (isset($context["controls_attrs"]) || array_key_exists("controls_attrs", $context) ? $context["controls_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "controls_attrs" does not exist.', 176, $this->source); })()));
            // line 177
            echo "
  <div class=\"control-group";
            // line 178
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 178, $this->source); })()), "error", array())) ? (" error") : (""));
            echo "\">
    ";
            // line 179
            $context["label_title"] = (((isset($context["translate"]) || array_key_exists("translate", $context) ? $context["translate"] : (function () { throw new Twig_Error_Runtime('Variable "translate" does not exist.', 179, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label_title"]) || array_key_exists("label_title", $context) ? $context["label_title"] : (function () { throw new Twig_Error_Runtime('Variable "label_title" does not exist.', 179, $this->source); })()))) : ((isset($context["label_title"]) || array_key_exists("label_title", $context) ? $context["label_title"] : (function () { throw new Twig_Error_Runtime('Variable "label_title" does not exist.', 179, $this->source); })())));
            // line 180
            echo "    ";
            echo $context["sf"]->macro_label((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 180, $this->source); })()), (isset($context["label_title"]) || array_key_exists("label_title", $context) ? $context["label_title"] : (function () { throw new Twig_Error_Runtime('Variable "label_title" does not exist.', 180, $this->source); })()), (isset($context["label_attrs"]) || array_key_exists("label_attrs", $context) ? $context["label_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "label_attrs" does not exist.', 180, $this->source); })()));
            echo "
    <div ";
            // line 181
            echo $context["sf"]->macro_attrs((isset($context["controls_attrs"]) || array_key_exists("controls_attrs", $context) ? $context["controls_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "controls_attrs" does not exist.', 181, $this->source); })()));
            echo ">
      ";
            // line 182
            if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 182, $this->source); })()) == "text")) {
                // line 183
                echo "        ";
                echo $context["sf"]->macro_text((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 183, $this->source); })()), (isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "widget_attrs" does not exist.', 183, $this->source); })()), (isset($context["widget_raw"]) || array_key_exists("widget_raw", $context) ? $context["widget_raw"] : (function () { throw new Twig_Error_Runtime('Variable "widget_raw" does not exist.', 183, $this->source); })()));
                echo "
      ";
            } elseif ((            // line 184
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 184, $this->source); })()) == "password")) {
                // line 185
                echo "        ";
                echo $context["sf"]->macro_password((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 185, $this->source); })()), (isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "widget_attrs" does not exist.', 185, $this->source); })()));
                echo "
      ";
            } elseif ((            // line 186
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 186, $this->source); })()) == "hidden")) {
                // line 187
                echo "        ";
                echo $context["sf"]->macro_hidden((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 187, $this->source); })()), (isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "widget_attrs" does not exist.', 187, $this->source); })()));
                echo "
      ";
            } elseif (((            // line 188
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 188, $this->source); })()) == "checkbox") || ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 188, $this->source); })()) == "radio"))) {
                // line 189
                echo "        ";
                $context["widget_label_attrs"] = ((twig_get_attribute($this->env, $this->source, ($context["widget_settings"] ?? null), "label_attrs", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["widget_settings"]) || array_key_exists("widget_settings", $context) ? $context["widget_settings"] : (function () { throw new Twig_Error_Runtime('Variable "widget_settings" does not exist.', 189, $this->source); })()), "label_attrs", array())) : (array()));
                // line 190
                echo "        ";
                echo $context["sf"]->macro_checkbox((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 190, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["widget_settings"]) || array_key_exists("widget_settings", $context) ? $context["widget_settings"] : (function () { throw new Twig_Error_Runtime('Variable "widget_settings" does not exist.', 190, $this->source); })()), "value", array()), twig_get_attribute($this->env, $this->source, (isset($context["widget_settings"]) || array_key_exists("widget_settings", $context) ? $context["widget_settings"] : (function () { throw new Twig_Error_Runtime('Variable "widget_settings" does not exist.', 190, $this->source); })()), "text", array()), (isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "widget_attrs" does not exist.', 190, $this->source); })()), (isset($context["widget_label_attrs"]) || array_key_exists("widget_label_attrs", $context) ? $context["widget_label_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "widget_label_attrs" does not exist.', 190, $this->source); })()));
                echo "
      ";
            } elseif ((            // line 191
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 191, $this->source); })()) == "textarea")) {
                // line 192
                echo "        ";
                echo $context["sf"]->macro_textarea((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 192, $this->source); })()), (isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "widget_attrs" does not exist.', 192, $this->source); })()), (isset($context["widget_raw"]) || array_key_exists("widget_raw", $context) ? $context["widget_raw"] : (function () { throw new Twig_Error_Runtime('Variable "widget_raw" does not exist.', 192, $this->source); })()));
                echo "
      ";
            } elseif ((            // line 193
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 193, $this->source); })()) == "select")) {
                // line 194
                echo "        ";
                // line 195
                echo "        ";
                echo $context["sf"]->macro_select((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 195, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["widget_settings"]) || array_key_exists("widget_settings", $context) ? $context["widget_settings"] : (function () { throw new Twig_Error_Runtime('Variable "widget_settings" does not exist.', 195, $this->source); })()), "options", array()), (isset($context["translate"]) || array_key_exists("translate", $context) ? $context["translate"] : (function () { throw new Twig_Error_Runtime('Variable "translate" does not exist.', 195, $this->source); })()), (isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "widget_attrs" does not exist.', 195, $this->source); })()));
                echo "
      ";
            } else {
                // line 197
                echo "        <!-- input type \"";
                echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 197, $this->source); })()), "html", null, true);
                echo "\" is not supported by this macro -->
      ";
            }
            // line 199
            echo "      ";
            if ((isset($context["widget_desc"]) || array_key_exists("widget_desc", $context) ? $context["widget_desc"] : (function () { throw new Twig_Error_Runtime('Variable "widget_desc" does not exist.', 199, $this->source); })())) {
                // line 200
                echo "        <span class=\"help-block\">";
                echo twig_escape_filter($this->env, (isset($context["widget_desc"]) || array_key_exists("widget_desc", $context) ? $context["widget_desc"] : (function () { throw new Twig_Error_Runtime('Variable "widget_desc" does not exist.', 200, $this->source); })()), "html", null, true);
                echo "</span>
      ";
            }
            // line 202
            echo "      ";
            echo $context["sf"]->macro_error((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 202, $this->source); })()), (isset($context["translate"]) || array_key_exists("translate", $context) ? $context["translate"] : (function () { throw new Twig_Error_Runtime('Variable "translate" does not exist.', 202, $this->source); })()), (isset($context["error_attrs"]) || array_key_exists("error_attrs", $context) ? $context["error_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "error_attrs" does not exist.', 202, $this->source); })()));
            echo "
     </div>
  </div>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SimpleForm/helpers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1161 => 202,  1155 => 200,  1152 => 199,  1146 => 197,  1140 => 195,  1138 => 194,  1136 => 193,  1131 => 192,  1129 => 191,  1124 => 190,  1121 => 189,  1119 => 188,  1114 => 187,  1112 => 186,  1107 => 185,  1105 => 184,  1100 => 183,  1098 => 182,  1094 => 181,  1089 => 180,  1087 => 179,  1083 => 178,  1080 => 177,  1078 => 176,  1075 => 175,  1072 => 174,  1070 => 173,  1067 => 172,  1064 => 171,  1061 => 170,  1059 => 169,  1056 => 168,  1053 => 167,  1051 => 166,  1026 => 165,  1007 => 160,  1004 => 159,  1001 => 158,  983 => 157,  963 => 152,  961 => 151,  956 => 150,  953 => 149,  950 => 148,  947 => 147,  927 => 146,  905 => 142,  900 => 141,  897 => 140,  894 => 139,  873 => 138,  853 => 135,  850 => 134,  847 => 133,  844 => 132,  841 => 131,  838 => 130,  835 => 129,  832 => 128,  829 => 127,  809 => 126,  787 => 123,  784 => 122,  781 => 121,  778 => 120,  775 => 119,  772 => 118,  769 => 117,  750 => 116,  734 => 113,  724 => 110,  722 => 109,  715 => 108,  711 => 107,  704 => 106,  701 => 105,  698 => 104,  695 => 103,  692 => 102,  689 => 101,  668 => 100,  646 => 97,  643 => 96,  640 => 95,  637 => 94,  634 => 93,  631 => 92,  611 => 91,  593 => 87,  589 => 86,  584 => 85,  581 => 84,  578 => 83,  575 => 82,  572 => 81,  569 => 80,  566 => 79,  563 => 78,  560 => 77,  557 => 76,  535 => 75,  517 => 71,  513 => 70,  508 => 69,  505 => 68,  502 => 67,  499 => 66,  496 => 65,  493 => 64,  490 => 63,  487 => 62,  484 => 61,  481 => 60,  459 => 59,  441 => 56,  438 => 55,  419 => 54,  401 => 51,  398 => 50,  379 => 49,  361 => 46,  358 => 45,  338 => 44,  313 => 40,  310 => 39,  307 => 38,  304 => 37,  301 => 36,  298 => 35,  295 => 34,  293 => 33,  272 => 32,  254 => 28,  249 => 27,  244 => 26,  241 => 25,  239 => 24,  218 => 23,  201 => 19,  199 => 18,  182 => 17,  163 => 13,  160 => 12,  157 => 11,  155 => 10,  136 => 9,  113 => 4,  108 => 3,  106 => 2,  88 => 1,  77 => 163,  74 => 156,  71 => 145,  68 => 137,  65 => 125,  62 => 115,  59 => 99,  56 => 90,  53 => 74,  50 => 58,  47 => 53,  44 => 48,  41 => 43,  38 => 31,  35 => 22,  32 => 16,  29 => 8,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro attrs(attrs={}) %}
{% spaceless %}
  {% for attrName, attrValue in attrs %}
      {{ \" #{attrName}=\\\"#{attrValue}\\\"\"|raw }}
  {% endfor %}
{% endspaceless %}
{% endmacro %}

{% macro label_begin(field, attrs={}) %}
{% spaceless %}
    {% import _self as sf %}
    {% set attrs = {'for': field.name, 'class': 'control-label'}|merge(attrs) %}
      <label {{ sf.attrs(attrs)}}>
{% endspaceless %}
{% endmacro %}

{% macro label_end() %}
{% spaceless %}
    </label>
{% endspaceless %}
{% endmacro %}

{% macro label(field, label_text, attrs={}, mark_required=' *') %}
{% spaceless %}
    {% import _self as sf %}
    {{ sf.label_begin(field, attrs) }}
      {{ label_text }}{{ mark_required and field.required ? mark_required : '' }}
    {{ sf.label_end() }}
{% endspaceless %}
{% endmacro %}

{% macro input(field, type, attrs={}, raw=false) %}
{% spaceless %}
  {% import _self as sf %}
  {% set form = field.form %}
  {% do field.form.setRendered(field.name, true) %}
  {% if attrs.id is not defined %}
    {% set attrs = {'id': field.name }|merge(attrs) %}
  {% endif %}
  <input name=\"{{ field.name }}\" value=\"{{ raw ? (field.value|raw) : field.value }}\" type=\"{{ type }}\" {{ sf.attrs(attrs)}} />
{% endspaceless %}
{% endmacro %}

{% macro text(field, attrs={}, raw=false) %}
  {% import _self as sf %}
  {{ sf.input(field, 'text', attrs, raw) }}
{% endmacro %}

{% macro password(field, attrs={}) %}
  {% import _self as sf %}
  {{ sf.input(field, 'password', attrs, true) }}
{% endmacro %}

{% macro hidden(field, attrs={}) %}
  {% import _self as sf %}
  {{ sf.input(field, 'hidden', attrs, false) }}
{% endmacro %}

{% macro checkbox(field, value, text, attrs={}, label_attrs={}) %}
  {% import _self as sf %}
  {% if attrs.id is not defined %}
    {% set id = field.name + '_' + field.value %}
    {% set attrs = {'id': id }|merge(attrs) %}
  {% endif %}
  {% if field.value == value %}
    {% set attrs = {'checked': 'checked' }|merge(attrs) %}
  {% endif %}
  {% set label_attrs = {'class': 'checkbox', 'for': attrs.id }|merge(label_attrs) %}
  <label {{ sf.attrs(label_attrs) }}>
    {{ sf.input(field, 'checkbox', attrs) }}
    {{ text|raw }}
  </label>
{% endmacro %}

{% macro radio(field, value, text, attrs={}, label_attrs={}) %}
  {% import _self as sf %}
  {% if attrs.id is not defined %}
    {% set id = field.name + '_' + field.value %}
    {% set attrs = {'id': id }|merge(attrs) %}
  {% endif %}
  {% if field.value == value %}
    {% set attrs = {'checked': 'checked' }|merge(attrs) %}
  {% endif %}
  {% set label_attrs = {'class': 'radio', 'for': attrs.id }|merge(label_attrs) %}
  <label {{ sf.attrs(label_attrs) }}>
    {{ sf.input(field, 'radio', attrs) }}
    {{ text|raw }}
  </label>
{% endmacro %}

{% macro textarea(field, attrs={}, raw=false) %}
  {% import _self as sf %}
  {% do field.form.setRendered(field.name, true) %}
  {% if attrs.id is not defined %}
    {% set attrs = {'id': field.name }|merge(attrs) %}
  {% endif %}
  <textarea name=\"{{ field.name }}\" {{ sf.attrs(attrs)}}>{{ raw ? (field.value|raw) : field.value }}</textarea>
{% endmacro %}

{% macro select(field, options, translate=false, attrs={}) %}
  {% import _self as sf %}
  {% do field.form.setRendered(field.name, true) %}
  {% if attrs.id is not defined %}
    {% set attrs = {'id': field.name }|merge(attrs) %}
  {% endif %}
  <select name=\"{{ field.name }}\" {{ sf.attrs(attrs)}}>
  {% for opt in options %}
    <option value=\"{{ opt.value }}\" {{ field.value == opt.value ? 'selected=\"selected\"' : '' }}>
      {% set opt_text = translate ? (opt.text|trans) : opt.text %}
      {{ opt_text }}
    </option>
  {% endfor %}
  </select>
{% endmacro %}

{% macro button(field, attrs={}) %}
  {% import _self as sf %}
  {% do field.form.setRendered(field.name, true) %}
  {% if attrs.id is not defined %}
    {% set attrs = {'id': 'btn_' + field.name }|merge(attrs) %}
  {% endif %}
  {% set attrs = {'class': 'btn'}|merge(attrs) %}
  <button name=\"{{ field.name }}\" type=\"button\" {{ sf.attrs(attrs)}}>{{ field.value }}</button>
{% endmacro %}

{% macro submit(text, input=true, attrs={}) %}
  {% import _self as sf %}
  {% if input %}
    {% set attrs = {'name': 'btn_submit' }|merge(attrs) %}
  {% endif %}
  {% if attrs.id is not defined %}
    {% set attrs = {'id': \"btn_submit_#{text}\" }|merge(attrs) %}
  {% endif %}
  {% set attrs = {'class': 'btn btn-primary'}|merge(attrs) %}
  <button type=\"submit\" {{ sf.attrs(attrs)}}>{{ text }}</button>
{% endmacro %}

{% macro rest(form, type='hidden', attrs={}, raw=false) %}
  {% import _self as sf %}
  {% set rest_fields = form.getUnrenderedFields() %}
  {% for field in rest_fields %}
    {{ sf.input(field, type, attrs, raw) }}
  {% endfor %}
{% endmacro %}

{% macro error(field, translate=false, label_attrs={}) %}
  {% if field.error %}
    {% import _self as sf %}
    {% set label_attrs = {'for': field.name, 'class': 'help-inline error'}|merge(label_attrs) %}
    <label {{ sf.attrs(label_attrs)}}>
      {% set error = translate ? (field.error|trans) : field.error %}
      {{ error|raw }}
    </label>
  {% endif %}
{% endmacro %}

{% macro rules(form) %}
  {% set rules = form.generateRules() %}
  {% if rules %}
    {{ rules|json_encode|raw }}
  {% endif %}
{% endmacro %}

{# A shortcut macro to render a control group ( for Bootstrap css framework ) #}
{% macro field(field, type, label_title, translate=false, label_attrs={}, widget_settings={}, error_attrs={}, controls_attrs={}) %}
{% spaceless %}
  {% import _self as sf %}

  {% set widget_raw     = widget_settings.raw   is defined ? widget_settings.raw   : {} %}
  {% set widget_attrs   = widget_settings.attrs is defined ? widget_settings.attrs : {} %}
  {% set widget_desc    = widget_settings.desc  is defined ? widget_settings.desc  : null %}

  {% set label_attrs    = {'class': 'control-label'}|merge(label_attrs) %}
  {% set error_attrs    = {'class': 'help-inline error'}|merge(error_attrs) %}

  {% set controls_attrs = {'class': 'controls'}|merge(controls_attrs) %}

  <div class=\"control-group{{ field.error ? ' error' : ''}}\">
    {% set label_title = translate ? (label_title|trans) : label_title %}
    {{ sf.label(field, label_title, label_attrs) }}
    <div {{ sf.attrs(controls_attrs) }}>
      {% if type == 'text' %}
        {{ sf.text(field, widget_attrs, widget_raw) }}
      {% elseif type == 'password' %}
        {{ sf.password(field, widget_attrs) }}
      {% elseif type == 'hidden' %}
        {{ sf.hidden(field, widget_attrs) }}
      {% elseif type == 'checkbox' or type == 'radio' %}
        {% set widget_label_attrs = widget_settings.label_attrs is defined ? widget_settings.label_attrs : {} %}
        {{ sf.checkbox(field, widget_settings.value, widget_settings.text, widget_attrs, widget_label_attrs) }}
      {% elseif type == 'textarea' %}
        {{ sf.textarea(field, widget_attrs, widget_raw) }}
      {% elseif type == 'select' %}
        {# select(field, options, translate=false, attrs={}) %} #}
        {{ sf.select(field, widget_settings.options, translate, widget_attrs) }}
      {% else %}
        <!-- input type \"{{ type }}\" is not supported by this macro -->
      {% endif %}
      {% if widget_desc %}
        <span class=\"help-block\">{{ widget_desc }}</span>
      {% endif %}
      {{ sf.error(field, translate, error_attrs) }}
     </div>
  </div>
{% endspaceless %}
{% endmacro %}
", "@SimpleForm/helpers.html.twig", "D:\\phpStudy\\WWW\\foxdou\\vendor\\symfu\\simple-form-bundle\\src\\Resources\\views\\helpers.html.twig");
    }
}
