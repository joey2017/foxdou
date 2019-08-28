<?php

/* Supplier/Finance/add_withdraw_account_js.twig */
class __TwigTemplate_c5bf70d4db8aae6de8a383b87389e77d4e76d3de3f9e73df57a655b1e8871c0f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Supplier/Finance/add_withdraw_account_js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Supplier/Finance/add_withdraw_account_js.twig"));

        // line 1
        echo "<script>

    form.render();

    \$(document).on('click', function (e) {
        var target = \$(e.target);
        if (target.is('.submit')) {
            var account_bank_id = \$('#account_bank_id').val();
            var account_place   = \$('#account_place').val();
            var account_user    = \$('#account_user').val();
            var account_num     = \$('#account_num').val();
            var shenfenzheng_id = \$('#shenfenzheng_id').val();
            var mobile          = \$('#mobile').val();
            if (account_bank_id == '') {
                nxwd.showMsg('请选择银行');
                return false;
            }
            if (account_place == '') {
                nxwd.showMsg('请输入开户行名称');
                return false;
            }
            if (account_user == '') {
                nxwd.showMsg('请输入姓名');
                return false;
            }
            if (account_num == '') {
                nxwd.showMsg('请输入账号');
                return false;
            }
            if (shenfenzheng_id == '') {
                nxwd.showMsg('请输入身份证号');
                return false;
            }
            if (shenfenzheng_id.length !== 18) {
                nxwd.showMsg('身份证号有误');
                return false;
            }
            if (mobile == '') {
                nxwd.showMsg('请输入绑定手机号');
                return false;
            }
            if (!(/^1(3|4|5|7|8)\\d{9}\$/.test(mobile))) {
                nxwd.showMsg('手机号格式不正确');
                return false;
            }
            \$(\"form:first\").submit();
        }
    });

</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Supplier/Finance/add_withdraw_account_js.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>

    form.render();

    \$(document).on('click', function (e) {
        var target = \$(e.target);
        if (target.is('.submit')) {
            var account_bank_id = \$('#account_bank_id').val();
            var account_place   = \$('#account_place').val();
            var account_user    = \$('#account_user').val();
            var account_num     = \$('#account_num').val();
            var shenfenzheng_id = \$('#shenfenzheng_id').val();
            var mobile          = \$('#mobile').val();
            if (account_bank_id == '') {
                nxwd.showMsg('请选择银行');
                return false;
            }
            if (account_place == '') {
                nxwd.showMsg('请输入开户行名称');
                return false;
            }
            if (account_user == '') {
                nxwd.showMsg('请输入姓名');
                return false;
            }
            if (account_num == '') {
                nxwd.showMsg('请输入账号');
                return false;
            }
            if (shenfenzheng_id == '') {
                nxwd.showMsg('请输入身份证号');
                return false;
            }
            if (shenfenzheng_id.length !== 18) {
                nxwd.showMsg('身份证号有误');
                return false;
            }
            if (mobile == '') {
                nxwd.showMsg('请输入绑定手机号');
                return false;
            }
            if (!(/^1(3|4|5|7|8)\\d{9}\$/.test(mobile))) {
                nxwd.showMsg('手机号格式不正确');
                return false;
            }
            \$(\"form:first\").submit();
        }
    });

</script>
", "Supplier/Finance/add_withdraw_account_js.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Supplier\\Finance\\add_withdraw_account_js.twig");
    }
}
