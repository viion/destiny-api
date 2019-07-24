<?php

namespace Destiny2\Api\Destiny2;

/**
 * Gets historical stats for indicated character.
 */
class GetHistoricalStats
{
    const NAME           = 'Destiny2.GetHistoricalStats';
    const URI            = '/Destiny2/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Stats/';
    const METHOD         = 'GET';
    const TAGS           = 'Destiny2';
    const OPERATION_ID   = 'Destiny2.GetHistoricalStats';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/Destiny.HistoricalStats.DestinyHistoricalStatsResults'
    ];

    public static function build()
    {

    }
}
