<?php

namespace Destiny2\Api\Content;

/**
 * Gets content based on querystring information passed in. Provides basic
 * search and text search capabilities.
 */
class SearchContentWithText
{
    const NAME           = 'Content.SearchContentWithText';
    const URI            = '/Content/Search/{locale}/';
    const METHOD         = 'GET';
    const TAGS           = 'Content';
    const OPERATION_ID   = 'Content.SearchContentWithText';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/SearchResultOfContentItemPublicContract'
    ];

    public static function build()
    {

    }
}
