<?php

namespace Container6cZcDwQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class srcApp_KernelDevDebugContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $parameters;
    private $targetDirs = array();
    private $getService;

    public function __construct(array $buildParameters = array(), $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable(array($this, 'getService'));
        $dir = $this->targetDirs[0] = \dirname($containerDir);
        for ($i = 1; $i <= 4; ++$i) {
            $this->targetDirs[$i] = $dir = \dirname($dir);
        }
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = array();
        $this->syntheticIds = array(
            'kernel' => true,
        );
        $this->methodMap = array(
            'Endroid\\QrCode\\Writer\\BinaryWriter' => 'getBinaryWriterService',
            'Endroid\\QrCode\\Writer\\DebugWriter' => 'getDebugWriterService',
            'Endroid\\QrCode\\Writer\\EpsWriter' => 'getEpsWriterService',
            'Endroid\\QrCode\\Writer\\PngWriter' => 'getPngWriterService',
            'Endroid\\QrCode\\Writer\\SvgWriter' => 'getSvgWriterService',
            'event_dispatcher' => 'getEventDispatcherService',
            'http_kernel' => 'getHttpKernelService',
            'oneup_uploader.templating.uploader_helper' => 'getOneupUploader_Templating_UploaderHelperService',
            'oneup_uploader.twig.extension.uploader' => 'getOneupUploader_Twig_Extension_UploaderService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'session' => 'getSessionService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
        );
        $this->fileMap = array(
            'App\\Admin\\Controller\\AdminBaseController' => 'getAdminBaseControllerService.php',
            'App\\Admin\\Controller\\AuditController' => 'getAuditControllerService.php',
            'App\\Admin\\Controller\\DashboardController' => 'getDashboardControllerService.php',
            'App\\Admin\\Controller\\FileUploadController' => 'getFileUploadControllerService.php',
            'App\\Admin\\Controller\\FinanceController' => 'getFinanceControllerService.php',
            'App\\Admin\\Controller\\FinancePaymentMethodController' => 'getFinancePaymentMethodControllerService.php',
            'App\\Admin\\Controller\\FinanceWithdrawController' => 'getFinanceWithdrawControllerService.php',
            'App\\Admin\\Controller\\LoginController' => 'getLoginControllerService.php',
            'App\\Admin\\Controller\\NotifyMessageController' => 'getNotifyMessageControllerService.php',
            'App\\Admin\\Controller\\OrderController' => 'getOrderControllerService.php',
            'App\\Admin\\Controller\\PlugController' => 'getPlugControllerService.php',
            'App\\Admin\\Controller\\ProductManagement\\AbstractSourceGroupController' => 'getAbstractSourceGroupControllerService.php',
            'App\\Admin\\Controller\\ProductManagement\\FlowController' => 'getFlowControllerService.php',
            'App\\Admin\\Controller\\ProductManagement\\MobileController' => 'getMobileControllerService.php',
            'App\\Admin\\Controller\\ProductManagement\\PhoneNumberAttributionController' => 'getPhoneNumberAttributionControllerService.php',
            'App\\Admin\\Controller\\ProductManagement\\RegionController' => 'getRegionControllerService.php',
            'App\\Admin\\Controller\\ProductManagement\\SourceGroupController' => 'getSourceGroupControllerService.php',
            'App\\Admin\\Controller\\ProductManagement\\SpecialUserSettingController' => 'getSpecialUserSettingControllerService.php',
            'App\\Admin\\Controller\\ProductManagement\\TelephoneController' => 'getTelephoneControllerService.php',
            'App\\Admin\\Controller\\ProductManagement\\TencentController' => 'getTencentControllerService.php',
            'App\\Admin\\Controller\\ProductManagement\\TencentProductCategoryController' => 'getTencentProductCategoryControllerService.php',
            'App\\Admin\\Controller\\ProductManagement\\VirtualNetworkOperatorController' => 'getVirtualNetworkOperatorControllerService.php',
            'App\\Admin\\Controller\\ProfileController' => 'getProfileControllerService.php',
            'App\\Admin\\Controller\\ServicesMallOrderController' => 'getServicesMallOrderControllerService.php',
            'App\\Admin\\Controller\\ServicesMallProductController' => 'getServicesMallProductControllerService.php',
            'App\\Admin\\Controller\\SystemAdministration\\AdministratorController' => 'getAdministratorControllerService.php',
            'App\\Admin\\Controller\\SystemAdministration\\AdministratorRoleController' => 'getAdministratorRoleControllerService.php',
            'App\\Admin\\Controller\\SystemAdministration\\ArticleCategoryController' => 'getArticleCategoryControllerService.php',
            'App\\Admin\\Controller\\SystemAdministration\\ArticleController' => 'getArticleControllerService.php',
            'App\\Admin\\Controller\\SystemAdministration\\CacheController' => 'getCacheControllerService.php',
            'App\\Admin\\Controller\\SystemAdministration\\LoggingController' => 'getLoggingControllerService.php',
            'App\\Admin\\Controller\\SystemAdministration\\MiscController' => 'getMiscControllerService.php',
            'App\\Admin\\Controller\\SystemAdministration\\RedisController' => 'getRedisControllerService.php',
            'App\\Admin\\Controller\\SystemAdministration\\SystemAdministrationController' => 'getSystemAdministrationControllerService.php',
            'App\\Admin\\Controller\\SystemAdministration\\SystemSettingController' => 'getSystemSettingControllerService.php',
            'App\\Admin\\Controller\\UserApplicationController' => 'getUserApplicationControllerService.php',
            'App\\Admin\\Controller\\UserController' => 'getUserControllerService.php',
            'App\\Admin\\Controller\\UserDetail\\MainController' => 'getMainControllerService.php',
            'App\\Admin\\Controller\\UserDetail\\OpenPlatformController' => 'getOpenPlatformControllerService.php',
            'App\\Admin\\Controller\\UserDetail\\ResellerPlatformController' => 'getResellerPlatformControllerService.php',
            'App\\Admin\\Controller\\UserDetail\\SupplierPlatformController' => 'getSupplierPlatformControllerService.php',
            'App\\Admin\\Controller\\UserDetail\\UserDetailController' => 'getUserDetailControllerService.php',
            'App\\Admin\\Controller\\UserSubAccountLevelController' => 'getUserSubAccountLevelControllerService.php',
            'App\\Common\\Controller\\ArticleController' => 'getArticleController2Service.php',
            'App\\Common\\Controller\\BaseController' => 'getBaseControllerService.php',
            'App\\Common\\Controller\\CrudController' => 'getCrudControllerService.php',
            'App\\Common\\Controller\\FileUploadController' => 'getFileUploadController2Service.php',
            'App\\Common\\Controller\\Finance\\BalanceController' => 'getBalanceControllerService.php',
            'App\\Common\\Controller\\FrontpageController' => 'getFrontpageControllerService.php',
            'App\\Common\\Controller\\RecaptchaController' => 'getRecaptchaControllerService.php',
            'App\\Common\\Controller\\SmsVerifierController' => 'getSmsVerifierControllerService.php',
            'App\\Common\\Service\\FileUpload\\UploadFileNamer' => 'getUploadFileNamerService.php',
            'App\\Open\\Controller\\DashboardController' => 'getDashboardController2Service.php',
            'App\\Open\\Controller\\FinanceController' => 'getFinanceController2Service.php',
            'App\\Open\\Controller\\FrontpageController' => 'getFrontpageController2Service.php',
            'App\\Open\\Controller\\OpenBaseController' => 'getOpenBaseControllerService.php',
            'App\\Open\\Controller\\ServiceController' => 'getServiceControllerService.php',
            'App\\Open\\Controller\\UserController' => 'getUserController2Service.php',
            'App\\Passport\\Controller\\HomeController' => 'getHomeControllerService.php',
            'App\\Passport\\Controller\\IdentityManagementController' => 'getIdentityManagementControllerService.php',
            'App\\Passport\\Controller\\LoginController' => 'getLoginController2Service.php',
            'App\\Passport\\Controller\\PassportBaseController' => 'getPassportBaseControllerService.php',
            'App\\Passport\\Controller\\PasswordResetController' => 'getPasswordResetControllerService.php',
            'App\\Passport\\Controller\\ProtectController' => 'getProtectControllerService.php',
            'App\\Passport\\Controller\\QuestionController' => 'getQuestionControllerService.php',
            'App\\Passport\\Controller\\RegisterController' => 'getRegisterControllerService.php',
            'App\\Passport\\Controller\\SafeCenterController' => 'getSafeCenterControllerService.php',
            'App\\Passport\\Controller\\ToolController' => 'getToolControllerService.php',
            'App\\Passport\\Controller\\UserController' => 'getUserController3Service.php',
            'App\\Passport\\Controller\\UsersMessageController' => 'getUsersMessageControllerService.php',
            'App\\Reseller\\Controller\\AffiliateController' => 'getAffiliateControllerService.php',
            'App\\Reseller\\Controller\\DashboardController' => 'getDashboardController3Service.php',
            'App\\Reseller\\Controller\\EmployeeController' => 'getEmployeeControllerService.php',
            'App\\Reseller\\Controller\\FaqController' => 'getFaqControllerService.php',
            'App\\Reseller\\Controller\\FinanceController' => 'getFinanceController3Service.php',
            'App\\Reseller\\Controller\\HomeController' => 'getHomeController2Service.php',
            'App\\Reseller\\Controller\\OrderController' => 'getOrderController2Service.php',
            'App\\Reseller\\Controller\\PrinterSettingController' => 'getPrinterSettingControllerService.php',
            'App\\Reseller\\Controller\\ProductController' => 'getProductControllerService.php',
            'App\\Reseller\\Controller\\RechargeController' => 'getRechargeControllerService.php',
            'App\\Reseller\\Controller\\ResellerAccountController' => 'getResellerAccountControllerService.php',
            'App\\Reseller\\Controller\\ResellerBaseController' => 'getResellerBaseControllerService.php',
            'App\\Reseller\\Controller\\SafeController' => 'getSafeControllerService.php',
            'App\\Reseller\\Controller\\UserController' => 'getUserController4Service.php',
            'App\\Supplier\\Controller\\DashboardController' => 'getDashboardController4Service.php',
            'App\\Supplier\\Controller\\FinanceController' => 'getFinanceController4Service.php',
            'App\\Supplier\\Controller\\HomeController' => 'getHomeController3Service.php',
            'App\\Supplier\\Controller\\OrdersController' => 'getOrdersControllerService.php',
            'App\\Supplier\\Controller\\SourceGroupController' => 'getSourceGroupController2Service.php',
            'App\\Supplier\\Controller\\SupplierBaseController' => 'getSupplierBaseControllerService.php',
            'App\\Supplier\\Controller\\UserController' => 'getUserController5Service.php',
            'App\\Test\\Controller\\SimpleFormDemoController' => 'getSimpleFormDemoControllerService.php',
            'App\\Test\\Controller\\TestController' => 'getTestControllerService.php',
            'Endroid\\QrCodeBundle\\Controller\\GenerateController' => 'getGenerateControllerService.php',
            'League\\Flysystem\\Filesystem' => 'getFilesystemService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService.php',
            'Symfu\\SimpleValidation\\TransformerManagerInterface' => 'getTransformerManagerInterfaceService.php',
            'Symfu\\SimpleValidation\\ValidationManagerInterface' => 'getValidationManagerInterfaceService.php',
            'cache.app' => 'getCache_AppService.php',
            'cache.app_clearer' => 'getCache_AppClearerService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.system' => 'getCache_SystemService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache_clearer' => 'getCacheClearerService.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'data_collector.dump' => 'getDataCollector_DumpService.php',
            'filesystem' => 'getFilesystem2Service.php',
            'oneup_flysystem.mount_manager' => 'getOneupFlysystem_MountManagerService.php',
            'oneup_uploader.chunk_manager' => 'getOneupUploader_ChunkManagerService.php',
            'oneup_uploader.controller.admin_article' => 'getOneupUploader_Controller_AdminArticleService.php',
            'oneup_uploader.controller.default' => 'getOneupUploader_Controller_DefaultService.php',
            'oneup_uploader.controller.identity_image' => 'getOneupUploader_Controller_IdentityImageService.php',
            'oneup_uploader.namer.uniqid' => 'getOneupUploader_Namer_UniqidService.php',
            'oneup_uploader.orphanage_manager' => 'getOneupUploader_OrphanageManagerService.php',
            'oneup_uploader.routing.loader' => 'getOneupUploader_Routing_LoaderService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService.php',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService.php',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService.php',
            'services_resetter' => 'getServicesResetterService.php',
            'simple_form.validator.custom.recaptcha' => 'getSimpleForm_Validator_Custom_RecaptchaService.php',
            'simple_form.validator.custom.verify_code' => 'getSimpleForm_Validator_Custom_VerifyCodeService.php',
            'swiftmailer.mailer.mxhichina' => 'getSwiftmailer_Mailer_MxhichinaService.php',
            'swiftmailer.mailer.mxhichina.plugin.messagelogger' => 'getSwiftmailer_Mailer_Mxhichina_Plugin_MessageloggerService.php',
            'swiftmailer.mailer.mxhichina.transport.real' => 'getSwiftmailer_Mailer_Mxhichina_Transport_RealService.php',
            'swiftmailer.transport' => 'getSwiftmailer_TransportService.php',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService.php',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService.php',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService.php',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService.php',
        );
        $this->aliases = array(
            'mailer' => 'swiftmailer.mailer.mxhichina',
        );

        $this->privates['service_container'] = function () {
            include_once $this->targetDirs[3].'\\vendor\\symfony\\event-dispatcher\\EventSubscriberInterface.php';
            include_once $this->targetDirs[3].'\\src\\Common\\Handler\\AccountVerificationHandler.php';
            include_once $this->targetDirs[3].'\\src\\Common\\Handler\\KernelResponseSubscriber.php';
            include_once $this->targetDirs[3].'\\src\\Common\\Handler\\SystemMaintainModeHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\psr\\cache\\src\\CacheItemPoolInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Adapter\\AdapterInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\contracts\\Cache\\CacheInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\PruneableInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\ResettableInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\contracts\\Cache\\CacheTrait.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Traits\\ContractsTrait.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Adapter\\ChainAdapter.php';
            include_once $this->targetDirs[3].'\\src\\Common\\Service\\Cache\\ChainCache.php';
            include_once $this->targetDirs[3].'\\src\\Common\\AutoGenerated\\SystemSettingTrait.php';
            include_once $this->targetDirs[3].'\\src\\Common\\Service\\SystemSetting.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\var-dumper\\Cloner\\ClonerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\var-dumper\\Cloner\\AbstractCloner.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\var-dumper\\Cloner\\VarCloner.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\var-dumper\\Dumper\\DataDumperInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\var-dumper\\Cloner\\DumperInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\var-dumper\\Dumper\\AbstractDumper.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\var-dumper\\Dumper\\CliDumper.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\var-dumper\\Dumper\\HtmlDumper.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Debug\\FileLinkFormatter.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerNameParser.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\ControllerMetadata\\ArgumentMetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\ControllerMetadata\\ArgumentMetadataFactory.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\ResponseListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\StreamedResponseListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\LocaleListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\ValidateRequestListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\EventListener\\ResolveControllerNameSubscriber.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ParameterBag\\ParameterBagInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ParameterBag\\ParameterBag.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ParameterBag\\FrozenParameterBag.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ParameterBag\\ContainerBagInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ParameterBag\\ContainerBag.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\HttpKernelInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\TerminableInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\HttpKernel.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ControllerResolverInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\TraceableControllerResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ControllerResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ContainerControllerResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolverInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\TraceableArgumentResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\RequestStack.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\UriSigner.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\ConfigCacheFactoryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\ResourceCheckerConfigCacheFactory.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Marshaller\\MarshallerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Marshaller\\DefaultMarshaller.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\Session\\SessionInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\Session\\Session.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\Session\\Storage\\SessionStorageInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\Session\\Storage\\NativeSessionStorage.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\Session\\SessionBagInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\Session\\Storage\\MetadataBag.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\Session\\Attribute\\AttributeBagInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\Session\\Attribute\\AttributeBag.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\Session\\Flash\\FlashBagInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\Session\\Flash\\FlashBag.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\AbstractSessionListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\SessionListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\contracts\\Service\\ServiceLocatorTrait.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ServiceLocator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\HttpCache\\SurrogateInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\HttpCache\\AbstractSurrogate.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\HttpCache\\Esi.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\SurrogateListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\FragmentListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\TranslatorListener.php';
            include_once $this->targetDirs[3].'\\vendor\\psr\\log\\Psr\\Log\\LoggerAwareInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\psr\\log\\Psr\\Log\\LoggerAwareTrait.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Traits\\AbstractTrait.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Adapter\\AbstractAdapter.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Traits\\ApcuTrait.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Adapter\\ApcuAdapter.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Traits\\RedisTrait.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Adapter\\RedisAdapter.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\DebugHandlersListener.php';
            include_once $this->targetDirs[3].'\\vendor\\psr\\log\\Psr\\Log\\LoggerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\ResettableInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Logger.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Log\\DebugLoggerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\monolog-bridge\\Logger.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\stopwatch\\Stopwatch.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\RequestContext.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\RouterListener.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\Reader.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\AnnotationReader.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\AnnotationRegistry.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security-core\\Authorization\\AuthorizationCheckerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security-core\\Authorization\\AuthorizationChecker.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security-core\\Authentication\\Token\\Storage\\TokenStorageInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security-core\\Authentication\\Token\\Storage\\TokenStorage.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security-core\\Authentication\\AuthenticationManagerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security-core\\Authentication\\AuthenticationProviderManager.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security-core\\Authentication\\AuthenticationTrustResolverInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security-core\\Authentication\\AuthenticationTrustResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security-core\\Role\\RoleHierarchyInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security-core\\Role\\RoleHierarchy.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security-http\\Logout\\LogoutUrlGenerator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security-http\\AccessMapInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security-http\\AccessMap.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\RequestMatcherInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\RequestMatcher.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security-http\\RememberMe\\ResponseListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security-core\\Authorization\\AccessDecisionManagerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security-core\\Authorization\\TraceableAccessDecisionManager.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security-core\\Authorization\\AccessDecisionManager.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security-http\\Firewall.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security-bundle\\EventListener\\FirewallListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security-bundle\\Debug\\TraceableFirewallListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security-http\\FirewallMapInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security-bundle\\Security\\FirewallMap.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\EventListener\\ControllerListener.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\EventListener\\ParamConverterListener.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\Request\\ParamConverter\\ParamConverterManager.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\Request\\ParamConverter\\ParamConverterInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\Request\\ParamConverter\\DoctrineParamConverter.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\Request\\ParamConverter\\DateTimeParamConverter.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\EventListener\\TemplateListener.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\Templating\\TemplateGuesser.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\EventListener\\HttpCacheListener.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\EventListener\\SecurityListener.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\EventListener\\IsGrantedListener.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\Request\\ArgumentNameConverter.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\HandlerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\AbstractHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\AbstractProcessingHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Processor\\ProcessorInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Processor\\PsrLogMessageProcessor.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\monolog-bridge\\Handler\\ConsoleHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\lib\\Twig\\Environment.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\lib\\Twig\\LoaderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\lib\\Twig\\ExistsLoaderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\lib\\Twig\\SourceContextLoaderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\lib\\Twig\\Loader\\Filesystem.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bundle\\Loader\\NativeFilesystemLoader.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\lib\\Twig\\ExtensionInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\lib\\Twig\\Extension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\DumpExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\CsrfExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\LogoutUrlExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\SecurityExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\lib\\Twig\\Extension\\Profiler.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\ProfilerExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\lib\\Twig\\Profiler\\Profile.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\contracts\\Translation\\TranslatorTrait.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\TranslationExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\AssetExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\asset\\Packages.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\asset\\PackageInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\asset\\Package.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\asset\\PathPackage.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\asset\\VersionStrategy\\VersionStrategyInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\asset\\VersionStrategy\\EmptyVersionStrategy.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\asset\\Context\\ContextInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\asset\\Context\\RequestStackContext.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\CodeExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\RoutingExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\YamlExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\StopwatchExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\HttpKernelExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\HttpFoundationExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\lib\\Twig\\Extension\\GlobalsInterface.php';
            include_once $this->targetDirs[3].'\\src\\Common\\Twig\\AppExtension.php';
            include_once $this->targetDirs[3].'\\src\\Common\\Twig\\SecurityExtension.php';
            include_once $this->targetDirs[3].'\\src\\Common\\Twig\\SourceCodeExtension.php';
            include_once $this->targetDirs[3].'\\src\\Open\\Twig\\NavExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\web-profiler-bundle\\Twig\\WebProfilerExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\endroid\\qr-code-bundle\\src\\Twig\\QrCodeExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\AppVariable.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\lib\\Twig\\RuntimeLoaderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\lib\\Twig\\ContainerRuntimeLoader.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bundle\\DependencyInjection\\Configurator\\EnvironmentConfigurator.php';
            include_once $this->targetDirs[3].'\\vendor\\endroid\\qr-code\\src\\Writer\\WriterInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\endroid\\qr-code\\src\\Writer\\AbstractWriter.php';
            include_once $this->targetDirs[3].'\\vendor\\endroid\\qr-code\\src\\Writer\\BinaryWriter.php';
            include_once $this->targetDirs[3].'\\vendor\\endroid\\qr-code\\src\\Writer\\DebugWriter.php';
            include_once $this->targetDirs[3].'\\vendor\\endroid\\qr-code\\src\\Writer\\EpsWriter.php';
            include_once $this->targetDirs[3].'\\vendor\\endroid\\qr-code\\src\\Writer\\PngWriter.php';
            include_once $this->targetDirs[3].'\\vendor\\endroid\\qr-code\\src\\Writer\\SvgWriter.php';
            include_once $this->targetDirs[3].'\\vendor\\endroid\\qr-code\\src\\Factory\\QrCodeFactoryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\endroid\\qr-code\\src\\Factory\\QrCodeFactory.php';
            include_once $this->targetDirs[3].'\\vendor\\endroid\\qr-code\\src\\WriterRegistryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\endroid\\qr-code\\src\\WriterRegistry.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\templating\\Helper\\HelperInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\templating\\Helper\\Helper.php';
            include_once $this->targetDirs[3].'\\vendor\\oneup\\uploader-bundle\\Templating\\Helper\\UploaderHelper.php';
            include_once $this->targetDirs[3].'\\vendor\\oneup\\uploader-bundle\\Twig\\Extension\\UploaderExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\contracts\\Translation\\LocaleAwareInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\TranslatorInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\contracts\\Translation\\TranslatorInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\TranslatorBagInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\Translator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\CacheWarmer\\WarmableInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Translation\\Translator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\Formatter\\MessageFormatterInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\Formatter\\IntlFormatterInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\Formatter\\ChoiceMessageFormatterInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\Formatter\\MessageFormatter.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\IdentityTranslator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\RequestContextAwareInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Matcher\\UrlMatcherInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Generator\\UrlGeneratorInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\RouterInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Matcher\\RequestMatcherInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Router.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\contracts\\Service\\ServiceSubscriberInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ServiceSubscriberInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Routing\\Router.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\event-dispatcher\\EventDispatcherInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\event-dispatcher\\Debug\\TraceableEventDispatcherInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\event-dispatcher\\Debug\\TraceableEventDispatcher.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Debug\\TraceableEventDispatcher.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\event-dispatcher\\EventDispatcher.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\NullHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\CachedReader.php';
        };
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function getRemovedIds()
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    /**
     * Gets the public 'Endroid\QrCode\Writer\BinaryWriter' shared autowired service.
     *
     * @return \Endroid\QrCode\Writer\BinaryWriter
     */
    protected function getBinaryWriterService()
    {
        return $this->services['Endroid\QrCode\Writer\BinaryWriter'] = new \Endroid\QrCode\Writer\BinaryWriter();
    }

    /**
     * Gets the public 'Endroid\QrCode\Writer\DebugWriter' shared autowired service.
     *
     * @return \Endroid\QrCode\Writer\DebugWriter
     */
    protected function getDebugWriterService()
    {
        return $this->services['Endroid\QrCode\Writer\DebugWriter'] = new \Endroid\QrCode\Writer\DebugWriter();
    }

    /**
     * Gets the public 'Endroid\QrCode\Writer\EpsWriter' shared autowired service.
     *
     * @return \Endroid\QrCode\Writer\EpsWriter
     */
    protected function getEpsWriterService()
    {
        return $this->services['Endroid\QrCode\Writer\EpsWriter'] = new \Endroid\QrCode\Writer\EpsWriter();
    }

    /**
     * Gets the public 'Endroid\QrCode\Writer\PngWriter' shared autowired service.
     *
     * @return \Endroid\QrCode\Writer\PngWriter
     */
    protected function getPngWriterService()
    {
        return $this->services['Endroid\QrCode\Writer\PngWriter'] = new \Endroid\QrCode\Writer\PngWriter();
    }

    /**
     * Gets the public 'Endroid\QrCode\Writer\SvgWriter' shared autowired service.
     *
     * @return \Endroid\QrCode\Writer\SvgWriter
     */
    protected function getSvgWriterService()
    {
        return $this->services['Endroid\QrCode\Writer\SvgWriter'] = new \Endroid\QrCode\Writer\SvgWriter();
    }

    /**
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('event');
        $a->pushHandler(new \Monolog\Handler\NullHandler());

        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\EventDispatcher(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), $a);

        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['http_exception_listener'] ?? $this->load('getHttpExceptionListenerService.php'));
        }, 1 => 'onKernelException'), -2048);
        $instance->addListener('oneup_uploader.validation', array(0 => function () {
            return ($this->privates['oneup_uploader.validation_listener.max_size'] ?? ($this->privates['oneup_uploader.validation_listener.max_size'] = new \Oneup\UploaderBundle\EventListener\MaxSizeValidationListener()));
        }, 1 => 'onValidate'), 0);
        $instance->addListener('oneup_uploader.validation', array(0 => function () {
            return ($this->privates['oneup_uploader.validation_listener.allowed_mimetype'] ?? ($this->privates['oneup_uploader.validation_listener.allowed_mimetype'] = new \Oneup\UploaderBundle\EventListener\AllowedMimetypeAndExtensionValidationListener()));
        }, 1 => 'onValidate'), 0);
        $instance->addListener('oneup_uploader.validation', array(0 => function () {
            return ($this->privates['oneup_uploader.validation_listener.disallowed_mimetype'] ?? ($this->privates['oneup_uploader.validation_listener.disallowed_mimetype'] = new \Oneup\UploaderBundle\EventListener\DisallowedMimetypeValidationListener()));
        }, 1 => 'onValidate'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['App\Common\Handler\AccountVerificationHandler'] ?? $this->getAccountVerificationHandlerService());
        }, 1 => 'onKernelRequest'), 7);
        $instance->addListener('security.authentication.failure', array(0 => function () {
            return ($this->privates['App\Common\Handler\AuthenticationFailureListener'] ?? ($this->privates['App\Common\Handler\AuthenticationFailureListener'] = new \App\Common\Handler\AuthenticationFailureListener()));
        }, 1 => 'onAuthenticationFailure'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['App\Common\Handler\KernelResponseSubscriber'] ?? ($this->privates['App\Common\Handler\KernelResponseSubscriber'] = new \App\Common\Handler\KernelResponseSubscriber(true)));
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.view', array(0 => function () {
            return ($this->privates['App\Common\Handler\KernelViewSubscriber'] ?? ($this->privates['App\Common\Handler\KernelViewSubscriber'] = new \App\Common\Handler\KernelViewSubscriber(true)));
        }, 1 => 'onKernelView'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ($this->privates['App\Common\Handler\RequestTerminateSubscriber'] ?? ($this->privates['App\Common\Handler\RequestTerminateSubscriber'] = new \App\Common\Handler\RequestTerminateSubscriber()));
        }, 1 => 'onKernelTerminate'), -99999);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['App\Common\Handler\SystemMaintainModeHandler'] ?? $this->getSystemMaintainModeHandlerService());
        }, 1 => 'onKernelRequest'), 6);
        $instance->addListener('oneup_uploader.post_persist.default', array(0 => function () {
            return ($this->privates['App\Common\Service\FileUpload\UploadFileListener'] ?? $this->load('getUploadFileListenerService.php'));
        }, 1 => 'onFilePersist'), 0);
        $instance->addListener('oneup_uploader.post_persist.admin_article', array(0 => function () {
            return ($this->privates['App\Common\Service\FileUpload\UploadFileListener'] ?? $this->load('getUploadFileListenerService.php'));
        }, 1 => 'onArticleFilePersist'), 0);
        $instance->addListener('oneup_uploader.post_persist.identity_image', array(0 => function () {
            return ($this->privates['App\Common\Service\FileUpload\UploadFileListener'] ?? $this->load('getUploadFileListenerService.php'));
        }, 1 => 'onIdentityImagePersist'), 0);
        $instance->addListener('console.command', array(0 => function () {
            return ($this->privates['debug.dump_listener'] ?? $this->load('getDebug_DumpListenerService.php'));
        }, 1 => 'configure'), 1024);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'), -1024);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'), 16);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'), 256);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['resolve_controller_name_subscriber'] ?? $this->getResolveControllerNameSubscriberService());
        }, 1 => 'onKernelRequest'), 24);
        $instance->addListener('console.error', array(0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleError'), -128);
        $instance->addListener('console.terminate', array(0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleTerminate'), -128);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'), 128);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'), -1000);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['esi_listener'] ?? $this->getEsiListenerService());
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['fragment.listener'] ?? $this->getFragment_ListenerService());
        }, 1 => 'onKernelRequest'), 48);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['translator_listener'] ?? $this->getTranslatorListenerService());
        }, 1 => 'onKernelRequest'), 10);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['translator_listener'] ?? $this->getTranslatorListenerService());
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'), 2048);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'), 32);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'), -64);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('debug.security.authorization.vote', array(0 => function () {
            return ($this->privates['debug.security.voter.vote_listener'] ?? $this->load('getDebug_Security_Voter_VoteListenerService.php'));
        }, 1 => 'onVoterVote'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelRequest'), 8);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ($this->privates['sensio_framework_extra.controller.listener'] ?? $this->getSensioFrameworkExtra_Controller_ListenerService());
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ($this->privates['sensio_framework_extra.converter.listener'] ?? $this->getSensioFrameworkExtra_Converter_ListenerService());
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelController'), -128);
        $instance->addListener('kernel.view', array(0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelView'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.controller_arguments', array(0 => function () {
            return ($this->privates['sensio_framework_extra.security.listener'] ?? $this->getSensioFrameworkExtra_Security_ListenerService());
        }, 1 => 'onKernelControllerArguments'), 0);
        $instance->addListener('kernel.controller_arguments', array(0 => function () {
            return ($this->privates['framework_extra_bundle.event.is_granted'] ?? $this->getFrameworkExtraBundle_Event_IsGrantedService());
        }, 1 => 'onKernelControllerArguments'), 0);
        $instance->addListener('console.command', array(0 => function () {
            return ($this->privates['monolog.handler.console'] ?? ($this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())));
        }, 1 => 'onCommand'), 255);
        $instance->addListener('console.terminate', array(0 => function () {
            return ($this->privates['monolog.handler.console'] ?? ($this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())));
        }, 1 => 'onTerminate'), -255);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('console.error', array(0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'), 0);
        $instance->addListener('console.terminate', array(0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php'));
        }, 1 => 'logKernelException'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php'));
        }, 1 => 'onKernelException'), -128);

        return $instance;
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        $a = ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));

        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['controller_name_converter'] ?? ($this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1))))), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService())), $a), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.argument_resolver.request_attribute'] ?? $this->load('getDebug_ArgumentResolver_RequestAttributeService.php'));
            yield 1 => ($this->privates['debug.argument_resolver.request'] ?? $this->load('getDebug_ArgumentResolver_RequestService.php'));
            yield 2 => ($this->privates['debug.argument_resolver.session'] ?? $this->load('getDebug_ArgumentResolver_SessionService.php'));
            yield 3 => ($this->privates['debug.security.user_value_resolver'] ?? $this->load('getDebug_Security_UserValueResolverService.php'));
            yield 4 => ($this->privates['debug.argument_resolver.service'] ?? $this->load('getDebug_ArgumentResolver_ServiceService.php'));
            yield 5 => ($this->privates['debug.argument_resolver.default'] ?? $this->load('getDebug_ArgumentResolver_DefaultService.php'));
            yield 6 => ($this->privates['debug.argument_resolver.variadic'] ?? $this->load('getDebug_ArgumentResolver_VariadicService.php'));
        }, 7)), $a));
    }

    /**
     * Gets the public 'oneup_uploader.templating.uploader_helper' shared service.
     *
     * @return \Oneup\UploaderBundle\Templating\Helper\UploaderHelper
     */
    protected function getOneupUploader_Templating_UploaderHelperService()
    {
        return $this->services['oneup_uploader.templating.uploader_helper'] = new \Oneup\UploaderBundle\Templating\Helper\UploaderHelper(($this->services['router'] ?? $this->getRouterService()), $this->parameters['oneup_uploader.maxsize']);
    }

    /**
     * Gets the public 'oneup_uploader.twig.extension.uploader' shared service.
     *
     * @return \Oneup\UploaderBundle\Twig\Extension\UploaderExtension
     */
    protected function getOneupUploader_Twig_Extension_UploaderService()
    {
        return $this->services['oneup_uploader.twig.extension.uploader'] = new \Oneup\UploaderBundle\Twig\Extension\UploaderExtension(($this->services['oneup_uploader.templating.uploader_helper'] ?? $this->getOneupUploader_Templating_UploaderHelperService()));
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('router');
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? ($this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array()))));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
            'routing.loader' => array('services', 'routing.loader', 'getRouting_LoaderService.php', true),
        )))->withContext('router.default', $this), 'kernel::loadRoutes', array('cache_dir' => $this->targetDirs[0], 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'srcApp_KernelDevDebugContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'srcApp_KernelDevDebugContainerUrlMatcher', 'strict_requirements' => true, 'resource_type' => 'service'), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), $a);

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));

        return $instance;
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), false);
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($this->parameters['session.storage.options'], NULL, new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0)), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslatorService()
    {
        $this->services['translator'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
            'translation.loader.csv' => array('privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService.php', true),
            'translation.loader.dat' => array('privates', 'translation.loader.dat', 'getTranslation_Loader_DatService.php', true),
            'translation.loader.ini' => array('privates', 'translation.loader.ini', 'getTranslation_Loader_IniService.php', true),
            'translation.loader.json' => array('privates', 'translation.loader.json', 'getTranslation_Loader_JsonService.php', true),
            'translation.loader.mo' => array('privates', 'translation.loader.mo', 'getTranslation_Loader_MoService.php', true),
            'translation.loader.php' => array('privates', 'translation.loader.php', 'getTranslation_Loader_PhpService.php', true),
            'translation.loader.po' => array('privates', 'translation.loader.po', 'getTranslation_Loader_PoService.php', true),
            'translation.loader.qt' => array('privates', 'translation.loader.qt', 'getTranslation_Loader_QtService.php', true),
            'translation.loader.res' => array('privates', 'translation.loader.res', 'getTranslation_Loader_ResService.php', true),
            'translation.loader.xliff' => array('privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService.php', true),
            'translation.loader.yml' => array('privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService.php', true),
        )), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\IdentityTranslator()), 'zh_CN', array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yaml', 1 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => ($this->targetDirs[0].'/translations'), 'debug' => true, 'resource_files' => array('ar' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.ar.xlf')), 'az' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.az.xlf')), 'bg' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.bg.xlf')), 'ca' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.ca.xlf')), 'cs' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.cs.xlf')), 'da' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.da.xlf')), 'de' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.de.xlf')), 'el' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.el.xlf')), 'en' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.en.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\oneup\\uploader-bundle/Resources/translations\\OneupUploaderBundle.en.yml')), 'es' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.es.xlf')), 'fa' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.fa.xlf')), 'fr' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.fr.xlf')), 'gl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.gl.xlf')), 'he' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.he.xlf')), 'hr' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.hr.xlf')), 'hu' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.hu.xlf')), 'id' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.id.xlf')), 'it' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.it.xlf')), 'ja' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.ja.xlf')), 'lb' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.lb.xlf')), 'lt' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.lt.xlf')), 'lv' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.lv.xlf')), 'nb' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.nb.xlf')), 'nl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.nl.xlf')), 'nn' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.nn.xlf')), 'no' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.no.xlf')), 'pl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.pl.xlf')), 'pt_BR' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.pt_BR.xlf')), 'pt_PT' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.pt_PT.xlf')), 'ro' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.ro.xlf')), 'ru' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.ru.xlf')), 'sk' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.sk.xlf')), 'sl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.sl.xlf')), 'sr_Cyrl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.sr_Cyrl.xlf')), 'sr_Latn' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.sr_Latn.xlf')), 'sv' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.sv.xlf')), 'th' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.th.xlf')), 'tl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.tl.xlf')), 'tr' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.tr.xlf')), 'ua' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.ua.xlf')), 'vi' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.vi.xlf')), 'zh_CN' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.zh_CN.xlf'), 1 => ($this->targetDirs[3].'/translations\\OneupUploaderBundle.zh_CN.yaml'), 2 => ($this->targetDirs[3].'/translations\\messages.zh_CN.yaml')), 'zh' => array(0 => ($this->targetDirs[3].'\\vendor\\symfu\\simple-form-bundle\\src/Resources/translations\\validation-errors.zh.yaml')))));

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));
        $instance->setFallbackLocales(array(0 => 'zh_CN', 1 => 'zh_CN'));

        return $instance;
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = new \Symfony\Bundle\TwigBundle\Loader\NativeFilesystemLoader(array(), $this->targetDirs[3]);
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\debug-bundle/Resources/views'), 'Debug');
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\debug-bundle/Resources/views'), '!Debug');
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\web-profiler-bundle/Resources/views'), 'WebProfiler');
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\web-profiler-bundle/Resources/views'), '!WebProfiler');
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\framework-bundle/Resources/views'), 'Framework');
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\framework-bundle/Resources/views'), '!Framework');
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\security-bundle/Resources/views'), 'Security');
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\security-bundle/Resources/views'), '!Security');
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\twig-bundle/Resources/views'), 'Twig');
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\twig-bundle/Resources/views'), '!Twig');
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfu\\simple-form-bundle\\src/Resources/views'), 'SimpleForm');
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfu\\simple-form-bundle\\src/Resources/views'), '!SimpleForm');
        $a->addPath(($this->targetDirs[3].'/templates'));

        $this->services['twig'] = $instance = new \Twig\Environment($a, array('debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception::showAction', 'form_themes' => $this->parameters['twig.form.resources'], 'autoescape' => 'name', 'cache' => ($this->targetDirs[0].'/twig'), 'charset' => 'UTF-8', 'default_path' => ($this->targetDirs[3].'/templates'), 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $b = ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService());
        $c = ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
        $d = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $e = ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService());
        $f = ($this->services['router'] ?? $this->getRouterService());
        $g = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $g->setDisplayOptions(array('maxStringLength' => 4096, 'fileLinkFormat' => $e));
        $h = new \Symfony\Bridge\Twig\AppVariable();
        $h->setEnvironment('dev');
        $h->setDebug(true);
        if ($this->has('security.token_storage')) {
            $h->setTokenStorage(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));
        }
        if ($this->has('request_stack')) {
            $h->setRequestStack($d);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension(($this->services['var_dumper.cloner'] ?? $this->getVarDumper_ClonerService()), ($this->privates['var_dumper.html_dumper'] ?? $this->getVarDumper_HtmlDumperService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(new \Twig\Profiler\Profile(), $c));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), new \Symfony\Component\Asset\Context\RequestStackContext($d, '', false)), array())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($e, $this->targetDirs[3], 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($f));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($c, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($d, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService())));
        $instance->addExtension(new \App\Common\Twig\AppExtension(($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), ($this->privates['App\Common\Service\SystemSetting'] ?? $this->getSystemSettingService()), $f, $d));
        $instance->addExtension(new \App\Common\Twig\SecurityExtension($b));
        $instance->addExtension(new \App\Common\Twig\SourceCodeExtension());
        $instance->addExtension(new \App\Open\Twig\NavExtension($f));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($g));
        $instance->addExtension(new \Endroid\QrCodeBundle\Twig\QrCodeExtension(($this->privates['Endroid\QrCode\Factory\QrCodeFactory'] ?? $this->getQrCodeFactoryService()), $f));
        $instance->addExtension(($this->services['oneup_uploader.twig.extension.uploader'] ?? $this->getOneupUploader_Twig_Extension_UploaderService()));
        $instance->addGlobal('app', $h);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => array('privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService.php', true),
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => array('privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService.php', true),
        ))));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'var_dumper.cloner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMinDepth(1);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the private '.cache_connection.Jl101tm' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AbstractAdapter
     */
    protected function get_CacheConnection_Jl101tmService()
    {
        return $this->privates['.cache_connection.Jl101tm'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createConnection('redis://redis:140cc880790da5e9912114273cbc9129@127.0.0.1:6379/0', array('lazy' => true));
    }

    /**
     * Gets the private 'App\Common\Handler\AccountVerificationHandler' shared autowired service.
     *
     * @return \App\Common\Handler\AccountVerificationHandler
     */
    protected function getAccountVerificationHandlerService()
    {
        return $this->privates['App\Common\Handler\AccountVerificationHandler'] = new \App\Common\Handler\AccountVerificationHandler(($this->privates['App\Common\Service\SystemSetting'] ?? $this->getSystemSettingService()), ($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['session'] ?? $this->getSessionService()), ($this->privates['security.access_map'] ?? $this->getSecurity_AccessMapService()), true);
    }

    /**
     * Gets the private 'App\Common\Handler\SystemMaintainModeHandler' shared autowired service.
     *
     * @return \App\Common\Handler\SystemMaintainModeHandler
     */
    protected function getSystemMaintainModeHandlerService()
    {
        return $this->privates['App\Common\Handler\SystemMaintainModeHandler'] = new \App\Common\Handler\SystemMaintainModeHandler(($this->privates['App\Common\Service\SystemSetting'] ?? $this->getSystemSettingService()), ($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['session'] ?? $this->getSessionService()), ($this->privates['security.access_map'] ?? $this->getSecurity_AccessMapService()), true);
    }

    /**
     * Gets the private 'App\Common\Service\Cache\ChainCache' shared autowired service.
     *
     * @return \App\Common\Service\Cache\ChainCache
     */
    protected function getChainCacheService()
    {
        return $this->privates['App\Common\Service\Cache\ChainCache'] = new \App\Common\Service\Cache\ChainCache(array(0 => ($this->privates['app.cache.apcu'] ?? $this->getApp_Cache_ApcuService()), 1 => ($this->privates['app.cache.redis'] ?? $this->getApp_Cache_RedisService())));
    }

    /**
     * Gets the private 'App\Common\Service\SystemSetting' shared autowired service.
     *
     * @return \App\Common\Service\SystemSetting
     */
    protected function getSystemSettingService()
    {
        return $this->privates['App\Common\Service\SystemSetting'] = new \App\Common\Service\SystemSetting(($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()), ($this->privates['App\Common\Service\Cache\ChainCache'] ?? $this->getChainCacheService()));
    }

    /**
     * Gets the private 'Endroid\QrCode\Factory\QrCodeFactory' shared autowired service.
     *
     * @return \Endroid\QrCode\Factory\QrCodeFactory
     */
    protected function getQrCodeFactoryService()
    {
        $a = new \Endroid\QrCode\WriterRegistry();
        $a->addWriters(new RewindableGenerator(function () {
            yield 0 => ($this->services['Endroid\QrCode\Writer\BinaryWriter'] ?? ($this->services['Endroid\QrCode\Writer\BinaryWriter'] = new \Endroid\QrCode\Writer\BinaryWriter()));
            yield 1 => ($this->services['Endroid\QrCode\Writer\DebugWriter'] ?? ($this->services['Endroid\QrCode\Writer\DebugWriter'] = new \Endroid\QrCode\Writer\DebugWriter()));
            yield 2 => ($this->services['Endroid\QrCode\Writer\EpsWriter'] ?? ($this->services['Endroid\QrCode\Writer\EpsWriter'] = new \Endroid\QrCode\Writer\EpsWriter()));
            yield 3 => ($this->services['Endroid\QrCode\Writer\PngWriter'] ?? ($this->services['Endroid\QrCode\Writer\PngWriter'] = new \Endroid\QrCode\Writer\PngWriter()));
            yield 4 => ($this->services['Endroid\QrCode\Writer\SvgWriter'] ?? ($this->services['Endroid\QrCode\Writer\SvgWriter'] = new \Endroid\QrCode\Writer\SvgWriter()));
        }, 5));
        $a->addWriter(($this->services['Endroid\QrCode\Writer\BinaryWriter'] ?? ($this->services['Endroid\QrCode\Writer\BinaryWriter'] = new \Endroid\QrCode\Writer\BinaryWriter())));
        $a->addWriter(($this->services['Endroid\QrCode\Writer\DebugWriter'] ?? ($this->services['Endroid\QrCode\Writer\DebugWriter'] = new \Endroid\QrCode\Writer\DebugWriter())));
        $a->addWriter(($this->services['Endroid\QrCode\Writer\EpsWriter'] ?? ($this->services['Endroid\QrCode\Writer\EpsWriter'] = new \Endroid\QrCode\Writer\EpsWriter())));
        $a->addWriter(($this->services['Endroid\QrCode\Writer\PngWriter'] ?? ($this->services['Endroid\QrCode\Writer\PngWriter'] = new \Endroid\QrCode\Writer\PngWriter())));
        $a->addWriter(($this->services['Endroid\QrCode\Writer\SvgWriter'] ?? ($this->services['Endroid\QrCode\Writer\SvgWriter'] = new \Endroid\QrCode\Writer\SvgWriter())));

        return $this->privates['Endroid\QrCode\Factory\QrCodeFactory'] = new \Endroid\QrCode\Factory\QrCodeFactory(array('writer' => 'png', 'size' => 300, 'margin' => 0, 'foreground_color' => array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0), 'background_color' => array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0), 'error_correction_level' => 'low', 'encoding' => 'UTF-8', 'label' => NULL, 'label_font_size' => 20, 'label_alignment' => 'left', 'label_margin' => array('b' => 0), 'logo_path' => NULL, 'logo_width' => 150, 'logo_height' => 200, 'validate_result' => false, 'writer_options' => array('exclude_xml_declaration' => true)), $a);
    }

    /**
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), $this->load('getAnnotations_CacheService.php'), true);
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'app.cache.apcu' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ApcuAdapter
     */
    protected function getApp_Cache_ApcuService()
    {
        $this->privates['app.cache.apcu'] = $instance = new \Symfony\Component\Cache\Adapter\ApcuAdapter('6l-8OkT6pn', 1800, $this->getParameter('container.build_id'));

        $instance->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $instance;
    }

    /**
     * Gets the private 'app.cache.redis' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\RedisAdapter
     */
    protected function getApp_Cache_RedisService()
    {
        $this->privates['app.cache.redis'] = $instance = new \Symfony\Component\Cache\Adapter\RedisAdapter(($this->privates['.cache_connection.Jl101tm'] ?? $this->get_CacheConnection_Jl101tmService()), 'A0P0Sm065g', 1800, ($this->privates['cache.default_marshaller'] ?? ($this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $instance;
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ($this->privates['dependency_injection.config.container_parameters_resource_checker'] ?? ($this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this)));
            yield 1 => ($this->privates['config.resource.self_checking_resource_checker'] ?? ($this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()));
        }, 2));
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('php');
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? ($this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array()))));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $a, NULL, -1, true, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), true);
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter('phpstorm://open?url=file://%f&line=%l');
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->privates['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.security.voter.security.access.authenticated_voter'] ?? $this->load('getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php'));
            yield 1 => ($this->privates['debug.security.voter.security.access.role_hierarchy_voter'] ?? $this->load('getDebug_Security_Voter_Security_Access_RoleHierarchyVoterService.php'));
        }, 2), 'affirmative', false, true));
    }

    /**
     * Gets the private 'debug.security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener
     */
    protected function getDebug_Security_FirewallService()
    {
        return $this->privates['debug.security.firewall'] = new \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
            'security.firewall.map.context.admin' => array('privates', 'security.firewall.map.context.admin', 'getSecurity_Firewall_Map_Context_AdminService.php', true),
            'security.firewall.map.context.dev' => array('privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService.php', true),
            'security.firewall.map.context.main' => array('privates', 'security.firewall.map.context.main', 'getSecurity_Firewall_Map_Context_MainService.php', true),
        )), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.Iy.T22O'] ?? ($this->privates['.security.request_matcher.Iy.T22O'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')));
            yield 'security.firewall.map.context.admin' => ($this->privates['.security.request_matcher.TlEZAKG'] ?? ($this->privates['.security.request_matcher.TlEZAKG'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/')));
            yield 'security.firewall.map.context.main' => ($this->privates['.security.request_matcher.3UEFixr'] ?? ($this->privates['.security.request_matcher.3UEFixr'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/')));
        }, 3)), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /**
     * Gets the private 'esi_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SurrogateListener
     */
    protected function getEsiListenerService()
    {
        return $this->privates['esi_listener'] = new \Symfony\Component\HttpKernel\EventListener\SurrogateListener(($this->privates['esi'] ?? ($this->privates['esi'] = new \Symfony\Component\HttpKernel\HttpCache\Esi())));
    }

    /**
     * Gets the private 'fragment.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener
     */
    protected function getFragment_ListenerService()
    {
        return $this->privates['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener(($this->privates['uri_signer'] ?? ($this->privates['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner($this->getEnv('APP_SECRET')))), '/_fragment');
    }

    /**
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->privates['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())));
    }

    /**
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->privates['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'zh_CN', ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->privates['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'\\log/dev.log'), 100, true, NULL);

        $instance->pushProcessor(new \Monolog\Processor\PsrLogMessageProcessor());

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_LoggerService()
    {
        $this->privates['monolog.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? ($this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array()))));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->privates['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? ($this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array()))));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->privates['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? ($this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array()))));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /**
     * Gets the private 'parameter_bag' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag
     */
    protected function getParameterBagService()
    {
        return $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this);
    }

    /**
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->privates['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['controller_name_converter'] ?? ($this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1))))));
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), $this->targetDirs[3], true);
    }

    /**
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    protected function getSecurity_AccessMapService()
    {
        $this->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/error/.*'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/test/'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/common/test/'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/login'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/passport/register'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/passport/login'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/passport/activation/'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/passport/tool'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/passport/protect'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/passport/question'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/passport/registerpassword-reset'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/common/articles'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/common/recaptcha'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/common/sms-verifier/'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/common/user/register'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/common/user/welcome'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/common/user/activate/.+'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/login'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/common/finance/balance/add-balance/alipay/notify'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/reseller[\\/]*$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/reseller/home/'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/open[\\/]*$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/supplier[\\/]*$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/passport/.*'), array(0 => 'IS_AUTHENTICATED_FULLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/common/uploader/*'), array(0 => 'IS_AUTHENTICATED_FULLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin'), array(0 => 'ROLE_ADMIN_ADMINISTRATOR'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/open/.*'), array(0 => 'ROLE_OPEN_PLATFORM'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/reseller/.*'), array(0 => 'ROLE_RESELLER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/supplier/.*'), array(0 => 'ROLE_SUPPLIER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/.*'), array(0 => 'ROLE_USER'), NULL);

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.dao.admin'] ?? $this->load('getSecurity_Authentication_Provider_Dao_AdminService.php'));
            yield 1 => ($this->privates['security.authentication.provider.anonymous.admin'] ?? ($this->privates['security.authentication.provider.anonymous.admin'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
            yield 2 => ($this->privates['security.authentication.provider.dao.main'] ?? $this->load('getSecurity_Authentication_Provider_Dao_MainService.php'));
            yield 3 => ($this->privates['security.authentication.provider.anonymous.main'] ?? ($this->privates['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
        }, 4), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->privates['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));

        $instance->registerListener('admin', 'admin_logout', 'logout', '_csrf_token', NULL, NULL);
        $instance->registerListener('main', 'passport_logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /**
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy($this->parameters['security.role_hierarchy.roles']);
    }

    /**
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->privates['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        $a = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(NULL, NULL), 0, 'doctrine.orm');
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $this->privates['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($a, true);
    }

    /**
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->privates['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), NULL, ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()), ($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->privates['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel', 1))), ($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
            'initialized_session' => array('services', 'session', NULL, false),
            'session' => array('services', 'session', 'getSessionService', false),
        )));
    }

    /**
     * Gets the private 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->privates['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'var_dumper.html_dumper' shared service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\HtmlDumper
     */
    protected function getVarDumper_HtmlDumperService()
    {
        $this->privates['var_dumper.html_dumper'] = $instance = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 0);

        $instance->setDisplayOptions(array('fileLinkFormat' => ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())));

        return $instance;
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array(
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.cache_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'default_upload_save_path' => false,
        'admin_article_upload_save_path' => false,
        'identity_image_upload_save_path' => false,
        'simple_pay' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'translator.default_path' => false,
        'debug.container.dump' => false,
        'swiftmailer.spool.mxhichina.file.path' => false,
        'twig.default_path' => false,
        'oneup_uploader.chunks' => false,
        'oneup_uploader.orphanage' => false,
        'oneup_uploader.config.default' => false,
        'oneup_uploader.config.admin_article' => false,
        'oneup_uploader.config.identity_image' => false,
        'oneup_uploader.config' => false,
    );
    private $dynamicParameters = array();

    /**
     * Computes a dynamic parameter.
     *
     * @param string $name The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'\\src'); break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.cache_dir': $value = $this->targetDirs[0]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'\\log'); break;
            case 'kernel.bundles_metadata': $value = array(
                'WebServerBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\web-server-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebServerBundle',
                ),
                'DebugBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\debug-bundle'),
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ),
                'WebProfilerBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\web-profiler-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ),
                'FrameworkBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'SecurityBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'MonologBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'SwiftmailerBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'TwigBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'SimpleRecordBundle' => array(
                    'path' => ($this->targetDirs[3].'\\src\\Common\\Bundle\\SimpleRecord'),
                    'namespace' => 'App\\Common\\Bundle\\SimpleRecord',
                ),
                'EndroidQrCodeBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\endroid\\qr-code-bundle\\src'),
                    'namespace' => 'Endroid\\QrCodeBundle',
                ),
                'SimplePayBundle' => array(
                    'path' => ($this->targetDirs[3].'\\src\\Common\\Bundle\\SimplePay'),
                    'namespace' => 'App\\Common\\Bundle\\SimplePay',
                ),
                'SimpleFormBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\symfu\\simple-form-bundle\\src'),
                    'namespace' => 'Symfu\\SimpleFormBundle',
                ),
                'OneupUploaderBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\oneup\\uploader-bundle'),
                    'namespace' => 'Oneup\\UploaderBundle',
                ),
                'OneupFlysystemBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\oneup\\flysystem-bundle'),
                    'namespace' => 'Oneup\\FlysystemBundle',
                ),
            ); break;
            case 'default_upload_save_path': $value = ($this->targetDirs[3].'/web/uploads/files'); break;
            case 'admin_article_upload_save_path': $value = ($this->targetDirs[3].'/web/uploads/article'); break;
            case 'identity_image_upload_save_path': $value = ($this->targetDirs[3].'/web/uploads/identity'); break;
            case 'simple_pay': $value = array(
                'alipay' => array(
                    'app_id' => '2016082000295641',
                    'notify_url' => 'http://abc.com/notify.php',
                    'return_url' => 'http://abc.com/return.php',
                    'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAgSePE0b15i1CwJTDUyX6jPjOSCRN5pYCYFToTL6lNvYFjd+6p5rnv2Y+A0FcxM3t+T1oC3BEMxoKw461TncX8FMBJuWbAXMD8lvFMod2sV4PNmk1NcrRjpwvuUJKwaSC6A5J/SqA0B80Tdw1gjiLLb859I0nn1jyhF1FkWhlOnn7ibyfO7h5SAEZbDtlzlc9UhikWAkU7ToJuTlWOGuCZYz9jAv+ibj/ALH7ABZq5KwgBYCrECdEmfAmJUqT+zRmvhgvEI0dIk0pYNj/Mg6upuYOd4mEAvuWwyktzbPYvM9Ln1YK8NlQg1gWbBT1z6akxgaXM187myzZXb1KNzRnMwIDAQAB',
                    'private_key' => 'MIIEowIBAAKCAQEA2VTIqO58JLPMSh6R6EBUvaLQBqDH5TvqJkxPdD4XVZO9uQ3JPxsKMr1Lt8U7cYOrsoYb7XV5/UgoVhuK1w/T1bjtK7AnL7PEJ8HcgGuLiP5UMvVW3iOWf0TwUrHp05oadE9Y6o0muFriPl6aUIf9hzCFPAC6RWHyJeqp6bAuY04wFNl6AThCV0JQlaH9/2iI/p8ff7gnjlkFnFkrjMOyQIS/084Bib5AsCKBn6T3Hn27gqkBDLRjgpUBQhvcgmb9oNuI39sL7sAmcIdNhSyjUPlN48JxHua9vHK4Fn2ZYg4c83w9cOBbOt56KW4kpaknxyJKyEIXyfDGq8BmJq1poQIDAQABAoIBAHO/S/9sxIFnoO34ygy/9mHpTJG7H7te5Z3wFoD6cMMLJIhiZ0RMymmrl6AQU1BpqBA0jLszTf0vaQwzLwbLTy8MhoQ2FSi6vUXPYfijTnVvvrhFIja9DXJK7ROd3cLs2BoKCHkjI/Qbs1M0X0t0ofpWRR9n480AFU9MY6IqSwpnpsDIVrGz8hGYB6d10bweTRq54ifn1Hh1XcI2p7XlQfO8ZaetSccW01ztER/lgZugla/9sq5NubFPcGrQXCzzVBqoLrH+ZDKjYi6fkGixX4X9GaIGKKqw/nzfouHv+jhyne0p+MTYMFx2t9V1+QakHnkDiile+5c/DAe9pvcQruECgYEA7jeESc2cLurrdoElt7XcMRO+NhtnE5CZGgtUQrOyPzK9Hth3ZfXE4Bm1xgUD/gedXkKT9hru9vLSrvi3j27NsKB9IIyEKlFBJxNlUEHHG7eaeUqUKsr5s16J2aNwq3qt2osxS9szrgohWWU0TahcCsVLoO9WMErqWHrGzhUKlMMCgYEA6Y4gvImqt45L/ODPpK54JnJd+LFmwX3iBgg3AQwjSa41wITo/eK2PB9toJO3FSC3wFk6okwRwrQwJhZ0vNBcVFnCJT5p58TAvLGrxA2UDruaVHVF5q5VECH1Ez7eBG6WQKYUGPbkcEBaZ52TNpiirtYNU1L1I3mqlGXUOjZtkcsCgYBxjmNwbyQ5tWDDX/Mj7PxnJLsyvcNYL0DcinQDS/f3am9+6b+ZChxsm7TsDW4GxYh964zu743kiIJoSEXwiOhif07GmlVSeuNtBjDwnjqU+uQXV7bj41g+6h0ac2/9PoDrwhigyYCMQWX+YGEbd9tQgxZ3REA4yy2FOhnVGXCu0wKBgQCnlW0V+648kWUi6Wj04J+j7rJRDXIO6rWw4FofbUcwykkVgAjyi6d5Uo/GBdf72AMhiKUS6YRg8gwOeFSBWvy1JcayFKvHOx2VB+OZBKk1PRXK/m8OzA6LSeJhUd3azkMP1ltbYmSdyv9Tk/Sa20D4NO1Q2Zi+QMHOQ5bZwk4yqwKBgG1JaBb1BqPktRZbfQnWE+mzxzGY2DVRcLzlmgWaz0D4xtbeLut5siKVNxcP+FfNxGP5f0J62xM+TcxZ8tP6Vab+G9rjnYeKzvzKmk8ecc342YlhW6Q+kIaeh5cdRSxVDvcl2ppA+QMIJO26d4N/Xn/EQE7Vu10DB+9EUbQdtGE/',
                    'log' => array(
                        'file' => ($this->targetDirs[3].'/var/log/alipay.log'),
                        'level' => 'info',
                        'type' => 'single',
                        'max_file' => 30,
                    ),
                    'http' => array(
                        'timeout' => 5.0,
                        'connect_timeout' => 5.0,
                    ),
                    'mode' => 'dev',
                ),
                'wechat' => array(
                    'appid' => 'wxb3fxxxxxxxxxxx',
                    'app_id' => 'wxb3fxxxxxxxxxxx',
                    'miniapp_id' => 'wxb3fxxxxxxxxxxx',
                    'mch_id' => '14577xxxx',
                    'key' => 'mF2suE9sU6Mk1Cxxxxxxxxxxx',
                    'notify_url' => 'http://abc.com/notify.php',
                    'cert_client' => './cert/apiclient_cert.pem',
                    'cert_key' => './cert/apiclient_key.pem',
                    'log' => array(
                        'file' => ($this->targetDirs[3].'/var/log/wechat.log'),
                        'level' => 'info',
                        'type' => 'single',
                        'max_file' => 30,
                    ),
                    'http' => array(
                        'timeout' => 5.0,
                        'connect_timeout' => 5.0,
                    ),
                    'mode' => 'dev',
                ),
            ); break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDirs[0].'/sessions'); break;
            case 'translator.default_path': $value = ($this->targetDirs[3].'/translations'); break;
            case 'debug.container.dump': $value = ($this->targetDirs[0].'/srcApp_KernelDevDebugContainer.xml'); break;
            case 'swiftmailer.spool.mxhichina.file.path': $value = ($this->targetDirs[0].'/swiftmailer/spool/mxhichina'); break;
            case 'twig.default_path': $value = ($this->targetDirs[3].'/templates'); break;
            case 'oneup_uploader.chunks': $value = array(
                'maxage' => 604800,
                'storage' => array(
                    'type' => 'filesystem',
                    'filesystem' => NULL,
                    'directory' => ($this->targetDirs[0].'/uploader/chunks'),
                    'stream_wrapper' => NULL,
                    'sync_buffer_size' => '100K',
                    'prefix' => 'chunks',
                ),
                'load_distribution' => true,
            ); break;
            case 'oneup_uploader.orphanage': $value = array(
                'maxage' => 604800,
                'directory' => ($this->targetDirs[0].'/uploader/orphanage'),
            ); break;
            case 'oneup_uploader.config.default': $value = array(
                'frontend' => 'dropzone',
                'max_size' => 10240000,
                'namer' => 'App\\Common\\Service\\FileUpload\\UploadFileNamer',
                'route_prefix' => '/uploads/files',
                'endpoints' => array(
                    'upload' => '/common/uploader/default',
                    'progress' => NULL,
                    'cancel' => NULL,
                ),
                'storage' => array(
                    'type' => 'flysystem',
                    'directory' => ($this->targetDirs[3].'/web/uploads/files'),
                    'filesystem' => 'oneup_flysystem.default_filesystem',
                    'service' => NULL,
                    'stream_wrapper' => NULL,
                    'sync_buffer_size' => '100K',
                ),
                'allowed_mimetypes' => array(
                    'image/jpeg' => array(
                        0 => 'jpg',
                        1 => 'jpeg',
                        2 => 'jpe',
                    ),
                    'image/png' => array(
                        0 => 'png',
                    ),
                    'image/gif' => array(
                        0 => 'gif',
                    ),
                    'image/zip' => array(
                        0 => 'zip',
                    ),
                    'image/doc' => array(
                        0 => 'doc',
                    ),
                    'image/pdf' => array(
                        0 => 'pdf',
                    ),
                    'image/txt' => array(
                        0 => 'txt',
                    ),
                    'image/xls' => array(
                        0 => 'xls',
                    ),
                ),
                'custom_frontend' => array(
                    'name' => NULL,
                    'class' => NULL,
                ),
                'disallowed_mimetypes' => array(

                ),
                'error_handler' => NULL,
                'use_orphanage' => false,
                'enable_progress' => false,
                'enable_cancelation' => false,
                'root_folder' => false,
            ); break;
            case 'oneup_uploader.config.admin_article': $value = array(
                'frontend' => 'dropzone',
                'max_size' => 5242880,
                'namer' => 'App\\Common\\Service\\FileUpload\\UploadFileNamer',
                'route_prefix' => '/uploads/article',
                'endpoints' => array(
                    'upload' => '/admin/uploader/article',
                    'progress' => NULL,
                    'cancel' => NULL,
                ),
                'storage' => array(
                    'type' => 'flysystem',
                    'directory' => ($this->targetDirs[3].'/web/uploads/article'),
                    'filesystem' => 'oneup_flysystem.admin_article_filesystem',
                    'service' => NULL,
                    'stream_wrapper' => NULL,
                    'sync_buffer_size' => '100K',
                ),
                'allowed_mimetypes' => array(
                    'image/jpeg' => array(
                        0 => 'jpg',
                        1 => 'jpeg',
                        2 => 'jpe',
                    ),
                    'image/png' => array(
                        0 => 'png',
                    ),
                    'image/gif' => array(
                        0 => 'gif',
                    ),
                    'image/bmp' => array(
                        0 => 'bmp',
                    ),
                ),
                'custom_frontend' => array(
                    'name' => NULL,
                    'class' => NULL,
                ),
                'disallowed_mimetypes' => array(

                ),
                'error_handler' => NULL,
                'use_orphanage' => false,
                'enable_progress' => false,
                'enable_cancelation' => false,
                'root_folder' => false,
            ); break;
            case 'oneup_uploader.config.identity_image': $value = array(
                'frontend' => 'dropzone',
                'max_size' => 10240000,
                'namer' => 'App\\Common\\Service\\FileUpload\\UploadFileNamer',
                'route_prefix' => '/uploads/identity',
                'endpoints' => array(
                    'upload' => '/common/uploader/identity',
                    'progress' => NULL,
                    'cancel' => NULL,
                ),
                'storage' => array(
                    'type' => 'flysystem',
                    'directory' => ($this->targetDirs[3].'/web/uploads/identity'),
                    'filesystem' => 'oneup_flysystem.identity_image_filesystem',
                    'service' => NULL,
                    'stream_wrapper' => NULL,
                    'sync_buffer_size' => '100K',
                ),
                'allowed_mimetypes' => array(
                    'image/jpeg' => array(
                        0 => 'jpg',
                        1 => 'jpeg',
                        2 => 'jpe',
                    ),
                    'image/png' => array(
                        0 => 'png',
                    ),
                    'image/gif' => array(
                        0 => 'gif',
                    ),
                    'image/bmp' => array(
                        0 => 'bmp',
                    ),
                ),
                'custom_frontend' => array(
                    'name' => NULL,
                    'class' => NULL,
                ),
                'disallowed_mimetypes' => array(

                ),
                'error_handler' => NULL,
                'use_orphanage' => false,
                'enable_progress' => false,
                'enable_cancelation' => false,
                'root_folder' => false,
            ); break;
            case 'oneup_uploader.config': $value = array(
                'mappings' => array(
                    'default' => array(
                        'frontend' => 'dropzone',
                        'max_size' => 10240000,
                        'namer' => 'App\\Common\\Service\\FileUpload\\UploadFileNamer',
                        'route_prefix' => '/uploads/files',
                        'endpoints' => array(
                            'upload' => '/common/uploader/default',
                            'progress' => NULL,
                            'cancel' => NULL,
                        ),
                        'storage' => array(
                            'type' => 'flysystem',
                            'directory' => ($this->targetDirs[3].'/web/uploads/files'),
                            'filesystem' => 'oneup_flysystem.default_filesystem',
                            'service' => NULL,
                            'stream_wrapper' => NULL,
                            'sync_buffer_size' => '100K',
                        ),
                        'allowed_mimetypes' => array(
                            'image/jpeg' => array(
                                0 => 'jpg',
                                1 => 'jpeg',
                                2 => 'jpe',
                            ),
                            'image/png' => array(
                                0 => 'png',
                            ),
                            'image/gif' => array(
                                0 => 'gif',
                            ),
                            'image/zip' => array(
                                0 => 'zip',
                            ),
                            'image/doc' => array(
                                0 => 'doc',
                            ),
                            'image/pdf' => array(
                                0 => 'pdf',
                            ),
                            'image/txt' => array(
                                0 => 'txt',
                            ),
                            'image/xls' => array(
                                0 => 'xls',
                            ),
                        ),
                        'custom_frontend' => array(
                            'name' => NULL,
                            'class' => NULL,
                        ),
                        'disallowed_mimetypes' => array(

                        ),
                        'error_handler' => NULL,
                        'use_orphanage' => false,
                        'enable_progress' => false,
                        'enable_cancelation' => false,
                        'root_folder' => false,
                    ),
                    'admin_article' => array(
                        'frontend' => 'dropzone',
                        'max_size' => 5242880,
                        'namer' => 'App\\Common\\Service\\FileUpload\\UploadFileNamer',
                        'route_prefix' => '/uploads/article',
                        'endpoints' => array(
                            'upload' => '/admin/uploader/article',
                            'progress' => NULL,
                            'cancel' => NULL,
                        ),
                        'storage' => array(
                            'type' => 'flysystem',
                            'directory' => ($this->targetDirs[3].'/web/uploads/article'),
                            'filesystem' => 'oneup_flysystem.admin_article_filesystem',
                            'service' => NULL,
                            'stream_wrapper' => NULL,
                            'sync_buffer_size' => '100K',
                        ),
                        'allowed_mimetypes' => array(
                            'image/jpeg' => array(
                                0 => 'jpg',
                                1 => 'jpeg',
                                2 => 'jpe',
                            ),
                            'image/png' => array(
                                0 => 'png',
                            ),
                            'image/gif' => array(
                                0 => 'gif',
                            ),
                            'image/bmp' => array(
                                0 => 'bmp',
                            ),
                        ),
                        'custom_frontend' => array(
                            'name' => NULL,
                            'class' => NULL,
                        ),
                        'disallowed_mimetypes' => array(

                        ),
                        'error_handler' => NULL,
                        'use_orphanage' => false,
                        'enable_progress' => false,
                        'enable_cancelation' => false,
                        'root_folder' => false,
                    ),
                    'identity_image' => array(
                        'frontend' => 'dropzone',
                        'max_size' => 10240000,
                        'namer' => 'App\\Common\\Service\\FileUpload\\UploadFileNamer',
                        'route_prefix' => '/uploads/identity',
                        'endpoints' => array(
                            'upload' => '/common/uploader/identity',
                            'progress' => NULL,
                            'cancel' => NULL,
                        ),
                        'storage' => array(
                            'type' => 'flysystem',
                            'directory' => ($this->targetDirs[3].'/web/uploads/identity'),
                            'filesystem' => 'oneup_flysystem.identity_image_filesystem',
                            'service' => NULL,
                            'stream_wrapper' => NULL,
                            'sync_buffer_size' => '100K',
                        ),
                        'allowed_mimetypes' => array(
                            'image/jpeg' => array(
                                0 => 'jpg',
                                1 => 'jpeg',
                                2 => 'jpe',
                            ),
                            'image/png' => array(
                                0 => 'png',
                            ),
                            'image/gif' => array(
                                0 => 'gif',
                            ),
                            'image/bmp' => array(
                                0 => 'bmp',
                            ),
                        ),
                        'custom_frontend' => array(
                            'name' => NULL,
                            'class' => NULL,
                        ),
                        'disallowed_mimetypes' => array(

                        ),
                        'error_handler' => NULL,
                        'use_orphanage' => false,
                        'enable_progress' => false,
                        'enable_cancelation' => false,
                        'root_folder' => false,
                    ),
                ),
                'chunks' => array(
                    'maxage' => 604800,
                    'storage' => array(
                        'type' => 'filesystem',
                        'filesystem' => NULL,
                        'directory' => ($this->targetDirs[0].'/uploader/chunks'),
                        'stream_wrapper' => NULL,
                        'sync_buffer_size' => '100K',
                        'prefix' => 'chunks',
                    ),
                    'load_distribution' => true,
                ),
                'orphanage' => array(
                    'maxage' => 604800,
                    'directory' => ($this->targetDirs[0].'/uploader/orphanage'),
                ),
                'twig' => true,
            ); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'src',
            'kernel.bundles' => array(
                'WebServerBundle' => 'Symfony\\Bundle\\WebServerBundle\\WebServerBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'SimpleRecordBundle' => 'App\\Common\\Bundle\\SimpleRecord\\SimpleRecordBundle',
                'EndroidQrCodeBundle' => 'Endroid\\QrCodeBundle\\EndroidQrCodeBundle',
                'SimplePayBundle' => 'App\\Common\\Bundle\\SimplePay\\SimplePayBundle',
                'SimpleFormBundle' => 'Symfu\\SimpleFormBundle\\SimpleFormBundle',
                'OneupUploaderBundle' => 'Oneup\\UploaderBundle\\OneupUploaderBundle',
                'OneupFlysystemBundle' => 'Oneup\\FlysystemBundle\\OneupFlysystemBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'srcApp_KernelDevDebugContainer',
            'container.dumper.inline_class_loader' => true,
            'admin_menus' => array(
                'dashboard' => array(
                    'name' => '首页',
                    'url' => '/admin/dashboard',
                ),
                'user-management' => array(
                    'name' => '用户管理',
                    'items' => array(
                        0 => array(
                            'name' => '狐豆通行证管理',
                            'icon' => 'layui-icon-chart',
                            'items' => array(
                                0 => array(
                                    'name' => '狐豆通信证管理',
                                    'url' => '/admin/users/pass-management',
                                    'icon' => '',
                                ),
                                1 => array(
                                    'name' => '平台账户开通记录',
                                    'url' => '/admin/users/open-account-log',
                                    'icon' => '',
                                ),
                                2 => array(
                                    'name' => '通行证冻结/解冻记录',
                                    'url' => '/admin/users/account-status-log?platform_id=0',
                                    'icon' => '',
                                ),
                            ),
                        ),
                        1 => array(
                            'name' => '代理商平台账户',
                            'icon' => 'layui-icon-chart',
                            'items' => array(
                                0 => array(
                                    'name' => '代理商平台账户',
                                    'url' => '/admin/users/get-agent-account',
                                    'icon' => '',
                                ),
                                1 => array(
                                    'name' => '定价分组管理',
                                    'url' => '/admin/users/set-price-group',
                                    'icon' => '',
                                ),
                                2 => array(
                                    'name' => '代理商可用服务分组',
                                    'url' => '/admin/users/service-group',
                                    'icon' => '',
                                ),
                                3 => array(
                                    'name' => '账户冻结/解冻记录',
                                    'url' => '/admin/users/account-status-log?platform_id=5',
                                    'icon' => '',
                                ),
                            ),
                        ),
                        2 => array(
                            'name' => '供应商平台账户',
                            'icon' => 'layui-icon-chart',
                            'items' => array(
                                0 => array(
                                    'name' => '供应商平台账户',
                                    'url' => '/admin/users/get-supplier-account',
                                    'icon' => '',
                                ),
                                1 => array(
                                    'name' => '账户冻结/解冻记录',
                                    'url' => '/admin/users/account-status-log?platform_id=3',
                                    'icon' => '',
                                ),
                            ),
                        ),
                    ),
                ),
                'order-management' => array(
                    'name' => '订单管理',
                    'items' => array(
                        0 => array(
                            'name' => '手机话费充值订单',
                            'icon' => 'layui-icon-chart',
                            'items' => array(
                                0 => array(
                                    'name' => '手机话费充值主订单',
                                    'url' => '/admin/orders/recharge?product_cate_id=1',
                                    'icon' => '',
                                    'cate_id' => 1,
                                    'action' => 'recharge',
                                ),
                                1 => array(
                                    'name' => 'SUP订单',
                                    'url' => '/admin/orders/suppliers?product_cate_id=1',
                                    'icon' => '',
                                    'cate_id' => 1,
                                    'action' => 'suppliers',
                                ),
                            ),
                        ),
                        1 => array(
                            'name' => '固话宽带充值订单',
                            'icon' => 'layui-icon-rmb',
                            'items' => array(
                                0 => array(
                                    'name' => '固话宽带充值主订单',
                                    'url' => '/admin/orders/recharge?product_cate_id=10',
                                    'icon' => '',
                                    'cate_id' => 10,
                                    'action' => 'recharge',
                                ),
                                1 => array(
                                    'name' => 'SUP订单',
                                    'url' => '/admin/orders/suppliers?product_cate_id=10',
                                    'icon' => '',
                                    'cate_id' => 10,
                                    'action' => 'suppliers',
                                ),
                            ),
                        ),
                        2 => array(
                            'name' => '腾讯业务充值订单',
                            'icon' => 'layui-icon-read',
                            'items' => array(
                                0 => array(
                                    'name' => '腾讯业务充值主订单',
                                    'url' => '/admin/orders/recharge?product_cate_id=3',
                                    'icon' => '',
                                    'cate_id' => 3,
                                    'action' => 'recharge',
                                ),
                                1 => array(
                                    'name' => 'SUP订单',
                                    'url' => '/admin/orders/suppliers?product_cate_id=3',
                                    'icon' => '',
                                    'cate_id' => 3,
                                    'action' => 'suppliers',
                                ),
                            ),
                        ),
                    ),
                ),
                'product-management' => array(
                    'name' => '商品管理',
                    'items' => array(
                        0 => array(
                            'name' => '代理商平台商品管理',
                            'icon' => 'fa-creative-commons',
                            'items' => array(
                                0 => array(
                                    'name' => '手机话费充值商品',
                                    'route' => 'admin_product_management_mobile_index',
                                    'icon' => 'fa-list-ul',
                                ),
                                1 => array(
                                    'name' => '手机流量充值商品',
                                    'route' => 'admin_product_management_flow_index',
                                    'icon' => 'fa-plus-circle',
                                ),
                                2 => array(
                                    'name' => '固话宽带充值商品',
                                    'route' => 'admin_product_management_telephone_index',
                                    'icon' => 'fa-plus-circle',
                                ),
                                3 => array(
                                    'name' => '腾讯业务充值商品',
                                    'route' => 'admin_product_management_tencent_index',
                                    'icon' => 'fa-plus-circle',
                                ),
                            ),
                        ),
                        1 => array(
                            'name' => '特殊售价用户管理',
                            'icon' => 'fa-creative-commons',
                            'items' => array(
                                0 => array(
                                    'name' => '特殊售价用户列表',
                                    'route' => 'admin_product_management_special_user_settings',
                                    'icon' => 'fa-list-ul',
                                ),
                            ),
                        ),
                        2 => array(
                            'name' => '批量定时改价',
                            'icon' => 'fa-creative-commons',
                            'items' => array(
                                0 => array(
                                    'name' => '批量定时改价记录',
                                    'route' => 'admin_product_management_mobile_scheduled_price_changes',
                                    'icon' => 'fa-list-ul',
                                ),
                            ),
                        ),
                        3 => array(
                            'name' => '商品属性管理',
                            'icon' => 'fa-shopping-cart',
                            'items' => array(
                                0 => array(
                                    'name' => '手机号码归属地管理',
                                    'route' => 'admin_phone_number_attributions_index',
                                    'icon' => 'fa-list-ol',
                                ),
                                1 => array(
                                    'name' => '地区及区号管理',
                                    'route' => 'admin_regions_index',
                                    'icon' => 'fa-certificate',
                                ),
                                2 => array(
                                    'name' => '虚拟运营商管理',
                                    'route' => 'admin_virtual_netowork_operators_index',
                                    'icon' => 'fa-certificate',
                                ),
                                3 => array(
                                    'name' => '腾讯业务品类管理',
                                    'route' => 'admin_tencent_product_categories_index',
                                    'icon' => 'fa-certificate',
                                ),
                            ),
                        ),
                    ),
                ),
                'audit-management' => array(
                    'name' => '平台审核',
                    'items' => array(
                        0 => array(
                            'name' => '用户信息审核',
                            'icon' => 'fa-user-plus',
                            'items' => array(
                                0 => array(
                                    'name' => '开户申请审核',
                                    'url' => '/admin/audit/account-application',
                                    'icon' => 'fa-yen',
                                ),
                                1 => array(
                                    'name' => '实名认证',
                                    'url' => '/admin/audit/identities',
                                    'icon' => 'fa-check-square',
                                ),
                            ),
                        ),
                        1 => array(
                            'name' => '供应商货源审核',
                            'icon' => 'fa-check-circle',
                            'items' => array(
                                0 => array(
                                    'name' => '手机话费充值类',
                                    'url' => '/admin/audit/product-supplies?product_cate_id=1',
                                    'icon' => 'fa-question-circle',
                                ),
                                1 => array(
                                    'name' => '固话宽带充值类',
                                    'url' => '/admin/audit/product-supplies?product_cate_id=10',
                                    'icon' => 'fa-check-circle',
                                ),
                                2 => array(
                                    'name' => '腾讯业务充值类',
                                    'url' => '/admin/audit/product-supplies?product_cate_id=3',
                                    'icon' => 'fa-check-circle',
                                ),
                            ),
                        ),
                        2 => array(
                            'name' => '供应商余额提现审核',
                            'icon' => 'fa-check-circle',
                            'items' => array(
                                0 => array(
                                    'name' => '余额提现申请审核',
                                    'url' => '/admin/audit/withdraws',
                                    'icon' => 'fa-question-circle',
                                ),
                                1 => array(
                                    'name' => '余额提现账户审核',
                                    'url' => '/admin/audit/withdraw-accounts',
                                    'icon' => 'fa-check-circle',
                                ),
                            ),
                        ),
                    ),
                ),
                'system-administration' => array(
                    'name' => '系统管理',
                    'items' => array(
                        0 => array(
                            'name' => '系统设置',
                            'icon' => 'fa-search',
                            'items' => array(
                                0 => array(
                                    'name' => '站点设置',
                                    'url' => '/admin/system-administration/system-settings/system',
                                    'icon' => 'fa-user',
                                ),
                                1 => array(
                                    'name' => '通行证设置',
                                    'url' => '/admin/system-administration/system-settings/passport',
                                    'icon' => 'layui-icon-chart',
                                ),
                                2 => array(
                                    'name' => '代理商平台设置',
                                    'url' => '/admin/system-administration/system-settings/reseller-platform',
                                    'icon' => 'layui-icon-rmb',
                                ),
                                3 => array(
                                    'name' => '供应商平台设置',
                                    'url' => '/admin/system-administration/system-settings/supplier-platform',
                                    'icon' => 'layui-icon-read',
                                ),
                            ),
                        ),
                        1 => array(
                            'name' => '日志管理',
                            'icon' => 'fa-search',
                            'items' => array(
                                0 => array(
                                    'name' => '系统日志',
                                    'url' => '/admin/system-administration/logging/admin-operation-logs',
                                    'icon' => 'fa-yen',
                                ),
                            ),
                        ),
                        2 => array(
                            'name' => '后台用户管理',
                            'icon' => 'fa-search',
                            'items' => array(
                                0 => array(
                                    'name' => '后台用户管理',
                                    'url' => '/admin/system-administration/administrators',
                                    'icon' => 'fa-user',
                                ),
                                1 => array(
                                    'name' => '权限组管理',
                                    'url' => '/admin/system-administration/roles',
                                    'icon' => 'fa-yen',
                                ),
                            ),
                        ),
                        3 => array(
                            'name' => '文章公告管理',
                            'icon' => 'fa-search',
                            'items' => array(
                                0 => array(
                                    'name' => '文章管理',
                                    'url' => '/admin/system-administration/articles',
                                    'icon' => 'fa-user',
                                ),
                                1 => array(
                                    'name' => '文章分类管理',
                                    'url' => '/admin/system-administration/article-categories',
                                    'icon' => 'fa-yen',
                                ),
                            ),
                        ),
                    ),
                ),
            ),
            'default_max_upload_file_size' => 10240000,
            'admin_article_max_upload_file_size' => 5242880,
            'identity_image_max_upload_file_size' => 10240000,
            'upload_profiles' => array(
                'default' => array(
                    'base_uri' => '/uploads/files',
                ),
                'admin_article' => array(
                    'base_uri' => '/uploads/article',
                ),
            ),
            'asset_base_url' => '',
            'reseller_menus' => array(
                'dashboard' => array(
                    'name' => '控制面板',
                    'items' => array(
                        0 => array(
                            'name' => '首页',
                            'icon' => 'layui-icon-chart',
                            'url' => '/supplier/dashboard',
                        ),
                        1 => array(
                            'name' => '账户信息',
                            'icon' => 'layui-icon-rmb',
                            'url' => '/supplier/profile',
                        ),
                        2 => array(
                            'name' => '平台公告',
                            'icon' => 'layui-icon-rmb',
                            'url' => '/supplier/announcements',
                        ),
                        3 => array(
                            'name' => '操作日记',
                            'icon' => 'layui-icon-rmb',
                            'url' => '/supplier/operation-logs',
                        ),
                    ),
                ),
                'orders' => array(
                    'name' => '订单管理',
                    'items' => array(
                        0 => array(
                            'name' => '手机话费充值订单',
                            'icon' => 'layui-icon-chart',
                            'url' => '/supplier/profile',
                        ),
                        1 => array(
                            'name' => '手机流量充值订单',
                            'icon' => 'layui-icon-chart',
                            'url' => '/supplier/profile',
                        ),
                        2 => array(
                            'name' => '固话宽带充值订单',
                            'icon' => 'layui-icon-rmb',
                            'url' => '/supplier/profile',
                        ),
                        3 => array(
                            'name' => '腾讯业务充值订单',
                            'icon' => 'layui-icon-rmb',
                            'url' => '/supplier/profile',
                        ),
                    ),
                ),
                'products' => array(
                    'name' => '供货管理',
                    'items' => array(
                        0 => array(
                            'name' => '供货模板管理',
                            'icon' => 'fa-creative-commons',
                            'items' => array(
                                0 => array(
                                    'name' => '供货模板管理',
                                    'url' => '/supplier/products',
                                    'icon' => 'fa-list-ul',
                                ),
                            ),
                        ),
                        1 => array(
                            'name' => '商品管理',
                            'icon' => 'fa-shopping-cart',
                            'items' => array(
                                0 => array(
                                    'name' => '手机话费充值',
                                    'url' => '/service/service/list',
                                    'icon' => 'fa-list-ol',
                                ),
                                1 => array(
                                    'name' => '手机流量充值',
                                    'url' => '/service/service-cate/',
                                    'icon' => 'fa-certificate',
                                ),
                                2 => array(
                                    'name' => '固话宽带充值',
                                    'url' => '/service/service-cate/',
                                    'icon' => 'fa-certificate',
                                ),
                                3 => array(
                                    'name' => '腾讯业务充值',
                                    'url' => '/service/service-cate/',
                                    'icon' => 'fa-certificate',
                                ),
                            ),
                        ),
                        2 => array(
                            'name' => '供货接口秘钥',
                            'icon' => 'fa-shopping-cart',
                            'items' => array(
                                0 => array(
                                    'name' => '供货接口秘钥',
                                    'url' => '/service/service/list',
                                    'icon' => 'fa-list-ol',
                                ),
                            ),
                        ),
                    ),
                ),
                'finance' => array(
                    'name' => '财务',
                    'items' => array(
                        0 => array(
                            'name' => '账务明细',
                            'icon' => 'fa-rmb',
                            'items' => array(
                                0 => array(
                                    'name' => '账户概览',
                                    'url' => '/finance/finance-pay-way',
                                    'icon' => 'fa-bank',
                                ),
                                1 => array(
                                    'name' => '交易记录',
                                    'url' => '/finance/finance-pay-way/poundage',
                                    'icon' => 'fa-hand-rock-o',
                                ),
                                2 => array(
                                    'name' => '资金明细',
                                    'url' => '/finance/finance-pay-way/user-bind-payway',
                                    'icon' => 'fa-user-md',
                                ),
                            ),
                        ),
                        1 => array(
                            'name' => '提现管理',
                            'icon' => 'fa-amount',
                            'items' => array(
                                0 => array(
                                    'name' => '申请提现',
                                    'url' => '/finance/finance-cash/bank',
                                    'icon' => 'fa-bank',
                                ),
                                1 => array(
                                    'name' => '提现记录',
                                    'url' => '/finance/finance-cash/shouxu',
                                    'icon' => 'fa-hand-rock-o',
                                ),
                                2 => array(
                                    'name' => '提现账户管理',
                                    'url' => '/finance/finance-cash/user-account',
                                    'icon' => 'fa-user-md',
                                ),
                            ),
                        ),
                    ),
                ),
                'users' => array(
                    'name' => '用户管理',
                    'items' => array(
                        0 => array(
                            'name' => '员工管理',
                            'icon' => 'layui-icon-chart',
                            'items' => array(
                                0 => array(
                                    'name' => '员工管理',
                                    'url' => '/supplier/users/pass-management',
                                    'icon' => '',
                                ),
                                1 => array(
                                    'name' => '岗位权限管理',
                                    'url' => '/supplier/users/open-account-log',
                                    'icon' => '',
                                ),
                            ),
                        ),
                    ),
                ),
                'passport' => array(
                    'name' => '狐豆通行证',
                    'icon' => 'layui-icon-chart',
                    'url' => '/passport/',
                ),
            ),
            'supplier_menus' => array(
                'dashboard' => array(
                    'name' => '控制面板',
                    'items' => array(
                        0 => array(
                            'name' => '首页',
                            'icon' => 'layui-icon-chart',
                            'url' => '/supplier/dashboard',
                        ),
                        1 => array(
                            'name' => '账户信息',
                            'icon' => 'layui-icon-rmb',
                            'url' => '/supplier/dashboard/profile',
                        ),
                        2 => array(
                            'name' => '平台公告',
                            'icon' => 'layui-icon-rmb',
                            'url' => '/supplier/dashboard/announcements',
                        ),
                        3 => array(
                            'name' => '操作日记',
                            'icon' => 'layui-icon-rmb',
                            'url' => '/supplier/dashboard/operation-logs',
                        ),
                    ),
                ),
                'orders' => array(
                    'name' => '订单管理',
                    'items' => array(
                        0 => array(
                            'name' => '手机话费充值订单',
                            'icon' => 'layui-icon-chart',
                            'url' => '/supplier/orders/order-list?product_cate_id=1',
                            'cate_id' => 1,
                        ),
                        1 => array(
                            'name' => '手机流量充值订单',
                            'icon' => 'layui-icon-chart',
                            'url' => '/supplier/orders/order-list?product_cate_id=4',
                            'cate_id' => 4,
                        ),
                        2 => array(
                            'name' => '固话宽带充值订单',
                            'icon' => 'layui-icon-rmb',
                            'url' => '/supplier/orders/order-list?product_cate_id=10',
                            'cate_id' => 10,
                        ),
                        3 => array(
                            'name' => '腾讯业务充值订单',
                            'icon' => 'layui-icon-rmb',
                            'url' => '/supplier/orders/order-list?product_cate_id=3',
                            'cate_id' => 3,
                        ),
                    ),
                ),
                'product-sources' => array(
                    'name' => '供货管理',
                    'items' => array(
                        0 => array(
                            'name' => '供货模板管理',
                            'icon' => 'fa-creative-commons',
                            'items' => array(
                                0 => array(
                                    'name' => '供货模板管理',
                                    'route' => 'supplier_product_source_groups_index',
                                    'icon' => 'fa-list-ul',
                                ),
                            ),
                        ),
                    ),
                ),
                'finance' => array(
                    'name' => '财务',
                    'items' => array(
                        0 => array(
                            'name' => '账务明细',
                            'icon' => 'fa-rmb',
                            'items' => array(
                                0 => array(
                                    'name' => '账户概览',
                                    'url' => '/supplier/finance',
                                    'icon' => 'fa-bank',
                                ),
                                1 => array(
                                    'name' => '交易记录',
                                    'url' => '/supplier/finance/trade-list',
                                    'icon' => 'fa-hand-rock-o',
                                ),
                                2 => array(
                                    'name' => '资金明细',
                                    'url' => '/supplier/finance/detail',
                                    'icon' => 'fa-user-md',
                                ),
                            ),
                        ),
                        1 => array(
                            'name' => '提现管理',
                            'icon' => 'fa-amount',
                            'items' => array(
                                0 => array(
                                    'name' => '申请提现',
                                    'url' => '/supplier/finance/add-withdraw',
                                    'icon' => 'fa-bank',
                                ),
                                1 => array(
                                    'name' => '提现记录',
                                    'url' => '/supplier/finance/withdraw',
                                    'icon' => 'fa-hand-rock-o',
                                ),
                                2 => array(
                                    'name' => '提现账户管理',
                                    'url' => '/supplier/finance/withdraw-account',
                                    'icon' => 'fa-user-md',
                                ),
                            ),
                        ),
                    ),
                ),
                'passport' => array(
                    'name' => '狐豆通行证',
                    'icon' => 'layui-icon-chart',
                    'url' => '/passport/',
                ),
            ),
            'env(DATABASE_URL)' => '',
            'db' => array(
                'master' => array(
                    'driver' => 'pdo_mysql',
                    'host' => '127.0.0.1',
                    'port' => 3306,
                    'dbname' => 'foxdou_dev',
                    'user' => 'root',
                    'password' => 'root',
                    'charset' => 'utf8mb4',
                ),
            ),
            'site_name' => '狐豆',
            'locale' => 'zh_CN',
            'app_locales' => 'zh_CN',
            'app.notifications.email_sender' => 'anonymous@example.com',
            'env(VAR_DUMPER_SERVER)' => '127.0.0.1:9912',
            'fragment.renderer.hinclude.global_template' => '',
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.default_locale' => 'zh_CN',
            'templating.helper.code.file_link_format' => 'phpstorm://open?url=file://%f&line=%l',
            'debug.file_link_format' => 'phpstorm://open?url=file://%f&line=%l',
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cache_limiter' => '0',
                'name' => 'SFSESSID',
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.metadata.update_threshold' => 0,
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'translator.logging' => false,
            'data_collector.templates' => array(

            ),
            'debug.error_handler.throw_at' => -1,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'router.cache_class_prefix' => 'srcApp_KernelDevDebugContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'security.authentication.trust_resolver.anonymous_class' => NULL,
            'security.authentication.trust_resolver.rememberme_class' => NULL,
            'security.role_hierarchy.roles' => array(
                'ROLE_OPEN_PLATFORM' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_RESELLER' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_SUPPLIER' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_ALL_PLATFORMS' => array(
                    0 => 'ROLE_OPEN_PLATFORM',
                    1 => 'ROLE_RESELLER',
                    2 => 'ROLE_SUPPLIER',
                ),
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_ALL_PLATFORMS',
                    1 => 'ROLE_ADMIN_EDITOR',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_ADMIN',
                    1 => 'ROLE_ALLOWED_TO_SWITCH',
                ),
            ),
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                        1 => 'doctrine',
                        2 => 'console',
                    ),
                ),
                'monolog.handler.main' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                    ),
                ),
            ),
            'swiftmailer.mailer.mxhichina.transport.name' => 'dynamic',
            'swiftmailer.mailer.mxhichina.spool.enabled' => true,
            'swiftmailer.mailer.mxhichina.sender_address' => 'gxlclizongjun@163.com',
            'swiftmailer.sender_address' => 'gxlclizongjun@163.com',
            'swiftmailer.mailer.mxhichina.antiflood.threshold' => 99,
            'swiftmailer.mailer.mxhichina.antiflood.sleep' => 1,
            'swiftmailer.mailer.mxhichina.single_address' => NULL,
            'swiftmailer.mailer.mxhichina.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'mxhichina' => 'swiftmailer.mailer.mxhichina',
            ),
            'swiftmailer.default_mailer' => 'mxhichina',
            'twig.exception_listener.controller' => 'twig.controller.exception::showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
            ),
            'simple_form.csrf_field' => '_token',
            'oneup_uploader.chunks.manager.class' => 'Oneup\\UploaderBundle\\Uploader\\Chunk\\ChunkManager',
            'oneup_uploader.chunks_storage.gaufrette.class' => 'Oneup\\UploaderBundle\\Uploader\\Chunk\\Storage\\GaufretteStorage',
            'oneup_uploader.chunks_storage.flysystem.class' => 'Oneup\\UploaderBundle\\Uploader\\Chunk\\Storage\\FlysystemStorage',
            'oneup_uploader.chunks_storage.filesystem.class' => 'Oneup\\UploaderBundle\\Uploader\\Chunk\\Storage\\FilesystemStorage',
            'oneup_uploader.namer.urlsafename.class' => 'Oneup\\UploaderBundle\\Uploader\\Naming\\UrlSafeNamer',
            'oneup_uploader.namer.uniqid.class' => 'Oneup\\UploaderBundle\\Uploader\\Naming\\UniqidNamer',
            'oneup_uploader.routing.loader.class' => 'Oneup\\UploaderBundle\\Routing\\RouteLoader',
            'oneup_uploader.storage.gaufrette.class' => 'Oneup\\UploaderBundle\\Uploader\\Storage\\GaufretteStorage',
            'oneup_uploader.storage.flysystem.class' => 'Oneup\\UploaderBundle\\Uploader\\Storage\\FlysystemStorage',
            'oneup_uploader.storage.filesystem.class' => 'Oneup\\UploaderBundle\\Uploader\\Storage\\FilesystemStorage',
            'oneup_uploader.orphanage.class' => 'Oneup\\UploaderBundle\\Uploader\\Storage\\FilesystemOrphanageStorage',
            'oneup_uploader.orphanage.manager.class' => 'Oneup\\UploaderBundle\\Uploader\\Orphanage\\OrphanageManager',
            'oneup_uploader.controller.fineuploader.class' => 'Oneup\\UploaderBundle\\Controller\\FineUploaderController',
            'oneup_uploader.controller.blueimp.class' => 'Oneup\\UploaderBundle\\Controller\\BlueimpController',
            'oneup_uploader.controller.uploadify.class' => 'Oneup\\UploaderBundle\\Controller\\UploadifyController',
            'oneup_uploader.controller.yui3.class' => 'Oneup\\UploaderBundle\\Controller\\YUI3Controller',
            'oneup_uploader.controller.fancyupload.class' => 'Oneup\\UploaderBundle\\Controller\\FancyUploadController',
            'oneup_uploader.controller.mooupload.class' => 'Oneup\\UploaderBundle\\Controller\\MooUploadController',
            'oneup_uploader.controller.plupload.class' => 'Oneup\\UploaderBundle\\Controller\\PluploadController',
            'oneup_uploader.controller.dropzone.class' => 'Oneup\\UploaderBundle\\Controller\\DropzoneController',
            'oneup_uploader.command.clear_chunks.class' => 'Oneup\\UploaderBundle\\Command\\ClearChunkCommand',
            'oneup_uploader.command.clear_orphans.class' => 'Oneup\\UploaderBundle\\Command\\ClearOrphansCommand',
            'oneup_uploader.error_handler.noop.class' => 'Oneup\\UploaderBundle\\Uploader\\ErrorHandler\\NoopErrorHandler',
            'oneup_uploader.error_handler.blueimp.class' => 'Oneup\\UploaderBundle\\Uploader\\ErrorHandler\\BlueimpErrorHandler',
            'oneup_uploader.error_handler.plupload.class' => 'Oneup\\UploaderBundle\\Uploader\\ErrorHandler\\PluploadErrorHandler',
            'oneup_uploader.error_handler.dropzone.class' => 'Oneup\\UploaderBundle\\Uploader\\ErrorHandler\\DropzoneErrorHandler',
            'oneup_uploader.controllers' => array(
                'default' => array(
                    0 => 'oneup_uploader.controller.default',
                    1 => array(
                        'enable_progress' => false,
                        'enable_cancelation' => false,
                        'route_prefix' => '/uploads/files',
                        'endpoints' => array(
                            'upload' => '/common/uploader/default',
                            'progress' => NULL,
                            'cancel' => NULL,
                        ),
                    ),
                ),
                'admin_article' => array(
                    0 => 'oneup_uploader.controller.admin_article',
                    1 => array(
                        'enable_progress' => false,
                        'enable_cancelation' => false,
                        'route_prefix' => '/uploads/article',
                        'endpoints' => array(
                            'upload' => '/admin/uploader/article',
                            'progress' => NULL,
                            'cancel' => NULL,
                        ),
                    ),
                ),
                'identity_image' => array(
                    0 => 'oneup_uploader.controller.identity_image',
                    1 => array(
                        'enable_progress' => false,
                        'enable_cancelation' => false,
                        'route_prefix' => '/uploads/identity',
                        'endpoints' => array(
                            'upload' => '/common/uploader/identity',
                            'progress' => NULL,
                            'cancel' => NULL,
                        ),
                    ),
                ),
            ),
            'oneup_uploader.maxsize' => array(
                'default' => 2097152,
                'admin_article' => 2097152,
                'identity_image' => 2097152,
            ),
            'console.command.ids' => array(

            ),
        );
    }
}
