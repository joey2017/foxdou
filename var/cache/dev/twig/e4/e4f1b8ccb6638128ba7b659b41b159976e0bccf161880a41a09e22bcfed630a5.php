<?php

/* /Test/SimpleFormDemo/layout.twig */
class __TwigTemplate_f33a30d07641e5534f92ef771d4afc606f9ff8d7553dd9584f8eba5fa63b2204 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Test/SimpleFormDemo/layout.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Test/SimpleFormDemo/layout.twig"));

        // line 1
        $context["default_gender"] = "F";
        // line 2
        $context["default_checked_values"] = array(0 => "1", 1 => "3", 2 => "5");
        // line 3
        $context["default_most_skilled_language"] = 1;
        // line 4
        echo "
";
        // line 5
        $context["genders"] = $this->extensions['App\Common\Twig\AppExtension']->toOptions("App\\Test\\Controller\\SimpleFormDemoController::GENDER", "性别");
        // line 6
        $context["languages"] = $this->extensions['App\Common\Twig\AppExtension']->toOptions("App\\Test\\Controller\\SimpleFormDemoController::LANGUAGES");
        // line 7
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>Simple Form 用法演示</title>

    <meta name=\"renderer\" content=\"webkit\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    ";
        // line 17
        echo $this->extensions['App\Common\Twig\AppExtension']->useAssets(array(0 => "/assets/common/layui/css/layui.css", 1 => "/assets/supplier/font/iconfont.css", 2 => "/assets/supplier/css/common.css", 3 => "/assets/supplier/css/index.css", 4 => "/assets/supplier/css/media-all.css", 5 => "/assets/common/components/dropzone/dropzone.js", 6 => "/assets/common/components/dropzone/dropzone.css", 7 => "/assets/common/js/jquery.min.js"));
        // line 26
        echo "

    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/styles/idea.min.css\">
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/highlight.min.js\"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    <style>
        /*.foxdou-content {*/
        /*width: calc(100% - 315px);*/
        /*}*/
        /*.foxdou-note {*/
        /*width: 300px;*/
        /*}*/
        .layui-table-cell {
            padding: 0 5px !important;
        }

        .form-item-error-message {
            color: red !important;
        }
         .dropzone .dz-preview {
             width: 90%;
             position: relative;
             display: inline-block;
             vertical-align: top;
             margin: 1px;
             min-height: 100px;
         }
        .dropzone .dz-preview .dz-image {
            border-radius: 20px;
            overflow: hidden;
            width: 100%;
            height: 100%;
        }
        .sisi-btn-content {
            min-height: 250px;
            height: auto;
        }
        .sisi-btn-content .image-item {
            min-height: 250px;
            height: auto;
        }
        .dropzone .dz-preview:hover .dz-image img {
            -webkit-transform: scale(1.05, 1.05);
            -moz-transform: scale(1.05, 1.05);
            -ms-transform: scale(1.05, 1.05);
            -o-transform: scale(1.05, 1.05);
            transform: scale(1.05, 1.05);
            -webkit-filter: blur(0px);
            filter: blur(0px); }

        .layui-table tr:hover, .layui-table[lay-even] tr:nth-child(even) {
            background-color: transparent !important;
        }

        .foxdou-body {
            bottom: 0px !important;
        }
        .layui-tab-content {
            padding: 0;
        }

        .layui-tab {
            margin: 0 !important;
        }
        .hljs {
            margin: 10px 0px 10px 20px;
            background-color: #f1eff0 ;
        }
    </style>
</head>

<body>

