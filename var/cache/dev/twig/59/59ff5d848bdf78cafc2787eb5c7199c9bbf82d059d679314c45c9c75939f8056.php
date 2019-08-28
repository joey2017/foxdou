<?php

/* Reseller/Common/layout.twig */
class __TwigTemplate_4632f92e413fd8802776d8a8e8eaa495a7e60c881c6e60dd9c32775892be78fd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
            'validation_scripts' => array($this, 'block_validation_scripts'),
            'main_content' => array($this, 'block_main_content'),
            'popup' => array($this, 'block_popup'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Common/layout.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Common/layout.twig"));

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
  <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
  <link href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/nornmalize.css\" rel=\"stylesheet\">
  <link href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/common.css\" rel=\"stylesheet\">
  <link href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/iconfont/iconfont.css\" rel=\"stylesheet\">
  <link href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/index.css\" rel=\"stylesheet\">

  <!--        <link href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/skin/default/default.css\" rel=\"stylesheet\">-->
  ";
        // line 19
        echo "  <link id=\"skin_link\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/skin/default/default.css\" rel=\"stylesheet\">

  <script src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.min.js\" type=\"text/javascript\"></script>
  <script src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.form.min.js\"></script>
  <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>
  <script>
    \$(document).ready(function () {
        layui.form.render();
    });
  </script>
  <style type=\"text/css\">
    .m-right{overflow-y: scroll;}
    /*input::-webkit-input-placeholder{font-size: 14px;line-height: 38px;font-weight:normal}*/

  </style>

  ";
        // line 35
        $this->displayBlock('css', $context, $blocks);
        // line 37
        echo "  ";
        $this->displayBlock('js', $context, $blocks);
        // line 39
        echo "  ";
        $this->displayBlock('validation_scripts', $context, $blocks);
        // line 41
        echo "</head>
<body>
";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 43, $this->source); })()), "debug", array())) {
            // line 44
            echo "  <div style=\"background-color: darkred;height: 5px;\"></div>
";
        }
        // line 46
        echo "<div class=\"g-head\" style=\"\">
  <div class=\"m-head s-head\">
    <a class=\"m-logo\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_home");
        echo "\" ></a>
    <div class=\"m-sort s-link\">
      ";
        // line 51
        echo "        ";
        // line 52
        echo "          ";
        // line 53
        echo "            ";
        // line 54
        echo "            ";
        // line 55
        echo "          ";
        // line 56
        echo "          ";
        // line 57
        echo "          ";
        // line 58
        echo "          ";
        // line 59
        echo "          ";
        // line 60
        echo "        ";
        // line 61
        echo "      ";
        // line 62
        echo "    </div>
    <div class=\"m-total s-link\">
      <span class=\"s-white\">店铺名称：";
        // line 64
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "resellerAccount", array(), "any", false, true), "shop_name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "resellerAccount", array(), "any", false, true), "shop_name", array()), "")) : ("")), "html", null, true);
        echo "</span>
      <span class=\"s-white\">帐号：";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 65, $this->source); })()), "user_name", array()), "html", null, true);
        echo "</span>
      <span class=\"s-white\">账户余额：<a href=\"/backend/balance-recharge\" id=\"head_agent_user_momeny_balance\" title=\"点击充值余额\">";
        // line 66
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "resellerAccount", array(), "any", false, true), "balance", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "resellerAccount", array(), "any", false, true), "balance", array()), 0)) : (0)), 2), "html", null, true);
        echo "</a>元</span>
      <a href=\"javascript:void (0);\" onclick=\"refresh_balance();\"><i class=\"iconfont\">&#xe62e;</i>刷新余额</a>
      <!--                <a href=\"javascript:void (0);\"><i class=\"iconfont\">&#xe62d;</i>系统设置</a>-->
      <a href=\"javascript:void (0);\" class=\"lock-screen\" id=\"lock-screen\"><i class=\"iconfont\">&#xea54;</i>锁屏</a>
      <!--                <a href=\"javascript:void (0);\"><i class=\"iconfont\">&#xe62e;</i>交接班</a>-->
      <!--                <a href=\"javascript:void (0);\"><i class=\"iconfont\">&#xe661;</i>网站导航</a>-->
      <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("logout");
        echo "\"><i class=\"iconfont\">&#xe642;</i>退出</a>
    </div>
  </div>
  <div class=\"m-head-nav f-fs-16\">
    ";
        // line 76
        $this->loadTemplate("Reseller/Common/_topNav.twig", "Reseller/Common/layout.twig", 76)->display($context);
        // line 77
        echo "  </div>
