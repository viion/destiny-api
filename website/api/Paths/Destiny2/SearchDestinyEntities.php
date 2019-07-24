<?php

namespace Destiny2\Api\Destiny2;

/**
 * Gets a page list of Destiny items.
 */
class SearchDestinyEntities
{
    const NAME           = 'Destiny2.SearchDestinyEntities';
    const URI            = '/Destiny2/Armory/Search/{type}/{searchTerm}/';
    const METHOD         = 'GET';
    const TAGS           = 'Destiny2';
    const OPERATION_ID   = 'Destiny2.SearchDestinyEntities';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/Destiny.Definitions.DestinyEntitySearchResult'
    ];

    public static function build()
    {

    }
}
