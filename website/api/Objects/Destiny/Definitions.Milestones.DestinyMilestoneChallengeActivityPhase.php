<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Milestones.DestinyMilestoneChallengeActivityPhase
 */
class Definitions.Milestones.DestinyMilestoneChallengeActivityPhase
{

    const NAME = 'Destiny.Definitions.Milestones.DestinyMilestoneChallengeActivityPhase';

    const TYPE = 'object';

    public $phaseHash = [
        'type' => 'integer',
        'description' => 'The hash identifier of the activity\'s phase.',
        'format' => 'uint32',
    ];


}

