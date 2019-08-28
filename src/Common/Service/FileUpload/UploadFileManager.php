<?php
namespace App\Common\Service\FileUpload;

use App\Common\Model\File;
use App\Common\Service\BaseService;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class UploadFileManager extends BaseService {

    /**
     * @var ParameterBagInterface
     */
    private $params;

    public function __construct(LoggerInterface $logger, ParameterBagInterface $params) {
        parent::__construct($logger);
        $this->params = $params;
    }

    public function saveUploadedFile(UploadedFile $uploadedFile, $user, $profileName) {
        $allProfiles = $this->params->get('upload_profiles');
        $defaultProfile = $allProfiles['default'];
        $profile = $allProfiles[$profileName] ?? null;

        if(!$profile) {
            return [false, '错误的 profile 参数'];
        }

        foreach ($defaultProfile as $key => $value) {
            $profile[$key] = $profile[$key] ?? $defaultProfile[$key];
        }

        $context = ['user_id' => $user->id, 'upload_profile' => $profileName];

        $allowedMimeTypes = $profile['allowed_types'];
        $mimeType = strtolower($uploadedFile->getMimeType());

        if(!in_array($mimeType, $allowedMimeTypes)) {
            $msg = sprintf("用户 %s 试图上传禁止上传的文件类型 [%s]", $user, $mimeType);
            $context['mime_type'] = $mimeType;
            $context['file_name'] = $uploadedFile->getClientOriginalName();
            // $operatonLogManager->createLog($this->getAdminUser(), AdminOperationLog::OPERATION_SUSPICIOUS_ACTION, AdminOperationLog::SUBJECT_ARTICLE, $msg, $request->getClientIp(), $context);
            $this->logger->warning($msg, $context);
            return [false, '文件类型错误：不在允许的上传类型范围内'];
        }

        $maxUploadSize = (int)$profile['max_file_size'];
        if($uploadedFile->getSize() > $maxUploadSize) {
            return [false, '文件太大，最大允许上传 ' . number_format($maxUploadSize/1024/1024, 1) . 'M'];
        }

        $extension = substr($mimeType, strpos($mimeType, '/'));
        $md5 = md5_file($uploadedFile->getRealPath());
        $path = date('Ymd') . '/' . substr($md5, 0, 2);
        $fileName = "{$md5}.{$extension}";
        $saveDir = $profile['save_dir'];
        $destPath = "{$saveDir}/{$path}";

        try {
            mkdir($destPath, 0755, true);
            $uploadedFile->move($destPath, $fileName);

            $file               = new File();
            $file->title        = $uploadedFile->getClientOriginalName();
            $file->type         = $mimeType;
            $file->file_path    = "{$destPath}/{$fileName}";
            $file->url          = "{$profile['base_uri']}/{$path}/{$fileName}";
            $file->storage_type = FILE::STORAGE_FILE_SYSTEM;
            $file->created_at   = time();
            $file->save(true, true);

            return [$file, null];
        } catch (\Exception $e) {
            $this->logger->error('上传文件失败', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
            return [false, '系统错误，上传失败'];
        }
    }

    public function deleteUploadedFile($fileId, $userId = null, $deleteFile = true) {
        try {
            $conditions = ['id' => $fileId];
            if($userId) {
                $conditions['user_id'] = $userId;
            }

            $file = File::first($conditions);
            if(!$file) {
                return [true, '删除成功']; // 因为文件已经不存在了，所以认为删除也成功了
            }

            $file->delete();
            if($deleteFile) {
                unlink($file->file_path);
            }

            return [true, '删除成功'];
        } catch (\Exception $e) {
            $this->logger->error("删除上传文件 {$fileId} 失败", ['file_id' => $fileId, 'error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]);
            return [false, '删除失败'];
        }
    }
}