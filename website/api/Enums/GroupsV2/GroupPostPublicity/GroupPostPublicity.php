<?php

namespace Destiny2\Api\Enums\GroupsV2\GroupPostPublicity;

/**
 * GroupPostPublicity
 *
 * No description
 */
class GroupPostPublicity
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'Public' => '0',
        'Alliance' => '1',
        'Private' => '2',
    ];


}

