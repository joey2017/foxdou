<?php

/* Common/Common/dropzone.twig */
class __TwigTemplate_ab45b2e975c8fee57c2c6781fd85fcac7b43eb339c4eb7e0c7e9af9495382ee3 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/Common/dropzone.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/Common/dropzone.twig"));

        // line 1
        echo $this->extensions['App\Common\Twig\AppExtension']->useAssets(array(0 => "/assets/common/components/dropzone/dropzone.js", 1 => "/assets/common/components/dropzone/dropzone.css"));
        // line 4
        echo "

";
        // line 7
        echo "    ";
        // line 8
        echo "        ";
        // line 9
        echo "    ";
        // line 10
        echo "    ";
        // line 11
        echo "    ";
        // line 12
        echo "    ";
        // line 13
        echo "    ";
        // line 14
        echo "
<div id=\"dz-preview-template\">
    <div class=\"dz-preview dz-file-preview\">
        <div class=\"dz-image\">
            <img data-dz-thumbnail/>
        </div>
        <div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress></span></div>
        <div class=\"dz-success-mark\"></div>
        <div class=\"dz-error-mark\"></div>
        <div class=\"dz-error-message\"><span data-dz-errormessage></span></div>
    </div>
</div>

<script>
    ";
        // line 29
        echo "    ";
        // line 30
        echo "
    ";
        // line 35
        echo "
    var dictMaxFilesExceeded = '最多上传 {{maxFiles}} 个文件';
    var dictFileTooBig = \"你上传的文件太大 ({{filesize}}MiB)，最大文件大小为: {{maxFilesize}}MiB.\";
    var dictResponseError = \"服务器错误，状态码： {{statusCode}}\";
    ";
        echo "

    Dropzone.autoDiscover = false;
    function setup_upload_form(zoneId, uploadUrl, deleteUrl, existingCovers, successCallback, failureCallback, allowUpload) {
        \$('#' + zoneId).dropzone({
            url:                  uploadUrl,
            acceptedFiles:        \"image/jpeg, image/png, image/gif, image/bmp\",
            addRemoveLinks:       true,
            uploadMultiple:       true,
            parallelUploads:      1,
            maxFiles:             2,
            method:               'post',

            dictDefaultMessage: \"点击这里，或者拖放文件到这里来上传\",
            dictFallbackMessage:  '你的浏览器版本过低，不支持拖放文件上传，建议使用谷歌浏览器或者 360 安全浏览器',
            dictFallbackText: \"你的浏览器版本过低，建议使用谷歌浏览器或者 360 安全浏览器\",
            dictFileTooBig: dictFileTooBig,
            dictInvalidFileType:  '不支持的文件类型',
            dictResponseError: dictResponseError,
            dictCancelUpload: \"取消上传\",
            dictUploadCanceled: \"上传已经取消\",
            dictCancelUploadConfirmation: \"确定要终止上传这个文件吗？\",
            dictRemoveFile:       '删除',
            dictRemoveFileConfirmation: null,
            dictMaxFilesExceeded: dictMaxFilesExceeded,

            previewTemplate:      document.querySelector('#dz-preview-template').innerHTML,
            init:                 function () {
                var self = this;
                if (existingCovers) {
                    \$.each(existingCovers, function (key, cover) {
                        if (!cover) {
                            return;
                        }

                        var mockFile = {
                            id:     cover.id,
                            name:   cover.name,
                            size:   cover.size,
                            // type: cover.type,
                            status: Dropzone.ADDED,
                            url:    cover.url
                        };

                        // Call the default addedfile event handler
                        self.emit(\"addedfile\", mockFile);
                        // And optionally show the thumbnail of the file:
                        self.emit(\"thumbnail\", mockFile, mockFile.url);
                        self.emit(\"complete\", mockFile);
                        self.files.push(mockFile);
                    });

                    this._updateMaxFilesReachedClass();
                }

                if(!allowUpload) {
                    this.removeEventListeners();
                }

                this.on(\"sending\", function(file, xhr, formData){
                    formData.append(\"zone_id\", zoneId);
                });
            },
            success:              function (file, response) {
                var previewElement = \$(file.previewElement);
                if (response['success']) {
                    file.previewElement.classList.add(\"dz-success\");
                    previewElement.data('file_id', response['id']);
                    if (successCallback) {
                        successCallback(zoneId, file, response);
                    }
                    console.log(\"Successfully uploaded :\" + response);
                } else {
                    console.log(\"upload failed :\" + response);
                    var error = response['message'] ? response['message'] : '上传失败';
                    layer.msg(error);
                    this.emit('error', file, error);
                    this.removeFile(file);

                    if (failureCallback) {
                        failureCallback(zoneId, file, response);
                    }
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
            removedfile:          function (file) {
                var previewElement = \$(file.previewElement);
                var fileId         = previewElement.data('file_id');
                if (!fileId) {
                    previewElement.remove();
                    return;
                }

                var data = {file_id: fileId};
                \$.post(deleteUrl, data, function (result) {
                    if (result.status) {
                        previewElement.remove();
                    } else {
                        var error = result.msg ? result.msg : '删除失败';
                        layer.msg(error);
                        previewElement.children('.dz-error-message').children('span').html(error);
                    }
                });
            }
        });
    }

</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/Common/dropzone.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 35,  67 => 30,  65 => 29,  49 => 14,  47 => 13,  45 => 12,  43 => 11,  41 => 10,  39 => 9,  37 => 8,  35 => 7,  31 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ use_assets([
'/assets/common/components/dropzone/dropzone.js',
'/assets/common/components/dropzone/dropzone.css',
]) }}

{#<div class=\"dz-preview dz-complete dz-image-preview\">#}
    {#<div class=\"dz-image\">#}
        {#<img data-dz-thumbnail=\"\" alt=\"undefined\" src=\"http://foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/safe/img/u3908.png\">#}
    {#</div>#}
    {#<div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress=\"\"></span></div>#}
    {#<div class=\"dz-error-message\"><span data-dz-errormessage=\"\"></span></div>#}
    {#<div class=\"dz-success-mark\"></div>#}
    {#<div class=\"dz-error-mark\"></div>#}

<div id=\"dz-preview-template\">
    <div class=\"dz-preview dz-file-preview\">
        <div class=\"dz-image\">
            <img data-dz-thumbnail/>
        </div>
        <div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress></span></div>
        <div class=\"dz-success-mark\"></div>
        <div class=\"dz-error-mark\"></div>
        <div class=\"dz-error-message\"><span data-dz-errormessage></span></div>
    </div>
</div>

<script>
    {#var UPLOAD_URL     = \"{{ oneup_uploader_endpoint('default') }}\";#}
    {#var DELETE_URL     = \"{{ url('admin_file_upload_delete') }}\";#}

    {% verbatim %}
    var dictMaxFilesExceeded = '最多上传 {{maxFiles}} 个文件';
    var dictFileTooBig = \"你上传的文件太大 ({{filesize}}MiB)，最大文件大小为: {{maxFilesize}}MiB.\";
    var dictResponseError = \"服务器错误，状态码： {{statusCode}}\";
    {% endverbatim %}

    Dropzone.autoDiscover = false;
    function setup_upload_form(zoneId, uploadUrl, deleteUrl, existingCovers, successCallback, failureCallback, allowUpload) {
        \$('#' + zoneId).dropzone({
            url:                  uploadUrl,
            acceptedFiles:        \"image/jpeg, image/png, image/gif, image/bmp\",
            addRemoveLinks:       true,
            uploadMultiple:       true,
            parallelUploads:      1,
            maxFiles:             2,
            method:               'post',

            dictDefaultMessage: \"点击这里，或者拖放文件到这里来上传\",
            dictFallbackMessage:  '你的浏览器版本过低，不支持拖放文件上传，建议使用谷歌浏览器或者 360 安全浏览器',
            dictFallbackText: \"你的浏览器版本过低，建议使用谷歌浏览器或者 360 安全浏览器\",
            dictFileTooBig: dictFileTooBig,
            dictInvalidFileType:  '不支持的文件类型',
            dictResponseError: dictResponseError,
            dictCancelUpload: \"取消上传\",
            dictUploadCanceled: \"上传已经取消\",
            dictCancelUploadConfirmation: \"确定要终止上传这个文件吗？\",
            dictRemoveFile:       '删除',
            dictRemoveFileConfirmation: null,
            dictMaxFilesExceeded: dictMaxFilesExceeded,

            previewTemplate:      document.querySelector('#dz-preview-template').innerHTML,
            init:                 function () {
                var self = this;
                if (existingCovers) {
                    \$.each(existingCovers, function (key, cover) {
                        if (!cover) {
                            return;
                        }

                        var mockFile = {
                            id:     cover.id,
                            name:   cover.name,
                            size:   cover.size,
                            // type: cover.type,
                            status: Dropzone.ADDED,
                            url:    cover.url
                        };

                        // Call the default addedfile event handler
                        self.emit(\"addedfile\", mockFile);
                        // And optionally show the thumbnail of the file:
                        self.emit(\"thumbnail\", mockFile, mockFile.url);
                        self.emit(\"complete\", mockFile);
                        self.files.push(mockFile);
                    });

                    this._updateMaxFilesReachedClass();
                }

                if(!allowUpload) {
                    this.removeEventListeners();
                }

                this.on(\"sending\", function(file, xhr, formData){
                    formData.append(\"zone_id\", zoneId);
                });
            },
            success:              function (file, response) {
                var previewElement = \$(file.previewElement);
                if (response['success']) {
                    file.previewElement.classList.add(\"dz-success\");
                    previewElement.data('file_id', response['id']);
                    if (successCallback) {
                        successCallback(zoneId, file, response);
                    }
                    console.log(\"Successfully uploaded :\" + response);
                } else {
                    console.log(\"upload failed :\" + response);
                    var error = response['message'] ? response['message'] : '上传失败';
                    layer.msg(error);
                    this.emit('error', file, error);
                    this.removeFile(file);

                    if (failureCallback) {
                        failureCallback(zoneId, file, response);
                    }
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
            removedfile:          function (file) {
                var previewElement = \$(file.previewElement);
                var fileId         = previewElement.data('file_id');
                if (!fileId) {
                    previewElement.remove();
                    return;
                }

                var data = {file_id: fileId};
                \$.post(deleteUrl, data, function (result) {
                    if (result.status) {
                        previewElement.remove();
                    } else {
                        var error = result.msg ? result.msg : '删除失败';
                        layer.msg(error);
                        previewElement.children('.dz-error-message').children('span').html(error);
                    }
                });
            }
        });
    }

</script>", "Common/Common/dropzone.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Common\\Common\\dropzone.twig");
    }
}
