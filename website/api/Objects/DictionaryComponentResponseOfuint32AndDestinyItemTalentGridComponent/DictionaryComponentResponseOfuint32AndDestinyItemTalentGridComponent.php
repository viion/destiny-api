<?php

namespace Destiny2\Api\Objects\DictionaryComponentResponseOfuint32AndDestinyItemTalentGridComponent;

/**
 * DictionaryComponentResponseOfuint32AndDestinyItemTalentGridComponent
 *
 * No description
 */
class DictionaryComponentResponseOfuint32AndDestinyItemTalentGridComponent
{

    const TYPE = 'object';

    public $data = [
        'type' => 'object',
        'additionalProperties' => [
            'x-destiny-component-type-dependency' => 'ItemTalentGrids',
            '$ref' => '#/components/schemas/Destiny.Entities.Items.DestinyItemTalentGridComponent',
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

