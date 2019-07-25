<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * HistoricalStats
 */
class HistoricalStats
{

    const NAME = 'Destiny.HistoricalStats.Definitions.PeriodType';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
    ];

    const ENUMS = [
        'None' => '0',
        'Daily' => '1',
        'AllTime' => '2',
        'Activity' => '3',
    ];


}

