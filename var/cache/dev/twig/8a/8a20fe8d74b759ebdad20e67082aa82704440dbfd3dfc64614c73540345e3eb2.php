<?php

/* /Supplier/Finance/add_withdraw_js.twig */
class __TwigTemplate_e0d85fc4b0580ba0e0eb4e29bcf9d630aa8b9aabf05ae7f4c7eb2cfc5faf1ef7 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Supplier/Finance/add_withdraw_js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Supplier/Finance/add_withdraw_js.twig"));

        // line 1
        echo "<script>

    form.render();

    \$(document).on('click', function (e) {
        var target = \$(e.target);
        if (target.is('.submit')) {
            var account_id   = \$('#account_id').val();
            var get_cash     = \$('#get_cash').val();
            var re_get_cash  = \$('#re_get_cash').val();
            if (account_id === '') {
                nxwd.showMsg('请选择提现账户');
                return false;
            }
            if (get_cash === '') {
                nxwd.showMsg('请输入提现金额');
                return false;
            }
            if (re_get_cash === '') {
                nxwd.showMsg('请输入确认提现金额');
                return false;
            }
            if (get_cash !== re_get_cash) {
                nxwd.showMsg('两次输入提现金额不一致');
                return false;
            }
            if (get_cash > '";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new Twig_Error_Runtime('Variable "supplier" does not exist.', 27, $this->source); })()), "balance", array()), "html", null, true);
        echo "') {
                nxwd.showMsg('提现金额不能大于可用余额');
                return false;
            }
            \$(\"form:first\").submit();
        }
    });

    \$('#get_cash').blur(function(){
        var value = \$(this).val();
        \$('#actual_cash').val(value);
        if (isNaN(value)) {
            nxwd.showMsg('提现金额值类型错误');
            return false;
        }
        var loading = null;
        var before = function(){
            loading = layer.load();
        }
        var error = function(){
            layer.close(loading);
            nxwd.showMsg('服务器未响应，请稍后重试','danger');
        }
        var success = function(data){
            layer.close(loading);
            if (data.status) {
                \$('#shouxu_cash').val(data.data);
            } else {
                nxwd.showMsg(data.msg,'danger');
            }
        }
        nxwd.ajaxRequest('";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier_finance_get_withdraw_fee");
        echo "','POST',{widthdraw:value},'json',success,before,error);
    })

</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/Supplier/Finance/add_withdraw_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 58,  57 => 27,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>

    form.render();

    \$(document).on('click', function (e) {
        var target = \$(e.target);
        if (target.is('.submit')) {
            var account_id   = \$('#account_id').val();
            var get_cash     = \$('#get_cash').val();
            var re_get_cash  = \$('#re_get_cash').val();
            if (account_id === '') {
                nxwd.showMsg('请选择提现账户');
                return false;
            }
            if (get_cash === '') {
                nxwd.showMsg('请输入提现金额');
                return false;
            }
            if (re_get_cash === '') {
                nxwd.showMsg('请输入确认提现金额');
                return false;
            }
            if (get_cash !== re_get_cash) {
                nxwd.showMsg('两次输入提现金额不一致');
                return false;
            }
            if (get_cash > '{{ supplier.balance }}') {
                nxwd.showMsg('提现金额不能大于可用余额');
                return false;
            }
            \$(\"form:first\").submit();
        }
    });

    \$('#get_cash').blur(function(){
        var value = \$(this).val();
        \$('#actual_cash').val(value);
        if (isNaN(value)) {
            nxwd.showMsg('提现金额值类型错误');
            return false;
        }
        var loading = null;
        var before = function(){
            loading = layer.load();
        }
        var error = function(){
            layer.close(loading);
            nxwd.showMsg('服务器未响应，请稍后重试','danger');
        }
        var success = function(data){
            layer.close(loading);
            if (data.status) {
                \$('#shouxu_cash').val(data.data);
            } else {
                nxwd.showMsg(data.msg,'danger');
            }
        }
        nxwd.ajaxRequest('{{ path(\"supplier_finance_get_withdraw_fee\") }}','POST',{widthdraw:value},'json',success,before,error);
    })

</script>
", "/Supplier/Finance/add_withdraw_js.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Supplier\\Finance\\add_withdraw_js.twig");
    }
}
