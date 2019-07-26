<?php

namespace Destiny2\Api\Enums\Fireteam\FireteamActivityType;

/**
 * FireteamActivityType
 *
 * No description
 */
class FireteamActivityType
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        '11',
    ];

    const ENUMS = [
        'All' => '0',
        'Raid' => '1',
        'Crucible' => '2',
        'Trials' => '3',
        'Nightfall' => '4',
        'Anything' => '5',
        'Gambit' => '6',
        'BlindWell' => '7',
        'EscalationProtocol' => '8',
        'Forge' => '9',
        'Reckoning' => '10',
        'Menagerie' => '11',
    ];


}

