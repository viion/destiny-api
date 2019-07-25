<?php

namespace Destiny2\Api\Enums\GroupsV2;

/**
 * HostGuidedGamesPermissionLevel
 */
class HostGuidedGamesPermissionLevel
{

    const NAME = 'GroupsV2.HostGuidedGamesPermissionLevel';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'None' => '0',
        'Beginner' => '1',
        'Member' => '2',
    ];


}

