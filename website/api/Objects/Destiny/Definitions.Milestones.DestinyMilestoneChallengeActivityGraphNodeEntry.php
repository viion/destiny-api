<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Milestones.DestinyMilestoneChallengeActivityGraphNodeEntry
 */
class Definitions.Milestones.DestinyMilestoneChallengeActivityGraphNodeEntry
{

    const NAME = 'Destiny.Definitions.Milestones.DestinyMilestoneChallengeActivityGraphNodeEntry';

    const TYPE = 'object';

    public $activityGraphHash = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $activityGraphNodeHash = [
        'type' => 'integer',
        'format' => 'uint32',
    ];


}

