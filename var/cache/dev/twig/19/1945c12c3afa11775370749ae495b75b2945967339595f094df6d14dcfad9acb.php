<?php

/* Admin/UserDetail/Main/real_name_info_pic.twig */
class __TwigTemplate_bdadbd5730abeb4a1dd6bc81ce809255c0afda4b70ed781341325e0172ea100d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/Main/real_name_info_pic.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/Main/real_name_info_pic.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>基本管理-实名认证-证件照片</title>
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
    <script type=\"text/javascript\" src=\"/assets/admin/js/jquery.min.js\"></script>
</head>
<style>
    img{
        height: 200px;
    }
</style>
<body>
<div class=\"main-box\">
    <ul class=\"h-tab\">
        <li><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_main_real_name_info", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 18, $this->source); })()), "user_id", array()))), "html", null, true);
        echo "\">认证信息</a></li>
        <li class=\"tab-this\"><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_main_real_name_info_pic", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 19, $this->source); })()), "user_id", array()))), "html", null, true);
        echo "\">证件照片</a></li>
        <li><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_main_real_name_info_history", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 20, $this->source); })()), "user_id", array()))), "html", null, true);
        echo "\">历史认证</a></li>
    </ul>
    <div class=\"h-details-box\">
        <ul class=\"h-details clearfloat\">
            <li>
                <div class=\"details-title\">身份证正面照片</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 28, $this->source); })()), "positive", array()), "html", null, true);
        echo "\"></span>
                        <input type=\"text\" name=\"positive\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 29, $this->source); })()), "positive", array()), "html", null, true);
        echo "\" class=\"h-input-ing\" style=\"display: none;\" />
                    </div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">身份证反面照片</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text\"><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 37, $this->source); })()), "negative", array()), "html", null, true);
        echo "\"></span>
                        <input type=\"text\" name=\"negative\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 38, $this->source); })()), "negative", array()), "html", null, true);
        echo "\" class=\"h-input-ing\" style=\"display: none;\" />
                    </div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">手持身份证照片</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 46, $this->source); })()), "hand_photo", array()), "html", null, true);
        echo "\"></span>
                        <input type=\"text\" name=\"hand_photo\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 47, $this->source); })()), "hand_photo", array()), "html", null, true);
        echo "\" class=\"h-input-ing\" style=\"display: none;\" />
                    </div>
                </div>
            </li>
            ";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 51, $this->source); })()), "user_type", array()) != "I")) {
            // line 52
            echo "            <li>
                <div class=\"details-title\">营业执照照片</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text\"><img src=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 56, $this->source); })()), "business_license", array()), "html", null, true);
            echo "\"></span>
                        <input type=\"text\" name=\"business_license\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 57, $this->source); })()), "business_license", array()), "html", null, true);
            echo "\" class=\"h-input-ing\" style=\"display: none;\" />
                    </div>
                </div>
            </li>
            ";
        }
        // line 62
        echo "        </ul>
    </div>
</div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/UserDetail/Main/real_name_info_pic.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 62,  120 => 57,  116 => 56,  110 => 52,  108 => 51,  101 => 47,  97 => 46,  86 => 38,  82 => 37,  71 => 29,  67 => 28,  56 => 20,  52 => 19,  48 => 18,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>基本管理-实名认证-证件照片</title>
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
    <script type=\"text/javascript\" src=\"/assets/admin/js/jquery.min.js\"></script>
</head>
<style>
    img{
        height: 200px;
    }
</style>
<body>
<div class=\"main-box\">
    <ul class=\"h-tab\">
        <li><a href=\"{{ path('admin_user_details_main_real_name_info',{id:user.user_id}) }}\">认证信息</a></li>
        <li class=\"tab-this\"><a href=\"{{ path('admin_user_details_main_real_name_info_pic',{id:user.user_id}) }}\">证件照片</a></li>
        <li><a href=\"{{ path('admin_user_details_main_real_name_info_history',{id:user.user_id}) }}\">历史认证</a></li>
    </ul>
    <div class=\"h-details-box\">
        <ul class=\"h-details clearfloat\">
            <li>
                <div class=\"details-title\">身份证正面照片</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text\"><img src=\"{{ user.positive }}\"></span>
                        <input type=\"text\" name=\"positive\" value=\"{{ user.positive }}\" class=\"h-input-ing\" style=\"display: none;\" />
                    </div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">身份证反面照片</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text\"><img src=\"{{ user.negative }}\"></span>
                        <input type=\"text\" name=\"negative\" value=\"{{ user.negative }}\" class=\"h-input-ing\" style=\"display: none;\" />
                    </div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">手持身份证照片</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text\"><img src=\"{{ user.hand_photo }}\"></span>
                        <input type=\"text\" name=\"hand_photo\" value=\"{{ user.hand_photo }}\" class=\"h-input-ing\" style=\"display: none;\" />
                    </div>
                </div>
            </li>
            {% if user.user_type != 'I' %}
            <li>
                <div class=\"details-title\">营业执照照片</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text\"><img src=\"{{ user.business_license }}\"></span>
                        <input type=\"text\" name=\"business_license\" value=\"{{ user.business_license }}\" class=\"h-input-ing\" style=\"display: none;\" />
                    </div>
                </div>
            </li>
            {% endif %}
        </ul>
    </div>
</div>
</body>
</html>
", "Admin/UserDetail/Main/real_name_info_pic.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\UserDetail\\Main\\real_name_info_pic.twig");
    }
}
