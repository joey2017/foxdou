<?php

/* Admin/Dashboard/system_info.twig */
class __TwigTemplate_429aca0bdd0bd27f2fcb3a024a538d3f322d4d068781348ffa4dc5536f49efca extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Dashboard/system_info.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Dashboard/system_info.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>狐豆后台管理</title>
  <link rel=\"shortcut icon\" href=\"favicon.ico\">
  <link href=\"/assets/admin/h/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"/assets/admin/h/css/font-awesome.min93e3.css?v=4.4.0\" rel=\"stylesheet\">
  <!-- Morris -->
  <link href=\"/assets/admin/h/css/plugins/morris/morris-0.4.3.min.css\" rel=\"stylesheet\">
  <!-- Gritter -->
  <link src=\"/assets/admin/h/js/plugins/gritter/jquery.gritter.css\" rel=\"stylesheet\">
  <link href=\"https://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"/assets/admin/h/css/style.min.css?v=4.1.0\" rel=\"stylesheet\">
  <script src=\"/assets/admin/js/echarts.min.js\"></script>
</head>

<body class=\"gray-bg\">
<div class=\"wrapper wrapper-content\">
  <div class=\"ibox float-e-margins\">
    <div class=\"ibox-title\">
      <h5>今日系统运行</h5>
      <div class=\"ibox-tools\">
        <span class=\"label label-warning-light\"></span>
      </div>
    </div>
    <div class=\"ibox-content\">

      <div class=\"row\">
        <div class=\"col-sm-4\">
          <div class=\"ibox float-e-margins\">
            <div class=\"ibox-title\">
              <h5>系统错误</h5>
              <div class=\"ibox-tools\">
                <span class=\"label label-warning-light\"></span>
              </div>
            </div>
            <div class=\"ibox-content\">
              <p>系统请求错误记录：<a href=\"/\" target=\"_top\" class=\"btn btn-warning\">99999(待完成)</a></p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-4\">
          <div class=\"ibox float-e-margins\">
            <div class=\"ibox-title\">
              <h5>服务器系统运行-磁盘 (细节待完成) </h5>
            </div>
            <div class=\"ibox-tools\">
              <a class=\"collapse-link ui-sortable\" title=\"详情..\" href=\"<?=Url::to(['/system','right_url'=>Url::to(['/system/web-admin/pointer'])])?>\">
              </a>
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"index.html#\">
                <i class=\"fa fa-wrench\"></i>
              </a>
            </div>
            <div class=\"ibox-content\">
              ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["disk_usage"]) || array_key_exists("disk_usage", $context) ? $context["disk_usage"] : (function () { throw new Twig_Error_Runtime('Variable "disk_usage" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["disk"] => $context["info"]) {
            // line 58
            echo "                ";
            $context["id"] = $context["disk"];
            // line 59
            echo "                磁盘 ";
            echo twig_escape_filter($this->env, $context["disk"], "html", null, true);
            echo ":<span id='system-df-total-{\$id}'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["info"], "total", array()), "html", null, true);
            echo "</span>&nbsp;<span id='system-df-total-unit'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["info"], "unit", array()), "html", null, true);
            echo "</span>&nbsp;&nbsp;
                <a href=\\\"#\\\" title=\\\"磁盘current显示的是网站所在的目录的可用空间，非服务器上所有磁盘之可用空间！\\\">可用空间: </a>
                <span id='system-df-free-";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 61, $this->source); })()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["info"], "free", array()), "html", null, true);
            echo "</span>&nbsp;<span id='system-df-free-unit'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["info"], "unit", array()), "html", null, true);
            echo "</span> 已使用：
                <span id='system-df-used-";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 62, $this->source); })()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["info"], "used", array()), "html", null, true);
            echo "</span> <span id='system-df-used-unit'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["info"], "unit", array()), "html", null, true);
            echo "</span>\";
                <div class=\"progress progress-striped\">
                  <div class=\"progress-bar progress-bar-info\" aria-color=\"210\" role=\"progressbar\" aria-valuenow=\"17.982\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:17.98%;background-color: rgb(45,209,80)\">
                    17.98%
                  </div>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['disk'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "            </div>
          </div>
          <div class=\"ibox float-e-margins\">
            <div class=\"ibox-title\">
              <h5>服务器系统运行-CPU</h5>
            </div>
            <div class=\"ibox-content\">
              <?=\\admin\\widgets\\SystemCpuInfo::widget([
                        'cpuBarOption'=>[
              'aria-color'=>210,
              ],
              ])?>
            </div>
          </div>
        </div>
        <div class=\"col-sm-4\">
          <div class=\"ibox float-e-margins\">
            <div class=\"ibox-title\">
              <h5>服务器系统运行-内存</h5>
            </div>
            <div class=\"ibox-content\">
              <?=\\admin\\widgets\\SystemMemInfo::widget([
                        'memBarOption'=>[
              'aria-color'=>210,
              ],
              ])?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src=\"/assets/admin/h/js/jquery.min.js\"></script>
<script src=\"/assets/admin/h/js/bootstrap.min.js\"></script>
<script>

    getSystemData();
    function getSystemData()
    {
        setTimeout(\"getSystemData()\", 1000);
        \$.getJSON('?act=rt&sdfsafds=asdfas',{}, displayData);
    }
    function displayData(dataJSON)
    {

        \$.each(dataJSON.df,function (k,v) {
            var replace=k.replace(/\\//g,'_');
            \$(\"#system-df-total-\"+replace).html(v.total);
            \$(\"#system-df-free-\"+replace).html(v.free);
            \$(\"#system-df-used-\"+replace).html(v.used);
        });


        var dfdom=\$('#system-df').find('.progress-bar');
        var dfcolor=dfdom.attr('aria-color');
        dfdom.text(dataJSON.df.dfPercent+'%');
        dfdom.attr('aria-valuenow',dataJSON.df.dfUsed);
        dfdom.attr('aria-valuemax',dataJSON.df.dtTotal);
        dfdom.css('width',dataJSON.df.dfPercent+'%');
        dfdom.css('background-color',coloMode(dfcolor,dataJSON.df.dfPercent));

        \$(\"#system-mem-total\").html(dataJSON.MemTotal);
        \$(\"#system-mem-free\").html(dataJSON.MemFree);
        \$('#system-mem-real-available').html(dataJSON.MemAvailable);
        \$('#system-mem-real-used').html(dataJSON.MemRealUsed);
        \$(\"#system-mem-available\").html(dataJSON.MemAvailable);
        \$(\"#system-swap-total\").html(dataJSON.SwapTotal);
        \$(\"#system-swap-free\").html(dataJSON.SwapFree);
        \$(\"#system-swap-used\").html(dataJSON.SwapUsed);
        \$(\"#system-cached-used\").html(dataJSON.Cached);
        \$(\"#system-buffers\").html(dataJSON.Buffers);
        \$(\"#system-vmem-total\").html(dataJSON.VmallocTotal);
        \$(\"#system-vmem-used\").html(dataJSON.VmallocUsed);

        \$(\"#system-mem-total-unit\").html(dataJSON.MemTotal_unit);
        \$(\"#system-mem-free-unit\").html(dataJSON.MemFree_unit);
        \$('#system-mem-real-available-unit').html(dataJSON.MemAvailable_unit);
        \$('#system-mem-real-used-unit').html(dataJSON.MemRealUsed_unit);
        \$(\"#system-mem-available-unit\").html(dataJSON.MemAvailable_unit);
        \$(\"#system-swap-total-unit\").html(dataJSON.SwapTotal_unit);
        \$(\"#system-swap-free-unit\").html(dataJSON.SwapFree_unit);
        \$(\"#system-swap-used-unit\").html(dataJSON.SwapUsed_unit);
        \$(\"#system-cached-used-unit\").html(dataJSON.Cached_unit);
        \$(\"#system-buffers-unit\").html(dataJSON.Buffers_unit);
        \$(\"#system-vmem-total-unit\").html(dataJSON.VmallocTotal_unit);
        \$(\"#system-vmem-used-unit\").html(dataJSON.VmallocUsed_unit);


        var memdom=\$('#system-mem').find('.progress-bar');
        var memcolor=memdom.attr('aria-color');
        memdom.text(dataJSON.MemPercent+'%');
        memdom.attr('aria-valuenow',dataJSON.MemUsed);
        memdom.attr('aria-valuemax',dataJSON.MemTotal);
        memdom.css('width',dataJSON.MemPercent+'%');
        memdom.css('background-color',coloMode(memcolor,dataJSON.MemPercent));

        var memrealdom=\$('#system-mem-real').find('.progress-bar');
        var memrealcolor=memrealdom.attr('aria-color');
        memrealdom.text(dataJSON.MemRealPercent+'%');
        memrealdom.attr('aria-valuenow',dataJSON.MemRealUsed);
        memrealdom.attr('aria-valuemax',dataJSON.MemTotal);
        memrealdom.css('width',dataJSON.MemRealPercent+'%');
        memrealdom.css('background-color',coloMode(memrealcolor,dataJSON.MemRealPercent));


        var swapdom=\$('#system-swap').find('.progress-bar');
        var swapcolor=swapdom.attr('aria-color');
        swapdom.text(dataJSON.SwapPercent+'%');
        swapdom.attr('aria-valuenow',dataJSON.SwapUsed);
        swapdom.attr('aria-valuemax',dataJSON.SwapTotal);
        swapdom.css('width',dataJSON.SwapPercent+'%');
        swapdom.css('background-color',coloMode(swapcolor,dataJSON.SwapPercent));

        var cachedom=\$('#system-cached').find('.progress-bar');
        var cachecolor=cachedom.attr('aria-color');
        cachedom.text(dataJSON.CachedPercent+'%');
        cachedom.attr('aria-valuenow',dataJSON.Cached);
        cachedom.attr('aria-valuemax',dataJSON.MemTotal);
        cachedom.css('width',dataJSON.CachedPercent+'%');
        cachedom.css('background-color',coloMode(cachecolor,dataJSON.CachedPercent));

        var vmemdom=\$('#system-vmem').find('.progress-bar');
        var vmemcolor=vmemdom.attr('aria-color');
        vmemdom.text(dataJSON.VmallocPercent+'%');
        vmemdom.attr('aria-valuenow',dataJSON.VmallocUsed);
        vmemdom.attr('aria-valuemax',dataJSON.VmallocTotal);
        vmemdom.css('width',dataJSON.VmallocPercent+'%');
        vmemdom.css('background-color',coloMode(swapcolor,dataJSON.VmallocPercent));

        \$(\"#system-cpu-processes\").html(dataJSON.processes);
        \$(\"#system-cpu-procs_running\").html(dataJSON.procs_running);
        \$(\"#system-cpu-procs_blocked\").html(dataJSON.procs_blocked);

        if(typeof dataJSON.cpu=='object'){
            \$.each(dataJSON.cpu,function (k,v) {
                \$(\"#system-cpu-sys-\"+v).html(dataJSON[v].sys);
                \$(\"#system-cpu-nice-\"+v).html(dataJSON[v].nice);
                \$(\"#system-cpu-idle-\"+v).html(dataJSON[v].idle);
                \$(\"#system-cpu-iowait-\"+v).html(dataJSON[v].iowait);
                \$(\"#system-cpu-irq-\"+v).html(dataJSON[v].irq);
                \$(\"#system-cpu-softirq-\"+v).html(dataJSON[v].softirq);
                var cpudom=\$('#system-cpu-'+v).find('.progress-bar');
                var cpudomcolor=cpudom.attr('aria-color');
                cpudom.text(dataJSON[v].sys+'%');
                cpudom.attr('aria-valuenow',dataJSON[v].sys);
                cpudom.attr('aria-valuemax',100);
                cpudom.css('width',dataJSON[v].sys+'%');
                cpudom.css('background-color',coloMode(cpudomcolor,dataJSON[v].sys));
            });
        }
    }


    function coloMode(colormode,percent) {
        percent=parseInt(percent);
        var r,g,b,rgb;
        r=parseInt(255*percent/100);
        g=parseInt(255-255*percent/100);
        b=80;
        switch (colormode){
            case '210':       //由绿变红(0,255,80) -> (255,0,80)
                rgb= '('+r+','+g+','+b+')';
                break;
            case '120':        //由红变绿(0+','+255+','+80) -> (255+','+0+','+80)
                rgb=  '('+g+','+r+','+b+')';
                break;
            case '201':       //由蓝变红(0+','+80+','+255) -> (255+','+80+','+0)
                rgb=  '('+r+','+b+','+g+')';
                break;
            case '102':       //由红变蓝(255+','+80+','+0) -> (0+','+80+','+255)
                rgb=  '('+g+','+b+','+r+')';
                break;
            case '021':        //由蓝变绿(80+','+0+','+255) -> (80+','+255+','+0)
                rgb=  '('+b+','+r+','+g+')';
                break;
            case '012':        //由绿变蓝(80+','+255+','+0) -> (80+','+0+','+255)
                rgb=  '('+b+','+g+','+r+')';
                break;
            default:        //由绿变红(0+','+255+','+80) -> (255+','+0+','+80)
                rgb=  '('+r+','+g+','+b+')';
                break;
        }
        return rgb;
    }

</script>
<script type=\"text/javascript\" src=\"http://tajs.qq.com/stats?sId=9051096\" charset=\"UTF-8\"></script>
</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Dashboard/system_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 69,  112 => 62,  104 => 61,  94 => 59,  91 => 58,  87 => 57,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>狐豆后台管理</title>
  <link rel=\"shortcut icon\" href=\"favicon.ico\">
  <link href=\"/assets/admin/h/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"/assets/admin/h/css/font-awesome.min93e3.css?v=4.4.0\" rel=\"stylesheet\">
  <!-- Morris -->
  <link href=\"/assets/admin/h/css/plugins/morris/morris-0.4.3.min.css\" rel=\"stylesheet\">
  <!-- Gritter -->
  <link src=\"/assets/admin/h/js/plugins/gritter/jquery.gritter.css\" rel=\"stylesheet\">
  <link href=\"https://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"/assets/admin/h/css/style.min.css?v=4.1.0\" rel=\"stylesheet\">
  <script src=\"/assets/admin/js/echarts.min.js\"></script>
</head>

<body class=\"gray-bg\">
<div class=\"wrapper wrapper-content\">
  <div class=\"ibox float-e-margins\">
    <div class=\"ibox-title\">
      <h5>今日系统运行</h5>
      <div class=\"ibox-tools\">
        <span class=\"label label-warning-light\"></span>
      </div>
    </div>
    <div class=\"ibox-content\">

      <div class=\"row\">
        <div class=\"col-sm-4\">
          <div class=\"ibox float-e-margins\">
            <div class=\"ibox-title\">
              <h5>系统错误</h5>
              <div class=\"ibox-tools\">
                <span class=\"label label-warning-light\"></span>
              </div>
            </div>
            <div class=\"ibox-content\">
              <p>系统请求错误记录：<a href=\"/\" target=\"_top\" class=\"btn btn-warning\">99999(待完成)</a></p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-4\">
          <div class=\"ibox float-e-margins\">
            <div class=\"ibox-title\">
              <h5>服务器系统运行-磁盘 (细节待完成) </h5>
            </div>
            <div class=\"ibox-tools\">
              <a class=\"collapse-link ui-sortable\" title=\"详情..\" href=\"<?=Url::to(['/system','right_url'=>Url::to(['/system/web-admin/pointer'])])?>\">
              </a>
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"index.html#\">
                <i class=\"fa fa-wrench\"></i>
              </a>
            </div>
            <div class=\"ibox-content\">
              {% for disk, info in disk_usage %}
                {% set id = disk %}
                磁盘 {{ disk }}:<span id='system-df-total-{\$id}'>{{ info.total }}</span>&nbsp;<span id='system-df-total-unit'>{{ info.unit }}</span>&nbsp;&nbsp;
                <a href=\\\"#\\\" title=\\\"磁盘current显示的是网站所在的目录的可用空间，非服务器上所有磁盘之可用空间！\\\">可用空间: </a>
                <span id='system-df-free-{{ id }}'>{{ info.free }}</span>&nbsp;<span id='system-df-free-unit'>{{ info.unit }}</span> 已使用：
                <span id='system-df-used-{{ id }}'>{{ info.used }}</span> <span id='system-df-used-unit'>{{ info.unit }}</span>\";
                <div class=\"progress progress-striped\">
                  <div class=\"progress-bar progress-bar-info\" aria-color=\"210\" role=\"progressbar\" aria-valuenow=\"17.982\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:17.98%;background-color: rgb(45,209,80)\">
                    17.98%
                  </div>
                </div>
              {% endfor %}
            </div>
          </div>
          <div class=\"ibox float-e-margins\">
            <div class=\"ibox-title\">
              <h5>服务器系统运行-CPU</h5>
            </div>
            <div class=\"ibox-content\">
              <?=\\admin\\widgets\\SystemCpuInfo::widget([
                        'cpuBarOption'=>[
              'aria-color'=>210,
              ],
              ])?>
            </div>
          </div>
        </div>
        <div class=\"col-sm-4\">
          <div class=\"ibox float-e-margins\">
            <div class=\"ibox-title\">
              <h5>服务器系统运行-内存</h5>
            </div>
            <div class=\"ibox-content\">
              <?=\\admin\\widgets\\SystemMemInfo::widget([
                        'memBarOption'=>[
              'aria-color'=>210,
              ],
              ])?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src=\"/assets/admin/h/js/jquery.min.js\"></script>
<script src=\"/assets/admin/h/js/bootstrap.min.js\"></script>
<script>

    getSystemData();
    function getSystemData()
    {
        setTimeout(\"getSystemData()\", 1000);
        \$.getJSON('?act=rt&sdfsafds=asdfas',{}, displayData);
    }
    function displayData(dataJSON)
    {

        \$.each(dataJSON.df,function (k,v) {
            var replace=k.replace(/\\//g,'_');
            \$(\"#system-df-total-\"+replace).html(v.total);
            \$(\"#system-df-free-\"+replace).html(v.free);
            \$(\"#system-df-used-\"+replace).html(v.used);
        });


        var dfdom=\$('#system-df').find('.progress-bar');
        var dfcolor=dfdom.attr('aria-color');
        dfdom.text(dataJSON.df.dfPercent+'%');
        dfdom.attr('aria-valuenow',dataJSON.df.dfUsed);
        dfdom.attr('aria-valuemax',dataJSON.df.dtTotal);
        dfdom.css('width',dataJSON.df.dfPercent+'%');
        dfdom.css('background-color',coloMode(dfcolor,dataJSON.df.dfPercent));

        \$(\"#system-mem-total\").html(dataJSON.MemTotal);
        \$(\"#system-mem-free\").html(dataJSON.MemFree);
        \$('#system-mem-real-available').html(dataJSON.MemAvailable);
        \$('#system-mem-real-used').html(dataJSON.MemRealUsed);
        \$(\"#system-mem-available\").html(dataJSON.MemAvailable);
        \$(\"#system-swap-total\").html(dataJSON.SwapTotal);
        \$(\"#system-swap-free\").html(dataJSON.SwapFree);
        \$(\"#system-swap-used\").html(dataJSON.SwapUsed);
        \$(\"#system-cached-used\").html(dataJSON.Cached);
        \$(\"#system-buffers\").html(dataJSON.Buffers);
        \$(\"#system-vmem-total\").html(dataJSON.VmallocTotal);
        \$(\"#system-vmem-used\").html(dataJSON.VmallocUsed);

        \$(\"#system-mem-total-unit\").html(dataJSON.MemTotal_unit);
        \$(\"#system-mem-free-unit\").html(dataJSON.MemFree_unit);
        \$('#system-mem-real-available-unit').html(dataJSON.MemAvailable_unit);
        \$('#system-mem-real-used-unit').html(dataJSON.MemRealUsed_unit);
        \$(\"#system-mem-available-unit\").html(dataJSON.MemAvailable_unit);
        \$(\"#system-swap-total-unit\").html(dataJSON.SwapTotal_unit);
        \$(\"#system-swap-free-unit\").html(dataJSON.SwapFree_unit);
        \$(\"#system-swap-used-unit\").html(dataJSON.SwapUsed_unit);
        \$(\"#system-cached-used-unit\").html(dataJSON.Cached_unit);
        \$(\"#system-buffers-unit\").html(dataJSON.Buffers_unit);
        \$(\"#system-vmem-total-unit\").html(dataJSON.VmallocTotal_unit);
        \$(\"#system-vmem-used-unit\").html(dataJSON.VmallocUsed_unit);


        var memdom=\$('#system-mem').find('.progress-bar');
        var memcolor=memdom.attr('aria-color');
        memdom.text(dataJSON.MemPercent+'%');
        memdom.attr('aria-valuenow',dataJSON.MemUsed);
        memdom.attr('aria-valuemax',dataJSON.MemTotal);
        memdom.css('width',dataJSON.MemPercent+'%');
        memdom.css('background-color',coloMode(memcolor,dataJSON.MemPercent));

        var memrealdom=\$('#system-mem-real').find('.progress-bar');
        var memrealcolor=memrealdom.attr('aria-color');
        memrealdom.text(dataJSON.MemRealPercent+'%');
        memrealdom.attr('aria-valuenow',dataJSON.MemRealUsed);
        memrealdom.attr('aria-valuemax',dataJSON.MemTotal);
        memrealdom.css('width',dataJSON.MemRealPercent+'%');
        memrealdom.css('background-color',coloMode(memrealcolor,dataJSON.MemRealPercent));


        var swapdom=\$('#system-swap').find('.progress-bar');
        var swapcolor=swapdom.attr('aria-color');
        swapdom.text(dataJSON.SwapPercent+'%');
        swapdom.attr('aria-valuenow',dataJSON.SwapUsed);
        swapdom.attr('aria-valuemax',dataJSON.SwapTotal);
        swapdom.css('width',dataJSON.SwapPercent+'%');
        swapdom.css('background-color',coloMode(swapcolor,dataJSON.SwapPercent));

        var cachedom=\$('#system-cached').find('.progress-bar');
        var cachecolor=cachedom.attr('aria-color');
        cachedom.text(dataJSON.CachedPercent+'%');
        cachedom.attr('aria-valuenow',dataJSON.Cached);
        cachedom.attr('aria-valuemax',dataJSON.MemTotal);
        cachedom.css('width',dataJSON.CachedPercent+'%');
        cachedom.css('background-color',coloMode(cachecolor,dataJSON.CachedPercent));

        var vmemdom=\$('#system-vmem').find('.progress-bar');
        var vmemcolor=vmemdom.attr('aria-color');
        vmemdom.text(dataJSON.VmallocPercent+'%');
        vmemdom.attr('aria-valuenow',dataJSON.VmallocUsed);
        vmemdom.attr('aria-valuemax',dataJSON.VmallocTotal);
        vmemdom.css('width',dataJSON.VmallocPercent+'%');
        vmemdom.css('background-color',coloMode(swapcolor,dataJSON.VmallocPercent));

        \$(\"#system-cpu-processes\").html(dataJSON.processes);
        \$(\"#system-cpu-procs_running\").html(dataJSON.procs_running);
        \$(\"#system-cpu-procs_blocked\").html(dataJSON.procs_blocked);

        if(typeof dataJSON.cpu=='object'){
            \$.each(dataJSON.cpu,function (k,v) {
                \$(\"#system-cpu-sys-\"+v).html(dataJSON[v].sys);
                \$(\"#system-cpu-nice-\"+v).html(dataJSON[v].nice);
                \$(\"#system-cpu-idle-\"+v).html(dataJSON[v].idle);
                \$(\"#system-cpu-iowait-\"+v).html(dataJSON[v].iowait);
                \$(\"#system-cpu-irq-\"+v).html(dataJSON[v].irq);
                \$(\"#system-cpu-softirq-\"+v).html(dataJSON[v].softirq);
                var cpudom=\$('#system-cpu-'+v).find('.progress-bar');
                var cpudomcolor=cpudom.attr('aria-color');
                cpudom.text(dataJSON[v].sys+'%');
                cpudom.attr('aria-valuenow',dataJSON[v].sys);
                cpudom.attr('aria-valuemax',100);
                cpudom.css('width',dataJSON[v].sys+'%');
                cpudom.css('background-color',coloMode(cpudomcolor,dataJSON[v].sys));
            });
        }
    }


    function coloMode(colormode,percent) {
        percent=parseInt(percent);
        var r,g,b,rgb;
        r=parseInt(255*percent/100);
        g=parseInt(255-255*percent/100);
        b=80;
        switch (colormode){
            case '210':       //由绿变红(0,255,80) -> (255,0,80)
                rgb= '('+r+','+g+','+b+')';
                break;
            case '120':        //由红变绿(0+','+255+','+80) -> (255+','+0+','+80)
                rgb=  '('+g+','+r+','+b+')';
                break;
            case '201':       //由蓝变红(0+','+80+','+255) -> (255+','+80+','+0)
                rgb=  '('+r+','+b+','+g+')';
                break;
            case '102':       //由红变蓝(255+','+80+','+0) -> (0+','+80+','+255)
                rgb=  '('+g+','+b+','+r+')';
                break;
            case '021':        //由蓝变绿(80+','+0+','+255) -> (80+','+255+','+0)
                rgb=  '('+b+','+r+','+g+')';
                break;
            case '012':        //由绿变蓝(80+','+255+','+0) -> (80+','+0+','+255)
                rgb=  '('+b+','+g+','+r+')';
                break;
            default:        //由绿变红(0+','+255+','+80) -> (255+','+0+','+80)
                rgb=  '('+r+','+g+','+b+')';
                break;
        }
        return rgb;
    }

</script>
<script type=\"text/javascript\" src=\"http://tajs.qq.com/stats?sId=9051096\" charset=\"UTF-8\"></script>
</body>
</html>

", "Admin/Dashboard/system_info.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\Dashboard\\system_info.twig");
    }
}
