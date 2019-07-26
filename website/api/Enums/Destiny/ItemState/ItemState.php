<?php

namespace Destiny2\Api\Enums\Destiny\ItemState;

/**
 * ItemState
 *
 * A flags enumeration/bitmask where each bit represents a different possible state
 * that the item can be in that may effect how the item is displayed to the user
 * and what actions can be performed against it.
 */
class ItemState
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '4',
    ];

    const ENUMS = [
        'None' => '0',
        'Locked' => '1',
        'Tracked' => '2',
        'Masterwork' => '4',
    ];


}

