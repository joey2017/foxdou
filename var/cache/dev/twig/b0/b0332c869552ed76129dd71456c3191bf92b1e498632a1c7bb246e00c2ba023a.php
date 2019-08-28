<?php

/* Admin/UserDetail/SupplierPlatform/basic_info.twig */
class __TwigTemplate_13db977b8513c6535c15a6757591d44498826fef02e535a25a7aaae96fb055e1 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/SupplierPlatform/basic_info.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/SupplierPlatform/basic_info.twig"));

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

  <script src=\"/assets/admin/js/common.js\"></script>
  <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
  <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>
  <script src=\"/assets/common/js/ajaxRequest.js\"></script>
  <!--下拉列表-->
  <link rel=\"stylesheet\" href=\"/assets/admin/h/css/xui-select2.css\"/>
  <script type=\"text/javascript\" src=\"/assets/admin/h/js/xui-select2.js\"></script>

  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.md5.js\"></script>

  <style>
\t.image-view{float: left; width: 70px;height: 70px;margin-right: 10px; background: #BBB5B5;}
\t.sisi-btn-item {position: relative;float: left;}
\t.sisi-btn-item input{position: absolute;display: block; top: 0;left: 0;width: 70px;height: 70px; opacity: 0;}
\t.sisi-btn-item button{display: block;width: 70px;height: 70px;box-sizing: border-box;border: 2px dashed #E0E0E0;background: #FFFFFF;}
\t.sisi-btn-item button:hover{border-color: #CCCCCC;}
\t.sisi-btn-item span{display: block;width: 100%;height: 100%;font-size: 30px;line-height:60px;color: #CCCCCC;}
  </style>
  <script language=\"JavaScript\">
\t  //基本信息的修改和保存
\t  \$(function(){
\t\t  function edit(){
\t\t\t  \$('.inp-val').each(function(){
\t\t\t\t  var value = \$(this).html();
\t\t\t\t  \$(this).hide();
\t\t\t\t  \$('textarea').hide();
\t\t\t\t  \$(this).next('input').fadeIn();
\t\t\t\t  \$(this).next('input').val(value);
\t\t\t\t  \$(this).next('textarea').fadeIn();
\t\t\t\t  \$(this).next('textarea').html(value);

\t\t\t  });
\t\t  }
\t\t  function save(){
\t\t\t  \$('input').each(function(){
\t\t\t\t  var value = \$(this).val();
\t\t\t\t  \$(this).siblings('span.inp-val').html(value);
\t\t\t\t  \$(this).siblings('span.inp-val').show();
\t\t\t\t  \$(this).hide();

\t\t\t  });
\t\t\t  \$('.xui-select2 li').each(function(){
\t\t\t\t  var value = \$(this).text();
\t\t\t\t  \$(this).parents('.detail-content').find('span').html(value);
\t\t\t\t  \$(this).parents('.detail-content').find('span').show();
\t\t\t\t  \$(this).parents('.xui-select2').hide();

\t\t\t  });
\t\t\t  \$('textarea').each(function(){
\t\t\t\t  var value = \$(this).val();
\t\t\t\t  \$(this).siblings('span.inp-val').html(value);
\t\t\t\t  \$(this).siblings('span.inp-val').show();
\t\t\t\t  \$(this).hide();
\t\t\t  });
\t\t  }
\t\t  \$('#edit').click(function(){
\t\t\t  var htmlText = \$('#edit').html();
\t\t\t  if(htmlText == '编辑'){
\t\t\t\t  edit();
\t\t\t\t  xui.select2();
\t\t\t\t  \$('#edit').html('保存');
\t\t\t  }else{
\t\t\t\t  save();
\t\t\t\t  \$('#edit').html('编辑');
\t\t\t  }
\t\t  });
\t  });

\t  //上传头像
\t  \$(function () {
\t\t  \$(\".uploadImage\").on(\"change\", function(){
\t\t\t  // 获取文件列表
\t\t\t  var files = !!this.files ? this.files : [];
\t\t\t  // 如果没有选择任何文件,或者没有FileReader支持,回调
\t\t\t  if (!files.length || !window.FileReader) return;
\t\t\t  // 能选择的文件只能是图片格式
\t\t\t  if (/^image/.test( files[0].type)){
\t\t\t\t  // 声明一个新的FileReader实例
\t\t\t\t  var reader = new FileReader();
\t\t\t\t  // 作为一个DataURL读取本地文件
\t\t\t\t  reader.readAsDataURL(files[0]);
\t\t\t\t  // 当加载时,图像数据设置为div的背景
\t\t\t\t  reader.onloadend = function(){
\t\t\t\t\t  \$(\".image-view\").css(\"background\", \"url(\"+this.result+\")\");
\t\t\t\t\t  \$(\".image-view\").css(\"background-position\", \"center\");
\t\t\t\t\t  \$(\".image-view\").css(\"background-size\", \"100% 100%\");
\t\t\t\t  }
\t\t\t  }
\t\t  });
\t  });
  </script>
</head>

<body>
<div class=\"main-box\">
  <ul class=\"h-tab\">
\t<li class=\"tab-this\"><a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_supplier_platform_basic_info", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 108, $this->source); })()), "user_id", array()))), "html", null, true);
        echo "\">基本信息</a></li>
