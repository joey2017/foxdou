<?php

/* Passport/IdentityManagement/_businessForm.twig */
class __TwigTemplate_836ffd88935616b9f3704f80459f11a137995eb39b3cfa68acec8ec91077b443 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/IdentityManagement/_businessForm.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/IdentityManagement/_businessForm.twig"));

        // line 1
        echo "


";
        // line 4
        $this->displayBlock('main_content', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 5
        echo "  ";
        $context["realNameInfo"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->source); })()), "user", array()), "realNameInfo", array());
        // line 6
        echo "
  <!--企业、个体户完善信息-->
  <div id=\"senfen_sub2\">
    <div class=\"info-1\">
      <p class=\"layui-elem-quote\">您还未填写证件信息，需完善您的资料后才能开通。</p>
      <div class=\"info-main\">
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">法人姓名</label>
          <div class=\"layui-input-inline\">
            <input name=\"name\" id=\"name_b\" placeholder=\"请输入您的法人姓名\" class=\"layui-input\" type=\"text\"/>
          </div>
        </div>
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">法人身份证号码</label>
          <div class=\"layui-input-inline\">
            <input name=\"faren_cred_number\" id=\"senfen_number_b\" placeholder=\"法人身份证号码\" class=\"layui-input\" type=\"text\"/>
          </div>
          <div class=\"layui-form-mid layui-word-aux\"><span>请输入18位身份证号码</span></div>
        </div>
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">营业执照名称</label>
          <div class=\"layui-input-inline\">
            <input name=\"cred_name\" id=\"cred_name\" placeholder=\"营业执照名称\" class=\"layui-input\" type=\"text\"/>
          </div>
        </div>
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">营业执照号码</label>
          <div class=\"layui-input-inline\">
            <input name=\"\" id=\"cred_number\" placeholder=\"营业执照号码\" class=\"layui-input\" type=\"text\"/>
          </div>
          <div class=\"layui-form-mid layui-word-aux\"><span>请输入15位注册号或18位社会统一代码</span></div>
        </div>
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">营业执照地址</label>
          <div class=\"layui-input-inline\">
            <input name=\"cred_address\" id=\"cred_address\" placeholder=\"营业执照地址\" class=\"layui-input\" type=\"text\"/>
          </div>
        </div>

        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">验证码</label>
          <div class=\"layui-input-inline\" style=\"width: 120px;\">
            <input id=\"verify_code_qiye\" name=\"\" class=\"layui-input\" type=\"text\" style=\"width: 120px;\" />
          </div>
          <div class=\"layui-input-inline\" style=\"width: 120px;\">
            <div class=\"security-code\" style=\"width: 110px;\">
              <img  class=\"verify_img\" src=\"<?=\\yii\\helpers\\Url::to(['verify-code'])?>\"  onclick=\"this.src='<?=\\yii\\helpers\\Url::to(['verify-code'])?>?&'+Math.random();\" title=\"点击获取\"/>
            </div>
          </div>
        </div>
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">手机验证码</label>
          <div class=\"layui-input-inline\" style=\"width: 120px;\">
            <input name=\"\" id=\"mobile-verify-code-qiye\" class=\"layui-input\" type=\"text\" style=\"width: 120px;\" />
          </div>
          <div class=\"layui-input-inline\" style=\"width: 120px;\">
            <button class=\"layui-btn layui-btn-primary\" id=\"send_code-qiye\" style=\"width: 140px;\" onclick=\"sendCode(2)\"><span id=\"mobile-time-qiye\"></span><span id=\"mobile-time-span-qiye\">发送验证码</span></button>

          </div>
        </div>

        <div class=\"agreement\" id=\"agreement\" style=\"padding-left: 150px; margin-top: 10px;\">
          <input name=\"\" value=\"\" title=\"我已阅读并同意相关服务条款和隐私政策\" type=\"checkbox\" class=\"sisi-checkbox\">
          <span>我已阅读并同意《<a href=\"javascript:void(0);\">相关服务条款和隐私政策</a>》</span>
        </div>

        <div class=\"layui-form-item\" style=\"margin-top: 30px\">
          <label class=\"layui-form-label\"></label>
          <div class=\"layui-input-inline\">
            <button class=\"layui-btn layui-btn-normal\">上传认证</button>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!--企业、个体户完善信息-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Passport/IdentityManagement/_businessForm.twig";
    }

    public function getDebugInfo()
    {
        return array (  56 => 6,  53 => 5,  35 => 4,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("


{% block main_content %}
  {% set realNameInfo = app.user.realNameInfo %}

  <!--企业、个体户完善信息-->
  <div id=\"senfen_sub2\">
    <div class=\"info-1\">
      <p class=\"layui-elem-quote\">您还未填写证件信息，需完善您的资料后才能开通。</p>
      <div class=\"info-main\">
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">法人姓名</label>
          <div class=\"layui-input-inline\">
            <input name=\"name\" id=\"name_b\" placeholder=\"请输入您的法人姓名\" class=\"layui-input\" type=\"text\"/>
          </div>
        </div>
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">法人身份证号码</label>
          <div class=\"layui-input-inline\">
            <input name=\"faren_cred_number\" id=\"senfen_number_b\" placeholder=\"法人身份证号码\" class=\"layui-input\" type=\"text\"/>
          </div>
          <div class=\"layui-form-mid layui-word-aux\"><span>请输入18位身份证号码</span></div>
        </div>
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">营业执照名称</label>
          <div class=\"layui-input-inline\">
            <input name=\"cred_name\" id=\"cred_name\" placeholder=\"营业执照名称\" class=\"layui-input\" type=\"text\"/>
          </div>
        </div>
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">营业执照号码</label>
          <div class=\"layui-input-inline\">
            <input name=\"\" id=\"cred_number\" placeholder=\"营业执照号码\" class=\"layui-input\" type=\"text\"/>
          </div>
          <div class=\"layui-form-mid layui-word-aux\"><span>请输入15位注册号或18位社会统一代码</span></div>
        </div>
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">营业执照地址</label>
          <div class=\"layui-input-inline\">
            <input name=\"cred_address\" id=\"cred_address\" placeholder=\"营业执照地址\" class=\"layui-input\" type=\"text\"/>
          </div>
        </div>

        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">验证码</label>
          <div class=\"layui-input-inline\" style=\"width: 120px;\">
            <input id=\"verify_code_qiye\" name=\"\" class=\"layui-input\" type=\"text\" style=\"width: 120px;\" />
          </div>
          <div class=\"layui-input-inline\" style=\"width: 120px;\">
            <div class=\"security-code\" style=\"width: 110px;\">
              <img  class=\"verify_img\" src=\"<?=\\yii\\helpers\\Url::to(['verify-code'])?>\"  onclick=\"this.src='<?=\\yii\\helpers\\Url::to(['verify-code'])?>?&'+Math.random();\" title=\"点击获取\"/>
            </div>
          </div>
        </div>
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">手机验证码</label>
          <div class=\"layui-input-inline\" style=\"width: 120px;\">
            <input name=\"\" id=\"mobile-verify-code-qiye\" class=\"layui-input\" type=\"text\" style=\"width: 120px;\" />
          </div>
          <div class=\"layui-input-inline\" style=\"width: 120px;\">
            <button class=\"layui-btn layui-btn-primary\" id=\"send_code-qiye\" style=\"width: 140px;\" onclick=\"sendCode(2)\"><span id=\"mobile-time-qiye\"></span><span id=\"mobile-time-span-qiye\">发送验证码</span></button>

          </div>
        </div>

        <div class=\"agreement\" id=\"agreement\" style=\"padding-left: 150px; margin-top: 10px;\">
          <input name=\"\" value=\"\" title=\"我已阅读并同意相关服务条款和隐私政策\" type=\"checkbox\" class=\"sisi-checkbox\">
          <span>我已阅读并同意《<a href=\"javascript:void(0);\">相关服务条款和隐私政策</a>》</span>
        </div>

        <div class=\"layui-form-item\" style=\"margin-top: 30px\">
          <label class=\"layui-form-label\"></label>
          <div class=\"layui-input-inline\">
            <button class=\"layui-btn layui-btn-normal\">上传认证</button>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!--企业、个体户完善信息-->

{% endblock %}
", "Passport/IdentityManagement/_businessForm.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\IdentityManagement\\_businessForm.twig");
    }
}
