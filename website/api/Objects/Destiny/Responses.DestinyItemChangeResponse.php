<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Responses.DestinyItemChangeResponse
 */
class Responses.DestinyItemChangeResponse
{

    const NAME = 'Destiny.Responses.DestinyItemChangeResponse';

    const TYPE = 'object';

    public $item = [
        '$ref' => '#/components/schemas/Destiny.Responses.DestinyItemResponse',
    ];

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

