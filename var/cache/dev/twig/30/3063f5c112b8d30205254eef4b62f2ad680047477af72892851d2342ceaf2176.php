<?php

/* Open/ControlPanel/main_left.twig */
class __TwigTemplate_0b7dff93da1b741298eea45af9f08dd384f2c48d899384426a4fe4e48238ae7e extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Open/ControlPanel/main_left.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Open/ControlPanel/main_left.twig"));

        // line 1
        $context["user"] = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "user", array());
        // line 2
        $context["current_route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 3
        $context["current_path"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "request", array()), "pathinfo", array());
        // line 4
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  <title></title>

  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/layui.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/nornmalize.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/common.css\"/>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/iconfont/iconfont.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/overview.css\" />
  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.min.js\"></script>
  <!--<script type=\"text/javascript\" src=\"http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js\"></script>-->
  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/js/common.js\" ></script>
  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/js/layui.js\" ></script>

  <style>
    body, html {
      width: 200px;
      min-width: 200px;
    }
    .m-side-nav {
      width: 100%;
      height: auto;
      margin-top: 20px;
    }
    .m-side-nav .nav {
      height: auto;
    }
    .m-side-nav .nav-title {
      display: block;
      height: 44px;
      margin: 10px 0 5px 0;
      padding: 0 20px;
      line-height: 44px;
    }
    .m-side-nav .nav-title:hover {
      background: #E8E8E8;
    }
    .m-side-nav .nav-title i {
      float: left;
      font-size: 18px;
    }
    .m-side-nav .nav-title i:last-child {
      margin-left: 2px;
      font-size: 14px;
      color: #999999;
    }
    .m-side-nav .nav-title span {
      display: block;
      float: left;
      width: 110px;
      height: 45px;
      margin-left: 10px;
    }
    .m-side-nav .nav-title:hover span {
      color: #18A689;
    }
    .nav-item {
    }
    .nav-item li {
      padding-left: 60px;
      line-height: 34px;
      font-size: 14px;
    }
    .nav-item li a {
      display: block;
      color: #999999;
    }
    .nav-item li:hover {
      background: #E8E8E8;
      color: #18A689;
    }
    .nav-item li:hover a {
      color: #18A689;
    }
    .nav-item-li-this {
      background: #E6E6E6;
    }
    .nav-item-li-this a {
      color: #18A689 !important;
    }
  </style>
</head>

<body>
<!-- 侧栏导航 -->
<div class=\"m-left\">
<div class=\"m-left-head\">
  <div class=\"head-img\">
    <a href=\"/user-info/index\" title=\"查看账户信息\">
      <img class=\"user_head_portrait\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/img/default-head-portrait.jpg\" onerror=\"this.src='//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/img/default-head-portrait.jpg'\"/>
    </a>
  </div>
  <div class=\"user\">
    <p>";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 101, $this->source); })()), "nick_name", array()), "html", null, true);
        echo "</p>
  </div>
