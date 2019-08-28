<?php

namespace App\Common\Controller;

use App\Common\Model\File;
use App\Common\Service\FileUpload\UploadFileManager;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FileUploadController extends BaseController {
    // /**
    //  * @Route("/uploader/{profile_name}", name="common_file_upload", methods={"POST"})
    //  */
    // public function uploadAction(Request $request, UploadFileManager $uploadFileManager) {
    //     if($request->files->count() < 1) {
    //         return ['status' => false, 'msg' => '无文件上传'];
    //     }
    //
    //     $profileName = $request->get('profile_name', 'default');
    //
    //     $uploadResult = [];
    //     /** @var UploadedFile $file */
    //     foreach ($request->files as $file) {
    //         /** @var File $savedFile */
    //         list($savedFile, $error) = $uploadFileManager->saveUploadedFile($file, $this->getUser(), $profileName);
    //         $uploadResult[$file->getClientOriginalName()] = $savedFile ? ['status' => true, 'url' => $savedFile->url] : ['status' => false, 'error' => $error];
    //     }
    //
    //     return $uploadResult;
    // }

    /**
     * @Route("/uploader/delete", name="common_file_upload_delete", methods={"POST"})
     */
    public function deleteAction(Request $request, UploadFileManager $uploadFileManager) {
        $fileId = $request->request->get('file_id');
        if(!$fileId) {
            return ['status' => false, 'msg' => '参数错误'];
        }

        // 普通用户只能删除自己上传的文件
        list($succeed, $error) = $uploadFileManager->deleteUploadedFile($fileId, $this->getUserId());

        return ['status' => $succeed, 'msg' => $error];
    }

}
