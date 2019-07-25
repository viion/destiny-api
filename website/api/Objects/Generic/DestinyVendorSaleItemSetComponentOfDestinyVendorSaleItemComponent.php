<?php

namespace Destiny2\Api\Objects\Generic;

/**
 * DestinyVendorSaleItemSetComponentOfDestinyVendorSaleItemComponent
 */
class DestinyVendorSaleItemSetComponentOfDestinyVendorSaleItemComponent
{

    const NAME = 'DestinyVendorSaleItemSetComponentOfDestinyVendorSaleItemComponent';

    const TYPE = 'object';

    public $saleItems = [
        'type' => 'object',
        'additionalProperties' => [
            'x-destiny-component-type-dependency' => 'VendorSales',
            '$ref' => '#/components/schemas/Destiny.Entities.Vendors.DestinyVendorSaleItemComponent',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'int32',
        ],
    ];


}

