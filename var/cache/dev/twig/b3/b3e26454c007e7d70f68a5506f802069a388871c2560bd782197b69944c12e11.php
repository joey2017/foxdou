<?php

/* Common/_ajax_pager.twig */
class __TwigTemplate_7a52d2fa82bba85350c5f02f630073f4e37ca1d897b359c87818966ea440ef8a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/_ajax_pager.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Common/_ajax_pager.twig"));

        // line 1
        echo "<style type=\"text/css\">
  /*分页*/
  .page a, .page span { height: 34px; line-height: 34px; }
  .page-total { display: inline-block; float: left; margin: 10px 5px; }
  .page-total p { display: inline-block; height: 41px; line-height: 41px; }
  #page { display: inline-block; }
  .m-page-sel { margin: 10px 0px; float: right; width: auto; color: #666666; border-top: 1px solid #E0E0E0; border-bottom: 1px solid #E0E0E0; line-height: 26px; }
  .m-page-sel span { float: left; padding: 0 8px; border-left: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0; }
  .m-page-sel input { float: left; border: none; width: 30px; height: 26px; padding: 0 5px; text-align: center; }
  .m-page-sel a { float: left; padding: 0 8px; color: #18A689; border-right: 1px solid #E0E0E0; background: #F0F0F0; }
  .m-page-sel a:hover { background: #F5F5F5; }
  .page-box { display: block; height: 40px; }
  .page-box .layui-laypage { margin: 0; }
</style>
<div style=\"position: relative; width: 100%;height: 100px; text-align: center;\">
  <div id=\"page\" class=\"page\"></div>

  <div class=\"loading-box\" id=\"loading-box\" style=\"margin-left: 45%;position: relative;display: none\">
    <div id=\"loading\" class=\"\" style=\"width:60px;height:24px;background:url(/img/loading-0.gif) no-repeat;\"></div>
  </div>
  <div class=\"page-total s-dark show_page_count\">
    <p class=\"f-fl\">共计<span id=\"count_data_num\">0</span>条,当前页共<span id=\"now_page_count_data_num\">0</span>条</p>
  </div>
  <div class=\"m-page-sel show_page_size\">
    <span>显示</span>
    <input type=\"number\" id=\"page_size_input\" value=\"10\" min=\"1\" style=\"width: 60px;\"/>
    <span>条/页</span>
    <a href=\"javascript:void(0)\" id=\"page_size_go\" onclick=\"page_size_get_data();\">GO</a>
  </div>
</div>

<script type=\"text/javascript\">

    var data_table_of_loding;
    \$(window).resize(function () {
        if (data_table_of_loding) {
            var table_height = \$(data_table_of_loding).height();
            \$('#loading-box').css({'top': -table_height - 50 + 'px'});
        }
    });

    function page_size_get_data() {
        get_table_data(request_url, page_size_go_config, request_page);
    }

    var page_size_go_config = {};
    var query_num           = 0;
    var request_url         = '';
    var request_page        = '';

    //url请求地址,page第几页，其他页面调用时必须传一个空值给page
    function get_table_data(url, config, page) {
        page_size_go_config = config = config || {};
        request_url  = url || null;
        request_page = page || null;
        if (query_num == 1) {
            return false;
        }
        data_table_of_loding = config['data_table'] = config['data_table'] || '#data-table';//放数据的表格
        var form_dom     = config['form'] || 'form';//放数据的表格
        var table_height = \$(config['data_table']).height();
        \$('#loading-box').css({'top': -table_height - 50 + 'px'});
        query_num = 1;
        \$('#loading-box').show();
        if (!page) {
            page = 1;
        }
        if (!url) {
            url = '';
        }
        var params = \$(form_dom).serializeArray();
        if (url.indexOf(\"?\") == -1) {
            url = url + '?page=' + page + '&page_size=' + \$('#page_size_input').val();
        } else {
            url = url + '&page=' + page + '&page_size=' + \$('#page_size_input').val();
        }

        \$.ajax(url, {
            data: params,
            dataType: 'json',
            success: function (re) {
                query_num = 0;
                \$('#loading-box').hide();
                if (!re.status) {
                    layer.msg(re.msg);
                    return false;
                }
                var page_obj   = re.page;//page对象
                var data_count = page_obj.count;//数据总量
                var data_pages = page_obj.pages;//得到总页数
                var data_curr  = page_obj.curr + 1;//当前页数
                set_data(re.data, re.columns, config, re);//处理数据****************************************

                \$('#count_data_num').text(data_count);
                layui.use(['laypage', 'layer'], function () {
                    laypage = layui.laypage;
                    layer   = layui.layer;
                    laypage({
                        cont:    'page'
                        , pages: data_pages //得到总页数
                        , curr:  data_curr
                        , last:  '尾页'
                        , skip:  true
                        , skin:  '#5FB878'
                        , jump:  function (obj, first) {
                            if (!first) {
                                get_table_data(url, config, obj.curr);
                            }
                        }
                    });
                });
            }, error: function () {
                query_num = 0;
                layer.msg('获取数据失败');
                \$('#loading-box').hide();
            }
        });
    }
    /**
     * config={
    *   data_table:'#table_data'//放数据的table选择器，即放<tr><td></td></tr>的地方，可以是类名称也可以是id 书写格式与选择器一样即可
    *   ,first_td:'<td>内容</td>'//字符串，第一列的td、一般与数据内容无关时使用//必须写td标签,不传不添加
    *   ,last_td:'<td>内容</td>'//字符串，最后一列的td、一般与数据内容无关时使用//必须写td标签,不传不添加
    *   ,data_int_to_str:{status:{1:'交易中'，2:'交易完成'},}//json格式,需要转换成中文的数字代码，一般直接从业务模型中转换成json取出
    *   ,change_columns:{1:'<td key=\"@key\">@value</td>'}}////json格式,需要修改或新增td的属性时用，@key和 @value 将自动转换成数据中对应的键和值
     *  ,columns:[]|| string //列字段名集合，可实现排序,类型为数组或用英文逗号分格列名的字符串
     *   ,unchange_time:array||string//不需要格式化时间的字段名,数组或字符串以逗号分隔
     *   ,change_data:function(data){//函数，该函数必须接收一个data参数（查询得到的数据),该函数可以对data数据进行改造或处理，
    *      \$.each(data,function(k,v){
    *          data[k]['caozuo']='<a href=\"\" value=\"'+v['id']+'\">修改</a>'; //本例子为data新增一列 键为'caozuo'的数据，td 可写可不写
    *      });
    *      return data;           // 必须返回处理后的data,如果传递了本参数（change_data）,最终的数据将以该函数返回的data为主;
    *   }
     *
     * }
     *
     * */
    function set_data(data, columns, config, get_data_all_result) {
        var data_dom       = '';
        var change_columns = config['change_columns'] || {};
        columns            = config['columns'] || columns || [];
        if (typeof(columns) == \"string\") {
            columns = columns.split(\",\") || [];
        }
        //判断data_int_to_str是否存在
        if (!function () {
                try {
                    return data_int_to_str, true;
                } catch (e) {
                }
            }()) {
            //  data_int_to_str={};
            data_int_to_str = config['data_int_to_str'] || {};
        }
        var data_table  = config['data_table'] || '#data-table';//放数据的表格
        var change_data = config['change_data'] || {};
        if (\$.isFunction(change_data)) {
            var data = change_data(data, get_data_all_result);
        }


        \$('#now_page_count_data_num').text(data.length);
        \$.each(data, function (k, v) {
            var data_td = '';
            var i       = 0;
            if (columns.length == 0) {
                \$.each(v, function (kk, vv) {
                    i = i + 1;
                    if ((!config['unchange_time'] || config['unchange_time'].indexOf(kk) == -1) && kk.indexOf(\"time\") > 0) {
                        vv = formatDateTime(vv);
                    }
                    if (data_int_to_str.hasOwnProperty(kk)) {
                        vv = data_int_to_str[kk][vv];
                    }

                    if (change_columns[i] != undefined) {
                        change_columns[i] = change_columns[i].replace(/@key/g, kk);
                        change_columns[i] = change_columns[i].replace(/@value/g, vv);
                        data_td           = data_td + change_columns[i];
                    } else {
                        if (typeof vv == 'string' && vv.lastIndexOf(\"/td\") != -1) {
                            data_td = data_td + vv;
                        } else {
                            data_td = data_td + '<td class=\"' + '' + '\">' + vv + '</td>';
                        }
                    }
                });
            } else {
                \$.each(columns, function (ck, cv) {
                    i = i + 1;

                    if ((!config['unchange_time'] || config['unchange_time'].indexOf(cv) == -1) && cv.indexOf(\"time\") > 0) {
                        v[cv] = formatDateTime(v[cv]);
                    }

                    if (data_int_to_str.hasOwnProperty(cv)) {
                        v[cv] = data_int_to_str[cv][v[cv]];
                    }
                    if (change_columns[i] != undefined) {
                        change_columns[i] = change_columns[i].replace(/@key/g, cv);
                        change_columns[i] = change_columns[i].replace(/@value/g, v[cv]);
                        data_td           = data_td + change_columns[i];
                    } else {
                        if (typeof v[cv] == 'string' && v[cv].lastIndexOf(\"/td\") != -1) {
                            data_td = data_td + v[cv];
                        } else {
                            data_td = data_td + '<td class=\"' + '' + '\">' + v[cv] + '</td>';
                        }
                    }

                });
            }
            var first_id = config['first_id'] || '';
            var last_td  = config['last_td'] || '';
            data_dom     = data_dom + '<tr>' + first_id + data_td + last_td + '</tr>';
        });
        \$(data_table).html(data_dom);
        var success_function = config['success_function'] || {};
        if (\$.isFunction(success_function)) {
            success_function();
        }
    }

    //时间戳转换成Ymd H:i:s
    function formatDateTime(inputTime) {
        var date = new Date(inputTime * 1000);
        var y    = date.getFullYear();
        if (!inputTime || y < 2000) {
            return '';
        }
        var m      = date.getMonth() + 1;
        m          = m < 10 ? ('0' + m) : m;
        var d      = date.getDate();
        d          = d < 10 ? ('0' + d) : d;
        var h      = date.getHours();
        h          = h < 10 ? ('0' + h) : h;
        var minute = date.getMinutes();
        var second = date.getSeconds();
        minute     = minute < 10 ? ('0' + minute) : minute;
        second     = second < 10 ? ('0' + second) : second;
        return y + '-' + m + '-' + d + ' ' + h + ':' + minute + ':' + second;
    }

</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/_ajax_pager.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style type=\"text/css\">
  /*分页*/
  .page a, .page span { height: 34px; line-height: 34px; }
  .page-total { display: inline-block; float: left; margin: 10px 5px; }
  .page-total p { display: inline-block; height: 41px; line-height: 41px; }
  #page { display: inline-block; }
  .m-page-sel { margin: 10px 0px; float: right; width: auto; color: #666666; border-top: 1px solid #E0E0E0; border-bottom: 1px solid #E0E0E0; line-height: 26px; }
  .m-page-sel span { float: left; padding: 0 8px; border-left: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0; }
  .m-page-sel input { float: left; border: none; width: 30px; height: 26px; padding: 0 5px; text-align: center; }
  .m-page-sel a { float: left; padding: 0 8px; color: #18A689; border-right: 1px solid #E0E0E0; background: #F0F0F0; }
  .m-page-sel a:hover { background: #F5F5F5; }
  .page-box { display: block; height: 40px; }
  .page-box .layui-laypage { margin: 0; }
</style>
<div style=\"position: relative; width: 100%;height: 100px; text-align: center;\">
  <div id=\"page\" class=\"page\"></div>

  <div class=\"loading-box\" id=\"loading-box\" style=\"margin-left: 45%;position: relative;display: none\">
    <div id=\"loading\" class=\"\" style=\"width:60px;height:24px;background:url(/img/loading-0.gif) no-repeat;\"></div>
  </div>
  <div class=\"page-total s-dark show_page_count\">
    <p class=\"f-fl\">共计<span id=\"count_data_num\">0</span>条,当前页共<span id=\"now_page_count_data_num\">0</span>条</p>
  </div>
  <div class=\"m-page-sel show_page_size\">
    <span>显示</span>
    <input type=\"number\" id=\"page_size_input\" value=\"10\" min=\"1\" style=\"width: 60px;\"/>
    <span>条/页</span>
    <a href=\"javascript:void(0)\" id=\"page_size_go\" onclick=\"page_size_get_data();\">GO</a>
  </div>
</div>

<script type=\"text/javascript\">

    var data_table_of_loding;
    \$(window).resize(function () {
        if (data_table_of_loding) {
            var table_height = \$(data_table_of_loding).height();
            \$('#loading-box').css({'top': -table_height - 50 + 'px'});
        }
    });

    function page_size_get_data() {
        get_table_data(request_url, page_size_go_config, request_page);
    }

    var page_size_go_config = {};
    var query_num           = 0;
    var request_url         = '';
    var request_page        = '';

    //url请求地址,page第几页，其他页面调用时必须传一个空值给page
    function get_table_data(url, config, page) {
        page_size_go_config = config = config || {};
        request_url  = url || null;
        request_page = page || null;
        if (query_num == 1) {
            return false;
        }
        data_table_of_loding = config['data_table'] = config['data_table'] || '#data-table';//放数据的表格
        var form_dom     = config['form'] || 'form';//放数据的表格
        var table_height = \$(config['data_table']).height();
        \$('#loading-box').css({'top': -table_height - 50 + 'px'});
        query_num = 1;
        \$('#loading-box').show();
        if (!page) {
            page = 1;
        }
        if (!url) {
            url = '';
        }
        var params = \$(form_dom).serializeArray();
        if (url.indexOf(\"?\") == -1) {
            url = url + '?page=' + page + '&page_size=' + \$('#page_size_input').val();
        } else {
            url = url + '&page=' + page + '&page_size=' + \$('#page_size_input').val();
        }

        \$.ajax(url, {
            data: params,
            dataType: 'json',
            success: function (re) {
                query_num = 0;
                \$('#loading-box').hide();
                if (!re.status) {
                    layer.msg(re.msg);
                    return false;
                }
                var page_obj   = re.page;//page对象
                var data_count = page_obj.count;//数据总量
                var data_pages = page_obj.pages;//得到总页数
                var data_curr  = page_obj.curr + 1;//当前页数
                set_data(re.data, re.columns, config, re);//处理数据****************************************

                \$('#count_data_num').text(data_count);
                layui.use(['laypage', 'layer'], function () {
                    laypage = layui.laypage;
                    layer   = layui.layer;
                    laypage({
                        cont:    'page'
                        , pages: data_pages //得到总页数
                        , curr:  data_curr
                        , last:  '尾页'
                        , skip:  true
                        , skin:  '#5FB878'
                        , jump:  function (obj, first) {
                            if (!first) {
                                get_table_data(url, config, obj.curr);
                            }
                        }
                    });
                });
            }, error: function () {
                query_num = 0;
                layer.msg('获取数据失败');
                \$('#loading-box').hide();
            }
        });
    }
    /**
     * config={
    *   data_table:'#table_data'//放数据的table选择器，即放<tr><td></td></tr>的地方，可以是类名称也可以是id 书写格式与选择器一样即可
    *   ,first_td:'<td>内容</td>'//字符串，第一列的td、一般与数据内容无关时使用//必须写td标签,不传不添加
    *   ,last_td:'<td>内容</td>'//字符串，最后一列的td、一般与数据内容无关时使用//必须写td标签,不传不添加
    *   ,data_int_to_str:{status:{1:'交易中'，2:'交易完成'},}//json格式,需要转换成中文的数字代码，一般直接从业务模型中转换成json取出
    *   ,change_columns:{1:'<td key=\"@key\">@value</td>'}}////json格式,需要修改或新增td的属性时用，@key和 @value 将自动转换成数据中对应的键和值
     *  ,columns:[]|| string //列字段名集合，可实现排序,类型为数组或用英文逗号分格列名的字符串
     *   ,unchange_time:array||string//不需要格式化时间的字段名,数组或字符串以逗号分隔
     *   ,change_data:function(data){//函数，该函数必须接收一个data参数（查询得到的数据),该函数可以对data数据进行改造或处理，
    *      \$.each(data,function(k,v){
    *          data[k]['caozuo']='<a href=\"\" value=\"'+v['id']+'\">修改</a>'; //本例子为data新增一列 键为'caozuo'的数据，td 可写可不写
    *      });
    *      return data;           // 必须返回处理后的data,如果传递了本参数（change_data）,最终的数据将以该函数返回的data为主;
    *   }
     *
     * }
     *
     * */
    function set_data(data, columns, config, get_data_all_result) {
        var data_dom       = '';
        var change_columns = config['change_columns'] || {};
        columns            = config['columns'] || columns || [];
        if (typeof(columns) == \"string\") {
            columns = columns.split(\",\") || [];
        }
        //判断data_int_to_str是否存在
        if (!function () {
                try {
                    return data_int_to_str, true;
                } catch (e) {
                }
            }()) {
            //  data_int_to_str={};
            data_int_to_str = config['data_int_to_str'] || {};
        }
        var data_table  = config['data_table'] || '#data-table';//放数据的表格
        var change_data = config['change_data'] || {};
        if (\$.isFunction(change_data)) {
            var data = change_data(data, get_data_all_result);
        }


        \$('#now_page_count_data_num').text(data.length);
        \$.each(data, function (k, v) {
            var data_td = '';
            var i       = 0;
            if (columns.length == 0) {
                \$.each(v, function (kk, vv) {
                    i = i + 1;
                    if ((!config['unchange_time'] || config['unchange_time'].indexOf(kk) == -1) && kk.indexOf(\"time\") > 0) {
                        vv = formatDateTime(vv);
                    }
                    if (data_int_to_str.hasOwnProperty(kk)) {
                        vv = data_int_to_str[kk][vv];
                    }

                    if (change_columns[i] != undefined) {
                        change_columns[i] = change_columns[i].replace(/@key/g, kk);
                        change_columns[i] = change_columns[i].replace(/@value/g, vv);
                        data_td           = data_td + change_columns[i];
                    } else {
                        if (typeof vv == 'string' && vv.lastIndexOf(\"/td\") != -1) {
                            data_td = data_td + vv;
                        } else {
                            data_td = data_td + '<td class=\"' + '' + '\">' + vv + '</td>';
                        }
                    }
                });
            } else {
                \$.each(columns, function (ck, cv) {
                    i = i + 1;

                    if ((!config['unchange_time'] || config['unchange_time'].indexOf(cv) == -1) && cv.indexOf(\"time\") > 0) {
                        v[cv] = formatDateTime(v[cv]);
                    }

                    if (data_int_to_str.hasOwnProperty(cv)) {
                        v[cv] = data_int_to_str[cv][v[cv]];
                    }
                    if (change_columns[i] != undefined) {
                        change_columns[i] = change_columns[i].replace(/@key/g, cv);
                        change_columns[i] = change_columns[i].replace(/@value/g, v[cv]);
                        data_td           = data_td + change_columns[i];
                    } else {
                        if (typeof v[cv] == 'string' && v[cv].lastIndexOf(\"/td\") != -1) {
                            data_td = data_td + v[cv];
                        } else {
                            data_td = data_td + '<td class=\"' + '' + '\">' + v[cv] + '</td>';
                        }
                    }

                });
            }
            var first_id = config['first_id'] || '';
            var last_td  = config['last_td'] || '';
            data_dom     = data_dom + '<tr>' + first_id + data_td + last_td + '</tr>';
        });
        \$(data_table).html(data_dom);
        var success_function = config['success_function'] || {};
        if (\$.isFunction(success_function)) {
            success_function();
        }
    }

    //时间戳转换成Ymd H:i:s
    function formatDateTime(inputTime) {
        var date = new Date(inputTime * 1000);
        var y    = date.getFullYear();
        if (!inputTime || y < 2000) {
            return '';
        }
        var m      = date.getMonth() + 1;
        m          = m < 10 ? ('0' + m) : m;
        var d      = date.getDate();
        d          = d < 10 ? ('0' + d) : d;
        var h      = date.getHours();
        h          = h < 10 ? ('0' + h) : h;
        var minute = date.getMinutes();
        var second = date.getSeconds();
        minute     = minute < 10 ? ('0' + minute) : minute;
        second     = second < 10 ? ('0' + second) : second;
        return y + '-' + m + '-' + d + ' ' + h + ':' + minute + ':' + second;
    }

</script>", "Common/_ajax_pager.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Common\\_ajax_pager.twig");
    }
}
