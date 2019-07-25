<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * HistoricalStats.DestinyHistoricalStatsValuePair
 */
class HistoricalStats.DestinyHistoricalStatsValuePair
{

    const NAME = 'Destiny.HistoricalStats.DestinyHistoricalStatsValuePair';

    const TYPE = 'object';

    public $value = [
        'type' => 'number',
        'description' => 'Raw value of the statistic',
        'format' => 'double',
    ];

    public $displayValue = [
        'type' => 'string',
        'description' => 'Localized formated version of the value.',
    ];


}

