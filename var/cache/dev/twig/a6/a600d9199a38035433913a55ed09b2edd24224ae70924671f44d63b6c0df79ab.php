<?php

/* Supplier/Products/template_products_flow_list.twig */
class __TwigTemplate_5ec55f7ef59a5d739ca7c93207543df69a55e292a75587bc57ab3dad6f1c3dd7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Supplier/Common/layout.twig", "Supplier/Products/template_products_flow_list.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Supplier/Products/template_products_flow_list.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Supplier/Products/template_products_flow_list.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Supplier/Products/template_products_flow_list.twig", 2);
        // line 1
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
        <form class=\"layui-form layui-form-pane\" action=\"\" id=\"flow-template-list\">
            <div class=\"layui-form-item\">
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">面值类型</label>
                    <div class=\"layui-input-block foxdou-select-length\">
                        ";
        // line 23
        echo $context["sf"]->macro_select_raw("renyi_type", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\Product\\ProductFlow::RENYI_TYPES"), "全部"), array("class" => "layui-input"));
        echo "
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">商品适用范围</label>
                    <div class=\"layui-input-block foxdou-select-length\">
                        ";
        // line 29
        echo $context["sf"]->macro_select_raw("range", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\Product\\SellTemplate::AUTO_REFUNDS"), "全部"), array("class" => "layui-input"));
        echo "
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">运营商类别</label>
                    <div class=\"layui-input-block foxdou-select-length\">
                        ";
        // line 35
        echo $context["sf"]->macro_select_raw("cate_id", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Constants::CARRIERS"), "全部"), array("class" => "layui-input"));
        echo "
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">商品上下架状态</label>
                    <div class=\"layui-input-block foxdou-select-length\">
                        ";
        // line 41
        echo $context["sf"]->macro_select_raw("status", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\Product\\ProductFlowSource::STATUSES"), "全部"), array("class" => "layui-input"));
        echo "
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">商品审核状态</label>
                    <div class=\"layui-input-block foxdou-select-length\">
                        ";
        // line 47
        echo $context["sf"]->macro_select_raw("review_status", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\Product\\ProductFlowSource::REVIEW_STATUSES"), "全部"), array("class" => "layui-input"));
        echo "
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">商品在模板中的启用状态</label>
                    <div class=\"layui-input-block foxdou-select-length\">
                        ";
        // line 53
        echo $context["sf"]->macro_select_raw("sell_status", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\Product\\ProductFlowSource::SELL_STATUSES"), "全部"), array("class" => "layui-input"));
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
        <table class=\"layui-table\" id=\"flow-list-table\" lay-filter=\"flow-list-table\">

        </table>
        ";
        // line 95
        if ((isset($context["add_exist_product"]) || array_key_exists("add_exist_product", $context) ? $context["add_exist_product"] : (function () { throw new Twig_Error_Runtime('Variable "add_exist_product" does not exist.', 95, $this->source); })())) {
            // line 96
            echo "            <div class=\"layui-inline\">
                <button class=\"layui-btn layui-btn layui-btn-normal confirm\">确定</button>
                <button class=\"layui-btn layui-btn layui-btn-normal cancel\">返回</button>
            </div>
        ";
        }
        // line 101
        echo "    </div>
    <script id=\"actions\" type=\"text/html\">
        ";
        // line 121
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

    // line 126
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 127
        echo "<script>
    \$(function(){
        var url = '";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_products_list");
        echo "?template_id=";
        echo twig_escape_filter($this->env, (isset($context["template_id"]) || array_key_exists("template_id", $context) ? $context["template_id"] : (function () { throw new Twig_Error_Runtime('Variable "template_id" does not exist.', 129, $this->source); })()), "html", null, true);
        echo "&sell_type=4&add_exist_product=";
        echo twig_escape_filter($this->env, (isset($context["add_exist_product"]) || array_key_exists("add_exist_product", $context) ? $context["add_exist_product"] : (function () { throw new Twig_Error_Runtime('Variable "add_exist_product" does not exist.', 129, $this->source); })()), "html", null, true);
        echo "';
        var renyi_types = JSON.parse('";
        // line 130
        echo json_encode(twig_constant("App\\Common\\Model\\Product\\ProductFlow::RENYI_TYPES"));
        echo "');
        var cate_ids = JSON.parse('";
        // line 131
        echo json_encode(twig_constant("App\\Constants::CARRIERS"));
        echo "');
        var sell_statuses = JSON.parse('";
        // line 132
        echo json_encode(twig_constant("App\\Common\\Model\\Product\\ProductFlowSource::SELL_STATUSES"));
        echo "');
        var statuses = JSON.parse('";
        // line 133
        echo json_encode(twig_constant("App\\Common\\Model\\Product\\ProductFlowSource::STATUSES"));
        echo "');
        var review_statuses = JSON.parse('";
        // line 134
        echo json_encode(twig_constant("App\\Common\\Model\\Product\\ProductFlowSource::REVIEW_STATUSES"));
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
                \"field\": \"range\", \"title\": \"商品使用范围\", \"width\": 150, templet: function (d) {
                    return d.province_name ? d.province_name : d.city_name;
                }
            },
            {
                \"field\": \"cate_id\", \"title\": \"运营商类别\", \"width\": 100, templet: function (d) {
                    return cate_ids[d.cate_id];
                }
            },
            {
                \"field\": \"cost\", \"title\": \"供货价\", templet: function (d) {
                    return '<input type=\"number\" name=\"cost\" data-face-value=\"'+ d.face_value +'\" data-id=\"'+ d.id +'\" data-type=\"4\" class=\"layui-input cost\" value=\"'+ d.cost +'\">';
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
        // line 218
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_change_cost");
        echo "', 'POST', args, 'json', success, before, error);
            })
        };
        rander_table('#flow-list-table',url,columns,callBack);

        table.on('tool(flow-list-table)', function (obj) {
            var data = obj.data;
            var layEvent = obj.event;

            if (layEvent === 'enable') { //启用
                productOperation('";
        // line 228
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_change_sell_status");
        echo "',data.id,1);
            }
            if (layEvent === 'disable') { //停用
                productOperation('";
        // line 231
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_change_sell_status");
        echo "',data.id,0);
            }
            if (layEvent === 'upper') { //上架
                productOperation('";
        // line 234
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_change_status");
        echo "',data.id,1);
            }
            if (layEvent === 'lower') { //下架
                productOperation('";
        // line 237
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_change_status");
        echo "',data.id,0);
            }
            if (layEvent === 'remove') { //移除
                nxwd.ajaxDelete('";
        // line 240
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_remove");
        echo "?sell_type=4',this,false,data.id);
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
        // line 261
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_syncdown");
        echo "', 'POST', {id:data.id,sell_type:4}, 'json', success, before, error);
            }
        });

        var checked_ids = [];
        table.on('checkbox(flow-list-table)', function (obj) {
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
        // line 282
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_change_status");
        echo "',checked_ids,1);
           } else if (target.is('.lower') || target.parents().is('.lower')) {
               productOperation('";
        // line 284
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_change_status");
        echo "',checked_ids,0);
           } else if (target.is('.enable') || target.parents().is('.enable')) {
               productOperation('";
        // line 286
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_change_sell_status");
        echo "',checked_ids,1);
           } else if (target.is('.disable') || target.parents().is('.disable')) {
               productOperation('";
        // line 288
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_change_sell_status");
        echo "',checked_ids,0);
           } else if (target.is('.remove') || target.parents().is('.remove')) {
               if (target.parents().is('.remove')){
                   e.target = target.parents('.remove')
               }
               nxwd.ajaxDelete('";
        // line 293
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_remove");
        echo "?sell_type=4',e.target,true);
           } else if (target.is('.query') || target.parents().is('.query')) {
               if (target.parents().is('.query')){
                   e.target = target.parents('.query')
               }
               var param = \$('form#flow-template-list').serialize();
               var base_url = '";
        // line 299
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_products_list");
        echo "?template_id=";
        echo twig_escape_filter($this->env, (isset($context["template_id"]) || array_key_exists("template_id", $context) ? $context["template_id"] : (function () { throw new Twig_Error_Runtime('Variable "template_id" does not exist.', 299, $this->source); })()), "html", null, true);
        echo "&sell_type=4&add_exist_product=";
        echo twig_escape_filter($this->env, (isset($context["add_exist_product"]) || array_key_exists("add_exist_product", $context) ? $context["add_exist_product"] : (function () { throw new Twig_Error_Runtime('Variable "add_exist_product" does not exist.', 299, $this->source); })()), "html", null, true);
        echo "';
               base_url += '&' + param;
               rander_table('#flow-list-table',base_url,columns,callBack);
               return false;
           } else if (target.is('.add-exist') || target.parents().is('.add-exist')) {
               window.location.href = '";
        // line 304
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_products_list");
        echo "?template_id=";
        echo twig_escape_filter($this->env, (isset($context["template_id"]) || array_key_exists("template_id", $context) ? $context["template_id"] : (function () { throw new Twig_Error_Runtime('Variable "template_id" does not exist.', 304, $this->source); })()), "html", null, true);
        echo "&sell_type=4&add_exist_product=1';
           } else if(target.is('.add-new') || target.parents().is('.add-new')) {
               window.location.href = '";
        // line 306
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_add_new_product");
        echo "?template_id=";
        echo twig_escape_filter($this->env, (isset($context["template_id"]) || array_key_exists("template_id", $context) ? $context["template_id"] : (function () { throw new Twig_Error_Runtime('Variable "template_id" does not exist.', 306, $this->source); })()), "html", null, true);
        echo "&sell_type=4';
           } else if (target.is('.confirm') || target.parents().is('.confirm')) {
               var args = {sell_type:4,id:checked_ids,template_id:'";
        // line 308
        echo twig_escape_filter($this->env, (isset($context["template_id"]) || array_key_exists("template_id", $context) ? $context["template_id"] : (function () { throw new Twig_Error_Runtime('Variable "template_id" does not exist.', 308, $this->source); })()), "html", null, true);
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
        // line 327
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
            nxwd.ajaxRequest(url, 'POST', {id: id, status: status, sell_type: 4}, 'json', success, before, error);
        });
    }

</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Supplier/Products/template_products_flow_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  509 => 327,  487 => 308,  480 => 306,  473 => 304,  461 => 299,  452 => 293,  444 => 288,  439 => 286,  434 => 284,  429 => 282,  405 => 261,  381 => 240,  375 => 237,  369 => 234,  363 => 231,  357 => 228,  344 => 218,  257 => 134,  253 => 133,  249 => 132,  245 => 131,  241 => 130,  233 => 129,  229 => 127,  220 => 126,  187 => 121,  183 => 101,  176 => 96,  174 => 95,  129 => 53,  120 => 47,  111 => 41,  102 => 35,  93 => 29,  84 => 23,  74 => 15,  69 => 12,  65 => 10,  63 => 9,  57 => 5,  48 => 4,  38 => 1,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Supplier/Common/layout.twig' %}
{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

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
        <form class=\"layui-form layui-form-pane\" action=\"\" id=\"flow-template-list\">
            <div class=\"layui-form-item\">
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">面值类型</label>
                    <div class=\"layui-input-block foxdou-select-length\">
                        {{ sf.select_raw('renyi_type', to_options(constant(\"App\\\\Common\\\\Model\\\\Product\\\\ProductFlow::RENYI_TYPES\"), '全部'), {\"class\": \"layui-input\"}) }}
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">商品适用范围</label>
                    <div class=\"layui-input-block foxdou-select-length\">
                        {{ sf.select_raw('range', to_options(constant(\"App\\\\Common\\\\Model\\\\Product\\\\SellTemplate::AUTO_REFUNDS\"), '全部'), {\"class\": \"layui-input\"}) }}
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">运营商类别</label>
                    <div class=\"layui-input-block foxdou-select-length\">
                        {{ sf.select_raw('cate_id', to_options(constant(\"App\\\\Constants::CARRIERS\"), '全部'), {\"class\": \"layui-input\"}) }}
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">商品上下架状态</label>
                    <div class=\"layui-input-block foxdou-select-length\">
                        {{ sf.select_raw('status', to_options(constant(\"App\\\\Common\\\\Model\\\\Product\\\\ProductFlowSource::STATUSES\"), '全部'), {\"class\": \"layui-input\"}) }}
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">商品审核状态</label>
                    <div class=\"layui-input-block foxdou-select-length\">
                        {{ sf.select_raw('review_status', to_options(constant(\"App\\\\Common\\\\Model\\\\Product\\\\ProductFlowSource::REVIEW_STATUSES\"), '全部'), {\"class\": \"layui-input\"}) }}
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">商品在模板中的启用状态</label>
                    <div class=\"layui-input-block foxdou-select-length\">
                        {{ sf.select_raw('sell_status', to_options(constant(\"App\\\\Common\\\\Model\\\\Product\\\\ProductFlowSource::SELL_STATUSES\"), '全部'), {\"class\": \"layui-input\"}) }}
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
        <table class=\"layui-table\" id=\"flow-list-table\" lay-filter=\"flow-list-table\">

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
        var url = '{{ path(\"supplier_products_products_list\") }}?template_id={{ template_id }}&sell_type=4&add_exist_product={{ add_exist_product }}';
        var renyi_types = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Product\\\\ProductFlow::RENYI_TYPES\")|json_encode|raw }}');
        var cate_ids = JSON.parse('{{ constant(\"App\\\\Constants::CARRIERS\")|json_encode|raw }}');
        var sell_statuses = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Product\\\\ProductFlowSource::SELL_STATUSES\")|json_encode|raw }}');
        var statuses = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Product\\\\ProductFlowSource::STATUSES\")|json_encode|raw }}');
        var review_statuses = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Product\\\\ProductFlowSource::REVIEW_STATUSES\")|json_encode|raw }}');
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
                \"field\": \"range\", \"title\": \"商品使用范围\", \"width\": 150, templet: function (d) {
                    return d.province_name ? d.province_name : d.city_name;
                }
            },
            {
                \"field\": \"cate_id\", \"title\": \"运营商类别\", \"width\": 100, templet: function (d) {
                    return cate_ids[d.cate_id];
                }
            },
            {
                \"field\": \"cost\", \"title\": \"供货价\", templet: function (d) {
                    return '<input type=\"number\" name=\"cost\" data-face-value=\"'+ d.face_value +'\" data-id=\"'+ d.id +'\" data-type=\"4\" class=\"layui-input cost\" value=\"'+ d.cost +'\">';
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
        rander_table('#flow-list-table',url,columns,callBack);

        table.on('tool(flow-list-table)', function (obj) {
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
                nxwd.ajaxDelete('{{ path(\"supplier_products_remove\") }}?sell_type=4',this,false,data.id);
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
                nxwd.ajaxRequest('{{ path(\"supplier_products_syncdown\") }}', 'POST', {id:data.id,sell_type:4}, 'json', success, before, error);
            }
        });

        var checked_ids = [];
        table.on('checkbox(flow-list-table)', function (obj) {
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
               nxwd.ajaxDelete('{{ path(\"supplier_products_remove\") }}?sell_type=4',e.target,true);
           } else if (target.is('.query') || target.parents().is('.query')) {
               if (target.parents().is('.query')){
                   e.target = target.parents('.query')
               }
               var param = \$('form#flow-template-list').serialize();
               var base_url = '{{ path(\"supplier_products_products_list\") }}?template_id={{ template_id }}&sell_type=4&add_exist_product={{ add_exist_product }}';
               base_url += '&' + param;
               rander_table('#flow-list-table',base_url,columns,callBack);
               return false;
           } else if (target.is('.add-exist') || target.parents().is('.add-exist')) {
               window.location.href = '{{ path(\"supplier_products_products_list\") }}?template_id={{ template_id }}&sell_type=4&add_exist_product=1';
           } else if(target.is('.add-new') || target.parents().is('.add-new')) {
               window.location.href = '{{ path(\"supplier_products_add_new_product\") }}?template_id={{ template_id }}&sell_type=4';
           } else if (target.is('.confirm') || target.parents().is('.confirm')) {
               var args = {sell_type:4,id:checked_ids,template_id:'{{ template_id }}'};
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
            nxwd.ajaxRequest(url, 'POST', {id: id, status: status, sell_type: 4}, 'json', success, before, error);
        });
    }

</script>
{% endblock %}
", "Supplier/Products/template_products_flow_list.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Supplier\\Products\\template_products_flow_list.twig");
    }
}
