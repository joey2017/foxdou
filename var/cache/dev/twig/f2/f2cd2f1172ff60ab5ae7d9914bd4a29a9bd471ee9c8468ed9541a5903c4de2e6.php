<?php

/* Admin/UserDetail/OpenPlatform/contact.twig */
class __TwigTemplate_05204d89d933a136ef9e6f44e1d3a80bb701d4e4efed2f45dd0c1d540490e96b extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/OpenPlatform/contact.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/OpenPlatform/contact.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>基本管理-基本信息-联系信息</title>
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
    <script type=\"text/javascript\" src=\"/assets/admin/js/jquery.min.js\"></script>
    <script language=\"JavaScript\">
        //基本信息的修改和保存
        \$(function(){
            function edit(){
                \$('.inp-val').each(function(){
                    var value = \$(this).html();
                    \$(this).hide();
                    \$('textarea').hide();
                    \$(this).next('input').fadeIn();
                    \$(this).next('input').val(value);

                });
            }
            function save(){
                \$('input').each(function(){
                    var value = \$(this).val();
                    \$(this).siblings('span.inp-val').html(value);
                    \$(this).siblings('span.inp-val').show();
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
        <li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_open_platform_basic_info", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 48, $this->source); })()), "user_id", array()))), "html", null, true);
        echo "\">基本信息</a></li>
        <li class=\"tab-this\"><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_open_platform_contact", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 49, $this->source); })()), "user_id", array()))), "html", null, true);
        echo "\">联系信息</a></li>
    </ul>
    <div class=\"h-details-box\">
        <ul class=\"h-details clearfloat\">
            <li>
                <div class=\"details-title\">联系人姓名</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text inp-val\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 57, $this->source); })()), "contact_name", array()), "html", null, true);
        echo "</span>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">手机号码</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text inp-val\">";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 65, $this->source); })()), "contact_phone", array()), "html", null, true);
        echo "</span>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">QQ</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text inp-val\">";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 73, $this->source); })()), "contact_qq", array()), "html", null, true);
        echo "</span>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">邮箱</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text inp-val\">";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 81, $this->source); })()), "contact_mail", array()), "html", null, true);
        echo "</span>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">联系人地址</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text inp-val\">";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 89, $this->source); })()), "contact_address", array()), "html", null, true);
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
        return "Admin/UserDetail/OpenPlatform/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 89,  126 => 81,  115 => 73,  104 => 65,  93 => 57,  82 => 49,  78 => 48,  29 => 1,);
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
    <script language=\"JavaScript\">
        //基本信息的修改和保存
        \$(function(){
            function edit(){
                \$('.inp-val').each(function(){
                    var value = \$(this).html();
                    \$(this).hide();
                    \$('textarea').hide();
                    \$(this).next('input').fadeIn();
                    \$(this).next('input').val(value);

                });
            }
            function save(){
                \$('input').each(function(){
                    var value = \$(this).val();
                    \$(this).siblings('span.inp-val').html(value);
                    \$(this).siblings('span.inp-val').show();
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
        <li><a href=\"{{ path('admin_user_details_open_platform_basic_info',{id:user.user_id}) }}\">基本信息</a></li>
        <li class=\"tab-this\"><a href=\"{{ path('admin_user_details_open_platform_contact',{id:user.user_id}) }}\">联系信息</a></li>
    </ul>
    <div class=\"h-details-box\">
        <ul class=\"h-details clearfloat\">
            <li>
                <div class=\"details-title\">联系人姓名</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text inp-val\">{{ user.contact_name }}</span>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">手机号码</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text inp-val\">{{ user.contact_phone }}</span>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">QQ</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text inp-val\">{{ user.contact_qq }}</span>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">邮箱</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text inp-val\">{{ user.contact_mail }}</span>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">联系人地址</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text inp-val\">{{ user.contact_address }}</span>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
</body>
</html>", "Admin/UserDetail/OpenPlatform/contact.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\UserDetail\\OpenPlatform\\contact.twig");
    }
}
