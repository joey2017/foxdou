<?php

/* Admin/Common/top_nav.twig */
class __TwigTemplate_c23c4701c15637b9b4360579473b622b2aa21f143eca07d96d74e7b7c612e9c8 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Common/top_nav.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Common/top_nav.twig"));

        // line 1
        $context["user"] = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "user", array());
        // line 2
        $context["current_group"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->source); })()), "request", array()), "get", array(0 => "group"), "method");
        // line 3
        echo "
";
        // line 4
        $context["admin_menus"] = $this->extensions['App\Common\Twig\AppExtension']->getParams("admin_menus");
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

<div class=\"layui-header\">
  <ul class=\"layui-nav layui-layout-left\">
    <li class=\"layui-nav-item layadmin-flexible\">
      <a href=\"javascript:;\" title=\"侧栏伸缩\">
        <i class=\"layui-icon layui-icon-shrink-right\"></i>
        <i class=\"layui-icon layui-icon-spread-left\"></i>
      </a>
    </li>
    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admin_menus"]) || array_key_exists("admin_menus", $context) ? $context["admin_menus"] : (function () { throw new Twig_Error_Runtime('Variable "admin_menus" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["group_id"] => $context["group"]) {
            // line 44
            echo "      ";
            $context["is_current_group"] = false;
            // line 45
            echo "      <li class=\"layui-nav-item ";
            echo ((($context["group_id"] == (isset($context["current_group"]) || array_key_exists("current_group", $context) ? $context["current_group"] : (function () { throw new Twig_Error_Runtime('Variable "current_group" does not exist.', 45, $this->source); })()))) ? ("layui-this") : (""));
            echo "\">
        <a href=\"";
            // line 46
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
        // line 49
        echo "  </ul>
  <ul class=\"layui-nav layui-layout-right\">
    <li class=\"layui-nav-item\">
      <div class=\"layui-form layui-header-switch\">
        <input type=\"checkbox\" name=\"\" lay-skin=\"switch\" lay-filter=\"switchVoice\" lay-text=\"开启语音|关闭语音\" ";
        // line 53
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 53, $this->source); })()), "session", array()), "get", array(0 => "admin_speek_notice"), "method") == 1)) {
            echo "checked";
        }
        echo ">
      </div>
    </li>
    <li class=\"layui-nav-item\">
      <a href=\"javascript:;\" title=\"通知\">
        <i class=\"layui-icon layui-icon-notice\"></i>
      </a>
    </li>
    <li class=\"layui-nav-item layadmin-nav-item\">
      <a href=\"javascript:;\">
        <cite>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 63, $this->source); })()), "user_name", array()), "html", null, true);
        echo "</cite>
        <span class=\"layui-nav-more\"></span>
      </a>
      <dl class=\"layadmin-nav-child\">
        <dd>
          <a href=\"javascript:;\">基本资料</a>
        </dd>
        <dd>
          <a href=\"javascript:show_edit_dialog();\">修改密码</a>
        </dd>
        <hr/>
        <dd style=\"text-align: center;\">
          <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_logout");
        echo "\">退出</a>
        </dd>
      </dl>
    </li>
  </ul>
</div>
<script>
    function save_password(callback) {
        \$('#change-password-dialog .layui-word-aux').text('');
        \$.post('";
        // line 84
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
            }
        });
    }

    function get_notify_message() {
        var success = function (data) {
            if(data.status){
                if(data.voice * 1 == 1){
                    speek_notify(data.msg,1);
                }
            }
        }
        nxwd.ajaxRequest('";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_notify_get_orders_total");
        echo "','POST',{t:Math.random()},'json',success);
    }
    ";
        // line 138
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 138, $this->source); })()), "session", array()), "get", array(0 => "admin_speek_notice"), "method") == 1)) {
            // line 139
            echo "        var timer = setInterval(get_notify_message,100000);
    ";
        }
        // line 141
        echo "
    function speek_notify(msg,use_baidu){
        use_baidu = use_baidu || false;

        if(use_baidu){
            var url = \"https://fanyi.baidu.com/gettts?lan=zh&text=\"+encodeURI(msg)+\"&spd=5&source=web\"; // baidu
        }
        var n = new Audio(url);
        n.src = url;
        n.play();
    }

    \$(function(){
        form.on('switch(switchVoice)', function(data){
            var status = data.elem.checked ? 1 : 0;

            var success = function (data) {
                if (data.status) {
                    nxwd.showMsg(data.msg,'success');
                } else {
                    nxwd.showMsg(data.msg,'danger');
                }
                if (status == 1) {
                    timer = setInterval(get_notify_message,100000);
                } else {
                    clearInterval(timer);
                }
            }
            nxwd.ajaxRequest('";
        // line 169
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_notify_switch_voice");
        echo "','POST',{status:status},'json',success);
        });
    });

</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Common/top_nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 169,  218 => 141,  214 => 139,  212 => 138,  207 => 136,  152 => 84,  140 => 75,  125 => 63,  110 => 53,  104 => 49,  93 => 46,  88 => 45,  85 => 44,  81 => 43,  65 => 30,  38 => 5,  36 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set user = app.user %}
{% set current_group = app.request.get('group') %}

