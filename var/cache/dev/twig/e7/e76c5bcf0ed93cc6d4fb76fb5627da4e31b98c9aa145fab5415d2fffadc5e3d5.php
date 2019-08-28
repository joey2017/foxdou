<?php

/* Admin/SystemAdministration/Logging/admin_operation_logs.twig */
class __TwigTemplate_b2aca29797d6d73f0721bea52e478026b45711281cc607b48da365a41efd02fb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/Admin/Common/layout.twig", "Admin/SystemAdministration/Logging/admin_operation_logs.twig", 1);
        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/Logging/admin_operation_logs.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/Logging/admin_operation_logs.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers.html.twig", "Admin/SystemAdministration/Logging/admin_operation_logs.twig", 2);
        // line 4
        $context["title"] = "系统-系统日记";
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
            ";
        // line 12
        echo $context["sf"]->macro_select_raw("user_id", $this->extensions['App\Common\Twig\AppExtension']->arrayToOptions((isset($context["admins"]) || array_key_exists("admins", $context) ? $context["admins"] : (function () { throw new Twig_Error_Runtime('Variable "admins" does not exist.', 12, $this->source); })()), "选择用户"), array("id" => "filter_users"));
        echo "
          </div>
          <div class=\"layui-inline\">
            <input name=\"start_time\" value=\"\" placeholder=\"开始日期\" class=\"layui-input layer-date\" id=\"start_time\">
          </div>
          <div class=\"layui-inline\">
            <input name=\"end_time\" value=\"\" placeholder=\"结束日期\" class=\"layui-input layer-date\" id=\"end_time\">
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
        <table id=\"table\" class=\"layui-table\" lay-data=\"{url:'";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_logging_admin_operation_logs");
        echo "', page:true, id:'table', method:'get'}\" lay-filter=\"table\">
          <thead>
          <tr>
            <th lay-data=\"{field:'id', width:'3%', align: 'center'}\">ID</th>
            <th lay-data=\"{field:'user_name', width:'10%', align: 'center'}\">操作人</th>
            <th lay-data=\"{field:'info', align: 'center'}\">信息</th>
            <th lay-data=\"{field:'add_time', width:'12%', align: 'center'}\">操作时间</th>
            <th lay-data=\"{field:'ip', width:'12%', align: 'center'}\">操作IP</th>
            <th lay-data=\"{align:'center', toolbar: '#actions', width:'12%'}\">操作</th>
          </tr>
          </thead>
        </table>
        <script type=\"text/html\" id=\"actions\">
          <a class=\"layui-btn layui-btn-xs\" lay-event=\"detail\">详情</a>
          <a class=\"layui-btn layui-btn-xs\" lay-event=\"trace-admin\">追踪管理员</a>
        </script>
      </div>
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 54
        echo "  <script>
      layui.laydate.render({
          elem:   '#start_time'
          , type: 'datetime'
      });
      layui.laydate.render({
          elem:   '#end_time'
          , type: 'datetime'
      });

      layui.table.on('tool(table)', function (row) {
          var data = row.data;
          if (row.event === 'detail') { //详情
              detail(data.id, data.user_name);
          }
          if (row.event === 'trace-admin') { //追踪管理员
              trace_admin(data.id, data.user_id);
          }

      });

      function reload_table() {
          table.reload('table', {
              where: \$('#form').serializeJSON()
          });
      }

      function trace_admin(id, user_id) {
          var width = 1000;
          var height = window.screen.availHeight;
          var url = '";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_logging_trace");
        echo "?id=' + id + '&user_id=' + user_id;
          window.open(url, '', 'scrollbars=0,width=' + width + ',height=' + height + ',top=' + (( (window.screen.availHeight) / 2 ) - (height / 2) ) + ',left=' + (( (window.screen.availWidth) / 2 ) - (width / 2)));
      }

      // 详情
      function detail(id, admin) {
          var loading = null;
          var before  = function () {
              loading = layer.load();
          };
          var error   = function (res) {
              layer.close(loading);
              nxwd.showMsg('服务器未响应，请稍后重试');
          };
          var success = function (res) {
              layer.close(loading);
              if (res.status) {
                  var str  = '<div class=\"box-info\" style=\"padding: 20px;\"><table class=\"layui-table\" lay-size=\"sm\" style=\"width: 100%;\"><tr><td style=\"width: 150px;\"></td><td></td></tr>';
                  var name = {
                      'id':           'ID',
                      'type':         \"操作类型\",
                      'subject_type': \"操作对象类型\",
                      'subject_id':   \"操作对象ID\",
                      'info':         \"描述\",
                      'ip':           \"操作IP\",
                      'add_time':     '记录时间',
                      'context':      \"上下文信息\"
                  };
                  str += '<tr><td style=\"width: 100px;\"><span class=\"show-name\">管理员</span></td><td><pre class=\"show-value\">' + admin + '</pre></td></tr>';
                  \$.each(res.data, function (k, v) {
                      str += '<tr><td style=\"width: 100px;\"><span class=\"show-name\">' + (name[k] || k) + '</span></td><td><pre class=\"show-value\">' + v + '</pre</td></tr>';
                  });
                  str += '</table></div>';
                  layer.open({
                      title:   '请求详情',
                      type:    1,
                      area:    ['900px', '800px'],
                      btn:     ['确定'],
                      shadeClose: 1,
                      content: str
                  });

              }
              return false;
          };
          nxwd.ajaxRequest('";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_logging_operation_logs_detail");
        echo "', 'GET', {id: id}, 'json', success, before, error);
      }

  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/SystemAdministration/Logging/admin_operation_logs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 129,  159 => 84,  127 => 54,  118 => 53,  88 => 31,  66 => 12,  59 => 7,  50 => 6,  40 => 1,  38 => 4,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ('/Admin/Common/layout.twig') %}
{% import ('/Common/simple_form_helpers.html.twig') as sf %}

