var form = layui.form;
var element = layui.element;
var laydate = layui.laydate;
var layer = layui.layer;
var code = layui.code;
var table = layui.table;
var layedit = layui.layedit;
var upload = layui.upload;


//运营数据-日期范围选择
laydate.render({
    elem: '#timeFrame'
    ,range: true
});
//日期范围-表单里的日期选择
laydate.render({
    elem: '#dateRange'
    ,range: true
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
		
		//侧栏伸缩-鼠标经过显示tips
//		$('.layadmin-side-shrink .layui-side .layui-nav-item').hover(function(){
//			var this_obj = this;
//			var txt = $(this).find('cite').text();
//			
//			layer.tips(txt,this_obj);
//		},function(){
//			var index = layer.tips();
//			layer.close(index); 
//		});
//end第一次有效，第二次出现bug了。。。。。
		
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