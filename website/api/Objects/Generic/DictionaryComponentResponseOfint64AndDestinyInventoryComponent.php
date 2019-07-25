<?php

namespace Destiny2\Api\Objects\Generic;

/**
 * DictionaryComponentResponseOfint64AndDestinyInventoryComponent
 */
class DictionaryComponentResponseOfint64AndDestinyInventoryComponent
{

    const NAME = 'DictionaryComponentResponseOfint64AndDestinyInventoryComponent';

    const TYPE = 'object';

    public $data = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/Destiny.Entities.Inventory.DestinyInventoryComponent',
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
