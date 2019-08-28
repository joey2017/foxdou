<?php

/* /Common/simple_form_helpers_for_layui.html.twig */
class __TwigTemplate_5c2801f62049ece261280eb5fba634427ebe05c8e1e2462dcd8e446f5632ba3d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Common/simple_form_helpers_for_layui.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Common/simple_form_helpers_for_layui.html.twig"));

        // line 1
        echo "
";
        // line 6
        echo "
";
        // line 76
        echo "
";
        // line 85
        echo "
";
        // line 91
        echo "
";
        // line 121
        echo "
";
        // line 148
        echo "
";
        // line 181
        echo "
";
        // line 197
        echo "
";
        // line 213
        echo "
";
        // line 218
        echo "
";
        // line 230
        echo "
";
        // line 266
        echo "
";
        // line 290
        echo "
";
        // line 324
        echo "
";
        // line 354
        echo "
";
        // line 384
        echo "
";
        // line 391
        echo "
";
        // line 398
        echo "
";
        // line 410
        echo "
";
        // line 417
        echo "
";
        // line 421
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
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

            // line 8
            echo "    ";
            $context["sfr"] = $this->loadTemplate("/Common/simple_form_helpers_raw.html.twig", "/Common/simple_form_helpers_for_layui.html.twig", 8);
            // line 9
            echo "    ";
            echo $context["sfr"]->macro_label_raw((isset($context["for"]) || array_key_exists("for", $context) ? $context["for"] : (function () { throw new Twig_Error_Runtime('Variable "for" does not exist.', 9, $this->source); })()), (isset($context["label_text"]) || array_key_exists("label_text", $context) ? $context["label_text"] : (function () { throw new Twig_Error_Runtime('Variable "label_text" does not exist.', 9, $this->source); })()), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 9, $this->source); })()));
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 11
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

            // line 12
            echo "    ";
            $context["sfr"] = $this->loadTemplate("/Common/simple_form_helpers_raw.html.twig", "/Common/simple_form_helpers_for_layui.html.twig", 12);
            // line 13
            echo "    ";
            echo $context["sfr"]->macro_input_raw((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 13, $this->source); })()), (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 13, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->source); })()), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 13, $this->source); })()), (isset($context["raw"]) || array_key_exists("raw", $context) ? $context["raw"] : (function () { throw new Twig_Error_Runtime('Variable "raw" does not exist.', 13, $this->source); })()));
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 15
    public function macro_text_raw($__field__ = null, $__attrs__ = array(), $__raw__ = false, ...$__varargs__)
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
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "text_raw"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "text_raw"));

            // line 16
            echo "    ";
            $context["sfr"] = $this->loadTemplate("/Common/simple_form_helpers_raw.html.twig", "/Common/simple_form_helpers_for_layui.html.twig", 16);
            // line 17
            echo "    ";
            $context["name"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 17, $this->source); })()), "name", array())) : ((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 17, $this->source); })())));
            // line 18
            echo "    ";
            $context["value"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 18, $this->source); })()), "value", array())) : (((twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "value", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 18, $this->source); })()), "value", array())) : (""))));
            // line 19
            echo "    ";
            $context["attrs"] = twig_array_merge(array("class" => "layui-input"), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 19, $this->source); })()));
            // line 20
            echo "    ";
            echo $context["sfr"]->macro_text_raw((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 20, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 20, $this->source); })()), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 20, $this->source); })()), (isset($context["raw"]) || array_key_exists("raw", $context) ? $context["raw"] : (function () { throw new Twig_Error_Runtime('Variable "raw" does not exist.', 20, $this->source); })()));
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 22
    public function macro_password_raw($__field__ = null, $__attrs__ = array(), ...$__varargs__)
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
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "password_raw"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "password_raw"));

            // line 23
            echo "    ";
            $context["sfr"] = $this->loadTemplate("/Common/simple_form_helpers_raw.html.twig", "/Common/simple_form_helpers_for_layui.html.twig", 23);
            // line 24
            echo "    ";
            $context["name"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 24, $this->source); })()), "name", array())) : ((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 24, $this->source); })())));
            // line 25
            echo "    ";
            $context["value"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 25, $this->source); })()), "value", array())) : (((twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "value", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 25, $this->source); })()), "value", array())) : (""))));
            // line 26
            echo "    ";
            echo $context["sfr"]->macro_password_raw((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 26, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 26, $this->source); })()), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 26, $this->source); })()));
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 28
    public function macro_hidden_raw($__field__ = null, $__attrs__ = array(), ...$__varargs__)
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
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "hidden_raw"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "hidden_raw"));

            // line 29
            echo "    ";
            $context["sfr"] = $this->loadTemplate("/Common/simple_form_helpers_raw.html.twig", "/Common/simple_form_helpers_for_layui.html.twig", 29);
            // line 30
            echo "    ";
            $context["name"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 30, $this->source); })()), "name", array())) : ((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 30, $this->source); })())));
            // line 31
            echo "    ";
            $context["value"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 31, $this->source); })()), "value", array())) : (((twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "value", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 31, $this->source); })()), "value", array())) : (""))));
            // line 32
            echo "    ";
            echo $context["sfr"]->macro_hidden_raw((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 32, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 32, $this->source); })()), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 32, $this->source); })()));
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
    public function macro_file_raw($__field__ = null, $__attrs__ = array(), ...$__varargs__)
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
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "file_raw"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "file_raw"));

            // line 35
            echo "    ";
            $context["sfr"] = $this->loadTemplate("/Common/simple_form_helpers_raw.html.twig", "/Common/simple_form_helpers_for_layui.html.twig", 35);
            // line 36
            echo "    ";
            $context["name"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 36, $this->source); })()), "name", array())) : ((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 36, $this->source); })())));
            // line 37
            echo "    ";
            echo $context["sfr"]->macro_file_raw((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 37, $this->source); })()), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 37, $this->source); })()));
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
    public function macro_checkbox_raw($__field__ = null, $__choices__ = null, $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "choices" => $__choices__,
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

            // line 40
            echo "    ";
            $context["sfr"] = $this->loadTemplate("/Common/simple_form_helpers_raw.html.twig", "/Common/simple_form_helpers_for_layui.html.twig", 40);
            // line 41
            echo "    ";
            $context["name"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 41, $this->source); })()), "name", array())) : ((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 41, $this->source); })())));
            // line 42
            echo "    ";
            $context["checked_values"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 42, $this->source); })()), "value", array())) : (((twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "values", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 42, $this->source); })()), "values", array())) : (null))));
            // line 43
            echo "
    ";
            // line 44
            echo $context["sfr"]->macro_checkbox_raw((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 44, $this->source); })()), (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 44, $this->source); })()), (isset($context["checked_values"]) || array_key_exists("checked_values", $context) ? $context["checked_values"] : (function () { throw new Twig_Error_Runtime('Variable "checked_values" does not exist.', 44, $this->source); })()), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 44, $this->source); })()));
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 46
    public function macro_radio_raw($__field__ = null, $__choices__ = null, $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "choices" => $__choices__,
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

            // line 47
            echo "    ";
            $context["sfr"] = $this->loadTemplate("/Common/simple_form_helpers_raw.html.twig", "/Common/simple_form_helpers_for_layui.html.twig", 47);
            // line 48
            echo "    ";
            $context["name"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 48, $this->source); })()), "name", array())) : ((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 48, $this->source); })())));
            // line 49
            echo "    ";
            $context["selected_value"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 49, $this->source); })()), "value", array())) : (((twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "value", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 49, $this->source); })()), "value", array())) : (null))));
            // line 50
            echo "    ";
            echo $context["sfr"]->macro_radio_raw((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 50, $this->source); })()), (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 50, $this->source); })()), (isset($context["selected_value"]) || array_key_exists("selected_value", $context) ? $context["selected_value"] : (function () { throw new Twig_Error_Runtime('Variable "selected_value" does not exist.', 50, $this->source); })()), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 50, $this->source); })()));
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 52
    public function macro_select_raw($__field__ = null, $__choices__ = null, $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "choices" => $__choices__,
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

            // line 53
            echo "    ";
            $context["sfr"] = $this->loadTemplate("/Common/simple_form_helpers_raw.html.twig", "/Common/simple_form_helpers_for_layui.html.twig", 53);
            // line 54
            echo "    ";
            $context["name"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 54, $this->source); })()), "name", array())) : ((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 54, $this->source); })())));
            // line 55
            echo "    ";
            $context["selected_value"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 55, $this->source); })()), "value", array())) : (((twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "value", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 55, $this->source); })()), "value", array())) : (null))));
            // line 56
            echo "    ";
            echo $context["sfr"]->macro_select_raw((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 56, $this->source); })()), (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 56, $this->source); })()), (isset($context["selected_value"]) || array_key_exists("selected_value", $context) ? $context["selected_value"] : (function () { throw new Twig_Error_Runtime('Variable "selected_value" does not exist.', 56, $this->source); })()), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 56, $this->source); })()));
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 58
    public function macro_textarea_raw($__field__ = null, $__attrs__ = array(), $__value__ = null, $__raw__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "attrs" => $__attrs__,
            "value" => $__value__,
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

            // line 59
            echo "    ";
            $context["sfr"] = $this->loadTemplate("/Common/simple_form_helpers_raw.html.twig", "/Common/simple_form_helpers_for_layui.html.twig", 59);
            // line 60
            echo "    ";
            $context["name"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 60, $this->source); })()), "name", array())) : ((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 60, $this->source); })())));
            // line 61
            echo "    ";
            $context["value"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 61, $this->source); })()), "value", array())) : (((twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "value", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 61, $this->source); })()), "value", array())) : (""))));
            // line 62
            echo "    ";
            echo $context["sfr"]->macro_textarea_raw((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 62, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 62, $this->source); })()), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 62, $this->source); })()), (isset($context["raw"]) || array_key_exists("raw", $context) ? $context["raw"] : (function () { throw new Twig_Error_Runtime('Variable "raw" does not exist.', 62, $this->source); })()));
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 64
    public function macro_button_raw($__field__ = null, $__title__ = null, $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "title" => $__title__,
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

            // line 65
            echo "    ";
            $context["sfr"] = $this->loadTemplate("/Common/simple_form_helpers_raw.html.twig", "/Common/simple_form_helpers_for_layui.html.twig", 65);
            // line 66
            echo "    ";
            $context["name"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 66, $this->source); })()), "name", array())) : ((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 66, $this->source); })())));
            // line 67
            echo "    ";
            $context["value"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 67, $this->source); })()), "value", array())) : (((twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "value", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 67, $this->source); })()), "value", array())) : (""))));
            // line 68
            echo "    ";
            echo $context["sfr"]->macro_button_raw((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 68, $this->source); })()), (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 68, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 68, $this->source); })()), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 68, $this->source); })()));
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 70
    public function macro_submit_raw($__field__ = null, $__title__ = null, $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "title" => $__title__,
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

            // line 71
            echo "    ";
            $context["sfr"] = $this->loadTemplate("/Common/simple_form_helpers_raw.html.twig", "/Common/simple_form_helpers_for_layui.html.twig", 71);
            // line 72
            echo "    ";
            $context["name"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 72, $this->source); })()), "name", array())) : ((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 72, $this->source); })())));
            // line 73
            echo "    ";
            $context["value"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 73, $this->source); })()), "value", array())) : (((twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "value", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 73, $this->source); })()), "value", array())) : (""))));
            // line 74
            echo "    ";
            echo $context["sfr"]->macro_submit_raw((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 74, $this->source); })()), (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 74, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 74, $this->source); })()), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 74, $this->source); })()));
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 77
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

            // line 78
            echo "    ";
            $context["sfr"] = $this->loadTemplate("/Common/simple_form_helpers_raw.html.twig", "/Common/simple_form_helpers_for_layui.html.twig", 78);
            // line 79
            echo "    ";
            $context["field_name"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 79, $this->source); })()), "name", array())) : ((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 79, $this->source); })())));
            // line 80
            echo "    ";
            $context["attrs"] = twig_array_merge(array("for" => (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 80, $this->source); })()), "class" => "layui-form-label"), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 80, $this->source); })()));
            // line 81
            echo "    <label ";
            echo $context["sfr"]->macro_attrs_raw((isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 81, $this->source); })()));
            echo ">
        ";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["label_text"]) || array_key_exists("label_text", $context) ? $context["label_text"] : (function () { throw new Twig_Error_Runtime('Variable "label_text" does not exist.', 82, $this->source); })()), "html", null, true);
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "required", array(), "any", true, true) && (isset($context["mark_required"]) || array_key_exists("mark_required", $context) ? $context["mark_required"] : (function () { throw new Twig_Error_Runtime('Variable "mark_required" does not exist.', 82, $this->source); })()))) ? ((isset($context["mark_required"]) || array_key_exists("mark_required", $context) ? $context["mark_required"] : (function () { throw new Twig_Error_Runtime('Variable "mark_required" does not exist.', 82, $this->source); })())) : ("")), "html", null, true);
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

    // line 86
    public function macro_error($__field__ = null, $__translate__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "translate" => $__translate__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "error"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "error"));

            // line 87
            echo "    ";
            $context["field_name"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 87, $this->source); })()), "name", array())) : ((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 87, $this->source); })())));
            // line 88
            echo "    ";
            $context["error"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "error", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "error", array()), "")) : (""));
            // line 89
            echo "    <div class=\"layui-form-mid layui-word-aux error ";
            echo twig_escape_filter($this->env, (((isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 89, $this->source); })())) ? (("error_" . (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 89, $this->source); })()))) : ("")), "html", null, true);
            echo "\" style=\"display: ";
            echo (((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 89, $this->source); })())) ? ("block") : ("none"));
            echo "\">";
            echo twig_escape_filter($this->env, (((isset($context["translate"]) || array_key_exists("translate", $context) ? $context["translate"] : (function () { throw new Twig_Error_Runtime('Variable "translate" does not exist.', 89, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 89, $this->source); })()))) : ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 89, $this->source); })()))), "html", null, true);
            echo "</div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 92
    public function macro_input($__field__ = null, $__type__ = null, $__value__ = null, $__attrs__ = array(), $__raw_value__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "type" => $__type__,
            "value" => $__value__,
            "attrs" => $__attrs__,
            "raw_value" => $__raw_value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "input"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "input"));

            // line 93
            echo "    ";
            $context["sfr"] = $this->loadTemplate("/Common/simple_form_helpers_raw.html.twig", "/Common/simple_form_helpers_for_layui.html.twig", 93);
            // line 94
            echo "
    ";
            // line 95
            $context["field_name"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 95, $this->source); })()), "name", array())) : ((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 95, $this->source); })())));
            // line 96
            echo "    
    ";
            // line 97
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "form", array(), "any", true, true)) {
                // line 98
                echo "    ";
                twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 98, $this->source); })()), "form", array()), "setRendered", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 98, $this->source); })()), "name", array()), 1 => true), "method");
                // line 99
                echo "    ";
            }
            // line 100
            echo "    
    ";
            // line 101
            $context["field_value"] = (( !((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 101, $this->source); })()) === null)) ? ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 101, $this->source); })())) : (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 101, $this->source); })()), "value", array())) : (""))));
            // line 102
            echo "
    ";
            // line 103
            if ( !twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "id", array(), "any", true, true)) {
                // line 104
                echo "        ";
                // line 105
                echo "    ";
            }
            // line 106
            echo "
    ";
            // line 107
            $context["class"] = ((twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "class", array()), "layui-input")) : ("layui-input"));
            // line 108
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "error", array(), "any", true, true) && twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 108, $this->source); })()), "error", array()))) {
                // line 109
                echo "        ";
                $context["class"] = ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 109, $this->source); })()) . " error");
                // line 110
                echo "    ";
            }
            // line 111
            echo "
    ";
            // line 112
            $context["attrs"] = twig_array_merge(array("class" => (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 112, $this->source); })())), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 112, $this->source); })()));
            // line 113
            echo "
    ";
            // line 114
            if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "required", array(), "any", true, true) && twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 114, $this->source); })()), "required", array()))) {
                // line 115
                echo "        ";
                $context["attrs"] = twig_array_merge(array("required" => "true", "lay-verify" => "required"), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 115, $this->source); })()));
                // line 116
                echo "    ";
            }
            // line 117
            echo "
    <input name=\"";
            // line 118
            echo twig_escape_filter($this->env, (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 118, $this->source); })()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (((isset($context["raw_value"]) || array_key_exists("raw_value", $context) ? $context["raw_value"] : (function () { throw new Twig_Error_Runtime('Variable "raw_value" does not exist.', 118, $this->source); })())) ? ((isset($context["field_value"]) || array_key_exists("field_value", $context) ? $context["field_value"] : (function () { throw new Twig_Error_Runtime('Variable "field_value" does not exist.', 118, $this->source); })())) : ((isset($context["field_value"]) || array_key_exists("field_value", $context) ? $context["field_value"] : (function () { throw new Twig_Error_Runtime('Variable "field_value" does not exist.', 118, $this->source); })()))), "html", null, true);
            echo "\" type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 118, $this->source); })()), "html", null, true);
            echo "\" ";
            echo $context["sfr"]->macro_attrs_raw((isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 118, $this->source); })()));
            echo " />

