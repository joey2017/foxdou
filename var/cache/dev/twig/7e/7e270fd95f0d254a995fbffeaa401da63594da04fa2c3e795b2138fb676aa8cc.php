<?php

/* Reseller/Dashboard/index.twig */
class __TwigTemplate_832beab9b61fdd8fb9cdf456d01c97a44dbdc94fa806f1bb726b8cf09ad04538 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Reseller/Common/layout.twig", "Reseller/Dashboard/index.twig", 1);
        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Reseller/Common/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Dashboard/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Dashboard/index.twig"));

        // line 2
        $context["title"] = "狐豆便民服务-代理中心-控制面板";
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
        echo "
";
        // line 11
        echo "
<style type=\"text/css\">
  .m-right {background: none; overflow: hidden;}
  .pgn-lis { padding: 0 10px;}
  .pgn-lis li {padding: 5px 0; border-bottom: 1px dashed #E0E0E0;}
  .pgn-lis a {color: #777777;}
  .pgn-lis a:hover {color: #00cdba;}
  .pgn-lis p {display: inline-block; width: calc(100% - 80px);}
  .pgn-lis span {float:right; width: 140px; text-align: right;}
  #kuaijie .layui-this,.layui-carousel{background-color:white!important;}
  .ca-container{padding: 20px 5px 5px 5px!important;height: 150px!important;}
  #kuaijie .layui-carousel-ind{top:-20px;}
</style>
<!-- page-left开始 -->
<div class=\"page-left\">
  <div class=\"m-container g-bdc\" style=\"height: 243px;\">
    <div class=\"m-cwel\">
      <a class=\"f-fs-18 s-dark\">你好，<span class=\"s-blue\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 28, $this->source); })()), "nick_name", array()), "html", null, true);
        echo "</span></a>
      <a href=\"https://safe.foxdou.com/safe/simin-verify/index\" target=\"_blank\">
        <i class=\"iconfont icon-rz f-fl\">&#xe669;</i>
        <span class=\"f-fl s-gray\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 31, $this->source); })()), "real_name_status", array()), "html", null, true);
        echo "</span>
      </a>
      <a href=\"#\">
        <!--                <i class=\"iconfont icon-rz f-fl\">&#xe63a;</i>-->
        <!--                <span class=\"f-fl s-gray\">未读消息（<span class=\"s-red\">1</span>）</span>-->
      </a><br />
      <p>
        <span class=\"\" style=\"margin-right: 20px;\">上次登录：待完成</span>
        <span class=\"\">IP:待完成<span id=\"ip_address\"></span></span>
      </p>
    </div>
    <div class=\"m-item g-bdc\">
      <div class=\"item\">
        <div class=\"item-icon f-fl\"><i class=\"iconfont\">&#xe65a;</i></div>
        <div class=\"item-amount f-fl\">
          <span class=\"f-fs-18 s-dark\">账户余额</span><br />
          <strong class=\"f-fs-20 s-red\">";
        // line 47
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "resellerAccount", array(), "any", false, true), "balance", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "resellerAccount", array(), "any", false, true), "balance", array()), 0)) : (0)), "html", null, true);
        echo "</strong><span style=\"margin-left: 10px;\">元</span>
          <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_finance_add_balance");
        echo "\" class=\"layui-btn\">在线充值</a>
        </div>
      </div>
      <?php if (\$dealer):?>
      <div class=\"item \">
        <h2 class=\"f-fs-18 s-dark\"><i class=\"iconfont icon-yy f-fl\">&#xe60f;</i><span class=\"f-fl\">我的推广</span></h2>
        <div class=\"item-total g-bdc f-fs-14 s-dark\">
          <p>用户 <a class=\"f-fs-18 s-blue\" href=\"<?=\\yii\\helpers\\Url::to(['/backend/spread-user/index'])?>\"><?=\$dealer['spread_user_count']?></a> 个</p>
          <p>佣金余额 <span class=\"f-fs-18 s-red\"><?=\$dealer['rebate']?></span> 元</p>
          <a href=\"<?=\\yii\\helpers\\Url::to(['/backend/rebate-cash/index'])?>\" class=\"layui-btn\" style=\"position: relative; top: -2px; height: 30px!important; line-height: 30px; padding: 0 10px;\">提取佣金</a>

        </div>
      </div>
      <?php endif;?>
    </div>
  </div>
  <div class=\"m-container\" style=\"height: 200px;\">
    <h2 class=\"container-title\">快捷入口<span><i class=\"iconfont icon-break\">&#x3437;</i></span></h2>
    <div class=\"ca-container\">
      <div class=\"ca-wrapper layui-carousel\" id=\"kuaijie\">
        <div carousel-item >
          <div class=\"\">
          ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shortcuts"]) || array_key_exists("shortcuts", $context) ? $context["shortcuts"] : (function () { throw new Twig_Error_Runtime('Variable "shortcuts" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 71
            echo "            <div class=\"ca-item\">
              <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "url", array()), "html", null, true);
            echo "\">
                <img src=\"";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "img", array()), "html", null, true);
            echo "\" />
                <span>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", array()), "html", null, true);
            echo "</span>
              </a>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "          </div>
        </div>
      </div>
    </div>

  </div>
  <div class=\"m-container\" style=\"height: 230px;\">
    <h2 class=\"container-title\">经营状况<span><i class=\"iconfont icon-break\">&#x3437;</i></span></h2>

    <div class=\"container-content\" style=\"height: 205px;\">
      <ul class=\"f-shouyi\">
        <li>
          <h3>今日收益</h3>
          <div class=\"f-amount\"><span id=\"today_profit\">统计中...</span></div>
          <i class=\"icon iconfont icon-baobiao\"></i>
        </li>
        <li>
          <h3>昨日收益</h3>
          <div class=\"f-amount\"><span id=\"yesterday_profit\">统计中...</span></div>
          <i class=\"icon iconfont icon-baobiao\"></i>
        </li>
      </ul>
    </div>


  </div>
