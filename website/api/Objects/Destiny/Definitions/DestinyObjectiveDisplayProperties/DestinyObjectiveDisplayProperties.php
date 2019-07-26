<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyObjectiveDisplayProperties;

/**
 * DestinyObjectiveDisplayProperties
 *
 * No description
 */
class DestinyObjectiveDisplayProperties
{

    const TYPE = 'object';

    public $activityHash = [
        'type' => 'integer',
        'description' => 'The activity associated with this objective in the context of this item, if any.',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityDefinition',
        ],
    ];

    public $displayOnItemPreviewScreen = [
        'type' => 'boolean',
        'description' => 'If true, the game shows this objective on item preview screens.',
    ];


}

