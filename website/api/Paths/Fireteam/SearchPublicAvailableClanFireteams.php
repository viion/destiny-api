<?php

namespace Destiny2\Api\Fireteam;

/**
 * Gets a listing of all public fireteams starting now with open slots. Caller
 * is not checked for join criteria so caching is maximized.
 */
class SearchPublicAvailableClanFireteams
{
    const NAME           = 'Fireteam.SearchPublicAvailableClanFireteams';
    const URI            = '/Fireteam/Search/Available/{platform}/{activityType}/{dateRange}/{slotFilter}/{page}/';
    const METHOD         = 'GET';
    const TAGS           = 'Fireteam';
    const OPERATION_ID   = 'Fireteam.SearchPublicAvailableClanFireteams';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/SearchResultOfFireteamSummary'
    ];

    public static function build()
    {

    }
}
