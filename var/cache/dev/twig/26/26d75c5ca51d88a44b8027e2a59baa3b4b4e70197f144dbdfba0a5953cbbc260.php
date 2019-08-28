<?php

/* Passport/Login/index.twig */
class __TwigTemplate_2f1a0ccf3d7badab8de769992cdf88a679f45e4a676bdc2437a6ebff1d947ec3 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/Login/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/Login/index.twig"));

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
    <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/css/reset.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/css/common.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/css/index.css\"/>

    <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/default/css/common.css\"/>
    <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/layui/layui.all.js\" ></script>

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
        // line 55
        if ($this->extensions['App\Common\Twig\SecurityExtension']->isLoggedIn()) {
            // line 56
            echo "              <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_user_profile");
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 56, $this->source); })()), "user", array()), "nick_name", array()), "html", null, true);
            echo "</a>
            ";
            // line 57
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 58
                echo "                <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_index");
                echo "\" target=\"_blank\">管理后台</a>
            ";
            }
            // line 60
            echo "          ";
        } else {
            // line 61
            echo "              <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">登录</a>
              <a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">注册</a>
          ";
        }
        // line 64
        echo "            |
            <a href=\"#\">更多产品</a>
        </div>
    </div>
    <!-- /顶部 -->
    <div class=\"sisi-logo\"></div>
    <!-- 内容 -->
    <div class=\"sisi-main\">
        <!-- 菜单 -->
        <div class=\"sisi-menu\">
        </div>
        <!-- /菜单 -->
        <div class=\"\" style=\"\">
            <!-- 导航 -->
            <div class=\"clearfloat\" style=\"width: 400px;margin: auto;\">
                <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/css/login_diaglog.css\"/>
                <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/js/common.js\"></script>
                <div class=\"\" style=\"margin: auto;text-align:center;\">
                    <i class=\"icon iconfont icon-guanbi\"></i>
                    <form class=\"layui-form dialog-login\" id=\"login\" action=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
                        <p class=\"login-title\">登录狐豆</p>
                        <div class=\"\">
                            <div class=\"login-input-group\">
                                <div class=\"layui-form-item\">
                                  ";
        // line 88
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 88, $this->source); })())) {
            // line 89
            echo "                                    <ul class=\"agebt-form\">
                                        <li class=\"agebt-form-item\" style=\"color: red;\" >
                                          ";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 91, $this->source); })()), "message", array())), "html", null, true);
            echo "
                                        </li>
                                    </ul>
                                  ";
        }
        // line 95
        echo "                                </div>
                                <div class=\"layui-form-item\">
                                    <div class=\"h-input-block\" style=\"\">
                                        <input type=\"text\" name=\"username\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, (((isset($context["last_username"]) || array_key_exists("last_username", $context))) ? (_twig_default_filter((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 98, $this->source); })()), "")) : ("")), "html", null, true);
        echo "\" required placeholder=\"请输入帐号\" class=\"layui-input h-input-ing f-fnsna\" id=\"login-username\"/>
                                        <i class=\"icon iconfont icon-zhanghao\"></i>
                                    </div>
                                </div>
                                <div class=\"layui-form-item\">
                                    <div class=\"h-input-block\">
                                        <input type=\"password\" name=\"password\" required placeholder=\"请输入密码\" class=\"layui-input h-input-ing f-fnsna\" id=\"login-password\"/>
                                        <i class=\"icon iconfont icon-mima\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"layui-form-item\" style=\"margin-bottom: 17px;\">
                            <div class=\"layui-inout-inline\">
                                <div id=\"drag\"></div>
                            </div>
                        </div>
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                        <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 116, $this->source); })()), "request", array()), "get", array(0 => "redir_url", 1 => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontpage")), "method"), "html", null, true);
        echo "\"/>
                        <button class=\"login-btn f-fnsna login-dialog-btn\" lay-submit=\"\" lay-filter=\"\">立即登录</button>
                    </form>
                    <p class=\"login-arrow\">
                        <a href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_password_reset_index");
        echo "\" target=\"_blank\">忘记密码？</a>
                        <span>|</span>
                        <a href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\" target=\"_blank\">注册帐号</a>
                        <span>|</span>
                        <a href=\"javascript:void(0);\">意见反馈</a>
                    </p>
                    <div class=\"login-way\" style=\"display: none;\">
                        <a href=\"#\"><i class=\"icon iconfont icon-qq1\"></i></a>
                        <a href=\"#\"><i class=\"icon iconfont icon-weixin1\"></i></a>
                        <a href=\"#\"><i class=\"icon iconfont icon-xinlang-copy\"></i></a>
                        <a href=\"#\"><i class=\"icon iconfont icon-weixin-\"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /内容 -->
    <!-- 版权 -->
    <div class=\"sisi-foot\">
        <p>
            <!--            <a href=\"#\">设为首页</a>-->
            <span>&copy; 2016-";
        // line 142
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " foxdou.com 广西你行我动科技有限责任公司</span>
        </p>
        <p>";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['App\Common\Twig\AppExtension']->getParams("system_beian_info"), "html", null, true);
        echo "</p>
    </div>
    <!-- /版权 -->
</div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Passport/Login/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 144,  221 => 142,  198 => 122,  193 => 120,  186 => 116,  182 => 115,  162 => 98,  157 => 95,  150 => 91,  146 => 89,  144 => 88,  136 => 83,  115 => 64,  110 => 62,  105 => 61,  102 => 60,  96 => 58,  94 => 57,  87 => 56,  85 => 55,  29 => 1,);
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
    <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/css/reset.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/css/common.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/default/css/index.css\"/>

    <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/default/css/common.css\"/>
    <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/layui/layui.all.js\" ></script>

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
              <a href=\"{{ path('passport_user_profile') }}\" target=\"_blank\">{{ app.user.nick_name }}</a>
            {% if is_granted('ROLE_ADMIN') %}
                <a href=\"{{ path('admin_users_index') }}\" target=\"_blank\">管理后台</a>
            {% endif %}
          {% else %}
              <a href=\"{{ path('login') }}\">登录</a>
              <a href=\"{{ path('register') }}\">注册</a>
          {% endif %}
            |
            <a href=\"#\">更多产品</a>
        </div>
    </div>
    <!-- /顶部 -->
    <div class=\"sisi-logo\"></div>
    <!-- 内容 -->
    <div class=\"sisi-main\">
        <!-- 菜单 -->
        <div class=\"sisi-menu\">
        </div>
        <!-- /菜单 -->
        <div class=\"\" style=\"\">
            <!-- 导航 -->
            <div class=\"clearfloat\" style=\"width: 400px;margin: auto;\">
                <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/css/login_diaglog.css\"/>
                <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/js/common.js\"></script>
                <div class=\"\" style=\"margin: auto;text-align:center;\">
                    <i class=\"icon iconfont icon-guanbi\"></i>
                    <form class=\"layui-form dialog-login\" id=\"login\" action=\"{{ path('login') }}\" method=\"post\">
                        <p class=\"login-title\">登录狐豆</p>
                        <div class=\"\">
                            <div class=\"login-input-group\">
                                <div class=\"layui-form-item\">
                                  {% if error %}
                                    <ul class=\"agebt-form\">
                                        <li class=\"agebt-form-item\" style=\"color: red;\" >
                                          {{ error.message|trans }}
                                        </li>
                                    </ul>
                                  {% endif %}
                                </div>
                                <div class=\"layui-form-item\">
                                    <div class=\"h-input-block\" style=\"\">
                                        <input type=\"text\" name=\"username\" value=\"{{ last_username|default('') }}\" required placeholder=\"请输入帐号\" class=\"layui-input h-input-ing f-fnsna\" id=\"login-username\"/>
                                        <i class=\"icon iconfont icon-zhanghao\"></i>
                                    </div>
                                </div>
                                <div class=\"layui-form-item\">
                                    <div class=\"h-input-block\">
                                        <input type=\"password\" name=\"password\" required placeholder=\"请输入密码\" class=\"layui-input h-input-ing f-fnsna\" id=\"login-password\"/>
                                        <i class=\"icon iconfont icon-mima\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"layui-form-item\" style=\"margin-bottom: 17px;\">
                            <div class=\"layui-inout-inline\">
                                <div id=\"drag\"></div>
                            </div>
                        </div>
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>
                        <input type=\"hidden\" name=\"_target_path\" value=\"{{ app.request.get('redir_url', path('frontpage')) }}\"/>
                        <button class=\"login-btn f-fnsna login-dialog-btn\" lay-submit=\"\" lay-filter=\"\">立即登录</button>
                    </form>
                    <p class=\"login-arrow\">
                        <a href=\"{{ path('user_password_reset_index') }}\" target=\"_blank\">忘记密码？</a>
                        <span>|</span>
                        <a href=\"{{ path('register') }}\" target=\"_blank\">注册帐号</a>
                        <span>|</span>
                        <a href=\"javascript:void(0);\">意见反馈</a>
                    </p>
                    <div class=\"login-way\" style=\"display: none;\">
                        <a href=\"#\"><i class=\"icon iconfont icon-qq1\"></i></a>
                        <a href=\"#\"><i class=\"icon iconfont icon-weixin1\"></i></a>
                        <a href=\"#\"><i class=\"icon iconfont icon-xinlang-copy\"></i></a>
                        <a href=\"#\"><i class=\"icon iconfont icon-weixin-\"></i></a>
                    </div>
                </div>

            </div>
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
", "Passport/Login/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\Login\\index.twig");
    }
}
