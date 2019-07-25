<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * TierType
 */
class TierType
{

    const NAME = 'Destiny.TierType';

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
    ];

    const ENUMS = [
        'Unknown' => '0',
        'Currency' => '1',
        'Basic' => '2',
        'Common' => '3',
        'Rare' => '4',
        'Superior' => '5',
        'Exotic' => '6',
    ];


}

