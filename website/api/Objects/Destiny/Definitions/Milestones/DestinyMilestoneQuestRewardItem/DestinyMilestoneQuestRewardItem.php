<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Milestones\DestinyMilestoneQuestRewardItem;

/**
 * DestinyMilestoneQuestRewardItem
 *
 * A subclass of DestinyItemQuantity, that provides not just the item and its
 * quantity but also information that BNet can - at some point - use internally to
 * provide more robust runtime information about the item's qualities.
 * If you want it, please ask! We're just out of time to wire it up right now. Or a
 * clever person just may do it with our existing endpoints.
 */
class DestinyMilestoneQuestRewardItem
{

    const TYPE = 'object';

    public $vendorHash = [
        'type' => 'integer',
        'description' => 'The quest reward item *may* be associated with a vendor. If so, this is that vendor. Use this hash to look up the DestinyVendorDefinition.',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorDefinition',
        ],
    ];

    public $vendorItemIndex = [
        'type' => 'integer',
        'description' => 'The quest reward item *may* be associated with a vendor. If so, this is the index of the item being sold, which we can use at runtime to find instanced item information for the reward item.',
        'format' => 'int32',
        'nullable' => true,
    ];

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

