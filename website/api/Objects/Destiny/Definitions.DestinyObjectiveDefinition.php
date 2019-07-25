<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyObjectiveDefinition
 */
class Definitions.DestinyObjectiveDefinition
{

    const NAME = 'Destiny.Definitions.DestinyObjectiveDefinition';

    const TYPE = 'object';

    public $displayProperties = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
            ],
        ],
        'description' => 'Ideally, this should tell you what your task is. I\'m not going to lie to you though. Sometimes this doesn\'t have useful information at all. Which sucks, but there\'s nothing either of us can do about it.',
    ];

    public $completionValue = [
        'type' => 'integer',
        'description' => 'The value that the unlock value defined in unlockValueHash must reach in order for the objective to be considered Completed. Used in calculating progress and completion status.',
        'format' => 'int32',
    ];

    public $scope = [
        'type' => 'integer',
        'description' => 'A shortcut for determining the most restrictive gating that this Objective is set to use. This includes both the dynamic determination of progress and of completion values. See the DestinyGatingScope enum\'s documentation for more details.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyGatingScope',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $locationHash = [
        'type' => 'integer',
        'description' => 'OPTIONAL: a hash identifier for the location at which this objective must be accomplished, if there is a location defined. Look up the DestinyLocationDefinition for this hash for that additional location info.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyLocationDefinition',
        ],
    ];

    public $allowNegativeValue = [
        'type' => 'boolean',
        'description' => 'If true, the value is allowed to go negative.',
    ];

    public $allowValueChangeWhenCompleted = [
        'type' => 'boolean',
        'description' => 'If true, you can effectively "un-complete" this objective if you lose progress after crossing the completion threshold. 
If False, once you complete the task it will remain completed forever by locking the value.',
    ];

    public $isCountingDownward = [
        'type' => 'boolean',
        'description' => 'If true, completion means having an unlock value less than or equal to the completionValue.
If False, completion means having an unlock value greater than or equal to the completionValue.',
    ];

    public $valueStyle = [
        'type' => 'integer',
        'description' => 'The UI style applied to the objective. It\'s an enum, take a look at DestinyUnlockValueUIStyle for details of the possible styles. Use this info as you wish to customize your UI.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyUnlockValueUIStyle',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $progressDescription = [
        'type' => 'string',
        'description' => 'Text to describe the progress bar.',
    ];

    public $perks = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.DestinyObjectivePerkEntryDefinition',
            ],
        ],
        'description' => 'If this objective enables Perks intrinsically, the conditions for that enabling are defined here.',
    ];

    public $stats = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.DestinyObjectiveStatEntryDefinition',
            ],
        ],
        'description' => 'If this objective enables modifications on a player\'s stats intrinsically, the conditions are defined here.',
    ];

    public $minimumVisibilityThreshold = [
        'type' => 'integer',
        'description' => 'If nonzero, this is the minimum value at which the objective\'s progression should be shown. Otherwise, don\'t show it yet.',
        'format' => 'int32',
    ];

    public $allowOvercompletion = [
        'type' => 'boolean',
        'description' => 'If True, the progress will continue even beyond the point where the objective met its minimum completion requirements. Your UI will have to accommodate it.',
    ];

    public $showValueOnComplete = [
        'type' => 'boolean',
        'description' => 'If True, you should continue showing the progression value in the UI after it\'s complete. I mean, we already do that in BNet anyways, but if you want to be better behaved than us you could honor this flag.',
    ];

    public $completedValueStyle = [
        'type' => 'integer',
        'description' => 'The style to use when the objective is completed.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyUnlockValueUIStyle',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $inProgressValueStyle = [
        'type' => 'integer',
        'description' => 'The style to use when the objective is still in progress.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyUnlockValueUIStyle',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $hash = [
        'type' => 'integer',
        'description' => 'The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.
When entities refer to each other in Destiny content, it is this hash that they are referring to.',
        'format' => 'uint32',
    ];

    public $index = [
        'type' => 'integer',
        'description' => 'The index of the entity as it was found in the investment tables.',
        'format' => 'int32',
    ];

    public $redacted = [
        'type' => 'boolean',
        'description' => 'If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry!',
    ];


}

