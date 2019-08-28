<?php

/* /Supplier/Common/left_nav.twig */
class __TwigTemplate_f197e32f8db585cfa042772d1110981df470f0b71bf6cda0d0ae8c875a15cf8d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Supplier/Common/left_nav.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Supplier/Common/left_nav.twig"));

        // line 1
        $context["user"] = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "user", array());
        // line 2
        echo "
";
        // line 3
        $context["current_group"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "request", array()), "get", array(0 => "group"), "method");
        // line 4
        $context["menus"] = $this->extensions['App\Common\Twig\AppExtension']->getParams("supplier_menus");
        // line 5
        echo "
";
        // line 6
        $context["defaults"] = ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "debug", array())) ? (array("items" => array(0 => array("name" => ((("路由" . (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new Twig_Error_Runtime('Variable "current_route" does not exist.', 6, $this->source); })())) . " 没有匹配的项, group=") . (isset($context["current_group"]) || array_key_exists("current_group", $context) ? $context["current_group"] : (function () { throw new Twig_Error_Runtime('Variable "current_group" does not exist.', 6, $this->source); })())), "url" => "")))) : (array()));
        // line 7
        $context["left_nav"] = ((twig_get_attribute($this->env, $this->source, ($context["menus"] ?? null), (isset($context["current_group"]) || array_key_exists("current_group", $context) ? $context["current_group"] : (function () { throw new Twig_Error_Runtime('Variable "current_group" does not exist.', 7, $this->source); })()), array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["menus"] ?? null), (isset($context["current_group"]) || array_key_exists("current_group", $context) ? $context["current_group"] : (function () { throw new Twig_Error_Runtime('Variable "current_group" does not exist.', 7, $this->source); })()), array(), "array"), (isset($context["defaults"]) || array_key_exists("defaults", $context) ? $context["defaults"] : (function () { throw new Twig_Error_Runtime('Variable "defaults" does not exist.', 7, $this->source); })()))) : ((isset($context["defaults"]) || array_key_exists("defaults", $context) ? $context["defaults"] : (function () { throw new Twig_Error_Runtime('Variable "defaults" does not exist.', 7, $this->source); })())));
        // line 8
        echo "

