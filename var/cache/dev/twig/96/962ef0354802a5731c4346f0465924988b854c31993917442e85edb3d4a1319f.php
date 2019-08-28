<?php

/* Common/Article/index.list.twig */
class __TwigTemplate_637d0f6ea8a502b2a55e7dd37f91fe5ae947b365936a57e7c4ebd25b53d552a4 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/Article/index.list.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/Article/index.list.twig"));

        // line 1
        echo "<ul class=\"article-list\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "    <li class=\"article-list-item\">
      <a href=\"javascript:view_article('";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("common_articles_view", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "')\">
        <span class=\"article-list-title\">";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
            echo "</span>
      </a>
      <span>";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "publish_time", array()), "html", null, true);
            echo "</span>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>
<script>
    function view_article(url) {
        var width = 1000;
        var height = window.screen.availHeight;
        window.open(url, '', 'scrollbars=0,width=' + width + ',height=' + height + ',top=' + (( (window.screen.availHeight) / 2 ) - (height / 2) ) + ',left=' + (( (window.screen.availWidth) / 2 ) - (width / 2)));
    }
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/Article/index.list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  48 => 7,  43 => 5,  39 => 4,  36 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"article-list\">
  {% for item in articles %}
    <li class=\"article-list-item\">
      <a href=\"javascript:view_article('{{ url(\"common_articles_view\", {'id': item.id}) }}')\">
        <span class=\"article-list-title\">{{ item.title }}</span>
      </a>
      <span>{{ item.publish_time }}</span>
    </li>
  {% endfor %}
</ul>
<script>
    function view_article(url) {
        var width = 1000;
        var height = window.screen.availHeight;
        window.open(url, '', 'scrollbars=0,width=' + width + ',height=' + height + ',top=' + (( (window.screen.availHeight) / 2 ) - (height / 2) ) + ',left=' + (( (window.screen.availWidth) / 2 ) - (width / 2)));
    }
</script>", "Common/Article/index.list.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Common\\Article\\index.list.twig");
    }
}
