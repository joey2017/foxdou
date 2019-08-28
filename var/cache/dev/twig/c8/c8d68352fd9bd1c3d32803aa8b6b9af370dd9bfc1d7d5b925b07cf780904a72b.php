<?php

/* Passport/_topNav.twig */
class __TwigTemplate_7f6682240e710f2d9867ab0bdda1fcb60aa6ff821f31293bb16a1bd4e5895e1a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/_topNav.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/_topNav.twig"));

        // line 1
        echo "<div class=\"page-top-item\">
  <a href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_home_index");
        echo "\" class=\"logo\"></a>
  <ul class=\"menu\">
    <li class=\"\">
      <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_home_index");
        echo "\">首页</a>
    </li>
    <li class=\"\">
      <a href=\"default/safe-tool\">密保工具</a>
      <div class=\"option-bar\">
        <div class=\"option\">
          <a href=\"default/safe-tool\">密保手机</a>
          <a href=\"default/safe-tool\">密保邮箱</a>
          <a href=\"default/safe-tool\">密保问题</a>
        </div>
        <div style=\"height: 80px;\"></div>
      </div>
    </li>
    <li class=\"\">
      <a href=\"default/account-protect\">帐号保护</a>
    </li>
    <li class=\"\">
      <a href=\"javascript:void(0);\">密码管理</a>
      <div class=\"option-bar\">
        <div class=\"option\">
          <a href=\"/user-inspect\">找回登录密码</a>
          <a href=\"/user-inspect\">找回支付密码</a>
          <a href=\"/user-inspect/safe-inspect\">修改登录密码</a>
          <a href=\"/user-inspect/safe-inspect\">修改支付密码</a>
        </div>
        <div style=\"height: 80px;\"></div>
      </div>

    <li class=\"\">
      <a href=\"default/common-problem\">常见问题</a>
    </li>
  </ul>
  <div class=\"link-inline\">
    ";
        // line 38
        if ( !$this->extensions['App\Common\Twig\SecurityExtension']->isLoggedIn()) {
            // line 39
            echo "      <span><a href=\"/safe\">登录</a></span>
    ";
        } else {
            // line 41
            echo "      <span>欢迎您，</span>
      <a href=\"javascript:void(0);\" class=\"link-skin\">
        <span>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 43, $this->source); })()), "user", array()), "displayName", array()), "html", null, true);
            echo "</span>
      </a>
      <div class=\"menber-info\">
        <span></span>
        <em></em>
        <dl>
          <dt>昵称：</dt><dd>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 49, $this->source); })()), "user", array()), "displayName", array()), "html", null, true);
            echo "</dd>
          <dt>帐号：</dt><dd>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 50, $this->source); })()), "user", array()), "user_name", array()), "html", null, true);
            echo "</dd>
        </dl>
        <a href=\"default/out\" class=\"tuichu\">退&nbsp;出</a>
      </div>
    ";
        }
        // line 55
        echo "  </div>
</div>
<script type=\"text/javascript\">

    /*
     * 导航
     */
    \$('.menu li').hover( //鼠标滑过下拉列表自身也要显示，防止无法点击下拉列表
        function(){
            \$(this).find('.option-bar').slideDown();
        },
        function(){
            \$(this).find('.option-bar').hide();
        }
    );


    /*
     * 退出
     */
    \$('.link-inline a,.menber-info').mouseover(function(){
        \$('.menber-info').show();
    });
    \$('.menber-info').mouseout(function(){
        \$(this).hide();
    });

</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Passport/_topNav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 55,  97 => 50,  93 => 49,  84 => 43,  80 => 41,  76 => 39,  74 => 38,  38 => 5,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page-top-item\">
  <a href=\"{{ path('passport_home_index') }}\" class=\"logo\"></a>
  <ul class=\"menu\">
    <li class=\"\">
      <a href=\"{{ path('passport_home_index') }}\">首页</a>
    </li>
    <li class=\"\">
      <a href=\"default/safe-tool\">密保工具</a>
      <div class=\"option-bar\">
        <div class=\"option\">
          <a href=\"default/safe-tool\">密保手机</a>
          <a href=\"default/safe-tool\">密保邮箱</a>
          <a href=\"default/safe-tool\">密保问题</a>
        </div>
        <div style=\"height: 80px;\"></div>
      </div>
    </li>
    <li class=\"\">
      <a href=\"default/account-protect\">帐号保护</a>
    </li>
    <li class=\"\">
      <a href=\"javascript:void(0);\">密码管理</a>
      <div class=\"option-bar\">
        <div class=\"option\">
          <a href=\"/user-inspect\">找回登录密码</a>
          <a href=\"/user-inspect\">找回支付密码</a>
          <a href=\"/user-inspect/safe-inspect\">修改登录密码</a>
          <a href=\"/user-inspect/safe-inspect\">修改支付密码</a>
        </div>
        <div style=\"height: 80px;\"></div>
      </div>

    <li class=\"\">
      <a href=\"default/common-problem\">常见问题</a>
    </li>
  </ul>
  <div class=\"link-inline\">
    {% if not is_logged_in() %}
      <span><a href=\"/safe\">登录</a></span>
    {% else %}
      <span>欢迎您，</span>
      <a href=\"javascript:void(0);\" class=\"link-skin\">
        <span>{{ app.user.displayName }}</span>
      </a>
      <div class=\"menber-info\">
        <span></span>
        <em></em>
        <dl>
          <dt>昵称：</dt><dd>{{ app.user.displayName }}</dd>
          <dt>帐号：</dt><dd>{{ app.user.user_name }}</dd>
        </dl>
        <a href=\"default/out\" class=\"tuichu\">退&nbsp;出</a>
      </div>
    {% endif %}
  </div>
</div>
<script type=\"text/javascript\">

    /*
     * 导航
     */
    \$('.menu li').hover( //鼠标滑过下拉列表自身也要显示，防止无法点击下拉列表
        function(){
            \$(this).find('.option-bar').slideDown();
        },
        function(){
            \$(this).find('.option-bar').hide();
        }
    );


    /*
     * 退出
     */
    \$('.link-inline a,.menber-info').mouseover(function(){
        \$('.menber-info').show();
    });
    \$('.menber-info').mouseout(function(){
        \$(this).hide();
    });

</script>", "Passport/_topNav.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\_topNav.twig");
    }
}
