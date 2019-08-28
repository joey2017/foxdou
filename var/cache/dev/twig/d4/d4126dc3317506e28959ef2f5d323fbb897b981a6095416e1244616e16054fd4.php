<?php

/* Admin/User/set_price_group.twig */
class __TwigTemplate_5e0d9c47c983152f3eeb892c17d93bed534861e4a656aa609f11d92d58b305db extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Admin/Common/layout.twig", "Admin/User/set_price_group.twig", 1);
        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
            'extra' => array($this, 'block_extra'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/User/set_price_group.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/User/set_price_group.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers.html.twig", "Admin/User/set_price_group.twig", 2);
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
          <button class=\"layui-btn layuiadmin-btn-useradmin set-default\">
            设为开通时默认组
          </button>
          <button class=\"layui-btn layuiadmin-btn-useradmin add-group\">
            新增定价组
          </button>
        </div>
        <table id=\"paged-table\" class=\"layui-table\" lay-filter=\"paged-table\">

        </table>
        <script type=\"text/html\" id=\"actions\">
             <a class=\"layui-btn layui-btn-success layui-btn-xs\" lay-event=\"edit\">编辑</a>
             <a class=\"layui-btn layui-btn-danger layui-btn-xs\" lay-event=\"delete\">删除</a>
        </script>
      </div>
    </div>
  </div>
  <script id=\"add_time\" type=\"text/html\">
      ";
        // line 56
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

    // line 60
    public function block_extra($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        // line 61
        echo "  <div id=\"btn-add-group\" style=\"display: none\">
      <div class=\"layui-form-item\" style=\"margin-top: 30px;width:90%\">
            <label class=\"layui-form-label\">定价组名称</label>
            <div class=\"layui-input-block\" style=\"margin-left: 110px\">
                  <input type=\"text\" name=\"set_price_name\" required  lay-verify=\"required\" placeholder=\"请输入定价组名称\" autocomplete=\"off\" class=\"layui-input\">
              </div>
        </div>
      <div class=\"layui-form-item layui-form-text\" style=\"width:90%\">
            <label class=\"layui-form-label\">备注</label>
            <div class=\"layui-input-block\" style=\"margin-left: 110px\">
                  <textarea name=\"note\" placeholder=\"请输入备注\" class=\"layui-textarea\"></textarea>
              </div>
        </div>
      <div class=\"layui-form-item\" style=\"width:90%\">
            <div class=\"layui-input-block\" style=\"margin-left: 110px\">
                  <button class=\"layui-btn submit\">立即提交</button>
              </div>
        </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 83
        echo "  ";
        $this->loadTemplate("/Admin/User/set_price_group_js.twig", "Admin/User/set_price_group.twig", 83)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/User/set_price_group.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 83,  162 => 82,  133 => 61,  124 => 60,  105 => 56,  58 => 5,  49 => 4,  39 => 1,  37 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Admin/Common/layout.twig' %}
{% import ('/Common/simple_form_helpers.html.twig') as sf %}

{% block main_content %}
  <div class=\"layui-fluid\" id=\"pass-management\">
    <div class=\"layui-card\">
      <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
        <form class=\"layui-form-item\" id=\"form\">
          <div class=\"layui-inline\">
              <input class=\"layui-input product-price\" name=\"user_name\" value=\"\" placeholder=\"关键字搜索\" type=\"text\">
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
          <button class=\"layui-btn layuiadmin-btn-useradmin set-default\">
            设为开通时默认组
          </button>
          <button class=\"layui-btn layuiadmin-btn-useradmin add-group\">
            新增定价组
          </button>
        </div>
        <table id=\"paged-table\" class=\"layui-table\" lay-filter=\"paged-table\">

        </table>
        <script type=\"text/html\" id=\"actions\">
             <a class=\"layui-btn layui-btn-success layui-btn-xs\" lay-event=\"edit\">编辑</a>
             <a class=\"layui-btn layui-btn-danger layui-btn-xs\" lay-event=\"delete\">删除</a>
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

{% block extra %}
  <div id=\"btn-add-group\" style=\"display: none\">
      <div class=\"layui-form-item\" style=\"margin-top: 30px;width:90%\">
            <label class=\"layui-form-label\">定价组名称</label>
            <div class=\"layui-input-block\" style=\"margin-left: 110px\">
                  <input type=\"text\" name=\"set_price_name\" required  lay-verify=\"required\" placeholder=\"请输入定价组名称\" autocomplete=\"off\" class=\"layui-input\">
              </div>
        </div>
      <div class=\"layui-form-item layui-form-text\" style=\"width:90%\">
            <label class=\"layui-form-label\">备注</label>
            <div class=\"layui-input-block\" style=\"margin-left: 110px\">
                  <textarea name=\"note\" placeholder=\"请输入备注\" class=\"layui-textarea\"></textarea>
              </div>
        </div>
      <div class=\"layui-form-item\" style=\"width:90%\">
            <div class=\"layui-input-block\" style=\"margin-left: 110px\">
                  <button class=\"layui-btn submit\">立即提交</button>
              </div>
        </div>
  </div>
{% endblock %}

{% block js_end %}
  {% include \"/Admin/User/set_price_group_js.twig\" %}
{% endblock %}
", "Admin/User/set_price_group.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\User\\set_price_group.twig");
    }
}
