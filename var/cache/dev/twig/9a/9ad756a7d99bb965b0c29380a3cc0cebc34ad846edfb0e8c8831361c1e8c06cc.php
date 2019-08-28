<?php

/* Reseller/Recharge/mobileSingle.twig */
class __TwigTemplate_384f11cfaeb069b58901ae2d18fb13bbd2afe7a227a00ecbfe4b2aae590499af extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Reseller/Common/layout.twig", "Reseller/Recharge/mobileSingle.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Reseller/Common/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Recharge/mobileSingle.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reseller/Recharge/mobileSingle.twig"));

        // line 2
        $context["title"] = "我要充值-手机话费充值-单笔充值";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 5
        echo "  <style type=\"text/css\">
    .m-side-nav .icon-nav{display: inline-block;width: 24px;height: 24px;font-size: 24px;}
    .m-side-nav .nav-title{padding: 0 26px;}
    .m-side-nav .nav-title span{width: 90px; margin-left: 15px;font-size: 14px;}

    .panel-item{float: left; width: calc(100% - 380px);height: auto;box-sizing: border-box; border-radius: 2px; margin-bottom: 20px; background: #FFFFFF;}

    .m-single{width: 100%;height: auto;box-sizing: border-box;padding: 40px 20px 0 20px;}
    .pre-query,#shemoren_show_cenben{cursor: pointer; color: #01AAED; }
    .layui-form-radio{margin-top: 0px;}
    .layui-form-radio i{font-size: 18px!important;}
    .layui-input-block{padding-top: 5px;}
    .m-single .price{display: inline-block;float: none;height: 28px;line-height: 28px; color: #01AAED;font-size: 14px;}
    .info-text{padding: 20px 40px;color: #888;line-height: 30px;}
    .inp-text{font: normal small-caps normal 24px/1.8em Arial, \"微软雅黑\";color: #FF4C00;font-weight: bold;}
    .container-title{position: relative; line-height: 40px;border-bottom: 1px solid #EEEEEE;box-sizing: border-box;padding: 0 10px;font-weight: bold;color: #333333;}
    .container-title span{position: absolute;display: block;width: 20px;height: 20px;top: 2px;right: 10px;cursor: pointer;}
    .container-title span:hover .icon-break{color: #999999;}

    .m-denomination{width: calc(100% - 120px)!important; margin-right: 0!important;}
    .m-denomination input, .m-denomination a{display: inline-block; margin-bottom: 5px;}



    #in-mobile-product-info,#shemoren_show_cenben{width: auto;text-align: left;padding-left: 0px;}
    input::-webkit-outer-spin-button,input::-webkit-inner-spin-button{-webkit-appearance: none !important;}


  </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 37
        echo "  <div class=\"panel-item\" id=\"mobile_content\" style=\"min-height: 400px;\">
    <div class=\"m-tab-item\">
      <ul class=\"m-tab\">
        <li class=\"tab-this\"><a href=\"\">单笔充值</a></li>
        <li ><a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_recharge_mobile_batch");
        echo "\">批量充值</a></li>
      </ul>
    </div>

    <!-- 手机话费充值 -->
    <div class=\"m-single\">
      <form action=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_recharge_orders_place_single_order");
        echo "\" method=\"post\" class=\"layui-form\">
      <input type=\"hidden\" name=\"recharge_amount\" id=\"recharge_amount\"/>
      <input type=\"hidden\" name=\"sell_price\" id=\"sell_price\"/>
      <input type=\"hidden\" name=\"product_name\" id=\"product_name\"/>
      <input type=\"hidden\" name=\"_token\" id=\"_token\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("reseller_recharge_orders_place_single_order"), "html", null, true);
        echo "\"/>

      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">手机号码</label>
        <div class=\"layui-input-block foxdou-block\">
          <div class=\"layui-input-inline\">
            <input name=\"mobile\" id=\"mobile\" autocomplete=\"off\" class=\"layui-input inp-text\"  maxlength=\"11\" type=\"tel\">
          </div>
          <div class=\"layui-form-mid foxdou-auto-play\">
            <!--鼠标经过喇叭自动播放-->
            <i class=\"icon iconfont icon-laba\" title=\"点击播号\" id=\"speek_mobile\" onclick=\"speekMobile();\"></i>
            <input type=\"checkbox\" name=\"\" title=\"自动播放\" lay-skin=\"primary\" ";
        // line 62
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 62, $this->source); })()), "resellerAccount", array()), "if_auto_play", array())) ? ("checked") : (""));
        echo " value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 62, $this->source); })()), "resellerAccount", array()), "if_auto_play", array()), "html", null, true);
        echo "\" lay-filter=\"if_auto_play\" id=\"if_auto_play\">
          </div>
        </div>
        <div class=\"foxdou-form-mid\">
          <div class=\"layui-form-mid layui-word-aux\" id=\"check-mobile-info\"><i class=\"iconfont icon-gantan\">&#xe609;</i>请先输入正确的手机号码</div>
        </div>
      </div>

      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">余额查询</label>
        <div class=\"layui-input-inline\" style=\"line-height: 38px;width: auto\">
          <span id=\"mobile-balance\" ></span>
          <a class=\"pre-query\" id=\"mobile-balance-query\">点击查询</a>
        </div>
      </div>
      <div class=\"layui-form-item\" style=\"display: none\" id=\"choose_mianzi_box\">
        <label class=\"layui-form-label\">选择面额</label>
        <div class=\"layui-input-inline m-denomination\" id=\"recharge_amount-list\">
          <input id=\"mainzi_1\" class=\"mianzhi\" data-value=\"0\" type=\"text\" placeholder=\"任意充\"/>
          <a id=\"mainzi_10\"  class=\"mianzhi\" data-value=\"10\">10元</a>
          <a id=\"mainzi_20\"  class=\"mianzhi\" data-value=\"20\">20元</a>
          <a id=\"mainzi_30\"  class=\"mianzhi\" data-value=\"30\">30元</a>
          <a id=\"mainzi_50\"  class=\"mianzhi\" data-value=\"50\">50元</a>
          <a id=\"mainzi_100\" class=\"mianzhi\" data-value=\"100\">100元</a>
          <a id=\"mainzi_200\" class=\"mianzhi\" data-value=\"200\">200元</a>
          <a id=\"mainzi_300\" class=\"mianzhi\" data-value=\"300\">300元</a>
          <a id=\"mainzi_500\" class=\"mianzhi\" data-value=\"500\">500元</a>
        </div>
      </div>
      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">选择商品</label>
        <div id=\"product-list\" >
          <label class=\"layui-form-label\" id=\"in-mobile-product-info\" >请先输入正确的手机号码</label>
        </div>
      </div>

      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">显示成本</label>
        <div class=\"layui-input-inline\" style=\"width: 55px;\">
          <input type=\"checkbox\" ";
        // line 101
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 101, $this->source); })()), "resellerAccount", array()), "if_show_recharge_cenben", array())) ? ("checked") : (""));
        echo " value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 101, $this->source); })()), "resellerAccount", array()), "if_show_recharge_cenben", array()), "html", null, true);
        echo "\" lay-skin=\"switch\" lay-filter=\"if_show_cenben\" lay-text=\"显示|隐藏\" id=\"if_show_cenben\">

        </div>
      </div>

      <div class=\"layui-form-item\" style=\"\" id=\"real_sell_price_box\">
        <label class=\"layui-form-label\">零售价格</label>
        <div class=\"layui-input-inline \">
          <input type=\"text\" name=\"real_sell_price\" placeholder=\"零售价\" class=\"layui-input\" id=\"real_sell_price\" />
        </div>
      </div>





      <div class=\"layui-form-item layui-form-text\">
        <label class=\"layui-form-label\">填写备注</label>
        <div class=\"layui-input-block\">
          <textarea placeholder=\"可选填，可根据自己需要填写备注信息\" name=\"note\" class=\"layui-textarea f-fnsna\"></textarea>
        </div>
      </div>
      <div class=\"layui-form-item\">
        <div class=\"layui-input-block\">
          <button class=\"layui-btn f-fnsna\" lay-submit=\"\"  lay-filter=\"sub\" id=\"sub\">立即提交</button>
        </div>
      </div>
      </form>
      <div class=\"info-text\">
        <p>服务说明:</p>
        <p>1、快充正常为0-10分钟内到账，月初月底可能有延迟到账情况，此为正常现象（其他时间如有超过30分钟仍未到账的请联系客服处理）。</p>
        <p>2、如遇系统显示成功，但怀疑没到帐的请拨打电话到相应运营商（移动10086，联通10010，电信10000）转人工服务核实缴费记录。</p>
        <p>3、若经运营商核实后确实无缴费记录的，请点击此处联系查单客服处理（点击即可进入QQ对话，如果无法进入请手动添加QQ800093007后再做咨询）。</p>
        <p>4、注意：官方规定广东联通不能充值132、131、130等智能网号码段20元以下的话费，故请不要提交该类型的号码充值，以免带来不必要的损失。</p>
        <p>5、为了防止网络原因导致订单重复提交，系统规定同一面值同一号码在1分钟内只能提交充值一次，若想再次提交充值需等一分钟。</p>
      </div>
    </div>
    <!-- /手机话费充值 -->
    ";
        // line 140
        echo "  </div>
  <!-- 右边日历 -->
  ";
        // line 142
        $this->loadTemplate("Reseller/Common/_rightPanel.twig", "Reseller/Recharge/mobileSingle.twig", 142)->display($context);
        // line 143
        echo "

  <script type=\"text/javascript\">
      var ajax_check_mianzi,ajax_in_mobile_check_all_product,ajax_get_icp,ajax_mobile_balance_query,if_speeked_mobile=false;
      layui.use(['form', 'layedit'], function(){
          var form= layui.form;
          var layer = layui.layer;

          form.on('switch(if_show_cenben)', function(data){
              if(data.elem.checked){
                  \$('.sell_pirce_cenben').show();
                  \$(data.elem).val('1');
              }else {
                  \$('.sell_pirce_cenben').hide();
                  \$(data.elem).val('0');
              }

              \$.ajax('set-if-show-recharge-cost',{
                  type:'post'
                  ,data:{if_show_recharge_cenben: \$(data.elem).val(),'<?=Yii::\$app->request->csrfParam?>':_CSRF}
                  ,success:function (data) {

                  }
                  ,error:function () {

                  }
              });
          });

          form.on('checkbox(if_auto_play)', function(data){
              if(data.elem.checked){
                  \$(data.elem).val('1');
              }else {
                  \$(data.elem).val('0');
              }
              \$.ajax('set-if-auto-play',{
                  type:'post'
                  ,data:{if_auto_play: \$(data.elem).val(),'<?=Yii::\$app->request->csrfParam?>':_CSRF}
                  ,success:function (data) {

                  }
                  ,error:function () {

                  }
              });

          });

      });

      function speekNum(num,use_baidu){
          use_baidu=use_baidu||false;
//        if(str=='0') {
//            str='零';
//        }
          if(use_baidu){
              var url = \"https://fanyi.baidu.com/gettts?lan=zh&text=\"+encodeURI(num)+\"&spd=5&source=web\"; // baidu
          }else {
              var url = \"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/sound/num/\"+num+\".mp3\";        // foxdou
          }
          var n = new Audio(url);
          n.src = url;
          n.play();
      }
      function speekMobile() {
          var mobile=\$('#mobile').val();
          if(checkPhone(mobile) === 1) {
              speekNum(mobile,true);
          }
      }


      //    提交订单
      \$('form').ajaxForm({
          dataType:'json'
          ,beforeSerialize:function () {
              var product = \$('#product-list input[name=\"product_info\"]:checked');
              \$('#product_name').val(product.attr('title'));
              \$('#sell_price').val(product.attr('sell_price'));
          }
          ,beforeSubmit:function(){
              var product_info=\$('#product-list input[name=\"product_info\"]:checked').val();
              var recharge_amount=\$('#recharge_amount').val();
              var mobile=\$('#mobile').val();
              if(product_info===undefined || !product_info || !mobile ||!recharge_amount){
                  return false;
              }
              \$('#sub').attr('disabled',true);
          }
          ,success:function(data){
              if(!data.status){
                  \$('#sub').removeAttr('disabled');
                  layer.msg(data.msg);
                  return false;
              }
              \$('form').resetForm();
              layer.msg(data.msg);
              location.href=data.url;
              //location.href='<?=\\yii\\helpers\\Url::to(['/backend/want-recharge/confirm-order'])?>?trade_id='+data.trade_id+'&jump_url=<?=Yii::\$app->request->url?>';
          }
          ,error:function () {
              layer.msg('网络或系统繁忙，请稍候再试');
              \$('#sub').removeAttr('disabled');
          }
      });

      //余额查询
      \$('#mobile-balance-query').click(function () {
          var mobile=\$('#mobile').val();
          if(checkPhone(mobile) === 1) {
              \$('#mobile-balance').text('正在查询中...');
              \$(this).hide();
              ajax_mobile_balance_query= \$.ajax('mobile-balance',{
                  data:{mobile:mobile,'_csrf-agent':'<?=\\Yii::\$app->request->getCsrfToken()?>'}
                  ,error:function () {
                      \$('#mobile-balance').text('查询超时');
                      \$('#mobile-balance-query').text('重新查询');
                      \$('#mobile-balance-query').show();
                  }
                  ,success:function (data) {
                      if (data.status) {
                          \$('#mobile-balance').text(data.result);
                      }else {
                          \$('#mobile-balance').text(data.msg);
                      }
                      \$('#mobile-balance-query').text('重新查询');
                      \$('#mobile-balance-query').show();
                  }
                  ,type:\"post\"
              });
          }
      });

      //点击事件（金额选择）
      \$('.mianzhi').bind('click focus',function(){
          \$(this).addClass('denomination-this');
          \$(this).siblings('a').removeClass('denomination-this');

          mianzi_check(\$('#mobile').val(), \$(this).data('value'));
//        if(checkPhone(\$('#mobile').val()) === 1 && !\$(this).val()) {
//            \$('#product-list').html('<label class=\"layui-form-label\" id=\"in-mobile-product-info\">请输入要充值的金额</label>');
//        }
      });
