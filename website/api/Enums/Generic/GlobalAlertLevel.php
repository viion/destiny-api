<?php

namespace Destiny2\Api\Enums\Generic;

/**
 * GlobalAlertLevel
 */
class GlobalAlertLevel
{

    const NAME = 'GlobalAlertLevel';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
    ];

    const ENUMS = [
        'Unknown' => '0',
        'Blue' => '1',
        'Yellow' => '2',
        'Red' => '3',
    ];


}

