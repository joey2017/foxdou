<?php

/* Admin/UserDetail/OpenPlatform/basic_info.twig */
class __TwigTemplate_dbf6a0f8f4bc8472b722a51ba021ca55bed49a8d86c40ac8e1e0270e53e2717a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/OpenPlatform/basic_info.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/OpenPlatform/basic_info.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  <title>基本管理-基本信息-基本信息</title>
  <link rel=\"stylesheet\" href=\"/assets/admin/js/layui/css/layui.css\" />
  <script src=\"/assets/admin/js/layui/layui.js\"></script>
  <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
  <script type=\"text/javascript\" src=\"/assets/admin/js/jquery.min.js\"></script>
  <!--下拉列表-->
  <link rel=\"stylesheet\" href=\"/assets/admin/h/css/xui-select2.css\"/>
  <script type=\"text/javascript\" src=\"/assets/admin/h/js/xui-select2.js\"></script>

  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.md5.js\"></script>

  <style>
    .image-view{float: left; width: 70px;height: 70px;margin-right: 10px; background: #BBB5B5;}
    .sisi-btn-item {position: relative;float: left;}
    .sisi-btn-item input{position: absolute;display: block; top: 0;left: 0;width: 70px;height: 70px; opacity: 0;}
    .sisi-btn-item button{display: block;width: 70px;height: 70px;box-sizing: border-box;border: 2px dashed #E0E0E0;background: #FFFFFF;}
    .sisi-btn-item button:hover{border-color: #CCCCCC;}
    .sisi-btn-item span{display: block;width: 100%;height: 100%;font-size: 30px;line-height:60px;color: #CCCCCC;}
  </style>
  <script language=\"JavaScript\">
      //基本信息的修改和保存
      \$(function(){
          function edit(){
              \$('.inp-val').each(function(){
                  var value = \$(this).html();
                  \$(this).hide();
                  \$('textarea').hide();
                  \$(this).next('input').fadeIn();
                  \$(this).next('input').val(value);
                  \$(this).next('textarea').fadeIn();
                  \$(this).next('textarea').html(value);

              });
          }
          function save(){
              \$('input').each(function(){
                  var value = \$(this).val();
                  \$(this).siblings('span.inp-val').html(value);
                  \$(this).siblings('span.inp-val').show();
                  \$(this).hide();

              });
              \$('.xui-select2 li').each(function(){
                  var value = \$(this).text();
                  \$(this).parents('.detail-content').find('span').html(value);
                  \$(this).parents('.detail-content').find('span').show();
                  \$(this).parents('.xui-select2').hide();

              });
              \$('textarea').each(function(){
                  var value = \$(this).val();
                  \$(this).siblings('span.inp-val').html(value);
                  \$(this).siblings('span.inp-val').show();
                  \$(this).hide();
              });
          }
          \$('#edit').click(function(){
              var htmlText = \$('#edit').html();
              if(htmlText == '编辑'){
                  edit();
                  xui.select2();
                  \$('#edit').html('保存');
              }else{
                  save();
                  \$('#edit').html('编辑');
              }
          });
      });

      //上传头像
      \$(function () {
          \$(\".uploadImage\").on(\"change\", function(){
              // 获取文件列表
              var files = !!this.files ? this.files : [];
              // 如果没有选择任何文件,或者没有FileReader支持,回调
              if (!files.length || !window.FileReader) return;
              // 能选择的文件只能是图片格式
              if (/^image/.test( files[0].type)){
                  // 声明一个新的FileReader实例
                  var reader = new FileReader();
                  // 作为一个DataURL读取本地文件
                  reader.readAsDataURL(files[0]);
                  // 当加载时,图像数据设置为div的背景
                  reader.onloadend = function(){
                      \$(\".image-view\").css(\"background\", \"url(\"+this.result+\")\");
                      \$(\".image-view\").css(\"background-position\", \"center\");
                      \$(\".image-view\").css(\"background-size\", \"100% 100%\");
                  }
              }
          });
      });
  </script>

</head>

<body>
<div class=\"main-box\">
  <ul class=\"h-tab\">
    <li class=\"tab-this\"><a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_open_platform_basic_info", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 105, $this->source); })()), "user_id", array()))), "html", null, true);
        echo "\">基本信息</a></li>
    <li><a href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_open_platform_contact", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 106, $this->source); })()), "user_id", array()))), "html", null, true);
        echo "\">联系信息</a></li>
  </ul>
  <div class=\"h-details-box\">
    <ul class=\"h-details clearfloat\">
      <li>
        <div class=\"details-title\">余额</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 114, $this->source); })()), "balance", array()), "html", null, true);
        echo "</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">SIGN KEY</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">
                <span class=\"app-secret\"></span>
                <a class=\"app-secret-none\" data-status=\"hidden\" style=\"color: #0294E8\">显示</a>
            </span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">级别</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 133, $this->source); })()), "level", array()), "html", null, true);
        echo "</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">审核</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 141, $this->source); })()), "status", array()), "html", null, true);
        echo "</span>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>


