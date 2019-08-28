<?php

/* Admin/SystemAdministration/SystemSetting/edit__passport.twig */
class __TwigTemplate_3e3118cc39b09d4c11e1650c3aa895ea12a048fdfcb86a385e3a6a388bb47657 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/Admin/Common/layout.twig", "Admin/SystemAdministration/SystemSetting/edit__passport.twig", 1);
        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/Admin/Common/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/SystemSetting/edit__passport.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/SystemSetting/edit__passport.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers.html.twig", "Admin/SystemAdministration/SystemSetting/edit__passport.twig", 2);
        // line 4
        $context["title"] = "系统设置";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 7
        echo "  <div class=\"layui-fluid\">
    <div class=\"layui-card\">
      <div class=\"layui-card-header\">系统设置</div>
      <div class=\"layui-card-body\">
        <div class=\"layui-tab layui-tab-brief\">
          <ul class=\"layui-tab-title\">
            <li class=\"layui-this\">个人通行证注册激活/平台账户自动开户</li>
            <li>企业通行证注册激活/平台账户自动开户</li>
            <li>账密错误导致通行证冻结</li>
          </ul>
          <div class=\"layui-tab-content layadmin-form-body\">
            <div class=\"layui-tab-item layui-show\">
              <div class=\"layui-form\">
                <div class=\"layui-form-item\">
                  <label class=\"layui-form-label\">注册时：</label>
                  <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"a\" value=\"0\" title=\"注册时需要填写身份信息\" checked>
                    <input type=\"radio\" name=\"a\" value=\"1\" title=\"注册时不需要填写身份信息\">
                  </div>
                </div>
                <div class=\"layui-form-item\">
                  <label class=\"layui-form-label\">注册后：</label>
                  <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"b\" value=\"0\" title=\"注册后无需审核身份信息自动激活\" checked>
                    <input type=\"radio\" name=\"b\" value=\"1\" title=\"注册后需审核身份信息才自动激活\">
                  </div>
                </div>
                <div class=\"layui-form-item\">
                  <label class=\"layui-form-label\">身份审核方式：</label>
                  <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"c\" value=\"0\" title=\"后台人工\" checked>
                    <input type=\"radio\" name=\"c\" value=\"1\" title=\"接口校验（调取失败转人工）\">
                  </div>
                </div>
                <div class=\"layui-form-item\">
                  <label class=\"layui-form-label\">开放平台账户开户方式：</label>
                  <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"d\" value=\"0\" title=\"激活通行证自动开户\" checked><br/>
                    <input type=\"radio\" name=\"d\" value=\"1\" title=\"身份信息过审自动开户\"><br/>
                    <input type=\"radio\" name=\"d\" value=\"2\" title=\"需完成身份信息审核后，额外申请开户并通过\">
                  </div>
                </div>
                <div class=\"layui-form-item\">
                  <label class=\"layui-form-label\">代理商平台账户开户方式：</label>
                  <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"e\" value=\"0\" title=\"激活通行证自动开户\"><br/>
                    <input type=\"radio\" name=\"e\" value=\"1\" title=\"身份信息过审自动开户\" checked><br/>
                    <input type=\"radio\" name=\"e\" value=\"2\" title=\"需完成身份信息审核后，额外申请开户并通过\">
                  </div>
                </div>
                <div class=\"layui-form-item\">
                  <label class=\"layui-form-label\">供应商平台账户开户方式：</label>
                  <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"f\" value=\"0\" title=\"激活通行证自动开户\"><br/>
                    <input type=\"radio\" name=\"f\" value=\"1\" title=\"身份信息过审自动开户\"><br/>
                    <input type=\"radio\" name=\"f\" value=\"2\" title=\"需完成身份信息审核后，额外申请开户并通过\" checked>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"layui-tab-item\">
              <div class=\"layui-form\">
                <div class=\"layui-form-item\">
                  <label class=\"layui-form-label\">注册后：</label>
                  <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"g\" value=\"0\" title=\"注册后完成邮箱验证，无需审核身份信息自动激活\" checked><br/>
                    <input type=\"radio\" name=\"g\" value=\"1\" title=\"注册后完成邮箱验证，需审核身份信息才自动激活\">
                  </div>
                </div>
                <div class=\"layui-form-item\">
                  <label class=\"layui-form-label\">身份审核方式：</label>
                  <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"h\" value=\"0\" title=\"后台人工\" checked>
                    <input type=\"radio\" name=\"h\" value=\"1\" title=\"接口校验（调取失败转人工）\">
                  </div>
                </div>
                <div class=\"layui-form-item\">
                  <label class=\"layui-form-label\">开放平台账户开户方式：</label>
                  <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"i\" value=\"0\" title=\"激活通行证自动开户\" checked><br/>
                    <input type=\"radio\" name=\"i\" value=\"1\" title=\"身份信息过审自动开户\"><br/>
                    <input type=\"radio\" name=\"i\" value=\"2\" title=\"需完成身份信息审核后，额外申请开户并通过\">
                  </div>
                </div>
                <div class=\"layui-form-item\">
                  <label class=\"layui-form-label\">代理商平台账户开户方式：</label>
                  <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"j\" value=\"0\" title=\"激活通行证自动开户\"><br/>
                    <input type=\"radio\" name=\"j\" value=\"1\" title=\"身份信息过审自动开户\" checked><br/>
                    <input type=\"radio\" name=\"j\" value=\"2\" title=\"需完成身份信息审核后，额外申请开户并通过\">
                  </div>
                </div>
                <div class=\"layui-form-item\">
                  <label class=\"layui-form-label\">供应商平台账户开户方式：</label>
                  <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"k\" value=\"0\" title=\"激活通行证自动开户\"><br/>
                    <input type=\"radio\" name=\"k\" value=\"1\" title=\"身份信息过审自动开户\"><br/>
                    <input type=\"radio\" name=\"k\" value=\"2\" title=\"需完成身份信息审核后，额外申请开户并通过\" checked>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"layui-tab-item\">
              <div class=\"layui-form\">
                <div class=\"layui-form-item\">
                  <label class=\"layui-form-label\">每日最多允许输错密码次数：</label>
                  <div class=\"layui-input-block\">
                    <div class=\"layui-inline\">
                      <input type=\"text\" placeholder=\"\" class=\"layui-input\">
                    </div>
                    次
                  </div>
                </div>
                <div class=\"layui-form-item\">
                  <label class=\"layui-form-label\">通行证冻结时间：</label>
                  <div class=\"layui-input-block\">
                    <div class=\"layui-inline\">
                      <input type=\"text\" placeholder=\"\" class=\"layui-input\">
                    </div>
                    小时
                  </div>
                </div>
              </div>
            </div>
            <div class=\"layui-tab-item\">内容4</div>
            <div class=\"layui-tab-item\">内容5</div>
          </div>
        </div>
        <div class=\"layui-form\">
          <div class=\"layui-form-item\">
            <div class=\"layui-input-block\" style=\"margin-left: 270px;\">
              <button class=\"layui-btn\">保存</button>
              <button class=\"layui-btn layui-btn-primary\">取消</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/SystemAdministration/SystemSetting/edit__passport.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  49 => 6,  39 => 1,  37 => 4,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ('/Admin/Common/layout.twig') %}
{% import ('/Common/simple_form_helpers.html.twig') as sf %}

