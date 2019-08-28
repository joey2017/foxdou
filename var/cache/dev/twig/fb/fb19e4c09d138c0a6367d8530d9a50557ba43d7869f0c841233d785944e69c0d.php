<?php

/* Open/Common/contactIM.twig */
class __TwigTemplate_c8356b41a8ee32859a269500c1a6474f023d09ee531342205d0cd51cc4e8e439 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Open/Common/contactIM.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Open/Common/contactIM.twig"));

        // line 1
        echo "<style type=\"text/css\">
  /*在线客服浮窗*/
  #service{width:161px;height:290px;position:fixed;top:350px;right:0px; z-index:100;}
  *html #service{margin-top:258px;position:absolute;top:expression(eval(document.documentElement.scrollTop));}
  #service li{width:161px;height:60px;}
  #service li img{float:right;}
  #service li a{height:49px;float:right;display:block;min-width:47px;max-width:161px;}
  #service li a .shows{display:block;}
  #service li a .hides{margin-right:-143px;cursor:pointer;cursor:hand;}
  #service li a.weixin_area .hides{display:none;position:absolute;right:143px;}
  #service li a.weixin_area .weixin{display:none;position:absolute;right:0;top:48px}
  #p2{width:112px;background-color:#A7D2A9;height:47px;margin-left:47px;border:1px solid #8BC48D;text-align:center;line-height:47px}
  #p3{width:112px;background-color:#EC9890;height:47px;margin-left:47px;border:1px solid #E6776C;text-align:center;line-height:47px}
  #p1{width:47px;height:49px;float:left}
</style>
<!--在线客服悬浮窗-->
<div id=\"service\">
  <ul>
    <li>
      <a href=\"http://wpa.qq.com/msgrd?v=3&uin=2850236951&site=qq&menu=yes\" target=\"_blank\">
        <div class=\"hides\" style=\"width:161px;display:none;\" id=\"qq\">
          <div class=\"hides\" id=\"p1\">
            <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/img/ll04.png\">
          </div>
          <div class=\"hides\" id=\"p2\"><span style=\"color:#FFF;font-size:13px\">2850236951</span>
          </div>
        </div>
        <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/img/l04.png\" width=\"47\" height=\"49\" class=\"shows\" />
      </a>
    </li>
    <li id=\"tel\">
      <a href=\"javascript:void(0)\">
        <div class=\"hides\" style=\"width:161px;display:none;\" id=\"tels\">
          <div class=\"hides\" id=\"p1\">
            <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/img/ll05.png\">
          </div>
          <div class=\"hides\" id=\"p3\"><span style=\"color:#FFF;font-size:12px\">0771-2360081</span>
          </div>
        </div>
        <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/img/l05.png\" width=\"47\" height=\"49\" class=\"shows\" />
      </a>
    </li>
    <li id=\"btn\">
      <a id=\"top_btn\">
        <div class=\"hides\" style=\"width:161px;display:none\">
          <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/img/ll06.png\" width=\"161\" height=\"49\" />
        </div>
        <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/img/l06.png\" width=\"47\" height=\"49\" class=\"shows\" />
      </a>
    </li>
  </ul>
