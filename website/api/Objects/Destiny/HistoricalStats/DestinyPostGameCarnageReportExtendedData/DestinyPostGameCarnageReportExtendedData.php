<?php

namespace Destiny2\Api\Objects\Destiny\HistoricalStats\DestinyPostGameCarnageReportExtendedData;

/**
 * DestinyPostGameCarnageReportExtendedData
 *
 * No description
 */
class DestinyPostGameCarnageReportExtendedData
{

    const TYPE = 'object';

    public $weapons = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyHistoricalWeaponStats',
        ],
        'description' => 'List of weapons and their perspective values.',
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

