<?php

namespace Destiny2\Api\Enums\Destiny\DestinySocketVisibility;

/**
 * DestinySocketVisibility
 *
 * No description
 */
class DestinySocketVisibility
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
    ];

    const ENUMS = [
        'Visible' => '0',
        'Hidden' => '1',
        'HiddenWhenEmpty' => '2',
        'HiddenIfNoPlugsAvailable' => '3',
    ];


}

