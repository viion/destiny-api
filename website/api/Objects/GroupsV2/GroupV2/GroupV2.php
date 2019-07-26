<?php

namespace Destiny2\Api\Objects\GroupsV2\GroupV2;

/**
 * GroupV2
 *
 * No description
 */
class GroupV2
{

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

    public $membershipIdCreated = [
        'type' => 'integer',
        'format' => 'int64',
    ];

    public $creationDate = [
        'type' => 'string',
        'format' => 'date-time',
    ];

    public $modificationDate = [
        'type' => 'string',
        'format' => 'date-time',
    ];

    public $about = [
        'type' => 'string',
    ];

    public $tags = [
        'type' => 'array',
        'items' => [
            'type' => 'string',
        ],
    ];

    public $memberCount = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $isPublic = [
        'type' => 'boolean',
    ];

    public $isPublicTopicAdminOnly = [
        'type' => 'boolean',
    ];

    public $motto = [
        'type' => 'string',
    ];

    public $allowChat = [
        'type' => 'boolean',
    ];

    public $isDefaultPostPublic = [
        'type' => 'boolean',
    ];

    public $chatSecurity = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/GroupsV2.ChatSecuritySetting',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $locale = [
        'type' => 'string',
    ];

    public $avatarImageIndex = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $homepage = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/GroupsV2.GroupHomepage',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $membershipOption = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/GroupsV2.MembershipOption',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $defaultPublicity = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/GroupsV2.GroupPostPublicity',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $theme = [
        'type' => 'string',
    ];

    public $bannerPath = [
        'type' => 'string',
    ];

    public $avatarPath = [
        'type' => 'string',
    ];

    public $conversationId = [
        'type' => 'integer',
        'format' => 'int64',
    ];

    public $enableInvitationMessagingForAdmins = [
        'type' => 'boolean',
    ];

    public $banExpireDate = [
        'type' => 'string',
        'format' => 'date-time',
        'nullable' => true,
    ];

    public $features = [
        '$ref' => '#/components/schemas/GroupsV2.GroupFeatures',
    ];

    public $clanInfo = [
        '$ref' => '#/components/schemas/GroupsV2.GroupV2ClanInfoAndInvestment',
    ];


}

