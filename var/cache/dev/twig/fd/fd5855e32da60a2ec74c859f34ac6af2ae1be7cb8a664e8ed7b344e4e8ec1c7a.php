<?php

/* Admin/Common/left_nav.twig */
class __TwigTemplate_6761016d7ec45a3f98112217148d032793048c21faa5e8186317c4f26537dfd6 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Common/left_nav.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Common/left_nav.twig"));

        // line 1
        $context["user"] = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "user", array());
        // line 2
        echo "
";
        // line 3
        $context["current_group"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "request", array()), "get", array(0 => "group"), "method");
        // line 4
        $context["admin_menus"] = $this->extensions['App\Common\Twig\AppExtension']->getParams("admin_menus");
        // line 5
        echo "
";
        // line 6
        $context["defaults"] = ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "debug", array())) ? (array("items" => array(0 => array("name" => ((("路由" . (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new Twig_Error_Runtime('Variable "current_route" does not exist.', 6, $this->source); })())) . " 没有匹配的项, group=") . (isset($context["current_group"]) || array_key_exists("current_group", $context) ? $context["current_group"] : (function () { throw new Twig_Error_Runtime('Variable "current_group" does not exist.', 6, $this->source); })())), "url" => "")))) : (array()));
        // line 7
        $context["left_nav"] = ((twig_get_attribute($this->env, $this->source, ($context["admin_menus"] ?? null), (isset($context["current_group"]) || array_key_exists("current_group", $context) ? $context["current_group"] : (function () { throw new Twig_Error_Runtime('Variable "current_group" does not exist.', 7, $this->source); })()), array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["admin_menus"] ?? null), (isset($context["current_group"]) || array_key_exists("current_group", $context) ? $context["current_group"] : (function () { throw new Twig_Error_Runtime('Variable "current_group" does not exist.', 7, $this->source); })()), array(), "array"), (isset($context["defaults"]) || array_key_exists("defaults", $context) ? $context["defaults"] : (function () { throw new Twig_Error_Runtime('Variable "defaults" does not exist.', 7, $this->source); })()))) : ((isset($context["defaults"]) || array_key_exists("defaults", $context) ? $context["defaults"] : (function () { throw new Twig_Error_Runtime('Variable "defaults" does not exist.', 7, $this->source); })())));
        // line 8
        echo "


