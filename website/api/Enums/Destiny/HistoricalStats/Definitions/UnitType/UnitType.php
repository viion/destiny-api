<?php

namespace Destiny2\Api\Enums\Destiny\HistoricalStats\Definitions\UnitType;

/**
 * UnitType
 *
 * No description
 */
class UnitType
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
        '12',
        '13',
    ];

    const ENUMS = [
        'None' => '0',
        'Count' => '1',
        'PerGame' => '2',
        'Seconds' => '3',
        'Points' => '4',
        'Team' => '5',
        'Distance' => '6',
        'Percent' => '7',
        'Ratio' => '8',
        'Boolean' => '9',
        'WeaponType' => '10',
        'Standing' => '11',
        'Milliseconds' => '12',
        'CompletionReason' => '13',
    ];


}

