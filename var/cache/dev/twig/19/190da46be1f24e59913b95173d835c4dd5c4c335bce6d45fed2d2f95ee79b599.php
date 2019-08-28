<?php

/* Admin/User/open_account_log_js.twig */
class __TwigTemplate_2f85c7bc9afc5549dbd615ea8a0952d7ff8c2d6023a7f799eee199ad60caa212 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/User/open_account_log_js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/User/open_account_log_js.twig"));

        // line 1
        echo "<script>
    var paltform = JSON.parse('";
        // line 2
        echo json_encode(twig_constant("App\\Platform::PLATFORMS"));
        echo "');
    var methods = JSON.parse('";
        // line 3
        echo json_encode(twig_constant("App\\Common\\Model\\User\\UsersOpenAccountLog::METHODS"));
        echo "');
    var url = \"\";
    var columns = [[
        {\"field\": \"id\", \"title\": \"记录编号\", \"width\": 50},
        {\"field\": \"method\", \"title\": \"开通方式\", \"width\": 150, templet:function(d){
            return methods[d.method];
        }},
        {\"field\": \"account\", \"title\": \"狐豆号\", \"width\": 150},
        {\"field\": \"user_name\", \"title\": \"通行证账号\", \"width\": 150},
        {\"field\": \"platform_id\", \"title\": \"开通平台账号\", templet:function(d){
            return paltform[d.platform_id];
        }},
        {\"field\": \"add_time\", \"title\": \"记录时间\", \"width\": 145, templet: \"#add_time\"},
    ]];

    function get_data() {
        var params=\$('#form').serialize();
        url = '?' + params;
        rander_table('#paged-table', url, columns);
    }

    layui.use(['table', 'laytpl'], function(){
        // 初始化
        get_data();
    })

</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/User/open_account_log_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    var paltform = JSON.parse('{{ constant(\"App\\\\Platform::PLATFORMS\")|json_encode|raw }}');
    var methods = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\User\\\\UsersOpenAccountLog::METHODS\")|json_encode|raw }}');
    var url = \"\";
    var columns = [[
        {\"field\": \"id\", \"title\": \"记录编号\", \"width\": 50},
        {\"field\": \"method\", \"title\": \"开通方式\", \"width\": 150, templet:function(d){
            return methods[d.method];
        }},
        {\"field\": \"account\", \"title\": \"狐豆号\", \"width\": 150},
        {\"field\": \"user_name\", \"title\": \"通行证账号\", \"width\": 150},
        {\"field\": \"platform_id\", \"title\": \"开通平台账号\", templet:function(d){
            return paltform[d.platform_id];
        }},
        {\"field\": \"add_time\", \"title\": \"记录时间\", \"width\": 145, templet: \"#add_time\"},
    ]];

    function get_data() {
        var params=\$('#form').serialize();
        url = '?' + params;
        rander_table('#paged-table', url, columns);
    }

    layui.use(['table', 'laytpl'], function(){
        // 初始化
        get_data();
    })

</script>
", "Admin/User/open_account_log_js.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\User\\open_account_log_js.twig");
    }
}
