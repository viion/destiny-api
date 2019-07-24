<?php

namespace Destiny2\Api\Fireteam;

/**
 * Gets a listing of all of this clan's fireteams that are have available
 * slots. Caller is not checked for join criteria so caching is maximized.
 */
class GetAvailableClanFireteams
{
    const NAME           = 'Fireteam.GetAvailableClanFireteams';
    const URI            = '/Fireteam/Clan/{groupId}/Available/{platform}/{activityType}/{dateRange}/{slotFilter}/{publicOnly}/{page}/';
    const METHOD         = 'GET';
    const TAGS           = 'Fireteam';
    const OPERATION_ID   = 'Fireteam.GetAvailableClanFireteams';

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
