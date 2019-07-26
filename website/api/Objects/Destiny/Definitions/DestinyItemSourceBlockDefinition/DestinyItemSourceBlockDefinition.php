<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyItemSourceBlockDefinition;

/**
 * DestinyItemSourceBlockDefinition
 *
 * Data about an item's "sources": ways that the item can be obtained.
 */
class DestinyItemSourceBlockDefinition
{

    const TYPE = 'object';

    public $sourceHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'The list of hash identifiers for Reward Sources that hint where the item can be found (DestinyRewardSourceDefinition).',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyRewardSourceDefinition',
        ],
    ];

    public $sources = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Sources.DestinyItemSourceDefinition',
        ],
        'description' => 'A collection of details about the stats that were computed for the ways we found that the item could be spawned.',
    ];

    public $exclusive = [
        'type' => 'integer',
        'description' => 'If we found that this item is exclusive to a specific platform, this will be set to the BungieMembershipType enumeration that matches that platform.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/BungieMembershipType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $vendorSources = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyItemVendorSourceReference',
        ],
        'description' => 'A denormalized reference back to vendors that potentially sell this item.',
    ];


}

