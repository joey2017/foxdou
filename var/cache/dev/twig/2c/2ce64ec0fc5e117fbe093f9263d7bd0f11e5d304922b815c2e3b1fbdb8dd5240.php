<?php

/* Open/Frontpage/index.twig */
class __TwigTemplate_751585caa4b084ddb3cce1041df3eb3f78ee26ffc28b987fa64dcd62bf0f40a7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Open/Common/layout_public.twig", "Open/Frontpage/index.twig", 1);
        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Open/Common/layout_public.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Open/Frontpage/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Open/Frontpage/index.twig"));

        // line 2
        $context["title"] = "狐豆云数据-服务市场";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 5
        echo "  <div id=\"slide\" class=\"fullSlide\">
    <div class=\"bd\">
      <ul>
        <li _src=\"url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/js/slideBanner/images/1.jpg)\"
            style=\"background:#242627 center 0 no-repeat;\"><a href=\"<?=Url::to(['goods/index/2'])?>\"></a></li>
        <li _src=\"url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/js/slideBanner/images/2.jpg)\"
            style=\"background:#242627 center 0 no-repeat;\"><a href=\"<?=Url::to(['goods/index/13'])?>\"></a></li>
        <li _src=\"url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/js/slideBanner/images/3.jpg)\"
            style=\"background:#242627 center 0 no-repeat;\"><a href=\"<?=Url::to(['goods/index/11'])?>\"></a></li>
      </ul>
    </div>
    <div class=\"hd\">
      <ul></ul>
    </div>
    <span class=\"prev\"></span>
    <span class=\"next\"></span>
  </div>

  <div class=\"g-content\">
    <!-- 搜索 -->
    <div class=\"search\">
      <div class=\"search-location\">
        <form action=\"/goods/list\", method=\"get\" id=\"form-search\">
          <div class=\"search-group\">
            <a href=\"javascript:void(0)\" onclick=\"formSubmit()\"><i class=\"icon iconfont icon-sousuo\"></i></a>
            <input type=\"text\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 30, $this->source); })()), "request", array()), "get", array(0 => "keywords"), "method"), "html", null, true);
        echo "\" name=\"keywords\"
                   placeholder=\"请输入关键字搜索您需要的服务\"/>
          </div>
        </form>
      </div>
    </div>
    <!-- 最适合您的数据接口 -->
    <div class=\"g-main\">
      <div class=\"plate-title\">
        <span style=\"background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/css/img/zhuangshi-left.png) no-repeat;\"></span>
        <h2>最适合您的数据接口</h2>
        <span style=\"background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/css/img/zhuangshi-right.png) no-repeat;\"></span>
      </div>
      <div class=\"plate-content clearfloat\">
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new Twig_Error_Runtime('Variable "services" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 45
            echo "          <div class=\"appitem-group\">
            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("open_service_mall_service_details", array("id" => twig_get_attribute($this->env, $this->source, $context["service"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\">
              <div class=\"appitem-main\">
                ";
            // line 49
            echo "                <img src=\"\"/>
                <h2>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "name", array()), "html", null, true);
            echo "</h2>
                <p><";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "intro", array()), "html", null, true);
            echo "</p>
                <span><";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "yinxiao_price", array()), "html", null, true);
            echo "</span>
              </div>
              <div class=\"appitem-link\"><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("open_service_mall_service_details", array("id" => twig_get_attribute($this->env, $this->source, $context["service"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\">立即申请</a></div>
            </a>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "      </div>
    </div>


    <div class=\"cooperation\">
      <div class=\"cooperation-location\">
        <div class=\"plate-title\">
          <span style=\"background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/css/img/zhuangshi-left.png) no-repeat;\"></span>
          <h2>合作流程</h2>
          <span style=\"background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/css/img/zhuangshi-right.png) no-repeat;\"></span>
        </div>
        <div class=\"cooperation-main\">
          <div class=\"cooperation-bubble cm-col1\">
            <div class=\"bubble\">
              <div class=\"arrow\"></div>
              <div class=\"cm-text\">
                <em>1</em>
                <h1>免费注册</h1>
                <p>进入狐豆官网，<a href=\"https://register.foxdou.com\" target=\"_blank\">点击注册>>></a></p>
              </div>
            </div>
          </div>
          <div class=\"cooperation-bubble cm-col2\">
            <div class=\"bubble\">
              <div class=\"arrow\"></div>
              <div class=\"cm-text\">
                <em>2</em>
                <h1>申请服务</h1>
                <p>选择适合您的服务，创建应用</p>
              </div>
            </div>
          </div>
          <div class=\"cooperation-bubble cm-col3\">
            <div class=\"bubble\">
              <div class=\"arrow\"></div>
              <div class=\"cm-text\">
                <em>3</em>
                <h1>上线运营</h1>
                <p>接口对接完成，上线运营</p>
              </div>
            </div>
          </div>
          <ul class=\"cooperation-axis\">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li ></li>
            <li></li>
          </ul>
        </div>
      </div>
    </div>



    <div class=\"new\">
      <div class=\"new-location\">
        <div class=\"plate-title\">
          <span style=\"background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/css/img/zhuangshi-left.png) no-repeat;\"></span>
          <h2>最新动态</h2>
          <span style=\"background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/css/img/zhuangshi-right.png) no-repeat;\"></span>
        </div>
        <div class=\"new-main clearfloat\">

        </div>
        <pre class=\"new-more\"><a href=\"<?= Url::to(['recent/index']) ?>\">MORE →</a></pre>
      </div>
    </div>
  </div>


  ";
        // line 131
        $this->loadTemplate("/Open/Common/loginDialog.twig", "Open/Frontpage/index.twig", 131)->display($context);
        // line 132
        echo "  ";
        $this->loadTemplate("/Open/Common/footer.twig", "Open/Frontpage/index.twig", 132)->display($context);
        // line 133
        echo "  ";
        $this->loadTemplate("/Open/Common/contactIM.twig", "Open/Frontpage/index.twig", 133)->display($context);
        // line 134
        echo "

  <script type=\"text/javascript\">


    /*
     * 首页轮播图
     */
    \$(\".fullSlide\").hover(function () {
            \$(this).find(\".prev,.next\").stop(true, true).fadeTo(\"show\", 0.5)
        },
        function () {
            \$(this).find(\".prev,.next\").fadeOut()
        });
    \$(\".fullSlide\").slide({
        titCell: \".hd ul\",
        mainCell: \".bd ul\",
        effect: \"fold\",
        autoPlay: true,
        autoPage: true,
        trigger: \"click\",
        startFun: function (i) {
            var curLi = jQuery(\".fullSlide .bd li\").eq(i);
            if (!!curLi.attr(\"_src\")) {
                curLi.css(\"background-image\", curLi.attr(\"_src\")).removeAttr(\"_src\")
            }
        }
    });

    /*
     * 数据接口鼠标经过效果
     */
    \$('.appitem-group').mouseenter(function () {
        \$(this).addClass('hover-api');
    });
    \$('.appitem-group').mouseleave(function () {
        \$(this).removeClass('hover-api');
    });


    \$('.programme-group p').hide();
    \$('.programme-group a').hide();
    \$('.programme-mask').hide();
    \$('.programme-group').mouseenter(function () {
        \$(this).find('.programme-mask').slideToggle();
        \$(this).find('.programme-main .icon').css('line-height', '10px');
        \$(this).find('span').hide();
        \$(this).find('p').slideToggle();
        \$(this).find('a').slideToggle();
    });
    \$('.programme-group').mouseleave(function () {
        \$(this).find('.programme-mask').slideToggle();
        \$(this).find('.programme-main .icon').css('line-height', '50px');
        \$(this).find('span').show();
        \$(this).find('p').slideToggle();
        \$(this).find('a').slideToggle();
    });
    /*
     *搜索的小图标，按下就提交表单
     */
    function formSubmit() {
        \$(\"#form-search\").submit();
    }


  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Open/Frontpage/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 134,  218 => 133,  215 => 132,  213 => 131,  138 => 58,  128 => 54,  123 => 52,  119 => 51,  115 => 50,  112 => 49,  107 => 46,  104 => 45,  100 => 44,  83 => 30,  56 => 5,  47 => 4,  37 => 1,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Open/Common/layout_public.twig' %}
{% set title = '狐豆云数据-服务市场' %}

{% block main_content %}
  <div id=\"slide\" class=\"fullSlide\">
    <div class=\"bd\">
      <ul>
        <li _src=\"url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/js/slideBanner/images/1.jpg)\"
            style=\"background:#242627 center 0 no-repeat;\"><a href=\"<?=Url::to(['goods/index/2'])?>\"></a></li>
        <li _src=\"url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/js/slideBanner/images/2.jpg)\"
            style=\"background:#242627 center 0 no-repeat;\"><a href=\"<?=Url::to(['goods/index/13'])?>\"></a></li>
        <li _src=\"url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/js/slideBanner/images/3.jpg)\"
            style=\"background:#242627 center 0 no-repeat;\"><a href=\"<?=Url::to(['goods/index/11'])?>\"></a></li>
      </ul>
    </div>
    <div class=\"hd\">
      <ul></ul>
    </div>
    <span class=\"prev\"></span>
    <span class=\"next\"></span>
  </div>

  <div class=\"g-content\">
    <!-- 搜索 -->
    <div class=\"search\">
      <div class=\"search-location\">
        <form action=\"/goods/list\", method=\"get\" id=\"form-search\">
          <div class=\"search-group\">
            <a href=\"javascript:void(0)\" onclick=\"formSubmit()\"><i class=\"icon iconfont icon-sousuo\"></i></a>
            <input type=\"text\" value=\"{{ app.request.get('keywords') }}\" name=\"keywords\"
                   placeholder=\"请输入关键字搜索您需要的服务\"/>
          </div>
        </form>
      </div>
    </div>
    <!-- 最适合您的数据接口 -->
    <div class=\"g-main\">
      <div class=\"plate-title\">
        <span style=\"background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/css/img/zhuangshi-left.png) no-repeat;\"></span>
        <h2>最适合您的数据接口</h2>
        <span style=\"background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/css/img/zhuangshi-right.png) no-repeat;\"></span>
      </div>
      <div class=\"plate-content clearfloat\">
        {% for service in services %}
          <div class=\"appitem-group\">
            <a href=\"{{ path('open_service_mall_service_details', {'id': service.id}) }}\" target=\"_blank\">
              <div class=\"appitem-main\">
                {#<img src=\"<?=\\common\\models\\servicemall\\ImgUploadCheck::getServiceUploadParams(\$v['id'],'thumb')['fullUrl']?>\" onerror=\"this.src='/img/service-goods-default.png'\"/>#}
                <img src=\"\"/>
                <h2>{{ service.name }}</h2>
                <p><{{ service.intro }}</p>
                <span><{{ service.yinxiao_price }}</span>
              </div>
              <div class=\"appitem-link\"><a href=\"{{ path('open_service_mall_service_details', {'id': service.id}) }}\" target=\"_blank\">立即申请</a></div>
            </a>
          </div>
        {% endfor %}
      </div>
    </div>


    <div class=\"cooperation\">
      <div class=\"cooperation-location\">
        <div class=\"plate-title\">
          <span style=\"background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/css/img/zhuangshi-left.png) no-repeat;\"></span>
          <h2>合作流程</h2>
          <span style=\"background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/css/img/zhuangshi-right.png) no-repeat;\"></span>
        </div>
        <div class=\"cooperation-main\">
          <div class=\"cooperation-bubble cm-col1\">
            <div class=\"bubble\">
              <div class=\"arrow\"></div>
              <div class=\"cm-text\">
                <em>1</em>
                <h1>免费注册</h1>
                <p>进入狐豆官网，<a href=\"https://register.foxdou.com\" target=\"_blank\">点击注册>>></a></p>
              </div>
            </div>
          </div>
          <div class=\"cooperation-bubble cm-col2\">
            <div class=\"bubble\">
              <div class=\"arrow\"></div>
              <div class=\"cm-text\">
                <em>2</em>
                <h1>申请服务</h1>
                <p>选择适合您的服务，创建应用</p>
              </div>
            </div>
          </div>
          <div class=\"cooperation-bubble cm-col3\">
            <div class=\"bubble\">
              <div class=\"arrow\"></div>
              <div class=\"cm-text\">
                <em>3</em>
                <h1>上线运营</h1>
                <p>接口对接完成，上线运营</p>
              </div>
            </div>
          </div>
          <ul class=\"cooperation-axis\">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li ></li>
            <li></li>
          </ul>
        </div>
      </div>
    </div>



    <div class=\"new\">
      <div class=\"new-location\">
        <div class=\"plate-title\">
          <span style=\"background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/css/img/zhuangshi-left.png) no-repeat;\"></span>
          <h2>最新动态</h2>
          <span style=\"background: url(//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/servicemall/css/img/zhuangshi-right.png) no-repeat;\"></span>
        </div>
        <div class=\"new-main clearfloat\">

        </div>
        <pre class=\"new-more\"><a href=\"<?= Url::to(['recent/index']) ?>\">MORE →</a></pre>
      </div>
    </div>
  </div>


  {% include \"/Open/Common/loginDialog.twig\" %}
  {% include \"/Open/Common/footer.twig\" %}
  {% include \"/Open/Common/contactIM.twig\" %}


  <script type=\"text/javascript\">


    /*
     * 首页轮播图
     */
    \$(\".fullSlide\").hover(function () {
            \$(this).find(\".prev,.next\").stop(true, true).fadeTo(\"show\", 0.5)
        },
        function () {
            \$(this).find(\".prev,.next\").fadeOut()
        });
    \$(\".fullSlide\").slide({
        titCell: \".hd ul\",
        mainCell: \".bd ul\",
        effect: \"fold\",
        autoPlay: true,
        autoPage: true,
        trigger: \"click\",
        startFun: function (i) {
            var curLi = jQuery(\".fullSlide .bd li\").eq(i);
            if (!!curLi.attr(\"_src\")) {
                curLi.css(\"background-image\", curLi.attr(\"_src\")).removeAttr(\"_src\")
            }
        }
    });

    /*
     * 数据接口鼠标经过效果
     */
    \$('.appitem-group').mouseenter(function () {
        \$(this).addClass('hover-api');
    });
    \$('.appitem-group').mouseleave(function () {
        \$(this).removeClass('hover-api');
    });


    \$('.programme-group p').hide();
    \$('.programme-group a').hide();
    \$('.programme-mask').hide();
    \$('.programme-group').mouseenter(function () {
        \$(this).find('.programme-mask').slideToggle();
        \$(this).find('.programme-main .icon').css('line-height', '10px');
        \$(this).find('span').hide();
        \$(this).find('p').slideToggle();
        \$(this).find('a').slideToggle();
    });
    \$('.programme-group').mouseleave(function () {
        \$(this).find('.programme-mask').slideToggle();
        \$(this).find('.programme-main .icon').css('line-height', '50px');
        \$(this).find('span').show();
        \$(this).find('p').slideToggle();
        \$(this).find('a').slideToggle();
    });
    /*
     *搜索的小图标，按下就提交表单
     */
    function formSubmit() {
        \$(\"#form-search\").submit();
    }


  </script>
{% endblock %}
", "Open/Frontpage/index.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Open\\Frontpage\\index.twig");
    }
}
