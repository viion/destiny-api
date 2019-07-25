<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * ItemBindStatus
 */
class ItemBindStatus
{

    const NAME = 'Destiny.ItemBindStatus';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
    ];

    const ENUMS = [
        'NotBound' => '0',
        'BoundToCharacter' => '1',
        'BoundToAccount' => '2',
        'BoundToGuild' => '3',
    ];


}

