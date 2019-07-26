<?php

namespace Destiny2\Api\Enums\Fireteam\FireteamPlatform;

/**
 * FireteamPlatform
 *
 * No description
 */
class FireteamPlatform
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'byte';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
    ];

    const ENUMS = [
        'Unknown' => '0',
        'Playstation4' => '1',
        'XboxOne' => '2',
        'Blizzard' => '3',
    ];


}

