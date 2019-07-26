<?php

namespace Destiny2\Api\Enums\Forum\ForumTopicsQuickDateEnum;

/**
 * ForumTopicsQuickDateEnum
 *
 * No description
 */
class ForumTopicsQuickDateEnum
{

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
        'All' => '0',
        'LastYear' => '1',
        'LastMonth' => '2',
        'LastWeek' => '3',
        'LastDay' => '4',
    ];


}

