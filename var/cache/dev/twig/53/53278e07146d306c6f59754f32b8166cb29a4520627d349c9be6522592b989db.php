<?php

/* Admin/SystemAdministration/Administrator/index.twig */
class __TwigTemplate_638132834eb09500258ec01e54bbf2dfffca171936711327f6f9baaac449ef2b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/Admin/Common/layout.twig", "Admin/SystemAdministration/Administrator/index.twig", 1);
        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
            'extra' => array($this, 'block_extra'),
            'js_end' => array($this, 'block_js_end'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/Admin/Common/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/Administrator/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/Administrator/index.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Admin/SystemAdministration/Administrator/index.twig", 2);
        // line 4
        $context["title"] = "系统-后台用户管理";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 7
        echo "  <div class=\"layui-fluid\">
    <div class=\"layui-card\">
      <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
        <form class=\"layui-form-item\" id=\"search-form\">
            ";
        // line 11
        echo $context["sf"]->macro_select(twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new Twig_Error_Runtime('Variable "search_form" does not exist.', 11, $this->source); })()), "roles", array()), null, $this->extensions['App\Common\Twig\AppExtension']->toOptions("App\\Admin\\Model\\AdminUser::ADMIN_ROLES", "权限组"), array("outer" => "inline"), array("id" => "search_roles"));
        echo "
            ";
        // line 12
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new Twig_Error_Runtime('Variable "search_form" does not exist.', 12, $this->source); })()), "user_name", array()), null, array("outer" => "inline"), array("id" => "search_user_name"));
        echo "
            ";
        // line 13
        echo $context["sf"]->macro_button(null, "搜索", null, array("outer" => "inline"), array("onclick" => "reload_table()"));
        echo "
        </form>
      </div>
      <div class=\"layui-card-body\">
        <div style=\"padding: 5px 0;\">
          <button class=\"layui-btn layuiadmin-btn-useradmin\" onclick=\"show_edit_dialog(null)\">新增用户</button>
        </div>
        <table id=\"table\" class=\"layui-table\" lay-data=\"{url:'";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_administrators");
        echo "', page:true, id:'table', method:'get'}\" lay-filter=\"table\">
          <thead>
          <tr>
            ";
        // line 24
        echo "            <th lay-data=\"{field:'id', width: 50, align: 'center'}\">ID</th>
            <th lay-data=\"{field:'role_name', width:150, align: 'center'}\">权限组</th>
            <th lay-data=\"{field:'user_name', align: 'center'}\">用户名</th>
            <th lay-data=\"{field:'name', width:150, align: 'center'}\">姓名</th>
            <th lay-data=\"{field:'mobile', width:150, align: 'center'}\">联系电话</th>
            <th lay-data=\"{field:'title', width:150, align: 'center'}\">职务</th>
            <th lay-data=\"{field:'status', width:100, align: 'center'}\">状态</th>
            <th lay-data=\"{field:'last_login_time', width:150, align: 'center'}\">最后登录时间</th>
            <th lay-data=\"{field:'last_login_ip', width:150, align: 'center'}\">最后登录IP</th>
            <th lay-data=\"{align:'center', toolbar: '#actions', width:100}\">操作</th>
          </tr>
          </thead>
        </table>
        <script type=\"text/html\" id=\"actions\">
          <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"edit\">编辑</a>
          <a class=\"layui-btn layui-btn-danger layui-btn-xs\" lay-event=\"del\">删除</a>
        </script>
      </div>
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_extra($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        // line 47
        echo "  <div class=\"layui-card\" id=\"edit-user\" style=\"display: none;\">
    <div class=\"layui-card-body\">
      <form id=\"edit-form\" class=\"layui-form\" lay-filter=\"edit-form\">
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">&nbsp;</label>
          <div class=\"layui-input-inline\">
            带 * 号的为必填项
          </div>
        </div>

        ";
        // line 57
        echo $context["sf"]->macro_radio(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "status", array()), "状态", array("ACTIVE" => "正常", "SUSPENDED" => "已禁用"));
        echo "
        ";
        // line 58
        echo $context["sf"]->macro_select(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "roles", array()), "权限组", $this->extensions['App\Common\Twig\AppExtension']->toOptions("App\\Admin\\Model\\AdminUser::ADMIN_ROLES", "全部"));
        echo "
        ";
        // line 59
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->source); })()), "user_name", array()), "用户名");
        echo "
        ";
        // line 60
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->source); })()), "name", array()), "名字");
        echo "
        ";
        // line 61
        echo $context["sf"]->macro_password(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->source); })()), "password", array()), "密码");
        echo "
        ";
        // line 62
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->source); })()), "mobile", array()), "手机号");
        echo "
        ";
        // line 63
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->source); })()), "title", array()), "职务");
        echo "

        ";
        // line 65
        echo $context["sf"]->macro_rest((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->source); })()));
        echo "
      </form>
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 73
        echo "  <script>
      layui.table.on('tool(table)', function (row) {
          var data = row.data;
          if (row.event === 'edit') {
              console.log(row.data);
              show_edit_dialog(row.data);
          } else if (row.event === 'del') {
              layer.confirm('确认要删除吗？', function (index) {
                  \$.post('";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_administrators_delete");
        echo "',
                      {id: data.id, _token: '";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_system_administration_administrators_delete"), "html", null, true);
        echo "'},
                      function (data) {
                          if (!data.status) {
                              layer.alert(data.msg);
                              return;
                          }

                          reload_table();
                          layer.msg(data.msg, {time: 1500});
                      }, 'json'
                  );

                  layer.close(index);
              });
          }
      });

      function reload_table() {
          table.reload('table', {
              where: \$('#search-form').serializeJSON()
          });
      }

      function show_edit_dialog(data) {
          \$('#edit-form')[0].reset();
          \$('.error').html('');
          \$('.error').hide();
          \$('.tips').show();

          if (data) {
              layui.form.val(\"edit-form\", {
                  \"id\":  data.id
                  , \"status\":  data.status
                  , \"user_name\":  data.user_name
                  , \"roles\":    data.roles
                  , \"name\":     data.name
                  , \"password\": ''
                  , \"mobile\":   data.mobile
                  , \"title\":    data.title
              });
          }

          layer.open({
              title:    data ? '编辑' : '新增',
              type:     1,
              area:     'auto',
              content:  \$('#edit-user'),
              closeBtn: false,
              btn:      ['保存', '取消'],
              yes:      function (index, layero) {
                  ajax_post('";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_administrator_save");
        echo "', \$('#edit-form').serialize(),
                      function (data) {
                          layer.close(index);
                          \$('#edit-user').toggle();
                          reload_table();
                      }, function (error) {

                      });
              },
              btn2:     function (index, layero) {
                  layer.close(index);
                  \$('#edit-user').toggle();
              }
          });
      }
  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/SystemAdministration/Administrator/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 132,  208 => 82,  204 => 81,  194 => 73,  185 => 72,  170 => 65,  165 => 63,  161 => 62,  157 => 61,  153 => 60,  149 => 59,  145 => 58,  141 => 57,  129 => 47,  120 => 46,  90 => 24,  84 => 20,  74 => 13,  70 => 12,  66 => 11,  60 => 7,  51 => 6,  41 => 1,  39 => 4,  37 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ('/Admin/Common/layout.twig') %}
{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

{% set title = '系统-后台用户管理' %}

{% block main_content %}
  <div class=\"layui-fluid\">
    <div class=\"layui-card\">
      <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
        <form class=\"layui-form-item\" id=\"search-form\">
            {{ sf.select(search_form.roles, null, to_options('App\\\\Admin\\\\Model\\\\AdminUser::ADMIN_ROLES', \"权限组\"), {'outer': 'inline'}, {'id': 'search_roles'}) }}
            {{ sf.text(search_form.user_name, null, {'outer': 'inline'}, {'id': 'search_user_name'}) }}
            {{ sf.button(null, '搜索', null, {'outer': 'inline'}, {'onclick': 'reload_table()'}) }}
        </form>
      </div>
      <div class=\"layui-card-body\">
        <div style=\"padding: 5px 0;\">
          <button class=\"layui-btn layuiadmin-btn-useradmin\" onclick=\"show_edit_dialog(null)\">新增用户</button>
        </div>
        <table id=\"table\" class=\"layui-table\" lay-data=\"{url:'{{ path('admin_system_administration_administrators') }}', page:true, id:'table', method:'get'}\" lay-filter=\"table\">
          <thead>
          <tr>
            {#<th lay-data=\"{type:'checkbox', fixed: 'left', width:'5%'}\"></th>#}
            <th lay-data=\"{field:'id', width: 50, align: 'center'}\">ID</th>
            <th lay-data=\"{field:'role_name', width:150, align: 'center'}\">权限组</th>
            <th lay-data=\"{field:'user_name', align: 'center'}\">用户名</th>
            <th lay-data=\"{field:'name', width:150, align: 'center'}\">姓名</th>
            <th lay-data=\"{field:'mobile', width:150, align: 'center'}\">联系电话</th>
            <th lay-data=\"{field:'title', width:150, align: 'center'}\">职务</th>
            <th lay-data=\"{field:'status', width:100, align: 'center'}\">状态</th>
            <th lay-data=\"{field:'last_login_time', width:150, align: 'center'}\">最后登录时间</th>
            <th lay-data=\"{field:'last_login_ip', width:150, align: 'center'}\">最后登录IP</th>
            <th lay-data=\"{align:'center', toolbar: '#actions', width:100}\">操作</th>
          </tr>
          </thead>
        </table>
        <script type=\"text/html\" id=\"actions\">
          <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"edit\">编辑</a>
          <a class=\"layui-btn layui-btn-danger layui-btn-xs\" lay-event=\"del\">删除</a>
        </script>
      </div>
    </div>
  </div>
{% endblock %}

{% block extra %}
  <div class=\"layui-card\" id=\"edit-user\" style=\"display: none;\">
    <div class=\"layui-card-body\">
      <form id=\"edit-form\" class=\"layui-form\" lay-filter=\"edit-form\">
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">&nbsp;</label>
          <div class=\"layui-input-inline\">
            带 * 号的为必填项
          </div>
        </div>

        {{ sf.radio(form.status,      '状态',   {'ACTIVE': '正常', 'SUSPENDED': '已禁用'}) }}
        {{ sf.select(form.roles,      '权限组',  to_options('App\\\\Admin\\\\Model\\\\AdminUser::ADMIN_ROLES', \"全部\")) }}
        {{ sf.text(form.user_name,    '用户名') }}
        {{ sf.text(form.name,         '名字') }}
        {{ sf.password(form.password, '密码') }}
        {{ sf.text(form.mobile,       '手机号') }}
        {{ sf.text(form.title,        '职务') }}

        {{ sf.rest(form) }}
      </form>
    </div>
  </div>
{% endblock %}


{% block js_end %}
  <script>
      layui.table.on('tool(table)', function (row) {
          var data = row.data;
          if (row.event === 'edit') {
              console.log(row.data);
              show_edit_dialog(row.data);
          } else if (row.event === 'del') {
              layer.confirm('确认要删除吗？', function (index) {
                  \$.post('{{ path('admin_system_administration_administrators_delete') }}',
                      {id: data.id, _token: '{{ csrf_token('admin_system_administration_administrators_delete') }}'},
                      function (data) {
                          if (!data.status) {
                              layer.alert(data.msg);
                              return;
                          }

                          reload_table();
                          layer.msg(data.msg, {time: 1500});
                      }, 'json'
                  );

                  layer.close(index);
              });
          }
      });

      function reload_table() {
          table.reload('table', {
              where: \$('#search-form').serializeJSON()
          });
      }

      function show_edit_dialog(data) {
          \$('#edit-form')[0].reset();
          \$('.error').html('');
          \$('.error').hide();
          \$('.tips').show();

          if (data) {
              layui.form.val(\"edit-form\", {
                  \"id\":  data.id
                  , \"status\":  data.status
                  , \"user_name\":  data.user_name
                  , \"roles\":    data.roles
                  , \"name\":     data.name
                  , \"password\": ''
                  , \"mobile\":   data.mobile
                  , \"title\":    data.title
              });
          }

          layer.open({
              title:    data ? '编辑' : '新增',
              type:     1,
              area:     'auto',
              content:  \$('#edit-user'),
              closeBtn: false,
              btn:      ['保存', '取消'],
              yes:      function (index, layero) {
                  ajax_post('{{ path('admin_system_administration_administrator_save') }}', \$('#edit-form').serialize(),
                      function (data) {
                          layer.close(index);
                          \$('#edit-user').toggle();
                          reload_table();
                      }, function (error) {

                      });
              },
              btn2:     function (index, layero) {
                  layer.close(index);
                  \$('#edit-user').toggle();
              }
          });
      }
  </script>
{% endblock %}
", "Admin/SystemAdministration/Administrator/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\SystemAdministration\\Administrator\\index.twig");
    }
}
