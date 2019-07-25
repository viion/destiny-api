<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * HistoricalStats.DestinyAggregateActivityResults
 */
class HistoricalStats.DestinyAggregateActivityResults
{

    const NAME = 'Destiny.HistoricalStats.DestinyAggregateActivityResults';

    const TYPE = 'object';

    public $activities = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyAggregateActivityStats',
        ],
        'description' => 'List of all activities the player has participated in.',
    ];


}

