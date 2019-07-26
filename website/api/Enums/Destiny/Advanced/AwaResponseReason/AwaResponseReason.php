<?php

namespace Destiny2\Api\Enums\Destiny\Advanced\AwaResponseReason;

/**
 * AwaResponseReason
 *
 * No description
 */
class AwaResponseReason
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
    ];

    const ENUMS = [
        'None' => '0',
        'Answered' => '1',
        'TimedOut' => '2',
        'Replaced' => '3',
    ];


}

