<?php

/* Passport/IdentityManagement/individualIdentityInfo.twig */
class __TwigTemplate_6a4a61d3844de0af7381837e8f8913ea9a7da0ddfe747f19815ac997433b7922 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/Passport/layout.twig", "Passport/IdentityManagement/individualIdentityInfo.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/IdentityManagement/individualIdentityInfo.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/IdentityManagement/individualIdentityInfo.twig"));

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
        echo "    <style>
        .layui-word-aux {
            display: none;
            color: red;
            line-height: 34px;
        }
        .sisi-btn-content {
            margin-top: 0px;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 17
        echo "    ";
        $context["read_only_attribute"] = (((isset($context["read_only"]) || array_key_exists("read_only", $context) ? $context["read_only"] : (function () { throw new Twig_Error_Runtime('Variable "read_only" does not exist.', 17, $this->source); })())) ? ("readonly") : (""));
        // line 18
        echo "
    ";
        // line 19
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 19, $this->source); })()), "real_name_status", array()), array(0 => "PENDING", 1 => "REVIEW"))) {
            // line 20
            echo "        <div style=\"text-align: center;border: solid orange 2px;padding: 20px;margin: 0px 20px 50px 20px\">
            <h1>您的实名认证信息正在审核中，请耐心等待</h1>
            <h3 style=\"color: #999;\">审核结果将通过邮件或者短信发送通知，请留意</h3>
        </div>
    ";
        }
        // line 25
        echo "
    <div class=\"sisi-form-item\">
        <form id=\"identity-submitting-form\" lay-filter=\"identity-submitting-form\" class=\"layui-form\">
            <div class=\"sisi-input-item\">
                <label class=\"sisi-input-lable table-input\">登录帐号</label>
                <div class=\"sisi-input-inline\">
                    <input type=\"text\" name=\"\" readonly value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 31, $this->source); })()), "user_name", array()), "html", null, true);
        echo "\" class=\"sisi-input-ing\" style=\"background: #F8F8F8;\"/>
                </div>
            </div>
            <div class=\"sisi-input-item\">
                <label class=\"sisi-input-lable table-input\">性质</label>
                <div class=\"sisi-input-inline\">
                    <input type=\"text\" name=\"\" readonly value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 37, $this->source); })()), "getTypeText", array(), "method"), "html", null, true);
        echo "\" class=\"sisi-input-ing\" style=\"background: #F8F8F8;\"/>
                </div>
            </div>
            <div class=\"sisi-input-item\">
                <label class=\"sisi-input-lable table-input\">姓名</label>
                <div class=\"sisi-input-inline\">
                    <input type=\"text\" name=\"entity_name\" id=\"entity_name\" ";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["read_only_attribute"]) || array_key_exists("read_only_attribute", $context) ? $context["read_only_attribute"] : (function () { throw new Twig_Error_Runtime('Variable "read_only_attribute" does not exist.', 43, $this->source); })()), "html", null, true);
        echo " value=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "entity_name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "entity_name", array()), "")) : ("")), "html", null, true);
        echo "\" class=\"sisi-input-ing\"/>
                </div>
                <div class=\"layui-form-mid layui-word-aux \" id=\"error_entity_name\">请正确填写姓名</div>
            </div>
            <div class=\"sisi-input-item\">
                <label class=\"sisi-input-lable table-input\">身份证号码</label>
                <div class=\"sisi-input-inline\">
                    <input type=\"text\" name=\"entity_license_no\" id=\"entity_license_no\" ";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["read_only_attribute"]) || array_key_exists("read_only_attribute", $context) ? $context["read_only_attribute"] : (function () { throw new Twig_Error_Runtime('Variable "read_only_attribute" does not exist.', 50, $this->source); })()), "html", null, true);
        echo " value=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "entity_license_no", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "entity_license_no", array()), "")) : ("")), "html", null, true);
        echo "\" class=\"sisi-input-ing\"/>
                </div>
                <div class=\"layui-form-mid layui-word-aux\" id=\"error_entity_license_no\">请正确填写身份证号码</div>
            </div>
            <div class=\"sisi-input-item\">
                <label class=\"sisi-input-lable table-input\">身份证地址</label>
                <div class=\"sisi-input-inline\" style=\"width: 500px;\">
                    <input type=\"text\" name=\"entity_address\" id=\"entity_address\" ";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["read_only_attribute"]) || array_key_exists("read_only_attribute", $context) ? $context["read_only_attribute"] : (function () { throw new Twig_Error_Runtime('Variable "read_only_attribute" does not exist.', 57, $this->source); })()), "html", null, true);
        echo " placeholder=\"请填写与身份证一致的地址\" value=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "entity_address", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "entity_address", array()), "")) : ("")), "html", null, true);
        echo "\" class=\"sisi-input-ing\"/>
                </div>
                <div class=\"layui-form-mid layui-word-aux\" id=\"error_entity_address\">请正确填写身份证地址</div>
            </div>

            <div class=\"sisi-input-item\">
                <label class=\"sisi-input-lable table-input\">身份证有效日期</label>
                <div class=\"sisi-input-block f-fl\" style=\"margin-right: 20px;\">
                    <ul class=\"inline clearfloat\">
                        <li class=\"\">
                            <input name=\"entity_license_valid_from\" type=\"text\" id=\"entity_license_valid_from\" ";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["read_only_attribute"]) || array_key_exists("read_only_attribute", $context) ? $context["read_only_attribute"] : (function () { throw new Twig_Error_Runtime('Variable "read_only_attribute" does not exist.', 67, $this->source); })()), "html", null, true);
        echo " class=\"layui-input\" placeholder=\"开始时间\" value=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 67, $this->source); })()), "entity_license_valid_from", array()), "Y-m-d"), "html", null, true);
        echo "\" style=\"width: 100px;\" />
                        </li>
                        <li style=\"line-height: 34px;\">-</li>
                        <li class=\"lay-code\">
                            <input name=\"entity_license_valid_to\" type=\"text\" id=\"entity_license_valid_to\" ";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["read_only_attribute"]) || array_key_exists("read_only_attribute", $context) ? $context["read_only_attribute"] : (function () { throw new Twig_Error_Runtime('Variable "read_only_attribute" does not exist.', 71, $this->source); })()), "html", null, true);
        echo " class=\"layui-input\" placeholder=\"结束时间\" value=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 71, $this->source); })()), "entity_license_valid_to", array()), "Y-m-d"), "html", null, true);
        echo "\"  style=\"width: 100px;\" />
                        </li>
                    </ul>
                    <div class=\"layui-form-mid layui-word-aux\" id=\"error_entity_license_valid_from\">请正确填写身份证有效日期</div>
                    <div class=\"layui-form-mid layui-word-aux\" id=\"error_entity_license_valid_to\">请正确填写身份证有效日期</div>
                </div>
                <div style=\"line-height: 34px;\">
                    <input type=\"checkbox\" name=\"entity_license_valid_long_term\" value=\"1\" class=\"long-time\" id=\"entity_license_valid_long_term\" style=\"margin-right: 5px;\"/>长期
                </div>
            </div>

            ";
        // line 82
        $context["max_size_in_mb"] = twig_number_format_filter($this->env, (($this->extensions['App\Common\Twig\AppExtension']->getParams("entity_license_image_max_upload_file_size") / 1024) / 1024), 1);
        // line 83
        echo "            <div class=\"sisi-input-item\">
                <label class=\"sisi-input-lable\">身份证正面</label>
                <div class=\"sisi-input-block\" style=\"width: 800px;\">
                    <div class=\"sisi-btn-content\">
                        <div class=\"layui-form-mid layui-word-aux\" id=\"error_entity_license_front_image_id\">请上传身份证正面照片</div>
                        <div class=\"image-item f-fl\">
                            <div id=\"entity_license_front_image_id\" class=\"dropzone\" style=\"\">
                                <div class=\"dz-message needsclick\">
                                    <h3>点击这里<br>或拖图片到这里来上传</h3><br>
                                    <span class=\"note needsclick\">支持 ";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["max_size_in_mb"]) || array_key_exists("max_size_in_mb", $context) ? $context["max_size_in_mb"] : (function () { throw new Twig_Error_Runtime('Variable "max_size_in_mb" does not exist.', 92, $this->source); })()), "html", null, true);
        echo "M 以内尺格式寸为 PNG/JPEG/BMP 图片</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"image-text f-fl\">
                            <p>1）身份证全部信息需清晰无遮挡，否则认证将无法通过；</p>
                            <p>2）照片请勿进行任何软件处理；</p>
                            <p>3）照片支持 JPG/PNG/BMP 格式，最大不超过 ";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["max_size_in_mb"]) || array_key_exists("max_size_in_mb", $context) ? $context["max_size_in_mb"] : (function () { throw new Twig_Error_Runtime('Variable "max_size_in_mb" does not exist.', 99, $this->source); })()), "html", null, true);
        echo "M 。</p>
                            <p>示例：<img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/u3908.png\"/></p>
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"entity_license_front_image_id\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "entity_license_front_image_id", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "entity_license_front_image_id", array()), "")) : ("")), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"sisi-input-item\">
                <label class=\"sisi-input-lable\">身份证反面</label>
                <div class=\"sisi-input-block\" style=\"width: 800px;\">
                    <div class=\"sisi-btn-content\">
                        <div class=\"layui-form-mid layui-word-aux\" id=\"error_entity_license_back_image_id\">请上传身份证反面照片</div>
                        <div class=\"image-item f-fl\">
                            <div id=\"entity_license_back_image_id\" class=\"dropzone\" style=\"\">
                                <div class=\"dz-message needsclick\">
                                    <h3>点击这里<br>或拖图片到这里来上传</h3><br>
                                    <span class=\"note needsclick\">支持 ";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["max_size_in_mb"]) || array_key_exists("max_size_in_mb", $context) ? $context["max_size_in_mb"] : (function () { throw new Twig_Error_Runtime('Variable "max_size_in_mb" does not exist.', 115, $this->source); })()), "html", null, true);
        echo "M 以内尺格式寸为 PNG/JPEG/BMP 图片</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"image-text f-fl\">
                            <p>1）身份证全部信息需清晰无遮挡，否则认证将无法通过；</p>
                            <p>2）照片请勿进行任何软件处理；</p>
                            <p>3）照片支持 JPG/PNG/BMP 格式，最大不超过 ";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["max_size_in_mb"]) || array_key_exists("max_size_in_mb", $context) ? $context["max_size_in_mb"] : (function () { throw new Twig_Error_Runtime('Variable "max_size_in_mb" does not exist.', 122, $this->source); })()), "html", null, true);
        echo "M 。</p>
                            <p>示例：<img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/u3904.png\"/></p>
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"entity_license_back_image_id\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "entity_license_back_image_id", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "entity_license_back_image_id", array()), "")) : ("")), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"sisi-input-item\">
                <label class=\"sisi-input-lable\">手持身份证</label>
                <div class=\"sisi-input-block\" style=\"width: 800px;\">
                    <div class=\"sisi-btn-content\">
                        <div class=\"layui-form-mid layui-word-aux\" id=\"error_entity_license_handheld_image_id\">请上传手持身份证
                        </div>
                        <div class=\"image-item f-fl\">
                            <div id=\"entity_license_handheld_image_id\" class=\"dropzone\" style=\"\">
                                <div class=\"dz-message needsclick\">
                                    <h3>点击这里<br>或拖图片到这里来上传</h3><br>
                                    <span class=\"note needsclick\">支持 ";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["max_size_in_mb"]) || array_key_exists("max_size_in_mb", $context) ? $context["max_size_in_mb"] : (function () { throw new Twig_Error_Runtime('Variable "max_size_in_mb" does not exist.', 139, $this->source); })()), "html", null, true);
        echo "M 以内尺格式寸为 PNG/JPEG/BMP 图片</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"image-text f-fl\">
                            <p>1）身份证全部信息需清晰无遮挡，否则认证将无法通过；</p>
                            <p>2）照片请勿进行任何软件处理；</p>
                            <p>3）照片支持 JPG/PNG/BMP 格式，最大不超过 ";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["max_size_in_mb"]) || array_key_exists("max_size_in_mb", $context) ? $context["max_size_in_mb"] : (function () { throw new Twig_Error_Runtime('Variable "max_size_in_mb" does not exist.', 146, $this->source); })()), "html", null, true);
        echo "M 。</p>
                            <p>示例：<img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/u3906.png\"/></p>
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"entity_license_handheld_image_id\" value=\"";
        // line 150
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "entity_license_handheld_image_id", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "entity_license_handheld_image_id", array()), "")) : ("")), "html", null, true);
        echo "\">
                </div>
            </div>
            <div style=\"text-align: center;margin-top: 50px;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("passport_identity_management_individual_submit"), "html", null, true);
        echo "\">
                ";
        // line 155
        if ( !(isset($context["read_only"]) || array_key_exists("read_only", $context) ? $context["read_only"] : (function () { throw new Twig_Error_Runtime('Variable "read_only" does not exist.', 155, $this->source); })())) {
            // line 156
            echo "                    <button type=\"button\" class=\"btn btn-middle btn-blue\" onclick=\"submit_entity_license_form(0);\">保存草稿</button>
                    <button type=\"button\" class=\"btn btn-middle btn-blue\" onclick=\"submit_entity_license_form(1);\">提交认证</button>
                ";
        }
        // line 159
        echo "            </div>
        </form>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 165
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 166
        echo "    ";
        $this->loadTemplate("/Common/Common/dropzone.twig", "Passport/IdentityManagement/individualIdentityInfo.twig", 166)->display($context);
        // line 167
        echo "
    <style>
        .dropzone.dz-clickable {
            margin-top: 10px;
        }

        .dropzone .dz-preview {
            width: 90%;
            position: relative;
            display: inline-block;
            vertical-align: top;
            margin: 1px;
            min-height: 100px;
        }
        .dropzone .dz-preview .dz-image {
            border-radius: 20px;
            overflow: hidden;
            width: 100%;
            height: 100%;
        }
        .sisi-btn-content {
            min-height: 250px;
            height: auto;
        }
        .sisi-btn-content .image-item {
            min-height: 250px;
            height: auto;
        }
        .dropzone .dz-preview:hover .dz-image img {
            -webkit-transform: scale(1.05, 1.05);
            -moz-transform: scale(1.05, 1.05);
            -ms-transform: scale(1.05, 1.05);
            -o-transform: scale(1.05, 1.05);
            transform: scale(1.05, 1.05);
            -webkit-filter: blur(0px);
            filter: blur(0px); }

    </style>

    <script>
        \$(document).ready(function () {
            var UPLOAD_URL = \"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Oneup\UploaderBundle\Twig\Extension\UploaderExtension']->endpoint("entity_license_image"), "html", null, true);
        echo "\";
            var DELETE_URL = \"";
        // line 209
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("common_file_upload_delete");
        echo "\";
            ";
        // line 211
        echo "            var currentCovers = [{'url': 'http://foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/u3908.png'}];

            function success(zoneId, file, response) {
                \$('input[name=' + zoneId + ']').val(response.id);
                console.log('success called', file, response);
            }

            function failure(zoneId, file, response) {
                console.log('failure called', file, response);
            }

            ";
        // line 223
        echo "            ";
        // line 224
        echo "            ";
        // line 225
        echo "
            ";
        // line 226
        $context["frontImage"] = ((((twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "entity_license_front_image_id", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "entity_license_front_image_id", array()), null)) : (null))) ? (array(0 => array("id" => twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 226, $this->source); })()), "entity_license_front_image_id", array()), "url" => twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 226, $this->source); })()), "entity_license_front_image_url", array())))) : (array()));
        // line 227
        echo "            var currentFrontImage = ";
        echo json_encode((isset($context["frontImage"]) || array_key_exists("frontImage", $context) ? $context["frontImage"] : (function () { throw new Twig_Error_Runtime('Variable "frontImage" does not exist.', 227, $this->source); })()));
        echo ";
            ";
        // line 228
        $context["backImage"] = ((((twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "entity_license_back_image_id", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "entity_license_back_image_id", array()), null)) : (null))) ? (array(0 => array("id" => twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 228, $this->source); })()), "entity_license_back_image_id", array()), "url" => twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 228, $this->source); })()), "entity_license_back_image_url", array())))) : (array()));
        // line 229
        echo "            var currentBackImage = ";
        echo json_encode((isset($context["backImage"]) || array_key_exists("backImage", $context) ? $context["backImage"] : (function () { throw new Twig_Error_Runtime('Variable "backImage" does not exist.', 229, $this->source); })()));
        echo ";
            ";
        // line 230
        $context["handheldImage"] = ((((twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "entity_license_handheld_image_id", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "entity_license_handheld_image_id", array()), null)) : (null))) ? (array(0 => array("id" => twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 230, $this->source); })()), "entity_license_handheld_image_id", array()), "url" => twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 230, $this->source); })()), "entity_license_handheld_image_url", array())))) : (array()));
        // line 231
        echo "            var currentHandheldImage = ";
        echo json_encode((isset($context["handheldImage"]) || array_key_exists("handheldImage", $context) ? $context["handheldImage"] : (function () { throw new Twig_Error_Runtime('Variable "handheldImage" does not exist.', 231, $this->source); })()));
        echo ";

            var allow_upload = ";
        // line 233
        echo (((isset($context["read_only"]) || array_key_exists("read_only", $context) ? $context["read_only"] : (function () { throw new Twig_Error_Runtime('Variable "read_only" does not exist.', 233, $this->source); })())) ? ("false") : ("true"));
        echo ";

            setup_upload_form('entity_license_front_image_id', UPLOAD_URL, DELETE_URL, currentFrontImage, success, failure, allow_upload);
            setup_upload_form('entity_license_back_image_id', UPLOAD_URL, DELETE_URL, currentBackImage, success, failure, allow_upload);
            setup_upload_form('entity_license_handheld_image_id', UPLOAD_URL, DELETE_URL, currentHandheldImage, success, failure, allow_upload);

            ";
        // line 239
        if ((isset($context["read_only"]) || array_key_exists("read_only", $context) ? $context["read_only"] : (function () { throw new Twig_Error_Runtime('Variable "read_only" does not exist.', 239, $this->source); })())) {
            // line 240
            echo "            \$('.dz-remove').remove();
            ";
        }
        // line 242
        echo "
            init_form();
        });

        layui.use(['laydate'], function () {
            var laydate = layui.laydate;

            //执行一个laydate实例
            laydate.render({
                elem:    '#entity_license_valid_from' //指定元素
                , theme: '#393D49'
            });
            laydate.render({
                elem:    '#entity_license_valid_to' //指定元素
                , theme: '#393D49'
            });


            laydate.render({
                elem:    '#yingye_time_start' //指定元素
                , theme: '#393D49'
            });
            laydate.render({
                elem:    '#yingye_time_end' //指定元素
                , theme: '#393D49'
            });
        });

        function init_form() {
            ";
        // line 271
        if (((isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 271, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 271, $this->source); })()), "entity_license_front_image_review_result", array()) == "REJECTED"))) {
            // line 272
            echo "            \$('#error_entity_license_front_image').toggle();
            \$('#error_entity_license_front_image').html('身份证正面照片不合格，请重新上传');
            ";
        }
        // line 275
        echo "            ";
        if (((isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 275, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 275, $this->source); })()), "entity_license_back_image_review_result", array()) == "REJECTED"))) {
            // line 276
            echo "            \$('#error_entity_license_back_image').toggle();
            \$('#error_entity_license_back_image').html('身份证反面照片不合格，请重新上传');
            ";
        }
        // line 279
        echo "            ";
        if (((isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 279, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 279, $this->source); })()), "entity_license_handheld_image_review_result", array()) == "REJECTED"))) {
            // line 280
            echo "            \$('#error_entity_license_handheld_image').toggle();
            \$('#error_entity_license_handheld_image').html('手持身份证照片不合格，请重新上传');
            ";
        }
        // line 283
        echo "

            ";
        // line 286
        echo "            ";
        // line 287
        echo "                ";
        // line 288
        echo "                ";
        // line 289
        echo "                ";
        // line 290
        echo "                ";
        // line 291
        echo "                ";
        // line 292
        echo "            ";
        // line 293
        echo "            ";
        // line 294
        echo "        }

        function submit_entity_license_form(submitNow) {
            \$('.layui-word-aux').hide();

            \$.post('";
        // line 299
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_identity_management_individual_submit");
        echo "?submit=' + submitNow, \$('#identity-submitting-form').serialize(), function (result) {
                if (result.msg) {
                    layer.msg(result.msg);
                }

                if (result.status) {
                    window.location.reload();
                    return;
                }

                if (result.errors) {
                    \$.each(result.errors, function (key, value) {
                        \$('#error_' + key).toggle();
                    });
                }
            });
        }

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Passport/IdentityManagement/individualIdentityInfo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  517 => 299,  510 => 294,  508 => 293,  506 => 292,  504 => 291,  502 => 290,  500 => 289,  498 => 288,  496 => 287,  494 => 286,  490 => 283,  485 => 280,  482 => 279,  477 => 276,  474 => 275,  469 => 272,  467 => 271,  436 => 242,  432 => 240,  430 => 239,  421 => 233,  415 => 231,  413 => 230,  408 => 229,  406 => 228,  401 => 227,  399 => 226,  396 => 225,  394 => 224,  392 => 223,  379 => 211,  375 => 209,  371 => 208,  328 => 167,  325 => 166,  316 => 165,  302 => 159,  297 => 156,  295 => 155,  291 => 154,  284 => 150,  277 => 146,  267 => 139,  251 => 126,  244 => 122,  234 => 115,  219 => 103,  212 => 99,  202 => 92,  191 => 83,  189 => 82,  173 => 71,  164 => 67,  149 => 57,  137 => 50,  125 => 43,  116 => 37,  107 => 31,  99 => 25,  92 => 20,  90 => 19,  87 => 18,  84 => 17,  75 => 16,  55 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '/Passport/layout.twig' %}

