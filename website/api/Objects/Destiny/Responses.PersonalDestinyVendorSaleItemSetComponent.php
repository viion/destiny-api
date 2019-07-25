<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Responses.PersonalDestinyVendorSaleItemSetComponent
 */
class Responses.PersonalDestinyVendorSaleItemSetComponent
{

    const NAME = 'Destiny.Responses.PersonalDestinyVendorSaleItemSetComponent';

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

