<?php

/* Admin/UserDetail/OpenPlatform/finance.twig */
class __TwigTemplate_5df5101e3ffe687518cea115e49c115e2ba5115c931cb9e3468e73f95c4edce1 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/OpenPlatform/finance.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/OpenPlatform/finance.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>基本管理-Ta的财务-资金明细</title>
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
    <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
    <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>
    <link href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/iconfont/iconfont.css\" rel=\"stylesheet\">



    <script type=\"text/javascript\" src=\"/assets/admin/js/jquery.min.js\"></script>
    <!--下拉列表-->
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/xui-select2.css\"/>
    <script type=\"text/javascript\" src=\"/assets/admin/h/js/xui-select2.js\"></script>
</head>
<style type=\"text/css\">
    table th{text-align: left;}
    .iconfont{
        font-size: 30px!important;
        color: #FFCC00;
        line-height: 30px;}
    .m-container{width: 100%!important;margin-bottom: 0; border-top: none;}
    .m-container .m-cwel{margin: 20px 0;padding: 0 60px;}
    .m-container .m-item{height: auto; margin: 20px 80px 20px 60px;}
    .m-item .item{width: 100%!important;height: auto; border: none!important;}
    .m-item .item-icon{height: 30px; margin-right: 5px;}
    .m-item .item-icon .iconfont {font-size: 30px!important; color: #FFCC00; line-height:30px;}
    .m-item .item-money{width: calc(100% - 80px); margin-left: 10px; line-height: 28px;}
    .m-item .item-money strong {display: inline-block; padding-top: 5px;}
    .m-item .item-money .layui-btn{position: relative; top: -2px; height: 30px!important; line-height: 30px; padding: 0 10px; margin-left: 15px;}
    .s-gray{color: #999999;}
    .layui-btn{background: #1ab394;border-color: #1ab394;}
    .panel-item{float: left;  width: 100%;  height: auto;}
    .s-red{font-size: 20px; color: #FF0033;}
</style>
<body>
<div class=\"main-box\">
    ";
        // line 41
        $this->loadTemplate("Admin/UserDetail/OpenPlatform/common_tabs.twig", "Admin/UserDetail/OpenPlatform/finance.twig", 41)->display($context);
        // line 42
        echo "    <div class=\"m-container\" style=\"background-color: #FFFFFF;\">
        <div class=\"m-cwel\">
            <a class=\"f-fs-16\"></a>
        </div>
    </div>
    <div class=\"m-container\" style=\"background-color: #FFFFFF;\">
        <div class=\"m-item\">
            <div class=\"item g-bdc\">
                <div class=\"item-icon f-fl\"><i class=\"iconfont icon-item-icom\">&#xe65a;</i></div>
                <div class=\"item-money f-fl\">
                    <span class=\"f-fs-14 s-gray\">账户余额</span><br />
                    <strong class=\"f-fs-20 s-red\">";
        // line 53
        if ((isset($context["balance"]) || array_key_exists("balance", $context))) {
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["balance"] ?? null), "balance", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["balance"] ?? null), "balance", array()), 0)) : (0)), "html", null, true);
        }
        echo "</strong><span style=\"margin-left: 10px;\">元</span>
                    <a href=\"\" class=\"layui-btn\" >在线充值</a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"panel-item h-input-block table-style1\">
        <table>
            <thead>
            <tr>
                <th colspan=\"5\">
                    <strong style=\"text-align: left;color: #2ca9e1;\">最近交易记录</strong>
                    <a href=\"\">更多</a>
                </th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 71
            echo "            <tr>
                <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $context["v"], "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "amount", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_constant("App\\Common\\Model\\Payment\\UserMoneyTradeLog::TRADE_STATUSES"), twig_get_attribute($this->env, $this->source, $context["v"], "trade_status", array()), array(), "array"), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"#\">详情</a>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "            </tbody>
        </table>
    </div>
</div>
<script type=\"text/javascript\">
    /*
     * 下拉列表插件载入
     */
    xui.select2();

