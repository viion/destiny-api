<?php

namespace Destiny2\Api\Objects\Generic;

/**
 * DictionaryComponentResponseOfint64AndDestinyKiosksComponent
 */
class DictionaryComponentResponseOfint64AndDestinyKiosksComponent
{

    const NAME = 'DictionaryComponentResponseOfint64AndDestinyKiosksComponent';

    const TYPE = 'object';

    public $data = [
        'type' => 'object',
        'additionalProperties' => [
            'x-destiny-component-type-dependency' => 'Kiosks',
            '$ref' => '#/components/schemas/Destiny.Components.Kiosks.DestinyKiosksComponent',
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

