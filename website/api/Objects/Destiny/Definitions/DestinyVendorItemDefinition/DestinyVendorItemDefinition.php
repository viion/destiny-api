<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyVendorItemDefinition;

/**
 * DestinyVendorItemDefinition
 *
 * This represents an item being sold by the vendor.
 */
class DestinyVendorItemDefinition
{

    const TYPE = 'object';

    public $vendorItemIndex = [
        'type' => 'integer',
        'description' => 'The index into the DestinyVendorDefinition.saleList. This is what we use to refer to items being sold throughout live and definition data.',
        'format' => 'int32',
    ];

    public $itemHash = [
        'type' => 'integer',
        'description' => 'The hash identifier of the item being sold (DestinyInventoryItemDefinition).
Note that a vendor can sell the same item in multiple ways, so don\'t assume that itemHash is a unique identifier for this entity.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];

    public $quantity = [
        'type' => 'integer',
        'description' => 'The amount you will recieve of the item described in itemHash if you make the purchase.',
        'format' => 'int32',
    ];

    public $failureIndexes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'int32',
        ],
        'description' => 'An list of indexes into the DestinyVendorDefinition.failureStrings array, indicating the possible failure strings that can be relevant for this item.',
    ];

    public $currencies = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorItemQuantity',
        ],
        'description' => 'This is a pre-compiled aggregation of item value and priceOverrideList, so that we have one place to check for what the purchaser must pay for the item. Use this instead of trying to piece together the price separately.
The somewhat crappy part about this is that, now that item quantity overrides have dynamic modifiers, this will not necessarily be statically true. If you were using this instead of live data, switch to using live data.',
    ];

    public $refundPolicy = [
        'type' => 'integer',
        'description' => 'If this item can be refunded, this is the policy for what will be refundd, how, and in what time period.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyVendorItemRefundPolicy',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $refundTimeLimit = [
        'type' => 'integer',
        'description' => 'The amount of time before refundability of the newly purchased item will expire.',
        'format' => 'int32',
    ];

    public $creationLevels = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyItemCreationEntryLevelDefinition',
        ],
        'description' => 'The Default level at which the item will spawn. Almost always driven by an adjusto these days. Ideally should be singular. It\'s a long story how this ended up as a list, but there is always either going to be 0:1 of these entities.',
    ];

    public $displayCategoryIndex = [
        'type' => 'integer',
        'description' => 'This is an index specifically into the display category, as opposed to the server-side Categories (which do not need to match or pair with each other in any way: server side categories are really just structures for common validation. Display Category will let us more easily categorize items visually)',
        'format' => 'int32',
    ];

    public $categoryIndex = [
        'type' => 'integer',
        'description' => 'The index into the DestinyVendorDefinition.categories array, so you can find the category associated with this item.',
        'format' => 'int32',
    ];

    public $originalCategoryIndex = [
        'type' => 'integer',
        'description' => 'Same as above, but for the original category indexes.',
        'format' => 'int32',
    ];

    public $minimumLevel = [
        'type' => 'integer',
        'description' => 'The minimum character level at which this item is available for sale.',
        'format' => 'int32',
    ];

    public $maximumLevel = [
        'type' => 'integer',
        'description' => 'The maximum character level at which this item is available for sale.',
        'format' => 'int32',
    ];

    public $action = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorSaleItemActionBlockDefinition',
            ],
        ],
        'description' => 'The action to be performed when purchasing the item, if it\'s not just "buy".',
    ];

    public $displayCategory = [
        'type' => 'string',
        'description' => 'The string identifier for the category selling this item.',
    ];

    public $inventoryBucketHash = [
        'type' => 'integer',
        'description' => 'The inventory bucket into which this item will be placed upon purchase.',
        'format' => 'uint32',
    ];

    public $visibilityScope = [
        'type' => 'integer',
        'description' => 'The most restrictive scope that determines whether the item is available in the Vendor\'s inventory. See DestinyGatingScope\'s documentation for more information.
This can be determined by Unlock gating, or by whether or not the item has purchase level requirements (minimumLevel and maximumLevel properties).',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyGatingScope',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $purchasableScope = [
        'type' => 'integer',
        'description' => 'Similar to visibilityScope, it represents the most restrictive scope that determines whether the item can be purchased. It will at least be as restrictive as visibilityScope, but could be more restrictive if the item has additional purchase requirements beyond whether it is merely visible or not.
See DestinyGatingScope\'s documentation for more information.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyGatingScope',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $exclusivity = [
        'type' => 'integer',
        'description' => 'If this item can only be purchased by a given platform, this indicates the platform to which it is restricted.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/BungieMembershipType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $isOffer = [
        'type' => 'boolean',
        'description' => 'If this sale can only be performed as the result of an offer check, this is true.',
        'nullable' => true,
    ];

    public $isCrm = [
        'type' => 'boolean',
        'description' => 'If this sale can only be performed as the result of receiving a CRM offer, this is true.',
        'nullable' => true,
    ];

    public $sortValue = [
        'type' => 'integer',
        'description' => '*if* the category this item is in supports non-default sorting, this value should represent the sorting value to use, pre-processed and ready to go.',
        'format' => 'int32',
    ];

    public $expirationTooltip = [
        'type' => 'string',
        'description' => 'If this item can expire, this is the tooltip message to show with its expiration info.',
    ];

    public $redirectToSaleIndexes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'int32',
        ],
        'description' => 'If this is populated, the purchase of this item should redirect to purchasing these other items instead.',
    ];

    public $socketOverrides = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorItemSocketOverride',
        ],
    ];


}