</div>
<div class=\"m-side-nav\">
  <div class=\"nav\">
    ";
        // line 106
        $context["icon_idx"] = 1;
        // line 107
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["left_nav"]) || array_key_exists("left_nav", $context) ? $context["left_nav"] : (function () { throw new Twig_Error_Runtime('Variable "left_nav" does not exist.', 107, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
            // line 108
            echo "      ";
            // line 109
            echo "      ";
            $context["url"] = $this->extensions['App\Common\Twig\AppExtension']->getMenuPath($context["nav"]);
            // line 110
            echo "      ";
            $context["is_current"] = ((isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new Twig_Error_Runtime('Variable "current_path" does not exist.', 110, $this->source); })()) == (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 110, $this->source); })()));
            // line 111
            echo "      <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 111, $this->source); })()), "html", null, true);
            echo "\" route=\"";
            echo twig_escape_filter($this->env, json_encode($context["nav"]), "html", null, true);
            echo "\" target=\"right-frame\"
         class=\"nav-title  ";
            // line 112
            echo (((isset($context["is_current"]) || array_key_exists("is_current", $context) ? $context["is_current"] : (function () { throw new Twig_Error_Runtime('Variable "is_current" does not exist.', 112, $this->source); })())) ? ("nav-title-this") : (""));
            echo "\">
        <i class=\"iconfont icon-nav icon-nav-";
            // line 113
            echo twig_escape_filter($this->env, (isset($context["icon_idx"]) || array_key_exists("icon_idx", $context) ? $context["icon_idx"] : (function () { throw new Twig_Error_Runtime('Variable "icon_idx" does not exist.', 113, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["nav"], "icon", array());
            echo "</i>
        <span class=\"f-fs-16\">";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "name", array()), "html", null, true);
            echo "</span>
      </a>
      ";
            // line 116
            $context["icon_idx"] = ((isset($context["icon_idx"]) || array_key_exists("icon_idx", $context) ? $context["icon_idx"] : (function () { throw new Twig_Error_Runtime('Variable "icon_idx" does not exist.', 116, $this->source); })()) + 1);
            // line 117
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "  </div>
</div>
<div class=\"m-copy  f-tac s-gray\">

</div>
</div>

<!-- /侧栏导航 -->
<script type=\"text/javascript\">
    \$('.nav-title item').click(function () {
        \$(this).siblings('.nav-item').slideToggle('slow');
    });
    \$('.nav-title').click(function () {
        \$(this).addClass('nav-title-this');
        \$('.nav-title').not(this).removeClass('nav-title-this');
    });
</script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Open/ControlPanel/main_left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 118,  181 => 117,  179 => 116,  174 => 114,  168 => 113,  164 => 112,  157 => 111,  154 => 110,  151 => 109,  149 => 108,  144 => 107,  142 => 106,  134 => 101,  35 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set user = app.user %}
{% set current_route = app.request.attributes.get('_route') %}
{% set current_path  = app.request.pathinfo %}

<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  <title></title>

  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/layui.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/nornmalize.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/common.css\"/>
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/iconfont/iconfont.css\" />
  <link rel=\"stylesheet\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/css/overview.css\" />
  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.min.js\"></script>
  <!--<script type=\"text/javascript\" src=\"http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js\"></script>-->
  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/js/common.js\" ></script>
  <script type=\"text/javascript\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/open/js/layui.js\" ></script>

  <style>
    body, html {
      width: 200px;
      min-width: 200px;
    }
    .m-side-nav {
      width: 100%;
      height: auto;
      margin-top: 20px;
    }
    .m-side-nav .nav {
      height: auto;
    }
    .m-side-nav .nav-title {
      display: block;
      height: 44px;
      margin: 10px 0 5px 0;
      padding: 0 20px;
      line-height: 44px;
    }
    .m-side-nav .nav-title:hover {
      background: #E8E8E8;
    }
    .m-side-nav .nav-title i {
      float: left;
      font-size: 18px;
    }
    .m-side-nav .nav-title i:last-child {
      margin-left: 2px;
      font-size: 14px;
      color: #999999;
    }
    .m-side-nav .nav-title span {
      display: block;
      float: left;
      width: 110px;
      height: 45px;
      margin-left: 10px;
    }
    .m-side-nav .nav-title:hover span {
      color: #18A689;
    }
    .nav-item {
    }
    .nav-item li {
      padding-left: 60px;
      line-height: 34px;
      font-size: 14px;
    }
    .nav-item li a {
      display: block;
      color: #999999;
    }
    .nav-item li:hover {
      background: #E8E8E8;
      color: #18A689;
    }
    .nav-item li:hover a {
      color: #18A689;
    }
    .nav-item-li-this {
      background: #E6E6E6;
    }
    .nav-item-li-this a {
      color: #18A689 !important;
    }
  </style>
</head>

<body>
<!-- 侧栏导航 -->
<div class=\"m-left\">
<div class=\"m-left-head\">
  <div class=\"head-img\">
    <a href=\"/user-info/index\" title=\"查看账户信息\">
      <img class=\"user_head_portrait\" src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/img/default-head-portrait.jpg\" onerror=\"this.src='//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/img/default-head-portrait.jpg'\"/>
    </a>
  </div>
  <div class=\"user\">
    <p>{{ user.nick_name }}</p>
  </div>
</div>
<div class=\"m-side-nav\">
  <div class=\"nav\">
    {% set icon_idx = 1 %}
    {% for nav in left_nav %}
      {#{% set path = nav.route ? path(nav.route) : nav.url %}#}
      {% set url = menu_path(nav) %}
      {% set is_current = current_path == url %}
      <a href=\"{{ url }}\" route=\"{{ nav|json_encode }}\" target=\"right-frame\"
         class=\"nav-title  {{ is_current ? 'nav-title-this' : '' }}\">
        <i class=\"iconfont icon-nav icon-nav-{{ icon_idx }}\">{{ nav.icon|raw }}</i>
        <span class=\"f-fs-16\">{{ nav.name }}</span>
      </a>
      {% set icon_idx = icon_idx + 1 %}
    {% endfor %}
  </div>
</div>
<div class=\"m-copy  f-tac s-gray\">

</div>
</div>

<!-- /侧栏导航 -->
<script type=\"text/javascript\">
    \$('.nav-title item').click(function () {
        \$(this).siblings('.nav-item').slideToggle('slow');
    });
    \$('.nav-title').click(function () {
        \$(this).addClass('nav-title-this');
        \$('.nav-title').not(this).removeClass('nav-title-this');
    });
</script>
</body>
</html>", "Open/ControlPanel/main_left.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Open\\ControlPanel\\main_left.twig");
    }
}
