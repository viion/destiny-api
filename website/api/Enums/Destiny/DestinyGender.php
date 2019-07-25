<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * DestinyGender
 */
class DestinyGender
{

    const NAME = 'Destiny.DestinyGender';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'Male' => '0',
        'Female' => '1',
        'Unknown' => '2',
    ];


}

