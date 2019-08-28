<?php

/* Admin/User/account_status_log_js.twig */
class __TwigTemplate_f6ee45897d95c50591db3867635205413fc120c8bca32ba6d112f36a55914563 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/User/account_status_log_js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/User/account_status_log_js.twig"));

        // line 1
        echo "<script>
    var url = \"\";
    var columns = [[
        {\"field\": \"id\", \"title\": \"记录编号\", \"width\": 50},
        {\"field\": \"account\", \"title\": \"狐豆号\", \"width\": 150},
        {\"field\": \"pass\", \"title\": \"通行证账号\", \"width\": 150},
        {\"field\": \"status\", \"title\": \"冻结/解冻\", templet:function(d){
            return d.status * 1 == 1 ? '冻结' : '解冻';
        }},
        {\"field\": \"desc\", \"title\": \"事件描述\", \"width\": 150},
        {\"field\": \"add_time\", \"title\": \"记录时间\", \"width\": 145, templet: \"#add_time\"},
    ]];

    function get_data() {
        var params=\$('#form').serialize();
        url = '?' + params;
        rander_table('#paged-table', url, columns);
    }

    // 初始化
    get_data();

</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/User/account_status_log_js.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    var url = \"\";
    var columns = [[
        {\"field\": \"id\", \"title\": \"记录编号\", \"width\": 50},
        {\"field\": \"account\", \"title\": \"狐豆号\", \"width\": 150},
        {\"field\": \"pass\", \"title\": \"通行证账号\", \"width\": 150},
        {\"field\": \"status\", \"title\": \"冻结/解冻\", templet:function(d){
            return d.status * 1 == 1 ? '冻结' : '解冻';
        }},
        {\"field\": \"desc\", \"title\": \"事件描述\", \"width\": 150},
        {\"field\": \"add_time\", \"title\": \"记录时间\", \"width\": 145, templet: \"#add_time\"},
    ]];

    function get_data() {
        var params=\$('#form').serialize();
        url = '?' + params;
        rander_table('#paged-table', url, columns);
    }

    // 初始化
    get_data();

</script>
", "Admin/User/account_status_log_js.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\User\\account_status_log_js.twig");
    }
}