{% set admin_menus = params(\"admin_menus\") %}

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

<div class=\"layui-header\">
  <ul class=\"layui-nav layui-layout-left\">
    <li class=\"layui-nav-item layadmin-flexible\">
      <a href=\"javascript:;\" title=\"侧栏伸缩\">
        <i class=\"layui-icon layui-icon-shrink-right\"></i>
        <i class=\"layui-icon layui-icon-spread-left\"></i>
      </a>
    </li>
    {% for group_id, group in admin_menus %}
      {% set is_current_group = false %}
      <li class=\"layui-nav-item {{ group_id == current_group ? 'layui-this' : '' }}\">
        <a href=\"{{ menu_path(group) }}\">{{ group.name }}</a>
      </li>
    {% endfor %}
  </ul>
  <ul class=\"layui-nav layui-layout-right\">
    <li class=\"layui-nav-item\">
      <div class=\"layui-form layui-header-switch\">
        <input type=\"checkbox\" name=\"\" lay-skin=\"switch\" lay-filter=\"switchVoice\" lay-text=\"开启语音|关闭语音\" {% if app.session.get('admin_speek_notice') == 1 %}checked{% endif %}>
      </div>
    </li>
    <li class=\"layui-nav-item\">
      <a href=\"javascript:;\" title=\"通知\">
        <i class=\"layui-icon layui-icon-notice\"></i>
      </a>
    </li>
    <li class=\"layui-nav-item layadmin-nav-item\">
      <a href=\"javascript:;\">
        <cite>{{ user.user_name }}</cite>
        <span class=\"layui-nav-more\"></span>
      </a>
      <dl class=\"layadmin-nav-child\">
        <dd>
          <a href=\"javascript:;\">基本资料</a>
        </dd>
        <dd>
          <a href=\"javascript:show_edit_dialog();\">修改密码</a>
        </dd>
        <hr/>
        <dd style=\"text-align: center;\">
          <a href=\"{{ path('admin_logout') }}\">退出</a>
        </dd>
      </dl>
    </li>
  </ul>
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
            }
        });
    }

    function get_notify_message() {
        var success = function (data) {
            if(data.status){
                if(data.voice * 1 == 1){
                    speek_notify(data.msg,1);
                }
            }
        }
        nxwd.ajaxRequest('{{ path(\"admin_notify_get_orders_total\") }}','POST',{t:Math.random()},'json',success);
    }
    {% if app.session.get('admin_speek_notice') == 1 %}
        var timer = setInterval(get_notify_message,100000);
    {% endif %}

    function speek_notify(msg,use_baidu){
        use_baidu = use_baidu || false;

        if(use_baidu){
            var url = \"https://fanyi.baidu.com/gettts?lan=zh&text=\"+encodeURI(msg)+\"&spd=5&source=web\"; // baidu
        }
        var n = new Audio(url);
        n.src = url;
        n.play();
    }

    \$(function(){
        form.on('switch(switchVoice)', function(data){
            var status = data.elem.checked ? 1 : 0;

            var success = function (data) {
                if (data.status) {
                    nxwd.showMsg(data.msg,'success');
                } else {
                    nxwd.showMsg(data.msg,'danger');
                }
                if (status == 1) {
                    timer = setInterval(get_notify_message,100000);
                } else {
                    clearInterval(timer);
                }
            }
            nxwd.ajaxRequest('{{ path(\"admin_notify_switch_voice\") }}','POST',{status:status},'json',success);
        });
    });

</script>", "Admin/Common/top_nav.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\Common\\top_nav.twig");
    }
}
