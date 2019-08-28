;
(function($) {

	var xui = {}

/**
   * select  控件
   * @param dom
   * @param name 生在的INPUT name名称
   * @param op option 数据
   *@param 第四个能数可传可不传
*/
  xui.select = function(dom, name,op, type) {
		var opp=arguments[4]?arguments[4]:null;
		var content="请选择",val=null;
		type=type?type:'input';
		if(opp!=null){
		  content =opp.content?opp.content:content;
		  val =opp.val?opp.val:null;
		}
		dom.empty();
		//DOM创建
		dom.append('<div style="cursor: pointer;" class="select_showbox">' + content + '</div>');
		dom.append('<ul class="select_option"></ul>');
		
		switch(type)
		{
		  case 'input':
		  		dom.append('<input type="hidden" id="' + name + '" name="' + name + '" value="'+val+'" />');
		  break;
		}

		var option = dom.find('.select_option');
		switch(type)
		{
		  case 'input':
		  		option.append('<li data="' + val + '" style="cursor: pointer;">' + content + '</li>');
		  break;

		  case 'a':
		  		option.append('<a href="' + val + '" style="cursor: pointer;">' + content+ '</a>');
		  break;
		}
		

		for (var i in op) {
		  if(val && op[i]==val){
			option.siblings('.select_showbox').html(i);
			if(type=='input'){
				option.append('<li data="' + op[i] + '" class="selected" style="cursor: pointer;">' + i + '</li>');
			}else if(type='a'){
				option.append('<a href="' + op[i] + '" style="cursor: pointer;">' + i + '</a>');
			}
		  }else{
			if(type=='input'){
					option.append('<li data="' + op[i] + '" style="cursor: pointer;">' + i + '</li>');
			}else if(type='a'){
					option.append('<a href="' + op[i] + '" style="cursor: pointer;">' + i + '</a>');
			}
		  }
		}

		//添加事件
		$('.select_showbox').click(function() {
			$(this).siblings('.select_option').css('width',$(this).css('width'));
		  	$(this).siblings('.select_option').show();
		});

		$('.select_option>li').hover(function() {
		  $(this).addClass('hover').siblings().removeClass('hover');
		}, function() {
		  $(this).removeClass('hover');
		});

		$('.select_option>li').click(function() {
		  $(this).parent().prev().html($(this).html());
		  $(this).parent().siblings('input').val($(this).attr('data'));
		  $(this).attr('class', 'selected');
		  $(this).siblings().removeClass('selected');
		  $(this).parent().hide();
		});
		
		$(document).click(function () {
	        $('.select_option').hide();
	 	});
		$('.xui-select').on('click', function (event) {
		    //取消事件冒泡
		    event.stopPropagation();
		});
	}

	window['xui'] = xui;
})(jQuery)