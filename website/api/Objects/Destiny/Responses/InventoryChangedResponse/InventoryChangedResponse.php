<?php

namespace Destiny2\Api\Objects\Destiny\Responses\InventoryChangedResponse;

/**
 * InventoryChangedResponse
 *
 * A response containing all of the components for all requested vendors.
 */
class InventoryChangedResponse
{

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

