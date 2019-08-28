<?php

/* Admin/SystemAdministration/Article/edit.twig */
class __TwigTemplate_0cf8f865579c8ebf8400ccb8a8e8b512a71c4293a6edd5e52cc444b1613992f1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/Admin/Common/layout.twig", "Admin/SystemAdministration/Article/edit.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'main_content' => array($this, 'block_main_content'),
            'js_end' => array($this, 'block_js_end'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/Admin/Common/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/Article/edit.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/Article/edit.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Admin/SystemAdministration/Article/edit.twig", 2);
        // line 4
        $context["title"] = "编辑 - 文章管理";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 7
        echo "    <style>
        .inner_portal_id, .inner_cate_id, .inner_source {width: 120px !important;}
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 13
        echo "    <div class=\"layui-fluid\">
        <div class=\"layui-card\">
            <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
                <h1>";
        // line 16
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), "id", array()), "value", array())) ? ("编辑文章") : ("新增文章"));
        echo "</h1>
            </div>
            <div class=\"layui-card-body\">
                <form class=\"layui-form\" id=\"form\" lay-filter=\"form\">
                    <div class=\"layui-fluid\">
                        <div class=\"layui-row\">
                            <div class=\"layui-col-md9\">
                                    <div class=\"layui-row\">
                                        <div class=\"layui-form-item\">
                                        ";
        // line 25
        echo $context["sf"]->macro_select(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "portal_id", array()), "平台", $this->extensions['App\Common\Twig\AppExtension']->toOptions("App\\Platform::PLATFORMS", "平台"), array("outer" => null), array("id" => "all_portals", " lay-filter" => "portal_id"));
        echo "
                                        ";
        // line 26
        echo $context["sf"]->macro_select(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "cate_id", array()), "类别", $this->extensions['App\Common\Twig\AppExtension']->toOptions(array(), "类别"), array("outer" => null));
        echo "
                                        ";
        // line 27
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "source", array()), "文章来源", array("outer" => null));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"layui-row\">
                                        <div class=\"layui-form-item\">
                                        ";
        // line 32
        echo $context["sf"]->macro_textarea(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "abstract", array()), "摘要", array("outer" => null), array("placeholder" => "请输入文章的摘要，200字以内", "style" => "height: 70px;min-height: 50px;"));
        echo "
                                        </div>
                                    </div>

                            </div>
                            <div class=\"layui-col-md3\">
                                <div class=\"layui-form-item\" style=\"width: 350px;\">
                                    <label class=\"layui-form-label\">题图</label>
                                    <div class=\"layui-input-inline\" style=\"text-align: left;font-size: 9pt;\">
                                        <div id=\"dropzone\" class=\"dropzone\" style=\"width: 170px; \">
                                            <div class=\"dz-message needsclick\">
                                                <h3>点击这里<br>或拖图片到这里来上传</h3><br>
                                                <span class=\"note needsclick\">最多能上传 1 个文件<br>最大 ";
        // line 44
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->extensions['App\Common\Twig\AppExtension']->getParams("admin_article_max_upload_file_size") / 1024) / 1024), 1), "html", null, true);
        echo "
                                                    MiB</span>
                                            </div>
                                        </div>

                                        ";
        // line 49
        echo $context["sf"]->macro_hidden(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->source); })()), "cover_image_id", array()));
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    ";
        // line 56
        echo $context["sf"]->macro_text(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->source); })()), "title", array()), "标题", array("inner" => "block"));
        echo "
                    ";
        // line 57
        echo $context["sf"]->macro_textarea(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "content", array()), "摘要", array(), array("id" => "content", "placeholder" => "请输入文章内容", "style" => "height: 0px;min-height: 0px;"));
        echo "
                    ";
        // line 58
        echo $context["sf"]->macro_checkbox(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "published", array()), "标题", array("1" => "已发布"), array(), array("lay-skin" => "switch", "lay-text" => "已发布|未发布"));
        echo "

                    ";
        // line 60
        echo $context["sf"]->macro_rest((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->source); })()));
        echo "
                    <div class=\"layui-form-item\">
                        <label class=\"layui-form-label\"></label>
                        <div class=\"layui-input-block\">
                            <button type=\"button\" class=\"layui-btn layui-btn-normal\" onclick=\"save_article(false);\">保存</button>
                            <button type=\"button\" class=\"layui-btn layui-btn-normal\" onclick=\"save_article(true);\">保存后新建</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_js_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_end"));

        // line 76
        echo "    ";
        echo $this->extensions['App\Common\Twig\AppExtension']->useAssets(array(0 => "/assets/common/components/tinymce/tinymce.min.js", 1 => "/assets/common/components/dropzone/dropzone.js", 2 => "/assets/common/components/dropzone/dropzone.css", 3 => "/assets/common/js/common-verify.js", 4 => "/assets/common/css/font-icon.css"));
        // line 82
        echo "

    <script>
        var UPLOAD_URL     = \"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Oneup\UploaderBundle\Twig\Extension\UploaderExtension']->endpoint("admin_article"), "html", null, true);
        echo "\";
        var DELETE_URL     = \"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_file_upload_delete");
        echo "\";
        var existingCovers = [";
        // line 87
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 87, $this->source); })()), "get_cover_image_info", array(0 => true), "method"));
        echo "];

        ";
        // line 173
        echo "
        Dropzone.autoDiscover = false;
        \$(document).ready(function () {
            \$(\"#dropzone\").dropzone({
                url: UPLOAD_URL,
                acceptedFiles: \"image/jpeg, image/png, image/gif, image/bmp\",
                addRemoveLinks: true,
                uploadMultiple: true,
                parallelUploads: 1,
                maxFiles: 2,
                method: 'post',
                dictInvalidFileType: '不支持的文件类型',
                dictFallbackMessage: '你的浏览器版本过低，不支持上传文件，建议使用谷歌浏览器或者 360 安全浏览器',
                dictRemoveFile: '删除',
                dictMaxFilesExceeded: '最多上传 {{maxFiles}} 个文件',
                init: function() {
                    var self = this;
                    if (existingCovers) {
                        \$.each(existingCovers, function(key, cover) {
                            if(!cover) {
                                return;
                            }

                            var mockFile = {
                                id: cover.id,
                                name: cover.name,
                                size: cover.size,
                                // type: cover.type,
                                status: Dropzone.ADDED,
                                url: cover.url
                            };

                            // Call the default addedfile event handler
                            self.emit(\"addedfile\", mockFile);
                            // And optionally show the thumbnail of the file:
                            self.emit(\"thumbnail\", mockFile, mockFile.url);
                            self.emit(\"complete\", mockFile);
                            self.files.push(mockFile);
                        });
                    }

                },
                success:        function (file, response) {
                    var previewElement = \$(file.previewElement);
                    if(response['success']) {
                        file.previewElement.classList.add(\"dz-success\");
                        previewElement.data('file_id', response['id']);
                        \$('#cover_image_id').val(response['id']);
                        console.log(\"Successfully uploaded :\" + response);
                    } else {
                        console.log(\"upload failed :\" + response);
                        var error = response['error'] ? response['error'] : '上传失败';
                        // previewElement.children('.dz-error-message').children('span').html(errorMessage)
                        this.emit('error', file, error);
                    }
                },
                // addedfile: function(file, abc) {
                //     var previewElement = \$(file.previewElement);
                //     previewElement.data('file_id', file.id);
                // },
                // error: function(file, errorMessage) {
                //     var previewElement = \$(file.previewElement);
                //     previewElement.children('.dz-error-message').children('span').html(errorMessage)
                // },
                removedfile: function(file) {
                    var previewElement = \$(file.previewElement);
                    var fileId = previewElement.data('file_id');
                    if(!fileId) {
                        previewElement.remove();
                        return;
                    }

                    \$.post(DELETE_URL, {file_id: fileId}, function(result) {
                        if(result.status) {
                            previewElement.remove();
                        } else {
                            var error = result.msg ? result.msg : '删除失败';
                            layer.msg(error);
                            previewElement.children('.dz-error-message').children('span').html(error)
                        }
                    })
                }
            });
        });
        ";
        echo "

        function save_article(saveAndContinue) {
            tinymce.triggerSave();

            var data = \$('#form').serialize();

            \$.post('";
        // line 180
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_articles_save");
        echo "', data, function (result) {
                if (result.msg) {
                    layer.msg(result.msg);
                }

                if (result.status) {
                    if (saveAndContinue) {
                        window.location = '";
        // line 187
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_articles_edit");
        echo "';
                    }

                    if (result.id) {
                        \$('#id').val(result.id);
                    }

                    return;
                }

                if (result.errors) {
                    \$.each(result.errors, function (key, errorMsg) {
                        createAlertMsg(\$('#' + key), errorMsg, false);
                    });
                }
            });
        }

        \$(document).ready(function () {
            tinymce.init({
                selector:           '#content',
                theme:              \"modern\",
                width:              'auto',
                height:             300,
                menubar:            false,
                font_formats:       \"微软雅黑=微软雅黑;宋体=宋体;黑体=黑体;仿宋=仿宋;楷体=楷体;隶书=隶书;幼圆=幼圆;Courier New=courier new,courier,monospace;\",
                language:           'zh_CN',
                branding:           false,
                content_css:        \"";
        // line 215
        echo $this->extensions['App\Common\Twig\AppExtension']->getAssetUrl("/assets/common/layui/css/layui.css");
        echo "\",
                plugins:            [
                    \"autolink link image lists charmap preview hr anchor pagebreak\",
                    \"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime nonbreaking\",
                    \"table contextmenu paste textcolor imagetools\"
                ],
                toolbar:            \"undo redo | styleselect fontselect fontsizeselect  | bold italic underline |  forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent  insert | table link image editimage  | preview\",
                file_picker_types:  'image',
                images_upload_url:  UPLOAD_URL, //'";
        // line 223
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_articles_upload_images");
        echo "',
                relative_urls:      false,
                remove_script_host: false,
                convert_urls:       true,
                automatic_uploads:  true
                // file_browser_callback: function(field_name, url, type, win) {
                //     win.document.getElementById(field_name).value = 'my browser value';
                // }
            });
        });

        function choose_file() {
            \$('#images').click();
        }

        function view_article_popup(id, title) {
            var url = '";
        // line 239
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("common_articles_view");
        echo "?id=' + id;
            layer.open({
                type:       2,
                title:      title,
                shadeClose: true,
                shade:      0.8,
                area:       ['800px', '90%'],
                content:    url
            });
        }

        function get_categories(portalId) {
            \$.getJSON(\"";
        // line 251
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_articles_categories");
        echo ".json?portal_id=\" + portalId, function (data) {
                var optionstring = \"\";
                \$.each(data.data, function (i, item) {
                    optionstring += \"<option value=\\\"\" + item.id + \"\\\" >\" + item.name + \"</option>\";
                });
                \$(\"#cate_id\").html('<option value=\"\"></option>' + optionstring);
                form.render('select'); //这个很重要

                form.val('form', {cate_id: '";
        // line 259
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 259, $this->source); })()), "cate_id", array()), "value", array()), "html", null, true);
        echo "'});
            });
        }

        layui.form.on('select(portal_id)', function (data) {
            get_categories(data.value);
        });

        get_categories(\"";
        // line 267
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 267, $this->source); })()), "portal_id", array()), "value", array()), "html", null, true);
        echo "\");

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/SystemAdministration/Article/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 267,  406 => 259,  395 => 251,  380 => 239,  361 => 223,  350 => 215,  319 => 187,  309 => 180,  215 => 173,  210 => 87,  206 => 86,  202 => 85,  197 => 82,  194 => 76,  185 => 75,  161 => 60,  156 => 58,  152 => 57,  148 => 56,  138 => 49,  130 => 44,  115 => 32,  107 => 27,  103 => 26,  99 => 25,  87 => 16,  82 => 13,  73 => 12,  60 => 7,  51 => 6,  41 => 1,  39 => 4,  37 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ('/Admin/Common/layout.twig') %}
{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

{% set title = '编辑 - 文章管理' %}

{% block css %}
    <style>
        .inner_portal_id, .inner_cate_id, .inner_source {width: 120px !important;}
    </style>
{% endblock %}

{% block main_content %}
    <div class=\"layui-fluid\">
        <div class=\"layui-card\">
            <div class=\"layui-form layui-form-pane layui-card-header layuiadmin-card-header-auto\">
                <h1>{{ form.id.value ? '编辑文章' : '新增文章' }}</h1>
            </div>
            <div class=\"layui-card-body\">
                <form class=\"layui-form\" id=\"form\" lay-filter=\"form\">
                    <div class=\"layui-fluid\">
                        <div class=\"layui-row\">
                            <div class=\"layui-col-md9\">
                                    <div class=\"layui-row\">
                                        <div class=\"layui-form-item\">
                                        {{ sf.select(form.portal_id, '平台', to_options('App\\\\Platform::PLATFORMS', \"平台\"), {'outer': null}, {'id': 'all_portals', ' lay-filter': \"portal_id\"}) }}
                                        {{ sf.select(form.cate_id, '类别', to_options({}, \"类别\"), {'outer': null}) }}
                                        {{ sf.text(form.source, '文章来源', {'outer': null}) }}
                                        </div>
                                    </div>
                                    <div class=\"layui-row\">
                                        <div class=\"layui-form-item\">
                                        {{ sf.textarea(form.abstract, '摘要', {'outer': null}, {'placeholder': '请输入文章的摘要，200字以内', 'style': 'height: 70px;min-height: 50px;'}) }}
                                        </div>
                                    </div>

                            </div>
                            <div class=\"layui-col-md3\">
                                <div class=\"layui-form-item\" style=\"width: 350px;\">
                                    <label class=\"layui-form-label\">题图</label>
                                    <div class=\"layui-input-inline\" style=\"text-align: left;font-size: 9pt;\">
                                        <div id=\"dropzone\" class=\"dropzone\" style=\"width: 170px; \">
                                            <div class=\"dz-message needsclick\">
                                                <h3>点击这里<br>或拖图片到这里来上传</h3><br>
                                                <span class=\"note needsclick\">最多能上传 1 个文件<br>最大 {{ (params('admin_article_max_upload_file_size')/1024/1024)|number_format(1) }}
                                                    MiB</span>
                                            </div>
                                        </div>

                                        {{ sf.hidden(form.cover_image_id) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{ sf.text(form.title, '标题', {'inner': 'block'}) }}
                    {{ sf.textarea(form.content, '摘要', {}, {'id': 'content', 'placeholder': '请输入文章内容', 'style': 'height: 0px;min-height: 0px;'}) }}
                    {{ sf.checkbox(form.published, '标题', {'1': '已发布'}, {}, {'lay-skin': 'switch', 'lay-text': '已发布|未发布'}) }}

                    {{ sf.rest(form) }}
                    <div class=\"layui-form-item\">
                        <label class=\"layui-form-label\"></label>
                        <div class=\"layui-input-block\">
                            <button type=\"button\" class=\"layui-btn layui-btn-normal\" onclick=\"save_article(false);\">保存</button>
                            <button type=\"button\" class=\"layui-btn layui-btn-normal\" onclick=\"save_article(true);\">保存后新建</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
{% endblock %}

{% block js_end %}
    {{ use_assets([
    '/assets/common/components/tinymce/tinymce.min.js',
    '/assets/common/components/dropzone/dropzone.js',
    '/assets/common/components/dropzone/dropzone.css',
    '/assets/common/js/common-verify.js',
    '/assets/common/css/font-icon.css',
    ]) }}

    <script>
        var UPLOAD_URL     = \"{{ oneup_uploader_endpoint('admin_article') }}\";
        var DELETE_URL     = \"{{ url('admin_file_upload_delete') }}\";
        var existingCovers = [{{ article.get_cover_image_info(true)|json_encode|raw }}];

        {% verbatim %}
        Dropzone.autoDiscover = false;
        \$(document).ready(function () {
            \$(\"#dropzone\").dropzone({
                url: UPLOAD_URL,
                acceptedFiles: \"image/jpeg, image/png, image/gif, image/bmp\",
                addRemoveLinks: true,
                uploadMultiple: true,
                parallelUploads: 1,
                maxFiles: 2,
                method: 'post',
                dictInvalidFileType: '不支持的文件类型',
                dictFallbackMessage: '你的浏览器版本过低，不支持上传文件，建议使用谷歌浏览器或者 360 安全浏览器',
                dictRemoveFile: '删除',
                dictMaxFilesExceeded: '最多上传 {{maxFiles}} 个文件',
                init: function() {
                    var self = this;
                    if (existingCovers) {
                        \$.each(existingCovers, function(key, cover) {
                            if(!cover) {
                                return;
                            }

                            var mockFile = {
                                id: cover.id,
                                name: cover.name,
                                size: cover.size,
                                // type: cover.type,
                                status: Dropzone.ADDED,
                                url: cover.url
                            };

                            // Call the default addedfile event handler
                            self.emit(\"addedfile\", mockFile);
                            // And optionally show the thumbnail of the file:
                            self.emit(\"thumbnail\", mockFile, mockFile.url);
                            self.emit(\"complete\", mockFile);
                            self.files.push(mockFile);
                        });
                    }

                },
                success:        function (file, response) {
                    var previewElement = \$(file.previewElement);
                    if(response['success']) {
                        file.previewElement.classList.add(\"dz-success\");
                        previewElement.data('file_id', response['id']);
                        \$('#cover_image_id').val(response['id']);
                        console.log(\"Successfully uploaded :\" + response);
                    } else {
                        console.log(\"upload failed :\" + response);
                        var error = response['error'] ? response['error'] : '上传失败';
                        // previewElement.children('.dz-error-message').children('span').html(errorMessage)
                        this.emit('error', file, error);
                    }
                },
                // addedfile: function(file, abc) {
                //     var previewElement = \$(file.previewElement);
                //     previewElement.data('file_id', file.id);
                // },
                // error: function(file, errorMessage) {
                //     var previewElement = \$(file.previewElement);
                //     previewElement.children('.dz-error-message').children('span').html(errorMessage)
                // },
                removedfile: function(file) {
                    var previewElement = \$(file.previewElement);
                    var fileId = previewElement.data('file_id');
                    if(!fileId) {
                        previewElement.remove();
                        return;
                    }

                    \$.post(DELETE_URL, {file_id: fileId}, function(result) {
                        if(result.status) {
                            previewElement.remove();
                        } else {
                            var error = result.msg ? result.msg : '删除失败';
                            layer.msg(error);
                            previewElement.children('.dz-error-message').children('span').html(error)
                        }
                    })
                }
            });
        });
        {% endverbatim %}

        function save_article(saveAndContinue) {
            tinymce.triggerSave();

            var data = \$('#form').serialize();

            \$.post('{{ path('admin_system_administration_articles_save') }}', data, function (result) {
                if (result.msg) {
                    layer.msg(result.msg);
                }

                if (result.status) {
                    if (saveAndContinue) {
                        window.location = '{{ path('admin_system_administration_articles_edit') }}';
                    }

                    if (result.id) {
                        \$('#id').val(result.id);
                    }

                    return;
                }

                if (result.errors) {
                    \$.each(result.errors, function (key, errorMsg) {
                        createAlertMsg(\$('#' + key), errorMsg, false);
                    });
                }
            });
        }

        \$(document).ready(function () {
            tinymce.init({
                selector:           '#content',
                theme:              \"modern\",
                width:              'auto',
                height:             300,
                menubar:            false,
                font_formats:       \"微软雅黑=微软雅黑;宋体=宋体;黑体=黑体;仿宋=仿宋;楷体=楷体;隶书=隶书;幼圆=幼圆;Courier New=courier new,courier,monospace;\",
                language:           'zh_CN',
                branding:           false,
                content_css:        \"{{ asset('/assets/common/layui/css/layui.css') }}\",
                plugins:            [
                    \"autolink link image lists charmap preview hr anchor pagebreak\",
                    \"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime nonbreaking\",
                    \"table contextmenu paste textcolor imagetools\"
                ],
                toolbar:            \"undo redo | styleselect fontselect fontsizeselect  | bold italic underline |  forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent  insert | table link image editimage  | preview\",
                file_picker_types:  'image',
                images_upload_url:  UPLOAD_URL, //'{{ path('admin_system_administration_articles_upload_images') }}',
                relative_urls:      false,
                remove_script_host: false,
                convert_urls:       true,
                automatic_uploads:  true
                // file_browser_callback: function(field_name, url, type, win) {
                //     win.document.getElementById(field_name).value = 'my browser value';
                // }
            });
        });

        function choose_file() {
            \$('#images').click();
        }

        function view_article_popup(id, title) {
            var url = '{{ url('common_articles_view') }}?id=' + id;
            layer.open({
                type:       2,
                title:      title,
                shadeClose: true,
                shade:      0.8,
                area:       ['800px', '90%'],
                content:    url
            });
        }

        function get_categories(portalId) {
            \$.getJSON(\"{{ path('admin_system_administration_articles_categories') }}.json?portal_id=\" + portalId, function (data) {
                var optionstring = \"\";
                \$.each(data.data, function (i, item) {
                    optionstring += \"<option value=\\\"\" + item.id + \"\\\" >\" + item.name + \"</option>\";
                });
                \$(\"#cate_id\").html('<option value=\"\"></option>' + optionstring);
                form.render('select'); //这个很重要

                form.val('form', {cate_id: '{{ form.cate_id.value }}'});
            });
        }

        layui.form.on('select(portal_id)', function (data) {
            get_categories(data.value);
        });

        get_categories(\"{{ form.portal_id.value }}\");

    </script>
{% endblock %}
", "Admin/SystemAdministration/Article/edit.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\SystemAdministration\\Article\\edit.twig");
    }
}
