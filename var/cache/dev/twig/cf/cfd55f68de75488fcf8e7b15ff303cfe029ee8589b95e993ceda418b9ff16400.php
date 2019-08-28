<?php

/* /Reseller/Home/layout_home.twig */
class __TwigTemplate_4f4d3ffeb31d4821b49a226caadd78dc78856150f3bac5065fc1fdb033eaa335 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'main_content' => array($this, 'block_main_content'),
            'js_end' => array($this, 'block_js_end'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Reseller/Home/layout_home.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Reseller/Home/layout_home.twig"));

        // line 1
        $context["title"] = "狐豆代理商平台";
        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\">
  <title>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</title>

  ";
        // line 9
        echo $this->extensions['App\Common\Twig\AppExtension']->useAssets(array(0 => "/assets/common/layui/css/layui.css", 1 => "/assets/common/components/superslide/superslide.css", 2 => "/assets/reseller/home/css/reset.css", 3 => "/assets/reseller/home/css/common.css", 4 => "/assets/reseller/home/css/index.css"));
        // line 15
        echo "

  ";
        // line 17
        echo $this->extensions['App\Common\Twig\AppExtension']->useAssets(array(0 => "/assets/common/js/jquery.min.js", 1 => "/assets/common/layui/layui.all.js", 2 => "/assets/common/components/superslide/superslide.js"));
        // line 21
        echo "


  ";
        // line 24
        $this->displayBlock('css', $context, $blocks);
        // line 34
        echo "
  <script>
      function view_article(url) {
          var width  = 1000;
          var height = window.screen.availHeight;
          window.open(url, '', 'scrollbars=0,width=' + width + ',height=' + height + ',top=' + (((window.screen.availHeight) / 2) - (height / 2)) + ',left=' + (((window.screen.availWidth) / 2) - (width / 2)));
      }
  </script>

</head>

<body>
<div class=\"wrapper\">
  <div class=\"agent-top\">
    <div class=\"agent-header\">
      <div class=\"agent-logo\" style=\"background-image: url(";
        // line 49
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/logo.png");
        echo ");\"></div>
      <div class=\"agent-nav\">
        ";
        // line 51
        $this->loadTemplate("Reseller/Home/top-nav.twig", "/Reseller/Home/layout_home.twig", 51)->display($context);
        // line 52
        echo "      </div>
    </div>
  </div>

  <div class=\"main_content\">
    ";
        // line 57
        $this->displayBlock('main_content', $context, $blocks);
        // line 59
        echo "  </div>

  ";
        // line 61
        $this->loadTemplate("Reseller/Home/footer.twig", "/Reseller/Home/layout_home.twig", 61)->display($context);
        // line 62
        echo "
  <div class=\"agent-service\">
    <div class=\"agent-service-icon\" title=\"在线客服\" style=\"background-image: url(";
        // line 64
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/kefu.png");
        echo ");\"></div>
    <div class=\"agent-service-body\">
      <img src=\"";
        // line 66
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/close.png");
        echo "\" class=\"agent-service-close\" />
      <div class=\"agent-sercice-info\">
        <h3>在线客服</h3>
        <p>工作日：9:00-18:00</p>
        <p>
          <b>QQ号码</b>
          <span>1063033278</span>
        </p>
        <p>
          <b>在线客服</b>
          <a href=\"\"><img src=\"";
        // line 76
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/qq-jiaotan.png");
        echo "\"/></a>
          <a href=\"\"><img src=\"";
        // line 77
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/zaixianzixun.png");
        echo "\"/></a>
        </p>
      </div>
    </div>
  </div>
  <div class=\"agent-backToTop\" title=\"返回顶部\"  style=\"background-image: url(";
        // line 82
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/reseller/home/images/top.png");
        echo ");\"></div>
</div>
<script>
    layui.laypage.render({
        elem: 'pager'
        ,count: ";
        // line 87
        echo twig_escape_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context))) ? (_twig_default_filter((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 87, $this->source); })()), 0)) : (0)), "html", null, true);
        echo " //数据总数，从服务端得到
        ,limit: ";
        // line 88
        echo twig_escape_filter($this->env, (((isset($context["limit"]) || array_key_exists("limit", $context))) ? (_twig_default_filter((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new Twig_Error_Runtime('Variable "limit" does not exist.', 88, $this->source); })()), 4)) : (4)), "html", null, true);
        echo "
        ,curr: ";
        // line 89
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "page"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "page"), "method"), 1)) : (1)), "html", null, true);
        echo "
        ,jump: function(obj, first){
            //首次不执行
            if(first){
                return;
            }

            window.location = '?page=' + obj.curr;

        }
    });
