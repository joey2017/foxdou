<?php

/* Test/SimpleFormDemo/full_custom_form.twig */
class __TwigTemplate_073717dca91e357052f12c3813231d29b65c69ba0115769cc3b269f49b42bff2 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Test/SimpleFormDemo/full_custom_form.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Test/SimpleFormDemo/full_custom_form.twig"));

        // line 1
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Test/SimpleFormDemo/full_custom_form.twig", 1);
        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("simple_form_demo_submit", array("page" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "request", array()), "get", array(0 => "page"), "method"))), "html", null, true);
        echo "\" method=\"post\" class=\"layui-form foxdou-row\">
    <div class=\"layui-fluid\" style=\"padding: 0;\">
        <div class=\"layui-row\">
            <div class=\"layui-col-md8\">
                <div class=\"layui-form-item \">
                    <label class=\"layui-form-label\">用户名</label>
                    <div class=\"layui-input-inline\">
                        ";
        // line 10
        echo $context["sf"]->macro_text_raw("username", array("placeholder" => "请输入用户名", "class" => "layui-input"));
        echo "
                    </div>
                    <div class=\"layui-form-mid layui-word-aux\">5~20位，仅支持英文字母</div>
                    <div class=\"layui-form-mid layui-word-aux\">第二个tip</div>
                </div>
                <div class=\"layui-form-item \">
                    <label class=\"layui-form-label\">Email</label>
                    <div class=\"layui-input-inline\">
                        ";
        // line 18
        echo $context["sf"]->macro_text_raw("email", array("placeholder" => "请输入Email", "class" => "layui-input"));
        echo "
                    </div>
                    <div class=\"layui-form-mid layui-word-aux\">请输入有效电子邮箱地址</div>
                </div>
                <div class=\"layui-form-item \">
                    <label class=\"layui-form-label\">手机号</label>
                    <div class=\"layui-input-inline\">
                        ";
        // line 25
        echo $context["sf"]->macro_text_raw("mobile", array("placeholder" => "请输入手机号", "class" => "layui-input"));
        echo "
                    </div>
                    <div class=\"layui-form-mid layui-word-aux\">支持移动、联通、电信</div>
                </div>
            </div>
            <div class=\"layui-col-md4\">
                <div class=\"layui-form-item \">
                    <label class=\"layui-form-label\">头像</label>
                    <div class=\"layui-input-inline\">
                        <div id=\"dropzone_avatar\" class=\"dropzone\" style=\"width: 170px; height: 170px;    min-height: 170px \">
                            <div class=\"dz-message needsclick\">
                                <h3>点击这里<br>或拖图片到这里来上传</h3><br>
                                <span class=\"note needsclick\">最多能上传 1 个文件<br>最大 10MiB</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"layui-form-mid layui-word-aux\"></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"layui-form-item \">
        <label class=\"layui-form-label\">勿扰模式</label>
        <div class=\"layui-input-inline\">
            ";
        // line 49
        echo $context["sf"]->macro_checkbox_raw("do_not_disturb", array("Y" => "是"), array("lay-skin" => "switch", "lay-text" => "是|否", "class" => "layui-checkbox"));
        echo "
        </div>
        <div class=\"layui-form-mid layui-word-aux\"></div>
    </div>
    <div class=\"layui-form-item \">
        <label class=\"layui-form-label\">密码</label>
        <div class=\"layui-input-inline\">
            ";
        // line 56
        echo $context["sf"]->macro_text_raw("password", array("placeholder" => "请输入密码", "class" => "layui-input"));
        echo "
        </div>
        <div class=\"layui-form-mid layui-word-aux\"></div>
    </div>
    <div class=\"layui-form-item \">
        <label class=\"layui-form-label\">确认密码</label>
        <div class=\"layui-input-inline\">
            ";
        // line 63
        echo $context["sf"]->macro_text_raw("password_confirm", array("placeholder" => "确认密码", "class" => "layui-input"));
        echo "
        </div>
        <div class=\"layui-form-mid layui-word-aux\"></div>
    </div>
    <div class=\"layui-form-item \">
        <label class=\"layui-form-label\">性别</label>
        <div class=\"layui-input-inline\">
            ";
        // line 70
        echo $context["sf"]->macro_select_raw("gender", (isset($context["genders"]) || array_key_exists("genders", $context) ? $context["genders"] : (function () { throw new Twig_Error_Runtime('Variable "genders" does not exist.', 70, $this->source); })()), array("class" => "layui-select"), (isset($context["default_gender"]) || array_key_exists("default_gender", $context) ? $context["default_gender"] : (function () { throw new Twig_Error_Runtime('Variable "default_gender" does not exist.', 70, $this->source); })()));
        echo "
        </div>
        <div class=\"layui-form-mid layui-word-aux\"></div>
    </div>
    <div class=\"layui-form-item \">
        <label class=\"layui-form-label\">掌握的语言</label>
        <div class=\"layui-input-block\">
            ";
        // line 77
        echo $context["sf"]->macro_checkbox_raw("favourite_languages", (isset($context["languages"]) || array_key_exists("languages", $context) ? $context["languages"] : (function () { throw new Twig_Error_Runtime('Variable "languages" does not exist.', 77, $this->source); })()), array("class" => "layui-checkbox"), (isset($context["default_checked_values"]) || array_key_exists("default_checked_values", $context) ? $context["default_checked_values"] : (function () { throw new Twig_Error_Runtime('Variable "default_checked_values" does not exist.', 77, $this->source); })()));
        echo "
        </div>
        <div class=\"layui-form-mid layui-word-aux\"></div>
    </div>
    <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">主力语言</label>
        <div class=\"layui-input-block\">
            ";
        // line 84
        echo $context["sf"]->macro_radio_raw("most_skilled_language", (isset($context["languages"]) || array_key_exists("languages", $context) ? $context["languages"] : (function () { throw new Twig_Error_Runtime('Variable "languages" does not exist.', 84, $this->source); })()), array("class" => "layui-radio"), (isset($context["default_most_skilled_language"]) || array_key_exists("default_most_skilled_language", $context) ? $context["default_most_skilled_language"] : (function () { throw new Twig_Error_Runtime('Variable "default_most_skilled_language" does not exist.', 84, $this->source); })()));
        echo "
        </div>
        <div class=\"layui-form-mid layui-word-aux\"></div>
    </div>
    <div class=\"layui-form-item \">
        <label class=\"layui-form-label\">自我介绍</label>
        <div class=\"layui-input-block\">
            ";
        // line 91
        echo $context["sf"]->macro_textarea_raw("intro", array("placeholder" => "请输入自我介绍", "class" => "layui-textarea"));
        echo "
        </div>
        <div class=\"layui-form-mid layui-word-aux\"></div>
    </div>
    <div class=\"layui-form-item \">
        <label class=\"layui-form-label\"></label>
        <div class=\"layui-input-inline\">
            ";
        // line 98
        echo $context["sf"]->macro_submit_raw("submit", "提交", array("class" => "layui-btn layui-btn-normal"));
        echo "
            ";
        // line 99
        echo $context["sf"]->macro_button_raw("", "暂存", array("class" => "layui-btn layui-btn-primary"));
        echo "
        </div>
        <div class=\"layui-form-mid layui-word-aux\"></div>
    </div>
