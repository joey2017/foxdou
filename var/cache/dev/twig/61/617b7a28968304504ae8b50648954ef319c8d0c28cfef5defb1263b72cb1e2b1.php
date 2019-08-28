<?php

/* /Supplier/Common/top_nav.twig */
class __TwigTemplate_e6ca31bb88dcd1812e45db1ba06a02f1f23ab28f197dc49d30a4ce00a017a053 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Supplier/Common/top_nav.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Supplier/Common/top_nav.twig"));

        // line 1
        $context["user"] = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "user", array());
        // line 2
        $context["current_group"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->source); })()), "request", array()), "get", array(0 => "group"), "method");
        // line 3
        echo "
";
        // line 4
        $context["menus"] = $this->extensions['App\Common\Twig\AppExtension']->getParams("supplier_menus");
        // line 5
        echo "
<div class=\"layui-card\" id=\"change-password-dialog\" style=\"display: none;\">
  <div class=\"layui-card-body\" style=\"padding-right: 50px;\">
    <form id=\"change-password-form\" class=\"layui-form\" lay-filter=\"edit-form\">
      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">旧密码：</label>
        <div class=\"layui-input-block\">
          <input type=\"password\" class=\"layui-input\" name=\"old_password\" autocomplete />
        </div>
        <div class=\"layui-form-mid layui-word-aux error\" id=\"tips_old_password\"></div>
      </div>
      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">新密码：</label>
        <div class=\"layui-input-block\">
          <input type=\"password\" class=\"layui-input\" name=\"new_password\" autocomplete/>
        </div>
        <div class=\"layui-form-mid layui-word-aux error\" id=\"tips_new_password\"></div>
      </div>
      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">新密码确认</label>
        <div class=\"layui-input-block\">
          <input type=\"password\" class=\"layui-input\" name=\"new_password_confirm\" autocomplete/>
        </div>
        <div class=\"layui-form-mid layui-word-aux error\" id=\"tips_new_password_confirm\"></div>
      </div>
      <input type=\"hidden\" name=\"_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_profile_change_password"), "html", null, true);
        echo "\">
    </form>
  </div>
</div>

<div class=\"foxdou-header\">
    <div class=\"foxdou-top\">
        <div class=\"foxdou-logo\"></div>
        <div class=\"foxdou-link\">
            <ul class=\"layui-nav layui-layout-left\">
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new Twig_Error_Runtime('Variable "menus" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["group_id"] => $context["group"]) {
            // line 41
            echo "                    ";
            $context["is_current_group"] = false;
            // line 42
            echo "                    <li class=\"layui-nav-item ";
            echo ((($context["group_id"] == (isset($context["current_group"]) || array_key_exists("current_group", $context) ? $context["current_group"] : (function () { throw new Twig_Error_Runtime('Variable "current_group" does not exist.', 42, $this->source); })()))) ? ("layui-this") : (""));
            echo "\" data-group-id=\"";
            echo twig_escape_filter($this->env, $context["group_id"], "html", null, true);
            echo "\" data-cur-group=\"";
            echo twig_escape_filter($this->env, (isset($context["current_group"]) || array_key_exists("current_group", $context) ? $context["current_group"] : (function () { throw new Twig_Error_Runtime('Variable "current_group" does not exist.', 42, $this->source); })()), "html", null, true);
            echo "\">
                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['App\Common\Twig\AppExtension']->getMenuPath($context["group"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", array()), "html", null, true);
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_id'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            </ul>
        </div>

        <ul class=\"layui-nav layui-layout-right foxdou-nav-user\">
            <li class=\"layui-nav-item\">
                <a href=\"javascript:;\" id=\"balance\" onclick=\"refresh_balance()\" title=\"点击刷新\">账户余额：<span>";
        // line 51
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "supplierAccount", array(), "any", false, true), "balance", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "supplierAccount", array(), "any", false, true), "balance", array()), 0)) : (0)), 2), "html", null, true);
        echo "</span>元</a>
            </li>
            <li class=\"layui-nav-item\">
                <a href=\"javascript:;\">
                    <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar_url", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar_url", array()), $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/common/img/default-avatar.jpg"))) : ($this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/common/img/default-avatar.jpg"))), "html", null, true);
        echo "\" class=\"layui-nav-img\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 55, $this->source); })()), "user_name", array()), "html", null, true);
        echo "
                    <span class=\"layui-nav-more\"></span></a>
                <dl class=\"layui-nav-child layui-anim layui-anim-upbit\">
                    <dd>
                        <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_dashboard_profile");
        echo "\">基本资料</a>
                    </dd>
                    <dd>
                        <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("passport_home_index");
        echo "\">安全设置</a>
                    </dd>
                    <dd>
                        <a href=\"javascript:show_edit_dialog();\">修改密码</a>
                    </dd>
                    <hr/>
                    <dd>
                        <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("logout");
        echo "\">退出</a>
                    </dd>
                </dl>
            </li>
        </ul>

    </div>
