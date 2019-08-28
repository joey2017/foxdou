<?php

/* /Passport/IdentityManagement/verified.twig */
class __TwigTemplate_121cecc6d4476b104116a94fbacc463b73f83a01a953e75f0c372aba7af3fe79 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/Passport/layout.twig", "/Passport/IdentityManagement/verified.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'main_content' => array($this, 'block_main_content'),
            'js_end' => array($this, 'block_js_end'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/Passport/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Passport/IdentityManagement/verified.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Passport/IdentityManagement/verified.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "    ";
        echo $this->extensions['App\Common\Twig\AppExtension']->useAssets(array(0 => "/assets/passport/css/common.css"));
        // line 6
        echo "
    <style>
        .shiMin{height: auto;border: 1px solid #E5E5E5;}
        .shiMin .nameBar{width: auto;height: auto;padding:30px 20px 15px 20px;background: #FFFFFF;}
        .shiMin .headImg{float: left; width: 80px;height: 80px;border-radius: 45px;border: 1px solid #EEEEEE;overflow: hidden;background: #C9DAE1;}
        .shiMin .headImg img{width: 100%;height: 100%;}
        .shiMin .headName{float: left;padding-top: 10px;margin-left: 20px;color: #333333;}
        .shiMin .headName h2{padding:7px 0;font-size: 18px;font-weight: normal;}
        .shiMin .headName span{color: #555555;}
        .shiMin .infoBar{width: auto;height: auto;padding: 20px 10px 20px 90px; background: #F5F5F5;}
        .shiMin .info{float: left;margin: 0 30px;}
        .shiMin .info li{height: 24px;padding: 3px 0;line-height: 24px;color: #333333;}
        .shiMin .info em{float: left; display: inline-block; width: 110px;font-style: normal;color: #888888}
        .shiMin .info span{float: left;display: inline-block; width: 170px;}
        .myIdCart{height: auto;padding: 15px 20px 20px 20px; border: 1px solid #E5E5E5;margin-top: 30px;}
        .myIdCart h2{position: relative; padding: 10px 0; border-bottom: 1px dashed #E0E0E0; font-size: 18px;font-weight: normal;}
        .myIdCart h2 a{position: absolute;top: 10px;right: 0px; font-size: 12px;color: #0FB5D8;}
        .myIdCart h2 a:hover{opacity: .8;text-decoration: underline;}
        .myIdCart .item{margin: 20px 0 0 0;}
        .myIdCart .item li{display: inline-block;width: 200px;height: 140px;margin-right: 21px;background: #CCCCCC;}
        .myIdCart .item li:nth-child(4n){margin-right: 0px;}
        .myIdCart .item li img{width: 100%;height: 100%;}
        .whyShiMin{height: 220px; margin: 30px 0 0 0;text-align: center;}
        .whyShiMin h2{padding: 10px 0 40px 0;font-weight: normal;color: #444444;}
        .whyShiMin .item{float: left; width: 150px;height: auto;margin: 0 40px;}
        .whyShiMin .item img{width: 100px;height: 110px;}
        .whyShiMin .item h4{font-weight: normal;}
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 37
        echo "    <div class=\"shiMin\">
        <div class=\"nameBar clearfloat\">
            <div class=\"headImg\">
                <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 40, $this->source); })()), "avatar_url", array()), "html", null, true);
        echo "\" onerror=\"this.src='";
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/common/img/default-avatar.jpg");
        echo "'\"/>
            </div>
            <div class=\"headName\">
                <h2>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 43, $this->source); })()), "nick_name", array()), "html", null, true);
        echo "</h2>
                认证状态：
                <p><span>
                    ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 46, $this->source); })()), "getRealNameStatusText", array(), "method"), "html", null, true);
        echo "
                </span>
                </p>
                <p>性质：<span>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 49, $this->source); })()), "getTypeText", array(), "method"), "html", null, true);
        echo "</span>
                </p>
            </div>
        </div>
        <div class=\"infoBar clearfloat\">
            ";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 54, $this->source); })()), "type", array()) == "I")) {
            // line 55
            echo "                <ul class=\"info\" style=\"width: 280px;\">
                    <li><em>姓名：</em><span>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 56, $this->source); })()), "entity_name", array()), "html", null, true);
            echo "</span></li>
                    <li><em>身份证号码：</em><span>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 57, $this->source); })()), "entity_license_no", array()), "html", null, true);
            echo "</span></li>
                    ";
            // line 58
            if (twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 58, $this->source); })()), "entity_license_valid_long_term", array())) {
                // line 59
                echo "                        <li><em>执照有效日期：</em><span>长期</span></li>
                    ";
            } else {
                // line 61
                echo "                        <li><em>有效日期：</em><span>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 61, $this->source); })()), "entity_license_valid_from", array()), "Y-m-d"), "html", null, true);
                echo " ~ ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 61, $this->source); })()), "entity_license_valid_to", array()), "Y-m-d"), "html", null, true);
                echo "</span></li>
                    ";
            }
            // line 63
            echo "                    <li><em>注册地址：</em><span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 63, $this->source); })()), "entity_license_address", array()), "html", null, true);
            echo "</span></li>
                </ul>
            ";
        } else {
            // line 66
            echo "                <ul class=\"info\" style=\"width: 280px;\">
                    <li><em>企业名称：</em><span>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 67, $this->source); })()), "entity_name", array()), "html", null, true);
            echo "</span></li>
                    <li><em>营业执照号：</em><span>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 68, $this->source); })()), "entity_license_no", array()), "html", null, true);
            echo "</span></li>
                    <li><em>法人姓名：</em><span>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 69, $this->source); })()), "biz_legal_representative_name", array()), "html", null, true);
            echo "</span></li>
                    <li><em>法人身份证：</em><span>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 70, $this->source); })()), "biz_legal_representative_id_no", array()), "html", null, true);
            echo "</span></li>

                    ";
            // line 72
            if (twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 72, $this->source); })()), "entity_license_valid_long_term", array())) {
                // line 73
                echo "                        <li><em>执照有效日期：</em><span>长期</span></li>
                    ";
            } else {
                // line 75
                echo "                        <li><em>有效日期：</em><span>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 75, $this->source); })()), "entity_license_valid_from", array()), "Y-m-d"), "html", null, true);
                echo " ~ ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 75, $this->source); })()), "entity_license_valid_to", array()), "Y-m-d"), "html", null, true);
                echo "</span></li>
                    ";
            }
            // line 77
            echo "                    <li><em>注册地址：</em><span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 77, $this->source); })()), "entity_license_address", array()), "html", null, true);
            echo "</span></li>
                </ul>
            ";
        }
        // line 80
        echo "        </div>
    </div>
    <div class=\"myIdCart\">
        <h2>我的证件照<a id=\"btn_toggle_images\" href=\"javascript:show_verify_img();\">查看完整证件照</a></h2>
        <ul class=\"item\">
            ";
        // line 85
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 85, $this->source); })()), "type", array()) == "I")) {
            // line 86
            echo "                <li>
                    <img class=\"id_img_default\" src=\"";
            // line 87
            echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/passport/img/zz1.jpg");
            echo "\" />
                    <img src=\"";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 88, $this->source); })()), "entity_license_front_image_url", array()), "html", null, true);
            echo "\" class=\"id_img_value\" style=\"display: none;\"/>
                </li>
                <li>
                    <img class=\"id_img_default\" src=\"";
            // line 91
            echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/passport/img/zz2.jpg");
            echo "\" />
                    <img src=\"";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 92, $this->source); })()), "entity_license_back_image_url", array()), "html", null, true);
            echo "\" class=\"id_img_value\" style=\"display: none;\"/>
                </li>
                <li>
                    <img class=\"id_img_default\" src=\"";
            // line 95
            echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/passport/img/zz3.jpg");
            echo "\" />
                    <img src=\"";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 96, $this->source); })()), "entity_license_handheld_image_url", array()), "html", null, true);
            echo "\" class=\"id_img_value\" style=\"display: none;\"/>
                </li>

            ";
        } else {
            // line 100
            echo "                <li>
                    <img class=\"id_img_default\" src=\"";
            // line 101
            echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/passport/img/zz4.jpg");
            echo "\" />
                    <img src=\"";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 102, $this->source); })()), "entity_license_front_image_url", array()), "html", null, true);
            echo "\" class=\"id_img_value\" style=\"display: none;\"/>
                </li>

                <li>
                    <img class=\"id_img_default\" src=\"";
            // line 106
            echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/passport/img/zz1.jpg");
            echo "\" />
                    <img src=\"";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 107, $this->source); })()), "biz_legal_representative_id_front_image_url", array()), "html", null, true);
            echo "\" class=\"id_img_value\" style=\"display: none;\"/>
                </li>
                <li>
                    <img class=\"id_img_default\" src=\"";
            // line 110
            echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/passport/img/zz2.jpg");
            echo "\" />
                    <img src=\"";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 111, $this->source); })()), "biz_legal_representative_id_back_image_url", array()), "html", null, true);
            echo "\" class=\"id_img_value\" style=\"display: none;\"/>
                </li>
                <li>
                    <img class=\"id_img_default\" src=\"";
            // line 114
            echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/passport/img/zz3.jpg");
            echo "\" />
                    <img src=\"";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 115, $this->source); })()), "biz_legal_representative_id_handheld_image_url", array()), "html", null, true);
            echo "\" class=\"id_img_value\" style=\"display: none;\"/>
                </li>
            ";
        }
        // line 118
        echo "        </ul>
    </div>
    <div class=\"whyShiMin\">
        <h2>为什么进行实名认证</h2>
        <div class=\"item\">
            <img src=\"";
        // line 123
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/passport/img/z1.png");
        echo "\" />
            <h4>核实真实信息</h4>
        </div>
        <div class=\"item\">
            <img src=\"";
        // line 127
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/passport/img/z2.png");
        echo "\" />
            <h4>保障账户安全</h4>
        </div>
        <div class=\"item\">
            <img src=\"";
        // line 131
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/passport/img/z3.png");
        echo "\" />
            <h4>获得用户信赖</h4>
        </div>
        <div class=\"item\">
            <img src=\"";
        // line 135
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/passport/img/z4.png");
        echo "\" />
            <h4>拓展更多功能</h4>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 142
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 143
        echo "    <script>
        \$(document).ready(function () {
            \$('.id_img_default').show();
            \$('.id_img_value').hide();
        });

        function show_verify_img() {
            \$('.id_img_value').toggle();
            \$('.id_img_default').toggle();

            var text = \$('#btn_toggle_images').text() === '查看完整证件照' ? '隐藏完整证件照' : '查看完整证件照';
            \$('#btn_toggle_images').text(text);
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/Passport/IdentityManagement/verified.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 143,  344 => 142,  328 => 135,  321 => 131,  314 => 127,  307 => 123,  300 => 118,  294 => 115,  290 => 114,  284 => 111,  280 => 110,  274 => 107,  270 => 106,  263 => 102,  259 => 101,  256 => 100,  249 => 96,  245 => 95,  239 => 92,  235 => 91,  229 => 88,  225 => 87,  222 => 86,  220 => 85,  213 => 80,  206 => 77,  198 => 75,  194 => 73,  192 => 72,  187 => 70,  183 => 69,  179 => 68,  175 => 67,  172 => 66,  165 => 63,  157 => 61,  153 => 59,  151 => 58,  147 => 57,  143 => 56,  140 => 55,  138 => 54,  130 => 49,  124 => 46,  118 => 43,  110 => 40,  105 => 37,  96 => 36,  58 => 6,  55 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '/Passport/layout.twig' %}

