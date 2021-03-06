<?php

namespace Destiny2\Api\Objects\DictionaryComponentResponseOfuint32AndDestinyItemSocketsComponent;

/**
 * DictionaryComponentResponseOfuint32AndDestinyItemSocketsComponent
 *
 * No description
 */
class DictionaryComponentResponseOfuint32AndDestinyItemSocketsComponent
{

    const TYPE = 'object';

    public $data = [
        'type' => 'object',
        'additionalProperties' => [
            'x-destiny-component-type-dependency' => 'ItemSockets',
            '$ref' => '#/components/schemas/Destiny.Entities.Items.DestinyItemSocketsComponent',
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

