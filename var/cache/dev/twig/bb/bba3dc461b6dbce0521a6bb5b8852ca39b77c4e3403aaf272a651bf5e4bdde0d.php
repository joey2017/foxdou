<?php

/* Common/frontpage.twig */
class __TwigTemplate_5fdb020f7a47c2585df0868a3be18b7bfdd79aa7a92db6e45cebda82684d6e4c extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/frontpage.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/frontpage.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  <meta name=\"description\" content=\"狐豆涵盖所有官方虚拟充值业务，欢迎全国各省市营业厅、实体店、淘宝店、拍拍店加盟咨询。\" />
  <meta name=\"keywords\" content=\"狐豆实体店,充值软件,加盟,空中充值,最低进价,游戏Q币最低进价,游戏话费Q币最低进价充值系统,免费代理加盟,网店专用,实体店专用充值软件,经销商加盟,直销商加盟,移动营业厅加盟代理,联通营业厅代理加盟,电信营业厅加盟代理,狐豆,空充,平台,话费查询,10086,湖北充值,湖北缴费,1zbao.com,进价低充值软件,最低进价话费充值软件,空中充值,移动话费充值营业厅,联通,电信,营业厅,综合缴费系统,缴费平台,便民服务,手机话费充值平台,狐豆网，胡豆\" />
  <title>狐豆网-dou一下你就知道</title>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/default/css/layui.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/default/css/nornmalize.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/default/css/font-icon.css\"/>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/default/css/common.css\"/>
  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.min.js\"></script>
  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/js/layui.js\" ></script>

  <style>
    html,body{position: relative; width: 100%;height: 100%;min-width: 1200px;min-height: 768px;background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/default/css/img/bg-1.jpg);}
    .disabled {color: gray;background-color: #eee;}
  </style>
  <script type=\"text/javascript\">
      layui.use(['layer'], function(){
          var layer = layui.layer;

          \$('.disabled').click(function (e) {
              layer.msg('此功能还在开发中');
              e.preventDefault();
              return false;
          });

      });
  </script>
</head>

<body>
<div class=\"sisi-box-bg\">
  <!-- 顶部 -->
  <div class=\"sisi-top\">
    <div class=\"sisi-top-left\">
      <a href=\"#\" class=\"weather\">
        <span>南宁：</span>
        <span>13°</span>
        <span>良</span>
      </a>
      <a>|</a>
      <a href=\"#\">VIP宝箱</a>
      <a href=\"#\">换肤</a>
      <a href=\"#\">消息（<span>1</span>）</a>
    </div>
    <div class=\"sisi-top-right\">
      ";
        // line 50
        if ($this->extensions['App\Common\Twig\SecurityExtension']->isLoggedIn()) {
            // line 51
            echo "        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 52
                echo "          <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_index");
                echo "\">管理后台</a>
        ";
            }
            // line 54
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_user_profile");
            echo "\">你好，";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array(), "any", false, true), "nick_name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array(), "any", false, true), "nick_name", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 54, $this->source); })()), "user", array()), "user_name", array()))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 54, $this->source); })()), "user", array()), "user_name", array()))), "html", null, true);
            echo " </a>
        <a href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">退出登录</a>
      ";
        } else {
            // line 57
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">登录</a>
        <a href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">注册</a>
      ";
        }
        // line 60
        echo "      <a href=\"#\">更多产品</a>
    </div>
  </div>
  <!-- /顶部 -->
  <div class=\"sisi-logo\"></div>
  <div class=\"sisi-select\">
    <div class=\"select-item\">
      <form action=\"https://www.baidu.com/s?ie=UTF-8\" method=\"get\" target=\"_blank\">
        <input name=\"wd\" lay-verify=\"title\" autocomplete=\"off\" placeholder=\"输入你想搜索的内容，dou一下\" class=\"layui-input f-fnsna\" type=\"text\">
        <button class=\"layui-btn f-fnsna\">百度搜索</button>
      </form>
    </div>
  </div>
  <!-- 内容 -->
  <div class=\"sisi-main\">
    <!-- 菜单 -->
    <div class=\"sisi-menu\">
      <ul class=\"sisi-menu-gurd\">
        <li>我的关注</li>
        <li>推荐</li>
        <li class=\"menu-this\">导航</li>
        <li>购物</li>
        <li>音乐</li>
        <li>视频</li>
        <li>电影</li>
        <li>电视剧</li>
        <li>网盘</li>
      </ul>
      <div class=\"sisi-menu-gurd-pro\">
        <a href=\"#\"><i class=\"iconfont\">&#xe62d;</i></a>
        <a href=\"#\"><i class=\"iconfont\">&#xe62e;</i></a>
      </div>
    </div>
    <!-- /菜单 -->
    <div class=\"sisi-contents\" style=\"\">
      <!-- 导航 -->
      <div id=\"content-1\" class=\"s-content clearfloat\">
        <div class=\"module-1 disabled\" style=\"color: gray;background-color: #eee;cursor: not-allowed;\">
          <a href=\"#\">
            <div class=\"module\">
              <i class=\"iconfont\">&#xe655;</i>
              <h2>I'm狐豆</h2>
              <span>chat</span>
            </div>
          </a>
        </div>
        <div class=\"module-2 disabled\" style=\"color: gray;background-color: #eee;cursor: not-allowed;\">
          <a href=\"#\">
            <div class=\"module\">
              <i class=\"iconfont\">&#xe647;</i>
              <h2 style=\"line-height: 34px;\">狐豆商城</h2>
              <span>mall</span>
            </div>
          </a>
        </div>
        <div class=\"module-3 disabled\" style=\"color: gray;background-color: #eee;cursor: not-allowed;\">
          <a href=\"#\">
            <div class=\"module\">
              <i class=\"iconfont\">&#xe623;</i>
              <h2>下载中心</h2>
              <span>download</span>
            </div>
          </a>
        </div>
        <div class=\"module-4 disabled\" style=\"color: gray;background-color: #eee;cursor: not-allowed;\">
          <a href=\"#\">
            <div class=\"module\">
              <i class=\"iconfont\">&#xe600;</i>
              <h2>联系我们</h2>
              <span>contect</span>
            </div>
          </a>
        </div>
        <div class=\"module-5\">
          <a href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_dashboard_index");
        echo "\" target=\"_blank\">
            <div class=\"module\">
              <i class=\"iconfont\">&#xe625;</i>
              <h2>狐豆代理</h2>
              <span>Agent</span>
            </div>
          </a>
        </div>
        <div class=\"module-6\">
          <a href=\"#\" target=\"_blank\">
            <div class=\"module\">
              <i class=\"iconfont\">&#xe630;</i>
              <h2>狐豆供应商</h2>
              <span>Sup</span>
            </div>
          </a>
        </div>
        <div class=\"module-7\">
          <a href=\"";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("open_control_panel_index");
        echo "\" target=\"_blank\">
            <div class=\"module\">
              <i class=\"iconfont\">&#xe698;</i>
              <h2>狐豆开放平台</h2>
              <span>open</span>
            </div>
          </a>
        </div>
        <div class=\"module-8\">
          <a href=\"";
        // line 161
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("open_control_panel_index");
        echo "\" target=\"_blank\">
            <div class=\"module\">
              <i class=\"iconfont\">&#xe602;</i>
              <h2>狐豆api市场</h2>
              <span>apistore</span>
            </div>
          </a>
        </div>
      </div>
      <!-- /导航 -->


    </div>
  </div>
  <!-- /内容 -->
  <!-- 版权 -->
  <div class=\"sisi-foot\">
    <p>
      <!--            <a href=\"#\">设为首页</a>-->
      <span>&copy; 2016-";
        // line 180
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " foxdou.com 广西你行我动科技有限责任公司</span>
    </p>
    <p>";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['App\Common\Twig\AppExtension']->getParams("system_beian_info"), "html", null, true);
        echo "</p>
  </div>
  <!-- /版权 -->
