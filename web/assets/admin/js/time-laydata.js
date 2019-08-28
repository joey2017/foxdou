
/**
 * 日期插件
 */
var start = {
    elem: '#time-start',
    format: 'YYYY-MM-DD hh:mm:ss',
    max: '2099-06-16', //最大日期
    festival:true,
    istime: true,
    istoday: true,
    choose: function(datas){
        end.min = datas; //开始日选好后，重置结束日的最小日期
        end.start = datas //将结束日的初始值设定为开始日
    }
};
var end = {
    elem: '#time-end',
    format: 'YYYY-MM-DD hh:mm:ss',
    max: '2099-06-16',
    festival:true,
    istime: true,
    istoday: true,
    choose: function(datas){
        start.max = datas; //结束日选好后，重置开始日的最大日期
    }
};
laydate(start);
laydate(end);