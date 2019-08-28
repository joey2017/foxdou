/**
 * Created by aa on 2017/10/31.
 */
//检查输入
function isPasswdInput(dom){
    var passwd;
    if(dom.length>0){
        passwd=dom.val();
        if(passwd.length>25){
            passwd=passwd.substr(0,25);
            dom.val(passwd);
        }
        return passwd;
    }
    return false;
}

//验证输入密码的强度
function verifyPasswdStrong(passwd){
    var lv=0;
    if(passwd.match(/[a-z]/g)){lv++;}
    if(passwd.match(/[0-9]/g)){lv++;}
    if(passwd.match(/(.[^a-z0-9])/g)){lv++;}
    lv+=passwd.length/10;
    if(lv<2){
        return '弱';
    }else if(lv<3){
        return '中';
    }else if(lv<4){
        return '强';
    }else{
        return '非常强';
    }
}

/**
 * 输入密码和验证密码检测是否相等
 */
function verifyPasswdSame(passwd,passwd_comforn){
    return passwd==passwd_comforn;
}

/**
 * 显示信息
 */
function showPasswdMsg(dom,message,type) {
    var icon_dui='<i class="iconfont icon-dui">&#x3442;</i>';
    var icon_cuo='<i class="iconfont icon-cuo">&#xe607;</i>';
    var dom_show=dom.parents('.layui-form-item').find('.layui-word-aux');
    if(type==true){
        passwd_dom_change(dom_show,message,icon_dui,'icon-dui','&#x3442;');
    }else{
        passwd_dom_change(dom_show,message,icon_cuo,'icon-cuo','&#xe607;');
    }
}

/**
 * 密码栏添加或修改元素
 */
function passwd_dom_change(dom,message,icon,icon_class,sign){
    if(dom.find('i').length>0){
        if(dom.find('.'+icon_class).length==0){
            dom.find('i').removeClass();
            dom.find('i').html(sign);
            dom.find('i').addClass('iconfont '+icon_class);
        }
    }else{
        dom.append(icon);
    }
    if(dom.find('span').length>0){
        dom.find('span').text(message);
    }else{
        dom.append('<span>'+message+'</span>');
    }
}

/**
 * 检测输入的长度
 */
function lengthtest(dom_passwd,passwd,now_msg,show_error){
    if(passwd){
        if(passwd.length<6) {
            if(show_error){
                showPasswdMsg(dom_passwd,now_msg+'密码长度大于6位',false);
            }
            return false;
        }else if(passwd.length<=25){
            return true;
        }else{
            if(show_error){
                showPasswdMsg(dom_passwd,now_msg+'密码长度不能超过25位',false);
            }
            return false;
        }
    }else{
        if(show_error){
            showPasswdMsg(dom_passwd,now_msg+'密码不能为空',false);
        }
        return false;
    }
}

/**
 * 检测确认密码
 */
function checkconform(dom_passwd,passwd,passwd_afm,now_msg,show_error){
    if(passwd_afm){
        if(!verifyPasswdSame(passwd,passwd_afm)){
            if(show_error) {
                showPasswdMsg(dom_passwd, now_msg + '密码与' + now_msg + '确认密码不一致', false);
            }
            return false;
        }
    }
    return true;
}

/**
 * 检测其他密码
 */
function checkOther(dom_passwd,other_passwd,passwd,passwd_afm,type_pd,show_error){
    if(other_passwd){
        if(type_pd=='passwd'){
            passwd_compare=passwd;
        }else{
            passwd_compare=passwd_afm;
        }
        if(verifyPasswdSame(passwd_compare,other_passwd)){
            if(show_error) {
                showPasswdMsg(dom_passwd, '支付密码与登录密码不能一样', false);
            }
            return false;
        }
    }
    return true;
}

/**
 * 检测密码强度
 */
function checkStrong(dom_passwd,passwd,now_msg,type_pd){
    if(type_pd=='passwd'){
        var strong=verifyPasswdStrong(passwd);
        showPasswdMsg(dom_passwd,strong,true);
    }else{
        showPasswdMsg(dom_passwd,now_msg+'密码输入正确',true);
    }
    return true;
}

/**
 * 检测密码
 */
