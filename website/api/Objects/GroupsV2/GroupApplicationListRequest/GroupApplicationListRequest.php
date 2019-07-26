<?php

namespace Destiny2\Api\Objects\GroupsV2\GroupApplicationListRequest;

/**
 * GroupApplicationListRequest
 *
 * No description
 */
class GroupApplicationListRequest
{

    const TYPE = 'object';

    public $memberships = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/User.UserMembership',
        ],
    ];

    public $message = [
        'type' => 'string',
    ];


}

