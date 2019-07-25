<?php

namespace Destiny2\Api\Paths\{Fireteam};

/**
 * Gets a specific clan fireteam.
 */
class GetClanFireteam
{
    const NAME           = 'Fireteam.GetClanFireteam';
    const URI            = '/Fireteam/Clan/{groupId}/Summary/{fireteamId}/';
    const METHOD         = 'GET';
    const TAGS           = 'Fireteam';
    const OPERATION_ID   = 'Fireteam.GetClanFireteam';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/Fireteam.FireteamResponse'
    ];

    public static function build()
    {

    }
}
