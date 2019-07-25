<?php

namespace Destiny2\Api\Enums\GroupsV2;

/**
 * GroupApplicationResolveState
 */
class GroupApplicationResolveState
{

    const NAME = 'GroupsV2.GroupApplicationResolveState';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
    ];

    const ENUMS = [
        'Unresolved' => '0',
        'Accepted' => '1',
        'Denied' => '2',
        'Rescinded' => '3',
    ];


}

