<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyVendorItemSocketOverride
 */
class Definitions.DestinyVendorItemSocketOverride
{

    const NAME = 'Destiny.Definitions.DestinyVendorItemSocketOverride';

    const TYPE = 'object';

    public $singleItemHash = [
        'type' => 'integer',
        'description' => 'If this is populated, the socket will be overridden with a specific plug.
If this isn\'t populated, it\'s being overridden by something more complicated that is only known by the Game Server and God, which means we can\'t tell you in advance what it\'ll be.',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];

    public $randomizedOptionsCount = [
        'type' => 'integer',
        'description' => 'If this is greater than -1, the number of randomized plugs on this socket will be set to this quantity instead of whatever it\'s set to by default.',
        'format' => 'int32',
    ];

    public $socketTypeHash = [
        'type' => 'integer',
        'description' => 'This appears to be used to select which socket ultimately gets the override defined here.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Sockets.DestinySocketTypeDefinition',
        ],
    ];


}

