<?php

namespace Destiny2\Api\Objects\GroupsV2\GroupMemberApplication;

/**
 * GroupMemberApplication
 *
 * No description
 */
class GroupMemberApplication
{

    const TYPE = 'object';

    public $groupId = [
        'type' => 'integer',
        'format' => 'int64',
    ];

    public $creationDate = [
        'type' => 'string',
        'format' => 'date-time',
    ];

    public $resolveState = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/GroupsV2.GroupApplicationResolveState',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $resolveDate = [
        'type' => 'string',
        'format' => 'date-time',
        'nullable' => true,
    ];

    public $resolvedByMembershipId = [
        'type' => 'integer',
        'format' => 'int64',
        'nullable' => true,
    ];

    public $requestMessage = [
        'type' => 'string',
    ];

    public $resolveMessage = [
        'type' => 'string',
    ];

    public $destinyUserInfo = [
        '$ref' => '#/components/schemas/User.UserInfoCard',
    ];

    public $bungieNetUserInfo = [
        '$ref' => '#/components/schemas/User.UserInfoCard',
    ];


}

