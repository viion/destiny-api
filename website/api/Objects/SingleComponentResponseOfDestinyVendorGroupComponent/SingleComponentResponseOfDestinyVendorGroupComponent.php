<?php

namespace Destiny2\Api\Objects\SingleComponentResponseOfDestinyVendorGroupComponent;

/**
 * SingleComponentResponseOfDestinyVendorGroupComponent
 *
 * No description
 */
class SingleComponentResponseOfDestinyVendorGroupComponent
{

    const TYPE = 'object';

    public $data = [
        '$ref' => '#/components/schemas/Destiny.Components.Vendors.DestinyVendorGroupComponent',
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

