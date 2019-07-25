<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * HistoricalStats.DestinyHistoricalStatsWithMerged
 */
class HistoricalStats.DestinyHistoricalStatsWithMerged
{

    const NAME = 'Destiny.HistoricalStats.DestinyHistoricalStatsWithMerged';

    const TYPE = 'object';

    public $results = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyHistoricalStatsByPeriod',
        ],
        'x-dictionary-key' => [
            'type' => 'string',
        ],
    ];

    public $merged = [
        '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyHistoricalStatsByPeriod',
    ];


}

