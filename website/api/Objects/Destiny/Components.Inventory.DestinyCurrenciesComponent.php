<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Components.Inventory.DestinyCurrenciesComponent
 */
class Components.Inventory.DestinyCurrenciesComponent
{

    const NAME = 'Destiny.Components.Inventory.DestinyCurrenciesComponent';

    const TYPE = 'object';

    public $itemQuantities = [
        'type' => 'object',
        'additionalProperties' => [
            'type' => 'integer',
            'format' => 'int32',
        ],
        'description' => 'A dictionary - keyed by the item\'s hash identifier (DestinyInventoryItemDefinition), and whose value is the amount of that item you have across all available inventory buckets for purchasing.
This allows you to see whether the requesting character can afford any given purchase/action without having to re-create this list itself.',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];


}

