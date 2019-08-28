<?php

/* /Passport/Home/safe_inspect.twig */
class __TwigTemplate_0ab2e850c36e71c8d7d5f0bcd4aa787a3cd8ff9364e338883349db9533956b27 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Passport/Home/safe_inspect.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Passport/Home/safe_inspect.twig"));

        // line 1
        echo "<div class=\"level\">
    <label>安全级别：</label>
    <p>
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["all_num"]) || array_key_exists("all_num", $context) ? $context["all_num"] : (function () { throw new Twig_Error_Runtime('Variable "all_num" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 5
            echo "        <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/xx.png\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "
        ";
        // line 8
        if ((isset($context["ban_num"]) || array_key_exists("ban_num", $context) ? $context["ban_num"] : (function () { throw new Twig_Error_Runtime('Variable "ban_num" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "        <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/xx-b.png\" />
        ";
        }
        // line 11
        echo "
        ";
        // line 12
        $context["number"] = ((5 - (isset($context["all_num"]) || array_key_exists("all_num", $context) ? $context["all_num"] : (function () { throw new Twig_Error_Runtime('Variable "all_num" does not exist.', 12, $this->source); })())) - (((isset($context["ban_num"]) || array_key_exists("ban_num", $context) ? $context["ban_num"] : (function () { throw new Twig_Error_Runtime('Variable "ban_num" does not exist.', 12, $this->source); })())) ? (1) : (0)));
        // line 13
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new Twig_Error_Runtime('Variable "number" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            // line 14
            echo "        <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/xx-h.png\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </p>
    <p>
        <em>";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new Twig_Error_Runtime('Variable "score" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "</em>
        <span>分</span>
    </p>
</div>
<div class=\"my-circs-col\" style=\"display: block;\">
    ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, (isset($context["inspect_data"]) || array_key_exists("inspect_data", $context) ? $context["inspect_data"] : (function () { throw new Twig_Error_Runtime('Variable "inspect_data" does not exist.', 23, $this->source); })()), "false", array())) {
            // line 24
            echo "    <p>您的帐号存在 <span style=\"color: #ff8a00; font-size: 18px;\">";
            echo twig_escape_filter($this->env, (isset($context["loser_num"]) || array_key_exists("loser_num", $context) ? $context["loser_num"] : (function () { throw new Twig_Error_Runtime('Variable "loser_num" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "</span> 项风险</p>
    <div class=\"open-item\">展开/收起安全项<span class=\"triangle\"></span></div>
    ";
        } else {
            // line 27
            echo "    <p>您的帐号很安全,请继续保持哦！</p>
    ";
        }
        // line 29
        echo "    <div class=\"my-circs\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["inspect_data"]) || array_key_exists("inspect_data", $context) ? $context["inspect_data"] : (function () { throw new Twig_Error_Runtime('Variable "inspect_data" does not exist.', 30, $this->source); })()), "false", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 31
            echo "        <div class=\"risk-item \">
            <dl>
                <dt>
                    <strong>
                        <em></em>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "title", array()), "html", null, true);
            echo "
                    </strong>
                </dt>
                <dd>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "info", array()), "html", null, true);
            echo "</dd>
            </dl>
            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "href", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "href_title", array()), "html", null, true);
            echo "</a>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </div>
</div>
<!--安全项-->
<div class=\"my-yes-col\"  style=\"display: block\">
    <p>安全项</p>
    <div class=\"my-circs\">
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["inspect_data"]) || array_key_exists("inspect_data", $context) ? $context["inspect_data"] : (function () { throw new Twig_Error_Runtime('Variable "inspect_data" does not exist.', 49, $this->source); })()), "true", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 50
            echo "        <div class=\"risk-item my_yes\">
            <dl>
                <dt>
                    <strong>
                        <em></em>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "safe_title", array()), "html", null, true);
            echo "
                    </strong>
                </dt>
                <dd>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "safe_info", array()), "html", null, true);
            echo "</dd>
            </dl>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "    </div>
</div>




";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/Passport/Home/safe_inspect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 61,  155 => 57,  149 => 54,  143 => 50,  139 => 49,  131 => 43,  120 => 40,  115 => 38,  109 => 35,  103 => 31,  99 => 30,  96 => 29,  92 => 27,  85 => 24,  83 => 23,  75 => 18,  71 => 16,  64 => 14,  59 => 13,  57 => 12,  54 => 11,  50 => 9,  48 => 8,  45 => 7,  38 => 5,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"level\">
    <label>安全级别：</label>
    <p>
        {% for i in all_num %}
        <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/xx.png\" />
        {% endfor %}

        {% if ban_num %}
        <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/xx-b.png\" />
        {% endif %}

        {% set number = 5 - all_num - (ban_num ? 1 : 0) %}
        {% for j in number %}
        <img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/xx-h.png\" />
        {% endfor %}
    </p>
    <p>
        <em>{{ score }}</em>
        <span>分</span>
    </p>
</div>
<div class=\"my-circs-col\" style=\"display: block;\">
    {% if inspect_data.false %}
    <p>您的帐号存在 <span style=\"color: #ff8a00; font-size: 18px;\">{{ loser_num }}</span> 项风险</p>
    <div class=\"open-item\">展开/收起安全项<span class=\"triangle\"></span></div>
    {% else %}
    <p>您的帐号很安全,请继续保持哦！</p>
    {% endif %}
    <div class=\"my-circs\">
        {% for v in inspect_data.false %}
        <div class=\"risk-item \">
            <dl>
                <dt>
                    <strong>
                        <em></em>{{ v.title }}
                    </strong>
                </dt>
                <dd>{{ v.info }}</dd>
            </dl>
            <a href=\"{{ v.href }}\" target=\"_blank\">{{ v.href_title }}</a>
        </div>
        {% endfor %}
    </div>
</div>
<!--安全项-->
<div class=\"my-yes-col\"  style=\"display: block\">
    <p>安全项</p>
    <div class=\"my-circs\">
        {% for v in inspect_data.true %}
        <div class=\"risk-item my_yes\">
            <dl>
                <dt>
                    <strong>
                        <em></em>{{ v.safe_title }}
                    </strong>
                </dt>
                <dd>{{ v.safe_info }}</dd>
            </dl>
        </div>
        {% endfor %}
    </div>
</div>




", "/Passport/Home/safe_inspect.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\Home\\safe_inspect.twig");
    }
}
