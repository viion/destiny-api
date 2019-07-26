<?php

namespace Destiny2\Api\Enums\Destiny\DestinyScope;

/**
 * DestinyScope
 *
 * There's a lot of places where we need to know scope on more than just a profile
 * or character level. For everything else, there's this more generic sense of
 * scope.
 */
class DestinyScope
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
    ];

    const ENUMS = [
        'Profile' => '0',
        'Character' => '1',
    ];


}

