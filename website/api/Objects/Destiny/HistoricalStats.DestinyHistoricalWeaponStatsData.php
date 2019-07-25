<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * HistoricalStats.DestinyHistoricalWeaponStatsData
 */
class HistoricalStats.DestinyHistoricalWeaponStatsData
{

    const NAME = 'Destiny.HistoricalStats.DestinyHistoricalWeaponStatsData';

    const TYPE = 'object';

    public $weapons = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyHistoricalWeaponStats',
        ],
        'description' => 'List of weapons and their perspective values.',
    ];


}

