<?php

namespace Destiny2\Api\Objects\User\UserToUserContext;

/**
 * UserToUserContext
 *
 * No description
 */
class UserToUserContext
{

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

