<?php

namespace Destiny2\Api\Objects\Destiny\Entities\Vendors\DestinyVendorCategory;

/**
 * DestinyVendorCategory
 *
 * Information about the category and items currently sold in that category.
 */
class DestinyVendorCategory
{

    const TYPE = 'object';

    public $displayCategoryIndex = [
        'type' => 'integer',
        'description' => 'An index into the DestinyVendorDefinition.displayCategories property, so you can grab the display data for this category.',
        'format' => 'int32',
    ];

    public $itemIndexes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'int32',
        ],
        'description' => 'An ordered list of indexes into items being sold in this category (DestinyVendorDefinition.itemList) which will contain more information about the items being sold themselves. Can also be used to index into DestinyVendorSaleItemComponent data, if you asked for that data to be returned.',
    ];


}