</div>
<script type=\"text/javascript\">
    //在线客服浮窗
    \$(function() {
        \$(\"#service a\").hover(function() {
            if (\$(this).prop(\"className\") == \"weixin_area\") {
                \$(this).children(\"img.hides\").show();
            } else {
                \$(this).children(\"div.hides\").show();
                \$(this).children(\"img.shows\").hide();
                \$(this).children(\"div.hides\").animate({marginRight: '0px'}, '0');
            }
        }, function() {
            if (\$(this).prop(\"className\") == \"weixin_area\") {
                \$(this).children(\"img.hides\").hide();
            } else {
                \$(this).children(\"div.hides\").animate({marginRight: '-163px'}, 0, function() {
                    \$(this).hide();
                    \$(this).next(\"img.shows\").show();
                });
            }
        });

        \$(\"#top_btn\").click(function() {
            \$(\"html,body\").animate({scrollTop: 0}, 600);
        });
    });
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Open/Common/contactIM.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style type=\"text/css\">
  /*在线客服浮窗*/
  #service{width:161px;height:290px;position:fixed;top:350px;right:0px; z-index:100;}
  *html #service{margin-top:258px;position:absolute;top:expression(eval(document.documentElement.scrollTop));}
  #service li{width:161px;height:60px;}
  #service li img{float:right;}
  #service li a{height:49px;float:right;display:block;min-width:47px;max-width:161px;}
  #service li a .shows{display:block;}
  #service li a .hides{margin-right:-143px;cursor:pointer;cursor:hand;}
  #service li a.weixin_area .hides{display:none;position:absolute;right:143px;}
  #service li a.weixin_area .weixin{display:none;position:absolute;right:0;top:48px}
  #p2{width:112px;background-color:#A7D2A9;height:47px;margin-left:47px;border:1px solid #8BC48D;text-align:center;line-height:47px}
  #p3{width:112px;background-color:#EC9890;height:47px;margin-left:47px;border:1px solid #E6776C;text-align:center;line-height:47px}
  #p1{width:47px;height:49px;float:left}
</style>
<!--在线客服悬浮窗-->
<div id=\"service\">
  <ul>
    <li>
      <a href=\"http://wpa.qq.com/msgrd?v=3&uin=2850236951&site=qq&menu=yes\" target=\"_blank\">
        <div class=\"hides\" style=\"width:161px;display:none;\" id=\"qq\">
          <div class=\"hides\" id=\"p1\">
            <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/img/ll04.png\">
          </div>
          <div class=\"hides\" id=\"p2\"><span style=\"color:#FFF;font-size:13px\">2850236951</span>
          </div>
        </div>
        <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/img/l04.png\" width=\"47\" height=\"49\" class=\"shows\" />
      </a>
    </li>
    <li id=\"tel\">
      <a href=\"javascript:void(0)\">
        <div class=\"hides\" style=\"width:161px;display:none;\" id=\"tels\">
          <div class=\"hides\" id=\"p1\">
            <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/img/ll05.png\">
          </div>
          <div class=\"hides\" id=\"p3\"><span style=\"color:#FFF;font-size:12px\">0771-2360081</span>
          </div>
        </div>
        <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/img/l05.png\" width=\"47\" height=\"49\" class=\"shows\" />
      </a>
    </li>
    <li id=\"btn\">
      <a id=\"top_btn\">
        <div class=\"hides\" style=\"width:161px;display:none\">
          <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/img/ll06.png\" width=\"161\" height=\"49\" />
        </div>
        <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/img/l06.png\" width=\"47\" height=\"49\" class=\"shows\" />
      </a>
    </li>
  </ul>
</div>
<script type=\"text/javascript\">
    //在线客服浮窗
    \$(function() {
        \$(\"#service a\").hover(function() {
            if (\$(this).prop(\"className\") == \"weixin_area\") {
                \$(this).children(\"img.hides\").show();
            } else {
                \$(this).children(\"div.hides\").show();
                \$(this).children(\"img.shows\").hide();
                \$(this).children(\"div.hides\").animate({marginRight: '0px'}, '0');
            }
        }, function() {
            if (\$(this).prop(\"className\") == \"weixin_area\") {
                \$(this).children(\"img.hides\").hide();
            } else {
                \$(this).children(\"div.hides\").animate({marginRight: '-163px'}, 0, function() {
                    \$(this).hide();
                    \$(this).next(\"img.shows\").show();
                });
            }
        });

        \$(\"#top_btn\").click(function() {
            \$(\"html,body\").animate({scrollTop: 0}, 600);
        });
    });
</script>", "Open/Common/contactIM.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Open\\Common\\contactIM.twig");
    }
}
