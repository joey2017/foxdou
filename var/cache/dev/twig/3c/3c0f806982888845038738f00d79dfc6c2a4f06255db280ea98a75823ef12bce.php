<?php

/* Admin/SystemAdministration/Article/article.js.twig */
class __TwigTemplate_5ab1d68f5b13952c48445a03244f24c9f6547a66203eed9f7e832decd9b19662 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/Article/article.js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/Article/article.js.twig"));

        // line 1
        echo "
function get_categories(portalId) {
    \$.getJSON(\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_articles_categories"), "js", null, true);
        echo ".json?portal_id=\"+portalId, function(data){
        var optionstring = \"\";
        \$.each(data.data, function(i,item){
            optionstring += \"<option value=\\\"\" + item.id + \"\\\" >\" + item.name + \"</option>\";
        });
        \$(\"#cate_id\").html('<option value=\"\"></option>' + optionstring);
        form.render('select'); //这个很重要
    });
}

layui.form.on('select(portal_id)', function(data){
    get_categories(data.value);
});


function reload_table(tableId) {
    table.reload(tableId, {
        where: \$('#' + tableId).serializeJSON()
    });
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/SystemAdministration/Article/article.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
function get_categories(portalId) {
    \$.getJSON(\"{{ path('admin_system_administration_articles_categories') }}.json?portal_id=\"+portalId, function(data){
        var optionstring = \"\";
        \$.each(data.data, function(i,item){
            optionstring += \"<option value=\\\"\" + item.id + \"\\\" >\" + item.name + \"</option>\";
        });
        \$(\"#cate_id\").html('<option value=\"\"></option>' + optionstring);
        form.render('select'); //这个很重要
    });
}

layui.form.on('select(portal_id)', function(data){
    get_categories(data.value);
});


function reload_table(tableId) {
    table.reload(tableId, {
        where: \$('#' + tableId).serializeJSON()
    });
}
", "Admin/SystemAdministration/Article/article.js.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\SystemAdministration\\Article\\article.js.twig");
    }
}
