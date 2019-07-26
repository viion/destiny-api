<?php

namespace Destiny2\Api\Enums\Destiny\DestinyUnlockValueUIStyle;

/**
 * DestinyUnlockValueUIStyle
 *
 * If you're showing an unlock value in the UI, this is the format in which it
 * should be shown. You'll have to build your own algorithms on the client side to
 * determine how best to render these options.
 */
class DestinyUnlockValueUIStyle
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

