<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyActivityChallengeDefinition
 */
class Definitions.DestinyActivityChallengeDefinition
{

    const NAME = 'Destiny.Definitions.DestinyActivityChallengeDefinition';

    const TYPE = 'object';

    public $objectiveHash = [
        'type' => 'integer',
        'description' => 'The hash for the Objective that matches this challenge. Use it to look up the DestinyObjectiveDefinition.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyObjectiveDefinition',
        ],
    ];

    public $dummyRewards = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.DestinyItemQuantity',
        ],
        'description' => 'The rewards as they\'re represented in the UI. Note that they generally link to "dummy" items that give a summary of rewards rather than direct, real items themselves.
If the quantity is 0, don\'t show the quantity.',
    ];


}

