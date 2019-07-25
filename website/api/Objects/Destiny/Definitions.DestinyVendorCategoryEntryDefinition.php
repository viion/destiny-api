<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyVendorCategoryEntryDefinition
 */
class Definitions.DestinyVendorCategoryEntryDefinition
{

    const NAME = 'Destiny.Definitions.DestinyVendorCategoryEntryDefinition';

    const TYPE = 'object';

    public $categoryIndex = [
        'type' => 'integer',
        'description' => 'The index of the category in the original category definitions for the vendor.',
        'format' => 'int32',
    ];

    public $categoryId = [
        'type' => 'string',
        'description' => 'The string identifier of the category.',
    ];

    public $sortValue = [
        'type' => 'integer',
        'description' => 'Used in sorting items in vendors... but there\'s a lot more to it. Just go with the order provided in the itemIndexes property on the DestinyVendorCategoryComponent instead, it should be more reliable than trying to recalculate it yourself.',
        'format' => 'int32',
    ];

    public $categoryHash = [
        'type' => 'integer',
        'description' => 'The hashed identifier for the category.',
        'format' => 'uint32',
    ];

    public $quantityAvailable = [
        'type' => 'integer',
        'description' => 'The amount of items that will be available when this category is shown.',
        'format' => 'int32',
    ];

    public $showUnavailableItems = [
        'type' => 'boolean',
        'description' => 'If items aren\'t up for sale in this category, should we still show them (greyed out)?',
    ];

    public $hideIfNoCurrency = [
        'type' => 'boolean',
        'description' => 'If you don\'t have the currency required to buy items from this category, should the items be hidden?',
    ];

    public $hideFromRegularPurchase = [
        'type' => 'boolean',
        'description' => 'True if this category doesn\'t allow purchases.',
    ];

    public $buyStringOverride = [
        'type' => 'string',
        'description' => 'The localized string for making purchases from this category, if it is different from the vendor\'s string for purchasing.',
    ];

    public $disabledDescription = [
        'type' => 'string',
        'description' => 'If the category is disabled, this is the localized description to show.',
    ];

    public $displayTitle = [
        'type' => 'string',
        'description' => 'The localized title of the category.',
    ];

    public $overlay = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorCategoryOverlayDefinition',
            ],
        ],
        'description' => 'If this category has an overlay prompt that should appear, this contains the details of that prompt.',
    ];

    public $vendorItemIndexes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'int32',
        ],
        'description' => 'A shortcut for the vendor item indexes sold under this category. Saves us from some expensive reorganization at runtime.',
    ];

    public $isPreview = [
        'type' => 'boolean',
        'description' => 'Sometimes a category isn\'t actually used to sell items, but rather to preview them. This implies different UI (and manual placement of the category in the UI) in the game, and special treatment.',
    ];

    public $isDisplayOnly = [
        'type' => 'boolean',
        'description' => 'If true, this category only displays items: you can\'t purchase anything in them.',
    ];

    public $resetIntervalMinutesOverride = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $resetOffsetMinutesOverride = [
        'type' => 'integer',
        'format' => 'int32',
    ];


}

