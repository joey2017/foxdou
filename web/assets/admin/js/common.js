var form = layui.form;
var element = layui.element;
var laydate = layui.laydate;
var layer = layui.layer;
var code = layui.code;
var table = layui.table;
var layedit = layui.layedit;
var upload = layui.upload;
var carousel = layui.carousel;
var laypage = layui.laypage;


/** 对Date的扩展，将 Date 转化为指定格式的String
 *  月(M)、日(d)、小时(h)、分(m)、秒(s)、季度(q) 可以用 1-2 个占位符
 *  年(y)可以用 1-4 个占位符，毫秒(S)只能用 1 个占位符(是 1-3 位的数字)
 *  (new Date()).Format("yyyy-MM-dd hh:mm:ss") ==> 2006-07-02 08:09:04
 */

Date.prototype.Format = function(fmt) {
    var o = {
        "M+" : this.getMonth()+1,                 //月份
        "d+" : this.getDate(),                    //日
        "h+" : this.getHours(),                   //小时
        "m+" : this.getMinutes(),                 //分
        "s+" : this.getSeconds(),                 //秒
        "q+" : Math.floor((this.getMonth()+3)/3), //季度
        "S"  : this.getMilliseconds()             //毫秒
    };
    if(/(y+)/.test(fmt))
        fmt=fmt.replace(RegExp.$1, (this.getFullYear()+"").substr(4 - RegExp.$1.length));
    for(var k in o)
        if(new RegExp("("+ k +")").test(fmt))
            fmt = fmt.replace(RegExp.$1, (RegExp.$1.length==1) ? (o[k]) : (("00"+ o[k]).substr((""+ o[k]).length)));
    return fmt;
}

//运营数据-日期范围选择
laydate.render({
    elem: '#timeFrame',
    value: new Date().Format('yyyy-MM-dd')+' ~ '+new Date().Format('yyyy-MM-dd'),
    done: function(value){
        var range_time = value.split('~');
        $('#start_time').val(range_time[0].trim());
        $('#end_time').val(range_time[1].trim());
    },
    range: '~'
});


//富文本编辑器
layedit.build('demo');

//实时监控浏览器宽度
window.onresize=resizeBannerImage;//当窗口改变宽度时执行此函数
function resizeBannerImage(){
    var winW = $(window).width();
    if( $(window).width() < 1366 ) {
        $('.layadmin-tabspage-none').addClass('layadmin-side-shrink');
    }else{
        $('.layadmin-tabspage-none').removeClass('layadmin-side-shrink');
    }
}

//侧栏伸缩显示
$('.layadmin-flexible').click(function(){
    var bool = $('.layadmin-tabspage-none').is('.layadmin-side-shrink');
    if(bool == false){
        $('.layadmin-tabspage-none').addClass('layadmin-side-shrink');
    }else{
        $('.layadmin-tabspage-none').removeClass('layadmin-side-shrink');
    }

    $(this).removeClass('layui-this');
});


//主体内容-各类新增页面-点击小标题【展开】【收起】
$('.layui-folda-title').click(function(){
    var display = $(this).next('div').css('display');

    //console.log(display);
    $(this).next('div').slideToggle();
    if(display == 'block'){
        $(this).find('i').addClass('layui-icon-triangle-r');
        $(this).find('i').removeClass('layui-icon-triangle-d');
    }else {
        $(this).find('i').addClass('layui-icon-triangle-d');
        $(this).find('i').removeClass('layui-icon-triangle-r');
    }
});


//普通图片上传
var uploadInst = upload.render({
    elem: '#uploadBtn'
    ,url: '/upload/'
    ,before: function(obj){
        //预读本地文件示例，不支持ie8
        obj.preview(function(index, file, result){
            $('#demoImg').attr('src', result); //图片链接（base64）
        });
    }
    ,done: function(res){
        //如果上传失败
        if(res.code > 0){
            return layer.msg('上传失败');
        }
        //上传成功
    }
    ,error: function(){
        //演示失败状态，并实现重传
        var demoText = $('#demoText');
        demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-xs demo-reload">重试</a>');
        demoText.find('.demo-reload').on('click', function(){
            uploadInst.upload();
        });
    }
});

window.onload = function (ev) {
    $('.layer-date').each(function () {
        var key = $(this).attr('id');
        bind_laydate('#' + key)
    });

    /**
     *laydate dom 绑定 配合jq each可以完成批量绑定
     * @param key
     */
    function bind_laydate(key) {
        var ob = {
            elem: key,
            format: "YYYY-MM-DD",
            istime: true,
            istoday: true
        };
        layui.laydate.render(ob);
    }

    /*
    * 下拉列表插件载入
    */
    if(typeof xui != 'undefined')
        xui.select2();
}

function merge_json(jsonbject1, jsonbject2) {
    var resultJsonObject = {};
    for (var attr in jsonbject1) {
        resultJsonObject[attr] = jsonbject1[attr];
    }
    for (var attr in jsonbject2) {
        resultJsonObject[attr] = jsonbject2[attr];
    }
    return resultJsonObject;
}


/**
 * layui table数据渲染 带回调
 */
