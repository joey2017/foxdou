<?php

/* @SimpleForm/SimpleFormDemo/index.html.twig */
class __TwigTemplate_32ee128d02dc7ea6510fe62fcdf9b96e0b3d59a6f527613001152d7d58b603f0 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SimpleForm/SimpleFormDemo/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SimpleForm/SimpleFormDemo/index.html.twig"));

        // line 1
        $context["sf"] = $this->loadTemplate("LianzSimpleFormBundle::helpers.html.twig", "@SimpleForm/SimpleFormDemo/index.html.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <title>
        SimpleForm Demo
    </title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=8\"/>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
    <meta name=\"robots\" content=\"index,follow\"/>
    <link rel=\"shortcut icon\" href=\"favicon.png\" type=\"image/png\"/>
    ";
        // line 13
        echo "    ";
        // line 14
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->source); })()), "request", array()), "basepath", array()), "html", null, true);
        echo "/bundles/dreamheavenadmin/css/bootstrap.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->source); })()), "request", array()), "basepath", array()), "html", null, true);
        echo "/bundles/dreamheavenadmin/css/widget.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->source); })()), "request", array()), "basepath", array()), "html", null, true);
        echo "/bundles/dreamheavenadmin/css/validate.css\"/>

    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 18, $this->source); })()), "request", array()), "basepath", array()), "html", null, true);
        echo "/bundles/dreamheavenadmin/js/jquery.js\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->source); })()), "request", array()), "basepath", array()), "html", null, true);
        echo "/bundles/dreamheavenadmin/js/jquery.validate.js\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->source); })()), "request", array()), "basepath", array()), "html", null, true);
        echo "/bundles/dreamheavenadmin/js/jquery-ui-1.8.21.custom.min.js\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->source); })()), "request", array()), "basepath", array()), "html", null, true);
        echo "/bundles/dreamheavenadmin/js/jquery.ui.datepicker-zh-CN.js\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 22, $this->source); })()), "request", array()), "basepath", array()), "html", null, true);
        echo "/bundles/dreamheavenadmin/js/additional-methods.js\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 23, $this->source); })()), "request", array()), "basepath", array()), "html", null, true);
        echo "/bundles/dreamheavenadmin/js/jquery.form.js\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 24, $this->source); })()), "request", array()), "basepath", array()), "html", null, true);
        echo "/bundles/dreamheavenadmin/js/bootstrap.js\"></script>

    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->source); })()), "request", array()), "basepath", array()), "html", null, true);
        echo "/bundles/dreamheavenadmin/js/jquery.exts.js\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 27, $this->source); })()), "request", array()), "basepath", array()), "html", null, true);
        echo "/bundles/dreamheavenadmin/js/jquery.validate.messages.zh-cn.js\"></script>
