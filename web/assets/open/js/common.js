var form = layui-form;
var carousel = layui.carousel;
var upload = layui.upload;
var laypage = layui.laypage;
var layer = layui.layer;
var laydate = layui.laydate;

//完整的分页功能
laypage.render({
    elem: 'layPaging'
    ,count: 100
    ,theme: '#1E9FFF'
    ,layout: ['count', 'prev', 'page', 'next', 'limit', 'skip']
    ,jump: function(obj){
    	
	}
});

//日期时间范围
laydate.render({
    elem: '#timeFrame'
    ,range: true
});

//查看统计
$('#statistics').click(function(){
	$('.layadmin-elem-quote').slideDown();
});