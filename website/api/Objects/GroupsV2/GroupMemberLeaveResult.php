<?php

namespace Destiny2\Api\Objects\GroupsV2;

/**
 * GroupMemberLeaveResult
 */
class GroupMemberLeaveResult
{

    const NAME = 'GroupsV2.GroupMemberLeaveResult';

    const TYPE = 'object';

    public $group = [
        '$ref' => '#/components/schemas/GroupsV2.GroupV2',
    ];

    public $groupDeleted = [
        'type' => 'boolean',
    ];


}

