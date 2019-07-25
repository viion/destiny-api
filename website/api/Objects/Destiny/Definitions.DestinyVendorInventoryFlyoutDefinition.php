<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyVendorInventoryFlyoutDefinition
 */
class Definitions.DestinyVendorInventoryFlyoutDefinition
{

    const NAME = 'Destiny.Definitions.DestinyVendorInventoryFlyoutDefinition';

    const TYPE = 'object';

    public $lockedDescription = [
        'type' => 'string',
        'description' => 'If the flyout is locked, this is the reason why.',
    ];

    public $displayProperties = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
            ],
        ],
        'description' => 'The title and other common properties of the flyout.',
    ];

    public $buckets = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorInventoryFlyoutBucketDefinition',
        ],
        'description' => 'A list of inventory buckets and other metadata to show on the screen.',
    ];

    public $flyoutId = [
        'type' => 'integer',
        'description' => 'An identifier for the flyout, in case anything else needs to refer to them.',
        'format' => 'uint32',
    ];

    public $suppressNewness = [
        'type' => 'boolean',
        'description' => 'If this is true, don\'t show any of the glistening "this is a new item" UI elements, like we show on the inventory items themselves in in-game UI.',
    ];

    public $equipmentSlotHash = [
        'type' => 'integer',
        'description' => 'If this flyout is meant to show you the contents of the player\'s equipment slot, this is the slot to show.',
        'format' => 'uint32',
        'nullable' => true,
    ];


}

