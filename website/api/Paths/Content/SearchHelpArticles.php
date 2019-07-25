<?php

namespace Destiny2\Api\Paths\Content;

/**
 * SearchHelpArticles
 *
 * Search for Help Articles.
 */
class SearchHelpArticles
{

    const NAME = 'Content.SearchHelpArticles';

    const URI = '/Content/SearchHelpArticles/{searchtext}/{size}';

    const METHOD = 'GET';

    const TAGS = [
        'Content',
    ];

    const OPERATION_ID = 'Content.SearchHelpArticles';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/IReadOnlyCollectionOfContentItemPublicContract',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

