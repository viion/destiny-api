<?php

namespace Destiny2\Api\Objects\Destiny\Entities\Vendors\DestinyVendorComponent;

/**
 * DestinyVendorComponent
 *
 * This component contains essential/summary information about the vendor.
 */
class DestinyVendorComponent
{

    const TYPE = 'object';

    public $canPurchase = [
        'type' => 'boolean',
        'description' => 'If True, you can purchase from the Vendor.
Theoretically, Vendors can be restricted from selling items. In practice, none do that (yet?).',
    ];

    public $progression = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.DestinyProgression',
            ],
        ],
        'description' => 'If the Vendor has a related Reputation, this is the Progression data that represents the character\'s Reputation level with this Vendor.',
    ];

    public $vendorLocationIndex = [
        'type' => 'integer',
        'description' => 'An index into the vendor definition\'s "locations" property array, indicating which location they are at currently. If -1, then the vendor has no known location (and you may choose not to show them in your UI as a result. I mean, it\'s your bag honey)',
        'format' => 'int32',
    ];

    public $seasonalRank = [
        'type' => 'integer',
        'description' => 'If this vendor has a seasonal rank, this will be the calculated value of that rank. How nice is that? I mean, that\'s pretty sweeet. It\'s a whole 32 bit integer.',
        'format' => 'int32',
        'nullable' => true,
    ];

    public $vendorHash = [
        'type' => 'integer',
        'description' => 'The unique identifier for the vendor. Use it to look up their DestinyVendorDefinition.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorDefinition',
        ],
    ];

    public $nextRefreshDate = [
        'type' => 'string',
        'description' => 'The date when this vendor\'s inventory will next rotate/refresh.
Note that this is distinct from the date ranges that the vendor is visible/available in-game: this field indicates the specific time when the vendor\'s available items refresh and rotate, regardless of whether the vendor is actually available at that time. Unfortunately, these two values may be (and are, for the case of important vendors like Xur) different.
Issue https://github.com/Bungie-net/api/issues/353 is tracking a fix to start providing visibility date ranges where possible in addition to this refresh date, so that all important dates for vendors are available for use.',
        'format' => 'date-time',
    ];

    public $enabled = [
        'type' => 'boolean',
        'description' => 'If True, the Vendor is currently accessible. 
If False, they may not actually be visible in the world at the moment.',
    ];


}

