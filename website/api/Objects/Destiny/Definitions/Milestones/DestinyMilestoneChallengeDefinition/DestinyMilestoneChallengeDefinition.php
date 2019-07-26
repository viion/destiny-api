<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Milestones\DestinyMilestoneChallengeDefinition;

/**
 * DestinyMilestoneChallengeDefinition
 *
 * No description
 */
class DestinyMilestoneChallengeDefinition
{

    const TYPE = 'object';

    public $challengeObjectiveHash = [
        'type' => 'integer',
        'description' => 'The challenge related to this milestone.',
        'format' => 'uint32',
    ];


}

