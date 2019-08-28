<?php

namespace App\Common\Twig;

use App\Common\Service\SystemSetting;
use App\Platform;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;
use Twig_Extension_GlobalsInterface;

class AppExtension extends AbstractExtension implements Twig_Extension_GlobalsInterface {
    /** @var  ParameterBagInterface */
    protected $params;
    /** @var  SystemSetting */
    protected $settings;
    /**
     * @var UrlGeneratorInterface
     */
    private $urlGenerator;
    /**
     * @var RequestStack
     */
    private $requestStack;

    public function __construct(ParameterBagInterface $params, SystemSetting $settings, UrlGeneratorInterface $urlGenerator, RequestStack $requestStack) {
        $this->params         = $params;
        $this->settings = $settings;
        $this->urlGenerator = $urlGenerator;
        $this->requestStack = $requestStack;
    }

    public function getGlobals()
    {
        return [
            'current_path'       => $this->getCurrentPath(),
            'current_route'      => $this->getCurrentRoute(),
            'current_controller' => $this->getCurrentControllerClass(),
            'settings'           => $this->settings,
        ];
    }

    private function getCurrentControllerClass() {
        $request = $this->requestStack->getCurrentRequest();

        if (!$request) {
            return '';
        }

        // App\Admin\Controller\SystemAdministration\SystemAdministrationController::indexAction
        $parts = explode('::', $request->attributes->get('_controller'));
        return '\\' . $parts[0]; // 在前面加上斜杠 \ ，方便编辑菜单的时候直接复制粘贴类名
    }

    private function getCurrentRoute() {
        $request = $this->requestStack->getCurrentRequest();
        return $request ? $request->attributes->get('_route') : '';
    }

