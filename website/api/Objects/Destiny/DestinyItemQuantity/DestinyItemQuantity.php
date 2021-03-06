<?php

namespace Destiny2\Api\Objects\Destiny\DestinyItemQuantity;

/**
 * DestinyItemQuantity
 *
 * Used in a number of Destiny contracts to return data about an item stack and its
 * quantity. Can optionally return an itemInstanceId if the item is instanced - in
 * which case, the quantity returned will be 1. If it's not... uh, let me know
 * okay? Thanks.
 */
class DestinyItemQuantity
{

    const TYPE = 'object';

    public $itemHash = [
        'type' => 'integer',
        'description' => 'The hash identifier for the item in question. Use it to look up the item\'s DestinyInventoryItemDefinition.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];

    public $itemInstanceId = [
        'type' => 'integer',
        'description' => 'If this quantity is referring to a specific instance of an item, this will have the item\'s instance ID. Normally, this will be null.',
        'format' => 'int64',
        'nullable' => true,
    ];

    public $quantity = [
        'type' => 'integer',
        'description' => 'The amount of the item needed/available depending on the context of where DestinyItemQuantity is being used.',
        'format' => 'int32',
    ];


}

