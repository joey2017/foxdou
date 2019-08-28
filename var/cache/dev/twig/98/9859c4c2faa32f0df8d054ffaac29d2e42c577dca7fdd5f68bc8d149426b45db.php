<?php

/* Passport/IdentityManagement/_businessIdentityInfo.twig */
class __TwigTemplate_2eaeaf7cf960fa2dc4a2b740ce698a15d57d671e7ac4d19e6c63d3f76bb43666 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/IdentityManagement/_businessIdentityInfo.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Passport/IdentityManagement/_businessIdentityInfo.twig"));

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
        echo "
          </div>
        </div>
      </li>
      <li>
        <div class=\"info-skin-left\">账户性质</div>
        <div class=\"info-skin-right\">
          <div class=\"info-skin-inline\">
            <span class=\"info-skin-text\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 19, $this->source); })()), "type", array()), "html", null, true);
        echo "</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"info-skin-left\">真实姓名</div>
        <div class=\"info-skin-right\">
          <div class=\"info-skin-inline\">
            <span class=\"info-skin-text\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["realNameInfo"]) || array_key_exists("realNameInfo", $context) ? $context["realNameInfo"] : (function () { throw new Twig_Error_Runtime('Variable "realNameInfo" does not exist.', 27, $this->source); })()), "business_name", array()), "html", null, true);
        echo "</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"info-skin-left\">身份证号码</div>
        <div class=\"info-skin-right\">
          <div class=\"info-skin-inline\">
            <span class=\"info-skin-text\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["realNameInfo"]) || array_key_exists("realNameInfo", $context) ? $context["realNameInfo"] : (function () { throw new Twig_Error_Runtime('Variable "realNameInfo" does not exist.', 35, $this->source); })()), "legal_person_identity_card_no", array()), "html", null, true);
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
        return "Passport/IdentityManagement/_businessIdentityInfo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 35,  63 => 27,  52 => 19,  41 => 11,  29 => 1,);
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
            {{ user.real_name_status }}
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
            <span class=\"info-skin-text\">{{ realNameInfo.business_name }}</span>
          </div>
        </div>
      </li>
      <li>
        <div class=\"info-skin-left\">身份证号码</div>
        <div class=\"info-skin-right\">
          <div class=\"info-skin-inline\">
            <span class=\"info-skin-text\">{{ realNameInfo.legal_person_identity_card_no }}</span>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
", "Passport/IdentityManagement/_businessIdentityInfo.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Passport\\IdentityManagement\\_businessIdentityInfo.twig");
    }
}
