<?php

namespace Destiny2\Api\Objects\Generic;

/**
 * DictionaryComponentResponseOfint32AndDestinyItemRenderComponent
 */
class DictionaryComponentResponseOfint32AndDestinyItemRenderComponent
{

    const NAME = 'DictionaryComponentResponseOfint32AndDestinyItemRenderComponent';

    const TYPE = 'object';

    public $data = [
        'type' => 'object',
        'additionalProperties' => [
            'x-destiny-component-type-dependency' => 'ItemRenderData',
            '$ref' => '#/components/schemas/Destiny.Entities.Items.DestinyItemRenderComponent',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'int32',
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

