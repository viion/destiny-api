<?php

namespace Destiny2\Api\Objects\Destiny\HistoricalStats\DestinyActivityHistoryResults;

/**
 * DestinyActivityHistoryResults
 *
 * No description
 */
class DestinyActivityHistoryResults
{

    const TYPE = 'object';

    public $activities = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyHistoricalStatsPeriodGroup',
        ],
        'description' => 'List of activities, the most recent activity first.',
    ];


}

