<?php

namespace Destiny2\Api\Objects\DictionaryComponentResponseOfint64AndDestinyPresentationNodesComponent;

/**
 * DictionaryComponentResponseOfint64AndDestinyPresentationNodesComponent
 *
 * No description
 */
class DictionaryComponentResponseOfint64AndDestinyPresentationNodesComponent
{

    const TYPE = 'object';

    public $data = [
        'type' => 'object',
        'additionalProperties' => [
            'x-destiny-component-type-dependency' => 'PresentationNodes',
            '$ref' => '#/components/schemas/Destiny.Components.Presentation.DestinyPresentationNodesComponent',
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