</div>
<!-- 主体 -->
<div class=\"g-main\">
  <!-- 侧栏导航 -->
  <div class=\"m-left\">
    ";
        // line 83
        $this->loadTemplate("Reseller/Common/_leftNav.twig", "Reseller/Common/layout.twig", 83)->display($context);
        // line 84
        echo "  </div>
  <!-- /侧栏导航 -->
  <!-- 右侧内容区域 -->
  <div class=\"m-right\">
    ";
        // line 88
        $this->displayBlock('main_content', $context, $blocks);
        // line 90
        echo "  </div>
  <!-- /右侧内容区域 -->
</div>
<!--弹出层-锁屏-->
";
        // line 94
        $this->displayBlock('popup', $context, $blocks);
        // line 96
        echo "
<!-- /主体 -->
<div id=\"notice_dialog\" style=\"display: none\">
  <div style=\"padding: 50px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;\" id=\"notice_dialog_content\">

  </div>
</div>

";
        // line 104
        $this->displayBlock('footer', $context, $blocks);
        // line 106
        echo "

<script type=\"text/javascript\">
    var _CSRF='";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("print_settings"), "html", null, true);
        echo "';
    layui.use(['layer'], function(){
        var layer = layui.layer;

    });
    notice_dialog();
    function notice_dialog() {

//        \$.ajax('/get-dialog-notice',{
//
//            success:function (re) {
//                if(!re.status){
//                    return false;
//                }
//                \$('#notice_dialog_content').html(re.data.content);
//                layui.use(['layer'], function(){
//                    var layer = layui.layer;
//                    layer.open({
//                        type: 1
////                            ,title: re.data.title //不显示标题栏
//                        ,title: false //不显示标题栏
//                        ,closeBtn: false
//                        ,area: '300px;'
//                        ,shade: 0.8
//                        ,id: 'LAY_layuipro' //设定一个id，防止重复弹出
//                        ,btn: ['知道了', '下次再看']
//                        ,btnAlign: 'c'
//                        ,moveType: 1 //拖拽模式，0或者1
//                        ,content:\$('#notice_dialog')
//                        ,yes:function (index) {
//                            setread(1,re.data.id);
//                            layer.close(index);
//                        }
//                        ,btn2:function (index) {
//                            setread(2,re.data.id);
//                            layer.close(index);
//                        }
//                    });
//                });
//            }
//        });

    }

    function setread(status,id) {
        \$.ajax('/read-notice',{
            type:'post'
            ,data:{id:id,status:status,'_token':_CSRF}
            ,success:function () {
                if(data.status){
                    return true;
                }
                layer.msg('操作失败');
            }
        });
    }





    \$('#lock-screen').click(function () {
        \$.ajax('/lock-screen/index',{
            type:'post'
            ,data:{'_token':_CSRF,url:location.href}
            ,success:function (data) {
                if(!data.status){
                    layer.msg(data.msg);
                    return false;
                }
                location.href=(data.url);
            }
        });
    });

    \$('#select-skin').mouseleave(function () {
        \$(this).hide();
    });
    var this_user_skin='';
    function change_skin(skin) {
        if(skin==this_user_skin){
            layer.msg('您正在使用这套皮肤哦！');
            return false;
        }
        \$.ajax('/backend/default/change-skin',{
            type:'post'
            ,data:{skin:skin,'_token':_CSRF}
            ,success:function (data) {
                layer.msg(data.msg);
                if(!data.status){
                    return false;
                }
                \$('#skin_link').attr('href','//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/skin/'+skin+'/'+skin+'.css');
                this_user_skin=skin;
                //     location.reload();
            }
            ,error:function () {
                layer.msg('网络异常或系统繁忙，请稍后再再试');
            }
        });
    }
    function refresh_balance() {
        \$.get('";
        // line 211
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_user_current_balance");
        echo "',{},function (data) {
            \$('#head_agent_user_momeny_balance').text(data.balance);
            layer.tips('刷新成功','#head_agent_user_momeny_balance', {
                tips: [3, '#9ACD32'],
                time: 3000
            });
        });
    }
