<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyVendorDisplayPropertiesDefinition;

/**
 * DestinyVendorDisplayPropertiesDefinition
 *
 * No description
 */
class DestinyVendorDisplayPropertiesDefinition
{

    const TYPE = 'object';

    public $largeIcon = [
        'type' => 'string',
        'description' => 'I regret calling this a "large icon". It\'s more like a medium-sized image with a picture of the vendor\'s mug on it, trying their best to look cool. Not what one would call an icon.',
    ];

    public $subtitle = [
        'type' => 'string',
    ];

    public $originalIcon = [
        'type' => 'string',
        'description' => 'If we replaced the icon with something more glitzy, this is the original icon that the vendor had according to the game\'s content. It may be more lame and/or have less razzle-dazzle. But who am I to tell you which icon to use.',
    ];

    public $requirementsDisplay = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorRequirementDisplayEntryDefinition',
        ],
        'description' => 'Vendors, in addition to expected display property data, may also show some "common requirements" as statically defined definition data. This might be when a vendor accepts a single type of currency, or when the currency is unique to the vendor and the designers wanted to show that currency when you interact with the vendor.',
    ];

    public $smallTransparentIcon = [
        'type' => 'string',
        'description' => 'This is the icon used in parts of the game UI such as the vendor\'s waypoint.',
    ];

    public $mapIcon = [
        'type' => 'string',
        'description' => 'This is the icon used in the map overview, when the vendor is located on the map.',
    ];

    public $largeTransparentIcon = [
        'type' => 'string',
        'description' => 'This is apparently the "Watermark". I am not certain offhand where this is actually used in the Game UI, but some people may find it useful.',
    ];

    public $description = [
        'type' => 'string',
    ];

    public $name = [
        'type' => 'string',
    ];

    public $icon = [
        'type' => 'string',
        'description' => 'Note that "icon" is sometimes misleading, and should be interpreted in the context of the entity. For instance, in Destiny 1 the DestinyRecordBookDefinition\'s icon was a big picture of a book.
But usually, it will be a small square image that you can use as... well, an icon.
They are currently represented as 96px x 96px images.',
    ];

    public $highResIcon = [
        'type' => 'string',
        'description' => 'If this item has a high-res icon (at least for now, many things won\'t), then the path to that icon will be here.',
    ];

    public $hasIcon = [
        'type' => 'boolean',
    ];


}

