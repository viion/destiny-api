<?php

namespace Destiny2\Api\Objects\GroupsV2;

/**
 * GroupV2Card
 */
class GroupV2Card
{

    const NAME = 'GroupsV2.GroupV2Card';

    const TYPE = 'object';

    public $groupId = [
        'type' => 'integer',
        'format' => 'int64',
    ];

    public $name = [
        'type' => 'string',
    ];

    public $groupType = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/GroupsV2.GroupType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $creationDate = [
        'type' => 'string',
        'format' => 'date-time',
    ];

    public $about = [
        'type' => 'string',
    ];

    public $motto = [
        'type' => 'string',
    ];

    public $memberCount = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $locale = [
        'type' => 'string',
    ];

    public $membershipOption = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/GroupsV2.MembershipOption',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $capabilities = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/GroupsV2.Capabilities',
        ],
        'x-enum-is-bitmask' => true,
    ];

    public $clanInfo = [
        '$ref' => '#/components/schemas/GroupsV2.GroupV2ClanInfo',
    ];

    public $avatarPath = [
        'type' => 'string',
    ];

    public $theme = [
        'type' => 'string',
    ];


}

