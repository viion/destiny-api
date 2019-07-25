<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Components.Vendors.DestinyVendorGroup
 */
class Components.Vendors.DestinyVendorGroup
{

    const NAME = 'Destiny.Components.Vendors.DestinyVendorGroup';

    const TYPE = 'object';

    public $vendorGroupHash = [
        'type' => 'integer',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorGroupDefinition',
        ],
    ];

    public $vendorHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'The ordered list of vendors within a particular group.',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorDefinition',
        ],
    ];


}

