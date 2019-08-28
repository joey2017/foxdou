<?php

/* Admin/SystemAdministration/SystemSetting/edit__supplier_platform.twig */
class __TwigTemplate_c7d90ec7cf7b4ab807e924414d9f9d4794d8f8969dab88132436fca5425a6c4c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/Admin/Common/layout.twig", "Admin/SystemAdministration/SystemSetting/edit__supplier_platform.twig", 1);
        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
            'extra' => array($this, 'block_extra'),
            'js_end' => array($this, 'block_js_end'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/Admin/Common/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/SystemSetting/edit__supplier_platform.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/SystemSetting/edit__supplier_platform.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers.html.twig", "Admin/SystemAdministration/SystemSetting/edit__supplier_platform.twig", 2);
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
        echo "<div class=\"layui-fluid\">
  <div class=\"layui-card\">
    <div class=\"layui-card-header\">系统设置</div>
    <div class=\"layui-card-body\">
      <div class=\"layui-foldapse\">
        <div class=\"layui-folda-item\">
          <h2 class=\"layui-folda-title\"><i class=\"layui-icon layui-icon-triangle-d\"></i>个人通行证注册激活/平台账户自动开户</h2>
          <div class=\"layui-folda-content layui-folda-content-bg\">
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
                  <input type=\"radio\" name=\"d\" value=\"0\" title=\"激活通行证自动开户\" checked><br />
                  <input type=\"radio\" name=\"d\" value=\"1\" title=\"身份信息过审自动开户\"><br />
                  <input type=\"radio\" name=\"d\" value=\"2\" title=\"需完成身份信息审核后，额外申请开户并通过\">
                </div>
              </div>
              <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">代理商平台账户开户方式：</label>
                <div class=\"layui-input-block\">
                  <input type=\"radio\" name=\"e\" value=\"0\" title=\"激活通行证自动开户\"><br />
                  <input type=\"radio\" name=\"e\" value=\"1\" title=\"身份信息过审自动开户\" checked><br />
                  <input type=\"radio\" name=\"e\" value=\"2\" title=\"需完成身份信息审核后，额外申请开户并通过\">
                </div>
              </div>
              <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">供应商平台账户开户方式：</label>
                <div class=\"layui-input-block\">
                  <input type=\"radio\" name=\"f\" value=\"0\" title=\"激活通行证自动开户\"><br />
                  <input type=\"radio\" name=\"f\" value=\"1\" title=\"身份信息过审自动开户\"><br />
                  <input type=\"radio\" name=\"f\" value=\"2\" title=\"需完成身份信息审核后，额外申请开户并通过\" checked>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"layui-folda-item\">
          <h2 class=\"layui-folda-title\"><i class=\"layui-icon layui-icon-triangle-d\"></i>企业通行证注册激活/平台账户自动开户</h2>
          <div class=\"layui-folda-content layui-folda-content-bg\">
            <div class=\"layui-form\">
              <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">注册后：</label>
                <div class=\"layui-input-block\">
                  <input type=\"radio\" name=\"g\" value=\"0\" title=\"注册后完成邮箱验证，无需审核身份信息自动激活\" checked><br />
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
                  <input type=\"radio\" name=\"i\" value=\"0\" title=\"激活通行证自动开户\" checked><br />
                  <input type=\"radio\" name=\"i\" value=\"1\" title=\"身份信息过审自动开户\"><br />
                  <input type=\"radio\" name=\"i\" value=\"2\" title=\"需完成身份信息审核后，额外申请开户并通过\">
                </div>
              </div>
              <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">代理商平台账户开户方式：</label>
                <div class=\"layui-input-block\">
                  <input type=\"radio\" name=\"j\" value=\"0\" title=\"激活通行证自动开户\"><br />
                  <input type=\"radio\" name=\"j\" value=\"1\" title=\"身份信息过审自动开户\" checked><br />
                  <input type=\"radio\" name=\"j\" value=\"2\" title=\"需完成身份信息审核后，额外申请开户并通过\">
                </div>
              </div>
              <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">供应商平台账户开户方式：</label>
                <div class=\"layui-input-block\">
                  <input type=\"radio\" name=\"k\" value=\"0\" title=\"激活通行证自动开户\"><br />
                  <input type=\"radio\" name=\"k\" value=\"1\" title=\"身份信息过审自动开户\"><br />
                  <input type=\"radio\" name=\"k\" value=\"2\" title=\"需完成身份信息审核后，额外申请开户并通过\" checked>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"layui-folda-item\">
          <h2 class=\"layui-folda-title\"><i class=\"layui-icon layui-icon-triangle-d\"></i>账密错误导致通行证冻结</h2>
          <div class=\"layui-folda-content layui-folda-content-bg\">
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
        </div>
        <div class=\"layui-folda-item\">
          <h2 class=\"layui-folda-title\"><i class=\"layui-icon layui-icon-triangle-d\"></i> 代理商平台设置</h2>
          <div class=\"layui-folda-content layui-folda-content-bg\">
            <div class=\"layui-form\">
              <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">邀请员工等待确认时间：</label>
                <div class=\"layui-input-block\">
                  <div class=\"layui-inline\">
                    <input type=\"text\" placeholder=\"\" class=\"layui-input\">
                  </div>
                  小时
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"layui-folda-item\">
          <h2 class=\"layui-folda-title\"><i class=\"layui-icon layui-icon-triangle-d\"></i> 供应商平台设置</h2>
          <div class=\"layui-folda-content layui-folda-content-bg\">
            <div class=\"layui-form\">
              <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">提现手续费：</label>
                <div class=\"layui-input-block\">
                  <input type=\"radio\" name=\"l\" title=\"不收取手续费\" checked><br />
                  <input type=\"radio\" name=\"l\" title=\"按费率收取\">
                  <div class=\"layui-inline\">
                    <input type=\"text\" placeholder=\"\" class=\"layui-input\">
                  </div>
                  %<br />
                  <input type=\"radio\" name=\"l\" title=\"按费率收取\">
                  <div class=\"layui-inline\">
                    <input type=\"text\" placeholder=\"\" class=\"layui-input\">
                  </div>
                  元
                </div>
              </div>
              <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">每日最大申请提现次数：</label>
                <div class=\"layui-input-block\">
                  <div class=\"layui-inline\">
                    <input type=\"text\" placeholder=\"\" class=\"layui-input\">
                  </div>
                  次
                </div>
              </div>
              <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">单次可提现范围：</label>
                <div class=\"layui-input-block\">
                  <div class=\"layui-inline\">
                    <input type=\"text\" placeholder=\"\" class=\"layui-input\">
                  </div>
                  ~
                  <div class=\"layui-inline\">
                    <input type=\"text\" placeholder=\"\" class=\"layui-input\">
                  </div>
                  元
                </div>
              </div>
              <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">邀请员工等待确认时间：</label>
                <div class=\"layui-input-block\">
                  <div class=\"layui-inline\">
                    <input type=\"text\" placeholder=\"\" class=\"layui-input\">
                  </div>
                  小时
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"layui-form\">
        <div class=\"layui-form-item\">
          <div class=\"layui-input-block\" style=\"margin-left: 170px;\">
            <button class=\"layui-btn\">保存</button>
            <button class=\"layui-btn layui-btn-primary\">取消</button>
          </div>
        </div>
      </div>
    </div>
  </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 218
    public function block_extra($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra"));

        // line 219
        echo "  <div class=\"layui-card\" id=\"edit-user\" style=\"display: none;\">
    <div class=\"layui-card-body\">
      <form id=\"edit-form\" class=\"layui-form\" lay-filter=\"edit-form\">
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\"></label>
          <div class=\"layui-input-inline layui-inline-400\">
            带 * 号的为必填项
          </div>
        </div>

        ";
        // line 229
        echo $context["sf"]->macro_field(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 229, $this->source); })()), "roles", array()), "select", "权限组：", array("options" => $this->extensions['App\Common\Twig\AppExtension']->arrayToOptions(twig_constant("App\\Admin\\Model\\AdminUser::ADMIN_ROLES"), "全部")));
        echo "
        ";
        // line 230
        echo $context["sf"]->macro_field(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 230, $this->source); })()), "user_name", array()), "text", "用户名：", array("attrs" => array("placeholder" => "请输入用户名")));
        echo "
        ";
        // line 231
        echo $context["sf"]->macro_field(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 231, $this->source); })()), "name", array()), "text", "名字：", array("attrs" => array("placeholder" => "请输入名字")));
        echo "
        ";
        // line 232
        echo $context["sf"]->macro_field(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 232, $this->source); })()), "password", array()), "password", "密码：", array("attrs" => array("placeholder" => "留空则不修改")));
        echo "
        ";
        // line 233
        echo $context["sf"]->macro_field(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 233, $this->source); })()), "mobile", array()), "text", "手机号：", array("attrs" => array("placeholder" => "请输入手机号")));
        echo "
        ";
        // line 234
        echo $context["sf"]->macro_field(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 234, $this->source); })()), "title", array()), "text", "职务：", array("attrs" => array("placeholder" => "请输入职务")));
        echo "

        ";
        // line 236
        echo $context["sf"]->macro_rest((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 236, $this->source); })()));
        echo "
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_system_administration_administrator_save"), "html", null, true);
        echo "\">
      </form>
    </div>
  </div>

  <input type=\"text\" name=\"user_name\" placeholder=\"搜索...\" autocomplete=\"off\" class=\"layui-input\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 247
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 248
        echo "  <script>
      layui.table.on('tool(table)', function (row) {
          var data = row.data;
          if (row.event === 'edit') {
              console.log(row.data);
              show_edit_dialog(row.data);
          } else if (row.event === 'del') {
              layer.confirm('确认要删除吗？', function (index) {
                  \$.post('";
        // line 256
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_administrators_delete");
        echo "',
                      {id: data.id, _csrf_token: '";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_system_administration_administrators_delete"), "html", null, true);
        echo "'},
                      function (data) {
                          if (!data.status) {
                              layer.alert(data.msg);
                              return;
                          }

                          reload_table();
                          layer.msg(data.msg, {time: 1500});
                      }, 'json'
                  );

                  layer.close(index);
              });
          }
      });

      function reload_table() {
          table.reload('table', {
              where: \$('#form').serializeJSON()
          });
      }

      function save_user(callback) {
          \$.post('";
        // line 281
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_administrator_save");
        echo "',
              \$('#edit-form').serialize(),
              function (data) {
                  if (!data.status) {
                      layer.alert(data.msg);
                      callback(false);
                      return;
                  }
                  callback(true);
                  reload_table();
                  layer.msg(data.msg, {time: 1500});
              }, 'json'
          );
      }

      function show_edit_dialog(data) {
          if (data) {
              layui.form.val(\"edit-form\", {
                  \"id\":  data.id
                  , \"user_name\":  data.user_name
                  , \"roles\":    data.roles
                  , \"name\":     data.name
                  , \"password\": ''
                  , \"mobile\":   data.mobile
                  , \"title\":    data.title
              });
          }

          layer.open({
              title:    data ? '编辑用户' : '新增用户',
              type:     1,
              area:     ['400px', '500px'],
              content:  \$('#edit-user'),
              closeBtn: false,
              btn:      ['保存', '取消'],
              yes:      function (index, layero) {
                  save_user(function (succeed) {
                      if (succeed) {
                          layer.close(index);
                          \$('#edit-user').toggle();
                      }
                  });
              },
              btn2:     function (index, layero) {
                  layer.close(index);
                  \$('#edit-user').toggle();
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
        return "Admin/SystemAdministration/SystemSetting/edit__supplier_platform.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 281,  370 => 257,  366 => 256,  356 => 248,  347 => 247,  329 => 237,  325 => 236,  320 => 234,  316 => 233,  312 => 232,  308 => 231,  304 => 230,  300 => 229,  288 => 219,  279 => 218,  60 => 7,  51 => 6,  41 => 1,  39 => 4,  37 => 2,  15 => 1,);
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
      <div class=\"layui-foldapse\">
        <div class=\"layui-folda-item\">
          <h2 class=\"layui-folda-title\"><i class=\"layui-icon layui-icon-triangle-d\"></i>个人通行证注册激活/平台账户自动开户</h2>
          <div class=\"layui-folda-content layui-folda-content-bg\">
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
                  <input type=\"radio\" name=\"d\" value=\"0\" title=\"激活通行证自动开户\" checked><br />
                  <input type=\"radio\" name=\"d\" value=\"1\" title=\"身份信息过审自动开户\"><br />
                  <input type=\"radio\" name=\"d\" value=\"2\" title=\"需完成身份信息审核后，额外申请开户并通过\">
                </div>
              </div>
              <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">代理商平台账户开户方式：</label>
                <div class=\"layui-input-block\">
                  <input type=\"radio\" name=\"e\" value=\"0\" title=\"激活通行证自动开户\"><br />
                  <input type=\"radio\" name=\"e\" value=\"1\" title=\"身份信息过审自动开户\" checked><br />
                  <input type=\"radio\" name=\"e\" value=\"2\" title=\"需完成身份信息审核后，额外申请开户并通过\">
                </div>
              </div>
              <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">供应商平台账户开户方式：</label>
                <div class=\"layui-input-block\">
                  <input type=\"radio\" name=\"f\" value=\"0\" title=\"激活通行证自动开户\"><br />
                  <input type=\"radio\" name=\"f\" value=\"1\" title=\"身份信息过审自动开户\"><br />
                  <input type=\"radio\" name=\"f\" value=\"2\" title=\"需完成身份信息审核后，额外申请开户并通过\" checked>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"layui-folda-item\">
          <h2 class=\"layui-folda-title\"><i class=\"layui-icon layui-icon-triangle-d\"></i>企业通行证注册激活/平台账户自动开户</h2>
          <div class=\"layui-folda-content layui-folda-content-bg\">
            <div class=\"layui-form\">
              <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">注册后：</label>
                <div class=\"layui-input-block\">
                  <input type=\"radio\" name=\"g\" value=\"0\" title=\"注册后完成邮箱验证，无需审核身份信息自动激活\" checked><br />
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
                  <input type=\"radio\" name=\"i\" value=\"0\" title=\"激活通行证自动开户\" checked><br />
                  <input type=\"radio\" name=\"i\" value=\"1\" title=\"身份信息过审自动开户\"><br />
                  <input type=\"radio\" name=\"i\" value=\"2\" title=\"需完成身份信息审核后，额外申请开户并通过\">
                </div>
              </div>
              <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">代理商平台账户开户方式：</label>
                <div class=\"layui-input-block\">
                  <input type=\"radio\" name=\"j\" value=\"0\" title=\"激活通行证自动开户\"><br />
                  <input type=\"radio\" name=\"j\" value=\"1\" title=\"身份信息过审自动开户\" checked><br />
                  <input type=\"radio\" name=\"j\" value=\"2\" title=\"需完成身份信息审核后，额外申请开户并通过\">
                </div>
              </div>
              <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">供应商平台账户开户方式：</label>
                <div class=\"layui-input-block\">
                  <input type=\"radio\" name=\"k\" value=\"0\" title=\"激活通行证自动开户\"><br />
                  <input type=\"radio\" name=\"k\" value=\"1\" title=\"身份信息过审自动开户\"><br />
                  <input type=\"radio\" name=\"k\" value=\"2\" title=\"需完成身份信息审核后，额外申请开户并通过\" checked>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"layui-folda-item\">
          <h2 class=\"layui-folda-title\"><i class=\"layui-icon layui-icon-triangle-d\"></i>账密错误导致通行证冻结</h2>
          <div class=\"layui-folda-content layui-folda-content-bg\">
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
        </div>
        <div class=\"layui-folda-item\">
          <h2 class=\"layui-folda-title\"><i class=\"layui-icon layui-icon-triangle-d\"></i> 代理商平台设置</h2>
          <div class=\"layui-folda-content layui-folda-content-bg\">
            <div class=\"layui-form\">
              <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">邀请员工等待确认时间：</label>
                <div class=\"layui-input-block\">
                  <div class=\"layui-inline\">
                    <input type=\"text\" placeholder=\"\" class=\"layui-input\">
                  </div>
                  小时
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"layui-folda-item\">
          <h2 class=\"layui-folda-title\"><i class=\"layui-icon layui-icon-triangle-d\"></i> 供应商平台设置</h2>
          <div class=\"layui-folda-content layui-folda-content-bg\">
            <div class=\"layui-form\">
              <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">提现手续费：</label>
                <div class=\"layui-input-block\">
                  <input type=\"radio\" name=\"l\" title=\"不收取手续费\" checked><br />
                  <input type=\"radio\" name=\"l\" title=\"按费率收取\">
                  <div class=\"layui-inline\">
                    <input type=\"text\" placeholder=\"\" class=\"layui-input\">
                  </div>
                  %<br />
                  <input type=\"radio\" name=\"l\" title=\"按费率收取\">
                  <div class=\"layui-inline\">
                    <input type=\"text\" placeholder=\"\" class=\"layui-input\">
                  </div>
                  元
                </div>
              </div>
              <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">每日最大申请提现次数：</label>
                <div class=\"layui-input-block\">
                  <div class=\"layui-inline\">
                    <input type=\"text\" placeholder=\"\" class=\"layui-input\">
                  </div>
                  次
                </div>
              </div>
              <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">单次可提现范围：</label>
                <div class=\"layui-input-block\">
                  <div class=\"layui-inline\">
                    <input type=\"text\" placeholder=\"\" class=\"layui-input\">
                  </div>
                  ~
                  <div class=\"layui-inline\">
                    <input type=\"text\" placeholder=\"\" class=\"layui-input\">
                  </div>
                  元
                </div>
              </div>
              <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">邀请员工等待确认时间：</label>
                <div class=\"layui-input-block\">
                  <div class=\"layui-inline\">
                    <input type=\"text\" placeholder=\"\" class=\"layui-input\">
                  </div>
                  小时
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"layui-form\">
        <div class=\"layui-form-item\">
          <div class=\"layui-input-block\" style=\"margin-left: 170px;\">
            <button class=\"layui-btn\">保存</button>
            <button class=\"layui-btn layui-btn-primary\">取消</button>
          </div>
        </div>
      </div>
    </div>
  </div>

{% endblock %}

{% block extra %}
  <div class=\"layui-card\" id=\"edit-user\" style=\"display: none;\">
    <div class=\"layui-card-body\">
      <form id=\"edit-form\" class=\"layui-form\" lay-filter=\"edit-form\">
        <div class=\"layui-form-item\">
          <label class=\"layui-form-label\"></label>
          <div class=\"layui-input-inline layui-inline-400\">
            带 * 号的为必填项
          </div>
        </div>

        {{ sf.field(form.roles,       'select',   '权限组：',     {'options': to_options(constant('App\\\\Admin\\\\Model\\\\AdminUser::ADMIN_ROLES'), \"全部\")}) }}
        {{ sf.field(form.user_name,   'text',     '用户名：',     {'attrs': {'placeholder': '请输入用户名'}}) }}
        {{ sf.field(form.name,        'text',     '名字：',      {'attrs': {'placeholder': '请输入名字'}}) }}
        {{ sf.field(form.password,    'password', '密码：',      {'attrs': {'placeholder': '留空则不修改'}}) }}
        {{ sf.field(form.mobile,      'text',     '手机号：',     {'attrs': {'placeholder': '请输入手机号'}}) }}
        {{ sf.field(form.title,       'text',     '职务：',      {'attrs': {'placeholder': '请输入职务'}}) }}

        {{ sf.rest(form) }}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('admin_system_administration_administrator_save') }}\">
      </form>
    </div>
  </div>

  <input type=\"text\" name=\"user_name\" placeholder=\"搜索...\" autocomplete=\"off\" class=\"layui-input\">

{% endblock %}


{% block js_end %}
  <script>
      layui.table.on('tool(table)', function (row) {
          var data = row.data;
          if (row.event === 'edit') {
              console.log(row.data);
              show_edit_dialog(row.data);
          } else if (row.event === 'del') {
              layer.confirm('确认要删除吗？', function (index) {
                  \$.post('{{ path('admin_system_administration_administrators_delete') }}',
                      {id: data.id, _csrf_token: '{{ csrf_token('admin_system_administration_administrators_delete') }}'},
                      function (data) {
                          if (!data.status) {
                              layer.alert(data.msg);
                              return;
                          }

                          reload_table();
                          layer.msg(data.msg, {time: 1500});
                      }, 'json'
                  );

                  layer.close(index);
              });
          }
      });

      function reload_table() {
          table.reload('table', {
              where: \$('#form').serializeJSON()
          });
      }

      function save_user(callback) {
          \$.post('{{ path('admin_system_administration_administrator_save') }}',
              \$('#edit-form').serialize(),
              function (data) {
                  if (!data.status) {
                      layer.alert(data.msg);
                      callback(false);
                      return;
                  }
                  callback(true);
                  reload_table();
                  layer.msg(data.msg, {time: 1500});
              }, 'json'
          );
      }

      function show_edit_dialog(data) {
          if (data) {
              layui.form.val(\"edit-form\", {
                  \"id\":  data.id
                  , \"user_name\":  data.user_name
                  , \"roles\":    data.roles
                  , \"name\":     data.name
                  , \"password\": ''
                  , \"mobile\":   data.mobile
                  , \"title\":    data.title
              });
          }

          layer.open({
              title:    data ? '编辑用户' : '新增用户',
              type:     1,
              area:     ['400px', '500px'],
              content:  \$('#edit-user'),
              closeBtn: false,
              btn:      ['保存', '取消'],
              yes:      function (index, layero) {
                  save_user(function (succeed) {
                      if (succeed) {
                          layer.close(index);
                          \$('#edit-user').toggle();
                      }
                  });
              },
              btn2:     function (index, layero) {
                  layer.close(index);
                  \$('#edit-user').toggle();
              }
          });
      }
  </script>
{% endblock %}
", "Admin/SystemAdministration/SystemSetting/edit__supplier_platform.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\SystemAdministration\\SystemSetting\\edit__supplier_platform.twig");
    }
}
