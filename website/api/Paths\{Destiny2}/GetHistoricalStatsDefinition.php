<?php

namespace Destiny2\Api\Paths\{Destiny2};

/**
 * Gets historical stats definitions.
 */
class GetHistoricalStatsDefinition
{
    const NAME           = 'Destiny2.GetHistoricalStatsDefinition';
    const URI            = '/Destiny2/Stats/Definition/';
    const METHOD         = 'GET';
    const TAGS           = 'Destiny2';
    const OPERATION_ID   = 'Destiny2.GetHistoricalStatsDefinition';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/ReadOnlyDictionaryOfstringAndDestinyHistoricalStatsDefinition'
    ];

    public static function build()
    {

    }
}
