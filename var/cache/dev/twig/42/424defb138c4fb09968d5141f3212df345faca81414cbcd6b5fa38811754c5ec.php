<?php

/* Open/Common/loginDialog.twig */
class __TwigTemplate_964a195274b55cc2c0b67588c89fcde77722f8215362e4b047287a0a001240a4 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Open/Common/loginDialog.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Open/Common/loginDialog.twig"));

        // line 1
        echo "<!-- 弹出的登录框 -->
";
        // line 2
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 3
            echo "  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/css/login_diaglog.css\"/>
  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/js/common.js\"></script>
  <div class=\"blackMask\" style=\"display: none;\">
    <div class=\"login-alpha\">
      <div class=\"login\">
        <i class=\"icon iconfont icon-guanbi\" onclick=\"close_login()\"></i>
        <form class=\"layui-form dialog-login\" id=\"pintai-login\" action=\"";
            // line 9
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" method=\"post\">
          <input type=\"hidden\" name=\"_csrf\" value=\"<?=\$request->csrfToken?>\">
          <p class=\"login-title\">登录狐豆</p>
          <div class=\"login-group\">
            <div class=\"login-input-group\">
              <div class=\"layui-form-item\">
                <div class=\"h-input-block\" style=\"position: relative;\">
                  <input type=\"text\" name=\"username\" value=\"";
            // line 16
            echo twig_escape_filter($this->env, (((isset($context["last_username"]) || array_key_exists("last_username", $context))) ? (_twig_default_filter((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 16, $this->source); })()), "")) : ("")), "html", null, true);
            echo "\" required placeholder=\"请输入帐号\" class=\"h-input-ing f-fnsna\" id=\"login-username\"/>
                  <i class=\"icon iconfont icon-zhanghao\"></i>
                </div>
              </div>
              <div class=\"layui-form-item\">
                <div class=\"h-input-block\">
                  <input type=\"password\" name=\"password\" required placeholder=\"请输入密码\" class=\"h-input-ing f-fnsna\" id=\"login-password\"/>
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
            // line 33
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("authenticate"), "html", null, true);
            echo "\"/>
          <input type=\"hidden\" name=\"_target_path\" value=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("open_dashboard_index");
            echo "\"/>
          <button class=\"login-btn f-fnsna login-dialog-btn\" lay-submit=\"\" lay-filter=\"\">立即登录</button>
        </form>
        <p class=\"login-arrow\">
          <a href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_password_reset_index");
            echo "\" target=\"_blank\">忘记密码？</a>
          <span>|</span>
          <a href=\"";
            // line 40
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
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Open/Common/loginDialog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 40,  83 => 38,  76 => 34,  72 => 33,  52 => 16,  42 => 9,  34 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- 弹出的登录框 -->
{% if not is_granted('ROLE_USER') %}
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/css/login_diaglog.css\"/>
  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/js/common.js\"></script>
  <div class=\"blackMask\" style=\"display: none;\">
    <div class=\"login-alpha\">
      <div class=\"login\">
        <i class=\"icon iconfont icon-guanbi\" onclick=\"close_login()\"></i>
        <form class=\"layui-form dialog-login\" id=\"pintai-login\" action=\"{{ path('login') }}\" method=\"post\">
          <input type=\"hidden\" name=\"_csrf\" value=\"<?=\$request->csrfToken?>\">
          <p class=\"login-title\">登录狐豆</p>
          <div class=\"login-group\">
            <div class=\"login-input-group\">
              <div class=\"layui-form-item\">
                <div class=\"h-input-block\" style=\"position: relative;\">
                  <input type=\"text\" name=\"username\" value=\"{{ last_username|default('') }}\" required placeholder=\"请输入帐号\" class=\"h-input-ing f-fnsna\" id=\"login-username\"/>
                  <i class=\"icon iconfont icon-zhanghao\"></i>
                </div>
              </div>
              <div class=\"layui-form-item\">
                <div class=\"h-input-block\">
                  <input type=\"password\" name=\"password\" required placeholder=\"请输入密码\" class=\"h-input-ing f-fnsna\" id=\"login-password\"/>
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
          <input type=\"hidden\" name=\"_target_path\" value=\"{{ path('open_dashboard_index') }}\"/>
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
{% endif %}", "Open/Common/loginDialog.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Open\\Common\\loginDialog.twig");
    }
}
