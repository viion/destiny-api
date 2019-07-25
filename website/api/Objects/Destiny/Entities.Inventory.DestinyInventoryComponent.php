<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Entities.Inventory.DestinyInventoryComponent
 */
class Entities.Inventory.DestinyInventoryComponent
{

    const NAME = 'Destiny.Entities.Inventory.DestinyInventoryComponent';

    const TYPE = 'object';

    public $items = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Entities.Items.DestinyItemComponent',
        ],
        'description' => 'The items in this inventory. If you care to bucket them, use the item\'s bucketHash property to group them.',
    ];


}

