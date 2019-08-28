<?php

namespace App\Admin\Controller;

use App\Common\Controller\BaseController;
use App\Common\Model\File;
use App\Common\Service\FileUpload\UploadFileManager;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FileUploadController extends BaseController {
    // /**
    //  * @Route("/uploader/{profile_name}", name="admin_file_upload", methods={"POST"})
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
     * @Route("/uploader/delete", name="admin_file_upload_delete", methods={"POST"})
     */
    public function deleteAction(Request $request, UploadFileManager $uploadFileManager) {
        $fileId = $request->request->get('file_id');
        if(!$fileId) {
            return ['status' => false, 'msg' => '参数错误'];
        }

        list($succeed, $error) = $uploadFileManager->deleteUploadedFile($fileId);

        return ['status' => $succeed, 'msg' => $error];
    }

}
