<?php

namespace Destiny2\Api\Enums\Applications;

/**
 * ApplicationStatus
 */
class ApplicationStatus
{

    const NAME = 'Applications.ApplicationStatus';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
        '4',
    ];

    const ENUMS = [
        'None' => '0',
        'Private' => '1',
        'Public' => '2',
        'Disabled' => '3',
        'Blocked' => '4',
    ];


}