</form>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Test/SimpleFormDemo/full_custom_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 99,  162 => 98,  152 => 91,  142 => 84,  132 => 77,  122 => 70,  112 => 63,  102 => 56,  92 => 49,  65 => 25,  55 => 18,  44 => 10,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

<form action=\"{{ path('simple_form_demo_submit', {'page': app.request.get('page')}) }}\" method=\"post\" class=\"layui-form foxdou-row\">
    <div class=\"layui-fluid\" style=\"padding: 0;\">
        <div class=\"layui-row\">
            <div class=\"layui-col-md8\">
                <div class=\"layui-form-item \">
                    <label class=\"layui-form-label\">用户名</label>
                    <div class=\"layui-input-inline\">
                        {{ sf.text_raw('username', {'placeholder': '请输入用户名', 'class': 'layui-input'}) }}
                    </div>
                    <div class=\"layui-form-mid layui-word-aux\">5~20位，仅支持英文字母</div>
                    <div class=\"layui-form-mid layui-word-aux\">第二个tip</div>
                </div>
                <div class=\"layui-form-item \">
                    <label class=\"layui-form-label\">Email</label>
                    <div class=\"layui-input-inline\">
                        {{ sf.text_raw('email', {'placeholder': '请输入Email', 'class': 'layui-input'}) }}
                    </div>
                    <div class=\"layui-form-mid layui-word-aux\">请输入有效电子邮箱地址</div>
                </div>
                <div class=\"layui-form-item \">
                    <label class=\"layui-form-label\">手机号</label>
                    <div class=\"layui-input-inline\">
                        {{ sf.text_raw('mobile', {'placeholder': '请输入手机号', 'class': 'layui-input'}) }}
                    </div>
                    <div class=\"layui-form-mid layui-word-aux\">支持移动、联通、电信</div>
                </div>
            </div>
            <div class=\"layui-col-md4\">
                <div class=\"layui-form-item \">
                    <label class=\"layui-form-label\">头像</label>
                    <div class=\"layui-input-inline\">
                        <div id=\"dropzone_avatar\" class=\"dropzone\" style=\"width: 170px; height: 170px;    min-height: 170px \">
                            <div class=\"dz-message needsclick\">
                                <h3>点击这里<br>或拖图片到这里来上传</h3><br>
                                <span class=\"note needsclick\">最多能上传 1 个文件<br>最大 10MiB</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"layui-form-mid layui-word-aux\"></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"layui-form-item \">
        <label class=\"layui-form-label\">勿扰模式</label>
        <div class=\"layui-input-inline\">
            {{ sf.checkbox_raw('do_not_disturb', {'Y': '是'}, {'lay-skin': 'switch', 'lay-text': '是|否', 'class': 'layui-checkbox'}) }}
        </div>
        <div class=\"layui-form-mid layui-word-aux\"></div>
    </div>
    <div class=\"layui-form-item \">
        <label class=\"layui-form-label\">密码</label>
        <div class=\"layui-input-inline\">
            {{ sf.text_raw('password', {'placeholder': '请输入密码', 'class': 'layui-input'}) }}
        </div>
        <div class=\"layui-form-mid layui-word-aux\"></div>
    </div>
    <div class=\"layui-form-item \">
        <label class=\"layui-form-label\">确认密码</label>
        <div class=\"layui-input-inline\">
            {{ sf.text_raw('password_confirm', {'placeholder': '确认密码', 'class': 'layui-input'}) }}
        </div>
        <div class=\"layui-form-mid layui-word-aux\"></div>
    </div>
    <div class=\"layui-form-item \">
        <label class=\"layui-form-label\">性别</label>
        <div class=\"layui-input-inline\">
            {{ sf.select_raw('gender', genders, {'class': 'layui-select'}, default_gender) }}
        </div>
        <div class=\"layui-form-mid layui-word-aux\"></div>
    </div>
    <div class=\"layui-form-item \">
        <label class=\"layui-form-label\">掌握的语言</label>
        <div class=\"layui-input-block\">
            {{ sf.checkbox_raw('favourite_languages', languages, {'class': 'layui-checkbox'}, default_checked_values) }}
        </div>
        <div class=\"layui-form-mid layui-word-aux\"></div>
    </div>
    <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">主力语言</label>
        <div class=\"layui-input-block\">
            {{ sf.radio_raw('most_skilled_language', languages, {'class': 'layui-radio'}, default_most_skilled_language) }}
        </div>
        <div class=\"layui-form-mid layui-word-aux\"></div>
    </div>
    <div class=\"layui-form-item \">
        <label class=\"layui-form-label\">自我介绍</label>
        <div class=\"layui-input-block\">
            {{ sf.textarea_raw('intro', {'placeholder': '请输入自我介绍', 'class': 'layui-textarea'}) }}
        </div>
        <div class=\"layui-form-mid layui-word-aux\"></div>
    </div>
    <div class=\"layui-form-item \">
        <label class=\"layui-form-label\"></label>
        <div class=\"layui-input-inline\">
            {{ sf.submit_raw('submit', '提交', {'class': 'layui-btn layui-btn-normal'}) }}
            {{ sf.button_raw('', '暂存', {'class': 'layui-btn layui-btn-primary'}) }}
        </div>
        <div class=\"layui-form-mid layui-word-aux\"></div>
    </div>
</form>", "Test/SimpleFormDemo/full_custom_form.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Test\\SimpleFormDemo\\full_custom_form.twig");
    }
}
