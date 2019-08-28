<?php

/* Common/Common/right-panel.twig */
class __TwigTemplate_d4f431f23691e56ae0492cf1afe05543def827d16bbfc099d9e264a1b8bf325c extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/Common/right-panel.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/Common/right-panel.twig"));

        // line 1
        $context["weekDays"] = array(0 => "天", 1 => "一", 2 => "二", 3 => "三", 4 => "四", 5 => "五", 6 => "六");
        // line 2
        echo "<div class=\"right-calendar\" style=\"float: right; width: 360px;height: auto;\">
  <!-- 日历 -->
  <div class=\"panel-item-right calendar\" style=\"border: 1px solid #E0E0E0;border-radius: 2px;\">
    <h1>";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d"), "html", null, true);
        echo "</h1>
    <div class=\"cal-detailed\">
      <span>恭喜发财</span><span><?=date('Y-m-d')?><span>星期";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["weekDays"]) || array_key_exists("weekDays", $context) ? $context["weekDays"] : (function () { throw new Twig_Error_Runtime('Variable "weekDays" does not exist.', 7, $this->source); })()), twig_date_format_filter($this->env, "now", "w"), array(), "array"), "html", null, true);
        echo "</span></span>
    </div>
  </div>
  <!-- /日历 -->
  <!-- 常见问题 -->
  <div class=\"panel-item-right\">
    <div style=\"border: 1px solid #E0E0E0;border-radius: 2px;\">
      <h2 class=\"container-title\"><strong class=\"s-orange\">常见问题</strong></h2>
      <ul class=\"problem\" id=\"common-question\">
      </ul>
    </div>
  </div>
  <!-- /常见问题 -->
</div>

<script type=\"text/javascript\">

    //localStorage.setItem(\"key\", 1);  //设置键的值
    //localStorage.getItem(\"key\")     //获取键的值

    \$.ajax('";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_faq_index");
        echo "',{
        success:function (data) {
            set_question_list(data);
        }
        ,error:function () {
            layer.msg('获取常见问题列表失败');
        }
    });
    function set_question_list(data) {
        var dom='';
        \$.each(data,function (k, article) {
            dom+='<li><a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_faq_show");
        echo "?id=' + article.id + '\" target=\"_blank\">' + article['title'] + '</a></li>';
        });
        \$('#common-question').html(dom);
    }
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/Common/right-panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 38,  64 => 27,  41 => 7,  36 => 5,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set weekDays = ['天','一','二','三','四','五','六'] %}
<div class=\"right-calendar\" style=\"float: right; width: 360px;height: auto;\">
  <!-- 日历 -->
  <div class=\"panel-item-right calendar\" style=\"border: 1px solid #E0E0E0;border-radius: 2px;\">
    <h1>{{ \"now\"|date(\"d\") }}</h1>
    <div class=\"cal-detailed\">
      <span>恭喜发财</span><span><?=date('Y-m-d')?><span>星期{{ weekDays[\"now\"|date('w')] }}</span></span>
    </div>
  </div>
  <!-- /日历 -->
  <!-- 常见问题 -->
  <div class=\"panel-item-right\">
    <div style=\"border: 1px solid #E0E0E0;border-radius: 2px;\">
      <h2 class=\"container-title\"><strong class=\"s-orange\">常见问题</strong></h2>
      <ul class=\"problem\" id=\"common-question\">
      </ul>
    </div>
  </div>
  <!-- /常见问题 -->
</div>

<script type=\"text/javascript\">

    //localStorage.setItem(\"key\", 1);  //设置键的值
    //localStorage.getItem(\"key\")     //获取键的值

    \$.ajax('{{ path('reseller_faq_index') }}',{
        success:function (data) {
            set_question_list(data);
        }
        ,error:function () {
            layer.msg('获取常见问题列表失败');
        }
    });
    function set_question_list(data) {
        var dom='';
        \$.each(data,function (k, article) {
            dom+='<li><a href=\"{{ path('reseller_faq_show') }}?id=' + article.id + '\" target=\"_blank\">' + article['title'] + '</a></li>';
        });
        \$('#common-question').html(dom);
    }
</script>", "Common/Common/right-panel.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Common\\Common\\right-panel.twig");
    }
}
