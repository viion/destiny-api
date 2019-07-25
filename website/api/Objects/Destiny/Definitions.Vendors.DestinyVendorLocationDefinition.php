<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Vendors.DestinyVendorLocationDefinition
 */
class Definitions.Vendors.DestinyVendorLocationDefinition
{

    const NAME = 'Destiny.Definitions.Vendors.DestinyVendorLocationDefinition';

    const TYPE = 'object';

    public $destinationHash = [
        'type' => 'integer',
        'description' => 'The hash identifier for a Destination at which this vendor may be located. Each destination where a Vendor may exist will only ever have a single entry.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyDestinationDefinition',
        ],
    ];

    public $backgroundImagePath = [
        'type' => 'string',
        'description' => 'The relative path to the background image representing this Vendor at this location, for use in a banner.',
    ];


}

