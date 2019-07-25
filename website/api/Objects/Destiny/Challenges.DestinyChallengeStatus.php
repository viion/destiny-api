<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Challenges.DestinyChallengeStatus
 */
class Challenges.DestinyChallengeStatus
{

    const NAME = 'Destiny.Challenges.DestinyChallengeStatus';

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

