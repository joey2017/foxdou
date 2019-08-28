<?php

/* Admin/Order/index.twig */
class __TwigTemplate_5070e42d0b622036ec2e03ae1fafbbb8963a8064085192d737c9865200d3d97f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/Admin/Common/layout.twig", "Admin/Order/index.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Order/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Order/index.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Admin/Order/index.twig", 2);
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
        echo "    <!--面包屑-->
    <div class=\"layui-card layadmin-header\">
        <div class=\"layui-breadcrumb\">
            <a href=\"javascript:;\">主页</a>
            <a href=\"javascript:;\">订单管理</a>
            <a><cite>正文</cite></a>
        </div>
    </div>
    <div class=\"layui-fluid\">
        <div class=\"layui-card\">
            <div class=\"layui-tab layui-tab-brief layadmin-tab\" lay-filter=\"docDemoTabBrief\">
                <ul class=\"layui-tab-title\">
                    <li class=\"layui-this\">超时2分钟<span class=\"layui-badge\">99+</span></li>
                    <li>卡单<span class=\"layui-badge\">99+</span></li>
                    <li>待人工处理<span class=\"layui-badge\">99+</span></li>
                    <li>失败可疑<span class=\"layui-badge\">99+</span></li>
                </ul>
                <div class=\"layui-tab-content\">
                    <div class=\"layui-tab-item layui-show\">
                        <div class=\"layui-form layadmin-bgcolor\">
                            <div class=\"layui-inline\">
                                <label class=\"layui-form-label\" style=\"width: 90px; padding: 9px 10px;\">空渠道下单：</label>
                                <div class=\"layui-input-block\">
                                    <input type=\"checkbox\" name=\"close\" lay-skin=\"switch\" lay-text=\"ON|OFF\">
                                </div>
                            </div>
                        </div>
                        <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
                            <div class=\"layui-form-item\">
                                <form action=\"\" method=\"get\">
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">订单来源</label>
                                        <div class=\"layui-input-block\">
                                          ";
        // line 38
        echo $context["sf"]->macro_select_raw("platform_id", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Platform::PLATFORMS"), "全部"), array("class" => "form-control"));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">订单状态</label>
                                        <div class=\"layui-input-block\">
                                          ";
        // line 44
        echo $context["sf"]->macro_select_raw("status", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\Order\\OrderRecharge::STATUSES"), "全部"), array("class" => "form-control"));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">充值状态</label>
                                        <div class=\"layui-input-block\">
                                          ";
        // line 50
        echo $context["sf"]->macro_select_raw("recharge_status", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\Order\\OrderRechargeSup::RECHARGE_STATUS"), "全部"), array("class" => "form-control"));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">用户结算状态</label>
                                        <div class=\"layui-input-block\">
                                            <select name=\"user_settlement\" id=\"user_settlement\">
                                                <option value=\"0\">未结算</option>
                                                <option value=\"1\">已结算</option>
                                                <option value=\"2\">已退款</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">SUP订单结算状态</label>
                                        <div class=\"layui-input-block\">
                                          ";
        // line 66
        echo $context["sf"]->macro_select_raw("settle_status", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Common\\Model\\Order\\OrderRechargeSup::SETTLE_STATUS"), "全部"), array("class" => "form-control"));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">日期范围</label>
                                        <div class=\"layui-input-block\">
                                            <input type=\"text\" class=\"layui-input\" id=\"start_time\" placeholder=\"\">
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">搜索</label>
                                        <div class=\"layui-input-block\">
                                            <input type=\"text\" name=\"keyword\" placeholder=\"搜索...\" autocomplete=\"off\" class=\"layui-input\">
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <div class=\"layui-input-block layui-input-block-margin\">
                                            <button class=\"layui-btn layuiadmin-btn-useradmin\" onclick=\"get_data();return false;\">
                                                <i class=\"layui-icon layui-icon-search layuiadmin-button-btn\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class=\"layui-card-body\">
                            <div style=\"padding: 5px 0;\">
                                <button class=\"layui-btn layuiadmin-btn-useradmin\">点击右边按钮出现弹窗</button>
                                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"setSuccess\">置成功</button>
                                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"setFailure\">置失败</button>
                                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"settlement\">结算</button>
                                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"againRecharge\">重新充值</button>
                            </div>
                            <table class=\"layui-table\" id=\"order-table\" lay-filter=\"order-table\">

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 112
        echo "    <script type=\"text/html\" id=\"barDemo\">
        <div class=\"layui-table-cell laytable-cell-4-0-9\">
            <a class=\"layui-btn layui-btn-normal layui-btn-xs\">置成功</a>
            <a class=\"layui-btn layui-btn-danger layui-btn-xs\">删除</a>
        </div>
    </script>
    <script type=\"text/html\" id=\"actions\">
      ";
        // line 133
        echo "
    <div class=\"layui-table-cell laytable-cell-4-0-9\">
      {{#  if(d.order_status == 4 || d.order_status == 5){ }}
        <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"view\">详情</a>
      {{#  } }}

      {{# if(d.order_status == 1 || d.order_status == 3) { }}
        <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"mark_succeed\">置成功</a>
      {{#  } }}

      {{# if(d.order_status != 3) { }}
        <a class=\"layui-btn layui-btn-danger layui-btn-xs\" lay-event=\"mark_failed\">置失败</a>
      {{#  } }}
    </div>
    ";
        echo "
    </script>
    <script>
        var url = \"\";
        var order_statuses = [];
        ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_constant("App\\Common\\Model\\Order\\OrderRecharge::STATUSES"));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 139
            echo "        order_statuses.push('";
            echo twig_escape_filter($this->env, $context["order"], "html", null, true);
            echo "');
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "
        var recharge_statuses = [];
        ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_constant("App\\Common\\Model\\Order\\OrderRechargeSup::RECHARGE_STATUS"));
        foreach ($context['_seq'] as $context["_key"] => $context["recharge"]) {
            // line 144
            echo "        recharge_statuses.push('";
            echo twig_escape_filter($this->env, $context["recharge"], "html", null, true);
            echo "');
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recharge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "
        var settle_statuses = [];
        ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_constant("App\\Common\\Model\\Order\\OrderRechargeSup::SETTLE_STATUS"));
        foreach ($context['_seq'] as $context["_key"] => $context["settle"]) {
            // line 149
            echo "        settle_statuses.push('";
            echo twig_escape_filter($this->env, $context["settle"], "html", null, true);
            echo "');
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['settle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "
        var platform = [];
        ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_constant("App\\Platform::PLATFORMS"));
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 154
            echo "        platform.push('";
            echo twig_escape_filter($this->env, $context["plat"], "html", null, true);
            echo "')
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "        var columns = [[
            {\"field\": \"\", \"title\": \"\", type: \"checkbox\", \"width\": 50},
            {\"field\": \"id\", \"title\": \"主订单编号\", \"width\": 300},
            {\"field\": \"product_name\", \"title\": \"商品名称/编号\", \"width\": 200},
            {\"field\": \"sup_user_name\", \"title\": \"供应商\", \"width\": 100},
            {\"field\": \"template_name\", \"title\": \"供货模版\", \"width\": 200},
            {\"field\": \"source_id\", \"title\": \"货源编号\", \"width\": 100},
            {\"field\": \"product_face_value\", \"title\": \"商品面值\", \"width\": 150},
            {\"field\": \"sell_price\", \"title\": \"主订单销售价格\", \"width\": 150},
            {\"field\": \"sup_price\", \"title\": \"SUP货源价格\", \"width\": 150},
            {\"field\": \"buy_num\", \"title\": \"主订单购买数量\", \"width\": 150},
            {\"field\": \"recharge_amount\", \"title\": \"主订单金额\", \"width\": 150, templet: function(d){
                    return d.sell_price*d.buy_num;
                }},
            {\"field\": \"recharge_amount\", \"title\": \"SUP订单金额\", \"width\": 150, templet: function(d){
                    return d.sup_price*d.buy_num;
                }},
            {\"field\": \"profit\", \"title\": \"利润\", \"width\": 100},
            {\"field\": \"platform_id\", \"title\": \"主订单来源\", \"width\": 100, templet: function(d){
                    return platform ? platform[d.platform_id-1] : '';
                }},
            {\"field\": \"nick_name\", \"title\": \"来源用户\", \"width\": 100},
            {\"field\": \"info\", \"title\": \"充值信息\", \"width\": 300, templet: function(d){
                    return '号码：'+ d.phone_number + ' 地区：' + d.province_name + '-' + d.city_name;
                }},
            {\"field\": \"status\", \"title\": \"主订单状态\", \"width\": 200, templet: function(d){
                    return order_statuses && d.order_status ? order_statuses[d.order_status-1] : '';
                }},
            {\"field\": \"recharge_status\", \"title\": \"SUP订单充值状态\", \"width\": 200, templet: function (d) {
                    return recharge_statuses && d.status ? recharge_statuses[d.status-1] : '';
                }},
            {\"field\": \"settle_status\", \"title\": \"用户结算状态\", \"width\": 200, templet: function (d) {
                    return settle_statuses && d.settle_status ? settle_statuses[d.settle_status-1] : '';
                }},
            {\"field\": \"recharge_sequence\", \"title\": \"充值次数\", \"width\": 100},
            {\"field\": \"add_time\", \"title\": \"时间节点\", \"width\": 200, templet: function (d) {
                    return '创建时间：' + d.add_time + ' 结束时间：' + d.end_time;
                }},
            {\"field\": \"note\", \"title\": \"备注\", \"width\": 200},

            {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\", \"width\": 200}
        ]
        ];

        function get_data() {
            var params = \$('form').serialize();
            url        = '?' + params;
            rander_table('#order-table', url, columns);
        }

        \$('#positive_btn').on('click',function(){
            \$('.layui-table-box').find('input:checkbox').next().each(function () {
                \$(this).toggleClass('layui-form-checked');
            })
        });

        layui.use(['table', 'laytpl'], function(){
            // 初始化
            get_data();
            layui.table.on('tool(order-table)', function(obj){ //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
                var data = obj.data; //获得当前行数据
                var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）
                var tr = obj.tr; //获得当前行 tr 的DOM对象

                if(layEvent === 'mark_succeed'){ //置成功
                    // 待完成
                }

                if(layEvent === 'mark_failed'){ //置失败
                    // 待完成
                }
            });
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Order/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 156,  278 => 154,  274 => 153,  270 => 151,  261 => 149,  257 => 148,  253 => 146,  244 => 144,  240 => 143,  236 => 141,  227 => 139,  223 => 138,  201 => 133,  192 => 112,  183 => 111,  129 => 66,  110 => 50,  101 => 44,  92 => 38,  57 => 5,  48 => 4,  38 => 1,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ('/Admin/Common/layout.twig') %}
{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

{% block main_content %}
    <!--面包屑-->
    <div class=\"layui-card layadmin-header\">
        <div class=\"layui-breadcrumb\">
            <a href=\"javascript:;\">主页</a>
            <a href=\"javascript:;\">订单管理</a>
            <a><cite>正文</cite></a>
        </div>
    </div>
    <div class=\"layui-fluid\">
        <div class=\"layui-card\">
            <div class=\"layui-tab layui-tab-brief layadmin-tab\" lay-filter=\"docDemoTabBrief\">
                <ul class=\"layui-tab-title\">
                    <li class=\"layui-this\">超时2分钟<span class=\"layui-badge\">99+</span></li>
                    <li>卡单<span class=\"layui-badge\">99+</span></li>
                    <li>待人工处理<span class=\"layui-badge\">99+</span></li>
                    <li>失败可疑<span class=\"layui-badge\">99+</span></li>
                </ul>
                <div class=\"layui-tab-content\">
                    <div class=\"layui-tab-item layui-show\">
                        <div class=\"layui-form layadmin-bgcolor\">
                            <div class=\"layui-inline\">
                                <label class=\"layui-form-label\" style=\"width: 90px; padding: 9px 10px;\">空渠道下单：</label>
                                <div class=\"layui-input-block\">
                                    <input type=\"checkbox\" name=\"close\" lay-skin=\"switch\" lay-text=\"ON|OFF\">
                                </div>
                            </div>
                        </div>
                        <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
                            <div class=\"layui-form-item\">
                                <form action=\"\" method=\"get\">
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">订单来源</label>
                                        <div class=\"layui-input-block\">
                                          {{ sf.select_raw('platform_id', to_options(constant(\"App\\\\Platform::PLATFORMS\"), '全部'), {\"class\": \"form-control\"}) }}
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">订单状态</label>
                                        <div class=\"layui-input-block\">
                                          {{ sf.select_raw('status', to_options(constant(\"App\\\\Common\\\\Model\\\\Order\\\\OrderRecharge::STATUSES\"), '全部'), {\"class\": \"form-control\"}) }}
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">充值状态</label>
                                        <div class=\"layui-input-block\">
                                          {{ sf.select_raw('recharge_status', to_options(constant(\"App\\\\Common\\\\Model\\\\Order\\\\OrderRechargeSup::RECHARGE_STATUS\"), '全部'), {\"class\": \"form-control\"}) }}
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">用户结算状态</label>
                                        <div class=\"layui-input-block\">
                                            <select name=\"user_settlement\" id=\"user_settlement\">
                                                <option value=\"0\">未结算</option>
                                                <option value=\"1\">已结算</option>
                                                <option value=\"2\">已退款</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">SUP订单结算状态</label>
                                        <div class=\"layui-input-block\">
                                          {{ sf.select_raw('settle_status', to_options(constant(\"App\\\\Common\\\\Model\\\\Order\\\\OrderRechargeSup::SETTLE_STATUS\"), '全部'), {\"class\": \"form-control\"}) }}
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">日期范围</label>
                                        <div class=\"layui-input-block\">
                                            <input type=\"text\" class=\"layui-input\" id=\"start_time\" placeholder=\"\">
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <label class=\"layui-form-label\">搜索</label>
                                        <div class=\"layui-input-block\">
                                            <input type=\"text\" name=\"keyword\" placeholder=\"搜索...\" autocomplete=\"off\" class=\"layui-input\">
                                        </div>
                                    </div>
                                    <div class=\"layui-inline\">
                                        <div class=\"layui-input-block layui-input-block-margin\">
                                            <button class=\"layui-btn layuiadmin-btn-useradmin\" onclick=\"get_data();return false;\">
                                                <i class=\"layui-icon layui-icon-search layuiadmin-button-btn\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class=\"layui-card-body\">
                            <div style=\"padding: 5px 0;\">
                                <button class=\"layui-btn layuiadmin-btn-useradmin\">点击右边按钮出现弹窗</button>
                                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"setSuccess\">置成功</button>
                                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"setFailure\">置失败</button>
                                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"settlement\">结算</button>
                                <button class=\"layui-btn layuiadmin-btn-useradmin site-demo-layer\" data-type=\"againRecharge\">重新充值</button>
                            </div>
                            <table class=\"layui-table\" id=\"order-table\" lay-filter=\"order-table\">

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}

{% block js_end %}
    <script type=\"text/html\" id=\"barDemo\">
        <div class=\"layui-table-cell laytable-cell-4-0-9\">
            <a class=\"layui-btn layui-btn-normal layui-btn-xs\">置成功</a>
            <a class=\"layui-btn layui-btn-danger layui-btn-xs\">删除</a>
        </div>
    </script>
    <script type=\"text/html\" id=\"actions\">
      {% verbatim %}
    <div class=\"layui-table-cell laytable-cell-4-0-9\">
      {{#  if(d.order_status == 4 || d.order_status == 5){ }}
        <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"view\">详情</a>
      {{#  } }}

      {{# if(d.order_status == 1 || d.order_status == 3) { }}
        <a class=\"layui-btn layui-btn-normal layui-btn-xs\" lay-event=\"mark_succeed\">置成功</a>
      {{#  } }}

      {{# if(d.order_status != 3) { }}
        <a class=\"layui-btn layui-btn-danger layui-btn-xs\" lay-event=\"mark_failed\">置失败</a>
      {{#  } }}
    </div>
    {% endverbatim %}
    </script>
    <script>
        var url = \"\";
        var order_statuses = [];
        {% for order in constant('App\\\\Common\\\\Model\\\\Order\\\\OrderRecharge::STATUSES') %}
        order_statuses.push('{{ order }}');
        {% endfor %}

        var recharge_statuses = [];
        {% for recharge in constant('App\\\\Common\\\\Model\\\\Order\\\\OrderRechargeSup::RECHARGE_STATUS') %}
        recharge_statuses.push('{{ recharge }}');
        {% endfor %}

        var settle_statuses = [];
        {% for settle in constant('App\\\\Common\\\\Model\\\\Order\\\\OrderRechargeSup::SETTLE_STATUS') %}
        settle_statuses.push('{{ settle }}');
        {% endfor %}

        var platform = [];
        {% for plat in constant('App\\\\Platform::PLATFORMS') %}
        platform.push('{{ plat }}')
        {% endfor %}
        var columns = [[
            {\"field\": \"\", \"title\": \"\", type: \"checkbox\", \"width\": 50},
            {\"field\": \"id\", \"title\": \"主订单编号\", \"width\": 300},
            {\"field\": \"product_name\", \"title\": \"商品名称/编号\", \"width\": 200},
            {\"field\": \"sup_user_name\", \"title\": \"供应商\", \"width\": 100},
            {\"field\": \"template_name\", \"title\": \"供货模版\", \"width\": 200},
            {\"field\": \"source_id\", \"title\": \"货源编号\", \"width\": 100},
            {\"field\": \"product_face_value\", \"title\": \"商品面值\", \"width\": 150},
            {\"field\": \"sell_price\", \"title\": \"主订单销售价格\", \"width\": 150},
            {\"field\": \"sup_price\", \"title\": \"SUP货源价格\", \"width\": 150},
            {\"field\": \"buy_num\", \"title\": \"主订单购买数量\", \"width\": 150},
            {\"field\": \"recharge_amount\", \"title\": \"主订单金额\", \"width\": 150, templet: function(d){
                    return d.sell_price*d.buy_num;
                }},
            {\"field\": \"recharge_amount\", \"title\": \"SUP订单金额\", \"width\": 150, templet: function(d){
                    return d.sup_price*d.buy_num;
                }},
            {\"field\": \"profit\", \"title\": \"利润\", \"width\": 100},
            {\"field\": \"platform_id\", \"title\": \"主订单来源\", \"width\": 100, templet: function(d){
                    return platform ? platform[d.platform_id-1] : '';
                }},
            {\"field\": \"nick_name\", \"title\": \"来源用户\", \"width\": 100},
            {\"field\": \"info\", \"title\": \"充值信息\", \"width\": 300, templet: function(d){
                    return '号码：'+ d.phone_number + ' 地区：' + d.province_name + '-' + d.city_name;
                }},
            {\"field\": \"status\", \"title\": \"主订单状态\", \"width\": 200, templet: function(d){
                    return order_statuses && d.order_status ? order_statuses[d.order_status-1] : '';
                }},
            {\"field\": \"recharge_status\", \"title\": \"SUP订单充值状态\", \"width\": 200, templet: function (d) {
                    return recharge_statuses && d.status ? recharge_statuses[d.status-1] : '';
                }},
            {\"field\": \"settle_status\", \"title\": \"用户结算状态\", \"width\": 200, templet: function (d) {
                    return settle_statuses && d.settle_status ? settle_statuses[d.settle_status-1] : '';
                }},
            {\"field\": \"recharge_sequence\", \"title\": \"充值次数\", \"width\": 100},
            {\"field\": \"add_time\", \"title\": \"时间节点\", \"width\": 200, templet: function (d) {
                    return '创建时间：' + d.add_time + ' 结束时间：' + d.end_time;
                }},
            {\"field\": \"note\", \"title\": \"备注\", \"width\": 200},

            {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\", \"width\": 200}
        ]
        ];

        function get_data() {
            var params = \$('form').serialize();
            url        = '?' + params;
            rander_table('#order-table', url, columns);
        }

        \$('#positive_btn').on('click',function(){
            \$('.layui-table-box').find('input:checkbox').next().each(function () {
                \$(this).toggleClass('layui-form-checked');
            })
        });

        layui.use(['table', 'laytpl'], function(){
            // 初始化
            get_data();
            layui.table.on('tool(order-table)', function(obj){ //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
                var data = obj.data; //获得当前行数据
                var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）
                var tr = obj.tr; //获得当前行 tr 的DOM对象

                if(layEvent === 'mark_succeed'){ //置成功
                    // 待完成
                }

                if(layEvent === 'mark_failed'){ //置失败
                    // 待完成
                }
            });
        })
    </script>
{% endblock %}

", "Admin/Order/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\Order\\index.twig");
    }
}
