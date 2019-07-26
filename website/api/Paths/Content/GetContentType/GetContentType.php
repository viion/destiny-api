<?php

namespace Destiny2\Api\Paths\Content\GetContentType;

/**
 * GetContentType
 *
 * Gets an object describing a particular variant of content.
 */
class GetContentType
{

    const SUMMARY = 'Content.GetContentType';

    const URI = '/Content/GetContentType/{type}/';

    const METHOD = 'GET';

    const TAGS = [
        'Content',
    ];

    const OPERATION_ID = 'Content.GetContentType';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/Content.Models.ContentTypeDescription',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

