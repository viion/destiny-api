<?php

namespace Destiny2\Api\Objects\DictionaryComponentResponseOfint64AndDestinyCharacterProgressionComponent;

/**
 * DictionaryComponentResponseOfint64AndDestinyCharacterProgressionComponent
 *
 * No description
 */
class DictionaryComponentResponseOfint64AndDestinyCharacterProgressionComponent
{

    const TYPE = 'object';

    public $data = [
        'type' => 'object',
        'additionalProperties' => [
            'x-destiny-component-type-dependency' => 'CharacterProgressions',
            '$ref' => '#/components/schemas/Destiny.Entities.Characters.DestinyCharacterProgressionComponent',
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

