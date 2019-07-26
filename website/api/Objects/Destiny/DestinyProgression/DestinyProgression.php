<?php

namespace Destiny2\Api\Objects\Destiny\DestinyProgression;

/**
 * DestinyProgression
 *
 * Information about a current character's status with a Progression. A progression
 * is a value that can increase with activity and has levels. Think Character Level
 * and Reputation Levels. Combine this "live" data with the related
 * DestinyProgressionDefinition for a full picture of the Progression.
 */
class DestinyProgression
{

    const TYPE = 'object';

    public $progressionHash = [
        'type' => 'integer',
        'description' => 'The hash identifier of the Progression in question. Use it to look up the DestinyProgressionDefinition in static data.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyProgressionDefinition',
        ],
    ];

    public $dailyProgress = [
        'type' => 'integer',
        'description' => 'The amount of progress earned today for this progression.',
        'format' => 'int32',
    ];

    public $dailyLimit = [
        'type' => 'integer',
        'description' => 'If this progression has a daily limit, this is that limit.',
        'format' => 'int32',
    ];

    public $weeklyProgress = [
        'type' => 'integer',
        'description' => 'The amount of progress earned toward this progression in the current week.',
        'format' => 'int32',
    ];

    public $weeklyLimit = [
        'type' => 'integer',
        'description' => 'If this progression has a weekly limit, this is that limit.',
        'format' => 'int32',
    ];

    public $currentProgress = [
        'type' => 'integer',
        'description' => 'This is the total amount of progress obtained overall for this progression (for instance, the total amount of Character Level experience earned)',
        'format' => 'int32',
    ];

    public $level = [
        'type' => 'integer',
        'description' => 'This is the level of the progression (for instance, the Character Level).',
        'format' => 'int32',
    ];

    public $levelCap = [
        'type' => 'integer',
        'description' => 'This is the maximum possible level you can achieve for this progression (for example, the maximum character level obtainable)',
        'format' => 'int32',
    ];

    public $stepIndex = [
        'type' => 'integer',
        'description' => 'Progressions define their levels in "steps". Since the last step may be repeatable, the user may be at a higher level than the actual Step achieved in the progression. Not necessarily useful, but potentially interesting for those cruising the API. Relate this to the "steps" property of the DestinyProgression to see which step the user is on, if you care about that. (Note that this is Content Version dependent since it refers to indexes.)',
        'format' => 'int32',
    ];

    public $progressToNextLevel = [
        'type' => 'integer',
        'description' => 'The amount of progression (i.e. "Experience") needed to reach the next level of this Progression. Jeez, progression is such an overloaded word.',
        'format' => 'int32',
    ];

    public $nextLevelAt = [
        'type' => 'integer',
        'description' => 'The total amount of progression (i.e. "Experience") needed in order to reach the next level.',
        'format' => 'int32',
    ];

    public $currentResetCount = [
        'type' => 'integer',
        'description' => 'The number of resets of this progression you\'ve executed this season, if applicable to this progression.',
        'format' => 'int32',
        'nullable' => true,
    ];

    public $seasonResets = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.DestinyProgressionResetEntry',
        ],
        'description' => 'Information about historical resets of this progression, if there is any data for it.',
    ];


}

