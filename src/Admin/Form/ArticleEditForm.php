<?php
namespace App\Admin\Form;

use App\Admin\Model\AdminUser;
use App\Platform;
use Symfony\Component\HttpFoundation\Request;
use Symfu\SimpleFormBundle\Form;
use function Symfu\SimpleFormBundle\to_enum;

class ArticleEditForm extends Form {

    protected function getFields(Request $request) {
        return [
            'id'             => ['integer'],
            'portal_id'      => ['required, '.to_enum(Platform::PLATFORMS)],
            'cate_id'        => ['required, integer'],
            'title'          => ['required, min_length[2], max_length[100]'],
            'source'         => ['min_length[2], max_length[20]', '系统'],
            'abstract'       => ['max_length[200]'],
            'content'        => ['required, max_length[65535]'],
            'cover_image_id' => ['integer'],
            'published'      => ['integer'],
        ];
    }

    protected function getCsrfTokenId(Request $request) {
        return 'admin_article_edit';
    }
}