<div class=\"foxdou-side\">
    <div class=\"layui-side-scroll\" data-path=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new Twig_Error_Runtime('Variable "current_path" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "\">
        <ul class=\"layui-nav layui-nav-tree\" id=\"layui-nav-tree\">
            ";
        // line 13
        if ( !twig_get_attribute($this->env, $this->source, ($context["left_nav"] ?? null), "items", array(), "any", true, true)) {
            // line 14
            echo "                ";
            $context["url"] = $this->extensions['App\Common\Twig\AppExtension']->getMenuPath((isset($context["left_nav"]) || array_key_exists("left_nav", $context) ? $context["left_nav"] : (function () { throw new Twig_Error_Runtime('Variable "left_nav" does not exist.', 14, $this->source); })()));
            // line 15
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "
                <li class=\"layui-nav-item ";
            // line 16
            echo ((twig_in_filter((isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new Twig_Error_Runtime('Variable "current_path" does not exist.', 16, $this->source); })()), (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 16, $this->source); })()))) ? ("layui-this") : (""));
            echo "\">
                    <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 17, $this->source); })()), "html", null, true);
            echo "\" data-id=\"";
            if (twig_get_attribute($this->env, $this->source, ($context["left_nav"] ?? null), "cate_id", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["left_nav"]) || array_key_exists("left_nav", $context) ? $context["left_nav"] : (function () { throw new Twig_Error_Runtime('Variable "left_nav" does not exist.', 17, $this->source); })()), "cate_id", array()), "html", null, true);
            }
            echo "\">
                        <i class=\"layui-icon ";
            // line 18
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["nav"] ?? null), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["nav"] ?? null), "icon", array()), "")) : ("")), "html", null, true);
            echo "\"></i>
                        <cite>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["left_nav"]) || array_key_exists("left_nav", $context) ? $context["left_nav"] : (function () { throw new Twig_Error_Runtime('Variable "left_nav" does not exist.', 19, $this->source); })()), "name", array()), "html", null, true);
            echo "</cite>
                    </a>
                </li>
            ";
        } else {
            // line 23
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(((twig_get_attribute($this->env, $this->source, ($context["left_nav"] ?? null), "items", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["left_nav"] ?? null), "items", array()), array())) : (array())));
            foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
                // line 24
                echo "                    ";
                if ( !twig_get_attribute($this->env, $this->source, $context["nav"], "items", array(), "any", true, true)) {
                    // line 25
                    echo "                        ";
                    $context["url"] = $this->extensions['App\Common\Twig\AppExtension']->getMenuPath($context["nav"]);
                    // line 26
                    echo "                        <li class=\"layui-nav-item ";
                    echo ((twig_in_filter((isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new Twig_Error_Runtime('Variable "current_path" does not exist.', 26, $this->source); })()), (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 26, $this->source); })()))) ? ("layui-this") : (""));
                    echo "\">
                            <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 27, $this->source); })()), "html", null, true);
                    echo "\" data-id=\"";
                    if (twig_get_attribute($this->env, $this->source, $context["nav"], "cate_id", array(), "any", true, true)) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "cate_id", array()), "html", null, true);
                    }
                    echo "\">
                                <i class=\"layui-icon ";
                    // line 28
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["nav"], "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["nav"], "icon", array()), "")) : ("")), "html", null, true);
                    echo "\"></i>
                                <cite>";
                    // line 29
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "name", array()), "html", null, true);
                    echo "</cite>
                                ";
                    // line 30
                    if ((isset($context["order_recharge_type_total"]) || array_key_exists("order_recharge_type_total", $context))) {
                        // line 31
                        echo "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["order_recharge_type_total"]) || array_key_exists("order_recharge_type_total", $context) ? $context["order_recharge_type_total"] : (function () { throw new Twig_Error_Runtime('Variable "order_recharge_type_total" does not exist.', 31, $this->source); })()));
                        foreach ($context['_seq'] as $context["ortt_key"] => $context["ortt"]) {
                            // line 32
                            echo "                                        <span class=\"layui-badge\">
                                            ";
                            // line 33
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ortt"], twig_get_attribute($this->env, $this->source, $context["nav"], "cate_id", array()), array(), "array"), "html", null, true);
                            echo "
                                        </span>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['ortt_key'], $context['ortt'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 36
                        echo "                                ";
                    } else {
                        // line 37
                        echo "                                ";
                    }
                    // line 38
                    echo "                            </a>
                        </li>
                    ";
                } else {
                    // line 41
                    echo "                        <li class=\"layui-nav-item layui-nav-itemed\">
                            <a href=\"javascript:;\">
                                <i class=\"layui-icon ";
                    // line 43
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["nav"], "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["nav"], "icon", array()), "")) : ("")), "html", null, true);
                    echo "\"></i>
                                <cite>";
                    // line 44
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "name", array()), "html", null, true);
                    echo "</cite>
                            </a>
                            <dl class=\"layui-nav-child\">
                                ";
                    // line 47
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["nav"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 48
                        echo "                                    ";
                        $context["url"] = $this->extensions['App\Common\Twig\AppExtension']->getMenuPath($context["item"]);
                        // line 49
                        echo "                                    <dd class=\"";
                        echo ((twig_in_filter((isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new Twig_Error_Runtime('Variable "current_path" does not exist.', 49, $this->source); })()), (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 49, $this->source); })()))) ? ("layui-this") : (""));
                        echo "\">
                                        <a href=\"";
                        // line 50
                        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 50, $this->source); })()), "html", null, true);
                        echo "\">
                                            ";
                        // line 51
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                        echo "
                                            ";
                        // line 52
                        if ((isset($context["order_recharge_type_total"]) || array_key_exists("order_recharge_type_total", $context))) {
                            // line 53
                            echo "                                                ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((isset($context["order_recharge_type_total"]) || array_key_exists("order_recharge_type_total", $context) ? $context["order_recharge_type_total"] : (function () { throw new Twig_Error_Runtime('Variable "order_recharge_type_total" does not exist.', 53, $this->source); })()));
                            foreach ($context['_seq'] as $context["ortt_key"] => $context["ortt"]) {
                                // line 54
                                echo "                                                    ";
                                if (($context["ortt_key"] == twig_get_attribute($this->env, $this->source, $context["item"], "action", array()))) {
                                    // line 55
                                    echo "                                                        <span class=\"layui-badge\">
                                                            ";
                                    // line 56
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ortt"], twig_get_attribute($this->env, $this->source, $context["item"], "cate_id", array()), array(), "array"), "html", null, true);
                                    echo "
                                                        </span>
                                                    ";
                                }
                                // line 59
                                echo "                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['ortt_key'], $context['ortt'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 60
                            echo "                                            ";
                        } else {
                            // line 61
                            echo "                                            ";
                        }
                        // line 62
                        echo "                                        </a>
                                    </dd>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 65
                    echo "                            </dl>
                        </li>
                    ";
                }
                // line 68
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "            ";
        }
        // line 70
        echo "        </ul>
    </div>
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/Supplier/Common/left_nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 70,  234 => 69,  228 => 68,  223 => 65,  215 => 62,  212 => 61,  209 => 60,  203 => 59,  197 => 56,  194 => 55,  191 => 54,  186 => 53,  184 => 52,  180 => 51,  176 => 50,  171 => 49,  168 => 48,  164 => 47,  158 => 44,  154 => 43,  150 => 41,  145 => 38,  142 => 37,  139 => 36,  130 => 33,  127 => 32,  122 => 31,  120 => 30,  116 => 29,  112 => 28,  104 => 27,  99 => 26,  96 => 25,  93 => 24,  88 => 23,  81 => 19,  77 => 18,  69 => 17,  65 => 16,  60 => 15,  57 => 14,  55 => 13,  50 => 11,  45 => 8,  43 => 7,  41 => 6,  38 => 5,  36 => 4,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set user = app.user %}