{% set title = '系统-系统日记' %}

{% block main_content %}
  <div class=\"layui-fluid\">
    <div class=\"layui-card\">
      <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
        <form class=\"layui-form-item\" id=\"form\">
          <div class=\"layui-inline\">
            {{ sf.select_raw('user_id', to_options(admins, \"选择用户\"), {'id': 'filter_users'}) }}
          </div>
          <div class=\"layui-inline\">
            <input name=\"start_time\" value=\"\" placeholder=\"开始日期\" class=\"layui-input layer-date\" id=\"start_time\">
          </div>
          <div class=\"layui-inline\">
            <input name=\"end_time\" value=\"\" placeholder=\"结束日期\" class=\"layui-input layer-date\" id=\"end_time\">
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
        <table id=\"table\" class=\"layui-table\" lay-data=\"{url:'{{ path('admin_system_administration_logging_admin_operation_logs') }}', page:true, id:'table', method:'get'}\" lay-filter=\"table\">
          <thead>
          <tr>
            <th lay-data=\"{field:'id', width:'3%', align: 'center'}\">ID</th>
            <th lay-data=\"{field:'user_name', width:'10%', align: 'center'}\">操作人</th>
            <th lay-data=\"{field:'info', align: 'center'}\">信息</th>
            <th lay-data=\"{field:'add_time', width:'12%', align: 'center'}\">操作时间</th>
            <th lay-data=\"{field:'ip', width:'12%', align: 'center'}\">操作IP</th>
            <th lay-data=\"{align:'center', toolbar: '#actions', width:'12%'}\">操作</th>
          </tr>
          </thead>
        </table>
        <script type=\"text/html\" id=\"actions\">
          <a class=\"layui-btn layui-btn-xs\" lay-event=\"detail\">详情</a>
          <a class=\"layui-btn layui-btn-xs\" lay-event=\"trace-admin\">追踪管理员</a>
        </script>
      </div>
    </div>
  </div>
{% endblock %}


{% block js_end %}
  <script>
      layui.laydate.render({
          elem:   '#start_time'
          , type: 'datetime'
      });
      layui.laydate.render({
          elem:   '#end_time'
          , type: 'datetime'
      });

      layui.table.on('tool(table)', function (row) {
          var data = row.data;
          if (row.event === 'detail') { //详情
              detail(data.id, data.user_name);
          }
          if (row.event === 'trace-admin') { //追踪管理员
              trace_admin(data.id, data.user_id);
          }

      });

      function reload_table() {
          table.reload('table', {
              where: \$('#form').serializeJSON()
          });
      }

      function trace_admin(id, user_id) {
          var width = 1000;
          var height = window.screen.availHeight;
          var url = '{{ path(\"admin_system_administration_logging_trace\") }}?id=' + id + '&user_id=' + user_id;
          window.open(url, '', 'scrollbars=0,width=' + width + ',height=' + height + ',top=' + (( (window.screen.availHeight) / 2 ) - (height / 2) ) + ',left=' + (( (window.screen.availWidth) / 2 ) - (width / 2)));
      }

      // 详情
      function detail(id, admin) {
          var loading = null;
          var before  = function () {
              loading = layer.load();
          };
          var error   = function (res) {
              layer.close(loading);
              nxwd.showMsg('服务器未响应，请稍后重试');
          };
          var success = function (res) {
              layer.close(loading);
              if (res.status) {
                  var str  = '<div class=\"box-info\" style=\"padding: 20px;\"><table class=\"layui-table\" lay-size=\"sm\" style=\"width: 100%;\"><tr><td style=\"width: 150px;\"></td><td></td></tr>';
                  var name = {
                      'id':           'ID',
                      'type':         \"操作类型\",
                      'subject_type': \"操作对象类型\",
                      'subject_id':   \"操作对象ID\",
                      'info':         \"描述\",
                      'ip':           \"操作IP\",
                      'add_time':     '记录时间',
                      'context':      \"上下文信息\"
                  };
                  str += '<tr><td style=\"width: 100px;\"><span class=\"show-name\">管理员</span></td><td><pre class=\"show-value\">' + admin + '</pre></td></tr>';
                  \$.each(res.data, function (k, v) {
                      str += '<tr><td style=\"width: 100px;\"><span class=\"show-name\">' + (name[k] || k) + '</span></td><td><pre class=\"show-value\">' + v + '</pre</td></tr>';
                  });
                  str += '</table></div>';
                  layer.open({
                      title:   '请求详情',
                      type:    1,
                      area:    ['900px', '800px'],
                      btn:     ['确定'],
                      shadeClose: 1,
                      content: str
                  });

              }
              return false;
          };
          nxwd.ajaxRequest('{{ path(\"admin_system_administration_logging_operation_logs_detail\") }}', 'GET', {id: id}, 'json', success, before, error);
      }

  </script>
{% endblock %}", "Admin/SystemAdministration/Logging/admin_operation_logs.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\SystemAdministration\\Logging\\admin_operation_logs.twig");
    }
}
