<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyVendorGroupReference
 */
class Definitions.DestinyVendorGroupReference
{

    const NAME = 'Destiny.Definitions.DestinyVendorGroupReference';

    const TYPE = 'object';

    public $vendorGroupHash = [
        'type' => 'integer',
        'description' => 'The DestinyVendorGroupDefinition to which this Vendor can belong.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorGroupDefinition',
        ],
    ];


}

