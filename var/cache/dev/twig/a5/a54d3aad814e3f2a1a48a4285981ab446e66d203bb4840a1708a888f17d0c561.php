<?php

/* Supplier/Finance/withdraw_account.twig */
class __TwigTemplate_b476d5bc14e199b2e3a98c93ddf5e816e6414d895442b36e2cf105ef16546467 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Supplier/Common/layout.twig", "Supplier/Finance/withdraw_account.twig", 1);
        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
            'extra' => array($this, 'block_extra'),
            'js_end' => array($this, 'block_js_end'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Supplier/Common/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Supplier/Finance/withdraw_account.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Supplier/Finance/withdraw_account.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Supplier/Finance/withdraw_account.twig", 2);
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
        echo "    <div class=\"foxdou-row foxdou-row-notm\">
        <div class=\"foxdou-form-row\" style=\"margin-left: 200px;\">
            <form class=\"layui-form layui-form-pane\" action=\"\" id=\"trade-list\">
                <div class=\"layui-form-item\">
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">审核状态</label>
                        <div class=\"layui-input-block foxdou-select-length\">
                            ";
        // line 12
        echo $context["sf"]->macro_select_raw("verify_status", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\Payment\\CashUserAccount::VERIFY_STATUSES"), "全部"), array("class" => "layui-input"));
        echo "
                        </div>
                    </div>
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">时间范围</label>
                        <div class=\"layui-input-block\">
                            <input type=\"text\" name=\"range_time\" class=\"layui-input\" id=\"timeFrame\" placeholder=\"\"><input type=\"hidden\" name=\"start_time\" id=\"start_time\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\">
                            <input type=\"hidden\" name=\"end_time\" id=\"end_time\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">关键字</label>
                        <div class=\"layui-input-block\">
                            <input type=\"text\" name=\"keyword\" placeholder=\"请输入账户编号搜索\" class=\"layui-input\">
                        </div>
                    </div>

                    <div class=\"layui-inline\">
                        <button class=\"layui-btn layui-btn-normal\" onclick=\"get_data();return false;\">立即查询</button>
                    </div>
                </div>
            </form>
        </div>
        <div class=\"foxdou-table-page\" style=\"padding: 15px;margin-left: 200px;\">
            <div class=\"layui-form-item\">
                <div class=\"layui-inline foxdou-left\">
                    <button class=\"layui-btn layui-btn-normal\" id=\"add-withdraw-account\">新增提现账户</button>
                </div>
            </div>
            <table class=\"layui-table\" id=\"trade-list-table\" lay-filter=\"trade-list-table\">

            </table>
        </div>
    </div>
    <script id=\"actions\" type=\"text/html\">
        <div class=\"layui-btn-container\">
                      <%# if (d.verify_status != 1) { %>
                    <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"delete\">删除</a>
              <%# } %>
                </div>
    </script>
    <script id=\"add_time\" type=\"text/html\">
              <%#
              var date = new Date();
              date.setTime(d.add_time*1000);
              return date.Format(\"yyyy-MM-dd hh:mm:ss\");
          %>
        </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_extra($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        // line 63
        echo "
    <style type=\"text/css\">
        /*局部样式*/
        .layadmin-td-img img {
            width: 100px;
            height: 80px;
            box-sizing: border-box;
            margin: 5px 3px;
            cursor: pointer;
        }
        .layadmin-td-img img:hover {
            border: 2px solid #5FB878;
        }
    </style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 81
        echo "    ";
        $this->loadTemplate("/Supplier/Finance/withdraw_account_js.twig", "Supplier/Finance/withdraw_account.twig", 81)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Supplier/Finance/withdraw_account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 81,  166 => 80,  141 => 63,  132 => 62,  80 => 19,  76 => 18,  67 => 12,  58 => 5,  49 => 4,  39 => 1,  37 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Supplier/Common/layout.twig' %}
{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

{% block main_content %}
    <div class=\"foxdou-row foxdou-row-notm\">
        <div class=\"foxdou-form-row\" style=\"margin-left: 200px;\">
            <form class=\"layui-form layui-form-pane\" action=\"\" id=\"trade-list\">
                <div class=\"layui-form-item\">
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">审核状态</label>
                        <div class=\"layui-input-block foxdou-select-length\">
                            {{ sf.select_raw('verify_status', to_options(constant(\"App\\\\Common\\\\Model\\\\Payment\\\\CashUserAccount::VERIFY_STATUSES\"), '全部'), {\"class\": \"layui-input\"}) }}
                        </div>
                    </div>
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">时间范围</label>
                        <div class=\"layui-input-block\">
                            <input type=\"text\" name=\"range_time\" class=\"layui-input\" id=\"timeFrame\" placeholder=\"\"><input type=\"hidden\" name=\"start_time\" id=\"start_time\" value=\"{{ 'now'|date('Y-m-d') }}\">
                            <input type=\"hidden\" name=\"end_time\" id=\"end_time\" value=\"{{ 'now'|date('Y-m-d') }}\">
                        </div>
                    </div>
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">关键字</label>
                        <div class=\"layui-input-block\">
                            <input type=\"text\" name=\"keyword\" placeholder=\"请输入账户编号搜索\" class=\"layui-input\">
                        </div>
                    </div>

                    <div class=\"layui-inline\">
                        <button class=\"layui-btn layui-btn-normal\" onclick=\"get_data();return false;\">立即查询</button>
                    </div>
                </div>
            </form>
        </div>
        <div class=\"foxdou-table-page\" style=\"padding: 15px;margin-left: 200px;\">
            <div class=\"layui-form-item\">
                <div class=\"layui-inline foxdou-left\">
                    <button class=\"layui-btn layui-btn-normal\" id=\"add-withdraw-account\">新增提现账户</button>
                </div>
            </div>
            <table class=\"layui-table\" id=\"trade-list-table\" lay-filter=\"trade-list-table\">

            </table>
        </div>
    </div>
    <script id=\"actions\" type=\"text/html\">
        <div class=\"layui-btn-container\">
                      <%# if (d.verify_status != 1) { %>
                    <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"delete\">删除</a>
              <%# } %>
                </div>
    </script>
    <script id=\"add_time\" type=\"text/html\">
              <%#
              var date = new Date();
              date.setTime(d.add_time*1000);
              return date.Format(\"yyyy-MM-dd hh:mm:ss\");
          %>
        </script>
{% endblock %}

{% block extra %}

    <style type=\"text/css\">
        /*局部样式*/
        .layadmin-td-img img {
            width: 100px;
            height: 80px;
            box-sizing: border-box;
            margin: 5px 3px;
            cursor: pointer;
        }
        .layadmin-td-img img:hover {
            border: 2px solid #5FB878;
        }
    </style>

{% endblock %}

{% block js_end %}
    {% include \"/Supplier/Finance/withdraw_account_js.twig\" %}
{% endblock %}
", "Supplier/Finance/withdraw_account.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Supplier\\Finance\\withdraw_account.twig");
    }
}
