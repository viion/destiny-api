<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * HistoricalStats.DestinyHistoricalWeaponStats
 */
class HistoricalStats.DestinyHistoricalWeaponStats
{

    const NAME = 'Destiny.HistoricalStats.DestinyHistoricalWeaponStats';

    const TYPE = 'object';

    public $referenceId = [
        'type' => 'integer',
        'description' => 'The hash ID of the item definition that describes the weapon.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];

    public $values = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyHistoricalStatsValue',
        ],
        'description' => 'Collection of stats for the period.',
        'x-dictionary-key' => [
            'type' => 'string',
        ],
    ];


}

