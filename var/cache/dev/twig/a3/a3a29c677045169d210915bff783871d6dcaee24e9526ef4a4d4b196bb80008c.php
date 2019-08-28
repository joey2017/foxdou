<?php

/* Admin/User/levels.twig */
class __TwigTemplate_c573641522a0c89b2b49e084cc41868e58d7a4d3ee34a7d31cacf954b81f0728 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/User/levels.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/User/levels.twig"));

        // line 2
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers_for_layui.html.twig", "Admin/User/levels.twig", 2);
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('css', $context, $blocks);
        // line 31
        echo "
";
        // line 32
        $this->displayBlock('main_content', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 5
        echo "  <style>
      .form-control{padding: 4px 12px!important;}
      .form-more{display: inline-block!important;vertical-align:bottom!important;}
      .form-half{width: 49%!important}
      .form-third-head{width: 32%!important;}
      .form-third{width: 33%!important;}
      .seach{margin-bottom: 10px;}
      .table-header {
          padding: 20px;
          background: #fcf8e3
      }
  </style>
    <link href=\"/assets/admin/h/css/bootstrap.min14ed.css?v=3.3.6\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/font-awesome.min93e3.css?v=4.4.0\" rel=\"stylesheet\">
    <!-- Data Tables -->
    <link href=\"/assets/admin/h/css/plugins/dataTables/dataTables.bootstrap.css\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/plugins/iCheck/custom.css\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/animate.min.css\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/style.min862f.css?v=4.1.0\" rel=\"stylesheet\">
    <script src=\"/assets/admin/h/js/jquery.min.js?v=2.1.4\"></script>
    <script src=\"/assets/admin/js/common.js\"></script>
    <script src=\"/assets/common/js/ajaxRequest.js\"></script>
    <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
    <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/layer/laydate/laydate.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 33
        echo "  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"ibox float-e-margins\">
        <div class=\"ibox-title\">
          <h5>用户
            <small>级别管理</small>
          </h5>
        </div>
          <div class=\"ibox-content\">
              ";
        // line 42
        $this->loadTemplate("Admin/User/tabs.twig", "Admin/User/levels.twig", 42)->display(array_merge($context, array("tabs" => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6))));
        // line 43
        echo "              <div class=\"seach\">
                  <form action=\"\" method=\"get\" id=\"search-form\">
                  <input type=\"hidden\" name=\"platform_id\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["platform_id"]) || array_key_exists("platform_id", $context) ? $context["platform_id"] : (function () { throw new Twig_Error_Runtime('Variable "platform_id" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "\">
                  <input type=\"hidden\" name=\"_token\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_users_ajax_levels"), "html", null, true);
        echo "\">
                  <div class=\"row\">
                      <div class=\"col-sm-2\">
                          <div class=\"input-group m-b\"><span class=\"input-group-addon\">ID</span>
                              <input name=\"id\" value=\"\" placeholder=\"ID\" class=\"form-control\"/>
                          </div>
                      </div>
                      <div class=\"col-sm-2 \">
                          <div class=\"input-group m-b\"><span class=\"input-group-addon\">名称</span>
                              <input name=\"name\" value=\"\" placeholder=\"输入名称\" class=\"form-control\"/>
                          </div>
                      </div>
                      <div class=\"col-sm-2\">
                          <div class=\"input-group\">
                              <span class=\"input-group-addon\">默认级别</span>
                              <select name=\"default\" class=\"form-control\">
                                  <option value=\"all\">全部</option>
                                  <option value=\"0\">否</option>
                                  <option value=\"1\">是</option>
                              </select>
                          </div>
                      </div>
                  </div>
                  <div class=\"row\">
                      <div class=\"col-sm-4\">
                          <select name=\"time_type\" class=\"form-control form-more form-third-head\">
                              <option value=\"add_time\">创建时间</option>
                              <option value=\"edit_time\">修改时间</option>
                          </select>
                          <input name=\"start_time\" value=\"\" placeholder=\"开始日期\" class=\"form-control layer-date form-more form-third\" id=\"start_time\">
                          <input name=\"end_time\" value=\"\" placeholder=\"结束日期\" class=\"form-control layer-date form-more form-third\" id=\"end_time\">
                      </div>
                  </div>
                  <button type=\"submit\" class=\"btn btn-primary\" style=\"position:relative;top:-60px;margin-right:100px;float: right;\" onclick=\"get_data();return false;\">查询</button>
                  </form>
              </div>

              <button class=\"btn btn-primary\" onclick=\"add_level();\">添加级别</button>
              <div style=\"overflow-x: auto;width:100%\">
                  <table class=\"\" id=\"paged-table\" lay-filter=\"user-table\" style=\"width: 100%;overflow: hidden\"></table>
              </div>
          </div>
      </div>
    </div>
  </div>

  <div class=\"add_level_dialog\" style=\"display: none; padding: 20px 20px 0px 20px;\">

    <div class=\"input-group m-b\"><span class=\"input-group-addon\">请输入级别名称：</span>
      <input class=\"form-control level_name\" id=\"level_name\" placeholder=\"级别名称：\" type=\"text\" required>
    </div>
    <div class=\"input-group m-b\"><span class=\"input-group-addon\">请输入级别备注：</span>
      <input class=\"form-control level_info\" id=\"level_info\" placeholder=\"可选填\" type=\"text\">
    </div>
    ";
        // line 100
        $context["current_tab"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 100, $this->source); })()), "request", array()), "get", array(0 => "tab", 1 => 0), "method");
        // line 101
        echo "    ";
        if (((isset($context["current_tab"]) || array_key_exists("current_tab", $context) ? $context["current_tab"] : (function () { throw new Twig_Error_Runtime('Variable "current_tab" does not exist.', 101, $this->source); })()) == 0)) {
            // line 102
            echo "      <div class=\"input-group m-b\"><span class=\"input-group-addon\">请选择平台：</span>
        ";
            // line 103
            echo $context["sf"]->macro_select_raw("select_platform_id", $this->extensions['App\Common\Twig\AppExtension']->toOptions(twig_constant("App\\Platform::PLATFORMS"), "全部"), array("class" => "form-control"));
            echo "
      </div>
    ";
        } else {
            // line 106
            echo "    ";
        }
        // line 107
        echo "    <div class=\"input-group m-b\" id=\"copy_level\">
      <span class=\"input-group-addon\">选择复制的级别：</span>
      <select name=\"synchro_level\" id=\"synchro_level\" class=\"form-control\">

      </select>
    </div>
  </div>

  <script type=\"text/html\" id=\"actions\">
    <button class=\"btn btn-xs btn-primary btn-sm\" lay-event=\"edit\">修改</button>
    <button class=\"btn btn-xs btn-primary btn-sm\" lay-event=\"delete\">删除</button>
    ";
        // line 119
        echo "    ";
        // line 120
        echo "  </script>

  <script>
      var baseUrl = \"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_ajax_levels");
        echo "\";
      var addUrl = \"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_level_add");
        echo "\";
      var defaultUrl = \"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_set_default_level");
        echo "\";

      var platforms = [];
      ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_constant("App\\Platform::PLATFORMS"));
        foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
            // line 129
            echo "        platforms.push('";
            echo twig_escape_filter($this->env, $context["platform"], "html", null, true);
            echo "')
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platform'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "
      var columns = [
        [
          {\"field\": \"id\", \"title\": \"ID\"},
          {\"field\": \"name\", \"title\": \"级别名称\"},
          {\"field\": \"platform_id\", \"title\": \"平台\",templet: function(d){
                  return platforms[d.platform_id-1];
              }},
          {\"field\": \"default\", \"title\": \"默认级别\",templet: function(d){
                return d.default*1 == 1 ? '是' : '<button class=\"btn btn-primary btn-xs\" onclick=\"set_default_level('+d.id+')\">否</button>';
              }},
          {\"field\": \"note\", \"title\": \"备注\"},
          {\"field\": \"add_time\", \"title\": \"添加时间\",\"width\": 200,templet: function(d){
                  var date = new Date();
                  date.setTime(d.add_time*1000);
                  return date.Format(\"yyyy-MM-dd hh:mm:ss\");
              }},
          {\"field\": \"edit_time\", \"title\": \"修改时间\",templet: function(d){
                  var date = new Date();
                  date.setTime(d.edit_time*1000);
                  return date.Format(\"yyyy-MM-dd hh:mm:ss\");
              }},
          {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\"}
        ]
      ];

      layui.use(['table','util'], function () {
          var util = layui.util;
          get_data();

          layui.table.on('tool(user-table)', function (obj) { //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
              var data     = obj.data; //获得当前行数据
              var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）
              var tr       = obj.tr; //获得当前行 tr 的DOM对象

              if (layEvent === 'edit') { //编辑
                  \$('#level_name').val(data.name);
                  \$('#level_info').val(data.info);
                  //弹出框
                  \$('#copy_level').hide();

                  layer.open({
                      type:1,
                      closeBtn: 1,
                      area: ['400px', '300px'], //宽高
                      skin: 'layui-layer-molv',
                      btn:['确定','取消'],
                      content:\$('.add_level_dialog'),
                      yes: function(index){
                          \$.post('";
        // line 180
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_level_edit");
        echo "',{
                              id:data.id,
                              name:\$('#level_name').val(),
                              info:\$('#level_info').val(),
                              _token:'";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_users_level_edit"), "html", null, true);
        echo "'
                          },function(data){
                              layer.close(index);
                              if(!data.status){
                                  layer.alert(data.msg);
                                  return;
                              }
                              layer.msg(data.msg,{time:1500},function(){
                                  location.reload();
                              });
                          },'json');
                      }
                  });

              }
              if (layEvent === 'delete') { //删除
                  var countclick=1;
                  layer.confirm('您确定要删除？',function (layerindex) {
                      if(countclick!=1){
                          return false;
                      }
                      countclick++;
                      \$.ajax({
                          url: '";
        // line 207
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_level_del");
        echo "',
                          type:'post',
                          data: {
                              id: data.id
                          },
                          dataType: 'json',
                          success: function (data) {
                              layer.close(layerindex);
                              if (!data.status) {
                                  layer.alert(data.msg);
                                  return;
                              }
                              layer.msg(data.msg, {time: 1500});
                          },
                          error:function (res) {
                              layer.alert(\"删除错误！\");
                          }
                      });
                  });
              }
          });
      });

      function get_data() {
          var params = \$('form#search-form').serialize();
          var url        = baseUrl + '?' + params;
          rander_table('#paged-table', url, columns);
      }

      \$(\"#synchro_level\").click(function () {
          var platform_id=\$(\"#select_platform_id\").val();
          var dom=\$(this);

          if(!platform_id && \$('input[name=platform_id]').val() * 1 == 0){
              layer.alert(\"请先选择平台！\");
              return false;
          }

          if (typeof platform_id == 'undefined')
              platform_id = \$('input[name=platform_id]').val();

          var platforminfo=\$(dom).attr('data-platform-'+platform_id);
          var platformcurrent=\$(dom).attr('data-platform-current');
          if(platformcurrent==platform_id){
              return true;
          }else{
              if(typeof platforminfo !=\"undefined\"){
                  \$(dom).attr('data-platform-current',platform_id);
                  \$(dom).html('');
                  \$.each(JSON.parse(platforminfo),function (k,v) {
                      \$(dom).append('<option value=\"'+v['id']+'\">'+v['name']+'</option>');
                  });
                  return true;
              }
          }

          \$.ajax({
              url:'',
              type:'get',
              data:{platform_id:platform_id},
              'dataType':'json',
              success:function (res) {
                  if(res.status){
                      \$(dom).attr('data-platform-'+platform_id,JSON.stringify(res.data));
                      \$(dom).attr('data-platform-current',platform_id);
                      \$(dom).html('');
                      if(!\$.isEmptyObject(res.data)){
                          \$.each(res.data,function (k,v) {
                              \$(dom).append('<option value=\"'+v['id']+'\">'+v['name']+'</option>');
                          });
                      }
                  }else{
                      layer.alert(res.msg);
                  }
              },
              error:function (res) {
                  layer.alert(\"获取平台级别信息失败\");
              }
          });

      });

      function add_level(){
          \$('#level_name').empty();
          \$('#level_info').empty();

          //弹出框
          var countclick=1;
          layer.open({
              type:1,
              closeBtn: 1,
              area: ['400px', '300px'], //宽高
              skin: 'layui-layer-molv',
              btn:['确定'],
              content:\$('.add_level_dialog'),
              yes: function(index,layerindex){
                  if(countclick!=1){
                      return false;
                  }

                  var platform_id=\$(layerindex).find('#select_platform_id').val();
                  var synchro_level=\$(layerindex).find('#synchro_level').val();

                  if(!platform_id && \$('input[name=platform_id]').val() * 1 == 0){
                      layer.alert('请选择平台！');
                      return false;
                  }

                  if (typeof platform_id == 'undefined')
                      platform_id = \$('input[name=platform_id]').val();

                  \$.post(addUrl,{
                      name:\$(layerindex).find('#level_name').val(),
                      info:\$(layerindex).find('#level_info').val(),
                      platform_id:platform_id,
                      synchro_level:synchro_level,
                      _token:'";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_users_level_add"), "html", null, true);
        echo "'
                  },function(data){
                      if(!data.status){
                          layer.alert(data.msg);
                          return;
                      }
                      layer.msg(data.msg,{time:1500});
                  },'json');
                  layer.close(index);
              }
          });
      }

      function set_default_level(id){
          var countclick=1;
          layer.confirm('您确定设置该项为默认级别吗？',function (layerindex) {
              if (countclick != 1) {
                  return false;
              }
              countclick++;
              \$.post(defaultUrl, {
                  id: id
              }, function (data) {
                  if (!data.status) {
                      layer.alert(data.msg);
                      return;
                  }
                  layer.msg(data.msg, {time: 1500});
              }, 'json');
          });
      }
  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/User/levels.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 323,  330 => 207,  304 => 184,  297 => 180,  246 => 131,  237 => 129,  233 => 128,  227 => 125,  223 => 124,  219 => 123,  214 => 120,  212 => 119,  199 => 107,  196 => 106,  190 => 103,  187 => 102,  184 => 101,  182 => 100,  125 => 46,  121 => 45,  117 => 43,  115 => 42,  104 => 33,  95 => 32,  60 => 5,  51 => 4,  41 => 32,  38 => 31,  36 => 4,  33 => 3,  31 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#{% extends 'Admin/Common/layout_main_panel.twig' %}#}
{% import ('/Common/simple_form_helpers_for_layui.html.twig') as sf %}

{% block css %}
  <style>
      .form-control{padding: 4px 12px!important;}
      .form-more{display: inline-block!important;vertical-align:bottom!important;}
      .form-half{width: 49%!important}
      .form-third-head{width: 32%!important;}
      .form-third{width: 33%!important;}
      .seach{margin-bottom: 10px;}
      .table-header {
          padding: 20px;
          background: #fcf8e3
      }
  </style>
    <link href=\"/assets/admin/h/css/bootstrap.min14ed.css?v=3.3.6\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/font-awesome.min93e3.css?v=4.4.0\" rel=\"stylesheet\">
    <!-- Data Tables -->
    <link href=\"/assets/admin/h/css/plugins/dataTables/dataTables.bootstrap.css\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/plugins/iCheck/custom.css\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/animate.min.css\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/style.min862f.css?v=4.1.0\" rel=\"stylesheet\">
    <script src=\"/assets/admin/h/js/jquery.min.js?v=2.1.4\"></script>
    <script src=\"/assets/admin/js/common.js\"></script>
    <script src=\"/assets/common/js/ajaxRequest.js\"></script>
    <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
    <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/layer/laydate/laydate.js\"></script>
{% endblock %}

{% block main_content %}
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"ibox float-e-margins\">
        <div class=\"ibox-title\">
          <h5>用户
            <small>级别管理</small>
          </h5>
        </div>
          <div class=\"ibox-content\">
              {% include \"Admin/User/tabs.twig\" with {\"tabs\": [0, 1, 2, 3, 4, 5, 6]} %}
              <div class=\"seach\">
                  <form action=\"\" method=\"get\" id=\"search-form\">
                  <input type=\"hidden\" name=\"platform_id\" value=\"{{ platform_id }}\">
                  <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('admin_users_ajax_levels') }}\">
                  <div class=\"row\">
                      <div class=\"col-sm-2\">
                          <div class=\"input-group m-b\"><span class=\"input-group-addon\">ID</span>
                              <input name=\"id\" value=\"\" placeholder=\"ID\" class=\"form-control\"/>
                          </div>
                      </div>
                      <div class=\"col-sm-2 \">
                          <div class=\"input-group m-b\"><span class=\"input-group-addon\">名称</span>
                              <input name=\"name\" value=\"\" placeholder=\"输入名称\" class=\"form-control\"/>
                          </div>
                      </div>
                      <div class=\"col-sm-2\">
                          <div class=\"input-group\">
                              <span class=\"input-group-addon\">默认级别</span>
                              <select name=\"default\" class=\"form-control\">
                                  <option value=\"all\">全部</option>
                                  <option value=\"0\">否</option>
                                  <option value=\"1\">是</option>
                              </select>
                          </div>
                      </div>
                  </div>
                  <div class=\"row\">
                      <div class=\"col-sm-4\">
                          <select name=\"time_type\" class=\"form-control form-more form-third-head\">
                              <option value=\"add_time\">创建时间</option>
                              <option value=\"edit_time\">修改时间</option>
                          </select>
                          <input name=\"start_time\" value=\"\" placeholder=\"开始日期\" class=\"form-control layer-date form-more form-third\" id=\"start_time\">
                          <input name=\"end_time\" value=\"\" placeholder=\"结束日期\" class=\"form-control layer-date form-more form-third\" id=\"end_time\">
                      </div>
                  </div>
                  <button type=\"submit\" class=\"btn btn-primary\" style=\"position:relative;top:-60px;margin-right:100px;float: right;\" onclick=\"get_data();return false;\">查询</button>
                  </form>
              </div>

              <button class=\"btn btn-primary\" onclick=\"add_level();\">添加级别</button>
              <div style=\"overflow-x: auto;width:100%\">
                  <table class=\"\" id=\"paged-table\" lay-filter=\"user-table\" style=\"width: 100%;overflow: hidden\"></table>
              </div>
          </div>
      </div>
    </div>
  </div>

  <div class=\"add_level_dialog\" style=\"display: none; padding: 20px 20px 0px 20px;\">

    <div class=\"input-group m-b\"><span class=\"input-group-addon\">请输入级别名称：</span>
      <input class=\"form-control level_name\" id=\"level_name\" placeholder=\"级别名称：\" type=\"text\" required>
    </div>
    <div class=\"input-group m-b\"><span class=\"input-group-addon\">请输入级别备注：</span>
      <input class=\"form-control level_info\" id=\"level_info\" placeholder=\"可选填\" type=\"text\">
    </div>
    {% set current_tab = app.request.get('tab', 0) %}
    {% if current_tab == 0 %}
      <div class=\"input-group m-b\"><span class=\"input-group-addon\">请选择平台：</span>
        {{ sf.select_raw('select_platform_id', to_options(constant(\"App\\\\Platform::PLATFORMS\"), '全部'), {\"class\": \"form-control\"}) }}
      </div>
    {% else %}
    {% endif %}
    <div class=\"input-group m-b\" id=\"copy_level\">
      <span class=\"input-group-addon\">选择复制的级别：</span>
      <select name=\"synchro_level\" id=\"synchro_level\" class=\"form-control\">

      </select>
    </div>
  </div>

  <script type=\"text/html\" id=\"actions\">
    <button class=\"btn btn-xs btn-primary btn-sm\" lay-event=\"edit\">修改</button>
    <button class=\"btn btn-xs btn-primary btn-sm\" lay-event=\"delete\">删除</button>
    {#<a class=\"layui-btn layui-btn-xs\" lay-event=\"view\">查看</a>#}
    {#<a class=\"layui-btn layui-btn-red layui-btn-xs\" lay-event=\"delete\">删除</a>#}
  </script>

  <script>
      var baseUrl = \"{{ path('admin_users_ajax_levels') }}\";
      var addUrl = \"{{ path('admin_users_level_add') }}\";
      var defaultUrl = \"{{ path('admin_users_set_default_level') }}\";

      var platforms = [];
      {% for platform in constant('App\\\\Platform::PLATFORMS') %}
        platforms.push('{{ platform }}')
      {% endfor %}

      var columns = [
        [
          {\"field\": \"id\", \"title\": \"ID\"},
          {\"field\": \"name\", \"title\": \"级别名称\"},
          {\"field\": \"platform_id\", \"title\": \"平台\",templet: function(d){
                  return platforms[d.platform_id-1];
              }},
          {\"field\": \"default\", \"title\": \"默认级别\",templet: function(d){
                return d.default*1 == 1 ? '是' : '<button class=\"btn btn-primary btn-xs\" onclick=\"set_default_level('+d.id+')\">否</button>';
              }},
          {\"field\": \"note\", \"title\": \"备注\"},
          {\"field\": \"add_time\", \"title\": \"添加时间\",\"width\": 200,templet: function(d){
                  var date = new Date();
                  date.setTime(d.add_time*1000);
                  return date.Format(\"yyyy-MM-dd hh:mm:ss\");
              }},
          {\"field\": \"edit_time\", \"title\": \"修改时间\",templet: function(d){
                  var date = new Date();
                  date.setTime(d.edit_time*1000);
                  return date.Format(\"yyyy-MM-dd hh:mm:ss\");
              }},
          {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\"}
        ]
      ];

      layui.use(['table','util'], function () {
          var util = layui.util;
          get_data();

          layui.table.on('tool(user-table)', function (obj) { //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
              var data     = obj.data; //获得当前行数据
              var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）
              var tr       = obj.tr; //获得当前行 tr 的DOM对象

              if (layEvent === 'edit') { //编辑
                  \$('#level_name').val(data.name);
                  \$('#level_info').val(data.info);
                  //弹出框
                  \$('#copy_level').hide();

                  layer.open({
                      type:1,
                      closeBtn: 1,
                      area: ['400px', '300px'], //宽高
                      skin: 'layui-layer-molv',
                      btn:['确定','取消'],
                      content:\$('.add_level_dialog'),
                      yes: function(index){
                          \$.post('{{ path('admin_users_level_edit') }}',{
                              id:data.id,
                              name:\$('#level_name').val(),
                              info:\$('#level_info').val(),
                              _token:'{{ csrf_token('admin_users_level_edit') }}'
                          },function(data){
                              layer.close(index);
                              if(!data.status){
                                  layer.alert(data.msg);
                                  return;
                              }
                              layer.msg(data.msg,{time:1500},function(){
                                  location.reload();
                              });
                          },'json');
                      }
                  });

              }
              if (layEvent === 'delete') { //删除
                  var countclick=1;
                  layer.confirm('您确定要删除？',function (layerindex) {
                      if(countclick!=1){
                          return false;
                      }
                      countclick++;
                      \$.ajax({
                          url: '{{ path('admin_users_level_del') }}',
                          type:'post',
                          data: {
                              id: data.id
                          },
                          dataType: 'json',
                          success: function (data) {
                              layer.close(layerindex);
                              if (!data.status) {
                                  layer.alert(data.msg);
                                  return;
                              }
                              layer.msg(data.msg, {time: 1500});
                          },
                          error:function (res) {
                              layer.alert(\"删除错误！\");
                          }
                      });
                  });
              }
          });
      });

      function get_data() {
          var params = \$('form#search-form').serialize();
          var url        = baseUrl + '?' + params;
          rander_table('#paged-table', url, columns);
      }

      \$(\"#synchro_level\").click(function () {
          var platform_id=\$(\"#select_platform_id\").val();
          var dom=\$(this);

          if(!platform_id && \$('input[name=platform_id]').val() * 1 == 0){
              layer.alert(\"请先选择平台！\");
              return false;
          }

          if (typeof platform_id == 'undefined')
              platform_id = \$('input[name=platform_id]').val();

          var platforminfo=\$(dom).attr('data-platform-'+platform_id);
          var platformcurrent=\$(dom).attr('data-platform-current');
          if(platformcurrent==platform_id){
              return true;
          }else{
              if(typeof platforminfo !=\"undefined\"){
                  \$(dom).attr('data-platform-current',platform_id);
                  \$(dom).html('');
                  \$.each(JSON.parse(platforminfo),function (k,v) {
                      \$(dom).append('<option value=\"'+v['id']+'\">'+v['name']+'</option>');
                  });
                  return true;
              }
          }

          \$.ajax({
              url:'',
              type:'get',
              data:{platform_id:platform_id},
              'dataType':'json',
              success:function (res) {
                  if(res.status){
                      \$(dom).attr('data-platform-'+platform_id,JSON.stringify(res.data));
                      \$(dom).attr('data-platform-current',platform_id);
                      \$(dom).html('');
                      if(!\$.isEmptyObject(res.data)){
                          \$.each(res.data,function (k,v) {
                              \$(dom).append('<option value=\"'+v['id']+'\">'+v['name']+'</option>');
                          });
                      }
                  }else{
                      layer.alert(res.msg);
                  }
              },
              error:function (res) {
                  layer.alert(\"获取平台级别信息失败\");
              }
          });

      });

      function add_level(){
          \$('#level_name').empty();
          \$('#level_info').empty();

          //弹出框
          var countclick=1;
          layer.open({
              type:1,
              closeBtn: 1,
              area: ['400px', '300px'], //宽高
              skin: 'layui-layer-molv',
              btn:['确定'],
              content:\$('.add_level_dialog'),
              yes: function(index,layerindex){
                  if(countclick!=1){
                      return false;
                  }

                  var platform_id=\$(layerindex).find('#select_platform_id').val();
                  var synchro_level=\$(layerindex).find('#synchro_level').val();

                  if(!platform_id && \$('input[name=platform_id]').val() * 1 == 0){
                      layer.alert('请选择平台！');
                      return false;
                  }

                  if (typeof platform_id == 'undefined')
                      platform_id = \$('input[name=platform_id]').val();

                  \$.post(addUrl,{
                      name:\$(layerindex).find('#level_name').val(),
                      info:\$(layerindex).find('#level_info').val(),
                      platform_id:platform_id,
                      synchro_level:synchro_level,
                      _token:'{{ csrf_token('admin_users_level_add') }}'
                  },function(data){
                      if(!data.status){
                          layer.alert(data.msg);
                          return;
                      }
                      layer.msg(data.msg,{time:1500});
                  },'json');
                  layer.close(index);
              }
          });
      }

      function set_default_level(id){
          var countclick=1;
          layer.confirm('您确定设置该项为默认级别吗？',function (layerindex) {
              if (countclick != 1) {
                  return false;
              }
              countclick++;
              \$.post(defaultUrl, {
                  id: id
              }, function (data) {
                  if (!data.status) {
                      layer.alert(data.msg);
                      return;
                  }
                  layer.msg(data.msg, {time: 1500});
              }, 'json');
          });
      }
  </script>
{% endblock %}
", "Admin/User/levels.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\User\\levels.twig");
    }
}