</script>

";
        // line 102
        $this->displayBlock('js_end', $context, $blocks);
        // line 104
        echo "
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 25
        echo "    <style>
      .agent-cols {
        width: 1100px;
        height: auto;
        padding: 0px 0;
        margin: 0 auto;
      }
    </style>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 58
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/Reseller/Home/layout_home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 102,  217 => 58,  208 => 57,  190 => 25,  181 => 24,  168 => 104,  166 => 102,  150 => 89,  146 => 88,  142 => 87,  134 => 82,  126 => 77,  122 => 76,  109 => 66,  104 => 64,  100 => 62,  98 => 61,  94 => 59,  92 => 57,  85 => 52,  83 => 51,  78 => 49,  61 => 34,  59 => 24,  54 => 21,  52 => 17,  48 => 15,  46 => 9,  41 => 7,  34 => 2,  32 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set title = '狐豆代理商平台' %}

<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\">
  <title>{{ title }}</title>

  {{ use_assets([
    '/assets/common/layui/css/layui.css',
    '/assets/common/components/superslide/superslide.css',
    '/assets/reseller/home/css/reset.css',
    '/assets/reseller/home/css/common.css',
    '/assets/reseller/home/css/index.css',
  ]) }}

  {{ use_assets([
    '/assets/common/js/jquery.min.js',
    '/assets/common/layui/layui.all.js',
    '/assets/common/components/superslide/superslide.js',
  ]) }}


  {% block css %}
    <style>
      .agent-cols {
        width: 1100px;
        height: auto;
        padding: 0px 0;
        margin: 0 auto;
      }
    </style>
  {% endblock %}

  <script>
      function view_article(url) {
          var width  = 1000;
          var height = window.screen.availHeight;
          window.open(url, '', 'scrollbars=0,width=' + width + ',height=' + height + ',top=' + (((window.screen.availHeight) / 2) - (height / 2)) + ',left=' + (((window.screen.availWidth) / 2) - (width / 2)));
      }
  </script>

</head>

<body>
<div class=\"wrapper\">
  <div class=\"agent-top\">
    <div class=\"agent-header\">
      <div class=\"agent-logo\" style=\"background-image: url({{ asset('/assets/reseller/home/images/logo.png') }});\"></div>
      <div class=\"agent-nav\">
        {% include \"Reseller/Home/top-nav.twig\" %}
      </div>
    </div>
  </div>

  <div class=\"main_content\">
    {% block main_content %}
    {% endblock %}
  </div>

  {% include \"Reseller/Home/footer.twig\" %}

  <div class=\"agent-service\">
    <div class=\"agent-service-icon\" title=\"在线客服\" style=\"background-image: url({{ asset('/assets/reseller/home/images/kefu.png') }});\"></div>
    <div class=\"agent-service-body\">
      <img src=\"{{ asset('/assets/reseller/home/images/close.png') }}\" class=\"agent-service-close\" />
      <div class=\"agent-sercice-info\">
        <h3>在线客服</h3>
        <p>工作日：9:00-18:00</p>
        <p>
          <b>QQ号码</b>
          <span>1063033278</span>
        </p>
        <p>
          <b>在线客服</b>
          <a href=\"\"><img src=\"{{ asset('/assets/reseller/home/images/qq-jiaotan.png') }}\"/></a>
          <a href=\"\"><img src=\"{{ asset('/assets/reseller/home/images/zaixianzixun.png') }}\"/></a>
        </p>
      </div>
    </div>
  </div>
  <div class=\"agent-backToTop\" title=\"返回顶部\"  style=\"background-image: url({{ asset('/assets/reseller/home/images/top.png') }});\"></div>
</div>
<script>
    layui.laypage.render({
        elem: 'pager'
        ,count: {{ total|default(0) }} //数据总数，从服务端得到
        ,limit: {{ limit|default(4) }}
        ,curr: {{ app.request.get('page')|default(1) }}
        ,jump: function(obj, first){
            //首次不执行
            if(first){
                return;
            }

            window.location = '?page=' + obj.curr;

        }
    });
</script>

{% block js_end %}
{% endblock %}

</body>
</html>
", "/Reseller/Home/layout_home.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Home\\layout_home.twig");
    }
}
