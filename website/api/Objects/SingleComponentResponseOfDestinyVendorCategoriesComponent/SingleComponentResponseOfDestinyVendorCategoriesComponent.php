<?php

namespace Destiny2\Api\Objects\SingleComponentResponseOfDestinyVendorCategoriesComponent;

/**
 * SingleComponentResponseOfDestinyVendorCategoriesComponent
 *
 * No description
 */
class SingleComponentResponseOfDestinyVendorCategoriesComponent
{

    const TYPE = 'object';

    public $data = [
        '$ref' => '#/components/schemas/Destiny.Entities.Vendors.DestinyVendorCategoriesComponent',
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

