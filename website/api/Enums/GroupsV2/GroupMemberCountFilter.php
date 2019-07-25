<?php

namespace Destiny2\Api\Enums\GroupsV2;

/**
 * GroupMemberCountFilter
 */
class GroupMemberCountFilter
{

    const NAME = 'GroupsV2.GroupMemberCountFilter';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
    ];

    const ENUMS = [
        'All' => '0',
        'OneToTen' => '1',
        'ElevenToOneHundred' => '2',
        'GreaterThanOneHundred' => '3',
    ];


}

