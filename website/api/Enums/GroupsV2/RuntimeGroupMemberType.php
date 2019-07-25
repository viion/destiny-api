<?php

namespace Destiny2\Api\Enums\GroupsV2;

/**
 * RuntimeGroupMemberType
 */
class RuntimeGroupMemberType
{

    const NAME = 'GroupsV2.RuntimeGroupMemberType';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
        '4',
        '5',
    ];

    const ENUMS = [
        'None' => '0',
        'Beginner' => '1',
        'Member' => '2',
        'Admin' => '3',
        'ActingFounder' => '4',
        'Founder' => '5',
    ];


}

