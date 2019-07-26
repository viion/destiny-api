<?php

namespace Destiny2\Api\Paths\Destiny2\GetDestinyAggregateActivityStats;

/**
 * GetDestinyAggregateActivityStats
 *
 * Gets all activities the character has participated in together with aggregate
 * statistics for those activities.
 */
class GetDestinyAggregateActivityStats
{

    const SUMMARY = 'Destiny2.GetDestinyAggregateActivityStats';

    const URI = '/Destiny2/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Stats/AggregateActivityStats/';

    const METHOD = 'GET';

    const TAGS = [
        'Destiny2',
    ];

    const OPERATION_ID = 'Destiny2.GetDestinyAggregateActivityStats';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/Destiny.HistoricalStats.DestinyAggregateActivityResults',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