</div>
<!-- /page-left结束 -->
<!-- page-right开始 -->
<div class=\"page-right\">
  <div class=\"m-container\">
    <h2 class=\"container-title\">最新活动</h2>
    <div class=\"container-content\" id=\"lunbo-box\" style=\"padding: 0;\">
      <div class=\"slider-box\">
        <div class=\"layui-carousel\" id=\"lunbo\">
          <div carousel-item >
            <div  id=\"slider-1\"><a href=\"#\" ><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/img/slider-2.jpg\" alt=\"2\"/></a></div>
            <div  id=\"slider-2\"><a href=\"#\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/img/slider-1.jpg\" alt=\"1\"/></a></div>

            <!--  <div id=\"slider-3\"><a href=\"#\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/img/slider-3.jpg\" alt=\"3\"/></a></div>-->
          </div>
        </div>
      </div>


    </div>
  </div>
  <div class=\"m-container\" style=\"height: 200px;\">
    <div class=\"layui-tab layui-tab-brief\" style=\"margin: 0 0 5px 0;\">
      <h2 class=\"container-title\">最新公告<a href=\"<?=\\yii\\helpers\\Url::to(['/backend/notice/index'])?>\">更多&gt;&gt;</a></h2>
      <div class=\"layui-tab-content\">
        <div class=\"layui-tab-item layui-show\">
          <ul class=\"pgn-lis\">
            <?php foreach (\$notice as \$k=>\$v):?>
            <li><a href=\"<?=\\yii\\helpers\\Url::to(['/backend/notice/details','id'=>\$v['id']])?>\"><?=\$v['title']?></a>
              <span> <?=date('Y-m-d H:i:s',\$v['add_time'])?></span>
              <span style=\"width: 40px;\">
                            <?php if(\$v['readed']):?>
                <a href=\"<?= \\yii\\helpers\\Url::to(['/backend/notice/details', 'id' => \$v['id']]) ?>\">已读</a>
                <?php else:?>
                <a href=\"<?= \\yii\\helpers\\Url::to(['/backend/notice/details', 'id' => \$v['id']]) ?>\" style=\"color: orange\">未读</a>
                <?php endif;?>
                            </span>
            </li>
            <?php endforeach;?>

          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class=\"m-container\" style=\"height: 230px;\">
    <h2 class=\"container-title\">客户经理<span><i class=\"iconfont icon-break\">&#x3437;</i></span></h2>
    <div class=\"container-content g-bdc\">
      <div class=\"manager-item f-fl\">
        <h3><strong>系统使用、订单</strong><span class=\"f-fs-14 s-gray\">有问题?请联系：</span></h3>
        <div class=\"manager g-bdc\">
          <div class=\"f-fl f-fs-16 s-blue2\" style=\"margin-top: 20px;\">
            <i class=\"iconfont f-fs-20\">&#xe60e;</i>
            <span>客户经理</span>
          </div>
          <div class=\"f-fl f-fs-14 s-gray\" style=\"margin: 10px;\">
            <p>
              <span>QQ:800093007</span>
              <span>电话:400-068-0008</span>
            </p>
            <p>周一至周日 9:00-22:00</p>
          </div>
        </div>
      </div>
      <div class=\"manager-item f-fr\">
        <h3><strong>招商加盟、咨询</strong><span class=\"f-fs-14 s-gray\">有问题?请联系：</span></h3>
        <div class=\"manager g-bdc\">
          <div class=\"f-fl f-fs-16 s-blue2\" style=\"margin-top: 20px;\">
            <i class=\"iconfont f-fs-20\">&#xe60e;</i>
            <span>客户经理</span>
          </div>
          <div class=\"f-fl f-fs-14 s-gray\" style=\"margin: 10px;\">
            <p>
              <span>QQ:800093007</span>
              <span>电话:400-068-0008</span>
            </p>
            <p>周一至周五 9:00-18:00</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /主体 -->