</script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/UserDetail/OpenPlatform/finance.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 81,  127 => 75,  123 => 74,  119 => 73,  115 => 72,  112 => 71,  108 => 70,  86 => 53,  73 => 42,  71 => 41,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>基本管理-Ta的财务-资金明细</title>
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
    <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
    <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>
    <link href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/iconfont/iconfont.css\" rel=\"stylesheet\">



    <script type=\"text/javascript\" src=\"/assets/admin/js/jquery.min.js\"></script>
    <!--下拉列表-->
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/xui-select2.css\"/>
    <script type=\"text/javascript\" src=\"/assets/admin/h/js/xui-select2.js\"></script>
</head>
<style type=\"text/css\">
    table th{text-align: left;}
    .iconfont{
        font-size: 30px!important;
        color: #FFCC00;
        line-height: 30px;}
    .m-container{width: 100%!important;margin-bottom: 0; border-top: none;}
    .m-container .m-cwel{margin: 20px 0;padding: 0 60px;}
    .m-container .m-item{height: auto; margin: 20px 80px 20px 60px;}
    .m-item .item{width: 100%!important;height: auto; border: none!important;}
    .m-item .item-icon{height: 30px; margin-right: 5px;}
    .m-item .item-icon .iconfont {font-size: 30px!important; color: #FFCC00; line-height:30px;}
    .m-item .item-money{width: calc(100% - 80px); margin-left: 10px; line-height: 28px;}
    .m-item .item-money strong {display: inline-block; padding-top: 5px;}
    .m-item .item-money .layui-btn{position: relative; top: -2px; height: 30px!important; line-height: 30px; padding: 0 10px; margin-left: 15px;}
    .s-gray{color: #999999;}
    .layui-btn{background: #1ab394;border-color: #1ab394;}
    .panel-item{float: left;  width: 100%;  height: auto;}
    .s-red{font-size: 20px; color: #FF0033;}
</style>
<body>
<div class=\"main-box\">
    {% include \"Admin/UserDetail/OpenPlatform/common_tabs.twig\" %}
    <div class=\"m-container\" style=\"background-color: #FFFFFF;\">
        <div class=\"m-cwel\">
            <a class=\"f-fs-16\"></a>
        </div>
    </div>
    <div class=\"m-container\" style=\"background-color: #FFFFFF;\">
        <div class=\"m-item\">
            <div class=\"item g-bdc\">
                <div class=\"item-icon f-fl\"><i class=\"iconfont icon-item-icom\">&#xe65a;</i></div>
                <div class=\"item-money f-fl\">
                    <span class=\"f-fs-14 s-gray\">账户余额</span><br />
                    <strong class=\"f-fs-20 s-red\">{% if balance is defined %}{{ balance.balance|default(0) }}{% endif %}</strong><span style=\"margin-left: 10px;\">元</span>
                    <a href=\"\" class=\"layui-btn\" >在线充值</a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"panel-item h-input-block table-style1\">
        <table>
            <thead>
            <tr>
                <th colspan=\"5\">
                    <strong style=\"text-align: left;color: #2ca9e1;\">最近交易记录</strong>
                    <a href=\"\">更多</a>
                </th>
            </tr>
            </thead>
            <tbody>
            {% for v in data %}
            <tr>
                <td>{{ v|date('Y-m-d H:i:s') }}</td>
                <td>{{ v.name }}</td>
                <td>{{ v.amount }}</td>
                <td>{{ constant('App\\\\Common\\\\Model\\\\Payment\\\\UserMoneyTradeLog::TRADE_STATUSES')[v.trade_status] }}</td>
                <td>
                    <a href=\"#\">详情</a>
                </td>
            </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
</div>
<script type=\"text/javascript\">
    /*
     * 下拉列表插件载入
     */
    xui.select2();

</script>
</body>
</html>
", "Admin/UserDetail/OpenPlatform/finance.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\UserDetail\\OpenPlatform\\finance.twig");
    }
}
