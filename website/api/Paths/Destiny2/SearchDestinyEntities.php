<?php

namespace Destiny2\Api\Paths\Destiny2;

/**
 * SearchDestinyEntities
 *
 * Gets a page list of Destiny items.
 */
class SearchDestinyEntities
{

    const NAME = 'Destiny2.SearchDestinyEntities';

    const URI = '/Destiny2/Armory/Search/{type}/{searchTerm}/';

    const METHOD = 'GET';

    const TAGS = [
        'Destiny2',
    ];

    const OPERATION_ID = 'Destiny2.SearchDestinyEntities';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/Destiny.Definitions.DestinyEntitySearchResult',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

