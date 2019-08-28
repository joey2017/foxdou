<?php

/* Reseller/Home/index.twig */
class __TwigTemplate_b30700ddac85b0b5760b683ad417a55a9ed5a996a91a5f3907b97f9a0a492d1b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Reseller/Home/layout_home.twig", "Reseller/Home/index.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'main_content' => array($this, 'block_main_content'),
            'js_end' => array($this, 'block_js_end'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Reseller/Home/layout_home.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Home/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Home/index.twig"));

        // line 2
        $context["title"] = "首页 - 狐豆代理商平台";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 5
        echo "    <style>
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 10
        echo "    <div class=\"agent-banner\">
        ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->source); })()), "user", array())) {
            // line 12
            echo "            ";
            $context["user"] = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "user", array());
            // line 13
            echo "            <div class=\"agent-login agent-login-ed\">
                <h1>您已登录帐号</h1>
                <ul class=\"agent-form\">
                    <li class=\"agent-form-item\">
                        <div class=\"agent-headimg\">
                            <img width=\"100\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar_url", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar_url", array()), $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/common/img/default-avatar.jpg"))) : ($this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/common/img/default-avatar.jpg"))), "html", null, true);
            echo "\" title=\"头像\"/>
                        </div>
                    </li>
                    <li class=\"agent-form-item\">
                        ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 22, $this->source); })()), "nick_name", array()), "html", null, true);
            echo "
                    </li>
                    ";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 24, $this->source); })()), "real_name_status", array()) != "VERIFIED")) {
                // line 25
                echo "                        <li>
                            <a class=\"layui-btn layui-btn-normal\" href=\"";
                // line 26
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("passport_identity_management_index");
                echo "\">完善身份信息</a>
                        </li>
                        <li style=\"padding: 5px;\">
                            <p>您还没通过实名认证，请先提交实名认证信息</p>
                        </li>
                    ";
            } else {
                // line 32
                echo "                        ";
                $context["is_reseller"] = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RESELLER");
                // line 33
                echo "                        ";
                if ((isset($context["is_reseller"]) || array_key_exists("is_reseller", $context) ? $context["is_reseller"] : (function () { throw new Twig_Error_Runtime('Variable "is_reseller" does not exist.', 33, $this->source); })())) {
                    // line 34
                    echo "                            <li>
                                <a class=\"agent-btn\" href=\"";
                    // line 35
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_dashboard_index");
                    echo "\">进入控制台</a>
                            </li>
                        ";
                } else {
                    // line 38
                    echo "                            <li style=\"padding: 5px;\">
                                <p>您还没开通代理商平台账号，开通代理商账号后才能访问代理商控制台</p>
                            </li>
                        ";
                }
                // line 42
                echo "                    ";
            }
            // line 43
            echo "                </ul>
                <div class=\"agent-special\" style=\"height: 20px;\">
                    <a href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("passport_logout");
            echo "\">切换帐号</a>
                </div>
                <div class=\"agent-find-pwd\">
                    <a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("passport_logout", array("target_url" => "/reseller"));
            echo "\">退出帐号</a>
                </div>
            </div>

        ";
        } else {
            // line 53
            echo "
            <div class=\"agent-login\">
                <h1>用户登录</h1>
                <form id=\"login-form\" action=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("passport_login");
            echo "\" method=\"post\">
                    <ul class=\"agent-form\">
                        ";
            // line 58
            if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 58, $this->source); })())) {
                // line 59
                echo "                            <li class=\"agent-form-item\" style=\"color: red;\">
                                ";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 60, $this->source); })()), "message", array())), "html", null, true);
                echo "
                            </li>
                        ";
            }
            // line 63
            echo "                        <li class=\"agent-form-item\">
                            <span style=\"background-image: url(";
            // line 64
            echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/yonghu.png");
            echo ");\"></span>
                            <input type=\"text\" required name=\"username\" id=\"login-username\" value=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\" class=\"agent-input\" placeholder=\"用户\"/>
                        </li>
                        <li class=\"agent-form-item\">
                            <span style=\"background-image: url(";
            // line 68
            echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/mima.png");
            echo ");\"></span>
                            <input type=\"password\" required name=\"password\" id=\"login-password\" value=\"\" class=\"agent-input\" placeholder=\"密码\"/>
                        </li>
                        <li class=\"agent-form-item agent-special\">
                            <a href=\"https://open.foxdou.com/safe/user-inspect?operation=5\" target=\"_blank\">忘记密码？</a>
                            <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("passport_register", array("return_url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("reseller_home"))), "html", null, true);
            echo "\" target=\"_blank\">注册</a>
                        </li>

                        <li class=\"agent-form-item\">
                            <input type=\"hidden\" name=\"_token\" id=\"_token\" value=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("authenticate"), "html", null, true);
            echo "\"/>
                            <input type=\"hidden\" name=\"_target_path\" value=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_home");
            echo "\"/>
                            <input type=\"hidden\" name=\"_failure_path\" value=\"";
            // line 79
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_home");
            echo "\"/>
                            <button class=\"login-btn f-fnsna agent-btn\" id=\"login-btn\">立即登录</button>
                        </li>
                    </ul>
                </form>
                <div class=\"agent-login-other\">
                    <h5>第三方登录</h5>
                    <ul class=\"agent-way-ul\">
                        <li>
                            <a href=\"#\" style=\"background-image: url(";
            // line 88
            echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/qq-nor.png");
            echo ");\"></a>
                        </li>
                        <li>
                            <a href=\"#\" style=\"background-image: url(";
            // line 91
            echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/weixin-nor.png");
            echo ");\"></a>
                        </li>
                        <li>
                            <a href=\"#\" style=\"background-image: url(";
            // line 94
            echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/xinlang-nor.png");
            echo ");\"></a>
                        </li>
                    </ul>
                </div>
            </div>
        ";
        }
        // line 100
        echo "
        <div id=\"slide\" class=\"fullSlide\">
            <div class=\"bd\">
                <ul>
                    <li _src=\"url(";
        // line 104
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/banner1.jpg");
        echo ")\" style=\"background:#242627 center 0 no-repeat;\">
                        <a href=\"#\"></a></li>
                    <li _src=\"url(";
        // line 106
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/banner2.jpg");
        echo ")\" style=\"background:#2e5e88 center 0 no-repeat;\">
                        <a href=\"#\"></a></li>
                    <li _src=\"url(";
        // line 108
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/banner3.jpg");
        echo ")\" style=\"background:#146bd5 center 0 no-repeat;\">
                        <a href=\"#\"></a></li>
                </ul>
            </div>
            <div class=\"hd\">
                <ul></ul>
            </div>
            <span class=\"prev\"></span>
            <span class=\"next\"></span>
        </div>

    </div>

    <div class=\"agent-main\">
        <div class=\"agent-cols\">
            <div class=\"agent-title\">
                <h1>最新公告</h1>
                <em></em>
                <span>Latest announcement</span>
            </div>
            <div class=\"agent-list d-clear\">
                <script>
                    function view_article(url) {
                        var width  = 1000;
                        var height = window.screen.availHeight;
                        window.open(url, '', 'scrollbars=0,width=' + width + ',height=' + height + ',top=' + (((window.screen.availHeight) / 2) - (height / 2)) + ',left=' + (((window.screen.availWidth) / 2) - (width / 2)));
                    }
                </script>

                ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 137, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 138
            echo "                    <div class=\"agent-item\">
                        <a href=\"javascript:view_article('";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("common_articles_view", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "')\">
                            <div class=\"img-view\">
                                <img src=\"";
            // line 141
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "images", array(), "any", false, true), "value", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "images", array(), "any", false, true), "value", array()), $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/common/img/default-pic.jpg"))) : ($this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/common/img/default-pic.jpg"))), "html", null, true);
            echo "\"/>
                            </div>
                            <h3><b>";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
            echo "</b></h3>
                            <p>";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "abstract", array()), "html", null, true);
            echo "</p>
                            <span>";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "publish_time", array()), "html", null, true);
            echo "</span>
                        </a>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "            </div>
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
                        <img src=\"";
        // line 163
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/zy-icon1.png");
        echo "\"/>
                        <h3>互联网</h3>
                        <p>积分兑换/批量采购</p>
                    </div>
                    <div class=\"agent-camp-item\">
                        <img src=\"";
        // line 168
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/zy-icon2.png");
        echo "\"/>
                        <h3>网上商城</h3>
                        <p>点卡平台</p>
                    </div>
                    <div class=\"agent-camp-item\">
                        <img src=\"";
        // line 173
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/zy-icon3.png");
        echo "\"/>
                        <h3>实体终端</h3>
                        <p>post/充值软件合作</p>
                    </div>
                    <div class=\"agent-camp-item\">
                        <img src=\"";
        // line 178
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/zy-icon4.png");
        echo "\"/>
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
            <div class=\"agent-adv\" style=\"background-image: url(";
        // line 191
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/sdys-bg.jpg");
        echo ");\">
                <div class=\"agent-adv-tab agent-adv-ln1 link-this\" key=\"0\">
                    <img src=\"";
        // line 193
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/ys-icon1.png");
        echo "\"/>
                </div>
                <div class=\"agent-adv-tab agent-adv-ln2\" key=\"1\">
                    <img src=\"";
        // line 196
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/ys-icon2.png");
        echo "\"/>
                </div>
                <div class=\"agent-adv-tab agent-adv-ln3\" key=\"2\">
                    <img src=\"";
        // line 199
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/ys-icon3.png");
        echo "\"/>
                </div>
                <div class=\"agent-adv-tab agent-adv-ln4\" key=\"3\">
                    <img src=\"";
        // line 202
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/ys-icon4.png");
        echo "\"/>
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
                    <a href=\"\" style=\"background-image: url(";
        // line 232
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/taobao.jpg");
        echo ");\"></a>
                    <a href=\"\" style=\"background-image: url(";
        // line 233
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/yidong.jpg");
        echo ");\"></a>
                    <a href=\"\" style=\"background-image: url(";
        // line 234
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/liantong.jpg");
        echo ");\"></a>
                    <a href=\"\" style=\"background-image: url(";
        // line 235
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/dianxin.jpg");
        echo ");\"></a>
                    <a href=\"\" style=\"background-image: url(";
        // line 236
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/wangyi.jpg");
        echo ");\"></a>
                    <a href=\"\" style=\"background-image: url(";
        // line 237
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/shengda.jpg");
        echo ");\"></a>
                    <a href=\"\" style=\"background-image: url(";
        // line 238
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/zhifubao.jpg");
        echo ");\"></a>
                </div>
            </div>
        </div>
    </div>

    <div class=\"agent-service\">
        <div class=\"agent-service-icon\" title=\"在线客服\" style=\"background-image: url(";
        // line 245
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/kefupng");
        echo ");\"></div>
        <div class=\"agent-service-body\">
            <img src=\"";
        // line 247
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/close.png");
        echo "\" class=\"agent-service-close\"/>
            <div class=\"agent-sercice-info\">
                <h3>在线客服</h3>
                <p>工作日：9:00-18:00</p>
                <p>
                    <b>QQ号码</b>
                    <span>1063033278</span>
                </p>
                <p>
                    <b>在线客服</b>
                    <a href=\"\"><img src=\"";
        // line 257
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/qq-jiaotan.png");
        echo "\"/></a>
                    <a href=\"\"><img src=\"";
        // line 258
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/zaixianzixun.png");
        echo "\"/></a>
                </p>
            </div>
        </div>
    </div>

    <div class=\"agent-backToTop\" title=\"返回顶部\" style=\"background-image: url(";
        // line 264
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/toppng");
        echo ");\"></div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 268
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 269
        echo "    <script type=\"text/javascript\">
        //\tlogin的定位
        //\t载入时
        var domo_w  = 1100;
        var total_w = \$('.agent-banner').width();
        var cal_w   = total_w - domo_w;
        var right_w = cal_w / 2;

        // console.log(right_w);
        if (total_w > 1100) {
            \$('.agent-login').css('right', right_w + 'px');
        } else if (total_w <= 1100) {
            \$('.agent-login').css('right', '3%');
        }

        //\t屏幕大小发生变化时
        \$(window).on('resize', function () {
            var domo_w  = 1100;
            var total_w = \$('.agent-banner').width();
            var cal_w   = total_w - domo_w;
            var right_w = cal_w / 2;

            console.log(right_w);
            if (total_w > 1100) {
                \$('.agent-login').css('right', right_w + 'px');
            } else if (total_w <= 1100) {
                \$('.agent-login').css('right', '3%');
            }
        });


        /*
         * 首页轮播图
         */
        \$(\".fullSlide\").hover(function () {
                \$(this).find(\".prev,.next\").stop(true, true).fadeTo(\"show\", 0.5);
            },
            function () {
                \$(this).find(\".prev,.next\").fadeOut();
            });
        \$(\".fullSlide\").slide({
            titCell:  \".hd ul\",
            mainCell: \".bd ul\",
            effect:   \"fold\",
            autoPlay: true,
            autoPage: true,
            trigger:  \"click\",
            startFun: function (i) {
                var curLi = jQuery(\".fullSlide .bd li\").eq(i);
                if (!!curLi.attr(\"_src\")) {
                    curLi.css(\"background-image\", curLi.attr(\"_src\")).removeAttr(\"_src\");
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
        \$('.agent-way-ul a').hover(function () {
            var str = \$(this).css('background-image');
            var reg = /nor/g;
            var str = str.replace(reg, 'sel');

            \$(this).css('background-image', str);
        }, function () {
            var str = \$(this).css('background-image');
            var reg = /sel/g;
            var str = str.replace(reg, 'nor');

            \$(this).css('background-image', str);
        });


        /*
         * 四大优势
         */
        \$('.agent-adv-tab').hover(function () {
            var key = \$(this).attr('key');
            \$(this).addClass('link-this').siblings().removeClass('link-this');
            \$('.agent-adv-item[key=' + key + ']').css('display', 'inline-block').siblings().css('display', 'none');
        });


        /*
         * 在线客服
         */
        \$('.agent-service-icon').click(function () {
            \$('.agent-service-body').show();
        });
        \$('.agent-service-close').click(function () {
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
        \$(window).trigger('scroll');
        /*触发滚动事件，避免刷新的时候显示回到顶部按钮*/

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Reseller/Home/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  534 => 269,  525 => 268,  512 => 264,  503 => 258,  499 => 257,  486 => 247,  481 => 245,  471 => 238,  467 => 237,  463 => 236,  459 => 235,  455 => 234,  451 => 233,  447 => 232,  414 => 202,  408 => 199,  402 => 196,  396 => 193,  391 => 191,  375 => 178,  367 => 173,  359 => 168,  351 => 163,  335 => 149,  325 => 145,  321 => 144,  317 => 143,  312 => 141,  307 => 139,  304 => 138,  300 => 137,  268 => 108,  263 => 106,  258 => 104,  252 => 100,  243 => 94,  237 => 91,  231 => 88,  219 => 79,  215 => 78,  211 => 77,  204 => 73,  196 => 68,  190 => 65,  186 => 64,  183 => 63,  177 => 60,  174 => 59,  172 => 58,  167 => 56,  162 => 53,  154 => 48,  148 => 45,  144 => 43,  141 => 42,  135 => 38,  129 => 35,  126 => 34,  123 => 33,  120 => 32,  111 => 26,  108 => 25,  106 => 24,  101 => 22,  94 => 18,  87 => 13,  84 => 12,  82 => 11,  79 => 10,  70 => 9,  58 => 5,  49 => 4,  39 => 1,  37 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Reseller/Home/layout_home.twig' %}
{% set title = '首页 - 狐豆代理商平台' %}

{% block css %}
    <style>
    </style>
{% endblock %}

{% block main_content %}
    <div class=\"agent-banner\">
        {% if app.user %}
            {% set user = app.user %}
            <div class=\"agent-login agent-login-ed\">
                <h1>您已登录帐号</h1>
                <ul class=\"agent-form\">
                    <li class=\"agent-form-item\">
                        <div class=\"agent-headimg\">
                            <img width=\"100\" src=\"{{ user.avatar_url|default(asset('/assets/common/img/default-avatar.jpg')) }}\" title=\"头像\"/>
                        </div>
                    </li>
                    <li class=\"agent-form-item\">
                        {{ user.nick_name }}
                    </li>
                    {% if user.real_name_status != 'VERIFIED' %}
                        <li>
                            <a class=\"layui-btn layui-btn-normal\" href=\"{{ url('passport_identity_management_index') }}\">完善身份信息</a>
                        </li>
                        <li style=\"padding: 5px;\">
                            <p>您还没通过实名认证，请先提交实名认证信息</p>
                        </li>
                    {% else %}
                        {% set is_reseller = is_granted('ROLE_RESELLER') %}
                        {% if is_reseller %}
                            <li>
                                <a class=\"agent-btn\" href=\"{{ path('reseller_dashboard_index') }}\">进入控制台</a>
                            </li>
                        {% else %}
                            <li style=\"padding: 5px;\">
                                <p>您还没开通代理商平台账号，开通代理商账号后才能访问代理商控制台</p>
                            </li>
                        {% endif %}
                    {% endif %}
                </ul>
                <div class=\"agent-special\" style=\"height: 20px;\">
                    <a href=\"{{ url('passport_logout') }}\">切换帐号</a>
                </div>
                <div class=\"agent-find-pwd\">
                    <a href=\"{{ url(\"passport_logout\", {\"target_url\": \"/reseller\"}) }}\">退出帐号</a>
                </div>
            </div>

        {% else %}

            <div class=\"agent-login\">
                <h1>用户登录</h1>
                <form id=\"login-form\" action=\"{{ url('passport_login') }}\" method=\"post\">
                    <ul class=\"agent-form\">
                        {% if error %}
                            <li class=\"agent-form-item\" style=\"color: red;\">
                                {{ error.message|trans }}
                            </li>
                        {% endif %}
                        <li class=\"agent-form-item\">
                            <span style=\"background-image: url({{ asset('/assets/reseller/home/images/yonghu.png') }});\"></span>
                            <input type=\"text\" required name=\"username\" id=\"login-username\" value=\"{{ last_username }}\" class=\"agent-input\" placeholder=\"用户\"/>
                        </li>
                        <li class=\"agent-form-item\">
                            <span style=\"background-image: url({{ asset('/assets/reseller/home/images/mima.png') }});\"></span>
                            <input type=\"password\" required name=\"password\" id=\"login-password\" value=\"\" class=\"agent-input\" placeholder=\"密码\"/>
                        </li>
                        <li class=\"agent-form-item agent-special\">
                            <a href=\"https://open.foxdou.com/safe/user-inspect?operation=5\" target=\"_blank\">忘记密码？</a>
                            <a href=\"{{ url('passport_register', {'return_url': url('reseller_home')}) }}\" target=\"_blank\">注册</a>
                        </li>

                        <li class=\"agent-form-item\">
                            <input type=\"hidden\" name=\"_token\" id=\"_token\" value=\"{{ csrf_token(\"authenticate\") }}\"/>
                            <input type=\"hidden\" name=\"_target_path\" value=\"{{ path(\"reseller_home\") }}\"/>
                            <input type=\"hidden\" name=\"_failure_path\" value=\"{{ path(\"reseller_home\") }}\"/>
                            <button class=\"login-btn f-fnsna agent-btn\" id=\"login-btn\">立即登录</button>
                        </li>
                    </ul>
                </form>
                <div class=\"agent-login-other\">
                    <h5>第三方登录</h5>
                    <ul class=\"agent-way-ul\">
                        <li>
                            <a href=\"#\" style=\"background-image: url({{ asset('/assets/reseller/home/images/qq-nor.png') }});\"></a>
                        </li>
                        <li>
                            <a href=\"#\" style=\"background-image: url({{ asset('/assets/reseller/home/images/weixin-nor.png') }});\"></a>
                        </li>
                        <li>
                            <a href=\"#\" style=\"background-image: url({{ asset('/assets/reseller/home/images/xinlang-nor.png') }});\"></a>
                        </li>
                    </ul>
                </div>
            </div>
        {% endif %}

        <div id=\"slide\" class=\"fullSlide\">
            <div class=\"bd\">
                <ul>
                    <li _src=\"url({{ asset('/assets/reseller/home/images/banner1.jpg') }})\" style=\"background:#242627 center 0 no-repeat;\">
                        <a href=\"#\"></a></li>
                    <li _src=\"url({{ asset('/assets/reseller/home/images/banner2.jpg') }})\" style=\"background:#2e5e88 center 0 no-repeat;\">
                        <a href=\"#\"></a></li>
                    <li _src=\"url({{ asset('/assets/reseller/home/images/banner3.jpg') }})\" style=\"background:#146bd5 center 0 no-repeat;\">
                        <a href=\"#\"></a></li>
                </ul>
            </div>
            <div class=\"hd\">
                <ul></ul>
            </div>
            <span class=\"prev\"></span>
            <span class=\"next\"></span>
        </div>

    </div>

    <div class=\"agent-main\">
        <div class=\"agent-cols\">
            <div class=\"agent-title\">
                <h1>最新公告</h1>
                <em></em>
                <span>Latest announcement</span>
            </div>
            <div class=\"agent-list d-clear\">
                <script>
                    function view_article(url) {
                        var width  = 1000;
                        var height = window.screen.availHeight;
                        window.open(url, '', 'scrollbars=0,width=' + width + ',height=' + height + ',top=' + (((window.screen.availHeight) / 2) - (height / 2)) + ',left=' + (((window.screen.availWidth) / 2) - (width / 2)));
                    }
                </script>

                {% for item in data %}
                    <div class=\"agent-item\">
                        <a href=\"javascript:view_article('{{ url(\"common_articles_view\", {'id': item.id}) }}')\">
                            <div class=\"img-view\">
                                <img src=\"{{ item.images.value|default(asset('/assets/common/img/default-pic.jpg')) }}\"/>
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
                        <img src=\"{{ asset('/assets/reseller/home/images/zy-icon1.png') }}\"/>
                        <h3>互联网</h3>
                        <p>积分兑换/批量采购</p>
                    </div>
                    <div class=\"agent-camp-item\">
                        <img src=\"{{ asset('/assets/reseller/home/images/zy-icon2.png') }}\"/>
                        <h3>网上商城</h3>
                        <p>点卡平台</p>
                    </div>
                    <div class=\"agent-camp-item\">
                        <img src=\"{{ asset('/assets/reseller/home/images/zy-icon3.png') }}\"/>
                        <h3>实体终端</h3>
                        <p>post/充值软件合作</p>
                    </div>
                    <div class=\"agent-camp-item\">
                        <img src=\"{{ asset('/assets/reseller/home/images/zy-icon4.png') }}\"/>
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
            <div class=\"agent-adv\" style=\"background-image: url({{ asset('/assets/reseller/home/images/sdys-bg.jpg') }});\">
                <div class=\"agent-adv-tab agent-adv-ln1 link-this\" key=\"0\">
                    <img src=\"{{ asset('/assets/reseller/home/images/ys-icon1.png') }}\"/>
                </div>
                <div class=\"agent-adv-tab agent-adv-ln2\" key=\"1\">
                    <img src=\"{{ asset('/assets/reseller/home/images/ys-icon2.png') }}\"/>
                </div>
                <div class=\"agent-adv-tab agent-adv-ln3\" key=\"2\">
                    <img src=\"{{ asset('/assets/reseller/home/images/ys-icon3.png') }}\"/>
                </div>
                <div class=\"agent-adv-tab agent-adv-ln4\" key=\"3\">
                    <img src=\"{{ asset('/assets/reseller/home/images/ys-icon4.png') }}\"/>
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
                    <a href=\"\" style=\"background-image: url({{ asset('/assets/reseller/home/images/taobao.jpg') }});\"></a>
                    <a href=\"\" style=\"background-image: url({{ asset('/assets/reseller/home/images/yidong.jpg') }});\"></a>
                    <a href=\"\" style=\"background-image: url({{ asset('/assets/reseller/home/images/liantong.jpg') }});\"></a>
                    <a href=\"\" style=\"background-image: url({{ asset('/assets/reseller/home/images/dianxin.jpg') }});\"></a>
                    <a href=\"\" style=\"background-image: url({{ asset('/assets/reseller/home/images/wangyi.jpg') }});\"></a>
                    <a href=\"\" style=\"background-image: url({{ asset('/assets/reseller/home/images/shengda.jpg') }});\"></a>
                    <a href=\"\" style=\"background-image: url({{ asset('/assets/reseller/home/images/zhifubao.jpg') }});\"></a>
                </div>
            </div>
        </div>
    </div>

    <div class=\"agent-service\">
        <div class=\"agent-service-icon\" title=\"在线客服\" style=\"background-image: url({{ asset('/assets/reseller/home/images/kefupng') }});\"></div>
        <div class=\"agent-service-body\">
            <img src=\"{{ asset('/assets/reseller/home/images/close.png') }}\" class=\"agent-service-close\"/>
            <div class=\"agent-sercice-info\">
                <h3>在线客服</h3>
                <p>工作日：9:00-18:00</p>
                <p>
                    <b>QQ号码</b>
                    <span>1063033278</span>
                </p>
                <p>
                    <b>在线客服</b>
                    <a href=\"\"><img src=\"{{ asset('/assets/reseller/home/images/qq-jiaotan.png') }}\"/></a>
                    <a href=\"\"><img src=\"{{ asset('/assets/reseller/home/images/zaixianzixun.png') }}\"/></a>
                </p>
            </div>
        </div>
    </div>

    <div class=\"agent-backToTop\" title=\"返回顶部\" style=\"background-image: url({{ asset('/assets/reseller/home/images/toppng') }});\"></div>

{% endblock %}

{% block js_end %}
    <script type=\"text/javascript\">
        //\tlogin的定位
        //\t载入时
        var domo_w  = 1100;
        var total_w = \$('.agent-banner').width();
        var cal_w   = total_w - domo_w;
        var right_w = cal_w / 2;

        // console.log(right_w);
        if (total_w > 1100) {
            \$('.agent-login').css('right', right_w + 'px');
        } else if (total_w <= 1100) {
            \$('.agent-login').css('right', '3%');
        }

        //\t屏幕大小发生变化时
        \$(window).on('resize', function () {
            var domo_w  = 1100;
            var total_w = \$('.agent-banner').width();
            var cal_w   = total_w - domo_w;
            var right_w = cal_w / 2;

            console.log(right_w);
            if (total_w > 1100) {
                \$('.agent-login').css('right', right_w + 'px');
            } else if (total_w <= 1100) {
                \$('.agent-login').css('right', '3%');
            }
        });


        /*
         * 首页轮播图
         */
        \$(\".fullSlide\").hover(function () {
                \$(this).find(\".prev,.next\").stop(true, true).fadeTo(\"show\", 0.5);
            },
            function () {
                \$(this).find(\".prev,.next\").fadeOut();
            });
        \$(\".fullSlide\").slide({
            titCell:  \".hd ul\",
            mainCell: \".bd ul\",
            effect:   \"fold\",
            autoPlay: true,
            autoPage: true,
            trigger:  \"click\",
            startFun: function (i) {
                var curLi = jQuery(\".fullSlide .bd li\").eq(i);
                if (!!curLi.attr(\"_src\")) {
                    curLi.css(\"background-image\", curLi.attr(\"_src\")).removeAttr(\"_src\");
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
        \$('.agent-way-ul a').hover(function () {
            var str = \$(this).css('background-image');
            var reg = /nor/g;
            var str = str.replace(reg, 'sel');

            \$(this).css('background-image', str);
        }, function () {
            var str = \$(this).css('background-image');
            var reg = /sel/g;
            var str = str.replace(reg, 'nor');

            \$(this).css('background-image', str);
        });


        /*
         * 四大优势
         */
        \$('.agent-adv-tab').hover(function () {
            var key = \$(this).attr('key');
            \$(this).addClass('link-this').siblings().removeClass('link-this');
            \$('.agent-adv-item[key=' + key + ']').css('display', 'inline-block').siblings().css('display', 'none');
        });


        /*
         * 在线客服
         */
        \$('.agent-service-icon').click(function () {
            \$('.agent-service-body').show();
        });
        \$('.agent-service-close').click(function () {
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
        \$(window).trigger('scroll');
        /*触发滚动事件，避免刷新的时候显示回到顶部按钮*/

    </script>
{% endblock %}
", "Reseller/Home/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Home\\index.twig");
    }
}
