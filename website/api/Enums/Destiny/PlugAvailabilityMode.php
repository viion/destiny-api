<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * PlugAvailabilityMode
 */
class PlugAvailabilityMode
{

    const NAME = 'Destiny.PlugAvailabilityMode';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'Normal' => '0',
        'UnavailableIfSocketContainsMatchingPlugCategory' => '1',
        'AvailableIfSocketContainsMatchingPlugCategory' => '2',
    ];


}

