<?php

/* Open/Common/topNav.twig */
class __TwigTemplate_7a3d346b2d1d8f31e776f420fb58cc72b825611f4542a9ace2d2d1217f813b55 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Open/Common/topNav.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Open/Common/topNav.twig"));

        // line 1
        $context["cate_id"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "request", array()), "get", array(0 => "cate_id", 1 => ""), "method");
        // line 2
        $context["sub_cate"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->source); })()), "request", array()), "get", array(0 => "sub_cate", 1 => ""), "method");
        // line 3
        echo "<div class=\"top\">
  <div class=\"top-location\">
    <div class=\"top-logo\"><a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("open_frontpage_index");
        echo "\"></a></div>
    <ul id=\"menu\">
      ";
        // line 7
        $context["top_nav"] = $this->extensions['App\Open\Twig\NavExtension']->getNavMenus();
        // line 8
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["top_nav"]) || array_key_exists("top_nav", $context) ? $context["top_nav"] : (function () { throw new Twig_Error_Runtime('Variable "top_nav" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
            // line 9
            echo "        ";
            $context["is_current"] = false;
            // line 10
            echo "      <li class=\"";
            echo (((isset($context["is_current"]) || array_key_exists("is_current", $context) ? $context["is_current"] : (function () { throw new Twig_Error_Runtime('Variable "is_current" does not exist.', 10, $this->source); })())) ? ("menu-this ") : (""));
            echo "  ";
            echo (((twig_get_attribute($this->env, $this->source, $context["nav"], "id", array()) == "goods")) ? ("menu-event ") : (""));
            echo "\">
        <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "name", array()), "html", null, true);
            echo "</a>
        ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, $context["nav"], "subbusiness", array(), "any", true, true)) {
                // line 13
                echo "        <div class=\"menu-list\">
          <div class=\"menu-list-location\">
            ";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["nav"], "subbusiness", array()));
                foreach ($context['_seq'] as $context["idx"] => $context["sub_nav"]) {
                    // line 16
                    echo "            ";
                    if (($context["idx"] <= 7)) {
                        // line 17
                        echo "            <div class=\"menu-item ";
                        echo ((((isset($context["cate_id"]) || array_key_exists("cate_id", $context) ? $context["cate_id"] : (function () { throw new Twig_Error_Runtime('Variable "cate_id" does not exist.', 17, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["sub_nav"], "id", array()))) ? ("menu-item-hover ") : (""));
                        echo "\">
              <div class=\"menu-title\">";
                        // line 18
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_nav"], "name", array()), "html", null, true);
                        echo "<i>>></i></div>
              <div class=\"menu-body \" style=\"top: -";
                        // line 19
                        echo twig_escape_filter($this->env, (46 * $context["idx"]), "html", null, true);
                        echo "px!important;\">
                ";
                        // line 20
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_nav"], "subfeature", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                            // line 21
                            echo "                <a href=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feature"], "url", array()), "html", null, true);
                            echo "\" style=\"";
                            echo (((twig_get_attribute($this->env, $this->source, $context["feature"], "id", array()) == (isset($context["sub_cate"]) || array_key_exists("sub_cate", $context) ? $context["sub_cate"] : (function () { throw new Twig_Error_Runtime('Variable "sub_cate" does not exist.', 21, $this->source); })()))) ? ("background:#0FB5D8;") : (""));
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feature"], "name", array()), "html", null, true);
                            echo "</a>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 23
                        echo "              </div>
            </div>
            ";
                    }
                    // line 26
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['idx'], $context['sub_nav'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "            <pre><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/img/xiala-up.png\"/></pre>
          </div>
        </div>
        ";
            }
            // line 31
            echo "      </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </ul>
    <div class=\"top-login\">
      <a href=\"/open/dashboard\" class=\"btn btn-blue\" target=\"_blank\">控制台</a>
      ";
        // line 36
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OPEN_PLATFORM")) {
            // line 37
            echo "        <a href=\"/open/dashboard\" class=\"a\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 37, $this->source); })()), "user", array()), "nick_name", array()), "html", null, true);
            echo "</a>
        <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath(), "html", null, true);
            echo "\" class=\"a\">退出</a>
      ";
        } else {
            // line 40
            echo "        <a href=\"javascript:void(0);\" onclick=\"login();\"
           class=\"a\">登录</a>
        <a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_register");
            echo "\" class=\"a\" target=\"_blank\">注册</a>
      ";
        }
        // line 44
        echo "    </div>
  </div>
</div>

<script type=\"text/javascript\">

