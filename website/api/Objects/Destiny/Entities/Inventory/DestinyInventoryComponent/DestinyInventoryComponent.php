<?php

namespace Destiny2\Api\Objects\Destiny\Entities\Inventory\DestinyInventoryComponent;

/**
 * DestinyInventoryComponent
 *
 * A list of minimal information for items in an inventory: be it a character's
 * inventory, or a Profile's inventory. (Note that the Vault is a collection of
 * inventory buckets in the Profile's inventory)
 * Inventory Items returned here are in a flat list, but importantly they have a
 * bucketHash property that indicates the specific inventory bucket that is holding
 * them. These buckets constitute things like the separate sections of the Vault,
 * the user's inventory slots, etc. See DestinyInventoryBucketDefinition for more
 * info.
 */
class DestinyInventoryComponent
{

    const TYPE = 'object';

    public $items = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Entities.Items.DestinyItemComponent',
        ],
        'description' => 'The items in this inventory. If you care to bucket them, use the item\'s bucketHash property to group them.',
    ];


}

