<?php

namespace Destiny2\Api\Objects\User\UserInfoCard;

/**
 * UserInfoCard
 *
 * This contract supplies basic information commonly used to display a minimal
 * amount of information about a user. Take care to not add more properties here
 * unless the property applies in all (or at least the majority) of the situations
 * where UserInfoCard is used. Avoid adding game specific or platform specific
 * details here. In cases where UserInfoCard is a subset of the data needed in a
 * contract, use UserInfoCard as a property of other contracts.
 */
class UserInfoCard
{

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

