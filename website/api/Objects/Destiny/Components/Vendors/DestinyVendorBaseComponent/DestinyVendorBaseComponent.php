<?php

namespace Destiny2\Api\Objects\Destiny\Components\Vendors\DestinyVendorBaseComponent;

/**
 * DestinyVendorBaseComponent
 *
 * This component contains essential/summary information about the vendor.
 */
class DestinyVendorBaseComponent
{

    const TYPE = 'object';

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

