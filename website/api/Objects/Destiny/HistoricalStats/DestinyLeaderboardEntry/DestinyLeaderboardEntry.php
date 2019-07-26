<?php

namespace Destiny2\Api\Objects\Destiny\HistoricalStats\DestinyLeaderboardEntry;

/**
 * DestinyLeaderboardEntry
 *
 * No description
 */
class DestinyLeaderboardEntry
{

    const TYPE = 'object';

    public $rank = [
        'type' => 'integer',
        'description' => 'Where this player ranks on the leaderboard. A value of 1 is the top rank.',
        'format' => 'int32',
    ];

    public $player = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyPlayer',
            ],
        ],
        'description' => 'Identity details of the player',
    ];

    public $characterId = [
        'type' => 'integer',
        'description' => 'ID of the player\'s best character for the reported stat.',
        'format' => 'int64',
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