";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 122
    public function macro_field_begin($__field__ = null, $__label__ = null, $__options__ = array("outer" => "form-item", "inner" => "inline", "show_error" => true, "tips" => null), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "field_begin"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "field_begin"));

            // line 123
            echo "    ";
            $context["sf"] = $this;
            // line 124
            echo "
    ";
            // line 125
            $context["options"] = twig_array_merge(array("outer" => "form-item", "inner" => "inline", "show_error" => true, "tips" => null, "raw" => false), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 125, $this->source); })()));
            // line 126
            echo "
    ";
            // line 127
            $context["field_name"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 127, $this->source); })()), "name", array())) : ((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 127, $this->source); })())));
            // line 128
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 128, $this->source); })()), "outer", array()) === null)) {
                // line 129
                echo "        ";
                // line 130
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 130, $this->source); })()), "outer", array()) === "inline")) {
                // line 131
                echo "        <div class=\"layui-inline outer_";
                echo twig_escape_filter($this->env, (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 131, $this->source); })()), "html", null, true);
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "error", array(), "any", true, true)) ? ("form-item-error") : (""));
                echo "\">
    ";
            } else {
                // line 133
                echo "        <div class=\"layui-form-item outer_";
                echo twig_escape_filter($this->env, (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 133, $this->source); })()), "html", null, true);
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "error", array(), "any", true, true)) ? ("form-item-error") : (""));
                echo "\">
    ";
            }
            // line 135
            echo "
    ";
            // line 136
            if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 136, $this->source); })()) === null)) {
                // line 137
                echo "        ";
                echo $context["sf"]->macro_label((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 137, $this->source); })()), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 137, $this->source); })()), array("class" => ("layui-form-label label_" . (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 137, $this->source); })()))));
                echo "
    ";
            }
            // line 139
            echo "
    ";
            // line 140
            if ((twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 140, $this->source); })()), "inner", array()) === null)) {
                // line 141
                echo "        ";
                // line 142
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 142, $this->source); })()), "inner", array()) === "block")) {
                // line 143
                echo "        <div class=\"layui-input-block inner_";
                echo twig_escape_filter($this->env, (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 143, $this->source); })()), "html", null, true);
                echo "\">
    ";
            } else {
                // line 145
                echo "        <div class=\"layui-input-inline inner_";
                echo twig_escape_filter($this->env, (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 145, $this->source); })()), "html", null, true);
                echo "\">
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 149
    public function macro_field_end($__field__ = null, $__label__ = null, $__options__ = array("outer" => "form-item", "inner" => "inline", "show_error" => true, "tips" => null), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "field_end"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "field_end"));

            // line 150
            echo "    ";
            $context["sf"] = $this;
            // line 151
            echo "
    ";
            // line 152
            $context["options"] = twig_array_merge(array("outer" => "form-item", "inner" => "inline", "show_error" => true, "tips" => null), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 152, $this->source); })()));
            // line 153
            echo "
    ";
            // line 154
            if ((twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 154, $this->source); })()), "inner", array()) === null)) {
                // line 155
                echo "        ";
                // line 156
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 156, $this->source); })()), "inner", array()) === "block")) {
                // line 157
                echo "        </div>
    ";
            } else {
                // line 159
                echo "        </div>
    ";
            }
            // line 161
            echo "
    ";
            // line 162
            if (twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 162, $this->source); })()), "show_error", array())) {
                // line 163
                echo "        ";
                echo $context["sf"]->macro_error((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 163, $this->source); })()), true);
                echo "
    ";
            }
            // line 165
            echo "
    ";
            // line 166
            if ((twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 166, $this->source); })()), "tips", array()) === null)) {
                // line 167
                echo "        ";
                // line 168
                echo "    ";
            } else {
                // line 169
                echo "        ";
                $context["field_name"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 169, $this->source); })()), "name", array())) : ((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 169, $this->source); })())));
                // line 170
                echo "        <div class=\"layui-form-mid layui-word-aux tips ";
                echo twig_escape_filter($this->env, (((isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 170, $this->source); })())) ? (("tips_" . (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 170, $this->source); })()))) : ("")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 170, $this->source); })()), "tips", array()), "html", null, true);
                echo "</div>
    ";
            }
            // line 172
            echo "
    ";
            // line 173
            if ((twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 173, $this->source); })()), "outer", array()) === null)) {
                // line 174
                echo "        ";
                // line 175
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 175, $this->source); })()), "outer", array()) === "inline")) {
                // line 176
                echo "        </div>
    ";
            } else {
                // line 178
                echo "        </div>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 182
    public function macro_text($__field__ = null, $__label__ = null, $__options__ = array("outer" => "form-item", "inner" => "inline", "show_error" => true, "tips" => null, "raw" => false, "value" => null), $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "label" => $__label__,
            "options" => $__options__,
            "attrs" => $__attrs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "text"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "text"));

            // line 183
            echo "    ";
            $context["sf"] = $this;
            // line 184
            echo "
    ";
            // line 185
            if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 185, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "placeholder", array(), "any", true, true))) {
                // line 186
                echo "        ";
                $context["attrs"] = twig_array_merge(array("placeholder" => ("请输入" . (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 186, $this->source); })()))), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 186, $this->source); })()));
                // line 187
                echo "    ";
            }
            // line 188
            echo "    ";
            $context["options"] = twig_array_merge(array("outer" => "form-item", "inner" => "inline", "show_error" => true, "tips" => null, "raw" => false, "value" => null), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 188, $this->source); })()));
            // line 189
            echo "    ";
            $context["field_value"] = (( !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 189, $this->source); })()), "value", array()) === null)) ? (twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 189, $this->source); })()), "value", array())) : (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 189, $this->source); })()), "value", array())) : (""))));
            // line 190
            echo "
    ";
            // line 191
            echo $context["sf"]->macro_field_begin((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 191, $this->source); })()), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 191, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 191, $this->source); })()));
            echo "

    ";
            // line 193
            echo $context["sf"]->macro_input((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 193, $this->source); })()), "text", (isset($context["field_value"]) || array_key_exists("field_value", $context) ? $context["field_value"] : (function () { throw new Twig_Error_Runtime('Variable "field_value" does not exist.', 193, $this->source); })()), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 193, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 193, $this->source); })()), "raw", array()));
            echo "

    ";
            // line 195
            echo $context["sf"]->macro_field_end((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 195, $this->source); })()), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 195, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 195, $this->source); })()));
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 198
    public function macro_password($__field__ = null, $__label__ = null, $__options__ = array("outer" => "form-item", "inner" => "inline", "show_error" => true, "tips" => null, "raw" => false, "value" => null), $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "label" => $__label__,
            "options" => $__options__,
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

            // line 199
            echo "    ";
            $context["sf"] = $this;
            // line 200
            echo "
    ";
            // line 201
            if ( !twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "placeholder", array(), "any", true, true)) {
                // line 202
                echo "        ";
                $context["attrs"] = twig_array_merge(array("placeholder" => ("请输入" . (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 202, $this->source); })()))), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 202, $this->source); })()));
                // line 203
                echo "    ";
            }
            // line 204
            echo "    ";
            $context["options"] = twig_array_merge(array("outer" => "form-item", "inner" => "inline", "show_error" => true, "tips" => null, "raw" => false, "value" => null), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 204, $this->source); })()));
            // line 205
            echo "    ";
            $context["field_value"] = (( !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 205, $this->source); })()), "value", array()) === null)) ? (twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 205, $this->source); })()), "value", array())) : (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 205, $this->source); })()), "value", array())) : (""))));
            // line 206
            echo "
    ";
            // line 207
            echo $context["sf"]->macro_field_begin((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 207, $this->source); })()), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 207, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 207, $this->source); })()));
            echo "

    ";
            // line 209
            echo $context["sf"]->macro_input((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 209, $this->source); })()), "password", (isset($context["field_value"]) || array_key_exists("field_value", $context) ? $context["field_value"] : (function () { throw new Twig_Error_Runtime('Variable "field_value" does not exist.', 209, $this->source); })()), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 209, $this->source); })()), true);
            echo "

    ";
            // line 211
            echo $context["sf"]->macro_field_end((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 211, $this->source); })()), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 211, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 211, $this->source); })()));
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 214
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

            // line 215
            echo "    ";
            $context["sf"] = $this;
            // line 216
            echo "    ";
            echo $context["sf"]->macro_input((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 216, $this->source); })()), "hidden", twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 216, $this->source); })()), "value", array()), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 216, $this->source); })()), false);
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 219
    public function macro_file($__field__ = null, $__label__ = null, $__options__ = array("outer" => "form-item", "inner" => "inline", "show_error" => true, "tips" => null, "raw" => false), $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "label" => $__label__,
            "options" => $__options__,
            "attrs" => $__attrs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "file"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "file"));

            // line 220
            echo "    ";
            $context["sf"] = $this;
            // line 221
            echo "
    ";
            // line 222
            $context["options"] = twig_array_merge(array("outer" => "form-item", "inner" => "inline", "show_error" => true, "tips" => null, "raw" => false), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 222, $this->source); })()));
            // line 223
            echo "
    ";
            // line 224
            echo $context["sf"]->macro_field_begin((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 224, $this->source); })()), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 224, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 224, $this->source); })()));
            echo "

    ";
            // line 226
            echo $context["sf"]->macro_input((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 226, $this->source); })()), "file", "", (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 226, $this->source); })()), true);
            echo "

    ";
            // line 228
            echo $context["sf"]->macro_field_end((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 228, $this->source); })()), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 228, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 228, $this->source); })()));
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 231
    public function macro_checkbox($__field__ = null, $__label__ = null, $__choices__ = null, $__options__ = array("outer" => "form-item", "inner" => "inline", "show_error" => true, "tips" => null, "raw" => false, "values" => array()), $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "label" => $__label__,
            "choices" => $__choices__,
            "options" => $__options__,
            "attrs" => $__attrs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "checkbox"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "checkbox"));

            // line 232
            echo "    ";
            $context["sf"] = $this;
            // line 233
            echo "
    ";
            // line 234
            $context["options"] = twig_array_merge(array("outer" => "form-item", "inner" => "inline", "show_error" => true, "tips" => null, "raw" => false, "values" => array()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 234, $this->source); })()));
            // line 235
            echo "
    ";
            // line 236
            echo $context["sf"]->macro_field_begin((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 236, $this->source); })()), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 236, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 236, $this->source); })()));
            echo "

    ";
            // line 238
            $context["field_value"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 238, $this->source); })()), "value", array())) : (""));
            // line 239
            echo "    ";
            $context["field_value"] = sprintf("%s", (isset($context["field_value"]) || array_key_exists("field_value", $context) ? $context["field_value"] : (function () { throw new Twig_Error_Runtime('Variable "field_value" does not exist.', 239, $this->source); })()));
            // line 240
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 240, $this->source); })()));
            foreach ($context['_seq'] as $context["opt_value"] => $context["title"]) {
                // line 241
                echo "        ";
                $context["opt_value"] = sprintf("%s", $context["opt_value"]);
                // line 242
                echo "        ";
                // line 243
                echo "        ";
                $context["item_attrs"] = twig_array_merge((isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 243, $this->source); })()), array("title" => $context["title"]));
                // line 244
                echo "
        ";
                // line 246
                echo "        ";
                $context["checked"] = false;
                // line 247
                echo "        ";
                if (($context["opt_value"] === (isset($context["field_value"]) || array_key_exists("field_value", $context) ? $context["field_value"] : (function () { throw new Twig_Error_Runtime('Variable "field_value" does not exist.', 247, $this->source); })()))) {
                    // line 248
                    echo "            ";
                    $context["checked"] = true;
                    // line 249
                    echo "        ";
                } else {
                    // line 250
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 250, $this->source); })()), "values", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["checked_value"]) {
                        if ( !(isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 250, $this->source); })())) {
                            // line 251
                            echo "                ";
                            $context["checked_value"] = sprintf("%s", $context["checked_value"]);
                            // line 252
                            echo "                ";
                            if (($context["opt_value"] === $context["checked_value"])) {
                                // line 253
                                echo "                    ";
                                $context["checked"] = true;
                                // line 254
                                echo "                ";
                            }
                            // line 255
                            echo "            ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['checked_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 256
                    echo "        ";
                }
                // line 257
                echo "
        ";
                // line 258
                if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 258, $this->source); })())) {
                    // line 259
                    echo "            ";
                    $context["item_attrs"] = twig_array_merge(array("checked" => "checked"), (isset($context["item_attrs"]) || array_key_exists("item_attrs", $context) ? $context["item_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "item_attrs" does not exist.', 259, $this->source); })()));
                    // line 260
                    echo "        ";
                }
                // line 261
                echo "        ";
                echo $context["sf"]->macro_input((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 261, $this->source); })()), "checkbox", $context["opt_value"], (isset($context["item_attrs"]) || array_key_exists("item_attrs", $context) ? $context["item_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "item_attrs" does not exist.', 261, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 261, $this->source); })()), "raw", array()));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['opt_value'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 263
            echo "
    ";
            // line 264
            echo $context["sf"]->macro_field_end((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 264, $this->source); })()), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 264, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 264, $this->source); })()));
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 267
    public function macro_radio($__field__ = null, $__label__ = null, $__choices__ = null, $__options__ = array("outer" => "form-item", "inner" => "inline", "show_error" => true, "tips" => null, "raw" => false, "value" => null), $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "label" => $__label__,
            "choices" => $__choices__,
            "options" => $__options__,
            "attrs" => $__attrs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "radio"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "radio"));

            // line 268
            echo "    ";
            $context["sf"] = $this;
            // line 269
            echo "
    ";
            // line 270
            $context["options"] = twig_array_merge(array("outer" => "form-item", "inner" => "inline", "show_error" => true, "tips" => null, "raw" => false, "value" => null), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 270, $this->source); })()));
            // line 271
            echo "
    ";
            // line 272
            echo $context["sf"]->macro_field_begin((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 272, $this->source); })()), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 272, $this->source); })()));
            echo "

    ";
            // line 274
            $context["field_value"] = (( !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 274, $this->source); })()), "value", array()) === null)) ? (twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 274, $this->source); })()), "value", array())) : (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 274, $this->source); })()), "value", array())) : (""))));
            // line 275
            echo "    ";
            $context["field_value"] = sprintf("%s", (isset($context["field_value"]) || array_key_exists("field_value", $context) ? $context["field_value"] : (function () { throw new Twig_Error_Runtime('Variable "field_value" does not exist.', 275, $this->source); })()));
            // line 276
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 276, $this->source); })()));
            foreach ($context['_seq'] as $context["opt_value"] => $context["title"]) {
                // line 277
                echo "        ";
                $context["opt_value"] = sprintf("%s", $context["opt_value"]);
                // line 278
                echo "
        ";
                // line 279
                $context["item_attrs"] = twig_array_merge(array(), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 279, $this->source); })()));
                // line 280
                echo "        ";
                $context["item_attrs"] = twig_array_merge((isset($context["item_attrs"]) || array_key_exists("item_attrs", $context) ? $context["item_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "item_attrs" does not exist.', 280, $this->source); })()), array("title" => $context["title"]));
                // line 281
                echo "        ";
                if (($context["opt_value"] === (isset($context["field_value"]) || array_key_exists("field_value", $context) ? $context["field_value"] : (function () { throw new Twig_Error_Runtime('Variable "field_value" does not exist.', 281, $this->source); })()))) {
                    // line 282
                    echo "            ";
                    $context["item_attrs"] = twig_array_merge(array("checked" => "checked"), (isset($context["item_attrs"]) || array_key_exists("item_attrs", $context) ? $context["item_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "item_attrs" does not exist.', 282, $this->source); })()));
                    // line 283
                    echo "        ";
                }
                // line 284
                echo "        ";
                $context["item_attrs"] = twig_array_merge(array("field_value" => (isset($context["field_value"]) || array_key_exists("field_value", $context) ? $context["field_value"] : (function () { throw new Twig_Error_Runtime('Variable "field_value" does not exist.', 284, $this->source); })()), "options_value" => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 284, $this->source); })()), "value", array())), (isset($context["item_attrs"]) || array_key_exists("item_attrs", $context) ? $context["item_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "item_attrs" does not exist.', 284, $this->source); })()));
                // line 285
                echo "        ";
                echo $context["sf"]->macro_input((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 285, $this->source); })()), "radio", $context["opt_value"], (isset($context["item_attrs"]) || array_key_exists("item_attrs", $context) ? $context["item_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "item_attrs" does not exist.', 285, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 285, $this->source); })()), "raw", array()));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['opt_value'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 287
            echo "
    ";
            // line 288
            echo $context["sf"]->macro_field_end((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 288, $this->source); })()), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 288, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 288, $this->source); })()));
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 291
    public function macro_select($__field__ = null, $__label__ = null, $__choices__ = null, $__options__ = array("outer" => "form-item", "inner" => "inline", "show_error" => true, "tips" => null, "raw" => false, "value" => null), $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "label" => $__label__,
            "choices" => $__choices__,
            "options" => $__options__,
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

            // line 292
            echo "    ";
            $context["sf"] = $this;
            // line 293
            echo "    ";
            $context["sfr"] = $this->loadTemplate("/Common/simple_form_helpers_raw.html.twig", "/Common/simple_form_helpers_for_layui.html.twig", 293);
            // line 294
            echo "
    ";
            // line 295
            $context["field_name"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 295, $this->source); })()), "name", array())) : ((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 295, $this->source); })())));
            // line 296
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "form", array(), "any", true, true)) {
                // line 297
                echo "        ";
                twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 297, $this->source); })()), "form", array()), "setRendered", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 297, $this->source); })()), "name", array()), 1 => true), "method");
                // line 298
                echo "    ";
            }
            // line 299
            echo "

    ";
            // line 301
            if ( !twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "id", array(), "any", true, true)) {
                // line 302
                echo "        ";
                // line 303
                echo "    ";
            }
            // line 304
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "required", array(), "any", true, true) && twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 304, $this->source); })()), "required", array()))) {
                // line 305
                echo "        ";
                $context["attrs"] = twig_array_merge(array("required" => "true", "lay-verify" => "required"), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 305, $this->source); })()));
                // line 306
                echo "    ";
            }
            // line 307
            echo "    ";
            $context["attrs"] = twig_array_merge(array("class" => "layui-select"), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 307, $this->source); })()));
            // line 308
            echo "
    ";
            // line 309
            $context["options"] = twig_array_merge(array("outer" => "form-item", "inner" => "inline", "show_error" => true, "tips" => null, "raw" => false, "value" => null), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 309, $this->source); })()));
            // line 310
            echo "
    ";
            // line 311
            echo $context["sf"]->macro_field_begin((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 311, $this->source); })()), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 311, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 311, $this->source); })()));
            echo "

    ";
            // line 313
            $context["field_value"] = (( !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 313, $this->source); })()), "value", array()) === null)) ? (twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 313, $this->source); })()), "value", array())) : (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 313, $this->source); })()), "value", array())) : (""))));
            // line 314
            echo "    ";
            $context["field_value"] = sprintf("%s", (isset($context["field_value"]) || array_key_exists("field_value", $context) ? $context["field_value"] : (function () { throw new Twig_Error_Runtime('Variable "field_value" does not exist.', 314, $this->source); })()));
            // line 315
            echo "    <select name=\"";
            echo twig_escape_filter($this->env, (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 315, $this->source); })()), "html", null, true);
            echo "\" ";
            echo $context["sfr"]->macro_attrs_raw((isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 315, $this->source); })()));
            echo ">
        ";
            // line 316
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 316, $this->source); })()));
            foreach ($context['_seq'] as $context["opt_value"] => $context["opt_text"]) {
                // line 317
                echo "            ";
                $context["opt_value"] = sprintf("%s", $context["opt_value"]);
                // line 318
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $context["opt_value"], "html", null, true);
                echo "\" ";
                echo ((($context["opt_value"] === (isset($context["field_value"]) || array_key_exists("field_value", $context) ? $context["field_value"] : (function () { throw new Twig_Error_Runtime('Variable "field_value" does not exist.', 318, $this->source); })()))) ? ("selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, $context["opt_text"], "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['opt_value'], $context['opt_text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 320
            echo "    </select>

    ";
            // line 322
            echo $context["sf"]->macro_field_end((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 322, $this->source); })()), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 322, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 322, $this->source); })()));
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 325
    public function macro_textarea($__field__ = null, $__label__ = null, $__options__ = array("outer" => "form-item", "inner" => "block", "show_error" => true, "tips" => null, "raw" => false, "value" => null), $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "label" => $__label__,
            "options" => $__options__,
            "attrs" => $__attrs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "textarea"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "textarea"));

            // line 326
            echo "    ";
            $context["sf"] = $this;
            // line 327
            echo "    ";
            $context["sfr"] = $this->loadTemplate("/Common/simple_form_helpers_raw.html.twig", "/Common/simple_form_helpers_for_layui.html.twig", 327);
            // line 328
            echo "
    ";
            // line 329
            $context["field_name"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 329, $this->source); })()), "name", array())) : ((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 329, $this->source); })())));
            // line 330
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "form", array(), "any", true, true)) {
                // line 331
                echo "        ";
                twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 331, $this->source); })()), "form", array()), "setRendered", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 331, $this->source); })()), "name", array()), 1 => true), "method");
                // line 332
                echo "    ";
            }
            // line 333
            echo "
    ";
            // line 334
            if ( !twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "id", array(), "any", true, true)) {
                // line 335
                echo "        ";
                $context["attrs"] = twig_array_merge(array("class" => ("layui-textarea " . (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 335, $this->source); })()))), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 335, $this->source); })()));
                // line 336
                echo "        ";
                // line 337
                echo "    ";
            }
            // line 338
            echo "    ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "placeholder", array(), "any", true, true)) {
                // line 339
                echo "        ";
                $context["attrs"] = twig_array_merge(array("placeholder" => ("请输入" . (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 339, $this->source); })()))), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 339, $this->source); })()));
                // line 340
                echo "    ";
            }
            // line 341
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "required", array(), "any", true, true) && twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 341, $this->source); })()), "required", array()))) {
                // line 342
                echo "        ";
                $context["attrs"] = twig_array_merge(array("required" => "true", "lay-verify" => "required"), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 342, $this->source); })()));
                // line 343
                echo "    ";
            }
            // line 344
            echo "
    ";
            // line 345
            $context["options"] = twig_array_merge(array("outer" => "form-item", "inner" => "block", "show_error" => true, "tips" => null, "raw" => false, "value" => null), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 345, $this->source); })()));
            // line 346
            echo "    ";
            $context["field_value"] = (( !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 346, $this->source); })()), "value", array()) === null)) ? (twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 346, $this->source); })()), "value", array())) : (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 346, $this->source); })()), "value", array())) : (""))));
            // line 347
            echo "
    ";
            // line 348
            echo $context["sf"]->macro_field_begin((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 348, $this->source); })()), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 348, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 348, $this->source); })()));
            echo "

    <textarea name=\"";
            // line 350
            echo twig_escape_filter($this->env, (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 350, $this->source); })()), "html", null, true);
            echo "\" ";
            echo $context["sfr"]->macro_attrs_raw((isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 350, $this->source); })()));
            echo ">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 350, $this->source); })()), "raw", array())) ? ((isset($context["field_value"]) || array_key_exists("field_value", $context) ? $context["field_value"] : (function () { throw new Twig_Error_Runtime('Variable "field_value" does not exist.', 350, $this->source); })())) : ((isset($context["field_value"]) || array_key_exists("field_value", $context) ? $context["field_value"] : (function () { throw new Twig_Error_Runtime('Variable "field_value" does not exist.', 350, $this->source); })()))), "html", null, true);
            echo "</textarea>

    ";
            // line 352
            echo $context["sf"]->macro_field_end((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 352, $this->source); })()), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 352, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 352, $this->source); })()));
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 355
    public function macro__button($__field__ = null, $__title__ = null, $__label__ = null, $__type__ = null, $__options__ = array(), $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "title" => $__title__,
            "label" => $__label__,
            "type" => $__type__,
            "options" => $__options__,
            "attrs" => $__attrs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "_button"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "_button"));

            // line 356
            echo "    ";
            $context["sf"] = $this;
            // line 357
            echo "    ";
            $context["sfr"] = $this->loadTemplate("/Common/simple_form_helpers_raw.html.twig", "/Common/simple_form_helpers_for_layui.html.twig", 357);
            // line 358
            echo "
    ";
            // line 359
            $context["options"] = twig_array_merge(array("outer" => "form-item", "inner" => "inline", "show_error" => true, "tips" => null, "raw" => false, "value" => null), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 359, $this->source); })()));
            // line 360
            echo "
    ";
            // line 361
            $context["field_name"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 361, $this->source); })()), "name", array())) : ((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 361, $this->source); })())));
            // line 362
            echo "    ";
            $context["field_value"] = (( !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 362, $this->source); })()), "value", array()) === null)) ? (twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 362, $this->source); })()), "value", array())) : (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 362, $this->source); })()), "value", array())) : (""))));
            // line 363
            echo "
    ";
            // line 364
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "form", array(), "any", true, true)) {
                // line 365
                echo "        ";
                twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 365, $this->source); })()), "form", array()), "setRendered", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 365, $this->source); })()), "name", array()), 1 => true), "method");
                // line 366
                echo "    ";
            }
            // line 367
            echo "

    ";
            // line 369
            if (( !twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "id", array(), "any", true, true) && (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 369, $this->source); })()))) {
                // line 370
                echo "        ";
                // line 371
                echo "    ";
            }
            // line 372
            echo "    ";
            if ((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 372, $this->source); })())) {
                // line 373
                echo "        ";
                $context["attrs"] = twig_array_merge(array("name" => (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 373, $this->source); })()), "value" => (isset($context["field_value"]) || array_key_exists("field_value", $context) ? $context["field_value"] : (function () { throw new Twig_Error_Runtime('Variable "field_value" does not exist.', 373, $this->source); })())), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 373, $this->source); })()));
                // line 374
                echo "    ";
            }
            // line 375
            echo "    ";
            $context["attrs"] = twig_array_merge(array("class" => "layui-btn layui-btn-primary"), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 375, $this->source); })()));
            // line 376
            echo "

    ";
            // line 378
            echo $context["sf"]->macro_field_begin((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 378, $this->source); })()), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 378, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 378, $this->source); })()));
            echo "

    <button type=\"";
            // line 380
            echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 380, $this->source); })()), "html", null, true);
            echo "\" ";
            echo $context["sfr"]->macro_attrs_raw((isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 380, $this->source); })()));
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 380, $this->source); })()), "html", null, true);
            echo "</button>

    ";
            // line 382
            echo $context["sf"]->macro_field_end((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 382, $this->source); })()), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 382, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 382, $this->source); })()));
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 385
    public function macro_button($__title__ = null, $__options__ = array("outer" => "form-item", "inner" => "inline", "show_error" => true, "tips" => null, "raw" => false, "value" => null), $__attrs__ = array(), $__label__ = "", $__field__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "options" => $__options__,
            "attrs" => $__attrs__,
            "label" => $__label__,
            "field" => $__field__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "button"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "button"));

            // line 386
            echo "    ";
            $context["sf"] = $this;
            // line 387
            echo "
    ";
            // line 388
            $context["attrs"] = twig_array_merge(array("class" => "layui-btn layui-btn-primary"), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 388, $this->source); })()));
            // line 389
            echo "    ";
            echo $context["sf"]->macro__button((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 389, $this->source); })()), (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 389, $this->source); })()), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 389, $this->source); })()), "button", (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 389, $this->source); })()), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 389, $this->source); })()));
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 392
    public function macro_submit($__title__ = null, $__options__ = array("outer" => "form-item", "inner" => "inline", "show_error" => true, "tips" => null, "raw" => false, "value" => null), $__attrs__ = array(), $__label__ = "", $__field__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "options" => $__options__,
            "attrs" => $__attrs__,
            "label" => $__label__,
            "field" => $__field__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "submit"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "submit"));

            // line 393
            echo "    ";
            $context["sf"] = $this;
            // line 394
            echo "
    ";
            // line 395
            $context["attrs"] = twig_array_merge(array("class" => "layui-btn layui-btn layui-btn-normal"), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 395, $this->source); })()));
            // line 396
            echo "    ";
            echo $context["sf"]->macro__button((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 396, $this->source); })()), (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 396, $this->source); })()), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 396, $this->source); })()), "submit", (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 396, $this->source); })()), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 396, $this->source); })()));
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 399
    public function macro_rest($__form__ = null, $__type__ = "hidden", $__options__ = array("raw" => false), $__attrs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "type" => $__type__,
            "options" => $__options__,
            "attrs" => $__attrs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "rest"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "rest"));

            // line 400
            echo "    ";
            $context["sf"] = $this;
            // line 401
            echo "
    ";
            // line 402
            $context["options"] = twig_array_merge(array("raw" => false), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 402, $this->source); })()));
            // line 403
            echo "
    ";
            // line 404
            $context["rest_fields"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 404, $this->source); })()), "getUnrenderedFields", array(), "method");
            // line 405
            echo "
    ";
            // line 406
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rest_fields"]) || array_key_exists("rest_fields", $context) ? $context["rest_fields"] : (function () { throw new Twig_Error_Runtime('Variable "rest_fields" does not exist.', 406, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 407
                echo "        ";
                echo $context["sf"]->macro_input($context["field"], (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 407, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["field"], "value", array()), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new Twig_Error_Runtime('Variable "attrs" does not exist.', 407, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 407, $this->source); })()), "raw", array()));
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

    // line 411
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

            // line 412
            echo "    ";
            $context["rules"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 412, $this->source); })()), "generateRules", array(), "method");
            // line 413
            echo "    ";
            if ((isset($context["rules"]) || array_key_exists("rules", $context) ? $context["rules"] : (function () { throw new Twig_Error_Runtime('Variable "rules" does not exist.', 413, $this->source); })())) {
                // line 414
                echo "        ";
                echo json_encode((isset($context["rules"]) || array_key_exists("rules", $context) ? $context["rules"] : (function () { throw new Twig_Error_Runtime('Variable "rules" does not exist.', 414, $this->source); })()));
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

    // line 418
    public function macro_csrf($__token_id__ = null, $__token_field_name__ = "_token", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "token_id" => $__token_id__,
            "token_field_name" => $__token_field_name__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "csrf"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "csrf"));

            // line 419
            echo "    <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["token_field_name"]) || array_key_exists("token_field_name", $context) ? $context["token_field_name"] : (function () { throw new Twig_Error_Runtime('Variable "token_field_name" does not exist.', 419, $this->source); })()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken((isset($context["token_id"]) || array_key_exists("token_id", $context) ? $context["token_id"] : (function () { throw new Twig_Error_Runtime('Variable "token_id" does not exist.', 419, $this->source); })())), "html", null, true);
            echo "\" />
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
        return "/Common/simple_form_helpers_for_layui.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2140 => 419,  2121 => 418,  2102 => 414,  2099 => 413,  2096 => 412,  2078 => 411,  2056 => 407,  2052 => 406,  2049 => 405,  2047 => 404,  2044 => 403,  2042 => 402,  2039 => 401,  2036 => 400,  2015 => 399,  1997 => 396,  1995 => 395,  1992 => 394,  1989 => 393,  1967 => 392,  1949 => 389,  1947 => 388,  1944 => 387,  1941 => 386,  1919 => 385,  1902 => 382,  1893 => 380,  1888 => 378,  1884 => 376,  1881 => 375,  1878 => 374,  1875 => 373,  1872 => 372,  1869 => 371,  1867 => 370,  1865 => 369,  1861 => 367,  1858 => 366,  1855 => 365,  1853 => 364,  1850 => 363,  1847 => 362,  1845 => 361,  1842 => 360,  1840 => 359,  1837 => 358,  1834 => 357,  1831 => 356,  1808 => 355,  1791 => 352,  1782 => 350,  1777 => 348,  1774 => 347,  1771 => 346,  1769 => 345,  1766 => 344,  1763 => 343,  1760 => 342,  1757 => 341,  1754 => 340,  1751 => 339,  1748 => 338,  1745 => 337,  1743 => 336,  1740 => 335,  1738 => 334,  1735 => 333,  1732 => 332,  1729 => 331,  1726 => 330,  1724 => 329,  1721 => 328,  1718 => 327,  1715 => 326,  1694 => 325,  1677 => 322,  1673 => 320,  1660 => 318,  1657 => 317,  1653 => 316,  1646 => 315,  1643 => 314,  1641 => 313,  1636 => 311,  1633 => 310,  1631 => 309,  1628 => 308,  1625 => 307,  1622 => 306,  1619 => 305,  1616 => 304,  1613 => 303,  1611 => 302,  1609 => 301,  1605 => 299,  1602 => 298,  1599 => 297,  1596 => 296,  1594 => 295,  1591 => 294,  1588 => 293,  1585 => 292,  1563 => 291,  1546 => 288,  1543 => 287,  1534 => 285,  1531 => 284,  1528 => 283,  1525 => 282,  1522 => 281,  1519 => 280,  1517 => 279,  1514 => 278,  1511 => 277,  1506 => 276,  1503 => 275,  1501 => 274,  1496 => 272,  1493 => 271,  1491 => 270,  1488 => 269,  1485 => 268,  1463 => 267,  1446 => 264,  1443 => 263,  1434 => 261,  1431 => 260,  1428 => 259,  1426 => 258,  1423 => 257,  1420 => 256,  1413 => 255,  1410 => 254,  1407 => 253,  1404 => 252,  1401 => 251,  1395 => 250,  1392 => 249,  1389 => 248,  1386 => 247,  1383 => 246,  1380 => 244,  1377 => 243,  1375 => 242,  1372 => 241,  1367 => 240,  1364 => 239,  1362 => 238,  1357 => 236,  1354 => 235,  1352 => 234,  1349 => 233,  1346 => 232,  1324 => 231,  1307 => 228,  1302 => 226,  1297 => 224,  1294 => 223,  1292 => 222,  1289 => 221,  1286 => 220,  1265 => 219,  1247 => 216,  1244 => 215,  1225 => 214,  1208 => 211,  1203 => 209,  1198 => 207,  1195 => 206,  1192 => 205,  1189 => 204,  1186 => 203,  1183 => 202,  1181 => 201,  1178 => 200,  1175 => 199,  1154 => 198,  1137 => 195,  1132 => 193,  1127 => 191,  1124 => 190,  1121 => 189,  1118 => 188,  1115 => 187,  1112 => 186,  1110 => 185,  1107 => 184,  1104 => 183,  1083 => 182,  1066 => 178,  1062 => 176,  1059 => 175,  1057 => 174,  1055 => 173,  1052 => 172,  1044 => 170,  1041 => 169,  1038 => 168,  1036 => 167,  1034 => 166,  1031 => 165,  1025 => 163,  1023 => 162,  1020 => 161,  1016 => 159,  1012 => 157,  1009 => 156,  1007 => 155,  1005 => 154,  1002 => 153,  1000 => 152,  997 => 151,  994 => 150,  974 => 149,  955 => 145,  949 => 143,  946 => 142,  944 => 141,  942 => 140,  939 => 139,  933 => 137,  931 => 136,  928 => 135,  920 => 133,  912 => 131,  909 => 130,  907 => 129,  904 => 128,  902 => 127,  899 => 126,  897 => 125,  894 => 124,  891 => 123,  871 => 122,  847 => 118,  844 => 117,  841 => 116,  838 => 115,  836 => 114,  833 => 113,  831 => 112,  828 => 111,  825 => 110,  822 => 109,  819 => 108,  817 => 107,  814 => 106,  811 => 105,  809 => 104,  807 => 103,  804 => 102,  802 => 101,  799 => 100,  796 => 99,  793 => 98,  791 => 97,  788 => 96,  786 => 95,  783 => 94,  780 => 93,  758 => 92,  736 => 89,  733 => 88,  730 => 87,  711 => 86,  692 => 82,  687 => 81,  684 => 80,  681 => 79,  678 => 78,  657 => 77,  639 => 74,  636 => 73,  633 => 72,  630 => 71,  610 => 70,  592 => 68,  589 => 67,  586 => 66,  583 => 65,  563 => 64,  545 => 62,  542 => 61,  539 => 60,  536 => 59,  515 => 58,  497 => 56,  494 => 55,  491 => 54,  488 => 53,  468 => 52,  450 => 50,  447 => 49,  444 => 48,  441 => 47,  421 => 46,  404 => 44,  401 => 43,  398 => 42,  395 => 41,  392 => 40,  372 => 39,  354 => 37,  351 => 36,  348 => 35,  329 => 34,  311 => 32,  308 => 31,  305 => 30,  302 => 29,  283 => 28,  265 => 26,  262 => 25,  259 => 24,  256 => 23,  237 => 22,  219 => 20,  216 => 19,  213 => 18,  210 => 17,  207 => 16,  187 => 15,  169 => 13,  166 => 12,  144 => 11,  126 => 9,  123 => 8,  103 => 7,  92 => 421,  89 => 417,  86 => 410,  83 => 398,  80 => 391,  77 => 384,  74 => 354,  71 => 324,  68 => 290,  65 => 266,  62 => 230,  59 => 218,  56 => 213,  53 => 197,  50 => 181,  47 => 148,  44 => 121,  41 => 91,  38 => 85,  35 => 76,  32 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{#
