<?php

namespace Destiny2\Api\Objects\SingleComponentResponseOfDestinyCharacterComponent;

/**
 * SingleComponentResponseOfDestinyCharacterComponent
 *
 * No description
 */
class SingleComponentResponseOfDestinyCharacterComponent
{

    const TYPE = 'object';

    public $data = [
        '$ref' => '#/components/schemas/Destiny.Entities.Characters.DestinyCharacterComponent',
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

