<?php

namespace Destiny2\Api\Enums\Fireteam;

/**
 * FireteamSlotSearch
 */
class FireteamSlotSearch
{

    const NAME = 'Fireteam.FireteamSlotSearch';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'byte';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'NoSlotRestriction' => '0',
        'HasOpenPlayerSlots' => '1',
        'HasOpenPlayerOrAltSlots' => '2',
    ];


}

