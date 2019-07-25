<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * DestinyItemQuantity
 */
class DestinyItemQuantity
{

    const NAME = 'Destiny.DestinyItemQuantity';

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

