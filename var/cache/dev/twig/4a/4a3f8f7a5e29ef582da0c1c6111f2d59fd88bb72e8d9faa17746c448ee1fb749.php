<?php

/* Passport/IdentityManagement/_individualForm.twig */
class __TwigTemplate_12f55e5ef2a1f0136fb171fc901bee32965eeead1bf3d14112a0d61f68bb1ded extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/IdentityManagement/_individualForm.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/IdentityManagement/_individualForm.twig"));

        // line 1
        echo "
  ";
        // line 2
        $context["realNameInfo"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->source); })()), "user", array()), "realNameInfo", array());
        // line 3
        echo "
  <div id=\"senfen_sub\" style=\"\">
    <!--    <div id=\"senfen_sub\" >-->
    <div class=\"info-1\">
      <p class=\"layui-elem-quote\">您还未填写证件信息，需完善您的资料后才能开通。</p>
      <div class=\"info-main\">
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">姓名</label>
          <div class=\"layui-input-inline\">
            <input name=\"\" id=\"name\" placeholder=\"请输入您的真实姓名\" class=\"layui-input\" type=\"text\"/>
          </div>
        </div>

        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">身份证号码</label>
          <div class=\"layui-input-inline\">
            <input name=\"\" id=\"senfen_number\" placeholder=\"请输入您的身份证号码\" class=\"layui-input\" type=\"text\"/>
          </div>
          <div class=\"layui-form-mid layui-word-aux\"><span>请输入18位身份证号码</span></div>
        </div>
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">验证码</label>
          <div class=\"layui-input-inline\" style=\"width: 120px;\">
            <input id=\"verify_code\" name=\"\" class=\"layui-input\" type=\"text\" style=\"width: 120px;\" />
          </div>
          <div class=\"layui-input-inline\" style=\"width: 120px;\">
            <div class=\"security-code\" style=\"width: 110px;\">
              <img src=\"<?=\\yii\\helpers\\Url::to(['verify-code'])?>\"  onclick=\"this.src='<?=\\yii\\helpers\\Url::to(['verify-code'])?>?&'+Math.random();\" title=\"点击获取\" class=\"verify_img\"/>
            </div>
          </div>
        </div>
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">手机验证码</label>
          <div class=\"layui-input-inline\" style=\"width: 120px;\">
            <input   id=\"mobile-verify-code\" name=\"\" class=\"layui-input\" type=\"text\" style=\"width: 120px;\"/>
          </div>
          <div class=\"layui-input-inline\" style=\"width: 120px;\">
            <button class=\"layui-btn layui-btn-primary\" id=\"send_code\" style=\"width: 140px;\" onclick=\"sendCode(1)\"><span id=\"mobile-time\"></span><span id=\"mobile-time-span\">发送验证码</span></button>
          </div>
        </div>

        <div class=\"agreement\" style=\"padding-left: 110px; margin-top: 10px;\">
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
  <!--个人完善信息-->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Passport/IdentityManagement/_individualForm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
  {% set realNameInfo = app.user.realNameInfo %}

  <div id=\"senfen_sub\" style=\"\">
    <!--    <div id=\"senfen_sub\" >-->
    <div class=\"info-1\">
      <p class=\"layui-elem-quote\">您还未填写证件信息，需完善您的资料后才能开通。</p>
      <div class=\"info-main\">
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">姓名</label>
          <div class=\"layui-input-inline\">
            <input name=\"\" id=\"name\" placeholder=\"请输入您的真实姓名\" class=\"layui-input\" type=\"text\"/>
          </div>
        </div>

        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">身份证号码</label>
          <div class=\"layui-input-inline\">
            <input name=\"\" id=\"senfen_number\" placeholder=\"请输入您的身份证号码\" class=\"layui-input\" type=\"text\"/>
          </div>
          <div class=\"layui-form-mid layui-word-aux\"><span>请输入18位身份证号码</span></div>
        </div>
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">验证码</label>
          <div class=\"layui-input-inline\" style=\"width: 120px;\">
            <input id=\"verify_code\" name=\"\" class=\"layui-input\" type=\"text\" style=\"width: 120px;\" />
          </div>
          <div class=\"layui-input-inline\" style=\"width: 120px;\">
            <div class=\"security-code\" style=\"width: 110px;\">
              <img src=\"<?=\\yii\\helpers\\Url::to(['verify-code'])?>\"  onclick=\"this.src='<?=\\yii\\helpers\\Url::to(['verify-code'])?>?&'+Math.random();\" title=\"点击获取\" class=\"verify_img\"/>
            </div>
          </div>
        </div>
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\">手机验证码</label>
          <div class=\"layui-input-inline\" style=\"width: 120px;\">
            <input   id=\"mobile-verify-code\" name=\"\" class=\"layui-input\" type=\"text\" style=\"width: 120px;\"/>
          </div>
          <div class=\"layui-input-inline\" style=\"width: 120px;\">
            <button class=\"layui-btn layui-btn-primary\" id=\"send_code\" style=\"width: 140px;\" onclick=\"sendCode(1)\"><span id=\"mobile-time\"></span><span id=\"mobile-time-span\">发送验证码</span></button>
          </div>
        </div>

        <div class=\"agreement\" style=\"padding-left: 110px; margin-top: 10px;\">
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
  <!--个人完善信息-->
", "Passport/IdentityManagement/_individualForm.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\IdentityManagement\\_individualForm.twig");
    }
}
