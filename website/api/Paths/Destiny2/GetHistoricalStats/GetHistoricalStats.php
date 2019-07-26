<?php

namespace Destiny2\Api\Paths\Destiny2\GetHistoricalStats;

/**
 * GetHistoricalStats
 *
 * Gets historical stats for indicated character.
 */
class GetHistoricalStats
{

    const SUMMARY = 'Destiny2.GetHistoricalStats';

    const URI = '/Destiny2/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Stats/';

    const METHOD = 'GET';

    const TAGS = [
        'Destiny2',
    ];

    const OPERATION_ID = 'Destiny2.GetHistoricalStats';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/Destiny.HistoricalStats.DestinyHistoricalStatsResults',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

