<?php

namespace Destiny2\Api\Objects\Destiny\HistoricalStats\DestinyHistoricalStatsAccountResult;

/**
 * DestinyHistoricalStatsAccountResult
 *
 * No description
 */
class DestinyHistoricalStatsAccountResult
{

    const TYPE = 'object';

    public $mergedDeletedCharacters = [
        '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyHistoricalStatsWithMerged',
    ];

    public $mergedAllCharacters = [
        '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyHistoricalStatsWithMerged',
    ];

    public $characters = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyHistoricalStatsPerCharacter',
        ],
    ];


}

