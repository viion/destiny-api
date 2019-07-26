<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Director\DestinyActivityGraphArtElementDefinition;

/**
 * DestinyActivityGraphArtElementDefinition
 *
 * These Art Elements are meant to represent one-off visual effects overlaid on the
 * map. Currently, we do not have a pipeline to import the assets for these
 * overlays, so this info exists as a placeholder for when such a pipeline exists
 * (if it ever will)
 */
class DestinyActivityGraphArtElementDefinition
{

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