</div>

<script>
    function save_password(callback) {
        \$('#change-password-dialog .layui-word-aux').text('');
        \$.post('";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_profile_change_password");
        echo "',
            \$('#change-password-form').serialize(),
            function (data) {
                if (!data.status) {
                    if (data.errors) {
                        \$.each(data.errors, function (key, error) {
                            \$('#tips_' + key).text(error);
                        });
                    } else {
                        layer.alert(data.msg);
                    }

                    callback(false);
                    return;
                }
                callback(true);
                layer.msg(data.msg, {time: 1500});
            }, 'json'
        );
    }

    function show_edit_dialog() {
        layer.open({
            title:   '修改密码',
            type:    1,
            area:    ['500px', '320px'],
            content: \$('#change-password-dialog'),
            // closeBtn: true,
            btn:     ['修改', '取消'],
            yes:     function (index, layero) {
                save_password(function (succeed) {
                    if (succeed) {
                        layer.close(index);
                        \$('#change-password-dialog').toggle();
                    }
                });
            },
            btn2:    function (index, layero) {
                layer.close(index);
                \$('#change-password-dialog').toggle();
            },
            cancel:  function(index) {
                \$('#change-password-dialog').hide();
            }
        });
    }

    function refresh_balance() {
        \$.get('";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_user_current_balance");
        echo "',{},function (data) {
            \$('#balance').find('span').text(data.balance);
            layer.tips('刷新成功','#balance', {
                tips: [3, '#9ACD32'],
                time: 3000
            });
        });
    }

</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/Supplier/Common/top_nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 129,  159 => 81,  144 => 69,  134 => 62,  128 => 59,  119 => 55,  112 => 51,  105 => 46,  94 => 43,  85 => 42,  82 => 41,  78 => 40,  65 => 30,  38 => 5,  36 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set user = app.user %}
{% set current_group = app.request.get('group') %}

{% set menus = params(\"supplier_menus\") %}

<div class=\"layui-card\" id=\"change-password-dialog\" style=\"display: none;\">
  <div class=\"layui-card-body\" style=\"padding-right: 50px;\">
    <form id=\"change-password-form\" class=\"layui-form\" lay-filter=\"edit-form\">
      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">旧密码：</label>
        <div class=\"layui-input-block\">
          <input type=\"password\" class=\"layui-input\" name=\"old_password\" autocomplete />
        </div>
        <div class=\"layui-form-mid layui-word-aux error\" id=\"tips_old_password\"></div>
      </div>
      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">新密码：</label>
        <div class=\"layui-input-block\">
          <input type=\"password\" class=\"layui-input\" name=\"new_password\" autocomplete/>
        </div>
        <div class=\"layui-form-mid layui-word-aux error\" id=\"tips_new_password\"></div>
      </div>
      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">新密码确认</label>
        <div class=\"layui-input-block\">
          <input type=\"password\" class=\"layui-input\" name=\"new_password_confirm\" autocomplete/>
        </div>
        <div class=\"layui-form-mid layui-word-aux error\" id=\"tips_new_password_confirm\"></div>
      </div>
      <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('admin_profile_change_password') }}\">
    </form>
  </div>
