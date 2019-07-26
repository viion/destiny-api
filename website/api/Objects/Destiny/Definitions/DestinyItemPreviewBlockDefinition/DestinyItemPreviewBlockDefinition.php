<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyItemPreviewBlockDefinition;

/**
 * DestinyItemPreviewBlockDefinition
 *
 * Items like Sacks or Boxes can have items that it shows in-game when you view
 * details that represent the items you can obtain if you use or acquire the item.
 * This defines those categories, and gives some insights into that data's source.
 */
class DestinyItemPreviewBlockDefinition
{

    const TYPE = 'object';

    public $screenStyle = [
        'type' => 'string',
        'description' => 'A string that the game UI uses as a hint for which detail screen to show for the item. You, too, can leverage this for your own custom screen detail views. Note, however, that these are arbitrarily defined by designers: there\'s no guarantees of a fixed, known number of these - so fall back to something reasonable if you don\'t recognize it.',
    ];

    public $previewVendorHash = [
        'type' => 'integer',
        'description' => 'If the preview data is derived from a fake "Preview" Vendor, this will be the hash identifier for the DestinyVendorDefinition of that fake vendor.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorDefinition',
        ],
    ];

    public $previewActionString = [
        'type' => 'string',
        'description' => 'If the preview has an associated action (like "Open"), this will be the localized string for that action.',
    ];

    public $derivedItemCategories = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Items.DestinyDerivedItemCategoryDefinition',
        ],
        'description' => 'This is a list of the items being previewed, categorized in the same way as they are in the preview UI.',
    ];


}

