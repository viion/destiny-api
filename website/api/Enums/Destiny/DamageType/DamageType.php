<?php

namespace Destiny2\Api\Enums\Destiny\DamageType;

/**
 * DamageType
 *
 * No description
 */
class DamageType
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
    ];

    const ENUMS = [
        'None' => '0',
        'Kinetic' => '1',
        'Arc' => '2',
        'Thermal' => '3',
        'Void' => '4',
        'Raid' => '5',
    ];


}

