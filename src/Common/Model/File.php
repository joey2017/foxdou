<?php
namespace App\Common\Model;

use App\Common\Model\AutoGenerated\files;
use Ramsey\Uuid\Uuid;

class File extends files {
    const STORAGE_FILE_SYSTEM = 'FILE_SYSTEM';
    const STORAGE_OSS         = 'OSS';

    public function before_create() {
        $this->id = self::newShortUuid();
    }
}
