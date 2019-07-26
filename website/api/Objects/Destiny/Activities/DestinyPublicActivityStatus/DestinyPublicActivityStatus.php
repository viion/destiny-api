<?php

namespace Destiny2\Api\Objects\Destiny\Activities\DestinyPublicActivityStatus;

/**
 * DestinyPublicActivityStatus
 *
 * Represents the public-facing status of an activity: any data about what is
 * currently active in the Activity, regardless of an individual character's
 * progress in it.
 */
class DestinyPublicActivityStatus
{

    const TYPE = 'object';

    public $challengeObjectiveHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'Active Challenges for the activity, if any - represented as hashes for DestinyObjectiveDefinitions.',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyObjectiveDefinition',
        ],
    ];

    public $modifierHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'The active modifiers on this activity, if any - represented as hashes for DestinyActivityModifierDefinitions.',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.ActivityModifiers.DestinyActivityModifierDefinition',
        ],
    ];

    public $rewardTooltipItems = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.DestinyItemQuantity',
        ],
        'description' => 'If the activity itself provides any specific "mock" rewards, this will be the items and their quantity.
Why "mock", you ask? Because these are the rewards as they are represented in the tooltip of the Activity.
These are often pointers to fake items that look good in a tooltip, but represent an abstract concept of what you will get for a reward rather than the specific items you may obtain.',
    ];


}

