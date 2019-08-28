<?php

/* Open/Dashboard/index.twig */
class __TwigTemplate_514093913e6df472ce839ace8fa9b74d4c648f9ec599f9dad4c9db14eec0edc1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Open/Common/layout_main_panel.twig", "Open/Dashboard/index.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Open/Common/layout_main_panel.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Open/Dashboard/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Open/Dashboard/index.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 7
        echo "  <div class=\"container\">
    <div class=\"pg-box pg-user\">
      <div class=\"hd-img\">
        <img src=\"<?=\\common\\models\\users\\Users::get_alios_user_head_portrait_url(\$this->params['user']['id'])?>\" onerror=\"this.src='//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/img/default-head-portrait2.jpg'\"/>
      </div>
      <div class=\"name\">你好，<span>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "user", array()), "nick_name", array()), "html", null, true);
        echo "</span></div>
      <div class=\"yanzheng\">

        <i class=\"icon iconfont icon-shimingrenzhengchenggong \" style=\"color: grey!important;\"></i>
        <a target=\"_blank\" href=\"//safe.foxdou.com/safe/simin-verify/index\" title=\"\">
          <span>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 17, $this->source); })()), "getRealNameStatusText", array(), "method"), "html", null, true);
        echo "</span>
        </a>
      </div>
      <div class=\"history-login-time\">
        <span class=\"\">上次登录：";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 21, $this->source); })()), "last_login_time", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</span><br>
        <span class=\"\">登录IP：";
        // line 22
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "last_login_ip", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "last_login_ip", array()), "-")) : ("-")), "html", null, true);
        echo "<span id=\"ip_address\"></span></span>

      </div>
    </div>
    <div class=\"pg-r\">
      <div class=\"pg-box pg-balance\">
        <div class=\"hd-title\">
          <i class=\"icon iconfont icon-yue\" style=\"color: orange\"></i>
          <label>账户余额</label>
        </div>
        <div class=\"count\">
          <span>";
        // line 33
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "openPlatformAccount", array(), "any", false, true), "balance", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "openPlatformAccount", array(), "any", false, true), "balance", array()), "0")) : ("0")), 2), "html", null, true);
        echo "</span>
          <em>元</em>
          <!--                    <i class=\"icon iconfont icon-chakan\"></i>-->
        </div>
        <a href=\"<?= Url::to(['./recharge']) ?>\" class=\"layui-btn\">在线充值</a>
      </div>
      <div class=\"pg-box pg-api\">
        <div class=\"hd-title\">
          <i class=\"icon iconfont icon-yingyong\" style=\"color: #00a0e9\"></i>
          <label>我的应用</label>
        </div>
        <div class=\"item\">
          <a href=\"<?=Url::to(['app/index','left_url'=>Url::to(['app/left','selected'=>'应用列表']),'right_url'=>Url::to(['app/list','status'=>1])])?>\" target=\"main-control\">已上线<span class=\"green\"><?=\$app_status_num['normal']?></span>个</a>
          <a href=\"<?=Url::to(['app/index','left_url'=>Url::to(['app/left','selected'=>'应用列表']),'right_url'=>Url::to(['app/list','status'=>3])])?>\" target=\"main-control\">调试中<span class=\"gray\"><?=\$app_status_num['debug']?></span>个</a>
          <a href=\"<?=Url::to(['app/index','left_url'=>Url::to(['app/left','selected'=>'应用列表']),'right_url'=>Url::to(['app/list','status'=>2])])?>\" target=\"main-control\">已暂停<span class=\"gray\"><?=\$app_status_num['stop']?></span>个</a>
          <a href=\"<?=Url::to(['app/index','left_url'=>Url::to(['app/left','selected'=>'等待续费']),'right_url'=>Url::to(['app/list','waitpay'=>1])])?>\" target=\"main-control\">待续费<span class=\"orange\"><?=\$app_xufei_num?></span>个</a>
        </div>
      </div>
    </div>
  </div>
  <div class=\"container\">
    <div class=\"pg-l\">
      <div class=\"pg-box pg-slide\">
        <!-- 幻灯图片 -->
        <div class=\"xSlider\">
          <ul>
            <li><a href=\"#\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/img/slider-1.jpg\" alt=\"1\"/></a></li>
            <li><a href=\"#\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/img/slider-2.jpg\" alt=\"2\"/></a></li>
            <li><a href=\"#\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/img/slider-3.jpg\" alt=\"3\"/></a></li>
            <li><a href=\"#\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/img/slider-2.jpg\" alt=\"4\"/></a></li>
          </ul>
          <ol>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ol>
        </div>
      </div>
      <div class=\"pg-box pg-notice\">
        <div class=\"hd-title\">
          <span></span>
          <h2>最新公告</h2>
          <a href=\"<?=Url::to(['notice-list'])?>\" class=\"more\">更多&gt;&gt;</a>
        </div>
        <ul class=\"pgn-lis\">
          <?php foreach (\$notice as \$v): ?>
          <li>
            <a class=\"notice-title\" href=\"<?= \\yii\\helpers\\Url::to(['notice', 'id' => \$v['id']]) ?>\"><?= \$v['title'] ?></a>
            <span><?=\$v['add_time']?date(\"Y-m-d H:i:s\", \$v['add_time']):'' ?></span>
            <span>
                            <?php if(\$v['readed']):?>
              <a href=\"<?= \\yii\\helpers\\Url::to(['notice', 'id' => \$v['id']]) ?>\">已读</a>
              <?php else:?>
              <a href=\"<?= \\yii\\helpers\\Url::to(['notice', 'id' => \$v['id']]) ?>\" style=\"color: orange\">未读</a>
              <?php endif;?></span>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class=\"pg-box pg-kefu\">
        <div class=\"hd-title\">
          <span></span>
          <h2>客服</h2>
        </div>
        <div class=\"dd\">
          <div class=\"rexian\">
            <i class=\"icon iconfont icon-dianhua\"></i>
            电话：<span>400-068-0008</span>
          </div>
          <a href=\"<?=\\common\\models\\SystemConfig::getContactCustomerServiceUrl(2)?>\" target=\"_blank\" title=\"2850236951\" class=\"zxkf\">
            <i class=\"icon iconfont icon-qie\"></i>
            <span>在线客服</span>
          </a>
        </div>
      </div>
    </div>
    <div class=\"pg-r\" style=\"width: calc(100% - 470px); min-width: 680px;\">

      <div class=\"pg-box pg-quick\">
        <div class=\"hd-title\">
          <span></span>
          <h2>常用服务</h2>
        </div>

        <div class=\"dd dd-quick g-bdc\">
          <div class=\"j_slide_quick\">
            <ul class=\"quick-item g-bdc\">
              <?php foreach (\$userService as \$k=>\$v):?>
              <li>
                <a href=\"<?= Url::to(['service/index', 'service_id' => \$v['id']]) ?> \" target=\"main-control\">
                  <img src=\"<?=\\common\\models\\servicemall\\ImgUploadCheck::getServiceUploadParams(\$v['id'],'thumb')['fullUrl']?>\" onerror=\"\"/>
                  <span><?= \$v['name'] ?></span>
                </a>
              </li>
              <?php endforeach;?>
            </ul>
          </div>
          <div class=\"j_slide_arrow j_slide_quick_arrow\">
            <!--                        <ol>-->
            <!--                            <li></li>-->
            <!--                            <li></li>-->
            <!--                        </ol>-->
          </div>
        </div>

      </div>

      <div class=\"pg-box pg-ysq-api\">
        <div class=\"hd-title\">
          <span></span>
          <h2>常用应用</h2>
          <a href=\"<?=Url::to(['/open/app/index'])?>\" target=\"main-control\" class=\"more\">更多>></a>
        </div>
        <div class=\"dd dd-ysq-api g-bdc\">
          <div class=\"j_slide_api\">
            <ul class=\"ysq-api-item g-bdc\">
              <?php foreach (\$app as \$k=>\$v):?>
              <li>
                <img src=\"<?=\\common\\models\\servicemall\\ImgUploadCheck::getServiceUploadParams(\$v['service_id'],'thumb')['fullUrl']?>\" onerror=\"\"/>
                <div class=\"info\">
                  <a href=\"<?=Url::to(['/open/app/info','app_id'=>\$v['app_id']])?>\">
                    <h2><?=\$v['name']?></h2>
                    <p>申请时间<span><?=date('Y-m-d',\$v['add_time'])?></span></p>
                    <?php if(in_array(\$v['pay_type'],[1,2])):?>
                    <p>按实际订单扣费</p>
                    <?php elseif (\$v['pay_type']==3):?>
                    <p>剩余<span style=\"color: #E60012;\"><?=\$v['balance']?></span>次</p>
                    <?php elseif (in_array(\$v['pay_type'],[4,5])):?>
                    <p>到期时间<span><?=date('Y-m-d',\$v['end_use_time'])?></span></p>
                    <?php endif;?>
                  </a>
                </div>
                <?php if(in_array(\$v['pay_type'],[1,2])):?>
                <a class=\"xufei\" href=\"<?=Url::to(['/open/app/info','app_id'=>\$v['app_id']])?>\" >应用管理</a>
                <?php else:?>
                <a class=\"xufei\" href=\"<?=\\yii\\helpers\\Url::to(['/servicemall/goods/index','id'=>\$v['service_id'],'app_id'=>\$v['app_id']])?>\" target=\"_blank\">立即续费</a>
                <?php endif;?>

              </li>

              <?php endforeach;?>
            </ul>
          </div>

          <div class=\"j_slide_arrow j_slide_api_arrow\">
          </div>
        </div>
      </div>
    </div>
  </div>

  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/js/ScrollPic/css/jquery.jscrollpane.css\"/>
  <script src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/js/xSlider/js/jquery.luara.0.0.1.min.js\"></script>
  <!-- 快捷入口 -->
  <script src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/js/silde/js/jquery.slides.min.js\"></script>
  <script type=\"text/javascript\">


    /*
     * 最新活动图片轮播-调用Luara示例
     */
    \$(\".xSlider\").luara({width:\"440\",height:\"160\",interval:4500,selected:\"seleted\",deriction:\"left\"});

    \$(document).ready(function () {
        \$.ajax('/user-login-ip-query',{async:true,type:'POST',dataType:'json',data:{},
            success:function (data) {
                if(data.status){
                    \$('#ip_address').text('('+data.address+')')
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
        return "Open/Dashboard/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 33,  97 => 22,  93 => 21,  86 => 17,  78 => 12,  71 => 7,  62 => 6,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Open/Common/layout_main_panel.twig' %}

{% block css %}
{% endblock %}

{% block main_content %}
  <div class=\"container\">
    <div class=\"pg-box pg-user\">
      <div class=\"hd-img\">
        <img src=\"<?=\\common\\models\\users\\Users::get_alios_user_head_portrait_url(\$this->params['user']['id'])?>\" onerror=\"this.src='//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/img/default-head-portrait2.jpg'\"/>
      </div>
      <div class=\"name\">你好，<span>{{ app.user.nick_name }}</span></div>
      <div class=\"yanzheng\">

        <i class=\"icon iconfont icon-shimingrenzhengchenggong \" style=\"color: grey!important;\"></i>
        <a target=\"_blank\" href=\"//safe.foxdou.com/safe/simin-verify/index\" title=\"\">
          <span>{{ user.getRealNameStatusText() }}</span>
        </a>
      </div>
      <div class=\"history-login-time\">
        <span class=\"\">上次登录：{{ user.last_login_time|date('Y-m-d H:i:s') }}</span><br>
        <span class=\"\">登录IP：{{ user.last_login_ip|default('-') }}<span id=\"ip_address\"></span></span>

      </div>
    </div>
    <div class=\"pg-r\">
      <div class=\"pg-box pg-balance\">
        <div class=\"hd-title\">
          <i class=\"icon iconfont icon-yue\" style=\"color: orange\"></i>
          <label>账户余额</label>
        </div>
        <div class=\"count\">
          <span>{{ user.openPlatformAccount.balance|default('0')|number_format(2) }}</span>
          <em>元</em>
          <!--                    <i class=\"icon iconfont icon-chakan\"></i>-->
        </div>
        <a href=\"<?= Url::to(['./recharge']) ?>\" class=\"layui-btn\">在线充值</a>
      </div>
      <div class=\"pg-box pg-api\">
        <div class=\"hd-title\">
          <i class=\"icon iconfont icon-yingyong\" style=\"color: #00a0e9\"></i>
          <label>我的应用</label>
        </div>
        <div class=\"item\">
          <a href=\"<?=Url::to(['app/index','left_url'=>Url::to(['app/left','selected'=>'应用列表']),'right_url'=>Url::to(['app/list','status'=>1])])?>\" target=\"main-control\">已上线<span class=\"green\"><?=\$app_status_num['normal']?></span>个</a>
          <a href=\"<?=Url::to(['app/index','left_url'=>Url::to(['app/left','selected'=>'应用列表']),'right_url'=>Url::to(['app/list','status'=>3])])?>\" target=\"main-control\">调试中<span class=\"gray\"><?=\$app_status_num['debug']?></span>个</a>
          <a href=\"<?=Url::to(['app/index','left_url'=>Url::to(['app/left','selected'=>'应用列表']),'right_url'=>Url::to(['app/list','status'=>2])])?>\" target=\"main-control\">已暂停<span class=\"gray\"><?=\$app_status_num['stop']?></span>个</a>
          <a href=\"<?=Url::to(['app/index','left_url'=>Url::to(['app/left','selected'=>'等待续费']),'right_url'=>Url::to(['app/list','waitpay'=>1])])?>\" target=\"main-control\">待续费<span class=\"orange\"><?=\$app_xufei_num?></span>个</a>
        </div>
      </div>
    </div>
  </div>
  <div class=\"container\">
    <div class=\"pg-l\">
      <div class=\"pg-box pg-slide\">
        <!-- 幻灯图片 -->
        <div class=\"xSlider\">
          <ul>
            <li><a href=\"#\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/img/slider-1.jpg\" alt=\"1\"/></a></li>
            <li><a href=\"#\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/img/slider-2.jpg\" alt=\"2\"/></a></li>
            <li><a href=\"#\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/img/slider-3.jpg\" alt=\"3\"/></a></li>
            <li><a href=\"#\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/img/slider-2.jpg\" alt=\"4\"/></a></li>
          </ul>
          <ol>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ol>
        </div>
      </div>
      <div class=\"pg-box pg-notice\">
        <div class=\"hd-title\">
          <span></span>
          <h2>最新公告</h2>
          <a href=\"<?=Url::to(['notice-list'])?>\" class=\"more\">更多&gt;&gt;</a>
        </div>
        <ul class=\"pgn-lis\">
          <?php foreach (\$notice as \$v): ?>
          <li>
            <a class=\"notice-title\" href=\"<?= \\yii\\helpers\\Url::to(['notice', 'id' => \$v['id']]) ?>\"><?= \$v['title'] ?></a>
            <span><?=\$v['add_time']?date(\"Y-m-d H:i:s\", \$v['add_time']):'' ?></span>
            <span>
                            <?php if(\$v['readed']):?>
              <a href=\"<?= \\yii\\helpers\\Url::to(['notice', 'id' => \$v['id']]) ?>\">已读</a>
              <?php else:?>
              <a href=\"<?= \\yii\\helpers\\Url::to(['notice', 'id' => \$v['id']]) ?>\" style=\"color: orange\">未读</a>
              <?php endif;?></span>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class=\"pg-box pg-kefu\">
        <div class=\"hd-title\">
          <span></span>
          <h2>客服</h2>
        </div>
        <div class=\"dd\">
          <div class=\"rexian\">
            <i class=\"icon iconfont icon-dianhua\"></i>
            电话：<span>400-068-0008</span>
          </div>
          <a href=\"<?=\\common\\models\\SystemConfig::getContactCustomerServiceUrl(2)?>\" target=\"_blank\" title=\"2850236951\" class=\"zxkf\">
            <i class=\"icon iconfont icon-qie\"></i>
            <span>在线客服</span>
          </a>
        </div>
      </div>
    </div>
    <div class=\"pg-r\" style=\"width: calc(100% - 470px); min-width: 680px;\">

      <div class=\"pg-box pg-quick\">
        <div class=\"hd-title\">
          <span></span>
          <h2>常用服务</h2>
        </div>

        <div class=\"dd dd-quick g-bdc\">
          <div class=\"j_slide_quick\">
            <ul class=\"quick-item g-bdc\">
              <?php foreach (\$userService as \$k=>\$v):?>
              <li>
                <a href=\"<?= Url::to(['service/index', 'service_id' => \$v['id']]) ?> \" target=\"main-control\">
                  <img src=\"<?=\\common\\models\\servicemall\\ImgUploadCheck::getServiceUploadParams(\$v['id'],'thumb')['fullUrl']?>\" onerror=\"\"/>
                  <span><?= \$v['name'] ?></span>
                </a>
              </li>
              <?php endforeach;?>
            </ul>
          </div>
          <div class=\"j_slide_arrow j_slide_quick_arrow\">
            <!--                        <ol>-->
            <!--                            <li></li>-->
            <!--                            <li></li>-->
            <!--                        </ol>-->
          </div>
        </div>

      </div>

      <div class=\"pg-box pg-ysq-api\">
        <div class=\"hd-title\">
          <span></span>
          <h2>常用应用</h2>
          <a href=\"<?=Url::to(['/open/app/index'])?>\" target=\"main-control\" class=\"more\">更多>></a>
        </div>
        <div class=\"dd dd-ysq-api g-bdc\">
          <div class=\"j_slide_api\">
            <ul class=\"ysq-api-item g-bdc\">
              <?php foreach (\$app as \$k=>\$v):?>
              <li>
                <img src=\"<?=\\common\\models\\servicemall\\ImgUploadCheck::getServiceUploadParams(\$v['service_id'],'thumb')['fullUrl']?>\" onerror=\"\"/>
                <div class=\"info\">
                  <a href=\"<?=Url::to(['/open/app/info','app_id'=>\$v['app_id']])?>\">
                    <h2><?=\$v['name']?></h2>
                    <p>申请时间<span><?=date('Y-m-d',\$v['add_time'])?></span></p>
                    <?php if(in_array(\$v['pay_type'],[1,2])):?>
                    <p>按实际订单扣费</p>
                    <?php elseif (\$v['pay_type']==3):?>
                    <p>剩余<span style=\"color: #E60012;\"><?=\$v['balance']?></span>次</p>
                    <?php elseif (in_array(\$v['pay_type'],[4,5])):?>
                    <p>到期时间<span><?=date('Y-m-d',\$v['end_use_time'])?></span></p>
                    <?php endif;?>
                  </a>
                </div>
                <?php if(in_array(\$v['pay_type'],[1,2])):?>
                <a class=\"xufei\" href=\"<?=Url::to(['/open/app/info','app_id'=>\$v['app_id']])?>\" >应用管理</a>
                <?php else:?>
                <a class=\"xufei\" href=\"<?=\\yii\\helpers\\Url::to(['/servicemall/goods/index','id'=>\$v['service_id'],'app_id'=>\$v['app_id']])?>\" target=\"_blank\">立即续费</a>
                <?php endif;?>

              </li>

              <?php endforeach;?>
            </ul>
          </div>

          <div class=\"j_slide_arrow j_slide_api_arrow\">
          </div>
        </div>
      </div>
    </div>
  </div>

  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/js/ScrollPic/css/jquery.jscrollpane.css\"/>
  <script src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/js/xSlider/js/jquery.luara.0.0.1.min.js\"></script>
  <!-- 快捷入口 -->
  <script src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/js/silde/js/jquery.slides.min.js\"></script>
  <script type=\"text/javascript\">


    /*
     * 最新活动图片轮播-调用Luara示例
     */
    \$(\".xSlider\").luara({width:\"440\",height:\"160\",interval:4500,selected:\"seleted\",deriction:\"left\"});

    \$(document).ready(function () {
        \$.ajax('/user-login-ip-query',{async:true,type:'POST',dataType:'json',data:{},
            success:function (data) {
                if(data.status){
                    \$('#ip_address').text('('+data.address+')')
                }
            },
            error: function(e){
                //console.log(e);
            }
        });
    });



  </script>

{% endblock %}
", "Open/Dashboard/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Open\\Dashboard\\index.twig");
    }
}
