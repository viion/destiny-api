<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyItemActionRequiredItemDefinition
 */
class Definitions.DestinyItemActionRequiredItemDefinition
{

    const NAME = 'Destiny.Definitions.DestinyItemActionRequiredItemDefinition';

    const TYPE = 'object';

    public $count = [
        'type' => 'integer',
        'description' => 'The minimum quantity of the item you have to have.',
        'format' => 'int32',
    ];

    public $itemHash = [
        'type' => 'integer',
        'description' => 'The hash identifier of the item you need to have. Use it to look up the DestinyInventoryItemDefinition for more info.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];

    public $deleteOnAction = [
        'type' => 'boolean',
        'description' => 'If true, the item/quantity will be deleted from your inventory when the action is performed. Otherwise, you\'ll retain these required items after the action is complete.',
    ];


}

