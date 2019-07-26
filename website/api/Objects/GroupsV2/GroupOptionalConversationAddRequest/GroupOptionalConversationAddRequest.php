<?php

namespace Destiny2\Api\Objects\GroupsV2\GroupOptionalConversationAddRequest;

/**
 * GroupOptionalConversationAddRequest
 *
 * No description
 */
class GroupOptionalConversationAddRequest
{

    const TYPE = 'object';

    public $chatName = [
        'type' => 'string',
    ];

    public $chatSecurity = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/GroupsV2.ChatSecuritySetting',
        ],
        'x-enum-is-bitmask' => false,
    ];


}

