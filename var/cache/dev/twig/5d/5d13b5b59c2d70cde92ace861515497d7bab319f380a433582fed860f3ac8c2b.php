<?php

/* Admin/UserDetail/Main/basic_info.twig */
class __TwigTemplate_d6b4ec6e177c400ae891be6b706c32b3b436f210bc16f965997eafecbccf5182 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/Main/basic_info.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/Main/basic_info.twig"));

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
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_main_basic_info", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 98, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">基本信息</a></li>
  </ul>
  <div class=\"h-details-box\">
    <ul class=\"h-details clearfloat\">
      <li>
        <div class=\"details-title\">头像</div>
        <div class=\"detail-content\">
          <div class=\"h-file-img\">
            <div class=\"image-view\">
              <img height=\"70px\" width=\"70px\" src=\"\" alt=\"头像\"/>
            </div>
            <div class=\"sisi-btn-item\">
              <button><span>+</span></button>
              <input type=\"file\" name=\"\" class=\"uploadImage\" />
            </div>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">狐豆昵称</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 120, $this->source); })()), "nick_name", array()), "html", null, true);
        echo "</span>
            <input type=\"text\" name=\"\" value=\"\" placeholder=\"请输入\" class=\"h-input-ing\" style=\"display: none;\" />
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">狐豆帐号</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 129, $this->source); })()), "user_name", array()), "html", null, true);
        echo "</span>
            <input type=\"text\" name=\"\" value=\"\" placeholder=\"请输入\" class=\"h-input-ing\" style=\"display: none;\"/>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">帐号性质</div>
        <div class=\"detail-content\">
          <span class=\"h-input-text inp-val\">";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_constant("App\\Common\\Model\\User\\User::TYPES"), twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 137, $this->source); })()), "type", array()), array(), "array"), "html", null, true);
        echo "</span>
          <div class=\"xui-select2\" name=\"xui-select2\">
            <ul class=\"xui-select2-option\">
              <li value=\"0\">个人</li>
              <li value=\"1\">国家</li>
            </ul>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">登录手机号</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 150, $this->source); })()), "mobile", array()), "html", null, true);
        echo "</span>
            <input type=\"text\" name=\"\" value=\"\" placeholder=\"请输入\" class=\"h-input-ing\" style=\"display: none;\"/>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">绑定手机号</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 159, $this->source); })()), "bind_mobile", array()), "html", null, true);
        echo "</span>
            <input type=\"text\" name=\"\" value=\"\" placeholder=\"请输入\" class=\"h-input-ing\" style=\"display: none;\"/>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">登录邮箱</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">";
        // line 168
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 168, $this->source); })()), "email", array()), "html", null, true);
        echo "</span>
            <input type=\"text\" name=\"\" value=\"\" placeholder=\"请输入\" class=\"h-input-ing\" style=\"display: none;\"/>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">绑定登录邮箱</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">";
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 177, $this->source); })()), "bind_email", array()), "html", null, true);
        echo "</span>
            <input type=\"text\" name=\"\" value=\"\" placeholder=\"请输入\" class=\"h-input-ing\" style=\"display: none;\"/>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">状态</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">";
        // line 186
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_constant("App\\Common\\Model\\User\\User::STATUSES"), twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 186, $this->source); })()), "status", array()), array(), "array"), "html", null, true);
        echo "</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">余额支付状态</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">";
        // line 194
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_constant("App\\Common\\Model\\User\\User::PAY_STATUSES"), twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 194, $this->source); })()), "pay_status", array()), array(), "array"), "html", null, true);
        echo "</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">用户金额</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">";
        // line 202
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 202, $this->source); })()), "balance", array()), "html", null, true);
        echo "</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">实名认证状态</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">";
        // line 210
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_constant("App\\Common\\Model\\User\\RealNameAuthenticationInfo::STATUSES"), twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 210, $this->source); })()), "real_name_status", array()), array(), "array"), "html", null, true);
        echo "</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">已开通平台</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
              <span class=\"h-input-text inp-val\">
                ";
        // line 219
        $context["opened"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 219, $this->source); })()), "opened_platform", array()), ",");
        // line 220
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opened"]) || array_key_exists("opened", $context) ? $context["opened"] : (function () { throw new Twig_Error_Runtime('Variable "opened" does not exist.', 220, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 221
            echo "                    ";
            if ($context["v"]) {
                // line 222
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["platform"]) || array_key_exists("platform", $context) ? $context["platform"] : (function () { throw new Twig_Error_Runtime('Variable "platform" does not exist.', 222, $this->source); })()), $context["v"], array(), "array"), "html", null, true);
                echo "
                    ";
            }
            // line 224
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "              </span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">注册时间</div>
        <div class=\"detail-content\">
          <div class=\"h-input-block\">
            <span class=\"h-input-text\">";
        // line 233
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 233, $this->source); })()), "add_time", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">注册IP</div>
        <div class=\"detail-content\">
          <div class=\"h-input-block\">
            <span class=\"h-input-text\">";
        // line 241
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 241, $this->source); })()), "register_ip", array()), "html", null, true);
        echo "</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">绑定帐号</div>
        <div class=\"detail-content\">
          <div class=\"h-input-block table-style1\" style=\"width: 800px\">
            <table >
              <thead>
              <tr>
                <th>平台</th>
                <th>ID</th>
                <th>平台账户余额</th>
                <th>平台等级</th>
                <th>审核</th>
                <th>开通平台时间</th>
              </tr>
              </thead>
              <tbody>
              ";
        // line 261
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 261, $this->source); })()), "opened", array()));
        foreach ($context['_seq'] as $context["ko"] => $context["uo"]) {
            // line 262
            echo "                  ";
            if ($context["uo"]) {
                // line 263
                echo "                      <tr>
                          <td>";
                // line 264
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["platform"]) || array_key_exists("platform", $context) ? $context["platform"] : (function () { throw new Twig_Error_Runtime('Variable "platform" does not exist.', 264, $this->source); })()), $context["ko"], array(), "array"), "html", null, true);
                echo "</td>
                          <td>";
                // line 265
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uo"], "id", array()), "html", null, true);
                echo "</td>
                          <td>";
                // line 266
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uo"], "balance", array()), "html", null, true);
                echo "</td>
                          <td>";
                // line 267
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uo"], "level", array()), "html", null, true);
                echo "</td>
                          <td>";
                // line 268
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_constant("App\\Common\\Model\\User\\User::STATUSES"), twig_get_attribute($this->env, $this->source, $context["uo"], "status", array()), array(), "array"), "html", null, true);
                echo "</td>
                          <td>";
                // line 269
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uo"], "add_time", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                      </tr>
                  ";
            }
            // line 272
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['ko'], $context['uo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 273
        echo "              </tbody>
            </table>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">备注信息</div>
        <div class=\"detail-content\">
          <div class=\"h-input-block\">
            <span class=\"h-input-text inp-val\">";
        // line 282
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 282, $this->source); })()), "info", array()), "html", null, true);
        echo "</span>
            <textarea rows=\"3\" class=\"h-textarea-ing\" placeholder=\"请输入备注信息\" style=\"display: none;width: 800px\"></textarea>
          </div>
        </div>
      </li>
      <!--            <li>-->
      <!--                <div class=\"details-title\"></div>-->
      <!--                <div class=\"detail-content\">-->
      <!--                    <div class=\"h-input-block\" style=\"margin-top: 20px;\">-->
      <!--                        <button id=\"edit\" class=\"btn btn-green\">编辑</button>-->
      <!--                    </div>-->
      <!--                </div>-->
      <!--            </li>-->
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
        return "Admin/UserDetail/Main/basic_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 282,  393 => 273,  387 => 272,  381 => 269,  377 => 268,  373 => 267,  369 => 266,  365 => 265,  361 => 264,  358 => 263,  355 => 262,  351 => 261,  328 => 241,  317 => 233,  307 => 225,  301 => 224,  295 => 222,  292 => 221,  287 => 220,  285 => 219,  273 => 210,  262 => 202,  251 => 194,  240 => 186,  228 => 177,  216 => 168,  204 => 159,  192 => 150,  176 => 137,  165 => 129,  153 => 120,  128 => 98,  29 => 1,);
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
    <li class=\"tab-this\"><a href=\"{{ path('admin_user_details_main_basic_info',{id:user.id}) }}\">基本信息</a></li>
  </ul>
  <div class=\"h-details-box\">
    <ul class=\"h-details clearfloat\">
      <li>
        <div class=\"details-title\">头像</div>
        <div class=\"detail-content\">
          <div class=\"h-file-img\">
            <div class=\"image-view\">
              <img height=\"70px\" width=\"70px\" src=\"\" alt=\"头像\"/>
            </div>
            <div class=\"sisi-btn-item\">
              <button><span>+</span></button>
              <input type=\"file\" name=\"\" class=\"uploadImage\" />
            </div>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">狐豆昵称</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">{{ user.nick_name }}</span>
            <input type=\"text\" name=\"\" value=\"\" placeholder=\"请输入\" class=\"h-input-ing\" style=\"display: none;\" />
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">狐豆帐号</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">{{ user.user_name }}</span>
            <input type=\"text\" name=\"\" value=\"\" placeholder=\"请输入\" class=\"h-input-ing\" style=\"display: none;\"/>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">帐号性质</div>
        <div class=\"detail-content\">
          <span class=\"h-input-text inp-val\">{{ constant(\"App\\\\Common\\\\Model\\\\User\\\\User::TYPES\")[user.type] }}</span>
          <div class=\"xui-select2\" name=\"xui-select2\">
            <ul class=\"xui-select2-option\">
              <li value=\"0\">个人</li>
              <li value=\"1\">国家</li>
            </ul>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">登录手机号</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">{{ user.mobile }}</span>
            <input type=\"text\" name=\"\" value=\"\" placeholder=\"请输入\" class=\"h-input-ing\" style=\"display: none;\"/>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">绑定手机号</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">{{ user.bind_mobile }}</span>
            <input type=\"text\" name=\"\" value=\"\" placeholder=\"请输入\" class=\"h-input-ing\" style=\"display: none;\"/>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">登录邮箱</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">{{ user.email }}</span>
            <input type=\"text\" name=\"\" value=\"\" placeholder=\"请输入\" class=\"h-input-ing\" style=\"display: none;\"/>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">绑定登录邮箱</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">{{ user.bind_email }}</span>
            <input type=\"text\" name=\"\" value=\"\" placeholder=\"请输入\" class=\"h-input-ing\" style=\"display: none;\"/>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">状态</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">{{ constant(\"App\\\\Common\\\\Model\\\\User\\\\User::STATUSES\")[user.status] }}</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">余额支付状态</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">{{ constant(\"App\\\\Common\\\\Model\\\\User\\\\User::PAY_STATUSES\")[user.pay_status] }}</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">用户金额</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">{{ user.balance }}</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">实名认证状态</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
            <span class=\"h-input-text inp-val\">{{ constant(\"App\\\\Common\\\\Model\\\\User\\\\RealNameAuthenticationInfo::STATUSES\")[user.real_name_status] }}</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">已开通平台</div>
        <div class=\"detail-content\">
          <div class=\"h-input-inline\">
              <span class=\"h-input-text inp-val\">
                {% set opened = user.opened_platform|split(',') %}
                {% for k,v in opened %}
                    {% if v %}
                        {{ platform[v] }}
                    {% endif %}
                {% endfor %}
              </span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">注册时间</div>
        <div class=\"detail-content\">
          <div class=\"h-input-block\">
            <span class=\"h-input-text\">{{ user.add_time|date('Y-m-d H:i:s') }}</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">注册IP</div>
        <div class=\"detail-content\">
          <div class=\"h-input-block\">
            <span class=\"h-input-text\">{{ user.register_ip }}</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">绑定帐号</div>
        <div class=\"detail-content\">
          <div class=\"h-input-block table-style1\" style=\"width: 800px\">
            <table >
              <thead>
              <tr>
                <th>平台</th>
                <th>ID</th>
                <th>平台账户余额</th>
                <th>平台等级</th>
                <th>审核</th>
                <th>开通平台时间</th>
              </tr>
              </thead>
              <tbody>
              {% for ko,uo in user.opened %}
                  {% if uo %}
                      <tr>
                          <td>{{ platform[ko] }}</td>
                          <td>{{ uo.id }}</td>
                          <td>{{ uo.balance }}</td>
                          <td>{{ uo.level }}</td>
                          <td>{{ constant(\"App\\\\Common\\\\Model\\\\User\\\\User::STATUSES\")[uo.status] }}</td>
                          <td>{{ uo.add_time|date('Y-m-d H:i:s') }}</td>
                      </tr>
                  {% endif %}
              {% endfor %}
              </tbody>
            </table>
          </div>
        </div>
      </li>
      <li>
        <div class=\"details-title\">备注信息</div>
        <div class=\"detail-content\">
          <div class=\"h-input-block\">
            <span class=\"h-input-text inp-val\">{{ user.info }}</span>
            <textarea rows=\"3\" class=\"h-textarea-ing\" placeholder=\"请输入备注信息\" style=\"display: none;width: 800px\"></textarea>
          </div>
        </div>
      </li>
      <!--            <li>-->
      <!--                <div class=\"details-title\"></div>-->
      <!--                <div class=\"detail-content\">-->
      <!--                    <div class=\"h-input-block\" style=\"margin-top: 20px;\">-->
      <!--                        <button id=\"edit\" class=\"btn btn-green\">编辑</button>-->
      <!--                    </div>-->
      <!--                </div>-->
      <!--            </li>-->
    </ul>
  </div>
</div>
</body>
</html>
", "Admin/UserDetail/Main/basic_info.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\UserDetail\\Main\\basic_info.twig");
    }
}
