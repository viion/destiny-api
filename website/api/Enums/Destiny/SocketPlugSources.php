<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * SocketPlugSources
 */
class SocketPlugSources
{

    const NAME = 'Destiny.SocketPlugSources';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '4',
        '8',
    ];

    const ENUMS = [
        'None' => '0',
        'InventorySourced' => '1',
        'ReusablePlugItems' => '2',
        'ProfilePlugSet' => '4',
        'CharacterPlugSet' => '8',
    ];


}

