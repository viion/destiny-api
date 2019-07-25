<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * DestinyStatCategory
 */
class DestinyStatCategory
{

    const NAME = 'Destiny.DestinyStatCategory';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
    ];

    const ENUMS = [
        'Gameplay' => '0',
        'Weapon' => '1',
        'Defense' => '2',
        'Primary' => '3',
    ];


}

