<?php

/* Common/Common/footer.twig */
class __TwigTemplate_60e77d3476776e29cf2cbbd5338bdfe0a6250cd4e83435b946a31f3db5afa02a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/Common/footer.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/Common/footer.twig"));

        // line 1
        echo "<div class=\"g-copy\">
  <div class=\"copyright\">
    <div class=\"copy-main f-fl clearfloat\">
      <div class=\"copy-main-left\"></div>
      <div class=\"copy-main-center\">
        <div class=\"copy-list\">
          <span>导航</span>
          <a href=\"https://www.foxdou.com/\" target=\"_blank\">首页</a>
          <a href=\"https://sup.foxdou.com/\" target=\"_blank\">供应商</a>
          <a href=\"https://agent.foxdou.com/\" target=\"_blank\">代理商</a>
        </div>
        <div class=\"copy-list\">
          <span>下载</span>
          <a href=\"#\">手机端</a>
          <a href=\"#\">PC客户端</a>
          <a href=\"#\">下载中心</a>
        </div>
        <div class=\"copy-list\">
          <span>帮助</span>
          <a href=\"#\">联系客服</a>
          <a href=\"#\">服务公告</a>
          <a href=\"https://safe.foxdou.com/\">安全中心</a>
        </div>
      </div>
      <div class=\"copy-main-right\"></div>
    </div>
    <div class=\"copy-info f-fl\">
      Copyright © 2015-";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Foxdou.All Rights Reserved  ";
        echo twig_escape_filter($this->env, $this->extensions['App\Common\Twig\AppExtension']->getParams("system_beian_info"), "html", null, true);
        echo "
    </div>
  </div>
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/Common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 28,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"g-copy\">
  <div class=\"copyright\">
    <div class=\"copy-main f-fl clearfloat\">
      <div class=\"copy-main-left\"></div>
      <div class=\"copy-main-center\">
        <div class=\"copy-list\">
          <span>导航</span>
          <a href=\"https://www.foxdou.com/\" target=\"_blank\">首页</a>
          <a href=\"https://sup.foxdou.com/\" target=\"_blank\">供应商</a>
          <a href=\"https://agent.foxdou.com/\" target=\"_blank\">代理商</a>
        </div>
        <div class=\"copy-list\">
          <span>下载</span>
          <a href=\"#\">手机端</a>
          <a href=\"#\">PC客户端</a>
          <a href=\"#\">下载中心</a>
        </div>
        <div class=\"copy-list\">
          <span>帮助</span>
          <a href=\"#\">联系客服</a>
          <a href=\"#\">服务公告</a>
          <a href=\"https://safe.foxdou.com/\">安全中心</a>
        </div>
      </div>
      <div class=\"copy-main-right\"></div>
    </div>
    <div class=\"copy-info f-fl\">
      Copyright © 2015-{{ \"now\"|date('Y') }} Foxdou.All Rights Reserved  {{ params('system_beian_info') }}
    </div>
  </div>
</div>

", "Common/Common/footer.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Common\\Common\\footer.twig");
    }
}
