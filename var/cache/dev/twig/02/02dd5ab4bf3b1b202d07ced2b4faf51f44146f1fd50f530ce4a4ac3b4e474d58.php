<?php

/* Admin/ProductManagement/PhoneNumberAttribution/index.twig */
class __TwigTemplate_b6364d2efcd6de1b4abb48f9ac9c8962d791fd7526f00156b2ecbff317c001b7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/Admin/Common/layout.twig", "Admin/ProductManagement/PhoneNumberAttribution/index.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/ProductManagement/PhoneNumberAttribution/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/ProductManagement/PhoneNumberAttribution/index.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Admin/ProductManagement/PhoneNumberAttribution/index.twig", 2);
        // line 4
        $context["title"] = "号码归宿地管理 - 商品属性管理";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 8
        echo "    <div class=\"layui-fluid\">
        <div class=\"layui-card\">
            <div class=\"layui-form-pane layui-card-header\">
                <form class=\"layui-form\" id=\"form\">
                    <div class=\"layui-form-item\">
                        ";
        // line 13
        echo $context["sf"]->macro_inline_field($context["sf"]->macro_province_code(), $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Admin\\Model\\AdminUser::ADMIN_ROLES"), "全部"), array("id" => "search_roles"));
        echo "
                        <input type=\"text\" name=\"user_name\" placeholder=\"搜索...\" autocomplete=\"off\" class=\"layui-input\">

                        <div class=\"layui-input-block layui-input-block-margin\">
                            <button type=\"button\" class=\"layui-btn layuiadmin-btn-useradmin\" onclick=\"reload_table()\">
                                <i class=\"layui-icon layui-icon-search layuiadmin-button-btn\"></i>
                            </button>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
            <div class=\"layui-card-body\">
                <div style=\"padding: 5px 0;\">
                    <button class=\"layui-btn layuiadmin-btn-useradmin\" onclick=\"show_edit_dialog(null)\">新增用户</button>
                </div>
                <table id=\"table\" class=\"layui-table\" lay-data=\"{url:'";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_administrators");
        echo "', page:true, id:'table', method:'get'}\" lay-filter=\"table\">
                    <thead>
                    <tr>
                        ";
        // line 33
        echo "                        <th lay-data=\"{field:'id', width:'3%', align: 'center'}\">ID</th>
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

    // line 54
    public function block_extra($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        // line 55
        echo "    <div class=\"layui-card\" id=\"edit-user\" style=\"display: none;\">
        <div class=\"layui-card-body\">
            <form id=\"edit-form\" class=\"layui-form\" lay-filter=\"edit-form\">
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\"></label>
                    <div class=\"layui-input-inline layui-inline-400\">
                        带 * 号的为必填项
                    </div>
                </div>

                ";
        // line 65
        echo $context["sf"]->macro_field(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->source); })()), "roles", array()), "select", "权限组：", array("options" => $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Admin\\Model\\AdminUser::ADMIN_ROLES"), "全部")));
        echo "
                ";
        // line 66
        echo $context["sf"]->macro_field(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->source); })()), "user_name", array()), "text", "用户名：", array("attrs" => array("placeholder" => "请输入用户名")));
        echo "
                ";
        // line 67
        echo $context["sf"]->macro_field(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->source); })()), "name", array()), "text", "名字：", array("attrs" => array("placeholder" => "请输入名字")));
        echo "
                ";
        // line 68
        echo $context["sf"]->macro_field(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "password", array()), "password", "密码：", array("attrs" => array("placeholder" => "留空则不修改")));
        echo "
                ";
        // line 69
        echo $context["sf"]->macro_field(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->source); })()), "mobile", array()), "text", "手机号：", array("attrs" => array("placeholder" => "请输入手机号")));
        echo "
                ";
        // line 70
        echo $context["sf"]->macro_field(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 70, $this->source); })()), "title", array()), "text", "职务：", array("attrs" => array("placeholder" => "请输入职务")));
        echo "

                ";
        // line 72
        echo $context["sf"]->macro_rest((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->source); })()));
        echo "
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 73
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

    // line 83
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 84
        echo "    <script>
        layui.table.on('tool(table)', function (row) {
            var data = row.data;
            if (row.event === 'edit') {
                console.log(row.data);
                show_edit_dialog(row.data);
            } else if (row.event === 'del') {
                layer.confirm('确认要删除吗？', function (index) {
                    \$.post('";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_administrators_delete");
        echo "',
                        {id: data.id, _token: '";
        // line 93
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
        // line 117
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
        return "Admin/ProductManagement/PhoneNumberAttribution/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 117,  212 => 93,  208 => 92,  198 => 84,  189 => 83,  171 => 73,  167 => 72,  162 => 70,  158 => 69,  154 => 68,  150 => 67,  146 => 66,  142 => 65,  130 => 55,  121 => 54,  92 => 33,  86 => 29,  67 => 13,  60 => 8,  51 => 7,  41 => 1,  39 => 4,  37 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ('/Admin/Common/layout.twig') %}
{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

{% set title = '号码归宿地管理 - 商品属性管理' %}


{% block main_content %}
    <div class=\"layui-fluid\">
        <div class=\"layui-card\">
            <div class=\"layui-form-pane layui-card-header\">
                <form class=\"layui-form\" id=\"form\">
                    <div class=\"layui-form-item\">
                        {{ sf.inline_field(sf.province_code, to_options(constant('App\\\\Admin\\\\Model\\\\AdminUser::ADMIN_ROLES'), \"全部\"), {'id': 'search_roles'}) }}
                        <input type=\"text\" name=\"user_name\" placeholder=\"搜索...\" autocomplete=\"off\" class=\"layui-input\">

                        <div class=\"layui-input-block layui-input-block-margin\">
                            <button type=\"button\" class=\"layui-btn layuiadmin-btn-useradmin\" onclick=\"reload_table()\">
                                <i class=\"layui-icon layui-icon-search layuiadmin-button-btn\"></i>
                            </button>
                        </div>
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
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('admin_system_administration_administrator_save') }}\">
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
", "Admin/ProductManagement/PhoneNumberAttribution/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\ProductManagement\\PhoneNumberAttribution\\index.twig");
    }
}
