<?php

namespace Destiny2\Api\Enums\GroupsV2\ChatSecuritySetting;

/**
 * ChatSecuritySetting
 *
 * No description
 */
class ChatSecuritySetting
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
    ];

    const ENUMS = [
        'Group' => '0',
        'Admins' => '1',
    ];


}

