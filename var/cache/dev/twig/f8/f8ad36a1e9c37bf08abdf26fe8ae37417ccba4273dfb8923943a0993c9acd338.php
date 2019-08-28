<?php

/* Admin/UserDetail/Main/real_name_info_history.twig */
class __TwigTemplate_afe4bf78dc8dfa69374442de4f44fb73197b8be4ed3f2efb8ab22c626bd5aecd extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/Main/real_name_info_history.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/Main/real_name_info_history.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>基本管理-开通平台</title>
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
    <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">

    <script src=\"/assets/admin/h/js/jquery.min.js?v=2.1.4\"></script>
    <script src=\"/assets/admin/js/common.js\"></script>
    <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>

</head>

<body>
<div class=\"main-box\">
    <ul class=\"h-tab\">
        <li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_main_real_name_info", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 19, $this->source); })()), "user_id", array()))), "html", null, true);
        echo "\">认证信息</a></li>
        <li><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_main_real_name_info_pic", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 20, $this->source); })()), "user_id", array()))), "html", null, true);
        echo "\">证件照片</a></li>
        <li class=\"tab-this\"><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_main_real_name_info_history", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 21, $this->source); })()), "user_id", array()))), "html", null, true);
        echo "\">历史认证</a></li>
    </ul>
    <div class=\"h-input-block table-style2\">
        <table id=\"paged-table\" lay-filter=\"user-table\">

        </table>
    </div>
</div>

<script type=\"text/javascript\">

    var columns = [[
        {\"field\": \"id\", \"title\": \"名字\"},
        {\"field\": \"id\", \"title\": \"性质\"},
        {\"field\": \"user_name\", \"title\": \"证件号\"},
        {\"field\": \"nick_name\", \"title\": \"法人姓名\"},
        {\"field\": \"real_name_status\", \"title\": \"法人证件号\"},
        {\"field\": \"business_name\", \"title\": \"户籍地址\"},
        {\"field\": \"bind_mobile\", \"title\": \"提交实名认证时间\"},
        {\"field\": \"type\", \"title\": \"完成实名认证时间\"}
    ]];

    function get_data() {
        rander_table('#paged-table', '";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_main_real_name_info_history");
        echo "', columns);
    }


    layui.use('table', function(){
        // 初始化
        get_data();
    })

</script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/UserDetail/Main/real_name_info_history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 44,  57 => 21,  53 => 20,  49 => 19,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>基本管理-开通平台</title>
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
    <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">

    <script src=\"/assets/admin/h/js/jquery.min.js?v=2.1.4\"></script>
    <script src=\"/assets/admin/js/common.js\"></script>
    <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>

</head>

<body>
<div class=\"main-box\">
    <ul class=\"h-tab\">
        <li><a href=\"{{ path('admin_user_details_main_real_name_info',{id:user.user_id}) }}\">认证信息</a></li>
        <li><a href=\"{{ path('admin_user_details_main_real_name_info_pic',{id:user.user_id}) }}\">证件照片</a></li>
        <li class=\"tab-this\"><a href=\"{{ path('admin_user_details_main_real_name_info_history',{id:user.user_id}) }}\">历史认证</a></li>
    </ul>
    <div class=\"h-input-block table-style2\">
        <table id=\"paged-table\" lay-filter=\"user-table\">

        </table>
    </div>
</div>

<script type=\"text/javascript\">

    var columns = [[
        {\"field\": \"id\", \"title\": \"名字\"},
        {\"field\": \"id\", \"title\": \"性质\"},
        {\"field\": \"user_name\", \"title\": \"证件号\"},
        {\"field\": \"nick_name\", \"title\": \"法人姓名\"},
        {\"field\": \"real_name_status\", \"title\": \"法人证件号\"},
        {\"field\": \"business_name\", \"title\": \"户籍地址\"},
        {\"field\": \"bind_mobile\", \"title\": \"提交实名认证时间\"},
        {\"field\": \"type\", \"title\": \"完成实名认证时间\"}
    ]];

    function get_data() {
        rander_table('#paged-table', '{{ path('admin_user_details_main_real_name_info_history') }}', columns);
    }


    layui.use('table', function(){
        // 初始化
        get_data();
    })

</script>
</body>
</html>
", "Admin/UserDetail/Main/real_name_info_history.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\UserDetail\\Main\\real_name_info_history.twig");
    }
}
