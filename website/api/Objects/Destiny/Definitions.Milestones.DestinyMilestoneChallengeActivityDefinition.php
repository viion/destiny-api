<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Milestones.DestinyMilestoneChallengeActivityDefinition
 */
class Definitions.Milestones.DestinyMilestoneChallengeActivityDefinition
{

    const NAME = 'Destiny.Definitions.Milestones.DestinyMilestoneChallengeActivityDefinition';

    const TYPE = 'object';

    public $activityHash = [
        'type' => 'integer',
        'description' => 'The activity for which this challenge is active.',
        'format' => 'uint32',
    ];

    public $challenges = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Milestones.DestinyMilestoneChallengeDefinition',
        ],
    ];

    public $activityGraphNodes = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Milestones.DestinyMilestoneChallengeActivityGraphNodeEntry',
        ],
        'description' => 'If the activity and its challenge is visible on any of these nodes, it will be returned.',
    ];

    public $phases = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Milestones.DestinyMilestoneChallengeActivityPhase',
        ],
        'description' => 'Phases related to this activity, if there are any.
These will be listed in the order in which they will appear in the actual activity.',
    ];


}

