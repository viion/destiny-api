<?php

namespace Destiny2\Api\Objects\GroupsV2\GroupOptionsEditAction;

/**
 * GroupOptionsEditAction
 *
 * No description
 */
class GroupOptionsEditAction
{

    const TYPE = 'object';

    public $InvitePermissionOverride = [
        'type' => 'boolean',
        'description' => 'Minimum Member Level allowed to invite new members to group
Always Allowed: Founder, Acting Founder
True means admins have this power, false means they don\'t
Default is false for clans, true for groups.',
        'nullable' => true,
    ];

    public $UpdateCulturePermissionOverride = [
        'type' => 'boolean',
        'description' => 'Minimum Member Level allowed to update group culture
Always Allowed: Founder, Acting Founder
True means admins have this power, false means they don\'t
Default is false for clans, true for groups.',
        'nullable' => true,
    ];

    public $HostGuidedGamePermissionOverride = [
        'enum' => [
            '0',
            '1',
            '2',
        ],
        'type' => 'integer',
        'description' => 'Minimum Member Level allowed to host guided games
Always Allowed: Founder, Acting Founder, Admin
Allowed Overrides: None, Member, Beginner
Default is Member for clans, None for groups, although this means nothing for groups.',
        'format' => 'int32',
        'nullable' => true,
        'x-enum-values' => [
            [
                'numericValue' => '0',
                'identifier' => 'None',
            ],
            [
                'numericValue' => '1',
                'identifier' => 'Beginner',
            ],
            [
                'numericValue' => '2',
                'identifier' => 'Member',
            ],
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $UpdateBannerPermissionOverride = [
        'type' => 'boolean',
        'description' => 'Minimum Member Level allowed to update banner
Always Allowed: Founder, Acting Founder
True means admins have this power, false means they don\'t
Default is false for clans, true for groups.',
        'nullable' => true,
    ];

    public $JoinLevel = [
        'enum' => [
            '0',
            '1',
            '2',
            '3',
            '4',
            '5',
        ],
        'type' => 'integer',
        'description' => 'Level to join a member at when accepting an invite, application, or joining an open clan
Default is Beginner.',
        'format' => 'int32',
        'nullable' => true,
        'x-enum-values' => [
            [
                'numericValue' => '0',
                'identifier' => 'None',
            ],
            [
                'numericValue' => '1',
                'identifier' => 'Beginner',
            ],
            [
                'numericValue' => '2',
                'identifier' => 'Member',
            ],
            [
                'numericValue' => '3',
                'identifier' => 'Admin',
            ],
            [
                'numericValue' => '4',
                'identifier' => 'ActingFounder',
            ],
            [
                'numericValue' => '5',
                'identifier' => 'Founder',
            ],
        ],
        'x-enum-is-bitmask' => false,
    ];


}

