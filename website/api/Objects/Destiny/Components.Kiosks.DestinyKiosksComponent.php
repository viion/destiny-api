<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Components.Kiosks.DestinyKiosksComponent
 */
class Components.Kiosks.DestinyKiosksComponent
{

    const NAME = 'Destiny.Components.Kiosks.DestinyKiosksComponent';

    const TYPE = 'object';

    public $kioskItems = [
        'type' => 'object',
        'additionalProperties' => [
            'type' => 'array',
            'items' => [
                '$ref' => '#/components/schemas/Destiny.Components.Kiosks.DestinyKioskItem',
            ],
        ],
        'description' => 'A dictionary keyed by the Kiosk Vendor\'s hash identifier (use it to look up the DestinyVendorDefinition for the relevant kiosk vendor), and whose value is a list of all the items that the user can "see" in the Kiosk, and any other interesting metadata.',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorDefinition',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];


}

