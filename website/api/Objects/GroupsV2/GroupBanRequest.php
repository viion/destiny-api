<?php

namespace Destiny2\Api\Objects\GroupsV2;

/**
 * GroupBanRequest
 */
class GroupBanRequest
{

    const NAME = 'GroupsV2.GroupBanRequest';

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

