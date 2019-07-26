<?php

namespace Destiny2\Api\Paths\Destiny2\GetActivityHistory;

/**
 * GetActivityHistory
 *
 * Gets activity history stats for indicated character.
 */
class GetActivityHistory
{

    const SUMMARY = 'Destiny2.GetActivityHistory';

    const URI = '/Destiny2/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Stats/Activities/';

    const METHOD = 'GET';

    const TAGS = [
        'Destiny2',
    ];

    const OPERATION_ID = 'Destiny2.GetActivityHistory';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/Destiny.HistoricalStats.DestinyActivityHistoryResults',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

