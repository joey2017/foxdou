<?php

/* Passport/User/_contact_info.twig */
class __TwigTemplate_3560f989e6e63ea0af355465551cec51cc4c22cd355f9e3f9145c94e29b7227b extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/User/_contact_info.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/User/_contact_info.twig"));

        // line 1
        $context["contact_info"] = twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 1, $this->source); })()), "getContactInfo", array(), "method");
        // line 2
        echo "<div class=\"m-wrapper\">
    <div class=\"title-block\">
      <h2 class=\"title-skin\">联系信息</h2>
    </div>
    <div class=\"m-single\">
      <ul class=\"info-skin\">
        <li>
          <div class=\"info-skin-left\">联系人姓名</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\">
              <input type=\"text\" name=\"\" id=\"contact_name\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["contact_info"] ?? null), "contact_name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["contact_info"] ?? null), "contact_name", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"\" class=\"layui-input f-fnsna\" />
            </div>
          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">联系人手机</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\">
              <input type=\"text\" name=\"\" id=\"contact_phone\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["contact_info"] ?? null), "contact_phone", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["contact_info"] ?? null), "contact_phone", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"\" class=\"layui-input f-fnsna\" />
            </div>
          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">联系人邮箱</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\">
              <input type=\"text\" name=\"\" id=\"contact_mail\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["contact_info"] ?? null), "contact_mail", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["contact_info"] ?? null), "contact_mail", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"\" class=\"layui-input f-fnsna\" />
            </div>
          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">联系人QQ</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\">
              <input type=\"text\" name=\"\" id=\"contact_qq\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["contact_info"] ?? null), "contact_qq", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["contact_info"] ?? null), "contact_qq", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"\" class=\"layui-input f-fnsna\" />
            </div>
          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">联系人地址</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\" style=\"width: 600px;\">
              <input type=\"text\" name=\"\" id=\"contact_address\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["contact_info"] ?? null), "contact_address", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["contact_info"] ?? null), "contact_address", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"请输入联系人地址\" class=\"layui-input f-fnsna\" />
            </div>
          </div>
        </li>
      </ul>
    </div>

    <div style=\"margin: 30px 0 0 150px;\">
      <button class=\"layui-btn f-fnsna\" id=\"btn-save-contact\">保 存</button>
    </div>
  </div>

  <script type=\"text/javascript\">
//      upload_alios_img('#head_img','.user_head_portrait,#head_img',{});
      layui.use(['layer'], function(){
          var layer = layui.layer;

          \$('#btn-save-contact').click(function () {
              \$.ajax('";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_user_contact_info_update");
        echo "', {
                  type:'post'
                  ,data:{contact_name:\$('#contact_name').val()
                      ,contact_phone:\$('#contact_phone').val()
                      ,contact_mail:\$('#contact_mail').val()
                      ,contact_qq:\$('#contact_qq').val()
                      ,contact_address:\$('#contact_address').val()
                      ,_csrf_token:'";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("passport_user_contact_info_update"), "html", null, true);
        echo "'
                  }
                  ,success: function (data) {
                      layer.msg(data.msg);
                  }
                  ,error:function () {
                      layer.msg('网络或系统异常，请稍候再试')
                  }

              });
          });
      });

  </script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Passport/User/_contact_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 69,  108 => 62,  87 => 44,  76 => 36,  65 => 28,  54 => 20,  43 => 12,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set contact_info = user.getContactInfo() %}
<div class=\"m-wrapper\">
    <div class=\"title-block\">
      <h2 class=\"title-skin\">联系信息</h2>
    </div>
    <div class=\"m-single\">
      <ul class=\"info-skin\">
        <li>
          <div class=\"info-skin-left\">联系人姓名</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\">
              <input type=\"text\" name=\"\" id=\"contact_name\" value=\"{{ contact_info.contact_name|default('') }}\" placeholder=\"\" class=\"layui-input f-fnsna\" />
            </div>
          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">联系人手机</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\">
              <input type=\"text\" name=\"\" id=\"contact_phone\" value=\"{{ contact_info.contact_phone|default('') }}\" placeholder=\"\" class=\"layui-input f-fnsna\" />
            </div>
          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">联系人邮箱</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\">
              <input type=\"text\" name=\"\" id=\"contact_mail\" value=\"{{ contact_info.contact_mail|default('') }}\" placeholder=\"\" class=\"layui-input f-fnsna\" />
            </div>
          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">联系人QQ</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\">
              <input type=\"text\" name=\"\" id=\"contact_qq\" value=\"{{ contact_info.contact_qq|default('') }}\" placeholder=\"\" class=\"layui-input f-fnsna\" />
            </div>
          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">联系人地址</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\" style=\"width: 600px;\">
              <input type=\"text\" name=\"\" id=\"contact_address\" value=\"{{ contact_info.contact_address|default('') }}\" placeholder=\"请输入联系人地址\" class=\"layui-input f-fnsna\" />
            </div>
          </div>
        </li>
      </ul>
    </div>

    <div style=\"margin: 30px 0 0 150px;\">
      <button class=\"layui-btn f-fnsna\" id=\"btn-save-contact\">保 存</button>
    </div>
  </div>

  <script type=\"text/javascript\">
//      upload_alios_img('#head_img','.user_head_portrait,#head_img',{});
      layui.use(['layer'], function(){
          var layer = layui.layer;

          \$('#btn-save-contact').click(function () {
              \$.ajax('{{ path('passport_user_contact_info_update') }}', {
                  type:'post'
                  ,data:{contact_name:\$('#contact_name').val()
                      ,contact_phone:\$('#contact_phone').val()
                      ,contact_mail:\$('#contact_mail').val()
                      ,contact_qq:\$('#contact_qq').val()
                      ,contact_address:\$('#contact_address').val()
                      ,_csrf_token:'{{ csrf_token(\"passport_user_contact_info_update\") }}'
                  }
                  ,success: function (data) {
                      layer.msg(data.msg);
                  }
                  ,error:function () {
                      layer.msg('网络或系统异常，请稍候再试')
                  }

              });
          });
      });

  </script>
", "Passport/User/_contact_info.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\User\\_contact_info.twig");
    }
}
