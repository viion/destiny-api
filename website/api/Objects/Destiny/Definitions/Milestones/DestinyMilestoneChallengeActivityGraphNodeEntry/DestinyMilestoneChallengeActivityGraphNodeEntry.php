<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Milestones\DestinyMilestoneChallengeActivityGraphNodeEntry;

/**
 * DestinyMilestoneChallengeActivityGraphNodeEntry
 *
 * No description
 */
class DestinyMilestoneChallengeActivityGraphNodeEntry
{

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

