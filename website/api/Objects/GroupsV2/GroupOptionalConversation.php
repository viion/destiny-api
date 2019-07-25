<?php

namespace Destiny2\Api\Objects\GroupsV2;

/**
 * GroupOptionalConversation
 */
class GroupOptionalConversation
{

    const NAME = 'GroupsV2.GroupOptionalConversation';

    const TYPE = 'object';

    public $groupId = [
        'type' => 'integer',
        'format' => 'int64',
    ];

    public $conversationId = [
        'type' => 'integer',
        'format' => 'int64',
    ];

    public $chatEnabled = [
        'type' => 'boolean',
    ];

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

