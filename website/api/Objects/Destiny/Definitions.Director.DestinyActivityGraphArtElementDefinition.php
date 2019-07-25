<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Director.DestinyActivityGraphArtElementDefinition
 */
class Definitions.Director.DestinyActivityGraphArtElementDefinition
{

    const NAME = 'Destiny.Definitions.Director.DestinyActivityGraphArtElementDefinition';

    const TYPE = 'object';

    public $position = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyPositionDefinition',
            ],
        ],
        'description' => 'The position on the map of the art element.',
    ];


}

