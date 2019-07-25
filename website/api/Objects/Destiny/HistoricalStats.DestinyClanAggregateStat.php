<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * HistoricalStats.DestinyClanAggregateStat
 */
class HistoricalStats.DestinyClanAggregateStat
{

    const NAME = 'Destiny.HistoricalStats.DestinyClanAggregateStat';

    const TYPE = 'object';

    public $mode = [
        'type' => 'integer',
        'description' => 'The id of the mode of stats (allPvp, allPvE, etc)',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.HistoricalStats.Definitions.DestinyActivityModeType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $statId = [
        'type' => 'string',
        'description' => 'The id of the stat',
    ];

    public $value = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyHistoricalStatsValue',
            ],
        ],
        'description' => 'Value of the stat for this player',
    ];


}

