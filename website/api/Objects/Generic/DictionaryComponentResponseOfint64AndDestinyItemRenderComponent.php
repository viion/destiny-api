<?php

namespace Destiny2\Api\Objects\Generic;

/**
 * DictionaryComponentResponseOfint64AndDestinyItemRenderComponent
 */
class DictionaryComponentResponseOfint64AndDestinyItemRenderComponent
{

    const NAME = 'DictionaryComponentResponseOfint64AndDestinyItemRenderComponent';

    const TYPE = 'object';

    public $data = [
        'type' => 'object',
        'additionalProperties' => [
            'x-destiny-component-type-dependency' => 'ItemRenderData',
            '$ref' => '#/components/schemas/Destiny.Entities.Items.DestinyItemRenderComponent',
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

