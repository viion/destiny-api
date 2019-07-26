<?php

namespace Destiny2\Api\Objects\GroupsV2\GroupUserBase;

/**
 * GroupUserBase
 *
 * No description
 */
class GroupUserBase
{

    const TYPE = 'object';

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

