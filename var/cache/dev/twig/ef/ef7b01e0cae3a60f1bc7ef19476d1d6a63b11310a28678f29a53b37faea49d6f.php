<?php

/* Open/ControlPanel/index.twig */
class __TwigTemplate_5854e9bbd7c0a75e037335cccd50ed1607bdf933a5ce0f8053d9b2e8aa222b78 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Open/ControlPanel/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Open/ControlPanel/index.twig"));

        // line 1
        $context["user"] = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "user", array());
        // line 2
        $context["current_route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 3
        $context["current_path"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "request", array()), "pathinfo", array());
        // line 4
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  <title>狐豆-开放平台-控制面板</title>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/layui.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/nornmalize.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/common.css\"/>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/iconfont/iconfont.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/overview.css\" />
  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.min.js\"></script>
  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/js/common.js\" ></script>
  <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>

  <style type=\"text/css\">
    .m-right{overflow-y: scroll;}
  </style>

</head>
<body>
";
        // line 26
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->source); })()), "debug", array())) {
            // line 27
            echo "  <div style=\"background-color: darkred;height: 5px;\"></div>
";
        }
        // line 29
        echo "<div class=\"g-head\">
  <div class=\"m-head s-head\">
    <!-- LOGO -->
    <a target=\"_blank\" href=\"/open\"><div class=\"m-logo\"></div></a>
    <!-- /LOGO -->
    <div class=\"m-wel s-white\">
      <span class=\"f-fs-20\"></span>
      <span>&nbsp;&nbsp;</span>
    </div>

    <div class=\"m-sort s-link\">
      <a href=\"<?=\\yii\\helpers\\Url::to(['/servicemall/tool'])?>\" target=\"_blank\">开发者服务</a>
      <a target=\"_blank\" href=\"<?=\\yii\\helpers\\Url::to(['/servicemall'])?>\">申请服务</a>
      ";
        // line 43
        echo "    </div>
    <div class=\"m-total s-link\">
      <span class=\"s-white\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 45, $this->source); })()), "user", array()), "nick_name", array()), "html", null, true);
        echo "(";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 45, $this->source); })()), "user", array()), "user_name", array()), "html", null, true);
        echo ")</span>
      <span class=\"s-white\" >账户余额：
                <a href=\"/\"  title=\"余额充值\" id=\"user_money\">";
        // line 47
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "openPlatformAccount", array(), "any", false, true), "balance", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "openPlatformAccount", array(), "any", false, true), "balance", array()), "0")) : ("0")), 2), "html", null, true);
        echo "</a>元
            </span>
      <a href=\"javascript:void(0)\" id=\"refresh_money\">刷新余额</a>
      <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\"><i class=\"iconfont\">&#xe642;</i>退出系统</a>
    </div>
  </div>
  <div class=\"m-head-nav f-fs-16\">
    <ul class=\"m-head-title f-tac\">
      <li><a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("open_control_panel_main");
        echo "\" target=\"main-control\" class=\"head-nav main\">控制面板</a></li>
      <li><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("open_control_panel_services");
        echo "\" target=\"main-control\" class=\"head-nav service-two\">我的服务</a></li>
      <li><a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("open_control_panel_apps");
        echo "\" target=\"main-control\" class=\"head-nav app\">我的应用</a></li>
    </ul>
  </div>
</div>

<!-- main -->
<div class=\"g-main\">
  <iframe id=\"content-frame\" name=\"main-frame\" frameborder=\"0\" marginheight=\"0\" scrolling=\"auto\" src=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("open_control_panel_main");
        echo "\" width=\"100%\" height=\"100%\"></iframe>
</div>
<!-- /main -->

