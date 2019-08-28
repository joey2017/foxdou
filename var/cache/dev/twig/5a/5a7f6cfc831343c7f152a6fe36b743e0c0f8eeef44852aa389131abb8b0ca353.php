<?php

/* Admin/Common/top_nav.twig */
class __TwigTemplate_dea155ebd554b9fc5ea16dd5d98b5240484df8880674fa5504601b5f084546fc extends Twig_Template
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
<ul class=\"layui-nav layui-layout-left\">
  <li class=\"layui-nav-item layadmin-flexible\">
    <a href=\"javascript:;\" title=\"侧栏伸缩\">
      <i class=\"layui-icon layui-icon-shrink-right\"></i>
      <i class=\"layui-icon layui-icon-spread-left\"></i>
    </a>
  </li>
  ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admin_menus"]) || array_key_exists("admin_menus", $context) ? $context["admin_menus"] : (function () { throw new Twig_Error_Runtime('Variable "admin_menus" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["group_id"] => $context["group"]) {
            // line 14
            echo "    ";
            $context["is_current_group"] = false;
            // line 15
            echo "    <li class=\"layui-nav-item ";
            echo ((($context["group_id"] == (isset($context["current_group"]) || array_key_exists("current_group", $context) ? $context["current_group"] : (function () { throw new Twig_Error_Runtime('Variable "current_group" does not exist.', 15, $this->source); })()))) ? ("layui-this") : (""));
            echo "\">
      <a href=\"";
            // line 16
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
        // line 19
        echo "</ul>
<ul class=\"layui-nav layui-layout-right\">
  <li class=\"layui-nav-item\">
    <div class=\"layui-form layui-header-switch\">
      <input type=\"checkbox\" name=\"\" lay-skin=\"switch\" lay-text=\"开启语音|关闭语音\" checked>
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
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 33, $this->source); })()), "user_name", array()), "html", null, true);
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
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_logout");
        echo "\">退出</a>
      </dd>
    </dl>
  </li>
</ul>

<script>
    function save_password(callback) {
        \$('#change-password-dialog .layui-word-aux').text('');
        \$.post('";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_profile_change_password");
        echo "',
            \$('#change-password-form').serialize(),
            function (data) {
                if (!data.status) {
                    if(data.errors) {
                        \$.each(data.errors, function (key, error) {
                            \$('#tips_' + key).text(error)
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
            title:    '修改密码',
            type:     1,
            area:     ['500px', '320px'],
            content:  \$('#change-password-dialog'),
            // closeBtn: true,
            btn:      ['修改', '取消'],
            yes:      function (index, layero) {
                save_password(function (succeed) {
                    if (succeed) {
                        layer.close(index);
                        \$('#change-password-dialog').toggle();
                    }
                });
            },
            btn2:     function (index, layero) {
                layer.close(index);
                \$('#change-password-dialog').toggle();
            }
        });
    }

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
        return array (  114 => 54,  102 => 45,  87 => 33,  71 => 19,  60 => 16,  55 => 15,  52 => 14,  48 => 13,  38 => 5,  36 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set user = app.user %}
{% set current_group = app.request.get('group') %}

{% set admin_menus = params(\"admin_menus\") %}

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
      <input type=\"checkbox\" name=\"\" lay-skin=\"switch\" lay-text=\"开启语音|关闭语音\" checked>
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

<script>
    function save_password(callback) {
        \$('#change-password-dialog .layui-word-aux').text('');
        \$.post('{{ path('admin_profile_change_password') }}',
            \$('#change-password-form').serialize(),
            function (data) {
                if (!data.status) {
                    if(data.errors) {
                        \$.each(data.errors, function (key, error) {
                            \$('#tips_' + key).text(error)
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
            title:    '修改密码',
            type:     1,
            area:     ['500px', '320px'],
            content:  \$('#change-password-dialog'),
            // closeBtn: true,
            btn:      ['修改', '取消'],
            yes:      function (index, layero) {
                save_password(function (succeed) {
                    if (succeed) {
                        layer.close(index);
                        \$('#change-password-dialog').toggle();
                    }
                });
            },
            btn2:     function (index, layero) {
                layer.close(index);
                \$('#change-password-dialog').toggle();
            }
        });
    }

</script>", "Admin/Common/top_nav.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\Common\\top_nav.twig");
    }
}
