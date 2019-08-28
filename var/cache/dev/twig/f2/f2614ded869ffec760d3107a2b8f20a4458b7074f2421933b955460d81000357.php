<?php

/* /Admin/Audit/account_application_js.twig */
class __TwigTemplate_2a39dc1729367606bed838175cfdd5930dd07008754e88c39fcee1825b4deaca extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Admin/Audit/account_application_js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Admin/Audit/account_application_js.twig"));

        // line 1
        echo "<script>
    var types = JSON.parse('";
        // line 2
        echo json_encode(twig_constant("App\\Common\\Model\\User\\User::TYPES"));
        echo "');
    var statuses = JSON.parse('";
        // line 3
        echo json_encode(twig_constant("App\\Common\\Model\\User\\UsersAccountApplication::REVIEW_STATUSES"));
        echo "');
    var platform_ids = JSON.parse('";
        // line 4
        echo json_encode(twig_constant("App\\Platform::PLATFORMS"));
        echo "');
    var provinces = JSON.parse('";
        // line 5
        echo json_encode(twig_constant("App\\Common\\Model\\Region::PROVINCE_FULL_NAMES"));
        echo "');
    var citys = JSON.parse('";
        // line 6
        echo json_encode(twig_constant("App\\Common\\Model\\Region::CITY_FULL_NAMES"));
        echo "');
    var url = \"\";
    var columns = [[
        {\"field\": \"id\", \"title\": \"申请记录编号\", \"width\": 150},
        {
            \"field\": \"platform_id\", \"title\": \"申请用户平台\", \"width\": 150, templet: function (d) {
                return platform_ids[d.platform_id];
            }
        },
        {
            \"field\": \"status\", \"title\": \"审核状态\", \"width\": 150, templet: function (d) {
                return statuses[d.status];
            }
        },
        {\"field\": \"account\", \"title\": \"狐豆名\", \"width\": 150},
        {\"field\": \"pass\", \"title\": \"通行证账号\", \"width\": 150},
        {
            \"field\": \"type\", \"title\": \"通行证类型\", \"width\": 150, templet: function (d) {
                return types[d.type];
            }
        },
        {\"field\": \"referrer_account\", \"title\": \"开户邀请人通行证\", \"width\": 100},
        {\"field\": \"note\", \"title\": \"审核说明\", \"width\": 200},
        {\"field\": \"add_time\", \"title\": \"创建时间\", templet: \"#add_time\"},
        {\"field\": \"eidt_time\", \"title\": \"处理时间\", templet: \"#edit_time\"},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\", \"width\": 100}
    ]];

    function get_data() {
        var params = \$('form#account-application').serialize();
        url = '?' + params;
        rander_table('#account-application-table', url, columns);
    }

    // 初始化
    get_data();
    table.on('tool(account-application-table)', function (obj) { //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
        var data = obj.data; //获得当前行数据
        var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）

        if (layEvent === 'review') { //审核
            if (data.type == '";
        // line 47
        echo twig_escape_filter($this->env, twig_constant("App\\Common\\Model\\User\\User::TYPE_INDIVIDUAL"), "html", null, true);
        echo "') {
                \$('#user_name').text(data.business_name);
                \$('#identity').text(data.business_license_no);
                layer.open({
                    type: 1
                    ,title: '开户申请审核'
                    ,area: ['500px','420px']
                    ,btn: ['审核通过', '审核不通过', '返回']
                    ,btnAlign: 'c'
                    ,content: \$('#review-content-individual')
                    ,yes: function(index, layero){
                        layer.close(index);
                        accountReview('";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_account_review");
        echo "',data.id,'";
        echo twig_escape_filter($this->env, twig_constant("App\\Common\\Model\\User\\UsersAccountApplication::REVIEW_REVIEWED_SUCCESS"), "html", null, true);
        echo "',\$('#note').val());
                    }
                    ,btn2: function(index, layero){
                        accountReview('";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_account_review");
        echo "',data.id,'";
        echo twig_escape_filter($this->env, twig_constant("App\\Common\\Model\\User\\UsersAccountApplication::REVIEW_REVIEWED_FAIL"), "html", null, true);
        echo "',\$('#note').val());
                    }
                    ,btn3: function(index, layero){
                        \$('#review-content-individual').hide();
                    }
                    ,cancel: function(){
                        \$('#review-content-individual').hide();
                    }
                });
            } else {
                \$('#business_name').text(data.business_name);
                \$('#user_type').text(types[data.type]);
                \$('#business_license_no').text(data.business_license_no);
                \$('#province_city_district').text(data.province_code ? provinces[data.province_code] : '' + '' + data.city_code ? citys[data.city_code] : '' + '' + data.area_name);
                \$('#business_address').text(data.business_address);
                \$('#legal_person_name').text(data.legal_person_name);
                \$('#identity_card_no').text(data.identity_card_no);
                layer.open({
                    type: 1
                    ,title: '开户申请审核'
                    ,area: ['730px','550px']
                    ,btn: ['审核通过', '审核不通过', '返回']
                    ,btnAlign: 'c'
                    ,content: \$('#review-content-bussniss')
                    ,yes: function(index, layero){
                        layer.close(index);
                        accountReview('";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_account_review");
        echo "',data.id,'";
        echo twig_escape_filter($this->env, twig_constant("App\\Common\\Model\\User\\UsersAccountApplication::REVIEW_REVIEWED_SUCCESS"), "html", null, true);
        echo "',\$('#bussniss_note').val());
                    }
                    ,btn2: function(index, layero){
                        accountReview('";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_account_review");
        echo "',data.id,'";
        echo twig_escape_filter($this->env, twig_constant("App\\Common\\Model\\User\\UsersAccountApplication::REVIEW_REVIEWED_FAIL"), "html", null, true);
        echo "',\$('#bussniss_note').val());
                    }
                    ,btn3: function(index, layero){
                        \$('#review-content-bussniss').hide();
                    }
                    ,cancel: function(){
                        \$('#review-content-bussniss').hide();
                    }
                });
            }

        }
    });

    /**
     * 开户申请审核
     * @param url           // 请求url
     * @param id            // 项目ID
     * @param status        // 通过或不通过 SUCCESS,FAIL
     * @param note          // 审核说明
     */
    function accountReview(url,id,status,note){

        if (id == '' || typeof id == 'undefined' || id == null || status == '' || typeof status == 'undefined' || status == null) {
            nxwd.showMsg('参数有误');
            return false;
        }

        var loading = null;
        var before = function(){
            loading = layer.load();
        }
        var error = function(){
            layer.close(loading);
            nxwd.showMsg('服务器未响应，请稍后重试');
        }
        var success = function(res){
            layer.close(loading);
            if (res.status) {
                nxwd.showMsg(res.msg,'success');
                location.reload();
            } else {
                nxwd.showMsg(res.msg,'danger');
            }
        }
        nxwd.ajaxRequest(url,'POST',{id:id,status:status,note:note},'json',success,before,error);
    }
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/Admin/Audit/account_application_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 91,  146 => 88,  115 => 62,  107 => 59,  92 => 47,  48 => 6,  44 => 5,  40 => 4,  36 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    var types = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\User\\\\User::TYPES\")|json_encode|raw }}');
    var statuses = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\User\\\\UsersAccountApplication::REVIEW_STATUSES\")|json_encode|raw }}');
    var platform_ids = JSON.parse('{{ constant(\"App\\\\Platform::PLATFORMS\")|json_encode|raw }}');
    var provinces = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Region::PROVINCE_FULL_NAMES\")|json_encode|raw }}');
    var citys = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\Region::CITY_FULL_NAMES\")|json_encode|raw }}');
    var url = \"\";
    var columns = [[
        {\"field\": \"id\", \"title\": \"申请记录编号\", \"width\": 150},
        {
            \"field\": \"platform_id\", \"title\": \"申请用户平台\", \"width\": 150, templet: function (d) {
                return platform_ids[d.platform_id];
            }
        },
        {
            \"field\": \"status\", \"title\": \"审核状态\", \"width\": 150, templet: function (d) {
                return statuses[d.status];
            }
        },
        {\"field\": \"account\", \"title\": \"狐豆名\", \"width\": 150},
        {\"field\": \"pass\", \"title\": \"通行证账号\", \"width\": 150},
        {
            \"field\": \"type\", \"title\": \"通行证类型\", \"width\": 150, templet: function (d) {
                return types[d.type];
            }
        },
        {\"field\": \"referrer_account\", \"title\": \"开户邀请人通行证\", \"width\": 100},
        {\"field\": \"note\", \"title\": \"审核说明\", \"width\": 200},
        {\"field\": \"add_time\", \"title\": \"创建时间\", templet: \"#add_time\"},
        {\"field\": \"eidt_time\", \"title\": \"处理时间\", templet: \"#edit_time\"},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\", \"width\": 100}
    ]];

    function get_data() {
        var params = \$('form#account-application').serialize();
        url = '?' + params;
        rander_table('#account-application-table', url, columns);
    }

    // 初始化
    get_data();
    table.on('tool(account-application-table)', function (obj) { //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
        var data = obj.data; //获得当前行数据
        var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）

        if (layEvent === 'review') { //审核
            if (data.type == '{{ constant(\"App\\\\Common\\\\Model\\\\User\\\\User::TYPE_INDIVIDUAL\") }}') {
                \$('#user_name').text(data.business_name);
                \$('#identity').text(data.business_license_no);
                layer.open({
                    type: 1
                    ,title: '开户申请审核'
                    ,area: ['500px','420px']
                    ,btn: ['审核通过', '审核不通过', '返回']
                    ,btnAlign: 'c'
                    ,content: \$('#review-content-individual')
                    ,yes: function(index, layero){
                        layer.close(index);
                        accountReview('{{ path(\"admin_audit_account_review\") }}',data.id,'{{ constant(\"App\\\\Common\\\\Model\\\\User\\\\UsersAccountApplication::REVIEW_REVIEWED_SUCCESS\") }}',\$('#note').val());
                    }
                    ,btn2: function(index, layero){
                        accountReview('{{ path(\"admin_audit_account_review\") }}',data.id,'{{ constant(\"App\\\\Common\\\\Model\\\\User\\\\UsersAccountApplication::REVIEW_REVIEWED_FAIL\") }}',\$('#note').val());
                    }
                    ,btn3: function(index, layero){
                        \$('#review-content-individual').hide();
                    }
                    ,cancel: function(){
                        \$('#review-content-individual').hide();
                    }
                });
            } else {
                \$('#business_name').text(data.business_name);
                \$('#user_type').text(types[data.type]);
                \$('#business_license_no').text(data.business_license_no);
                \$('#province_city_district').text(data.province_code ? provinces[data.province_code] : '' + '' + data.city_code ? citys[data.city_code] : '' + '' + data.area_name);
                \$('#business_address').text(data.business_address);
                \$('#legal_person_name').text(data.legal_person_name);
                \$('#identity_card_no').text(data.identity_card_no);
                layer.open({
                    type: 1
                    ,title: '开户申请审核'
                    ,area: ['730px','550px']
                    ,btn: ['审核通过', '审核不通过', '返回']
                    ,btnAlign: 'c'
                    ,content: \$('#review-content-bussniss')
                    ,yes: function(index, layero){
                        layer.close(index);
                        accountReview('{{ path(\"admin_audit_account_review\") }}',data.id,'{{ constant(\"App\\\\Common\\\\Model\\\\User\\\\UsersAccountApplication::REVIEW_REVIEWED_SUCCESS\") }}',\$('#bussniss_note').val());
                    }
                    ,btn2: function(index, layero){
                        accountReview('{{ path(\"admin_audit_account_review\") }}',data.id,'{{ constant(\"App\\\\Common\\\\Model\\\\User\\\\UsersAccountApplication::REVIEW_REVIEWED_FAIL\") }}',\$('#bussniss_note').val());
                    }
                    ,btn3: function(index, layero){
                        \$('#review-content-bussniss').hide();
                    }
                    ,cancel: function(){
                        \$('#review-content-bussniss').hide();
                    }
                });
            }

        }
    });

    /**
     * 开户申请审核
     * @param url           // 请求url
     * @param id            // 项目ID
     * @param status        // 通过或不通过 SUCCESS,FAIL
     * @param note          // 审核说明
     */
    function accountReview(url,id,status,note){

        if (id == '' || typeof id == 'undefined' || id == null || status == '' || typeof status == 'undefined' || status == null) {
            nxwd.showMsg('参数有误');
            return false;
        }

        var loading = null;
        var before = function(){
            loading = layer.load();
        }
        var error = function(){
            layer.close(loading);
            nxwd.showMsg('服务器未响应，请稍后重试');
        }
        var success = function(res){
            layer.close(loading);
            if (res.status) {
                nxwd.showMsg(res.msg,'success');
                location.reload();
            } else {
                nxwd.showMsg(res.msg,'danger');
            }
        }
        nxwd.ajaxRequest(url,'POST',{id:id,status:status,note:note},'json',success,before,error);
    }
</script>
", "/Admin/Audit/account_application_js.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\Audit\\account_application_js.twig");
    }
}
