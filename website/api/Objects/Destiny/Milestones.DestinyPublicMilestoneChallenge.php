<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Milestones.DestinyPublicMilestoneChallenge
 */
class Milestones.DestinyPublicMilestoneChallenge
{

    const NAME = 'Destiny.Milestones.DestinyPublicMilestoneChallenge';

    const TYPE = 'object';

    public $objectiveHash = [
        'type' => 'integer',
        'description' => 'The objective for the Challenge, which should have human-readable data about what needs to be done to accomplish the objective. Use this hash to look up the DestinyObjectiveDefinition.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyObjectiveDefinition',
        ],
    ];

    public $activityHash = [
        'type' => 'integer',
        'description' => 'IF the Objective is related to a specific Activity, this will be that activity\'s hash. Use it to look up the DestinyActivityDefinition for additional data to show.',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityDefinition',
        ],
    ];


}

