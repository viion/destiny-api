<?php

namespace Destiny2\Api\Objects\Destiny\Components\Vendors\DestinyVendorGroup;

/**
 * DestinyVendorGroup
 *
 * Represents a specific group of vendors that can be rendered in the recommended
 * order.
 * How do we figure out this order? It's a long story, and will likely get more
 * complicated over time.
 */
class DestinyVendorGroup
{

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

