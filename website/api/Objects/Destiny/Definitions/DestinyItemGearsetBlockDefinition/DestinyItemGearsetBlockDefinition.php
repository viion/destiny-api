<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyItemGearsetBlockDefinition;

/**
 * DestinyItemGearsetBlockDefinition
 *
 * If an item has a related gearset, this is the list of items in that set, and an
 * unlock expression that evaluates to a number representing the progress toward
 * gearset completion (a very rare use for unlock expressions!)
 */
class DestinyItemGearsetBlockDefinition
{

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