把simple_form_helpers_raw.html.twig 里面的 macro 导入进来，
这样页面使用的时候可以 sf.text(field, ...)，也可以 sf.text_raw(name, ...) ，方便使用
#}

{% macro label_raw(for, label_text, attrs={}) %}
    {% import ('/Common/simple_form_helpers_raw.html.twig') as sfr %}
    {{ sfr.label_raw(for, label_text, attrs) }}
{% endmacro %}
{% macro input_raw(type, name, value, attrs={}, raw=false) %}
    {% import ('/Common/simple_form_helpers_raw.html.twig') as sfr %}
    {{ sfr.input_raw(type, name, value, attrs, raw) }}
{% endmacro %}
{% macro text_raw(field, attrs={}, raw=false) %}
    {% import ('/Common/simple_form_helpers_raw.html.twig') as sfr %}
    {% set name = field.name is defined ? field.name : field %}
    {% set value = field.value is defined ? field.value : (attrs.value is defined ? attrs.value : '') %}
    {% set attrs = {'class': 'layui-input'}|merge(attrs) %}
    {{ sfr.text_raw(name, value, attrs, raw) }}
{% endmacro %}
{% macro password_raw(field, attrs={}) %}
    {% import ('/Common/simple_form_helpers_raw.html.twig') as sfr %}
    {% set name = field.name is defined ? field.name : field %}
    {% set value = field.value is defined ? field.value : (attrs.value is defined ? attrs.value : '') %}
    {{ sfr.password_raw(name, value, attrs) }}
{% endmacro %}
{% macro hidden_raw(field, attrs={}) %}
    {% import ('/Common/simple_form_helpers_raw.html.twig') as sfr %}
    {% set name = field.name is defined ? field.name : field %}
    {% set value = field.value is defined ? field.value : (attrs.value is defined ? attrs.value : '') %}
    {{ sfr.hidden_raw(name, value, attrs) }}
{% endmacro %}
{% macro file_raw(field, attrs={}) %}
    {% import ('/Common/simple_form_helpers_raw.html.twig') as sfr %}
    {% set name = field.name is defined ? field.name : field %}
    {{ sfr.file_raw(name, attrs) }}
{% endmacro %}
{% macro checkbox_raw(field, choices, attrs={}) %}
    {% import ('/Common/simple_form_helpers_raw.html.twig') as sfr %}
    {% set name = field.name is defined ? field.name : field %}
    {% set checked_values = field.value is defined ? field.value : (attrs.values is defined ? attrs.values : null) %}

    {{ sfr.checkbox_raw(name, choices, checked_values, attrs) }}
{% endmacro %}
{% macro radio_raw(field, choices, attrs={}) %}
    {% import ('/Common/simple_form_helpers_raw.html.twig') as sfr %}
    {% set name = field.name is defined ? field.name : field %}
    {% set selected_value = field.value is defined ? field.value : (attrs.value is defined ? attrs.value : null) %}
    {{ sfr.radio_raw(name, choices, selected_value, attrs) }}
{% endmacro %}
{% macro select_raw(field, choices, attrs={}) %}
    {% import ('/Common/simple_form_helpers_raw.html.twig') as sfr %}
    {% set name = field.name is defined ? field.name : field %}
    {% set selected_value = field.value is defined ? field.value : (attrs.value is defined ? attrs.value : null) %}
    {{ sfr.select_raw(name, choices, selected_value, attrs) }}
{% endmacro %}
{% macro textarea_raw(field, attrs={}, value=null, raw=false) %}
    {% import ('/Common/simple_form_helpers_raw.html.twig') as sfr %}
    {% set name = field.name is defined ? field.name : field %}
    {% set value = field.value is defined ? field.value : (attrs.value is defined ? attrs.value : '') %}
    {{ sfr.textarea_raw(name, value, attrs, raw) }}
{% endmacro %}
{% macro button_raw(field, title, attrs={}) %}
    {% import ('/Common/simple_form_helpers_raw.html.twig') as sfr %}
    {% set name = field.name is defined ? field.name : field %}
    {% set value = field.value is defined ? field.value : (attrs.value is defined ? attrs.value : '') %}
    {{ sfr.button_raw(name, title, value, attrs) }}
{% endmacro %}
{% macro submit_raw(field, title, attrs={}) %}
    {% import ('/Common/simple_form_helpers_raw.html.twig') as sfr %}
    {% set name = field.name is defined ? field.name : field %}
    {% set value = field.value is defined ? field.value : (attrs.value is defined ? attrs.value : '') %}
    {{ sfr.submit_raw(name, title, value, attrs) }}
{% endmacro %}

