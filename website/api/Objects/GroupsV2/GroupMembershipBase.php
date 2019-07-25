<?php

namespace Destiny2\Api\Objects\GroupsV2;

/**
 * GroupMembershipBase
 */
class GroupMembershipBase
{

    const NAME = 'GroupsV2.GroupMembershipBase';

    const TYPE = 'object';

    public $group = [
        '$ref' => '#/components/schemas/GroupsV2.GroupV2',
    ];


}

