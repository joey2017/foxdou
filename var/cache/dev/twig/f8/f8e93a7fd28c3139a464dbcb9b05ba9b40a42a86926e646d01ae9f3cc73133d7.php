<?php

/* Passport/IdentityManagement/_individualIdentityInfo.twig */
class __TwigTemplate_f1df825ddbfeb7af2548a89f2b90e538c595a6cf40eee09272a19c7fd91d27be extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/IdentityManagement/_individualIdentityInfo.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/IdentityManagement/_individualIdentityInfo.twig"));

        // line 1
        echo "<div class=\"m-wrapper\">
  <div class=\"title-block\">
    <h2 class=\"title-skin\">实名认证信息</h2>
  </div>
  <div class=\"m-single\">
    <ul class=\"info-skin\">
      <li>
        <div class=\"info-skin-left\">实名认证状态</div>
        <div class=\"info-skin-right\">
          <div class=\"info-skin-auxe\">
            ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 11, $this->source); })()), "real_name_status", array()), "html", null, true);
        echo " |
            ";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 12, $this->source); })()), "real_name_status", array()) != 1)) {
            // line 13
            echo "              <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("identity_management_verify");
            echo "\"><span class=\"\">提交实名认证</span></a>
            ";
        }
        // line 15
        echo "          </div>
        </div>
      </li>
      <li>
        <div class=\"info-skin-left\">账户性质</div>
        <div class=\"info-skin-right\">
          <div class=\"info-skin-inline\">
            <span class=\"info-skin-text\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 22, $this->source); })()), "type", array()), "html", null, true);
        echo "</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"info-skin-left\">真实姓名</div>
        <div class=\"info-skin-right\">
          <div class=\"info-skin-inline\">
            <span class=\"info-skin-text\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["realNameInfo"]) || array_key_exists("realNameInfo", $context) ? $context["realNameInfo"] : (function () { throw new Twig_Error_Runtime('Variable "realNameInfo" does not exist.', 30, $this->source); })()), "legal_person_name", array()), "html", null, true);
        echo "</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"info-skin-left\">身份证号码</div>
        <div class=\"info-skin-right\">
          <div class=\"info-skin-inline\">
            <span class=\"info-skin-text\">";
        // line 38
        echo $this->extensions['App\Common\Twig\AppExtension']->maskInfo(twig_get_attribute($this->env, $this->source, (isset($context["realNameInfo"]) || array_key_exists("realNameInfo", $context) ? $context["realNameInfo"] : (function () { throw new Twig_Error_Runtime('Variable "realNameInfo" does not exist.', 38, $this->source); })()), "legal_person_identity_card_no", array()), 2, 4, "▓", 12);
        echo "</span>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Passport/IdentityManagement/_individualIdentityInfo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 38,  73 => 30,  62 => 22,  53 => 15,  47 => 13,  45 => 12,  41 => 11,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"m-wrapper\">
  <div class=\"title-block\">
    <h2 class=\"title-skin\">实名认证信息</h2>
  </div>
  <div class=\"m-single\">
    <ul class=\"info-skin\">
      <li>
        <div class=\"info-skin-left\">实名认证状态</div>
        <div class=\"info-skin-right\">
          <div class=\"info-skin-auxe\">
            {{ user.real_name_status }} |
            {% if user.real_name_status != 1 %}
              <a href=\"{{ path('identity_management_verify') }}\"><span class=\"\">提交实名认证</span></a>
            {% endif %}
          </div>
        </div>
      </li>
      <li>
        <div class=\"info-skin-left\">账户性质</div>
        <div class=\"info-skin-right\">
          <div class=\"info-skin-inline\">
            <span class=\"info-skin-text\">{{ user.type }}</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"info-skin-left\">真实姓名</div>
        <div class=\"info-skin-right\">
          <div class=\"info-skin-inline\">
            <span class=\"info-skin-text\">{{ realNameInfo.legal_person_name }}</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"info-skin-left\">身份证号码</div>
        <div class=\"info-skin-right\">
          <div class=\"info-skin-inline\">
            <span class=\"info-skin-text\">{{ realNameInfo.legal_person_identity_card_no|mask(2, 4, '▓', 12) }}</span>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
", "Passport/IdentityManagement/_individualIdentityInfo.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\IdentityManagement\\_individualIdentityInfo.twig");
    }
}
