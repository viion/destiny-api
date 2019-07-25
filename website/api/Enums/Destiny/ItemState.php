<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * ItemState
 */
class ItemState
{

    const NAME = 'Destiny.ItemState';

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

