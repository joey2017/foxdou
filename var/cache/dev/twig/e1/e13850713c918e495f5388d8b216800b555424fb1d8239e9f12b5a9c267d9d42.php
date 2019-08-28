<?php

/* Admin/Order/recharge_legacy.twig */
class __TwigTemplate_e7a67a1941f8bf119b2ac062604335849d05186ccbe77961263813edd0b91592 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Order/recharge_legacy.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Order/recharge_legacy.twig"));

        // line 1
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers.html.twig", "Admin/Order/recharge_legacy.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>充值订单-话费订单</title>
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\">

    <link href=\"/assets/admin/h/css/bootstrap.min14ed.css?v=3.3.6\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/font-awesome.min93e3.css?v=4.4.0\" rel=\"stylesheet\">
    <!-- Data Tables -->
    <link href=\"/assets/admin/h/css/plugins/dataTables/dataTables.bootstrap.css\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/plugins/iCheck/custom.css\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/animate.min.css\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/style.min862f.css?v=4.1.0\" rel=\"stylesheet\">

    <script src=\"/assets/admin/h/js/jquery.min.js?v=2.1.4\"></script>

    <script src=\"/assets/admin/js/common.js\"></script>
    <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
    <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>
    <script src=\"/assets/common/js/ajaxRequest.js\"></script>

    <script src=\"/assets/admin/h/js/bootstrap.min.js?v=3.3.6\"></script>
    <script src=\"/assets/admin/h/js/plugins/jeditable/jquery.jeditable.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/dataTables/jquery.dataTables.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/dataTables/dataTables.bootstrap.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/iCheck/icheck.min.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/layer/laydate/laydate.js\"></script>

    <style>
        .seach input, .seach select {
            background-color: #fff;
            border: 1px solid #e5e6e7;
            padding: 6px 12px;
        }
        .date {
            width: 420px;
            float: left;
        }

        .date .layer-date {
            width: 160px;
        }
        #order_table_tr th,#order_table tr td{ text-align: center }

        .table-header {
            padding: 20px;
            background: #fcf8e3
        }


        /*.layui-layer-btn1{background-color: #5fb878!important;color: white!important;border: none!important;}*/
        .panel-body{ padding: 15px!important;}
        .panel-body a{margin: 0px 15px; font-size: 16px; color: #676a6c;}
        .btn {color: #fff!important;}
        .label{padding:5px 8px!important;font-size:11px!important;}
        .col-sm-2{width: 300px;}
        .careful_status{cursor:pointer}
        .text_align_left{text-align: left!important;}
        .admin_info_td{width: 50px; overflow: hidden; text-overflow:ellipsis; white-space: nowrap;}
    </style>
</head>

<body class=\"gray-bg\">
<div class=\"wrapper wrapper-content animated fadeInRight\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"ibox float-e-margins\">
                <div class=\"ibox-title\">
                    <h5>订单
                        <small>充值订单</small>
                    </h5>
                </div>
                <div class=\"ibox-content\">
                    <div class=\"tabs-container\">
                        ";
        // line 80
        $this->loadTemplate("/Admin/Order/tabs.twig", "Admin/Order/recharge_legacy.twig", 80)->display($context);
        // line 81
        echo "                    </div>
                    <div class=\"seach\">
                        <form action=\"\" method=\"get\" id=\"query_order_data_form\">
                        <input type=\"hidden\" id=\"check_cate\" name=\"product_type\" value=\"\">
                        <div class=\"row\">
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">订单编号</span>
                                    <input class=\"form-control product-price\" value=\"\" name=\"sn\" placeholder=\"订单编号\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">充值号码</span>
                                    <input class=\"form-control\" name=\"phone_number\" value=\"\" placeholder=\"充值号码\" type=\"text\"/>
                                </div>
                            </div>
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">订单状态</span>
                                    ";
        // line 98
        echo $context["sf"]->macro_select_raw("status", $this->extensions['App\Common\Twig\AppExtension']->arrayToOptions(twig_constant("App\\Common\\Model\\Order\\OrderRecharge::STATUSES"), "全部"), array("class" => "form-control"));
        echo "
                                </div>
                            </div>
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">充值状态</span>
                                    ";
        // line 103
        echo $context["sf"]->macro_select_raw("rechage_status", $this->extensions['App\Common\Twig\AppExtension']->arrayToOptions(twig_constant("App\\Common\\Model\\Order\\OrderRechargeSup::RECHARGE_STATUS"), "全部"), array("class" => "form-control"));
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">商品名称</span>
                                    <input class=\"form-control product-price\" name=\"product_name\" placeholder=\"商品名称\"value=\"\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">充值金额</span>
                                    <input placeholder=\"充值金额\" class=\"form-control\" name=\"recharge_price\" value=\"\" type=\"text\"/>
                                </div>
                            </div>
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">充值方式</span>
                                    ";
        // line 120
        echo $context["sf"]->macro_select_raw("payment_class_id", $this->extensions['App\Common\Twig\AppExtension']->arrayToOptions(twig_constant("App\\Constants::RECHARGE_METHODS"), "全部"), array("class" => "form-control"));
        echo "
                                </div>
                            </div>
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">订单来源</span>
                                    ";
        // line 125
        echo $context["sf"]->macro_select_raw("platform_id", $this->extensions['App\Common\Twig\AppExtension']->arrayToOptions(twig_constant("App\\Platform::PLATFORMS"), "全部"), array("class" => "form-control"));
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">用户账号</span>
                                    <input class=\"form-control\" type=\"text\" name=\"user_name\" value=\"\" placeholder=\"用户账号\"/>
                                </div>
                            </div>
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">模版名称</span>
                                    <input class=\"form-control\" type=\"text\" name=\"template_name\" value=\"\" placeholder=\"模版名称\"/>
                                </div>
                            </div>
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">模版编号</span>
                                    <input class=\"form-control\" type=\"text\" name=\"t_sn\" value=\"\" placeholder=\"模版编号\"/>
                                </div>
                            </div>
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">用户类型</span>
                                    ";
        // line 147
        echo $context["sf"]->macro_select_raw("user_type", $this->extensions['App\Common\Twig\AppExtension']->arrayToOptions(twig_constant("App\\Common\\Model\\User\\User::TYPES"), "全部"), array("class" => "form-control"));
        echo "
                                </div>
                            </div>

                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">&nbsp;供应商&nbsp;&nbsp;</span>
                                    <input placeholder=\"供应商帐号\" class=\"form-control\" name=\"sup_user_name\" value=\"\" type=\"text\"/>
                                </div>
                            </div>
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">充值次数</span>
                                    <input placeholder=\"充值次数\" class=\"form-control\" name=\"recharge_num\" value=\"\" type=\"text\"/>
                                </div>
                            </div>
                            <div class=\"col-sm-2\" style=\"width:170px;\">
                                <div class=\"input-group m-b\" style=\"height: 34px\">
                                    <select  name=\"time_type\" style=\"height: 34px;width: 170px\">
                                        <option value=\"add_time\">订单时间</option>
                                        <option value=\"pay_time\">付款时间</option>
                                        <option value=\"end_time\">结束时间</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-sm-2\" style=\"width: 400px;padding-right: 2px\">
                                <div class=\"input-group date\" style=\"float: left\">
                                    <input class=\"form-control layer-date\" id=\"start_time\" name=\"start_time\" style=\"width: 200px\" placeholder=\"开始时间\" type=\"text\">
                                    <input class=\"form-control layer-date\" id=\"end_time\" name=\"end_time\" style=\"width: 200px\" placeholder=\"结束时间\" type=\"text\">
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">外部单号</span>
                                    <input placeholder=\"外部单号\" class=\"form-control\" name=\"request_order_id\" value=\"\" type=\"text\"/>
                                </div>
                            </div>
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">系统备注</span>
                                    <input placeholder=\"系统备注\" class=\"form-control\" name=\"admin_info\" value=\"\" type=\"text\"/>
                                </div>
                            </div>
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">需要核实</span>
                                    <select class=\"form-control\" name=\"careful_status\">
                                        <option value=\"\">全部</option>
                                        <option value=\"1\">是</option>
                                        <option value=\"0\">否</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                            <button class=\"btn btn-primary\" style=\"position:relative;top:-60px;margin-right:100px;float: right;\" onclick=\"get_order_data();return false;\">查询</button>
                        </form>
                    </div>
                    <div class=\"operations\">
                        <button class=\"btn btn-primary btn-sm\" onclick=\"count_order(this)\" id=\"show_count_btn\">查看统计</button>
                        <button class=\"btn btn-primary btn-sm\" onclick=\"\">批量结算</button>
                        <button class=\"btn btn-primary btn-sm\"
                                onclick=\"edit_order_status('<?= \\yii\\helpers\\Url::to(['edit-status','type'=>\$request->get('type')]) ?>','on', get_ids(\$('.chk-ids')))\">
                            批量置成功
                        </button>
                        <button class=\"btn btn-primary btn-sm\"
                                onclick=\"edit_order_status('<?= \\yii\\helpers\\Url::to(['edit-status','type'=>\$request->get('type')]) ?>','off', get_ids(\$('.chk-ids')))\">
                            批量置失败
                        </button>
                        <button class=\"btn btn-primary btn-sm\" onclick=\"anew_recharge();\">重新充值</button>
                        <?php if(\\common\\models\\users\\OsSetting::get('empty_qudao_add_order')=='1'):?>
                        <button class=\"btn btn-primary btn-sm\" onclick=\"edit_empty_qudao_status('off')\">已开启空渠道下单</button>
                        <?php else: ?>
                        <button class=\"btn btn-primary btn-sm\" onclick=\"edit_empty_qudao_status('on')\">已关闭空渠道下单</button>
                        <?php endif; ?>
                        <?php if(\$auto_success==1):?>
                        <button class=\"btn btn-primary btn-sm\" onclick=\"edit_auto_success(this)\" value=\"0\">已开启供货网自动成功</button>
                        <?php else: ?>
                        <button class=\"btn btn-primary btn-sm\" onclick=\"edit_auto_success(this)\" value=\"1\">已关闭供货网自动成功</button>
                        <?php endif; ?>
                    </div>
                    <div class=\"table-header\" style=\"display: none;\" id=\"count_order\">

                    </div>
                    <div style=\"overflow-x: auto;width: 100%\">
                        <table id=\"order_table\" class=\"table table-striped table-bordered table-hover\" >
                            <!--表标题头-->
                            <thead>
                            <tr id=\"order_table_tr\">
                                <th><input type=\"checkbox\" class=\"select-all\"/>全选</th>
                                <th >订单编号</th>
                                <th>供货商</th>
                                <th>数量</th>
                                <th>充值金额</th>
                                <th>销售价格</th>
                                <th>成本</th>
                                <th>利润</th>
                                <th>订单来源</th>
                                <th>用户</th>
                                <th>充值号码</th>
                                <th>订单状态</th>
                                <th>充值状态</th>
                                <th>结算状态</th>
                                <th>充值次数</th>
                                <th>订单时间</th>
                                <th>需核实</th>
                                <th>备注</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <!--表正文数据-->
                            <tbody id=\"data-table\">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type=\"text/javascript\" src=\"/assets/admin/js/clipboard.min.js\"></script>
<script type=\"text/javascript\">

    \$(function () {
        var clipboard = new Clipboard('.copy_official_sn', {

        });
        clipboard.on('success', function (e) {
            layer.msg('复制成功');
        });
        clipboard.on('error', function (e) {
            layer.msg('复制失败');
        });
    });

    function edit_auto_success(dom) {
        var auto_success=\$(dom).attr('value');
        \$.ajax('<?=\\yii\\helpers\\Url::to(['edit-auto-success','type'=>\$request->get('type')])?>',{
            type:'post',
            data:{auto_success:auto_success},
            success:function (data) {
                if(data.status){
                    if(auto_success==1){
                        \$(dom).html('已开启供货网自动成功')
                        \$(dom).attr('value',0);
                    }else{
                        \$(dom).html('已关闭供货网自动成功')
                        \$(dom).attr('value',1);
                    }
                }
                layer.msg(data.msg);
            },
            error:function () {
                layer.msg('网络或系统繁忙，请稍候再试');
            }
        });
    }

    function count_order(dom) {

        if(\$(dom).text()=='查看统计'){
            var load=layer.load();
            \$.ajax('<?=\\yii\\helpers\\Url::to(['count'])?>',{
                data:\$('#query_order_data_form').serializeArray()
                ,success:function (result) {
                    if(!result.status){
                        layer.msg(result.msg);
                        layer.close(load);
                        return false;
                    }
                    var data=result.data;

                    var count_dom=
                        '成功订单：'+(data.success.count||0)+'笔（充值金额：'+(data.success.amount||0)+'元，销售价格：'+(data.success.sell_price||0)+'元，成本总计：'+(data.success.cenben||0)+'元，利润总计:'+(data.success.lirun||0)+'元）<br/>'+
                        '失败订单：'+(data.loser.count||0)+'笔（充值金额：'+(data.loser.amount||0)+'元，销售价格：'+(data.loser.sell_price||0)+'元，成本总计：'+(data.loser.cenben||0)+'元，利润总计:'+(data.loser.lirun||0)+'元）<br/>'+
                        '充值中：'+(data.recharge.count||0)+'笔（充值金额：'+(data.recharge.amount||0)+'元，销售价格：'+(data.recharge.sell_price||0)+'元，成本总计：'+(data.recharge.cenben||0)+'元，利润总计:'+(data.recharge.lirun||0)+'元）<br/>'+
                        '待付款：'+(data.wait_pay.count||0)+'笔（充值金额：'+(data.wait_pay.amount||0)+'元，销售价格：'+(data.wait_pay.sell_price||0)+'元，成本总计：'+(data.wait_pay.cenben||0)+'元，利润总计:'+(data.wait_pay.lirun||0)+'元）<br/>'+
                        '已取消：'+(data.cancel.count||0)+'笔（充值金额：'+(data.cancel.amount||0)+'元，销售价格：'+(data.cancel.sell_price||0)+'元，成本总计：'+(data.cancel.cenben||0)+'元，利润总计:'+(data.cancel.lirun||0)+'元）<br/>';

                    \$('#count_order').html(count_dom);
                    \$('#count_order').show();
                    \$(dom).text('收起统计');
                    layer.close(load);
                }
                ,error:function () {
                    layer.close(load);
                    layer.msg('系统繁忙，请稍候再试');
                }
            });
        }else{
            \$(dom).text('查看统计');
            \$('#count_order').hide();
        }
    }
</script>


<script type=\"text/javascript\">
    layui.use(['element', 'form','layer'], function(){
        var element = layui.element(); //导航的hover效果、二级菜单等功能，需要依赖element模块
        var form = layui.form();
        var layer = layui.layer;
    });

    get_order_data();
    function get_order_data(){
        get_table_data('',{
            data_int_to_str:{pintai:<?=json_encode(array_column(\\common\\models\\SystemConfig::\$pintai,'ChineseName'))?>}
    ,unchange_time:['add_time']
            ,change_data:function (data) {
            var status_color={1:'orange',2:'green',3:'red'};
            var status=<?=json_encode(\\common\\models\\order\\recharge\\Common::\$status)?>;
            var recharge_status=<?=json_encode(\\common\\models\\order\\recharge\\Common::\$recharge_status)?>;
            var closing_status=<?=json_encode(\\common\\models\\order\\recharge\\Common::\$closing_status)?>;
            var careful_status={0:'否',1:'是'};
            \$.each(data,function (k,v) {
                var id=v['id'];
                var on=v['on'];
                var request_order_id=v['request_order_id'];
                data[k]['id']=' <td><input type=\"checkbox\" class=\"chk-ids\" value=\"'+ id +'\"/></td>';
                data[k]['sn']='<a href=\"javascript:void(0)\" style=\"color:#337ab7\" onclick=\"open_center(\\'<?=\\yii\\helpers\\Url::to(['details','type'=>\$request->get('type')])?>&id='+id+'\\''+',1200,800);\">'+v['sn'] +'</a>'
                +'<br/><a onmouseenter=\"layer.tips(\\'点击复制官方流水号\\',this,{tips: [2, \\'#5fb878\\']});\" style=\"color:black\" class=\"'+(v['official_sn']?'copy_official_sn':'')+'\" data-clipboard-text=\"'+v['official_sn']+'\">'+(v['official_sn']?v['official_sn']:'')+'</a><br/>'
                +'<span class=\"order_sn_copy\" data-clipboard-text=\"'+v['product_name']+'\">'+v['product_name']+'<br/>('+v['product_id']+')</span><br/>'+request_order_id;

                var sup_info='<a href=\"javascript:void(0);\" onclick=\"show_contact(\\''+v['t_id']+'\\')\" onmouseenter=\"show_tips(this)\" style=\"color:inherit\">';
                sup_info=sup_info+(v['sell_user_id']!=0? v['sup_nick_name']:'系统模版')+'<br/>';
                sup_info=sup_info+(v['sup_user_name']?v['sup_user_name']+'<br/>':'');
                data[k]['t_id']=sup_info+(v['qudao_id']? v['template_name'] +'<br/>('+v['qudao_id']+')':'空')+'</a>';

                data[k]['cenben']='<td ondblclick=\"show_input(this,\\'id\\',0);\">'+ (v['cenben'] ? v['cenben']:0) +'</td>';

                data[k]['user_id']=('<a>'+v['nick_name']+'<br>('+v['user_name']+')</a><br>')+( v['user_name'] =='251651698'&& v['order_user_info']?'('+v['order_user_info']+')':(v['sup_info']));

                var operation='';

                if(v['status']==4 || v['status']==5){
                    operation='<a href=\"javascript:void(0)\" onclick=\"open_center(\\'<?=\\yii\\helpers\\Url::to(['details','type'=>\$request->get('type')])?>&id='+id+'\\',1200,800);\">详情</a>';
                }else {
                    if(v['status']==1 || v['status']==3 ) {
                        operation='<p><a href=\"javascript:void(0);\" onclick=\"edit_order_status(\\'<?= \\yii\\helpers\\Url::to(['edit-status','type'=>\$request->get('type')]) ?>\\',\\'on\\',['+id+'])\">置成功</a></p>';
                    }
                    if(v['status']!=3){
                        operation=operation+'<a style=\"color: #bbb\" href=\"javascript:void(0);\" onclick=\"edit_order_status(\\'<?= \\yii\\helpers\\Url::to(['edit-status','type'=>\$request->get('type')]) ?>\\',\\'off\\',['+id+'])\">置失败</a>';
                    }
                }

                data[k]['admin_info']='<td  ondblclick=\"show_input(this,'+id+',1);\"><p class=\"admin_info_td\">'+( v['admin_info']||'无')+'</p></td>';

                var before_info='';
                var after_info='未查询或查询失败';
                var on_before_info=strToJson(v['on_before_info']);
                var on_after_info=strToJson(v['on_after_info']);


                if(on_before_info){
                    if(on_before_info['status']){
                        before_info=on_before_info['name'] + on_before_info['balance'];
                    }else {
                        before_info='本次查询失败';
                    }
                }
                if(on_after_info){
                    if(on_after_info.status){
                        after_info=on_after_info.name + on_after_info.balance;
                    }else {
                        after_info='本次查询失败';
                    }
                }

                data[k]['on']='<td class=\"text_align_left\"><span class=\"order-status\">充前：'
                    +before_info
                    +'<br/>号码：'+v['on']+' <a href=\"javascript:void(0);\" title=\"点击查询\" onclick=\"query_mobile_balance(this,'+id+')\">查询</a>'
                    +'<br/>地区：'+v['senfen']+'-'+v['city']+' <a href=\"javascript:void(0);\" onclick=\"open_center(\\'<?=\\yii\\helpers\\Url::to(['/order/mobile-balance-query-log/list'])?>?mobile='+on+'\\''+',1200,800);\">查询记录</a>'
                +'<br/>充后：<span class=\"on_before_info\">'+after_info+'</span>'
                +'</span></td>';


                data[k]['status']='<td ><span class=\"order-status\">'+status[v['status']]+'</span></td>';
                data[k]['recharge_status']='<td ><span class=\"recharge_status\">'+recharge_status[v['recharge_status']]+'</span></td>';
                data[k]['closing_status']='<td ><span class=\"closing_status\" >'+closing_status[v['closing_status']]+'</span></td>';
                data[k]['careful_status']='<td ><span class=\"careful_status\" onclick=\"edit_careful_status(this,'+id+','+v['careful_status']+');\">'+careful_status[v['careful_status']]+'</span></td>';

                data[k]['add_time']='<td class=\"order_time_td text_align_left\"><p>创建：'+formatDateTime(v['add_time'])+'</p>'+
                    '<p>支付：'+formatDateTime(v['pay_time'])+'</p>'+
                    '<p>完成：'+formatDateTime(v['finish_time'])+'</p></td>';



                data[k]['operation']=operation;
                delete data[k].product_id;
                delete data[k].official_sn;
                delete data[k].sell_user_id;
                delete data[k].sup_user_name;
                delete data[k].sup_nick_name;
                delete data[k].template_name;
                delete data[k].qudao_id;

                delete data[k].nick_name;
                delete data[k].user_name;
                delete data[k].order_user_info;
                delete data[k].sup_info;
                delete data[k].senfen;
                delete data[k].city;

                delete data[k].pay_time;
                delete data[k].finish_time;
                delete data[k].product_name;
                delete data[k].on_before_info;
                delete data[k].on_after_info;
                delete data[k].request_order_id;

            });
            return data;
        }
    ,success_function:function () {
            set_color();
            \$('#show_count_btn').text('查看统计');
            \$('#count_order').hide();
        }
    });
    }
    function strToJson(str){
        return (new Function(\"return \" + str))();
    }

    function query_mobile_balance(dom,id){
        if(\$(dom).text()=='查询中'){
            layer.msg('不要重复操作！');
            return false;
        }
        \$(dom).text('查询中');
        \$.ajax('<?=\\yii\\helpers\\Url::to(['query-mobile-balance','type'=>\$request->get('type')])?>',{
            data:{id:id},
            success:function (data) {
                if(data.status){
                    \$(dom).parents('td').find('.on_before_info').text(data.result);
                }
                \$(dom).text('查询');
                layer.msg(data.msg);
            },
            error:function () {
                \$(dom).text('查询');
                layer.msg('系统繁忙,稍后再试');
                // \$(dom).parents('td').find('.on_before_info').text('系统繁忙,稍后再试');
            }

        });

    }


    \$('#tab-1 a').click(function () {
        \$(this).addClass('btn btn-primary');
        \$(this).siblings().removeClass('btn btn-primary');
        \$('#check_cate').val( \$(this).attr('value'));
        get_order_data();
    });

    function edit_careful_status(dom,id,status) {
        var  careful_status=1;
        var  content='确认改成需要核实的订单么？';

        if(status==1){
            careful_status=0;
            content='确认不需要核实了么？';
        }

        layer.open({
            title:'温馨提示',
            content:content,
            btn:['确定','取消'],
            yes:function (index) {
                \$.ajax('<?=\\yii\\helpers\\Url::to(['edit-careful-status','type'=>1])?>',{
                    type:'post',
                    data:{id:id,careful_status:careful_status},
                    success:function (data) {
                        layer.msg(data.msg);
                        if(!data.status){
                            return false;
                        }
                        page_size_get_data();
                        layer.close(index);
                    }
                });
            }

        });
    }

    function show_input(dom,order_id,type) {
        var value_or_text=\$(dom).text();
        if(!value_or_text){
            return;
        }
        if(type==0){
            \$(dom).html('<input type=\"text\" class=\"num form-control\" style=\"width:70px;height:30px;\" value=\"'+value_or_text+'\" onblur=\"edit_cenben(this,'+value_or_text+','+order_id+')\">');
        }else {
            \$(dom).html('<input type=\"text\" class=\"admin_info form-control\" style=\"width:70px;height:30px;\" value=\"'+value_or_text+'\" onblur=\"edit_admin_info(this,\\''+value_or_text+'\\','+order_id+')\">');
        }
    }
    function edit_cenben(dom,old_cenben,order_id) {
        var cenben=\$(dom).val();
        var sell_price=\$(dom).parents('tr').find('td.sell_price').text();
        var lirun_dom=\$(dom).parents('tr').find('td.lirun');
        if(old_cenben==cenben){
            \$(dom).parent().text(old_cenben.toFixed(3));
            \$(dom).remove();
            return;
        }
        \$.get('<?=\\yii\\helpers\\Url::to(['edit-cenben','type'=>Yii::\$app->request->get('type')])?>',{id:order_id,cenben:cenben},function (data) {
            if(data.status){
                layer.msg(data.msg,function () {
                    location.reload();
                })
            }else {
                layer.msg(data.msg)
            }
        });
    }
    function edit_admin_info(dom,old_admin_info,order_id) {
        var admin_info=\$(dom).val();
        if(old_admin_info==admin_info){
            layer.msg('未修改');
            return false;
        }
        \$.ajax('<?=\\yii\\helpers\\Url::to(['edit-admin-info','type'=>Yii::\$app->request->get('type')])?>',
            {
                type:'post',
                data:{id:order_id,admin_info:admin_info},
                success:function (data) {
                    if(data.status){
                        layer.msg(data.msg,function () {
                            page_size_get_data();
                        })
                    }else {
                        layer.msg(data.msg)
                    }
                }
            });
    }

    function open_center(url,width,height) {
        myWindow= window.open(url,'',
            'scrollbars=0,width='+width+',height='+height+',top='+(( (window.screen.availHeight)/2 )-(height/2) )+',left='+(( (window.screen.availWidth)/2 )-(width/2)));
    }
    /*
     *初始化所有layer-date日期控件
     */
    \$('.layer-date').each(function () {
        var key = \$(this).attr('id');
        bind_laydate('#' + key)
    });

    /**
     *laydate dom 绑定 配合jq each可以完成批量绑定
     * @param key
     */
    function bind_laydate(key) {
        var ob = {
            elem: key,
            format: \"YYYY-MM-DD hh:mm:ss\",
            istime: true,
            istoday: true,
            start: '<?=date(\"Y-m-d H:i:s\",time())?>',
        };
        laydate(ob);
    }

    /*
     *变更渠道
     */
    function edit_empty_qudao_status(status){
        \$.post('<?=\\yii\\helpers\\Url::to(['empty-qudao-order-status','type'=>\$request->get('type')])?>',{
            status:status
        },function(data){
            if(!data.status){
                layer.alert(data.msg);
                return;
            }
            location.reload();
        },'json');
    }

    function anew_recharge(){

        var b=true;

        \$('.chk-ids').each(function(){
            if(\$(this).prop('checked')!=true){
                return true;
            }
            var order_status='充值中|充值成功';
            var recharge_status='充值中|提交失败|充值成功|充值失败|已退款|充值可疑|提交可疑|已提单|已验单';
            var order_status_val= \$.trim(\$(this).parents('tr').find('.order-status').html());
            var recharge_status_val=\$.trim(\$(this).parents('tr').find('.recharge-status').text());

//            if(order_status.indexOf(order_status_val)==-1){
//                layer.alert('请选择正确的订单')
//                b=false;
//                return false
//            }
//
//            if(recharge_status.indexOf(recharge_status_val)==-1){
//                layer.alert('请选择正确的订单')
//                b=false;
//                return false
//            }

        });

        if(b){
            open_center('<?=\\yii\\helpers\\Url::to(['anew-recharge'])?>?&ids='+get_ids(\$('.chk-ids'))+'&type=<?=\$request->get('type')?>',1600,600);
            //   window.open(,'all_qudao','width=1600,height=600')
        }

    }

    function set_color() {
        /**********更新订单壮态字体色***********/
        \$('.order-status').each(function(){
            var text=\$(this).text();
            if(text.indexOf('充值成功')!==-1) {
                \$(this).addClass('label label-primary');
            }else if(text.indexOf('充值中')!==-1){
                \$(this).addClass('label label-danger');
            }else if(text.indexOf('充值失败')!==-1){
                \$(this).addClass('label label-warning');
            }else if(text.indexOf('待付款')!==-1){
                \$(this).addClass('label label-info');
            }else if(text.indexOf('已取消')!==-1){
                \$(this).addClass('label');
            }

        });

        \$('.careful_status').each(function(){
            var text=\$(this).text();
            if(text.indexOf('否')!==-1) {
                \$(this).addClass('label label-primary');
            }else if(text.indexOf('是')!==-1){
                \$(this).addClass('label label-danger');
            }
        });


        /**********更新充值壮态字体色***********/
        \$('.recharge_status').each(function(){
            var text=\$(this).text();
            if(text.indexOf('充值成功')!==-1) {
                \$(this).addClass('label label-primary');
            }else if(text.indexOf('充值失败')!==-1 || text.indexOf('提交失败')!==-1){
                \$(this).addClass('label label-warning');
            }else if(text.indexOf('待付款')!==-1){
                \$(this).addClass('label label-info');
            }else if(text.indexOf('已取消')!==-1){
                \$(this).addClass('label');
            }else {
                \$(this).addClass('label label-danger');
            }

        });
        /**********更新结算状态字体色***********/
        \$('.closing_status').each(function(){
            var text=\$(this).text();
            if(text.indexOf('已结算')!==-1) {
                \$(this).addClass('label label-primary');
            }else if(text.indexOf('未结算')!==-1){
                \$(this).addClass('label label-danger');
            }else if(text.indexOf('已退款')!==-1){
                \$(this).addClass('label label-warning');
            }
        });
    }



    function export_cvs(){
        if(\$('#data-table tr').length==0){
            layer.msg('无数据不能导出');
            return;
        }
        var params='';
        if (/\\?/g.test(location.href)) {
            params = \"&export=yes\";
        } else {
            params = \"?export=yes\";
        }
        location.href=location.href+params;
    }

    function  show_tips(dom) {
        layer.tips('查看联系人',\$(dom),{
            tips: [2, '#5fb878']
        });
    }

    function show_contact(template_id) {
        var content_url='<?=\\yii\\helpers\\Url::to(['show-contact','type'=>\\yii::\$app->request->get('type')])?>&id='+template_id+'';
        contact(content_url,template_id,'');
    }

    function contact(content_url,template_id,add_or_edit_url){
        layer.open({
            type: 2,
            area: ['900px', '500px'],
            title: '查看联系人', //不显示标题
            content: content_url, //捕获的元素，注意：最好该指定的元素要存放在body最外层，否则可能被其它的相对元素所影响
            btn: ['确定', '取消'],
            btn1: function (index) {
                layer.close(index);
            }
        });
    }

</script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Order/recharge_legacy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 147,  168 => 125,  160 => 120,  140 => 103,  132 => 98,  113 => 81,  111 => 80,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import ('/Common/simple_form_helpers.html.twig') as sf %}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>充值订单-话费订单</title>
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\">

    <link href=\"/assets/admin/h/css/bootstrap.min14ed.css?v=3.3.6\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/font-awesome.min93e3.css?v=4.4.0\" rel=\"stylesheet\">
    <!-- Data Tables -->
    <link href=\"/assets/admin/h/css/plugins/dataTables/dataTables.bootstrap.css\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/plugins/iCheck/custom.css\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/animate.min.css\" rel=\"stylesheet\">
    <link href=\"/assets/admin/h/css/style.min862f.css?v=4.1.0\" rel=\"stylesheet\">

    <script src=\"/assets/admin/h/js/jquery.min.js?v=2.1.4\"></script>

    <script src=\"/assets/admin/js/common.js\"></script>
    <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
    <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>
    <script src=\"/assets/common/js/ajaxRequest.js\"></script>

    <script src=\"/assets/admin/h/js/bootstrap.min.js?v=3.3.6\"></script>
    <script src=\"/assets/admin/h/js/plugins/jeditable/jquery.jeditable.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/dataTables/jquery.dataTables.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/dataTables/dataTables.bootstrap.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/iCheck/icheck.min.js\"></script>
    <script src=\"/assets/admin/h/js/plugins/layer/laydate/laydate.js\"></script>

    <style>
        .seach input, .seach select {
            background-color: #fff;
            border: 1px solid #e5e6e7;
            padding: 6px 12px;
        }
        .date {
            width: 420px;
            float: left;
        }

        .date .layer-date {
            width: 160px;
        }
        #order_table_tr th,#order_table tr td{ text-align: center }

        .table-header {
            padding: 20px;
            background: #fcf8e3
        }


        /*.layui-layer-btn1{background-color: #5fb878!important;color: white!important;border: none!important;}*/
        .panel-body{ padding: 15px!important;}
        .panel-body a{margin: 0px 15px; font-size: 16px; color: #676a6c;}
        .btn {color: #fff!important;}
        .label{padding:5px 8px!important;font-size:11px!important;}
        .col-sm-2{width: 300px;}
        .careful_status{cursor:pointer}
        .text_align_left{text-align: left!important;}
        .admin_info_td{width: 50px; overflow: hidden; text-overflow:ellipsis; white-space: nowrap;}
    </style>
</head>

<body class=\"gray-bg\">
<div class=\"wrapper wrapper-content animated fadeInRight\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"ibox float-e-margins\">
                <div class=\"ibox-title\">
                    <h5>订单
                        <small>充值订单</small>
                    </h5>
                </div>
                <div class=\"ibox-content\">
                    <div class=\"tabs-container\">
                        {% include \"/Admin/Order/tabs.twig\" %}
                    </div>
                    <div class=\"seach\">
                        <form action=\"\" method=\"get\" id=\"query_order_data_form\">
                        <input type=\"hidden\" id=\"check_cate\" name=\"product_type\" value=\"\">
                        <div class=\"row\">
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">订单编号</span>
                                    <input class=\"form-control product-price\" value=\"\" name=\"sn\" placeholder=\"订单编号\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">充值号码</span>
                                    <input class=\"form-control\" name=\"phone_number\" value=\"\" placeholder=\"充值号码\" type=\"text\"/>
                                </div>
                            </div>
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">订单状态</span>
                                    {{ sf.select_raw('status', to_options(constant(\"App\\\\Common\\\\Model\\\\Order\\\\OrderRecharge::STATUSES\"), '全部'), {\"class\": \"form-control\"}) }}
                                </div>
                            </div>
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">充值状态</span>
                                    {{ sf.select_raw('rechage_status', to_options(constant(\"App\\\\Common\\\\Model\\\\Order\\\\OrderRechargeSup::RECHARGE_STATUS\"), '全部'), {\"class\": \"form-control\"}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">商品名称</span>
                                    <input class=\"form-control product-price\" name=\"product_name\" placeholder=\"商品名称\"value=\"\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">充值金额</span>
                                    <input placeholder=\"充值金额\" class=\"form-control\" name=\"recharge_price\" value=\"\" type=\"text\"/>
                                </div>
                            </div>
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">充值方式</span>
                                    {{ sf.select_raw('payment_class_id', to_options(constant(\"App\\\\Constants::RECHARGE_METHODS\"), '全部'), {\"class\": \"form-control\"}) }}
                                </div>
                            </div>
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">订单来源</span>
                                    {{ sf.select_raw('platform_id', to_options(constant(\"App\\\\Platform::PLATFORMS\"), '全部'), {\"class\": \"form-control\"}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">用户账号</span>
                                    <input class=\"form-control\" type=\"text\" name=\"user_name\" value=\"\" placeholder=\"用户账号\"/>
                                </div>
                            </div>
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">模版名称</span>
                                    <input class=\"form-control\" type=\"text\" name=\"template_name\" value=\"\" placeholder=\"模版名称\"/>
                                </div>
                            </div>
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">模版编号</span>
                                    <input class=\"form-control\" type=\"text\" name=\"t_sn\" value=\"\" placeholder=\"模版编号\"/>
                                </div>
                            </div>
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">用户类型</span>
                                    {{ sf.select_raw('user_type', to_options(constant(\"App\\\\Common\\\\Model\\\\User\\\\User::TYPES\"), '全部'), {\"class\": \"form-control\"}) }}
                                </div>
                            </div>

                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">&nbsp;供应商&nbsp;&nbsp;</span>
                                    <input placeholder=\"供应商帐号\" class=\"form-control\" name=\"sup_user_name\" value=\"\" type=\"text\"/>
                                </div>
                            </div>
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">充值次数</span>
                                    <input placeholder=\"充值次数\" class=\"form-control\" name=\"recharge_num\" value=\"\" type=\"text\"/>
                                </div>
                            </div>
                            <div class=\"col-sm-2\" style=\"width:170px;\">
                                <div class=\"input-group m-b\" style=\"height: 34px\">
                                    <select  name=\"time_type\" style=\"height: 34px;width: 170px\">
                                        <option value=\"add_time\">订单时间</option>
                                        <option value=\"pay_time\">付款时间</option>
                                        <option value=\"end_time\">结束时间</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-sm-2\" style=\"width: 400px;padding-right: 2px\">
                                <div class=\"input-group date\" style=\"float: left\">
                                    <input class=\"form-control layer-date\" id=\"start_time\" name=\"start_time\" style=\"width: 200px\" placeholder=\"开始时间\" type=\"text\">
                                    <input class=\"form-control layer-date\" id=\"end_time\" name=\"end_time\" style=\"width: 200px\" placeholder=\"结束时间\" type=\"text\">
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">外部单号</span>
                                    <input placeholder=\"外部单号\" class=\"form-control\" name=\"request_order_id\" value=\"\" type=\"text\"/>
                                </div>
                            </div>
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">系统备注</span>
                                    <input placeholder=\"系统备注\" class=\"form-control\" name=\"admin_info\" value=\"\" type=\"text\"/>
                                </div>
                            </div>
                            <div class=\"col-sm-2\">
                                <div class=\"input-group m-b\"><span class=\"input-group-addon\">需要核实</span>
                                    <select class=\"form-control\" name=\"careful_status\">
                                        <option value=\"\">全部</option>
                                        <option value=\"1\">是</option>
                                        <option value=\"0\">否</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                            <button class=\"btn btn-primary\" style=\"position:relative;top:-60px;margin-right:100px;float: right;\" onclick=\"get_order_data();return false;\">查询</button>
                        </form>
                    </div>
                    <div class=\"operations\">
                        <button class=\"btn btn-primary btn-sm\" onclick=\"count_order(this)\" id=\"show_count_btn\">查看统计</button>
                        <button class=\"btn btn-primary btn-sm\" onclick=\"\">批量结算</button>
                        <button class=\"btn btn-primary btn-sm\"
                                onclick=\"edit_order_status('<?= \\yii\\helpers\\Url::to(['edit-status','type'=>\$request->get('type')]) ?>','on', get_ids(\$('.chk-ids')))\">
                            批量置成功
                        </button>
                        <button class=\"btn btn-primary btn-sm\"
                                onclick=\"edit_order_status('<?= \\yii\\helpers\\Url::to(['edit-status','type'=>\$request->get('type')]) ?>','off', get_ids(\$('.chk-ids')))\">
                            批量置失败
                        </button>
                        <button class=\"btn btn-primary btn-sm\" onclick=\"anew_recharge();\">重新充值</button>
                        <?php if(\\common\\models\\users\\OsSetting::get('empty_qudao_add_order')=='1'):?>
                        <button class=\"btn btn-primary btn-sm\" onclick=\"edit_empty_qudao_status('off')\">已开启空渠道下单</button>
                        <?php else: ?>
                        <button class=\"btn btn-primary btn-sm\" onclick=\"edit_empty_qudao_status('on')\">已关闭空渠道下单</button>
                        <?php endif; ?>
                        <?php if(\$auto_success==1):?>
                        <button class=\"btn btn-primary btn-sm\" onclick=\"edit_auto_success(this)\" value=\"0\">已开启供货网自动成功</button>
                        <?php else: ?>
                        <button class=\"btn btn-primary btn-sm\" onclick=\"edit_auto_success(this)\" value=\"1\">已关闭供货网自动成功</button>
                        <?php endif; ?>
                    </div>
                    <div class=\"table-header\" style=\"display: none;\" id=\"count_order\">

                    </div>
                    <div style=\"overflow-x: auto;width: 100%\">
                        <table id=\"order_table\" class=\"table table-striped table-bordered table-hover\" >
                            <!--表标题头-->
                            <thead>
                            <tr id=\"order_table_tr\">
                                <th><input type=\"checkbox\" class=\"select-all\"/>全选</th>
                                <th >订单编号</th>
                                <th>供货商</th>
                                <th>数量</th>
                                <th>充值金额</th>
                                <th>销售价格</th>
                                <th>成本</th>
                                <th>利润</th>
                                <th>订单来源</th>
                                <th>用户</th>
                                <th>充值号码</th>
                                <th>订单状态</th>
                                <th>充值状态</th>
                                <th>结算状态</th>
                                <th>充值次数</th>
                                <th>订单时间</th>
                                <th>需核实</th>
                                <th>备注</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <!--表正文数据-->
                            <tbody id=\"data-table\">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type=\"text/javascript\" src=\"/assets/admin/js/clipboard.min.js\"></script>
<script type=\"text/javascript\">

    \$(function () {
        var clipboard = new Clipboard('.copy_official_sn', {

        });
        clipboard.on('success', function (e) {
            layer.msg('复制成功');
        });
        clipboard.on('error', function (e) {
            layer.msg('复制失败');
        });
    });

    function edit_auto_success(dom) {
        var auto_success=\$(dom).attr('value');
        \$.ajax('<?=\\yii\\helpers\\Url::to(['edit-auto-success','type'=>\$request->get('type')])?>',{
            type:'post',
            data:{auto_success:auto_success},
            success:function (data) {
                if(data.status){
                    if(auto_success==1){
                        \$(dom).html('已开启供货网自动成功')
                        \$(dom).attr('value',0);
                    }else{
                        \$(dom).html('已关闭供货网自动成功')
                        \$(dom).attr('value',1);
                    }
                }
                layer.msg(data.msg);
            },
            error:function () {
                layer.msg('网络或系统繁忙，请稍候再试');
            }
        });
    }

    function count_order(dom) {

        if(\$(dom).text()=='查看统计'){
            var load=layer.load();
            \$.ajax('<?=\\yii\\helpers\\Url::to(['count'])?>',{
                data:\$('#query_order_data_form').serializeArray()
                ,success:function (result) {
                    if(!result.status){
                        layer.msg(result.msg);
                        layer.close(load);
                        return false;
                    }
                    var data=result.data;

                    var count_dom=
                        '成功订单：'+(data.success.count||0)+'笔（充值金额：'+(data.success.amount||0)+'元，销售价格：'+(data.success.sell_price||0)+'元，成本总计：'+(data.success.cenben||0)+'元，利润总计:'+(data.success.lirun||0)+'元）<br/>'+
                        '失败订单：'+(data.loser.count||0)+'笔（充值金额：'+(data.loser.amount||0)+'元，销售价格：'+(data.loser.sell_price||0)+'元，成本总计：'+(data.loser.cenben||0)+'元，利润总计:'+(data.loser.lirun||0)+'元）<br/>'+
                        '充值中：'+(data.recharge.count||0)+'笔（充值金额：'+(data.recharge.amount||0)+'元，销售价格：'+(data.recharge.sell_price||0)+'元，成本总计：'+(data.recharge.cenben||0)+'元，利润总计:'+(data.recharge.lirun||0)+'元）<br/>'+
                        '待付款：'+(data.wait_pay.count||0)+'笔（充值金额：'+(data.wait_pay.amount||0)+'元，销售价格：'+(data.wait_pay.sell_price||0)+'元，成本总计：'+(data.wait_pay.cenben||0)+'元，利润总计:'+(data.wait_pay.lirun||0)+'元）<br/>'+
                        '已取消：'+(data.cancel.count||0)+'笔（充值金额：'+(data.cancel.amount||0)+'元，销售价格：'+(data.cancel.sell_price||0)+'元，成本总计：'+(data.cancel.cenben||0)+'元，利润总计:'+(data.cancel.lirun||0)+'元）<br/>';

                    \$('#count_order').html(count_dom);
                    \$('#count_order').show();
                    \$(dom).text('收起统计');
                    layer.close(load);
                }
                ,error:function () {
                    layer.close(load);
                    layer.msg('系统繁忙，请稍候再试');
                }
            });
        }else{
            \$(dom).text('查看统计');
            \$('#count_order').hide();
        }
    }
</script>


<script type=\"text/javascript\">
    layui.use(['element', 'form','layer'], function(){
        var element = layui.element(); //导航的hover效果、二级菜单等功能，需要依赖element模块
        var form = layui.form();
        var layer = layui.layer;
    });

    get_order_data();
    function get_order_data(){
        get_table_data('',{
            data_int_to_str:{pintai:<?=json_encode(array_column(\\common\\models\\SystemConfig::\$pintai,'ChineseName'))?>}
    ,unchange_time:['add_time']
            ,change_data:function (data) {
            var status_color={1:'orange',2:'green',3:'red'};
            var status=<?=json_encode(\\common\\models\\order\\recharge\\Common::\$status)?>;
            var recharge_status=<?=json_encode(\\common\\models\\order\\recharge\\Common::\$recharge_status)?>;
            var closing_status=<?=json_encode(\\common\\models\\order\\recharge\\Common::\$closing_status)?>;
            var careful_status={0:'否',1:'是'};
            \$.each(data,function (k,v) {
                var id=v['id'];
                var on=v['on'];
                var request_order_id=v['request_order_id'];
                data[k]['id']=' <td><input type=\"checkbox\" class=\"chk-ids\" value=\"'+ id +'\"/></td>';
                data[k]['sn']='<a href=\"javascript:void(0)\" style=\"color:#337ab7\" onclick=\"open_center(\\'<?=\\yii\\helpers\\Url::to(['details','type'=>\$request->get('type')])?>&id='+id+'\\''+',1200,800);\">'+v['sn'] +'</a>'
                +'<br/><a onmouseenter=\"layer.tips(\\'点击复制官方流水号\\',this,{tips: [2, \\'#5fb878\\']});\" style=\"color:black\" class=\"'+(v['official_sn']?'copy_official_sn':'')+'\" data-clipboard-text=\"'+v['official_sn']+'\">'+(v['official_sn']?v['official_sn']:'')+'</a><br/>'
                +'<span class=\"order_sn_copy\" data-clipboard-text=\"'+v['product_name']+'\">'+v['product_name']+'<br/>('+v['product_id']+')</span><br/>'+request_order_id;

                var sup_info='<a href=\"javascript:void(0);\" onclick=\"show_contact(\\''+v['t_id']+'\\')\" onmouseenter=\"show_tips(this)\" style=\"color:inherit\">';
                sup_info=sup_info+(v['sell_user_id']!=0? v['sup_nick_name']:'系统模版')+'<br/>';
                sup_info=sup_info+(v['sup_user_name']?v['sup_user_name']+'<br/>':'');
                data[k]['t_id']=sup_info+(v['qudao_id']? v['template_name'] +'<br/>('+v['qudao_id']+')':'空')+'</a>';

                data[k]['cenben']='<td ondblclick=\"show_input(this,\\'id\\',0);\">'+ (v['cenben'] ? v['cenben']:0) +'</td>';

                data[k]['user_id']=('<a>'+v['nick_name']+'<br>('+v['user_name']+')</a><br>')+( v['user_name'] =='251651698'&& v['order_user_info']?'('+v['order_user_info']+')':(v['sup_info']));

                var operation='';

                if(v['status']==4 || v['status']==5){
                    operation='<a href=\"javascript:void(0)\" onclick=\"open_center(\\'<?=\\yii\\helpers\\Url::to(['details','type'=>\$request->get('type')])?>&id='+id+'\\',1200,800);\">详情</a>';
                }else {
                    if(v['status']==1 || v['status']==3 ) {
                        operation='<p><a href=\"javascript:void(0);\" onclick=\"edit_order_status(\\'<?= \\yii\\helpers\\Url::to(['edit-status','type'=>\$request->get('type')]) ?>\\',\\'on\\',['+id+'])\">置成功</a></p>';
                    }
                    if(v['status']!=3){
                        operation=operation+'<a style=\"color: #bbb\" href=\"javascript:void(0);\" onclick=\"edit_order_status(\\'<?= \\yii\\helpers\\Url::to(['edit-status','type'=>\$request->get('type')]) ?>\\',\\'off\\',['+id+'])\">置失败</a>';
                    }
                }

                data[k]['admin_info']='<td  ondblclick=\"show_input(this,'+id+',1);\"><p class=\"admin_info_td\">'+( v['admin_info']||'无')+'</p></td>';

                var before_info='';
                var after_info='未查询或查询失败';
                var on_before_info=strToJson(v['on_before_info']);
                var on_after_info=strToJson(v['on_after_info']);


                if(on_before_info){
                    if(on_before_info['status']){
                        before_info=on_before_info['name'] + on_before_info['balance'];
                    }else {
                        before_info='本次查询失败';
                    }
                }
                if(on_after_info){
                    if(on_after_info.status){
                        after_info=on_after_info.name + on_after_info.balance;
                    }else {
                        after_info='本次查询失败';
                    }
                }

                data[k]['on']='<td class=\"text_align_left\"><span class=\"order-status\">充前：'
                    +before_info
                    +'<br/>号码：'+v['on']+' <a href=\"javascript:void(0);\" title=\"点击查询\" onclick=\"query_mobile_balance(this,'+id+')\">查询</a>'
                    +'<br/>地区：'+v['senfen']+'-'+v['city']+' <a href=\"javascript:void(0);\" onclick=\"open_center(\\'<?=\\yii\\helpers\\Url::to(['/order/mobile-balance-query-log/list'])?>?mobile='+on+'\\''+',1200,800);\">查询记录</a>'
                +'<br/>充后：<span class=\"on_before_info\">'+after_info+'</span>'
                +'</span></td>';


                data[k]['status']='<td ><span class=\"order-status\">'+status[v['status']]+'</span></td>';
                data[k]['recharge_status']='<td ><span class=\"recharge_status\">'+recharge_status[v['recharge_status']]+'</span></td>';
                data[k]['closing_status']='<td ><span class=\"closing_status\" >'+closing_status[v['closing_status']]+'</span></td>';
                data[k]['careful_status']='<td ><span class=\"careful_status\" onclick=\"edit_careful_status(this,'+id+','+v['careful_status']+');\">'+careful_status[v['careful_status']]+'</span></td>';

                data[k]['add_time']='<td class=\"order_time_td text_align_left\"><p>创建：'+formatDateTime(v['add_time'])+'</p>'+
                    '<p>支付：'+formatDateTime(v['pay_time'])+'</p>'+
                    '<p>完成：'+formatDateTime(v['finish_time'])+'</p></td>';



                data[k]['operation']=operation;
                delete data[k].product_id;
                delete data[k].official_sn;
                delete data[k].sell_user_id;
                delete data[k].sup_user_name;
                delete data[k].sup_nick_name;
                delete data[k].template_name;
                delete data[k].qudao_id;

                delete data[k].nick_name;
                delete data[k].user_name;
                delete data[k].order_user_info;
                delete data[k].sup_info;
                delete data[k].senfen;
                delete data[k].city;

                delete data[k].pay_time;
                delete data[k].finish_time;
                delete data[k].product_name;
                delete data[k].on_before_info;
                delete data[k].on_after_info;
                delete data[k].request_order_id;

            });
            return data;
        }
    ,success_function:function () {
            set_color();
            \$('#show_count_btn').text('查看统计');
            \$('#count_order').hide();
        }
    });
    }
    function strToJson(str){
        return (new Function(\"return \" + str))();
    }

    function query_mobile_balance(dom,id){
        if(\$(dom).text()=='查询中'){
            layer.msg('不要重复操作！');
            return false;
        }
        \$(dom).text('查询中');
        \$.ajax('<?=\\yii\\helpers\\Url::to(['query-mobile-balance','type'=>\$request->get('type')])?>',{
            data:{id:id},
            success:function (data) {
                if(data.status){
                    \$(dom).parents('td').find('.on_before_info').text(data.result);
                }
                \$(dom).text('查询');
                layer.msg(data.msg);
            },
            error:function () {
                \$(dom).text('查询');
                layer.msg('系统繁忙,稍后再试');
                // \$(dom).parents('td').find('.on_before_info').text('系统繁忙,稍后再试');
            }

        });

    }


    \$('#tab-1 a').click(function () {
        \$(this).addClass('btn btn-primary');
        \$(this).siblings().removeClass('btn btn-primary');
        \$('#check_cate').val( \$(this).attr('value'));
        get_order_data();
    });

    function edit_careful_status(dom,id,status) {
        var  careful_status=1;
        var  content='确认改成需要核实的订单么？';

        if(status==1){
            careful_status=0;
            content='确认不需要核实了么？';
        }

        layer.open({
            title:'温馨提示',
            content:content,
            btn:['确定','取消'],
            yes:function (index) {
                \$.ajax('<?=\\yii\\helpers\\Url::to(['edit-careful-status','type'=>1])?>',{
                    type:'post',
                    data:{id:id,careful_status:careful_status},
                    success:function (data) {
                        layer.msg(data.msg);
                        if(!data.status){
                            return false;
                        }
                        page_size_get_data();
                        layer.close(index);
                    }
                });
            }

        });
    }

    function show_input(dom,order_id,type) {
        var value_or_text=\$(dom).text();
        if(!value_or_text){
            return;
        }
        if(type==0){
            \$(dom).html('<input type=\"text\" class=\"num form-control\" style=\"width:70px;height:30px;\" value=\"'+value_or_text+'\" onblur=\"edit_cenben(this,'+value_or_text+','+order_id+')\">');
        }else {
            \$(dom).html('<input type=\"text\" class=\"admin_info form-control\" style=\"width:70px;height:30px;\" value=\"'+value_or_text+'\" onblur=\"edit_admin_info(this,\\''+value_or_text+'\\','+order_id+')\">');
        }
    }
    function edit_cenben(dom,old_cenben,order_id) {
        var cenben=\$(dom).val();
        var sell_price=\$(dom).parents('tr').find('td.sell_price').text();
        var lirun_dom=\$(dom).parents('tr').find('td.lirun');
        if(old_cenben==cenben){
            \$(dom).parent().text(old_cenben.toFixed(3));
            \$(dom).remove();
            return;
        }
        \$.get('<?=\\yii\\helpers\\Url::to(['edit-cenben','type'=>Yii::\$app->request->get('type')])?>',{id:order_id,cenben:cenben},function (data) {
            if(data.status){
                layer.msg(data.msg,function () {
                    location.reload();
                })
            }else {
                layer.msg(data.msg)
            }
        });
    }
    function edit_admin_info(dom,old_admin_info,order_id) {
        var admin_info=\$(dom).val();
        if(old_admin_info==admin_info){
            layer.msg('未修改');
            return false;
        }
        \$.ajax('<?=\\yii\\helpers\\Url::to(['edit-admin-info','type'=>Yii::\$app->request->get('type')])?>',
            {
                type:'post',
                data:{id:order_id,admin_info:admin_info},
                success:function (data) {
                    if(data.status){
                        layer.msg(data.msg,function () {
                            page_size_get_data();
                        })
                    }else {
                        layer.msg(data.msg)
                    }
                }
            });
    }

    function open_center(url,width,height) {
        myWindow= window.open(url,'',
            'scrollbars=0,width='+width+',height='+height+',top='+(( (window.screen.availHeight)/2 )-(height/2) )+',left='+(( (window.screen.availWidth)/2 )-(width/2)));
    }
    /*
     *初始化所有layer-date日期控件
     */
    \$('.layer-date').each(function () {
        var key = \$(this).attr('id');
        bind_laydate('#' + key)
    });

    /**
     *laydate dom 绑定 配合jq each可以完成批量绑定
     * @param key
     */
    function bind_laydate(key) {
        var ob = {
            elem: key,
            format: \"YYYY-MM-DD hh:mm:ss\",
            istime: true,
            istoday: true,
            start: '<?=date(\"Y-m-d H:i:s\",time())?>',
        };
        laydate(ob);
    }

    /*
     *变更渠道
     */
    function edit_empty_qudao_status(status){
        \$.post('<?=\\yii\\helpers\\Url::to(['empty-qudao-order-status','type'=>\$request->get('type')])?>',{
            status:status
        },function(data){
            if(!data.status){
                layer.alert(data.msg);
                return;
            }
            location.reload();
        },'json');
    }

    function anew_recharge(){

        var b=true;

        \$('.chk-ids').each(function(){
            if(\$(this).prop('checked')!=true){
                return true;
            }
            var order_status='充值中|充值成功';
            var recharge_status='充值中|提交失败|充值成功|充值失败|已退款|充值可疑|提交可疑|已提单|已验单';
            var order_status_val= \$.trim(\$(this).parents('tr').find('.order-status').html());
            var recharge_status_val=\$.trim(\$(this).parents('tr').find('.recharge-status').text());

//            if(order_status.indexOf(order_status_val)==-1){
//                layer.alert('请选择正确的订单')
//                b=false;
//                return false
//            }
//
//            if(recharge_status.indexOf(recharge_status_val)==-1){
//                layer.alert('请选择正确的订单')
//                b=false;
//                return false
//            }

        });

        if(b){
            open_center('<?=\\yii\\helpers\\Url::to(['anew-recharge'])?>?&ids='+get_ids(\$('.chk-ids'))+'&type=<?=\$request->get('type')?>',1600,600);
            //   window.open(,'all_qudao','width=1600,height=600')
        }

    }

    function set_color() {
        /**********更新订单壮态字体色***********/
        \$('.order-status').each(function(){
            var text=\$(this).text();
            if(text.indexOf('充值成功')!==-1) {
                \$(this).addClass('label label-primary');
            }else if(text.indexOf('充值中')!==-1){
                \$(this).addClass('label label-danger');
            }else if(text.indexOf('充值失败')!==-1){
                \$(this).addClass('label label-warning');
            }else if(text.indexOf('待付款')!==-1){
                \$(this).addClass('label label-info');
            }else if(text.indexOf('已取消')!==-1){
                \$(this).addClass('label');
            }

        });

        \$('.careful_status').each(function(){
            var text=\$(this).text();
            if(text.indexOf('否')!==-1) {
                \$(this).addClass('label label-primary');
            }else if(text.indexOf('是')!==-1){
                \$(this).addClass('label label-danger');
            }
        });


        /**********更新充值壮态字体色***********/
        \$('.recharge_status').each(function(){
            var text=\$(this).text();
            if(text.indexOf('充值成功')!==-1) {
                \$(this).addClass('label label-primary');
            }else if(text.indexOf('充值失败')!==-1 || text.indexOf('提交失败')!==-1){
                \$(this).addClass('label label-warning');
            }else if(text.indexOf('待付款')!==-1){
                \$(this).addClass('label label-info');
            }else if(text.indexOf('已取消')!==-1){
                \$(this).addClass('label');
            }else {
                \$(this).addClass('label label-danger');
            }

        });
        /**********更新结算状态字体色***********/
        \$('.closing_status').each(function(){
            var text=\$(this).text();
            if(text.indexOf('已结算')!==-1) {
                \$(this).addClass('label label-primary');
            }else if(text.indexOf('未结算')!==-1){
                \$(this).addClass('label label-danger');
            }else if(text.indexOf('已退款')!==-1){
                \$(this).addClass('label label-warning');
            }
        });
    }



    function export_cvs(){
        if(\$('#data-table tr').length==0){
            layer.msg('无数据不能导出');
            return;
        }
        var params='';
        if (/\\?/g.test(location.href)) {
            params = \"&export=yes\";
        } else {
            params = \"?export=yes\";
        }
        location.href=location.href+params;
    }

    function  show_tips(dom) {
        layer.tips('查看联系人',\$(dom),{
            tips: [2, '#5fb878']
        });
    }

    function show_contact(template_id) {
        var content_url='<?=\\yii\\helpers\\Url::to(['show-contact','type'=>\\yii::\$app->request->get('type')])?>&id='+template_id+'';
        contact(content_url,template_id,'');
    }

    function contact(content_url,template_id,add_or_edit_url){
        layer.open({
            type: 2,
            area: ['900px', '500px'],
            title: '查看联系人', //不显示标题
            content: content_url, //捕获的元素，注意：最好该指定的元素要存放在body最外层，否则可能被其它的相对元素所影响
            btn: ['确定', '取消'],
            btn1: function (index) {
                layer.close(index);
            }
        });
    }

</script>
</body>
</html>", "Admin/Order/recharge_legacy.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\Order\\recharge_legacy.twig");
    }
}
