<?php

namespace Destiny2\Api\Enums\Destiny\SocketPlugSources;

/**
 * SocketPlugSources
 *
 * Indicates how a socket is populated, and where you should look for valid plug
 * data. This is a flags enumeration/bitmask field, as you may have to look in
 * multiple sources across multiple components for valid plugs.
 */
class SocketPlugSources
{

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

