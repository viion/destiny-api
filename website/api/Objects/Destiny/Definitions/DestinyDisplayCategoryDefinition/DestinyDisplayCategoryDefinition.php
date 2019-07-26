<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyDisplayCategoryDefinition;

/**
 * DestinyDisplayCategoryDefinition
 *
 * Display Categories are different from "categories" in that these are
 * specifically for visual grouping and display of categories in Vendor UI. The
 * "categories" structure is for validation of the contained items, and can be
 * categorized entirely separately from "Display Categories", there need be and
 * often will be no meaningful relationship between the two.
 */
class DestinyDisplayCategoryDefinition
{

    const TYPE = 'object';

    public $identifier = [
        'type' => 'string',
        'description' => 'A string identifier for the display category.',
    ];

    public $displayCategoryHash = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $displayProperties = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
    ];

    public $displayInBanner = [
        'type' => 'boolean',
        'description' => 'If true, this category should be displayed in the "Banner" section of the vendor\'s UI.',
    ];

    public $progressionHash = [
        'type' => 'integer',
        'description' => 'If it exists, this is the hash identifier of a DestinyProgressionDefinition that represents the progression to show on this display category.
Specific categories can now have thier own distinct progression, apparently. So that\'s cool.',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyProgressionDefinition',
        ],
    ];

    public $sortOrder = [
        'type' => 'integer',
        'description' => 'If this category sorts items in a nonstandard way, this will be the way we sort.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.VendorDisplayCategorySortOrder',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $displayStyleHash = [
        'type' => 'integer',
        'description' => 'An indicator of how the category will be displayed in the UI. It\'s up to you to do something cool or interesting in response to this, or just to treat it as a normal category.',
        'format' => 'uint32',
        'nullable' => true,
    ];

    public $displayStyleIdentifier = [
        'type' => 'string',
        'description' => 'An indicator of how the category will be displayed in the UI. It\'s up to you to do something cool or interesting in response to this, or just to treat it as a normal category.',
    ];


}

