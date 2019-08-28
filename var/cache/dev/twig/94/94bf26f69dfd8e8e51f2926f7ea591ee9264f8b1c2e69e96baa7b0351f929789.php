<?php

/* /Passport/Home/index.twig */
class __TwigTemplate_054ecc15e2f16fe52ba49627b00659a18fc6092e9c3b7d2e56ab2a5976988bd2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/Passport/layout.twig", "/Passport/Home/index.twig", 1);
        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
            'js_end' => array($this, 'block_js_end'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/Passport/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Passport/Home/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Passport/Home/index.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 3
        echo "<div class=\"after-login\">
  <div class=\"wrapper-left\">
    <div class=\"my-info\">
      <div class=\"index-face\">
        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->source); })()), "avatar_url", array()), "html", null, true);
        echo "\" onerror=\"this.src='";
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/common/img/default-avatar.jpg");
        echo "'\"/>
      </div>
      <dl>
        <dt>昵&nbsp;&nbsp;称：</dt><dd>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->source); })()), "displayName", array()), "html", null, true);
        echo "</dd>
        <dt>帐&nbsp;&nbsp;号：</dt><dd>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 11, $this->source); })()), "user_name", array()), "html", null, true);
        echo "</dd>
      </dl>
    </div>
    <div class=\"my-last-login-time\">
      <h3>最近登录</h3>
      <p>
        <span >";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 17, $this->source); })()), "last_login_time", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</span>
        <span id=\"ip-info\">";
        // line 18
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "last_login_ip", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "last_login_ip", array()), "-")) : ("-")), "html", null, true);
        echo "</span>

        <span>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_constant("App\\Platform::PLATFORMS"), twig_get_attribute($this->env, $this->source, (isset($context["login_log"]) || array_key_exists("login_log", $context) ? $context["login_log"] : (function () { throw new Twig_Error_Runtime('Variable "login_log" does not exist.', 20, $this->source); })()), "platform_id", array()), array(), "array"), "html", null, true);
        echo "</span>
      </p>
    </div>
    <div class=\"middel\">
      <div class=\"hidden\" id=\"safe-inspect-result\">
        <div class=\"testing\" style=\"background: url(";
        // line 25
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/passport/img/testing-2.gif");
        echo ") no-repeat;\"></div>
      </div>
    </div>
  </div>
  <div class=\"wrapper-right\" style=\"margin-top: -50px;\">
    <div class=\"wrapper\">
      <div class=\"title\">我的密保工具</div>
      <div class=\"tool-list\">
        ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 33, $this->source); })()), "bind_mobile", array())) {
            // line 34
            echo "          <dl>
            <a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_tool_index");
            echo "\">
              <dt>
                <img src=\"";
            // line 37
            echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/passport/img/rk2.png");
            echo "\">密保手机
              </dt>
              <dd>已绑定密保手机</dd>
            </a>
          </dl>
        ";
        }
        // line 43
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 43, $this->source); })()), "bind_email", array())) {
            // line 44
            echo "          <dl>
            <a href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_tool_index", array("type" => "email"));
            echo "\">
              <dt>
                <img src=\"";
            // line 47
            echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/passport/img/rk3.png");
            echo "\">密保邮箱
              </dt>
              <dd>已绑定密保邮箱</dd>
            </a>

          </dl>
        ";
        }
        // line 54
        echo "        ";
        if ((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new Twig_Error_Runtime('Variable "questions" does not exist.', 54, $this->source); })())) {
            // line 55
            echo "          <dl>
            <a href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_tool_index", array("type" => "question"));
            echo "\">
              <dt>
                <img src=\"";
            // line 58
            echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/passport/img/rk1.png");
            echo "\">密保问题
              </dt>
              <dd>已设置密保问题</dd>
            </a>

          </dl>
        ";
        }
        // line 65
        echo "      </div>
      <div class=\"title\">常见问题</div>
      <div class=\"tool-list\">
        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["common_questions"]) || array_key_exists("common_questions", $context) ? $context["common_questions"] : (function () { throw new Twig_Error_Runtime('Variable "common_questions" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 69
            echo "        <dl>
          <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_question_common_questions", array("id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", array()))), "html", null, true);
            echo "\">
            <dt>
              <img src=\"";
            // line 72
            echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/passport/img/rk1.png");
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "title", array()), "html", null, true);
            echo "
            </dt>
            <dd>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "abstract", array()), "html", null, true);
            echo "</dd>
          </a>
        </dl>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "      </div>
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 84
        echo "
