<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * DestinyUnlockValueUIStyle
 */
class DestinyUnlockValueUIStyle
{

    const NAME = 'Destiny.DestinyUnlockValueUIStyle';

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
    ];

    const ENUMS = [
        'Automatic' => '0',
        'Fraction' => '1',
        'Checkbox' => '2',
        'Percentage' => '3',
        'DateTime' => '4',
        'FractionFloat' => '5',
        'Integer' => '6',
        'TimeDuration' => '7',
        'Hidden' => '8',
        'Multiplier' => '9',
    ];


}

