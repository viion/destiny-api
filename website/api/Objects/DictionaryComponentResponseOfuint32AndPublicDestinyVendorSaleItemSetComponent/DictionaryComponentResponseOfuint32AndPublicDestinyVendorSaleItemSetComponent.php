<?php

namespace Destiny2\Api\Objects\DictionaryComponentResponseOfuint32AndPublicDestinyVendorSaleItemSetComponent;

/**
 * DictionaryComponentResponseOfuint32AndPublicDestinyVendorSaleItemSetComponent
 *
 * No description
 */
class DictionaryComponentResponseOfuint32AndPublicDestinyVendorSaleItemSetComponent
{

    const TYPE = 'object';

    public $data = [
        'type' => 'object',
        'additionalProperties' => [
            'x-destiny-component-type-dependency' => 'VendorSales',
            '$ref' => '#/components/schemas/Destiny.Responses.PublicDestinyVendorSaleItemSetComponent',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];

    public $privacy = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Components.ComponentPrivacySetting',
        ],
        'x-enum-is-bitmask' => false,
    ];


}

