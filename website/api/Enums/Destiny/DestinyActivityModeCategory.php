<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * DestinyActivityModeCategory
 */
class DestinyActivityModeCategory
{

    const NAME = 'Destiny.DestinyActivityModeCategory';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
    ];

    const ENUMS = [
        'None' => '0',
        'PvE' => '1',
        'PvP' => '2',
        'PvECompetitive' => '3',
    ];


}

