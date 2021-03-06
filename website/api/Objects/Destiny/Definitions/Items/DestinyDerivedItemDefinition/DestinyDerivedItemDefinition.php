<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Items\DestinyDerivedItemDefinition;

/**
 * DestinyDerivedItemDefinition
 *
 * This is a reference to, and summary data for, a specific item that you can get
 * as a result of Using or Acquiring some other Item (For example, this could be
 * summary information for an Emote that you can get by opening an an Eververse
 * Box) See DestinyDerivedItemCategoryDefinition for more information.
 */
class DestinyDerivedItemDefinition
{

    const TYPE = 'object';

    public $itemHash = [
        'type' => 'integer',
        'description' => 'The hash for the DestinyInventoryItemDefinition of this derived item, if there is one. Sometimes we are given this information as a manual override, in which case there won\'t be an actual DestinyInventoryItemDefinition for what we display, but you can still show the strings from this object itself.',
        'format' => 'uint32',
        'nullable' => true,
    ];

    public $itemName = [
        'type' => 'string',
        'description' => 'The name of the derived item.',
    ];

    public $itemDetail = [
        'type' => 'string',
        'description' => 'Additional details about the derived item, in addition to the description.',
    ];

    public $itemDescription = [
        'type' => 'string',
        'description' => 'A brief description of the item.',
    ];

    public $iconPath = [
        'type' => 'string',
        'description' => 'An icon for the item.',
    ];

    public $vendorItemIndex = [
        'type' => 'integer',
        'description' => 'If the item was derived from a "Preview Vendor", this will be an index into the DestinyVendorDefinition\'s itemList property. Otherwise, -1.',
        'format' => 'int32',
    ];


}