//      //固定面值点击事件
//      \$('.m-denomination a').click(function(){
//          if(\$(this).is('.denomination-this')){
//              return false;
//          }
//          \$(this).addClass('denomination-this');
//          \$(this).siblings().removeClass('denomination-this');
//          \$('.m-denomination input').val('');
//          var mobile=\$('#mobile').val();
//          var recharge_amount=\$(this).attr('value');
//          mianzi_check(mobile,recharge_amount);
//      });

      //任意充输入事件
      \$('.m-denomination input').bind('change', function() {
          var mobile=\$('#mobile').val();
          var recharge_amount=\$(this).val();
          if((recharge_amount<0.01 && recharge_amount!=0) || !recharge_amount){
              \$(this).val('');
              if(checkPhone(\$('#mobile').val()) === 1) {
                  \$('#product-list').html('<label class=\"layui-form-label\" id=\"in-mobile-product-info\">请输入要充值的金额</label>');
              }
              return false;
          }
          mianzi_check(mobile,recharge_amount);
      });



      \$('#mobile').keyup( function (e) {
          e = window.event || e;
          var code = e.which || e.keyCode;
          var code_key={
              48:0,
              49:1,
              50:2,
              51:3,
              52:4,
              53:5,
              54:6,
              55:7,
              56:8,
              57:9,

              96:0,
              97:1,
              98:2,
              99:3,
              100:4,
              101:5,
              102:6,
              103:7,
              104:8,
              105:9
          };
          if(\$.inArray(code, [48,49,50,51,52,53,54,55,56,57,96,97,98,99,100,101,102,103,104,105]) != -1 && \$('#if_auto_play').val()==1)
          {
              speekNum(code_key[code]);
          }
      });


      //手机号码输入事件
      var last_mobile;
      \$('#mobile').bind('input propertychange', function() {

          var mobile=\$(this).val();

          if(last_mobile==mobile){
              return false;
          }
          if(ajax_check_mianzi){
              ajax_check_mianzi.abort();
          }
          if(ajax_mobile_balance_query){
              ajax_mobile_balance_query.abort();
          }

          last_mobile=mobile;
          \$('#mobile-balance-query').text('点击查询');
          \$('#mobile-balance').text('');
          \$('.m-denomination input').val('');
          \$('#real_sell_price').val('');
          \$('#recharge_amount-list *').removeClass('denomination-weihu denomination-this');
          \$('#product-list').html('<label class=\"layui-form-label\" id=\"in-mobile-product-info\">请先输入正确的手机号码</label>');
          \$('#choose_mianzi_box').hide();

          if(checkPhone(mobile) === 1){
              \$.get('";
        // line 374
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_recharge_mobile_number_info");
        echo "', {number:mobile},function (data) {
                  if(data.status){
                      \$('#check-mobile-info').html('<i class=\"iconfont icon-dui\">&#x3442;</i>'+data.location);
                      \$('#product-list').html('<label class=\"layui-form-label\" id=\"in-mobile-product-info\">' + data.msg + '</label>');
                     \$('#choose_mianzi_box').show();
                  }
              });
          }else {
              \$('#check-mobile-info').html('<i class=\"iconfont icon-gantan\">&#xe609;</i>请先输入正确的手机号码');
          }
      });

      //检测手机号码格式
      function checkPhone(phone){
          if((/^1[3456789]\\d{9}\$/.test(phone)) && phone.length==11){
              return 1;
          }
          \$('#product-list').html('<label class=\"layui-form-label\" id=\"in-mobile-product-info\">请先输入正确的手机号码</label>');
          return 0;
      }
      //检测可充值商品

      //选择面值
      function mianzi_check(number, recharge_amount){
          if(ajax_check_mianzi){
              ajax_check_mianzi.abort();
          }
          if(!checkPhone(number)){
              \$('#product-list').html('<label class=\"layui-form-label\" id=\"in-mobile-product-info\">请先输入正确的手机号码</label>');
              return false;
          }
          if(!recharge_amount || recharge_amount == undefined || recharge_amount==0){
              if(recharge_amount==0){
                  \$('#product-list').html('<label class=\"layui-form-label\" id=\"in-mobile-product-info\">请输入要充值的金额</label>');
              }
              return false;
          }
          \$('#product-list').html('<label class=\"layui-form-label\" id=\"in-mobile-product-info\">正在获取可充值的商品，请稍候...</label>');
          \$('#recharge_amount').val(recharge_amount);
          \$('#real_sell_price').val('');
          ajax_check_mianzi =  \$.get('";
        // line 414
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseller_recharge_available_recharge_products");
        echo "', {number:number, value:recharge_amount},function(data){
              if(!data.status){
                  \$('#mainzi_'+recharge_amount).not('input').addClass('denomination-weihu');
                  \$('#product-list').html('<label class=\"layui-form-label\" id=\"in-mobile-product-info\">'+data.msg+'</label>');
                  return;
              }

              if(data.status) {
                  var products = data.products;
                  var str='';
                  for(var i in products){
                      var product = products[i]; 
                      var product_name = product.name;
                      ";
        // line 427
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 427, $this->source); })()), "debug", array())) {
            // line 428
            echo "                      product_name = product.name + ' - ' + product.product_info;
                      ";
        }
        // line 430
        echo "                      str +='<div class=\"layui-input-block\">' +
                          '<input sell_price=\"' + product.sell_price + '\" name=\"product_info\" value=\"' + product.product_info + '\" title=\"' + product_name + '\" '+(i==0?'checked':'')+' type=\"radio\">' +
                          '<div class=\"price sell_pirce_cenben\">成本：' + product.sell_price + '元</div>' +
                          '</div>';
                  }

                  \$('#product-list').html(str);
                  if(\$('#if_show_cenben').val()==0){
                      \$('.sell_pirce_cenben').hide();
                  }

                  \$('#real_sell_price').val(recharge_amount);
                  \$('#mainzi_'+parseInt(data.recharge_value)).removeClass('denomination-weihu');
                  layui.form.render('radio');
              }
          },'json');
      }



  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Reseller/Recharge/mobileSingle.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  532 => 430,  528 => 428,  526 => 427,  510 => 414,  467 => 374,  234 => 143,  232 => 142,  228 => 140,  185 => 101,  141 => 62,  127 => 51,  120 => 47,  111 => 41,  105 => 37,  96 => 36,  57 => 5,  48 => 4,  38 => 1,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Reseller/Common/layout.twig' %}
{% set title = '我要充值-手机话费充值-单笔充值' %}

