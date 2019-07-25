<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * DestinyActivity
 */
class DestinyActivity
{

    const NAME = 'Destiny.DestinyActivity';

    const TYPE = 'object';

    public $activityHash = [
        'type' => 'integer',
        'description' => 'The hash identifier of the Activity. Use this to look up the DestinyActivityDefinition of the activity.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityDefinition',
        ],
    ];

    public $isNew = [
        'type' => 'boolean',
        'description' => 'If true, then the activity should have a "new" indicator in the Director UI.',
    ];

    public $canLead = [
        'type' => 'boolean',
        'description' => 'If true, the user is allowed to lead a Fireteam into this activity.',
    ];

    public $canJoin = [
        'type' => 'boolean',
        'description' => 'If true, the user is allowed to join with another Fireteam in this activity.',
    ];

    public $isCompleted = [
        'type' => 'boolean',
        'description' => 'If true, we both have the ability to know that the user has completed this activity and they have completed it. Unfortunately, we can\'t necessarily know this for all activities. As such, this should probably only be used if you already know in advance which specific activities you wish to check.',
    ];

    public $isVisible = [
        'type' => 'boolean',
        'description' => 'If true, the user should be able to see this activity.',
    ];

    public $displayLevel = [
        'type' => 'integer',
        'description' => 'The difficulty level of the activity, if applicable.',
        'format' => 'int32',
        'nullable' => true,
    ];

    public $recommendedLight = [
        'type' => 'integer',
        'description' => 'The recommended light level for the activity, if applicable.',
        'format' => 'int32',
        'nullable' => true,
    ];

    public $difficultyTier = [
        'type' => 'integer',
        'description' => 'A DestinyActivityDifficultyTier enum value indicating the difficulty of the activity.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyActivityDifficultyTier',
        ],
        'x-enum-is-bitmask' => false,
    ];


}

