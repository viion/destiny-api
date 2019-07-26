<?php

namespace Destiny2\Api\Objects\Destiny\Components\Vendors\DestinyPublicVendorSaleItemComponent;

/**
 * DestinyPublicVendorSaleItemComponent
 *
 * Has character-agnostic information about an item being sold by a vendor.
 * Note that if you want instance, stats, etc... data for the item, you'll have to
 * request additional components such as ItemInstances, ItemPerks etc... and
 * acquire them from the DestinyVendorResponse's "items" property. For most of
 * these, however, you'll have to ask for it in context of a specific character.
 */
class DestinyPublicVendorSaleItemComponent
{

    const TYPE = 'object';

    public $vendorItemIndex = [
        'type' => 'integer',
        'description' => 'The index into the DestinyVendorDefinition.itemList property. Note that this means Vendor data *is* Content Version dependent: make sure you have the latest content before you use Vendor data, or these indexes may mismatch. 
Most systems avoid this problem, but Vendors is one area where we are unable to reasonably avoid content dependency at the moment.',
        'format' => 'int32',
    ];

    public $itemHash = [
        'type' => 'integer',
        'description' => 'The hash of the item being sold, as a quick shortcut for looking up the DestinyInventoryItemDefinition of the sale item.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];

    public $overrideStyleItemHash = [
        'type' => 'integer',
        'description' => 'If populated, this is the hash of the item whose icon (and other secondary styles, but *not* the human readable strings) should override whatever icons/styles are on the item being sold.
If you don\'t do this, certain items whose styles are being overridden by socketed items - such as the "Recycle Shader" item - would show whatever their default icon/style is, and it wouldn\'t be pretty or look accurate.',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];

    public $quantity = [
        'type' => 'integer',
        'description' => 'How much of the item you\'ll be getting.',
        'format' => 'int32',
    ];

    public $costs = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.DestinyItemQuantity',
        ],
        'description' => 'A summary of the current costs of the item.',
    ];

    public $overrideNextRefreshDate = [
        'type' => 'string',
        'description' => 'If this item has its own custom date where it may be removed from the Vendor\'s rotation, this is that date.
Note that there\'s not actually any guarantee that it will go away: it could be chosen again and end up still being in the Vendor\'s sale items! But this is the next date where that test will occur, and is also the date that the game shows for availability on things like Bounties being sold. So it\'s the best we can give.',
        'format' => 'date-time',
        'nullable' => true,
    ];


}

