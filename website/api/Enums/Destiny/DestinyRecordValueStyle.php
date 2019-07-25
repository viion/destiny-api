<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * DestinyRecordValueStyle
 */
class DestinyRecordValueStyle
{

    const NAME = 'Destiny.DestinyRecordValueStyle';

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
        'Integer' => '0',
        'Percentage' => '1',
        'Milliseconds' => '2',
        'Boolean' => '3',
        'Decimal' => '4',
    ];


}

