<?php

namespace Destiny2\Api\Objects\DictionaryComponentResponseOfint64AndDestinyCharacterComponent;

/**
 * DictionaryComponentResponseOfint64AndDestinyCharacterComponent
 *
 * No description
 */
class DictionaryComponentResponseOfint64AndDestinyCharacterComponent
{

    const TYPE = 'object';

    public $data = [
        'type' => 'object',
        'additionalProperties' => [
            'x-destiny-component-type-dependency' => 'Characters',
            '$ref' => '#/components/schemas/Destiny.Entities.Characters.DestinyCharacterComponent',
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

