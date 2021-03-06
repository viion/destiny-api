<?php

namespace Destiny2\Api\Objects\SingleComponentResponseOfDestinyProfileProgressionComponent;

/**
 * SingleComponentResponseOfDestinyProfileProgressionComponent
 *
 * No description
 */
class SingleComponentResponseOfDestinyProfileProgressionComponent
{

    const TYPE = 'object';

    public $data = [
        '$ref' => '#/components/schemas/Destiny.Components.Profiles.DestinyProfileProgressionComponent',
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