\t<li><a href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_supplier_platform_contact", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 109, $this->source); })()), "user_id", array()))), "html", null, true);
        echo "\">联系信息</a></li>
  </ul>
  <div class=\"h-details-box\">
\t<ul class=\"h-details clearfloat\">
\t  <li>
\t\t<div class=\"details-title\">供货商名称</div>
\t\t<div class=\"detail-content\">
\t\t  <div class=\"h-input-inline\">
\t\t\t<span class=\"h-input-text inp-val\">";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 117, $this->source); })()), "name", array()), "html", null, true);
        echo "</span>
\t\t  </div>
\t\t</div>
\t  </li>
\t  <li>
\t\t<div class=\"details-title\">供货商平台余额</div>
\t\t<div class=\"detail-content\">
\t\t  <div class=\"h-input-inline\">
\t\t\t<span class=\"h-input-text inp-val\">";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 125, $this->source); })()), "balance", array()), "html", null, true);
        echo "</span>
\t\t  </div>
\t\t</div>
\t  </li>
\t  <li>
\t\t<div class=\"details-title\">供货时间</div>
\t\t<div class=\"detail-content\">
\t\t  <div class=\"h-input-inline\">
\t\t\t<span class=\"h-input-text inp-val\">每天下午";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 133, $this->source); })()), "sell_time", array()), "html", null, true);
        echo "</span>
\t\t  </div>
\t\t</div>
\t  </li>
\t  <li>
\t\t<div class=\"details-title\">等级</div>
\t\t<div class=\"detail-content\">
\t\t  <div class=\"h-input-inline\">
\t\t\t<span class=\"h-input-text inp-val\">";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 141, $this->source); })()), "level", array()), "html", null, true);
        echo "</span>
\t\t  </div>
\t\t</div>
\t  </li>
\t  <li>
\t\t<div class=\"details-title\">审核</div>
\t\t<div class=\"detail-content\">
\t\t  <div class=\"h-input-inline\">
\t\t\t<span class=\"h-input-text inp-val\">";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 149, $this->source); })()), "status", array()), "html", null, true);
        echo "</span>
\t\t  </div>
\t\t</div>
\t  </li>
\t  <li>
\t\t<div class=\"details-title\">抵押余额</div>
\t\t<div class=\"detail-content\">
\t\t  <div class=\"h-input-inline\">
\t\t\t<span class=\"h-input-text inp-val\">";
        // line 157
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 157, $this->source); })()), "cash_pledge", array()), "html", null, true);
        echo "</span>
