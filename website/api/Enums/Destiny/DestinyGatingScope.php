<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * DestinyGatingScope
 */
class DestinyGatingScope
{

    const NAME = 'Destiny.DestinyGatingScope';

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
        'None' => '0',
        'Global' => '1',
        'Clan' => '2',
        'Profile' => '3',
        'Character' => '4',
        'Item' => '5',
        'AssumedWorstCase' => '6',
    ];


}

