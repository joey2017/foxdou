<?php

/* Passport/User/_profile.twig */
class __TwigTemplate_13b4238b4627b28956f01cc2d75ac1704a73afce912a05236eb2bd7e894eaabe extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/User/_profile.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/User/_profile.twig"));

        // line 1
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Passport/User/_profile.twig", 1);
        // line 2
        echo "
  <style type=\"text/css\">
    input{height: 34px!important;}
    .page-content{text-align: left;}
    a:hover{opacity: .7;}
    .head-portrait{position: relative;}
    .uploadImage{position: absolute;top: 0;left: 0; width: 60px;height: 60px;overflow: hidden;}
    .uploadImage img{width: 100%;height: 100%;}
    #uploadImage{display: block; width: 60px;height: 60px!important;opacity: 0;cursor: pointer;}
    .verify_failed{height: 100%;line-height: 34px;color: red}
    .verify_successed{height: 100%;line-height: 34px;color: green}
  </style>

  <div class=\"m-wrapper\">
    <div class=\"title-block\">
      <h2 class=\"title-skin\">账户信息</h2>
    </div>
    <div class=\"m-single\">
      <ul class=\"info-skin\">
        <li>
          <div class=\"info-skin-left\" style=\"margin-top: 15px;\">头像</div>
          <div class=\"info-skin-right\">
            <div class=\"head-portrait\" style=\"border-radius: 50%;\" title=\"点击上传头像\">
              <div class=\"uploadImage\" >
                <img id=\"head_img\" style=\"border-radius: 50%;\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 26, $this->source); })()), "avatar_url", array()), "html", null, true);
        echo "\" onerror=\"this.src='//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/img/default-head-portrait.jpg'\" />
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">昵称</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\">
              <span class=\"info-skin-text\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 35, $this->source); })()), "nick_name", array()), "html", null, true);
        echo "</span>
              <input type=\"text\" id=\"nick_name\" name=\"nick_name\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 36, $this->source); })()), "nick_name", array()), "html", null, true);
        echo "\"  placeholder=\"请输入昵称\" class=\"layui-input f-fnsna\" style=\"display: none;\"
            </div>
            <div class=\"info-skin-auxe\">
              <a href=\"javascript:void(0);\" class=\"edit\" data-value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 39, $this->source); })()), "nick_name", array()), "html", null, true);
        echo "\"> <i class=\"icon iconfont icon-czjl\" style=\"color: grey\"></i></a>
            </div>
          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">狐豆帐号</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\">
              <span class=\"info-skin-text\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 47, $this->source); })()), "user_name", array()), "html", null, true);
        echo "</span>
            </div>
          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">绑定手机</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\">
                <span class=\"info-skin-text\">
                    ";
        // line 56
        echo $this->extensions['App\Common\Twig\AppExtension']->maskMobile(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 56, $this->source); })()), "mobile", array()));
        echo "
                </span>
            </div>
            ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 59, $this->source); })()), "mobile", array())) {
            // line 60
            echo "            <div class=\"info-skin-auxe\">
              <a href=\"/safe/user-inspect/safe-inspect?operation=1\" target=\"_blank\"><i class=\"icon iconfont icon-czjl\" style=\"color: grey\"></i></a>
            </div>
            ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 63
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 63, $this->source); })()), "bind_mobile", array())) {
            // line 64
            echo "            <div class=\"info-skin-auxe\">
              <a href=\"/safe/user-inspect/safe-inspect?operation=11\" target=\"_blank\">设为登录帐号</a>
              <a href=\"/safe/user-inspect/safe-inspect?operation=1\" target=\"_blank\"><i class=\"icon iconfont icon-czjl\" style=\"color: grey\"></i></a>
            </div>
           ";
        } else {
            // line 69
            echo "            <div class=\"info-skin-auxe\">
              <a href=\"//safe.foxdou.com/safe/user-inspect/safe-inspect?operation=8\" target=\"_blank\">绑定</a>
            </div>
            ";
        }
        // line 73
        echo "          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">邮箱账户</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\">
                        <span class=\"info-skin-text\">
                          ";
        // line 80
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 80, $this->source); })()), "bind_email", array())) ? ($this->extensions['App\Common\Twig\AppExtension']->maskEmail(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 80, $this->source); })()), "bind_email", array()))) : ("未绑定"));
        echo "
                        </span>
            </div>
            ";
        // line 83
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 83, $this->source); })()), "email", array())) {
            // line 84
            echo "            <div class=\"info-skin-auxe\">
              <a href=\"/safe/user-inspect/safe-inspect?operation=2\" target=\"_blank\"><i class=\"icon iconfont icon-czjl\" style=\"color: grey\"></i></a>
            </div>
            ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 87
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 87, $this->source); })()), "bind_email", array())) {
            // line 88
            echo "            <div class=\"info-skin-auxe\">
              <a href=\"/safe/user-inspect/safe-inspect?operation=12\" target=\"_blank\">设为登录帐号</a>
              <a href=\"/safe/user-inspect/safe-inspect?operation=2\" target=\"_blank\"><i class=\"icon iconfont icon-czjl\" style=\"color: grey\"></i></a>
            </div>
            ";
        } else {
            // line 93
            echo "            <div class=\"info-skin-auxe\">
              <a href=\"//safe.foxdou.com/safe/user-inspect/safe-inspect?operation=7\" target=\"_blank\">绑定</a>
            </div>
            ";
        }
        // line 97
        echo "          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">账户性质</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\">
              <span class=\"info-skin-text\">";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 103, $this->source); })()), "getTypeText", array(), "method"), "html", null, true);
        echo "</span>
            </div>
          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">实名认证</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-auxe\">
              ";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 111, $this->source); })()), "getRealNameStatusText", array(), "method"), "html", null, true);
        echo "
              ";
        // line 112
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 112, $this->source); })()), "real_name_status", array()) != 1)) {
            // line 113
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("identity_management_verify");
            echo "\"> | <span class=\"\" >实名认证信息</span></a>
              ";
        }
        // line 115
        echo "            </div>
          </div>
        </li>

        ";
        // line 119
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 119, $this->source); })()), "type", array()) != twig_constant("App\\Common\\Model\\User\\User::TYPE_INDIVIDUAL"))) {
            // line 120
            echo "          ";
            $context["info"] = twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 120, $this->source); })()), "realNameInfo", array());
            // line 121
            echo "        <li>
          <div class=\"info-skin-left\">公司名称</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\">
              <span class=\"info-skin-text\">";
            // line 125
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "business_name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "business_name", array()), "-")) : ("-")), "html", null, true);
            echo "</span>
            </div>
          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">法人名称</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\">
              <span class=\"info-skin-text\">";
            // line 133
            echo $this->extensions['App\Common\Twig\AppExtension']->maskRealName(((twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "legal_person_name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "legal_person_name", array()), "-")) : ("-")));
            echo "</span>
            </div>
          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">企业地址</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\">
              <span class=\"info-skin-text\">";
            // line 141
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "business_address", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "business_address", array()), "-")) : ("-")), "html", null, true);
            echo "</span>
            </div>
          </div>
        </li>
        ";
        }
        // line 146
        echo "      </ul>
    </div>
  </div>

  <script type=\"text/javascript\">
