<?php

/* Admin/User/pass_management.twig */
class __TwigTemplate_444643946a241c7368c82024ff5ce86741eeea5dca45d1f43e5cb92fa8f937fc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Admin/Common/layout.twig", "Admin/User/pass_management.twig", 1);
        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
            'js_end' => array($this, 'block_js_end'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Admin/Common/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/User/pass_management.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/User/pass_management.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Admin/User/pass_management.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 5
        echo "    <div class=\"layui-fluid\" id=\"pass-management\">
        <div class=\"layui-card\">
            <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
                <form class=\"layui-form-item\" id=\"form\">
                    <div class=\"layui-inline\">
                        <input class=\"layui-input product-price\" name=\"user_name\" value=\"\" placeholder=\"关键字搜索\"
                               type=\"text\">
                    </div>
                    <div class=\"layui-inline\">
                        ";
        // line 14
        echo $context["sf"]->macro_select_raw("type", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\User\\User::TYPES"), "注册类型"), array("class" => "layui-input"));
        echo "
                    </div>
                    <div class=\"layui-inline\">
                        ";
        // line 17
        echo $context["sf"]->macro_select_raw("status", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\User\\User::STATUSES"), "账户状态"), array("class" => "layui-input"));
        echo "
                    </div>
                    <div class=\"layui-inline\">
                        ";
        // line 20
        echo $context["sf"]->macro_select_raw("is_entry_identity_info", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\User\\User::IDENTITY_STATUS"), "身份信息"), array("class" => "layui-input"));
        echo "
                    </div>
                    <div class=\"layui-inline\">
                        ";
        // line 23
        echo $context["sf"]->macro_select_raw("real_name_status", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\User\\RealNameAuthenticationInfo::STATUSES"), "实名认证"), array("class" => "layui-input"));
        echo "
                    </div>
                    <div class=\"layui-inline\">
                        ";
        // line 26
        echo $context["sf"]->macro_select_raw("is_open_platform", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\User\\User::OPENPLATFORM_STATUS"), "开放平台账户开通状态"), array("class" => "layui-input"));
        echo "
                    </div>
                    <div class=\"layui-inline\">
                        ";
        // line 29
        echo $context["sf"]->macro_select_raw("is_agent_platform", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\User\\User::AGENTPLATFORM_STATUS"), "代理商平台账户开通状态"), array("class" => "layui-input"));
        echo "
                    </div>
                    <div class=\"layui-inline\">
                        ";
        // line 32
        echo $context["sf"]->macro_select_raw("is_supplier_platform", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\User\\User::SUPPLIERPLATFORM_STATUS"), "供应商平台账户开通状态"), array("class" => "layui-input"));
        echo "
                    </div>
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">日期范围</label>
                        <div class=\"layui-input-block\">
                            <input type=\"text\" name=\"range_time\" class=\"layui-input\" id=\"timeFrame\" placeholder=\"\">
                        </div>
                    </div>
                    <div class=\"layui-inline\">
                        <div class=\"layui-input-block layui-input-block-margin\">
                            <button type=\"button\" class=\"layui-btn layuiadmin-btn-useradmin\" onclick=\"get_data()\">查询
                                <i class=\"layui-icon layui-icon-search layuiadmin-button-btn\"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class=\"layui-card-body\">
                <div style=\"padding: 5px 0;\">
                    <button class=\"layui-btn layuiadmin-btn-useradmin reverse-select\">
                        反选
                    </button>
                    </button>
                    <button class=\"layui-btn layuiadmin-btn-useradmin set-status\" data-type=\"SUSPENDED\">
                        冻结通行证
                    </button>
                    <button class=\"layui-btn layuiadmin-btn-useradmin set-status\" data-type=\"ACTIVE\">
                        解冻通行证
                    </button>
                </div>
                <table id=\"paged-table\" class=\"layui-table\" lay-filter=\"paged-table\">

                </table>
                <script type=\"text/html\" id=\"actions\">
                    <a class=\"layui-btn layui-btn-success layui-btn-xs\" lay-event=\"detail\">详情</a>
                </script>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 74
        echo "    ";
        $this->loadTemplate("/Admin/User/pass_management_js.twig", "Admin/User/pass_management.twig", 74)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/User/pass_management.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 74,  154 => 73,  104 => 32,  98 => 29,  92 => 26,  86 => 23,  80 => 20,  74 => 17,  68 => 14,  57 => 5,  48 => 4,  38 => 1,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Admin/Common/layout.twig' %}
{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

{% block main_content %}
    <div class=\"layui-fluid\" id=\"pass-management\">
        <div class=\"layui-card\">
            <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
                <form class=\"layui-form-item\" id=\"form\">
                    <div class=\"layui-inline\">
                        <input class=\"layui-input product-price\" name=\"user_name\" value=\"\" placeholder=\"关键字搜索\"
                               type=\"text\">
                    </div>
                    <div class=\"layui-inline\">
                        {{ sf.select_raw('type', to_options(constant(\"App\\\\Common\\\\Model\\\\User\\\\User::TYPES\"), '注册类型'), {\"class\": \"layui-input\"}) }}
                    </div>
                    <div class=\"layui-inline\">
                        {{ sf.select_raw('status', to_options(constant(\"App\\\\Common\\\\Model\\\\User\\\\User::STATUSES\"), '账户状态'), {\"class\": \"layui-input\"}) }}
                    </div>
                    <div class=\"layui-inline\">
                        {{ sf.select_raw('is_entry_identity_info', to_options(constant(\"App\\\\Common\\\\Model\\\\User\\\\User::IDENTITY_STATUS\"), '身份信息'), {\"class\": \"layui-input\"}) }}
                    </div>
                    <div class=\"layui-inline\">
                        {{ sf.select_raw('real_name_status', to_options(constant(\"App\\\\Common\\\\Model\\\\User\\\\RealNameAuthenticationInfo::STATUSES\"), '实名认证'), {\"class\": \"layui-input\"}) }}
                    </div>
                    <div class=\"layui-inline\">
                        {{ sf.select_raw('is_open_platform', to_options(constant(\"App\\\\Common\\\\Model\\\\User\\\\User::OPENPLATFORM_STATUS\"), '开放平台账户开通状态'), {\"class\": \"layui-input\"}) }}
                    </div>
                    <div class=\"layui-inline\">
                        {{ sf.select_raw('is_agent_platform', to_options(constant(\"App\\\\Common\\\\Model\\\\User\\\\User::AGENTPLATFORM_STATUS\"), '代理商平台账户开通状态'), {\"class\": \"layui-input\"}) }}
                    </div>
                    <div class=\"layui-inline\">
                        {{ sf.select_raw('is_supplier_platform', to_options(constant(\"App\\\\Common\\\\Model\\\\User\\\\User::SUPPLIERPLATFORM_STATUS\"), '供应商平台账户开通状态'), {\"class\": \"layui-input\"}) }}
                    </div>
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">日期范围</label>
                        <div class=\"layui-input-block\">
                            <input type=\"text\" name=\"range_time\" class=\"layui-input\" id=\"timeFrame\" placeholder=\"\">
                        </div>
                    </div>
                    <div class=\"layui-inline\">
                        <div class=\"layui-input-block layui-input-block-margin\">
                            <button type=\"button\" class=\"layui-btn layuiadmin-btn-useradmin\" onclick=\"get_data()\">查询
                                <i class=\"layui-icon layui-icon-search layuiadmin-button-btn\"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class=\"layui-card-body\">
                <div style=\"padding: 5px 0;\">
                    <button class=\"layui-btn layuiadmin-btn-useradmin reverse-select\">
                        反选
                    </button>
                    </button>
                    <button class=\"layui-btn layuiadmin-btn-useradmin set-status\" data-type=\"SUSPENDED\">
                        冻结通行证
                    </button>
                    <button class=\"layui-btn layuiadmin-btn-useradmin set-status\" data-type=\"ACTIVE\">
                        解冻通行证
                    </button>
                </div>
                <table id=\"paged-table\" class=\"layui-table\" lay-filter=\"paged-table\">

                </table>
                <script type=\"text/html\" id=\"actions\">
                    <a class=\"layui-btn layui-btn-success layui-btn-xs\" lay-event=\"detail\">详情</a>
                </script>
            </div>
        </div>
    </div>
{% endblock %}

{% block js_end %}
    {% include \"/Admin/User/pass_management_js.twig\" %}
{% endblock %}
", "Admin/User/pass_management.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\User\\pass_management.twig");
    }
}