</div>

<div class=\"foxdou-header\">
    <div class=\"foxdou-top\">
        <div class=\"foxdou-logo\"></div>
        <div class=\"foxdou-link\">
            <ul class=\"layui-nav layui-layout-left\">
                {% for group_id, group in menus %}
                    {% set is_current_group = false %}
                    <li class=\"layui-nav-item {{ group_id == current_group ? 'layui-this' : '' }}\" data-group-id=\"{{ group_id }}\" data-cur-group=\"{{ current_group }}\">
                        <a href=\"{{ menu_path(group) }}\">{{ group.name }}</a>
                    </li>
                {% endfor %}
            </ul>
        </div>

        <ul class=\"layui-nav layui-layout-right foxdou-nav-user\">
            <li class=\"layui-nav-item\">
                <a href=\"javascript:;\" id=\"balance\" onclick=\"refresh_balance()\" title=\"点击刷新\">账户余额：<span>{{ user.supplierAccount.balance|default(0)|number_format(2) }}</span>元</a>
            </li>
            <li class=\"layui-nav-item\">
                <a href=\"javascript:;\">
                    <img src=\"{{ user.avatar_url|default(asset('/assets/common/img/default-avatar.jpg')) }}\" class=\"layui-nav-img\">{{ user.user_name }}
                    <span class=\"layui-nav-more\"></span></a>
                <dl class=\"layui-nav-child layui-anim layui-anim-upbit\">
                    <dd>
                        <a href=\"{{ path('supplier_dashboard_profile') }}\">基本资料</a>
                    </dd>
                    <dd>
                        <a href=\"{{ url('passport_home_index') }}\">安全设置</a>
                    </dd>
                    <dd>
                        <a href=\"javascript:show_edit_dialog();\">修改密码</a>
                    </dd>
                    <hr/>
                    <dd>
                        <a href=\"{{ url('logout') }}\">退出</a>
                    </dd>
                </dl>
            </li>
        </ul>

    </div>
</div>

<script>
    function save_password(callback) {
        \$('#change-password-dialog .layui-word-aux').text('');
        \$.post('{{ path('admin_profile_change_password') }}',
            \$('#change-password-form').serialize(),
            function (data) {
                if (!data.status) {
                    if (data.errors) {
                        \$.each(data.errors, function (key, error) {
                            \$('#tips_' + key).text(error);
                        });
                    } else {
                        layer.alert(data.msg);
                    }

                    callback(false);
                    return;
                }
                callback(true);
                layer.msg(data.msg, {time: 1500});
            }, 'json'
        );
    }

    function show_edit_dialog() {
        layer.open({
            title:   '修改密码',
            type:    1,
            area:    ['500px', '320px'],
            content: \$('#change-password-dialog'),
            // closeBtn: true,
            btn:     ['修改', '取消'],
            yes:     function (index, layero) {
                save_password(function (succeed) {
                    if (succeed) {
                        layer.close(index);
                        \$('#change-password-dialog').toggle();
                    }
                });
            },
            btn2:    function (index, layero) {
                layer.close(index);
                \$('#change-password-dialog').toggle();
            },
            cancel:  function(index) {
                \$('#change-password-dialog').hide();
            }
        });
    }

    function refresh_balance() {
        \$.get('{{ path(\"supplier_user_current_balance\") }}',{},function (data) {
            \$('#balance').find('span').text(data.balance);
            layer.tips('刷新成功','#balance', {
                tips: [3, '#9ACD32'],
                time: 3000
            });
        });
    }

</script>", "/Supplier/Common/top_nav.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Supplier\\Common\\top_nav.twig");
    }
}
