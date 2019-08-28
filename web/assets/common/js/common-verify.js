/**
 * Created by admin on 2016/12/20.
 */
function _verify(othis, form) {
    var verify = form.config.verify;
    var ver = othis.attr('lay-verify'), tips = ''
        , value = othis.val(), isFn = typeof verify[ver] === 'function';
    if (verify[ver] && (isFn ? tips = verify[ver](value, othis) : !verify[ver][0].test(value))) {
        var msg = tips || verify[ver][1];
        othis.attr('check', false);
        othis.parent().siblings('.layui-word-aux').html('<i class="iconfont icon-cuo">&#xe607;</i><span>' + msg + '</span>');
    } else {
        othis.parent().siblings('.layui-word-aux').html('<i class="iconfont icon-dui">&#x3442;</i><span>输入正确</span>');
        othis.removeAttr('check')
    }
}
/**
 *全局验证检测
 * @param this_dom
 * @param form
 **/
function check_submit(this_dom, form) {
    this_dom.find('*[lay-verify]').each(function () {
        _verify($(this), form);
    });
    if (this_dom.find('*[check]').length > 0) {
        return false;
    }
    return true;
}

/**
 *绑定输入时验证
 * @param dom
 * @param form
 **/
function bind_verify(dom, form) {
    dom.find('*[lay-verify]').each(function () {
        if (document.all) {
            this.onpropertychange = function () {
                _verify($(this), form)
            }
        } else {
            this.oninput = function () {
                _verify($(this), form)
            }
        }
    });
}

/**
 * 身份与姓名合法性验证
 * @param url
 * @param name
 * @param senfen_number
 * @returns {string}
 */
function check_identity(url,name,senfen_number){
    var err_info={'0200':'证件格式不合法','0201':'证件格式不合法','0202':'证件格式不合法'
            ,'0203':'很抱歉，您的证件号码为黑名单，暂不能办理','9999':'很抱歉，您的证件号码为黑名单，暂不能办理'
        ,'0204':'很抱歉，您的证件号码办理的号码数过多，暂不能办理','0205':'很抱歉，您的证件号码下有号码为欠费，暂不能办理'
        ,'01':'非常抱歉，您的入网证件未在公安系统登记'
        ,'02':'名与证件号码不一致，请重新输入'
        ,'03':'非常抱歉，公安系统暂时关闭','04':'非常抱歉，公安系统暂时关闭'
        ,'99':'尊敬的客户目前办理的用户较多，暂时无法为您提供服务,请稍后再试'
    }
    var re ="";

    $.ajax({async:false,type:'post',url:url,data:{name:name,senfen_number:senfen_number},dataType:'json'
        ,success:function(err){
            if(err_info[err]){
                re=err_info[err];
            }
        }
    });

    return re;
}