{% block css %}
    <style>
        .layui-word-aux {
            display: none;
            color: red;
            line-height: 34px;
        }
        .sisi-btn-content {
            margin-top: 0px;
        }
    </style>
{% endblock %}

{% block main_content %}
    {% set read_only_attribute = read_only ? 'readonly' : '' %}

    {% if user.real_name_status in ['PENDING', 'REVIEW'] %}
        <div style=\"text-align: center;border: solid orange 2px;padding: 20px;margin: 0px 20px 50px 20px\">
            <h1>您的实名认证信息正在审核中，请耐心等待</h1>
            <h3 style=\"color: #999;\">审核结果将通过邮件或者短信发送通知，请留意</h3>
        </div>
    {% endif %}

    <div class=\"sisi-form-item\">
        <form id=\"identity-submitting-form\" lay-filter=\"identity-submitting-form\" class=\"layui-form\">
            <div class=\"sisi-input-item\">
                <label class=\"sisi-input-lable table-input\">登录帐号</label>
                <div class=\"sisi-input-inline\">
                    <input type=\"text\" name=\"\" readonly value=\"{{ user.user_name }}\" class=\"sisi-input-ing\" style=\"background: #F8F8F8;\"/>
                </div>
            </div>
            <div class=\"sisi-input-item\">
                <label class=\"sisi-input-lable table-input\">性质</label>
                <div class=\"sisi-input-inline\">
                    <input type=\"text\" name=\"\" readonly value=\"{{ user.getTypeText() }}\" class=\"sisi-input-ing\" style=\"background: #F8F8F8;\"/>
                </div>
            </div>
            <div class=\"sisi-input-item\">
                <label class=\"sisi-input-lable table-input\">姓名</label>
                <div class=\"sisi-input-inline\">
                    <input type=\"text\" name=\"entity_name\" id=\"entity_name\" {{ read_only_attribute }} value=\"{{ identity.entity_name|default('') }}\" class=\"sisi-input-ing\"/>
                </div>
                <div class=\"layui-form-mid layui-word-aux \" id=\"error_entity_name\">请正确填写姓名</div>
            </div>
            <div class=\"sisi-input-item\">
                <label class=\"sisi-input-lable table-input\">身份证号码</label>
                <div class=\"sisi-input-inline\">
                    <input type=\"text\" name=\"entity_license_no\" id=\"entity_license_no\" {{ read_only_attribute }} value=\"{{ identity.entity_license_no|default('') }}\" class=\"sisi-input-ing\"/>
                </div>
                <div class=\"layui-form-mid layui-word-aux\" id=\"error_entity_license_no\">请正确填写身份证号码</div>
            </div>
            <div class=\"sisi-input-item\">
                <label class=\"sisi-input-lable table-input\">身份证地址</label>
                <div class=\"sisi-input-inline\" style=\"width: 500px;\">
                    <input type=\"text\" name=\"entity_address\" id=\"entity_address\" {{ read_only_attribute }} placeholder=\"请填写与身份证一致的地址\" value=\"{{ identity.entity_address|default('') }}\" class=\"sisi-input-ing\"/>
                </div>
                <div class=\"layui-form-mid layui-word-aux\" id=\"error_entity_address\">请正确填写身份证地址</div>
            </div>

            <div class=\"sisi-input-item\">
                <label class=\"sisi-input-lable table-input\">身份证有效日期</label>
                <div class=\"sisi-input-block f-fl\" style=\"margin-right: 20px;\">
                    <ul class=\"inline clearfloat\">
                        <li class=\"\">
                            <input name=\"entity_license_valid_from\" type=\"text\" id=\"entity_license_valid_from\" {{ read_only_attribute }} class=\"layui-input\" placeholder=\"开始时间\" value=\"{{ identity.entity_license_valid_from|date('Y-m-d') }}\" style=\"width: 100px;\" />
                        </li>
                        <li style=\"line-height: 34px;\">-</li>
                        <li class=\"lay-code\">
                            <input name=\"entity_license_valid_to\" type=\"text\" id=\"entity_license_valid_to\" {{ read_only_attribute }} class=\"layui-input\" placeholder=\"结束时间\" value=\"{{ identity.entity_license_valid_to|date('Y-m-d') }}\"  style=\"width: 100px;\" />
                        </li>
                    </ul>
                    <div class=\"layui-form-mid layui-word-aux\" id=\"error_entity_license_valid_from\">请正确填写身份证有效日期</div>
                    <div class=\"layui-form-mid layui-word-aux\" id=\"error_entity_license_valid_to\">请正确填写身份证有效日期</div>
                </div>
                <div style=\"line-height: 34px;\">
                    <input type=\"checkbox\" name=\"entity_license_valid_long_term\" value=\"1\" class=\"long-time\" id=\"entity_license_valid_long_term\" style=\"margin-right: 5px;\"/>长期
                </div>
            </div>

            {% set max_size_in_mb = (params('entity_license_image_max_upload_file_size')/1024/1024)|number_format(1) %}
            <div class=\"sisi-input-item\">
                <label class=\"sisi-input-lable\">身份证正面</label>
                <div class=\"sisi-input-block\" style=\"width: 800px;\">
                    <div class=\"sisi-btn-content\">
                        <div class=\"layui-form-mid layui-word-aux\" id=\"error_entity_license_front_image_id\">请上传身份证正面照片</div>
                        <div class=\"image-item f-fl\">
                            <div id=\"entity_license_front_image_id\" class=\"dropzone\" style=\"\">
                                <div class=\"dz-message needsclick\">
                                    <h3>点击这里<br>或拖图片到这里来上传</h3><br>
                                    <span class=\"note needsclick\">支持 {{ max_size_in_mb }}M 以内尺格式寸为 PNG/JPEG/BMP 图片</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"image-text f-fl\">
                            <p>1）身份证全部信息需清晰无遮挡，否则认证将无法通过；</p>
                            <p>2）照片请勿进行任何软件处理；</p>
                            <p>3）照片支持 JPG/PNG/BMP 格式，最大不超过 {{ max_size_in_mb }}M 。</p>
                            <p>示例：<img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/u3908.png\"/></p>
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"entity_license_front_image_id\" value=\"{{ identity.entity_license_front_image_id|default('') }}\">
                </div>
            </div>
            <div class=\"sisi-input-item\">
                <label class=\"sisi-input-lable\">身份证反面</label>
                <div class=\"sisi-input-block\" style=\"width: 800px;\">
                    <div class=\"sisi-btn-content\">
                        <div class=\"layui-form-mid layui-word-aux\" id=\"error_entity_license_back_image_id\">请上传身份证反面照片</div>
                        <div class=\"image-item f-fl\">
                            <div id=\"entity_license_back_image_id\" class=\"dropzone\" style=\"\">
                                <div class=\"dz-message needsclick\">
                                    <h3>点击这里<br>或拖图片到这里来上传</h3><br>
                                    <span class=\"note needsclick\">支持 {{ max_size_in_mb }}M 以内尺格式寸为 PNG/JPEG/BMP 图片</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"image-text f-fl\">
                            <p>1）身份证全部信息需清晰无遮挡，否则认证将无法通过；</p>
                            <p>2）照片请勿进行任何软件处理；</p>
                            <p>3）照片支持 JPG/PNG/BMP 格式，最大不超过 {{ max_size_in_mb }}M 。</p>
                            <p>示例：<img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/u3904.png\"/></p>
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"entity_license_back_image_id\" value=\"{{ identity.entity_license_back_image_id|default('') }}\">
                </div>
            </div>
            <div class=\"sisi-input-item\">
                <label class=\"sisi-input-lable\">手持身份证</label>
                <div class=\"sisi-input-block\" style=\"width: 800px;\">
                    <div class=\"sisi-btn-content\">
                        <div class=\"layui-form-mid layui-word-aux\" id=\"error_entity_license_handheld_image_id\">请上传手持身份证
                        </div>
                        <div class=\"image-item f-fl\">
                            <div id=\"entity_license_handheld_image_id\" class=\"dropzone\" style=\"\">
                                <div class=\"dz-message needsclick\">
                                    <h3>点击这里<br>或拖图片到这里来上传</h3><br>
                                    <span class=\"note needsclick\">支持 {{ max_size_in_mb }}M 以内尺格式寸为 PNG/JPEG/BMP 图片</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"image-text f-fl\">
                            <p>1）身份证全部信息需清晰无遮挡，否则认证将无法通过；</p>
                            <p>2）照片请勿进行任何软件处理；</p>
                            <p>3）照片支持 JPG/PNG/BMP 格式，最大不超过 {{ max_size_in_mb }}M 。</p>
                            <p>示例：<img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/u3906.png\"/></p>
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"entity_license_handheld_image_id\" value=\"{{ identity.entity_license_handheld_image_id|default('') }}\">
                </div>
            </div>
            <div style=\"text-align: center;margin-top: 50px;\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('passport_identity_management_individual_submit') }}\">
                {% if not read_only %}
                    <button type=\"button\" class=\"btn btn-middle btn-blue\" onclick=\"submit_entity_license_form(0);\">保存草稿</button>
                    <button type=\"button\" class=\"btn btn-middle btn-blue\" onclick=\"submit_entity_license_form(1);\">提交认证</button>
                {% endif %}
            </div>
        </form>
    </div>

