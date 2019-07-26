<?php

namespace Destiny2\Api\Objects\Destiny\HistoricalStats\DestinyPostGameCarnageReportTeamEntry;

/**
 * DestinyPostGameCarnageReportTeamEntry
 *
 * No description
 */
class DestinyPostGameCarnageReportTeamEntry
{

    const TYPE = 'object';

    public $teamId = [
        'type' => 'integer',
        'description' => 'Integer ID for the team.',
        'format' => 'int32',
    ];

    public $standing = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyHistoricalStatsValue',
            ],
        ],
        'description' => 'Team\'s standing relative to other teams.',
    ];

    public $score = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyHistoricalStatsValue',
            ],
        ],
        'description' => 'Score earned by the team',
    ];

    public $teamName = [
        'type' => 'string',
        'description' => 'Alpha or Bravo',
    ];


}

