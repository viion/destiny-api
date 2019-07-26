<?php

namespace Destiny2\Api\Objects\Destiny\Components\Presentation\DestinyPresentationNodesComponent;

/**
 * DestinyPresentationNodesComponent
 *
 * No description
 */
class DestinyPresentationNodesComponent
{

    const TYPE = 'object';

    public $nodes = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/Destiny.Components.Presentation.DestinyPresentationNodeComponent',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];


}

