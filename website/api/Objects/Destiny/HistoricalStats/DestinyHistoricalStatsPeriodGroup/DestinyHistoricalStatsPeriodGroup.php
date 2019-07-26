<?php

namespace Destiny2\Api\Objects\Destiny\HistoricalStats\DestinyHistoricalStatsPeriodGroup;

/**
 * DestinyHistoricalStatsPeriodGroup
 *
 * No description
 */
class DestinyHistoricalStatsPeriodGroup
{

    const TYPE = 'object';

    public $period = [
        'type' => 'string',
        'description' => 'Period for the group. If the stat periodType is day, then this will have a specific day. If the type is monthly, then this value will be the first day of the applicable month. This value is not set when the periodType is \'all time\'.',
        'format' => 'date-time',
    ];

    public $activityDetails = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.HistoricalStats.DestinyHistoricalStatsActivity',
            ],
        ],
        'description' => 'If the period group is for a specific activity, this property will be set.',
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

