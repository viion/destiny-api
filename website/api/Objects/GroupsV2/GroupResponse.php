<?php

namespace Destiny2\Api\Objects\GroupsV2;

/**
 * GroupResponse
 */
class GroupResponse
{

    const NAME = 'GroupsV2.GroupResponse';

    const TYPE = 'object';

    public $detail = [
        '$ref' => '#/components/schemas/GroupsV2.GroupV2',
    ];

    public $founder = [
        '$ref' => '#/components/schemas/GroupsV2.GroupMember',
    ];

    public $alliedIds = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'int64',
        ],
    ];

    public $parentGroup = [
        '$ref' => '#/components/schemas/GroupsV2.GroupV2',
    ];

    public $allianceStatus = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/GroupsV2.GroupAllianceStatus',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $groupJoinInviteCount = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $currentUserMemberMap = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/GroupsV2.GroupMember',
        ],
        'description' => 'This property will be populated if the authenticated user is a member of the group. Note that because of account linking, a user can sometimes be part of a clan more than once. As such, this returns the highest member type available.',
        'x-dictionary-key' => [
            'type' => 'integer',
            'description' => 'The types of membership the Accounts system supports. This is the external facing enum used in place of the internal-only Bungie.SharedDefinitions.MembershipType.',
            'format' => 'int32',
            'x-enum-reference' => [
                '$ref' => '#/components/schemas/BungieMembershipType',
            ],
            'x-enum-is-bitmask' => false,
        ],
    ];

    public $currentUserPotentialMemberMap = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/GroupsV2.GroupPotentialMember',
        ],
        'description' => 'This property will be populated if the authenticated user is an applicant or has an outstanding invitation to join. Note that because of account linking, a user can sometimes be part of a clan more than once.',
        'x-dictionary-key' => [
            'type' => 'integer',
            'description' => 'The types of membership the Accounts system supports. This is the external facing enum used in place of the internal-only Bungie.SharedDefinitions.MembershipType.',
            'format' => 'int32',
            'x-enum-reference' => [
                '$ref' => '#/components/schemas/BungieMembershipType',
            ],
            'x-enum-is-bitmask' => false,
        ],
    ];


}

