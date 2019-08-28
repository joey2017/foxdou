
accessid = '';
accesskey = '';
host = '';
policyBase64 = '';
signature = '';
callbackbody = '';
filename = '';
key = '';
expire = 0;
g_object_name = '';
g_object_name_type = '';
now = timestamp = Date.parse(new Date()) / 1000;
function new_upload(url,file_name,options,name_type) {
    serverUrl=url||'http://oss.aliyuncs.com';
    options=options||{};
    g_object_name_type=name_type||'local_name';//random_name随机生成，local_name源文件名称
    if(options['filters']){
        if(options['filters']['mime_types']==undefined){
            options['filters']['mime_types']= [{ title : "Image files", extensions : "jpg,gif,png,bmp" }]; //只允许上传图片和zip文件
        }
        if(options['filters']['max_file_size']==undefined){
            options['filters']['max_file_size']='10mb'; //最大只能上传10mb的文件,值可以为一个数字，单位为b,也可以是一个字符串，由数字和单位组成，如'200kb'
        }
    }

    var upload_options={
        runtimes : 'html5,flash,silverlight,html4',
        browse_button : 'shenfenzhengmian',
        //multi_selection: false,
       // container: 'body',
        flash_swf_url : 'lib/plupload-2.1.2/js/Moxie.swf',
        silverlight_xap_url : 'lib/plupload-2.1.2/js/Moxie.xap',
        url : serverUrl,//不可空
        multi_selection:false,//是否允许文件框多选，但不代表上传数量，限制上传数量需要另外写
        filters: {
            mime_types : [ //只允许上传图片和zip文件
                { title : "Image files", extensions : "jpg,gif,png,bmp" },
            ],
            max_file_size : '10mb', //最大只能上传10mb的文件,值可以为一个数字，单位为b,也可以是一个字符串，由数字和单位组成，如'200kb'
            prevent_duplicates : true //不允许选取重复文件,false为允许，默认为false
        },

        init: {
            PostInit: function() {},

            FilesAdded: function(up, files) {

                   plupload.each(files, function(file) {

                       var preloader = new mOxie.Image();
                       preloader.onload = function () {
                           preloader.downsize(180, 120);//先压缩一下要预览的图片
                           var imgsrc = preloader.type == 'image/jpeg' ? preloader.getAsDataURL('image/jpeg', 80) : preloader.getAsDataURL(); //得到图片src,实质为一个base64编码的数据
                           $('#img1').css('background','url("'+imgsrc+'") center center / 100% 100%');
                           preloader.destroy();
                           preloader = null;
                       }
                       preloader.load(file.getSource());
                       set_upload_param(up, file.name, false);
                   });

            },


            // QueueChanged:function (up, file) {
            //     if (up.files.length > 1) {
            //         up.splice(1, 1);
            //      //   alert('只能上传一个文件');
            //     }
            // },
            BeforeUpload: function(up, file) {//每个文件上传前要做的事
               // set_upload_param(up, file.name, true);
            },

            UploadProgress: function(up, file) {//每个文件上传中要做的事
                // var d = document.getElementById(file.id);
                // d.getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
                // var prog = d.getElementsByTagName('div')[0];
                // var progBar = prog.getElementsByTagName('div')[0]
                // progBar.style.width= 2*file.percent+'px';
                // progBar.setAttribute('aria-valuenow', file.percent);
            },

            FileUploaded: function(up, file, info) {


               //  document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = info.response+'-----'+info.status;
               if (info.status == 200)
               {
                     layer.msg(info.status);
               }
               // else if (info.status == 203)
               // {
               //     document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '上传到OSS成功，但是oss访问用户设置的上传回调服务器失败，失败原因是:' + info.response;
               // }
               // else
               // {
               //     document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = info.response;
               // }
            },

            Error: function(up, err) {
                // if (err.code == -600) {
                //     document.getElementById('console').appendChild(document.createTextNode("\n选择的文件太大了,可以根据应用情况，在upload.js 设置一下上传的最大大小"));
                // }
                // else if (err.code == -601) {
                //     document.getElementById('console').appendChild(document.createTextNode("\n选择的文件后缀不对,可以根据应用情况，在upload.js进行设置可允许的上传文件类型"));
                // }
                // else if (err.code == -602) {
                //     document.getElementById('console').appendChild(document.createTextNode("\n这个文件已经上传过一遍了"));
                // }
                // else
                // {
                //     document.getElementById('console').appendChild(document.createTextNode("\nError xml:" + err.response));
                // }
            }
        }
    };
    Object.assign(upload_options,options);
    var uploader = new plupload.Uploader(upload_options);
    uploader.init();
    uploader.start();



//*****************************

//获取签名信息
    function send_request()
    {
        var xmlhttp = null;
        if (window.XMLHttpRequest)
        {
            xmlhttp=new XMLHttpRequest();
        }
        else if (window.ActiveXObject)
        {
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }

        if (xmlhttp!=null)
        {

            xmlhttp.open( "GET", serverUrl, false );
            xmlhttp.send( null );
            return xmlhttp.responseText
        }
        else
        {
            alert("Your browser does not support XMLHTTP.");
        }
    }



    function get_signature()
    {
        //可以判断当前expire是否超过了当前时间,如果超过了当前时间,就重新取一下.3s 做为缓冲
        now = timestamp = Date.parse(new Date()) / 1000;
        if (expire < now + 3)
        {
            body = send_request()
            var obj = eval ("(" + body + ")");
            host = obj['host']
            policyBase64 = obj['policy']
            accessid = obj['accessid']
            signature = obj['signature']
            expire = parseInt(obj['expire'])
            callbackbody = obj['callback']
            key = obj['dir']
            return true;
        }


        return false;
    }

    function random_string(len) {
        len = len || 32;
        var chars = 'ABCDEFGHJKMNPQRSTWXYZabcdefhijkmnprstwxyz2345678';
        var maxPos = chars.length;
        var pwd = '';
        for (i = 0; i < len; i++) {
            pwd += chars.charAt(Math.floor(Math.random() * maxPos));
        }
        return pwd;
    }

    function get_suffix(filename) {
        pos = filename.lastIndexOf('.')
        suffix = ''
        if (pos != -1) {
            suffix = filename.substring(pos)//获取后缀名
        }
        return suffix;
    }

    function calculate_object_name(filename)
    {
        if (g_object_name_type == 'local_name')
        {
            g_object_name += "${filename}"//之所以用+=是因为原生的名字被服务端的dir拼接了
        }
        else if (g_object_name_type == 'random_name')//随机生成
        {
            suffix = get_suffix(filename)
            g_object_name = key + random_string(10) + suffix
        }
        return '';
    }
    //获取上传成功后的文件名
    function get_uploaded_object_name(filename)
    {
        if (g_object_name_type == 'local_name')
        {
            tmp_name = g_object_name
            tmp_name = tmp_name.replace("${filename}", filename);
            return tmp_name
        }
        else if(g_object_name_type == 'random_name')
        {
            return g_object_name
        }
        return '';
    }

    function set_upload_param(up, filename, ret)
    {
        if (ret == false)//第一次点击上传的时候
        {
            ret = get_signature();
        }
        g_object_name = key;//服务端返回的前缀dir

        if (filename != '') {
            suffix = get_suffix(filename);//设置后缀
            calculate_object_name(filename);
        }
        // var obj = eval ("(" + body + ")");
        // host = obj['host']
        // policyBase64 = obj['policy']
        // accessid = obj['accessid']
        // signature = obj['signature']
        // expire = parseInt(obj['expire'])
        // callbackbody = obj['callback']
        // key = obj['dir']

        new_multipart_params = {

            'key' : g_object_name,
            'policy': policyBase64,
            'OSSAccessKeyId': accessid,
            'success_action_status' : '200', //让服务端返回200,不然，默认会返回204
            'callback' : callbackbody,
            'signature': signature,
        };

        up.setOption({
            'url': host,
            'multipart_params': new_multipart_params
        });
      up.start();
    }

}