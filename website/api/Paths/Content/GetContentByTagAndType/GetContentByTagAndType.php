<?php

namespace Destiny2\Api\Paths\Content\GetContentByTagAndType;

/**
 * GetContentByTagAndType
 *
 * Returns the newest item that matches a given tag and Content Type.
 */
class GetContentByTagAndType
{

    const SUMMARY = 'Content.GetContentByTagAndType';

    const URI = '/Content/GetContentByTagAndType/{tag}/{type}/{locale}/';

    const METHOD = 'GET';

    const TAGS = [
        'Content',
    ];

    const OPERATION_ID = 'Content.GetContentByTagAndType';

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

