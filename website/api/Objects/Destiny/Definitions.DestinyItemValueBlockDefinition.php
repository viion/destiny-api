<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyItemValueBlockDefinition
 */
class Definitions.DestinyItemValueBlockDefinition
{

    const NAME = 'Destiny.Definitions.DestinyItemValueBlockDefinition';

    const TYPE = 'object';

    public $itemValue = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.DestinyItemQuantity',
        ],
        'description' => 'References to the items that make up this item\'s "value", and the quantity.',
    ];

    public $valueDescription = [
        'type' => 'string',
        'description' => 'If there\'s a localized text description of the value provided, this will be said description.',
    ];


}

