<?php

namespace Destiny2\Api\Objects\SingleComponentResponseOfDestinyVendorReceiptsComponent;

/**
 * SingleComponentResponseOfDestinyVendorReceiptsComponent
 *
 * No description
 */
class SingleComponentResponseOfDestinyVendorReceiptsComponent
{

    const TYPE = 'object';

    public $data = [
        '$ref' => '#/components/schemas/Destiny.Entities.Profiles.DestinyVendorReceiptsComponent',
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

