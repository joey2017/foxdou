<?php

/* Admin/User/add.twig */
class __TwigTemplate_42c5cc143caadcdcd675de9a6d2f90bb8548cfe72afc5b8f91782b9fc8117e5e extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/User/add.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/User/add.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>新增用户</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>新增用户</title>
    <link href=\"/assets/admin/h/css/bootstrap.min14ed.css?v=3.3.6\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/font-awesome.min93e3.css?v=4.4.0\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/animate.min.css\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/style.min862f.css?v=4.1.0\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/plugins/iCheck/custom.css\" rel=\"stylesheet\">
</head>
<body class=\"gray-bg\">
<div class=\"wrapper wrapper-content animated fadeInRight\">
    <div class=\"text-center\"><h3>新增用户</h3></div>
    <form action=\"\" method=\"post\" class=\"form form-horizontal m-t\">
        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_users_add"), "html", null, true);
        echo "\">
        <div class=\"text-center m-b\">
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["t"]) {
            // line 21
            echo "            <label class=\"radio-inline i-checks\">
                <input type=\"radio\" name=\"type\" ";
            // line 22
            if (($context["k"] == "I")) {
                echo "checked";
            }
            echo " class=\"user-type\" value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\" />";
            echo twig_escape_filter($this->env, $context["t"], "html", null, true);
            echo "</label>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </div>
        <div class=\"box\"></div>
    </form>
</div>
<div class=\"person\" style=\"display: none;\">
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">手机号码</span>
        <input class=\"form-control\" name=\"mobile\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">狐豆账号 <span style=\"color:red;\">*</span></span>
        <input class=\"form-control required-fields\" name=\"user_name\" required type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">狐豆昵称</span>
        <input class=\"form-control\" name=\"nick_name\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">姓名</span>
        <input class=\"form-control\" name=\"legal_person_name\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">身份证号</span>
        <input class=\"form-control qudao-name\" name=\"legal_person_identity_card_no\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">登录密码 <span style=\"color:red;\">*</span></span>
        <input class=\"form-control required-fields\" name=\"password\" required type=\"password\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">确认密码 <span style=\"color:red;\">*</span></span>
        <input class=\"form-control required-fields\" type=\"password\" required name=\"password_confirm\">
    </div>
    <div class=\"text-center m-b\">
        <button type=\"submit\" class=\"btn btn-primary submit\">确认</button>
        <button type=\"submit\" class=\"btn btn-defaulty cancel\">取消</button>
    </div>
</div>
<div class=\"individual\" style=\"display: none;\">
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">登录邮箱</span>
        <input class=\"form-control\" name=\"email\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">狐豆账号 <span style=\"color:red;\">*</span></span>
        <input class=\"form-control required-fields\" name=\"user_name\" required type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">狐豆昵称</span>
        <input class=\"form-control\" name=\"nick_name\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">执照名称</span>
        <input class=\"form-control\" name=\"business_name\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">个体法人</span>
        <input class=\"form-control qudao-name\" name=\"legal_person_name\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">法人身份证</span>
        <input class=\"form-control\" name=\"legal_person_identity_card_no\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">手机号码</span>
        <input class=\"form-control\" name=\"mobile\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">密码登录 <span style=\"color:red;\">*</span></span>
        <input class=\"form-control required-fields\" name=\"password\" required type=\"password\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">确认密码 <span style=\"color:red;\">*</span></span>
        <input class=\"form-control required-fields\" name=\"password_confirm\" required type=\"password\">
    </div>
    <div class=\"text-center m-b\">
        <button type=\"submit\" class=\"btn btn-primary submit\">确认</button>
        <button type=\"submit\" class=\"btn btn-defaulty cancel\">取消</button>
    </div>
</div>
<div class=\"enterprise\" style=\"display: none;\">
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">登录邮箱</span>
        <input class=\"form-control\" name=\"email\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">狐豆账号 <span style=\"color:red;\">*</span></span>
        <input class=\"form-control required-fields\" name=\"user_name\" required type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">狐豆昵称</span>
        <input class=\"form-control\" name=\"nick_name\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">公司名称</span>
        <input class=\"form-control\" name=\"business_name\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">营业执照</span>
        <input class=\"form-control qudao-name\" name=\"business_license_no\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">公司法人</span>
        <input class=\"form-control\" name=\"legal_person_name\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">法人身份证</span>
        <input class=\"form-control\" name=\"legal_person_identity_card_no\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">手机号码</span>
        <input class=\"form-control\" name=\"mobile\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">密码登录 <span style=\"color:red;\">*</span></span>
        <input class=\"form-control required-fields\" name=\"password\" required type=\"password\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">确认密码 <span style=\"color:red;\">*</span></span>
        <input class=\"form-control required-fields\" name=\"password_confirm\" required type=\"password\">
    </div>
    <div class=\"text-center m-b\">
        <button type=\"submit\" class=\"btn btn-primary submit\">确认</button>
        <button type=\"submit\" class=\"btn btn-defaulty cancel\">取消</button>
    </div>
</div>
<script src=\"/assets/admin/h/js/jquery.min.js?v=2.1.4\"></script>
<script src=\"/assets/admin/h/js/bootstrap.min.js?v=3.3.6\"></script>
<script src=\"/assets/admin/h/js/plugins/iCheck/icheck.min.js\"></script>
<script src=\"/assets/admin/js/common.js\"></script>
<script src=\"//oss.maxcdn.com/jquery.form/3.50/jquery.form.min.js\"></script>
<script src=\"/assets/admin/h/js/plugins/layer/layer-v3.0.1/layer.js\"></script>
<script>
    \$('.user-type').iCheck({radioClass:\"iradio_square-green\"})
    \$('.user-type').on('ifChecked', function(event){
        var val=\$(this).val();
        show_box(val);
    });

    show_box('I');

    function show_box(n){
        switch (n){
            case 'I':
                \$('.box').html(\$('.person').html())
                break;
            case 'B':
                \$('.box').html(\$('.individual').html())
                break;
            case 'E':
                \$('.box').html(\$('.enterprise').html())
                break;
        }
    }
    \$(document).on('click',function(e){
        var target = \$(e.target);
        if (target.is('.submit')){
            var txt = target.text();
            var is_checked = true;
            \$('form').find('.required-fields').each(function(){
                if (\$(this).val() == ''){
                    is_checked = false;
                }
            });
            if (is_checked == false){
                layer.alert('带*号的为必填项哦');
                return false;
            }

            \$.ajax({
                url : \"";
        // line 194
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_add");
        echo "\",
                type : \"POST\",
                datatype : \"json\",
                data : \$('form').serialize(),
                beforeSend : function(){
                    target.attr('disabled',true).html('处理中');
                },
                success : function(res){
                    target.removeAttr('disabled').html(txt);
                    if (res.status){
                        layer.msg(res.msg);
                        \$('form').resetForm();
                        return
                    }else{
                        layer.alert(res.msg);
                    }
                },
                error : function () {
                    target.removeAttr('disabled').html(txt);
                    layer.alert('服务器未响应，请稍后重试')
                }
            })

        }
        else if (target.is('.cancel')){
            return false;
        }
    });

</script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/User/add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 194,  74 => 24,  60 => 22,  57 => 21,  53 => 20,  48 => 18,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>新增用户</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>新增用户</title>
    <link href=\"/assets/admin/h/css/bootstrap.min14ed.css?v=3.3.6\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/font-awesome.min93e3.css?v=4.4.0\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/animate.min.css\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/style.min862f.css?v=4.1.0\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/plugins/iCheck/custom.css\" rel=\"stylesheet\">
</head>
<body class=\"gray-bg\">
<div class=\"wrapper wrapper-content animated fadeInRight\">
    <div class=\"text-center\"><h3>新增用户</h3></div>
    <form action=\"\" method=\"post\" class=\"form form-horizontal m-t\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('admin_users_add') }}\">
        <div class=\"text-center m-b\">
            {% for k,t in type %}
            <label class=\"radio-inline i-checks\">
                <input type=\"radio\" name=\"type\" {% if k == 'I' %}checked{% endif %} class=\"user-type\" value=\"{{ k }}\" />{{ t }}</label>
            {% endfor %}
        </div>
        <div class=\"box\"></div>
    </form>
</div>
<div class=\"person\" style=\"display: none;\">
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">手机号码</span>
        <input class=\"form-control\" name=\"mobile\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">狐豆账号 <span style=\"color:red;\">*</span></span>
        <input class=\"form-control required-fields\" name=\"user_name\" required type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">狐豆昵称</span>
        <input class=\"form-control\" name=\"nick_name\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">姓名</span>
        <input class=\"form-control\" name=\"legal_person_name\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">身份证号</span>
        <input class=\"form-control qudao-name\" name=\"legal_person_identity_card_no\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">登录密码 <span style=\"color:red;\">*</span></span>
        <input class=\"form-control required-fields\" name=\"password\" required type=\"password\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">确认密码 <span style=\"color:red;\">*</span></span>
        <input class=\"form-control required-fields\" type=\"password\" required name=\"password_confirm\">
    </div>
    <div class=\"text-center m-b\">
        <button type=\"submit\" class=\"btn btn-primary submit\">确认</button>
        <button type=\"submit\" class=\"btn btn-defaulty cancel\">取消</button>
    </div>
</div>
<div class=\"individual\" style=\"display: none;\">
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">登录邮箱</span>
        <input class=\"form-control\" name=\"email\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">狐豆账号 <span style=\"color:red;\">*</span></span>
        <input class=\"form-control required-fields\" name=\"user_name\" required type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">狐豆昵称</span>
        <input class=\"form-control\" name=\"nick_name\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">执照名称</span>
        <input class=\"form-control\" name=\"business_name\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">个体法人</span>
        <input class=\"form-control qudao-name\" name=\"legal_person_name\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">法人身份证</span>
        <input class=\"form-control\" name=\"legal_person_identity_card_no\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">手机号码</span>
        <input class=\"form-control\" name=\"mobile\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">密码登录 <span style=\"color:red;\">*</span></span>
        <input class=\"form-control required-fields\" name=\"password\" required type=\"password\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">确认密码 <span style=\"color:red;\">*</span></span>
        <input class=\"form-control required-fields\" name=\"password_confirm\" required type=\"password\">
    </div>
    <div class=\"text-center m-b\">
        <button type=\"submit\" class=\"btn btn-primary submit\">确认</button>
        <button type=\"submit\" class=\"btn btn-defaulty cancel\">取消</button>
    </div>
</div>
<div class=\"enterprise\" style=\"display: none;\">
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">登录邮箱</span>
        <input class=\"form-control\" name=\"email\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">狐豆账号 <span style=\"color:red;\">*</span></span>
        <input class=\"form-control required-fields\" name=\"user_name\" required type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">狐豆昵称</span>
        <input class=\"form-control\" name=\"nick_name\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">公司名称</span>
        <input class=\"form-control\" name=\"business_name\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">营业执照</span>
        <input class=\"form-control qudao-name\" name=\"business_license_no\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">公司法人</span>
        <input class=\"form-control\" name=\"legal_person_name\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">法人身份证</span>
        <input class=\"form-control\" name=\"legal_person_identity_card_no\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">手机号码</span>
        <input class=\"form-control\" name=\"mobile\" type=\"text\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">密码登录 <span style=\"color:red;\">*</span></span>
        <input class=\"form-control required-fields\" name=\"password\" required type=\"password\">
    </div>
    <div class=\"input-group m-b\">
        <span class=\"input-group-addon\">确认密码 <span style=\"color:red;\">*</span></span>
        <input class=\"form-control required-fields\" name=\"password_confirm\" required type=\"password\">
    </div>
    <div class=\"text-center m-b\">
        <button type=\"submit\" class=\"btn btn-primary submit\">确认</button>
        <button type=\"submit\" class=\"btn btn-defaulty cancel\">取消</button>
    </div>
</div>
<script src=\"/assets/admin/h/js/jquery.min.js?v=2.1.4\"></script>
<script src=\"/assets/admin/h/js/bootstrap.min.js?v=3.3.6\"></script>
<script src=\"/assets/admin/h/js/plugins/iCheck/icheck.min.js\"></script>
<script src=\"/assets/admin/js/common.js\"></script>
<script src=\"//oss.maxcdn.com/jquery.form/3.50/jquery.form.min.js\"></script>
<script src=\"/assets/admin/h/js/plugins/layer/layer-v3.0.1/layer.js\"></script>
<script>
    \$('.user-type').iCheck({radioClass:\"iradio_square-green\"})
    \$('.user-type').on('ifChecked', function(event){
        var val=\$(this).val();
        show_box(val);
    });

    show_box('I');

    function show_box(n){
        switch (n){
            case 'I':
                \$('.box').html(\$('.person').html())
                break;
            case 'B':
                \$('.box').html(\$('.individual').html())
                break;
            case 'E':
                \$('.box').html(\$('.enterprise').html())
                break;
        }
    }
    \$(document).on('click',function(e){
        var target = \$(e.target);
        if (target.is('.submit')){
            var txt = target.text();
            var is_checked = true;
            \$('form').find('.required-fields').each(function(){
                if (\$(this).val() == ''){
                    is_checked = false;
                }
            });
            if (is_checked == false){
                layer.alert('带*号的为必填项哦');
                return false;
            }

            \$.ajax({
                url : \"{{ path('admin_users_add') }}\",
                type : \"POST\",
                datatype : \"json\",
                data : \$('form').serialize(),
                beforeSend : function(){
                    target.attr('disabled',true).html('处理中');
                },
                success : function(res){
                    target.removeAttr('disabled').html(txt);
                    if (res.status){
                        layer.msg(res.msg);
                        \$('form').resetForm();
                        return
                    }else{
                        layer.alert(res.msg);
                    }
                },
                error : function () {
                    target.removeAttr('disabled').html(txt);
                    layer.alert('服务器未响应，请稍后重试')
                }
            })

        }
        else if (target.is('.cancel')){
            return false;
        }
    });

</script>
</body>
</html>", "Admin/User/add.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\User\\add.twig");
    }
}
