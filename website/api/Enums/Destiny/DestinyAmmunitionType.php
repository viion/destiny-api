<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * DestinyAmmunitionType
 */
class DestinyAmmunitionType
{

    const NAME = 'Destiny.DestinyAmmunitionType';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
        '4',
    ];

    const ENUMS = [
        'None' => '0',
        'Primary' => '1',
        'Special' => '2',
        'Heavy' => '3',
        'Unknown' => '4',
    ];


}

