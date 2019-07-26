<?php

namespace Destiny2\Api\Paths\Content\SearchContentWithText;

/**
 * SearchContentWithText
 *
 * Gets content based on querystring information passed in. Provides basic search
 * and text search capabilities.
 */
class SearchContentWithText
{

    const SUMMARY = 'Content.SearchContentWithText';

    const URI = '/Content/Search/{locale}/';

    const METHOD = 'GET';

    const TAGS = [
        'Content',
    ];

    const OPERATION_ID = 'Content.SearchContentWithText';

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

