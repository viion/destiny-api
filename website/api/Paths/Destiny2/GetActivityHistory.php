<?php

namespace Destiny2\Api\Destiny2;

/**
 * Gets activity history stats for indicated character.
 */
class GetActivityHistory
{
    const NAME           = 'Destiny2.GetActivityHistory';
    const URI            = '/Destiny2/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Stats/Activities/';
    const METHOD         = 'GET';
    const TAGS           = 'Destiny2';
    const OPERATION_ID   = 'Destiny2.GetActivityHistory';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/Destiny.HistoricalStats.DestinyActivityHistoryResults'
    ];

    public static function build()
    {

    }
}