{% macro label(field, label_text, attrs={}, mark_required=' *') %}
    {% import ('/Common/simple_form_helpers_raw.html.twig') as sfr %}
    {% set field_name = field.name is defined ? field.name : field %}
    {% set attrs = {'for': field_name, 'class': 'layui-form-label'}|merge(attrs) %}
    <label {{ sfr.attrs_raw(attrs) }}>
        {{ label_text }}{{ field.required is defined and mark_required ? mark_required : '' }}
    </label>
{% endmacro %}

{% macro error(field, translate=true) %}
    {% set field_name = field.name is defined ? field.name : field %}
    {% set error      = field.error|default('') %}
    <div class=\"layui-form-mid layui-word-aux error {{ field_name ? 'error_' ~ field_name : '' }}\" style=\"display: {{ error ? 'block' : 'none' }}\">{{ translate ? (error|trans) : error }}</div>
{% endmacro %}

{% macro input(field, type, value=null, attrs={}, raw_value=false) %}
    {% import ('/Common/simple_form_helpers_raw.html.twig') as sfr %}

    {% set field_name = field.name is defined ? field.name : field %}
    
    {% if field.form is defined %}
    {% do field.form.setRendered(field.name, true) %}
    {% endif %}
    
    {% set field_value = value is not same as (null) ? value : (field.value is defined ? field.value : '') %}

    {% if attrs.id is not defined %}
        {#{% set attrs = {'id': field.name }|merge(attrs) %}#}
    {% endif %}

    {% set class = attrs.class|default(\"layui-input\") %}
    {% if field.error is defined and field.error %}
        {% set class = class ~ \" error\" %}
    {% endif %}

    {% set attrs = {'class': class }|merge(attrs) %}

    {% if field.required is defined and field.required %}
        {% set attrs = {'required': 'true', 'lay-verify': 'required'}|merge(attrs) %}
    {% endif %}

    <input name=\"{{ field_name }}\" value=\"{{ raw_value ? field_value|raw : field_value }}\" type=\"{{ type }}\" {{ sfr.attrs_raw(attrs) }} />

{% endmacro %}

{% macro field_begin(field, label, options={'outer': 'form-item', 'inner': 'inline', 'show_error': true, 'tips': null}) %}
    {% import _self as sf %}

    {% set options = {'outer': 'form-item', 'inner': 'inline', 'show_error': true, 'tips': null, 'raw': false}|merge(options) %}

    {% set field_name = field.name is defined ? field.name : field %}
    {% if options.outer is same as (null) %}
        {# no wrapper #}
    {% elseif options.outer is same as ('inline') %}
        <div class=\"layui-inline outer_{{ field_name }} {{ field.error is defined ? 'form-item-error' : '' }}\">
    {% else %}
        <div class=\"layui-form-item outer_{{ field_name }} {{ field.error is defined ? 'form-item-error' : '' }}\">
    {% endif %}

    {% if label is not same as (null) %}
        {{ sf.label(field, label, {'class': 'layui-form-label label_' ~ field_name}) }}
    {% endif %}

    {% if options.inner is same as (null) %}
        {# no wrapper #}
    {% elseif options.inner is same as ('block') %}
        <div class=\"layui-input-block inner_{{ field_name }}\">
    {% else %}
        <div class=\"layui-input-inline inner_{{ field_name }}\">
    {% endif %}
{% endmacro %}

{% macro field_end(field, label=null, options={'outer': 'form-item', 'inner': 'inline', 'show_error': true, 'tips': null}) %}
    {% import _self as sf %}

    {% set options = {'outer': 'form-item', 'inner': 'inline', 'show_error': true, 'tips': null}|merge(options) %}

    {% if options.inner is same as (null) %}
        {# no wrapper #}
    {% elseif options.inner is same as ('block') %}
        </div>
    {% else %}
        </div>
    {% endif %}

    {% if options.show_error %}
        {{ sf.error(field, true) }}
    {% endif %}

    {% if options.tips is same as (null) %}
        {# no tips #}
    {% else %}
        {% set field_name = field.name is defined ? field.name : field %}
        <div class=\"layui-form-mid layui-word-aux tips {{ field_name ? 'tips_' ~ field_name : '' }}\">{{ options.tips }}</div>
    {% endif %}

    {% if options.outer is same as (null) %}
        {# no wrapper #}
    {% elseif options.outer is same as ('inline') %}
        </div>
    {% else %}
        </div>
    {% endif %}
{% endmacro %}

{% macro text(field, label=null, options={'outer': 'form-item', 'inner': 'inline', 'show_error': true, 'tips': null, 'raw': false, 'value': null}, attrs={}) %}
    {% import _self as sf %}

    {% if label and attrs.placeholder is not defined %}
        {% set attrs = {'placeholder': '请输入' ~ label }|merge(attrs) %}
    {% endif %}
    {% set options = {'outer': 'form-item', 'inner': 'inline', 'show_error': true, 'tips': null, 'raw': false, 'value': null}|merge(options) %}
    {% set field_value = options.value is not same as (null) ? options.value : (field.value is defined ? field.value : '') %}

    {{ sf.field_begin(field, label, options) }}

    {{ sf.input(field, 'text', field_value, attrs, options.raw) }}

    {{ sf.field_end(field, label, options) }}
{% endmacro %}

{% macro password(field, label=null, options={'outer': 'form-item', 'inner': 'inline', 'show_error': true, 'tips': null, 'raw': false, 'value': null}, attrs={}) %}
    {% import _self as sf %}

    {% if attrs.placeholder is not defined %}
        {% set attrs = {'placeholder': '请输入' ~ label }|merge(attrs) %}
    {% endif %}
    {% set options = {'outer': 'form-item', 'inner': 'inline', 'show_error': true, 'tips': null, 'raw': false, 'value': null}|merge(options) %}
    {% set field_value = options.value is not same as (null) ? options.value : (field.value is defined ? field.value : '') %}

    {{ sf.field_begin(field, label, options) }}

    {{ sf.input(field, 'password', field_value, attrs, true) }}

    {{ sf.field_end(field, label, options) }}
{% endmacro %}

{% macro hidden(field, attrs={}) %}
    {% import _self as sf %}
    {{ sf.input(field, 'hidden', field.value, attrs, false) }}
{% endmacro %}

{% macro file(field, label=null, options={'outer': 'form-item', 'inner': 'inline', 'show_error': true, 'tips': null, 'raw': false}, attrs={}) %}
    {% import _self as sf %}

    {% set options = {'outer': 'form-item', 'inner': 'inline', 'show_error': true, 'tips': null, 'raw': false}|merge(options) %}

    {{ sf.field_begin(field, label, options) }}

    {{ sf.input(field, 'file', '', attrs, true) }}

    {{ sf.field_end(field, label, options) }}
{% endmacro %}

{% macro checkbox(field, label, choices, options={'outer': 'form-item', 'inner': 'inline', 'show_error': true, 'tips': null, 'raw': false, 'values': []}, attrs={}) %}
    {% import _self as sf %}

    {% set options = {'outer': 'form-item', 'inner': 'inline', 'show_error': true, 'tips': null, 'raw': false, 'values': []}|merge(options) %}

    {{ sf.field_begin(field, label, options) }}

    {% set field_value = field.value is defined ? field.value : '' %}
    {% set field_value = \"%s\"|format(field_value) %}
    {% for opt_value, title in choices %}
        {% set opt_value = \"%s\"|format(opt_value) %}
        {#{% set attrs = {'id': field.name ~ '_' ~ loop.index0}|merge(attrs) %}#}
        {% set item_attrs = attrs|merge({'title': title }) %}

        {# do a strict comparison #}
        {% set checked = false %}
        {% if opt_value is same as (field_value) %}
            {% set checked = true %}
        {% else %}
            {% for checked_value in options.values if not checked %}
                {% set checked_value = \"%s\"|format(checked_value) %}
                {% if opt_value is same as (checked_value) %}
                    {% set checked = true %}
                {% endif %}
            {% endfor %}
        {% endif %}

        {% if checked %}
            {% set item_attrs = {'checked': 'checked' }|merge(item_attrs) %}
        {% endif %}
        {{ sf.input(field, 'checkbox', opt_value, item_attrs, options.raw) }}
    {% endfor %}

    {{ sf.field_end(field, label, options) }}
{% endmacro %}

{% macro radio(field, label, choices, options={'outer': 'form-item', 'inner': 'inline', 'show_error': true, 'tips': null, 'raw': false, 'value': null}, attrs={}) %}
    {% import _self as sf %}

    {% set options = {'outer': 'form-item', 'inner': 'inline', 'show_error': true, 'tips': null, 'raw': false, 'value': null}|merge(options) %}

    {{ sf.field_begin(field, label, options) }}

    {% set field_value = options.value is not same as (null) ? options.value : (field.value is defined ? field.value : '') %}
    {% set field_value = \"%s\"|format(field_value) %}
    {% for opt_value, title in choices %}
        {% set opt_value = \"%s\"|format(opt_value) %}

        {% set item_attrs = {}|merge(attrs) %}
        {% set item_attrs = item_attrs|merge({'title': title }) %}
        {% if opt_value is same as (field_value)  %}
            {% set item_attrs = {'checked': 'checked' }|merge(item_attrs) %}
        {% endif %}
        {% set item_attrs = {'field_value': field_value,  'options_value': options.value}|merge(item_attrs) %}
        {{ sf.input(field, 'radio', opt_value, item_attrs, options.raw) }}
    {% endfor %}

    {{ sf.field_end(field, label, options) }}
{% endmacro %}

{% macro select(field, label, choices, options={'outer': 'form-item', 'inner': 'inline', 'show_error': true, 'tips': null, 'raw': false, 'value': null}, attrs={}) %}
    {% import _self as sf %}
    {% import ('/Common/simple_form_helpers_raw.html.twig') as sfr %}

    {% set field_name = field.name is defined ? field.name : field %}
    {% if field.form is defined %}
        {% do field.form.setRendered(field.name, true) %}
    {% endif %}


    {% if attrs.id is not defined %}
        {#{% set attrs = {'id': field.name}|merge(attrs) %}#}
    {% endif %}
    {% if field.required is defined and field.required %}
        {% set attrs = {'required': 'true', 'lay-verify': 'required'}|merge(attrs) %}
    {% endif %}
    {% set attrs = {'class': 'layui-select'}|merge(attrs) %}

    {% set options = {'outer': 'form-item', 'inner': 'inline', 'show_error': true, 'tips': null, 'raw': false, 'value': null}|merge(options) %}

    {{ sf.field_begin(field, label, options) }}

    {% set field_value = options.value is not same as (null) ? options.value : (field.value is defined ? field.value : '') %}
    {% set field_value = \"%s\"|format(field_value) %}
    <select name=\"{{ field_name }}\" {{ sfr.attrs_raw(attrs) }}>
        {% for opt_value, opt_text in choices %}
            {% set opt_value = \"%s\"|format(opt_value) %}
            <option value=\"{{ opt_value }}\" {{ opt_value is same as(field_value) ? 'selected' : '' }}>{{ opt_text }}</option>
        {% endfor %}
    </select>

    {{ sf.field_end(field, label, options) }}
{% endmacro %}

{% macro textarea(field, label=null, options={'outer': 'form-item', 'inner': 'block', 'show_error': true, 'tips': null, 'raw': false, 'value': null}, attrs={}) %}
    {% import _self as sf %}
    {% import ('/Common/simple_form_helpers_raw.html.twig') as sfr %}

    {% set field_name = field.name is defined ? field.name : field %}
    {% if field.form is defined %}
        {% do field.form.setRendered(field.name, true) %}
    {% endif %}

    {% if attrs.id is not defined %}
        {% set attrs = {'class': 'layui-textarea ' ~ field_name }|merge(attrs) %}
        {#{% set attrs = {'id': field.name, 'class': 'layui-textarea' }|merge(attrs) %}#}
    {% endif %}
    {% if attrs.placeholder is not defined %}
        {% set attrs = {'placeholder': '请输入' ~ label }|merge(attrs) %}
    {% endif %}
    {% if field.required is defined and field.required %}
        {% set attrs = {'required': 'true', 'lay-verify': 'required'}|merge(attrs) %}
    {% endif %}

    {% set options = {'outer': 'form-item', 'inner': 'block', 'show_error': true, 'tips': null, 'raw': false, 'value': null}|merge(options) %}
    {% set field_value = options.value is not same as (null) ? options.value : (field.value is defined ? field.value : '') %}

    {{ sf.field_begin(field, label, options) }}

    <textarea name=\"{{ field_name }}\" {{ sfr.attrs_raw(attrs) }}>{{ options.raw ? (field_value|raw) : field_value }}</textarea>

    {{ sf.field_end(field, label, options) }}
{% endmacro %}

{% macro _button(field, title, label=null, type, options={}, attrs={}) %}
    {% import _self as sf %}
    {% import ('/Common/simple_form_helpers_raw.html.twig') as sfr %}

    {% set options = {'outer': 'form-item', 'inner': 'inline', 'show_error': true, 'tips': null, 'raw': false, 'value': null}|merge(options) %}

    {% set field_name = field.name is defined ? field.name : field %}
    {% set field_value = options.value is not same as (null) ? options.value : (field.value is defined ? field.value : '') %}

    {% if field.form is defined %}
        {% do field.form.setRendered(field.name, true) %}
    {% endif %}


    {% if attrs.id is not defined and field_name %}
        {#{% set attrs = {'id': field_name }|merge(attrs) %}#}
    {% endif %}
    {% if field %}
        {% set attrs = {'name': field_name, 'value': field_value }|merge(attrs) %}
    {% endif %}
    {% set attrs = {'class': 'layui-btn layui-btn-primary'}|merge(attrs) %}


    {{ sf.field_begin(field, label, options) }}

    <button type=\"{{ type }}\" {{ sfr.attrs_raw(attrs) }}>{{ title }}</button>

    {{ sf.field_end(field, label, options) }}
{% endmacro %}

{% macro button(title, options={'outer': 'form-item', 'inner': 'inline', 'show_error': true, 'tips': null, 'raw': false, 'value': null}, attrs={}, label='', field=null) %}
    {% import _self as sf %}

    {% set attrs = {'class': 'layui-btn layui-btn-primary'}|merge(attrs) %}
    {{ sf._button(field, title, label, 'button', options, attrs) }}
{% endmacro %}

{% macro submit(title, options={'outer': 'form-item', 'inner': 'inline', 'show_error': true, 'tips': null, 'raw': false, 'value': null}, attrs={}, label='', field=null) %}
    {% import _self as sf %}

    {% set attrs = {'class': 'layui-btn layui-btn layui-btn-normal'}|merge(attrs) %}
    {{ sf._button(field, title, label, 'submit', options, attrs) }}
{% endmacro %}

{% macro rest(form, type='hidden', options={'raw': false}, attrs={}) %}
    {% import _self as sf %}

    {% set options = {'raw': false}|merge(options) %}

    {% set rest_fields = form.getUnrenderedFields() %}

    {% for field in rest_fields %}
        {{ sf.input(field, type, field.value, attrs, options.raw) }}
    {% endfor %}
{% endmacro %}

{% macro rules(form) %}
    {% set rules = form.generateRules() %}
    {% if rules %}
        {{ rules|json_encode|raw }}
    {% endif %}
{% endmacro %}

{% macro csrf(token_id, token_field_name = '_token') %}
    <input type=\"hidden\" name=\"{{ token_field_name }}\" value=\"{{ csrf_token(token_id) }}\" />
{% endmacro %}

", "/Common/simple_form_helpers_for_layui.html.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Common\\simple_form_helpers_for_layui.html.twig");
    }
}
