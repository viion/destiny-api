<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Milestones.DestinyMilestoneActivityCompletionStatus
 */
class Milestones.DestinyMilestoneActivityCompletionStatus
{

    const NAME = 'Destiny.Milestones.DestinyMilestoneActivityCompletionStatus';

    const TYPE = 'object';

    public $completed = [
        'type' => 'boolean',
        'description' => 'If the activity has been "completed", that information will be returned here.',
    ];

    public $phases = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Milestones.DestinyMilestoneActivityPhase',
        ],
        'description' => 'If the Activity has discrete "phases" that we can track, that info will be here. Otherwise, this value will be NULL. Note that this is a list and not a dictionary: the order implies the ascending order of phases or progression in this activity.',
    ];


}

