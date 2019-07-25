<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * HistoricalStats.DestinyLeaderboard
 */
class HistoricalStats.DestinyLeaderboard
{

    const NAME = 'Destiny.HistoricalStats.DestinyLeaderboard';

    const TYPE = 'object';

    public $statId = [
        'type' => 'string',
    ];

    public $entries = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyLeaderboardEntry',
        ],
    ];


}

