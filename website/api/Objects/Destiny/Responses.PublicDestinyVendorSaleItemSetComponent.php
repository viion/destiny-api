<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Responses.PublicDestinyVendorSaleItemSetComponent
 */
class Responses.PublicDestinyVendorSaleItemSetComponent
{

    const NAME = 'Destiny.Responses.PublicDestinyVendorSaleItemSetComponent';

    const TYPE = 'object';

    public $saleItems = [
        'type' => 'object',
        'additionalProperties' => [
            'x-destiny-component-type-dependency' => 'VendorSales',
            '$ref' => '#/components/schemas/Destiny.Components.Vendors.DestinyPublicVendorSaleItemComponent',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'int32',
        ],
    ];


}

