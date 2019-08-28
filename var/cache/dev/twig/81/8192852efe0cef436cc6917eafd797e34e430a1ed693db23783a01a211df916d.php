<?php

/* /Supplier/Products/add_new_product_mobile.twig */
class __TwigTemplate_4c3898a0fd07a073f004075b851ba447515a0ffd0524cdb870e63e524f250bfe extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Supplier/Common/layout.twig", "/Supplier/Products/add_new_product_mobile.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Supplier/Products/add_new_product_mobile.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Supplier/Products/add_new_product_mobile.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "/Supplier/Products/add_new_product_mobile.twig", 2);
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
        .layui-fluid {
            padding: 0 0 15px 0;
            position: relative;
            margin: 0 auto;
        }
        .layui-card-header {
            padding-left: 0;
            font-weight: bold;
        }
        .layui-card-body {
            padding-left: 0;
        }
        .layui-foldapse .layui-folda-item .layui-folda-content {
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .layui-foldapse .layui-form-item {
            margin-bottom: 10px!important;
        }
        .layui-form-label {
            padding-top: 7px;
        }
        .layui-foldapse .layui-form-item .layui-input-block {
            margin-left: 150px;
        }
        .layui-foldapse .layui-form .layui-form-item:last-child {
            margin-bottom: 0;
        }
        .layui-foldapse .layui-folda-item {
            margin-bottom: 20px;
        }
        .layui-foldapse .layui-folda-item .layui-folda-title {
            position: relative;
            font-size: 18px;
            padding: 10px 5px 10px 25px;
            border-bottom: 1px solid #eee;
            cursor: default;
        }
        .layui-foldapse .layui-folda-item .layui-folda-title .layui-icon {
            position: absolute;
            top: 0;
            left: 3px;
            font-size: 14px;
        }
        .layui-foldapse .layui-folda-item .layui-folda-content-bg {
            padding-left: 15px;
            padding-right: 15px;
            background-color: #f8f8f8;
        }
        .layui-foldapse .layui-form-label {
            width: 120px;
        }

    </style>
    <div class=\"foxdou-row foxdou-row-notm\">
        <div class=\"foxdou-form-row\" style=\"margin-left: 200px;\">
            <form class=\"layui-form layui-form-pane\" action=\"\" id=\"telephone-template-list\">
                <div class=\"foxdou-row foxdou-row-notm front-content\">
                    <div class=\"foxdou-form-row\">
                        <div class=\"layui-fluid\">
                            <div class=\"layui-card\">
                                <div class=\"layui-card-header\">详情</div>
                                <div class=\"layui-card-body\">
                                    <div class=\"layui-foldapse\">
                                        <div class=\"layui-folda-item\">
                                            <h2 class=\"layui-folda-title\">
                                                <i class=\"layui-icon layui-icon-triangle-d\"></i>商品类型（新增后无法修改）</h2>
                                            <div class=\"layui-folda-content layui-folda-content-bg\">
                                                <div class=\"layui-form\">
                                                    ";
        // line 76
        echo "                                                    <div class=\"layui-form-item\">
                                                        <label class=\"layui-form-label\">运营商类别：</label>
                                                        <div class=\"layui-input-block\">
                                                            <input type=\"radio\" name=\"cate_id\" value=\"1\" title=\"移动\" checked>
                                                            <input type=\"radio\" name=\"cate_id\" value=\"2\" title=\"联通\">
                                                            <input type=\"radio\" name=\"cate_id\" value=\"3\" title=\"电信\">
                                                            <input type=\"radio\" name=\"cate_id\" lay-filter=\"cate_id\" value=\"4\" title=\"虚商\">
                                                            <div class=\"layui-input-inline\" style=\"float: none;display: none\">
                                                                <select id=\"mvno_id\" name=\"mvno_id\">
                                                                    <option value=\"\">请选择虚拟运营商</option>
                                                                    ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mvno_list"]) || array_key_exists("mvno_list", $context) ? $context["mvno_list"] : (function () { throw new Twig_Error_Runtime('Variable "mvno_list" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mvno_item"]) {
            // line 87
            echo "                                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mvno_item"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mvno_item"], "name", array()), "html", null, true);
            echo "</option>
                                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mvno_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"layui-form-item\">
                                                        <label class=\"layui-form-label\">快充/慢充：</label>
                                                        <div class=\"layui-input-block\">
                                                            <input type=\"radio\" name=\"speed\" value=\"1\" title=\"快充\" checked>
                                                            <input type=\"radio\" name=\"speed\" value=\"2\" title=\"慢充\">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"layui-folda-item\">
                                            <h2 class=\"layui-folda-title\">
                                                <i class=\"layui-icon layui-icon-triangle-d\"></i>面值</h2>
                                            <div class=\"layui-folda-content layui-folda-content-bg\">
                                                <div class=\"layui-form\">
                                                    <div class=\"layui-form-item\">
                                                        <label class=\"layui-form-label\">面值类型：</label>
                                                        <div class=\"layui-input-block\">
                                                            <input type=\"checkbox\" lay-filter=\"all-checked\" name=\"renyi_type\" value=\"1\" title=\"固定面值\" lay-skin=\"primary\">
                                                            <input type=\"checkbox\" lay-filter=\"all-checked\" name=\"renyi_type\" value=\"2\" title=\"任意充\" lay-skin=\"primary\">
                                                            <input type=\"checkbox\" lay-filter=\"all-checked\" name=\"renyi_type\" value=\"3\" title=\"其它金额\" lay-skin=\"primary\">
                                                        </div>
                                                    </div>
                                                    <div class=\"layui-form-item\">
                                                        <label class=\"layui-form-label\">固定面值：</label>
                                                        <div class=\"layui-input-block\">
                                                            <input type=\"checkbox\" class=\"face_value\" lay-filter=\"all-checked\" name=\"face_value_all\" value=\"0\" title=\"全选\" lay-skin=\"primary\"><br/>
                                                            <input type=\"checkbox\" class=\"face_value\" lay-filter=\"all-checked\" name=\"face_value\" value=\"10\" title=\"10元\" lay-skin=\"primary\">
                                                            <input type=\"checkbox\" class=\"face_value\" lay-filter=\"all-checked\" name=\"face_value\" value=\"20\" title=\"20元\" lay-skin=\"primary\">
                                                            <input type=\"checkbox\" class=\"face_value\" lay-filter=\"all-checked\" name=\"face_value\" value=\"50\" title=\"50元\" lay-skin=\"primary\">
                                                            <input type=\"checkbox\" class=\"face_value\" lay-filter=\"all-checked\" name=\"face_value\" value=\"100\" title=\"100元\" lay-skin=\"primary\">
                                                            <input type=\"checkbox\" class=\"face_value\" lay-filter=\"all-checked\" name=\"face_value\" value=\"200\" title=\"200元\" lay-skin=\"primary\">
                                                            <input type=\"checkbox\" class=\"face_value\" lay-filter=\"all-checked\" name=\"face_value\" value=\"300\" title=\"300元\" lay-skin=\"primary\">
                                                            <input type=\"checkbox\" class=\"face_value\" lay-filter=\"all-checked\" name=\"face_value\" value=\"500\" title=\"500元\" lay-skin=\"primary\">
                                                        </div>
                                                    </div>
                                                    <div class=\"layui-form-item random\" style=\"display: none\">
                                                        <label class=\"layui-form-label\">任意充：</label>
                                                        <div class=\"layui-input-inline layui-inline-400\">
                                                            <input type=\"text\" placeholder=\"请输入任意充数量范围\" id=\"recharge\" name=\"recharge\" class=\"layui-input\">
                                                        </div>
                                                        <div class=\"layui-form-mid layui-word-aux\">例：1~500,501,603~605
                                                        </div>
                                                    </div>
                                                    <div class=\"layui-form-item other-amount\" style=\"display: none\">
                                                        <label class=\"layui-form-label\">其它金额：</label>
                                                        <div class=\"layui-input-inline layui-inline-400\">
                                                            <input type=\"text\" placeholder=\"请输入其它金额的面值\" id=\"other_amount\" name=\"other_amount\" class=\"layui-input\">
                                                        </div>
                                                        <div class=\"layui-form-mid layui-word-aux\">例：501,502,503</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"layui-folda-item region-change\">
                                            <h2 class=\"layui-folda-title\">
                                                <i class=\"layui-icon layui-icon-triangle-d\"></i>商品适用地区（选择虚商时不出现）（新增后无法修改）
                                            </h2>
                                            <div class=\"layui-folda-content layui-folda-content-bg\">
                                                <div class=\"layui-form\">
                                                    <!--.layadmin-remove-color移除tr：hover颜色变化-->
                                                    <table class=\"layui-table layadmin-remove-color\">
                                                        <colgroup>
                                                            <col width=\"15%\">
                                                            <col width=\"15%\">
                                                            <col>
                                                        </colgroup>
                                                        <thead>
                                                        <tr>
                                                            <td>全国范围使用</td>
                                                            <td>全省范围使用</td>
                                                            <td>城市范围使用</td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        ";
        // line 169
        $context["number"] = 1;
        // line 170
        echo "                                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new Twig_Error_Runtime('Variable "region" does not exist.', 170, $this->source); })()));
        foreach ($context['_seq'] as $context["p_id"] => $context["p_v"]) {
            // line 171
            echo "                                                            <tr>
                                                                <td rowspan=\"";
            // line 172
            echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 172, $this->source); })()), "html", null, true);
            echo "\" style=\"display: ";
            if (((isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new Twig_Error_Runtime('Variable "number" does not exist.', 172, $this->source); })()) == 1)) {
                echo "table-cell";
            } else {
                echo "none";
            }
            echo "\">
                                                                    <input type=\"checkbox\" class=\"region-item\" lay-filter=\"all-checked\" name=\"country\" value=\"0\" title=\"全国\" lay-skin=\"primary\">
                                                                </td>
                                                                <td>
                                                                    <input type=\"checkbox\" class=\"region-item\" lay-filter=\"all-checked\" name=\"province\" value=\"";
            // line 176
            echo twig_escape_filter($this->env, $context["p_id"], "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p_v"], "short_name", array()), "html", null, true);
            echo "\" lay-skin=\"primary\">
                                                                </td>
                                                                <td class=\"layui-checkbox-arrange\">
                                                                    ";
            // line 179
            if ((((($context["p_id"] != "110000") && ($context["p_id"] != "120000")) && ($context["p_id"] != "310000")) && ($context["p_id"] != "500000"))) {
                // line 180
                echo "                                                                        <input type=\"checkbox\" class=\"region-item\" lay-filter=\"all-checked\" name=\"city_all\" data-val=\"0\" value=\"";
                echo twig_escape_filter($this->env, $context["p_id"], "html", null, true);
                echo "\" title=\"全选\" lay-skin=\"primary\">
                                                                        <br>
                                                                        ";
                // line 182
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["p_v"], "city_name", array()));
                foreach ($context['_seq'] as $context["c_id"] => $context["c_v"]) {
                    // line 183
                    echo "                                                                            <input type=\"checkbox\" class=\"region-item\" lay-filter=\"all-checked\" name=\"city\" data-parentid=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c_v"], "parent_id", array()), "html", null, true);
                    echo "\" data-province=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p_v"], "short_name", array()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c_v"], "id", array()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c_v"], "short_name", array()), "html", null, true);
                    echo "\" lay-skin=\"primary\">
                                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['c_id'], $context['c_v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 185
                echo "                                                                    ";
            }
            // line 186
            echo "                                                                </td>
                                                            </tr>
                                                            ";
            // line 188
            $context["number"] = ((isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new Twig_Error_Runtime('Variable "number" does not exist.', 188, $this->source); })()) + 1);
            // line 189
            echo "                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['p_id'], $context['p_v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"layui-form-item\">
                                        <div class=\"layui-input-block\" style=\"margin-left: 0\">
                                            <button type=\"button\" class=\"layui-btn next\">下一步</button>
                                            <button type=\"button\" class=\"layui-btn layui-btn-primary front-cancel\">返回</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"foxdou-row foxdou-row-notm next-content\" style=\"display: none\">
                    <div class=\"foxdou-form-row\">
                        <div class=\"layui-fluid\">
                            <div class=\"layui-card\">
                                <div class=\"layui-card-header\">- 设置供货价</div>
                                <div class=\"layui-card-body\">
                                    <div class=\"layui-foldapse\">
                                        <div class=\"layui-folda-item\">
                                            <div class=\"layui-folda-content layui-folda-content-bg\">
                                                <div class=\"layui-form\">
                                                    <!--.layadmin-remove-color移除tr：hover颜色变化-->
                                                    <table class=\"layui-table layadmin-remove-color\">
                                                        <colgroup>
                                                            <col width=\"15%\">
                                                            <col width=\"15%\">
                                                            <col>
                                                        </colgroup>
                                                        <thead>
                                                        <tr>
                                                            <td>商品名称</td>
                                                            <td>面值</td>
                                                            <td>供货价</td>
                                                            <td>供货价格比例</td>
                                                            <td>供货成本</td>
                                                            <td>操作</td>
                                                        </tr>
                                                        </thead>
                                                        <tbody id=\"create-list\">

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"layui-form-item\">
                                        <div class=\"layui-input-block\" style=\"margin-left: 0\">
                                            <button type=\"button\" class=\"layui-btn front\">上一步</button>
                                            <button type=\"button\" class=\"layui-btn layui-btn-normal confirm\">确定</button>
                                            <button type=\"button\" class=\"layui-btn layui-btn-primary next-cancel\">返回</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 260
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 261
        echo "    <script>
        var checked_region_ids   = [];
        var checked_region_names = [];
        var renyi_type           = [];
        var face_value_fix       = [];
        var face_value_random    = [];
        var face_value_other     = [];
        var other_amount_checked = false;
        var recharge_num_checked = false;

        form.render();
        \$(document).on('click', function (e) {
            var target = \$(e.target);
            if (target.is('.next')) {
                if (other_amount_checked) {
                    if (\$('#other_amount').val() == '') {
                        nxwd.showMsg('其它金额不能为空');
                        return false;
                    }
                    face_value_other  = check_other_face_value();
                    if (!face_value_other) {
                        return false;
                    }
                }
                \$('.front-content').hide();

                var datalist = getProductData();

                create_product_row(datalist);

                \$('.next-content').show();
                return false;
            } else if (target.is('.front')) {
                \$('.front-content').show();
                \$('.next-content').hide();
                return false;
            } else if (target.is('.confirm')) {
                add_product();
                return false;
            } else if (target.is('.remove')) {
                deleteElement(e.target);
            } else if (target.is('.syncdown')) {
                var tr_percent = target.parents('tr.product_list').find('.percent').val();
                if (tr_percent === '') {
                    nxwd.showMsg('请输入价格比例');
                    return false;
                }
                syncdown(e.target,tr_percent);
            }
        });

        form.on('radio(cate_id)', function (data) {
            var val = data.value;
            if (val * 1 == 4) {
                \$(data.elem).next().next().show();
                \$('.region-change').hide();
            } else {
                \$(data.elem).next().next().hide();
            }
        });

        form.on('checkbox(all-checked)', function (data) {
            //console.log(data.elem); //得到checkbox原始DOM对象
            var that = data.elem;
            if (data.elem.checked) {
                if (\$(that).attr('name') == 'city') {
                    if (\$.inArray(\$(this).val(), checked_region_ids) == -1) {
                        checked_region_ids.push(\$(that).val());
                        checked_region_names.push(\$(that).attr('data-province') + \$(that).attr('title'));
                    }
                } else if (\$(that).attr('name') == 'city_all') {
                    var p_id = \$(that).val();
                    \$('.region-item').each(function () {
                        if (\$(this).attr('data-parentid') == p_id) {
                            \$(this).prop('checked', true);
                            if (\$.inArray(\$(this).val(), checked_region_ids) == -1) {
                                checked_region_ids.push(\$(this).val());
                                checked_region_names.push(\$(this).attr('data-province') + \$(this).attr('title'));
                            }
                        }
                    });
                } else if (\$(that).attr('name') == 'country') {
                    checked_region_ids.push(\$(that).val());
                    checked_region_names.push(\$(that).attr('title'));
                } else if (\$(that).attr('name') == 'province') {
                    checked_region_ids.push(\$(that).val());
                    checked_region_names.push(\$(that).attr('title'));
                } else if (\$(that).attr('name') == 'face_value_all') {
                    \$('.face_value').prop('checked', true);

                    \$('.face_value').each(function () {
                        var val = \$(this).val();
                        if (val * 1 > 0 && \$.inArray(val, face_value_fix) == -1) {
                            face_value_fix.push(val);
                        }
                    });

                } else if (\$(that).attr('name') == 'face_value') {
                    face_value_fix.push(\$(that).val());
                } else if (\$(that).attr('name') == 'renyi_type') {
                    if (\$(that).val() == 2) {
                        \$('.random').show();
                        recharge_num_checked = true;
                        face_value_random.push(1);
                    } else if (\$(this).val() == 3) {
                        \$('.other-amount').show();
                        other_amount_checked = true;
                    }
                    renyi_type.push(\$(this).val());
                }
            } else {
                if (\$(that).attr('name') == 'city') {
                    checked_region_ids.remove(\$(that).val());
                    checked_region_names.remove(\$(that).attr('data-province') + \$(that).attr('title'));
                } else if (\$(that).attr('name') == 'city_all') {
                    var p_id = \$(that).val();
                    \$('.region-item').each(function () {
                        if (\$(this).attr('data-parentid') == p_id) {
                            \$(this).prop('checked', false);
                            checked_region_ids.remove(\$(this).val());
                            checked_region_names.remove(\$(this).attr('data-province') + \$(this).attr('title'));
                        }
                    });
                } else if (\$(that).attr('name') == 'country') {
                    checked_region_ids.remove(\$(that).val());
                    checked_region_names.remove(\$(that).attr('title'));
                } else if (\$(that).attr('name') == 'province') {
                    checked_region_ids.remove(\$(that).val());
                    checked_region_names.remove(\$(that).attr('title'));
                } else if (\$(that).attr('name') == 'face_value_all') {
                    \$('.face_value').prop('checked', false);

                    \$('.face_value').each(function () {
                        var val = \$(this).val();
                        if (val * 1 > 0) {
                            face_value_fix.remove(\$(this).val());
                        }
                    });
                } else if (\$(that).attr('name') == 'face_value') {
                    face_value_fix.remove(\$(that).val());
                } else if (\$(that).attr('name') == 'renyi_type') {
                    if (\$(that).val() == 2) {
                        \$('.random').hide();
                        recharge_num_checked = false;
                        face_value_random.remove(1);
                    } else if (\$(this).val() == 3) {
                        \$('.other-amount').hide();
                        other_amount_checked = false;
                        face_value_other     = [];
                    }
                    renyi_type.remove(\$(this).val());

                }
            }
            // console.log(checked_region_ids,checked_region_names)
            form.render('checkbox');
        });


        /**
         * 校验其它值选项
         */
        function check_other_face_value() {
            var errormsg         = '';
            var other_face_value = \$('#other_amount');
            var other_val        = other_face_value.val();
            var face_value_list  = [\"10\", \"20\", \"30\", \"50\", \"100\", \"200\", \"300\", \"500\"];
            var regOther         = /^([\\d]+)(|.[\\d]+)(|,([\\d]+)(|.[\\d]+))+\$/;
            if (!regOther.test(other_val)) {
                errormsg = '其它金额选项：填写格式错误<br>';
                nxwd.showMsg(errormsg);
                return false;
            }
            var face_values = other_val.split(',');

            var checkRepeat = [];
            var repeatMsg   = [];
            for (var i = 0; i < face_values.length; i++) {
                if (\$.inArray(face_values[i], face_value_list) !== -1) {
                    errormsg = '其它选项：不能填写系统已有的选项值<br>';
                    other_face_value.val('');
                    nxwd.showMsg(errormsg);
                    return false;
                }
                if (\$.inArray(face_values[i], checkRepeat) !== -1) {
                    if (\$.inArray(face_values[i], repeatMsg) === -1) {
                        repeatMsg.push(face_values[i]);
                    }
                } else {
                    checkRepeat.push(face_values[i]);
                }
            }
            if (repeatMsg.length > 0) {
                errormsg = '您所输入其它值有重复，系统将过滤重复值' + repeatMsg.toString() + '，取' + checkRepeat.toString() + '<br>';
                nxwd.showMsg(errormsg);
                return false;
            }
            return checkRepeat;
        }

        /**
         * 创建产品行DOM
         * @param random
         * @param id
         */
        function create_product_row(data) {

            var html = '';

            for (var i = 0; i < data.length; i++) {
                html += \"<tr class='product_list' product_name='\" + data[i].product_name + \"' face_value='\" +
                    data[i].face_value + \"' renyi_type='\" + data[i].renyi_type + \"' cate_id='\" + data[i].cate_id + \"' if_mvno='\" +
                    data[i].if_mvno + \"' mvno='\" + data[i].mvno + \"' speed='\" + data[i].speed + \"' num='\" + data[i].num + \"' province_name='\" +
                    data[i].regions_name + \"' city_name='\" + data[i].regions_name + \"' isp_name='\" + data[i].isp_name + \"'>\" +
                    \"<td>\" + data[i].product_name + \"</td>\" +
                    \"<td>\" + data[i].face_value + \"</td>\" +
                    \"<td>\" +
                    \"<input type=\\\"text\\\" class=\\\"layui-input cost\\\" name=\\\"cost[]\\\" title=\\\"请填入供货价\\\" lay-skin=\\\"primary\\\">\" +
                    \"</td>\" +
                    \"<td>\" +
                    \"<input type=\\\"text\\\" class=\\\"layui-input percent\\\" name=\\\"percent[]\\\" lay-skin=\\\"primary\\\">\" +
                    \"</td>\" +
                    \"<td>\" +
                    \"<input type=\\\"text\\\" class=\\\"layui-input sell_cost\\\" name=\\\"sell_cost[]\\\" title=\\\"请填入成本价格\\\" lay-skin=\\\"primary\\\">\" +
                    \"</td>\" +
                    \"<td class=\\\"layui-checkbox-arrange\\\">\" +
                    \"<button type=\\\"button\\\" class=\\\"layui-btn layui-btn-sm syncdown\\\" lay-skin=\\\"primary\\\">向下同步</button>\" +
                    \"<button type=\\\"button\\\" class=\\\"layui-btn layui-btn-danger layui-btn-sm remove\\\" lay-skin=\\\"primary\\\">移除</button>\" +
                    \"</td>\" +
                    \"</tr>\";
            }

            \$('#create-list').html(html);

            \$('.cost').blur(function () {
                var val, face_value, sell_price;
                face_value = \$(this).parents('tr.product_list').attr('face_value') * 1;
                if (!face_value) {
                    nxwd.showMsg('面值不能为空');
                }
                sell_price = \$(this).val() * 1;
                val        = sell_price / face_value * 100;
                \$(this).parents('tr.product_list').find('.percent').val(val.toFixed(2) + '%');
            });

            \$('.percent').blur(function () {
                var sell_price, face_value, sell_dis;
                face_value = \$(this).parents('tr.product_list').attr('face_value') * 1;
                if (!face_value) {
                    nxwd.showMsg('面值不能为空');
                }
                sell_dis = \$(this).val();
                if (sell_dis.indexOf('%') !== -1) {
                    sell_dis = sell_dis.replace('%', '');
                }
                sell_price = face_value * (sell_dis * 1 / 100);
                \$(this).parents('tr.product_list').find('.cost').val(sell_price);
                //如果没有%号重新加上%号显示
                if (sell_dis.indexOf('%') == -1) {
                    \$(this).val(sell_dis + '%');
                }
            });
        }

        /**
         * 添加产品
         */
        function add_product() {
            var product_data = new Array;
            \$('.product_list').each(function () {
                var ob           = {};
                var that         = \$(this);
                ob.renyi_type    = that.attr('renyi_type');
                ob.face_value    = that.attr('face_value');
                ob.speed         = that.attr('speed');
                ob.cate_id       = that.attr('cate_id');
                ob.product_name  = that.attr('product_name');
                ob.sell_cost     = that.find('.sell_cost').val();
                ob.cost          = that.find('.cost').val();;
                ob.num           = that.attr('num');
                ob.province_name = that.attr('province_name');
                ob.city_name     = that.attr('city_name');
                ob.isp_name      = that.attr('isp_name');
                ob.if_mvno       = that.attr('if_mvno');
                ob.mvno          = that.attr('mvno');
                ob.template_id   = '";
        // line 546
        echo twig_escape_filter($this->env, (isset($context["template_id"]) || array_key_exists("template_id", $context) ? $context["template_id"] : (function () { throw new Twig_Error_Runtime('Variable "template_id" does not exist.', 546, $this->source); })()), "html", null, true);
        echo "';
                product_data.push(ob);
            });

            if (product_data.length == 0) {
                nxwd.showMsg('商品不能为空');
                return false;
            }

            var loading = null;
            var before = function(){
                loading = layer.load();
            }
            var error = function(){
                layer.close(loading);
                nxwd.showMsg('服务器未响应，请稍后重试');
            }
            var success = function(res){
                layer.close(loading);
                if (res.status) {
                    nxwd.showMsg(res.msg,'success');
                    location.reload();
                } else {
                    nxwd.showMsg(res.msg,'danger');
                }
            }
            nxwd.ajaxRequest('";
        // line 572
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_products_add_new_product");
        echo "?template_id=";
        echo twig_escape_filter($this->env, (isset($context["template_id"]) || array_key_exists("template_id", $context) ? $context["template_id"] : (function () { throw new Twig_Error_Runtime('Variable "template_id" does not exist.', 572, $this->source); })()), "html", null, true);
        echo "&sell_type=1','POST',{product_data:product_data},'json',success,before,error);
        }

        /**
         * 比例向下同步
         */
        function syncdown(that,percent) {
            var _per = percent;
            if (percent.indexOf('%') !== -1) {
                percent = percent.replace('%', '');
            }
            percent = percent * 1 / 100;
            var tr = \$(that).parents('tr.product_list').nextAll();
            tr.each(function () {
                var tr_face_value = \$(this).attr('face_value');
                \$(this).find('.cost').val(tr_face_value * percent);
                \$(this).find('.percent').val(_per);
            });
        }

        /**
         * 删除数据
         */
        function deleteElement(dom) {
            var product = \$(dom).parents('tr.product_list');
            product.remove();
        }

        function getProductData() {
            var args       = [];
            var cate       = \$('input[name=\"cate_id\"]:checked');
            var cate_id    = cate.val();
            var isp_name   = cate.attr('title');
            var speed      = \$('input[name=speed]:checked').val();
            var speed_text = \$('input[name=speed]:checked').attr('title');
            var num        = 1, if_mvno = 0, mvno_id = 0;

            for (var i = 0; i < renyi_type.length; i++) {
                var json = {
                    renyi_type: renyi_type[i],
                    speed:      speed,
                    cate_id:    cate_id,
                    if_mvno:    if_mvno,
                    mvno:       mvno_id,
                    num:        num,
                    isp_name:   isp_name,
                    speed_text: speed_text
                };

                if (cate_id * 1 == 4) {//虚商
                    mvno_id = \$('#mvno_id').val();
                    if (mvno_id == '' || mvno_id == 0) {
                        nxwd.showMsg('请选择虚拟运行商');
                        return false;
                    }
                    if_mvno        = 1;
                    json.mvno_name = \$('#mvno_id').find('option:selected').text();

                } else {
                    if (checked_region_ids.length == 0 || checked_region_names.length == 0) {
                        nxwd.showMsg('请选择商品适用地区');
                        return false;
                    }
                    json.regions_name = checked_region_names;
                    json.regions_id   = checked_region_ids;

                }

                switch (renyi_type[i]) {
                    case '1':
                        json.face_value = face_value_fix;
                        break;
                    case '2':
                        json.face_value = face_value_random;
                        json.num        = \$('#recharge').val();
                        break;
                    case '3':
                        json.face_value = face_value_other;
                        break;
                    default:
                        break;
                }
                args.push(json);
            }


            var product = [];
            if (cate_id * 1 == 4) {
                //  [
                //    {renyi:1,face_value:[10,20,50],speed:1,cate_id:4,if_mvno:1,mvno:5,num:1...}
                //    {renyi:2,face_value:[1],speed:1,cate_id:4,if_mvno:1,mvno:5,num:1-500...}
                //    {renyi:3,face_value:[155,209],speed:1,cate_id:4,if_mvno:1,mvno:5,num:1...}
                //   ]

                for (var i = 0; i < args.length; i++) {
                    for (var j = 0; j < args[i].face_value.length; j++) {
                        var temp          = {};
                        var text = '';
                        if (args[i].face_value[j] == 1) {
                            text = '任意充';
                        } else {
                            text = args[i].face_value[j] + '元';
                        }
                        temp.renyi_type   = args[i].renyi_type;
                        temp.face_value   = args[i].face_value[j];
                        temp.speed        = args[i].speed;
                        temp.cate_id      = args[i].cate_id;
                        temp.if_mvno      = args[i].if_mvno;
                        temp.mvno         = args[i].mvno;
                        temp.num          = args[i].num;
                        temp.isp_name     = args[i].isp_name;
                        temp.product_name = '全国' + args[i].mvno_name + args[i].isp_name + '话费' + text + args[i].speed_text;
                        product.push(temp);
                    }
                }
            } else {
                //  [
                //     {renyi:1,face_value:[10,20,50],speed:1,cate_id:1,regions_name:['北京','天津'],regions_id:[10000,11100],if_mvno:0,mvno:0,num:1...}
                //     {renyi:2,face_value:[1],speed:1,cate_id:1,regions_name:['北京','天津'],regions_id:[10000,11100],if_mvno:0,mvno:0,num:1-500...}
                //     {renyi:3,face_value:[155,209],speed:1,cate_id:1,regions_name:['北京','天津'],regions_id:[10000,11100],if_mvno:0,mvno:0,num:1...}
                //
                for (var i = 0; i < args.length; i++) {
                    for (var j = 0; j < args[i].face_value.length; j++) {
                        for (var k = 0; k < args[i].regions_id.length; k++) {
                            var temp          = {};
                            var text = '';
                            if (args[i].face_value[j] == 1) {
                                text = '任意充';
                            } else {
                                text = args[i].face_value[j] + '元';
                            }
                            temp.renyi_type   = args[i].renyi_type;
                            temp.face_value   = args[i].face_value[j];
                            temp.speed        = args[i].speed;
                            temp.cate_id      = args[i].cate_id;
                            temp.if_mvno      = args[i].if_mvno;
                            temp.mvno         = args[i].mvno;
                            temp.num          = args[i].num;
                            temp.isp_name     = args[i].isp_name;
                            temp.regions_id   = args[i].regions_id[k];
                            temp.regions_name = args[i].regions_name[k];
                            temp.product_name = args[i].regions_name[k] + args[i].isp_name + '话费' + text + args[i].speed_text;
                            product.push(temp);
                        }
                    }
                }
            }
            return product;
        }

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/Supplier/Products/add_new_product_mobile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  715 => 572,  686 => 546,  399 => 261,  390 => 260,  311 => 190,  305 => 189,  303 => 188,  299 => 186,  296 => 185,  281 => 183,  277 => 182,  271 => 180,  269 => 179,  261 => 176,  248 => 172,  245 => 171,  240 => 170,  238 => 169,  156 => 89,  145 => 87,  141 => 86,  129 => 76,  57 => 5,  48 => 4,  38 => 1,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Supplier/Common/layout.twig' %}
{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

{% block main_content %}
    <style>
        .layui-fluid {
            padding: 0 0 15px 0;
            position: relative;
            margin: 0 auto;
        }
        .layui-card-header {
            padding-left: 0;
            font-weight: bold;
        }
        .layui-card-body {
            padding-left: 0;
        }
        .layui-foldapse .layui-folda-item .layui-folda-content {
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .layui-foldapse .layui-form-item {
            margin-bottom: 10px!important;
        }
        .layui-form-label {
            padding-top: 7px;
        }
        .layui-foldapse .layui-form-item .layui-input-block {
            margin-left: 150px;
        }
        .layui-foldapse .layui-form .layui-form-item:last-child {
            margin-bottom: 0;
        }
        .layui-foldapse .layui-folda-item {
            margin-bottom: 20px;
        }
        .layui-foldapse .layui-folda-item .layui-folda-title {
            position: relative;
            font-size: 18px;
            padding: 10px 5px 10px 25px;
            border-bottom: 1px solid #eee;
            cursor: default;
        }
        .layui-foldapse .layui-folda-item .layui-folda-title .layui-icon {
            position: absolute;
            top: 0;
            left: 3px;
            font-size: 14px;
        }
        .layui-foldapse .layui-folda-item .layui-folda-content-bg {
            padding-left: 15px;
            padding-right: 15px;
            background-color: #f8f8f8;
        }
        .layui-foldapse .layui-form-label {
            width: 120px;
        }

    </style>
    <div class=\"foxdou-row foxdou-row-notm\">
        <div class=\"foxdou-form-row\" style=\"margin-left: 200px;\">
            <form class=\"layui-form layui-form-pane\" action=\"\" id=\"telephone-template-list\">
                <div class=\"foxdou-row foxdou-row-notm front-content\">
                    <div class=\"foxdou-form-row\">
                        <div class=\"layui-fluid\">
                            <div class=\"layui-card\">
                                <div class=\"layui-card-header\">详情</div>
                                <div class=\"layui-card-body\">
                                    <div class=\"layui-foldapse\">
                                        <div class=\"layui-folda-item\">
                                            <h2 class=\"layui-folda-title\">
                                                <i class=\"layui-icon layui-icon-triangle-d\"></i>商品类型（新增后无法修改）</h2>
                                            <div class=\"layui-folda-content layui-folda-content-bg\">
                                                <div class=\"layui-form\">
                                                    {#{{ sf.radio(form.cate_id, '运营商类别', to_options('App\\\\Constants::CARRIERS')) }}#}
                                                    <div class=\"layui-form-item\">
                                                        <label class=\"layui-form-label\">运营商类别：</label>
                                                        <div class=\"layui-input-block\">
                                                            <input type=\"radio\" name=\"cate_id\" value=\"1\" title=\"移动\" checked>
                                                            <input type=\"radio\" name=\"cate_id\" value=\"2\" title=\"联通\">
                                                            <input type=\"radio\" name=\"cate_id\" value=\"3\" title=\"电信\">
                                                            <input type=\"radio\" name=\"cate_id\" lay-filter=\"cate_id\" value=\"4\" title=\"虚商\">
                                                            <div class=\"layui-input-inline\" style=\"float: none;display: none\">
                                                                <select id=\"mvno_id\" name=\"mvno_id\">
                                                                    <option value=\"\">请选择虚拟运营商</option>
                                                                    {% for mvno_item in mvno_list %}
                                                                        <option value=\"{{ mvno_item.id }}\">{{ mvno_item.name }}</option>
                                                                    {% endfor %}
                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"layui-form-item\">
                                                        <label class=\"layui-form-label\">快充/慢充：</label>
                                                        <div class=\"layui-input-block\">
                                                            <input type=\"radio\" name=\"speed\" value=\"1\" title=\"快充\" checked>
                                                            <input type=\"radio\" name=\"speed\" value=\"2\" title=\"慢充\">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"layui-folda-item\">
                                            <h2 class=\"layui-folda-title\">
                                                <i class=\"layui-icon layui-icon-triangle-d\"></i>面值</h2>
                                            <div class=\"layui-folda-content layui-folda-content-bg\">
                                                <div class=\"layui-form\">
                                                    <div class=\"layui-form-item\">
                                                        <label class=\"layui-form-label\">面值类型：</label>
                                                        <div class=\"layui-input-block\">
                                                            <input type=\"checkbox\" lay-filter=\"all-checked\" name=\"renyi_type\" value=\"1\" title=\"固定面值\" lay-skin=\"primary\">
                                                            <input type=\"checkbox\" lay-filter=\"all-checked\" name=\"renyi_type\" value=\"2\" title=\"任意充\" lay-skin=\"primary\">
                                                            <input type=\"checkbox\" lay-filter=\"all-checked\" name=\"renyi_type\" value=\"3\" title=\"其它金额\" lay-skin=\"primary\">
                                                        </div>
                                                    </div>
                                                    <div class=\"layui-form-item\">
                                                        <label class=\"layui-form-label\">固定面值：</label>
                                                        <div class=\"layui-input-block\">
                                                            <input type=\"checkbox\" class=\"face_value\" lay-filter=\"all-checked\" name=\"face_value_all\" value=\"0\" title=\"全选\" lay-skin=\"primary\"><br/>
                                                            <input type=\"checkbox\" class=\"face_value\" lay-filter=\"all-checked\" name=\"face_value\" value=\"10\" title=\"10元\" lay-skin=\"primary\">
                                                            <input type=\"checkbox\" class=\"face_value\" lay-filter=\"all-checked\" name=\"face_value\" value=\"20\" title=\"20元\" lay-skin=\"primary\">
                                                            <input type=\"checkbox\" class=\"face_value\" lay-filter=\"all-checked\" name=\"face_value\" value=\"50\" title=\"50元\" lay-skin=\"primary\">
                                                            <input type=\"checkbox\" class=\"face_value\" lay-filter=\"all-checked\" name=\"face_value\" value=\"100\" title=\"100元\" lay-skin=\"primary\">
                                                            <input type=\"checkbox\" class=\"face_value\" lay-filter=\"all-checked\" name=\"face_value\" value=\"200\" title=\"200元\" lay-skin=\"primary\">
                                                            <input type=\"checkbox\" class=\"face_value\" lay-filter=\"all-checked\" name=\"face_value\" value=\"300\" title=\"300元\" lay-skin=\"primary\">
                                                            <input type=\"checkbox\" class=\"face_value\" lay-filter=\"all-checked\" name=\"face_value\" value=\"500\" title=\"500元\" lay-skin=\"primary\">
                                                        </div>
                                                    </div>
                                                    <div class=\"layui-form-item random\" style=\"display: none\">
                                                        <label class=\"layui-form-label\">任意充：</label>
                                                        <div class=\"layui-input-inline layui-inline-400\">
                                                            <input type=\"text\" placeholder=\"请输入任意充数量范围\" id=\"recharge\" name=\"recharge\" class=\"layui-input\">
                                                        </div>
                                                        <div class=\"layui-form-mid layui-word-aux\">例：1~500,501,603~605
                                                        </div>
                                                    </div>
                                                    <div class=\"layui-form-item other-amount\" style=\"display: none\">
                                                        <label class=\"layui-form-label\">其它金额：</label>
                                                        <div class=\"layui-input-inline layui-inline-400\">
                                                            <input type=\"text\" placeholder=\"请输入其它金额的面值\" id=\"other_amount\" name=\"other_amount\" class=\"layui-input\">
                                                        </div>
                                                        <div class=\"layui-form-mid layui-word-aux\">例：501,502,503</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"layui-folda-item region-change\">
                                            <h2 class=\"layui-folda-title\">
                                                <i class=\"layui-icon layui-icon-triangle-d\"></i>商品适用地区（选择虚商时不出现）（新增后无法修改）
                                            </h2>
                                            <div class=\"layui-folda-content layui-folda-content-bg\">
                                                <div class=\"layui-form\">
                                                    <!--.layadmin-remove-color移除tr：hover颜色变化-->
                                                    <table class=\"layui-table layadmin-remove-color\">
                                                        <colgroup>
                                                            <col width=\"15%\">
                                                            <col width=\"15%\">
                                                            <col>
                                                        </colgroup>
                                                        <thead>
                                                        <tr>
                                                            <td>全国范围使用</td>
                                                            <td>全省范围使用</td>
                                                            <td>城市范围使用</td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        {% set number = 1 %}
                                                        {% for p_id,p_v in region %}
                                                            <tr>
                                                                <td rowspan=\"{{ count }}\" style=\"display: {% if number==1 %}table-cell{% else %}none{% endif %}\">
                                                                    <input type=\"checkbox\" class=\"region-item\" lay-filter=\"all-checked\" name=\"country\" value=\"0\" title=\"全国\" lay-skin=\"primary\">
                                                                </td>
                                                                <td>
                                                                    <input type=\"checkbox\" class=\"region-item\" lay-filter=\"all-checked\" name=\"province\" value=\"{{ p_id }}\" title=\"{{ p_v.short_name }}\" lay-skin=\"primary\">
                                                                </td>
                                                                <td class=\"layui-checkbox-arrange\">
                                                                    {% if p_id != '110000' and p_id != '120000' and p_id != '310000' and p_id != '500000' %}
                                                                        <input type=\"checkbox\" class=\"region-item\" lay-filter=\"all-checked\" name=\"city_all\" data-val=\"0\" value=\"{{ p_id }}\" title=\"全选\" lay-skin=\"primary\">
                                                                        <br>
                                                                        {% for c_id,c_v in p_v.city_name %}
                                                                            <input type=\"checkbox\" class=\"region-item\" lay-filter=\"all-checked\" name=\"city\" data-parentid=\"{{ c_v.parent_id }}\" data-province=\"{{ p_v.short_name }}\" value=\"{{ c_v.id }}\" title=\"{{ c_v.short_name }}\" lay-skin=\"primary\">
                                                                        {% endfor %}
                                                                    {% endif %}
                                                                </td>
                                                            </tr>
                                                            {% set number = number+1 %}
                                                        {% endfor %}
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"layui-form-item\">
                                        <div class=\"layui-input-block\" style=\"margin-left: 0\">
                                            <button type=\"button\" class=\"layui-btn next\">下一步</button>
                                            <button type=\"button\" class=\"layui-btn layui-btn-primary front-cancel\">返回</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"foxdou-row foxdou-row-notm next-content\" style=\"display: none\">
                    <div class=\"foxdou-form-row\">
                        <div class=\"layui-fluid\">
                            <div class=\"layui-card\">
                                <div class=\"layui-card-header\">- 设置供货价</div>
                                <div class=\"layui-card-body\">
                                    <div class=\"layui-foldapse\">
                                        <div class=\"layui-folda-item\">
                                            <div class=\"layui-folda-content layui-folda-content-bg\">
                                                <div class=\"layui-form\">
                                                    <!--.layadmin-remove-color移除tr：hover颜色变化-->
                                                    <table class=\"layui-table layadmin-remove-color\">
                                                        <colgroup>
                                                            <col width=\"15%\">
                                                            <col width=\"15%\">
                                                            <col>
                                                        </colgroup>
                                                        <thead>
                                                        <tr>
                                                            <td>商品名称</td>
                                                            <td>面值</td>
                                                            <td>供货价</td>
                                                            <td>供货价格比例</td>
                                                            <td>供货成本</td>
                                                            <td>操作</td>
                                                        </tr>
                                                        </thead>
                                                        <tbody id=\"create-list\">

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"layui-form-item\">
                                        <div class=\"layui-input-block\" style=\"margin-left: 0\">
                                            <button type=\"button\" class=\"layui-btn front\">上一步</button>
                                            <button type=\"button\" class=\"layui-btn layui-btn-normal confirm\">确定</button>
                                            <button type=\"button\" class=\"layui-btn layui-btn-primary next-cancel\">返回</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
{% endblock %}
{% block js_end %}
    <script>
        var checked_region_ids   = [];
        var checked_region_names = [];
        var renyi_type           = [];
        var face_value_fix       = [];
        var face_value_random    = [];
        var face_value_other     = [];
        var other_amount_checked = false;
        var recharge_num_checked = false;

        form.render();
        \$(document).on('click', function (e) {
            var target = \$(e.target);
            if (target.is('.next')) {
                if (other_amount_checked) {
                    if (\$('#other_amount').val() == '') {
                        nxwd.showMsg('其它金额不能为空');
                        return false;
                    }
                    face_value_other  = check_other_face_value();
                    if (!face_value_other) {
                        return false;
                    }
                }
                \$('.front-content').hide();

                var datalist = getProductData();

                create_product_row(datalist);

                \$('.next-content').show();
                return false;
            } else if (target.is('.front')) {
                \$('.front-content').show();
                \$('.next-content').hide();
                return false;
            } else if (target.is('.confirm')) {
                add_product();
                return false;
            } else if (target.is('.remove')) {
                deleteElement(e.target);
            } else if (target.is('.syncdown')) {
                var tr_percent = target.parents('tr.product_list').find('.percent').val();
                if (tr_percent === '') {
                    nxwd.showMsg('请输入价格比例');
                    return false;
                }
                syncdown(e.target,tr_percent);
            }
        });

        form.on('radio(cate_id)', function (data) {
            var val = data.value;
            if (val * 1 == 4) {
                \$(data.elem).next().next().show();
                \$('.region-change').hide();
            } else {
                \$(data.elem).next().next().hide();
            }
        });

        form.on('checkbox(all-checked)', function (data) {
            //console.log(data.elem); //得到checkbox原始DOM对象
            var that = data.elem;
            if (data.elem.checked) {
                if (\$(that).attr('name') == 'city') {
                    if (\$.inArray(\$(this).val(), checked_region_ids) == -1) {
                        checked_region_ids.push(\$(that).val());
                        checked_region_names.push(\$(that).attr('data-province') + \$(that).attr('title'));
                    }
                } else if (\$(that).attr('name') == 'city_all') {
                    var p_id = \$(that).val();
                    \$('.region-item').each(function () {
                        if (\$(this).attr('data-parentid') == p_id) {
                            \$(this).prop('checked', true);
                            if (\$.inArray(\$(this).val(), checked_region_ids) == -1) {
                                checked_region_ids.push(\$(this).val());
                                checked_region_names.push(\$(this).attr('data-province') + \$(this).attr('title'));
                            }
                        }
                    });
                } else if (\$(that).attr('name') == 'country') {
                    checked_region_ids.push(\$(that).val());
                    checked_region_names.push(\$(that).attr('title'));
                } else if (\$(that).attr('name') == 'province') {
                    checked_region_ids.push(\$(that).val());
                    checked_region_names.push(\$(that).attr('title'));
                } else if (\$(that).attr('name') == 'face_value_all') {
                    \$('.face_value').prop('checked', true);

                    \$('.face_value').each(function () {
                        var val = \$(this).val();
                        if (val * 1 > 0 && \$.inArray(val, face_value_fix) == -1) {
                            face_value_fix.push(val);
                        }
                    });

                } else if (\$(that).attr('name') == 'face_value') {
                    face_value_fix.push(\$(that).val());
                } else if (\$(that).attr('name') == 'renyi_type') {
                    if (\$(that).val() == 2) {
                        \$('.random').show();
                        recharge_num_checked = true;
                        face_value_random.push(1);
                    } else if (\$(this).val() == 3) {
                        \$('.other-amount').show();
                        other_amount_checked = true;
                    }
                    renyi_type.push(\$(this).val());
                }
            } else {
                if (\$(that).attr('name') == 'city') {
                    checked_region_ids.remove(\$(that).val());
                    checked_region_names.remove(\$(that).attr('data-province') + \$(that).attr('title'));
                } else if (\$(that).attr('name') == 'city_all') {
                    var p_id = \$(that).val();
                    \$('.region-item').each(function () {
                        if (\$(this).attr('data-parentid') == p_id) {
                            \$(this).prop('checked', false);
                            checked_region_ids.remove(\$(this).val());
                            checked_region_names.remove(\$(this).attr('data-province') + \$(this).attr('title'));
                        }
                    });
                } else if (\$(that).attr('name') == 'country') {
                    checked_region_ids.remove(\$(that).val());
                    checked_region_names.remove(\$(that).attr('title'));
                } else if (\$(that).attr('name') == 'province') {
                    checked_region_ids.remove(\$(that).val());
                    checked_region_names.remove(\$(that).attr('title'));
                } else if (\$(that).attr('name') == 'face_value_all') {
                    \$('.face_value').prop('checked', false);

                    \$('.face_value').each(function () {
                        var val = \$(this).val();
                        if (val * 1 > 0) {
                            face_value_fix.remove(\$(this).val());
                        }
                    });
                } else if (\$(that).attr('name') == 'face_value') {
                    face_value_fix.remove(\$(that).val());
                } else if (\$(that).attr('name') == 'renyi_type') {
                    if (\$(that).val() == 2) {
                        \$('.random').hide();
                        recharge_num_checked = false;
                        face_value_random.remove(1);
                    } else if (\$(this).val() == 3) {
                        \$('.other-amount').hide();
                        other_amount_checked = false;
                        face_value_other     = [];
                    }
                    renyi_type.remove(\$(this).val());

                }
            }
            // console.log(checked_region_ids,checked_region_names)
            form.render('checkbox');
        });


        /**
         * 校验其它值选项
         */
        function check_other_face_value() {
            var errormsg         = '';
            var other_face_value = \$('#other_amount');
            var other_val        = other_face_value.val();
            var face_value_list  = [\"10\", \"20\", \"30\", \"50\", \"100\", \"200\", \"300\", \"500\"];
            var regOther         = /^([\\d]+)(|.[\\d]+)(|,([\\d]+)(|.[\\d]+))+\$/;
            if (!regOther.test(other_val)) {
                errormsg = '其它金额选项：填写格式错误<br>';
                nxwd.showMsg(errormsg);
                return false;
            }
            var face_values = other_val.split(',');

            var checkRepeat = [];
            var repeatMsg   = [];
            for (var i = 0; i < face_values.length; i++) {
                if (\$.inArray(face_values[i], face_value_list) !== -1) {
                    errormsg = '其它选项：不能填写系统已有的选项值<br>';
                    other_face_value.val('');
                    nxwd.showMsg(errormsg);
                    return false;
                }
                if (\$.inArray(face_values[i], checkRepeat) !== -1) {
                    if (\$.inArray(face_values[i], repeatMsg) === -1) {
                        repeatMsg.push(face_values[i]);
                    }
                } else {
                    checkRepeat.push(face_values[i]);
                }
            }
            if (repeatMsg.length > 0) {
                errormsg = '您所输入其它值有重复，系统将过滤重复值' + repeatMsg.toString() + '，取' + checkRepeat.toString() + '<br>';
                nxwd.showMsg(errormsg);
                return false;
            }
            return checkRepeat;
        }

        /**
         * 创建产品行DOM
         * @param random
         * @param id
         */
        function create_product_row(data) {

            var html = '';

            for (var i = 0; i < data.length; i++) {
                html += \"<tr class='product_list' product_name='\" + data[i].product_name + \"' face_value='\" +
                    data[i].face_value + \"' renyi_type='\" + data[i].renyi_type + \"' cate_id='\" + data[i].cate_id + \"' if_mvno='\" +
                    data[i].if_mvno + \"' mvno='\" + data[i].mvno + \"' speed='\" + data[i].speed + \"' num='\" + data[i].num + \"' province_name='\" +
                    data[i].regions_name + \"' city_name='\" + data[i].regions_name + \"' isp_name='\" + data[i].isp_name + \"'>\" +
                    \"<td>\" + data[i].product_name + \"</td>\" +
                    \"<td>\" + data[i].face_value + \"</td>\" +
                    \"<td>\" +
                    \"<input type=\\\"text\\\" class=\\\"layui-input cost\\\" name=\\\"cost[]\\\" title=\\\"请填入供货价\\\" lay-skin=\\\"primary\\\">\" +
                    \"</td>\" +
                    \"<td>\" +
                    \"<input type=\\\"text\\\" class=\\\"layui-input percent\\\" name=\\\"percent[]\\\" lay-skin=\\\"primary\\\">\" +
                    \"</td>\" +
                    \"<td>\" +
                    \"<input type=\\\"text\\\" class=\\\"layui-input sell_cost\\\" name=\\\"sell_cost[]\\\" title=\\\"请填入成本价格\\\" lay-skin=\\\"primary\\\">\" +
                    \"</td>\" +
                    \"<td class=\\\"layui-checkbox-arrange\\\">\" +
                    \"<button type=\\\"button\\\" class=\\\"layui-btn layui-btn-sm syncdown\\\" lay-skin=\\\"primary\\\">向下同步</button>\" +
                    \"<button type=\\\"button\\\" class=\\\"layui-btn layui-btn-danger layui-btn-sm remove\\\" lay-skin=\\\"primary\\\">移除</button>\" +
                    \"</td>\" +
                    \"</tr>\";
            }

            \$('#create-list').html(html);

            \$('.cost').blur(function () {
                var val, face_value, sell_price;
                face_value = \$(this).parents('tr.product_list').attr('face_value') * 1;
                if (!face_value) {
                    nxwd.showMsg('面值不能为空');
                }
                sell_price = \$(this).val() * 1;
                val        = sell_price / face_value * 100;
                \$(this).parents('tr.product_list').find('.percent').val(val.toFixed(2) + '%');
            });

            \$('.percent').blur(function () {
                var sell_price, face_value, sell_dis;
                face_value = \$(this).parents('tr.product_list').attr('face_value') * 1;
                if (!face_value) {
                    nxwd.showMsg('面值不能为空');
                }
                sell_dis = \$(this).val();
                if (sell_dis.indexOf('%') !== -1) {
                    sell_dis = sell_dis.replace('%', '');
                }
                sell_price = face_value * (sell_dis * 1 / 100);
                \$(this).parents('tr.product_list').find('.cost').val(sell_price);
                //如果没有%号重新加上%号显示
                if (sell_dis.indexOf('%') == -1) {
                    \$(this).val(sell_dis + '%');
                }
            });
        }

        /**
         * 添加产品
         */
        function add_product() {
            var product_data = new Array;
            \$('.product_list').each(function () {
                var ob           = {};
                var that         = \$(this);
                ob.renyi_type    = that.attr('renyi_type');
                ob.face_value    = that.attr('face_value');
                ob.speed         = that.attr('speed');
                ob.cate_id       = that.attr('cate_id');
                ob.product_name  = that.attr('product_name');
                ob.sell_cost     = that.find('.sell_cost').val();
                ob.cost          = that.find('.cost').val();;
                ob.num           = that.attr('num');
                ob.province_name = that.attr('province_name');
                ob.city_name     = that.attr('city_name');
                ob.isp_name      = that.attr('isp_name');
                ob.if_mvno       = that.attr('if_mvno');
                ob.mvno          = that.attr('mvno');
                ob.template_id   = '{{ template_id }}';
                product_data.push(ob);
            });

            if (product_data.length == 0) {
                nxwd.showMsg('商品不能为空');
                return false;
            }

            var loading = null;
            var before = function(){
                loading = layer.load();
            }
            var error = function(){
                layer.close(loading);
                nxwd.showMsg('服务器未响应，请稍后重试');
            }
            var success = function(res){
                layer.close(loading);
                if (res.status) {
                    nxwd.showMsg(res.msg,'success');
                    location.reload();
                } else {
                    nxwd.showMsg(res.msg,'danger');
                }
            }
            nxwd.ajaxRequest('{{ path(\"supplier_products_add_new_product\") }}?template_id={{ template_id }}&sell_type=1','POST',{product_data:product_data},'json',success,before,error);
        }

        /**
         * 比例向下同步
         */
        function syncdown(that,percent) {
            var _per = percent;
            if (percent.indexOf('%') !== -1) {
                percent = percent.replace('%', '');
            }
            percent = percent * 1 / 100;
            var tr = \$(that).parents('tr.product_list').nextAll();
            tr.each(function () {
                var tr_face_value = \$(this).attr('face_value');
                \$(this).find('.cost').val(tr_face_value * percent);
                \$(this).find('.percent').val(_per);
            });
        }

        /**
         * 删除数据
         */
        function deleteElement(dom) {
            var product = \$(dom).parents('tr.product_list');
            product.remove();
        }

        function getProductData() {
            var args       = [];
            var cate       = \$('input[name=\"cate_id\"]:checked');
            var cate_id    = cate.val();
            var isp_name   = cate.attr('title');
            var speed      = \$('input[name=speed]:checked').val();
            var speed_text = \$('input[name=speed]:checked').attr('title');
            var num        = 1, if_mvno = 0, mvno_id = 0;

            for (var i = 0; i < renyi_type.length; i++) {
                var json = {
                    renyi_type: renyi_type[i],
                    speed:      speed,
                    cate_id:    cate_id,
                    if_mvno:    if_mvno,
                    mvno:       mvno_id,
                    num:        num,
                    isp_name:   isp_name,
                    speed_text: speed_text
                };

                if (cate_id * 1 == 4) {//虚商
                    mvno_id = \$('#mvno_id').val();
                    if (mvno_id == '' || mvno_id == 0) {
                        nxwd.showMsg('请选择虚拟运行商');
                        return false;
                    }
                    if_mvno        = 1;
                    json.mvno_name = \$('#mvno_id').find('option:selected').text();

                } else {
                    if (checked_region_ids.length == 0 || checked_region_names.length == 0) {
                        nxwd.showMsg('请选择商品适用地区');
                        return false;
                    }
                    json.regions_name = checked_region_names;
                    json.regions_id   = checked_region_ids;

                }

                switch (renyi_type[i]) {
                    case '1':
                        json.face_value = face_value_fix;
                        break;
                    case '2':
                        json.face_value = face_value_random;
                        json.num        = \$('#recharge').val();
                        break;
                    case '3':
                        json.face_value = face_value_other;
                        break;
                    default:
                        break;
                }
                args.push(json);
            }


            var product = [];
            if (cate_id * 1 == 4) {
                //  [
                //    {renyi:1,face_value:[10,20,50],speed:1,cate_id:4,if_mvno:1,mvno:5,num:1...}
                //    {renyi:2,face_value:[1],speed:1,cate_id:4,if_mvno:1,mvno:5,num:1-500...}
                //    {renyi:3,face_value:[155,209],speed:1,cate_id:4,if_mvno:1,mvno:5,num:1...}
                //   ]

                for (var i = 0; i < args.length; i++) {
                    for (var j = 0; j < args[i].face_value.length; j++) {
                        var temp          = {};
                        var text = '';
                        if (args[i].face_value[j] == 1) {
                            text = '任意充';
                        } else {
                            text = args[i].face_value[j] + '元';
                        }
                        temp.renyi_type   = args[i].renyi_type;
                        temp.face_value   = args[i].face_value[j];
                        temp.speed        = args[i].speed;
                        temp.cate_id      = args[i].cate_id;
                        temp.if_mvno      = args[i].if_mvno;
                        temp.mvno         = args[i].mvno;
                        temp.num          = args[i].num;
                        temp.isp_name     = args[i].isp_name;
                        temp.product_name = '全国' + args[i].mvno_name + args[i].isp_name + '话费' + text + args[i].speed_text;
                        product.push(temp);
                    }
                }
            } else {
                //  [
                //     {renyi:1,face_value:[10,20,50],speed:1,cate_id:1,regions_name:['北京','天津'],regions_id:[10000,11100],if_mvno:0,mvno:0,num:1...}
                //     {renyi:2,face_value:[1],speed:1,cate_id:1,regions_name:['北京','天津'],regions_id:[10000,11100],if_mvno:0,mvno:0,num:1-500...}
                //     {renyi:3,face_value:[155,209],speed:1,cate_id:1,regions_name:['北京','天津'],regions_id:[10000,11100],if_mvno:0,mvno:0,num:1...}
                //
                for (var i = 0; i < args.length; i++) {
                    for (var j = 0; j < args[i].face_value.length; j++) {
                        for (var k = 0; k < args[i].regions_id.length; k++) {
                            var temp          = {};
                            var text = '';
                            if (args[i].face_value[j] == 1) {
                                text = '任意充';
                            } else {
                                text = args[i].face_value[j] + '元';
                            }
                            temp.renyi_type   = args[i].renyi_type;
                            temp.face_value   = args[i].face_value[j];
                            temp.speed        = args[i].speed;
                            temp.cate_id      = args[i].cate_id;
                            temp.if_mvno      = args[i].if_mvno;
                            temp.mvno         = args[i].mvno;
                            temp.num          = args[i].num;
                            temp.isp_name     = args[i].isp_name;
                            temp.regions_id   = args[i].regions_id[k];
                            temp.regions_name = args[i].regions_name[k];
                            temp.product_name = args[i].regions_name[k] + args[i].isp_name + '话费' + text + args[i].speed_text;
                            product.push(temp);
                        }
                    }
                }
            }
            return product;
        }

    </script>
{% endblock %}
", "/Supplier/Products/add_new_product_mobile.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Supplier\\Products\\add_new_product_mobile.twig");
    }
}
