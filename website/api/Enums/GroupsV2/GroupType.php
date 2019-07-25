<?php

namespace Destiny2\Api\Enums\GroupsV2;

/**
 * GroupType
 */
class GroupType
{

    const NAME = 'GroupsV2.GroupType';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
    ];

    const ENUMS = [
        'General' => '0',
        'Clan' => '1',
    ];


}

