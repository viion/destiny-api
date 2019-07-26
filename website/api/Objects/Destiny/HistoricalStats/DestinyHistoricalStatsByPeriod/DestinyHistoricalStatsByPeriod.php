<?php

namespace Destiny2\Api\Objects\Destiny\HistoricalStats\DestinyHistoricalStatsByPeriod;

/**
 * DestinyHistoricalStatsByPeriod
 *
 * No description
 */
class DestinyHistoricalStatsByPeriod
{

    const TYPE = 'object';

    public $allTime = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyHistoricalStatsValue',
        ],
        'x-dictionary-key' => [
            'type' => 'string',
        ],
    ];

    public $allTimeTier1 = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyHistoricalStatsValue',
        ],
        'x-dictionary-key' => [
            'type' => 'string',
        ],
    ];

    public $allTimeTier2 = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyHistoricalStatsValue',
        ],
        'x-dictionary-key' => [
            'type' => 'string',
        ],
    ];

    public $allTimeTier3 = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyHistoricalStatsValue',
        ],
        'x-dictionary-key' => [
            'type' => 'string',
        ],
    ];

    public $daily = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyHistoricalStatsPeriodGroup',
        ],
    ];

    public $monthly = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyHistoricalStatsPeriodGroup',
        ],
    ];


}