{% block css %}
  <style type=\"text/css\">
    .m-side-nav .icon-nav{display: inline-block;width: 24px;height: 24px;font-size: 24px;}
    .m-side-nav .nav-title{padding: 0 26px;}
    .m-side-nav .nav-title span{width: 90px; margin-left: 15px;font-size: 14px;}

    .panel-item{float: left; width: calc(100% - 380px);height: auto;box-sizing: border-box; border-radius: 2px; margin-bottom: 20px; background: #FFFFFF;}

    .m-single{width: 100%;height: auto;box-sizing: border-box;padding: 40px 20px 0 20px;}
    .pre-query,#shemoren_show_cenben{cursor: pointer; color: #01AAED; }
    .layui-form-radio{margin-top: 0px;}
    .layui-form-radio i{font-size: 18px!important;}
    .layui-input-block{padding-top: 5px;}
    .m-single .price{display: inline-block;float: none;height: 28px;line-height: 28px; color: #01AAED;font-size: 14px;}
    .info-text{padding: 20px 40px;color: #888;line-height: 30px;}
    .inp-text{font: normal small-caps normal 24px/1.8em Arial, \"微软雅黑\";color: #FF4C00;font-weight: bold;}
    .container-title{position: relative; line-height: 40px;border-bottom: 1px solid #EEEEEE;box-sizing: border-box;padding: 0 10px;font-weight: bold;color: #333333;}
    .container-title span{position: absolute;display: block;width: 20px;height: 20px;top: 2px;right: 10px;cursor: pointer;}
    .container-title span:hover .icon-break{color: #999999;}

    .m-denomination{width: calc(100% - 120px)!important; margin-right: 0!important;}
    .m-denomination input, .m-denomination a{display: inline-block; margin-bottom: 5px;}



    #in-mobile-product-info,#shemoren_show_cenben{width: auto;text-align: left;padding-left: 0px;}
    input::-webkit-outer-spin-button,input::-webkit-inner-spin-button{-webkit-appearance: none !important;}


  </style>
{% endblock %}

{% block main_content %}
  <div class=\"panel-item\" id=\"mobile_content\" style=\"min-height: 400px;\">
    <div class=\"m-tab-item\">
      <ul class=\"m-tab\">
        <li class=\"tab-this\"><a href=\"\">单笔充值</a></li>
        <li ><a href=\"{{ path('reseller_recharge_mobile_batch') }}\">批量充值</a></li>
      </ul>
    </div>

    <!-- 手机话费充值 -->
    <div class=\"m-single\">
      <form action=\"{{ path('reseller_recharge_orders_place_single_order') }}\" method=\"post\" class=\"layui-form\">
      <input type=\"hidden\" name=\"recharge_amount\" id=\"recharge_amount\"/>
      <input type=\"hidden\" name=\"sell_price\" id=\"sell_price\"/>
      <input type=\"hidden\" name=\"product_name\" id=\"product_name\"/>
      <input type=\"hidden\" name=\"_token\" id=\"_token\" value=\"{{ csrf_token('reseller_recharge_orders_place_single_order') }}\"/>

      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">手机号码</label>
        <div class=\"layui-input-block foxdou-block\">
          <div class=\"layui-input-inline\">
            <input name=\"mobile\" id=\"mobile\" autocomplete=\"off\" class=\"layui-input inp-text\"  maxlength=\"11\" type=\"tel\">
          </div>
          <div class=\"layui-form-mid foxdou-auto-play\">
            <!--鼠标经过喇叭自动播放-->
            <i class=\"icon iconfont icon-laba\" title=\"点击播号\" id=\"speek_mobile\" onclick=\"speekMobile();\"></i>
            <input type=\"checkbox\" name=\"\" title=\"自动播放\" lay-skin=\"primary\" {{ user.resellerAccount.if_auto_play ? 'checked' : '' }} value=\"{{ user.resellerAccount.if_auto_play }}\" lay-filter=\"if_auto_play\" id=\"if_auto_play\">
          </div>
        </div>
        <div class=\"foxdou-form-mid\">
          <div class=\"layui-form-mid layui-word-aux\" id=\"check-mobile-info\"><i class=\"iconfont icon-gantan\">&#xe609;</i>请先输入正确的手机号码</div>
        </div>
      </div>

      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">余额查询</label>
        <div class=\"layui-input-inline\" style=\"line-height: 38px;width: auto\">
          <span id=\"mobile-balance\" ></span>
          <a class=\"pre-query\" id=\"mobile-balance-query\">点击查询</a>
        </div>
      </div>
      <div class=\"layui-form-item\" style=\"display: none\" id=\"choose_mianzi_box\">
        <label class=\"layui-form-label\">选择面额</label>
        <div class=\"layui-input-inline m-denomination\" id=\"recharge_amount-list\">
          <input id=\"mainzi_1\" class=\"mianzhi\" data-value=\"0\" type=\"text\" placeholder=\"任意充\"/>
          <a id=\"mainzi_10\"  class=\"mianzhi\" data-value=\"10\">10元</a>
          <a id=\"mainzi_20\"  class=\"mianzhi\" data-value=\"20\">20元</a>
          <a id=\"mainzi_30\"  class=\"mianzhi\" data-value=\"30\">30元</a>
          <a id=\"mainzi_50\"  class=\"mianzhi\" data-value=\"50\">50元</a>
          <a id=\"mainzi_100\" class=\"mianzhi\" data-value=\"100\">100元</a>
          <a id=\"mainzi_200\" class=\"mianzhi\" data-value=\"200\">200元</a>
          <a id=\"mainzi_300\" class=\"mianzhi\" data-value=\"300\">300元</a>
          <a id=\"mainzi_500\" class=\"mianzhi\" data-value=\"500\">500元</a>
        </div>
      </div>
      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">选择商品</label>
        <div id=\"product-list\" >
          <label class=\"layui-form-label\" id=\"in-mobile-product-info\" >请先输入正确的手机号码</label>
        </div>
      </div>

      <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">显示成本</label>
        <div class=\"layui-input-inline\" style=\"width: 55px;\">
          <input type=\"checkbox\" {{ user.resellerAccount.if_show_recharge_cenben ? 'checked' : '' }} value=\"{{ user.resellerAccount.if_show_recharge_cenben }}\" lay-skin=\"switch\" lay-filter=\"if_show_cenben\" lay-text=\"显示|隐藏\" id=\"if_show_cenben\">

        </div>
      </div>

      <div class=\"layui-form-item\" style=\"\" id=\"real_sell_price_box\">
        <label class=\"layui-form-label\">零售价格</label>
        <div class=\"layui-input-inline \">
          <input type=\"text\" name=\"real_sell_price\" placeholder=\"零售价\" class=\"layui-input\" id=\"real_sell_price\" />
        </div>
      </div>





      <div class=\"layui-form-item layui-form-text\">
        <label class=\"layui-form-label\">填写备注</label>
        <div class=\"layui-input-block\">
          <textarea placeholder=\"可选填，可根据自己需要填写备注信息\" name=\"note\" class=\"layui-textarea f-fnsna\"></textarea>
        </div>
      </div>
      <div class=\"layui-form-item\">
        <div class=\"layui-input-block\">
          <button class=\"layui-btn f-fnsna\" lay-submit=\"\"  lay-filter=\"sub\" id=\"sub\">立即提交</button>
        </div>
      </div>
      </form>
      <div class=\"info-text\">
        <p>服务说明:</p>
        <p>1、快充正常为0-10分钟内到账，月初月底可能有延迟到账情况，此为正常现象（其他时间如有超过30分钟仍未到账的请联系客服处理）。</p>
        <p>2、如遇系统显示成功，但怀疑没到帐的请拨打电话到相应运营商（移动10086，联通10010，电信10000）转人工服务核实缴费记录。</p>
        <p>3、若经运营商核实后确实无缴费记录的，请点击此处联系查单客服处理（点击即可进入QQ对话，如果无法进入请手动添加QQ800093007后再做咨询）。</p>
        <p>4、注意：官方规定广东联通不能充值132、131、130等智能网号码段20元以下的话费，故请不要提交该类型的号码充值，以免带来不必要的损失。</p>
        <p>5、为了防止网络原因导致订单重复提交，系统规定同一面值同一号码在1分钟内只能提交充值一次，若想再次提交充值需等一分钟。</p>
      </div>
    </div>
    <!-- /手机话费充值 -->
    {#<?=\$this->render('/common/more-order')?>#}
  </div>
  <!-- 右边日历 -->
  {% include \"Reseller/Common/_rightPanel.twig\" %}


  <script type=\"text/javascript\">
      var ajax_check_mianzi,ajax_in_mobile_check_all_product,ajax_get_icp,ajax_mobile_balance_query,if_speeked_mobile=false;
      layui.use(['form', 'layedit'], function(){
          var form= layui.form;
          var layer = layui.layer;

          form.on('switch(if_show_cenben)', function(data){
              if(data.elem.checked){
                  \$('.sell_pirce_cenben').show();
                  \$(data.elem).val('1');
              }else {
                  \$('.sell_pirce_cenben').hide();
                  \$(data.elem).val('0');
              }

              \$.ajax('set-if-show-recharge-cost',{
                  type:'post'
                  ,data:{if_show_recharge_cenben: \$(data.elem).val(),'<?=Yii::\$app->request->csrfParam?>':_CSRF}
                  ,success:function (data) {

                  }
                  ,error:function () {

                  }
              });
          });

          form.on('checkbox(if_auto_play)', function(data){
              if(data.elem.checked){
                  \$(data.elem).val('1');
              }else {
                  \$(data.elem).val('0');
              }
              \$.ajax('set-if-auto-play',{
                  type:'post'
                  ,data:{if_auto_play: \$(data.elem).val(),'<?=Yii::\$app->request->csrfParam?>':_CSRF}
                  ,success:function (data) {

                  }
                  ,error:function () {

                  }
              });

          });

      });

      function speekNum(num,use_baidu){
          use_baidu=use_baidu||false;
//        if(str=='0') {
//            str='零';
//        }
          if(use_baidu){
              var url = \"https://fanyi.baidu.com/gettts?lan=zh&text=\"+encodeURI(num)+\"&spd=5&source=web\"; // baidu
          }else {
              var url = \"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/sound/num/\"+num+\".mp3\";        // foxdou
          }
          var n = new Audio(url);
          n.src = url;
          n.play();
      }
      function speekMobile() {
          var mobile=\$('#mobile').val();
          if(checkPhone(mobile) === 1) {
              speekNum(mobile,true);
          }
      }


      //    提交订单
      \$('form').ajaxForm({
          dataType:'json'
          ,beforeSerialize:function () {
              var product = \$('#product-list input[name=\"product_info\"]:checked');
              \$('#product_name').val(product.attr('title'));
              \$('#sell_price').val(product.attr('sell_price'));
          }
          ,beforeSubmit:function(){
              var product_info=\$('#product-list input[name=\"product_info\"]:checked').val();
              var recharge_amount=\$('#recharge_amount').val();
              var mobile=\$('#mobile').val();
              if(product_info===undefined || !product_info || !mobile ||!recharge_amount){
                  return false;
              }
              \$('#sub').attr('disabled',true);
          }
          ,success:function(data){
              if(!data.status){
                  \$('#sub').removeAttr('disabled');
                  layer.msg(data.msg);
                  return false;
              }
              \$('form').resetForm();
              layer.msg(data.msg);
              location.href=data.url;
              //location.href='<?=\\yii\\helpers\\Url::to(['/backend/want-recharge/confirm-order'])?>?trade_id='+data.trade_id+'&jump_url=<?=Yii::\$app->request->url?>';
          }
          ,error:function () {
              layer.msg('网络或系统繁忙，请稍候再试');
              \$('#sub').removeAttr('disabled');
          }
      });

      //余额查询
      \$('#mobile-balance-query').click(function () {
          var mobile=\$('#mobile').val();
          if(checkPhone(mobile) === 1) {
              \$('#mobile-balance').text('正在查询中...');
              \$(this).hide();
              ajax_mobile_balance_query= \$.ajax('mobile-balance',{
                  data:{mobile:mobile,'_csrf-agent':'<?=\\Yii::\$app->request->getCsrfToken()?>'}
                  ,error:function () {
                      \$('#mobile-balance').text('查询超时');
                      \$('#mobile-balance-query').text('重新查询');
                      \$('#mobile-balance-query').show();
                  }
                  ,success:function (data) {
                      if (data.status) {
                          \$('#mobile-balance').text(data.result);
                      }else {
                          \$('#mobile-balance').text(data.msg);
                      }
                      \$('#mobile-balance-query').text('重新查询');
                      \$('#mobile-balance-query').show();
                  }
                  ,type:\"post\"
              });
          }
      });

      //点击事件（金额选择）
      \$('.mianzhi').bind('click focus',function(){
          \$(this).addClass('denomination-this');
          \$(this).siblings('a').removeClass('denomination-this');

          mianzi_check(\$('#mobile').val(), \$(this).data('value'));
//        if(checkPhone(\$('#mobile').val()) === 1 && !\$(this).val()) {
//            \$('#product-list').html('<label class=\"layui-form-label\" id=\"in-mobile-product-info\">请输入要充值的金额</label>');
//        }
      });
//      //固定面值点击事件
//      \$('.m-denomination a').click(function(){
//          if(\$(this).is('.denomination-this')){
//              return false;
//          }
//          \$(this).addClass('denomination-this');
//          \$(this).siblings().removeClass('denomination-this');
//          \$('.m-denomination input').val('');
//          var mobile=\$('#mobile').val();
//          var recharge_amount=\$(this).attr('value');
//          mianzi_check(mobile,recharge_amount);
//      });

      //任意充输入事件
      \$('.m-denomination input').bind('change', function() {
          var mobile=\$('#mobile').val();
          var recharge_amount=\$(this).val();
          if((recharge_amount<0.01 && recharge_amount!=0) || !recharge_amount){
              \$(this).val('');
              if(checkPhone(\$('#mobile').val()) === 1) {
                  \$('#product-list').html('<label class=\"layui-form-label\" id=\"in-mobile-product-info\">请输入要充值的金额</label>');
              }
              return false;
          }
          mianzi_check(mobile,recharge_amount);
      });



      \$('#mobile').keyup( function (e) {
          e = window.event || e;
          var code = e.which || e.keyCode;
          var code_key={
              48:0,
              49:1,
              50:2,
              51:3,
              52:4,
              53:5,
              54:6,
              55:7,
              56:8,
              57:9,

              96:0,
              97:1,
              98:2,
              99:3,
              100:4,
              101:5,
              102:6,
              103:7,
              104:8,
              105:9
          };
          if(\$.inArray(code, [48,49,50,51,52,53,54,55,56,57,96,97,98,99,100,101,102,103,104,105]) != -1 && \$('#if_auto_play').val()==1)
          {
              speekNum(code_key[code]);
          }
      });


      //手机号码输入事件
      var last_mobile;
      \$('#mobile').bind('input propertychange', function() {

          var mobile=\$(this).val();

          if(last_mobile==mobile){
              return false;
          }
          if(ajax_check_mianzi){
              ajax_check_mianzi.abort();
          }
          if(ajax_mobile_balance_query){
              ajax_mobile_balance_query.abort();
          }

          last_mobile=mobile;
          \$('#mobile-balance-query').text('点击查询');
          \$('#mobile-balance').text('');
          \$('.m-denomination input').val('');
          \$('#real_sell_price').val('');
          \$('#recharge_amount-list *').removeClass('denomination-weihu denomination-this');
          \$('#product-list').html('<label class=\"layui-form-label\" id=\"in-mobile-product-info\">请先输入正确的手机号码</label>');
          \$('#choose_mianzi_box').hide();

          if(checkPhone(mobile) === 1){
              \$.get('{{ path(\"reseller_recharge_mobile_number_info\") }}', {number:mobile},function (data) {
                  if(data.status){
                      \$('#check-mobile-info').html('<i class=\"iconfont icon-dui\">&#x3442;</i>'+data.location);
                      \$('#product-list').html('<label class=\"layui-form-label\" id=\"in-mobile-product-info\">' + data.msg + '</label>');
                     \$('#choose_mianzi_box').show();
                  }
              });
          }else {
              \$('#check-mobile-info').html('<i class=\"iconfont icon-gantan\">&#xe609;</i>请先输入正确的手机号码');
          }
      });

      //检测手机号码格式
      function checkPhone(phone){
          if((/^1[3456789]\\d{9}\$/.test(phone)) && phone.length==11){
              return 1;
          }
          \$('#product-list').html('<label class=\"layui-form-label\" id=\"in-mobile-product-info\">请先输入正确的手机号码</label>');
          return 0;
      }
      //检测可充值商品

      //选择面值
      function mianzi_check(number, recharge_amount){
          if(ajax_check_mianzi){
              ajax_check_mianzi.abort();
          }
          if(!checkPhone(number)){
              \$('#product-list').html('<label class=\"layui-form-label\" id=\"in-mobile-product-info\">请先输入正确的手机号码</label>');
              return false;
          }
          if(!recharge_amount || recharge_amount == undefined || recharge_amount==0){
              if(recharge_amount==0){
                  \$('#product-list').html('<label class=\"layui-form-label\" id=\"in-mobile-product-info\">请输入要充值的金额</label>');
              }
              return false;
          }
          \$('#product-list').html('<label class=\"layui-form-label\" id=\"in-mobile-product-info\">正在获取可充值的商品，请稍候...</label>');
          \$('#recharge_amount').val(recharge_amount);
          \$('#real_sell_price').val('');
          ajax_check_mianzi =  \$.get('{{ path('reseller_recharge_available_recharge_products') }}', {number:number, value:recharge_amount},function(data){
              if(!data.status){
                  \$('#mainzi_'+recharge_amount).not('input').addClass('denomination-weihu');
                  \$('#product-list').html('<label class=\"layui-form-label\" id=\"in-mobile-product-info\">'+data.msg+'</label>');
                  return;
              }

              if(data.status) {
                  var products = data.products;
                  var str='';
                  for(var i in products){
                      var product = products[i]; 
                      var product_name = product.name;
                      {% if app.debug %}
                      product_name = product.name + ' - ' + product.product_info;
                      {% endif %}
                      str +='<div class=\"layui-input-block\">' +
                          '<input sell_price=\"' + product.sell_price + '\" name=\"product_info\" value=\"' + product.product_info + '\" title=\"' + product_name + '\" '+(i==0?'checked':'')+' type=\"radio\">' +
                          '<div class=\"price sell_pirce_cenben\">成本：' + product.sell_price + '元</div>' +
                          '</div>';
                  }

                  \$('#product-list').html(str);
                  if(\$('#if_show_cenben').val()==0){
                      \$('.sell_pirce_cenben').hide();
                  }

                  \$('#real_sell_price').val(recharge_amount);
                  \$('#mainzi_'+parseInt(data.recharge_value)).removeClass('denomination-weihu');
                  layui.form.render('radio');
              }
          },'json');
      }



  </script>
{% endblock %}
", "Reseller/Recharge/mobileSingle.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Reseller\\Recharge\\mobileSingle.twig");
    }
}
