<?php

namespace Destiny2\Api\Enums\Ignores\IgnoreStatus;

/**
 * IgnoreStatus
 *
 * No description
 */
class IgnoreStatus
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '4',
        '8',
        '16',
        '32',
    ];

    const ENUMS = [
        'NotIgnored' => '0',
        'IgnoredUser' => '1',
        'IgnoredGroup' => '2',
        'IgnoredByGroup' => '4',
        'IgnoredPost' => '8',
        'IgnoredTag' => '16',
        'IgnoredGlobal' => '32',
    ];


}