<div class=\"layui-side-scroll\" data-path=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new Twig_Error_Runtime('Variable "current_path" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "\">
    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_index");
        echo "\" class=\"layui-logo\">
        <span>狐豆后台管理系统</span>
    </a>
    <ul class=\"layui-nav layui-nav-tree\">
        ";
        // line 16
        if ( !twig_get_attribute($this->env, $this->source, ($context["left_nav"] ?? null), "items", array(), "any", true, true)) {
            // line 17
            echo "            ";
            $context["url"] = $this->extensions['App\Common\Twig\AppExtension']->getMenuPath((isset($context["left_nav"]) || array_key_exists("left_nav", $context) ? $context["left_nav"] : (function () { throw new Twig_Error_Runtime('Variable "left_nav" does not exist.', 17, $this->source); })()));
            // line 18
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "
            <li class=\"layui-nav-item ";
            // line 19
            echo ((twig_in_filter((isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new Twig_Error_Runtime('Variable "current_path" does not exist.', 19, $this->source); })()), (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 19, $this->source); })()))) ? ("layui-this") : (""));
            echo "\">
                <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "\">
                    <i class=\"layui-icon ";
            // line 21
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["nav"] ?? null), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["nav"] ?? null), "icon", array()), "")) : ("")), "html", null, true);
            echo "\"></i>
                    <cite>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["left_nav"]) || array_key_exists("left_nav", $context) ? $context["left_nav"] : (function () { throw new Twig_Error_Runtime('Variable "left_nav" does not exist.', 22, $this->source); })()), "name", array()), "html", null, true);
            echo "</cite>
                </a>
            </li>
        ";
        } else {
            // line 26
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(((twig_get_attribute($this->env, $this->source, ($context["left_nav"] ?? null), "items", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["left_nav"] ?? null), "items", array()), array())) : (array())));
            foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
                // line 27
                echo "            ";
                if ( !twig_get_attribute($this->env, $this->source, $context["nav"], "items", array(), "any", true, true)) {
                    // line 28
                    echo "              ";
                    $context["url"] = $this->extensions['App\Common\Twig\AppExtension']->getMenuPath($context["nav"]);
                    // line 29
                    echo "              <li class=\"layui-nav-item ";
                    echo ((twig_in_filter((isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new Twig_Error_Runtime('Variable "current_path" does not exist.', 29, $this->source); })()), (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 29, $this->source); })()))) ? ("layui-this") : (""));
                    echo "\">
                <a href=\"";
                    // line 30
                    echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 30, $this->source); })()), "html", null, true);
                    echo "\">
                  <i class=\"layui-icon ";
                    // line 31
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["nav"], "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["nav"], "icon", array()), "")) : ("")), "html", null, true);
                    echo "\"></i>
                  <cite>";
                    // line 32
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "name", array()), "html", null, true);
                    echo "</cite>
                </a>
              </li>
            ";
                } else {
                    // line 36
                    echo "              <li class=\"layui-nav-item layui-nav-itemed\">
                <a href=\"javascript:;\">
                  <i class=\"layui-icon ";
                    // line 38
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["nav"], "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["nav"], "icon", array()), "")) : ("")), "html", null, true);
                    echo "\"></i>
                  <cite>";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "name", array()), "html", null, true);
                    echo "</cite>
                </a>
                <dl class=\"layui-nav-child\">
                  ";
                    // line 42
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["nav"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 43
                        echo "                    ";
                        $context["url"] = $this->extensions['App\Common\Twig\AppExtension']->getMenuPath($context["item"]);
                        // line 44
                        echo "                    <dd class=\"";
                        echo ((twig_in_filter((isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new Twig_Error_Runtime('Variable "current_path" does not exist.', 44, $this->source); })()), (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 44, $this->source); })()))) ? ("layui-this") : (""));
                        echo "\">
                      <a href=\"";
                        // line 45
                        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 45, $this->source); })()), "html", null, true);
                        echo "\">
                        ";
                        // line 46
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                        echo "
                          ";
                        // line 47
                        if ((isset($context["order_recharge_type_total"]) || array_key_exists("order_recharge_type_total", $context))) {
                            // line 48
                            echo "                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((isset($context["order_recharge_type_total"]) || array_key_exists("order_recharge_type_total", $context) ? $context["order_recharge_type_total"] : (function () { throw new Twig_Error_Runtime('Variable "order_recharge_type_total" does not exist.', 48, $this->source); })()));
                            foreach ($context['_seq'] as $context["ortt_key"] => $context["ortt"]) {
                                // line 49
                                echo "                              ";
                                if (($context["ortt_key"] == twig_get_attribute($this->env, $this->source, $context["item"], "action", array()))) {
                                    // line 50
                                    echo "                              <span class=\"layui-badge\">
                                ";
                                    // line 51
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ortt"], twig_get_attribute($this->env, $this->source, $context["item"], "cate_id", array()), array(), "array"), "html", null, true);
                                    echo "
                              </span>
                              ";
                                }
                                // line 54
                                echo "                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['ortt_key'], $context['ortt'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 55
                            echo "                          ";
                        } else {
                            // line 56
                            echo "                          ";
                        }
                        // line 57
                        echo "                      </a>
                    </dd>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo "                </dl>
              </li>
            ";
                }
                // line 63
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        ";
        }
        // line 65
        echo "    </ul>
</div>

