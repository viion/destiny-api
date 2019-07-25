<?php

namespace Destiny2\Api\Paths\Content;

/**
 * GetContentById
 *
 * Returns a content item referenced by id
 */
class GetContentById
{

    const NAME = 'Content.GetContentById';

    const URI = '/Content/GetContentById/{id}/{locale}/';

    const METHOD = 'GET';

    const TAGS = [
        'Content',
    ];

    const OPERATION_ID = 'Content.GetContentById';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/Content.ContentItemPublicContract',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

