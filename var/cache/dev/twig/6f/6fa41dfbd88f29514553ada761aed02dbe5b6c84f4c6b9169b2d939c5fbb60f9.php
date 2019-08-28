<?php

/* Admin/UserDetail/SupplierPlatform/contact.twig */
class __TwigTemplate_6b1c12a884f06c455202b9156e1e91a3206b4936ba186b1a2f256408488c7d65 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/SupplierPlatform/contact.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/SupplierPlatform/contact.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  <title>基本管理-基本信息-联系信息</title>
\t<link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
\t<script type=\"text/javascript\" src=\"/assets/admin/js/jquery.min.js\"></script>

  <style>
\t.image-view{float: left; width: 70px;height: 70px;margin-right: 10px; background: #BBB5B5;}
\t.sisi-btn-item {position: relative;float: left;}
\t.sisi-btn-item input{position: absolute;display: block; top: 0;left: 0;width: 70px;height: 70px; opacity: 0;}
\t.sisi-btn-item button{display: block;width: 70px;height: 70px;box-sizing: border-box;border: 2px dashed #E0E0E0;background: #FFFFFF;}
\t.sisi-btn-item button:hover{border-color: #CCCCCC;}
\t.sisi-btn-item span{display: block;width: 100%;height: 100%;font-size: 30px;line-height:60px;color: #CCCCCC;}
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

              });
          }
          function save(){
              \$('input').each(function(){
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
                  \$('#edit').html('保存');
              }else{
                  save();
                  \$('#edit').html('编辑');
              }
          });
      });
  </script>
</head>

<body>
<div class=\"main-box\">
  <ul class=\"h-tab\">
\t<li><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_supplier_platform_basic_info", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 57, $this->source); })()), "user_id", array()))), "html", null, true);
        echo "\">基本信息</a></li>
\t<li class=\"tab-this\"><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_supplier_platform_contact", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 58, $this->source); })()), "user_id", array()))), "html", null, true);
        echo "\">联系信息</a></li>
  </ul>
  <div class=\"h-details-box\">
\t<ul class=\"h-details clearfloat\">
\t\t<li>
\t\t\t<div class=\"details-title\">联系人</div>
\t\t\t<div class=\"detail-content\">
\t\t\t\t<div class=\"h-input-inline\">
\t\t\t\t\t<span class=\"h-input-text inp-val\">";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 66, $this->source); })()), "contact_name", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t<input type=\"text\" name=\"\" value=\"\" class=\"h-input-ing\" style=\"display: none;\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</li>
\t\t<li>
\t\t\t<div class=\"details-title\">联系手机号码</div>
\t\t\t<div class=\"detail-content\">
\t\t\t\t<div class=\"h-input-inline\">
\t\t\t\t\t<span class=\"h-input-text inp-val\">";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 75, $this->source); })()), "contact_phone", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t<input type=\"text\" name=\"\" value=\"\" class=\"h-input-ing\" style=\"display: none;\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</li>
\t\t<li>
\t\t\t<div class=\"details-title\">联系QQ</div>
\t\t\t<div class=\"detail-content\">
\t\t\t\t<div class=\"h-input-inline\">
\t\t\t\t\t<span class=\"h-input-text inp-val\">";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 84, $this->source); })()), "contact_qq", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t<input type=\"text\" name=\"\" value=\"\" class=\"h-input-ing\" style=\"display: none;\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</li>
\t\t<li>
\t\t\t<div class=\"details-title\">联系邮箱</div>
\t\t\t<div class=\"detail-content\">
\t\t\t\t<div class=\"h-input-inline\">
\t\t\t\t\t<span class=\"h-input-text inp-val\">";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 93, $this->source); })()), "contact_mail", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t<input type=\"text\" name=\"\" value=\"\" class=\"h-input-ing\" style=\"display: none;\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</li>
\t\t<li>
\t\t\t<div class=\"details-title\">地址</div>
\t\t\t<div class=\"detail-content\">
\t\t\t\t<div class=\"h-input-inline\">
\t\t\t\t\t<span class=\"h-input-text inp-val\">";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 102, $this->source); })()), "contact_address", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t<input type=\"text\" name=\"\" value=\"\" class=\"h-input-ing\" style=\"display: none;\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</li>
\t</ul>
  </div>
</div>

<script type=\"text/javascript\">
\tlayui.use(['element', 'form','layer'], function(){
\t\tvar element = layui.element(); //导航的hover效果、二级菜单等功能，需要依赖element模块
\t\tvar form = layui.form();
\t\tvar layer = layui.layer;
\t});

