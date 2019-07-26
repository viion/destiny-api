<?php

namespace Destiny2\Api\Objects\SingleComponentResponseOfDestinyPlatformSilverComponent;

/**
 * SingleComponentResponseOfDestinyPlatformSilverComponent
 *
 * No description
 */
class SingleComponentResponseOfDestinyPlatformSilverComponent
{

    const TYPE = 'object';

    public $data = [
        '$ref' => '#/components/schemas/Destiny.Components.Inventory.DestinyPlatformSilverComponent',
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