";
        // line 68
        if (((isset($context["current_group"]) || array_key_exists("current_group", $context) ? $context["current_group"] : (function () { throw new Twig_Error_Runtime('Variable "current_group" does not exist.', 68, $this->source); })()) == "order-management")) {
            // line 69
            echo "    <script>
      function get_order_type_total(){
          var success = function(res){
              if (res.status) {
                  console.log(res);
              } else {
                  console.log('订单分类统计信息获取错误');
              }
          }
          nxwd.ajaxRequest('";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_get_recharge_order_type_total");
            echo "','POST',{},'json',success);
      }
      setInterval(get_order_type_total,30000);
    </script>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Common/left_nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 78,  215 => 69,  213 => 68,  208 => 65,  205 => 64,  199 => 63,  194 => 60,  186 => 57,  183 => 56,  180 => 55,  174 => 54,  168 => 51,  165 => 50,  162 => 49,  157 => 48,  155 => 47,  151 => 46,  147 => 45,  142 => 44,  139 => 43,  135 => 42,  129 => 39,  125 => 38,  121 => 36,  114 => 32,  110 => 31,  106 => 30,  101 => 29,  98 => 28,  95 => 27,  90 => 26,  83 => 22,  79 => 21,  75 => 20,  71 => 19,  66 => 18,  63 => 17,  61 => 16,  54 => 12,  50 => 11,  45 => 8,  43 => 7,  41 => 6,  38 => 5,  36 => 4,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set user = app.user %}

{% set current_group = app.request.get('group') %}
{% set admin_menus = params(\"admin_menus\") %}

{% set defaults = app.debug ? {\"items\": [{\"name\": \"路由\" ~ current_route ~ \" 没有匹配的项, group=\" ~ current_group, \"url\": \"\"}]} : [] %}
{% set left_nav = admin_menus[current_group]|default(defaults) %}



<div class=\"layui-side-scroll\" data-path=\"{{ current_path }}\">
    <a href=\"{{ path('admin_dashboard_index') }}\" class=\"layui-logo\">
        <span>狐豆后台管理系统</span>
    </a>
    <ul class=\"layui-nav layui-nav-tree\">
        {% if left_nav.items is not defined %}
            {% set url = menu_path(left_nav) %}
            {{ url }}
            <li class=\"layui-nav-item {{ current_path in url ? 'layui-this' : '' }}\">
                <a href=\"{{ url }}\">
                    <i class=\"layui-icon {{ nav.icon|default('') }}\"></i>
                    <cite>{{ left_nav.name }}</cite>
                </a>
            </li>
        {% else %}
          {% for nav in left_nav.items|default([]) %}
            {% if nav.items is not defined %}
              {% set url = menu_path(nav) %}
              <li class=\"layui-nav-item {{ current_path in url ? 'layui-this' : '' }}\">
                <a href=\"{{ url }}\">
                  <i class=\"layui-icon {{ nav.icon|default('') }}\"></i>
                  <cite>{{ nav.name }}</cite>
                </a>
              </li>
            {% else %}
              <li class=\"layui-nav-item layui-nav-itemed\">
                <a href=\"javascript:;\">
                  <i class=\"layui-icon {{ nav.icon|default('') }}\"></i>
                  <cite>{{ nav.name }}</cite>
                </a>
                <dl class=\"layui-nav-child\">
                  {% for item in nav.items %}
                    {% set url = menu_path(item) %}
                    <dd class=\"{{ current_path in url ? 'layui-this' : '' }}\">
                      <a href=\"{{ url }}\">
                        {{ item.name }}
                          {% if order_recharge_type_total is defined %}
                            {% for ortt_key, ortt in order_recharge_type_total %}
                              {% if ortt_key == item.action %}
                              <span class=\"layui-badge\">
                                {{ ortt[item.cate_id] }}
                              </span>
                              {% endif %}
                            {% endfor %}
                          {% else %}
                          {% endif %}
                      </a>
                    </dd>
                  {% endfor %}
                </dl>
              </li>
            {% endif %}
          {% endfor %}
        {% endif %}
    </ul>
</div>

{% if current_group == \"order-management\" %}
    <script>
      function get_order_type_total(){
          var success = function(res){
              if (res.status) {
                  console.log(res);
              } else {
                  console.log('订单分类统计信息获取错误');
              }
          }
          nxwd.ajaxRequest('{{ path(\"admin_orders_get_recharge_order_type_total\") }}','POST',{},'json',success);
      }
      setInterval(get_order_type_total,30000);
    </script>
{% endif %}
", "Admin/Common/left_nav.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\Common\\left_nav.twig");
    }
}
