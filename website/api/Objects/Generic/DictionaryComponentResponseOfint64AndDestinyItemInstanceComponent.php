<?php

namespace Destiny2\Api\Objects\Generic;

/**
 * DictionaryComponentResponseOfint64AndDestinyItemInstanceComponent
 */
class DictionaryComponentResponseOfint64AndDestinyItemInstanceComponent
{

    const NAME = 'DictionaryComponentResponseOfint64AndDestinyItemInstanceComponent';

    const TYPE = 'object';

    public $data = [
        'type' => 'object',
        'additionalProperties' => [
            'x-destiny-component-type-dependency' => 'ItemInstances',
            '$ref' => '#/components/schemas/Destiny.Entities.Items.DestinyItemInstanceComponent',
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

