<?php

/* Admin/UserDetail/ResellerPlatform/basic_info.twig */
class __TwigTemplate_ddaefa5761810b013d0712b9fe0fb8e7f07bf904227db462803f02e902d2d3f9 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/ResellerPlatform/basic_info.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/ResellerPlatform/basic_info.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  <title>基本管理-基本信息-基本信息</title>
  <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
  <script type=\"text/javascript\" src=\"/assets/admin/js/jquery.min.js\"></script>
  <!--下拉列表-->
  <link rel=\"stylesheet\" href=\"/assets/admin/h/css/xui-select2.css\"/>
  <script type=\"text/javascript\" src=\"/assets/admin/h/js/xui-select2.js\"></script>
  <style>
    .h-details .details-title{width: 160px;}
    .h-details .detail-content{width: calc(90% - 150px);}
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
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_reseller_platform_basic_info", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user_agent"]) || array_key_exists("user_agent", $context) ? $context["user_agent"] : (function () { throw new Twig_Error_Runtime('Variable "user_agent" does not exist.', 100, $this->source); })()), "user_id", array()))), "html", null, true);
        echo "\">基本信息</a></li>
    <li><a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_reseller_platform_contact", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user_agent"]) || array_key_exists("user_agent", $context) ? $context["user_agent"] : (function () { throw new Twig_Error_Runtime('Variable "user_agent" does not exist.', 101, $this->source); })()), "user_id", array()))), "html", null, true);
        echo "\">联系信息</a></li>
  </ul>
  <div class=\"h-details-box\">
    <ul class=\"h-details clearfloat\">
      <li>
        <div class=\"details-title\">用户所在供货商平台金额</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_agent"]) || array_key_exists("user_agent", $context) ? $context["user_agent"] : (function () { throw new Twig_Error_Runtime('Variable "user_agent" does not exist.', 109, $this->source); })()), "balance", array()), "html", null, true);
        echo "</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">推广返利佣金余额</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_agent"]) || array_key_exists("user_agent", $context) ? $context["user_agent"] : (function () { throw new Twig_Error_Runtime('Variable "user_agent" does not exist.', 117, $this->source); })()), "rebate_balance", array()), "html", null, true);
        echo "</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">代理商上级经销商</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">";
        // line 125
        if ((isset($context["user_name"]) || array_key_exists("user_name", $context) ? $context["user_name"] : (function () { throw new Twig_Error_Runtime('Variable "user_name" does not exist.', 125, $this->source); })())) {
            echo twig_escape_filter($this->env, (isset($context["user_name"]) || array_key_exists("user_name", $context) ? $context["user_name"] : (function () { throw new Twig_Error_Runtime('Variable "user_name" does not exist.', 125, $this->source); })()), "html", null, true);
        }
        echo "</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">等级</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_agent"]) || array_key_exists("user_agent", $context) ? $context["user_agent"] : (function () { throw new Twig_Error_Runtime('Variable "user_agent" does not exist.', 133, $this->source); })()), "level", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_constant("App\\Common\\Model\\User\\SubAccount::STATUSES"), twig_get_attribute($this->env, $this->source, (isset($context["user_agent"]) || array_key_exists("user_agent", $context) ? $context["user_agent"] : (function () { throw new Twig_Error_Runtime('Variable "user_agent" does not exist.', 141, $this->source); })()), "status", array()), array(), "array"), "html", null, true);
        echo "</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">是否锁屏</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">";
        // line 149
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user_agent"]) || array_key_exists("user_agent", $context) ? $context["user_agent"] : (function () { throw new Twig_Error_Runtime('Variable "user_agent" does not exist.', 149, $this->source); })()), "lock_screen", array()) == 1)) {
            echo "是";
        } else {
            echo "否";
        }
        echo "</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">经销商类型</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">";
        // line 157
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent_type"]) || array_key_exists("agent_type", $context) ? $context["agent_type"] : (function () { throw new Twig_Error_Runtime('Variable "agent_type" does not exist.', 157, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["user_agent"]) || array_key_exists("user_agent", $context) ? $context["user_agent"] : (function () { throw new Twig_Error_Runtime('Variable "user_agent" does not exist.', 157, $this->source); })()), "agency_type", array()), array(), "array"), "html", null, true);
        echo "</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">店铺名称</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_agent"]) || array_key_exists("user_agent", $context) ? $context["user_agent"] : (function () { throw new Twig_Error_Runtime('Variable "user_agent" does not exist.', 165, $this->source); })()), "shop_name", array()), "html", null, true);
        echo "</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">店铺地址</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">";
        // line 173
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_agent"]) || array_key_exists("user_agent", $context) ? $context["user_agent"] : (function () { throw new Twig_Error_Runtime('Variable "user_agent" does not exist.', 173, $this->source); })()), "shop_address", array()), "html", null, true);
        echo "</span>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/UserDetail/ResellerPlatform/basic_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 173,  228 => 165,  217 => 157,  202 => 149,  191 => 141,  180 => 133,  167 => 125,  156 => 117,  145 => 109,  134 => 101,  130 => 100,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  <title>基本管理-基本信息-基本信息</title>
  <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
  <script type=\"text/javascript\" src=\"/assets/admin/js/jquery.min.js\"></script>
  <!--下拉列表-->
  <link rel=\"stylesheet\" href=\"/assets/admin/h/css/xui-select2.css\"/>
  <script type=\"text/javascript\" src=\"/assets/admin/h/js/xui-select2.js\"></script>
  <style>
    .h-details .details-title{width: 160px;}
    .h-details .detail-content{width: calc(90% - 150px);}
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
    <li class=\"tab-this\"><a href=\"{{ path('admin_user_details_reseller_platform_basic_info',{id:user_agent.user_id}) }}\">基本信息</a></li>
    <li><a href=\"{{ path('admin_user_details_reseller_platform_contact',{id:user_agent.user_id}) }}\">联系信息</a></li>
  </ul>
  <div class=\"h-details-box\">
    <ul class=\"h-details clearfloat\">
      <li>
        <div class=\"details-title\">用户所在供货商平台金额</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">{{ user_agent.balance }}</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">推广返利佣金余额</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">{{ user_agent.rebate_balance }}</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">代理商上级经销商</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">{% if user_name %}{{ user_name }}{% endif %}</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">等级</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">{{ user_agent.level }}</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">审核</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">{{ constant('App\\\\Common\\\\Model\\\\User\\\\SubAccount::STATUSES')[user_agent.status] }}</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">是否锁屏</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">{% if user_agent.lock_screen == 1 %}是{% else %}否{% endif %}</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">经销商类型</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">{{ agent_type[user_agent.agency_type] }}</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">店铺名称</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">{{ user_agent.shop_name }}</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">店铺地址</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">{{ user_agent.shop_address }}</span>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
</body>
</html>
", "Admin/UserDetail/ResellerPlatform/basic_info.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\UserDetail\\ResellerPlatform\\basic_info.twig");
    }
}
