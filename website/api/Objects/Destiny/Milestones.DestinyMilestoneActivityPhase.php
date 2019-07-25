<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Milestones.DestinyMilestoneActivityPhase
 */
class Milestones.DestinyMilestoneActivityPhase
{

    const NAME = 'Destiny.Milestones.DestinyMilestoneActivityPhase';

    const TYPE = 'object';

    public $complete = [
        'type' => 'boolean',
        'description' => 'Indicates if the phase has been completed.',
    ];

    public $phaseHash = [
        'type' => 'integer',
        'description' => 'In DestinyActivityDefinition, if the activity has phases, there will be a set of phases defined in the "insertionPoints" property. This is the hash that maps to that phase.',
        'format' => 'uint32',
    ];


}

