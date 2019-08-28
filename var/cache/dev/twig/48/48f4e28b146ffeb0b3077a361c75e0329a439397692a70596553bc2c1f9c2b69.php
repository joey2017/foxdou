<?php

/* Admin/SystemAdministration/Article/index.twig */
class __TwigTemplate_844ad9041212171c89e45b57d5facdf9f58515d001ce1ffc257f41eb4524e8f2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/Admin/Common/layout.twig", "Admin/SystemAdministration/Article/index.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/Article/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/Article/index.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Admin/SystemAdministration/Article/index.twig", 2);
        // line 4
        $context["title"] = "文章管理";
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
            <label class=\"layui-form-label\">平台</label>
            <div class=\"layui-input-inline\">
              ";
        // line 14
        echo $context["sf"]->macro_select_raw("portal_id", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Platform::PLATFORMS"), "全部"), array("id" => "all_portals", " lay-filter" => "portal_id"));
        echo "
            </div>
          </div>
          <div class=\"layui-inline\">
            <label class=\"layui-form-label\">类别</label>
            <div class=\"layui-input-inline\">
              <select name=\"cate_id\" id=\"cate_id\">
                <option value=\"\"></option>
              </select>
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
          <a class=\"layui-btn layuiadmin-btn-useradmin\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_articles_edit");
        echo "\" target=\"_blank\">新增文章</a>
        </div>

        ";
        // line 43
        echo "
        <script type=\"text/html\" id=\"article_link_tpl\">
          <a href=\"#\" onclick=\"view_article_popup(event, {{d.id}}, '{{d.title}}')\" class=\"layui-table-link\" title=\"按 Shift 在新窗口打开连接\">{{d.title}}</a>
        </script>
        ";
        echo "

        <table id=\"table\" class=\"layui-table\" lay-data=\"{url:'";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_articles_index", array("_format" => "json"));
        echo "', page:true, id:'table', method:'get'}\" lay-filter=\"table\">
          <thead>
          <tr>
            ";
        // line 49
        echo "            <th lay-data=\"{field:'id', width:50, align: 'center'}\">ID</th>
            <th lay-data=\"{field:'portal_name', width:120, align: 'center'}\">平台</th>
            <th lay-data=\"{field:'cate_name', width:120, align: 'center'}\">类别</th>
            <th lay-data=\"{field:'title', templet:'#article_link_tpl'}\">标题</th>
            <th lay-data=\"{field:'source', width:120, align: 'center'}\">来源</th>
            <th lay-data=\"{field:'editor_name', width:80, align: 'center'}\">编辑者</th>
            <th lay-data=\"{field:'view_count', width:80, align: 'center'}\">点击次数</th>
            <th lay-data=\"{field:'publish_time', width:150, align: 'center'}\">发布时间</th>
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

    // line 70
    public function block_extra($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        // line 71
        echo "  ";
        // line 72
        echo "    ";
        // line 73
        echo "      ";
        // line 74
        echo "        ";
        // line 75
        echo "          ";
        // line 76
        echo "          ";
        // line 77
        echo "            ";
        // line 78
        echo "          ";
        // line 79
        echo "        ";
        // line 80
        echo "
        ";
        // line 82
        echo "        ";
        // line 83
        echo "        ";
        // line 84
        echo "        ";
        // line 85
        echo "        ";
        // line 86
        echo "        ";
        // line 87
        echo "
        ";
        // line 89
        echo "        ";
        // line 90
        echo "      ";
        // line 91
        echo "    ";
        // line 92
        echo "  ";
        // line 93
        echo "
  ";
        // line 95
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 100
        echo "  <script>
    function view_article_popup(event, id, title) {
        var url = '";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("common_articles_view");
        echo "?id=' + id

        var new_window = !!event.shiftKey;
        if(new_window) {
            window.open(url)
        } else {
            layer.open({
                type: 2,
                title: title,
                shadeClose: true,
                shade: 0.8,
                area: ['800px', '90%'],
                content: url
            });
        }
    }

      function get_categories(portalId) {
          \$.getJSON(\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_articles_categories");
        echo ".json?portal_id=\"+portalId, function(data){
              var optionstring = \"\";
              \$.each(data.data, function(i,item){
                  optionstring += \"<option value=\\\"\" + item.id + \"\\\" >\" + item.name + \"</option>\";
              });
              \$(\"#cate_id\").html('<option value=\"\"></option>' + optionstring);
              form.render('select'); //这个很重要
          });
      }

      layui.form.on('select(portal_id)', function(data){
          get_categories(data.value);
      });

      get_categories(\"\");

      layui.table.on('tool(table)', function (row) {
          var data = row.data;
          if (row.event === 'edit') {
              var url = '";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_articles_edit");
        echo "?id=' + data.id;
              window.open(url)
          } else if (row.event === 'del') {
              layer.confirm('确认要删除吗？', function (index) {
                  \$.post('";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_articles_delete");
        echo "',
                      {id: data.id, _token: '";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_system_administration_articles_delete"), "html", null, true);
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
  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/SystemAdministration/Article/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 144,  272 => 143,  265 => 139,  243 => 120,  222 => 102,  218 => 100,  209 => 99,  198 => 95,  195 => 93,  193 => 92,  191 => 91,  189 => 90,  187 => 89,  184 => 87,  182 => 86,  180 => 85,  178 => 84,  176 => 83,  174 => 82,  171 => 80,  169 => 79,  167 => 78,  165 => 77,  163 => 76,  161 => 75,  159 => 74,  157 => 73,  155 => 72,  153 => 71,  144 => 70,  115 => 49,  109 => 45,  100 => 43,  94 => 36,  69 => 14,  60 => 7,  51 => 6,  41 => 1,  39 => 4,  37 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ('/Admin/Common/layout.twig') %}
{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

{% set title = '文章管理' %}

{% block main_content %}
  <div class=\"layui-fluid\">
    <div class=\"layui-card\">
      <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
        <form class=\"layui-form-item\" id=\"form\">
          <div class=\"layui-inline\">
            <label class=\"layui-form-label\">平台</label>
            <div class=\"layui-input-inline\">
              {{ sf.select_raw('portal_id', to_options(constant('App\\\\Platform::PLATFORMS'), \"全部\"), {'id': 'all_portals', ' lay-filter': \"portal_id\"}) }}
            </div>
          </div>
          <div class=\"layui-inline\">
            <label class=\"layui-form-label\">类别</label>
            <div class=\"layui-input-inline\">
              <select name=\"cate_id\" id=\"cate_id\">
                <option value=\"\"></option>
              </select>
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
          <a class=\"layui-btn layuiadmin-btn-useradmin\" href=\"{{ path('admin_system_administration_articles_edit') }}\" target=\"_blank\">新增文章</a>
        </div>

        {% verbatim %}
        <script type=\"text/html\" id=\"article_link_tpl\">
          <a href=\"#\" onclick=\"view_article_popup(event, {{d.id}}, '{{d.title}}')\" class=\"layui-table-link\" title=\"按 Shift 在新窗口打开连接\">{{d.title}}</a>
        </script>
        {% endverbatim %}

        <table id=\"table\" class=\"layui-table\" lay-data=\"{url:'{{ path('admin_system_administration_articles_index', {'_format': 'json'}) }}', page:true, id:'table', method:'get'}\" lay-filter=\"table\">
          <thead>
          <tr>
            {#<th lay-data=\"{type:'checkbox', fixed: 'left', width:'5%'}\"></th>#}
            <th lay-data=\"{field:'id', width:50, align: 'center'}\">ID</th>
            <th lay-data=\"{field:'portal_name', width:120, align: 'center'}\">平台</th>
            <th lay-data=\"{field:'cate_name', width:120, align: 'center'}\">类别</th>
            <th lay-data=\"{field:'title', templet:'#article_link_tpl'}\">标题</th>
            <th lay-data=\"{field:'source', width:120, align: 'center'}\">来源</th>
            <th lay-data=\"{field:'editor_name', width:80, align: 'center'}\">编辑者</th>
            <th lay-data=\"{field:'view_count', width:80, align: 'center'}\">点击次数</th>
            <th lay-data=\"{field:'publish_time', width:150, align: 'center'}\">发布时间</th>
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
  {#<div class=\"layui-card\" id=\"edit-user\" style=\"display: none;\">#}
    {#<div class=\"layui-card-body\">#}
      {#<form id=\"edit-form\" class=\"layui-form\" lay-filter=\"edit-form\">#}
        {#<div class=\"layui-form-item\">#}
          {#<label class=\"layui-form-label\"></label>#}
          {#<div class=\"layui-input-inline layui-inline-400\">#}
            {#带 * 号的为必填项#}
          {#</div>#}
        {#</div>#}

        {#{{ sf.field(form.roles,       'select',   '权限组：',     {'options': to_options(constant('App\\\\Admin\\\\Model\\\\AdminUser::ADMIN_ROLES'), \"全部\")}) }}#}
        {#{{ sf.field(form.user_name,   'text',     '用户名：',     {'attrs': {'placeholder': '请输入用户名'}}) }}#}
        {#{{ sf.field(form.name,        'text',     '名字：',      {'attrs': {'placeholder': '请输入名字'}}) }}#}
        {#{{ sf.field(form.password,    'password', '密码：',      {'attrs': {'placeholder': '留空则不修改'}}) }}#}
        {#{{ sf.field(form.mobile,      'text',     '手机号：',     {'attrs': {'placeholder': '请输入手机号'}}) }}#}
        {#{{ sf.field(form.title,       'text',     '职务：',      {'attrs': {'placeholder': '请输入职务'}}) }}#}

        {#{{ sf.rest(form) }}#}
        {#<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('admin_system_administration_administrator_save') }}\">#}
      {#</form>#}
    {#</div>#}
  {#</div>#}

  {#<input type=\"text\" name=\"user_name\" placeholder=\"搜索...\" autocomplete=\"off\" class=\"layui-input\">#}

{% endblock %}


{% block js_end %}
  <script>
    function view_article_popup(event, id, title) {
        var url = '{{ url('common_articles_view') }}?id=' + id

        var new_window = !!event.shiftKey;
        if(new_window) {
            window.open(url)
        } else {
            layer.open({
                type: 2,
                title: title,
                shadeClose: true,
                shade: 0.8,
                area: ['800px', '90%'],
                content: url
            });
        }
    }

      function get_categories(portalId) {
          \$.getJSON(\"{{ path('admin_system_administration_articles_categories') }}.json?portal_id=\"+portalId, function(data){
              var optionstring = \"\";
              \$.each(data.data, function(i,item){
                  optionstring += \"<option value=\\\"\" + item.id + \"\\\" >\" + item.name + \"</option>\";
              });
              \$(\"#cate_id\").html('<option value=\"\"></option>' + optionstring);
              form.render('select'); //这个很重要
          });
      }

      layui.form.on('select(portal_id)', function(data){
          get_categories(data.value);
      });

      get_categories(\"\");

      layui.table.on('tool(table)', function (row) {
          var data = row.data;
          if (row.event === 'edit') {
              var url = '{{ path('admin_system_administration_articles_edit') }}?id=' + data.id;
              window.open(url)
          } else if (row.event === 'del') {
              layer.confirm('确认要删除吗？', function (index) {
                  \$.post('{{ path('admin_system_administration_articles_delete') }}',
                      {id: data.id, _token: '{{ csrf_token('admin_system_administration_articles_delete') }}'},
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
  </script>
{% endblock %}
", "Admin/SystemAdministration/Article/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\SystemAdministration\\Article\\index.twig");
    }
}
