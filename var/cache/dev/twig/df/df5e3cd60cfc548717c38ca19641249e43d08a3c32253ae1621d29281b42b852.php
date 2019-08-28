<?php

/* Admin/User/get_supplier_account.twig */
class __TwigTemplate_41ae2397bdf190d833b53f7ef6919e30a5711add80a98cb90349e41f4b6acb5b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Admin/Common/layout.twig", "Admin/User/get_supplier_account.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/User/get_supplier_account.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/User/get_supplier_account.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Admin/User/get_supplier_account.twig", 2);
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
        echo "  <div class=\"layui-fluid\" id=\"pass-management\">
    <div class=\"layui-card\">
      <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
        <form class=\"layui-form-item\" id=\"form\">
          <div class=\"layui-inline\">
              <input class=\"layui-input product-price\" name=\"user_name\" value=\"\" placeholder=\"关键字搜索\" type=\"text\">
          </div>
          <div class=\"layui-inline\">
              ";
        // line 13
        echo $context["sf"]->macro_select_raw("real_name_status", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\User\\RealNameAuthenticationInfo::STATUSES"), "认证状态"), array("class" => "layui-input"));
        echo "
          </div>
          <div class=\"layui-inline\">
              ";
        // line 16
        echo $context["sf"]->macro_select_raw("status", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\User\\User::STATUSES"), "账户状态"), array("class" => "layui-input"));
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
          <button class=\"layui-btn layuiadmin-btn-useradmin set-status\" data-type=\"SUSPENDED\">
            冻结账户
          </button>
          <button class=\"layui-btn layuiadmin-btn-useradmin set-status\" data-type=\"ACTIVE\">
            解冻账户
          </button>
        </div>
        <table id=\"paged-table\" class=\"layui-table\" lay-filter=\"paged-table\">

        </table>
        <script type=\"text/html\" id=\"actions\">
          ";
        // line 61
        echo "
          {{# if(d.status == 'ACTIVE'){ }}
             <a class=\"layui-btn layui-btn-success layui-btn-xs\" lay-event=\"freeze\">冻结</a>
             <a class=\"layui-btn layui-btn-success layui-btn-xs\" lay-event=\"detail\">详情</a>
             <a class=\"layui-btn layui-btn-success layui-btn-xs\" lay-event=\"banned\">清退</a>
          {{# }else if(d.status == 'SUSPENED'){ }}
             <a class=\"layui-btn layui-btn-success layui-btn-xs\" lay-event=\"freeze\">解冻</a>
          {{# }else if(d.status == 'REJECTED'){ }}
             <a class=\"layui-btn layui-btn-success layui-btn-xs\" lay-event=\"freeze\">清退</a>
          {{# }else{ }}
             <a class=\"layui-btn layui-btn-success layui-btn-xs\" lay-event=\"detail\">详情</a>
          {{# } }}
          ";
        echo "
        </script>
      </div>
    </div>
  </div>
  <script id=\"add_time\" type=\"text/html\">
      ";
        // line 73
        echo "
      {{#
          var date = new Date();
          date.setTime(d.add_time*1000);
          return date.Format(\"yyyy-MM-dd hh:mm:ss\");
      }}
      ";
        echo "
  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 78
        echo "  ";
        $this->loadTemplate("/Admin/User/get_supplier_account_js.twig", "Admin/User/get_supplier_account.twig", 78)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/User/get_supplier_account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 78,  149 => 77,  130 => 73,  109 => 61,  73 => 16,  67 => 13,  57 => 5,  48 => 4,  38 => 1,  36 => 2,  15 => 1,);
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
              <input class=\"layui-input product-price\" name=\"user_name\" value=\"\" placeholder=\"关键字搜索\" type=\"text\">
          </div>
          <div class=\"layui-inline\">
              {{ sf.select_raw('real_name_status', to_options(constant(\"App\\\\Common\\\\Model\\\\User\\\\RealNameAuthenticationInfo::STATUSES\"), '认证状态'), {\"class\": \"layui-input\"}) }}
          </div>
          <div class=\"layui-inline\">
              {{ sf.select_raw('status', to_options(constant(\"App\\\\Common\\\\Model\\\\User\\\\User::STATUSES\"), '账户状态'), {\"class\": \"layui-input\"}) }}
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
          <button class=\"layui-btn layuiadmin-btn-useradmin set-status\" data-type=\"SUSPENDED\">
            冻结账户
          </button>
          <button class=\"layui-btn layuiadmin-btn-useradmin set-status\" data-type=\"ACTIVE\">
            解冻账户
          </button>
        </div>
        <table id=\"paged-table\" class=\"layui-table\" lay-filter=\"paged-table\">

        </table>
        <script type=\"text/html\" id=\"actions\">
          {% verbatim %}
          {{# if(d.status == 'ACTIVE'){ }}
             <a class=\"layui-btn layui-btn-success layui-btn-xs\" lay-event=\"freeze\">冻结</a>
             <a class=\"layui-btn layui-btn-success layui-btn-xs\" lay-event=\"detail\">详情</a>
             <a class=\"layui-btn layui-btn-success layui-btn-xs\" lay-event=\"banned\">清退</a>
          {{# }else if(d.status == 'SUSPENED'){ }}
             <a class=\"layui-btn layui-btn-success layui-btn-xs\" lay-event=\"freeze\">解冻</a>
          {{# }else if(d.status == 'REJECTED'){ }}
             <a class=\"layui-btn layui-btn-success layui-btn-xs\" lay-event=\"freeze\">清退</a>
          {{# }else{ }}
             <a class=\"layui-btn layui-btn-success layui-btn-xs\" lay-event=\"detail\">详情</a>
          {{# } }}
          {% endverbatim %}
        </script>
      </div>
    </div>
  </div>
  <script id=\"add_time\" type=\"text/html\">
      {% verbatim %}
      {{#
          var date = new Date();
          date.setTime(d.add_time*1000);
          return date.Format(\"yyyy-MM-dd hh:mm:ss\");
      }}
      {% endverbatim %}
  </script>
{% endblock %}

{% block js_end %}
  {% include \"/Admin/User/get_supplier_account_js.twig\" %}
{% endblock %}
", "Admin/User/get_supplier_account.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\User\\get_supplier_account.twig");
    }
}