\t\t  </div>
\t\t</div>
\t  </li>
\t  <li>
\t\t<div class=\"details-title\">数字签名</div>
\t\t<div class=\"detail-content\">
\t\t  <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">
                <span class=\"app-secret\" style=\"\"></span>
                <a class=\"app-secret-none\" data-status=\"hidden\" style=\"color: #0294E8\">显示</a>
            </span>
\t\t  </div>
\t\t</div>
\t  </li>
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
        return "Admin/UserDetail/SupplierPlatform/basic_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 157,  197 => 149,  186 => 141,  175 => 133,  164 => 125,  153 => 117,  142 => 109,  138 => 108,  29 => 1,);
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

  <script src=\"/assets/admin/js/common.js\"></script>
  <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
  <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>
  <script src=\"/assets/common/js/ajaxRequest.js\"></script>
  <!--下拉列表-->
  <link rel=\"stylesheet\" href=\"/assets/admin/h/css/xui-select2.css\"/>
  <script type=\"text/javascript\" src=\"/assets/admin/h/js/xui-select2.js\"></script>

  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.md5.js\"></script>

  <style>
\t.image-view{float: left; width: 70px;height: 70px;margin-right: 10px; background: #BBB5B5;}
\t.sisi-btn-item {position: relative;float: left;}
\t.sisi-btn-item input{position: absolute;display: block; top: 0;left: 0;width: 70px;height: 70px; opacity: 0;}
\t.sisi-btn-item button{display: block;width: 70px;height: 70px;box-sizing: border-box;border: 2px dashed #E0E0E0;background: #FFFFFF;}
\t.sisi-btn-item button:hover{border-color: #CCCCCC;}
\t.sisi-btn-item span{display: block;width: 100%;height: 100%;font-size: 30px;line-height:60px;color: #CCCCCC;}
  </style>
  <script language=\"JavaScript\">
\t  //基本信息的修改和保存
\t  \$(function(){
\t\t  function edit(){
\t\t\t  \$('.inp-val').each(function(){
\t\t\t\t  var value = \$(this).html();
\t\t\t\t  \$(this).hide();
\t\t\t\t  \$('textarea').hide();
\t\t\t\t  \$(this).next('input').fadeIn();
\t\t\t\t  \$(this).next('input').val(value);
\t\t\t\t  \$(this).next('textarea').fadeIn();
\t\t\t\t  \$(this).next('textarea').html(value);

\t\t\t  });
\t\t  }
\t\t  function save(){
\t\t\t  \$('input').each(function(){
\t\t\t\t  var value = \$(this).val();
\t\t\t\t  \$(this).siblings('span.inp-val').html(value);
\t\t\t\t  \$(this).siblings('span.inp-val').show();
\t\t\t\t  \$(this).hide();

\t\t\t  });
\t\t\t  \$('.xui-select2 li').each(function(){
\t\t\t\t  var value = \$(this).text();
\t\t\t\t  \$(this).parents('.detail-content').find('span').html(value);
\t\t\t\t  \$(this).parents('.detail-content').find('span').show();
\t\t\t\t  \$(this).parents('.xui-select2').hide();

\t\t\t  });
\t\t\t  \$('textarea').each(function(){
\t\t\t\t  var value = \$(this).val();
\t\t\t\t  \$(this).siblings('span.inp-val').html(value);
\t\t\t\t  \$(this).siblings('span.inp-val').show();
\t\t\t\t  \$(this).hide();
\t\t\t  });
\t\t  }
\t\t  \$('#edit').click(function(){
\t\t\t  var htmlText = \$('#edit').html();
\t\t\t  if(htmlText == '编辑'){
\t\t\t\t  edit();
\t\t\t\t  xui.select2();
\t\t\t\t  \$('#edit').html('保存');
\t\t\t  }else{
\t\t\t\t  save();
\t\t\t\t  \$('#edit').html('编辑');
\t\t\t  }
\t\t  });
\t  });

\t  //上传头像
\t  \$(function () {
\t\t  \$(\".uploadImage\").on(\"change\", function(){
\t\t\t  // 获取文件列表
\t\t\t  var files = !!this.files ? this.files : [];
\t\t\t  // 如果没有选择任何文件,或者没有FileReader支持,回调
\t\t\t  if (!files.length || !window.FileReader) return;
\t\t\t  // 能选择的文件只能是图片格式
\t\t\t  if (/^image/.test( files[0].type)){
\t\t\t\t  // 声明一个新的FileReader实例
\t\t\t\t  var reader = new FileReader();
\t\t\t\t  // 作为一个DataURL读取本地文件
\t\t\t\t  reader.readAsDataURL(files[0]);
\t\t\t\t  // 当加载时,图像数据设置为div的背景
\t\t\t\t  reader.onloadend = function(){
\t\t\t\t\t  \$(\".image-view\").css(\"background\", \"url(\"+this.result+\")\");
\t\t\t\t\t  \$(\".image-view\").css(\"background-position\", \"center\");
\t\t\t\t\t  \$(\".image-view\").css(\"background-size\", \"100% 100%\");
\t\t\t\t  }
\t\t\t  }
\t\t  });
\t  });
  </script>
</head>

<body>
<div class=\"main-box\">
  <ul class=\"h-tab\">
\t<li class=\"tab-this\"><a href=\"{{ path('admin_user_details_supplier_platform_basic_info',{id:user.user_id}) }}\">基本信息</a></li>
\t<li><a href=\"{{ path('admin_user_details_supplier_platform_contact',{id:user.user_id}) }}\">联系信息</a></li>
  </ul>
  <div class=\"h-details-box\">
\t<ul class=\"h-details clearfloat\">
\t  <li>
\t\t<div class=\"details-title\">供货商名称</div>
\t\t<div class=\"detail-content\">
\t\t  <div class=\"h-input-inline\">
\t\t\t<span class=\"h-input-text inp-val\">{{ user.name }}</span>
\t\t  </div>
\t\t</div>
\t  </li>
\t  <li>
\t\t<div class=\"details-title\">供货商平台余额</div>
\t\t<div class=\"detail-content\">
\t\t  <div class=\"h-input-inline\">
\t\t\t<span class=\"h-input-text inp-val\">{{ user.balance }}</span>
\t\t  </div>
\t\t</div>
\t  </li>
\t  <li>
\t\t<div class=\"details-title\">供货时间</div>
\t\t<div class=\"detail-content\">
\t\t  <div class=\"h-input-inline\">
\t\t\t<span class=\"h-input-text inp-val\">每天下午{{ user.sell_time }}</span>
\t\t  </div>
\t\t</div>
\t  </li>
\t  <li>
\t\t<div class=\"details-title\">等级</div>
\t\t<div class=\"detail-content\">
\t\t  <div class=\"h-input-inline\">
\t\t\t<span class=\"h-input-text inp-val\">{{ user.level }}</span>
\t\t  </div>
\t\t</div>
\t  </li>
\t  <li>
\t\t<div class=\"details-title\">审核</div>
\t\t<div class=\"detail-content\">
\t\t  <div class=\"h-input-inline\">
\t\t\t<span class=\"h-input-text inp-val\">{{ user.status }}</span>
\t\t  </div>
\t\t</div>
\t  </li>
\t  <li>
\t\t<div class=\"details-title\">抵押余额</div>
\t\t<div class=\"detail-content\">
\t\t  <div class=\"h-input-inline\">
\t\t\t<span class=\"h-input-text inp-val\">{{ user.cash_pledge }}</span>
\t\t  </div>
\t\t</div>
\t  </li>
\t  <li>
\t\t<div class=\"details-title\">数字签名</div>
\t\t<div class=\"detail-content\">
\t\t  <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">
                <span class=\"app-secret\" style=\"\"></span>
                <a class=\"app-secret-none\" data-status=\"hidden\" style=\"color: #0294E8\">显示</a>
            </span>
\t\t  </div>
\t\t</div>
\t  </li>
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
", "Admin/UserDetail/SupplierPlatform/basic_info.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\UserDetail\\SupplierPlatform\\basic_info.twig");
    }
}
