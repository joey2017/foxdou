<?php

/* /Passport/_topNav.twig */
class __TwigTemplate_5ef6dcedbbd76d36fcb295c51d298382194fbbc419121c6b2b1162ed39d64bb7 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Passport/_topNav.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Passport/_topNav.twig"));

        // line 1
        echo "<div class=\"page-top-item\">
  <a href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_home_index");
        echo "\" class=\"logo\"></a>
  <ul class=\"menu\">
    <li class=\"";
        // line 4
        echo ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new Twig_Error_Runtime('Variable "current_route" does not exist.', 4, $this->source); })()) == "passport_home_index")) ? ("link-this") : (""));
        echo "\">
      <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_home_index");
        echo "\">首页</a>
    </li>
    <li class=\"";
        // line 7
        echo ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new Twig_Error_Runtime('Variable "current_route" does not exist.', 7, $this->source); })()) == "passport_identity_management_index")) ? ("link-this") : (""));
        echo "\">
      <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_identity_management_index");
        echo "\">实名认证</a>
    </li>
    <li class=\"";
        // line 10
        echo ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new Twig_Error_Runtime('Variable "current_route" does not exist.', 10, $this->source); })()) == "passport_safe_tool")) ? ("link-this") : (""));
        echo "\">
      <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_tool_index");
        echo "\">密保工具</a>
      <div class=\"option-bar\">
        <div class=\"option\">
          <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_tool_index", array("type" => "mobile"));
        echo "\">密保手机</a>
          <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_tool_index", array("type" => "eamil"));
        echo "\">密保邮箱</a>
          <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_tool_index", array("type" => "question"));
        echo "\">密保问题</a>
        </div>
        <div style=\"height: 80px;\"></div>
      </div>
    </li>
    <li class=\"";
        // line 21
        echo ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new Twig_Error_Runtime('Variable "current_route" does not exist.', 21, $this->source); })()) == "passport_protect_index")) ? ("link-this") : (""));
        echo "\">
      <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_protect_index");
        echo "\">帐号保护</a>
    </li>
    <li class=\"";
        // line 24
        echo ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new Twig_Error_Runtime('Variable "current_route" does not exist.', 24, $this->source); })()) == "bb")) ? ("link-this") : (""));
        echo "\">
      <a href=\"javascript:void(0);\">密码管理</a>
      <div class=\"option-bar\">
        <div class=\"option\">
          <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_user_password_reset_index", array("type" => "5"));
        echo "\">找回登录密码</a>
          <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_user_password_reset_index", array("type" => "6"));
        echo "\">找回支付密码</a>
          <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_safe_center_identity_verify_way", array("type" => "3"));
        echo "\">修改登录密码</a>
          <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_safe_center_identity_verify_way", array("type" => "4"));
        echo "\">修改支付密码</a>
        </div>
        <div style=\"height: 80px;\"></div>
      </div>

    <li class=\"";
        // line 36
        echo ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new Twig_Error_Runtime('Variable "current_route" does not exist.', 36, $this->source); })()) == "passport_question_common_questions")) ? ("link-this") : (""));
        echo "\">
      <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_question_common_questions");
        echo "\">常见问题</a>
    </li>
  </ul>
  <div class=\"link-inline\">
    ";
        // line 41
        if ( !$this->extensions['App\Common\Twig\SecurityExtension']->isLoggedIn()) {
            // line 42
            echo "      <span><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_login");
            echo "\">登录</a></span>
    ";
        } else {
            // line 44
            echo "      <span>欢迎您，</span>
      <a href=\"javascript:void(0);\" class=\"link-skin\">
        <span>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 46, $this->source); })()), "user", array()), "displayName", array()), "html", null, true);
            echo "</span>
      </a>
      <div class=\"menber-info\">
        <span></span>
        <em></em>
        <dl>
          <dt>昵称：</dt><dd>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 52, $this->source); })()), "user", array()), "displayName", array()), "html", null, true);
            echo "</dd>
          <dt>帐号：</dt><dd>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 53, $this->source); })()), "user", array()), "user_name", array()), "html", null, true);
            echo "</dd>
        </dl>
        <a href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_logout");
            echo "\" class=\"tuichu\">退&nbsp;出</a>
      </div>
    ";
        }
        // line 58
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
        return "/Passport/_topNav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 58,  158 => 55,  153 => 53,  149 => 52,  140 => 46,  136 => 44,  130 => 42,  128 => 41,  121 => 37,  117 => 36,  109 => 31,  105 => 30,  101 => 29,  97 => 28,  90 => 24,  85 => 22,  81 => 21,  73 => 16,  69 => 15,  65 => 14,  59 => 11,  55 => 10,  50 => 8,  46 => 7,  41 => 5,  37 => 4,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page-top-item\">
  <a href=\"{{ path('passport_home_index') }}\" class=\"logo\"></a>
  <ul class=\"menu\">
    <li class=\"{{ current_route == 'passport_home_index' ? 'link-this' : '' }}\">
      <a href=\"{{ path('passport_home_index') }}\">首页</a>
    </li>
    <li class=\"{{ current_route == 'passport_identity_management_index' ? 'link-this' : '' }}\">
      <a href=\"{{ path('passport_identity_management_index') }}\">实名认证</a>
    </li>
    <li class=\"{{ current_route == 'passport_safe_tool' ? 'link-this' : '' }}\">
      <a href=\"{{ path('passport_tool_index') }}\">密保工具</a>
      <div class=\"option-bar\">
        <div class=\"option\">
          <a href=\"{{ path('passport_tool_index',{'type':'mobile'}) }}\">密保手机</a>
          <a href=\"{{ path('passport_tool_index',{'type':'eamil'}) }}\">密保邮箱</a>
          <a href=\"{{ path('passport_tool_index',{'type':'question'}) }}\">密保问题</a>
        </div>
        <div style=\"height: 80px;\"></div>
      </div>
    </li>
    <li class=\"{{ current_route == 'passport_protect_index' ? 'link-this' : '' }}\">
      <a href=\"{{ path('passport_protect_index') }}\">帐号保护</a>
    </li>
    <li class=\"{{ current_route == 'bb' ? 'link-this' : '' }}\">
      <a href=\"javascript:void(0);\">密码管理</a>
      <div class=\"option-bar\">
        <div class=\"option\">
          <a href=\"{{ path('passport_user_password_reset_index',{'type':'5'}) }}\">找回登录密码</a>
          <a href=\"{{ path('passport_user_password_reset_index',{'type':'6'}) }}\">找回支付密码</a>
          <a href=\"{{ path('passport_safe_center_identity_verify_way',{'type':'3'}) }}\">修改登录密码</a>
          <a href=\"{{ path('passport_safe_center_identity_verify_way',{'type':'4'}) }}\">修改支付密码</a>
        </div>
        <div style=\"height: 80px;\"></div>
      </div>

    <li class=\"{{ current_route == 'passport_question_common_questions' ? 'link-this' : '' }}\">
      <a href=\"{{ path('passport_question_common_questions') }}\">常见问题</a>
    </li>
  </ul>
  <div class=\"link-inline\">
    {% if not is_logged_in() %}
      <span><a href=\"{{ path('passport_login') }}\">登录</a></span>
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
        <a href=\"{{ path('passport_logout') }}\" class=\"tuichu\">退&nbsp;出</a>
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

</script>", "/Passport/_topNav.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\_topNav.twig");
    }
}