<div class=\"foxdou-box\">
    <div class=\"foxdou-header\">
        <div class=\"foxdou-top\">
            <div class=\"\"></div>
            <div class=\"foxdou-link\">
                <ul class=\"layui-nav layui-layout-left\">
                    <li class=\"layui-nav-item  layui-this\">
                        <a href=\"";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new Twig_Error_Runtime('Variable "current_path" does not exist.', 107, $this->source); })()), "html", null, true);
        echo "\">SimpleForm 表单组件使用说明</a>
                    </li>
                </ul>
            </div>

            <ul class=\"layui-nav layui-layout-right foxdou-nav-user\">
                <li class=\"layui-nav-item\">
                </li>
            </ul>

        </div>
    </div>

    <div class=\"foxdou-side\">
        <div class=\"layui-side-scroll\" data-path=\"";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new Twig_Error_Runtime('Variable "current_path" does not exist.', 121, $this->source); })()), "html", null, true);
        echo "\">
            <ul class=\"layui-nav layui-nav-tree\">
                <li class=\"layui-nav-item layui-this\">
                    <a href=\"";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new Twig_Error_Runtime('Variable "current_path" does not exist.', 124, $this->source); })()), "html", null, true);
        echo "\">
                        <i class=\"layui-icon\"></i>
                        <cite>首页</cite>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class=\"foxdou-body\">
        <div class=\"\">
            <div class=\"layui-tab layui-tab-card\">

                ";
        // line 137
        $context["tabs"] = array("index" => "使用说明", "helpers" => "助手函数说明", "validators" => "验证器列表", "transformers" => "转换器列表", "default" => "默认表单布局", "full_row" => "整行表单布局", "custom_form" => "自定义表单属性", "full_custom" => "完全自定义表单布局", "inline_with_dynamic_table" => "行内横排 + LayUI动态表格");
        // line 148
        echo "
                ";
        // line 149
        $context["current_page"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "page"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "page"), "method"), "")) : (""));
        // line 150
        echo "                <ul class=\"layui-tab-title\">

                    ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new Twig_Error_Runtime('Variable "tabs" does not exist.', 152, $this->source); })()));
        foreach ($context['_seq'] as $context["id"] => $context["name"]) {
            // line 153
            echo "                        <li class=\"";
            echo ((($context["id"] == (isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new Twig_Error_Runtime('Variable "current_page" does not exist.', 153, $this->source); })()))) ? ("layui-this") : (""));
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("simple_form_demo_show", array("page" => $context["id"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                </ul>
                <div class=\"layui-tab-content\">
                    ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new Twig_Error_Runtime('Variable "tabs" does not exist.', 157, $this->source); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["id"] => $context["name"]) {
            // line 158
            echo "                        <div class=\"layui-tab-item ";
            echo ((($context["id"] == (isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new Twig_Error_Runtime('Variable "current_page" does not exist.', 158, $this->source); })()))) ? ("layui-show") : (""));
            echo "\" data-title=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\">
                            ";
            // line 159
            if (($context["id"] == (isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new Twig_Error_Runtime('Variable "current_page" does not exist.', 159, $this->source); })()))) {
                // line 160
                echo "                            ";
                $this->displayBlock('page_content', $context, $blocks);
                // line 161
                echo "                            ";
            }
            // line 162
            echo "                        </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "                </div>
            </div>
        </div>
    </div>
</div>


";
        // line 171
        echo $this->extensions['App\Common\Twig\AppExtension']->useAssets(array(0 => "/assets/common/layui/layui.all.js", 1 => "/assets/common/js/jquery.serializejson.js", 2 => "/assets/common/js/common-verify.js"));
        // line 175
        echo "


";
        // line 178
        $this->loadTemplate("/Common/Common/dropzone.twig", "/Test/SimpleFormDemo/layout.twig", 178)->display($context);
        // line 179
        echo "
<script type=\"text/javascript\">
    // layui.element.render();

    var UPLOAD_URL     = \"";
        // line 183
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test_upload");
        echo "\";
    var DELETE_URL     = \"";
        // line 184
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("common_file_upload_delete");
        echo "\";
    var existingCovers = [{'id': '34312312321', 'url': '";
        // line 185
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/common/img/default-avatar.jpg");
        echo "'}];

    \$(document).ready(function () {
        function success(zoneId, file, response) {
            console.log('success called', file, response);
        }
        function failure(zoneId, file, response) {
            console.log('failure called', file, response);
        }

        var allow_upload = true;
        setup_upload_form('dropzone_avatar', UPLOAD_URL, DELETE_URL, existingCovers, success, failure, allow_upload);
    });

</script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 160
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/Test/SimpleFormDemo/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 160,  290 => 185,  286 => 184,  282 => 183,  276 => 179,  274 => 178,  269 => 175,  267 => 171,  258 => 164,  243 => 162,  240 => 161,  237 => 160,  235 => 159,  228 => 158,  211 => 157,  207 => 155,  194 => 153,  190 => 152,  186 => 150,  184 => 149,  181 => 148,  179 => 137,  163 => 124,  157 => 121,  140 => 107,  57 => 26,  55 => 17,  43 => 7,  41 => 6,  39 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set default_gender = 'F' %}
{% set default_checked_values = ['1', '3', '5'] %}
{% set default_most_skilled_language = 1 %}

{% set genders   = to_options('App\\\\Test\\\\Controller\\\\SimpleFormDemoController::GENDER', '性别') %}
{% set languages = to_options('App\\\\Test\\\\Controller\\\\SimpleFormDemoController::LANGUAGES') %}

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>Simple Form 用法演示</title>

    <meta name=\"renderer\" content=\"webkit\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    {{ use_assets([
        '/assets/common/layui/css/layui.css',
        '/assets/supplier/font/iconfont.css',
        '/assets/supplier/css/common.css',
        '/assets/supplier/css/index.css',
        '/assets/supplier/css/media-all.css',
        '/assets/common/components/dropzone/dropzone.js',
        '/assets/common/components/dropzone/dropzone.css',
        '/assets/common/js/jquery.min.js',
    ]) }}

    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/styles/idea.min.css\">
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/highlight.min.js\"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    <style>
        /*.foxdou-content {*/
        /*width: calc(100% - 315px);*/
        /*}*/
        /*.foxdou-note {*/
        /*width: 300px;*/
        /*}*/
        .layui-table-cell {
            padding: 0 5px !important;
        }

        .form-item-error-message {
            color: red !important;
        }
         .dropzone .dz-preview {
             width: 90%;
             position: relative;
             display: inline-block;
             vertical-align: top;
             margin: 1px;
             min-height: 100px;
         }
        .dropzone .dz-preview .dz-image {
            border-radius: 20px;
            overflow: hidden;
            width: 100%;
            height: 100%;
        }
        .sisi-btn-content {
            min-height: 250px;
            height: auto;
        }
        .sisi-btn-content .image-item {
            min-height: 250px;
            height: auto;
        }
        .dropzone .dz-preview:hover .dz-image img {
            -webkit-transform: scale(1.05, 1.05);
            -moz-transform: scale(1.05, 1.05);
            -ms-transform: scale(1.05, 1.05);
            -o-transform: scale(1.05, 1.05);
            transform: scale(1.05, 1.05);
            -webkit-filter: blur(0px);
            filter: blur(0px); }

        .layui-table tr:hover, .layui-table[lay-even] tr:nth-child(even) {
            background-color: transparent !important;
        }

        .foxdou-body {
            bottom: 0px !important;
        }
        .layui-tab-content {
            padding: 0;
        }

        .layui-tab {
            margin: 0 !important;
        }
        .hljs {
            margin: 10px 0px 10px 20px;
            background-color: #f1eff0 ;
        }
    </style>
