<?php

namespace Destiny2\Api\Objects\Destiny\Entities\Vendors\DestinyVendorCategoriesComponent;

/**
 * DestinyVendorCategoriesComponent
 *
 * A vendor can have many categories of items that they sell. This component will
 * return the category information for available items, as well as the index into
 * those items in the user's sale item list.
 * Note that, since both the category and items are indexes, this data is Content
 * Version dependent. Be sure to check that your content is up to date before using
 * this data. This is an unfortunate, but permanent, limitation of Vendor data.
 */
class DestinyVendorCategoriesComponent
{

    const TYPE = 'object';

    public $categories = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Entities.Vendors.DestinyVendorCategory',
        ],
        'description' => 'The list of categories for items that the vendor sells, in rendering order.
These categories each point to a "display category" in the displayCategories property of the DestinyVendorDefinition, as opposed to the other categories.',
    ];


}

