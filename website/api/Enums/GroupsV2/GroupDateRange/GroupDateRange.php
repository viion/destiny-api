<?php

namespace Destiny2\Api\Enums\GroupsV2\GroupDateRange;

/**
 * GroupDateRange
 *
 * No description
 */
class GroupDateRange
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
        'PastDay' => '1',
        'PastWeek' => '2',
        'PastMonth' => '3',
        'PastYear' => '4',
    ];


}

