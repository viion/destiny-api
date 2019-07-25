<?php

namespace Destiny2\Api\Objects\GroupsV2;

/**
 * GroupNameSearchRequest
 */
class GroupNameSearchRequest
{

    const NAME = 'GroupsV2.GroupNameSearchRequest';

    const TYPE = 'object';

    public $groupName = [
        'type' => 'string',
    ];

    public $groupType = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/GroupsV2.GroupType',
        ],
        'x-enum-is-bitmask' => false,
    ];


}

