<?php

namespace Destiny2\Api\Objects\GroupsV2\GroupBanRequest;

/**
 * GroupBanRequest
 *
 * No description
 */
class GroupBanRequest
{

    const TYPE = 'object';

    public $comment = [
        'type' => 'string',
    ];

    public $length = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Ignores.IgnoreLength',
        ],
        'x-enum-is-bitmask' => false,
    ];


}

