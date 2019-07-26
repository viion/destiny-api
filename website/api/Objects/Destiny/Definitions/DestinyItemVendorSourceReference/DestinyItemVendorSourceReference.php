<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyItemVendorSourceReference;

/**
 * DestinyItemVendorSourceReference
 *
 * Represents that a vendor could sell this item, and provides a quick link to that
 * vendor and sale item.
 *  Note that we do not and cannot make a guarantee that the vendor will ever
 * *actually* sell this item, only that the Vendor has a definition that indicates
 * it *could* be sold.
 *  Note also that a vendor may sell the same item in multiple "ways", which means
 * there may be multiple vendorItemIndexes for a single Vendor hash.
 */
class DestinyItemVendorSourceReference
{

    const TYPE = 'object';

    public $vendorHash = [
        'type' => 'integer',
        'description' => 'The identifier for the vendor that may sell this item.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorDefinition',
        ],
    ];

    public $vendorItemIndexes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'int32',
        ],
        'description' => 'The Vendor sale item indexes that represent the sale information for this item. The same vendor may sell an item in multiple "ways", hence why this is a list. (for instance, a weapon may be "sold" as a reward in a quest, for Glimmer, and for Masterwork Cores: each of those ways would be represented by a different vendor sale item with a different index)',
    ];


}

