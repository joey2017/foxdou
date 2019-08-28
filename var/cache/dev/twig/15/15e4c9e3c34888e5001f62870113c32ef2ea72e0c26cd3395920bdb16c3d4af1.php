<?php

/* Passport/Home/index.twig */
class __TwigTemplate_2f133a740fac408c20b37f6e3fed20721fe371b5905f6936965d631b6e892403 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/Passport/layout.twig", "Passport/Home/index.twig", 1);
        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/Passport/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/Home/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/Home/index.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 4
        echo "<div class=\"after-login\">
  <div class=\"wrapper-left\">
    <div class=\"my-info\">
      <div class=\"index-face\">
        <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 8, $this->source); })()), "avatar_url", array()), "html", null, true);
        echo "\" onerror=\"this.src='";
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/common/img/default-head-portrait2.jpg");
        echo "'\"/>
      </div>
      <dl>
        <dt>昵&nbsp;&nbsp;称：</dt><dd>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 11, $this->source); })()), "displayName", array()), "html", null, true);
        echo "</dd>
        <dt>帐&nbsp;&nbsp;号：</dt><dd>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 12, $this->source); })()), "user_name", array()), "html", null, true);
        echo "</dd>
      </dl>
    </div>
    <div class=\"my-last-login-time\">
      <h3>最近登录</h3>
      <p>
        <span >";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 18, $this->source); })()), "last_login_time", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</span>
        <span id=\"ip-info\">";
        // line 19
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "last_login_ip", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "last_login_ip", array()), "-")) : ("-")), "html", null, true);
        echo "</span>

        <span>最后登录平台（待实现）</span>
      </p>
    </div>
    <div class=\"middel\">
      <div class=\"hidden\" id=\"safe-inspect-result\">
        <div class=\"testing\" style=\"background: url(";
        // line 26
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/passport/img/testing-2.gif");
        echo ") no-repeat;\"></div>
      </div>
    </div>
  </div>
  <div class=\"wrapper-right\">
    <div class=\"wrapper\">
      <div class=\"title\">我的密保工具</div>
      <div class=\"tool-list\">
        ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 34, $this->source); })()), "bind_mobile", array())) {
            // line 35
            echo "          <dl>
            <a href=\"javascript:alert('safe-tool/mobile')\">
              <dt>
                <img src=\"";
            // line 38
            echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/passport/img/rk2.png");
            echo "\">密保手机
              </dt>
              <dd>已绑定密保手机</dd>
            </a>
            <!--                        <span>详情</span>-->
          </dl>
        ";
        }
        // line 45
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 45, $this->source); })()), "bind_email", array())) {
            // line 46
            echo "          <dl>
            <a href=\"javascript:alert('safe-tool/email')\">
              <dt>
                <img src=\"";
            // line 49
            echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/passport/img/rk3.png");
            echo "\">密保邮箱
              </dt>
              <dd>已绑定密保邮箱</dd>
            </a>

          </dl>
        ";
        }
        // line 56
        echo "        ";
        if (false) {
            // line 57
            echo "          <dl>
            <a href=\"javascript:alert('safe-tool/security-question')\">
              <dt>
                <img src=\"";
            // line 60
            echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/passport/img/rk1.png");
            echo "\">密保问题
              </dt>
              <dd>已设置密保问题</dd>
            </a>

          </dl>
        ";
        }
        // line 67
        echo "      </div>
      <div class=\"title\">常见问题</div>
      <div class=\"tool-list\">
        ";
        // line 71
        echo "        <dl>
          <a href=\"javascript:alert('待实现')\">
            <dt>
              <img src=\"";
        // line 74
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/passport/img/rk1.png");
        echo "\">faq title
            </dt>
            <dd>faq abstract</dd>
          </a>
        </dl>
        ";
        // line 80
        echo "      </div>
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Passport/Home/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 80,  168 => 74,  163 => 71,  158 => 67,  148 => 60,  143 => 57,  140 => 56,  130 => 49,  125 => 46,  122 => 45,  112 => 38,  107 => 35,  105 => 34,  94 => 26,  84 => 19,  80 => 18,  71 => 12,  67 => 11,  59 => 8,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '/Passport/layout.twig' %}

{% block main_content %}
<div class=\"after-login\">
  <div class=\"wrapper-left\">
    <div class=\"my-info\">
      <div class=\"index-face\">
        <img src=\"{{ user.avatar_url }}\" onerror=\"this.src='{{ asset('/assets/common/img/default-head-portrait2.jpg') }}'\"/>
      </div>
      <dl>
        <dt>昵&nbsp;&nbsp;称：</dt><dd>{{ user.displayName }}</dd>
        <dt>帐&nbsp;&nbsp;号：</dt><dd>{{ user.user_name }}</dd>
      </dl>
    </div>
    <div class=\"my-last-login-time\">
      <h3>最近登录</h3>
      <p>
        <span >{{ user.last_login_time|date('Y-m-d H:i:s') }}</span>
        <span id=\"ip-info\">{{ user.last_login_ip|default('-') }}</span>

        <span>最后登录平台（待实现）</span>
      </p>
    </div>
    <div class=\"middel\">
      <div class=\"hidden\" id=\"safe-inspect-result\">
        <div class=\"testing\" style=\"background: url({{ asset('/assets/passport/img/testing-2.gif') }}) no-repeat;\"></div>
      </div>
    </div>
  </div>
  <div class=\"wrapper-right\">
    <div class=\"wrapper\">
      <div class=\"title\">我的密保工具</div>
      <div class=\"tool-list\">
        {% if user.bind_mobile %}
          <dl>
            <a href=\"javascript:alert('safe-tool/mobile')\">
              <dt>
                <img src=\"{{ asset('/assets/passport/img/rk2.png') }}\">密保手机
              </dt>
              <dd>已绑定密保手机</dd>
            </a>
            <!--                        <span>详情</span>-->
          </dl>
        {% endif %}
        {%  if user.bind_email %}
          <dl>
            <a href=\"javascript:alert('safe-tool/email')\">
              <dt>
                <img src=\"{{ asset('/assets/passport/img/rk3.png') }}\">密保邮箱
              </dt>
              <dd>已绑定密保邮箱</dd>
            </a>

          </dl>
        {% endif %}
        {%  if false %}
          <dl>
            <a href=\"javascript:alert('safe-tool/security-question')\">
              <dt>
                <img src=\"{{ asset('/assets/passport/img/rk1.png') }}\">密保问题
              </dt>
              <dd>已设置密保问题</dd>
            </a>

          </dl>
        {% endif %}
      </div>
      <div class=\"title\">常见问题</div>
      <div class=\"tool-list\">
        {#{%  foreach (\$common_problem as \$v) %}#}
        <dl>
          <a href=\"javascript:alert('待实现')\">
            <dt>
              <img src=\"{{ asset('/assets/passport/img/rk1.png') }}\">faq title
            </dt>
            <dd>faq abstract</dd>
          </a>
        </dl>
        {#{%  endforeach;?>#}
      </div>
    </div>
  </div>
</div>
{% endblock %}
", "Passport/Home/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\Home\\index.twig");
    }
}
