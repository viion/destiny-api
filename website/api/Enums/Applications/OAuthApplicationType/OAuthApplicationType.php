<?php

namespace Destiny2\Api\Enums\Applications\OAuthApplicationType;

/**
 * OAuthApplicationType
 *
 * No description
 */
class OAuthApplicationType
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
        'Confidential' => '1',
        'Public' => '2',
    ];


}

