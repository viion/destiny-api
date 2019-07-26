<?php

namespace Destiny2\Api\Objects\GroupsV2\GroupPotentialMembership;

/**
 * GroupPotentialMembership
 *
 * No description
 */
class GroupPotentialMembership
{

    const TYPE = 'object';

    public $member = [
        '$ref' => '#/components/schemas/GroupsV2.GroupPotentialMember',
    ];

    public $group = [
        '$ref' => '#/components/schemas/GroupsV2.GroupV2',
    ];


}

