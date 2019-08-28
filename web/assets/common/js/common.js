/**
 * Created by admin on 2017/2/22.
 */

/**
 * 输入input通用事件绑定器
 */
function bind_input_event(call_name,call_back){
    var dom = document.getElementsByClassName(call_name);
    for(v in dom){
        if (document.all) {
            dom[v].onpropertychange = function () {
                call_back();
            }
        } else {
            dom[v].oninput = function () {
                call_back();
            }
        }
    }
}

/**
 * 通用状态检测
 * @param url
 */
function check_status(url) {
    var re_data={}
    $.ajax({async:false,type:'get',url:url,dataType:'json',
        error:function(){
            re_data.status=false;
            re_data.msg='网络请求失败';
        },
        success:function (data) {
            if(data.status){
                re_data.status=true;
            }else{
                re_data.status=false;
                re_data.msg=data.msg;
            }
    }});
    return re_data;
}
//时间戳转换成Ymd H:i:s
function formatDateTime(inputTime) {
    var date = new Date(inputTime*1000);
    var y = date.getFullYear();
    var m = date.getMonth() + 1;
    m = m < 10 ? ('0' + m) : m;
    var d = date.getDate();
    d = d < 10 ? ('0' + d) : d;
    var h = date.getHours();
    h = h < 10 ? ('0' + h) : h;
    var minute = date.getMinutes();
    var second = date.getSeconds();
    minute = minute < 10 ? ('0' + minute) : minute;
    second = second < 10 ? ('0' + second) : second;
    return y + '-' + m + '-' + d+' '+h+':'+minute+':'+second;
}

function form2KeyValue() {
    
}

function ajax_post(url, form_data, success_callback, failure_callback) {
    $('.error').html('');
    $('.error').hide();
    $('.tips').show();

    $.post(url, form_data, function (data) {
            if(data.errors) {
                $.each(data.errors, function (key, error) {
                    $('.error.error_' + key).html(error.message);
                    $('.error.error_' + key).show();
                    $('.tips.tips_' + key).hide();
                })
            }

            if (data.msg) {
                layer.msg(data.msg);
            }

            if (!data.status && failure_callback && typeof(success_callback) === 'function') {
                failure_callback(data);
                return;
            }

            if(success_callback && typeof(success_callback) === 'function') {
                success_callback(data);
            }
        }, 'json'
    );
}
