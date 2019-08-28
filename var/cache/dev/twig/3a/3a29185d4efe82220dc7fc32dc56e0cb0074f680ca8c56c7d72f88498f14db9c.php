<?php

/* Admin/SystemAdministration/Administrator/index.twig */
class __TwigTemplate_53790400a0b5760c5255a47894755c1e61a3772816f8629e2002d4e997f26db8 extends Twig_Template
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
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers.html.twig", "Admin/SystemAdministration/Administrator/index.twig", 2);
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
        <form class=\"layui-form-item\" id=\"form\">
          <div class=\"layui-inline\">
            <label class=\"layui-form-label\">权限组</label>
            <div class=\"layui-input-block\">
              ";
        // line 14
        echo $context["sf"]->macro_select_raw("roles", $this->extensions['App\Common\Twig\AppExtension']->arrayToOptions(twig_constant("App\\Admin\\Model\\AdminUser::ADMIN_ROLES"), "全部"), array("id" => "search_roles"));
        echo "
            </div>
          </div>
          <div class=\"layui-inline\">
            <label class=\"layui-form-label\">姓名</label>
            <div class=\"layui-input-block\">
              <input type=\"text\" name=\"user_name\" placeholder=\"搜索...\" autocomplete=\"off\" class=\"layui-input\">
            </div>
          </div>
          <div class=\"layui-inline\">
            <div class=\"layui-input-block layui-input-block-margin\">
              <button type=\"button\" class=\"layui-btn layuiadmin-btn-useradmin\" onclick=\"reload_table()\">
                <i class=\"layui-icon layui-icon-search layuiadmin-button-btn\"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
      <div class=\"layui-card-body\">
        <div style=\"padding: 5px 0;\">
          <button class=\"layui-btn layuiadmin-btn-useradmin\" onclick=\"show_edit_dialog(null)\">新增用户</button>
        </div>
        <table id=\"table\" class=\"layui-table\" lay-data=\"{url:'";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_administrators");
        echo "', page:true, id:'table', method:'get'}\" lay-filter=\"table\">
          <thead>
          <tr>
            ";
        // line 40
        echo "            <th lay-data=\"{field:'id', width:'3%', align: 'center'}\">ID</th>
            <th lay-data=\"{field:'user_name', width:'10%', align: 'center'}\">用户名</th>
            <th lay-data=\"{field:'role_name', width:'15%', align: 'center'}\">权限组</th>
            <th lay-data=\"{field:'name', align: 'center'}\">姓名</th>
            <th lay-data=\"{field:'mobile', width:'13%', align: 'center'}\">联系电话</th>
            <th lay-data=\"{field:'title', width:'12%', align: 'center'}\">职务</th>
            <th lay-data=\"{field:'last_login_time', width:'12%', align: 'center'}\">最后登录时间</th>
            <th lay-data=\"{field:'last_login_ip', width:'12%', align: 'center'}\">最后登录IP</th>
            <th lay-data=\"{align:'center', toolbar: '#actions', width:'12%'}\">操作</th>
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

    // line 61
    public function block_extra($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        // line 62
        echo "  <div class=\"layui-card\" id=\"edit-user\" style=\"display: none;\">
    <div class=\"layui-card-body\">
      <form id=\"edit-form\" class=\"layui-form\" lay-filter=\"edit-form\">
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\"></label>
          <div class=\"layui-input-inline layui-inline-400\">
            带 * 号的为必填项
          </div>
        </div>

        ";
        // line 72
        echo $context["sf"]->macro_field(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->source); })()), "roles", array()), "select", "权限组：", array("options" => $this->extensions['App\Common\Twig\AppExtension']->arrayToOptions(twig_constant("App\\Admin\\Model\\AdminUser::ADMIN_ROLES"), "全部")));
        echo "
        ";
        // line 73
        echo $context["sf"]->macro_field(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->source); })()), "user_name", array()), "text", "用户名：", array("attrs" => array("placeholder" => "请输入用户名")));
        echo "
        ";
        // line 74
        echo $context["sf"]->macro_field(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 74, $this->source); })()), "name", array()), "text", "名字：", array("attrs" => array("placeholder" => "请输入名字")));
        echo "
        ";
        // line 75
        echo $context["sf"]->macro_field(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->source); })()), "password", array()), "password", "密码：", array("attrs" => array("placeholder" => "留空则不修改")));
        echo "
        ";
        // line 76
        echo $context["sf"]->macro_field(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->source); })()), "mobile", array()), "text", "手机号：", array("attrs" => array("placeholder" => "请输入手机号")));
        echo "
        ";
        // line 77
        echo $context["sf"]->macro_field(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 77, $this->source); })()), "title", array()), "text", "职务：", array("attrs" => array("placeholder" => "请输入职务")));
        echo "

        ";
        // line 79
        echo $context["sf"]->macro_rest((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 79, $this->source); })()));
        echo "
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_system_administration_administrator_save"), "html", null, true);
        echo "\">
      </form>
    </div>
  </div>

  <input type=\"text\" name=\"user_name\" placeholder=\"搜索...\" autocomplete=\"off\" class=\"layui-input\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 91
        echo "  <script>
      layui.table.on('tool(table)', function (row) {
          var data = row.data;
          if (row.event === 'edit') {
              console.log(row.data);
              show_edit_dialog(row.data);
          } else if (row.event === 'del') {
              layer.confirm('确认要删除吗？', function (index) {
                  \$.post('";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_administrators_delete");
        echo "',
                      {id: data.id, _csrf_token: '";
        // line 100
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
              where: \$('#form').serializeJSON()
          });
      }

      function save_user(callback) {
          \$.post('";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_administrator_save");
        echo "',
              \$('#edit-form').serialize(),
              function (data) {
                  if (!data.status) {
                      layer.alert(data.msg);
                      callback(false);
                      return;
                  }
                  callback(true);
                  reload_table();
                  layer.msg(data.msg, {time: 1500});
              }, 'json'
          );
      }

      function show_edit_dialog(data) {
          if (data) {
              layui.form.val(\"edit-form\", {
                  \"id\":  data.id
                  , \"user_name\":  data.user_name
                  , \"roles\":    data.roles
                  , \"name\":     data.name
                  , \"password\": ''
                  , \"mobile\":   data.mobile
                  , \"title\":    data.title
              });
          }

          layer.open({
              title:    data ? '编辑用户' : '新增用户',
              type:     1,
              area:     ['400px', '500px'],
              content:  \$('#edit-user'),
              closeBtn: false,
              btn:      ['保存', '取消'],
              yes:      function (index, layero) {
                  save_user(function (succeed) {
                      if (succeed) {
                          layer.close(index);
                          \$('#edit-user').toggle();
                      }
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
        return array (  247 => 124,  220 => 100,  216 => 99,  206 => 91,  197 => 90,  179 => 80,  175 => 79,  170 => 77,  166 => 76,  162 => 75,  158 => 74,  154 => 73,  150 => 72,  138 => 62,  129 => 61,  100 => 40,  94 => 36,  69 => 14,  60 => 7,  51 => 6,  41 => 1,  39 => 4,  37 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ('/Admin/Common/layout.twig') %}
{% import ('/Common/simple_form_helpers.html.twig') as sf %}

{% set title = '系统-后台用户管理' %}

{% block main_content %}
  <div class=\"layui-fluid\">
    <div class=\"layui-card\">
      <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
        <form class=\"layui-form-item\" id=\"form\">
          <div class=\"layui-inline\">
            <label class=\"layui-form-label\">权限组</label>
            <div class=\"layui-input-block\">
              {{ sf.select_raw('roles', to_options(constant('App\\\\Admin\\\\Model\\\\AdminUser::ADMIN_ROLES'), \"全部\"), {'id': 'search_roles'}) }}
            </div>
          </div>
          <div class=\"layui-inline\">
            <label class=\"layui-form-label\">姓名</label>
            <div class=\"layui-input-block\">
              <input type=\"text\" name=\"user_name\" placeholder=\"搜索...\" autocomplete=\"off\" class=\"layui-input\">
            </div>
          </div>
          <div class=\"layui-inline\">
            <div class=\"layui-input-block layui-input-block-margin\">
              <button type=\"button\" class=\"layui-btn layuiadmin-btn-useradmin\" onclick=\"reload_table()\">
                <i class=\"layui-icon layui-icon-search layuiadmin-button-btn\"></i>
              </button>
            </div>
          </div>
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
            <th lay-data=\"{field:'id', width:'3%', align: 'center'}\">ID</th>
            <th lay-data=\"{field:'user_name', width:'10%', align: 'center'}\">用户名</th>
            <th lay-data=\"{field:'role_name', width:'15%', align: 'center'}\">权限组</th>
            <th lay-data=\"{field:'name', align: 'center'}\">姓名</th>
            <th lay-data=\"{field:'mobile', width:'13%', align: 'center'}\">联系电话</th>
            <th lay-data=\"{field:'title', width:'12%', align: 'center'}\">职务</th>
            <th lay-data=\"{field:'last_login_time', width:'12%', align: 'center'}\">最后登录时间</th>
            <th lay-data=\"{field:'last_login_ip', width:'12%', align: 'center'}\">最后登录IP</th>
            <th lay-data=\"{align:'center', toolbar: '#actions', width:'12%'}\">操作</th>
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
          <label class=\"layui-form-label\"></label>
          <div class=\"layui-input-inline layui-inline-400\">
            带 * 号的为必填项
          </div>
        </div>

        {{ sf.field(form.roles,       'select',   '权限组：',     {'options': to_options(constant('App\\\\Admin\\\\Model\\\\AdminUser::ADMIN_ROLES'), \"全部\")}) }}
        {{ sf.field(form.user_name,   'text',     '用户名：',     {'attrs': {'placeholder': '请输入用户名'}}) }}
        {{ sf.field(form.name,        'text',     '名字：',      {'attrs': {'placeholder': '请输入名字'}}) }}
        {{ sf.field(form.password,    'password', '密码：',      {'attrs': {'placeholder': '留空则不修改'}}) }}
        {{ sf.field(form.mobile,      'text',     '手机号：',     {'attrs': {'placeholder': '请输入手机号'}}) }}
        {{ sf.field(form.title,       'text',     '职务：',      {'attrs': {'placeholder': '请输入职务'}}) }}

        {{ sf.rest(form) }}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('admin_system_administration_administrator_save') }}\">
      </form>
    </div>
  </div>

  <input type=\"text\" name=\"user_name\" placeholder=\"搜索...\" autocomplete=\"off\" class=\"layui-input\">

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
                      {id: data.id, _csrf_token: '{{ csrf_token('admin_system_administration_administrators_delete') }}'},
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
              where: \$('#form').serializeJSON()
          });
      }

      function save_user(callback) {
          \$.post('{{ path('admin_system_administration_administrator_save') }}',
              \$('#edit-form').serialize(),
              function (data) {
                  if (!data.status) {
                      layer.alert(data.msg);
                      callback(false);
                      return;
                  }
                  callback(true);
                  reload_table();
                  layer.msg(data.msg, {time: 1500});
              }, 'json'
          );
      }

      function show_edit_dialog(data) {
          if (data) {
              layui.form.val(\"edit-form\", {
                  \"id\":  data.id
                  , \"user_name\":  data.user_name
                  , \"roles\":    data.roles
                  , \"name\":     data.name
                  , \"password\": ''
                  , \"mobile\":   data.mobile
                  , \"title\":    data.title
              });
          }

          layer.open({
              title:    data ? '编辑用户' : '新增用户',
              type:     1,
              area:     ['400px', '500px'],
              content:  \$('#edit-user'),
              closeBtn: false,
              btn:      ['保存', '取消'],
              yes:      function (index, layero) {
                  save_user(function (succeed) {
                      if (succeed) {
                          layer.close(index);
                          \$('#edit-user').toggle();
                      }
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
