<?php
namespace App\Open\Twig;

use App\Open\Model\ServiceCategory;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class NavExtension extends AbstractExtension
{
    private $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('get_service_mall_nav_menus', [$this, 'getNavMenus']),
        ];
    }

    public function getNavMenus(): array
    {
        $cates = ServiceCategory::all();

        $nav = [
            ['id' => 'default', 'name' => '服务市场', 'url' => '/open/'],
            ['id' => 'interface', 'name' => '接口产品', 'url' => '/open/interface/'],
            // ['id' => 'marketing', 'name' => '营销方案', 'url' => 'marketing/'],
            // ['id' => 'tool', 'name' => '开发者服务', 'url' => 'tool/'],
            // ['id' => 'recent', 'name' => '最新动态', 'url' => 'recent/'],
        ];

        $cateAll = [];
        foreach ($cates as $k => $v) {
            $firstCate  = [];
            $secondCate = [];
            if ($v['pid'] == 0) {
                $firstCate['id']   = $v['id'];
                $firstCate['name'] = $v['name'];
                $firstCate['url']  = "/open/interface?cate_id={$v['id']}";
                foreach ($cates as $vv) {
                    if ($vv['pid'] == $v['id']) {
                        $secondCate[] = ['id' => $vv['id'], 'name' => $vv['name'], 'url' => "/open/interface?cate_id={$v['id']}&two_cate_id={$vv['id']}"];
                    }
                }
                $firstCate['subfeature'] = $secondCate;
                $cateAll[]               = $firstCate;
            }
        }
        $nav[1]['subbusiness'] = $cateAll;

        return $nav;

    }
}
