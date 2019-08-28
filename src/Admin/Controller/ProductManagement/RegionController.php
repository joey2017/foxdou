<?php
namespace App\Admin\Controller\ProductManagement;

use App\Admin\Form\RegionEditForm;
use App\Common\Model\Region;
use App\Reseller\Controller\ResellerBaseController;
use Psr\SimpleCache\CacheInterface;
use Psr\SimpleCache\InvalidArgumentException;
use SimpleRecord\Exception\CacheException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfu\SimpleFormBundle\Form;

/**
 * @Route(defaults={"group": "product-management"})
 */
class RegionController extends ResellerBaseController {

    /**
     * @Route("/regions", name="admin_regions_index")
     */
    public function indexAction(Request $request, RegionEditForm $editForm, Form $searchForm) {
        $searchForm->init([
            'province_code'   => ['digit'],
            'city_code'       => ['digit'],
            'search'          => [''],
        ]);

        if (!$request->isXmlHttpRequest()) {
            return $this->render('/Admin/ProductManagement/Region/index.twig', ['edit_form' => $editForm, 'search_form' => $searchForm]);
        }

        if (!$searchForm->validate($request->query)) {
            return ["status" => false, "msg" => "参数错误"];
        }

        if($searchForm->city_code) {
            $conditions['parent_id'] = $searchForm->city_code;
        }elseif($searchForm->province_code) {
            $conditions['parent_id'] = $searchForm->province_code;
        }

        $conditions['area_name'] = ['LIKE' => "%{$searchForm->search}%"];
        $conditions['level'] = ['<=' => Region::LEVEL_DISTRICT];
        $options = [
            'select' => "id, area_name, parent_id, short_name, zipcode, pinyin, level, sort",
            'order' => 'id',
        ];

        list($rows, $total) = Region::paginate($conditions, $options, $searchForm->page, $searchForm->limit);
        foreach ($rows as &$row) {
            $this->fillData($row);
        }

        return $this->json(["status" => true, "data" => $rows, "total" => $total]);
    }

