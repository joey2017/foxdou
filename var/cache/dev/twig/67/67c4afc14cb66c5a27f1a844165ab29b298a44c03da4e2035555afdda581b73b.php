<?php

/* Supplier/Products/template_products_tencent_list.twig */
class __TwigTemplate_539ca5ea8289bc268f6d4e42f23c7322d8c17a9cfe4eb6a78b3fb553cb48809a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("Supplier/Common/layout.twig", "Supplier/Products/template_products_tencent_list.twig", 2);
        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
            'js_end' => array($this, 'block_js_end'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Supplier/Common/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Supplier/Products/template_products_tencent_list.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Supplier/Products/template_products_tencent_list.twig"));

        // line 1
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Supplier/Products/template_products_tencent_list.twig", 1);
        // line 3
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers.html.twig", "Supplier/Products/template_products_tencent_list.twig", 3);
        // line 2
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
        echo "    <style>
        .cost,.percent{height:28px}
    </style>
<div style=\"margin-left: 200px;padding:15px\">
    ";
        // line 9
        if ((isset($context["add_exist_product"]) || array_key_exists("add_exist_product", $context) ? $context["add_exist_product"] : (function () { throw new Twig_Error_Runtime('Variable "add_exist_product" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "        <div style=\"font-size: 16px;\">添加已有商品</div>
    ";
        } else {
            // line 12
            echo "        <button class=\"layui-btn layui-btn-normal add-exist\">添加已有商品</button>
        <button class=\"layui-btn layui-btn-normal add-new\">创建新商品并添加</button>
    ";
        }
        // line 15
        echo "</div>
<div class=\"foxdou-row foxdou-row-notm\">
    <div class=\"foxdou-form-row\" style=\"margin-left: 200px;\">
        <form class=\"layui-form layui-form-pane\" action=\"\" id=\"tencent-template-list\">
            <div class=\"layui-form-item\">
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">面值类型</label>
                    <div class=\"layui-input-block foxdou-select-length\">
                        ";
        // line 23
        echo $context["sf"]->macro_select_raw("renyi_type", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\Product\\ProductCommon::RENYI_TYPES"), "全部"), array("class" => "layui-input"));
        echo "
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">商品上下架状态</label>
                    <div class=\"layui-input-block foxdou-select-length\">
                        ";
        // line 29
        echo $context["sf"]->macro_select_raw("status", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\Product\\ProductCommonTemplateRelation::STATUSES"), "全部"), array("class" => "layui-input"));
        echo "
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">商品审核状态</label>
                    <div class=\"layui-input-block foxdou-select-length\">
                        ";
        // line 35
        echo $context["sf"]->macro_select_raw("review_status", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\Product\\ProductCommonTemplateRelation::REVIEW_STATUSES"), "全部"), array("class" => "layui-input"));
        echo "
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">商品在模板中的启用状态</label>
                    <div class=\"layui-input-block foxdou-select-length\">
                        ";
        // line 41
        echo $context["sf"]->macro_select_raw("sell_status", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\Product\\ProductCommonTemplateRelation::SELL_STATUSES"), "全部"), array("class" => "layui-input"));
        echo "
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">日期范围</label>
                    <div class=\"layui-input-block\">
                        <input type=\"text\" name=\"range_time\" class=\"layui-input\" id=\"timeFrame\" placeholder=\"\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">商品编号</label>
                    <div class=\"layui-input-block\">
                        <input type=\"text\" name=\"id\" placeholder=\"请输入商品编号\" class=\"layui-input\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">商品名称</label>
                    <div class=\"layui-input-block\">
                        <input type=\"text\" name=\"name\" placeholder=\"请输入商品名称\" class=\"layui-input\">
                    </div>
                </div>

                <div class=\"layui-inline\">
                    <button class=\"layui-btn layui-btn-normal query\">立即查询</button>
                </div>
            </div>
        </form>
    </div>
    <div class=\"foxdou-table-page\" style=\"padding: 15px;margin-left: 200px;\">
        <div class=\"layui-form-item\">
            <div class=\"layui-inline foxdou-left\">
                <button class=\"layui-btn layui-btn-sm layui-btn-normal reverse-select\">反选</button>
                <button class=\"layui-btn layui-btn-sm layui-btn-success upper\">上架</button>
                <button class=\"layui-btn layui-btn-sm layui-btn-warm lower\">下架</button>
                <button class=\"layui-btn layui-btn-sm layui-btn-success enable\">启用</button>
                <button class=\"layui-btn layui-btn-sm layui-btn-warm disable\">停用</button>
                <button class=\"layui-btn layui-btn-sm layui-btn-danger remove\">移除</button>
            </div>
        </div>
        <table class=\"layui-table\" id=\"tencent-list-table\" lay-filter=\"tencent-list-table\">

        </table>
        ";
        // line 83
        if ((isset($context["add_exist_product"]) || array_key_exists("add_exist_product", $context) ? $context["add_exist_product"] : (function () { throw new Twig_Error_Runtime('Variable "add_exist_product" does not exist.', 83, $this->source); })())) {
            // line 84
            echo "            <div class=\"layui-inline\">
                <button class=\"layui-btn layui-btn layui-btn-normal confirm\">确定</button>
                <button class=\"layui-btn layui-btn layui-btn-normal cancel\">返回</button>
            </div>
        ";
        }
        // line 89
        echo "    </div>
    <script id=\"actions\" type=\"text/html\">
        ";
        // line 109
        echo "
          {{# if (d.sell_status != 1) { }}
                <a class=\"layui-btn layui-btn-success layui-btn-xs\" lay-event=\"enable\">启用</a>
          {{# } }}
          {{# if (d.sell_status != 0) { }}
                <a class=\"layui-btn layui-btn-warm layui-btn-xs\" lay-event=\"disable\">停用</a>
          {{# } }}
          {{# if (d.status != 1) { }}
                <a class=\"layui-btn layui-btn-success layui-btn-xs\" lay-event=\"upper\">上架</a>
          {{# } }}

          {{# if (d.status != 0) { }}
                <a class=\"layui-btn layui-btn-warm layui-btn-xs\" lay-event=\"lower\">下架</a>
          {{# } }}
          {{# if (d.review_status == 3) { }}
                <a class=\"layui-btn layui-btn-danger layui-btn-xs\" lay-event=\"remove\">移除</a>
          {{# } }}
        <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"syncdown\">比例向下同步</a>
        ";
        echo "
    </script>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 114
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 115
        echo "<script>
    \$(function(){
        var url = '";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_products_list");
        echo "?template_id=";
        echo twig_escape_filter($this->env, (isset($context["template_id"]) || array_key_exists("template_id", $context) ? $context["template_id"] : (function () { throw new Twig_Error_Runtime('Variable "template_id" does not exist.', 117, $this->source); })()), "html", null, true);
        echo "&sell_type=3&add_exist_product=";
        echo twig_escape_filter($this->env, (isset($context["add_exist_product"]) || array_key_exists("add_exist_product", $context) ? $context["add_exist_product"] : (function () { throw new Twig_Error_Runtime('Variable "add_exist_product" does not exist.', 117, $this->source); })()), "html", null, true);
        echo "';
        var renyi_types = JSON.parse('";
        // line 118
        echo json_encode(twig_constant("App\\Common\\Model\\Product\\ProductCommon::RENYI_TYPES"));
        echo "');
        var sell_statuses = JSON.parse('";
        // line 119
        echo json_encode(twig_constant("App\\Common\\Model\\Product\\ProductCommonTemplateRelation::SELL_STATUSES"));
        echo "');
        var statuses = JSON.parse('";
        // line 120
        echo json_encode(twig_constant("App\\Common\\Model\\Product\\ProductCommonTemplateRelation::STATUSES"));
        echo "');
        var review_statuses = JSON.parse('";
        // line 121
        echo json_encode(twig_constant("App\\Common\\Model\\Product\\ProductCommonTemplateRelation::REVIEW_STATUSES"));
        echo "');
        var columns = [[
            {\"field\": \"\", \"title\": \"\", type: \"checkbox\", \"width\": 50},
            {\"field\": \"id\", \"title\": \"商品编号\", \"width\": 150},
            {\"field\": \"name\", \"title\": \"商品名称\", \"width\": 150},
            {\"field\": \"face_value\", \"title\": \"面值\"},
            {
                \"field\": \"renyi_type\", \"title\": \"面值类型\", \"width\": 100, templet: function (d) {
                    return renyi_types[d.renyi_type];
                }
            },
            {
                \"field\": \"cost\", \"title\": \"供货价\", templet: function (d) {
                    return '<input type=\"number\" name=\"cost\" data-face-value=\"'+ d.face_value +'\" data-id=\"'+ d.id +'\" data-type=\"3\" class=\"layui-input cost\" value=\"'+ d.cost +'\">';
                }
            },
            {
                \"field\": \"sell_cost\", \"title\": \"供货价/面值\", \"width\": 150, templet: function (d) {
                    return '<input type=\"text\" name=\"percent\" class=\"layui-input percent\" value=\"'+ d.cost/d.face_value +'\">';
                }
            },
            {
                \"field\": \"status\", \"title\": \"商品上下架状态\", templet: function (d) {
                    return statuses[d.status];
                }
            },
            {
                \"field\": \"review_status\", \"title\": \"商品审核状态（狐豆控制）\", templet: function (d) {
                    return review_statuses[d.review_status];
                }
            },
            {
                \"field\": \"sell_status\", \"title\": \"商品在模板中的启用状态\", templet: function (d) {
                    return sell_statuses[d.sell_status];
                }
            },
            {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\", \"width\": 200}
        ]];

        form.render('select');

        var callBack = function(){
            \$('.cost').on('blur',function(e){
                var target = \$(e.target);

                var args = {id: target.attr('data-id'), sell_type: target.attr('data-type')};

                args.cost = target.val();

                if (args.cost === '') {
                    nxwd.showMsg('数值不能为空');
                    return false;
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
                        var face_value = target.attr('data-face-value');
                        target.parents('td').next().find('input.percent').val(args.cost/face_value);
                        //location.reload();
                    } else {
                        nxwd.showMsg(res.msg, 'danger');
                    }
                }
                nxwd.ajaxRequest('";
        // line 195
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_change_cost");
        echo "', 'POST', args, 'json', success, before, error);
            })
        };
        rander_table('#tencent-list-table',url,columns,callBack);

        table.on('tool(tencent-list-table)', function (obj) {
            var data = obj.data;
            var layEvent = obj.event;

            if (layEvent === 'enable') { //启用
                productOperation('";
        // line 205
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_change_sell_status");
        echo "',data.id,1);
            }
            if (layEvent === 'disable') { //停用
                productOperation('";
        // line 208
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_change_sell_status");
        echo "',data.id,0);
            }
            if (layEvent === 'upper') { //上架
                productOperation('";
        // line 211
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_change_status");
        echo "',data.id,1);
            }
            if (layEvent === 'lower') { //下架
                productOperation('";
        // line 214
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_change_status");
        echo "',data.id,0);
            }
            if (layEvent === 'remove') { //移除
                nxwd.ajaxDelete('";
        // line 217
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_remove");
        echo "?sell_type=3',this,false,data.id);
            }
            if (layEvent === 'syncdown') { //比例向下同步
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
                nxwd.ajaxRequest('";
        // line 238
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_syncdown");
        echo "', 'POST', {id:data.id,sell_type:3}, 'json', success, before, error);
            }
        });

        var checked_ids = [];
        table.on('checkbox(tencent-list-table)', function (obj) {
            if (obj.checked) {
                checked_ids.push(obj.data.id);
            } else {
                checked_ids.remove(obj.data.id);
            }

        });

        \$(document).on('click',function(e){
           var target = \$(e.target);
           if (target.is('.reverse-select') || target.parents().is('.reverse-select')) {
               \$('.layui-table-box').find('input:checkbox').next().each(function () {
                   \$(this).toggleClass('layui-form-checked');
               })
           } else if (target.is('.upper') || target.parents().is('.upper')) {
               productOperation('";
        // line 259
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_change_status");
        echo "',checked_ids,1);
           } else if (target.is('.lower') || target.parents().is('.lower')) {
               productOperation('";
        // line 261
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_change_status");
        echo "',checked_ids,0);
           } else if (target.is('.enable') || target.parents().is('.enable')) {
               productOperation('";
        // line 263
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_change_sell_status");
        echo "',checked_ids,1);
           } else if (target.is('.disable') || target.parents().is('.disable')) {
               productOperation('";
        // line 265
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_change_sell_status");
        echo "',checked_ids,0);
           } else if (target.is('.remove') || target.parents().is('.remove')) {
               if (target.parents().is('.remove')){
                   e.target = target.parents('.remove')
               }
               nxwd.ajaxDelete('";
        // line 270
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_remove");
        echo "?sell_type=3',e.target,true);
           } else if (target.is('.query') || target.parents().is('.query')) {
               if (target.parents().is('.query')){
                   e.target = target.parents('.query')
               }
               var param = \$('form#tencent-template-list').serialize();
               var base_url = '";
        // line 276
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_products_list");
        echo "?template_id=";
        echo twig_escape_filter($this->env, (isset($context["template_id"]) || array_key_exists("template_id", $context) ? $context["template_id"] : (function () { throw new Twig_Error_Runtime('Variable "template_id" does not exist.', 276, $this->source); })()), "html", null, true);
        echo "&sell_type=3&add_exist_product=";
        echo twig_escape_filter($this->env, (isset($context["add_exist_product"]) || array_key_exists("add_exist_product", $context) ? $context["add_exist_product"] : (function () { throw new Twig_Error_Runtime('Variable "add_exist_product" does not exist.', 276, $this->source); })()), "html", null, true);
        echo "';
               base_url += '&' + param;
               rander_table('#tencent-list-table',base_url,columns,callBack);
               return false;
           } else if (target.is('.add-exist') || target.parents().is('.add-exist')) {
               window.location.href = '";
        // line 281
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_products_list");
        echo "?template_id=";
        echo twig_escape_filter($this->env, (isset($context["template_id"]) || array_key_exists("template_id", $context) ? $context["template_id"] : (function () { throw new Twig_Error_Runtime('Variable "template_id" does not exist.', 281, $this->source); })()), "html", null, true);
        echo "&sell_type=3&add_exist_product=1';
           } else if(target.is('.add-new') || target.parents().is('.add-new')) {
               window.location.href = '";
        // line 283
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_add_new_product");
        echo "?template_id=";
        echo twig_escape_filter($this->env, (isset($context["template_id"]) || array_key_exists("template_id", $context) ? $context["template_id"] : (function () { throw new Twig_Error_Runtime('Variable "template_id" does not exist.', 283, $this->source); })()), "html", null, true);
        echo "&sell_type=3';
           } else if (target.is('.confirm') || target.parents().is('.confirm')) {
               var args = {sell_type:3,id:checked_ids,template_id:'";
        // line 285
        echo twig_escape_filter($this->env, (isset($context["template_id"]) || array_key_exists("template_id", $context) ? $context["template_id"] : (function () { throw new Twig_Error_Runtime('Variable "template_id" does not exist.', 285, $this->source); })()), "html", null, true);
        echo "'};
               var loading = null;
               var before = function () {
                   loading = layer.load();
               }
               var error = function () {
                   layer.close(loading);
                   nxwd.showMsg('服务器未响应，请稍后重试');
               }

               var success = function(res){
                   layer.close(loading);
                   if (res.status) {
                       nxwd.showMsg(res.msg,'success');
                       location.reload();
                   } else {
                       nxwd.showMsg(res.msg,'danger')
                   }
               }
               nxwd.ajaxRequest('";
        // line 304
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_add_template_product");
        echo "', 'POST', args, 'json', success, before, error);
           }
        });
    });

    /**
     * 模板商品启用/停用
     * @param url           // 请求url
     * @param id            // 项目ID
     * @param status        // 上架或下架 1,0 | 停止或启用 0,1
     */
    function productOperation(url, id, status) {

        if (id === '' || typeof id == 'undefined' || id == null) {
            nxwd.showMsg('项目id不能为空');
            return false;
        }

        if (status === '') {
            nxwd.showMsg('参数有误');
            return false;
        }

        var loading = null;
        var before = function () {
            loading = layer.load();
        }
        var error = function () {
            layer.close(loading);
            nxwd.showMsg('服务器未响应，请稍后重试');
        }

        var success = function(res){
            layer.close(loading);
            if (res.status) {
                nxwd.showMsg(res.msg,'success');
                location.reload();
            } else {
                nxwd.showMsg(res.msg,'danger')
            }
        }

        var ok = layer.confirm('您确定要执行该操作吗？', {icon: 3, title: '系统提示'}, function () {
            layer.close(ok);
            nxwd.ajaxRequest(url, 'POST', {id: id, status: status, sell_type: 3}, 'json', success, before, error);
        });
    }

</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Supplier/Products/template_products_tencent_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  479 => 304,  457 => 285,  450 => 283,  443 => 281,  431 => 276,  422 => 270,  414 => 265,  409 => 263,  404 => 261,  399 => 259,  375 => 238,  351 => 217,  345 => 214,  339 => 211,  333 => 208,  327 => 205,  314 => 195,  237 => 121,  233 => 120,  229 => 119,  225 => 118,  217 => 117,  213 => 115,  204 => 114,  171 => 109,  167 => 89,  160 => 84,  158 => 83,  113 => 41,  104 => 35,  95 => 29,  86 => 23,  76 => 15,  71 => 12,  67 => 10,  65 => 9,  59 => 5,  50 => 4,  40 => 2,  38 => 3,  36 => 1,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}
{% extends 'Supplier/Common/layout.twig' %}
{% import ('/Common/simple_form_helpers.html.twig') as sf %}
{% block main_content %}
    <style>
        .cost,.percent{height:28px}
    </style>
<div style=\"margin-left: 200px;padding:15px\">
    {% if add_exist_product %}
        <div style=\"font-size: 16px;\">添加已有商品</div>
    {% else %}
        <button class=\"layui-btn layui-btn-normal add-exist\">添加已有商品</button>
        <button class=\"layui-btn layui-btn-normal add-new\">创建新商品并添加</button>
    {% endif %}
</div>
<div class=\"foxdou-row foxdou-row-notm\">
    <div class=\"foxdou-form-row\" style=\"margin-left: 200px;\">
        <form class=\"layui-form layui-form-pane\" action=\"\" id=\"tencent-template-list\">
            <div class=\"layui-form-item\">
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">面值类型</label>
                    <div class=\"layui-input-block foxdou-select-length\">
                        {{ sf.select_raw('renyi_type', to_options(constant(\"App\\\\Common\\\\Model\\\\Product\\\\ProductCommon::RENYI_TYPES\"), '全部'), {\"class\": \"layui-input\"}) }}
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">商品上下架状态</label>
                    <div class=\"layui-input-block foxdou-select-length\">
                        {{ sf.select_raw('status', to_options(constant(\"App\\\\Common\\\\Model\\\\Product\\\\ProductCommonTemplateRelation::STATUSES\"), '全部'), {\"class\": \"layui-input\"}) }}
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">商品审核状态</label>
                    <div class=\"layui-input-block foxdou-select-length\">
                        {{ sf.select_raw('review_status', to_options(constant(\"App\\\\Common\\\\Model\\\\Product\\\\ProductCommonTemplateRelation::REVIEW_STATUSES\"), '全部'), {\"class\": \"layui-input\"}) }}
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">商品在模板中的启用状态</label>
                    <div class=\"layui-input-block foxdou-select-length\">
                        {{ sf.select_raw('sell_status', to_options(constant(\"App\\\\Common\\\\Model\\\\Product\\\\ProductCommonTemplateRelation::SELL_STATUSES\"), '全部'), {\"class\": \"layui-input\"}) }}
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">日期范围</label>
                    <div class=\"layui-input-block\">
                        <input type=\"text\" name=\"range_time\" class=\"layui-input\" id=\"timeFrame\" placeholder=\"\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">商品编号</label>
                    <div class=\"layui-input-block\">
                        <input type=\"text\" name=\"id\" placeholder=\"请输入商品编号\" class=\"layui-input\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">商品名称</label>
                    <div class=\"layui-input-block\">
                        <input type=\"text\" name=\"name\" placeholder=\"请输入商品名称\" class=\"layui-input\">
                    </div>
                </div>

                <div class=\"layui-inline\">
                    <button class=\"layui-btn layui-btn-normal query\">立即查询</button>
                </div>
            </div>
        </form>
    </div>
    <div class=\"foxdou-table-page\" style=\"padding: 15px;margin-left: 200px;\">
        <div class=\"layui-form-item\">
            <div class=\"layui-inline foxdou-left\">
                <button class=\"layui-btn layui-btn-sm layui-btn-normal reverse-select\">反选</button>
                <button class=\"layui-btn layui-btn-sm layui-btn-success upper\">上架</button>
                <button class=\"layui-btn layui-btn-sm layui-btn-warm lower\">下架</button>
                <button class=\"layui-btn layui-btn-sm layui-btn-success enable\">启用</button>
                <button class=\"layui-btn layui-btn-sm layui-btn-warm disable\">停用</button>
                <button class=\"layui-btn layui-btn-sm layui-btn-danger remove\">移除</button>
            </div>
        </div>
        <table class=\"layui-table\" id=\"tencent-list-table\" lay-filter=\"tencent-list-table\">

        </table>
        {% if add_exist_product %}
            <div class=\"layui-inline\">
                <button class=\"layui-btn layui-btn layui-btn-normal confirm\">确定</button>
                <button class=\"layui-btn layui-btn layui-btn-normal cancel\">返回</button>
            </div>
        {% endif %}
    </div>
    <script id=\"actions\" type=\"text/html\">
        {% verbatim %}
          {{# if (d.sell_status != 1) { }}
                <a class=\"layui-btn layui-btn-success layui-btn-xs\" lay-event=\"enable\">启用</a>
          {{# } }}
          {{# if (d.sell_status != 0) { }}
                <a class=\"layui-btn layui-btn-warm layui-btn-xs\" lay-event=\"disable\">停用</a>
          {{# } }}
          {{# if (d.status != 1) { }}
                <a class=\"layui-btn layui-btn-success layui-btn-xs\" lay-event=\"upper\">上架</a>
          {{# } }}

          {{# if (d.status != 0) { }}
                <a class=\"layui-btn layui-btn-warm layui-btn-xs\" lay-event=\"lower\">下架</a>
          {{# } }}
          {{# if (d.review_status == 3) { }}
                <a class=\"layui-btn layui-btn-danger layui-btn-xs\" lay-event=\"remove\">移除</a>
          {{# } }}
        <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"syncdown\">比例向下同步</a>
        {% endverbatim %}
    </script>
</div>

{% endblock %}
{% block js_end %}
<script>
    \$(function(){
        var url = '{{ path(\"supplier_products_products_list\") }}?template_id={{ template_id }}&sell_type=3&add_exist_product={{ add_exist_product }}';
        var renyi_types = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Product\\\\ProductCommon::RENYI_TYPES\")|json_encode|raw }}');
        var sell_statuses = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Product\\\\ProductCommonTemplateRelation::SELL_STATUSES\")|json_encode|raw }}');
        var statuses = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Product\\\\ProductCommonTemplateRelation::STATUSES\")|json_encode|raw }}');
        var review_statuses = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Product\\\\ProductCommonTemplateRelation::REVIEW_STATUSES\")|json_encode|raw }}');
        var columns = [[
            {\"field\": \"\", \"title\": \"\", type: \"checkbox\", \"width\": 50},
            {\"field\": \"id\", \"title\": \"商品编号\", \"width\": 150},
            {\"field\": \"name\", \"title\": \"商品名称\", \"width\": 150},
            {\"field\": \"face_value\", \"title\": \"面值\"},
            {
                \"field\": \"renyi_type\", \"title\": \"面值类型\", \"width\": 100, templet: function (d) {
                    return renyi_types[d.renyi_type];
                }
            },
            {
                \"field\": \"cost\", \"title\": \"供货价\", templet: function (d) {
                    return '<input type=\"number\" name=\"cost\" data-face-value=\"'+ d.face_value +'\" data-id=\"'+ d.id +'\" data-type=\"3\" class=\"layui-input cost\" value=\"'+ d.cost +'\">';
                }
            },
            {
                \"field\": \"sell_cost\", \"title\": \"供货价/面值\", \"width\": 150, templet: function (d) {
                    return '<input type=\"text\" name=\"percent\" class=\"layui-input percent\" value=\"'+ d.cost/d.face_value +'\">';
                }
            },
            {
                \"field\": \"status\", \"title\": \"商品上下架状态\", templet: function (d) {
                    return statuses[d.status];
                }
            },
            {
                \"field\": \"review_status\", \"title\": \"商品审核状态（狐豆控制）\", templet: function (d) {
                    return review_statuses[d.review_status];
                }
            },
            {
                \"field\": \"sell_status\", \"title\": \"商品在模板中的启用状态\", templet: function (d) {
                    return sell_statuses[d.sell_status];
                }
            },
            {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\", \"width\": 200}
        ]];

        form.render('select');

        var callBack = function(){
            \$('.cost').on('blur',function(e){
                var target = \$(e.target);

                var args = {id: target.attr('data-id'), sell_type: target.attr('data-type')};

                args.cost = target.val();

                if (args.cost === '') {
                    nxwd.showMsg('数值不能为空');
                    return false;
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
                        var face_value = target.attr('data-face-value');
                        target.parents('td').next().find('input.percent').val(args.cost/face_value);
                        //location.reload();
                    } else {
                        nxwd.showMsg(res.msg, 'danger');
                    }
                }
                nxwd.ajaxRequest('{{ path(\"supplier_products_change_cost\") }}', 'POST', args, 'json', success, before, error);
            })
        };
        rander_table('#tencent-list-table',url,columns,callBack);

        table.on('tool(tencent-list-table)', function (obj) {
            var data = obj.data;
            var layEvent = obj.event;

            if (layEvent === 'enable') { //启用
                productOperation('{{ path(\"supplier_products_change_sell_status\") }}',data.id,1);
            }
            if (layEvent === 'disable') { //停用
                productOperation('{{ path(\"supplier_products_change_sell_status\") }}',data.id,0);
            }
            if (layEvent === 'upper') { //上架
                productOperation('{{ path(\"supplier_products_change_status\") }}',data.id,1);
            }
            if (layEvent === 'lower') { //下架
                productOperation('{{ path(\"supplier_products_change_status\") }}',data.id,0);
            }
            if (layEvent === 'remove') { //移除
                nxwd.ajaxDelete('{{ path(\"supplier_products_remove\") }}?sell_type=3',this,false,data.id);
            }
            if (layEvent === 'syncdown') { //比例向下同步
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
                nxwd.ajaxRequest('{{ path(\"supplier_products_syncdown\") }}', 'POST', {id:data.id,sell_type:3}, 'json', success, before, error);
            }
        });

        var checked_ids = [];
        table.on('checkbox(tencent-list-table)', function (obj) {
            if (obj.checked) {
                checked_ids.push(obj.data.id);
            } else {
                checked_ids.remove(obj.data.id);
            }

        });

        \$(document).on('click',function(e){
           var target = \$(e.target);
           if (target.is('.reverse-select') || target.parents().is('.reverse-select')) {
               \$('.layui-table-box').find('input:checkbox').next().each(function () {
                   \$(this).toggleClass('layui-form-checked');
               })
           } else if (target.is('.upper') || target.parents().is('.upper')) {
               productOperation('{{ path(\"supplier_products_change_status\") }}',checked_ids,1);
           } else if (target.is('.lower') || target.parents().is('.lower')) {
               productOperation('{{ path(\"supplier_products_change_status\") }}',checked_ids,0);
           } else if (target.is('.enable') || target.parents().is('.enable')) {
               productOperation('{{ path(\"supplier_products_change_sell_status\") }}',checked_ids,1);
           } else if (target.is('.disable') || target.parents().is('.disable')) {
               productOperation('{{ path(\"supplier_products_change_sell_status\") }}',checked_ids,0);
           } else if (target.is('.remove') || target.parents().is('.remove')) {
               if (target.parents().is('.remove')){
                   e.target = target.parents('.remove')
               }
               nxwd.ajaxDelete('{{ path(\"supplier_products_remove\") }}?sell_type=3',e.target,true);
           } else if (target.is('.query') || target.parents().is('.query')) {
               if (target.parents().is('.query')){
                   e.target = target.parents('.query')
               }
               var param = \$('form#tencent-template-list').serialize();
               var base_url = '{{ path(\"supplier_products_products_list\") }}?template_id={{ template_id }}&sell_type=3&add_exist_product={{ add_exist_product }}';
               base_url += '&' + param;
               rander_table('#tencent-list-table',base_url,columns,callBack);
               return false;
           } else if (target.is('.add-exist') || target.parents().is('.add-exist')) {
               window.location.href = '{{ path(\"supplier_products_products_list\") }}?template_id={{ template_id }}&sell_type=3&add_exist_product=1';
           } else if(target.is('.add-new') || target.parents().is('.add-new')) {
               window.location.href = '{{ path(\"supplier_products_add_new_product\") }}?template_id={{ template_id }}&sell_type=3';
           } else if (target.is('.confirm') || target.parents().is('.confirm')) {
               var args = {sell_type:3,id:checked_ids,template_id:'{{ template_id }}'};
               var loading = null;
               var before = function () {
                   loading = layer.load();
               }
               var error = function () {
                   layer.close(loading);
                   nxwd.showMsg('服务器未响应，请稍后重试');
               }

               var success = function(res){
                   layer.close(loading);
                   if (res.status) {
                       nxwd.showMsg(res.msg,'success');
                       location.reload();
                   } else {
                       nxwd.showMsg(res.msg,'danger')
                   }
               }
               nxwd.ajaxRequest('{{ path(\"supplier_products_add_template_product\") }}', 'POST', args, 'json', success, before, error);
           }
        });
    });

    /**
     * 模板商品启用/停用
     * @param url           // 请求url
     * @param id            // 项目ID
     * @param status        // 上架或下架 1,0 | 停止或启用 0,1
     */
    function productOperation(url, id, status) {

        if (id === '' || typeof id == 'undefined' || id == null) {
            nxwd.showMsg('项目id不能为空');
            return false;
        }

        if (status === '') {
            nxwd.showMsg('参数有误');
            return false;
        }

        var loading = null;
        var before = function () {
            loading = layer.load();
        }
        var error = function () {
            layer.close(loading);
            nxwd.showMsg('服务器未响应，请稍后重试');
        }

        var success = function(res){
            layer.close(loading);
            if (res.status) {
                nxwd.showMsg(res.msg,'success');
                location.reload();
            } else {
                nxwd.showMsg(res.msg,'danger')
            }
        }

        var ok = layer.confirm('您确定要执行该操作吗？', {icon: 3, title: '系统提示'}, function () {
            layer.close(ok);
            nxwd.ajaxRequest(url, 'POST', {id: id, status: status, sell_type: 3}, 'json', success, before, error);
        });
    }

</script>
{% endblock %}
", "Supplier/Products/template_products_tencent_list.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Supplier\\Products\\template_products_tencent_list.twig");
    }
}
