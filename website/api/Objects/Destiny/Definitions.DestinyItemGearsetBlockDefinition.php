<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyItemGearsetBlockDefinition
 */
class Definitions.DestinyItemGearsetBlockDefinition
{

    const NAME = 'Destiny.Definitions.DestinyItemGearsetBlockDefinition';

    const TYPE = 'object';

    public $trackingValueMax = [
        'type' => 'integer',
        'description' => 'The maximum possible number of items that can be collected.',
        'format' => 'int32',
    ];

    public $itemList = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'The list of hashes for items in the gearset. Use them to look up DestinyInventoryItemDefinition entries for the items in the set.',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];


}

