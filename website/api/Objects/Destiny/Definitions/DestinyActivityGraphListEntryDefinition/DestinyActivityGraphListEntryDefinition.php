<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyActivityGraphListEntryDefinition;

/**
 * DestinyActivityGraphListEntryDefinition
 *
 * Destinations and Activities may have default Activity Graphs that should be
 * shown when you bring up the Director and are playing in either.
 * This contract defines the graph referred to and the gating for when it is
 * relevant.
 */
class DestinyActivityGraphListEntryDefinition
{

    const TYPE = 'object';

    public $activityGraphHash = [
        'type' => 'integer',
        'description' => 'The hash identifier of the DestinyActivityGraphDefinition that should be shown when opening the director.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Director.DestinyActivityGraphDefinition',
        ],
    ];


}

