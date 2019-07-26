<?php

namespace Destiny2\Api\Objects\DictionaryComponentResponseOfint64AndDestinyItemSocketsComponent;

/**
 * DictionaryComponentResponseOfint64AndDestinyItemSocketsComponent
 *
 * No description
 */
class DictionaryComponentResponseOfint64AndDestinyItemSocketsComponent
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

