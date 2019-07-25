<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * HistoricalStats.DestinyHistoricalStatsActivity
 */
class HistoricalStats.DestinyHistoricalStatsActivity
{

    const NAME = 'Destiny.HistoricalStats.DestinyHistoricalStatsActivity';

    const TYPE = 'object';

    public $referenceId = [
        'type' => 'integer',
        'description' => 'The unique hash identifier of the DestinyActivityDefinition that was played. If I had this to do over, it\'d be named activityHash. Too late now.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityDefinition',
        ],
    ];

    public $directorActivityHash = [
        'type' => 'integer',
        'description' => 'The unique hash identifier of the DestinyActivityDefinition that was played.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityDefinition',
        ],
    ];

    public $instanceId = [
        'type' => 'integer',
        'description' => 'The unique identifier for this *specific* match that was played.
This value can be used to get additional data about this activity such as who else was playing via the GetPostGameCarnageReport endpoint.',
        'format' => 'int64',
    ];

    public $mode = [
        'type' => 'integer',
        'description' => 'Indicates the most specific game mode of the activity that we could find.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.HistoricalStats.Definitions.DestinyActivityModeType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $modes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'description' => 'For historical reasons, this list will have both D1 and D2-relevant Activity Modes in it. Please don\'t take this to mean that some D1-only feature is coming back!',
            'format' => 'int32',
            'x-enum-reference' => [
                '$ref' => '#/components/schemas/Destiny.HistoricalStats.Definitions.DestinyActivityModeType',
            ],
            'x-enum-is-bitmask' => false,
        ],
        'description' => 'The list of all Activity Modes to which this activity applies, including aggregates. This will let you see, for example, whether the activity was both Clash and part of the Trials of the Nine event.',
    ];

    public $isPrivate = [
        'type' => 'boolean',
        'description' => 'Whether or not the match was a private match. There\'s no private matches in Destiny 2... yet... DUN DUN DUNNNN',
    ];

    public $membershipType = [
        'type' => 'integer',
        'description' => 'The Membership Type indicating the platform on which this match was played.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/BungieMembershipType',
        ],
        'x-enum-is-bitmask' => false,
    ];


}