function checkIdcard(idcard) {
    var Errors = new Array(
        "验证通过",
        "请输入18位身份证号",
        "身份证号码出生日期超出范围或含有非法字符",
        "身份证号码校验错误",
        "请输入正确的身份证号码"//身份证地区非法
    );
    var area = {
        11: "北京",
        12: "天津",
        13: "河北",
        14: "山西",
        15: "内蒙古",
        21: "辽宁",
        22: "吉林",
        23: "黑龙江",
        31: "上海",
        32: "江苏",
        33: "浙江",
        34: "安徽",
        35: "福建",
        36: "江西",
        37: "山东",
        41: "河南",
        42: "湖北",
        43: "湖南",
        44: "广东",
        45: "广西",
        46: "海南",
        50: "重庆",
        51: "四川",
        52: "贵州",
        53: "云南",
        54: "西藏",
        61: "陕西",
        62: "甘肃",
        63: "青海",
        64: "宁夏",
        65: "新疆",
        71: "台湾",
        81: "香港",
        82: "澳门",
        91: "国外"
    };
    var idcard, Y, JYM;
    var S, M;
    var idcard_array = new Array();
    idcard_array = idcard.split("");
    //地区检验
    if (area[parseInt(idcard.substr(0, 2))] == null) return Errors[4];
    //身份号码位数及格式检验
    switch (idcard.length) {
        /*case 15:
         if ((parseInt(idcard.substr(6, 2)) + 1900) % 4 == 0 || ((parseInt(idcard.substr(6, 2)) + 1900) % 100 == 0 && (parseInt(idcard.substr(6, 2)) + 1900) % 4 == 0)) {
         ereg = /^[1-9][0-9]{5}[0-9]{2}((01|03|05|07|08|10|12)(0[1-9]|[1-2][0-9]|3[0-1])|(04|06|09|11)(0[1-9]|[1-2][0-9]|30)|02(0[1-9]|[1-2][0-9]))[0-9]{3}$/; //测试出生日期的合法性
         } else {
         ereg = /^[1-9][0-9]{5}[0-9]{2}((01|03|05|07|08|10|12)(0[1-9]|[1-2][0-9]|3[0-1])|(04|06|09|11)(0[1-9]|[1-2][0-9]|30)|02(0[1-9]|1[0-9]|2[0-8]))[0-9]{3}$/; //测试出生日期的合法性
         }
         if (ereg.test(idcard)) return Errors[0];
         else return Errors[2];
         break;*/
        case 18:
            //18位身份号码检测
            //出生日期的合法性检查
            //闰年月日:((01|03|05|07|08|10|12)(0[1-9]|[1-2][0-9]|3[0-1])|(04|06|09|11)(0[1-9]|[1-2][0-9]|30)|02(0[1-9]|[1-2][0-9]))
            //平年月日:((01|03|05|07|08|10|12)(0[1-9]|[1-2][0-9]|3[0-1])|(04|06|09|11)(0[1-9]|[1-2][0-9]|30)|02(0[1-9]|1[0-9]|2[0-8]))
            if (parseInt(idcard.substr(6, 4)) % 4 == 0 || (parseInt(idcard.substr(6, 4)) % 100 == 0 && parseInt(idcard.substr(6, 4)) % 4 == 0)) {
                ereg = /^[1-9][0-9]{5}(19|20)[0-9]{2}((01|03|05|07|08|10|12)(0[1-9]|[1-2][0-9]|3[0-1])|(04|06|09|11)(0[1-9]|[1-2][0-9]|30)|02(0[1-9]|[1-2][0-9]))[0-9]{3}[0-9Xx]$/; //闰年出生日期的合法性正则表达式
            } else {
                ereg = /^[1-9][0-9]{5}(19|20)[0-9]{2}((01|03|05|07|08|10|12)(0[1-9]|[1-2][0-9]|3[0-1])|(04|06|09|11)(0[1-9]|[1-2][0-9]|30)|02(0[1-9]|1[0-9]|2[0-8]))[0-9]{3}[0-9Xx]$/; //平年出生日期的合法性正则表达式
            }
            if (ereg.test(idcard)) {//测试出生日期的合法性
                //计算校验位
                S = (parseInt(idcard_array[0]) + parseInt(idcard_array[10])) * 7
                    + (parseInt(idcard_array[1]) + parseInt(idcard_array[11])) * 9
                    + (parseInt(idcard_array[2]) + parseInt(idcard_array[12])) * 10
                    + (parseInt(idcard_array[3]) + parseInt(idcard_array[13])) * 5
                    + (parseInt(idcard_array[4]) + parseInt(idcard_array[14])) * 8
                    + (parseInt(idcard_array[5]) + parseInt(idcard_array[15])) * 4
                    + (parseInt(idcard_array[6]) + parseInt(idcard_array[16])) * 2
                    + parseInt(idcard_array[7]) * 1
                    + parseInt(idcard_array[8]) * 6
                    + parseInt(idcard_array[9]) * 3;
                Y = S % 11;
                M = "F";
                JYM = "10X98765432";
                M = JYM.substr(Y, 1); //判断校验位
                if (M == idcard_array[17]) return Errors[0]; //检测ID的校验位
                else return Errors[3];
            }
            else return Errors[2];
            break;
        default:
            return Errors[1];
            break;
    }
}

/**
 * 同步检测用户证件号
 * @param url
 * @param zenjian_number
 * @param type
 * @param callback
 * @returns {string}
 */
function check_reg_zenjianhao(url,zenjian_number,type,callback) {
    var status='';
    $.ajax({url:url,async:false,type:'post',dataType:'json',data:{card_id:zenjian_number,type:type},success:function (re) {
        if(!re.status){
            status=re.msg;
        }
        callback(re);
    }});
    return status;
}
/**
 * 检测注册证件号码
 * @param url
 * @param value
 * @param msg
 * @returns {string}
 */
