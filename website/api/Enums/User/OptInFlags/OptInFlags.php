<?php

namespace Destiny2\Api\Enums\User\OptInFlags;

/**
 * OptInFlags
 *
 * No description
 */
class OptInFlags
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int64';

    const ENUMS_ALLOWED = [
        '1',
        '2',
        '4',
        '8',
        '16',
        '32',
    ];

    const ENUMS = [
        'Newsletter' => '1',
        'System' => '2',
        'Marketing' => '4',
        'UserResearch' => '8',
        'CustomerService' => '16',
        'Social' => '32',
    ];


}