{% set current_group = app.request.get('group') %}
{% set menus = params(\"supplier_menus\") %}

{% set defaults = app.debug ? {\"items\": [{\"name\": \"路由\" ~ current_route ~ \" 没有匹配的项, group=\" ~ current_group, \"url\": \"\"}]} : [] %}
{% set left_nav = menus[current_group]|default(defaults) %}


<div class=\"foxdou-side\">
    <div class=\"layui-side-scroll\" data-path=\"{{ current_path }}\">
        <ul class=\"layui-nav layui-nav-tree\" id=\"layui-nav-tree\">
            {% if left_nav.items is not defined %}
                {% set url = menu_path(left_nav) %}
                {{ url }}
                <li class=\"layui-nav-item {{ current_path in url ? 'layui-this' : '' }}\">
                    <a href=\"{{ url }}\" data-id=\"{% if left_nav.cate_id is defined %}{{ left_nav.cate_id }}{% endif %}\">
                        <i class=\"layui-icon {{ nav.icon|default('') }}\"></i>
                        <cite>{{ left_nav.name }}</cite>
                    </a>
                </li>
            {% else %}
                {% for nav in left_nav.items|default([]) %}
                    {% if nav.items is not defined %}
                        {% set url = menu_path(nav) %}
                        <li class=\"layui-nav-item {{ current_path in url ? 'layui-this' : '' }}\">
                            <a href=\"{{ url }}\" data-id=\"{% if nav.cate_id is defined %}{{ nav.cate_id }}{% endif %}\">
                                <i class=\"layui-icon {{ nav.icon|default('') }}\"></i>
                                <cite>{{ nav.name }}</cite>
                                {% if order_recharge_type_total is defined %}
                                    {% for ortt_key, ortt in order_recharge_type_total %}
                                        <span class=\"layui-badge\">
                                            {{ ortt[nav.cate_id] }}
                                        </span>
                                    {% endfor %}
                                {% else %}
                                {% endif %}
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
</div>

", "/Supplier/Common/left_nav.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Supplier\\Common\\left_nav.twig");
    }
}