{% endblock %}

{% block js_end %}
    {% include \"/Common/Common/dropzone.twig\" %}

    <style>
        .dropzone.dz-clickable {
            margin-top: 10px;
        }

        .dropzone .dz-preview {
            width: 90%;
            position: relative;
            display: inline-block;
            vertical-align: top;
            margin: 1px;
            min-height: 100px;
        }
        .dropzone .dz-preview .dz-image {
            border-radius: 20px;
            overflow: hidden;
            width: 100%;
            height: 100%;
        }
        .sisi-btn-content {
            min-height: 250px;
            height: auto;
        }
        .sisi-btn-content .image-item {
            min-height: 250px;
            height: auto;
        }
        .dropzone .dz-preview:hover .dz-image img {
            -webkit-transform: scale(1.05, 1.05);
            -moz-transform: scale(1.05, 1.05);
            -ms-transform: scale(1.05, 1.05);
            -o-transform: scale(1.05, 1.05);
            transform: scale(1.05, 1.05);
            -webkit-filter: blur(0px);
            filter: blur(0px); }

    </style>

    <script>
        \$(document).ready(function () {
            var UPLOAD_URL = \"{{ oneup_uploader_endpoint('entity_license_image') }}\";
            var DELETE_URL = \"{{ url('common_file_upload_delete') }}\";
            {#var currentCovers = [{{ {}|json_encode|raw }}];#}
            var currentCovers = [{'url': 'http://foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/u3908.png'}];

            function success(zoneId, file, response) {
                \$('input[name=' + zoneId + ']').val(response.id);
                console.log('success called', file, response);
            }

            function failure(zoneId, file, response) {
                console.log('failure called', file, response);
            }

            {#var x = {{ identity.entity_license_front_image_id }};#}
            {#var y = {{ identity.entity_license_back_image_id }};#}
            {#var z = {{ identity.entity_license_handheld_image_id }};#}

            {% set frontImage = ((identity.entity_license_front_image_id)|default(null)) ? [{'id': identity.entity_license_front_image_id, 'url': identity.entity_license_front_image_url}] : [] %}
            var currentFrontImage = {{ frontImage|json_encode|raw }};
            {% set backImage = ((identity.entity_license_back_image_id)|default(null)) ? [{'id': identity.entity_license_back_image_id, 'url': identity.entity_license_back_image_url}] : [] %}
            var currentBackImage = {{ backImage|json_encode|raw }};
            {% set handheldImage = ((identity.entity_license_handheld_image_id)|default(null)) ? [{'id': identity.entity_license_handheld_image_id, 'url': identity.entity_license_handheld_image_url}] : [] %}
            var currentHandheldImage = {{ handheldImage|json_encode|raw }};

            var allow_upload = {{ read_only ? 'false' : 'true' }};

            setup_upload_form('entity_license_front_image_id', UPLOAD_URL, DELETE_URL, currentFrontImage, success, failure, allow_upload);
            setup_upload_form('entity_license_back_image_id', UPLOAD_URL, DELETE_URL, currentBackImage, success, failure, allow_upload);
            setup_upload_form('entity_license_handheld_image_id', UPLOAD_URL, DELETE_URL, currentHandheldImage, success, failure, allow_upload);

            {% if read_only %}
            \$('.dz-remove').remove();
            {% endif %}

            init_form();
        });

        layui.use(['laydate'], function () {
            var laydate = layui.laydate;

            //执行一个laydate实例
            laydate.render({
                elem:    '#entity_license_valid_from' //指定元素
                , theme: '#393D49'
            });
            laydate.render({
                elem:    '#entity_license_valid_to' //指定元素
                , theme: '#393D49'
            });


            laydate.render({
                elem:    '#yingye_time_start' //指定元素
                , theme: '#393D49'
            });
            laydate.render({
                elem:    '#yingye_time_end' //指定元素
                , theme: '#393D49'
            });
        });

        function init_form() {
            {% if identity and identity.entity_license_front_image_review_result == 'REJECTED' %}
            \$('#error_entity_license_front_image').toggle();
            \$('#error_entity_license_front_image').html('身份证正面照片不合格，请重新上传');
            {% endif %}
            {% if identity and identity.entity_license_back_image_review_result == 'REJECTED' %}
            \$('#error_entity_license_back_image').toggle();
            \$('#error_entity_license_back_image').html('身份证反面照片不合格，请重新上传');
            {% endif %}
            {% if identity and identity.entity_license_handheld_image_review_result == 'REJECTED' %}
            \$('#error_entity_license_handheld_image').toggle();
            \$('#error_entity_license_handheld_image').html('手持身份证照片不合格，请重新上传');
            {% endif %}


            {#{% if app.debug %}#}
            {#layui.form.val('identity-submitting-form', {#}
                {#'entity_name'              : '陈亚莉',#}
                {#'entity_license_no'                : '350103198705202325',#}
                {#'entity_address'           : '广西南宁',#}
                {#'entity_license_valid_from'        : '2000-01-01',#}
                {#'entity_license_valid_to'          : '2018-01-01'#}
            {#});#}
            {#{% endif %}#}
        }

        function submit_entity_license_form(submitNow) {
            \$('.layui-word-aux').hide();

            \$.post('{{ path('passport_identity_management_individual_submit') }}?submit=' + submitNow, \$('#identity-submitting-form').serialize(), function (result) {
                if (result.msg) {
                    layer.msg(result.msg);
                }

                if (result.status) {
                    window.location.reload();
                    return;
                }

                if (result.errors) {
                    \$.each(result.errors, function (key, value) {
                        \$('#error_' + key).toggle();
                    });
                }
            });
        }

    </script>
{% endblock %}", "Passport/IdentityManagement/individualIdentityInfo.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\IdentityManagement\\individualIdentityInfo.twig");
    }
}
