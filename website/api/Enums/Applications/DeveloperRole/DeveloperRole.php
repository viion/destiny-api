<?php

namespace Destiny2\Api\Enums\Applications\DeveloperRole;

/**
 * DeveloperRole
 *
 * No description
 */
class DeveloperRole
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'None' => '0',
        'Owner' => '1',
        'TeamMember' => '2',
    ];


}

