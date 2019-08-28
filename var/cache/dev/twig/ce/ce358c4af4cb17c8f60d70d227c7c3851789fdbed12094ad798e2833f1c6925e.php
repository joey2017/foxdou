<?php

/* Admin/UserDetail/details_main.twig */
class __TwigTemplate_8bf0e04dc8cf84a3a824fd2aacbff749fb762c779b56e434ddc037ce8f7e1f68 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/details_main.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/details_main.twig"));

        // line 1
        echo "<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <title>用户详情</title>
</head>

<frameset cols=\"150px,*\" marginwidth=\"0\" marginheight=\"0\">
    <!-- left-->
    <frame name=\"left-frame\" noresize=\"noresize\" marginwidth=\"0\" marginheight=\"0\" frameborder=\"0\" scrolling=\"no\"
           src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["left_route_path"]) || array_key_exists("left_route_path", $context) ? $context["left_route_path"] : (function () { throw new Twig_Error_Runtime('Variable "left_route_path" does not exist.', 11, $this->source); })()), array("id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 11, $this->source); })()))), "html", null, true);
        echo "\">
    <!-- /lef-->

    <!-- right-->
    <frame name=\"right-frame\" noresize=\"noresize\" marginwidth=\"0\" marginheight=\"0\" frameborder=\"0\" scrolling=\"auto\" marginheight=\"0\"
           src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["right_route_path"]) || array_key_exists("right_route_path", $context) ? $context["right_route_path"] : (function () { throw new Twig_Error_Runtime('Variable "right_route_path" does not exist.', 16, $this->source); })()), array("id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 16, $this->source); })()))), "html", null, true);
        echo "\">
    <!-- /right-->
</frameset>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/UserDetail/details_main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 16,  41 => 11,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <title>用户详情</title>
</head>

<frameset cols=\"150px,*\" marginwidth=\"0\" marginheight=\"0\">
    <!-- left-->
    <frame name=\"left-frame\" noresize=\"noresize\" marginwidth=\"0\" marginheight=\"0\" frameborder=\"0\" scrolling=\"no\"
           src=\"{{ path(left_route_path, {'id': id}) }}\">
    <!-- /lef-->

    <!-- right-->
    <frame name=\"right-frame\" noresize=\"noresize\" marginwidth=\"0\" marginheight=\"0\" frameborder=\"0\" scrolling=\"auto\" marginheight=\"0\"
           src=\"{{ path(right_route_path, {'id': id}) }}\">
    <!-- /right-->
</frameset>
</html>", "Admin/UserDetail/details_main.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\UserDetail\\details_main.twig");
    }
}
