<?php

namespace Destiny2\Api\Objects\DictionaryComponentResponseOfint64AndDestinyCharacterRenderComponent;

/**
 * DictionaryComponentResponseOfint64AndDestinyCharacterRenderComponent
 *
 * No description
 */
class DictionaryComponentResponseOfint64AndDestinyCharacterRenderComponent
{

    const TYPE = 'object';

    public $data = [
        'type' => 'object',
        'additionalProperties' => [
            'x-destiny-component-type-dependency' => 'CharacterRenderData',
            '$ref' => '#/components/schemas/Destiny.Entities.Characters.DestinyCharacterRenderComponent',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'int64',
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