    private function getCurrentPath() {
        $request = $this->requestStack->getCurrentRequest();
        return $request ? $request->getPathInfo() : '';
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters(): array {
        return [
            new TwigFilter('md2html', [$this, 'markdownToHtml'], ['is_safe' => ['html']]),
            new TwigFilter('mask', [$this, 'maskInfo'], ['is_safe' => ['html']]),
            new TwigFilter('mask_mobile', [$this, 'maskMobile'], ['is_safe' => ['html']]),
            new TwigFilter('mask_ident', [$this, 'maskIdentity'], ['is_safe' => ['html']]),
            new TwigFilter('mask_email', [$this, 'maskEmail'], ['is_safe' => ['html']]),
            new TwigFilter('mask_bank_account', [$this, 'maskBankAccount'], ['is_safe' => ['html']]),
            new TwigFilter('mask_real_name', [$this, 'maskRealName'], ['is_safe' => ['html']]),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions(): array {
        return [
            new TwigFunction('to_options', [$this, 'toOptions']),
            new TwigFunction('params', [$this, 'getParams']),
            new TwigFunction('static_vars', [$this, 'getStaticVars']),
            new TwigFunction('platform_name', [$this, 'getPlatformName']),
            new TwigFunction('menu_path', [$this, 'getMenuPath']),
            new TwigFunction('is_current_menu', [$this, 'isCurrentMenuItem']),
            new TwigFunction('use_assets', [$this, 'useAssets'], ['is_safe' => ['html']]),
            new TwigFunction('asset', [$this, 'getAssetUrl'], ['is_safe' => ['html']]),

        ];
    }

    public function useAssets($assets) {
        $assets = is_array($assets) ? $assets : [$assets];
        $assetsStr = '';
        foreach ($assets as $asset) {
            if(!$asset) {
                continue;
            }

            $assetUrl = $this->getAssetUrl($asset);

            $pathInfo = pathinfo($asset);
            list($extension) = explode('?', $pathInfo['extension']);
            $assetExt = strtolower($extension);
            if($assetExt === 'js') {
                $assetsStr .= "<script type='text/javascript' src='{$assetUrl}'></script>\n";
            } elseif($assetExt === 'css') {
                $assetsStr .= "<link rel='stylesheet' href='{$assetUrl}' />\n";
            } else {
                throw new \InvalidArgumentException("Unsupported asset type: {$asset}");
            }
        }

        return $assetsStr;
    }

    public function getAssetUrl($asset) {
        if(!$asset) {
            return '';
        }
        $assetBaseUrl = $this->params->get('asset_base_url');
        return "{$assetBaseUrl}{$asset}";
    }

    public function toOptions($source, $firstOptionText = "", $firstOptionValue = "", $nameValueStyle = false): array {
        if(is_string($source)) {
            $source = constant($source);
        }

        if(!is_array($source)) {
            throw new \InvalidArgumentException('to_options方法的 $source 必须是一个数组，或者是一个值为数组的常量，比如: App\\DemoClass::GENDER = ["M" => "Male", "F" => "Female"]');
        }

        $options = [];
        if($nameValueStyle) {
            if ($firstOptionText) {
                $options[] = ['name' => $firstOptionText, 'value' => $firstOptionValue];
            }
            foreach ($source as $key => $name) {
                $options[] = ['name' => $name, 'value' => $key];
            }
        } else {
            if ($firstOptionText) {
                $options[$firstOptionValue] = $firstOptionText;
            }
            foreach ($source as $key => $value) {
                $options[$key] = $value;
            }
        }

        return $options;
    }

    // 马赛克掉关键信息
    public function maskInfo(?string $content, int $prefixLength = 2, int $suffixLength = 2, string $maskChar = '*', int $maskCharLength = 4): string {
        if(strlen($content) <= ($prefixLength + $suffixLength)) {
            return (string)$content;
        }

        $maskChar       = $maskChar ?: '';
        $maskCharLength = $maskCharLength ?: 4;
        $maskString     = str_repeat($maskChar, $maskCharLength);
        $masked         = mb_substr($content, 0, $prefixLength) . $maskString . mb_substr($content, -$suffixLength);

        return (string)$masked;
    }

    public function maskMobile(?string $content, ?string $maskChar = '*'): string {
        return $this->maskInfo($content, 3, 4, $maskChar, 4);
    }

    public function maskIdentity(?string $content, ?string $maskChar = '*'): string {
        return $this->maskInfo($content, 2, 4, $maskChar, 12);
    }

    public function maskEmail(?string $content, ?string $maskChar = '*'): string {
        return $this->maskInfo($content, 2, 3, $maskChar, 5);
    }

    public function maskBankAccount(?string $content, ?string $maskChar = '*'): string {
        return $this->maskInfo($content, 4, 4, $maskChar, 8);
    }

    public function maskRealName(?string $content, ?string $maskChar = '*'): string {
        return $this->maskInfo($content, 1, 1, $maskChar, 2);
    }

    // 获取配置信息
    public function getParams(string $key, $default = null) {
        if ($this->params->has($key)) {
            return $this->params->get($key);
        } else {
            list($section, $key) = explode('.', $key);
            return $this->settings->$section->$key;
        }
    }

    /**
     * Takes the list of codes of the locales (languages) enabled in the
     * application and returns an array with the name of each locale written
     * in its own language (e.g. English, Français, Español, etc.).
     */
    public function getStaticVars($var) {

    }

    public function getPlatformName($platformId) {
        return Platform::PLATFORMS[$platformId] ?? "未知平台({$platformId})";
    }


    public function getMenuPath($item): string
    {
        if(isset($item['url'])) {
            return $item['url'];
        } elseif(isset($item['route'])) {
            $args = $item['route_args'] ?? [];
            return $this->urlGenerator->generate($item['route'], $args, UrlGeneratorInterface::NETWORK_PATH);
        } elseif(isset($item['items'])) {
            $firstItem = reset($item['items']);
            return $this->getMenuPath($firstItem);
        } else {
            throw new \InvalidArgumentException("菜单格式不正确，必须有 url 或 route 中的一个. " . json_encode($item));
        }
    }

    public function isCurrentMenuItem($item) {
        $args = $item['route_args'] ?? [];
        $path = $item['url'] ?? $this->urlGenerator->generate($item['route'], $args, UrlGeneratorInterface::ABSOLUTE_PATH);

        return $path === $this->getCurrentPath();
    }

}
