<?php

/* Open/ControlPanel/main.twig */
class __TwigTemplate_bed55d042edad2648f3484c25667b8ffdf7ae985742d977793173802d0872e7b extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Open/ControlPanel/main.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Open/ControlPanel/main.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  <title></title>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/layui.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/nornmalize.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/common.css\"/>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/iconfont/iconfont.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/overview.css\" />
  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.min.js\"></script>
  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/js/common.js\" ></script>
  <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>
</head>

<frameset cols=\"200px,*\" marginwidth=\"0\" marginheight=\"0\">
  <!-- left-->
  <frame name=\"left-frame\" noresize=\"noresize\" marginwidth=\"0\" marginheight=\"0\" frameborder=\"0\" scrolling=\"auto\" marginheight=\"0\" src=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["left_panel_route"]) || array_key_exists("left_panel_route", $context) ? $context["left_panel_route"] : (function () { throw new Twig_Error_Runtime('Variable "left_panel_route" does not exist.', 19, $this->source); })()));
        echo "\">
  <!-- /lef-->

  <!-- right-->
  <frame name=\"right-frame\" noresize=\"noresize\" marginwidth=\"0\" marginheight=\"0\" frameborder=\"0\" scrolling=\"auto\" marginheight=\"0\" src=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["right_panel_route"]) || array_key_exists("right_panel_route", $context) ? $context["right_panel_route"] : (function () { throw new Twig_Error_Runtime('Variable "right_panel_route" does not exist.', 23, $this->source); })()));
        echo "\">
  <!-- /right-->
</frameset>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Open/ControlPanel/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 23,  49 => 19,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  <title></title>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/layui.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/nornmalize.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/common.css\"/>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/iconfont/iconfont.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/overview.css\" />
  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.min.js\"></script>
  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/js/common.js\" ></script>
  <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>
</head>

<frameset cols=\"200px,*\" marginwidth=\"0\" marginheight=\"0\">
  <!-- left-->
  <frame name=\"left-frame\" noresize=\"noresize\" marginwidth=\"0\" marginheight=\"0\" frameborder=\"0\" scrolling=\"auto\" marginheight=\"0\" src=\"{{ path(left_panel_route) }}\">
  <!-- /lef-->

  <!-- right-->
  <frame name=\"right-frame\" noresize=\"noresize\" marginwidth=\"0\" marginheight=\"0\" frameborder=\"0\" scrolling=\"auto\" marginheight=\"0\" src=\"{{ path(right_panel_route) }}\">
  <!-- /right-->
</frameset>
</html>", "Open/ControlPanel/main.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Open\\ControlPanel\\main.twig");
    }
}
