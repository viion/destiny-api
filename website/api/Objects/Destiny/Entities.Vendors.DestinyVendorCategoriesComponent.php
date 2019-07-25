<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Entities.Vendors.DestinyVendorCategoriesComponent
 */
class Entities.Vendors.DestinyVendorCategoriesComponent
{

    const NAME = 'Destiny.Entities.Vendors.DestinyVendorCategoriesComponent';

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

