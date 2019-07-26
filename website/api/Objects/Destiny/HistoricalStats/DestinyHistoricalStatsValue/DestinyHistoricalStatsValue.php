<?php

namespace Destiny2\Api\Objects\Destiny\HistoricalStats\DestinyHistoricalStatsValue;

/**
 * DestinyHistoricalStatsValue
 *
 * No description
 */
class DestinyHistoricalStatsValue
{

    const TYPE = 'object';

    public $statId = [
        'type' => 'string',
        'description' => 'Unique ID for this stat',
    ];

    public $basic = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyHistoricalStatsValuePair',
            ],
        ],
        'description' => 'Basic stat value.',
    ];

    public $pga = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyHistoricalStatsValuePair',
            ],
        ],
        'description' => 'Per game average for the statistic, if applicable',
    ];

    public $weighted = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyHistoricalStatsValuePair',
            ],
        ],
        'description' => 'Weighted value of the stat if a weight greater than 1 has been assigned.',
    ];

    public $activityId = [
        'type' => 'integer',
        'description' => 'When a stat represents the best, most, longest, fastest or some other personal best, the actual activity ID where that personal best was established is available on this property.',
        'format' => 'int64',
        'nullable' => true,
    ];


}

