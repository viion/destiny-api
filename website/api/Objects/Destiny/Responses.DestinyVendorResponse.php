<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Responses.DestinyVendorResponse
 */
class Responses.DestinyVendorResponse
{

    const NAME = 'Destiny.Responses.DestinyVendorResponse';

    const TYPE = 'object';

    public $vendor = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyVendorComponent',
            ],
        ],
        'description' => 'The base properties of the vendor.
COMPONENT TYPE: Vendors',
        'x-destiny-component-type-dependency' => 'Vendors',
    ];

    public $categories = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyVendorCategoriesComponent',
            ],
        ],
        'description' => 'Categories that the vendor has available, and references to the sales therein.
COMPONENT TYPE: VendorCategories',
        'x-destiny-component-type-dependency' => 'VendorCategories',
    ];

    public $sales = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/DictionaryComponentResponseOfint32AndDestinyVendorSaleItemComponent',
            ],
        ],
        'description' => 'Sales, keyed by the vendorItemIndex of the item being sold.
COMPONENT TYPE: VendorSales',
        'x-destiny-component-type-dependency' => 'VendorSales',
    ];

    public $itemComponents = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/DestinyItemComponentSetOfint32',
            ],
        ],
        'description' => 'Item components, keyed by the vendorItemIndex of the active sale items.
COMPONENT TYPE: [See inside the DestinyItemComponentSet contract for component types.]',
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