<script type=\"text/javascript\">
    layui.use('carousel', function(){
        var carousel = layui.carousel;
        //建造实例
        carousel.render({
            elem: '#kuaijie'
            ,width: '100%' //设置容器宽度
            ,height: '115' //设置容器宽度
            //     ,arrow: 'always' //始终显示箭头
            //   ,indicator:'outside'
            ,indicator:'none'
            ,autoplay:false

        });
        carousel.render({
            elem: '#lunbo'
            ,width: '100%' //设置容器宽度
            ,height: '180' //设置容器宽度
            ,interval: '5000' //时间

            //   ,arrow: 'always' //始终显示箭头
            //,anim: 'updown' //切换动画方式
            //   ,indicator:'none'
        });
    });
    \$(document).ready(function () {
        \$.ajax('/user-login-ip-query',{async:true,type:'POST',dataType:'json',data:{'_csrf_token':'user-login-ip-query:";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("user-login-ip-query"), "html", null, true);
        echo "'},
            success:function (data) {
                if(data.status){
                    \$('#ip_address').text('('+data.address+')')
                }
            },
            error: function(e){
                //console.log(e);
            }
        });

        \$.ajax('/get-lately-count-profit',{
            success:function (data) {
                if(data.status){
                    \$('#today_profit').text(data.today+'元');
                    \$('#yesterday_profit').text(data.yesterday+'元');
                }
            },
            error: function(e){
                //console.log(e);
            }
        });

    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Reseller/Dashboard/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 214,  157 => 78,  147 => 74,  143 => 73,  139 => 72,  136 => 71,  132 => 70,  107 => 48,  103 => 47,  84 => 31,  78 => 28,  59 => 11,  56 => 5,  47 => 4,  37 => 1,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Reseller/Common/layout.twig' %}
{% set title = '狐豆便民服务-代理中心-控制面板' %}

{% block main_content %}

{#<?php#}
{#\$this->registerCssFile('//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/index.css',['position' => \\yii\\web\\View::POS_HEAD]);#}
{#\$this->registerCssFile(\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/js/ScrollPic/css/jquery.jscrollpane.css\",['position' => \\yii\\web\\View::POS_HEAD]);#}
{#\$this->registerCssFile(\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/js/xSlider/css/luara.left.css\",['position' => \\yii\\web\\View::POS_HEAD]);#}
{#?>#}

<style type=\"text/css\">
  .m-right {background: none; overflow: hidden;}
  .pgn-lis { padding: 0 10px;}
  .pgn-lis li {padding: 5px 0; border-bottom: 1px dashed #E0E0E0;}
  .pgn-lis a {color: #777777;}
  .pgn-lis a:hover {color: #00cdba;}
  .pgn-lis p {display: inline-block; width: calc(100% - 80px);}
  .pgn-lis span {float:right; width: 140px; text-align: right;}
  #kuaijie .layui-this,.layui-carousel{background-color:white!important;}
  .ca-container{padding: 20px 5px 5px 5px!important;height: 150px!important;}
  #kuaijie .layui-carousel-ind{top:-20px;}
</style>
<!-- page-left开始 -->
<div class=\"page-left\">
  <div class=\"m-container g-bdc\" style=\"height: 243px;\">
    <div class=\"m-cwel\">
      <a class=\"f-fs-18 s-dark\">你好，<span class=\"s-blue\">{{ user.nick_name }}</span></a>
      <a href=\"https://safe.foxdou.com/safe/simin-verify/index\" target=\"_blank\">
        <i class=\"iconfont icon-rz f-fl\">&#xe669;</i>
        <span class=\"f-fl s-gray\">{{ user.real_name_status }}</span>
      </a>
      <a href=\"#\">
        <!--                <i class=\"iconfont icon-rz f-fl\">&#xe63a;</i>-->
        <!--                <span class=\"f-fl s-gray\">未读消息（<span class=\"s-red\">1</span>）</span>-->
      </a><br />
      <p>
        <span class=\"\" style=\"margin-right: 20px;\">上次登录：待完成</span>
        <span class=\"\">IP:待完成<span id=\"ip_address\"></span></span>
      </p>
    </div>
    <div class=\"m-item g-bdc\">
      <div class=\"item\">
        <div class=\"item-icon f-fl\"><i class=\"iconfont\">&#xe65a;</i></div>
        <div class=\"item-amount f-fl\">
          <span class=\"f-fs-18 s-dark\">账户余额</span><br />
          <strong class=\"f-fs-20 s-red\">{{ user.resellerAccount.balance|default(0) }}</strong><span style=\"margin-left: 10px;\">元</span>
          <a href=\"{{ path('reseller_finance_add_balance') }}\" class=\"layui-btn\">在线充值</a>
        </div>
      </div>
      <?php if (\$dealer):?>
      <div class=\"item \">
        <h2 class=\"f-fs-18 s-dark\"><i class=\"iconfont icon-yy f-fl\">&#xe60f;</i><span class=\"f-fl\">我的推广</span></h2>
        <div class=\"item-total g-bdc f-fs-14 s-dark\">
          <p>用户 <a class=\"f-fs-18 s-blue\" href=\"<?=\\yii\\helpers\\Url::to(['/backend/spread-user/index'])?>\"><?=\$dealer['spread_user_count']?></a> 个</p>
          <p>佣金余额 <span class=\"f-fs-18 s-red\"><?=\$dealer['rebate']?></span> 元</p>
          <a href=\"<?=\\yii\\helpers\\Url::to(['/backend/rebate-cash/index'])?>\" class=\"layui-btn\" style=\"position: relative; top: -2px; height: 30px!important; line-height: 30px; padding: 0 10px;\">提取佣金</a>

        </div>
      </div>
      <?php endif;?>
    </div>
  </div>
  <div class=\"m-container\" style=\"height: 200px;\">
    <h2 class=\"container-title\">快捷入口<span><i class=\"iconfont icon-break\">&#x3437;</i></span></h2>
    <div class=\"ca-container\">
      <div class=\"ca-wrapper layui-carousel\" id=\"kuaijie\">
        <div carousel-item >
          <div class=\"\">
          {% for s in shortcuts %}
            <div class=\"ca-item\">
              <a href=\"{{ s.url }}\">
                <img src=\"{{ s.img }}\" />
                <span>{{ s.name }}</span>
              </a>
            </div>
          {% endfor %}
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class=\"m-container\" style=\"height: 230px;\">
    <h2 class=\"container-title\">经营状况<span><i class=\"iconfont icon-break\">&#x3437;</i></span></h2>

    <div class=\"container-content\" style=\"height: 205px;\">
      <ul class=\"f-shouyi\">
        <li>
          <h3>今日收益</h3>
          <div class=\"f-amount\"><span id=\"today_profit\">统计中...</span></div>
          <i class=\"icon iconfont icon-baobiao\"></i>
        </li>
        <li>
          <h3>昨日收益</h3>
          <div class=\"f-amount\"><span id=\"yesterday_profit\">统计中...</span></div>
          <i class=\"icon iconfont icon-baobiao\"></i>
        </li>
      </ul>
    </div>


  </div>
</div>
<!-- /page-left结束 -->
<!-- page-right开始 -->
<div class=\"page-right\">
  <div class=\"m-container\">
    <h2 class=\"container-title\">最新活动</h2>
    <div class=\"container-content\" id=\"lunbo-box\" style=\"padding: 0;\">
      <div class=\"slider-box\">
        <div class=\"layui-carousel\" id=\"lunbo\">
          <div carousel-item >
            <div  id=\"slider-1\"><a href=\"#\" ><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/img/slider-2.jpg\" alt=\"2\"/></a></div>
            <div  id=\"slider-2\"><a href=\"#\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/img/slider-1.jpg\" alt=\"1\"/></a></div>

            <!--  <div id=\"slider-3\"><a href=\"#\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/img/slider-3.jpg\" alt=\"3\"/></a></div>-->
          </div>
        </div>
      </div>


    </div>
  </div>
  <div class=\"m-container\" style=\"height: 200px;\">
    <div class=\"layui-tab layui-tab-brief\" style=\"margin: 0 0 5px 0;\">
      <h2 class=\"container-title\">最新公告<a href=\"<?=\\yii\\helpers\\Url::to(['/backend/notice/index'])?>\">更多&gt;&gt;</a></h2>
      <div class=\"layui-tab-content\">
        <div class=\"layui-tab-item layui-show\">
          <ul class=\"pgn-lis\">
            <?php foreach (\$notice as \$k=>\$v):?>
            <li><a href=\"<?=\\yii\\helpers\\Url::to(['/backend/notice/details','id'=>\$v['id']])?>\"><?=\$v['title']?></a>
              <span> <?=date('Y-m-d H:i:s',\$v['add_time'])?></span>
              <span style=\"width: 40px;\">
                            <?php if(\$v['readed']):?>
                <a href=\"<?= \\yii\\helpers\\Url::to(['/backend/notice/details', 'id' => \$v['id']]) ?>\">已读</a>
                <?php else:?>
                <a href=\"<?= \\yii\\helpers\\Url::to(['/backend/notice/details', 'id' => \$v['id']]) ?>\" style=\"color: orange\">未读</a>
                <?php endif;?>
                            </span>
            </li>
            <?php endforeach;?>

          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class=\"m-container\" style=\"height: 230px;\">
    <h2 class=\"container-title\">客户经理<span><i class=\"iconfont icon-break\">&#x3437;</i></span></h2>
    <div class=\"container-content g-bdc\">
      <div class=\"manager-item f-fl\">
        <h3><strong>系统使用、订单</strong><span class=\"f-fs-14 s-gray\">有问题?请联系：</span></h3>
        <div class=\"manager g-bdc\">
          <div class=\"f-fl f-fs-16 s-blue2\" style=\"margin-top: 20px;\">
            <i class=\"iconfont f-fs-20\">&#xe60e;</i>
            <span>客户经理</span>
          </div>
          <div class=\"f-fl f-fs-14 s-gray\" style=\"margin: 10px;\">
            <p>
              <span>QQ:800093007</span>
              <span>电话:400-068-0008</span>
            </p>
            <p>周一至周日 9:00-22:00</p>
          </div>
        </div>
      </div>
      <div class=\"manager-item f-fr\">
        <h3><strong>招商加盟、咨询</strong><span class=\"f-fs-14 s-gray\">有问题?请联系：</span></h3>
        <div class=\"manager g-bdc\">
          <div class=\"f-fl f-fs-16 s-blue2\" style=\"margin-top: 20px;\">
            <i class=\"iconfont f-fs-20\">&#xe60e;</i>
            <span>客户经理</span>
          </div>
          <div class=\"f-fl f-fs-14 s-gray\" style=\"margin: 10px;\">
            <p>
              <span>QQ:800093007</span>
              <span>电话:400-068-0008</span>
            </p>
            <p>周一至周五 9:00-18:00</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /主体 -->
<script type=\"text/javascript\">
    layui.use('carousel', function(){
        var carousel = layui.carousel;
        //建造实例
        carousel.render({
            elem: '#kuaijie'
            ,width: '100%' //设置容器宽度
            ,height: '115' //设置容器宽度
            //     ,arrow: 'always' //始终显示箭头
            //   ,indicator:'outside'
            ,indicator:'none'
            ,autoplay:false

        });
        carousel.render({
            elem: '#lunbo'
            ,width: '100%' //设置容器宽度
            ,height: '180' //设置容器宽度
            ,interval: '5000' //时间

            //   ,arrow: 'always' //始终显示箭头
            //,anim: 'updown' //切换动画方式
            //   ,indicator:'none'
        });
    });
    \$(document).ready(function () {
        \$.ajax('/user-login-ip-query',{async:true,type:'POST',dataType:'json',data:{'_csrf_token':'user-login-ip-query:{{ csrf_token(\"user-login-ip-query\") }}'},
            success:function (data) {
                if(data.status){
                    \$('#ip_address').text('('+data.address+')')
                }
            },
            error: function(e){
                //console.log(e);
            }
        });

        \$.ajax('/get-lately-count-profit',{
            success:function (data) {
                if(data.status){
                    \$('#today_profit').text(data.today+'元');
                    \$('#yesterday_profit').text(data.yesterday+'元');
                }
            },
            error: function(e){
                //console.log(e);
            }
        });

    });
</script>
{% endblock %}
", "Reseller/Dashboard/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Dashboard\\index.twig");
    }
}
