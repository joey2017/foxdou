<?php

/* Open/Dashboard/userInfo.twig */
class __TwigTemplate_fef6f6941bda500b2fce060f6bb69f3d41e597b10d6f3ab39348a4998176946d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Reseller/Common/layout.twig", "Open/Dashboard/userInfo.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Reseller/Common/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Open/Dashboard/userInfo.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Open/Dashboard/userInfo.twig"));

        // line 2
        $context["title"] = "狐豆便民中心-账户信息";
        // line 3
        $context["user"] = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "user", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 9
        echo "  <style type=\"text/css\">
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 23
        echo "  <div class=\"m-wrapper\">
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
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 34, $this->source); })()), "avatarUrl", array()), "html", null, true);
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
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 43, $this->source); })()), "nick_name", array()), "html", null, true);
        echo "</span>
              <input type=\"text\" name=\"\" value=\"\" placeholder=\"请输入\" class=\"layui-input f-fnsna\" style=\"display: none;\" />
            </div>
            <div class=\"info-skin-auxe\">
              <a href=\"javascript:void(0);\" class=\"edit\"> <i class=\"icon iconfont icon-czjl\" style=\"color: grey\"></i></a>
            </div>
          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">狐豆帐号</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\">
              <span class=\"info-skin-text\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 55, $this->source); })()), "user_name", array()), "html", null, true);
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
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 64, $this->source); })()), "getMobile", array(0 => true), "method"), "html", null, true);
        echo "
                </span>
            </div>
            ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 67, $this->source); })()), "mobile", array())) {
            // line 68
            echo "            <div class=\"info-skin-auxe\">
              <a href=\"/safe/user-inspect/safe-inspect?operation=1\" target=\"_blank\"><i class=\"icon iconfont icon-czjl\" style=\"color: grey\"></i></a>
            </div>
            ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 71
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 71, $this->source); })()), "bind_mobile", array())) {
            // line 72
            echo "            <div class=\"info-skin-auxe\">
              <a href=\"/safe/user-inspect/safe-inspect?operation=11\" target=\"_blank\">设为登录帐号</a>
              <a href=\"/safe/user-inspect/safe-inspect?operation=1\" target=\"_blank\"><i class=\"icon iconfont icon-czjl\" style=\"color: grey\"></i></a>
            </div>
           ";
        } else {
            // line 77
            echo "            <div class=\"info-skin-auxe\">
              <a href=\"//safe.foxdou.com/safe/user-inspect/safe-inspect?operation=8\" target=\"_blank\">绑定</a>
            </div>
            ";
        }
        // line 81
        echo "          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">邮箱账户</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\">
                        <span class=\"info-skin-text\">
                          ";
        // line 88
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 88, $this->source); })()), "bind_email", array())) ? (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 88, $this->source); })()), "getEmail", array(0 => true), "method")) : ("未绑定")), "html", null, true);
        echo "
                        </span>
            </div>
            ";
        // line 91
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 91, $this->source); })()), "email", array())) {
            // line 92
            echo "            <div class=\"info-skin-auxe\">
              <a href=\"/safe/user-inspect/safe-inspect?operation=2\" target=\"_blank\"><i class=\"icon iconfont icon-czjl\" style=\"color: grey\"></i></a>
            </div>
            ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 95
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 95, $this->source); })()), "bind_email", array())) {
            // line 96
            echo "            <div class=\"info-skin-auxe\">
              <a href=\"/safe/user-inspect/safe-inspect?operation=12\" target=\"_blank\">设为登录帐号</a>
              <a href=\"/safe/user-inspect/safe-inspect?operation=2\" target=\"_blank\"><i class=\"icon iconfont icon-czjl\" style=\"color: grey\"></i></a>
            </div>
            ";
        } else {
            // line 101
            echo "            <div class=\"info-skin-auxe\">
              <a href=\"//safe.foxdou.com/safe/user-inspect/safe-inspect?operation=7\" target=\"_blank\">绑定</a>
            </div>
            ";
        }
        // line 105
        echo "          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">账户性质</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\">
              <span class=\"info-skin-text\">";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 111, $this->source); })()), "type", array()), "html", null, true);
        echo "</span>
            </div>
          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">实名认证</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-auxe\">
              ";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 119, $this->source); })()), "real_name_status", array()), "html", null, true);
        echo "
              ";
        // line 120
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 120, $this->source); })()), "real_name_status", array()) != 1)) {
            // line 121
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("identity_management_verify");
            echo "\"> | <span class=\"\" >实名认证信息</span></a>
              ";
        }
        // line 123
        echo "            </div>
          </div>
        </li>
      </ul>
    </div>


    <div class=\"title-block\">
      <h2 class=\"title-skin\">店铺信息</h2>
    </div>
    <div class=\"m-single\">
      <ul class=\"info-skin\">
        <li>
          <div class=\"info-skin-left\">店铺名称</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\" style=\"width: 250px;\">
              <input type=\"text\" name=\"\" id=\"shop_name\" value=\"";
        // line 139
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "resellerAccount", array(), "any", false, true), "shop_name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "resellerAccount", array(), "any", false, true), "shop_name", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"店铺名称\" class=\"layui-input f-fnsna\" />
            </div>
          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">店铺地址</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\" style=\"width: 600px;\">
              <input type=\"text\" name=\"\" id=\"shop_address\" value=\"";
        // line 147
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "resellerAccount", array(), "any", false, true), "shop_address", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "resellerAccount", array(), "any", false, true), "shop_address", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"请输入店铺地址\" class=\"layui-input f-fnsna\" />
            </div>
          </div>
        </li>
      </ul>
    </div>

    <div style=\"margin: 30px 0 0 150px;\">
      <button class=\"layui-btn f-fnsna\" id=\"save-contact\">保 存</button>
    </div>
  </div>

  <script type=\"text/javascript\">
