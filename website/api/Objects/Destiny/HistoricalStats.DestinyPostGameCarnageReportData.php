<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * HistoricalStats.DestinyPostGameCarnageReportData
 */
class HistoricalStats.DestinyPostGameCarnageReportData
{

    const NAME = 'Destiny.HistoricalStats.DestinyPostGameCarnageReportData';

    const TYPE = 'object';

    public $period = [
        'type' => 'string',
        'description' => 'Date and time for the activity.',
        'format' => 'date-time',
    ];

    public $startingPhaseIndex = [
        'type' => 'integer',
        'description' => 'If this activity has "phases", this is the phase at which the activity was started.',
        'format' => 'int32',
        'nullable' => true,
    ];

    public $activityDetails = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyHistoricalStatsActivity',
            ],
        ],
        'description' => 'Details about the activity.',
    ];

    public $entries = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyPostGameCarnageReportEntry',
        ],
        'description' => 'Collection of players and their data for this activity.',
    ];

    public $teams = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyPostGameCarnageReportTeamEntry',
        ],
        'description' => 'Collection of stats for the player in this activity.',
    ];


}

