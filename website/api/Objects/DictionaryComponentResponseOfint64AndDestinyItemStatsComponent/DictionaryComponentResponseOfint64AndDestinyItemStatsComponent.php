<?php

namespace Destiny2\Api\Objects\DictionaryComponentResponseOfint64AndDestinyItemStatsComponent;

/**
 * DictionaryComponentResponseOfint64AndDestinyItemStatsComponent
 *
 * No description
 */
class DictionaryComponentResponseOfint64AndDestinyItemStatsComponent
{

    const TYPE = 'object';

    public $data = [
        'type' => 'object',
        'additionalProperties' => [
            'x-destiny-component-type-dependency' => 'ItemStats',
            '$ref' => '#/components/schemas/Destiny.Entities.Items.DestinyItemStatsComponent',
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

