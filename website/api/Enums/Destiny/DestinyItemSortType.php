<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * DestinyItemSortType
 */
class DestinyItemSortType
{

    const NAME = 'Destiny.DestinyItemSortType';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'ItemId' => '0',
        'Timestamp' => '1',
        'StackSize' => '2',
    ];


}

