<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * ItemPerkVisibility
 */
class ItemPerkVisibility
{

    const NAME = 'Destiny.ItemPerkVisibility';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'Visible' => '0',
        'Disabled' => '1',
        'Hidden' => '2',
    ];


}

