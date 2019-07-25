<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Responses.DestinyPublicVendorsResponse
 */
class Responses.DestinyPublicVendorsResponse
{

    const NAME = 'Destiny.Responses.DestinyPublicVendorsResponse';

    const TYPE = 'object';

    public $vendorGroups = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyVendorGroupComponent',
            ],
        ],
        'description' => 'For Vendors being returned, this will give you the information you need to group them and order them in the same way that the Bungie Companion app performs grouping. It will automatically be returned if you request the Vendors component.
COMPONENT TYPE: Vendors',
        'x-destiny-component-type-dependency' => 'Vendors',
    ];

    public $vendors = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/DictionaryComponentResponseOfuint32AndDestinyPublicVendorComponent',
            ],
        ],
        'description' => 'The base properties of the vendor. These are keyed by the Vendor Hash, so you will get one Vendor Component per vendor returned.
COMPONENT TYPE: Vendors',
        'x-destiny-component-type-dependency' => 'Vendors',
    ];

    public $categories = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/DictionaryComponentResponseOfuint32AndDestinyVendorCategoriesComponent',
            ],
        ],
        'description' => 'Categories that the vendor has available, and references to the sales therein. These are keyed by the Vendor Hash, so you will get one Categories Component per vendor returned.
COMPONENT TYPE: VendorCategories',
        'x-destiny-component-type-dependency' => 'VendorCategories',
    ];

    public $sales = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/DictionaryComponentResponseOfuint32AndPublicDestinyVendorSaleItemSetComponent',
            ],
        ],
        'description' => 'Sales, keyed by the vendorItemIndex of the item being sold. These are keyed by the Vendor Hash, so you will get one Sale Item Set Component per vendor returned.
Note that within the Sale Item Set component, the sales are themselves keyed by the vendorSaleIndex, so you can relate it to the corrent sale item definition within the Vendor\'s definition.
COMPONENT TYPE: VendorSales',
        'x-destiny-component-type-dependency' => 'VendorSales',
    ];


}

