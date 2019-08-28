<?php

/* Admin/ProductManagement/Region/index.twig */
class __TwigTemplate_c696215ed96189e33f62a15e9f4026b8cbb383c46b088f3a83f5a78da2e4220c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/Admin/Common/layout.twig", "Admin/ProductManagement/Region/index.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/ProductManagement/Region/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/ProductManagement/Region/index.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Admin/ProductManagement/Region/index.twig", 2);
        // line 4
        $context["title"] = "地区管理 - 商品属性管理";
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
            <div class=\"layui-form-pane layui-card-header\">
                <form class=\"layui-form foxdou-row horizon-form\" id=\"search-form\">
                    <div class=\"layui-form-item\" style=\"margin-bottom: 0;\">
                        ";
        // line 12
        echo $context["sf"]->macro_select(twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new Twig_Error_Runtime('Variable "search_form" does not exist.', 12, $this->source); })()), "province_code", array()), null, $this->extensions['App\Common\Twig\AppExtension']->toOptions("App\\Common\\Model\\Region::PROVINCE_FULL_NAMES", "省份/直辖市"), array("outer" => "inline"), array("id" => "search_province_code", "lay-filter" => "search_province_code"));
        echo "
                        ";
        // line 13
        echo $context["sf"]->macro_select(twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new Twig_Error_Runtime('Variable "search_form" does not exist.', 13, $this->source); })()), "city_code", array()), null, array(), array("outer" => "inline"), array("id" => "search_city_code"));
        echo "
                        ";
        // line 14
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new Twig_Error_Runtime('Variable "search_form" does not exist.', 14, $this->source); })()), "search", array()), null, array("outer" => "inline"), array("placeholder" => "搜索"));
        echo "
                        ";
        // line 15
        echo $context["sf"]->macro_button(null, "搜索", null, array("outer" => "inline"), array("onclick" => "reload_table()"));
        echo "
                    </div>
                </form>
            </div>
            <div class=\"layui-card-body\">
                <div style=\"padding: 5px 0;\">
                    <button class=\"layui-btn layuiadmin-btn-useradmin\" onclick=\"show_edit_dialog(null)\">新增地区</button>
                </div>
                <table id=\"table\" class=\"layui-table\" lay-data=\"{url:'";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_regions_index");
        echo "', page:true, id:'table', method:'get'}\" lay-filter=\"table\">
                    <thead>
                    <tr>
                        <th lay-data=\"{field:'id', width:100, align: 'center'}\">ID</th>
                        <th lay-data=\"{field:'area_name', align: 'center'}\">地区名称</th>
                        <th lay-data=\"{field:'level', width:100, align: 'center'}\">级别</th>
                        <th lay-data=\"{field:'province_name', width:100, align: 'center'}\">省/直辖市</th>
                        <th lay-data=\"{field:'province_code', width:100, align: 'center'}\">省/直辖市代码</th>
                        <th lay-data=\"{field:'city_name', width:150, align: 'center'}\">市/区</th>
                        <th lay-data=\"{field:'city_code', width:100, align: 'center'}\">市/区代码</th>
                        <th lay-data=\"{field:'zipcode', width:150, align: 'center'}\">邮编</th>
                        <th lay-data=\"{align:'center', toolbar: '#actions', width:'12%'}\">操作</th>
                    </tr>
                    </thead>
                </table>
                <script type=\"text/html\" id=\"actions\">
                    <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"edit\">编辑</a>
                    <a class=\"layui-btn layui-btn-danger layui-btn-xs\" lay-event=\"delete\">删除</a>
                </script>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_extra($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        // line 48
        echo "    <div class=\"layui-card\" id=\"edit-area\" style=\"display: none;\">
        <div class=\"layui-card-body\">
            <form id=\"edit-form\" class=\"layui-form\" lay-filter=\"edit-form\">
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\"></label>
                    <div class=\"layui-input-inline\">
                        带 * 号的为必填项
                    </div>
                </div>

                ";
        // line 59
        echo "                ";
        // line 60
        echo "                    ";
        // line 61
        echo "                    ";
        // line 62
        echo "                    ";
        // line 63
        echo "                    ";
        // line 64
        echo "                    ";
        // line 65
        echo "                    ";
        // line 66
        echo "                    ";
        // line 67
        echo "                    ";
        // line 68
        echo "                    ";
        // line 69
        echo "                    ";
        // line 70
        echo "                ";
        // line 71
        echo "                ";
        // line 72
        echo "
                <div class=\"layui-form-item select-box\">
                    <label class=\"layui-form-label\">省份/直辖市</label>
                    <div class=\"layui-input-block\">
                        <input value=\"\" type=\"text\" autocomplete=\"on\" class=\"layui-input\" id=\"city-picker\" name=\"city-picker\" readonly=\"readonly\" data-toggle=\"city-picker\" placeholder=\"请选择\" style=\"width: 420px;\">
                    </div>
                </div>

                ";
        // line 80
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 80, $this->source); })()), "area_code", array()), "地区编码");
        echo "
                ";
        // line 81
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 81, $this->source); })()), "area_name", array()), "地区名称");
        echo "
                ";
        // line 82
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 82, $this->source); })()), "short_name", array()), "短名称");
        echo "
                ";
        // line 83
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 83, $this->source); })()), "sort", array()), "在上级地区中的排序", array("tips" => "序号越小，排序越靠前"));
        echo "
                ";
        // line 84
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 84, $this->source); })()), "zipcode", array()), "邮政编码");
        echo "

                ";
        // line 86
        echo $context["sf"]->macro_hidden(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 86, $this->source); })()), "id", array()));
        echo "
                ";
        // line 87
        echo $context["sf"]->macro_csrf("edit_region");
        echo "
            </form>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 95
        echo "    <script src=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_regions_city_picker_data");
        echo "\"></script>

    ";
        // line 98
        echo "    ";
        echo $this->extensions['App\Common\Twig\AppExtension']->useAssets(array(0 => "/assets/common/components/city-picker/city-picker.css", 1 => "/assets/common/components/city-picker/city-picker.impl.js"));
        // line 101
        echo "

    <script>

        var picker = new layui.citypicker(\"#city-picker\", {
            level: 'city_code'// 级别
            // simple: false, // 是否使用简称，比如北京市简称北京
            // responsive: false,
            // placeholder: '请选择省/市/区',
            // level: 'district',// 级别
            // province_widget_name: 'province_code',//input hidden 的name属性
            // city_widget_name: 'city_code',    //input hidden 的name属性
            // district_widget_name: 'district_code',//input hidden 的name属性
        });

        form.on('select(search_province_code)', function(data){
            console.log(data.value); //得到被选中的值
            axios.get('";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_regions_cities");
        echo "?province_code=' + data.value)
                .then(function (response) {
                    console.log(response);
                    var options = '<option value=\"\">市/区</option>';
                    var cities = response.data.data;
                    \$.each(cities, function (index, item) {
                        options += '<option value=\"' + item.id + '\">' + item.area_name + '</option>';
                    });
                    \$('#search_city_code').html(options);
                    layui.form.render('select');
                })
                .catch(function (error) {
                    layer.msg('服务器返回数据错误，请重试');
                })
        });
        form.on('select(province_code)', function(data){
            console.log(data.value); //得到被选中的值
            axios.get('";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_regions_cities");
        echo "?province_code=' + data.value)
                .then(function (response) {
                    console.log(response);
                    var options = '<option value=\"\">市/区</option>';
                    var cities = response.data.data;
                    \$.each(cities, function (index, item) {
                        options += '<option value=\"' + item.id + '\">' + item.area_name + '</option>';
                    });
                    \$('#city_code').html(options);
                    layui.form.render('select');
                })
                .catch(function (error) {
                    layer.msg('服务器返回数据错误，请重试');
                })
        });
        form.on('select(city_code)', function(data){
            console.log(data.value); //得到被选中的值
            axios.get('";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_regions_districts");
        echo "?city_code=' + data.value)
                .then(function (response) {
                    console.log(response);
                    var options = '<option value=\"\">区/县</option>';
                    var cities = response.data.data;
                    \$.each(cities, function (index, item) {
                        options += '<option value=\"' + item.id + '\">' + item.area_name + '</option>';
                    });
                    \$('#district_code').html(options);
                    layui.form.render('select');
                })
                .catch(function (error) {
                    layer.msg('服务器返回数据错误，请重试');
                })
        });

        layui.table.on('tool(table)', function (row) {
            var data = row.data;
            if (row.event === 'edit') {
                console.log(row.data);
                show_edit_dialog(row.data);
            } else if (row.event === 'delete') {
                layer.confirm('确认要删除吗？', function (index) {
                    var form_data = {id: data.id, _token: '";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_regions_delete"), "html", null, true);
        echo "'};
                    axios.post('";
        // line 176
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_regions_delete");
        echo "', form_data)
                        .then(function (response) {
                            if(response.data.msg) {
                                layer.msg(response.data.msg)
                            }

                            if(response.data.status) {
                                reload_table();
                            }
                        })
                        .catch(function (error) {
                            console.log(error);
                            layer.msg('服务器未响应，请稍后重试')
                        });
                });
            }
        });

        function reload_table() {
            table.reload('table', {
                where: \$('#search-form').serializeJSON()
            });
        }

        function show_edit_dialog(data) {
            picker.reset();
            \$('#edit-form')[0].reset();

            if (data) {
                if(data.level === '1') {
                    picker.pick({});
                } else if(data.level === '2') {
                    picker.pick({province_code: data.province_code});
                } else if(data.level === '3') {
                    picker.pick({province_code: data.province_code || null, city_code: data.city_code});
                }

                layui.form.val(\"edit-form\", {
                    \"id\":  data.id
                    , \"area_name\":     data.area_name
                    , \"area_code\":     data.area_code
                    , \"short_name\":     data.short_name
                    , \"sort\":     data.sort
                    , \"zipcode\":   data.zipcode
                });
            }

            layer.open({
                title:    data ? '编辑' : '新增',
                type:     1,
                area:     ['600px', 'auto'],
                content:  \$('#edit-area'),
                closeBtn: false,
                btn:      ['保存', '取消'],
                yes:      function (index, layero) {
                    var loading = layer.load();

                    axios.post('";
        // line 233
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_regions_save");
        echo "', \$('#edit-form').serializeJSON())
                        .then(function (response) {
                            layer.close(loading);
                            if(response.data.msg) {
                                layer.msg(response.data.msg)
                            }

                            if(response.data.status) {
                                layer.close(index);
                                \$('#edit-area').hide();
                                reload_table();
                            }
                        })
                        .catch(function (error) {
                            console.log(error);
                            layer.close(loading);
                            layer.msg('服务器未响应，请稍后重试')
                        });
                },
                btn2:     function (index, layero) {
                    layer.close(index);
                    \$('#edit-area').toggle();
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
        return "Admin/ProductManagement/Region/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 233,  327 => 176,  323 => 175,  297 => 152,  277 => 135,  257 => 118,  238 => 101,  235 => 98,  229 => 95,  220 => 94,  205 => 87,  201 => 86,  196 => 84,  192 => 83,  188 => 82,  184 => 81,  180 => 80,  170 => 72,  168 => 71,  166 => 70,  164 => 69,  162 => 68,  160 => 67,  158 => 66,  156 => 65,  154 => 64,  152 => 63,  150 => 62,  148 => 61,  146 => 60,  144 => 59,  132 => 48,  123 => 47,  90 => 23,  79 => 15,  75 => 14,  71 => 13,  67 => 12,  60 => 7,  51 => 6,  41 => 1,  39 => 4,  37 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ('/Admin/Common/layout.twig') %}
{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

{% set title = '地区管理 - 商品属性管理' %}

{% block main_content %}
    <div class=\"layui-fluid\">
        <div class=\"layui-card\">
            <div class=\"layui-form-pane layui-card-header\">
                <form class=\"layui-form foxdou-row horizon-form\" id=\"search-form\">
                    <div class=\"layui-form-item\" style=\"margin-bottom: 0;\">
                        {{ sf.select(search_form.province_code, null, to_options('App\\\\Common\\\\Model\\\\Region::PROVINCE_FULL_NAMES', \"省份/直辖市\"), {'outer': 'inline'}, {'id': 'search_province_code', 'lay-filter': 'search_province_code'}) }}
                        {{ sf.select(search_form.city_code, null, {}, {'outer': 'inline'}, {'id': 'search_city_code'}) }}
                        {{ sf.text(search_form.search, null, {'outer': 'inline'}, {'placeholder': '搜索'}) }}
                        {{ sf.button(null, '搜索', null, {'outer': 'inline'}, {'onclick': 'reload_table()'}) }}
                    </div>
                </form>
            </div>
            <div class=\"layui-card-body\">
                <div style=\"padding: 5px 0;\">
                    <button class=\"layui-btn layuiadmin-btn-useradmin\" onclick=\"show_edit_dialog(null)\">新增地区</button>
                </div>
                <table id=\"table\" class=\"layui-table\" lay-data=\"{url:'{{ path('admin_regions_index') }}', page:true, id:'table', method:'get'}\" lay-filter=\"table\">
                    <thead>
                    <tr>
                        <th lay-data=\"{field:'id', width:100, align: 'center'}\">ID</th>
                        <th lay-data=\"{field:'area_name', align: 'center'}\">地区名称</th>
                        <th lay-data=\"{field:'level', width:100, align: 'center'}\">级别</th>
                        <th lay-data=\"{field:'province_name', width:100, align: 'center'}\">省/直辖市</th>
                        <th lay-data=\"{field:'province_code', width:100, align: 'center'}\">省/直辖市代码</th>
                        <th lay-data=\"{field:'city_name', width:150, align: 'center'}\">市/区</th>
                        <th lay-data=\"{field:'city_code', width:100, align: 'center'}\">市/区代码</th>
                        <th lay-data=\"{field:'zipcode', width:150, align: 'center'}\">邮编</th>
                        <th lay-data=\"{align:'center', toolbar: '#actions', width:'12%'}\">操作</th>
                    </tr>
                    </thead>
                </table>
                <script type=\"text/html\" id=\"actions\">
                    <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"edit\">编辑</a>
                    <a class=\"layui-btn layui-btn-danger layui-btn-xs\" lay-event=\"delete\">删除</a>
                </script>
            </div>
        </div>
    </div>
{% endblock %}

{% block extra %}
    <div class=\"layui-card\" id=\"edit-area\" style=\"display: none;\">
        <div class=\"layui-card-body\">
            <form id=\"edit-form\" class=\"layui-form\" lay-filter=\"edit-form\">
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\"></label>
                    <div class=\"layui-input-inline\">
                        带 * 号的为必填项
                    </div>
                </div>

                {#<div class=\"layui-form-item\">#}
                {#<div class=\"layui-inline\">#}
                    {#<label class=\"layui-form-label\">上级地区 *</label>#}
                    {#<div class=\"layui-input-inline\">#}
                    {#{{ sf.select_raw(edit_form.province_code, to_options('App\\\\Common\\\\Model\\\\Region::PROVINCE_FULL_NAMES', \"省份/直辖市\"), {'lay-filter': 'province_code'}) }}#}
                    {#</div>#}
                    {#<div class=\"layui-input-inline\">#}
                    {#{{ sf.select_raw(edit_form.city_code, {}, {'lay-filter': 'city_code'}) }}#}
                    {#</div>#}
                    {#<div class=\"layui-input-inline\">#}
                    {#{{ sf.select_raw(edit_form.district_code, {}, {'lay-filter': ''}) }}#}
                    {#</div>#}
                {#</div>#}
                {#</div>#}

                <div class=\"layui-form-item select-box\">
                    <label class=\"layui-form-label\">省份/直辖市</label>
                    <div class=\"layui-input-block\">
                        <input value=\"\" type=\"text\" autocomplete=\"on\" class=\"layui-input\" id=\"city-picker\" name=\"city-picker\" readonly=\"readonly\" data-toggle=\"city-picker\" placeholder=\"请选择\" style=\"width: 420px;\">
                    </div>
                </div>

                {{ sf.text(edit_form.area_code, '地区编码') }}
                {{ sf.text(edit_form.area_name, '地区名称') }}
                {{ sf.text(edit_form.short_name, '短名称') }}
                {{ sf.text(edit_form.sort, '在上级地区中的排序', {'tips': '序号越小，排序越靠前'}) }}
                {{ sf.text(edit_form.zipcode, '邮政编码') }}

                {{ sf.hidden(edit_form.id) }}
                {{ sf.csrf('edit_region') }}
            </form>
        </div>
    </div>
{% endblock %}


{% block js_end %}
    <script src=\"{{ url('admin_regions_city_picker_data') }}\"></script>

    {#'/assets/common/components/city-picker/city-picker.data.js',#}
    {{ use_assets([
        '/assets/common/components/city-picker/city-picker.css',
        '/assets/common/components/city-picker/city-picker.impl.js'
    ]) }}

    <script>

        var picker = new layui.citypicker(\"#city-picker\", {
            level: 'city_code'// 级别
            // simple: false, // 是否使用简称，比如北京市简称北京
            // responsive: false,
            // placeholder: '请选择省/市/区',
            // level: 'district',// 级别
            // province_widget_name: 'province_code',//input hidden 的name属性
            // city_widget_name: 'city_code',    //input hidden 的name属性
            // district_widget_name: 'district_code',//input hidden 的name属性
        });

        form.on('select(search_province_code)', function(data){
            console.log(data.value); //得到被选中的值
            axios.get('{{ path('admin_regions_cities') }}?province_code=' + data.value)
                .then(function (response) {
                    console.log(response);
                    var options = '<option value=\"\">市/区</option>';
                    var cities = response.data.data;
                    \$.each(cities, function (index, item) {
                        options += '<option value=\"' + item.id + '\">' + item.area_name + '</option>';
                    });
                    \$('#search_city_code').html(options);
                    layui.form.render('select');
                })
                .catch(function (error) {
                    layer.msg('服务器返回数据错误，请重试');
                })
        });
        form.on('select(province_code)', function(data){
            console.log(data.value); //得到被选中的值
            axios.get('{{ path('admin_regions_cities') }}?province_code=' + data.value)
                .then(function (response) {
                    console.log(response);
                    var options = '<option value=\"\">市/区</option>';
                    var cities = response.data.data;
                    \$.each(cities, function (index, item) {
                        options += '<option value=\"' + item.id + '\">' + item.area_name + '</option>';
                    });
                    \$('#city_code').html(options);
                    layui.form.render('select');
                })
                .catch(function (error) {
                    layer.msg('服务器返回数据错误，请重试');
                })
        });
        form.on('select(city_code)', function(data){
            console.log(data.value); //得到被选中的值
            axios.get('{{ path('admin_regions_districts') }}?city_code=' + data.value)
                .then(function (response) {
                    console.log(response);
                    var options = '<option value=\"\">区/县</option>';
                    var cities = response.data.data;
                    \$.each(cities, function (index, item) {
                        options += '<option value=\"' + item.id + '\">' + item.area_name + '</option>';
                    });
                    \$('#district_code').html(options);
                    layui.form.render('select');
                })
                .catch(function (error) {
                    layer.msg('服务器返回数据错误，请重试');
                })
        });

        layui.table.on('tool(table)', function (row) {
            var data = row.data;
            if (row.event === 'edit') {
                console.log(row.data);
                show_edit_dialog(row.data);
            } else if (row.event === 'delete') {
                layer.confirm('确认要删除吗？', function (index) {
                    var form_data = {id: data.id, _token: '{{ csrf_token('admin_regions_delete') }}'};
                    axios.post('{{ path(\"admin_regions_delete\") }}', form_data)
                        .then(function (response) {
                            if(response.data.msg) {
                                layer.msg(response.data.msg)
                            }

                            if(response.data.status) {
                                reload_table();
                            }
                        })
                        .catch(function (error) {
                            console.log(error);
                            layer.msg('服务器未响应，请稍后重试')
                        });
                });
            }
        });

        function reload_table() {
            table.reload('table', {
                where: \$('#search-form').serializeJSON()
            });
        }

        function show_edit_dialog(data) {
            picker.reset();
            \$('#edit-form')[0].reset();

            if (data) {
                if(data.level === '1') {
                    picker.pick({});
                } else if(data.level === '2') {
                    picker.pick({province_code: data.province_code});
                } else if(data.level === '3') {
                    picker.pick({province_code: data.province_code || null, city_code: data.city_code});
                }

                layui.form.val(\"edit-form\", {
                    \"id\":  data.id
                    , \"area_name\":     data.area_name
                    , \"area_code\":     data.area_code
                    , \"short_name\":     data.short_name
                    , \"sort\":     data.sort
                    , \"zipcode\":   data.zipcode
                });
            }

            layer.open({
                title:    data ? '编辑' : '新增',
                type:     1,
                area:     ['600px', 'auto'],
                content:  \$('#edit-area'),
                closeBtn: false,
                btn:      ['保存', '取消'],
                yes:      function (index, layero) {
                    var loading = layer.load();

                    axios.post('{{ path(\"admin_regions_save\") }}', \$('#edit-form').serializeJSON())
                        .then(function (response) {
                            layer.close(loading);
                            if(response.data.msg) {
                                layer.msg(response.data.msg)
                            }

                            if(response.data.status) {
                                layer.close(index);
                                \$('#edit-area').hide();
                                reload_table();
                            }
                        })
                        .catch(function (error) {
                            console.log(error);
                            layer.close(loading);
                            layer.msg('服务器未响应，请稍后重试')
                        });
                },
                btn2:     function (index, layero) {
                    layer.close(index);
                    \$('#edit-area').toggle();
                }
            });
        }
    </script>
{% endblock %}
", "Admin/ProductManagement/Region/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\ProductManagement\\Region\\index.twig");
    }
}