<script type=\"text/javascript\">
    \$(document).ready(function () {

        var success = function(data){
            if(data.status){
                \$('#ip-info').text(data.data[0].location+'(";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 90, $this->source); })()), "last_login_ip", array()), "html", null, true);
        echo ")')
            }
        }
        nxwd.ajaxRequest('";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_home_ip_query");
        echo "','POST',{},'json',success);
        safe_inspect();
    });
    function safe_inspect() {

        var success = function (data) {
            \$('#safe-inspect-result').html(data);
            /*
             * 展开所有项
             */
            \$('.open-item').click(function(){
                \$('.my-yes-col').slideToggle();
            });
        }
        nxwd.ajaxRequest('";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_home_safe_inspect");
        echo "','POST',{},'html',success);
    }

</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/Passport/Home/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 107,  241 => 93,  235 => 90,  227 => 84,  218 => 83,  204 => 78,  194 => 74,  187 => 72,  182 => 70,  179 => 69,  175 => 68,  170 => 65,  160 => 58,  155 => 56,  152 => 55,  149 => 54,  139 => 47,  134 => 45,  131 => 44,  128 => 43,  119 => 37,  114 => 35,  111 => 34,  109 => 33,  98 => 25,  90 => 20,  85 => 18,  81 => 17,  72 => 11,  68 => 10,  60 => 7,  54 => 3,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '/Passport/layout.twig' %}
{% block main_content %}
<div class=\"after-login\">
  <div class=\"wrapper-left\">
    <div class=\"my-info\">
      <div class=\"index-face\">
        <img src=\"{{ user.avatar_url }}\" onerror=\"this.src='{{ asset('/assets/common/img/default-avatar.jpg') }}'\"/>
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

        <span>{{ constant('App\\\\Platform::PLATFORMS')[login_log.platform_id] }}</span>
      </p>
    </div>
    <div class=\"middel\">
      <div class=\"hidden\" id=\"safe-inspect-result\">
        <div class=\"testing\" style=\"background: url({{ asset('/assets/passport/img/testing-2.gif') }}) no-repeat;\"></div>
      </div>
    </div>
  </div>
  <div class=\"wrapper-right\" style=\"margin-top: -50px;\">
    <div class=\"wrapper\">
      <div class=\"title\">我的密保工具</div>
      <div class=\"tool-list\">
        {% if user.bind_mobile %}
          <dl>
            <a href=\"{{ path('passport_tool_index') }}\">
              <dt>
                <img src=\"{{ asset('/assets/passport/img/rk2.png') }}\">密保手机
              </dt>
              <dd>已绑定密保手机</dd>
            </a>
          </dl>
        {% endif %}
        {%  if user.bind_email %}
          <dl>
            <a href=\"{{ path('passport_tool_index',{'type':'email'}) }}\">
              <dt>
                <img src=\"{{ asset('/assets/passport/img/rk3.png') }}\">密保邮箱
              </dt>
              <dd>已绑定密保邮箱</dd>
            </a>

          </dl>
        {% endif %}
        {%  if questions %}
          <dl>
            <a href=\"{{ path('passport_tool_index',{'type':'question'}) }}\">
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
        {% for question in common_questions %}
        <dl>
          <a href=\"{{ path('passport_question_common_questions',{'id':question.id}) }}\">
            <dt>
              <img src=\"{{ asset('/assets/passport/img/rk1.png') }}\">{{ question.title }}
            </dt>
            <dd>{{ question.abstract }}</dd>
          </a>
        </dl>
        {%  endfor %}
      </div>
    </div>
  </div>
</div>
{% endblock %}
{% block js_end %}

<script type=\"text/javascript\">
    \$(document).ready(function () {

        var success = function(data){
            if(data.status){
                \$('#ip-info').text(data.data[0].location+'({{ user.last_login_ip }})')
            }
        }
        nxwd.ajaxRequest('{{ path(\"passport_home_ip_query\") }}','POST',{},'json',success);
        safe_inspect();
    });
    function safe_inspect() {

        var success = function (data) {
            \$('#safe-inspect-result').html(data);
            /*
             * 展开所有项
             */
            \$('.open-item').click(function(){
                \$('.my-yes-col').slideToggle();
            });
        }
        nxwd.ajaxRequest('{{ path(\"passport_home_safe_inspect\") }}','POST',{},'html',success);
    }

</script>
{% endblock %}
", "/Passport/Home/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\Home\\index.twig");
    }
}
