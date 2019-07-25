<?php

namespace Destiny2\Api\Enums\GroupsV2;

/**
 * ChatSecuritySetting
 */
class ChatSecuritySetting
{

    const NAME = 'GroupsV2.ChatSecuritySetting';

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

