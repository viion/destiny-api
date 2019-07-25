<?php

namespace Destiny2\Api\Enums\GroupsV2;

/**
 * GroupsForMemberFilter
 */
class GroupsForMemberFilter
{

    const NAME = 'GroupsV2.GroupsForMemberFilter';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'All' => '0',
        'Founded' => '1',
        'NonFounded' => '2',
    ];


}

