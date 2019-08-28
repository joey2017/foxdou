<?php

/* Admin/UserDetail/Main/real_name_info.twig */
class __TwigTemplate_075218912553a0de49c27f906661cc93e84c5a391082a55ae804356e50f1720c extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/Main/real_name_info.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/Main/real_name_info.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>基本管理-实名认证-认证信息</title>
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
    <script type=\"text/javascript\" src=\"/assets/admin/js/jquery.min.js\"></script>
    <script language=\"JavaScript\">
        \$(function(){
            function edit(){
                \$('.h-input-text').hide();
                \$('.h-input-text').next('input').fadeIn();
            }
            function save(){
                \$(\"input\").each(function(){
                    var value = \$(this).val();
                    \$(this).siblings('span.h-input-text').html(value);
                    \$(this).siblings('span.h-input-text').show();
                    \$(this).hide();
                });
            }
            \$('#edit').click(function(){
                var htmlText = \$('#edit').html();
                if(htmlText == '编辑'){
                    edit();
                    \$('#edit').html('保存');
                }else{
                    save();
                    \$('#edit').html('编辑');
                }
            });
        });
    </script>
</head>

<body>
<div class=\"main-box\">
    <ul class=\"h-tab\">
        <li class=\"tab-this\"><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_main_real_name_info", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 40, $this->source); })()), "user_id", array()))), "html", null, true);
        echo "\">认证信息</a></li>
        <li><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_main_real_name_info_pic", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 41, $this->source); })()), "user_id", array()))), "html", null, true);
        echo "\">证件照片</a></li>
        <li><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_main_real_name_info_history", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 42, $this->source); })()), "user_id", array()))), "html", null, true);
        echo "\">历史认证</a></li>
    </ul>
    <div class=\"h-details-box\">
        <ul class=\"h-details clearfloat\">
            <li>
                <div class=\"details-title\">性质</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text\">";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_constant("App\\Common\\Model\\User\\User::TYPES"), twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 50, $this->source); })()), "user_type", array()), array(), "array"), "html", null, true);
        echo "</span>
                        <input type=\"text\" name=\"type\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_constant("App\\Common\\Model\\User\\User::TYPES"), twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 51, $this->source); })()), "user_type", array()), array(), "array"), "html", null, true);
        echo "\" class=\"h-input-ing\" style=\"display: none;\" />
                    </div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">姓名</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 59, $this->source); })()), "name", array()), "html", null, true);
        echo "</span>
                        <input type=\"text\" name=\"realname\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 60, $this->source); })()), "name", array()), "html", null, true);
        echo "\" class=\"h-input-ing\" style=\"display: none;\" />
                    </div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">身份证号</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text\">";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 68, $this->source); })()), "card_id", array()), "html", null, true);
        echo "</span>
                        <input type=\"text\" name=\"card_id\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 69, $this->source); })()), "card_id", array()), "html", null, true);
        echo "\" class=\"h-input-ing\" style=\"display: none;\" />
                    </div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">性别</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text\">无</span>
                        <input type=\"text\" name=\"sex\" value=\"无\" class=\"h-input-ing\" style=\"display: none;\" />
                    </div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">生日</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text\">无</span>
                        <input type=\"text\" name=\"birthday\" value=\"无\" class=\"h-input-ing\" style=\"display: none;\" />
                    </div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">户籍地址</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text\">";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 95, $this->source); })()), "address", array()), "html", null, true);
        echo "</span>
                        <input type=\"text\" name=\"address\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 96, $this->source); })()), "address", array()), "html", null, true);
        echo "\" class=\"h-input-ing\" style=\"display: none;\" />
                    </div>
                </div>
            </li>
            <li>
                <div class=\"details-title\"></div>
                <div class=\"detail-content\">
                    <div class=\"h-input-block\" style=\"margin-top: 20px;\">
                        <button id=\"edit\" class=\"btn btn-green\">编辑</button>
                    </div>
                </div>
            </li>
        </ul>
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
        return "Admin/UserDetail/Main/real_name_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 96,  152 => 95,  123 => 69,  119 => 68,  108 => 60,  104 => 59,  93 => 51,  89 => 50,  78 => 42,  74 => 41,  70 => 40,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>基本管理-实名认证-认证信息</title>
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
    <script type=\"text/javascript\" src=\"/assets/admin/js/jquery.min.js\"></script>
    <script language=\"JavaScript\">
        \$(function(){
            function edit(){
                \$('.h-input-text').hide();
                \$('.h-input-text').next('input').fadeIn();
            }
            function save(){
                \$(\"input\").each(function(){
                    var value = \$(this).val();
                    \$(this).siblings('span.h-input-text').html(value);
                    \$(this).siblings('span.h-input-text').show();
                    \$(this).hide();
                });
            }
            \$('#edit').click(function(){
                var htmlText = \$('#edit').html();
                if(htmlText == '编辑'){
                    edit();
                    \$('#edit').html('保存');
                }else{
                    save();
                    \$('#edit').html('编辑');
                }
            });
        });
    </script>
</head>

<body>
<div class=\"main-box\">
    <ul class=\"h-tab\">
        <li class=\"tab-this\"><a href=\"{{ path('admin_user_details_main_real_name_info',{id:user.user_id}) }}\">认证信息</a></li>
        <li><a href=\"{{ path('admin_user_details_main_real_name_info_pic',{id:user.user_id}) }}\">证件照片</a></li>
        <li><a href=\"{{ path('admin_user_details_main_real_name_info_history',{id:user.user_id}) }}\">历史认证</a></li>
    </ul>
    <div class=\"h-details-box\">
        <ul class=\"h-details clearfloat\">
            <li>
                <div class=\"details-title\">性质</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text\">{{ constant(\"App\\\\Common\\\\Model\\\\User\\\\User::TYPES\")[user.user_type] }}</span>
                        <input type=\"text\" name=\"type\" value=\"{{ constant(\"App\\\\Common\\\\Model\\\\User\\\\User::TYPES\")[user.user_type] }}\" class=\"h-input-ing\" style=\"display: none;\" />
                    </div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">姓名</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text\">{{ user.name }}</span>
                        <input type=\"text\" name=\"realname\" value=\"{{ user.name }}\" class=\"h-input-ing\" style=\"display: none;\" />
                    </div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">身份证号</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text\">{{ user.card_id }}</span>
                        <input type=\"text\" name=\"card_id\" value=\"{{ user.card_id }}\" class=\"h-input-ing\" style=\"display: none;\" />
                    </div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">性别</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text\">无</span>
                        <input type=\"text\" name=\"sex\" value=\"无\" class=\"h-input-ing\" style=\"display: none;\" />
                    </div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">生日</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text\">无</span>
                        <input type=\"text\" name=\"birthday\" value=\"无\" class=\"h-input-ing\" style=\"display: none;\" />
                    </div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">户籍地址</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text\">{{ user.address }}</span>
                        <input type=\"text\" name=\"address\" value=\"{{ user.address }}\" class=\"h-input-ing\" style=\"display: none;\" />
                    </div>
                </div>
            </li>
            <li>
                <div class=\"details-title\"></div>
                <div class=\"detail-content\">
                    <div class=\"h-input-block\" style=\"margin-top: 20px;\">
                        <button id=\"edit\" class=\"btn btn-green\">编辑</button>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
</body>
</html>
", "Admin/UserDetail/Main/real_name_info.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\UserDetail\\Main\\real_name_info.twig");
    }
}
