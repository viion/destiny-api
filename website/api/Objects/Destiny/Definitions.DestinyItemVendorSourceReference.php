<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyItemVendorSourceReference
 */
class Definitions.DestinyItemVendorSourceReference
{

    const NAME = 'Destiny.Definitions.DestinyItemVendorSourceReference';

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

