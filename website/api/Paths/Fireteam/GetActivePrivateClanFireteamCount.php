<?php

namespace Destiny2\Api\Paths\Fireteam;

/**
 * GetActivePrivateClanFireteamCount
 *
 * Gets a count of all active non-public fireteams for the specified clan. Maximum
 * value returned is 25.
 */
class GetActivePrivateClanFireteamCount
{

    const NAME = 'Fireteam.GetActivePrivateClanFireteamCount';

    const URI = '/Fireteam/Clan/{groupId}/ActiveCount/';

    const METHOD = 'GET';

    const TAGS = [
        'Fireteam',
    ];

    const OPERATION_ID = 'Fireteam.GetActivePrivateClanFireteamCount';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/int32',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

