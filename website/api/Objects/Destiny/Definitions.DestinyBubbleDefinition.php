<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyBubbleDefinition
 */
class Definitions.DestinyBubbleDefinition
{

    const NAME = 'Destiny.Definitions.DestinyBubbleDefinition';

    const TYPE = 'object';

    public $hash = [
        'type' => 'integer',
        'description' => 'The identifier for the bubble: only guaranteed to be unique within the Destination.',
        'format' => 'uint32',
    ];

    public $displayProperties = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
            ],
        ],
        'description' => 'The display properties of this bubble, so you don\'t have to look them up in a separate list anymore.',
    ];


}

