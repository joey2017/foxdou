<?php

/* Admin/SystemAdministration/AdministratorRole/index.twig */
class __TwigTemplate_b86a65db297c40809f4baff08c1ce700951503d39680d3677b3cfa5af9b8cfed extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/Admin/Common/layout.twig", "Admin/SystemAdministration/AdministratorRole/index.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/AdministratorRole/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/AdministratorRole/index.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers.html.twig", "Admin/SystemAdministration/AdministratorRole/index.twig", 2);
        // line 4
        $context["title"] = "权限组列表 - 系统设置";
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

      <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
        <h2>目前系统仅支持查看权限组列表，不支持增删操作</h2>
      </div>

      <div class=\"layui-card-body\">
        <table id=\"table\" class=\"layui-table\">
          <thead>
          <tr>
            <th>权限组</th>
            <th>说明</th>
          </tr>
          </thead>
          <tbody>
          ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new Twig_Error_Runtime('Variable "roles" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["role_id"] => $context["role_name"]) {
            // line 24
            echo "          <tr>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, $context["role_name"], "html", null, true);
            echo "</td>
            <td>-</td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['role_id'], $context['role_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "          </tbody>
        </table>
      </div>
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/SystemAdministration/AdministratorRole/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 29,  83 => 25,  80 => 24,  76 => 23,  58 => 7,  49 => 6,  39 => 1,  37 => 4,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ('/Admin/Common/layout.twig') %}
{% import ('/Common/simple_form_helpers.html.twig') as sf %}

{% set title = '权限组列表 - 系统设置' %}

{% block main_content %}
  <div class=\"layui-fluid\">
    <div class=\"layui-card\">

      <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
        <h2>目前系统仅支持查看权限组列表，不支持增删操作</h2>
      </div>

      <div class=\"layui-card-body\">
        <table id=\"table\" class=\"layui-table\">
          <thead>
          <tr>
            <th>权限组</th>
            <th>说明</th>
          </tr>
          </thead>
          <tbody>
          {% for role_id, role_name in roles %}
          <tr>
            <td>{{ role_name }}</td>
            <td>-</td>
          </tr>
          {% endfor %}
          </tbody>
        </table>
      </div>
    </div>
  </div>
{% endblock %}
", "Admin/SystemAdministration/AdministratorRole/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\SystemAdministration\\AdministratorRole\\index.twig");
    }
}
