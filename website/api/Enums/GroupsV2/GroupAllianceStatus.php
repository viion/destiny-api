<?php

namespace Destiny2\Api\Enums\GroupsV2;

/**
 * GroupAllianceStatus
 */
class GroupAllianceStatus
{

    const NAME = 'GroupsV2.GroupAllianceStatus';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'Unallied' => '0',
        'Parent' => '1',
        'Child' => '2',
    ];


}

