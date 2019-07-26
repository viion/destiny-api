<?php

namespace Destiny2\Api\Objects\Destiny\Challenges\DestinyChallengeStatus;

/**
 * DestinyChallengeStatus
 *
 * Represents the status and other related information for a challenge that is - or
 * was - available to a player. 
 * A challenge is a bonus objective, generally tacked onto Quests or Activities,
 * that provide additional variations on play.
 */
class DestinyChallengeStatus
{

    const TYPE = 'object';

    public $objective = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Quests.DestinyObjectiveProgress',
            ],
        ],
        'description' => 'The progress - including completion status - of the active challenge.',
    ];


}