//      upload_alios_img('#head_img','.user_head_portrait,#head_img',{});

      \$(function(){
          \$('.edit').click(function(){
              if(\$(this).text() !='完成'){
                  edit(this);
                  \$(this).text('完成');
              }else{
                  save(this);
              }
          });

          function edit(this_dom){
              var value = \$(this_dom).parents('li').find('.info-skin-text').html();
              \$(this_dom).parents('li').find('.info-skin-text').hide();
              \$(this_dom).parents('li').find('input').fadeIn();
              \$(this_dom).parents('li').find('input').val(value);
          }
          var nikc_name='";
        // line 178
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 178, $this->source); })()), "nick_name", array()), "html", null, true);
        echo "';
          function save(this_dom){
              var value = \$(this_dom).parents('li').find('input').val();
              if(nikc_name==value){
                  return false;
              }
              \$.ajax('/reseller/dashboard/user-info/update',{
                  type:'post'
                  ,data:{nick_name:value,'_token':'";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("update_user_info"), "html", null, true);
        echo "'}
                  ,success:function (data) {
                      layer.msg(data.msg);
                      if(!data.status){
                          return false;
                      }
                      \$(this_dom).parents('li').find('input').hide();
                      \$(this_dom).parents('li').find('.info-skin-text').show();
                      \$(this_dom).parents('li').find('.info-skin-text').html(value);
                      \$('.edit').html('<i class=\"icon iconfont icon-czjl\" style=\"color: grey\"></i>');
                      nikc_name=value;
                  }
                  ,error:function () {
                      layer.msg('网络或系统异常，请稍候再试')
                  }
              });
          }


          /**
           * 验证数据
           */
          function verify_post_data() {
              // 验证规则
//            var mobilReg = /^1([38]\\d|4[57]|5[0-35-9]|7[06-8])\\d{8}\$/;
//            var emaiReg = /^(\\w)+(\\.\\w+)*@(\\w)+((\\.\\w{2,3}){1,3})\$/;
//            var qqReg =/^[1-9]\\d{4,10}\$/;
//
//            var contact_name=\$('#contact_name').val();
//
//            if(contact_name.length>40){
//                return '请输入正确的名字';
//            }
//            var contact_phone=\$('#contact_phone').val();
//            if(contact_phone && !mobilReg.test(contact_phone)){
//                return '请输入正确的手机号';
//            }
//            var contact_qq=\$('#contact_qq').val();
//            if(contact_qq && !qqReg.test(contact_qq)){
//                return '请输入正确的QQ号码';
//            }
//            var contact_mail=\$('#contact_mail').val();
//            if(contact_mail && !emaiReg.test(contact_mail)){
//                return '请输入正确的邮箱';
//            }
//            var contact_address=\$('#contact_address').val();
//            if(contact_address.length>250){
//                return '请输入正确的地址';
//            }

              var shop_name=\$('#shop_name').val();
              var shop_address=\$('#shop_address').val();
              if(!shop_name){
                  return '请输入正确的店铺名称';
              }
              if(!shop_address){
                  return '请输入正确的店铺地址';
              }
              return false;
          }

          \$('#save-contact').click(function () {
              var check=verify_post_data();
              if(check){
                  layer.msg(check);
                  return false;
              }

              \$.ajax('/reseller/dashboard/user-info/edit-contact-and-shop-info', {
                  type:'post'
                  ,data:{contact_name:\$('#contact_name').val()
                      ,contact_phone:\$('#contact_phone').val()
                      ,contact_mail:\$('#contact_mail').val()
                      ,contact_qq:\$('#contact_qq').val()
                      ,contact_address:\$('#contact_address').val()
                      ,shop_name:\$('#shop_name').val()
                      ,shop_address:\$('#shop_address').val()
                      ,'_token':'";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("update_user_info"), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Open/Dashboard/userInfo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 263,  334 => 186,  323 => 178,  289 => 147,  278 => 139,  260 => 123,  254 => 121,  252 => 120,  248 => 119,  237 => 111,  229 => 105,  223 => 101,  216 => 96,  214 => 95,  209 => 92,  207 => 91,  201 => 88,  192 => 81,  186 => 77,  179 => 72,  177 => 71,  172 => 68,  170 => 67,  164 => 64,  152 => 55,  137 => 43,  125 => 34,  112 => 23,  103 => 22,  82 => 9,  73 => 8,  60 => 6,  51 => 5,  41 => 1,  39 => 3,  37 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Reseller/Common/layout.twig' %}
{% set title = '狐豆便民中心-账户信息' %}
{% set user = app.user %}

{% block title %}
  {{ title }}
{% endblock %}
{% block css %}
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
{% endblock %}

{% block main_content %}
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
                <img id=\"head_img\" style=\"border-radius: 50%;\" src=\"{{ user.avatarUrl }}\" onerror=\"this.src='//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/img/default-head-portrait.jpg'\" />
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">昵称</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\">
              <span class=\"info-skin-text\">{{ user.nick_name }}</span>
              <input type=\"text\" name=\"\" value=\"\" placeholder=\"请输入\" class=\"layui-input f-fnsna\" style=\"display: none;\" />
            </div>
            <div class=\"info-skin-auxe\">
              <a href=\"javascript:void(0);\" class=\"edit\"> <i class=\"icon iconfont icon-czjl\" style=\"color: grey\"></i></a>
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
                    {{ user.getMobile(true) }}
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
                          {{ user.bind_email ? user.getEmail(true) : \"未绑定\" }}
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
              <span class=\"info-skin-text\">{{ user.type }}</span>
            </div>
          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">实名认证</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-auxe\">
              {{ user.real_name_status }}
              {% if user.real_name_status != 1 %}
                <a href=\"{{ path('identity_management_verify') }}\"> | <span class=\"\" >实名认证信息</span></a>
              {% endif %}
            </div>
          </div>
        </li>
      </ul>
    </div>


    <div class=\"title-block\">
      <h2 class=\"title-skin\">店铺信息</h2>
    </div>
    <div class=\"m-single\">
      <ul class=\"info-skin\">
        <li>
          <div class=\"info-skin-left\">店铺名称</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\" style=\"width: 250px;\">
              <input type=\"text\" name=\"\" id=\"shop_name\" value=\"{{ user.resellerAccount.shop_name|default(\"\") }}\" placeholder=\"店铺名称\" class=\"layui-input f-fnsna\" />
            </div>
          </div>
        </li>
        <li>
          <div class=\"info-skin-left\">店铺地址</div>
          <div class=\"info-skin-right\">
            <div class=\"info-skin-inline\" style=\"width: 600px;\">
              <input type=\"text\" name=\"\" id=\"shop_address\" value=\"{{ user.resellerAccount.shop_address|default(\"\")}}\" placeholder=\"请输入店铺地址\" class=\"layui-input f-fnsna\" />
            </div>
          </div>
        </li>
      </ul>
    </div>

    <div style=\"margin: 30px 0 0 150px;\">
      <button class=\"layui-btn f-fnsna\" id=\"save-contact\">保 存</button>
    </div>
  </div>

  <script type=\"text/javascript\">
//      upload_alios_img('#head_img','.user_head_portrait,#head_img',{});

      \$(function(){
          \$('.edit').click(function(){
              if(\$(this).text() !='完成'){
                  edit(this);
                  \$(this).text('完成');
              }else{
                  save(this);
              }
          });

          function edit(this_dom){
              var value = \$(this_dom).parents('li').find('.info-skin-text').html();
              \$(this_dom).parents('li').find('.info-skin-text').hide();
              \$(this_dom).parents('li').find('input').fadeIn();
              \$(this_dom).parents('li').find('input').val(value);
          }
          var nikc_name='{{ user.nick_name }}';
          function save(this_dom){
              var value = \$(this_dom).parents('li').find('input').val();
              if(nikc_name==value){
                  return false;
              }
              \$.ajax('/reseller/dashboard/user-info/update',{
                  type:'post'
                  ,data:{nick_name:value,'_token':'{{ csrf_token(\"update_user_info\") }}'}
                  ,success:function (data) {
                      layer.msg(data.msg);
                      if(!data.status){
                          return false;
                      }
                      \$(this_dom).parents('li').find('input').hide();
                      \$(this_dom).parents('li').find('.info-skin-text').show();
                      \$(this_dom).parents('li').find('.info-skin-text').html(value);
                      \$('.edit').html('<i class=\"icon iconfont icon-czjl\" style=\"color: grey\"></i>');
                      nikc_name=value;
                  }
                  ,error:function () {
                      layer.msg('网络或系统异常，请稍候再试')
                  }
              });
          }


          /**
           * 验证数据
           */
          function verify_post_data() {
              // 验证规则
//            var mobilReg = /^1([38]\\d|4[57]|5[0-35-9]|7[06-8])\\d{8}\$/;
//            var emaiReg = /^(\\w)+(\\.\\w+)*@(\\w)+((\\.\\w{2,3}){1,3})\$/;
//            var qqReg =/^[1-9]\\d{4,10}\$/;
//
//            var contact_name=\$('#contact_name').val();
//
//            if(contact_name.length>40){
//                return '请输入正确的名字';
//            }
//            var contact_phone=\$('#contact_phone').val();
//            if(contact_phone && !mobilReg.test(contact_phone)){
//                return '请输入正确的手机号';
//            }
//            var contact_qq=\$('#contact_qq').val();
//            if(contact_qq && !qqReg.test(contact_qq)){
//                return '请输入正确的QQ号码';
//            }
//            var contact_mail=\$('#contact_mail').val();
//            if(contact_mail && !emaiReg.test(contact_mail)){
//                return '请输入正确的邮箱';
//            }
//            var contact_address=\$('#contact_address').val();
//            if(contact_address.length>250){
//                return '请输入正确的地址';
//            }

              var shop_name=\$('#shop_name').val();
              var shop_address=\$('#shop_address').val();
              if(!shop_name){
                  return '请输入正确的店铺名称';
              }
              if(!shop_address){
                  return '请输入正确的店铺地址';
              }
              return false;
          }

          \$('#save-contact').click(function () {
              var check=verify_post_data();
              if(check){
                  layer.msg(check);
                  return false;
              }

              \$.ajax('/reseller/dashboard/user-info/edit-contact-and-shop-info', {
                  type:'post'
                  ,data:{contact_name:\$('#contact_name').val()
                      ,contact_phone:\$('#contact_phone').val()
                      ,contact_mail:\$('#contact_mail').val()
                      ,contact_qq:\$('#contact_qq').val()
                      ,contact_address:\$('#contact_address').val()
                      ,shop_name:\$('#shop_name').val()
                      ,shop_address:\$('#shop_address').val()
                      ,'_token':'{{ csrf_token(\"update_user_info\") }}'
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

{% endblock %}
", "Open/Dashboard/userInfo.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Open\\Dashboard\\userInfo.twig");
    }
}
