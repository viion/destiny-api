<?php

namespace Destiny2\Api\Objects\DictionaryComponentResponseOfint64AndDestinyPlugSetsComponent;

/**
 * DictionaryComponentResponseOfint64AndDestinyPlugSetsComponent
 *
 * No description
 */
class DictionaryComponentResponseOfint64AndDestinyPlugSetsComponent
{

    const TYPE = 'object';

    public $data = [
        'type' => 'object',
        'additionalProperties' => [
            'x-destiny-component-type-dependency' => 'ItemSockets',
            '$ref' => '#/components/schemas/Destiny.Components.PlugSets.DestinyPlugSetsComponent',
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