<script type=\"text/javascript\">
    layui.use(['element', 'form','layer'], function(){
        var element = layui.element(); //导航的hover效果、二级菜单等功能，需要依赖element模块
        var form = layui.form();
        var layer = layui.layer;
    });

    \$('.app-secret-none').click(function () {
        var dom=\$(this);
        var domstatus=\$(this).attr('data-status');
        if(domstatus=='hidden'){
            layer.prompt({title: '请输入密码验证身份', formType:1,type:1}, function(pass, index){
                var encrypt = new JSEncrypt();
                encrypt.setPublicKey(\$(\"#rsa-pubkey\").val());
                var password=encrypt.encrypt(pass.trim());
                \$.post('";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_open_platform_get_key", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 165, $this->source); })()), "user_id", array()))), "html", null, true);
        echo "',{
                    '_token':'";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_user_details_open_platform_get_key"), "html", null, true);
        echo "',
                    password:password
                },function(data){
                    if(data.status){
                        \$('.app-secret').html(data.msg+'　');
                        \$('.app-secret-none').html('隐藏');
                        dom.attr('data-status','show');
                        layer.close(index);
                    }else{
                        layer.alert(data.msg);
                    }
                });
            });
        }else{
            \$('.app-secret').html('');
            \$('.app-secret-none').html('显示');
            dom.attr('data-status','hidden');
        }


    });
</script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/UserDetail/OpenPlatform/basic_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 166,  210 => 165,  183 => 141,  172 => 133,  150 => 114,  139 => 106,  135 => 105,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  <title>基本管理-基本信息-基本信息</title>
  <link rel=\"stylesheet\" href=\"/assets/admin/js/layui/css/layui.css\" />
  <script src=\"/assets/admin/js/layui/layui.js\"></script>
  <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
  <script type=\"text/javascript\" src=\"/assets/admin/js/jquery.min.js\"></script>
  <!--下拉列表-->
  <link rel=\"stylesheet\" href=\"/assets/admin/h/css/xui-select2.css\"/>
  <script type=\"text/javascript\" src=\"/assets/admin/h/js/xui-select2.js\"></script>

  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.md5.js\"></script>

  <style>
    .image-view{float: left; width: 70px;height: 70px;margin-right: 10px; background: #BBB5B5;}
    .sisi-btn-item {position: relative;float: left;}
    .sisi-btn-item input{position: absolute;display: block; top: 0;left: 0;width: 70px;height: 70px; opacity: 0;}
    .sisi-btn-item button{display: block;width: 70px;height: 70px;box-sizing: border-box;border: 2px dashed #E0E0E0;background: #FFFFFF;}
    .sisi-btn-item button:hover{border-color: #CCCCCC;}
    .sisi-btn-item span{display: block;width: 100%;height: 100%;font-size: 30px;line-height:60px;color: #CCCCCC;}
  </style>
  <script language=\"JavaScript\">
      //基本信息的修改和保存
      \$(function(){
          function edit(){
              \$('.inp-val').each(function(){
                  var value = \$(this).html();
                  \$(this).hide();
                  \$('textarea').hide();
                  \$(this).next('input').fadeIn();
                  \$(this).next('input').val(value);
                  \$(this).next('textarea').fadeIn();
                  \$(this).next('textarea').html(value);

              });
          }
          function save(){
              \$('input').each(function(){
                  var value = \$(this).val();
                  \$(this).siblings('span.inp-val').html(value);
                  \$(this).siblings('span.inp-val').show();
                  \$(this).hide();

              });
              \$('.xui-select2 li').each(function(){
                  var value = \$(this).text();
                  \$(this).parents('.detail-content').find('span').html(value);
                  \$(this).parents('.detail-content').find('span').show();
                  \$(this).parents('.xui-select2').hide();

              });
              \$('textarea').each(function(){
                  var value = \$(this).val();
                  \$(this).siblings('span.inp-val').html(value);
                  \$(this).siblings('span.inp-val').show();
                  \$(this).hide();
              });
          }
          \$('#edit').click(function(){
              var htmlText = \$('#edit').html();
              if(htmlText == '编辑'){
                  edit();
                  xui.select2();
                  \$('#edit').html('保存');
              }else{
                  save();
                  \$('#edit').html('编辑');
              }
          });
      });

      //上传头像
      \$(function () {
          \$(\".uploadImage\").on(\"change\", function(){
              // 获取文件列表
              var files = !!this.files ? this.files : [];
              // 如果没有选择任何文件,或者没有FileReader支持,回调
              if (!files.length || !window.FileReader) return;
              // 能选择的文件只能是图片格式
              if (/^image/.test( files[0].type)){
                  // 声明一个新的FileReader实例
                  var reader = new FileReader();
                  // 作为一个DataURL读取本地文件
                  reader.readAsDataURL(files[0]);
                  // 当加载时,图像数据设置为div的背景
                  reader.onloadend = function(){
                      \$(\".image-view\").css(\"background\", \"url(\"+this.result+\")\");
                      \$(\".image-view\").css(\"background-position\", \"center\");
                      \$(\".image-view\").css(\"background-size\", \"100% 100%\");
                  }
              }
          });
      });
  </script>

</head>

<body>
<div class=\"main-box\">
  <ul class=\"h-tab\">
    <li class=\"tab-this\"><a href=\"{{ path('admin_user_details_open_platform_basic_info',{id:user.user_id}) }}\">基本信息</a></li>
    <li><a href=\"{{ path('admin_user_details_open_platform_contact',{id:user.user_id}) }}\">联系信息</a></li>
  </ul>
  <div class=\"h-details-box\">
    <ul class=\"h-details clearfloat\">
      <li>
        <div class=\"details-title\">余额</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">{{ user.balance }}</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">SIGN KEY</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">
                <span class=\"app-secret\"></span>
                <a class=\"app-secret-none\" data-status=\"hidden\" style=\"color: #0294E8\">显示</a>
            </span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">级别</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">{{ user.level }}</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">审核</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">{{ user.status }}</span>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>


<script type=\"text/javascript\">
    layui.use(['element', 'form','layer'], function(){
        var element = layui.element(); //导航的hover效果、二级菜单等功能，需要依赖element模块
        var form = layui.form();
        var layer = layui.layer;
    });

    \$('.app-secret-none').click(function () {
        var dom=\$(this);
        var domstatus=\$(this).attr('data-status');
        if(domstatus=='hidden'){
            layer.prompt({title: '请输入密码验证身份', formType:1,type:1}, function(pass, index){
                var encrypt = new JSEncrypt();
                encrypt.setPublicKey(\$(\"#rsa-pubkey\").val());
                var password=encrypt.encrypt(pass.trim());
                \$.post('{{ path('admin_user_details_open_platform_get_key',{id:user.user_id}) }}',{
                    '_token':'{{ csrf_token('admin_user_details_open_platform_get_key') }}',
                    password:password
                },function(data){
                    if(data.status){
                        \$('.app-secret').html(data.msg+'　');
                        \$('.app-secret-none').html('隐藏');
                        dom.attr('data-status','show');
                        layer.close(index);
                    }else{
                        layer.alert(data.msg);
                    }
                });
            });
        }else{
            \$('.app-secret').html('');
            \$('.app-secret-none').html('显示');
            dom.attr('data-status','hidden');
        }


    });
</script>
</body>
</html>
", "Admin/UserDetail/OpenPlatform/basic_info.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\UserDetail\\OpenPlatform\\basic_info.twig");
    }
}
