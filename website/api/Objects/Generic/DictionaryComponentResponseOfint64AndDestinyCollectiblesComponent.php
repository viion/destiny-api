<?php

namespace Destiny2\Api\Objects\Generic;

/**
 * DictionaryComponentResponseOfint64AndDestinyCollectiblesComponent
 */
class DictionaryComponentResponseOfint64AndDestinyCollectiblesComponent
{

    const NAME = 'DictionaryComponentResponseOfint64AndDestinyCollectiblesComponent';

    const TYPE = 'object';

    public $data = [
        'type' => 'object',
        'additionalProperties' => [
            'x-destiny-component-type-dependency' => 'Collectibles',
            '$ref' => '#/components/schemas/Destiny.Components.Collectibles.DestinyCollectiblesComponent',
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