<!-- 公告 -->
<div class=\"notice\" style=\"display: none;word-break:break-all;text-overflow:ellipsis;\">
  ";
        // line 70
        if ((isset($context["notice"]) || array_key_exists("notice", $context))) {
            // line 71
            echo "    <h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["notice"]) || array_key_exists("notice", $context) ? $context["notice"] : (function () { throw new Twig_Error_Runtime('Variable "notice" does not exist.', 71, $this->source); })()), "title", array()), "html", null, true);
            echo "</h3>
    <div class=\"notice-body\">
      ";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["notice"]) || array_key_exists("notice", $context) ? $context["notice"] : (function () { throw new Twig_Error_Runtime('Variable "notice" does not exist.', 73, $this->source); })()), "content", array()), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 76
        echo "</div>
<!-- /公告 -->

<script type=\"text/javascript\">

    \$(document).ready(function () {
        var head_nav='<?=\$controller_path?>';
        switch (head_nav){
            case 'service':
                \$('.m-head-title li a.service-two').addClass('head-nav-this');
                break;
            case 'app':
                \$('.m-head-title li a.app').addClass('head-nav-this');
                break;
            default :
                \$('.m-head-title li a.main').addClass('head-nav-this');
                break;
        }
    });

    layui.use(['form', 'layedit', 'laydate'], function(){
        var layer = layui.layer;
    });

    \$('.head-nav').click(function(){
        \$(this).addClass('head-nav-this');
        \$('.head-nav').not(this).removeClass('head-nav-this');
    });
    //刷新账户金额
    \$('#refresh_money').click(function(){
        \$.post('/refresh-amount',null,function(data,status){
            if(status!='success'){
                layer.msg('网络错误！',{area:['140','50px'],time:1000});
            }else{
                if(!data.amount){
                    location.reload();
                }
                \$('#user_money').text(data.amount);
                layer.tips('刷新成功','#user_money', {
                    tips: [3, '#9ACD32'],
                    time: 3000,
                });
            }
        });
    });

    //      <?php  if(\$notice):?>
    //      /**
    //       * 公告-弹出层
    //       */
    //      layui.use('layer', function(){
    //          var layer = layui.layer;
    //          layer.open({
    //              id:'notice',
    //              type: 1,
    //              title: false,
    //              closeBtn: false,
    //              area: ['500px', 'auto'],
    //              shade: 0.6,
    //              btn: ['知道了','下次再看'],
    //              content: \$('.notice').show(),
    //              yes:function (index) {
    //                  setread(1);
    //                  layer.close(index);
    //              },
    //              btn2:function (index) {
    //                  setread(2);
    //                  layer.close(index);
    //              }
    //          });
    //      });
    //
    //      function setread(status) {
    //          \$.get('/open/default/read-notice',{id:'<?=@\$notice['id']?>',status:status},function (data) {
    //              if(data.status){
    //                  return true;
    //              }
    //              layer.msg('操作失败');
    //          });
    //      }
    //      <?php endif;?>
</script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Open/ControlPanel/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 76,  140 => 73,  134 => 71,  132 => 70,  123 => 64,  113 => 57,  109 => 56,  105 => 55,  97 => 50,  91 => 47,  84 => 45,  80 => 43,  65 => 29,  61 => 27,  59 => 26,  35 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set user = app.user %}
{% set current_route = app.request.attributes.get('_route') %}
{% set current_path  = app.request.pathinfo %}

<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  <title>狐豆-开放平台-控制面板</title>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/layui.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/nornmalize.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/common.css\"/>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/iconfont/iconfont.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/overview.css\" />
  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.min.js\"></script>
  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/js/common.js\" ></script>
  <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>

  <style type=\"text/css\">
    .m-right{overflow-y: scroll;}
  </style>

