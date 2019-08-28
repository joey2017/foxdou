<?php

/* Reseller/Home/index.bak.twig */
class __TwigTemplate_ca3c0327730a42a62d9b5ce57bcec98531a31e8524b3d708e137c18181b845c9 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Home/index.bak.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Home/index.bak.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\">
  <title>代理商前台</title>
  <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/css/reset.css\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/css/common.css\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/css/index.css\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/js/slideBanner/css/fullSlide.css\"/>

  <script src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.min.js\" type=\"text/javascript\"></script>


  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.form.min.js\"></script>
  <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>

  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/js/slideBanner/js/superslide.2.1.js\"></script>

</head>

<body>
<div class=\"wrapper\">
  <div class=\"agent-top\">
    <div class=\"agent-header\">
      <div class=\"agent-logo\" style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/logo.png);\"></div>
      <div class=\"agent-nav\">
        ";
        // line 28
        $this->loadTemplate("Reseller/Home/top-nav.twig", "Reseller/Home/index.bak.twig", 28)->display($context);
        // line 29
        echo "      </div>
      ";
        // line 30
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RESELLER")) {
            // line 31
            echo "        ";
            $context["user"] = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 31, $this->source); })()), "user", array());
            // line 32
            echo "      <div class=\"agent-login agent-login-ed\">
        <h1>您已登录帐号</h1>
        <ul class=\"agebt-form\">
          <li class=\"agebt-form-item\">
            <div class=\"agebt-headimg\">
              <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 37, $this->source); })()), "avatarUrl", array()), "html", null, true);
            echo "\" title=\"头像\" onerror=\"this.src=''\"/>
            </div>
          </li>
          <li class=\"agebt-form-item\">
            ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 41, $this->source); })()), "nick_name", array()), "html", null, true);
            echo "
          </li>
          <li>
            <button type=\"button\" class=\"agent-btn\" onclick=\"location.href='/reseller/dashboard';return false;\">进入控制台</button>
          </li>
        </ul>
        <div class=\"agent-special\" style=\"height: 20px;\">
          <a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("passport_logout");
            echo "\">切换帐号</a>
        </div>
        <div class=\"agent-find-pwd\">
          <a href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout", array("url" => "/reseller"));
            echo "\">退出帐号</a>
        </div>
      </div>

      ";
        } else {
            // line 56
            echo "
      <div class=\"agent-login\">
        <h1>用户登录</h1>
        <form id=\"agent-login-form\" action=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("passport_login");
            echo "\" method=\"post\">
          <ul class=\"agebt-form\">
            ";
            // line 61
            if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 61, $this->source); })())) {
                // line 62
                echo "            <li class=\"agebt-form-item\" style=\"color: red;\" >
              ";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 63, $this->source); })()), "message", array())), "html", null, true);
                echo "
            </li>
            ";
            }
            // line 66
            echo "            <li class=\"agebt-form-item\"  >
              <span style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/yonghu.png);\"></span>
              <input type=\"text\" name=\"username\" id=\"login-username\" value=\"";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 68, $this->source); })()), "html", null, true);
            echo "\" class=\"agent-input\" placeholder=\"用户\" />
            </li>
            <li class=\"agebt-form-item\"  >
              <span style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/mima.png);\"></span>
              <input type=\"password\" name=\"password\" id=\"login-password\" value=\"\" class=\"agent-input\" placeholder=\"密码\"/>
            </li>
            <li class=\"agebt-form-item agent-special\">
              <a href=\"https://open.foxdou.com/safe/user-inspect?operation=5\" target=\"_blank\">忘记密码？</a>
              <a href=\"https://register.foxdou.com/register\" target=\"_blank\">注册</a>
            </li>

            <li class=\"agebt-form-item\">
              <input type=\"hidden\" name=\"_token\" id=\"_token\" value=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("authenticate"), "html", null, true);
            echo "\" />
              <button class=\"login-btn f-fnsna agent-btn\"  id=\"login-btn\">立即登录</button>
            </li>
          </ul>
        </form>
        <div class=\"agent-login-other\">
          <h5>第三方登录</h5>
          <ul class=\"agent-way-ul\">
            <li><a href=\"#\" style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/qq-nor.png);\"></a></li>
            <li><a href=\"#\" style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/weixin-nor.png);\"></a></li>
            <li><a href=\"#\" style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/xinlang-nor.png);\"></a></li>
          </ul>
        </div>
      </div>
      ";
        }
        // line 95
        echo "    </div>
  </div>


  <div class=\"agent-banner\">
    <div id=\"slide\" class=\"fullSlide\">
      <div class=\"bd\">
        <ul>
          <li _src=\"url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/banner1.jpg)\" style=\"background:#242627 center 0 no-repeat;\"><a href=\"#\"></a></li>
          <li _src=\"url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/banner2.jpg)\" style=\"background:#2e5e88 center 0 no-repeat;\"><a href=\"#\"></a></li>
          <li _src=\"url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/banner3.jpg)\" style=\"background:#146bd5 center 0 no-repeat;\"><a href=\"#\"></a></li>
        </ul>
      </div>
      <div class=\"hd\"><ul></ul></div>
      <span class=\"prev\"></span>
      <span class=\"next\"></span>
    </div>
  </div>



  <script>
      function view_article(url) {
          var width = 1000;
          var height = window.screen.availHeight;
          window.open(url, '', 'scrollbars=0,width=' + width + ',height=' + height + ',top=' + (( (window.screen.availHeight) / 2 ) - (height / 2) ) + ',left=' + (( (window.screen.availWidth) / 2 ) - (width / 2)));
      }
  </script>

  <div class=\"agent-main\">
    <div class=\"agent-cols\">
      <div class=\"agent-title\">
        <h1>最新公告</h1>
        <em></em>
        <span>Latest announcement</span>
      </div>
      <div class=\"agent-list d-clear\">
        ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["announcements"]) || array_key_exists("announcements", $context) ? $context["announcements"] : (function () { throw new Twig_Error_Runtime('Variable "announcements" does not exist.', 132, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 133
            echo "        <div class=\"agent-item\">
          <a href=\"javascript:view_article('";
            // line 134
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("common_articles_view", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "\">
            <div class=\"img-view\">
              <img src=\"";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "images", array()), "html", null, true);
            echo "\" />
            </div>
            <h3><b>";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
            echo "</b></h3>
            <p>";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "abstract", array()), "html", null, true);
            echo "</p>
            <span>";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "publish_time", array()), "html", null, true);
            echo "</span>
          </a>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "      </div>
      <div class=\"agent-more\">
        <a href=\"\">查看更多&gt;&gt;</a>
      </div>
    </div>
    <div class=\"agent-cols-sp\">
      <div class=\"agent-cols\">
        <div class=\"agent-title\">
          <h1>四大阵营</h1>
          <em></em>
          <span>Four big camps</span>
        </div>
        <div class=\"agent-camp d-clear\">
          <div class=\"agent-camp-item\">
            <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/zy-icon1.png\"/>
            <h3>互联网</h3>
            <p>积分兑换/批量采购</p>
          </div>
          <div class=\"agent-camp-item\">
            <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/zy-icon2.png\"/>
            <h3>网上商城</h3>
            <p>点卡平台</p>
          </div>
          <div class=\"agent-camp-item\">
            <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/zy-icon3.png\"/>
            <h3>实体终端</h3>
            <p>post/充值软件合作</p>
          </div>
          <div class=\"agent-camp-item\">
            <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/zy-icon4.png\"/>
            <h3>第三方支付</h3>
            <p>各大银行合作</p>
          </div>
        </div>
      </div>
    </div>
    <div class=\"agent-cols\">
      <div class=\"agent-title\">
        <h1>四大优势</h1>
        <em></em>
        <span>Four advantages</span>
      </div>
      <div class=\"agent-adv\" style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/sdys-bg.jpg);\">
        <div class=\"agent-adv-tab agent-adv-ln1 link-this\" key=\"0\">
          <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/ys-icon1.png\" />
        </div>
        <div class=\"agent-adv-tab agent-adv-ln2\" key=\"1\">
          <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/ys-icon2.png\" />
        </div>
        <div class=\"agent-adv-tab agent-adv-ln3\" key=\"2\">
          <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/ys-icon3.png\" />
        </div>
        <div class=\"agent-adv-tab agent-adv-ln4\" key=\"3\">
          <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/ys-icon4.png\" />
        </div>
        <div class=\"agent-adv-content\">
          <div class=\"agent-adv-item\" key=\"0\" style=\"display: inline-block;\">
            <h3>品牌大</h3>
            <p>目前第一的虚拟产品的电商分销平台和电商支撑平台，行业认知度高，品牌效应显著。</p>
          </div>
          <div class=\"agent-adv-item\" key=\"1\">
            <h3>产品全</h3>
            <p>涵盖话费、游戏、公共事业缴费、金融等众多数字化产品，货源积压神马的不用担心。</p>
          </div>
          <div class=\"agent-adv-item\" key=\"2\">
            <h3>服务好</h3>
            <p>全面提供强大的技术支撑、针对性的业务服务和贴心满意的24小时高效率客服。</p>
          </div>
          <div class=\"agent-adv-item\" key=\"3\">
            <h3>盈利快</h3>
            <p>加盟快速审核，接口部署简单，接入即可享受高质量货源，快速创造盈利价值。</p>
          </div>
        </div>
      </div>
    </div>
    <div class=\"agent-cols-sp\">
      <div class=\"agent-cols\">
        <div class=\"agent-title\">
          <h1>友情链接</h1>
          <em></em>
          <span>Friendship link</span>
        </div>
        <div class=\"agent-firend-link\">
          <a href=\"\" style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/taobao.jpg);\"></a>
          <a href=\"\" style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/yidong.jpg);\"></a>
          <a href=\"\" style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/liantong.jpg);\"></a>
          <a href=\"\" style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/dianxin.jpg);\"></a>
          <a href=\"\" style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/wangyi.jpg);\"></a>
          <a href=\"\" style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/shengda.jpg);\"></a>
          <a href=\"\" style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/zhifubao.jpg);\"></a>
        </div>
      </div>
    </div>
  </div>
  ";
        // line 238
        $this->loadTemplate("Reseller/Home/footer.twig", "Reseller/Home/index.bak.twig", 238)->display($context);
        // line 239
        echo "  <div class=\"agent-service\">
    <div class=\"agent-service-icon\" title=\"在线客服\" style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/kefu.png);\"></div>
    <div class=\"agent-service-body\">
      <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/close.png\" class=\"agent-service-close\" />
      <div class=\"agent-sercice-info\">
        <h3>在线客服</h3>
        <p>工作日：9:00-18:00</p>
        <p>
          <b>QQ号码</b>
          <span>1063033278</span>
        </p>
        <p>
          <b>在线客服</b>
          <a href=\"\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/qq-jiaotan.png\"/></a>
          <a href=\"\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/zaixianzixun.png\"/></a>
        </p>
      </div>
    </div>
  </div>
  <div class=\"agent-backToTop\" title=\"返回顶部\"  style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/top.png);\"></div>
</div>

";
        // line 262
        echo "
<script type=\"text/javascript\">

</script>

<script>

</script>

<script type=\"text/javascript\">

    //一般直接写在一个js文件中
    layui.use(['layer', 'form'], function(){
        var layer = layui.layer
            ,form = layui.form;

        var lastError = \"";
        // line 278
        echo twig_escape_filter($this->env, (((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 278, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 278, $this->source); })()), "message", array())) : ("")), "html", null, true);
        echo "\";
        if(lastError !== \"\") {
//            layer.msg('登录失败！' + lastError);
        }

        ";
        // line 284
        echo "            ";
        // line 285
        echo "                ";
        // line 286
        echo "                    ";
        // line 287
        echo "                        ";
        // line 288
        echo "                        ";
        // line 289
        echo "                    ";
        // line 290
        echo "                        ";
        // line 291
        echo "                        ";
        // line 292
        echo "                    ";
        // line 293
        echo "                ";
        // line 294
        echo "
            ";
        // line 296
        echo "        ";
        // line 297
        echo "
        \$('img').attr('onerror','img_onerror(this)');
        function img_onerror(dom) {
            dom.src='//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/default-pic.jpg';
        }


      /*
       * 首页轮播图
       */
        \$(\".fullSlide\").hover(function(){
                \$(this).find(\".prev,.next\").stop(true, true).fadeTo(\"show\", 0.5)
            },
            function(){
                \$(this).find(\".prev,.next\").fadeOut()
            });
        \$(\".fullSlide\").slide({
            titCell: \".hd ul\",
            mainCell: \".bd ul\",
            effect: \"fold\",
            autoPlay: true,
            autoPage: true,
            trigger: \"click\",
            startFun: function(i) {
                var curLi = jQuery(\".fullSlide .bd li\").eq(i);
                if ( !! curLi.attr(\"_src\")) {
                    curLi.css(\"background-image\", curLi.attr(\"_src\")).removeAttr(\"_src\")
                }
            }
        });


        //    /*
        //     * 滚屏区禁止鼠标右键事件
        //     */
        //    window.onload = function ()
        //    {
        //        var banner = document.getElementById ('slide');
        //        banner.oncontextmenu = function ()
        //        {
        //            return false;
        //        }
        //    }


      /*
       * 第三方登录
       */
        \$('.agent-way-ul a').hover(function(){
            var str = \$(this).css('background-image');
            var reg = /nor/g;
            var str = str.replace(reg,'sel');

            \$(this).css('background-image',str);
        },function(){
            var str = \$(this).css('background-image');
            var reg = /sel/g;
            var str = str.replace(reg,'nor');

            \$(this).css('background-image',str);
        });


      /*
       * 四大优势
       */
        \$('.agent-adv-tab').hover(function(){
            var key = \$(this).attr('key');
            \$(this).addClass('link-this').siblings().removeClass('link-this');
            \$('.agent-adv-item[key='+key+']').css('display','inline-block').siblings().css('display','none')
        });


      /*
       * 在线客服
       */
        \$('.agent-service-icon').click(function(){
            \$('.agent-service-body').show();
        });
        \$('.agent-service-close').click(function(){
            \$('.agent-service-body').hide();
        });



      /*
       * 返回顶部
       */
        var backButton = \$('.agent-backToTop');
        function backToTop() {
            \$('html,body').animate({
                scrollTop: 0
            }, 800);
        }
        backButton.on('click', backToTop);

        \$(window).on('scroll', function () {/*当滚动条的垂直位置大于浏览器所能看到的页面的那部分的高度时，回到顶部按钮就显示 */
            if (\$(window).scrollTop() > \$(window).height())
                backButton.fadeIn();
            else
                backButton.fadeOut();
        });
        \$(window).trigger('scroll');/*触发滚动事件，避免刷新的时候显示回到顶部按钮*/


    });




</script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Reseller/Home/index.bak.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 297,  409 => 296,  406 => 294,  404 => 293,  402 => 292,  400 => 291,  398 => 290,  396 => 289,  394 => 288,  392 => 287,  390 => 286,  388 => 285,  386 => 284,  378 => 278,  360 => 262,  336 => 239,  334 => 238,  238 => 144,  228 => 140,  224 => 139,  220 => 138,  215 => 136,  210 => 134,  207 => 133,  203 => 132,  164 => 95,  146 => 80,  131 => 68,  127 => 66,  121 => 63,  118 => 62,  116 => 61,  111 => 59,  106 => 56,  98 => 51,  92 => 48,  82 => 41,  75 => 37,  68 => 32,  65 => 31,  63 => 30,  60 => 29,  58 => 28,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\">
  <title>代理商前台</title>
  <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/css/reset.css\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/css/common.css\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/css/index.css\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/js/slideBanner/css/fullSlide.css\"/>

  <script src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.min.js\" type=\"text/javascript\"></script>


  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.form.min.js\"></script>
  <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>

  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/js/slideBanner/js/superslide.2.1.js\"></script>

</head>

<body>
<div class=\"wrapper\">
  <div class=\"agent-top\">
    <div class=\"agent-header\">
      <div class=\"agent-logo\" style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/logo.png);\"></div>
      <div class=\"agent-nav\">
        {% include \"Reseller/Home/top-nav.twig\" %}
      </div>
      {% if is_granted('ROLE_RESELLER') %}
        {% set user = app.user %}
      <div class=\"agent-login agent-login-ed\">
        <h1>您已登录帐号</h1>
        <ul class=\"agebt-form\">
          <li class=\"agebt-form-item\">
            <div class=\"agebt-headimg\">
              <img src=\"{{ user.avatarUrl }}\" title=\"头像\" onerror=\"this.src=''\"/>
            </div>
          </li>
          <li class=\"agebt-form-item\">
            {{ user.nick_name }}
          </li>
          <li>
            <button type=\"button\" class=\"agent-btn\" onclick=\"location.href='/reseller/dashboard';return false;\">进入控制台</button>
          </li>
        </ul>
        <div class=\"agent-special\" style=\"height: 20px;\">
          <a href=\"{{ url('passport_logout') }}\">切换帐号</a>
        </div>
        <div class=\"agent-find-pwd\">
          <a href=\"{{ path(\"logout\", {\"url\": \"/reseller\"}) }}\">退出帐号</a>
        </div>
      </div>

      {% else %}

      <div class=\"agent-login\">
        <h1>用户登录</h1>
        <form id=\"agent-login-form\" action=\"{{ url('passport_login') }}\" method=\"post\">
          <ul class=\"agebt-form\">
            {% if error %}
            <li class=\"agebt-form-item\" style=\"color: red;\" >
              {{ error.message|trans }}
            </li>
            {% endif %}
            <li class=\"agebt-form-item\"  >
              <span style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/yonghu.png);\"></span>
              <input type=\"text\" name=\"username\" id=\"login-username\" value=\"{{ last_username }}\" class=\"agent-input\" placeholder=\"用户\" />
            </li>
            <li class=\"agebt-form-item\"  >
              <span style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/mima.png);\"></span>
              <input type=\"password\" name=\"password\" id=\"login-password\" value=\"\" class=\"agent-input\" placeholder=\"密码\"/>
            </li>
            <li class=\"agebt-form-item agent-special\">
              <a href=\"https://open.foxdou.com/safe/user-inspect?operation=5\" target=\"_blank\">忘记密码？</a>
              <a href=\"https://register.foxdou.com/register\" target=\"_blank\">注册</a>
            </li>

            <li class=\"agebt-form-item\">
              <input type=\"hidden\" name=\"_token\" id=\"_token\" value=\"{{ csrf_token(\"authenticate\") }}\" />
              <button class=\"login-btn f-fnsna agent-btn\"  id=\"login-btn\">立即登录</button>
            </li>
          </ul>
        </form>
        <div class=\"agent-login-other\">
          <h5>第三方登录</h5>
          <ul class=\"agent-way-ul\">
            <li><a href=\"#\" style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/qq-nor.png);\"></a></li>
            <li><a href=\"#\" style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/weixin-nor.png);\"></a></li>
            <li><a href=\"#\" style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/xinlang-nor.png);\"></a></li>
          </ul>
        </div>
      </div>
      {% endif %}
    </div>
  </div>


  <div class=\"agent-banner\">
    <div id=\"slide\" class=\"fullSlide\">
      <div class=\"bd\">
        <ul>
          <li _src=\"url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/banner1.jpg)\" style=\"background:#242627 center 0 no-repeat;\"><a href=\"#\"></a></li>
          <li _src=\"url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/banner2.jpg)\" style=\"background:#2e5e88 center 0 no-repeat;\"><a href=\"#\"></a></li>
          <li _src=\"url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/banner3.jpg)\" style=\"background:#146bd5 center 0 no-repeat;\"><a href=\"#\"></a></li>
        </ul>
      </div>
      <div class=\"hd\"><ul></ul></div>
      <span class=\"prev\"></span>
      <span class=\"next\"></span>
    </div>
  </div>



  <script>
      function view_article(url) {
          var width = 1000;
          var height = window.screen.availHeight;
          window.open(url, '', 'scrollbars=0,width=' + width + ',height=' + height + ',top=' + (( (window.screen.availHeight) / 2 ) - (height / 2) ) + ',left=' + (( (window.screen.availWidth) / 2 ) - (width / 2)));
      }
  </script>

  <div class=\"agent-main\">
    <div class=\"agent-cols\">
      <div class=\"agent-title\">
        <h1>最新公告</h1>
        <em></em>
        <span>Latest announcement</span>
      </div>
      <div class=\"agent-list d-clear\">
        {% for item in announcements %}
        <div class=\"agent-item\">
          <a href=\"javascript:view_article('{{ url(\"common_articles_view\", {'id': item.id}) }}\">
            <div class=\"img-view\">
              <img src=\"{{ item.images }}\" />
            </div>
            <h3><b>{{ item.title }}</b></h3>
            <p>{{ item.abstract }}</p>
            <span>{{ item.publish_time }}</span>
          </a>
        </div>
        {% endfor %}
      </div>
      <div class=\"agent-more\">
        <a href=\"\">查看更多&gt;&gt;</a>
      </div>
    </div>
    <div class=\"agent-cols-sp\">
      <div class=\"agent-cols\">
        <div class=\"agent-title\">
          <h1>四大阵营</h1>
          <em></em>
          <span>Four big camps</span>
        </div>
        <div class=\"agent-camp d-clear\">
          <div class=\"agent-camp-item\">
            <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/zy-icon1.png\"/>
            <h3>互联网</h3>
            <p>积分兑换/批量采购</p>
          </div>
          <div class=\"agent-camp-item\">
            <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/zy-icon2.png\"/>
            <h3>网上商城</h3>
            <p>点卡平台</p>
          </div>
          <div class=\"agent-camp-item\">
            <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/zy-icon3.png\"/>
            <h3>实体终端</h3>
            <p>post/充值软件合作</p>
          </div>
          <div class=\"agent-camp-item\">
            <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/zy-icon4.png\"/>
            <h3>第三方支付</h3>
            <p>各大银行合作</p>
          </div>
        </div>
      </div>
    </div>
    <div class=\"agent-cols\">
      <div class=\"agent-title\">
        <h1>四大优势</h1>
        <em></em>
        <span>Four advantages</span>
      </div>
      <div class=\"agent-adv\" style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/sdys-bg.jpg);\">
        <div class=\"agent-adv-tab agent-adv-ln1 link-this\" key=\"0\">
          <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/ys-icon1.png\" />
        </div>
        <div class=\"agent-adv-tab agent-adv-ln2\" key=\"1\">
          <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/ys-icon2.png\" />
        </div>
        <div class=\"agent-adv-tab agent-adv-ln3\" key=\"2\">
          <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/ys-icon3.png\" />
        </div>
        <div class=\"agent-adv-tab agent-adv-ln4\" key=\"3\">
          <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/ys-icon4.png\" />
        </div>
        <div class=\"agent-adv-content\">
          <div class=\"agent-adv-item\" key=\"0\" style=\"display: inline-block;\">
            <h3>品牌大</h3>
            <p>目前第一的虚拟产品的电商分销平台和电商支撑平台，行业认知度高，品牌效应显著。</p>
          </div>
          <div class=\"agent-adv-item\" key=\"1\">
            <h3>产品全</h3>
            <p>涵盖话费、游戏、公共事业缴费、金融等众多数字化产品，货源积压神马的不用担心。</p>
          </div>
          <div class=\"agent-adv-item\" key=\"2\">
            <h3>服务好</h3>
            <p>全面提供强大的技术支撑、针对性的业务服务和贴心满意的24小时高效率客服。</p>
          </div>
          <div class=\"agent-adv-item\" key=\"3\">
            <h3>盈利快</h3>
            <p>加盟快速审核，接口部署简单，接入即可享受高质量货源，快速创造盈利价值。</p>
          </div>
        </div>
      </div>
    </div>
    <div class=\"agent-cols-sp\">
      <div class=\"agent-cols\">
        <div class=\"agent-title\">
          <h1>友情链接</h1>
          <em></em>
          <span>Friendship link</span>
        </div>
        <div class=\"agent-firend-link\">
          <a href=\"\" style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/taobao.jpg);\"></a>
          <a href=\"\" style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/yidong.jpg);\"></a>
          <a href=\"\" style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/liantong.jpg);\"></a>
          <a href=\"\" style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/dianxin.jpg);\"></a>
          <a href=\"\" style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/wangyi.jpg);\"></a>
          <a href=\"\" style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/shengda.jpg);\"></a>
          <a href=\"\" style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/zhifubao.jpg);\"></a>
        </div>
      </div>
    </div>
  </div>
  {% include \"Reseller/Home/footer.twig\" %}
  <div class=\"agent-service\">
    <div class=\"agent-service-icon\" title=\"在线客服\" style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/kefu.png);\"></div>
    <div class=\"agent-service-body\">
      <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/close.png\" class=\"agent-service-close\" />
      <div class=\"agent-sercice-info\">
        <h3>在线客服</h3>
        <p>工作日：9:00-18:00</p>
        <p>
          <b>QQ号码</b>
          <span>1063033278</span>
        </p>
        <p>
          <b>在线客服</b>
          <a href=\"\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/qq-jiaotan.png\"/></a>
          <a href=\"\"><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/zaixianzixun.png\"/></a>
        </p>
      </div>
    </div>
  </div>
  <div class=\"agent-backToTop\" title=\"返回顶部\"  style=\"background-image: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/top.png);\"></div>
</div>

{#<?=\$this->render('perfect-info',['platform_code_int'=>Yii::\$app->params['platform_code_int'],'success_url'=>\\yii\\helpers\\Html::encode(\$success_url)])?>#}

<script type=\"text/javascript\">

</script>

<script>

</script>

<script type=\"text/javascript\">

    //一般直接写在一个js文件中
    layui.use(['layer', 'form'], function(){
        var layer = layui.layer
            ,form = layui.form;

        var lastError = \"{{ error ? error.message : '' }}\";
        if(lastError !== \"\") {
//            layer.msg('登录失败！' + lastError);
        }

        {#\$('#login-btn').click(function (e) {#}
            {#\$.post(\"{{ url('passport_login') }}\", \$('#agent-login-form').serialize(),#}
                {#function(data, status){#}
                    {#if(data.code == \"SUCCEED\"){#}
                        {#layer.msg('登录成功！');#}
                        {#window.location.href=\"/reseller\";#}
                    {#}else{#}
                        {#layer.msg('登录失败！' + data.msg);#}
                        {#\$('#_token').value(data.new_token);#}
                    {#}#}
                {#},'json');#}

            {#e.preventDefault();#}
        {#});#}

        \$('img').attr('onerror','img_onerror(this)');
        function img_onerror(dom) {
            dom.src='//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/images/default-pic.jpg';
        }


      /*
       * 首页轮播图
       */
        \$(\".fullSlide\").hover(function(){
                \$(this).find(\".prev,.next\").stop(true, true).fadeTo(\"show\", 0.5)
            },
            function(){
                \$(this).find(\".prev,.next\").fadeOut()
            });
        \$(\".fullSlide\").slide({
            titCell: \".hd ul\",
            mainCell: \".bd ul\",
            effect: \"fold\",
            autoPlay: true,
            autoPage: true,
            trigger: \"click\",
            startFun: function(i) {
                var curLi = jQuery(\".fullSlide .bd li\").eq(i);
                if ( !! curLi.attr(\"_src\")) {
                    curLi.css(\"background-image\", curLi.attr(\"_src\")).removeAttr(\"_src\")
                }
            }
        });


        //    /*
        //     * 滚屏区禁止鼠标右键事件
        //     */
        //    window.onload = function ()
        //    {
        //        var banner = document.getElementById ('slide');
        //        banner.oncontextmenu = function ()
        //        {
        //            return false;
        //        }
        //    }


      /*
       * 第三方登录
       */
        \$('.agent-way-ul a').hover(function(){
            var str = \$(this).css('background-image');
            var reg = /nor/g;
            var str = str.replace(reg,'sel');

            \$(this).css('background-image',str);
        },function(){
            var str = \$(this).css('background-image');
            var reg = /sel/g;
            var str = str.replace(reg,'nor');

            \$(this).css('background-image',str);
        });


      /*
       * 四大优势
       */
        \$('.agent-adv-tab').hover(function(){
            var key = \$(this).attr('key');
            \$(this).addClass('link-this').siblings().removeClass('link-this');
            \$('.agent-adv-item[key='+key+']').css('display','inline-block').siblings().css('display','none')
        });


      /*
       * 在线客服
       */
        \$('.agent-service-icon').click(function(){
            \$('.agent-service-body').show();
        });
        \$('.agent-service-close').click(function(){
            \$('.agent-service-body').hide();
        });



      /*
       * 返回顶部
       */
        var backButton = \$('.agent-backToTop');
        function backToTop() {
            \$('html,body').animate({
                scrollTop: 0
            }, 800);
        }
        backButton.on('click', backToTop);

        \$(window).on('scroll', function () {/*当滚动条的垂直位置大于浏览器所能看到的页面的那部分的高度时，回到顶部按钮就显示 */
            if (\$(window).scrollTop() > \$(window).height())
                backButton.fadeIn();
            else
                backButton.fadeOut();
        });
        \$(window).trigger('scroll');/*触发滚动事件，避免刷新的时候显示回到顶部按钮*/


    });




</script>
</body>
</html>
", "Reseller/Home/index.bak.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Home\\index.bak.twig");
    }
}