</script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, (((isset($context["title"]) || array_key_exists("title", $context))) ? (_twig_default_filter((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 10, $this->source); })()), "狐豆")) : ("狐豆")), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 36
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 38
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_validation_scripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "validation_scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "validation_scripts"));

        // line 40
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 89
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_popup($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 104
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Reseller/Common/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  441 => 104,  424 => 94,  414 => 89,  405 => 88,  395 => 40,  386 => 39,  376 => 38,  367 => 37,  357 => 36,  348 => 35,  328 => 10,  306 => 211,  201 => 109,  196 => 106,  194 => 104,  184 => 96,  182 => 94,  176 => 90,  174 => 88,  168 => 84,  166 => 83,  158 => 77,  156 => 76,  149 => 72,  140 => 66,  136 => 65,  132 => 64,  128 => 62,  126 => 61,  124 => 60,  122 => 59,  120 => 58,  118 => 57,  116 => 56,  114 => 55,  112 => 54,  110 => 53,  108 => 52,  106 => 51,  101 => 48,  97 => 46,  93 => 44,  91 => 43,  87 => 41,  84 => 39,  81 => 37,  79 => 35,  61 => 19,  50 => 10,  42 => 4,  40 => 3,  38 => 2,  36 => 1,);
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
  <title>{% block title %} {{ title|default(\"狐豆\") }} {% endblock %}</title>
  <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
  <link href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/nornmalize.css\" rel=\"stylesheet\">
  <link href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/common.css\" rel=\"stylesheet\">
  <link href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/iconfont/iconfont.css\" rel=\"stylesheet\">
  <link href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/index.css\" rel=\"stylesheet\">

  <!--        <link href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/skin/default/default.css\" rel=\"stylesheet\">-->
  {#<link id=\"skin_link\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/skin/<?=\$this->params['user_skin']?>/<?=\$this->params['user_skin']?>.css\" rel=\"stylesheet\" onerror=\"this.href='//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/skin/default/default.css';\">#}
  <link id=\"skin_link\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/skin/default/default.css\" rel=\"stylesheet\">

  <script src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.min.js\" type=\"text/javascript\"></script>
  <script src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.form.min.js\"></script>
  <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>
  <script>
    \$(document).ready(function () {
        layui.form.render();
    });
  </script>
  <style type=\"text/css\">
    .m-right{overflow-y: scroll;}
    /*input::-webkit-input-placeholder{font-size: 14px;line-height: 38px;font-weight:normal}*/

  </style>

  {% block css %}
  {% endblock %}
  {% block js %}
  {% endblock %}
  {% block validation_scripts %}
  {% endblock %}
</head>
<body>
{% if app.debug %}
  <div style=\"background-color: darkred;height: 5px;\"></div>
{% endif %}
<div class=\"g-head\" style=\"\">
  <div class=\"m-head s-head\">
    <a class=\"m-logo\" href=\"{{ path('reseller_home') }}\" ></a>
    <div class=\"m-sort s-link\">
      {#<div class=\"bubble-item\" id=\"select-skin\" style=\"display: none;\">#}
        {#<div class=\"bubble\">#}
          {#<div class=\"bubble-arrow\">#}
            {#<em></em>#}
            {#<span></span>#}
          {#</div>#}
          {#<p>请选择喜欢的皮肤：</p>#}
          {#{% for skin in ['default', 'black', 'orange', 'green', 'purple', 'brown', 'blue-2',] %}#}
          {#<a class=\"{{ skin }}\" value=\"{{ skin }}\" href=\"javascript:void (0);\" onclick=\"change_skin('{{ skin }}');\"></a>#}
          {#{% endfor %}#}
        {#</div>#}
      {#</div>#}
    </div>
    <div class=\"m-total s-link\">
      <span class=\"s-white\">店铺名称：{{ user.resellerAccount.shop_name|default('') }}</span>
      <span class=\"s-white\">帐号：{{ user.user_name }}</span>
      <span class=\"s-white\">账户余额：<a href=\"/backend/balance-recharge\" id=\"head_agent_user_momeny_balance\" title=\"点击充值余额\">{{ user.resellerAccount.balance|default(0)|number_format(2) }}</a>元</span>
      <a href=\"javascript:void (0);\" onclick=\"refresh_balance();\"><i class=\"iconfont\">&#xe62e;</i>刷新余额</a>
      <!--                <a href=\"javascript:void (0);\"><i class=\"iconfont\">&#xe62d;</i>系统设置</a>-->
      <a href=\"javascript:void (0);\" class=\"lock-screen\" id=\"lock-screen\"><i class=\"iconfont\">&#xea54;</i>锁屏</a>
      <!--                <a href=\"javascript:void (0);\"><i class=\"iconfont\">&#xe62e;</i>交接班</a>-->
      <!--                <a href=\"javascript:void (0);\"><i class=\"iconfont\">&#xe661;</i>网站导航</a>-->
      <a href=\"{{ url('logout') }}\"><i class=\"iconfont\">&#xe642;</i>退出</a>
    </div>
  </div>
  <div class=\"m-head-nav f-fs-16\">
    {% include \"Reseller/Common/_topNav.twig\" %}
  </div>
</div>
<!-- 主体 -->
<div class=\"g-main\">
  <!-- 侧栏导航 -->
  <div class=\"m-left\">
    {% include \"Reseller/Common/_leftNav.twig\" %}
  </div>
  <!-- /侧栏导航 -->
  <!-- 右侧内容区域 -->
  <div class=\"m-right\">
    {% block main_content %}
    {% endblock %}
  </div>
  <!-- /右侧内容区域 -->
</div>
<!--弹出层-锁屏-->
{% block popup %}
{% endblock %}

<!-- /主体 -->
<div id=\"notice_dialog\" style=\"display: none\">
  <div style=\"padding: 50px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;\" id=\"notice_dialog_content\">

  </div>
</div>

{% block footer %}
{% endblock %}


<script type=\"text/javascript\">
    var _CSRF='{{ csrf_token(\"print_settings\") }}';
    layui.use(['layer'], function(){
        var layer = layui.layer;

    });
    notice_dialog();
    function notice_dialog() {

//        \$.ajax('/get-dialog-notice',{
//
//            success:function (re) {
//                if(!re.status){
//                    return false;
//                }
//                \$('#notice_dialog_content').html(re.data.content);
//                layui.use(['layer'], function(){
//                    var layer = layui.layer;
//                    layer.open({
//                        type: 1
////                            ,title: re.data.title //不显示标题栏
//                        ,title: false //不显示标题栏
//                        ,closeBtn: false
//                        ,area: '300px;'
//                        ,shade: 0.8
//                        ,id: 'LAY_layuipro' //设定一个id，防止重复弹出
//                        ,btn: ['知道了', '下次再看']
//                        ,btnAlign: 'c'
//                        ,moveType: 1 //拖拽模式，0或者1
//                        ,content:\$('#notice_dialog')
//                        ,yes:function (index) {
//                            setread(1,re.data.id);
//                            layer.close(index);
//                        }
//                        ,btn2:function (index) {
//                            setread(2,re.data.id);
//                            layer.close(index);
//                        }
//                    });
//                });
//            }
//        });

    }

    function setread(status,id) {
        \$.ajax('/read-notice',{
            type:'post'
            ,data:{id:id,status:status,'_token':_CSRF}
            ,success:function () {
                if(data.status){
                    return true;
                }
                layer.msg('操作失败');
            }
        });
    }





    \$('#lock-screen').click(function () {
        \$.ajax('/lock-screen/index',{
            type:'post'
            ,data:{'_token':_CSRF,url:location.href}
            ,success:function (data) {
                if(!data.status){
                    layer.msg(data.msg);
                    return false;
                }
                location.href=(data.url);
            }
        });
    });

    \$('#select-skin').mouseleave(function () {
        \$(this).hide();
    });
    var this_user_skin='';
    function change_skin(skin) {
        if(skin==this_user_skin){
            layer.msg('您正在使用这套皮肤哦！');
            return false;
        }
        \$.ajax('/backend/default/change-skin',{
            type:'post'
            ,data:{skin:skin,'_token':_CSRF}
            ,success:function (data) {
                layer.msg(data.msg);
                if(!data.status){
                    return false;
                }
                \$('#skin_link').attr('href','//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/skin/'+skin+'/'+skin+'.css');
                this_user_skin=skin;
                //     location.reload();
            }
            ,error:function () {
                layer.msg('网络异常或系统繁忙，请稍后再再试');
            }
        });
    }
    function refresh_balance() {
        \$.get('{{ path(\"reseller_user_current_balance\") }}',{},function (data) {
            \$('#head_agent_user_momeny_balance').text(data.balance);
            layer.tips('刷新成功','#head_agent_user_momeny_balance', {
                tips: [3, '#9ACD32'],
                time: 3000
            });
        });
    }
</script>
</body>
</html>
", "Reseller/Common/layout.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Common\\layout.twig");
    }
}
