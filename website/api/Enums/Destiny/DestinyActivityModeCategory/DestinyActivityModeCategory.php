<?php

namespace Destiny2\Api\Enums\Destiny\DestinyActivityModeCategory;

/**
 * DestinyActivityModeCategory
 *
 * Activity Modes are grouped into a few possible broad categories.
 */
class DestinyActivityModeCategory
{

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

