<?php

/* Admin/SystemAdministration/ArticleCategory/article_category.js.twig */
class __TwigTemplate_fd3f2e3fb066645d08fc404b29f9194d673b0ac4116d9f0cfe17a33b567af48b extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/ArticleCategory/article_category.js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/ArticleCategory/article_category.js.twig"));

        // line 1
        echo "function get_categories(portalId, callback) {
    \$.getJSON(\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_articles_categories"), "js", null, true);
        echo ".json?portal_id=\"+portalId, function(data){
        var optionstring = \"\";
        \$.each(data.data, function(i,item){
            optionstring += \"<option value=\\\"\" + item.id + \"\\\" >\" + item.name + \"</option>\";
        });
        \$(\"#parent_id\").html('<option value=\"\"></option>' + optionstring);
        form.render('select'); //这个很重要

        if(callback) {
            callback(data.data)
        }
    });
}

layui.form.on('select(portal_id)', function(data){
    get_categories(data.value);
});


function reload_table(tableId) {
    table.reload(tableId, {
        where: \$('#' + tableId).serializeJSON()
    });
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/SystemAdministration/ArticleCategory/article_category.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("function get_categories(portalId, callback) {
    \$.getJSON(\"{{ path('admin_system_administration_articles_categories') }}.json?portal_id=\"+portalId, function(data){
        var optionstring = \"\";
        \$.each(data.data, function(i,item){
            optionstring += \"<option value=\\\"\" + item.id + \"\\\" >\" + item.name + \"</option>\";
        });
        \$(\"#parent_id\").html('<option value=\"\"></option>' + optionstring);
        form.render('select'); //这个很重要

        if(callback) {
            callback(data.data)
        }
    });
}

layui.form.on('select(portal_id)', function(data){
    get_categories(data.value);
});


function reload_table(tableId) {
    table.reload(tableId, {
        where: \$('#' + tableId).serializeJSON()
    });
}", "Admin/SystemAdministration/ArticleCategory/article_category.js.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\SystemAdministration\\ArticleCategory\\article_category.js.twig");
    }
}