</head>
<body>
  <header style=\"background-color: #000;color:#fff; width:100%; text-align:center;padding: 20px; border-bottom: solid 1px #eee;position: fixed;bottom: top;left: 0;\">
  <h1>SimpleForm Demo</h1>
  </header>
  <div class=\"container\" style=\"padding-top: 150px;\">
    <script>
      \$(document).ready(function(){
        common_options = {
            errorClass: 'error',
            errorPlacement: function(error, element) {
               if (element.attr(\"name\") == \"all_servers\")
                 \$(\"#servers_widget_container\").append(error);
               else
                 error.insertAfter(element);
             },
            highlight: function(element, errorClass, validClass) {
              \$(element).closest('.control-group').removeClass('success').addClass('error');
            },
            success: function(label) {
              \$(label).closest('.control-group').removeClass('error').addClass('success');
              \$(label).hide();
            }
        };

        options = {
            rules: ";
        // line 54
        echo $context["sf"]->macro_rules((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()));
        echo "
        };

        options = \$.extend({}, common_options, options);
        \$('#test_form').validate(options);
      });
    </script>

    <div class=\"row\">
      ";
        // line 63
        if ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", array(), "any", true, true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->source); })()), "_token", array()), "error", array()))) {
            // line 64
            echo "      <div class=\"span12\">
        <div class=\"row alert-message\">
          <div class=\"span12\">
            <div class=\"alert alert-error\">
                ";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "_token", array()), "error", array())), "html", null, true);
            echo "
              <button class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
          </div>
        </div>
      </div>
      ";
        }
        // line 75
        echo "
      <div class=\"span2\">
      </div>
      <div class=\"span10\">
        <form class=\"form-horizontal\" id=\"test_form\" method=\"POST\" action=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("simple_form_demo_flexible");
        echo "\">

          ";
        // line 82
        echo "          ";
        echo $context["sf"]->macro_field(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 82, $this->source); })()), "username", array()), "text", "用户名", true, array(), array("attrs" => array("placeholder" => "只接受字母数字、下划线和减号")));
        echo "
          ";
        // line 83
        echo $context["sf"]->macro_field(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->source); })()), "email", array()), "text", "电子邮件", true, array(), array("attrs" => array("placeholder" => "请输入电子邮件")));
        echo "
          ";
        // line 84
        echo $context["sf"]->macro_field(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 84, $this->source); })()), "password1", array()), "password", "密码", true, array(), array("attrs" => array("placeholder" => "密码最短为 6 个字符")));
        echo "
          ";
        // line 85
        echo $context["sf"]->macro_field(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 85, $this->source); })()), "password2", array()), "password", "确认密码", true, array(), array("attrs" => array("placeholder" => "请再次输入密码")));
        echo "
          ";
        // line 86
        echo $context["sf"]->macro_field(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 86, $this->source); })()), "nickname", array()), "text", "昵称", true, array(), array("attrs" => array("placeholder" => "昵称只能由字母组成")));
        echo "
          ";
        // line 87
        echo $context["sf"]->macro_field(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 87, $this->source); })()), "firstname", array()), "text", "姓氏", true, array(), array("attrs" => array("placeholder" => "姓氏只能由字母组成")));
        echo "
          ";
        // line 88
        echo $context["sf"]->macro_field(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->source); })()), "lastname", array()), "text", "名字", true, array(), array("attrs" => array("placeholder" => "名字只能由字母组成")));
        echo "
          ";
        // line 89
        echo $context["sf"]->macro_field(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 89, $this->source); })()), "intro", array()), "textarea", "自我简介", true, array(), array("attrs" => array("rows" => "3", "placeholder" => "请输入个人简介")));
        echo "

          <div class=\"control-group\">
            <div class=\"controls\">
              ";
        // line 93
        echo $context["sf"]->macro_rest((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->source); })()));
        echo "
              ";
        // line 94
        echo $context["sf"]->macro_submit("添加白名单", array("id" => "btn_submit", "class" => "btn btn-primary confirm_required"));
        echo "
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>

  <footer style=\"width:100%; text-align:center;border-top: solid 1px #eee;padding-top: 10px;margin-top: 20px;position: fixed;bottom: 0;left: 0;\">
      ";
        // line 104
        $context["year"] = twig_date_format_filter($this->env, "now", "Y");
        // line 105
        echo "      <p>&copy;";
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new Twig_Error_Runtime('Variable "year" does not exist.', 105, $this->source); })()), "html", null, true);
        echo " SimpleFormBundle，保留所有权利</p>
  </footer>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SimpleForm/SimpleFormDemo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 105,  216 => 104,  203 => 94,  199 => 93,  192 => 89,  188 => 88,  184 => 87,  180 => 86,  176 => 85,  172 => 84,  168 => 83,  163 => 82,  158 => 79,  152 => 75,  142 => 68,  136 => 64,  134 => 63,  122 => 54,  92 => 27,  88 => 26,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  54 => 16,  50 => 15,  45 => 14,  43 => 13,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import ('LianzSimpleFormBundle::helpers.html.twig') as sf %}
