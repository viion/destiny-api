<?php

namespace Destiny2\Api\Objects\User;

/**
 * UserInfoCard
 */
class UserInfoCard
{

    const NAME = 'User.UserInfoCard';

    const TYPE = 'object';

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

