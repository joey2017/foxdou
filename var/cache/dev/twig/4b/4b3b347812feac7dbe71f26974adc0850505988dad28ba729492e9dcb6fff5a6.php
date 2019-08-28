<?php

/* Admin/UserDetail/Main/account_safety.twig */
class __TwigTemplate_13932e81382005a2925452fb649c8c6f907bd90f940625feb82ce7498968e1d4 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/Main/account_safety.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/Main/account_safety.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>基本管理-安全认证</title>
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
    <script type=\"text/javascript\" src=\"/assets/admin/js/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"/assets/admin/js/layer/layer.js\"></script>
</head>

<body>
<div class=\"main-box\">
    <ul class=\"h-tab\">
        <li class=\"tab-this\"><a href=\"\">安全工具</a></li>
        <!--        <li><a href=\"\">安全策略</a></li>-->
    </ul>
    <div class=\"h-details-box\">
        <ul class=\"h-details clearfloat\">
            <li>
                <div class=\"details-title\">手机绑定</div>
                <div class=\"detail-content bind_mobile\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 24, $this->source); })()), "bind_mobile", array()), "html", null, true);
        echo "</span>
                        <input type=\"text\" name=\"bind_mobile\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 25, $this->source); })()), "bind_mobile", array()), "html", null, true);
        echo "\" class=\"h-input-ing\" style=\"display: none;\" />
                    </div>
                    <div class=\"h-input-exu\"><button class=\"btn btn-green text-val\" >修改</button></div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">邮箱绑定</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text\">";
        // line 34
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "bind_email", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "bind_email", array()), "未绑定")) : ("未绑定")), "html", null, true);
        echo "</span>
                        <input type=\"text\" name=\"bind_email\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "bind_email", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "bind_email", array()), "未绑定")) : ("未绑定")), "html", null, true);
        echo "\" class=\"h-input-ing\" style=\"display: none;\" />
                    </div>
                    <div class=\"h-input-exu\"><button class=\"btn btn-green text-val\">";
        // line 37
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 37, $this->source); })()), "bind_email", array())) {
            echo "修改";
        } else {
            echo "绑定";
        }
        echo "</button></div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">支付密码</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span clas s=\"h-input-text\">********</span>
                        <input type=\"text\" name=\"pay_password\" value=\"\" class=\"h-input-ing\" style=\"display: none;\" />
                    </div>
                    <div class=\"h-input-exu\"><button class=\"btn btn-green text-val\">修改</button></div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">登录密码</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span clas s=\"h-input-text\">********</span>
                        <input type=\"text\" name=\"password\" value=\"\" class=\"h-input-ing\" style=\"display: none;\" />
                    </div>
                    <div class=\"h-input-exu\"><button class=\"btn btn-green text-val\">修改</button></div>
                </div>
            </li>
        </ul>
    </div>
</div>
<script type=\"text/javascript\">
    \$('.detail-content button.text-val').click(function () {
        var span=\$(this).parents('.detail-content').find('span');
        var input=\$(this).parents('.detail-content').find('input');
        if(\$(this).text()=='修改' || \$(this).text()=='绑定'){
            \$(this).text('保存');
            span.toggle();
            input.toggle();
        }else{
            edit_content(input,\$(this))
        }
    });
    function edit_content(input_dom,button_dom){
        var msg='';
        var data={};
        var input_name=input_dom.attr('name');
        switch (input_name){
            case 'bind_mobile':
                var msg='<input id=\"setLogin\" type=\"checkbox\" value=\"yes\" name=\"mobile\"/><span> 作为登录帐号</span><div style=\"height: 10px\"></div>';
                var regMobile=/^1([38]\\d|4[57]|5[0-35-9]|7[06-8])\\d{8}\$/;
                if(!regMobile.test(input_dom.val())){
                    layer.msg('请输入正确的手机号码');
                    return false;
                }
                break;
            case 'bind_email':
                var regMail=/^([a-zA-Z0-9_\\.\\-])+\\@(([a-zA-Z0-9\\-])+\\.)+([a-zA-Z0-9]{2,4})+\$/;
                var msg='<input id=\"setLogin\" type=\"checkbox\" value=\"yes\" name=\"email\"/><span> 作为登录帐号</span><div style=\"height: 10px\"></div>';
                if(!regMail.test(input_dom.val())){
                    layer.msg('请输入正确的邮箱');
                    return false;
                }
                break;
            case 'password':
                break;
            case 'pay_password':
                break;
            default :
                layer.msg('未知错误，请刷新页面后再试');
                return false;
        }

        layer.confirm('修改',{
            title:'安全验证',
            content:msg+'<input id=\"password\" type=\"password\" placeholder=\"请输入您的安全密码\" class=\"h-input-ing\" />',
            btn: ['确定','取消']
        }, function(index, layero){
            var password=\$('#password').val();
            if(!password){
                return false;
            }
            var data={obj:input_name,val:input_dom.val(),password:password,setLogin:\$('#setLogin:checked').val()};
            \$.post('";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_main_edit-info", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 115, $this->source); })()), "id", array()))), "html", null, true);
        echo "',data,function(res){
                if(res.status){
                    layer.msg(res.msg,{time:1000},function(){
                        location.reload();
                    });
                }else{
                    layer.msg(res.msg);
                    return false;
                }
            },'json');
        });
    }

