<?php

namespace Destiny2\Api\Destiny2;

/**
 * Gets all activities the character has participated in together with
 * aggregate statistics for those activities.
 */
class GetDestinyAggregateActivityStats
{
    const NAME           = 'Destiny2.GetDestinyAggregateActivityStats';
    const URI            = '/Destiny2/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Stats/AggregateActivityStats/';
    const METHOD         = 'GET';
    const TAGS           = 'Destiny2';
    const OPERATION_ID   = 'Destiny2.GetDestinyAggregateActivityStats';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/Destiny.HistoricalStats.DestinyAggregateActivityResults'
    ];

    public static function build()
    {

    }
}
