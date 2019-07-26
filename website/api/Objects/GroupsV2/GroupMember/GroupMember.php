<?php

namespace Destiny2\Api\Objects\GroupsV2\GroupMember;

/**
 * GroupMember
 *
 * No description
 */
class GroupMember
{

    const TYPE = 'object';

    public $memberType = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/GroupsV2.RuntimeGroupMemberType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $isOnline = [
        'type' => 'boolean',
    ];

    public $lastOnlineStatusChange = [
        'type' => 'integer',
        'format' => 'int64',
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

