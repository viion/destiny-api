<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * HistoricalStats.DestinyPostGameCarnageReportEntry
 */
class HistoricalStats.DestinyPostGameCarnageReportEntry
{

    const NAME = 'Destiny.HistoricalStats.DestinyPostGameCarnageReportEntry';

    const TYPE = 'object';

    public $standing = [
        'type' => 'integer',
        'description' => 'Standing of the player',
        'format' => 'int32',
    ];

    public $score = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyHistoricalStatsValue',
            ],
        ],
        'description' => 'Score of the player if available',
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
        'description' => 'ID of the player\'s character used in the activity.',
        'format' => 'int64',
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

    public $extended = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyPostGameCarnageReportExtendedData',
            ],
        ],
        'description' => 'Extended data extracted from the activity blob.',
    ];


}

