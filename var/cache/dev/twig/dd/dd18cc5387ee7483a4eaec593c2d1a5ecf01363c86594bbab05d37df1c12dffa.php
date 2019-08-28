<?php

/* Supplier/User/_form_shop_info.twig */
class __TwigTemplate_84612d6d0011123f9d9ca8212ad6f57226dc908d62488e712606554c4d7cf070 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Supplier/User/_form_shop_info.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Supplier/User/_form_shop_info.twig"));

        // line 1
        echo "<div class=\"m-wrapper\">
<div class=\"title-block\">
    <h2 class=\"title-skin\">店铺信息</h2>
  </div>
  <div class=\"m-single\">
    <ul class=\"info-skin\">
      <li>
        <div class=\"info-skin-left\">店铺名称</div>
        <div class=\"info-skin-right\">
          <div class=\"info-skin-inline\" style=\"width: 250px;\">
            <input type=\"text\" name=\"\" id=\"shop_name\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "resellerAccount", array(), "any", false, true), "shop_name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "resellerAccount", array(), "any", false, true), "shop_name", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"店铺名称\" class=\"layui-input f-fnsna\" />
          </div>
        </div>
      </li>
      <li>
        <div class=\"info-skin-left\">店铺地址</div>
        <div class=\"info-skin-right\">
          <div class=\"info-skin-inline\" style=\"width: 600px;\">
            <input type=\"text\" name=\"\" id=\"shop_address\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "resellerAccount", array(), "any", false, true), "shop_address", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "resellerAccount", array(), "any", false, true), "shop_address", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"请输入店铺地址\" class=\"layui-input f-fnsna\" />
          </div>
        </div>
      </li>
    </ul>
  </div>

  <div style=\"margin: 30px 0 0 150px;\">
    <button class=\"layui-btn f-fnsna\" id=\"btn-save-shop-info\">保 存</button>
  </div>
</div>
 <script type=\"text/javascript\">
     layui.use(['layer'], function() {
         var layer = layui.layer;

         \$('#btn-save-shop-info').click(function () {
             \$.ajax('";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_user_shop_info_update");
        echo "', {
                 type:      'post'
                 , data:    {
                     shop_name:       \$('#shop_name').val()
                     , shop_address:  \$('#shop_address').val()
                     , '_token': '";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("reseller_user_shop_info_update"), "html", null, true);
        echo "'
                 }
                 , success: function (data) {
                     layer.msg(data.msg);
                 }
                 , error:   function () {
                     layer.msg('网络或系统异常，请稍候再试')
                 }

             });
         });
     });
 </script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Supplier/User/_form_shop_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 40,  71 => 35,  52 => 19,  41 => 11,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"m-wrapper\">
<div class=\"title-block\">
    <h2 class=\"title-skin\">店铺信息</h2>
  </div>
  <div class=\"m-single\">
    <ul class=\"info-skin\">
      <li>
        <div class=\"info-skin-left\">店铺名称</div>
        <div class=\"info-skin-right\">
          <div class=\"info-skin-inline\" style=\"width: 250px;\">
            <input type=\"text\" name=\"\" id=\"shop_name\" value=\"{{ user.resellerAccount.shop_name|default(\"\") }}\" placeholder=\"店铺名称\" class=\"layui-input f-fnsna\" />
          </div>
        </div>
      </li>
      <li>
        <div class=\"info-skin-left\">店铺地址</div>
        <div class=\"info-skin-right\">
          <div class=\"info-skin-inline\" style=\"width: 600px;\">
            <input type=\"text\" name=\"\" id=\"shop_address\" value=\"{{ user.resellerAccount.shop_address|default(\"\")}}\" placeholder=\"请输入店铺地址\" class=\"layui-input f-fnsna\" />
          </div>
        </div>
      </li>
    </ul>
  </div>

  <div style=\"margin: 30px 0 0 150px;\">
    <button class=\"layui-btn f-fnsna\" id=\"btn-save-shop-info\">保 存</button>
  </div>
</div>
 <script type=\"text/javascript\">
     layui.use(['layer'], function() {
         var layer = layui.layer;

         \$('#btn-save-shop-info').click(function () {
             \$.ajax('{{ path('reseller_user_shop_info_update') }}', {
                 type:      'post'
                 , data:    {
                     shop_name:       \$('#shop_name').val()
                     , shop_address:  \$('#shop_address').val()
                     , '_token': '{{ csrf_token(\"reseller_user_shop_info_update\") }}'
                 }
                 , success: function (data) {
                     layer.msg(data.msg);
                 }
                 , error:   function () {
                     layer.msg('网络或系统异常，请稍候再试')
                 }

             });
         });
     });
 </script>", "Supplier/User/_form_shop_info.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Supplier\\User\\_form_shop_info.twig");
    }
}
