<?php

/* Reseller/Home/_article_list.twig */
class __TwigTemplate_5146d23ea0fff231b3dc5c17739e93b432fba2a4d939885c68e960dd62bac08b extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Home/_article_list.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Home/_article_list.twig"));

        // line 1
        echo "<div class=\"agent-main\">
  <div class=\"agent-cols\" >
    <div class=\"agent-list d-clear\">
      ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "        <div class=\"agent-item\">
          <a href=\"javascript:view_article('";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("common_articles_view", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "')\">
            <div class=\"img-view\">
              <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["item"], "images", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["item"], "images", array()), $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/common/img/default-pic.jpg"))) : ($this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/common/img/default-pic.jpg"))), "html", null, true);
            echo "\"/>
            </div>
            <h3><b>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
            echo "</b></h3>
            <p>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "abstract", array()), "html", null, true);
            echo "</p>
            <span>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "publish_time", array()), "html", null, true);
            echo "</span>
          </a>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </div>
    <div class=\"agent-more\">
      <div id=\"pager\"></div>
    </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Reseller/Home/_article_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  59 => 12,  55 => 11,  51 => 10,  46 => 8,  41 => 6,  38 => 5,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"agent-main\">
  <div class=\"agent-cols\" >
    <div class=\"agent-list d-clear\">
      {% for item in data %}
        <div class=\"agent-item\">
          <a href=\"javascript:view_article('{{ url(\"common_articles_view\", {'id': item.id}) }}')\">
            <div class=\"img-view\">
              <img src=\"{{ item.images|default(asset('/assets/common/img/default-pic.jpg')) }}\"/>
            </div>
            <h3><b>{{ item.title }}</b></h3>
            <p>{{ item.abstract }}</p>
            <span>{{ item.publish_time }}</span>
          </a>
        </div>
      {% endfor %}
    </div>
    <div class=\"agent-more\">
      <div id=\"pager\"></div>
    </div>
  </div>
</div>
", "Reseller/Home/_article_list.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Home\\_article_list.twig");
    }
}