</head>

<body>

<div class=\"foxdou-box\">
    <div class=\"foxdou-header\">
        <div class=\"foxdou-top\">
            <div class=\"\"></div>
            <div class=\"foxdou-link\">
                <ul class=\"layui-nav layui-layout-left\">
                    <li class=\"layui-nav-item  layui-this\">
                        <a href=\"{{ current_path }}\">SimpleForm 表单组件使用说明</a>
                    </li>
                </ul>
            </div>

            <ul class=\"layui-nav layui-layout-right foxdou-nav-user\">
                <li class=\"layui-nav-item\">
                </li>
            </ul>

        </div>
    </div>

    <div class=\"foxdou-side\">
        <div class=\"layui-side-scroll\" data-path=\"{{ current_path }}\">
            <ul class=\"layui-nav layui-nav-tree\">
                <li class=\"layui-nav-item layui-this\">
                    <a href=\"{{ current_path }}\">
                        <i class=\"layui-icon\"></i>
                        <cite>首页</cite>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class=\"foxdou-body\">
        <div class=\"\">
            <div class=\"layui-tab layui-tab-card\">

                {% set tabs = {
                    'index': '使用说明',
                    'helpers': '助手函数说明',
                    'validators': '验证器列表',
                    'transformers': '转换器列表',
                    'default': '默认表单布局',
                    'full_row': '整行表单布局',
                    'custom_form': '自定义表单属性',
                    'full_custom': '完全自定义表单布局',
                    'inline_with_dynamic_table': '行内横排 + LayUI动态表格',
                } %}

                {% set current_page  = app.request.get('page')|default('') %}
                <ul class=\"layui-tab-title\">

                    {% for id, name in tabs %}
                        <li class=\"{{ id == current_page ? 'layui-this' : '' }}\"><a href=\"{{ path('simple_form_demo_show', {'page': id}) }}\">{{ name }}</a></li>
                    {% endfor %}
                </ul>
                <div class=\"layui-tab-content\">
                    {% for id, name in tabs %}
                        <div class=\"layui-tab-item {{ id == current_page ? 'layui-show' : '' }}\" data-title=\"{{ name }}\">
                            {% if id == current_page %}
                            {% block page_content %}{% endblock %}
                            {% endif %}
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
</div>


{{ use_assets([
    '/assets/common/layui/layui.all.js',
    '/assets/common/js/jquery.serializejson.js',
    '/assets/common/js/common-verify.js',
]) }}


{% include \"/Common/Common/dropzone.twig\" %}

<script type=\"text/javascript\">
    // layui.element.render();

    var UPLOAD_URL     = \"{{ path('test_upload') }}\";
    var DELETE_URL     = \"{{ url('common_file_upload_delete') }}\";
    var existingCovers = [{'id': '34312312321', 'url': '{{ asset('/assets/common/img/default-avatar.jpg') }}'}];

    \$(document).ready(function () {
        function success(zoneId, file, response) {
            console.log('success called', file, response);
        }
        function failure(zoneId, file, response) {
            console.log('failure called', file, response);
        }

        var allow_upload = true;
        setup_upload_form('dropzone_avatar', UPLOAD_URL, DELETE_URL, existingCovers, success, failure, allow_upload);
    });

</script>

</body>
</html>", "/Test/SimpleFormDemo/layout.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Test\\SimpleFormDemo\\layout.twig");
    }
}
