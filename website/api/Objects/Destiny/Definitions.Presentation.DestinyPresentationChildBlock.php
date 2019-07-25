<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Presentation.DestinyPresentationChildBlock
 */
class Definitions.Presentation.DestinyPresentationChildBlock
{

    const NAME = 'Destiny.Definitions.Presentation.DestinyPresentationChildBlock';

    const TYPE = 'object';

    public $presentationNodeType = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyPresentationNodeType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $parentPresentationNodeHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Presentation.DestinyPresentationNodeDefinition',
        ],
    ];

    public $displayStyle = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyPresentationDisplayStyle',
        ],
        'x-enum-is-bitmask' => false,
    ];


}

