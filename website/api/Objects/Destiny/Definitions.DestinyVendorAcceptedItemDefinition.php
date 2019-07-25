<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyVendorAcceptedItemDefinition
 */
class Definitions.DestinyVendorAcceptedItemDefinition
{

    const NAME = 'Destiny.Definitions.DestinyVendorAcceptedItemDefinition';

    const TYPE = 'object';

    public $acceptedInventoryBucketHash = [
        'type' => 'integer',
        'description' => 'The "source" bucket for a transfer. When a user wants to transfer an item, the appropriate DestinyVendorDefinition\'s acceptedItems property is evaluated, looking for an entry where acceptedInventoryBucketHash matches the bucket that the item being transferred is currently located. If it exists, the item will be transferred into whatever bucket is defined by destinationInventoryBucketHash.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryBucketDefinition',
        ],
    ];

    public $destinationInventoryBucketHash = [
        'type' => 'integer',
        'description' => 'This is the bucket where the item being transferred will be put, given that it was being transferred *from* the bucket defined in acceptedInventoryBucketHash.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryBucketDefinition',
        ],
    ];


}