<!DOCTYPE html>
<html>
<head>
    <title>
        SimpleForm Demo
    </title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=8\"/>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
    <meta name=\"robots\" content=\"index,follow\"/>
    <link rel=\"shortcut icon\" href=\"favicon.png\" type=\"image/png\"/>
    {#{% stylesheets 'bundles/dreamheavenadmin/css/*' filter='cssrewrite' %}#}
    {#{% endstylesheets %}#}
    <link rel=\"stylesheet\" href=\"{{ app.request.basepath }}/bundles/dreamheavenadmin/css/bootstrap.css\"/>
    <link rel=\"stylesheet\" href=\"{{ app.request.basepath }}/bundles/dreamheavenadmin/css/widget.css\"/>
    <link rel=\"stylesheet\" href=\"{{ app.request.basepath }}/bundles/dreamheavenadmin/css/validate.css\"/>

    <script src=\"{{ app.request.basepath }}/bundles/dreamheavenadmin/js/jquery.js\"></script>
    <script src=\"{{ app.request.basepath }}/bundles/dreamheavenadmin/js/jquery.validate.js\"></script>
    <script src=\"{{ app.request.basepath }}/bundles/dreamheavenadmin/js/jquery-ui-1.8.21.custom.min.js\"></script>
    <script src=\"{{ app.request.basepath }}/bundles/dreamheavenadmin/js/jquery.ui.datepicker-zh-CN.js\"></script>
    <script src=\"{{ app.request.basepath }}/bundles/dreamheavenadmin/js/additional-methods.js\"></script>
    <script src=\"{{ app.request.basepath }}/bundles/dreamheavenadmin/js/jquery.form.js\"></script>
    <script src=\"{{ app.request.basepath }}/bundles/dreamheavenadmin/js/bootstrap.js\"></script>

    <script src=\"{{ app.request.basepath }}/bundles/dreamheavenadmin/js/jquery.exts.js\"></script>
    <script src=\"{{ app.request.basepath }}/bundles/dreamheavenadmin/js/jquery.validate.messages.zh-cn.js\"></script>
</head>
<body>
  <header style=\"background-color: #000;color:#fff; width:100%; text-align:center;padding: 20px; border-bottom: solid 1px #eee;position: fixed;bottom: top;left: 0;\">
  <h1>SimpleForm Demo</h1>
  </header>
  <div class=\"container\" style=\"padding-top: 150px;\">
    <script>
      \$(document).ready(function(){
        common_options = {
            errorClass: 'error',
            errorPlacement: function(error, element) {
               if (element.attr(\"name\") == \"all_servers\")
                 \$(\"#servers_widget_container\").append(error);
               else
                 error.insertAfter(element);
             },
            highlight: function(element, errorClass, validClass) {
              \$(element).closest('.control-group').removeClass('success').addClass('error');
            },
            success: function(label) {
              \$(label).closest('.control-group').removeClass('error').addClass('success');
              \$(label).hide();
            }
        };

        options = {
            rules: {{ sf.rules(form) }}
        };

        options = \$.extend({}, common_options, options);
        \$('#test_form').validate(options);
      });
    </script>

    <div class=\"row\">
      {% if form._token is defined and form._token.error %}
      <div class=\"span12\">
        <div class=\"row alert-message\">
          <div class=\"span12\">
            <div class=\"alert alert-error\">
                {{ form._token.error|trans }}
              <button class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"span2\">
      </div>
      <div class=\"span10\">
        <form class=\"form-horizontal\" id=\"test_form\" method=\"POST\" action=\"{{path('simple_form_demo_flexible')}}\">

          {# field(field, type, label_title, translate=false, label_attrs={}, widget_settings={}, error_attrs={}, controls_attrs={}) %} #}
          {{ sf.field(form.username,  'text',     '用户名',   true, {}, {'attrs': {'placeholder': '只接受字母数字、下划线和减号'}}) }}
          {{ sf.field(form.email,     'text',     '电子邮件', true, {}, {'attrs': {'placeholder': '请输入电子邮件'} }) }}
          {{ sf.field(form.password1, 'password', '密码',     true, {}, {'attrs': {'placeholder': '密码最短为 6 个字符'} }) }}
          {{ sf.field(form.password2, 'password', '确认密码', true, {}, {'attrs': {'placeholder': '请再次输入密码'} }) }}
          {{ sf.field(form.nickname,  'text',     '昵称',     true, {}, {'attrs': {'placeholder': '昵称只能由字母组成'} }) }}
          {{ sf.field(form.firstname, 'text',     '姓氏',     true, {}, {'attrs': {'placeholder': '姓氏只能由字母组成'} }) }}
          {{ sf.field(form.lastname,  'text',     '名字',     true, {}, {'attrs': {'placeholder': '名字只能由字母组成'} }) }}
          {{ sf.field(form.intro,     'textarea', '自我简介', true, {}, {'attrs': {'rows': '3', 'placeholder': '请输入个人简介'} }) }}

          <div class=\"control-group\">
            <div class=\"controls\">
              {{ sf.rest(form) }}
              {{ sf.submit('添加白名单', {'id': 'btn_submit', 'class': 'btn btn-primary confirm_required'}) }}
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>

  <footer style=\"width:100%; text-align:center;border-top: solid 1px #eee;padding-top: 10px;margin-top: 20px;position: fixed;bottom: 0;left: 0;\">
      {% set year = \"now\"|date('Y') %}
      <p>&copy;{{ year }} SimpleFormBundle，保留所有权利</p>
  </footer>
</body>
</html>
", "@SimpleForm/SimpleFormDemo/index.html.twig", "D:\\phpStudy\\WWW\\foxdou\\vendor\\symfu\\simple-form-bundle\\src\\Resources\\views\\SimpleFormDemo\\index.html.twig");
    }
}
