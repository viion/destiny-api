<?php

namespace Destiny2\Api\Objects\Destiny\HistoricalStats\DestinyHistoricalStatsPerCharacter;

/**
 * DestinyHistoricalStatsPerCharacter
 *
 * No description
 */
class DestinyHistoricalStatsPerCharacter
{

    const TYPE = 'object';

    public $characterId = [
        'type' => 'integer',
        'format' => 'int64',
    ];

    public $deleted = [
        'type' => 'boolean',
    ];

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

