<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * ItemLocation
 */
class ItemLocation
{

    const NAME = 'Destiny.ItemLocation';

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
        'Inventory' => '1',
        'Vault' => '2',
        'Vendor' => '3',
        'Postmaster' => '4',
    ];


}

