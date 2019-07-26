<?php

namespace Destiny2\Api\Objects\GroupsV2\GroupFeatures;

/**
 * GroupFeatures
 *
 * No description
 */
class GroupFeatures
{

    const TYPE = 'object';

    public $maximumMembers = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $maximumMembershipsOfGroupType = [
        'type' => 'integer',
        'description' => 'Maximum number of groups of this type a typical membership may join. For example, a user may join about 50 General groups with their Bungie.net account. They may join one clan per Destiny membership.',
        'format' => 'int32',
    ];

    public $capabilities = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/GroupsV2.Capabilities',
        ],
        'x-enum-is-bitmask' => true,
    ];

    public $membershipTypes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'description' => 'The types of membership the Accounts system supports. This is the external facing enum used in place of the internal-only Bungie.SharedDefinitions.MembershipType.',
            'format' => 'int32',
            'x-enum-reference' => [
                '$ref' => '#/components/schemas/BungieMembershipType',
            ],
            'x-enum-is-bitmask' => false,
        ],
    ];

    public $invitePermissionOverride = [
        'type' => 'boolean',
        'description' => 'Minimum Member Level allowed to invite new members to group
Always Allowed: Founder, Acting Founder
True means admins have this power, false means they don\'t
Default is false for clans, true for groups.',
    ];

    public $updateCulturePermissionOverride = [
        'type' => 'boolean',
        'description' => 'Minimum Member Level allowed to update group culture
Always Allowed: Founder, Acting Founder
True means admins have this power, false means they don\'t
Default is false for clans, true for groups.',
    ];

    public $hostGuidedGamePermissionOverride = [
        'type' => 'integer',
        'description' => 'Minimum Member Level allowed to host guided games
Always Allowed: Founder, Acting Founder, Admin
Allowed Overrides: None, Member, Beginner
Default is Member for clans, None for groups, although this means nothing for groups.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/GroupsV2.HostGuidedGamesPermissionLevel',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $updateBannerPermissionOverride = [
        'type' => 'boolean',
        'description' => 'Minimum Member Level allowed to update banner
Always Allowed: Founder, Acting Founder
True means admins have this power, false means they don\'t
Default is false for clans, true for groups.',
    ];

    public $joinLevel = [
        'type' => 'integer',
        'description' => 'Level to join a member at when accepting an invite, application, or joining an open clan
Default is Beginner.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/GroupsV2.RuntimeGroupMemberType',
        ],
        'x-enum-is-bitmask' => false,
    ];


}

