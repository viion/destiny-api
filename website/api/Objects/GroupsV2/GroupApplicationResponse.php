<?php

namespace Destiny2\Api\Objects\GroupsV2;

/**
 * GroupApplicationResponse
 */
class GroupApplicationResponse
{

    const NAME = 'GroupsV2.GroupApplicationResponse';

    const TYPE = 'object';

    public $resolution = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/GroupsV2.GroupApplicationResolveState',
        ],
        'x-enum-is-bitmask' => false,
    ];


}