</head>
<body>
{% if app.debug %}
  <div style=\"background-color: darkred;height: 5px;\"></div>
{% endif %}
<div class=\"g-head\">
  <div class=\"m-head s-head\">
    <!-- LOGO -->
    <a target=\"_blank\" href=\"/open\"><div class=\"m-logo\"></div></a>
    <!-- /LOGO -->
    <div class=\"m-wel s-white\">
      <span class=\"f-fs-20\"></span>
      <span>&nbsp;&nbsp;</span>
    </div>

    <div class=\"m-sort s-link\">
      <a href=\"<?=\\yii\\helpers\\Url::to(['/servicemall/tool'])?>\" target=\"_blank\">开发者服务</a>
      <a target=\"_blank\" href=\"<?=\\yii\\helpers\\Url::to(['/servicemall'])?>\">申请服务</a>
      {#<a target=\"_blank\" href=\"//register.foxdou.com\">帐号注册</a>#}
    </div>
    <div class=\"m-total s-link\">
      <span class=\"s-white\">{{ app.user.nick_name }}({{ app.user.user_name }})</span>
      <span class=\"s-white\" >账户余额：
                <a href=\"/\"  title=\"余额充值\" id=\"user_money\">{{ user.openPlatformAccount.balance|default('0')|number_format(2) }}</a>元
            </span>
      <a href=\"javascript:void(0)\" id=\"refresh_money\">刷新余额</a>
      <a href=\"{{ path('logout') }}\"><i class=\"iconfont\">&#xe642;</i>退出系统</a>
    </div>
  </div>
  <div class=\"m-head-nav f-fs-16\">
    <ul class=\"m-head-title f-tac\">
      <li><a href=\"{{ path('open_control_panel_main') }}\" target=\"main-control\" class=\"head-nav main\">控制面板</a></li>
      <li><a href=\"{{ path('open_control_panel_services') }}\" target=\"main-control\" class=\"head-nav service-two\">我的服务</a></li>
      <li><a href=\"{{ path('open_control_panel_apps') }}\" target=\"main-control\" class=\"head-nav app\">我的应用</a></li>
    </ul>
  </div>
</div>

<!-- main -->
<div class=\"g-main\">
  <iframe id=\"content-frame\" name=\"main-frame\" frameborder=\"0\" marginheight=\"0\" scrolling=\"auto\" src=\"{{ path('open_control_panel_main') }}\" width=\"100%\" height=\"100%\"></iframe>
</div>
<!-- /main -->

<!-- 公告 -->
<div class=\"notice\" style=\"display: none;word-break:break-all;text-overflow:ellipsis;\">
  {% if notice is defined %}
    <h3>{{ notice.title }}</h3>
    <div class=\"notice-body\">
      {{ notice.content }}
    </div>
  {% endif %}
</div>
<!-- /公告 -->

<script type=\"text/javascript\">

    \$(document).ready(function () {
        var head_nav='<?=\$controller_path?>';
        switch (head_nav){
            case 'service':
                \$('.m-head-title li a.service-two').addClass('head-nav-this');
                break;
            case 'app':
                \$('.m-head-title li a.app').addClass('head-nav-this');
                break;
            default :
                \$('.m-head-title li a.main').addClass('head-nav-this');
                break;
        }
    });

    layui.use(['form', 'layedit', 'laydate'], function(){
        var layer = layui.layer;
    });

    \$('.head-nav').click(function(){
        \$(this).addClass('head-nav-this');
        \$('.head-nav').not(this).removeClass('head-nav-this');
    });
    //刷新账户金额
    \$('#refresh_money').click(function(){
        \$.post('/refresh-amount',null,function(data,status){
            if(status!='success'){
                layer.msg('网络错误！',{area:['140','50px'],time:1000});
            }else{
                if(!data.amount){
                    location.reload();
                }
                \$('#user_money').text(data.amount);
                layer.tips('刷新成功','#user_money', {
                    tips: [3, '#9ACD32'],
                    time: 3000,
                });
            }
        });
    });

    //      <?php  if(\$notice):?>
    //      /**
    //       * 公告-弹出层
    //       */
    //      layui.use('layer', function(){
    //          var layer = layui.layer;
    //          layer.open({
    //              id:'notice',
    //              type: 1,
    //              title: false,
    //              closeBtn: false,
    //              area: ['500px', 'auto'],
    //              shade: 0.6,
    //              btn: ['知道了','下次再看'],
    //              content: \$('.notice').show(),
    //              yes:function (index) {
    //                  setread(1);
    //                  layer.close(index);
    //              },
    //              btn2:function (index) {
    //                  setread(2);
    //                  layer.close(index);
    //              }
    //          });
    //      });
    //
    //      function setread(status) {
    //          \$.get('/open/default/read-notice',{id:'<?=@\$notice['id']?>',status:status},function (data) {
    //              if(data.status){
    //                  return true;
    //              }
    //              layer.msg('操作失败');
    //          });
    //      }
    //      <?php endif;?>
</script>
</body>
</html>
", "Open/ControlPanel/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Open\\ControlPanel\\index.twig");
    }
}
