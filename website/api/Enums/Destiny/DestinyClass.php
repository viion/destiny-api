<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * DestinyClass
 */
class DestinyClass
{

    const NAME = 'Destiny.DestinyClass';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
    ];

    const ENUMS = [
        'Titan' => '0',
        'Hunter' => '1',
        'Warlock' => '2',
        'Unknown' => '3',
    ];


}

