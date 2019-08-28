<?php

/* Admin/SystemAdministration/Logging/trace.twig */
class __TwigTemplate_f357de542f683db5215297baf1dcdd9ce49e5562568fbcaa003731466b4c53f2 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/Logging/trace.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/SystemAdministration/Logging/trace.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <title>操作时间线</title>
  <meta name=\"renderer\" content=\"webkit\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  <link rel=\"shortcut icon\" href=\"favicon.ico\">
  ";
        // line 10
        echo $this->extensions['App\Common\Twig\AppExtension']->useAssets(array(0 => "/assets/admin/h/css/bootstrap.min14ed.css", 1 => "/assets/admin/h/css/font-awesome.min93e3.css", 2 => "/assets/admin/h/css/plugins/dataTables/dataTables.bootstrap.css", 3 => "/assets/admin/h/css/style.min862f.css", 4 => "/assets/common/layui/css/layui.css"));
        // line 16
        echo "
  <style>
    .f-col {}
    .f-col p {margin-bottom: 5px;}
    .f-col h5 {font-size: 14px; color: #18B27E;}
  </style>
</head>
<body class=\"gray-bg\">
<div class=\"wrapper wrapper-content animated fadeInRight\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"ibox float-e-margins\">
        <div class=\"ibox-title\">
          <h5>管理员-日志
            <small>全部</small>
          </h5>
        </div>
        <form action=\"\" method=\"get\" id=\"search-form\">
          <input type=\"hidden\" name=\"id\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "\">
          <input type=\"hidden\" name=\"user_id\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["user_id"]) || array_key_exists("user_id", $context) ? $context["user_id"] : (function () { throw new Twig_Error_Runtime('Variable "user_id" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\">
          <input type=\"hidden\" name=\"direction\" value=\"1\">
        </form>

        <div class=\"ibox-content\">
          <button class=\"btn btn-success\" id=\"show-abstract\">显示摘要</button>
          <button class=\"btn btn-success\" id=\"show-up\">向上显示</button>
          <button class=\"btn btn-info\" id=\"fixed-btn-return-top\" style=\"position: fixed;top: 370px;right: 0px;z-index: 200\">
            回顶部
          </button>
          <ul class=\"layui-timeline\" id=\"line-box\"></ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"layui-timeline-item\" id=\"template-li-admin-list\" style=\"display: none;\">
  <i class=\"layui-icon layui-timeline-axis\"></i>
  <div class=\"layui-timeline-content layui-text\">
    <h3 class=\"layui-timeline-title\"></h3>
    <div class=\"f-col\">
      <table class=\"layui-table\" lay-size=\"sm\" style=\"width: 100%;\">
        <tr>
          <td style=\"width: 150px;\">操作时间</td><td><span class=\"detail-add_time\"></span></td>
        </tr>
        <tr>
          <td>事件简述</td><td><span class=\"detail-info\"></span></td>
        </tr>
        <tr>
          <td>事件类型</td><td><span class=\"detail-type\"></span></td>
        </tr>
        <tr>
          <td>对象类型</td><td><span class=\"detail-subject_type\">-</span></td>
        </tr>
        <tr>
          <td>对象ID</td><td><span class=\"detail-subject_id\">-</span></td>
        </tr>
        <tr>
          <td>操作IP</td><td><span class=\"detail-ip\">-</span></td>
        </tr>
        <tr>
          <td>上下文信息</td><td style=\"word-break: break-all;\"><span class=\"detail-context\"></span></td>
        </tr>
      </table>
    </div>
  </div>
</div>

  ";
        // line 85
        echo $this->extensions['App\Common\Twig\AppExtension']->useAssets(array(0 => "/assets/admin/h/js/jquery.min.js", 1 => "/assets/common/layui/layui.all.js", 2 => "/assets/admin/js/common.js", 3 => "/assets/common/js/ajaxRequest.js"));
        // line 90
        echo "

<script type=\"text/javascript\">

    // 显示摘要/显示详情
    \$(\"#show-abstract\").click(function () {
        var statushow = \$(this).attr('data-show');
        if (statushow == 'show' || typeof statushow == 'undefined') {
            \$('#line-box').find('.f-col').hide();
            \$('#template-li-admin-list').find('.f-col').hide();
            \$(this).attr('data-show', 'hidden');
            \$(this).text('显示详情');
        } else {
            \$('#line-box').find('.f-col').show();
            \$('#template-li-admin-list').find('.f-col').show();
            \$(this).attr('data-show', 'show');
            \$(this).text('显示摘要');
        }
    });

    // 向上显示
    \$('#show-up').click(function () {
        var lastid    = \$('#line-box').find('li').first().attr('data-id');
        var searchdom = \$('#search-form');
        if (typeof lastid != 'undefined') {
            searchdom.find('input[name=\"id\"]').val(lastid);
            searchdom.find('input[name=\"direction\"]').val(-1);
            get_data();
        }
    });

    get_data();

    function get_data() {
        var form    = \$('#search-form').serialize();
        var loading = null;
        var before  = function () {
            loading = layer.load();
        };
        var error   = function (res) {
            layer.close(loading);
            nxwd.showMsg('服务器未响应，请稍后重试', 'danger');
        };
        var success = function (res) {
            layer.close(loading);
            if (res.status) {
                list_data(res.data);
            } else {
                nxwd.showMsg(res.msg, 'danger');

            }
        };
        nxwd.ajaxRequest('";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_administration_logging_trace");
        echo "', 'get', form, 'json', success, before, error);
    }

    function list_data(data) {
        var i = 0;
        \$.each(data, function (k, row) {
            if (\$(\"#line-box\").find('li[data-id=\"' + row['id'] + '\"]').length == 0) {
                var dom = \$('#template-li-admin-list').clone(true);

                \$(dom).find('.layui-timeline-title').text((row['add_time'] + \"  \" + (row['ip'] || '')));
                \$(dom).find('.layui-text').append('<p>' + decodeURI(row['info'] || '') + '</p>');

                \$.each(row, function (key, value) {
                    \$(dom).find('.detail-' + key).html('<span>' + (value || '-') + '</span>');
                });

                if (\$('#search-form').find('input[name=\"direction\"]').val() == 1) {
                    \$(\"#line-box\").append('<li data-id=\"' + row['id'] + '\" class=\"layui-timeline-item\">' + \$(dom).html().toString() + '</li>');
                } else {
                    \$(\"#line-box\").prepend('<li data-id=\"' + row['id'] + '\" class=\"layui-timeline-item\">' + \$(dom).html().toString() + '</li>');
                }
            }
        });
    }


    // 绑定下拉到底事件
    function getScrollTop() {
        var scrollTop         = 0,
            bodyScrollTop     = 0,
            documentScrollTop = 0;
        if (document.body) {
            bodyScrollTop = document.body.scrollTop;
        }
        if (document.documentElement) {
            documentScrollTop = document.documentElement.scrollTop;
        }
        scrollTop = (bodyScrollTop - documentScrollTop > 0) ? bodyScrollTop : documentScrollTop;
        return scrollTop;
    }

    // 文档的总高度
    function getScrollHeight() {
        var scrollHeight         = 0,
            bodyScrollHeight     = 0,
            documentScrollHeight = 0;
        if (document.body) {
            bodyScrollHeight = document.body.scrollHeight;
        }
        if (document.documentElement) {
            documentScrollHeight = document.documentElement.scrollHeight;
        }
        scrollHeight = (bodyScrollHeight - documentScrollHeight > 0) ? bodyScrollHeight : documentScrollHeight;
        return scrollHeight;
    }

    // 浏览器视口的高度
    function getWindowHeight() {
        var windowHeight = 0;
        if (document.compatMode == \"CSS1Compat\") {
            windowHeight = document.documentElement.clientHeight;
        } else {
            windowHeight = document.body.clientHeight;
        }
        return windowHeight;
    }

    // 滚动加载
    window.onscroll = function () {
        if (getScrollTop() + getWindowHeight() >= getScrollHeight() - 10) {

            var lastid    = \$('#line-box').find('li').last().attr('data-id');
            var searchdom = \$('#search-form');
            var oldid     = searchdom.find('input[name=\"id\"]').val();
            if (typeof lastid != 'undefined' && lastid != oldid) {
                searchdom.find('input[name=\"id\"]').val(lastid);
                searchdom.find('input[name=\"direction\"]').val(1);
                get_data();
            }
        }
    };

    // 返回顶部
    \$('#fixed-btn-return-top').click(function () {
        \$(\"html,body\").animate({scrollTop: 0}, 600);
    });

    // 内容折叠和展开
    \$('#line-box').on('dblclick', '.layui-timeline-item', function () {
        \$(this).find('.f-col').toggle('fast');
    });

</script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/SystemAdministration/Logging/trace.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 142,  120 => 90,  118 => 85,  66 => 35,  62 => 34,  42 => 16,  40 => 10,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <title>操作时间线</title>
  <meta name=\"renderer\" content=\"webkit\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  <link rel=\"shortcut icon\" href=\"favicon.ico\">
  {{ use_assets([
    \"/assets/admin/h/css/bootstrap.min14ed.css\",
    \"/assets/admin/h/css/font-awesome.min93e3.css\",
    \"/assets/admin/h/css/plugins/dataTables/dataTables.bootstrap.css\",
    \"/assets/admin/h/css/style.min862f.css\",
    \"/assets/common/layui/css/layui.css\",
  ]) }}
  <style>
    .f-col {}
    .f-col p {margin-bottom: 5px;}
    .f-col h5 {font-size: 14px; color: #18B27E;}
  </style>
</head>
<body class=\"gray-bg\">
<div class=\"wrapper wrapper-content animated fadeInRight\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"ibox float-e-margins\">
        <div class=\"ibox-title\">
          <h5>管理员-日志
            <small>全部</small>
          </h5>
        </div>
        <form action=\"\" method=\"get\" id=\"search-form\">
          <input type=\"hidden\" name=\"id\" value=\"{{ id }}\">
          <input type=\"hidden\" name=\"user_id\" value=\"{{ user_id }}\">
          <input type=\"hidden\" name=\"direction\" value=\"1\">
        </form>

        <div class=\"ibox-content\">
          <button class=\"btn btn-success\" id=\"show-abstract\">显示摘要</button>
          <button class=\"btn btn-success\" id=\"show-up\">向上显示</button>
          <button class=\"btn btn-info\" id=\"fixed-btn-return-top\" style=\"position: fixed;top: 370px;right: 0px;z-index: 200\">
            回顶部
          </button>
          <ul class=\"layui-timeline\" id=\"line-box\"></ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"layui-timeline-item\" id=\"template-li-admin-list\" style=\"display: none;\">
  <i class=\"layui-icon layui-timeline-axis\"></i>
  <div class=\"layui-timeline-content layui-text\">
    <h3 class=\"layui-timeline-title\"></h3>
    <div class=\"f-col\">
      <table class=\"layui-table\" lay-size=\"sm\" style=\"width: 100%;\">
        <tr>
          <td style=\"width: 150px;\">操作时间</td><td><span class=\"detail-add_time\"></span></td>
        </tr>
        <tr>
          <td>事件简述</td><td><span class=\"detail-info\"></span></td>
        </tr>
        <tr>
          <td>事件类型</td><td><span class=\"detail-type\"></span></td>
        </tr>
        <tr>
          <td>对象类型</td><td><span class=\"detail-subject_type\">-</span></td>
        </tr>
        <tr>
          <td>对象ID</td><td><span class=\"detail-subject_id\">-</span></td>
        </tr>
        <tr>
          <td>操作IP</td><td><span class=\"detail-ip\">-</span></td>
        </tr>
        <tr>
          <td>上下文信息</td><td style=\"word-break: break-all;\"><span class=\"detail-context\"></span></td>
        </tr>
      </table>
    </div>
  </div>
</div>

  {#\"/assets/admin/js/jquery.form.min.js\",#}
{{ use_assets([
  \"/assets/admin/h/js/jquery.min.js\",
  \"/assets/common/layui/layui.all.js\",
  \"/assets/admin/js/common.js\",
  \"/assets/common/js/ajaxRequest.js\",
]) }}

<script type=\"text/javascript\">

    // 显示摘要/显示详情
    \$(\"#show-abstract\").click(function () {
        var statushow = \$(this).attr('data-show');
        if (statushow == 'show' || typeof statushow == 'undefined') {
            \$('#line-box').find('.f-col').hide();
            \$('#template-li-admin-list').find('.f-col').hide();
            \$(this).attr('data-show', 'hidden');
            \$(this).text('显示详情');
        } else {
            \$('#line-box').find('.f-col').show();
            \$('#template-li-admin-list').find('.f-col').show();
            \$(this).attr('data-show', 'show');
            \$(this).text('显示摘要');
        }
    });

    // 向上显示
    \$('#show-up').click(function () {
        var lastid    = \$('#line-box').find('li').first().attr('data-id');
        var searchdom = \$('#search-form');
        if (typeof lastid != 'undefined') {
            searchdom.find('input[name=\"id\"]').val(lastid);
            searchdom.find('input[name=\"direction\"]').val(-1);
            get_data();
        }
    });

    get_data();

    function get_data() {
        var form    = \$('#search-form').serialize();
        var loading = null;
        var before  = function () {
            loading = layer.load();
        };
        var error   = function (res) {
            layer.close(loading);
            nxwd.showMsg('服务器未响应，请稍后重试', 'danger');
        };
        var success = function (res) {
            layer.close(loading);
            if (res.status) {
                list_data(res.data);
            } else {
                nxwd.showMsg(res.msg, 'danger');

            }
        };
        nxwd.ajaxRequest('{{ path(\"admin_system_administration_logging_trace\") }}', 'get', form, 'json', success, before, error);
    }

    function list_data(data) {
        var i = 0;
        \$.each(data, function (k, row) {
            if (\$(\"#line-box\").find('li[data-id=\"' + row['id'] + '\"]').length == 0) {
                var dom = \$('#template-li-admin-list').clone(true);

                \$(dom).find('.layui-timeline-title').text((row['add_time'] + \"  \" + (row['ip'] || '')));
                \$(dom).find('.layui-text').append('<p>' + decodeURI(row['info'] || '') + '</p>');

                \$.each(row, function (key, value) {
                    \$(dom).find('.detail-' + key).html('<span>' + (value || '-') + '</span>');
                });

                if (\$('#search-form').find('input[name=\"direction\"]').val() == 1) {
                    \$(\"#line-box\").append('<li data-id=\"' + row['id'] + '\" class=\"layui-timeline-item\">' + \$(dom).html().toString() + '</li>');
                } else {
                    \$(\"#line-box\").prepend('<li data-id=\"' + row['id'] + '\" class=\"layui-timeline-item\">' + \$(dom).html().toString() + '</li>');
                }
            }
        });
    }


    // 绑定下拉到底事件
    function getScrollTop() {
        var scrollTop         = 0,
            bodyScrollTop     = 0,
            documentScrollTop = 0;
        if (document.body) {
            bodyScrollTop = document.body.scrollTop;
        }
        if (document.documentElement) {
            documentScrollTop = document.documentElement.scrollTop;
        }
        scrollTop = (bodyScrollTop - documentScrollTop > 0) ? bodyScrollTop : documentScrollTop;
        return scrollTop;
    }

    // 文档的总高度
    function getScrollHeight() {
        var scrollHeight         = 0,
            bodyScrollHeight     = 0,
            documentScrollHeight = 0;
        if (document.body) {
            bodyScrollHeight = document.body.scrollHeight;
        }
        if (document.documentElement) {
            documentScrollHeight = document.documentElement.scrollHeight;
        }
        scrollHeight = (bodyScrollHeight - documentScrollHeight > 0) ? bodyScrollHeight : documentScrollHeight;
        return scrollHeight;
    }

    // 浏览器视口的高度
    function getWindowHeight() {
        var windowHeight = 0;
        if (document.compatMode == \"CSS1Compat\") {
            windowHeight = document.documentElement.clientHeight;
        } else {
            windowHeight = document.body.clientHeight;
        }
        return windowHeight;
    }

    // 滚动加载
    window.onscroll = function () {
        if (getScrollTop() + getWindowHeight() >= getScrollHeight() - 10) {

            var lastid    = \$('#line-box').find('li').last().attr('data-id');
            var searchdom = \$('#search-form');
            var oldid     = searchdom.find('input[name=\"id\"]').val();
            if (typeof lastid != 'undefined' && lastid != oldid) {
                searchdom.find('input[name=\"id\"]').val(lastid);
                searchdom.find('input[name=\"direction\"]').val(1);
                get_data();
            }
        }
    };

    // 返回顶部
    \$('#fixed-btn-return-top').click(function () {
        \$(\"html,body\").animate({scrollTop: 0}, 600);
    });

    // 内容折叠和展开
    \$('#line-box').on('dblclick', '.layui-timeline-item', function () {
        \$(this).find('.f-col').toggle('fast');
    });

</script>
</body>
</html>", "Admin/SystemAdministration/Logging/trace.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\SystemAdministration\\Logging\\trace.twig");
    }
}
