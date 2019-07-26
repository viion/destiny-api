<?php

namespace Destiny2\Api\Enums\Fireteam\FireteamDateRange;

/**
 * FireteamDateRange
 *
 * No description
 */
class FireteamDateRange
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
        'All' => '0',
        'Now' => '1',
        'TwentyFourHours' => '2',
        'FortyEightHours' => '3',
        'ThisWeek' => '4',
    ];


}

