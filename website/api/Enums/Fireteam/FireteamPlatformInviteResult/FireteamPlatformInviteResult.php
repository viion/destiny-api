<?php

namespace Destiny2\Api\Enums\Fireteam\FireteamPlatformInviteResult;

/**
 * FireteamPlatformInviteResult
 *
 * No description
 */
class FireteamPlatformInviteResult
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'byte';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
        '4',
    ];

    const ENUMS = [
        'None' => '0',
        'Success' => '1',
        'AlreadyInFireteam' => '2',
        'Throttled' => '3',
        'ServiceError' => '4',
    ];


}

