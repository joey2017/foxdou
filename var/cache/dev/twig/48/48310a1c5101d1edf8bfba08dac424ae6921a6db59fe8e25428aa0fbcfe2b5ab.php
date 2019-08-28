<?php

/* Admin/UserDetail/ResellerPlatform/contact.twig */
class __TwigTemplate_f07d880a8d04380786ec9698c2416733b62673481613f67f473a4b1c1de0c23a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/ResellerPlatform/contact.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/ResellerPlatform/contact.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>基本管理-基本信息-联系信息</title>
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
    <script type=\"text/javascript\" src=\"/assets/admin/js/jquery.min.js\"></script>
</head>

<body>
<div class=\"main-box\">
    <ul class=\"h-tab\">
        <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_reseller_platform_basic_info", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 14, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">基本信息</a></li>
        <li class=\"tab-this\"><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_reseller_platform_contact", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 15, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">联系信息</a></li>
    </ul>
    <div class=\"h-details-box\">
        <ul class=\"h-details clearfloat\">
            <li>
                <div class=\"details-title\">店铺名称</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text inp-val\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 23, $this->source); })()), "shop_name", array()), "html", null, true);
        echo "</span>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">店铺地址</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text inp-val\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 31, $this->source); })()), "shop_address", array()), "html", null, true);
        echo "</span>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/UserDetail/ResellerPlatform/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 31,  59 => 23,  48 => 15,  44 => 14,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>基本管理-基本信息-联系信息</title>
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
    <script type=\"text/javascript\" src=\"/assets/admin/js/jquery.min.js\"></script>
</head>

<body>
<div class=\"main-box\">
    <ul class=\"h-tab\">
        <li><a href=\"{{ path('admin_user_details_reseller_platform_basic_info',{id:user.id}) }}\">基本信息</a></li>
        <li class=\"tab-this\"><a href=\"{{ path('admin_user_details_reseller_platform_contact',{id:user.id}) }}\">联系信息</a></li>
    </ul>
    <div class=\"h-details-box\">
        <ul class=\"h-details clearfloat\">
            <li>
                <div class=\"details-title\">店铺名称</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text inp-val\">{{ user.shop_name }}</span>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">店铺地址</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text inp-val\">{{ user.shop_address }}</span>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
</body>
</html>", "Admin/UserDetail/ResellerPlatform/contact.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\UserDetail\\ResellerPlatform\\contact.twig");
    }
}
