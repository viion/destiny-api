<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * DestinyObjectiveGrantStyle
 */
class DestinyObjectiveGrantStyle
{

    const NAME = 'Destiny.DestinyObjectiveGrantStyle';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'WhenIncomplete' => '0',
        'WhenComplete' => '1',
        'Always' => '2',
    ];


}