{% block css %}
    {{ use_assets([
    '/assets/passport/css/common.css',
    ]) }}
    <style>
        .shiMin{height: auto;border: 1px solid #E5E5E5;}
        .shiMin .nameBar{width: auto;height: auto;padding:30px 20px 15px 20px;background: #FFFFFF;}
        .shiMin .headImg{float: left; width: 80px;height: 80px;border-radius: 45px;border: 1px solid #EEEEEE;overflow: hidden;background: #C9DAE1;}
        .shiMin .headImg img{width: 100%;height: 100%;}
        .shiMin .headName{float: left;padding-top: 10px;margin-left: 20px;color: #333333;}
        .shiMin .headName h2{padding:7px 0;font-size: 18px;font-weight: normal;}
        .shiMin .headName span{color: #555555;}
        .shiMin .infoBar{width: auto;height: auto;padding: 20px 10px 20px 90px; background: #F5F5F5;}
        .shiMin .info{float: left;margin: 0 30px;}
        .shiMin .info li{height: 24px;padding: 3px 0;line-height: 24px;color: #333333;}
        .shiMin .info em{float: left; display: inline-block; width: 110px;font-style: normal;color: #888888}
        .shiMin .info span{float: left;display: inline-block; width: 170px;}
        .myIdCart{height: auto;padding: 15px 20px 20px 20px; border: 1px solid #E5E5E5;margin-top: 30px;}
        .myIdCart h2{position: relative; padding: 10px 0; border-bottom: 1px dashed #E0E0E0; font-size: 18px;font-weight: normal;}
        .myIdCart h2 a{position: absolute;top: 10px;right: 0px; font-size: 12px;color: #0FB5D8;}
        .myIdCart h2 a:hover{opacity: .8;text-decoration: underline;}
        .myIdCart .item{margin: 20px 0 0 0;}
        .myIdCart .item li{display: inline-block;width: 200px;height: 140px;margin-right: 21px;background: #CCCCCC;}
        .myIdCart .item li:nth-child(4n){margin-right: 0px;}
        .myIdCart .item li img{width: 100%;height: 100%;}
        .whyShiMin{height: 220px; margin: 30px 0 0 0;text-align: center;}
        .whyShiMin h2{padding: 10px 0 40px 0;font-weight: normal;color: #444444;}
        .whyShiMin .item{float: left; width: 150px;height: auto;margin: 0 40px;}
        .whyShiMin .item img{width: 100px;height: 110px;}
        .whyShiMin .item h4{font-weight: normal;}
    </style>
{% endblock %}

{% block main_content %}
    <div class=\"shiMin\">
        <div class=\"nameBar clearfloat\">
            <div class=\"headImg\">
                <img src=\"{{ user.avatar_url }}\" onerror=\"this.src='{{ asset('/assets/common/img/default-avatar.jpg') }}'\"/>
            </div>
            <div class=\"headName\">
                <h2>{{ user.nick_name }}</h2>
                认证状态：
                <p><span>
                    {{ user.getRealNameStatusText() }}
                </span>
                </p>
                <p>性质：<span>{{ user.getTypeText() }}</span>
                </p>
            </div>
        </div>
        <div class=\"infoBar clearfloat\">
            {% if user.type == 'I' %}
                <ul class=\"info\" style=\"width: 280px;\">
                    <li><em>姓名：</em><span>{{ identity.entity_name }}</span></li>
                    <li><em>身份证号码：</em><span>{{ identity.entity_license_no }}</span></li>
                    {% if identity.entity_license_valid_long_term %}
                        <li><em>执照有效日期：</em><span>长期</span></li>
                    {% else %}
                        <li><em>有效日期：</em><span>{{ identity.entity_license_valid_from|date('Y-m-d') }} ~ {{ identity.entity_license_valid_to|date('Y-m-d') }}</span></li>
                    {% endif %}
                    <li><em>注册地址：</em><span>{{ identity.entity_license_address }}</span></li>
                </ul>
            {% else %}
                <ul class=\"info\" style=\"width: 280px;\">
                    <li><em>企业名称：</em><span>{{ identity.entity_name }}</span></li>
                    <li><em>营业执照号：</em><span>{{ identity.entity_license_no }}</span></li>
                    <li><em>法人姓名：</em><span>{{ identity.biz_legal_representative_name }}</span></li>
                    <li><em>法人身份证：</em><span>{{ identity.biz_legal_representative_id_no }}</span></li>

                    {% if identity.entity_license_valid_long_term %}
                        <li><em>执照有效日期：</em><span>长期</span></li>
                    {% else %}
                        <li><em>有效日期：</em><span>{{ identity.entity_license_valid_from|date('Y-m-d') }} ~ {{ identity.entity_license_valid_to|date('Y-m-d') }}</span></li>
                    {% endif %}
                    <li><em>注册地址：</em><span>{{ identity.entity_license_address }}</span></li>
                </ul>
            {% endif %}
        </div>
    </div>
    <div class=\"myIdCart\">
        <h2>我的证件照<a id=\"btn_toggle_images\" href=\"javascript:show_verify_img();\">查看完整证件照</a></h2>
        <ul class=\"item\">
            {% if user.type == 'I' %}
                <li>
                    <img class=\"id_img_default\" src=\"{{ asset('/assets/passport/img/zz1.jpg') }}\" />
                    <img src=\"{{ identity.entity_license_front_image_url }}\" class=\"id_img_value\" style=\"display: none;\"/>
                </li>
                <li>
                    <img class=\"id_img_default\" src=\"{{ asset('/assets/passport/img/zz2.jpg') }}\" />
                    <img src=\"{{ identity.entity_license_back_image_url }}\" class=\"id_img_value\" style=\"display: none;\"/>
                </li>
                <li>
                    <img class=\"id_img_default\" src=\"{{ asset('/assets/passport/img/zz3.jpg') }}\" />
                    <img src=\"{{ identity.entity_license_handheld_image_url }}\" class=\"id_img_value\" style=\"display: none;\"/>
                </li>

            {% else %}
                <li>
                    <img class=\"id_img_default\" src=\"{{ asset('/assets/passport/img/zz4.jpg') }}\" />
                    <img src=\"{{ identity.entity_license_front_image_url }}\" class=\"id_img_value\" style=\"display: none;\"/>
                </li>

                <li>
                    <img class=\"id_img_default\" src=\"{{ asset('/assets/passport/img/zz1.jpg') }}\" />
                    <img src=\"{{ identity.biz_legal_representative_id_front_image_url }}\" class=\"id_img_value\" style=\"display: none;\"/>
                </li>
                <li>
                    <img class=\"id_img_default\" src=\"{{ asset('/assets/passport/img/zz2.jpg') }}\" />
                    <img src=\"{{ identity.biz_legal_representative_id_back_image_url }}\" class=\"id_img_value\" style=\"display: none;\"/>
                </li>
                <li>
                    <img class=\"id_img_default\" src=\"{{ asset('/assets/passport/img/zz3.jpg') }}\" />
                    <img src=\"{{ identity.biz_legal_representative_id_handheld_image_url }}\" class=\"id_img_value\" style=\"display: none;\"/>
                </li>
            {% endif %}
        </ul>
    </div>
    <div class=\"whyShiMin\">
        <h2>为什么进行实名认证</h2>
        <div class=\"item\">
            <img src=\"{{ asset('/assets/passport/img/z1.png') }}\" />
            <h4>核实真实信息</h4>
        </div>
        <div class=\"item\">
            <img src=\"{{ asset('/assets/passport/img/z2.png') }}\" />
            <h4>保障账户安全</h4>
        </div>
        <div class=\"item\">
            <img src=\"{{ asset('/assets/passport/img/z3.png') }}\" />
            <h4>获得用户信赖</h4>
        </div>
        <div class=\"item\">
            <img src=\"{{ asset('/assets/passport/img/z4.png') }}\" />
            <h4>拓展更多功能</h4>
        </div>
    </div>

{% endblock %}

{% block js_end %}
    <script>
        \$(document).ready(function () {
            \$('.id_img_default').show();
            \$('.id_img_value').hide();
        });

        function show_verify_img() {
            \$('.id_img_value').toggle();
            \$('.id_img_default').toggle();

            var text = \$('#btn_toggle_images').text() === '查看完整证件照' ? '隐藏完整证件照' : '查看完整证件照';
            \$('#btn_toggle_images').text(text);
        }
    </script>
{% endblock %}", "/Passport/IdentityManagement/verified.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\IdentityManagement\\verified.twig");
    }
}
