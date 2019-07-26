<?php

namespace Destiny2\Api\Objects\SingleComponentResponseOfDestinyCharacterRenderComponent;

/**
 * SingleComponentResponseOfDestinyCharacterRenderComponent
 *
 * No description
 */
class SingleComponentResponseOfDestinyCharacterRenderComponent
{

    const TYPE = 'object';

    public $data = [
        '$ref' => '#/components/schemas/Destiny.Entities.Characters.DestinyCharacterRenderComponent',
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

