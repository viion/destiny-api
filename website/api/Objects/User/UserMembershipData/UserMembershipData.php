<?php

namespace Destiny2\Api\Objects\User\UserMembershipData;

/**
 * UserMembershipData
 *
 * No description
 */
class UserMembershipData
{

    const TYPE = 'object';

    public $destinyMemberships = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/User.UserInfoCard',
        ],
        'description' => 'this allows you to see destiny memberships that are visible and linked to this account (regardless of whether or not they have characters on the world server)',
    ];

    public $bungieNetUser = [
        '$ref' => '#/components/schemas/User.GeneralUser',
    ];


}