function rander_table(elem, url, columns, callback) {
    var args = {
        elem:   elem
        , url:  url
        , cellMinWidth:  80
        , cols: columns
        , page: { //支持传入 laypage 组件的所有参数（某些参数除外，如：jump/elem） - 详见文档
            layout:   ['prev', 'page', 'next', 'skip', 'limit', 'count'] //自定义分页布局
            , limits: [10, 25, 50, 100]
        }
        , id:   "id"
        , text: {none: '无数据'}
        , response: {
            statusName: 'status'
            ,statusCode: true
            ,msgName: 'msg'
            ,countName: 'total'
            ,dataName: 'data'
        },
        done: function(res, curr, count){
            if (count * 1 > 0) {
                var width = $('.layui-table-header table').css('width');
                width = width.substring(0,width.length-2)*1 + 30 + '' +'px';
                $('.layui-fluid').css({'width':width,'padding-right':'15px'});
            }
        }
    };

    if (typeof callback == 'function' || callback === '') {
        args.done = callback;
    }
    table.render(args);
}

/**
 * 发送消息弹框
 */
function send_msg(url){
    layer.open({
        type:1,
        area:['450px','300px'],
        content:'<div id="send_user_msg">' +
                 '    <div class="layui-form-item" style="margin-top: 15px;width:90%">' +
                 '        <label class="layui-form-label">标题</label>' +
                 '        <div class="layui-input-block" style="margin-left: 85px">' +
                 '            <input type="text" name="title" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">' +
                 '        </div>' +
                 '    </div>' +
                 '    <div class="layui-form-item layui-form-text" style="width:90%">' +
                 '        <label class="layui-form-label">内容</label>' +
                 '        <div class="layui-input-block" style="margin-left: 85px">' +
                 '            <textarea name="content" placeholder="请输入内容" class="layui-textarea"></textarea>' +
                 '        </div>' +
                 '    </div>' +
                 '    <div class="layui-form-item" style="width:90%">' +
                 '        <div class="layui-input-block" style="margin-left: 85px">' +
                 '            <button class="layui-btn submit" lay-submit lay-filter="formDemo">立即提交</button>' +
                 '        </div>' +
                 '    </div>' +
                 '</div>',
    });

    $('#send_user_msg .submit').on('click',function(){
        var that = $(this);
        var txt = that.text();
        var user_ids = [];
        $('.ibox-content').find('.layui-form-checked').each(function () {
            user_ids.push($(this).parents('tr').find('td[data-field=status] button').attr('data-id'));
        });
        var title = $('input[name=title]').val();
        var content = $('textarea[name=content]').val();
        if (user_ids.length == 0){
            layer.alert('请选择要发送的用户');
            return false;
        }
        if (title == '' || content == ''){
            layer.alert('请填写标题或内容')
            return false;
        }
        $.ajax({
            url:url,
            type:'post',
            dateType:'json',
            data:{user_ids:user_ids,title:title,content:content},
            beforeSend:function(){
                that.attr('disabled',true).html('处理中...');
            },
            success:function (res) {
                that.removeAttr('disabled').html(txt);
                if(res.status){
                    layer.msg(res.msg, {time:1000});
                    setTimeout(function(){
                        layer.closeAll();
                    },1500);
                }else{
                    layer.alert(res.msg);
                }
            },
            error:function (res) {
                that.removeAttr('disabled').html(txt);
                layer.alert('服务器未响应，请稍后重试');
                return false;
            }
        })
    });
}


Array.prototype.indexOf = function(val) {
    for (var i = 0; i < this.length; i++) {
        if (this[i] == val) return i;
    }
    return -1;
};

Array.prototype.remove = function(val) {
    var index = this.indexOf(val);
    if (index > -1) {
        this.splice(index, 1);
    }
};

/*
 * 打开新窗口居中
 * @param url               打开的url地址
 * @param name              打开窗口的名称
 * @param iWidth            打开窗口的宽度
 * @param iHeight           打开窗口的高度
 */
function openWin(url,name,iWidth,iHeight) {
    //获得窗口的垂直位置
    var iTop  = (window.screen.availHeight - 30 - iHeight) / 2;
    //获得窗口的水平位置
    var iLeft = (window.screen.availWidth - 10 - iWidth) / 2;
    window.open(url, name, 'height=' + iHeight + ',innerHeight=' + iHeight + ',width=' + iWidth + ',innerWidth=' + iWidth + ',top=' + iTop + ',left=' + iLeft + ',status=no,toolbar=no,menubar=no,location=no,resizable=no,scrollbars=0,titlebar=no');
}

/**
 * 批量冻结/解冻用户状态
 * @param url           请求url链接
 * @param status        冻结或解冻状态(SUSPENDED,ACTIVE)
 * @param checked_ids   选中账户id
 */
function frozenUserStatus(url,status,checked_ids) {
    if(typeof checked_ids == 'undefined' || checked_ids.length == 0){
        nxwd.showMsg('至少选择一条记录')
        return false;
    }

    var action = (status == 'SUSPENDED') ? '冻结' : '解冻';

    layer.confirm('你确定要'+action+'选中的账户吗？', {
        btn: ['确定','取消'] //按钮
    }, function(index){
        layer.close(index);
        var loading = null;
        var before = function(){
            loading = layer.load();
        }
        var error = function(){
            layer.close(loading);
            nxwd.showMsg('服务器未响应，请稍后重试');
        }
        var success = function(res){
            layer.close(loading);
            if (res.status) {
                nxwd.showMsg(res.msg,'success');
                location.reload();
            } else {
                nxwd.showMsg(res.msg,'danger');
            }
        }
        nxwd.ajaxRequest(url,'POST',{ids:checked_ids,status:status},'json',success,before,error);
    });
}

