<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyVendorInventoryFlyoutBucketDefinition;

/**
 * DestinyVendorInventoryFlyoutBucketDefinition
 *
 * Information about a single inventory bucket in a vendor flyout UI and how it is
 * shown.
 */
class DestinyVendorInventoryFlyoutBucketDefinition
{

    const TYPE = 'object';

    public $collapsible = [
        'type' => 'boolean',
        'description' => 'If true, the inventory bucket should be able to be collapsed visually.',
    ];

    public $inventoryBucketHash = [
        'type' => 'integer',
        'description' => 'The inventory bucket whose contents should be shown.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryBucketDefinition',
        ],
    ];

    public $sortItemsBy = [
        'type' => 'integer',
        'description' => 'The methodology to use for sorting items from the flyout.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyItemSortType',
        ],
        'x-enum-is-bitmask' => false,
    ];


}

