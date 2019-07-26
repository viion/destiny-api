<?php

namespace Destiny2\Api\Objects\GroupsV2\GroupBan;

/**
 * GroupBan
 *
 * No description
 */
class GroupBan
{

    const TYPE = 'object';

    public $groupId = [
        'type' => 'integer',
        'format' => 'int64',
    ];

    public $lastModifiedBy = [
        '$ref' => '#/components/schemas/User.UserInfoCard',
    ];

    public $createdBy = [
        '$ref' => '#/components/schemas/User.UserInfoCard',
    ];

    public $dateBanned = [
        'type' => 'string',
        'format' => 'date-time',
    ];

    public $dateExpires = [
        'type' => 'string',
        'format' => 'date-time',
    ];

    public $comment = [
        'type' => 'string',
    ];

    public $bungieNetUserInfo = [
        '$ref' => '#/components/schemas/User.UserInfoCard',
    ];

    public $destinyUserInfo = [
        '$ref' => '#/components/schemas/User.UserInfoCard',
    ];


}

