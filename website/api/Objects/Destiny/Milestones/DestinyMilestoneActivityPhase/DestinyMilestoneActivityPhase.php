<?php

namespace Destiny2\Api\Objects\Destiny\Milestones\DestinyMilestoneActivityPhase;

/**
 * DestinyMilestoneActivityPhase
 *
 * Represents whatever information we can return about an explicit phase in an
 * activity. In the future, I hope we'll have more than just "guh, you done gone
 * and did something," but for the forseeable future that's all we've got. I'm
 * making it more than just a list of booleans out of that overly-optimistic hope.
 */
class DestinyMilestoneActivityPhase
{

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