function check_reg_number(url,type,value,msg) {
    var chek_msg='';
    var data;
    if(type=='mail'){
        data={mail:value};
    }else if(type=='mobile'){
        data={mobile:value};
    }
    $.ajax({url:url,
        async:false,type:'post',dataType:'json',data:data,success:function (re) {
            if(!re.status){
                chek_msg=msg;
            }
        }});
    if(chek_msg){
        return chek_msg;
    }
}

/**
 * 输出select dom
 * @param data dom 数据元素
 * @param dom 需要插入DOM ($('xx'))
 */
function out_select(data, dom,name) {
    var str;
    str='<option value="">' + name + '</option>';
    for (v in data) {
        str += '<option value="' + data[v].id + '">' + data[v].areaname + '</option>';
    }
    var op = dom.html();
    op += dom.html(str)
}

/**
 * 显示正确或是错误的信息
 * @param dom
 * @param msg
 * @param rightOrWrong
 */
function createAlertMsg(dom,msg,rightOrWrong) {
    var div_start='<div class="layui-form-mid layui-word-aux">';
    var cuo='<i class="iconfont icon-cuo">&#xe607;</i><span>';
    var dui='<i class="iconfont icon-dui">&#x3442;</i><span>';
    var div_end='</span></div>';
    var adddivmsg='';
    var addspan='';
    if(rightOrWrong==true){
        adddivmsg=div_start+dui+msg+div_end;
        addspan=dui+msg+'</span>';
    }else{
        adddivmsg=div_start+cuo+msg+div_end;
        addspan=cuo+msg+'</span>';
    }
    if( dom.parents('.layui-form-item').find('.layui-word-aux').length==0 ){
        dom.parents('.layui-form-item').append(adddivmsg);
    }else{
        dom.parents('.layui-form-item').find('.layui-word-aux').html(addspan);
    }
}

/**
 * 系统设置倒计时
 */
function jump(count,dom,callback) {
    dom.text(count);
    window.setTimeout(function(){
        count--;
        if(count >=0 ) {
            jump(count,dom,callback);
        }else{
            dom.text('');
            callback();
        }
    }, 1000);
}

/**
 * 设置倒计时
 */
function setCountDown(dom_button,dom_span,dom_span_content,msg){
  	if(typeof msg=='undefined' ){
      msg = '';
    }
    dom_span_content.text('秒后重新发送'+msg);
    dom_button.attr('disabled',true);
    jump(60,dom_span,function () {
        dom_span_content.text('重新发送'+msg);
        dom_button.removeAttr('disabled');
    });
}

/**
 * 营业执照或社会信用代码校验
 * @param license
 * @returns {*}
 */
function verifyLicenseId(license){
    var len=license.length;
    var idcard_array = new Array();
    idcard_array = license.split("");
    var i=0;
    if(len==15){
        var reg=/^[1-9][\d]{14}$/;
        if(reg.test(license)) {
            var pj = 10;
            var sj=0;
            for (i = 0; i < 14; i++) {
                sj = (pj + parseInt(idcard_array[i]));
                sj=sj>10?(sj-10):sj;
                pj = (sj * 2) % 11;
            }
            pj =(pj + parseInt(idcard_array[14])) % 10;

            if ( pj == 1) {
                return '格式正确';
            }else {
                return '营业执照号码校验错误';
            }
        }else{
            return '非法字符';
        }
    }else if(len==18){
        var code=license;
        var reg = /^([0-9ABCDEFGHJKLMNPQRTUWXY]{2})([0-9]{6})([0-9ABCDEFGHJKLMNPQRTUWXY]{9})([0-9ABCDEFGHJKLMNPQRTUWXY])$/;
        if(!reg.test(code)){
            return "营业执照号码校验错误";
        }
        var str = '0123456789ABCDEFGHJKLMNPQRTUWXY';
        var ws =[1,3,9,27,19,26,16,17,20,29,25,13,8,24,10,30,28];
        var codes  = new Array();
        codes[0] = code.substr(0,code.length-1);
        codes[1] = code.substr(code.length-1,code.length);
        var sum = 0;
        for(i=0;i<17;i++){
            sum += str.indexOf(codes[0].charAt(i)) * ws[i];
        }
        var c18 = 31 - (sum % 31);
        if(c18 == 31){
            c18 = '0';
        }else{
            c18=str.charAt(c18);
        }
        if(c18 != codes[1]){
            return "营业执照号码校验错误";
        }
        return '格式正确';
    }else{
        return '营业执照号码长度错误';
    }

}
