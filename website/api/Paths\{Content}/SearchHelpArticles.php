<?php

namespace Destiny2\Api\Paths\{Content};

/**
 * Search for Help Articles.
 */
class SearchHelpArticles
{
    const NAME           = 'Content.SearchHelpArticles';
    const URI            = '/Content/SearchHelpArticles/{searchtext}/{size}';
    const METHOD         = 'GET';
    const TAGS           = 'Content';
    const OPERATION_ID   = 'Content.SearchHelpArticles';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/IReadOnlyCollectionOfContentItemPublicContract'
    ];

    public static function build()
    {

    }
}
