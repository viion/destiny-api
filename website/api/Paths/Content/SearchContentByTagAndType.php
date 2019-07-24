<?php

namespace Destiny2\Api\Content;

/**
 * Searches for Content Items that match the given Tag and Content Type.
 */
class SearchContentByTagAndType
{
    const NAME           = 'Content.SearchContentByTagAndType';
    const URI            = '/Content/SearchContentByTagAndType/{tag}/{type}/{locale}/';
    const METHOD         = 'GET';
    const TAGS           = 'Content';
    const OPERATION_ID   = 'Content.SearchContentByTagAndType';

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
