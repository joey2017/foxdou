<?php

/* Common/Article/index.twig */
class __TwigTemplate_eb95f335d157728097b1cbd70cc6a55cca7f7ab38e6f860809aba9f9e701ec33 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/Article/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/Article/index.twig"));

        // line 1
        echo "<style type=\"text/css\">
  .m-wrapper{padding:10px 20px;text-align: left;}
  .m-notice-box{}
  .m-notice{padding: 25px 0;border-bottom: 1px dashed #E0E0E0;}
  .m-notice:last-child{border: none;}
  .m-notice h1{height: 40px;}
  .title{font-size: 18px;font-weight: bold;}
  .title a{color: #666666;}
  .title a:hover{color: #1AB394;}
  .info-text{font-size: 14px;color: #666666;line-height: 20px;}
  .info-text p{padding-bottom: 10px;}
  .info-foot{height:20px;line-height: 20px;color: #999999;}
  .info-foot div{display: inline-block; margin-right:40px;}
</style>

<div class=\"m-wrapper g-bdc\">
  <div class=\"m-notice-box\">
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "      <div class=\"m-notice\">
        <a href=\"javascript:view_article('";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("common_articles_view", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "')\">
          <h1 class=\"title\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
            echo "</h1>
          ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["item"], "abstracte", array(), "any", true, true)) {
                // line 23
                echo "            <div class=\"info-text\">
              ";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["item"], "abstracte", array());
                echo "
            </div>
          ";
            }
            // line 27
            echo "          <div class=\"info-foot\">
            <div>发布时间：<span>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "publish_time", array()), "html", null, true);
            echo "</span></div>
          </div>
        </a>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
    <div id=\"page\"></div>
  </div>
</div>

<script>
    function view_article(url) {
        var width = 1000;
        var height = window.screen.availHeight;
        window.open(url, '', 'scrollbars=0,width=' + width + ',height=' + height + ',top=' + (( (window.screen.availHeight) / 2 ) - (height / 2) ) + ',left=' + (( (window.screen.availWidth) / 2 ) - (width / 2)));
    }
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/Article/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 33,  77 => 28,  74 => 27,  68 => 24,  65 => 23,  63 => 22,  59 => 21,  55 => 20,  52 => 19,  48 => 18,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style type=\"text/css\">
  .m-wrapper{padding:10px 20px;text-align: left;}
  .m-notice-box{}
  .m-notice{padding: 25px 0;border-bottom: 1px dashed #E0E0E0;}
  .m-notice:last-child{border: none;}
  .m-notice h1{height: 40px;}
  .title{font-size: 18px;font-weight: bold;}
  .title a{color: #666666;}
  .title a:hover{color: #1AB394;}
  .info-text{font-size: 14px;color: #666666;line-height: 20px;}
  .info-text p{padding-bottom: 10px;}
  .info-foot{height:20px;line-height: 20px;color: #999999;}
  .info-foot div{display: inline-block; margin-right:40px;}
</style>

<div class=\"m-wrapper g-bdc\">
  <div class=\"m-notice-box\">
    {% for item in articles %}
      <div class=\"m-notice\">
        <a href=\"javascript:view_article('{{ url(\"common_articles_view\", {'id': item.id}) }}')\">
          <h1 class=\"title\">{{ item.title }}</h1>
          {% if item.abstracte is defined %}
            <div class=\"info-text\">
              {{ item.abstracte|raw }}
            </div>
          {% endif %}
          <div class=\"info-foot\">
            <div>发布时间：<span>{{ item.publish_time }}</span></div>
          </div>
        </a>
      </div>
    {% endfor %}

    <div id=\"page\"></div>
  </div>
</div>

<script>
    function view_article(url) {
        var width = 1000;
        var height = window.screen.availHeight;
        window.open(url, '', 'scrollbars=0,width=' + width + ',height=' + height + ',top=' + (( (window.screen.availHeight) / 2 ) - (height / 2) ) + ',left=' + (( (window.screen.availWidth) / 2 ) - (width / 2)));
    }
</script>
", "Common/Article/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Common\\Article\\index.twig");
    }
}
