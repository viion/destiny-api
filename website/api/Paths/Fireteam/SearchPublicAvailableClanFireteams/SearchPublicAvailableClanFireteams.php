<?php

namespace Destiny2\Api\Paths\Fireteam\SearchPublicAvailableClanFireteams;

/**
 * SearchPublicAvailableClanFireteams
 *
 * Gets a listing of all public fireteams starting now with open slots. Caller is
 * not checked for join criteria so caching is maximized.
 */
class SearchPublicAvailableClanFireteams
{

    const SUMMARY = 'Fireteam.SearchPublicAvailableClanFireteams';

    const URI = '/Fireteam/Search/Available/{platform}/{activityType}/{dateRange}/{slotFilter}/{page}/';

    const METHOD = 'GET';

    const TAGS = [
        'Fireteam',
    ];

    const OPERATION_ID = 'Fireteam.SearchPublicAvailableClanFireteams';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/SearchResultOfFireteamSummary',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

