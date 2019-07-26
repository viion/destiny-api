<?php

namespace Destiny2\Api\Paths\Fireteam\GetClanFireteam;

/**
 * GetClanFireteam
 *
 * Gets a specific clan fireteam.
 */
class GetClanFireteam
{

    const SUMMARY = 'Fireteam.GetClanFireteam';

    const URI = '/Fireteam/Clan/{groupId}/Summary/{fireteamId}/';

    const METHOD = 'GET';

    const TAGS = [
        'Fireteam',
    ];

    const OPERATION_ID = 'Fireteam.GetClanFireteam';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/Fireteam.FireteamResponse',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

