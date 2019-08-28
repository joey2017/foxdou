<?php

/* Admin/SystemAdministration/ArticleCategory/index.twig */
class __TwigTemplate_56215b1e719490d321b9a27e42ac2e5adf19d5eda9a65983525dd2e9ff7b2bc3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/Admin/Common/layout.twig", "Admin/SystemAdministration/ArticleCategory/index.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/ArticleCategory/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/ArticleCategory/index.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Admin/SystemAdministration/ArticleCategory/index.twig", 2);
        // line 4
        $context["title"] = "文章公告分类管理";
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
        echo "    <div class=\"layui-fluid\">
        <div class=\"layui-card\">
            <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
                <form class=\"layui-form-item\" id=\"categories\">
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
                        <div class=\"layui-input-block layui-input-block-margin\">
                            <button type=\"button\" class=\"layui-btn layuiadmin-btn-useradmin\" onclick=\"reload_table('categories')\">
                                <i class=\"layui-icon layui-icon-search layuiadmin-button-btn\"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class=\"layui-card-body\">
                <div style=\"padding: 5px 0;\">
                    <button class=\"layui-btn layuiadmin-btn-useradmin\" onclick=\"show_category_edit_dialog(null)\">新增分类
                    </button>
                </div>

                <table id=\"categories\" class=\"layui-table\" lay-data=\"{url:'";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_articles_categories", array("_format" => "json"));
        echo "', page:true, id:'categories', method:'get'}\" lay-filter=\"table\">
                    <thead>
                    <tr>
                        <th lay-data=\"{field:'id', width:50, align: 'center'}\">ID</th>
                        <th lay-data=\"{field:'portal_name', width:240, align: 'center'}\">平台</th>
                        <th lay-data=\"{field:'parent_cate_name', width:120, align: 'center'}\">父分类名称</th>
                        <th lay-data=\"{field:'name', align: 'center'}\">分类名称</th>
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

    // line 52
    public function block_extra($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        // line 53
        echo "    <div id=\"edit-form-dlg\" class=\"layui-card\" style=\"display: none;\">
        <div class=\"layui-card-body\">
            <form id=\"edit-form\" class=\"layui-form\" lay-filter=\"edit-form\">
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\"></label>
                    <div class=\"layui-input-inline\">
                        带 * 号的为必填项
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">平台 *</label>
                    <div class=\"layui-input-inline\">
                        ";
        // line 65
        echo $context["sf"]->macro_select_raw("portal_id", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Platform::PLATFORMS"), "全部"), array("lay-filter" => "portal_id"));
        echo "
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">父分类 *</label>
                    <div class=\"layui-input-inline\">
                        <select name=\"parent_id\" id=\"parent_id\">
                            <option value=\"\"></option>
                        </select>
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">分类名称 *</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"name\" class=\"layui-input\">
                    </div>
                </div>
                <input type=\"hidden\" name=\"id\" value=\"\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_system_administration_articles_categories_save"), "html", null, true);
        echo "\">
            </form>
        </div>
    </div>

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
        echo "    <script>
        ";
        // line 92
        $this->loadTemplate("/Admin/SystemAdministration/ArticleCategory/article_category.js.twig", "Admin/SystemAdministration/ArticleCategory/index.twig", 92)->display($context);
        // line 93
        echo "
        function save_category(callback) {
            \$.post('";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_articles_categories_save");
        echo "',
                \$('#edit-form').serialize(),
                function (data) {
                    if (data.status) {
                        callback(true);
                        reload_table('categories');
                        layer.msg(data.msg, {time: 1500});
                    }

                    layer.msg(data.msg);
                    callback(false);

                    if (data.errors) {
                        \$.each(data.errors, function (key, error) {
                            createAlertMsg(\$('#' + key), '* 填写错误', false);
                        });
                    }
                }, 'json'
            );
        }

        function show_category_edit_dialog(data) {
            \$('#edit-form')[0].reset();
            \$('.error').html('');
            \$('.error').hide();
            \$('.tips').show();

            if (data) {
                get_categories(data.portal_id, function (cates) {
                    layui.form.val(\"edit-form\", {
                        \"id\":          data.id
                        , \"portal_id\": data.portal_id
                        , \"parent_id\": data.parent_id
                        , \"name\":      data.name
                    });

                    form.render('select'); //这个很重要
                });
            }

            layer.open({
                title:    data ? '编辑分类' : '新增分类',
                type:     1,
                area:     ['500px', '400px'],
                content:  \$('#edit-form-dlg'),
                closeBtn: false,
                btn:      ['保存', '取消'],
                yes:      function (index, layero) {
                    save_category(function (succeed) {
                        if (succeed) {
                            layer.close(index);
                            \$('#edit-form-dlg').toggle();
                        }
                    });
                },
                btn2:     function (index, layero) {
                    layer.close(index);
                    \$('#edit-form-dlg').toggle();
                }
            });
        }

        layui.table.on('tool(table)', function (row) {
            var data = row.data;
            if (row.event === 'edit') {
                console.log(row.data);
                show_category_edit_dialog(row.data);
            } else if (row.event === 'del') {
                layer.confirm('确认要删除吗？', function (index) {
                    \$.post('";
        // line 164
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_articles_categories_delete");
        echo "',
                        {id: data.id, _token: '";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_system_administration_articles_categories_delete"), "html", null, true);
        echo "'},
                        function (data) {
                            if (!data.status) {
                                layer.alert(data.msg);
                                return;
                            }

                            reload_table('categories');
                            layer.msg(data.msg, {time: 1500});
                        }, 'json'
                    );

                    layer.close(index);
                });
            }
        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/SystemAdministration/ArticleCategory/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 165,  269 => 164,  197 => 95,  193 => 93,  191 => 92,  188 => 91,  179 => 90,  163 => 83,  142 => 65,  128 => 53,  119 => 52,  90 => 32,  69 => 14,  60 => 7,  51 => 6,  41 => 1,  39 => 4,  37 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ('/Admin/Common/layout.twig') %}
{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

{% set title = '文章公告分类管理' %}

{% block main_content %}
    <div class=\"layui-fluid\">
        <div class=\"layui-card\">
            <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
                <form class=\"layui-form-item\" id=\"categories\">
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">平台</label>
                        <div class=\"layui-input-inline\">
                            {{ sf.select_raw('portal_id', to_options(constant('App\\\\Platform::PLATFORMS'), \"全部\"), {'id': 'all_portals', ' lay-filter': \"portal_id\"}) }}
                        </div>
                    </div>
                    <div class=\"layui-inline\">
                        <div class=\"layui-input-block layui-input-block-margin\">
                            <button type=\"button\" class=\"layui-btn layuiadmin-btn-useradmin\" onclick=\"reload_table('categories')\">
                                <i class=\"layui-icon layui-icon-search layuiadmin-button-btn\"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class=\"layui-card-body\">
                <div style=\"padding: 5px 0;\">
                    <button class=\"layui-btn layuiadmin-btn-useradmin\" onclick=\"show_category_edit_dialog(null)\">新增分类
                    </button>
                </div>

                <table id=\"categories\" class=\"layui-table\" lay-data=\"{url:'{{ path('admin_system_administration_articles_categories', {'_format': 'json'}) }}', page:true, id:'categories', method:'get'}\" lay-filter=\"table\">
                    <thead>
                    <tr>
                        <th lay-data=\"{field:'id', width:50, align: 'center'}\">ID</th>
                        <th lay-data=\"{field:'portal_name', width:240, align: 'center'}\">平台</th>
                        <th lay-data=\"{field:'parent_cate_name', width:120, align: 'center'}\">父分类名称</th>
                        <th lay-data=\"{field:'name', align: 'center'}\">分类名称</th>
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
    <div id=\"edit-form-dlg\" class=\"layui-card\" style=\"display: none;\">
        <div class=\"layui-card-body\">
            <form id=\"edit-form\" class=\"layui-form\" lay-filter=\"edit-form\">
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\"></label>
                    <div class=\"layui-input-inline\">
                        带 * 号的为必填项
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">平台 *</label>
                    <div class=\"layui-input-inline\">
                        {{ sf.select_raw('portal_id', to_options(constant('App\\\\Platform::PLATFORMS'), \"全部\"), {'lay-filter': \"portal_id\"}) }}
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">父分类 *</label>
                    <div class=\"layui-input-inline\">
                        <select name=\"parent_id\" id=\"parent_id\">
                            <option value=\"\"></option>
                        </select>
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">分类名称 *</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"name\" class=\"layui-input\">
                    </div>
                </div>
                <input type=\"hidden\" name=\"id\" value=\"\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('admin_system_administration_articles_categories_save') }}\">
            </form>
        </div>
    </div>

{% endblock %}

{% block js_end %}
    <script>
        {% include \"/Admin/SystemAdministration/ArticleCategory/article_category.js.twig\" %}

        function save_category(callback) {
            \$.post('{{ path('admin_system_administration_articles_categories_save') }}',
                \$('#edit-form').serialize(),
                function (data) {
                    if (data.status) {
                        callback(true);
                        reload_table('categories');
                        layer.msg(data.msg, {time: 1500});
                    }

                    layer.msg(data.msg);
                    callback(false);

                    if (data.errors) {
                        \$.each(data.errors, function (key, error) {
                            createAlertMsg(\$('#' + key), '* 填写错误', false);
                        });
                    }
                }, 'json'
            );
        }

        function show_category_edit_dialog(data) {
            \$('#edit-form')[0].reset();
            \$('.error').html('');
            \$('.error').hide();
            \$('.tips').show();

            if (data) {
                get_categories(data.portal_id, function (cates) {
                    layui.form.val(\"edit-form\", {
                        \"id\":          data.id
                        , \"portal_id\": data.portal_id
                        , \"parent_id\": data.parent_id
                        , \"name\":      data.name
                    });

                    form.render('select'); //这个很重要
                });
            }

            layer.open({
                title:    data ? '编辑分类' : '新增分类',
                type:     1,
                area:     ['500px', '400px'],
                content:  \$('#edit-form-dlg'),
                closeBtn: false,
                btn:      ['保存', '取消'],
                yes:      function (index, layero) {
                    save_category(function (succeed) {
                        if (succeed) {
                            layer.close(index);
                            \$('#edit-form-dlg').toggle();
                        }
                    });
                },
                btn2:     function (index, layero) {
                    layer.close(index);
                    \$('#edit-form-dlg').toggle();
                }
            });
        }

        layui.table.on('tool(table)', function (row) {
            var data = row.data;
            if (row.event === 'edit') {
                console.log(row.data);
                show_category_edit_dialog(row.data);
            } else if (row.event === 'del') {
                layer.confirm('确认要删除吗？', function (index) {
                    \$.post('{{ path('admin_system_administration_articles_categories_delete') }}',
                        {id: data.id, _token: '{{ csrf_token('admin_system_administration_articles_categories_delete') }}'},
                        function (data) {
                            if (!data.status) {
                                layer.alert(data.msg);
                                return;
                            }

                            reload_table('categories');
                            layer.msg(data.msg, {time: 1500});
                        }, 'json'
                    );

                    layer.close(index);
                });
            }
        });

    </script>
{% endblock %}
", "Admin/SystemAdministration/ArticleCategory/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\SystemAdministration\\ArticleCategory\\index.twig");
    }
}
