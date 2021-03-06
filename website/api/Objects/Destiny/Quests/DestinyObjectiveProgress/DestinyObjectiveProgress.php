<?php

namespace Destiny2\Api\Objects\Destiny\Quests\DestinyObjectiveProgress;

/**
 * DestinyObjectiveProgress
 *
 * Returns data about a character's status with a given Objective. Combine with
 * DestinyObjectiveDefinition static data for display purposes.
 */
class DestinyObjectiveProgress
{

    const TYPE = 'object';

    public $objectiveHash = [
        'type' => 'integer',
        'description' => 'The unique identifier of the Objective being referred to. Use to look up the DestinyObjectiveDefinition in static data.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyObjectiveDefinition',
        ],
    ];

    public $destinationHash = [
        'type' => 'integer',
        'description' => 'If the Objective has a Destination associated with it, this is the unique identifier of the Destination being referred to. Use to look up the DestinyDestinationDefinition in static data. This will give localized data about *where* in the universe the objective should be achieved.',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyDestinationDefinition',
        ],
    ];

    public $activityHash = [
        'type' => 'integer',
        'description' => 'If the Objective has an Activity associated with it, this is the unique identifier of the Activity being referred to. Use to look up the DestinyActivityDefinition in static data. This will give localized data about *what* you should be playing for the objective to be achieved.',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityDefinition',
        ],
    ];

    public $progress = [
        'type' => 'integer',
        'description' => 'If progress has been made, and the progress can be measured numerically, this will be the value of that progress. You can compare it to the DestinyObjectiveDefinition.completionValue property for current vs. upper bounds, and use DestinyObjectiveDefinition.valueStyle to determine how this should be rendered. Note that progress, in Destiny 2, need not be a literal numeric progression. It could be one of a number of possible values, even a Timestamp. Always examine DestinyObjectiveDefinition.valueStyle before rendering progress.',
        'format' => 'int32',
        'nullable' => true,
    ];

    public $completionValue = [
        'type' => 'integer',
        'description' => 'As of Forsaken, objectives\' completion value is determined dynamically at runtime.
This value represents the threshold of progress you need to surpass in order for this objective to be considered "complete".
If you were using objective data, switch from using the DestinyObjectiveDefinition\'s "completionValue" to this value.',
        'format' => 'int32',
    ];

    public $complete = [
        'type' => 'boolean',
        'description' => 'Whether or not the Objective is completed.',
    ];

    public $visible = [
        'type' => 'boolean',
        'description' => 'If this is true, the objective is visible in-game. Otherwise, it\'s not yet visible to the player. Up to you if you want to honor this property.',
    ];


}

