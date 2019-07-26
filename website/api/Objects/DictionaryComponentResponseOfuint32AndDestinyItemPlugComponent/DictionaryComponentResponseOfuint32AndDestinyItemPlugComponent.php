<?php

namespace Destiny2\Api\Objects\DictionaryComponentResponseOfuint32AndDestinyItemPlugComponent;

/**
 * DictionaryComponentResponseOfuint32AndDestinyItemPlugComponent
 *
 * No description
 */
class DictionaryComponentResponseOfuint32AndDestinyItemPlugComponent
{

    const TYPE = 'object';

    public $data = [
        'type' => 'object',
        'additionalProperties' => [
            'x-destiny-component-type-dependency' => 'ItemPlugStates',
            '$ref' => '#/components/schemas/Destiny.Components.Items.DestinyItemPlugComponent',
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

