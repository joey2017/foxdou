<?php

/* Admin/UserDetail/left_main.twig */
class __TwigTemplate_71687d5c10d364f09387541d8a93f546a189445b9f836a77d3aa8a632e737330 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/left_main.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/left_main.twig"));

        // line 1
        echo "<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/sidenav.css\" />
    <script type=\"text/javascript\" src=\"/assets/admin/js/jquery.min.js\"></script>
    <title>侧栏</title>
    <script language=\"JavaScript\">
        \$(function(){
            \$(\".sidenav li\").eq(0).addClass('sidenav-this');
            \$(\".sidenav li\").click(function() {
                \$(this).siblings('li').removeClass('sidenav-this');
                \$(this).addClass('sidenav-this');
            });
        });
    </script>
</head>

<body>
<div class=\"sidenav-box\">
    <ul class=\"sidenav\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["left_menu"]) || array_key_exists("left_menu", $context) ? $context["left_menu"] : (function () { throw new Twig_Error_Runtime('Variable "left_menu" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "            <li class=\"";
            echo ((false) ? ("sidenav-this") : (""));
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", array()), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "\" target=\"right-frame\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </ul>
</div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/UserDetail/left_main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 25,  56 => 23,  52 => 22,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/sidenav.css\" />
    <script type=\"text/javascript\" src=\"/assets/admin/js/jquery.min.js\"></script>
    <title>侧栏</title>
    <script language=\"JavaScript\">
        \$(function(){
            \$(\".sidenav li\").eq(0).addClass('sidenav-this');
            \$(\".sidenav li\").click(function() {
                \$(this).siblings('li').removeClass('sidenav-this');
                \$(this).addClass('sidenav-this');
            });
        });
    </script>
</head>

<body>
<div class=\"sidenav-box\">
    <ul class=\"sidenav\">
        {% for item in left_menu %}
            <li class=\"{{ false ? 'sidenav-this' : '' }}\"><a href=\"{{ item.url }}?id={{ id }}\" target=\"right-frame\">{{ item.name }}</a></li>
        {% endfor %}
    </ul>
</div>
</body>
</html>", "Admin/UserDetail/left_main.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\UserDetail\\left_main.twig");
    }
}
