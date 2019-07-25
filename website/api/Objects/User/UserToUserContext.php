<?php

namespace Destiny2\Api\Objects\User;

/**
 * UserToUserContext
 */
class UserToUserContext
{

    const NAME = 'User.UserToUserContext';

    const TYPE = 'object';

    public $isFollowing = [
        'type' => 'boolean',
    ];

    public $ignoreStatus = [
        '$ref' => '#/components/schemas/Ignores.IgnoreResponse',
    ];

    public $globalIgnoreEndDate = [
        'type' => 'string',
        'format' => 'date-time',
        'nullable' => true,
    ];


}

