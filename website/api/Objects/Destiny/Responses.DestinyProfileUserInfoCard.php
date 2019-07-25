<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Responses.DestinyProfileUserInfoCard
 */
class Responses.DestinyProfileUserInfoCard
{

    const NAME = 'Destiny.Responses.DestinyProfileUserInfoCard';

    const TYPE = 'object';

    public $dateLastPlayed = [
        'type' => 'string',
        'format' => 'date-time',
    ];

    public $applicableMembershipTypes = [
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
        'description' => 'The list of membership types/Platforms that this Destiny Account can be used on - either its own original platform, or any subservient platforms hooked up to it through Cross Save.',
    ];

    public $isOverridden = [
        'type' => 'boolean',
        'description' => 'If this profile is being overridden/obscured by Cross Save, this will be set to true. We will still return the profile for display purposes where users need to know the info: it is up to any given area of the app/site to determine if this profile should still be shown.',
    ];

    public $isCrossSavePrimary = [
        'type' => 'boolean',
        'description' => 'If true, this account is hooked up as the "Primary" cross save account for one or more platforms.',
    ];

    public $supplementalDisplayName = [
        'type' => 'string',
        'description' => 'A platform specific additional display name - ex: psn Real Name, bnet Unique Name, etc.',
    ];

    public $iconPath = [
        'type' => 'string',
        'description' => 'URL the Icon if available.',
    ];

    public $membershipType = [
        'type' => 'integer',
        'description' => 'Type of the membership.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/BungieMembershipType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $membershipId = [
        'type' => 'integer',
        'description' => 'Membership ID as they user is known in the Accounts service',
        'format' => 'int64',
    ];

    public $displayName = [
        'type' => 'string',
        'description' => 'Display Name the player has chosen for themselves. The display name is optional when the data type is used as input to a platform API.',
    ];


}