    /**
     * @Route("/regions/save", name="admin_regions_save")
     */
    public function saveAction(Request $request, RegionEditForm $form) {
        if (!$form->validate($request->request)) {
            return ["status" => false, "msg" => "参数错误", 'errors' => $form->getErrors()];
        }

        $area = $form->id ? Region::find($form->id) : new Region(['id' => $form->area_code]);
        $area->area_name = $form->area_name;
        $area->short_name = $form->short_name;
        $area->zipcode = (int)$form->zipcode;
        $area->sort = $form->sort;

        if($form->city_code) {
            $area->level = Region::LEVEL_DISTRICT;
            $area->parent_id = $form->city_code;
        }elseif($form->province_code) {
            $area->level = Region::LEVEL_CITY;
            $area->parent_id = $form->province_code;
        }else {
            $area->level = Region::LEVEL_PROVINCE;
            $area->parent_id = Region::LEVEL_NONE;
        }

        try {
            $area->save();

            $this->cache()->delete('regions.city_picker_data');
            $this->cache()->get('regions.area_tree');

            return ["status" => true, 'msg' => '保存成功'];
        } catch (\Exception | InvalidArgumentException $e) {
            $context = [];
            $this->logger->error('保存地区失败', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
            return ["status" => false, 'msg' => '保存地区失败'];
        }

    }

    /**
     * @Route("/regions/delete", name="admin_regions_delete", methods={"POST"})
     */
    public function deleteAction(Request $request, Form $form) {
        $form->init([
            'id' => ['required, integer'],
        ], 'admin_regions_delete');

        if (!$form->validate($request->request)) {
            return ["status" => false, "msg" => "参数错误", 'errors' => $form->getErrors()];
        }

        Region::delete_by_id($form->id);

        return["status" => true, 'msg' => '删除成功'];
    }

    /**
     * @Route("/regions/cities", name="admin_regions_cities")
     */
    public function citiesAction(Request $request) {
        $province_code = $request->query->get('province_code');
        if(!$province_code) {
            return ['status' => false, 'msg' => '参数错误'];
        }

        $rows = Region::all(['parent_id' => $province_code, 'level' => Region::LEVEL_CITY]);
        return ["status" => true, "data" => $rows];
    }

    /**
     * @Route("/regions/districts", name="admin_regions_districts")
     */
    public function districtsAction(Request $request) {
        $city_code = $request->query->get('city_code');
        if(!$city_code) {
            return ['status' => false, 'msg' => '参数错误'];
        }

        $rows = Region::all(['parent_id' => $city_code, 'level' => Region::LEVEL_DISTRICT]);
        return ["status" => true, "data" => $rows];
    }

    /**
     * @Route("/regions/city-picker-data", name="admin_regions_city_picker_data")
     */
    public function city_picker_dataAction(Request $request, CacheInterface $cache) {
        // 为了让直辖市的一级行政区域和二级行政区域区分开来，直辖市的的一级行政区域去掉了"市"字，比如北京

        $cityPickerData = $this->getCityPickerData();

        $data = json_encode($cityPickerData, JSON_UNESCAPED_UNICODE);
        $generatedData = <<<EOF
var ChineseDistricts = {$data};
if (typeof window !== 'undefined') {
    window.ChineseDistricts = ChineseDistricts;
}
EOF;

        $response = new Response($generatedData, 200, ['Content-Type' => 'application/javascript']);

        return $response;
    }

    private function getCityPickerData() {
        try {
            $cityPickerData = $this->cache()->get('regions.city_picker_data');
            if(!$cityPickerData) {
                $cityPickerData = [
                    '86' =>     [
                        'A-G' => [
                            ['code' => '340000', 'name' => '安徽省'],
                            ['code' => '110000', 'name' => '北京'],
                            ['code' => '500000', 'name' => '重庆'],
                            ['code' => '350000', 'name' => '福建省'],
                            ['code' => '620000', 'name' => '甘肃省'],
                            ['code' => '440000', 'name' => '广东省'],
                            ['code' => '450000', 'name' => '广西壮族自治区'],
                            ['code' => '520000', 'name' => '贵州省']
                        ],
                        'H-K' => [
                            ['code' => '460000', 'name' => '海南省'],
                            ['code' => '130000', 'name' => '河北省'],
                            ['code' => '230000', 'name' => '黑龙江省'],
                            ['code' => '410000', 'name' => '河南省'],
                            ['code' => '420000', 'name' => '湖北省'],
                            ['code' => '430000', 'name' => '湖南省'],
                            ['code' => '320000', 'name' => '江苏省'],
                            ['code' => '360000', 'name' => '江西省'],
                            ['code' => '220000', 'name' => '吉林省']
                        ],
                        'L-S' => [
                            ['code' => '210000', 'name' => '辽宁省'],
                            ['code' => '150000', 'name' => '内蒙古自治区'],
                            ['code' => '640000', 'name' => '宁夏回族自治区'],
                            ['code' => '630000', 'name' => '青海省'],
                            ['code' => '370000', 'name' => '山东省'],
                            ['code' => '310000', 'name' => '上海'],
                            ['code' => '140000', 'name' => '山西省'],
                            ['code' => '610000', 'name' => '陕西省'],
                            ['code' => '510000', 'name' => '四川省']
                        ],
                        'T-Z' => [
                            ['code' => '120000', 'name' => '天津'],
                            ['code' => '650000', 'name' => '新疆维吾尔自治区'],
                            ['code' => '540000', 'name' => '西藏自治区'],
                            ['code' => '530000', 'name' => '云南省'],
                            ['code' => '330000', 'name' => '浙江省']
                        ]
                    ],
                ];

                $rows = Region::all(['level' => ['<=' => Region::LEVEL_DISTRICT]]);
                foreach ($rows as $row) {
                    if($row['level'] === 1 || $row['parent_id'] == '0') {
                        continue;
                    }

                    if(!isset($cityPickerData[$row['parent_id']])) {
                        $cityPickerData[$row['parent_id']] = [];
                    }
                    $cityPickerData[$row['parent_id']][$row['id']] = $row['area_name'];
                }

                $this->cache()->set('regions.city_picker_data', $cityPickerData);
            }

            return $cityPickerData;
        } catch (\Exception | InvalidArgumentException $e) {
            $context = [];
            $this->logger->error('获取城市数据失败', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
            return null;
        }
    }


    private function getAreaNameTree() {
        try {
            $begin = microtime(true);
            $tree = $this->cache()->get('regions.area_tree');
            $elapsed = microtime(true) - $begin;
            if(!$tree) {
                $rows = Region::all(['level' => ['<=' => Region::LEVEL_DISTRICT]]);
                foreach ($rows as $row) {
                    $tree[$row['id']] = ['parent_id' => $row['parent_id'], 'name' => $row['area_name']];
                }

                $this->cache()->set('regions.area_tree', $tree);
            }

            return $tree;
        } catch (\Exception | InvalidArgumentException $e) {
            $context = [];
            $this->logger->error('获取城市数据失败', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
            return null;
        }
    }

    private function fillData(&$row) {
        static $cache = [];

        $areaCode = $row['id'];
        if(isset($cache[$areaCode])) {
            $row['province_code'] = $cache[$areaCode]['province_code'];
            $row['province_name'] = $cache[$areaCode]['province_name'];
            return;
        }

        $row['area_code'] = $areaCode;
        $row['province_code'] = '';
        $row['province_name'] = '';
        $row['city_code'] = '';
        $row['city_name'] = '';
        $row['district_code'] = '';
        $row['district_name'] = '';
        $row['town_code'] = '';
        $row['town_name'] = '';


        if($row['level'] === Region::LEVEL_PROVINCE) {
            $cache[$areaCode] = ['province_code' => $row['id'], 'province_name' => $row['area_name']];

            $row['province_code'] = $cache[$areaCode]['province_code'];
            $row['province_name'] = $cache[$areaCode]['province_name'];
            return;
        }

        $tree = $this->getAreaNameTree();

        if($row['level'] === Region::LEVEL_CITY) {
            $provinceCode     = $row['parent_id'];

            $row['province_code'] = $provinceCode;
            $row['province_name'] = $tree[$provinceCode]['name'];
            $row['city_code'] = $row['id'];
            $row['city_name'] = $row['area_name'];
        } elseif($row['level'] === Region::LEVEL_DISTRICT) {
            $cityCode     = $row['parent_id'];
            $cityName     = $tree[$cityCode]['name'];
            $provinceCode = $tree[$cityCode]['parent_id'];
            $provinceName = $tree[$provinceCode]['name'];

            $row['province_code'] = $provinceCode;
            $row['province_name'] = $provinceName;
            $row['city_code'] = $cityCode;
            $row['city_name'] = $cityName;
            $row['district_code'] = $row['id'];
            $row['district_name'] = $row['area_name'];
        // } elseif($row['level'] === Region::LEVEL_TOWN) {
        //     $districtCode = $row['parent_id'];
        //     $districtName = $tree[$districtCode]['name'];
        //     $cityCode     = $row['parent_id'];
        //     $cityName     = $tree[$cityCode]['name'];
        //     $provinceCode = $tree[$cityCode]['parent_id'];
        //     $provinceName = $tree[$provinceCode]['name'];
        //
        //     $row['province_code'] = $provinceCode;
        //     $row['province_name'] = $provinceName;
        //     $row['city_code'] = $cityCode;
        //     $row['city_name'] = $cityName;
        //     $row['district_code'] = $districtCode;
        //     $row['district_name'] = $districtName;
        //     $row['town_code'] = $row['id'];
        //     $row['town_name'] = $row['area_name'];
        }
    }
}