//      upload_alios_img('#head_img','.user_head_portrait,#head_img',{});
      layui.use(['layer'], function(){
          var layer = layui.layer;

          \$('.edit').click(function(){
              if(\$(this).text() !='完成'){
                  \$(this).text('完成');
                  edit(this);
              }else{
                  save(this);
              }
          });

          function edit(this_dom){
              var value = \$(this_dom).data('value');
              \$(this_dom).parents('li').find('.info-skin-text').hide();
              \$(this_dom).parents('li').find('input').fadeIn();
              \$(this_dom).parents('li').find('input').val(value);
          }

          function save(this_dom){
              var origin_value = \$(this_dom).data('value');
              var value = \$(this_dom).parents('li').find('input').val();
              if(origin_value === value){
                  \$(this_dom).parents('li').find('input').hide();
                  \$(this_dom).parents('li').find('.info-skin-text').show();
                  \$('.edit').html('<i class=\"icon iconfont icon-czjl\" style=\"color: grey\"></i>');
              }

              \$.ajax('";
        // line 180
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_user_profile_update");
        echo "',{
                  type:'post'
                  ,data:{nick_name:value,'_token':'";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("passport_user_profile_update"), "html", null, true);
        echo "'}
                  ,success:function (data) {
                      layer.msg(data.msg);
                      if(!data.status){
                          layer.msg(data.msg);
                          return false;
                      }

                      \$(this_dom).parents('li').find('input').hide();
                      \$(this_dom).parents('li').find('.info-skin-text').show();
                      \$(this_dom).parents('li').find('.info-skin-text').html(value);
                      \$('.edit').html('<i class=\"icon iconfont icon-czjl\" style=\"color: grey\"></i>');
                      \$(this_dom).data('value', value);
                  }
                  ,error:function () {
                      layer.msg('网络或系统异常，请稍候再试')
                  }
              });
          }
      });

  </script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Passport/User/_profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 182,  281 => 180,  245 => 146,  237 => 141,  226 => 133,  215 => 125,  209 => 121,  206 => 120,  204 => 119,  198 => 115,  192 => 113,  190 => 112,  186 => 111,  175 => 103,  167 => 97,  161 => 93,  154 => 88,  152 => 87,  147 => 84,  145 => 83,  139 => 80,  130 => 73,  124 => 69,  117 => 64,  115 => 63,  110 => 60,  108 => 59,  102 => 56,  90 => 47,  79 => 39,  73 => 36,  69 => 35,  57 => 26,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

  <style type=\"text/css\">
    input{height: 34px!important;}
    .page-content{text-align: left;}
    a:hover{opacity: .7;}
    .head-portrait{position: relative;}
    .uploadImage{position: absolute;top: 0;left: 0; width: 60px;height: 60px;overflow: hidden;}
    .uploadImage img{width: 100%;height: 100%;}
    #uploadImage{display: block; width: 60px;height: 60px!important;opacity: 0;cursor: pointer;}
    .verify_failed{height: 100%;line-height: 34px;color: red}
    .verify_successed{height: 100%;line-height: 34px;color: green}
  </style>

  <div class=\"m-wrapper\">
    <div class=\"title-block\">
      <h2 class=\"title-skin\">账户信息</h2>
    </div>
    <div class=\"m-single\">
      <ul class=\"info-skin\">
        <li>
          <div class=\"info-skin-left\" style=\"margin-top: 15px;\">头像</div>
          <div class=\"info-skin-right\">
            <div class=\"head-portrait\" style=\"border-radius: 50%;\" title=\"点击上传头像\">
              <div class=\"uploadImage\" >
                <img id=\"head_img\" style=\"border-radius: 50%;\" src=\"{{ user.avatar_url }}\" onerror=\"this.src='//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/img/default-head-portrait.jpg'\" />
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">昵称</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\">
              <span class=\"info-skin-text\">{{ user.nick_name }}</span>
              <input type=\"text\" id=\"nick_name\" name=\"nick_name\" value=\"{{ user.nick_name }}\"  placeholder=\"请输入昵称\" class=\"layui-input f-fnsna\" style=\"display: none;\"
            </div>
            <div class=\"info-skin-auxe\">
              <a href=\"javascript:void(0);\" class=\"edit\" data-value=\"{{ user.nick_name }}\"> <i class=\"icon iconfont icon-czjl\" style=\"color: grey\"></i></a>
            </div>
          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">狐豆帐号</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\">
              <span class=\"info-skin-text\">{{ user.user_name }}</span>
            </div>
          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">绑定手机</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\">
                <span class=\"info-skin-text\">
                    {{ user.mobile|mask_mobile }}
                </span>
            </div>
            {% if user.mobile %}
            <div class=\"info-skin-auxe\">
              <a href=\"/safe/user-inspect/safe-inspect?operation=1\" target=\"_blank\"><i class=\"icon iconfont icon-czjl\" style=\"color: grey\"></i></a>
            </div>
            {% elseif user.bind_mobile  %}
            <div class=\"info-skin-auxe\">
              <a href=\"/safe/user-inspect/safe-inspect?operation=11\" target=\"_blank\">设为登录帐号</a>
              <a href=\"/safe/user-inspect/safe-inspect?operation=1\" target=\"_blank\"><i class=\"icon iconfont icon-czjl\" style=\"color: grey\"></i></a>
            </div>
           {% else %}
            <div class=\"info-skin-auxe\">
              <a href=\"//safe.foxdou.com/safe/user-inspect/safe-inspect?operation=8\" target=\"_blank\">绑定</a>
            </div>
            {% endif %}
          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">邮箱账户</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\">
                        <span class=\"info-skin-text\">
                          {{ user.bind_email ? user.bind_email|mask_email : \"未绑定\" }}
                        </span>
            </div>
            {% if user.email %}
            <div class=\"info-skin-auxe\">
              <a href=\"/safe/user-inspect/safe-inspect?operation=2\" target=\"_blank\"><i class=\"icon iconfont icon-czjl\" style=\"color: grey\"></i></a>
            </div>
            {% elseif user.bind_email %}
            <div class=\"info-skin-auxe\">
              <a href=\"/safe/user-inspect/safe-inspect?operation=12\" target=\"_blank\">设为登录帐号</a>
              <a href=\"/safe/user-inspect/safe-inspect?operation=2\" target=\"_blank\"><i class=\"icon iconfont icon-czjl\" style=\"color: grey\"></i></a>
            </div>
            {% else %}
            <div class=\"info-skin-auxe\">
              <a href=\"//safe.foxdou.com/safe/user-inspect/safe-inspect?operation=7\" target=\"_blank\">绑定</a>
            </div>
            {% endif %}
          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">账户性质</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\">
              <span class=\"info-skin-text\">{{ user.getTypeText() }}</span>
            </div>
          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">实名认证</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-auxe\">
              {{ user.getRealNameStatusText() }}
              {% if user.real_name_status != 1 %}
                <a href=\"{{ path('identity_management_verify') }}\"> | <span class=\"\" >实名认证信息</span></a>
              {% endif %}
            </div>
          </div>
        </li>

        {% if user.type != constant('App\\\\Common\\\\Model\\\\User\\\\User::TYPE_INDIVIDUAL') %}
          {% set info = user.realNameInfo %}
        <li>
          <div class=\"info-skin-left\">公司名称</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\">
              <span class=\"info-skin-text\">{{ info.business_name|default('-') }}</span>
            </div>
          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">法人名称</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\">
              <span class=\"info-skin-text\">{{ info.legal_person_name|default('-')|mask_real_name }}</span>
            </div>
          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">企业地址</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\">
              <span class=\"info-skin-text\">{{ info.business_address|default('-') }}</span>
            </div>
          </div>
        </li>
        {% endif %}
      </ul>
    </div>
  </div>

  <script type=\"text/javascript\">
//      upload_alios_img('#head_img','.user_head_portrait,#head_img',{});
      layui.use(['layer'], function(){
          var layer = layui.layer;

          \$('.edit').click(function(){
              if(\$(this).text() !='完成'){
                  \$(this).text('完成');
                  edit(this);
              }else{
                  save(this);
              }
          });

          function edit(this_dom){
              var value = \$(this_dom).data('value');
              \$(this_dom).parents('li').find('.info-skin-text').hide();
              \$(this_dom).parents('li').find('input').fadeIn();
              \$(this_dom).parents('li').find('input').val(value);
          }

          function save(this_dom){
              var origin_value = \$(this_dom).data('value');
              var value = \$(this_dom).parents('li').find('input').val();
              if(origin_value === value){
                  \$(this_dom).parents('li').find('input').hide();
                  \$(this_dom).parents('li').find('.info-skin-text').show();
                  \$('.edit').html('<i class=\"icon iconfont icon-czjl\" style=\"color: grey\"></i>');
              }

              \$.ajax('{{ path('passport_user_profile_update') }}',{
                  type:'post'
                  ,data:{nick_name:value,'_token':'{{ csrf_token(\"passport_user_profile_update\") }}'}
                  ,success:function (data) {
                      layer.msg(data.msg);
                      if(!data.status){
                          layer.msg(data.msg);
                          return false;
                      }

                      \$(this_dom).parents('li').find('input').hide();
                      \$(this_dom).parents('li').find('.info-skin-text').show();
                      \$(this_dom).parents('li').find('.info-skin-text').html(value);
                      \$('.edit').html('<i class=\"icon iconfont icon-czjl\" style=\"color: grey\"></i>');
                      \$(this_dom).data('value', value);
                  }
                  ,error:function () {
                      layer.msg('网络或系统异常，请稍候再试')
                  }
              });
          }
      });

  </script>
", "Passport/User/_profile.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\User\\_profile.twig");
    }
}
