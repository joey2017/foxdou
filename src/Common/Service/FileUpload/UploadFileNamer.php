<?php
namespace App\Common\Service\FileUpload;

use App\Admin\Model\AdminUser;
use App\Common\Model\Article;
use App\Common\Model\ArticleCategory;
use App\Common\Model\ArticleReadStatus;
use App\Common\Model\User\User;
use Oneup\UploaderBundle\Uploader\File\FileInterface;
use Oneup\UploaderBundle\Uploader\Naming\NamerInterface;
use Ramsey\Uuid\Uuid;

class UploadFileNamer implements NamerInterface {
    /**
     * Name a given file and return the name.
     *
     * @param FileInterface $file
     *
     * @return string
     */
    public function name(FileInterface $file) {
        $mimeType = strtolower($file->getMimeType());
        $extension = substr($mimeType, strpos($mimeType, '/') + 1);
        $uuid = Uuid::uuid4();
        $path = date('Ymd') . '/' . substr($uuid, 0, 2);
        $fileName = "{$path}/{$uuid}.{$extension}";

        return $fileName;
    }
}