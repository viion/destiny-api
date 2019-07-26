<?php

namespace Destiny2\Api\Objects\GroupsV2\GroupMembershipBase;

/**
 * GroupMembershipBase
 *
 * No description
 */
class GroupMembershipBase
{

    const TYPE = 'object';

    public $group = [
        '$ref' => '#/components/schemas/GroupsV2.GroupV2',
    ];


}

