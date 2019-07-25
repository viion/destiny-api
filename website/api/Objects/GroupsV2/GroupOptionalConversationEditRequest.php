<?php

namespace Destiny2\Api\Objects\GroupsV2;

/**
 * GroupOptionalConversationEditRequest
 */
class GroupOptionalConversationEditRequest
{

    const NAME = 'GroupsV2.GroupOptionalConversationEditRequest';

    const TYPE = 'object';

    public $chatEnabled = [
        'type' => 'boolean',
        'nullable' => true,
    ];

    public $chatName = [
        'type' => 'string',
    ];

    public $chatSecurity = [
        'enum' => [
            '0',
            '1',
        ],
        'type' => 'integer',
        'format' => 'int32',
        'nullable' => true,
        'x-enum-values' => [
            [
                'numericValue' => '0',
                'identifier' => 'Group',
            ],
            [
                'numericValue' => '1',
                'identifier' => 'Admins',
            ],
        ],
        'x-enum-is-bitmask' => false,
    ];


}

