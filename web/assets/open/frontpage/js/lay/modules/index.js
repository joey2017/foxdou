/**
	项目JS主入口
**/

/**element组件**/
layui.use(['layer', 'element'], function() {
	var layer = layui.layer,
		element = layui.element();

	//监听Tab切换
	element.on('tab(demo)', function(data) {
		//layer.msg('切换了：' + this.innerHTML);
		console.log(data);
	});
});