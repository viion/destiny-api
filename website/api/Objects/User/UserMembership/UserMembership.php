<?php

namespace Destiny2\Api\Objects\User\UserMembership;

/**
 * UserMembership
 *
 * Very basic info about a user as returned by the Account server.
 */
class UserMembership
{

    const TYPE = 'object';

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

