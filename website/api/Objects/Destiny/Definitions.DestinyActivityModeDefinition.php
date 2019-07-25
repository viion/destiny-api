<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyActivityModeDefinition
 */
class Definitions.DestinyActivityModeDefinition
{

    const NAME = 'Destiny.Definitions.DestinyActivityModeDefinition';

    const TYPE = 'object';

    public $displayProperties = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
    ];

    public $pgcrImage = [
        'type' => 'string',
        'description' => 'If this activity mode has a related PGCR image, this will be the path to said image.',
    ];

    public $modeType = [
        'type' => 'integer',
        'description' => 'The Enumeration value for this Activity Mode. Pass this identifier into Stats endpoints to get aggregate stats for this mode.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.HistoricalStats.Definitions.DestinyActivityModeType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $activityModeCategory = [
        'type' => 'integer',
        'description' => 'The type of play being performed in broad terms (PVP, PVE)',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyActivityModeCategory',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $isTeamBased = [
        'type' => 'boolean',
        'description' => 'If True, this mode has oppositional teams fighting against each other rather than "Free-For-All" or Co-operative modes of play.
Note that Aggregate modes are never marked as team based, even if they happen to be team based at the moment. At any time, an aggregate whose subordinates are only team based could be changed so that one or more aren\'t team based, and then this boolean won\'t make much sense (the aggregation would become "sometimes team based"). Let\'s not deal with that right now.',
    ];

    public $isAggregateMode = [
        'type' => 'boolean',
        'description' => 'If true, this mode is an aggregation of other, more specific modes rather than being a mode in itself. This includes modes that group Features/Events rather than Gameplay, such as Trials of The Nine: Trials of the Nine being an Event that is interesting to see aggregate data for, but when you play the activities within Trials of the Nine they are more specific activity modes such as Clash.',
    ];

    public $parentHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'The hash identifiers of the DestinyActivityModeDefinitions that represent all of the "parent" modes for this mode. For instance, the Nightfall Mode is also a member of AllStrikes and AllPvE.',
    ];

    public $friendlyName = [
        'type' => 'string',
        'description' => 'A Friendly identifier you can use for referring to this Activity Mode. We really only used this in our URLs, so... you know, take that for whatever it\'s worth.',
    ];

    public $activityModeMappings = [
        'type' => 'object',
        'additionalProperties' => [
            'type' => 'integer',
            'description' => 'For historical reasons, this list will have both D1 and D2-relevant Activity Modes in it. Please don\'t take this to mean that some D1-only feature is coming back!',
            'format' => 'int32',
            'x-enum-reference' => [
                '$ref' => '#/components/schemas/Destiny.HistoricalStats.Definitions.DestinyActivityModeType',
            ],
            'x-enum-is-bitmask' => false,
        ],
        'description' => 'If this exists, the mode has specific Activities (referred to by the Key) that should instead map to other Activity Modes when they are played. This was useful in D1 for Private Matches, where we wanted to have Private Matches as an activity mode while still referring to the specific mode being played.',
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];

    public $display = [
        'type' => 'boolean',
        'description' => 'If FALSE, we want to ignore this type when we\'re showing activity modes in BNet UI. It will still be returned in case 3rd parties want to use it for any purpose.',
    ];

    public $order = [
        'type' => 'integer',
        'description' => 'The relative ordering of activity modes.',
        'format' => 'int32',
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

