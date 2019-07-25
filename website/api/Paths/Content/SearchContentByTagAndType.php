<?php

namespace Destiny2\Api\Paths\Content;

/**
 * SearchContentByTagAndType
 *
 * Searches for Content Items that match the given Tag and Content Type.
 */
class SearchContentByTagAndType
{

    const NAME = 'Content.SearchContentByTagAndType';

    const URI = '/Content/SearchContentByTagAndType/{tag}/{type}/{locale}/';

    const METHOD = 'GET';

    const TAGS = [
        'Content',
    ];

    const OPERATION_ID = 'Content.SearchContentByTagAndType';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/SearchResultOfContentItemPublicContract',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

