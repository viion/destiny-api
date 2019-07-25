<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Responses.InventoryChangedResponse
 */
class Responses.InventoryChangedResponse
{

    const NAME = 'Destiny.Responses.InventoryChangedResponse';

    const TYPE = 'object';

    public $addedInventoryItems = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Entities.Items.DestinyItemComponent',
        ],
        'description' => 'Items that appeared in the inventory possibly as a result of an action.',
    ];

    public $removedInventoryItems = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Entities.Items.DestinyItemComponent',
        ],
        'description' => 'Items that disappeared from the inventory possibly as a result of an action.',
    ];


}

