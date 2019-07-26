<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Milestones\DestinyMilestoneChallengeActivityPhase;

/**
 * DestinyMilestoneChallengeActivityPhase
 *
 * No description
 */
class DestinyMilestoneChallengeActivityPhase
{

    const TYPE = 'object';

    public $phaseHash = [
        'type' => 'integer',
        'description' => 'The hash identifier of the activity\'s phase.',
        'format' => 'uint32',
    ];


}