{% set title = '系统设置' %}

{% block main_content %}
  <div class=\"layui-fluid\">
    <div class=\"layui-card\">
      <div class=\"layui-card-header\">系统设置</div>
      <div class=\"layui-card-body\">
        <div class=\"layui-tab layui-tab-brief\">
          <ul class=\"layui-tab-title\">
            <li class=\"layui-this\">个人通行证注册激活/平台账户自动开户</li>
            <li>企业通行证注册激活/平台账户自动开户</li>
            <li>账密错误导致通行证冻结</li>
          </ul>
          <div class=\"layui-tab-content layadmin-form-body\">
            <div class=\"layui-tab-item layui-show\">
              <div class=\"layui-form\">
                <div class=\"layui-form-item\">
                  <label class=\"layui-form-label\">注册时：</label>
                  <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"a\" value=\"0\" title=\"注册时需要填写身份信息\" checked>
                    <input type=\"radio\" name=\"a\" value=\"1\" title=\"注册时不需要填写身份信息\">
                  </div>
                </div>
                <div class=\"layui-form-item\">
                  <label class=\"layui-form-label\">注册后：</label>
                  <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"b\" value=\"0\" title=\"注册后无需审核身份信息自动激活\" checked>
                    <input type=\"radio\" name=\"b\" value=\"1\" title=\"注册后需审核身份信息才自动激活\">
                  </div>
                </div>
                <div class=\"layui-form-item\">
                  <label class=\"layui-form-label\">身份审核方式：</label>
                  <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"c\" value=\"0\" title=\"后台人工\" checked>
                    <input type=\"radio\" name=\"c\" value=\"1\" title=\"接口校验（调取失败转人工）\">
                  </div>
                </div>
                <div class=\"layui-form-item\">
                  <label class=\"layui-form-label\">开放平台账户开户方式：</label>
                  <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"d\" value=\"0\" title=\"激活通行证自动开户\" checked><br/>
                    <input type=\"radio\" name=\"d\" value=\"1\" title=\"身份信息过审自动开户\"><br/>
                    <input type=\"radio\" name=\"d\" value=\"2\" title=\"需完成身份信息审核后，额外申请开户并通过\">
                  </div>
                </div>
                <div class=\"layui-form-item\">
                  <label class=\"layui-form-label\">代理商平台账户开户方式：</label>
                  <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"e\" value=\"0\" title=\"激活通行证自动开户\"><br/>
                    <input type=\"radio\" name=\"e\" value=\"1\" title=\"身份信息过审自动开户\" checked><br/>
                    <input type=\"radio\" name=\"e\" value=\"2\" title=\"需完成身份信息审核后，额外申请开户并通过\">
                  </div>
                </div>
                <div class=\"layui-form-item\">
                  <label class=\"layui-form-label\">供应商平台账户开户方式：</label>
                  <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"f\" value=\"0\" title=\"激活通行证自动开户\"><br/>
                    <input type=\"radio\" name=\"f\" value=\"1\" title=\"身份信息过审自动开户\"><br/>
                    <input type=\"radio\" name=\"f\" value=\"2\" title=\"需完成身份信息审核后，额外申请开户并通过\" checked>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"layui-tab-item\">
              <div class=\"layui-form\">
                <div class=\"layui-form-item\">
                  <label class=\"layui-form-label\">注册后：</label>
                  <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"g\" value=\"0\" title=\"注册后完成邮箱验证，无需审核身份信息自动激活\" checked><br/>
                    <input type=\"radio\" name=\"g\" value=\"1\" title=\"注册后完成邮箱验证，需审核身份信息才自动激活\">
                  </div>
                </div>
                <div class=\"layui-form-item\">
                  <label class=\"layui-form-label\">身份审核方式：</label>
                  <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"h\" value=\"0\" title=\"后台人工\" checked>
                    <input type=\"radio\" name=\"h\" value=\"1\" title=\"接口校验（调取失败转人工）\">
                  </div>
                </div>
                <div class=\"layui-form-item\">
                  <label class=\"layui-form-label\">开放平台账户开户方式：</label>
                  <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"i\" value=\"0\" title=\"激活通行证自动开户\" checked><br/>
                    <input type=\"radio\" name=\"i\" value=\"1\" title=\"身份信息过审自动开户\"><br/>
                    <input type=\"radio\" name=\"i\" value=\"2\" title=\"需完成身份信息审核后，额外申请开户并通过\">
                  </div>
                </div>
                <div class=\"layui-form-item\">
                  <label class=\"layui-form-label\">代理商平台账户开户方式：</label>
                  <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"j\" value=\"0\" title=\"激活通行证自动开户\"><br/>
                    <input type=\"radio\" name=\"j\" value=\"1\" title=\"身份信息过审自动开户\" checked><br/>
                    <input type=\"radio\" name=\"j\" value=\"2\" title=\"需完成身份信息审核后，额外申请开户并通过\">
                  </div>
                </div>
                <div class=\"layui-form-item\">
                  <label class=\"layui-form-label\">供应商平台账户开户方式：</label>
                  <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"k\" value=\"0\" title=\"激活通行证自动开户\"><br/>
                    <input type=\"radio\" name=\"k\" value=\"1\" title=\"身份信息过审自动开户\"><br/>
                    <input type=\"radio\" name=\"k\" value=\"2\" title=\"需完成身份信息审核后，额外申请开户并通过\" checked>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"layui-tab-item\">
              <div class=\"layui-form\">
                <div class=\"layui-form-item\">
                  <label class=\"layui-form-label\">每日最多允许输错密码次数：</label>
                  <div class=\"layui-input-block\">
                    <div class=\"layui-inline\">
                      <input type=\"text\" placeholder=\"\" class=\"layui-input\">
                    </div>
                    次
                  </div>
                </div>
                <div class=\"layui-form-item\">
                  <label class=\"layui-form-label\">通行证冻结时间：</label>
                  <div class=\"layui-input-block\">
                    <div class=\"layui-inline\">
                      <input type=\"text\" placeholder=\"\" class=\"layui-input\">
                    </div>
                    小时
                  </div>
                </div>
              </div>
            </div>
            <div class=\"layui-tab-item\">内容4</div>
            <div class=\"layui-tab-item\">内容5</div>
          </div>
        </div>
        <div class=\"layui-form\">
          <div class=\"layui-form-item\">
            <div class=\"layui-input-block\" style=\"margin-left: 270px;\">
              <button class=\"layui-btn\">保存</button>
              <button class=\"layui-btn layui-btn-primary\">取消</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

{% endblock %}", "Admin/SystemAdministration/SystemSetting/edit__passport.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\SystemAdministration\\SystemSetting\\edit__passport.twig");
    }
}