</script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/UserDetail/Main/account_safety.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 115,  79 => 37,  74 => 35,  70 => 34,  58 => 25,  54 => 24,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>基本管理-安全认证</title>
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
    <script type=\"text/javascript\" src=\"/assets/admin/js/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"/assets/admin/js/layer/layer.js\"></script>
</head>

<body>
<div class=\"main-box\">
    <ul class=\"h-tab\">
        <li class=\"tab-this\"><a href=\"\">安全工具</a></li>
        <!--        <li><a href=\"\">安全策略</a></li>-->
    </ul>
    <div class=\"h-details-box\">
        <ul class=\"h-details clearfloat\">
            <li>
                <div class=\"details-title\">手机绑定</div>
                <div class=\"detail-content bind_mobile\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text\">{{ user.bind_mobile }}</span>
                        <input type=\"text\" name=\"bind_mobile\" value=\"{{ user.bind_mobile }}\" class=\"h-input-ing\" style=\"display: none;\" />
                    </div>
                    <div class=\"h-input-exu\"><button class=\"btn btn-green text-val\" >修改</button></div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">邮箱绑定</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span class=\"h-input-text\">{{ user.bind_email|default('未绑定') }}</span>
                        <input type=\"text\" name=\"bind_email\" value=\"{{ user.bind_email|default('未绑定') }}\" class=\"h-input-ing\" style=\"display: none;\" />
                    </div>
                    <div class=\"h-input-exu\"><button class=\"btn btn-green text-val\">{% if user.bind_email %}修改{% else %}绑定{% endif %}</button></div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">支付密码</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span clas s=\"h-input-text\">********</span>
                        <input type=\"text\" name=\"pay_password\" value=\"\" class=\"h-input-ing\" style=\"display: none;\" />
                    </div>
                    <div class=\"h-input-exu\"><button class=\"btn btn-green text-val\">修改</button></div>
                </div>
            </li>
            <li>
                <div class=\"details-title\">登录密码</div>
                <div class=\"detail-content\">
                    <div class=\"h-input-inline\">
                        <span clas s=\"h-input-text\">********</span>
                        <input type=\"text\" name=\"password\" value=\"\" class=\"h-input-ing\" style=\"display: none;\" />
                    </div>
                    <div class=\"h-input-exu\"><button class=\"btn btn-green text-val\">修改</button></div>
                </div>
            </li>
        </ul>
    </div>
</div>
<script type=\"text/javascript\">
    \$('.detail-content button.text-val').click(function () {
        var span=\$(this).parents('.detail-content').find('span');
        var input=\$(this).parents('.detail-content').find('input');
        if(\$(this).text()=='修改' || \$(this).text()=='绑定'){
            \$(this).text('保存');
            span.toggle();
            input.toggle();
        }else{
            edit_content(input,\$(this))
        }
    });
    function edit_content(input_dom,button_dom){
        var msg='';
        var data={};
        var input_name=input_dom.attr('name');
        switch (input_name){
            case 'bind_mobile':
                var msg='<input id=\"setLogin\" type=\"checkbox\" value=\"yes\" name=\"mobile\"/><span> 作为登录帐号</span><div style=\"height: 10px\"></div>';
                var regMobile=/^1([38]\\d|4[57]|5[0-35-9]|7[06-8])\\d{8}\$/;
                if(!regMobile.test(input_dom.val())){
                    layer.msg('请输入正确的手机号码');
                    return false;
                }
                break;
            case 'bind_email':
                var regMail=/^([a-zA-Z0-9_\\.\\-])+\\@(([a-zA-Z0-9\\-])+\\.)+([a-zA-Z0-9]{2,4})+\$/;
                var msg='<input id=\"setLogin\" type=\"checkbox\" value=\"yes\" name=\"email\"/><span> 作为登录帐号</span><div style=\"height: 10px\"></div>';
                if(!regMail.test(input_dom.val())){
                    layer.msg('请输入正确的邮箱');
                    return false;
                }
                break;
            case 'password':
                break;
            case 'pay_password':
                break;
            default :
                layer.msg('未知错误，请刷新页面后再试');
                return false;
        }

        layer.confirm('修改',{
            title:'安全验证',
            content:msg+'<input id=\"password\" type=\"password\" placeholder=\"请输入您的安全密码\" class=\"h-input-ing\" />',
            btn: ['确定','取消']
        }, function(index, layero){
            var password=\$('#password').val();
            if(!password){
                return false;
            }
            var data={obj:input_name,val:input_dom.val(),password:password,setLogin:\$('#setLogin:checked').val()};
            \$.post('{{ path('admin_user_details_main_edit-info',{id:user.id}) }}',data,function(res){
                if(res.status){
                    layer.msg(res.msg,{time:1000},function(){
                        location.reload();
                    });
                }else{
                    layer.msg(res.msg);
                    return false;
                }
            },'json');
        });
    }

</script>
</body>
</html>
", "Admin/UserDetail/Main/account_safety.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\UserDetail\\Main\\account_safety.twig");
    }
}
