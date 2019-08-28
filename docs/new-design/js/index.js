/**
  项目JS主入口
**/    
layui.define(['form', 'element'], function(exports) {
	var form = layui.form,
		  element = layui.element;


	exports('index', {}); //注意，这里是模块输出的核心，模块名必须和use时的模块名一致
});