\t\$('.app-secret-none').click(function () {
\t\tvar dom=\$(this);
\t\tvar domstatus=\$(this).attr('data-status');
\t\tif(domstatus=='hidden'){
\t\t\tlayer.prompt({title: '请输入密码验证身份', formType:1,type:1}, function(pass, index){
\t\t\t\tvar encrypt = new JSEncrypt();
\t\t\t\tencrypt.setPublicKey(\$(\"#rsa-pubkey\").val());
\t\t\t\tvar password=encrypt.encrypt(pass.trim());
\t\t\t\t\$.post('',
                    {},function(data){
\t\t\t\t\tif(data.status){
\t\t\t\t\t\t\$('.app-secret').html(data.msg+'　');
\t\t\t\t\t\t\$('.app-secret-none').html('隐藏');
\t\t\t\t\t\tdom.attr('data-status','show');
\t\t\t\t\t\tlayer.close(index);
\t\t\t\t\t}else{
\t\t\t\t\t\tlayer.alert(data.msg);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t}else{
\t\t\t\$('.app-secret').html('');
\t\t\t\$('.app-secret-none').html('显示');
\t\t\tdom.attr('data-status','hidden');
\t\t}
\t});
</script>


</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/UserDetail/SupplierPlatform/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 102,  138 => 93,  126 => 84,  114 => 75,  102 => 66,  91 => 58,  87 => 57,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  <title>基本管理-基本信息-联系信息</title>
\t<link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
\t<script type=\"text/javascript\" src=\"/assets/admin/js/jquery.min.js\"></script>

  <style>
\t.image-view{float: left; width: 70px;height: 70px;margin-right: 10px; background: #BBB5B5;}
\t.sisi-btn-item {position: relative;float: left;}
\t.sisi-btn-item input{position: absolute;display: block; top: 0;left: 0;width: 70px;height: 70px; opacity: 0;}
\t.sisi-btn-item button{display: block;width: 70px;height: 70px;box-sizing: border-box;border: 2px dashed #E0E0E0;background: #FFFFFF;}
\t.sisi-btn-item button:hover{border-color: #CCCCCC;}
\t.sisi-btn-item span{display: block;width: 100%;height: 100%;font-size: 30px;line-height:60px;color: #CCCCCC;}
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

              });
          }
          function save(){
              \$('input').each(function(){
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
                  \$('#edit').html('保存');
              }else{
                  save();
                  \$('#edit').html('编辑');
              }
          });
      });
  </script>
</head>

<body>
<div class=\"main-box\">
  <ul class=\"h-tab\">
\t<li><a href=\"{{ path('admin_user_details_supplier_platform_basic_info',{id:user.user_id}) }}\">基本信息</a></li>
\t<li class=\"tab-this\"><a href=\"{{ path('admin_user_details_supplier_platform_contact',{id:user.user_id}) }}\">联系信息</a></li>
  </ul>
  <div class=\"h-details-box\">
\t<ul class=\"h-details clearfloat\">
\t\t<li>
\t\t\t<div class=\"details-title\">联系人</div>
\t\t\t<div class=\"detail-content\">
\t\t\t\t<div class=\"h-input-inline\">
\t\t\t\t\t<span class=\"h-input-text inp-val\">{{ user.contact_name }}</span>
\t\t\t\t\t<input type=\"text\" name=\"\" value=\"\" class=\"h-input-ing\" style=\"display: none;\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</li>
\t\t<li>
\t\t\t<div class=\"details-title\">联系手机号码</div>
\t\t\t<div class=\"detail-content\">
\t\t\t\t<div class=\"h-input-inline\">
\t\t\t\t\t<span class=\"h-input-text inp-val\">{{ user.contact_phone }}</span>
\t\t\t\t\t<input type=\"text\" name=\"\" value=\"\" class=\"h-input-ing\" style=\"display: none;\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</li>
\t\t<li>
\t\t\t<div class=\"details-title\">联系QQ</div>
\t\t\t<div class=\"detail-content\">
\t\t\t\t<div class=\"h-input-inline\">
\t\t\t\t\t<span class=\"h-input-text inp-val\">{{ user.contact_qq }}</span>
\t\t\t\t\t<input type=\"text\" name=\"\" value=\"\" class=\"h-input-ing\" style=\"display: none;\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</li>
\t\t<li>
\t\t\t<div class=\"details-title\">联系邮箱</div>
\t\t\t<div class=\"detail-content\">
\t\t\t\t<div class=\"h-input-inline\">
\t\t\t\t\t<span class=\"h-input-text inp-val\">{{ user.contact_mail }}</span>
\t\t\t\t\t<input type=\"text\" name=\"\" value=\"\" class=\"h-input-ing\" style=\"display: none;\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</li>
\t\t<li>
\t\t\t<div class=\"details-title\">地址</div>
\t\t\t<div class=\"detail-content\">
\t\t\t\t<div class=\"h-input-inline\">
\t\t\t\t\t<span class=\"h-input-text inp-val\">{{ user.contact_address }}</span>
\t\t\t\t\t<input type=\"text\" name=\"\" value=\"\" class=\"h-input-ing\" style=\"display: none;\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</li>
\t</ul>
  </div>
</div>

<script type=\"text/javascript\">
\tlayui.use(['element', 'form','layer'], function(){
\t\tvar element = layui.element(); //导航的hover效果、二级菜单等功能，需要依赖element模块
\t\tvar form = layui.form();
\t\tvar layer = layui.layer;
\t});

\t\$('.app-secret-none').click(function () {
\t\tvar dom=\$(this);
\t\tvar domstatus=\$(this).attr('data-status');
\t\tif(domstatus=='hidden'){
\t\t\tlayer.prompt({title: '请输入密码验证身份', formType:1,type:1}, function(pass, index){
\t\t\t\tvar encrypt = new JSEncrypt();
\t\t\t\tencrypt.setPublicKey(\$(\"#rsa-pubkey\").val());
\t\t\t\tvar password=encrypt.encrypt(pass.trim());
\t\t\t\t\$.post('',
                    {},function(data){
\t\t\t\t\tif(data.status){
\t\t\t\t\t\t\$('.app-secret').html(data.msg+'　');
\t\t\t\t\t\t\$('.app-secret-none').html('隐藏');
\t\t\t\t\t\tdom.attr('data-status','show');
\t\t\t\t\t\tlayer.close(index);
\t\t\t\t\t}else{
\t\t\t\t\t\tlayer.alert(data.msg);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t}else{
\t\t\t\$('.app-secret').html('');
\t\t\t\$('.app-secret-none').html('显示');
\t\t\tdom.attr('data-status','hidden');
\t\t}
\t});
</script>


</body>
</html>
", "Admin/UserDetail/SupplierPlatform/contact.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\UserDetail\\SupplierPlatform\\contact.twig");
    }
}
