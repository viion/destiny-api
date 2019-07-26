<?php

namespace Destiny2\Api\Enums\Destiny\DestinySocketCategoryStyle;

/**
 * DestinySocketCategoryStyle
 *
 * Represents the possible and known UI styles used by the game for rendering
 * Socket Categories.
 */
class DestinySocketCategoryStyle
{

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
        'Unknown' => '0',
        'Reusable' => '1',
        'Consumable' => '2',
        'Unlockable' => '3',
        'Intrinsic' => '4',
    ];


}

