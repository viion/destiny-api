<?php

namespace Destiny2\Api\Objects\Destiny\Responses\DestinyVendorsResponse;

/**
 * DestinyVendorsResponse
 *
 * A response containing all of the components for all requested vendors.
 */
class DestinyVendorsResponse
{

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
                '$ref' => '#/components/schemas/DictionaryComponentResponseOfuint32AndDestinyVendorComponent',
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
                '$ref' => '#/components/schemas/DictionaryComponentResponseOfuint32AndPersonalDestinyVendorSaleItemSetComponent',
            ],
        ],
        'description' => 'Sales, keyed by the vendorItemIndex of the item being sold. These are keyed by the Vendor Hash, so you will get one Sale Item Set Component per vendor returned.
Note that within the Sale Item Set component, the sales are themselves keyed by the vendorSaleIndex, so you can relate it to the corrent sale item definition within the Vendor\'s definition.
COMPONENT TYPE: VendorSales',
        'x-destiny-component-type-dependency' => 'VendorSales',
    ];

    public $itemComponents = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/DestinyItemComponentSetOfint32',
        ],
        'description' => 'The set of item detail components, one set of item components per Vendor. These are keyed by the Vendor Hash, so you will get one Item Component Set per vendor returned.
The components contained inside are themselves keyed by the vendorSaleIndex, and will have whatever item-level components you requested (Sockets, Stats, Instance data etc...) per item being sold by the vendor.',
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];

    public $currencyLookups = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyCurrenciesComponent',
            ],
        ],
        'description' => 'A "lookup" convenience component that can be used to quickly check if the character has access to items that can be used for purchasing.
COMPONENT TYPE: CurrencyLookups',
        'x-destiny-component-type-dependency' => 'CurrencyLookups',
    ];


}

