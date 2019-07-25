<?php

namespace Destiny2\Api\Enums\Generic;

/**
 * GlobalAlertType
 */
class GlobalAlertType
{

    const NAME = 'GlobalAlertType';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
    ];

    const ENUMS = [
        'GlobalAlert' => '0',
        'StreamingAlert' => '1',
    ];


}

