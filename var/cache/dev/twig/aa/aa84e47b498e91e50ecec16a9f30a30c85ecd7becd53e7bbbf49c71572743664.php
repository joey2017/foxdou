<?php

/* /Supplier/Products/template_list_js.twig */
class __TwigTemplate_687b8793f44235dcf42e98298a11d9c7611574be713e3575f576ce340516fd42 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Supplier/Products/template_list_js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Supplier/Products/template_list_js.twig"));

        // line 1
        echo "<script>
    var sell_types = JSON.parse('";
        // line 2
        echo json_encode(twig_constant("App\\Constants::PRODUCT_CATEGORIES"));
        echo "');
    var auto_refunds = JSON.parse('";
        // line 3
        echo json_encode(twig_constant("App\\Common\\Model\\Product\\SellTemplate::AUTO_REFUNDS"));
        echo "');
    var supply_types = JSON.parse('";
        // line 4
        echo json_encode(twig_constant("App\\Common\\Model\\Product\\SellTemplate::SUPPLY_TYPES"));
        echo "');
    var statuses = JSON.parse('";
        // line 5
        echo json_encode(twig_constant("App\\Common\\Model\\Product\\SellTemplate::STATUSES"));
        echo "');
    var url = \"\";
    var columns = [[
        {\"field\": \"\", \"title\": \"\", type: \"checkbox\", \"width\": 50},
        {\"field\": \"id\", \"title\": \"模板编号\", \"width\": 150},
        {\"field\": \"name\", \"title\": \"模板名称\", \"width\": 150},
        {
            \"field\": \"sell_type\", \"title\": \"商品类型\", \"width\": 150, templet: function (d) {
                return sell_types[d.sell_type];
            }
        },
        {
            \"field\": \"status\", \"title\": \"商品启用状态\", \"width\": 150, templet: function (d) {
                return statuses[d.status];
            }
        },
        {
            \"field\": \"supply_type\", \"title\": \"供货方式\", templet: function (d) {
                return supply_types[d.supply_type];
            }
        },
        {
            \"field\": \"auto_tuikuan\", \"title\": \"自动退款\", templet: function (d) {
                return auto_refunds[d.auto_tuikuan];
            }
        },
        {
            \"field\": \"productNum\", \"title\": \"已上架商品/总数\", templet: function (d) {
                return d.activeNum + '/' + d.total;
            }
        },
        {\"field\": \"info\", \"title\": \"备注\"},
        {\"field\": \"add_time\", \"title\": \"创建时间\", templet: \"#add_time\"},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\", \"width\": 200}
    ]];

    function get_data() {
        var params = \$('form#template-list').serialize();
        url = '?' + params;
        rander_table('#template-list-table', url, columns);
    }

    var loading = null;
    var before = function () {
        loading = layer.load();
    }
    var error = function () {
        layer.close(loading);
        nxwd.showMsg('服务器未响应，请稍后重试');
    }
    var success = function (res) {
        layer.close(loading);
        if (res.status) {
            nxwd.showMsg(res.msg, 'success');
            location.reload();
        } else {
            nxwd.showMsg(res.msg, 'danger');
        }
    }

    // 初始化
    get_data();
    form.render();

    table.on('tool(template-list-table)', function (obj) {
        var data = obj.data;
        var layEvent = obj.event;

        if (layEvent === 'detail') { //查看模板下商品
            /*var args = {type: 1};

            args.title = '模板下商品列表';

            args.area = ['1200px', '700px'];

            var success = function(res){
                args.content = res;
                args.scrollbar = false;
                args.shadeClose = true;
                args.zIndex = 1031;

                layer.close(loading);
                var layerbox = layer.open(args);

                if(typeof(width) != 'undefined' && width == 'full')
                    layer.full(layerbox);
            };

            nxwd.ajaxRequest('";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_products_list");
        echo "', 'POST', {id:data.id,sell_type:data.sell_type}, 'html', success, before, error);*/
            window.location.href = '";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_products_list");
        echo "?template_id='+data.id+'&sell_type='+data.sell_type;
        }
        if (layEvent === 'edit') { //编辑
            \$('#name').val(data.name);
            \$('#info').val(data.info);
            \$('.sell_type').each(function (i, item) {
                if (\$(item).val() * 1 == data.sell_type * 1) {
                    \$(item).prop('checked', true);
                }
            });

            \$('.auto_tuikuan').each(function (i, item) {
                if (\$(item).val() * 1 == data.auto_tuikuan * 1) {
                    \$(item).prop('checked', true);
                }
            });

            \$('.supply_type').each(function (i, item) {
                if (\$(item).val() * 1 == data.supply_type * 1) {
                    \$(item).prop('checked', true);
                }
            });

            \$('.status').each(function (i, item) {
                if (\$(item).val() * 1 == data.status * 1) {
                    \$(item).prop('checked', true);
                }
            });
            form.render('radio');

            //nxwd.ajaxOpen('编辑模板','600px','550px','template');
            var yes = function (index) {
                layer.close(index);
                var args = {};
                args.id           = data.id;
                args.name         = \$('#name').val();
                args.sell_type    = \$('input[name=sell_type]:checked').val();
                args.supply_type  = \$('input[name=supply_type]:checked').val();
                args.auto_tuikuan = \$('input[name=auto_tuikuan]:checked').val();
                args.info         = \$('#info').val();
                args.status       = \$(\"input[name=status]:checked\").val();
                args._token  = \"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("supplier_products_edit_template"), "html", null, true);
        echo "\";

                if (args.name === '') {
                    nxwd.showMsg('模板名称不能为空');
                    return false;
                }
                nxwd.ajaxRequest('";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_edit_template");
        echo "', 'POST', args, 'json', success, before, error);
            }
            nxwd.ajaxOpenCallBack('编辑模板', 'template', '600px', '550px', yes);
        }
        if (layEvent === 'delete') { //删除
            nxwd.ajaxDelete('";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_del_template");
        echo "', this, false, data.id);
        }
    });

    var checked_ids = [];
    table.on('checkbox(template-list-table)', function (obj) {
        if (obj.checked) {
            checked_ids.push(obj.data.id);
        } else {
            checked_ids.remove(obj.data.id);
        }

    });

    \$(document).on('click', function (e) {
        var target = \$(e.target);
        if (target.is('#negative') || target.parents().is('#negative')) {
            \$('.layui-table-box').find('input:checkbox').next().each(function () {
                \$(this).toggleClass('layui-form-checked');
            })
        } else if (target.is('#add') || target.parents().is('#add')) {
            \$('#name').val('');
            \$('#info').val('');
            \$('.sell_type').first().prop('checked',true);
            \$('.supply_type').first().prop('checked',true);
            \$('.auto_tuikuan').first().prop('checked',true);
            \$('.status').first().prop('checked',true);
            form.render('radio');
            //nxwd.ajaxOpen('新增模板', '600px', '550px', 'template');
            var yes = function (index) {
                layer.close(index);
                var args = {};
                args.name         = \$('#name').val();
                args.sell_type    = \$('input[name=sell_type]:checked').val();
                args.supply_type  = \$('input[name=supply_type]:checked').val();
                args.auto_tuikuan = \$('input[name=auto_tuikuan]:checked').val();
                args.info         = \$('#info').val();
                args.status       = \$(\"input[name=status]:checked\").val();
                args._token  = \$('#csrf_token').val();

                if (args.name === '') {
                    nxwd.showMsg('模板名称不能为空');
                    return false;
                }
                nxwd.ajaxRequest('";
        // line 190
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_add_template");
        echo "', 'POST', args, 'json', success, before, error);
            }
            nxwd.ajaxOpenCallBack('编辑模板', 'template', '600px', '550px', yes);
        } else if (target.is('#enable') || target.parents().is('#enable')) {
            templateOperation('";
        // line 194
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_change_status");
        echo "', checked_ids, 1);
        } else if (target.is('#disable') || target.parents().is('#disable')) {
            templateOperation('";
        // line 196
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_change_status");
        echo "', checked_ids, 0);
        } else if (target.is('#delete') || target.parents().is('#delete')) {
            nxwd.ajaxDelete('";
        // line 198
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_del_template");
        echo "', e.target, true);
        }
    });

    /**
     * 模板启用/停用
     * @param url           // 请求url
     * @param id            // 项目ID
     * @param status        // 通过或不通过 1,4 | 停止或启用 0,1
     */
    function templateOperation(url, id, status) {

        if (id === '' || typeof id == 'undefined' || id == null) {
            nxwd.showMsg('项目id不能为空');
            return false;
        }

        if (status === '') {
            nxwd.showMsg('参数有误');
            return false;
        }

        var ok = layer.confirm('您确定要执行该操作吗？', {icon: 3, title: '系统提示'}, function () {
            layer.close(ok);
            nxwd.ajaxRequest(url, 'POST', {id: id, status: status}, 'json', success, before, error);
        });
    }
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/Supplier/Products/template_list_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 198,  259 => 196,  254 => 194,  247 => 190,  200 => 146,  192 => 141,  183 => 135,  139 => 94,  135 => 93,  44 => 5,  40 => 4,  36 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    var sell_types = JSON.parse('{{ constant(\"App\\\\Constants::PRODUCT_CATEGORIES\")|json_encode|raw }}');
    var auto_refunds = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Product\\\\SellTemplate::AUTO_REFUNDS\")|json_encode|raw }}');
    var supply_types = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Product\\\\SellTemplate::SUPPLY_TYPES\")|json_encode|raw }}');
    var statuses = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Product\\\\SellTemplate::STATUSES\")|json_encode|raw }}');
    var url = \"\";
    var columns = [[
        {\"field\": \"\", \"title\": \"\", type: \"checkbox\", \"width\": 50},
        {\"field\": \"id\", \"title\": \"模板编号\", \"width\": 150},
        {\"field\": \"name\", \"title\": \"模板名称\", \"width\": 150},
        {
            \"field\": \"sell_type\", \"title\": \"商品类型\", \"width\": 150, templet: function (d) {
                return sell_types[d.sell_type];
            }
        },
        {
            \"field\": \"status\", \"title\": \"商品启用状态\", \"width\": 150, templet: function (d) {
                return statuses[d.status];
            }
        },
        {
            \"field\": \"supply_type\", \"title\": \"供货方式\", templet: function (d) {
                return supply_types[d.supply_type];
            }
        },
        {
            \"field\": \"auto_tuikuan\", \"title\": \"自动退款\", templet: function (d) {
                return auto_refunds[d.auto_tuikuan];
            }
        },
        {
            \"field\": \"productNum\", \"title\": \"已上架商品/总数\", templet: function (d) {
                return d.activeNum + '/' + d.total;
            }
        },
        {\"field\": \"info\", \"title\": \"备注\"},
        {\"field\": \"add_time\", \"title\": \"创建时间\", templet: \"#add_time\"},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\", \"width\": 200}
    ]];

    function get_data() {
        var params = \$('form#template-list').serialize();
        url = '?' + params;
        rander_table('#template-list-table', url, columns);
    }

    var loading = null;
    var before = function () {
        loading = layer.load();
    }
    var error = function () {
        layer.close(loading);
        nxwd.showMsg('服务器未响应，请稍后重试');
    }
    var success = function (res) {
        layer.close(loading);
        if (res.status) {
            nxwd.showMsg(res.msg, 'success');
            location.reload();
        } else {
            nxwd.showMsg(res.msg, 'danger');
        }
    }

    // 初始化
    get_data();
    form.render();

    table.on('tool(template-list-table)', function (obj) {
        var data = obj.data;
        var layEvent = obj.event;

        if (layEvent === 'detail') { //查看模板下商品
            /*var args = {type: 1};

            args.title = '模板下商品列表';

            args.area = ['1200px', '700px'];

            var success = function(res){
                args.content = res;
                args.scrollbar = false;
                args.shadeClose = true;
                args.zIndex = 1031;

                layer.close(loading);
                var layerbox = layer.open(args);

                if(typeof(width) != 'undefined' && width == 'full')
                    layer.full(layerbox);
            };

            nxwd.ajaxRequest('{{ path(\"supplier_products_products_list\") }}', 'POST', {id:data.id,sell_type:data.sell_type}, 'html', success, before, error);*/
            window.location.href = '{{ path(\"supplier_products_products_list\") }}?template_id='+data.id+'&sell_type='+data.sell_type;
        }
        if (layEvent === 'edit') { //编辑
            \$('#name').val(data.name);
            \$('#info').val(data.info);
            \$('.sell_type').each(function (i, item) {
                if (\$(item).val() * 1 == data.sell_type * 1) {
                    \$(item).prop('checked', true);
                }
            });

            \$('.auto_tuikuan').each(function (i, item) {
                if (\$(item).val() * 1 == data.auto_tuikuan * 1) {
                    \$(item).prop('checked', true);
                }
            });

            \$('.supply_type').each(function (i, item) {
                if (\$(item).val() * 1 == data.supply_type * 1) {
                    \$(item).prop('checked', true);
                }
            });

            \$('.status').each(function (i, item) {
                if (\$(item).val() * 1 == data.status * 1) {
                    \$(item).prop('checked', true);
                }
            });
            form.render('radio');

            //nxwd.ajaxOpen('编辑模板','600px','550px','template');
            var yes = function (index) {
                layer.close(index);
                var args = {};
                args.id           = data.id;
                args.name         = \$('#name').val();
                args.sell_type    = \$('input[name=sell_type]:checked').val();
                args.supply_type  = \$('input[name=supply_type]:checked').val();
                args.auto_tuikuan = \$('input[name=auto_tuikuan]:checked').val();
                args.info         = \$('#info').val();
                args.status       = \$(\"input[name=status]:checked\").val();
                args._token  = \"{{ csrf_token('supplier_products_edit_template') }}\";

                if (args.name === '') {
                    nxwd.showMsg('模板名称不能为空');
                    return false;
                }
                nxwd.ajaxRequest('{{ path(\"supplier_products_edit_template\") }}', 'POST', args, 'json', success, before, error);
            }
            nxwd.ajaxOpenCallBack('编辑模板', 'template', '600px', '550px', yes);
        }
        if (layEvent === 'delete') { //删除
            nxwd.ajaxDelete('{{ path(\"supplier_products_del_template\") }}', this, false, data.id);
        }
    });

    var checked_ids = [];
    table.on('checkbox(template-list-table)', function (obj) {
        if (obj.checked) {
            checked_ids.push(obj.data.id);
        } else {
            checked_ids.remove(obj.data.id);
        }

    });

    \$(document).on('click', function (e) {
        var target = \$(e.target);
        if (target.is('#negative') || target.parents().is('#negative')) {
            \$('.layui-table-box').find('input:checkbox').next().each(function () {
                \$(this).toggleClass('layui-form-checked');
            })
        } else if (target.is('#add') || target.parents().is('#add')) {
            \$('#name').val('');
            \$('#info').val('');
            \$('.sell_type').first().prop('checked',true);
            \$('.supply_type').first().prop('checked',true);
            \$('.auto_tuikuan').first().prop('checked',true);
            \$('.status').first().prop('checked',true);
            form.render('radio');
            //nxwd.ajaxOpen('新增模板', '600px', '550px', 'template');
            var yes = function (index) {
                layer.close(index);
                var args = {};
                args.name         = \$('#name').val();
                args.sell_type    = \$('input[name=sell_type]:checked').val();
                args.supply_type  = \$('input[name=supply_type]:checked').val();
                args.auto_tuikuan = \$('input[name=auto_tuikuan]:checked').val();
                args.info         = \$('#info').val();
                args.status       = \$(\"input[name=status]:checked\").val();
                args._token  = \$('#csrf_token').val();

                if (args.name === '') {
                    nxwd.showMsg('模板名称不能为空');
                    return false;
                }
                nxwd.ajaxRequest('{{ path(\"supplier_products_add_template\") }}', 'POST', args, 'json', success, before, error);
            }
            nxwd.ajaxOpenCallBack('编辑模板', 'template', '600px', '550px', yes);
        } else if (target.is('#enable') || target.parents().is('#enable')) {
            templateOperation('{{ path(\"supplier_products_change_status\") }}', checked_ids, 1);
        } else if (target.is('#disable') || target.parents().is('#disable')) {
            templateOperation('{{ path(\"supplier_products_change_status\") }}', checked_ids, 0);
        } else if (target.is('#delete') || target.parents().is('#delete')) {
            nxwd.ajaxDelete('{{ path(\"supplier_products_del_template\") }}', e.target, true);
        }
    });

    /**
     * 模板启用/停用
     * @param url           // 请求url
     * @param id            // 项目ID
     * @param status        // 通过或不通过 1,4 | 停止或启用 0,1
     */
    function templateOperation(url, id, status) {

        if (id === '' || typeof id == 'undefined' || id == null) {
            nxwd.showMsg('项目id不能为空');
            return false;
        }

        if (status === '') {
            nxwd.showMsg('参数有误');
            return false;
        }

        var ok = layer.confirm('您确定要执行该操作吗？', {icon: 3, title: '系统提示'}, function () {
            layer.close(ok);
            nxwd.ajaxRequest(url, 'POST', {id: id, status: status}, 'json', success, before, error);
        });
    }
</script>
", "/Supplier/Products/template_list_js.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Supplier\\Products\\template_list_js.twig");
    }
}
