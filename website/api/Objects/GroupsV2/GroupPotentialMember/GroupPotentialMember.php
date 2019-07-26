<?php

namespace Destiny2\Api\Objects\GroupsV2\GroupPotentialMember;

/**
 * GroupPotentialMember
 *
 * No description
 */
class GroupPotentialMember
{

    const TYPE = 'object';

    public $potentialStatus = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/GroupsV2.GroupPotentialMemberStatus',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $groupId = [
        'type' => 'integer',
        'format' => 'int64',
    ];

    public $destinyUserInfo = [
        '$ref' => '#/components/schemas/User.UserInfoCard',
    ];

    public $bungieNetUserInfo = [
        '$ref' => '#/components/schemas/User.UserInfoCard',
    ];

    public $joinDate = [
        'type' => 'string',
        'format' => 'date-time',
    ];


}

