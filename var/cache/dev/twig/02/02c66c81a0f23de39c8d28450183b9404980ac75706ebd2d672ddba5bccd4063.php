<?php

/* Passport/IdentityManagement/businessIdentityInfo.twig */
class __TwigTemplate_e86829a6a7a5590ca5011c05465571e107cb2155e8d74e2d9a114a9a05258568 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/Passport/layout.twig", "Passport/IdentityManagement/businessIdentityInfo.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/IdentityManagement/businessIdentityInfo.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/IdentityManagement/businessIdentityInfo.twig"));

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
        echo "  <style>
    .layui-word-aux {
      display: none;
      color: red;
      line-height: 34px;
    }
    .sisi-btn-content {
      margin-top: 0px;
    }

    .dropzone.dz-clickable {
        margin-top: 10px;
    }
  </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 21
        echo "    ";
        $context["read_only_attribute"] = (((isset($context["read_only"]) || array_key_exists("read_only", $context) ? $context["read_only"] : (function () { throw new Twig_Error_Runtime('Variable "read_only" does not exist.', 21, $this->source); })())) ? ("readonly") : (""));
        // line 22
        echo "
    ";
        // line 23
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 23, $this->source); })()), "real_name_status", array()), array(0 => "PENDING", 1 => "REVIEW"))) {
            // line 24
            echo "        <div style=\"text-align: center;border: solid orange 2px;padding: 20px;margin: 0px 20px 50px 20px\">
            <h1>您的实名认证信息正在审核中，请耐心等待</h1>
            <h3 style=\"color: #999;\">审核结果将通过邮件或者短信发送通知，请留意</h3>
        </div>
    ";
        }
        // line 29
        echo "
  <div class=\"sisi-form-item\">
    <form id=\"identity-submitting-form\" lay-filter=\"identity-submitting-form\" class=\"layui-form\">
      <div class=\"sisi-input-item\">
        <label class=\"sisi-input-lable table-input\">登录帐号</label>
        <div class=\"sisi-input-inline\">
          <input type=\"text\" name=\"\" readonly value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 35, $this->source); })()), "user_name", array()), "html", null, true);
        echo "\" class=\"sisi-input-ing\" style=\"background: #F8F8F8;\"/>
        </div>
      </div>
      <div class=\"sisi-input-item\">
        <label class=\"sisi-input-lable table-input\">性质</label>
        <div class=\"sisi-input-inline\">
          <input type=\"text\" name=\"\" readonly value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 41, $this->source); })()), "getTypeText", array(), "method"), "html", null, true);
        echo "\" class=\"sisi-input-ing\" style=\"background: #F8F8F8;\"/>
        </div>
      </div>
      <div class=\"sisi-input-item\">
        <label class=\"sisi-input-lable table-input\">公司名称</label>
        <div class=\"sisi-input-inline\">
          <input type=\"text\" name=\"entity_name\" id=\"entity_name\" ";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["read_only_attribute"]) || array_key_exists("read_only_attribute", $context) ? $context["read_only_attribute"] : (function () { throw new Twig_Error_Runtime('Variable "read_only_attribute" does not exist.', 47, $this->source); })()), "html", null, true);
        echo " value=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "entity_name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "entity_name", array()), "")) : ("")), "html", null, true);
        echo "\" class=\"sisi-input-ing\"/>
        </div>
        <div class=\"layui-form-mid layui-word-aux \" id=\"error_entity_name\">请正确填写公司名称</div>
      </div>
      <div class=\"sisi-input-item\">
        <label class=\"sisi-input-lable table-input\">营业执照注册号</label>
        <div class=\"sisi-input-inline\">
          <input type=\"text\" name=\"entity_license_no\" id=\"entity_license_no\" ";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["read_only_attribute"]) || array_key_exists("read_only_attribute", $context) ? $context["read_only_attribute"] : (function () { throw new Twig_Error_Runtime('Variable "read_only_attribute" does not exist.', 54, $this->source); })()), "html", null, true);
        echo " value=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "entity_license_no", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "entity_license_no", array()), "")) : ("")), "html", null, true);
        echo "\" class=\"sisi-input-ing\"/>
        </div>
        <div class=\"layui-form-mid layui-word-aux\" id=\"error_entity_license_no\">请正确填写营业执照注册号</div>
      </div>
      <div class=\"sisi-input-item\">
        <label class=\"sisi-input-lable table-input\">经营范围</label>
        <div class=\"sisi-input-inline\">
          <input type=\"text\" name=\"entity_license_business_scopes\" id=\"entity_license_business_scopes\" ";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["read_only_attribute"]) || array_key_exists("read_only_attribute", $context) ? $context["read_only_attribute"] : (function () { throw new Twig_Error_Runtime('Variable "read_only_attribute" does not exist.', 61, $this->source); })()), "html", null, true);
        echo " value=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "entity_license_business_scopes", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "entity_license_business_scopes", array()), "")) : ("")), "html", null, true);
        echo "\" class=\"sisi-input-ing\"/>
        </div>
        <div class=\"layui-form-mid layui-word-aux\" id=\"error_entity_license_business_scopes\">请正确填写经营范围</div>
      </div>
      <div class=\"sisi-input-item\">
        <label class=\"sisi-input-lable table-input\">公司地址</label>
        <div class=\"sisi-input-inline\" style=\"width: 500px;\">
          <input type=\"text\" name=\"entity_license_address\" id=\"entity_license_address\" ";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["read_only_attribute"]) || array_key_exists("read_only_attribute", $context) ? $context["read_only_attribute"] : (function () { throw new Twig_Error_Runtime('Variable "read_only_attribute" does not exist.', 68, $this->source); })()), "html", null, true);
        echo " placeholder=\"请填写与公司地址\" value=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "entity_license_address", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "entity_license_address", array()), "")) : ("")), "html", null, true);
        echo "\" class=\"sisi-input-ing\"/>
        </div>
        <div class=\"layui-form-mid layui-word-aux\" id=\"error_entity_license_address\">请正确填写公司地址</div>
      </div>

      <div class=\"sisi-input-item\">
        <label class=\"sisi-input-lable table-input\">营业执照有效日期</label>
        <div class=\"sisi-input-block f-fl\" style=\"margin-right: 20px;\">
          <ul class=\"inline clearfloat\">
            <li class=\"\">
              <input name=\"entity_license_valid_from\" type=\"text\" id=\"entity_license_valid_from\" ";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["read_only_attribute"]) || array_key_exists("read_only_attribute", $context) ? $context["read_only_attribute"] : (function () { throw new Twig_Error_Runtime('Variable "read_only_attribute" does not exist.', 78, $this->source); })()), "html", null, true);
        echo " class=\"layui-input\" placeholder=\"开始时间\" value=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 78, $this->source); })()), "entity_license_valid_from", array()), "Y-m-d"), "html", null, true);
        echo "\" style=\"width: 100px;\" />
            </li>
            <li style=\"line-height: 34px;\">-</li>
            <li class=\"lay-code\">
              <input name=\"entity_license_valid_to\" type=\"text\" id=\"entity_license_valid_to\" ";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["read_only_attribute"]) || array_key_exists("read_only_attribute", $context) ? $context["read_only_attribute"] : (function () { throw new Twig_Error_Runtime('Variable "read_only_attribute" does not exist.', 82, $this->source); })()), "html", null, true);
        echo " class=\"layui-input\" placeholder=\"结束时间\" value=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 82, $this->source); })()), "entity_license_valid_to", array()), "Y-m-d"), "html", null, true);
        echo "\"  style=\"width: 100px;\" />
            </li>
          </ul>
          <div class=\"layui-form-mid layui-word-aux\" id=\"error_entity_license_valid_from\">请正确填写营业执照有效日期</div>
          <div class=\"layui-form-mid layui-word-aux\" id=\"error_entity_license_valid_to\">请正确填写营业执照有效日期</div>
        </div>
        <div style=\"line-height: 34px;\">
          <input type=\"checkbox\" name=\"entity_license_valid_long_term\" value=\"1\" class=\"long-time\" id=\"entity_license_valid_long_term\" style=\"margin-right: 5px;\"/>长期
        </div>
      </div>

        ";
        // line 93
        $context["max_size_in_mb"] = twig_number_format_filter($this->env, (($this->extensions['App\Common\Twig\AppExtension']->getParams("identity_image_max_upload_file_size") / 1024) / 1024), 1);
        // line 94
        echo "
        <div class=\"sisi-input-item\">
            <label class=\"sisi-input-lable\">营业执照正面照片</label>
            <div class=\"sisi-input-block\" style=\"width: 800px;\">
                <div class=\"sisi-btn-content\">
                    <div class=\"layui-form-mid layui-word-aux\" id=\"error_entity_license_front_image_id\">请上传营业执照照片正面照片</div>
                    <div class=\"image-item f-fl\">
                        <div id=\"entity_license_front_image_id\" class=\"dropzone\" style=\"\">
                            <div class=\"dz-message needsclick\">
                                <h3>点击这里<br>或拖图片到这里来上传</h3><br>
                                <span class=\"note needsclick\">支持 ";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["max_size_in_mb"]) || array_key_exists("max_size_in_mb", $context) ? $context["max_size_in_mb"] : (function () { throw new Twig_Error_Runtime('Variable "max_size_in_mb" does not exist.', 104, $this->source); })()), "html", null, true);
        echo "M 以内尺格式寸为 PNG/JPEG/BMP 图片</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"image-text f-fl\">
                        <p>1）身份证全部信息需清晰无遮挡，否则认证将无法通过；</p>
                        <p>2）照片请勿进行任何软件处理；</p>
                        <p>3）照片支持 JPG/PNG/BMP 格式，最大不超过 ";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["max_size_in_mb"]) || array_key_exists("max_size_in_mb", $context) ? $context["max_size_in_mb"] : (function () { throw new Twig_Error_Runtime('Variable "max_size_in_mb" does not exist.', 111, $this->source); })()), "html", null, true);
        echo "M 。</p>
                        <p>示例：<img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/u3908.png\"/></p>
                    </div>
                </div>
                <input type=\"hidden\" name=\"entity_license_front_image_id\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "entity_license_front_image_id", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "entity_license_front_image_id", array()), "")) : ("")), "html", null, true);
        echo "\">
            </div>
        </div>


        <div class=\"sisi-input-item\">
            <label class=\"sisi-input-lable table-input\">公司法人名字</label>
            <div class=\"sisi-input-inline\">
                <input type=\"text\" name=\"biz_legal_representative_name\" id=\"biz_legal_representative_name\" ";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["read_only_attribute"]) || array_key_exists("read_only_attribute", $context) ? $context["read_only_attribute"] : (function () { throw new Twig_Error_Runtime('Variable "read_only_attribute" does not exist.', 123, $this->source); })()), "html", null, true);
        echo " value=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "biz_legal_representative_name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "biz_legal_representative_name", array()), "")) : ("")), "html", null, true);
        echo "\" class=\"sisi-input-ing\"/>
            </div>
            <div class=\"layui-form-mid layui-word-aux \" id=\"error_biz_legal_representative_name\">请正确填写法人名字</div>
        </div>
        <div class=\"sisi-input-item\">
            <label class=\"sisi-input-lable table-input\">公司法人身份证号</label>
            <div class=\"sisi-input-inline\">
                <input type=\"text\" name=\"biz_legal_representative_id_no\" id=\"biz_legal_representative_id_no\" ";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["read_only_attribute"]) || array_key_exists("read_only_attribute", $context) ? $context["read_only_attribute"] : (function () { throw new Twig_Error_Runtime('Variable "read_only_attribute" does not exist.', 130, $this->source); })()), "html", null, true);
        echo " value=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "biz_legal_representative_id_no", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "biz_legal_representative_id_no", array()), "")) : ("")), "html", null, true);
        echo "\" class=\"sisi-input-ing\"/>
            </div>
            <div class=\"layui-form-mid layui-word-aux\" id=\"error_biz_legal_representative_id_no\">请正确填写法人身份证号</div>
        </div>
        <div class=\"sisi-input-item\">
            <label class=\"sisi-input-lable table-input\">公司法人身份证有效日期</label>
            <div class=\"sisi-input-block f-fl\" style=\"margin-right: 20px;\">
                <ul class=\"inline clearfloat\">
                    <li class=\"\">
                        <input name=\"biz_legal_representative_id_valid_from\" type=\"text\" id=\"biz_legal_representative_id_valid_from\" ";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["read_only_attribute"]) || array_key_exists("read_only_attribute", $context) ? $context["read_only_attribute"] : (function () { throw new Twig_Error_Runtime('Variable "read_only_attribute" does not exist.', 139, $this->source); })()), "html", null, true);
        echo " class=\"layui-input\" placeholder=\"开始时间\" value=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 139, $this->source); })()), "biz_legal_representative_id_valid_from", array()), "Y-m-d"), "html", null, true);
        echo "\" style=\"width: 100px;\" />
                    </li>
                    <li style=\"line-height: 34px;\">-</li>
                    <li class=\"lay-code\">
                        <input name=\"biz_legal_representative_id_valid_to\" type=\"text\" id=\"biz_legal_representative_id_valid_to\" ";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["read_only_attribute"]) || array_key_exists("read_only_attribute", $context) ? $context["read_only_attribute"] : (function () { throw new Twig_Error_Runtime('Variable "read_only_attribute" does not exist.', 143, $this->source); })()), "html", null, true);
        echo " class=\"layui-input\" placeholder=\"结束时间\" value=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 143, $this->source); })()), "biz_legal_representative_id_valid_to", array()), "Y-m-d"), "html", null, true);
        echo "\"  style=\"width: 100px;\" />
                    </li>
                </ul>
                <div class=\"layui-form-mid layui-word-aux\" id=\"error_biz_legal_representative_id_valid_from\">请正确填写法人身份证有效日期</div>
                <div class=\"layui-form-mid layui-word-aux\" id=\"error_biz_legal_representative_id_valid_to\">请正确填写法人身份证有效日期</div>
            </div>
            <div style=\"line-height: 34px;\">
                <input type=\"checkbox\" name=\"biz_legal_representative_id_valid_long_term\" value=\"1\" class=\"long-time\" id=\"biz_legal_representative_id_valid_long_term\" style=\"margin-right: 5px;\"/>长期
            </div>
        </div>

      <div class=\"sisi-input-item\">
        <label class=\"sisi-input-lable\">公司法人身份证正面</label>
        <div class=\"sisi-input-block\" style=\"width: 800px;\">
          <div class=\"sisi-btn-content\">
            <div class=\"layui-form-mid layui-word-aux\" id=\"error_biz_legal_representative_id_front_image_id\">请上传法人身份证正面照片</div>
            <div class=\"image-item f-fl\">
              <div id=\"biz_legal_representative_id_front_image_id\" class=\"dropzone\" style=\"\">
                <div class=\"dz-message needsclick\">
                  <h3>点击这里<br>或拖图片到这里来上传</h3><br>
                  <span class=\"note needsclick\">支持 ";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["max_size_in_mb"]) || array_key_exists("max_size_in_mb", $context) ? $context["max_size_in_mb"] : (function () { throw new Twig_Error_Runtime('Variable "max_size_in_mb" does not exist.', 163, $this->source); })()), "html", null, true);
        echo "M 以内尺格式寸为 PNG/JPEG/BMP 图片</span>
                </div>
              </div>
            </div>
            <div class=\"image-text f-fl\">
              <p>1）身份证全部信息需清晰无遮挡，否则认证将无法通过；</p>
              <p>2）照片请勿进行任何软件处理；</p>
              <p>3）照片支持 JPG/PNG/BMP 格式，最大不超过 ";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["max_size_in_mb"]) || array_key_exists("max_size_in_mb", $context) ? $context["max_size_in_mb"] : (function () { throw new Twig_Error_Runtime('Variable "max_size_in_mb" does not exist.', 170, $this->source); })()), "html", null, true);
        echo "M 。</p>
              <p>示例：<img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/u3908.png\"/></p>
            </div>
          </div>
          <input type=\"hidden\" name=\"biz_legal_representative_id_front_image_id\" value=\"";
        // line 174
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "biz_legal_representative_id_front_image_id", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "biz_legal_representative_id_front_image_id", array()), "")) : ("")), "html", null, true);
        echo "\">
        </div>
      </div>
      <div class=\"sisi-input-item\">
        <label class=\"sisi-input-lable\">公司法人身份证反面</label>
        <div class=\"sisi-input-block\" style=\"width: 800px;\">
          <div class=\"sisi-btn-content\">
            <div class=\"layui-form-mid layui-word-aux\" id=\"error_biz_legal_representative_id_back_image_id\">请上传法人身份证反面照片</div>
            <div class=\"image-item f-fl\">
              <div id=\"biz_legal_representative_id_back_image_id\" class=\"dropzone\" style=\"\">
                <div class=\"dz-message needsclick\">
                  <h3>点击这里<br>或拖图片到这里来上传</h3><br>
                  <span class=\"note needsclick\">支持 ";
        // line 186
        echo twig_escape_filter($this->env, (isset($context["max_size_in_mb"]) || array_key_exists("max_size_in_mb", $context) ? $context["max_size_in_mb"] : (function () { throw new Twig_Error_Runtime('Variable "max_size_in_mb" does not exist.', 186, $this->source); })()), "html", null, true);
        echo "M 以内尺格式寸为 PNG/JPEG/BMP 图片</span>
                </div>
              </div>
            </div>
            <div class=\"image-text f-fl\">
              <p>1）身份证全部信息需清晰无遮挡，否则认证将无法通过；</p>
              <p>2）照片请勿进行任何软件处理；</p>
              <p>3）照片支持 JPG/PNG/BMP 格式，最大不超过 ";
        // line 193
        echo twig_escape_filter($this->env, (isset($context["max_size_in_mb"]) || array_key_exists("max_size_in_mb", $context) ? $context["max_size_in_mb"] : (function () { throw new Twig_Error_Runtime('Variable "max_size_in_mb" does not exist.', 193, $this->source); })()), "html", null, true);
        echo "M 。</p>
              <p>示例：<img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/u3904.png\"/></p>
            </div>
          </div>
          <input type=\"hidden\" name=\"biz_legal_representative_id_back_image_id\" value=\"";
        // line 197
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "biz_legal_representative_id_back_image_id", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "biz_legal_representative_id_back_image_id", array()), "")) : ("")), "html", null, true);
        echo "\">
        </div>
      </div>
      <div class=\"sisi-input-item\">
        <label class=\"sisi-input-lable\">公司法人手持身份证照片</label>
        <div class=\"sisi-input-block\" style=\"width: 800px;\">
          <div class=\"sisi-btn-content\">
            <div class=\"layui-form-mid layui-word-aux\" id=\"error_biz_legal_representative_id_handheld_image_id\">请上传身法人手持身份证照片
            </div>
            <div class=\"image-item f-fl\">
              <div id=\"biz_legal_representative_id_handheld_image_id\" class=\"dropzone\" style=\"\">
                <div class=\"dz-message needsclick\">
                  <h3>点击这里<br>或拖图片到这里来上传</h3><br>
                  <span class=\"note needsclick\">支持 ";
        // line 210
        echo twig_escape_filter($this->env, (isset($context["max_size_in_mb"]) || array_key_exists("max_size_in_mb", $context) ? $context["max_size_in_mb"] : (function () { throw new Twig_Error_Runtime('Variable "max_size_in_mb" does not exist.', 210, $this->source); })()), "html", null, true);
        echo "M 以内尺格式寸为 PNG/JPEG/BMP 图片</span>
                </div>
              </div>
            </div>
            <div class=\"image-text f-fl\">
              <p>1）身份证全部信息需清晰无遮挡，否则认证将无法通过；</p>
              <p>2）照片请勿进行任何软件处理；</p>
              <p>3）照片支持 JPG/PNG/BMP 格式，最大不超过 ";
        // line 217
        echo twig_escape_filter($this->env, (isset($context["max_size_in_mb"]) || array_key_exists("max_size_in_mb", $context) ? $context["max_size_in_mb"] : (function () { throw new Twig_Error_Runtime('Variable "max_size_in_mb" does not exist.', 217, $this->source); })()), "html", null, true);
        echo "M 。</p>
              <p>示例：<img src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/u3906.png\"/></p>
            </div>
          </div>
          <input type=\"hidden\" name=\"biz_legal_representative_id_handheld_image_id\" value=\"";
        // line 221
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "biz_legal_representative_id_handheld_image_id", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["identity"] ?? null), "biz_legal_representative_id_handheld_image_id", array()), "")) : ("")), "html", null, true);
        echo "\">
        </div>
      </div>
      <div style=\"text-align: center;margin-top: 50px;\">
        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("passport_identity_management_business_submit"), "html", null, true);
        echo "\">
          ";
        // line 226
        if ( !(isset($context["read_only"]) || array_key_exists("read_only", $context) ? $context["read_only"] : (function () { throw new Twig_Error_Runtime('Variable "read_only" does not exist.', 226, $this->source); })())) {
            // line 227
            echo "            <button type=\"button\" class=\"btn btn-middle btn-blue\" onclick=\"submit_entity_license_form(0);\">保存草稿</button>
            <button type=\"button\" class=\"btn btn-middle btn-blue\" onclick=\"submit_entity_license_form(1);\">提交认证</button>
          ";
        }
        // line 230
        echo "      </div>
    </form>
  </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 236
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 237
        echo "    ";
        $this->loadTemplate("/Common/Common/dropzone.twig", "Passport/IdentityManagement/businessIdentityInfo.twig", 237)->display($context);
        // line 238
        echo "
  <style>
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
      function formatCurrentImageInfo(id, url) {
          return !id || id === '' ? [] : [{id: id, url: url}];
      }

      \$(document).ready(function () {
          var UPLOAD_URL = \"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Oneup\UploaderBundle\Twig\Extension\UploaderExtension']->endpoint("identity_image"), "html", null, true);
        echo "\";
          var DELETE_URL = \"";
        // line 280
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("common_file_upload_delete");
        echo "\";

          function success(zoneId, file, response) {
              \$('input[name=' + zoneId + ']').val(response.id);
              console.log('success called', file, response);
          }

          function failure(zoneId, file, response) {
              console.log('failure called', file, response);
          }

          var currentIdentityFrontImage = formatCurrentImageInfo('";
        // line 291
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 291, $this->source); })()), "entity_license_front_image_id", array()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 291, $this->source); })()), "entity_license_front_image_url", array()), "html", null, true);
        echo "');

          var currentLegalRepresentativeFrontImage = formatCurrentImageInfo('";
        // line 293
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 293, $this->source); })()), "biz_legal_representative_id_front_image_id", array()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 293, $this->source); })()), "biz_legal_representative_id_front_image_url", array()), "html", null, true);
        echo "');
          var currentLegalRepresentativeBackImage = formatCurrentImageInfo('";
        // line 294
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 294, $this->source); })()), "biz_legal_representative_id_back_image_id", array()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 294, $this->source); })()), "biz_legal_representative_id_back_image_url", array()), "html", null, true);
        echo "');
          var currentLegalRepresentativeHandheldImage = formatCurrentImageInfo('";
        // line 295
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 295, $this->source); })()), "biz_legal_representative_id_handheld_image_id", array()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 295, $this->source); })()), "biz_legal_representative_id_handheld_image_url", array()), "html", null, true);
        echo "');

          var allow_upload = ";
        // line 297
        echo (((isset($context["read_only"]) || array_key_exists("read_only", $context) ? $context["read_only"] : (function () { throw new Twig_Error_Runtime('Variable "read_only" does not exist.', 297, $this->source); })())) ? ("false") : ("true"));
        echo ";

          setup_upload_form('entity_license_front_image_id', UPLOAD_URL, DELETE_URL, currentIdentityFrontImage, success, failure, allow_upload);

          setup_upload_form('biz_legal_representative_id_front_image_id', UPLOAD_URL, DELETE_URL, currentLegalRepresentativeFrontImage, success, failure, allow_upload);
          setup_upload_form('biz_legal_representative_id_back_image_id', UPLOAD_URL, DELETE_URL, currentLegalRepresentativeBackImage, success, failure, allow_upload);
          setup_upload_form('biz_legal_representative_id_handheld_image_id', UPLOAD_URL, DELETE_URL, currentLegalRepresentativeHandheldImage, success, failure, allow_upload);

          ";
        // line 305
        if ((isset($context["read_only"]) || array_key_exists("read_only", $context) ? $context["read_only"] : (function () { throw new Twig_Error_Runtime('Variable "read_only" does not exist.', 305, $this->source); })())) {
            // line 306
            echo "          \$('.dz-remove').remove();
          ";
        }
        // line 308
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
              elem:    '#biz_legal_representative_id_valid_from' //指定元素
              , theme: '#393D49'
          });
          laydate.render({
              elem:    '#biz_legal_representative_id_valid_to' //指定元素
              , theme: '#393D49'
          });
      });

      function init_form() {
          ";
        // line 337
        if (((isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 337, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 337, $this->source); })()), "entity_license_front_image_review_result", array()) == "REJECTED"))) {
            // line 338
            echo "          \$('#error_entity_license_front_image').toggle();
          \$('#error_entity_license_front_image').html('营业执照照片不合格，请重新上传');
          ";
        }
        // line 341
        echo "
          ";
        // line 342
        if (((isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 342, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 342, $this->source); })()), "biz_legal_representative_id_front_image_review_result", array()) == "REJECTED"))) {
            // line 343
            echo "          \$('#error_entity_license_front_image').toggle();
          \$('#error_entity_license_front_image').html('法人身份证正面照片不合格，请重新上传');
          ";
        }
        // line 346
        echo "
          ";
        // line 347
        if (((isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 347, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 347, $this->source); })()), "biz_legal_representative_id_back_image_review_result", array()) == "REJECTED"))) {
            // line 348
            echo "          \$('#error_entity_license_back_image').toggle();
          \$('#error_entity_license_back_image').html('法人身份证反面照片不合格，请重新上传');
          ";
        }
        // line 351
        echo "
          ";
        // line 352
        if (((isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 352, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new Twig_Error_Runtime('Variable "identity" does not exist.', 352, $this->source); })()), "biz_legal_representative_id_handheld_image_review_result", array()) == "REJECTED"))) {
            // line 353
            echo "          \$('#error_entity_license_handheld_image').toggle();
          \$('#error_entity_license_handheld_image').html('法人手持身份证照片不合格，请重新上传');
          ";
        }
        // line 356
        echo "

          ";
        // line 359
        echo "          ";
        // line 360
        echo "          ";
        // line 361
        echo "          ";
        // line 362
        echo "          ";
        // line 363
        echo "          ";
        // line 364
        echo "          ";
        // line 365
        echo "          ";
        // line 366
        echo "          ";
        // line 367
        echo "      }

      function submit_entity_license_form(submitNow) {
          \$('.layui-word-aux').hide();

          \$.post('";
        // line 372
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passport_identity_management_business_submit");
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
        return "Passport/IdentityManagement/businessIdentityInfo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  632 => 372,  625 => 367,  623 => 366,  621 => 365,  619 => 364,  617 => 363,  615 => 362,  613 => 361,  611 => 360,  609 => 359,  605 => 356,  600 => 353,  598 => 352,  595 => 351,  590 => 348,  588 => 347,  585 => 346,  580 => 343,  578 => 342,  575 => 341,  570 => 338,  568 => 337,  537 => 308,  533 => 306,  531 => 305,  520 => 297,  513 => 295,  507 => 294,  501 => 293,  494 => 291,  480 => 280,  476 => 279,  433 => 238,  430 => 237,  421 => 236,  407 => 230,  402 => 227,  400 => 226,  396 => 225,  389 => 221,  382 => 217,  372 => 210,  356 => 197,  349 => 193,  339 => 186,  324 => 174,  317 => 170,  307 => 163,  282 => 143,  273 => 139,  259 => 130,  247 => 123,  236 => 115,  229 => 111,  219 => 104,  207 => 94,  205 => 93,  189 => 82,  180 => 78,  165 => 68,  153 => 61,  141 => 54,  129 => 47,  120 => 41,  111 => 35,  103 => 29,  96 => 24,  94 => 23,  91 => 22,  88 => 21,  79 => 20,  55 => 4,  46 => 3,  15 => 1,);
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

    .dropzone.dz-clickable {
        margin-top: 10px;
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
        <label class=\"sisi-input-lable table-input\">公司名称</label>
        <div class=\"sisi-input-inline\">
          <input type=\"text\" name=\"entity_name\" id=\"entity_name\" {{ read_only_attribute }} value=\"{{ identity.entity_name|default('') }}\" class=\"sisi-input-ing\"/>
        </div>
        <div class=\"layui-form-mid layui-word-aux \" id=\"error_entity_name\">请正确填写公司名称</div>
      </div>
      <div class=\"sisi-input-item\">
        <label class=\"sisi-input-lable table-input\">营业执照注册号</label>
        <div class=\"sisi-input-inline\">
          <input type=\"text\" name=\"entity_license_no\" id=\"entity_license_no\" {{ read_only_attribute }} value=\"{{ identity.entity_license_no|default('') }}\" class=\"sisi-input-ing\"/>
        </div>
        <div class=\"layui-form-mid layui-word-aux\" id=\"error_entity_license_no\">请正确填写营业执照注册号</div>
      </div>
      <div class=\"sisi-input-item\">
        <label class=\"sisi-input-lable table-input\">经营范围</label>
        <div class=\"sisi-input-inline\">
          <input type=\"text\" name=\"entity_license_business_scopes\" id=\"entity_license_business_scopes\" {{ read_only_attribute }} value=\"{{ identity.entity_license_business_scopes|default('') }}\" class=\"sisi-input-ing\"/>
        </div>
        <div class=\"layui-form-mid layui-word-aux\" id=\"error_entity_license_business_scopes\">请正确填写经营范围</div>
      </div>
      <div class=\"sisi-input-item\">
        <label class=\"sisi-input-lable table-input\">公司地址</label>
        <div class=\"sisi-input-inline\" style=\"width: 500px;\">
          <input type=\"text\" name=\"entity_license_address\" id=\"entity_license_address\" {{ read_only_attribute }} placeholder=\"请填写与公司地址\" value=\"{{ identity.entity_license_address|default('') }}\" class=\"sisi-input-ing\"/>
        </div>
        <div class=\"layui-form-mid layui-word-aux\" id=\"error_entity_license_address\">请正确填写公司地址</div>
      </div>

      <div class=\"sisi-input-item\">
        <label class=\"sisi-input-lable table-input\">营业执照有效日期</label>
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
          <div class=\"layui-form-mid layui-word-aux\" id=\"error_entity_license_valid_from\">请正确填写营业执照有效日期</div>
          <div class=\"layui-form-mid layui-word-aux\" id=\"error_entity_license_valid_to\">请正确填写营业执照有效日期</div>
        </div>
        <div style=\"line-height: 34px;\">
          <input type=\"checkbox\" name=\"entity_license_valid_long_term\" value=\"1\" class=\"long-time\" id=\"entity_license_valid_long_term\" style=\"margin-right: 5px;\"/>长期
        </div>
      </div>

        {% set max_size_in_mb = (params('identity_image_max_upload_file_size')/1024/1024)|number_format(1) %}

        <div class=\"sisi-input-item\">
            <label class=\"sisi-input-lable\">营业执照正面照片</label>
            <div class=\"sisi-input-block\" style=\"width: 800px;\">
                <div class=\"sisi-btn-content\">
                    <div class=\"layui-form-mid layui-word-aux\" id=\"error_entity_license_front_image_id\">请上传营业执照照片正面照片</div>
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
            <label class=\"sisi-input-lable table-input\">公司法人名字</label>
            <div class=\"sisi-input-inline\">
                <input type=\"text\" name=\"biz_legal_representative_name\" id=\"biz_legal_representative_name\" {{ read_only_attribute }} value=\"{{ identity.biz_legal_representative_name|default('') }}\" class=\"sisi-input-ing\"/>
            </div>
            <div class=\"layui-form-mid layui-word-aux \" id=\"error_biz_legal_representative_name\">请正确填写法人名字</div>
        </div>
        <div class=\"sisi-input-item\">
            <label class=\"sisi-input-lable table-input\">公司法人身份证号</label>
            <div class=\"sisi-input-inline\">
                <input type=\"text\" name=\"biz_legal_representative_id_no\" id=\"biz_legal_representative_id_no\" {{ read_only_attribute }} value=\"{{ identity.biz_legal_representative_id_no|default('') }}\" class=\"sisi-input-ing\"/>
            </div>
            <div class=\"layui-form-mid layui-word-aux\" id=\"error_biz_legal_representative_id_no\">请正确填写法人身份证号</div>
        </div>
        <div class=\"sisi-input-item\">
            <label class=\"sisi-input-lable table-input\">公司法人身份证有效日期</label>
            <div class=\"sisi-input-block f-fl\" style=\"margin-right: 20px;\">
                <ul class=\"inline clearfloat\">
                    <li class=\"\">
                        <input name=\"biz_legal_representative_id_valid_from\" type=\"text\" id=\"biz_legal_representative_id_valid_from\" {{ read_only_attribute }} class=\"layui-input\" placeholder=\"开始时间\" value=\"{{ identity.biz_legal_representative_id_valid_from|date('Y-m-d') }}\" style=\"width: 100px;\" />
                    </li>
                    <li style=\"line-height: 34px;\">-</li>
                    <li class=\"lay-code\">
                        <input name=\"biz_legal_representative_id_valid_to\" type=\"text\" id=\"biz_legal_representative_id_valid_to\" {{ read_only_attribute }} class=\"layui-input\" placeholder=\"结束时间\" value=\"{{ identity.biz_legal_representative_id_valid_to|date('Y-m-d') }}\"  style=\"width: 100px;\" />
                    </li>
                </ul>
                <div class=\"layui-form-mid layui-word-aux\" id=\"error_biz_legal_representative_id_valid_from\">请正确填写法人身份证有效日期</div>
                <div class=\"layui-form-mid layui-word-aux\" id=\"error_biz_legal_representative_id_valid_to\">请正确填写法人身份证有效日期</div>
            </div>
            <div style=\"line-height: 34px;\">
                <input type=\"checkbox\" name=\"biz_legal_representative_id_valid_long_term\" value=\"1\" class=\"long-time\" id=\"biz_legal_representative_id_valid_long_term\" style=\"margin-right: 5px;\"/>长期
            </div>
        </div>

      <div class=\"sisi-input-item\">
        <label class=\"sisi-input-lable\">公司法人身份证正面</label>
        <div class=\"sisi-input-block\" style=\"width: 800px;\">
          <div class=\"sisi-btn-content\">
            <div class=\"layui-form-mid layui-word-aux\" id=\"error_biz_legal_representative_id_front_image_id\">请上传法人身份证正面照片</div>
            <div class=\"image-item f-fl\">
              <div id=\"biz_legal_representative_id_front_image_id\" class=\"dropzone\" style=\"\">
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
          <input type=\"hidden\" name=\"biz_legal_representative_id_front_image_id\" value=\"{{ identity.biz_legal_representative_id_front_image_id|default('') }}\">
        </div>
      </div>
      <div class=\"sisi-input-item\">
        <label class=\"sisi-input-lable\">公司法人身份证反面</label>
        <div class=\"sisi-input-block\" style=\"width: 800px;\">
          <div class=\"sisi-btn-content\">
            <div class=\"layui-form-mid layui-word-aux\" id=\"error_biz_legal_representative_id_back_image_id\">请上传法人身份证反面照片</div>
            <div class=\"image-item f-fl\">
              <div id=\"biz_legal_representative_id_back_image_id\" class=\"dropzone\" style=\"\">
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
          <input type=\"hidden\" name=\"biz_legal_representative_id_back_image_id\" value=\"{{ identity.biz_legal_representative_id_back_image_id|default('') }}\">
        </div>
      </div>
      <div class=\"sisi-input-item\">
        <label class=\"sisi-input-lable\">公司法人手持身份证照片</label>
        <div class=\"sisi-input-block\" style=\"width: 800px;\">
          <div class=\"sisi-btn-content\">
            <div class=\"layui-form-mid layui-word-aux\" id=\"error_biz_legal_representative_id_handheld_image_id\">请上传身法人手持身份证照片
            </div>
            <div class=\"image-item f-fl\">
              <div id=\"biz_legal_representative_id_handheld_image_id\" class=\"dropzone\" style=\"\">
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
          <input type=\"hidden\" name=\"biz_legal_representative_id_handheld_image_id\" value=\"{{ identity.biz_legal_representative_id_handheld_image_id|default('') }}\">
        </div>
      </div>
      <div style=\"text-align: center;margin-top: 50px;\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('passport_identity_management_business_submit') }}\">
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
      function formatCurrentImageInfo(id, url) {
          return !id || id === '' ? [] : [{id: id, url: url}];
      }

      \$(document).ready(function () {
          var UPLOAD_URL = \"{{ oneup_uploader_endpoint('identity_image') }}\";
          var DELETE_URL = \"{{ url('common_file_upload_delete') }}\";

          function success(zoneId, file, response) {
              \$('input[name=' + zoneId + ']').val(response.id);
              console.log('success called', file, response);
          }

          function failure(zoneId, file, response) {
              console.log('failure called', file, response);
          }

          var currentIdentityFrontImage = formatCurrentImageInfo('{{ identity.entity_license_front_image_id }}', '{{ identity.entity_license_front_image_url }}');

          var currentLegalRepresentativeFrontImage = formatCurrentImageInfo('{{ identity.biz_legal_representative_id_front_image_id }}', '{{ identity.biz_legal_representative_id_front_image_url }}');
          var currentLegalRepresentativeBackImage = formatCurrentImageInfo('{{ identity.biz_legal_representative_id_back_image_id }}', '{{ identity.biz_legal_representative_id_back_image_url }}');
          var currentLegalRepresentativeHandheldImage = formatCurrentImageInfo('{{ identity.biz_legal_representative_id_handheld_image_id }}', '{{ identity.biz_legal_representative_id_handheld_image_url }}');

          var allow_upload = {{ read_only ? 'false' : 'true' }};

          setup_upload_form('entity_license_front_image_id', UPLOAD_URL, DELETE_URL, currentIdentityFrontImage, success, failure, allow_upload);

          setup_upload_form('biz_legal_representative_id_front_image_id', UPLOAD_URL, DELETE_URL, currentLegalRepresentativeFrontImage, success, failure, allow_upload);
          setup_upload_form('biz_legal_representative_id_back_image_id', UPLOAD_URL, DELETE_URL, currentLegalRepresentativeBackImage, success, failure, allow_upload);
          setup_upload_form('biz_legal_representative_id_handheld_image_id', UPLOAD_URL, DELETE_URL, currentLegalRepresentativeHandheldImage, success, failure, allow_upload);

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
              elem:    '#biz_legal_representative_id_valid_from' //指定元素
              , theme: '#393D49'
          });
          laydate.render({
              elem:    '#biz_legal_representative_id_valid_to' //指定元素
              , theme: '#393D49'
          });
      });

      function init_form() {
          {% if identity and identity.entity_license_front_image_review_result == 'REJECTED' %}
          \$('#error_entity_license_front_image').toggle();
          \$('#error_entity_license_front_image').html('营业执照照片不合格，请重新上传');
          {% endif %}

          {% if identity and identity.biz_legal_representative_id_front_image_review_result == 'REJECTED' %}
          \$('#error_entity_license_front_image').toggle();
          \$('#error_entity_license_front_image').html('法人身份证正面照片不合格，请重新上传');
          {% endif %}

          {% if identity and identity.biz_legal_representative_id_back_image_review_result == 'REJECTED' %}
          \$('#error_entity_license_back_image').toggle();
          \$('#error_entity_license_back_image').html('法人身份证反面照片不合格，请重新上传');
          {% endif %}

          {% if identity and identity.biz_legal_representative_id_handheld_image_review_result == 'REJECTED' %}
          \$('#error_entity_license_handheld_image').toggle();
          \$('#error_entity_license_handheld_image').html('法人手持身份证照片不合格，请重新上传');
          {% endif %}


          {#{% if app.debug %}#}
          {#layui.form.val('identity-submitting-form', {#}
          {#'entity_name'              : '陈亚莉',#}
          {#'entity_license_no'                : '350103198705202325',#}
          {#'entity_license_address'           : '广西南宁',#}
          {#'entity_license_valid_from'        : '2000-01-01',#}
          {#'entity_license_valid_to'          : '2018-01-01'#}
          {#});#}
          {#{% endif %}#}
      }

      function submit_entity_license_form(submitNow) {
          \$('.layui-word-aux').hide();

          \$.post('{{ path('passport_identity_management_business_submit') }}?submit=' + submitNow, \$('#identity-submitting-form').serialize(), function (result) {
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
{% endblock %}", "Passport/IdentityManagement/businessIdentityInfo.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\IdentityManagement\\businessIdentityInfo.twig");
    }
}
