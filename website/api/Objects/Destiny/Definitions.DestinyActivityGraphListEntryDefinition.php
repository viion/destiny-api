<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyActivityGraphListEntryDefinition
 */
class Definitions.DestinyActivityGraphListEntryDefinition
{

    const NAME = 'Destiny.Definitions.DestinyActivityGraphListEntryDefinition';

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