//    <?php if(!(\$cate_id||\$two_cate_id)):?>
    ";
        // line 51
        if (( !(isset($context["cate_id"]) || array_key_exists("cate_id", $context) ? $context["cate_id"] : (function () { throw new Twig_Error_Runtime('Variable "cate_id" does not exist.', 51, $this->source); })()) &&  !(isset($context["sub_cate"]) || array_key_exists("sub_cate", $context) ? $context["sub_cate"] : (function () { throw new Twig_Error_Runtime('Variable "sub_cate" does not exist.', 51, $this->source); })()))) {
            // line 52
            echo "    \$(\".menu-list\").find('.menu-item').first().addClass('menu-item-hover');
    ";
        }
        // line 54
        echo "    \$(\".menu-event\").hover(
        function () {
            \$(\".menu-list\").slideDown(\"fast\");
        },
        function () {
            \$(\".menu-list\").stop(true).slideUp('fast');
        }
    );
    \$('.menu-title').mouseenter(function(){
        \$(this).parent().addClass('menu-item-hover').siblings().removeClass('menu-item-hover');
        \$(this).parent().find('.menu-body').hide();
    });

</script>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Open/Common/topNav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 54,  169 => 52,  167 => 51,  158 => 44,  153 => 42,  149 => 40,  144 => 38,  139 => 37,  137 => 36,  132 => 33,  125 => 31,  119 => 27,  113 => 26,  108 => 23,  95 => 21,  91 => 20,  87 => 19,  83 => 18,  78 => 17,  75 => 16,  71 => 15,  67 => 13,  65 => 12,  59 => 11,  52 => 10,  49 => 9,  44 => 8,  42 => 7,  37 => 5,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set cate_id     = app.request.get('cate_id', '') %}
{% set sub_cate = app.request.get('sub_cate', '') %}
<div class=\"top\">
  <div class=\"top-location\">
    <div class=\"top-logo\"><a href=\"{{ path('open_frontpage_index') }}\"></a></div>
    <ul id=\"menu\">
      {% set top_nav = get_service_mall_nav_menus() %}
      {% for nav in top_nav %}
        {% set is_current = false %}
      <li class=\"{{ is_current ? 'menu-this ' : '' }}  {{ nav.id == 'goods' ? 'menu-event ' : '' }}\">
        <a href=\"{{ nav.url }}\">{{ nav.name }}</a>
        {% if nav.subbusiness is defined %}
        <div class=\"menu-list\">
          <div class=\"menu-list-location\">
            {% for idx, sub_nav in nav.subbusiness %}
            {% if idx <= 7 %}
            <div class=\"menu-item {{ cate_id == sub_nav.id ? 'menu-item-hover ' : '' }}\">
              <div class=\"menu-title\">{{ sub_nav.name }}<i>>></i></div>
              <div class=\"menu-body \" style=\"top: -{{ 46 * idx }}px!important;\">
                {% for feature in sub_nav.subfeature %}
                <a href=\"{{ feature.url }}\" style=\"{{ feature.id == sub_cate ? 'background:#0FB5D8;' : ''}}\">{{ feature.name }}</a>
                {% endfor %}
              </div>
            </div>
            {% endif %}
            {% endfor %}
            <pre><img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/img/xiala-up.png\"/></pre>
          </div>
        </div>
        {% endif %}
      </li>
      {% endfor %}
    </ul>
    <div class=\"top-login\">
      <a href=\"/open/dashboard\" class=\"btn btn-blue\" target=\"_blank\">控制台</a>
      {% if is_granted('ROLE_OPEN_PLATFORM') %}
        <a href=\"/open/dashboard\" class=\"a\" target=\"_blank\">{{ app.user.nick_name }}</a>
        <a href=\"{{ logout_path() }}\" class=\"a\">退出</a>
      {% else %}
        <a href=\"javascript:void(0);\" onclick=\"login();\"
           class=\"a\">登录</a>
        <a href=\"{{ path('passport_register') }}\" class=\"a\" target=\"_blank\">注册</a>
      {% endif %}
    </div>
  </div>
</div>

<script type=\"text/javascript\">

//    <?php if(!(\$cate_id||\$two_cate_id)):?>
    {% if not cate_id and not sub_cate %}
    \$(\".menu-list\").find('.menu-item').first().addClass('menu-item-hover');
    {% endif %}
    \$(\".menu-event\").hover(
        function () {
            \$(\".menu-list\").slideDown(\"fast\");
        },
        function () {
            \$(\".menu-list\").stop(true).slideUp('fast');
        }
    );
    \$('.menu-title').mouseenter(function(){
        \$(this).parent().addClass('menu-item-hover').siblings().removeClass('menu-item-hover');
        \$(this).parent().find('.menu-body').hide();
    });

</script>

", "Open/Common/topNav.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Open\\Common\\topNav.twig");
    }
}
