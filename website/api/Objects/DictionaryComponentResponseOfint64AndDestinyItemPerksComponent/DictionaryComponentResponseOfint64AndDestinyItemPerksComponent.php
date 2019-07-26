<?php

namespace Destiny2\Api\Objects\DictionaryComponentResponseOfint64AndDestinyItemPerksComponent;

/**
 * DictionaryComponentResponseOfint64AndDestinyItemPerksComponent
 *
 * No description
 */
class DictionaryComponentResponseOfint64AndDestinyItemPerksComponent
{

    const TYPE = 'object';

    public $data = [
        'type' => 'object',
        'additionalProperties' => [
            'x-destiny-component-type-dependency' => 'ItemPerks',
            '$ref' => '#/components/schemas/Destiny.Entities.Items.DestinyItemPerksComponent',
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

