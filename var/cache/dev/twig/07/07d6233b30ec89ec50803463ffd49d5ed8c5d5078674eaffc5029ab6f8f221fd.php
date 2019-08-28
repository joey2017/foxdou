<?php

/* Admin/UserSubAccountLevel/index.twig */
class __TwigTemplate_7f31e57427d2cfe998d88279e722b0af2baae5204e4a62dd1a7c181067eaaea1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Admin/Common/layout_main_panel.twig", "Admin/UserSubAccountLevel/index.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'extra' => array($this, 'block_extra'),
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Admin/Common/layout_main_panel.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserSubAccountLevel/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserSubAccountLevel/index.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers.html.twig", "Admin/UserSubAccountLevel/index.twig", 2);
        // line 3
        $context["title"] = "用户级别";
        // line 5
        $context["current_tab"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->source); })()), "request", array()), "get", array(0 => "tab", 1 => 0), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 8
        echo "  <style>
    /*body{overflow-y: scroll;}*/
    .wrapper-content { padding: 0; }
    .layui-table { overflow: hidden; }
    .layui-table-box { overflow: hidden; }
    body { overflow-y: scroll; }
    /* 禁止刷新后出现横向滚动条 */
    .layui-table-cell { padding: 0 4px; }
    .layui-table-view .layui-table td, .layui-table-view .layui-table th { padding: 4px 0; text-align: center; }
  </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_extra($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        // line 21
        echo "  <div id=\"edit_dialog\" class=\"edit_dialog\" style=\"display: none; padding: 20px 20px 0px 20px;\">
    <form id=\"edit_form\">
      <div class=\"input-group m-b\"><span class=\"input-group-addon\">请输入级别名称：</span>
        <input class=\"form-control level_name\" id=\"name\" name=\"name\" placeholder=\"级别名称：\" type=\"text\" required>
      </div>
      <div class=\"input-group m-b\"><span class=\"input-group-addon\">请输入级别备注：</span>
        <input class=\"form-control level_info\" id=\"info\" name=\"info\" placeholder=\"可选填\" type=\"text\">
      </div>
      ";
        // line 29
        if (((isset($context["current_tab"]) || array_key_exists("current_tab", $context) ? $context["current_tab"] : (function () { throw new Twig_Error_Runtime('Variable "current_tab" does not exist.', 29, $this->source); })()) == 0)) {
            // line 30
            echo "        <div class=\"input-group m-b\"><span class=\"input-group-addon\">请选择平台：</span>
          ";
            // line 31
            echo $context["sf"]->macro_select(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "platform_id", array()), $this->extensions['App\Common\Twig\AppExtension']->arrayToOptions(twig_constant("App\\Platform::PLATFORMS"), "全部"), array("class" => "form-control"));
            echo "
        </div>
      ";
        } else {
            // line 34
            echo "        <input type=\"hidden\" id=\"pintai\" name=\"pintai\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["current_tab"]) || array_key_exists("current_tab", $context) ? $context["current_tab"] : (function () { throw new Twig_Error_Runtime('Variable "current_tab" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "\">
      ";
        }
        // line 36
        echo "      <input type=\"hidden\" id=\"id\" name=\"id\" value=\"\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("edit_level"), "html", null, true);
        echo "\">
      <div class=\"input-group m-b\" id=\"copy_level\">
        <span class=\"input-group-addon\">选择复制的级别：</span>
        <select name=\"synchro_level\" id=\"synchro_level\" class=\"form-control\">

        </select>
      </div>
    </form>
  </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 50
        echo "  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"ibox float-e-margins\">
        <div class=\"ibox-title\">
          <h5>用户级别
            <small>管理列表</small>
          </h5>
        </div>
        <div class=\"ibox-content\">
          <form id=\"form\">
          ";
        // line 60
        $this->loadTemplate("Admin/UserSubAccountLevel/tabs.twig", "Admin/UserSubAccountLevel/index.twig", 60)->display(array_merge($context, array("tabs" => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6))));
        // line 61
        echo "          <div style=\"overflow-x: auto;width:100%\">
            <input type=\"button\" id=\"btn-add\" value=\"新增级别\" class=\"btn btn-primary\" style=\"\" onclick=\"open_edit_panel(null);return false;\">
          </div>
          <div style=\"overflow-x: auto;width:100%\">
            <table class=\"layui-hide f-fl\" id=\"table\"></table>
          </div>

          <div class=\"m-table g-bdc\">
            <table class=\"\" id=\"data-table\" lay-filter=\"row-actions\" style=\"width: 100%;overflow: hidden\"></table>
          </div>
            <input type=\"hidden\" id=\"select-pintai\" name=\"tab\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["current_tab"]) || array_key_exists("current_tab", $context) ? $context["current_tab"] : (function () { throw new Twig_Error_Runtime('Variable "current_tab" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "\">
          </form>
        </div>
      </div>
    </div>
  </div>

  <script type=\"text/html\" id=\"actions\">
    ";
        // line 85
        echo "
      {{#  if(d.default == \"\"){ }}
        <a class=\"layui-btn layui-btn-xs\" lay-event=\"set_default\">设为默认级别</a>
      {{#  } else { }}
        <a class=\"layui-btn layui-btn-xs layui-btn-disabled\" lay-event=\"\">设为默认级别</a>
      {{#  } }}
    ";
        echo "

    <a class=\"layui-btn layui-btn-xs\" lay-event=\"edit\">修改</a>
    ";
        // line 89
        echo "  </script>

  <script>
      var url     = \"\";
      var columns = [
        [
          {\"field\": \"id\", \"title\": \"ID\", \"width\": 50},
          {\"field\": \"name\", \"title\": \"级别名称\", \"width\": 250},
          {\"field\": \"platform_name\", \"title\": \"平台\", \"width\": 250},
          {\"field\": \"default\", \"title\": \"平台的默认级别\t\", \"width\": 120},
          {\"field\": \"info\", \"title\": \"备注\"},
          {\"field\": \"actions\", \"title\": \"操作\", \"width\": 200, \"toolbar\": \"#actions\"}
        ]
      ];

//      layui.config({
//          open: '<%',
//          close: '%>'
//      });
      layui.use('table', function () {
          get_data(url, columns);
      });

      function get_data() {
          var params = \$('#form').serialize();
          url        = '?' + params;
          rander_table('#data-table', url, columns);
      }

      function rander_table(elem, url, columns) {
          layui.table.render({
              elem:   elem
//                ,cellMinWidth: 80
              , url:  url
              , cols: columns
              , page: { //支持传入 laypage 组件的所有参数（某些参数除外，如：jump/elem） - 详见文档
                  layout:   ['prev', 'page', 'next', 'skip', 'limit', 'count'] //自定义分页布局
                  , limits: [10, 25, 50, 100]
              }
              , id:   \"id\"
              , text: \"暂无相关数据\"
          });








          layui.table.on('tool(row-actions)', function (obj) { //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
              var data     = obj.data; //获得当前行数据
              var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）
              var tr       = obj.tr; //获得当前行 tr 的DOM对象

              if (layEvent === 'set_default') {
                  \$.post('";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_levels_save");
        echo "', {\"id\": data.id, \"default\": 1, \"_csrf_token\": \"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("edit_level"), "html", null, true);
        echo "\"}, function (data) {
                      if (data.status) {
                          location.reload();
                      } else {
                          layer.msg(data.msg);
                      }
                  });
              } else if (layEvent === 'edit') {
                  \$('#copy_level').hide();
                  open_edit_panel(data);
              ";
        // line 156
        echo "                  ";
        // line 157
        echo "                      ";
        // line 158
        echo "                          ";
        // line 159
        echo "                      ";
        // line 160
        echo "                          ";
        // line 161
        echo "                      ";
        // line 162
        echo "                  ";
        // line 163
        echo "              }
          });
      }

      function open_edit_panel(data) {
          \$('#id').val(data ? data.id : \"\");
          \$('#name').val(data ? data.name : \"\");
          \$('#info').val(data ? data.info : \"\");
          \$('#pintai').val(data ? data.pintai : \"\");

          layer.open({
              type:1,
              closeBtn: 1,
              area: ['480px', '320px'], //宽高
              skin: 'layui-layer-molv',
              btn:      ['确定', '取消'],
              content:  \$('#edit_dialog'),
              yes: function (index, layero) {
                  var params = \$('#edit_form').serialize();
                  \$.post('";
        // line 182
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_levels_save");
        echo "', params, function (data) {
                      if (data.status) {
                          layer.msg('保存成功');
                          location.reload();
                      } else {
                          layer.msg(data.msg);
                      }
                  }).fail(function() {
                      layer.msg('请求失败，请重试');
                  });
              }
          });
      }

      //        \$('#query').click(function (e) {
      //            get_data();
      //            e.preventDefault();
      //            return false;
      //        });

      //        \$('#icp li').click(function () {
      //            \$(this).addClass('tab-this');
      //            \$(this).siblings().removeClass('tab-this');
      //            var icp=\$(this).attr('value');
      //            \$('#icp_value').val(icp==''?'':icp);
      //            get_order_data();
      //        });
      //    });
  </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/UserSubAccountLevel/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 182,  287 => 163,  285 => 162,  283 => 161,  281 => 160,  279 => 159,  277 => 158,  275 => 157,  273 => 156,  258 => 145,  200 => 89,  188 => 85,  177 => 71,  165 => 61,  163 => 60,  151 => 50,  142 => 49,  121 => 37,  118 => 36,  112 => 34,  106 => 31,  103 => 30,  101 => 29,  91 => 21,  82 => 20,  62 => 8,  53 => 7,  43 => 1,  41 => 5,  39 => 3,  37 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Admin/Common/layout_main_panel.twig' %}
{% import ('/Common/simple_form_helpers.html.twig') as sf %}
{% set title = '用户级别' %}

{% set current_tab = app.request.get('tab', 0) %}

{% block css %}
  <style>
    /*body{overflow-y: scroll;}*/
    .wrapper-content { padding: 0; }
    .layui-table { overflow: hidden; }
    .layui-table-box { overflow: hidden; }
    body { overflow-y: scroll; }
    /* 禁止刷新后出现横向滚动条 */
    .layui-table-cell { padding: 0 4px; }
    .layui-table-view .layui-table td, .layui-table-view .layui-table th { padding: 4px 0; text-align: center; }
  </style>
{% endblock %}

{% block extra %}
  <div id=\"edit_dialog\" class=\"edit_dialog\" style=\"display: none; padding: 20px 20px 0px 20px;\">
    <form id=\"edit_form\">
      <div class=\"input-group m-b\"><span class=\"input-group-addon\">请输入级别名称：</span>
        <input class=\"form-control level_name\" id=\"name\" name=\"name\" placeholder=\"级别名称：\" type=\"text\" required>
      </div>
      <div class=\"input-group m-b\"><span class=\"input-group-addon\">请输入级别备注：</span>
        <input class=\"form-control level_info\" id=\"info\" name=\"info\" placeholder=\"可选填\" type=\"text\">
      </div>
      {% if current_tab == 0 %}
        <div class=\"input-group m-b\"><span class=\"input-group-addon\">请选择平台：</span>
          {{ sf.select(form.platform_id, to_options(constant(\"App\\\\Platform::PLATFORMS\"), '全部'), {\"class\": \"form-control\"}) }}
        </div>
      {% else %}
        <input type=\"hidden\" id=\"pintai\" name=\"pintai\" value=\"{{ current_tab }}\">
      {% endif %}
      <input type=\"hidden\" id=\"id\" name=\"id\" value=\"\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(\"edit_level\") }}\">
      <div class=\"input-group m-b\" id=\"copy_level\">
        <span class=\"input-group-addon\">选择复制的级别：</span>
        <select name=\"synchro_level\" id=\"synchro_level\" class=\"form-control\">

        </select>
      </div>
    </form>
  </div>

{% endblock %}

{% block main_content %}
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"ibox float-e-margins\">
        <div class=\"ibox-title\">
          <h5>用户级别
            <small>管理列表</small>
          </h5>
        </div>
        <div class=\"ibox-content\">
          <form id=\"form\">
          {% include \"Admin/UserSubAccountLevel/tabs.twig\" with {\"tabs\": [0, 1, 2, 3, 4, 5, 6]} %}
          <div style=\"overflow-x: auto;width:100%\">
            <input type=\"button\" id=\"btn-add\" value=\"新增级别\" class=\"btn btn-primary\" style=\"\" onclick=\"open_edit_panel(null);return false;\">
          </div>
          <div style=\"overflow-x: auto;width:100%\">
            <table class=\"layui-hide f-fl\" id=\"table\"></table>
          </div>

          <div class=\"m-table g-bdc\">
            <table class=\"\" id=\"data-table\" lay-filter=\"row-actions\" style=\"width: 100%;overflow: hidden\"></table>
          </div>
            <input type=\"hidden\" id=\"select-pintai\" name=\"tab\" value=\"{{ current_tab }}\">
          </form>
        </div>
      </div>
    </div>
  </div>

  <script type=\"text/html\" id=\"actions\">
    {% verbatim %}
      {{#  if(d.default == \"\"){ }}
        <a class=\"layui-btn layui-btn-xs\" lay-event=\"set_default\">设为默认级别</a>
      {{#  } else { }}
        <a class=\"layui-btn layui-btn-xs layui-btn-disabled\" lay-event=\"\">设为默认级别</a>
      {{#  } }}
    {% endverbatim %}

    <a class=\"layui-btn layui-btn-xs\" lay-event=\"edit\">修改</a>
    {#<a class=\"layui-btn layui-btn-danger layui-btn-xs\" lay-event=\"delete\">删除</a>#}
  </script>

  <script>
      var url     = \"\";
      var columns = [
        [
          {\"field\": \"id\", \"title\": \"ID\", \"width\": 50},
          {\"field\": \"name\", \"title\": \"级别名称\", \"width\": 250},
          {\"field\": \"platform_name\", \"title\": \"平台\", \"width\": 250},
          {\"field\": \"default\", \"title\": \"平台的默认级别\t\", \"width\": 120},
          {\"field\": \"info\", \"title\": \"备注\"},
          {\"field\": \"actions\", \"title\": \"操作\", \"width\": 200, \"toolbar\": \"#actions\"}
        ]
      ];

//      layui.config({
//          open: '<%',
//          close: '%>'
//      });
      layui.use('table', function () {
          get_data(url, columns);
      });

      function get_data() {
          var params = \$('#form').serialize();
          url        = '?' + params;
          rander_table('#data-table', url, columns);
      }

      function rander_table(elem, url, columns) {
          layui.table.render({
              elem:   elem
//                ,cellMinWidth: 80
              , url:  url
              , cols: columns
              , page: { //支持传入 laypage 组件的所有参数（某些参数除外，如：jump/elem） - 详见文档
                  layout:   ['prev', 'page', 'next', 'skip', 'limit', 'count'] //自定义分页布局
                  , limits: [10, 25, 50, 100]
              }
              , id:   \"id\"
              , text: \"暂无相关数据\"
          });








          layui.table.on('tool(row-actions)', function (obj) { //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
              var data     = obj.data; //获得当前行数据
              var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）
              var tr       = obj.tr; //获得当前行 tr 的DOM对象

              if (layEvent === 'set_default') {
                  \$.post('{{ path('admin_users_levels_save') }}', {\"id\": data.id, \"default\": 1, \"_csrf_token\": \"{{ csrf_token(\"edit_level\") }}\"}, function (data) {
                      if (data.status) {
                          location.reload();
                      } else {
                          layer.msg(data.msg);
                      }
                  });
              } else if (layEvent === 'edit') {
                  \$('#copy_level').hide();
                  open_edit_panel(data);
              {#} else if (layEvent === 'delete') {#}
                  {#\$.post('{{ path('admin_users_levels_delete') }}', {\"id\": data.id}, function (data) {#}
                      {#if (data.status) {#}
                          {#location.reload();#}
                      {#} else {#}
                          {#layer.msg(data.msg);#}
                      {#}#}
                  {#});#}
              }
          });
      }

      function open_edit_panel(data) {
          \$('#id').val(data ? data.id : \"\");
          \$('#name').val(data ? data.name : \"\");
          \$('#info').val(data ? data.info : \"\");
          \$('#pintai').val(data ? data.pintai : \"\");

          layer.open({
              type:1,
              closeBtn: 1,
              area: ['480px', '320px'], //宽高
              skin: 'layui-layer-molv',
              btn:      ['确定', '取消'],
              content:  \$('#edit_dialog'),
              yes: function (index, layero) {
                  var params = \$('#edit_form').serialize();
                  \$.post('{{ path('admin_users_levels_save') }}', params, function (data) {
                      if (data.status) {
                          layer.msg('保存成功');
                          location.reload();
                      } else {
                          layer.msg(data.msg);
                      }
                  }).fail(function() {
                      layer.msg('请求失败，请重试');
                  });
              }
          });
      }

      //        \$('#query').click(function (e) {
      //            get_data();
      //            e.preventDefault();
      //            return false;
      //        });

      //        \$('#icp li').click(function () {
      //            \$(this).addClass('tab-this');
      //            \$(this).siblings().removeClass('tab-this');
      //            var icp=\$(this).attr('value');
      //            \$('#icp_value').val(icp==''?'':icp);
      //            get_order_data();
      //        });
      //    });
  </script>

{% endblock %}
", "Admin/UserSubAccountLevel/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\UserSubAccountLevel\\index.twig");
    }
}
