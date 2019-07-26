<?php

namespace Destiny2\Api\Enums\GroupsV2\GroupSortBy;

/**
 * GroupSortBy
 *
 * No description
 */
class GroupSortBy
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
        'Name' => '0',
        'Date' => '1',
        'Popularity' => '2',
        'Id' => '3',
    ];


}