</div>
</body>
</html>

";
        // line 190
        echo "  ";
        // line 191
        echo "
  ";
        // line 193
        echo "  ";
        // line 194
        echo "  ";
        // line 195
        echo "  ";
        // line 196
        echo "  ";
        // line 197
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/frontpage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 197,  270 => 196,  268 => 195,  266 => 194,  264 => 193,  261 => 191,  259 => 190,  249 => 182,  244 => 180,  222 => 161,  210 => 152,  189 => 134,  113 => 60,  108 => 58,  103 => 57,  98 => 55,  91 => 54,  85 => 52,  82 => 51,  80 => 50,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  <meta name=\"description\" content=\"狐豆涵盖所有官方虚拟充值业务，欢迎全国各省市营业厅、实体店、淘宝店、拍拍店加盟咨询。\" />
  <meta name=\"keywords\" content=\"狐豆实体店,充值软件,加盟,空中充值,最低进价,游戏Q币最低进价,游戏话费Q币最低进价充值系统,免费代理加盟,网店专用,实体店专用充值软件,经销商加盟,直销商加盟,移动营业厅加盟代理,联通营业厅代理加盟,电信营业厅加盟代理,狐豆,空充,平台,话费查询,10086,湖北充值,湖北缴费,1zbao.com,进价低充值软件,最低进价话费充值软件,空中充值,移动话费充值营业厅,联通,电信,营业厅,综合缴费系统,缴费平台,便民服务,手机话费充值平台,狐豆网，胡豆\" />
  <title>狐豆网-dou一下你就知道</title>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/default/css/layui.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/default/css/nornmalize.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/default/css/font-icon.css\"/>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/default/css/common.css\"/>
  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.min.js\"></script>
  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/js/layui.js\" ></script>

  <style>
    html,body{position: relative; width: 100%;height: 100%;min-width: 1200px;min-height: 768px;background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/default/css/img/bg-1.jpg);}
    .disabled {color: gray;background-color: #eee;}
  </style>
  <script type=\"text/javascript\">
      layui.use(['layer'], function(){
          var layer = layui.layer;

          \$('.disabled').click(function (e) {
              layer.msg('此功能还在开发中');
              e.preventDefault();
              return false;
          });

      });
  </script>
</head>

<body>
<div class=\"sisi-box-bg\">
  <!-- 顶部 -->
  <div class=\"sisi-top\">
    <div class=\"sisi-top-left\">
      <a href=\"#\" class=\"weather\">
        <span>南宁：</span>
        <span>13°</span>
        <span>良</span>
      </a>
      <a>|</a>
      <a href=\"#\">VIP宝箱</a>
      <a href=\"#\">换肤</a>
      <a href=\"#\">消息（<span>1</span>）</a>
    </div>
    <div class=\"sisi-top-right\">
      {% if is_logged_in() %}
        {% if is_granted('ROLE_ADMIN') %}
          <a href=\"{{ path('admin_dashboard_index') }}\">管理后台</a>
        {% endif %}
        <a href=\"{{ path('passport_user_profile') }}\">你好，{{ app.user.nick_name|default(app.user.user_name) }} </a>
        <a href=\"{{ path('logout') }}\">退出登录</a>
      {% else %}
        <a href=\"{{ path('login') }}\">登录</a>
        <a href=\"{{ path('register') }}\">注册</a>
      {% endif %}
      <a href=\"#\">更多产品</a>
    </div>
  </div>
  <!-- /顶部 -->
  <div class=\"sisi-logo\"></div>
  <div class=\"sisi-select\">
    <div class=\"select-item\">
      <form action=\"https://www.baidu.com/s?ie=UTF-8\" method=\"get\" target=\"_blank\">
        <input name=\"wd\" lay-verify=\"title\" autocomplete=\"off\" placeholder=\"输入你想搜索的内容，dou一下\" class=\"layui-input f-fnsna\" type=\"text\">
        <button class=\"layui-btn f-fnsna\">百度搜索</button>
      </form>
    </div>
  </div>
  <!-- 内容 -->
  <div class=\"sisi-main\">
    <!-- 菜单 -->
    <div class=\"sisi-menu\">
      <ul class=\"sisi-menu-gurd\">
        <li>我的关注</li>
        <li>推荐</li>
        <li class=\"menu-this\">导航</li>
        <li>购物</li>
        <li>音乐</li>
        <li>视频</li>
        <li>电影</li>
        <li>电视剧</li>
        <li>网盘</li>
      </ul>
      <div class=\"sisi-menu-gurd-pro\">
        <a href=\"#\"><i class=\"iconfont\">&#xe62d;</i></a>
        <a href=\"#\"><i class=\"iconfont\">&#xe62e;</i></a>
      </div>
    </div>
    <!-- /菜单 -->
    <div class=\"sisi-contents\" style=\"\">
      <!-- 导航 -->
      <div id=\"content-1\" class=\"s-content clearfloat\">
        <div class=\"module-1 disabled\" style=\"color: gray;background-color: #eee;cursor: not-allowed;\">
          <a href=\"#\">
            <div class=\"module\">
              <i class=\"iconfont\">&#xe655;</i>
              <h2>I'm狐豆</h2>
              <span>chat</span>
            </div>
          </a>
        </div>
        <div class=\"module-2 disabled\" style=\"color: gray;background-color: #eee;cursor: not-allowed;\">
          <a href=\"#\">
            <div class=\"module\">
              <i class=\"iconfont\">&#xe647;</i>
              <h2 style=\"line-height: 34px;\">狐豆商城</h2>
              <span>mall</span>
            </div>
          </a>
        </div>
        <div class=\"module-3 disabled\" style=\"color: gray;background-color: #eee;cursor: not-allowed;\">
          <a href=\"#\">
            <div class=\"module\">
              <i class=\"iconfont\">&#xe623;</i>
              <h2>下载中心</h2>
              <span>download</span>
            </div>
          </a>
        </div>
        <div class=\"module-4 disabled\" style=\"color: gray;background-color: #eee;cursor: not-allowed;\">
          <a href=\"#\">
            <div class=\"module\">
              <i class=\"iconfont\">&#xe600;</i>
              <h2>联系我们</h2>
              <span>contect</span>
            </div>
          </a>
        </div>
        <div class=\"module-5\">
          <a href=\"{{ path('reseller_dashboard_index') }}\" target=\"_blank\">
            <div class=\"module\">
              <i class=\"iconfont\">&#xe625;</i>
              <h2>狐豆代理</h2>
              <span>Agent</span>
            </div>
          </a>
        </div>
        <div class=\"module-6\">
          <a href=\"#\" target=\"_blank\">
            <div class=\"module\">
              <i class=\"iconfont\">&#xe630;</i>
              <h2>狐豆供应商</h2>
              <span>Sup</span>
            </div>
          </a>
        </div>
        <div class=\"module-7\">
          <a href=\"{{ path('open_control_panel_index') }}\" target=\"_blank\">
            <div class=\"module\">
              <i class=\"iconfont\">&#xe698;</i>
              <h2>狐豆开放平台</h2>
              <span>open</span>
            </div>
          </a>
        </div>
        <div class=\"module-8\">
          <a href=\"{{ path('open_control_panel_index') }}\" target=\"_blank\">
            <div class=\"module\">
              <i class=\"iconfont\">&#xe602;</i>
              <h2>狐豆api市场</h2>
              <span>apistore</span>
            </div>
          </a>
        </div>
      </div>
      <!-- /导航 -->


    </div>
  </div>
  <!-- /内容 -->
  <!-- 版权 -->
  <div class=\"sisi-foot\">
    <p>
      <!--            <a href=\"#\">设为首页</a>-->
      <span>&copy; 2016-{{ 'now'|date('Y') }} foxdou.com 广西你行我动科技有限责任公司</span>
    </p>
    <p>{{ params('system_beian_info') }}</p>
  </div>
  <!-- /版权 -->
</div>
</body>
</html>

{#<div style='font-size: 40pt;text-align: center;'>#}
  {#<h1></h1>#}

  {#<a href=\"{{ path('login') }}\">登录</a><br/>#}
  {#<a href=\"{{ path('admin_dashboard_index') }}\">后台管理</a><br/>#}
  {#<a href=\"{{ path('reseller_dashboard_index') }}\">代理商平台</a><br/>#}
  {#<a href=\"{{ path('open_control_panel_index') }}\">开放平台</a><br/>#}
  {#And More.....<br/>#}


", "Common/frontpage.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Common\\frontpage.twig");
    }
}