function checkPasswd(dom_passwd,dom_passwd_afm,dom_other_passwd,now_msg,type_pd,show_error){
    var passwd_compare;
    var passwd=isPasswdInput(dom_passwd);
    var passwd_afm=isPasswdInput(dom_passwd_afm);
    var other_passwd=isPasswdInput(dom_other_passwd);
    if(lengthtest(dom_passwd,passwd,now_msg,show_error)){
        if(!checkconform(dom_passwd,passwd,passwd_afm,now_msg,show_error)){
            return false;
        }
        if(!checkOther(dom_passwd,other_passwd,passwd,passwd_afm,type_pd,show_error)){
            return false;
        }
        return checkStrong(dom_passwd,passwd,now_msg,type_pd);
    }
    return false;
}

var checked;
function checkAll(passwd_dom,affirm_p_dom,passwd_other,affirm_passwd_other,now) {
    var check_login_p=false,check_login_confirm=false,check_pay=false,check_pay_confirm=false;
    switch (now){
        case 'login':
            check_login_p=checkPasswd(passwd_dom,affirm_p_dom,passwd_other,'登录','passwd',true);
            if(isPasswdInput(affirm_p_dom)){
                check_login_confirm=checkPasswd(affirm_p_dom,passwd_dom,passwd_other,'登录','confirm',false);
            }
            if(isPasswdInput(passwd_other)){
                check_pay=checkPasswd(passwd_other,affirm_passwd_other,passwd_dom,'支付','passwd',false);
            }
            if(isPasswdInput(affirm_passwd_other)){
                check_pay_confirm=checkPasswd(affirm_passwd_other,passwd_other,passwd_dom,'支付','confirm',false);
            }
            break;
        case 'login_confirm':
            check_login_confirm=checkPasswd(affirm_p_dom,passwd_dom,passwd_other,'登录','confirm',true);
            if(isPasswdInput(passwd_dom)){
                check_login_p=checkPasswd(passwd_dom,affirm_p_dom,passwd_other,'登录','passwd',false);
            }
            if(isPasswdInput(passwd_other)){
                check_pay=checkPasswd(passwd_other,affirm_passwd_other,passwd_dom,'支付','passwd',false);
            }
            if(isPasswdInput(affirm_passwd_other)){
                check_pay_confirm=checkPasswd(affirm_passwd_other,passwd_other,passwd_dom,'支付','confirm',false);
            }
            break;
        case 'pay':
            check_pay=checkPasswd(passwd_other,affirm_passwd_other,passwd_dom,'支付','passwd',true);
            if(isPasswdInput(passwd_dom)){
                check_login_p=checkPasswd(passwd_dom,affirm_p_dom,passwd_other,'登录','passwd',false);
            }
            if(isPasswdInput(affirm_p_dom)){
                check_login_confirm=checkPasswd(affirm_p_dom,passwd_dom,passwd_other,'登录','confirm',false);
            }
            if(isPasswdInput(affirm_passwd_other)){
                check_pay_confirm=checkPasswd(affirm_passwd_other,passwd_other,passwd_dom,'支付','confirm',false);
            }
            break;
        case 'pay_confirm':
            check_pay_confirm=checkPasswd(affirm_passwd_other,passwd_other,passwd_dom,'支付','confirm',true);
            if(isPasswdInput(passwd_dom)){
                check_login_p=checkPasswd(passwd_dom,affirm_p_dom,passwd_other,'登录','passwd',false);
            }
            if(isPasswdInput(affirm_p_dom)){
                check_login_confirm=checkPasswd(affirm_p_dom,passwd_dom,passwd_other,'登录','confirm',false);
            }
            if(isPasswdInput(passwd_other)){
                check_pay=checkPasswd(passwd_other,affirm_passwd_other,passwd_dom,'支付','passwd',false);
            }
            break;
        default:
            return false;
            break;
    }
    if(check_login_p&&check_pay_confirm&&check_pay&&check_login_confirm){
        checked=true;
    }else{
        checked=false;
    }
    return checked;
}
/*绑定密码验证*/
$('input[name="password"]').blur(function () {
    checkAll($(this),$('input[name="affirm_password"]'),$('input[name="pay_password"]'),$('input[name="pay_affirm_password"]'),'login');
});

$('input[name="affirm_password"]').blur(function () {
    checkAll($('input[name="password"]'),$(this),$('input[name="pay_password"]'),$('input[name="pay_affirm_password"]'),'login_confirm');
});
$('input[name="pay_password"]').blur(function () {
    checkAll($('input[name="password"]'),$('input[name="affirm_password"]'),$(this),$('input[name="pay_affirm_password"]'),'pay');
});
$('input[name="pay_affirm_password"]').blur(function () {
    checkAll($('input[name="password"]'),$('input[name="affirm_password"]'),$('input[name="pay_password"]'),$(this),'pay_confirm');
});