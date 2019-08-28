<?php
namespace App\Common\Service\FileUpload;

use App\Common\Event\IllegalOperationEvent;
use App\Common\Model\File;
use App\Common\Model\User\User;
use App\Common\Service\BaseService;
use App\Events;
use League\Flysystem\Adapter\AbstractAdapter;
use League\Flysystem\Filesystem;
use Oneup\UploaderBundle\Event\PostPersistEvent;
use Oneup\UploaderBundle\Uploader\File\FlysystemFile;
use Oneup\UploaderBundle\UploadEvents;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class UploadFileListener extends BaseService implements EventSubscriberInterface {

    /**
     * @var ParameterBagInterface
     */
    private $params;
    /**
     * @var TokenStorageInterface
     */
    private $securityTokenStorage;
    /**
     * @var EventDispatcherInterface
     */
    private $eventDispatcher;

    public function __construct(LoggerInterface $logger, ParameterBagInterface $params, TokenStorageInterface $tokenStorage, EventDispatcherInterface $eventDispatcher) {
        parent::__construct($logger);
        $this->params               = $params;
        $this->securityTokenStorage = $tokenStorage;
        $this->eventDispatcher = $eventDispatcher;
    }

    public static function getSubscribedEvents()
    {
        return [
            // UploadEvents::postUpload('article') => ['onArticleFileUpload'],
            UploadEvents::postPersist('default') => ['onFilePersist'],
            UploadEvents::postPersist('admin_article') => ['onArticleFilePersist'],
            UploadEvents::postPersist('identity_image') => ['onIdentityImagePersist'],
        ];
    }

    // public function onArticleFileUpload(PostUploadEvent $event) {
    //     $type = $event->getType();
    //     // $allProfiles = $this->params->get('upload_profiles');
    //     // $defaultProfile = $allProfiles['default'];
    //     // $profile = $allProfiles[$profileName] ?? null;
    //
    // }

    public function onFilePersist(PostPersistEvent $event) {
        $this->ensureUserLoggedIn($event);
        $file = $this->saveFileRecord($event);

        return $event->getResponse();
    }

    public function onArticleFilePersist(PostPersistEvent $event) {
        $this->ensureUserLoggedIn($event);
        $file = $this->saveFileRecord($event);

        return $event->getResponse();
    }

    public function onIdentityImagePersist(PostPersistEvent $event) {
        $this->ensureUserLoggedIn($event);

        /** @var FlysystemFile $uploadedFile */
        $response = $event->getResponse();
        $request = $event->getRequest();
        $zoneId  = $request->request->get('zone_id');

        /** @var User $currentUser */
        $currentUser = $this->securityTokenStorage->getToken()->getUser();
        $context = ['action' => 'file_upload.identity_image', 'zone_id' => $zoneId, 'ip' => $request->getClientIp()];
        try {
            $validZones = [
                'entity_license_front_image_id', 'entity_license_back_image_id', 'entity_license_handheld_image_id',
                'biz_legal_representative_id_front_image_id', 'biz_legal_representative_id_back_image_id', 'biz_legal_representative_id_handheld_image_id',
            ];
            if(!in_array($zoneId, $validZones)) {
                $message = '非法数据，此次操作已经记录进系统日记并报告给管理员，请勿恶意操作！';
                $response['success'] = false;
                $response['message']   = $message;

                $this->logger->error("用户 {$currentUser} 试图使用非法ZoneID", $context);

                $this->eventDispatcher->dispatch(Events::USER_ILLEGAL_OPERATION, new IllegalOperationEvent($currentUser, array_merge($context, $response->assemble())));
                return;
            }

            $file = $this->saveFileRecord($event);

            $identity = $currentUser->getIdentity(true);

            switch ($zoneId) {
            case 'entity_license_front_image_id':
                $identity->entity_license_front_image_id = $file->id;
                $identity->entity_license_front_image_url = $file->url;
                break;
            case 'identity_back_image_id':
                $identity->entity_license_back_image_id = $file->id;
                $identity->entity_license_back_image_url = $file->url;
                break;
            case 'identity_handheld_image_id':
                $identity->entity_license_handheld_image_id = $file->id;
                $identity->entity_license_handheld_image_url = $file->url;
                break;
            case 'biz_legal_representative_id_front_image_id':
                $identity->biz_legal_representative_id_front_image_id = $file->id;
                $identity->biz_legal_representative_id_front_image_url = $file->url;
                break;
            case 'biz_legal_representative_id_back_image_id':
                $identity->biz_legal_representative_id_back_image_id = $file->id;
                $identity->biz_legal_representative_id_back_image_url = $file->url;
                break;
            case 'biz_legal_representative_id_handheld_image_id':
                $identity->biz_legal_representative_id_handheld_image_id = $file->id;
                $identity->biz_legal_representative_id_handheld_image_url = $file->url;
                break;
            }

            $identity->save(true, true);
        } catch (\Exception $e) {
            $response['success'] = false;
            $response['message']   = '上传文件失败，请重试';
            $this->logger->error('Error', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
        }
    }

    private function ensureUserLoggedIn(PostPersistEvent $event) {
        /** @var FlysystemFile $uploadedFile */
        $uploadedFile = $event->getFile();

        /** @var User $currentUser */
        $token = $this->securityTokenStorage->getToken();
        if(!$token || !($currentUser = $token->getUser())) {
            $uploadedFile->delete();
            throw new \RuntimeException("有匿名用户试图绕过认证系统上传文件，请检查！");
        }
    }

    private function saveFileRecord(PostPersistEvent $event) {
        /** @var FlysystemFile $uploadedFile */
        $uploadedFile = $event->getFile();
        $config       = $event->getConfig();
        $response     = $event->getResponse();

        /** @var Filesystem $fileSystem */
        $fileSystem = $uploadedFile->getFilesystem();
        /** @var AbstractAdapter $adapter */
        $adapter = $fileSystem->getAdapter();
        $pathPrefix = method_exists($adapter, 'getPathPrefix') ? $adapter->getPathPrefix() : ($config['storage']['directory'] ?? '');

        $routePrefix = $config['route_prefix'] ?? '';
        $fileName    = $uploadedFile->getPathname();
        $fileUri     = "{$routePrefix}/{$fileName}";
        $destPath    = "{$pathPrefix}/{$fileName}";

        $adapterId = $config['storage']['filesystem'];
        $storageType = substr($adapterId, strpos($adapterId, '.') + 1);

        $file               = new File();
        $file->title        = $uploadedFile->getBasename();
        $file->type         = $uploadedFile->getMimeType();
        $file->file_path    = $destPath;
        $file->url          = $fileUri;
        $file->storage_type = $storageType;
        $file->size         = $uploadedFile->getSize();

        if($this->securityTokenStorage && ($token = $this->securityTokenStorage->getToken()) && ($user = $token->getUser())) {
            $file->user_id = $user->id;
        }

        try {
            $file->save(true, true);

            $response['success'] = true;
            $response['id'] = $file->id;
            $response['location'] = $fileUri;
            $response['size'] = number_format($uploadedFile->getSize()/1024/1024, 1) . ' MiB';
        } catch (\Exception $e) {
            $response['success'] = false;
            $response['message'] = '上传文件失败';
            $this->logger->error('上传文件时保存 File Model 数据失败', ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]);
        }

        return $file;
    }
}