<?php
namespace App\Common\Model;

class ArticleReadStatus extends BaseModel {
    static $table_name = 'yzb_articles_read_statuses';

    const STATUS_UNREAD = 0;
    const STATUS_READ   = 1;
}
