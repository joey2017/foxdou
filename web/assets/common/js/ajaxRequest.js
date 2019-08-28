;(function(win,$){

    var nxwd = {

        /* 显示提示信息
         * @param string msg        提示信息
         * @param string type       信息类型，可选值：success/warning/danger
         */
        showMsg: function(msg, type, timeout){
            if(typeof(type) == 'undefined' || !type || type == '')
                type = 'warning';

            if(typeof(timeout) == 'undefined' || !timeout || timeout == '')
                timeout = 3000;

            var icon = 7;
            if(type == 'success'){
                icon = 1;
            }else if(type == 'danger'){
                icon = 2;
            }

            layer.msg(msg, {icon: icon,time: timeout});
        },
        /**
         * 打开弹窗
         *
         * @param string title,     弹窗显示的标题
         * @param string width,     弹窗宽度，css风格，如500px或50%
         * @param string height,    弹窗高度，css风格，如500px或50%
         * @param string domElement/html,弹窗内容元素id属性值/html元素
         */
        ajaxOpen: function(title, width, height, domElement){
            var loading = null;
            var args = {type: 1};
            var that = this;

            if(typeof(title) == 'undefined' || title == '')
                title = '系统提示';

            args.title = title;

            if(typeof(width) != 'undefined' && width != 'full'){
                if(typeof(height) != 'undefined')
                    args.area = [width, height];
                else
                    args.area = width;
            }
            if(document.getElementById(domElement))
                args.content = $('#'+domElement);
            else
                args.content = domElement;

            args.scrollbar = false;
            args.shadeClose = true;
            args.zIndex = 1031;

            layer.close(loading);
            that.layerbox = layer.open(args);

            if(typeof(width) != 'undefined' && width == 'full')
                layer.full(that.layerbox);

        },

        /**
         * 带按钮回调功能弹出div
         * @param title
         * @param id
         * @param w
         * @param h  w,h均无效时，弹出层大小auto
         */
        ajaxOpenCallBack: function(title,id,w,h,yes,btn2){
            var args = {
                type: 1,
                title: title,
                area: [w+'px', h +'px'],
                fix: false, //不固定
                btn: ['确定', '取消'],
                yes: yes,
                btn2: btn2,
                cancel: function(){
                    $('#'+id +'').hide();
                },
                shade:0.4,
                btnAlign: 'c',
                content: $('#' + id + '')
            };

            if (title == null || title == '') {
                args.title=false;
            }

            if (btn2 == '' || btn2 == null) {
                args.btn2 = function(){
                    $('#'+id +'').hide();
                }
            }

            if ((w == undefined || w == 0 || w == null || w == '') && (h == undefined || h == 0 || h == null || h == '')) {
                args.area = 'auto'
            }

            layer.open(args);
        },

        /**
         * 发送AJAX请求
         *
         * @param url           请求URL
         * @param type          请求类型，取值post|get
         * @param data          发送数据，对象格式：如{id: 1, ...}；字符串形式：如'id=1&cid=0...'
         * @param dataType      接收数据类型，常用值json|html
         * @param success       请求成功回调方法，可接收三个参数：第一个为返回数据；第二个为返回状态码，如200，404等；第三个参数为jqXHR对象；一般情况下只用第一个参数
         * @param before        提交请求前回调方法；可接收二个参数：第一个为jqXHR对象；第二个为ajax配置参数
         * @param error         请求失败回调方法，可接收三个：第一个为jqXHR对象；第二个为返回状态码如200，404等；第三个为抛出错误文本，如‘Page Not Found’等
         */
        ajaxRequest: function(url, type, data, dataType, success, before, error){
            var config = {};

            config.url  = (typeof(url) == 'undefined' || url == '') ? window.location.href : url;
            config.type = (typeof(type) == 'undefined' || type == '') ? 'get' : type;
            config.data = (typeof(data) == 'undefined' || data == '') ? {} : data;
            config.dataType = (typeof(dataType) == 'undefined' || dataType == '') ? 'html' : dataType;

            if(typeof(before) == 'function'){
                config.beforeSend = function(jqXHR, settings){
                    before(jqXHR, settings);
                };
            }

            if(typeof(error) == 'function'){
                config.error = function(jqXHR, textStatus, errorThrown){
                    error(jqXHR, textStatus, errorThrown);
                };
            }

            if(typeof(success) == 'function'){
                var self = this;

                config.success = function(data, textStatus, jqXHR){
                    success(data, textStatus, jqXHR);
                };
            }

            $.ajax(config);
        },

        /**
         * 通过ajax方式实现逻辑删除项目
         *
         * @param string url, 请求url
         * @param string btn, 交互按钮
         * @param bool bulk, 是否为批量操作true|false
         * @param bool item_id, 操作项目id
         */
        ajaxDelete: function(url, btn, bulk, item_id){
            var btn = $(btn);
            var txt = btn.text();
            var args = {};

            if(bulk){
                args.id = [];

                var layui_table = $('.layui-table-box');
                layui_table.find('input:checkbox').next().each(function (i,e) {
                    if ($(e).is('.layui-form-checked')) {
                        args.id.push($(e).parents('td').next().find('div').text());
                    }
                })

                if(args.id.length < 1){
                    this.showMsg('请选择需要操作的项目', 'warning');
                    return false;
                }
            }
            else{
                args.id = item_id;

                if(args.id == '' || args.id == null || args.id == 0 || typeof(args.id) == 'undefined'){
                    this.showMsg('缺少操作项目ID', 'warning');
                    return false;
                }
            }

            var that = this;

            var before = function(){
                btn.attr('disabled', true).text('处理中');
            };

            var error = function(){
                btn.removeAttr('disabled').text(txt);
                that.showMsg('删除失败，请稍后重试', 'danger');
            };

            var success = function(data){
                btn.removeAttr('disabled').html(txt);

                var msg = '';

                if(typeof(data.msg) != 'undefined' && data.msg != '')
                    msg = data.msg;

                if(data && typeof(data.status) != 'undefined'){
                    if(data.status > 0){
                        if(msg == '')
                            msg = '操作成功！页面正在刷新';
                        layer.closeAll('page');
                        that.showMsg(msg, 'success');
                        location.reload();
                    }
                    else{
                        if(msg == '')
                            msg = '操作失败！请稍后重试';

                        that.showMsg(msg, 'danger');
                    }
                }
            };

            var ok = layer.confirm('您确定要执行作废操作吗？', {icon: 3, title: '系统提示'}, function(){
                layer.close(ok);
                that.ajaxRequest(url, 'post', args, 'json', success, before, error);
            });
        },
    };

    win.nxwd = nxwd;
})(window,jQuery);