<?php

namespace Destiny2\Api\Objects\GroupsV2\GroupMembership;

/**
 * GroupMembership
 *
 * No description
 */
class GroupMembership
{

    const TYPE = 'object';

    public $member = [
        '$ref' => '#/components/schemas/GroupsV2.GroupMember',
    ];

    public $group = [
        '$ref' => '#/components/schemas/GroupsV2.GroupV2',
    ];


}

