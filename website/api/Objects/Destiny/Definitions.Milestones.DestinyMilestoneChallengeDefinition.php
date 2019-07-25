<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Milestones.DestinyMilestoneChallengeDefinition
 */
class Definitions.Milestones.DestinyMilestoneChallengeDefinition
{

    const NAME = 'Destiny.Definitions.Milestones.DestinyMilestoneChallengeDefinition';

    const TYPE = 'object';

    public $challengeObjectiveHash = [
        'type' => 'integer',
        'description' => 'The challenge related to this milestone.',
        'format' => 'uint32',
    ];


}

