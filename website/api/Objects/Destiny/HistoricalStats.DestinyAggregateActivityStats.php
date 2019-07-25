<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * HistoricalStats.DestinyAggregateActivityStats
 */
class HistoricalStats.DestinyAggregateActivityStats
{

    const NAME = 'Destiny.HistoricalStats.DestinyAggregateActivityStats';

    const TYPE = 'object';

    public $activityHash = [
        'type' => 'integer',
        'description' => 'Hash ID that can be looked up in the DestinyActivityTable.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityDefinition',
        ],
    ];

    public $values = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyHistoricalStatsValue',
        ],
        'description' => 'Collection of stats for the player in this activity.',
        'x-dictionary-key' => [
            'type' => 'string',
        ],
    ];


}

