<?php

namespace Destiny2\Api\Objects\DictionaryComponentResponseOfuint32AndDestinyItemObjectivesComponent;

/**
 * DictionaryComponentResponseOfuint32AndDestinyItemObjectivesComponent
 *
 * No description
 */
class DictionaryComponentResponseOfuint32AndDestinyItemObjectivesComponent
{

    const TYPE = 'object';

    public $data = [
        'type' => 'object',
        'additionalProperties' => [
            'x-destiny-component-type-dependency' => 'ItemObjectives',
            '$ref' => '#/components/schemas/Destiny.Entities.Items.DestinyItemObjectivesComponent',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
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

