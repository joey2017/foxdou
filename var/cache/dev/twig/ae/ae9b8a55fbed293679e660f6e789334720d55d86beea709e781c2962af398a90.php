<?php

/* Common/403.twig */
class __TwigTemplate_27245fc84dad40cbb0352f57fe14c3f77a796aa5b3f9febd39a7833367b99837 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/403.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/403.twig"));

        // line 1
        echo "<?php
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  <title>出错啦！</title>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/new-default/css/reset.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/new-default/css/common.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/new-default/css/iconfont/iconfont.css\"/>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/new-default/js/xui-select2/css/xui-select.css\"/>
  <style type=\"text/css\">
    html,body{height: 100%;min-height: 768px;font:normal normal normal 14px/1.5em \"微软雅黑\", Arial;}

    .wrapper{position: relative; width: 100%;height: calc(100% - 38px); background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/new-default/img/cw-bg.jpg);}
    .wrapper-bg{position: absolute;left: 0;right: 0;bottom: 0; width: 100%;height: 40%;background: #e5e5e5;}
    .error-wrapper{position: fixed;top: 42%; left: 50%; transform: translate(-50%, -50%); width: 1200px;height:590px;background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/new-default/img/cw.png) no-repeat;}
    .error{width: 710px;height: 200px;margin: 270px 0px 0 490px;}
    .error p{display: block;height: auto; color: #555555;}
    .error .ero-title{line-height: 50px; font-size: 26px;color: #6d6c6a;font-weight: bold;letter-spacing:2px;}
    .error .btnGroup{display: block; margin-top: 20px;margin-bottom: 15px; height: 34px;}
    .error .btnGroup a{display: inline-block; padding: 8px 20px;margin-right: 20px;border-radius: 2px; background: #999999;text-decoration: none;color: #FFFFFF;}
    .error .btnGroup a:hover{opacity: .9;}
    .error .feedback{display: inline-block; color: #FF9900;line-height: 20px;cursor: pointer;}
    .error .feedback:hover{opacity: .9;}
    .error .feedback .icon{float: left; margin-right: 3px;font-size: 22px;}

    #foot{position: fixed;bottom: 0;width: 100%; margin: 20px 0;}
    #foot a{color: #16b5ea;}

    .blackMask{position: absolute;top: 0;left: 0; width: 100%;height: 100%;background: rgba(0,0,0,.2);z-index: 9999;display: none;}
    .layer-alpha{position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%); width: auto;height: auto;
      box-sizing: border-box;padding: 8px; overflow: hidden; border-radius: 2px; background: rgba(0,0,0,.2);
    }
    .layer-body{position: relative; width: 100%;height: 100%;box-sizing: border-box;
      border-radius: 2px; background: rgb(255,255,255);
    }
    .layer-body .icon-tuichu{position: absolute;top: 10px;right: 5px;width: 24px;height: 24px;line-height: 24px;color: #999999;cursor: pointer;}
    .layer-body .icon-tuichu:hover{color: #666666;}.login-account{width: 100%;height: auto;}
    .layer-title{padding: 10px 15px; border-bottom: 1px solid #E0E0E0; font-weight: bold;font-size: 16px;}


    .feedback-layer{width: 500px;height: auto;display: none;}
    .feedback-body{padding: 20px 30px;}
    .formGroup{height: auto;}
    .inputGroup{width: 100%; height: auto;padding: 10px 0;zoom: 1;}
    .inputGroup:after{display:block;visibility:hidden;clear:both;height:0;overflow:hidden;content:'.';}
    .inputGroup .inputInline{float: left; display: inline-block;width: 180px;}
    .inputGroup .inputBlock{display: block;width: 100%;height: auto;}
    .inputGroup .inputInline input, .inputGroup .inputBlock input{width: 100%; height: 38px;border-radius: 2px;border: 1px solid #CCCCCC;
      box-sizing: border-box;padding: 0 8px;font-family: \"微软雅黑\"; color: #444444;font-size: 14px; outline: none;}
    .inputGroup .inputInline textarea, .inputGroup .inputBlock textarea{width: 100%; height: 150px;border-radius: 2px;border: 1px solid #CCCCCC;
      box-sizing: border-box;padding:5px 8px; color: #444444;font-size: 14px;line-height: 20px; outline: none;resize:none}
    .inputGroup .inputInline input:focus, .inputGroup .inputBlock input:focus, .inputGroup .inputInline textarea:focus, .inputGroup .inputBlock textarea:focus
    {border-color: #16b5ea;}
    .inputGroup .btnGroup{width: 100%; height: auto;text-align: center;}
    .inputGroup .btnGroup .btn{display: inline-block;height: auto; padding: 8px 20px;margin: 0 5px; background: #E5E5E5;color: #555555;border-radius: 2px!important;
      border: 1px solid #C0C0C0;line-height: 18px; cursor: pointer; outline: none;}
    .inputGroup .btnGroup .btn:hover{opacity: .9;}
    .inputGroup .btnGroup .btnBlue{background: #1EBCF1;border: 1px solid #16b5ea;color: #FFFFFF;}


  </style>
</head>

<body>
";
        // line 70
        echo "  ";
        // line 71
        echo "    ";
        // line 72
        echo "      ";
        // line 73
        echo "      ";
        // line 74
        echo "      ";
        // line 75
        echo "    ";
        // line 76
        echo "    ";
        // line 77
        echo "    ";
        // line 78
        echo "    ";
        // line 79
        echo "    ";
        // line 80
        echo "  ";
        // line 81
        echo "  ";
        // line 82
        echo "    ";
        // line 83
        echo "    ";
        // line 84
        echo "    ";
        // line 85
        echo "    ";
        // line 86
        echo "  ";
        // line 89
        echo "<div class=\"wrapper\">
  <div class=\"wrapper-bg\">
    <div class=\"error-wrapper\">
      <div class=\"error\">
        <p class=\"ero-title\">啊~哦~您乎叫的页面已欠费停机……</p>
        <p class=\"ero-title\">";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 94, $this->source); })()), "request", array()), "get", array(0 => "message", 1 => ""), "method"), "html", null, true);
        echo "</p>
        <p>神马？这是个BUG？</p>
        <p>-_-</p>
        <p class=\"feedback\"><i class=\"icon iconfont icon-fankui\"></i>反馈信息</p>

        <div class=\"btnGroup\">
          <a href=\"javascript:void (0);\" onclick=\"window.history.back(-2);\" style=\"background: #13b5b1;\">原路返回</a>
          <a href=\"/\" style=\"background: #00a6de;\">重头再来</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div id=\"foot\">
  <p>
    <span>&copy;";
        // line 109
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['App\Common\Twig\AppExtension']->getParams("system_site_name"), "html", null, true);
        echo " </span>
  </p>
  <p>";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['App\Common\Twig\AppExtension']->getParams("system_beian_info"), "html", null, true);
        echo "</p>
</div>

<!-- 弹出窗口 -->
<div class=\"blackMask\">
  <div class=\"layer-alpha\">
    <div class=\"layer-body\">
      <!-- 反馈 -->
      <div class=\"feedback-layer\">
        <div class=\"layer-title\">意见反馈</div>
        <div class=\"feedback-body\">
          <div class=\"formGroup\">
            <div class=\"inputGroup\">
              <div class=\"inputInline\" style=\"margin-right: 10px;\">
                <div class=\"xui-select2\" name=\"xui-select2\" style=\"width: 100%;\"  value=\"1\">
                  <div class=\"xui-arrow\"></div>
                  <ul class=\"xui-select2-option\" style=\"display: none;\">
                    <li value=\"0\">不好看</li>
                    <li value=\"1\">不喜欢</li>
                    <li value=\"2\">不好用</li>
                    <li value=\"3\">其他</li>
                  </ul>
                </div>
              </div>
              <div class=\"inputInline\" style=\"width: 250px;\">
                <input type=\"text\" name=\"\" value=\"\" placeholder=\"如方便请留下您的联系方式\"/>
              </div>
            </div>
            <div class=\"inputGroup\">
              <div class=\"inputBlock\">
                <textarea placeholder=\"请输入您要对我们说的话吧,如需实时帮助建议先联系客服哦\"></textarea>
              </div>
            </div>
            <div class=\"inputGroup\">
              <div class=\"btnGroup\">
                <button class=\"btn\" onclick=\"closeDialog();\">取消</button>
                <button class=\"btn btnBlue\" onclick=\"closeDialog();\">确定</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /反馈 -->
    </div>
  </div>
</div>
<!-- /弹出窗口 -->

<script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/new-default/js/xui-select2/js/xui-select.js\"></script>
<script type=\"text/javascript\">

    xui.select2();

    /*
     * 弹出窗口
     */
    \$('.feedback').click(function(){
        \$('.blackMask').css('display','block');
        \$('.feedback-layer').css('display','block');
        \$('body').css({overflow:'hidden'});    //禁用滚动条
    });


    /*
     * 关闭窗口
     */
    function closeDialog(){
        \$('.blackMask').css('display','none');
        \$('body').css({overflow:'auto'});
    }

</script>

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/403.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 111,  156 => 109,  138 => 94,  131 => 89,  129 => 86,  127 => 85,  125 => 84,  123 => 83,  121 => 82,  119 => 81,  117 => 80,  115 => 79,  113 => 78,  111 => 77,  109 => 76,  107 => 75,  105 => 74,  103 => 73,  101 => 72,  99 => 71,  97 => 70,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  <title>出错啦！</title>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/new-default/css/reset.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/new-default/css/common.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/new-default/css/iconfont/iconfont.css\"/>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/new-default/js/xui-select2/css/xui-select.css\"/>
  <style type=\"text/css\">
    html,body{height: 100%;min-height: 768px;font:normal normal normal 14px/1.5em \"微软雅黑\", Arial;}

    .wrapper{position: relative; width: 100%;height: calc(100% - 38px); background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/new-default/img/cw-bg.jpg);}
    .wrapper-bg{position: absolute;left: 0;right: 0;bottom: 0; width: 100%;height: 40%;background: #e5e5e5;}
    .error-wrapper{position: fixed;top: 42%; left: 50%; transform: translate(-50%, -50%); width: 1200px;height:590px;background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/new-default/img/cw.png) no-repeat;}
    .error{width: 710px;height: 200px;margin: 270px 0px 0 490px;}
    .error p{display: block;height: auto; color: #555555;}
    .error .ero-title{line-height: 50px; font-size: 26px;color: #6d6c6a;font-weight: bold;letter-spacing:2px;}
    .error .btnGroup{display: block; margin-top: 20px;margin-bottom: 15px; height: 34px;}
    .error .btnGroup a{display: inline-block; padding: 8px 20px;margin-right: 20px;border-radius: 2px; background: #999999;text-decoration: none;color: #FFFFFF;}
    .error .btnGroup a:hover{opacity: .9;}
    .error .feedback{display: inline-block; color: #FF9900;line-height: 20px;cursor: pointer;}
    .error .feedback:hover{opacity: .9;}
    .error .feedback .icon{float: left; margin-right: 3px;font-size: 22px;}

    #foot{position: fixed;bottom: 0;width: 100%; margin: 20px 0;}
    #foot a{color: #16b5ea;}

    .blackMask{position: absolute;top: 0;left: 0; width: 100%;height: 100%;background: rgba(0,0,0,.2);z-index: 9999;display: none;}
    .layer-alpha{position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%); width: auto;height: auto;
      box-sizing: border-box;padding: 8px; overflow: hidden; border-radius: 2px; background: rgba(0,0,0,.2);
    }
    .layer-body{position: relative; width: 100%;height: 100%;box-sizing: border-box;
      border-radius: 2px; background: rgb(255,255,255);
    }
    .layer-body .icon-tuichu{position: absolute;top: 10px;right: 5px;width: 24px;height: 24px;line-height: 24px;color: #999999;cursor: pointer;}
    .layer-body .icon-tuichu:hover{color: #666666;}.login-account{width: 100%;height: auto;}
    .layer-title{padding: 10px 15px; border-bottom: 1px solid #E0E0E0; font-weight: bold;font-size: 16px;}


    .feedback-layer{width: 500px;height: auto;display: none;}
    .feedback-body{padding: 20px 30px;}
    .formGroup{height: auto;}
    .inputGroup{width: 100%; height: auto;padding: 10px 0;zoom: 1;}
    .inputGroup:after{display:block;visibility:hidden;clear:both;height:0;overflow:hidden;content:'.';}
    .inputGroup .inputInline{float: left; display: inline-block;width: 180px;}
    .inputGroup .inputBlock{display: block;width: 100%;height: auto;}
    .inputGroup .inputInline input, .inputGroup .inputBlock input{width: 100%; height: 38px;border-radius: 2px;border: 1px solid #CCCCCC;
      box-sizing: border-box;padding: 0 8px;font-family: \"微软雅黑\"; color: #444444;font-size: 14px; outline: none;}
    .inputGroup .inputInline textarea, .inputGroup .inputBlock textarea{width: 100%; height: 150px;border-radius: 2px;border: 1px solid #CCCCCC;
      box-sizing: border-box;padding:5px 8px; color: #444444;font-size: 14px;line-height: 20px; outline: none;resize:none}
    .inputGroup .inputInline input:focus, .inputGroup .inputBlock input:focus, .inputGroup .inputInline textarea:focus, .inputGroup .inputBlock textarea:focus
    {border-color: #16b5ea;}
    .inputGroup .btnGroup{width: 100%; height: auto;text-align: center;}
    .inputGroup .btnGroup .btn{display: inline-block;height: auto; padding: 8px 20px;margin: 0 5px; background: #E5E5E5;color: #555555;border-radius: 2px!important;
      border: 1px solid #C0C0C0;line-height: 18px; cursor: pointer; outline: none;}
    .inputGroup .btnGroup .btn:hover{opacity: .9;}
    .inputGroup .btnGroup .btnBlue{background: #1EBCF1;border: 1px solid #16b5ea;color: #FFFFFF;}


  </style>
</head>

<body>
{#<div id=\"head\"  >#}
{#<!-- 登录后的头部 -->#}
{#<div class=\"head-wrapper\">#}
  {#<div class=\"h-form\">#}
    {#<a href=\"#\" class=\"weather\">#}
      {#<span>南宁：</span>#}
      {#<span>13°</span>#}
      {#<span>良</span>#}
    {#</a>#}
    {#<a>|</a>#}
    {#<a href=\"#\">VIP宝箱</a>#}
    {#<a href=\"#\">换肤</a>#}
    {#<a href=\"#\">消息（<span>1</span>）</a>#}
  {#</div>#}
  {#<div class=\"h-ul\">#}
    {#<a href=\"#\">我的狐豆</a>#}
    {#<a href=\"#\">钱包</a>#}
    {#<a href=\"#\"></a>#}
    {#<a href=\"#\">设置</a>#}
  {#</div>#}
{#</div>#}
{#</div>#}
<div class=\"wrapper\">
  <div class=\"wrapper-bg\">
    <div class=\"error-wrapper\">
      <div class=\"error\">
        <p class=\"ero-title\">啊~哦~您乎叫的页面已欠费停机……</p>
        <p class=\"ero-title\">{{ app.request.get('message', '') }}</p>
        <p>神马？这是个BUG？</p>
        <p>-_-</p>
        <p class=\"feedback\"><i class=\"icon iconfont icon-fankui\"></i>反馈信息</p>

        <div class=\"btnGroup\">
          <a href=\"javascript:void (0);\" onclick=\"window.history.back(-2);\" style=\"background: #13b5b1;\">原路返回</a>
          <a href=\"/\" style=\"background: #00a6de;\">重头再来</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div id=\"foot\">
  <p>
    <span>&copy;{{ 'now'|date('Y') }} {{ params('system_site_name') }} </span>
  </p>
  <p>{{ params('system_beian_info') }}</p>
</div>

<!-- 弹出窗口 -->
<div class=\"blackMask\">
  <div class=\"layer-alpha\">
    <div class=\"layer-body\">
      <!-- 反馈 -->
      <div class=\"feedback-layer\">
        <div class=\"layer-title\">意见反馈</div>
        <div class=\"feedback-body\">
          <div class=\"formGroup\">
            <div class=\"inputGroup\">
              <div class=\"inputInline\" style=\"margin-right: 10px;\">
                <div class=\"xui-select2\" name=\"xui-select2\" style=\"width: 100%;\"  value=\"1\">
                  <div class=\"xui-arrow\"></div>
                  <ul class=\"xui-select2-option\" style=\"display: none;\">
                    <li value=\"0\">不好看</li>
                    <li value=\"1\">不喜欢</li>
                    <li value=\"2\">不好用</li>
                    <li value=\"3\">其他</li>
                  </ul>
                </div>
              </div>
              <div class=\"inputInline\" style=\"width: 250px;\">
                <input type=\"text\" name=\"\" value=\"\" placeholder=\"如方便请留下您的联系方式\"/>
              </div>
            </div>
            <div class=\"inputGroup\">
              <div class=\"inputBlock\">
                <textarea placeholder=\"请输入您要对我们说的话吧,如需实时帮助建议先联系客服哦\"></textarea>
              </div>
            </div>
            <div class=\"inputGroup\">
              <div class=\"btnGroup\">
                <button class=\"btn\" onclick=\"closeDialog();\">取消</button>
                <button class=\"btn btnBlue\" onclick=\"closeDialog();\">确定</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /反馈 -->
    </div>
  </div>
</div>
<!-- /弹出窗口 -->

<script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/foxdou/new-default/js/xui-select2/js/xui-select.js\"></script>
<script type=\"text/javascript\">

    xui.select2();

    /*
     * 弹出窗口
     */
    \$('.feedback').click(function(){
        \$('.blackMask').css('display','block');
        \$('.feedback-layer').css('display','block');
        \$('body').css({overflow:'hidden'});    //禁用滚动条
    });


    /*
     * 关闭窗口
     */
    function closeDialog(){
        \$('.blackMask').css('display','none');
        \$('body').css({overflow:'auto'});
    }

</script>

</body>
</html>
", "Common/403.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Common\\403.twig");
    }
}
