<?php

namespace Destiny2\Api\Objects\GroupsV2;

/**
 * GroupPotentialMembership
 */
class GroupPotentialMembership
{

    const NAME = 'GroupsV2.GroupPotentialMembership';

    const TYPE = 'object';

    public $member = [
        '$ref' => '#/components/schemas/GroupsV2.GroupPotentialMember',
    ];

    public $group = [
        '$ref' => '#/components/schemas/GroupsV2.GroupV2',
    ];


}

