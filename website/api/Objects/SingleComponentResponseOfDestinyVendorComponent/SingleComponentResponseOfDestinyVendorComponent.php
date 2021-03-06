<?php

namespace Destiny2\Api\Objects\SingleComponentResponseOfDestinyVendorComponent;

/**
 * SingleComponentResponseOfDestinyVendorComponent
 *
 * No description
 */
class SingleComponentResponseOfDestinyVendorComponent
{

    const TYPE = 'object';

    public $data = [
        '$ref' => '#/components/schemas/Destiny.Entities.Vendors.DestinyVendorComponent',
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

