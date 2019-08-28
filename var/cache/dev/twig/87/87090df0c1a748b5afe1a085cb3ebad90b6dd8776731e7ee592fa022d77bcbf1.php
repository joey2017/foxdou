<?php

/* Reseller/Affiliate/index.twig */
class __TwigTemplate_c4000bb7f68983b6d980a12715bdd369316f3d84a3cb38f77cd15f0ded8cc58a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Reseller/Common/layout.twig", "Reseller/Affiliate/index.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Affiliate/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Affiliate/index.twig"));

        // line 2
        $context["title"] = "我的营销-推广链接";
        // line 5
        $context["left_nav"] = array(0 => array("name" => "推广链接", "route" => "reseller_affiliate_index", "icon" => "&#xe64e;"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 15
        echo "  <div class=\"panel-item\">
    <ul class=\"f-extension\">
      <li>
        <h3><b>推广名称：</b>狐豆-实体店-充值软件-亿支宝官方网站-最低进价充值软件,空中充值系统,缴费系统,最好的充值平台</h3>
        <p><b>推广链接：</b>https://www.foxdou.com/register/<?=\$this->params['user']['user_name']?></p>
        <div class=\"layui-input-block\">
          <a href=\"javascript:void(0);\" class=\"layui-btn layui-btn-small copy_url\" data-clipboard-text=\"https://www.foxdou.com/register/<?=\$this->params['user']['user_name']?>\">复制链接</a>
        </div>
      </li>
    </ul>
  </div>
  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/clipboard.min.js\"></script>
  <script type=\"text/javascript\">

      \$(function () {
          var clipboard = new Clipboard('.copy_url', {
//            text: function () {
//                return \$('#div').text().trim()
//            },
          });
          clipboard.on('success', function (e) {
              layer.msg('复制成功');
          });
          clipboard.on('error', function (e) {
              layer.msg('复制失败');
          });
      });
  </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Reseller/Affiliate/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 15,  90 => 14,  73 => 11,  60 => 9,  51 => 8,  41 => 1,  39 => 5,  37 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Reseller/Common/layout.twig' %}
{% set title = '我的营销-推广链接' %}

{%
set left_nav = [{\"name\": \"推广链接\", \"route\": \"reseller_affiliate_index\", \"icon\": \"&#xe64e;\"}]
%}

{% block title %}
  {{ title }}
{% endblock %}
{% block css %}
{% endblock %}

{% block main_content %}
  <div class=\"panel-item\">
    <ul class=\"f-extension\">
      <li>
        <h3><b>推广名称：</b>狐豆-实体店-充值软件-亿支宝官方网站-最低进价充值软件,空中充值系统,缴费系统,最好的充值平台</h3>
        <p><b>推广链接：</b>https://www.foxdou.com/register/<?=\$this->params['user']['user_name']?></p>
        <div class=\"layui-input-block\">
          <a href=\"javascript:void(0);\" class=\"layui-btn layui-btn-small copy_url\" data-clipboard-text=\"https://www.foxdou.com/register/<?=\$this->params['user']['user_name']?>\">复制链接</a>
        </div>
      </li>
    </ul>
  </div>
  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/clipboard.min.js\"></script>
  <script type=\"text/javascript\">

      \$(function () {
          var clipboard = new Clipboard('.copy_url', {
//            text: function () {
//                return \$('#div').text().trim()
//            },
          });
          clipboard.on('success', function (e) {
              layer.msg('复制成功');
          });
          clipboard.on('error', function (e) {
              layer.msg('复制失败');
          });
      });
  </script>

{% endblock %}
", "Reseller/Affiliate/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Affiliate\\index.twig");
    }
}
