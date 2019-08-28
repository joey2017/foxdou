<?php

/* /Supplier/Dashboard/index.twig */
class __TwigTemplate_6cd0349ab50c40803d405b16aec387a05aba99fa0a7d0f4859b1e23cf007b7b4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Supplier/Common/layout.twig", "/Supplier/Dashboard/index.twig", 1);
        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Supplier/Common/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Supplier/Dashboard/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Supplier/Dashboard/index.twig"));

        // line 2
        $context["title"] = "狐豆便民服务-代理中心-控制面板";
        // line 3
        $context["user"] = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "user", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 6
        echo "    <div class=\"foxdou-body\">
        <div class=\"layui-clear\">
            <div class=\"foxdou-left\">
                <div class=\"foxdou-row\">
                    <div class=\"foxdou-panel-user\">
                        <div class=\"fpu-headimg\">
                            <img src=\"";
        // line 12
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/supplier/image/hdimg1.jpg");
        echo "\"/>
                        </div>
                        <div class=\"fpu-info\">
                            <div class=\"name\">你好，
                                <span>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 16, $this->source); })()), "user_name", array()), "html", null, true);
        echo "</span>
                                ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 17, $this->source); })()), "real_name_status", array()) == "VERIFIED")) {
            // line 18
            echo "                                <p class=\"yanzheng\">
                                    <i class=\"icon iconfont icon-shimingrenzhengchenggong\"></i>
                                    <span>已验证</span>
                                </p>
                                ";
        }
        // line 23
        echo "                            </div>
                            <div class=\"news-time\">
                                <p>消息（<span class=\"news\">2</span>）</p>
                                <p>上次登录时间：<span>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 26, $this->source); })()), "last_login_time", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</span></p>
                            </div>
                            <div class=\"balance\">
                                <p>账户余额（元）:<span>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 29, $this->source); })()), "balance", array()), "html", null, true);
        echo "</span><a href=\"\">充  值</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"layui-clear\">
                    <div class=\"foxdou-row\" style=\"float: left; width: 200px;\">
                        <div class=\"foxdou-myapi\">
                            <div class=\"foxdou-row-title\">
                                <span></span>
                                <h3><strong>我的应用</strong></h3>
                            </div>
                            <div class=\"myitem\">
                                <a href=\"#\">已上线<span class=\"green\"></span>个</a>
                                <a href=\"#\">调试中<span class=\"orange\"></span>个</a>
                                <a href=\"#\">待续费<span class=\"gray\"></span>个</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"foxdou-row\" style=\"float: right; width: calc(100% - 215px);\">
                        <div class=\"foxdou-quick\">
                            <div class=\"foxdou-row-title\">
                                <span></span>
                                <h3><strong>快捷入口</strong></h3>
                            </div>
                            <ul class=\"quickitem\">
                                <li>
                                    <a href=\"#\">
                                        <img src=\"";
        // line 57
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/supplier/image/sjhfcz.png");
        echo "\" />
                                        <span>手机话费充值</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <img src=\"";
        // line 63
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/supplier/image/quyxcz.png");
        echo "\" />
                                        <span>全国游戏充值</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <img src=\"";
        // line 69
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/supplier/image/sfzyz.png");
        echo "\" />
                                        <span>身份证二元素实名认证</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <img src=\"";
        // line 75
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/supplier/image/sjhfcz.png");
        echo "\" />
                                        <span>手机话费充值</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"foxdou-row\">
                    <div class=\"foxdou-ysqapi\">
                        <div class=\"foxdou-row-title\">
                            <span></span>
                            <h3><strong>已申请的应用</strong></h3>
                            <a href=\"\" class=\"more\">更多&gt;&gt;</a>
                        </div>
                        <ul class=\"ysqapi-lis\">

                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"foxdou-right\">
                <div class=\"foxdou-row\">
                    <div class=\"foxdou-slide\">
                        <div class=\"layui-carousel\" id=\"test1\">
                            <div carousel-item=\"\">
                                <div><img src=\"";
        // line 101
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/supplier/image/slider-1.jpg");
        echo "\"/></div>
                                <div><img src=\"";
        // line 102
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/supplier/image/slider-2.jpg");
        echo "\"/></div>
                                <div><img src=\"";
        // line 103
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/supplier/image/slider-3.jpg");
        echo "\"/></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"foxdou-row\">
                    <div class=\"foxdou-news\">
                        <div class=\"foxdou-row-title\">
                            <span></span>
                            <h3><strong>最新公告</strong></h3>
                            <a href=\"#\" class=\"more\">更多&gt;&gt;</a>
                        </div>
                        <ul class=\"news-lis\">
                            ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 116, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 117
            echo "                            <li>
                                <a href=\"#\">
                                    <p>";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", array()), "html", null, true);
            echo "</p>
                                    <span>";
            // line 120
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "add_time", array()), "m-d"), "html", null, true);
            echo "</span>
                                </a>
                            </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                        </ul>
                    </div>
                </div>
                <div class=\"foxdou-row\">
                    <div class=\"foxdou-kefu\">
                        <div class=\"foxdou-row-title\">
                            <span></span>
                            <h3><strong>联系客服</strong></h3>
                        </div>
                        <div class=\"info\">
                            <div class=\"rexian\">
                                <i class=\"icon iconfont icon-dianhua\"></i>
                                热线电话：<span>15678527068</span>
                            </div>
                            <a href=\"http://wpa.qq.com/msgrd?v=3&uin=406126623&site=qq&menu=yes\" class=\"zxkf\" target=\"_blank\">
                                <i class=\"icon iconfont icon-qie\"></i>
                                <span>在线客服</span>
                            </a>
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

    public function getTemplateName()
    {
        return "/Supplier/Dashboard/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 124,  220 => 120,  216 => 119,  212 => 117,  208 => 116,  192 => 103,  188 => 102,  184 => 101,  155 => 75,  146 => 69,  137 => 63,  128 => 57,  97 => 29,  91 => 26,  86 => 23,  79 => 18,  77 => 17,  73 => 16,  66 => 12,  58 => 6,  49 => 5,  39 => 1,  37 => 3,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Supplier/Common/layout.twig' %}
{% set title = '狐豆便民服务-代理中心-控制面板' %}
{% set user = app.user %}

{% block main_content %}
    <div class=\"foxdou-body\">
        <div class=\"layui-clear\">
            <div class=\"foxdou-left\">
                <div class=\"foxdou-row\">
                    <div class=\"foxdou-panel-user\">
                        <div class=\"fpu-headimg\">
                            <img src=\"{{ asset('/assets/supplier/image/hdimg1.jpg') }}\"/>
                        </div>
                        <div class=\"fpu-info\">
                            <div class=\"name\">你好，
                                <span>{{ user.user_name }}</span>
                                {% if user.real_name_status == 'VERIFIED' %}
                                <p class=\"yanzheng\">
                                    <i class=\"icon iconfont icon-shimingrenzhengchenggong\"></i>
                                    <span>已验证</span>
                                </p>
                                {% endif %}
                            </div>
                            <div class=\"news-time\">
                                <p>消息（<span class=\"news\">2</span>）</p>
                                <p>上次登录时间：<span>{{ user.last_login_time|date('Y-m-d H:i:s') }}</span></p>
                            </div>
                            <div class=\"balance\">
                                <p>账户余额（元）:<span>{{ user.balance }}</span><a href=\"\">充  值</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"layui-clear\">
                    <div class=\"foxdou-row\" style=\"float: left; width: 200px;\">
                        <div class=\"foxdou-myapi\">
                            <div class=\"foxdou-row-title\">
                                <span></span>
                                <h3><strong>我的应用</strong></h3>
                            </div>
                            <div class=\"myitem\">
                                <a href=\"#\">已上线<span class=\"green\"></span>个</a>
                                <a href=\"#\">调试中<span class=\"orange\"></span>个</a>
                                <a href=\"#\">待续费<span class=\"gray\"></span>个</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"foxdou-row\" style=\"float: right; width: calc(100% - 215px);\">
                        <div class=\"foxdou-quick\">
                            <div class=\"foxdou-row-title\">
                                <span></span>
                                <h3><strong>快捷入口</strong></h3>
                            </div>
                            <ul class=\"quickitem\">
                                <li>
                                    <a href=\"#\">
                                        <img src=\"{{ asset('/assets/supplier/image/sjhfcz.png') }}\" />
                                        <span>手机话费充值</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <img src=\"{{ asset('/assets/supplier/image/quyxcz.png') }}\" />
                                        <span>全国游戏充值</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <img src=\"{{ asset('/assets/supplier/image/sfzyz.png') }}\" />
                                        <span>身份证二元素实名认证</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <img src=\"{{ asset('/assets/supplier/image/sjhfcz.png') }}\" />
                                        <span>手机话费充值</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"foxdou-row\">
                    <div class=\"foxdou-ysqapi\">
                        <div class=\"foxdou-row-title\">
                            <span></span>
                            <h3><strong>已申请的应用</strong></h3>
                            <a href=\"\" class=\"more\">更多&gt;&gt;</a>
                        </div>
                        <ul class=\"ysqapi-lis\">

                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"foxdou-right\">
                <div class=\"foxdou-row\">
                    <div class=\"foxdou-slide\">
                        <div class=\"layui-carousel\" id=\"test1\">
                            <div carousel-item=\"\">
                                <div><img src=\"{{ asset('/assets/supplier/image/slider-1.jpg') }}\"/></div>
                                <div><img src=\"{{ asset('/assets/supplier/image/slider-2.jpg') }}\"/></div>
                                <div><img src=\"{{ asset('/assets/supplier/image/slider-3.jpg') }}\"/></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"foxdou-row\">
                    <div class=\"foxdou-news\">
                        <div class=\"foxdou-row-title\">
                            <span></span>
                            <h3><strong>最新公告</strong></h3>
                            <a href=\"#\" class=\"more\">更多&gt;&gt;</a>
                        </div>
                        <ul class=\"news-lis\">
                            {% for article in articles %}
                            <li>
                                <a href=\"#\">
                                    <p>{{ article.title }}</p>
                                    <span>{{ article.add_time|date('m-d') }}</span>
                                </a>
                            </li>
                            {% endfor %}
                        </ul>
                    </div>
                </div>
                <div class=\"foxdou-row\">
                    <div class=\"foxdou-kefu\">
                        <div class=\"foxdou-row-title\">
                            <span></span>
                            <h3><strong>联系客服</strong></h3>
                        </div>
                        <div class=\"info\">
                            <div class=\"rexian\">
                                <i class=\"icon iconfont icon-dianhua\"></i>
                                热线电话：<span>15678527068</span>
                            </div>
                            <a href=\"http://wpa.qq.com/msgrd?v=3&uin=406126623&site=qq&menu=yes\" class=\"zxkf\" target=\"_blank\">
                                <i class=\"icon iconfont icon-qie\"></i>
                                <span>在线客服</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "/Supplier/Dashboard/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Supplier\\Dashboard\\index.twig");
    }
}
