<?php

namespace Destiny2\Api\Objects\DictionaryComponentResponseOfint64AndDestinyCharacterActivitiesComponent;

/**
 * DictionaryComponentResponseOfint64AndDestinyCharacterActivitiesComponent
 *
 * No description
 */
class DictionaryComponentResponseOfint64AndDestinyCharacterActivitiesComponent
{

    const TYPE = 'object';

    public $data = [
        'type' => 'object',
        'additionalProperties' => [
            'x-destiny-component-type-dependency' => 'CharacterActivities',
            '$ref' => '#/components/schemas/Destiny.Entities.Characters.DestinyCharacterActivitiesComponent',
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

